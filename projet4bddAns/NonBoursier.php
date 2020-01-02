<?php
 require_once 'Autoloader.php';
 Autoloader::register();

    class NonBoursier extends Etudiant{
        protected $adresse;
        public function __construct($nom="", $prenom="",$tel=0,$mail="", $date_naissance="",$adresse=""){
            parent::__construct($nom,$prenom,$tel,$mail,$date_naissance);
            $this->adresse = $adresse;
        }
       
       
       public function getAdresse(){
           return $this->adresse;
       }
        public function infos(){
            return parent::infos().", ".$this->adresse ;  
        }
    }
?>