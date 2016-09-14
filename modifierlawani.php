<?php
session_start();

if (!empty($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
} else {
    header('location:authentification.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head id "head">
          <meta http-equiv="Content-Type" content="text/html;
          charset=utf-8" />
        <link rel="stylesheet" href="lawaniets.css" />
        <title >
            Lawani ETS
        </title>
        <div style="display:flex"; id="menu">
            <legend>  
                LAWANI ETS
            </legend>
            <div id="reseau">
                <a>
                    <img src="facebook.png" class="res"/>
                </a>

                <a>
                    <img src="twitter.jpg" class="res"/>
                </a>				
                <a>
                    <img src="mail.png"class="res"/>
                </a>

                <a href="deconnexion.php"> DECONNEXION </a>
                <a>contacter nous pour tout renseignement</a>
            </div>
        </div>
        <hr/>
    </head>

    <body >
         <p>Selectionner un numero de série :</p>
        
       
	


    </body>
    <hr/>
    <footer style="background:#111;color:#fff;padding:10px;text-align:center"style="color:#fff">
        Mentions légales</a> - 183 avenue du travail - 92024 boite postal - Tél. +229 85258525 - Fax 89652365 
    </footer>

</html>
