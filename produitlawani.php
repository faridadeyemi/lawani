
<?php
session_start();
if (!empty($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
   
}
 else {
header('location:authentification.php');    
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head id "head">
          <meta http-equiv="Content-Type" content="text/html;
          charset=utf-8" />
        <link rel="stylesheet" href="accueil.css" />
        <title >
            Lawani ETS
        </title>
        <div style="display:flex"; id="reseau">
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
        <body>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="listelawani.php">liste des produits</a></li>
                        <li><a href="lawaniets.php">enregistrer un produit</a></li>
                        <li><a href="modifierlawani.php">modifier un produit</a></li>
                        <li><a href="supprimerlawani.php">supprimer un produit</a></li>
                    </ul>
                </nav>
            </div>

        </body>

        <footer style="background:#111;color:#fff;padding:10px;text-align:center"style="color:#fff">
            Mentions légales</a> - 183 avenue du travail - 92024 boite postal - Tél. +229 85258525 - Fax 89652365 
        </footer>