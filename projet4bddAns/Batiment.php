<!DOCTYPE html>
<html>

<head>
    <title>AJOUT</title>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--  CDN jQuery -->
    <script src="jquery-3.4.1.min.js"></script>
    
</head>

<body>
    <?php
    require_once 'Autoloader.php';
    Autoloader::register();
    include 'header.php';
    ?>
<h3 align="center">AJOUTER un batiment</h3>


<?php
    class Batiment{
        private $idbat;
        private $nombat;

        public function setidbat($idbat){
            $this->idbat=$idbat;
        }
        public function getIdbat(){
            return $this->idbat;
        }
        public function setnombat($nombat){
            $this->nombat = $nombat;
        }
        public function getNombat(){
            return $this->nombat;
        }

    }


?>

<script src="script.js"></script>

    

</body>

</html>