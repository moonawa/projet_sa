<?php
   // require_once 'Autoloader.php';
   // Autoloader::register();

    class Etubour extends Etudiant{
        protected $id_type;

        public function __construct($nom="", $prenom="",$tel=0,$mail="", $date_naissance=""  ,$id_type=0){
            parent::__construct($nom,$prenom,$tel,$mail,$date_naissance);
            $this->id_type = $id_type;
        }
        public function getType(){
            return $this->id_type;
        }
         public function infos(){
            return parent::infos().", ".$this->id_type ;  
        } 
       
    }
   
?>
 