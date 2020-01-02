<!DOCTYPE html>
<html>

<head>
    <title>find</title>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--  CDN jQuery -->
    <script src="jquery-3.4.1.min.js"></script>



    <title>find</title>
</head>

<body>
    <?php
    require_once 'Autoloader.php';
    Autoloader::register();
    include 'header.php';
    ?>


<div class="row">
        <form class="col s6" method="post">
            <div class="row">
                <div class="col s6"></div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" name="nom" class="validate">
                    <label for="icon_prefix"> idbat</label>
                </div>
            </div>
            <br>
                    <label>
                        <input type="submit" value="CHERCHER" class="waves-effect waves-light btn" name="valider">
                    </label>
        </form> 
</div>
<?php
$find = new Etudiantservice();


if(isset($_POST['valider'])){                
$nom = $_POST['nom'];
echo'<table>
    <tbody>
        <tr>
        <th>n bat</th>
        <th>NOM batiment</th>
        </tr>';
    
foreach($find->findbat($nom) as $list)
echo '
 <tr>
    <td>'.$list->idbat.'</td>
    <td>'.$list->nombat.'</td>         
</tr>';
}
?>

</tbody>
</table>

<script src="script.js"></script>

    

</body>

</html>
