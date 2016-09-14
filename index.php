<?php
session_start();
if (!empty($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
    echo $iduser;
}
 else {
header('location:authentification.php');    
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head >
        <meta http-equiv="Content-Type" content="text/html;
              charset=utf-8" />

        <link rel="stylesheet" href="accueil.css" />
        <title > accueil lawani</title>

    </head>
    <body>
        <div id="logo">
            <img src="lawani2.jpg" alt="Logo lawani" />
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="accueil.php">ACCUEIL</a></li>
                    <li><a href="authentification.php">CONNECTION</a></li>
                    <li><a href="ajoutuser.php">INSCRIPTION</a></li>
              
                </ul>
            </nav>
        </div>
    </body>
    <footer>
    </footer>