<!DOCTYPE html>
<html>

<head>
    <title>cherche</title>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--  CDN jQuery -->
    <script src="jquery-3.4.1.min.js"></script>



    <title>liste</title>
</head>

<body>
    <?php
    require_once 'Autoloader.php';
    Autoloader::register();
    include 'header.php';
 
$list = new Etudiantservice();
//$liste= new NonBoursier();
//$list->listernonboursier;

echo'<table>
    <tbody>
        <tr>
        <th>MATRICULE</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>TEL</th>
        <th>MAIL</th>
        <th>DATE DE NAISSANCE</th>
        <th>ADRESSE</th>
        </tr>';
        foreach ($list->listernonboursier()  as  $value) {
            echo '
            <tr>
            <td>'.$value->matricule.'</td>
            <td>'.$value->nom.'</td>
            <td>'.$value->prenom.'</td>
            <td>'.$value->tel.'</td>
            <td>'.$value->mail.'</td>
            <td>'.$value->date_naissance.'</td>
            <td>'.$value->adresse.'</td>
           
        </tr>';
        }
?>
</tbody>
</table>
<script src="script.js"></script>

    

</body>

</html>