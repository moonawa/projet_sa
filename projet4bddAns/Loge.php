<?php
 require_once 'Autoloader.php';
Autoloader::register(); 
    class Loge extends Etubour{
        protected $id_chambre;

        public function __construct($nom="", $prenom="",$tel=0,$mail="", $date_naissance="" , $id_type=0, $id_chambre=0){
        parent::__construct($nom,$prenom,$tel,$mail,$date_naissance, $id_type);
            $this->id_chambre = $id_chambre;
        }
        public function getId_chambre(){
            return $this->id_chambre;
        }
        public function infos(){
            return parent::infos().", ".$this->id_chambre ;  
        }
    }
?>