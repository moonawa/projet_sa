<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pages/header.css">
    <title>Index</title>
</head>
<body >


    <?php
    include 'header.php';
    echo'<img src="sac.jpg" alt="une sac">';
    class Welcome{
        public function hi(){
            echo '<h1> 
                    <strong>
                        <center>
                           SONATEL ACADEMY school!!!!
                        </center>
                    </strong>
                  </h1>';
        }
    }
        $etu= new Welcome;  
        $etu->hi();
    ?>
</body>
</html>