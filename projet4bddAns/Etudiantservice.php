<?php
 require_once 'Autoloader.php';
 Autoloader::register();
  
    class Etudiantservice{
    
        protected $pdo;
        //connexion a la base de donéé
        public function __construct($login="moonawa", $pass="Awa@771301409", $serveur="localhost", $db="bourse"){
          try{
            $this->pdo = new PDO("mysql:host=$serveur; dbname=$db", $login, $pass);
            $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          catch(PDOException $e){
            echo 'Echec de la connexion :' .$e->getMessage();
          }
        }
        //bienvenu
        
        
        //add 
        public function add(Etudiant $etudiant)
        {
            try{              
                $nom=$etudiant->getNom();
                $prenom=$etudiant->getPrenom();
                $tel=$etudiant->getTel();
                $mail=$etudiant->getMail ();
                $date_naissance=$etudiant->getDatenaissance();
                $q = $this->pdo->prepare('INSERT INTO etudiant(nom, prenom, tel, mail, date_naissance)
                VALUES(:nom, :prenom, :tel, :mail, :date_naissance)');
                $q->bindParam(':nom', $nom);
                $q->bindParam(':prenom', $prenom);
                $q->bindParam(':tel', $tel);
                $q->bindParam(':mail', $mail);
                $q->bindParam(':date_naissance', $date_naissance);
                $q->execute();
                //var_dump($ins);
                //if($ins)
                //echo 'insertion avec succes';
                //else
                //echo 'erreur';
            }
            catch(PDOException $e){
                echo 'Echec de la connexion :' .$e->getMessage();
            }
            $rep =$this->pdo->query("SELECT MAX(matricule) as id FROM etudiant");

            while($valDI = $rep->fetch()){
                $id= $valDI["id"];
                break;
            }
           
            if (get_class($etudiant)=='NonBoursier') {
                $adresse=$etudiant->getAdresse();
                $q = $this->pdo->prepare('INSERT INTO nonboursier(matricule, adresse)
                VALUES (:matricule, :adresse)');
                $q->bindParam(':matricule', $id);
                $q->bindParam(':adresse', $adresse);
                $q->execute();
            }

           /* else if(get_class($etudiant)=='Etubour'){
                $id_type=$etudiant->getType();
    
                $q = $this->pdo->prepare('INSERT INTO Boursier(matricule, id_type)
                VALUES (:matricule, :id_type)');
                $q->bindParam(':matricule', $id);
                $q->bindParam(':id_type', $id_type);
                $q->execute();
            }else if(get_class($etudiant)=='Loge'){
                    $id_chambre=$etudiant->getId_chambre();
                    $q = $this->pdo->prepare('INSERT INTO loge (matricule, id_chambre)  
                    VALUES (:matricule, :id_chambre)');
                    $q->bindParam(':matricule', $id);
                    $q->bindParam(':id_chambre', $id_chambre);
                    $q->execute();
                    }*/

                    else if (get_class($etudiant)=='Etubour' || get_class($etudiant)=='Loge' ) {
                        //  echo 'ok';
                                  $id_type=$etudiant->get_Type();
                                  $prepare=$this->pdo->prepare("insert into Boursier (matricule, id_type)
                                  VALUES (:matricule, :id_type)");
                                   $prepare->bindParam(':matricule', $id);
                                   $prepare->bindParam(':id_type', $id_type);
                                  $prepare->execute();
                  
                                  if(get_class($etudiant)=='Loge'){
                                      $id_chambre=$etudiant->getId_chambre();
                                      $prepare=$this->pdo->prepare("insert into loge (matricule, id_chambre)
                                      VALUES (:matricule, :id_chambre)");
                                       $prepare->bindParam(':matricule', $id);
                                       $prepare->bindParam(':id_chambre', $id_chambre);
                                      $prepare->execute();
                                  }
                              }

            
        }

       
        public function find($val){
            try{
               $requete= $this->pdo-> prepare("SELECT * FROM etudiant WHERE matricule = '$val'");
               $requete->execute();
               return $requete->fetchAll(PDO::FETCH_OBJ);
    
              }
              catch(PDOException $e){
                echo 'requete incorrect :' .$e->getMessage();
            }
            }
            public function findbat($val){
              try{
                 $requete= $this->pdo-> prepare("SELECT * FROM batiment WHERE idbat = '$val'");
                 $requete->execute();
                 return $requete->fetchAll(PDO::FETCH_OBJ);
      
                }
                catch(PDOException $e){
                  echo 'requete incorrect :' .$e->getMessage();
              }
              }

            public function findb($val){
              try{
                 $requete= $this->pdo-> prepare("SELECT * FROM Boursier WHERE matricule = '$val'");
                 $requete->execute();
                 return $requete->fetchAll(PDO::FETCH_OBJ);
      
                }
                catch(PDOException $e){
                  echo 'requete incorrect :' .$e->getMessage();
              }
              }
    
    
        //findAll
        public function findAll($table){
            try{
               $requete= $this->pdo-> prepare("SELECT * FROM $table ");
               $requete->execute();
               return $requete->fetchAll(PDO::FETCH_OBJ);
    
              }
              catch(PDOException $e){
                echo 'requete incorrect :' .$e->getMessage();
            }
        
        }

        //checkStatut
        public function checkStatut($table){

        }
        

        //lister etudiant
        public function listernonboursier(){
        try{
          //  $batiment=$batimentClass->getNombat();
            
            $prepare=$this->pdo->prepare("SELECT etudiant.matricule as matricule, etudiant.nom as nom,
             etudiant.prenom as prenom ,etudiant.tel as tel , etudiant.mail as mail ,
             etudiant.date_naissance as date_naissance, nonboursier.adresse as adresse
            FROM etudiant ,nonboursier
           WHERE etudiant.matricule = nonboursier.matricule");
            
           $prepare->execute();
            return $prepare->fetchAll(PDO::FETCH_OBJ);


           return $prepare;

                }
                catch(PDOException $e){
                    throw new Exception ($e->getMessage());
                }
    }


    public function listerboursier(){
        try{
          //  $batiment=$batimentClass->getNombat();
            
            $prepare=$this->pdo->prepare("SELECT etudiant.matricule as matricule, etudiant.nom as nom ,
             etudiant.prenom as prenom ,etudiant.tel as tel , etudiant.mail as mail,
             etudiant.date_naissance as date_naissance, Type_Bourse.type_bourse as type_bourse,
              Type_Bourse.montant as montant
            FROM `etudiant`,`Type_Bourse`,`Boursier`
           WHERE etudiant.matricule = Boursier.matricule
           AND Type_Bourse.id_type=Boursier.id_type");
            
           $prepare->execute();
            return $prepare->fetchAll(PDO::FETCH_OBJ);


           return $prepare;

                }
                catch(PDOException $e){
                    throw new Exception ($e->getMessage());
                }
    }

    public function listerloger(){
        try{
          //  $batiment=$batimentClass->getNombat();
            
            $prepare=$this->pdo->prepare("SELECT  etudiant.matricule as matricule,
             etudiant.nom as nom, etudiant.prenom as prenom,
             etudiant.tel as tel , etudiant.mail as mail,
             etudiant.date_naissance as date_naissance, 
             Type_Bourse.type_bourse  as type_bourse,
             Type_Bourse.montant as montant, chambre.id_chambre as chambre, batiment.nombat as batiment
            FROM `etudiant`, `Type_Bourse`, `Boursier`,`loge`, `chambre`, `batiment`
           WHERE etudiant.matricule = Boursier.matricule
           AND loge.matricule = Boursier.matricule
           AND Type_Bourse.id_type = Boursier.id_type
           AND loge.id_chambre = chambre.id_chambre
           AND chambre.idbat = batiment.idbat");
            
           $prepare->execute();
            return $prepare->fetchAll(PDO::FETCH_OBJ);


           return $prepare;

                }
                catch(PDOException $e){
                    throw new Exception ($e->getMessage());
                }
    }




}



    
    
    
    
?>

