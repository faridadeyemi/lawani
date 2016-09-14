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
    <head >
     <link rel="stylesheet" type="text/css" href="style.css">
       <meta http-equiv="Content-Type" content="text/html;
   charset=utf-8" " />
        <title>authentification</title>   
	    </head>
	
		<body>
                    <?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=databaselaw', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$req = $bdd->query('SELECT * FROM lawani');

While ($donnee = $req->fetch()) {

    echo "numero serie: ".$donnee['numserie'] . "Reference" . $donnee['ref']."marque: ".$donnee['marque'] ."capacité du disque dur: ".$donnee['capdisk']."couleur: ".$donnee['couleur'] ."processeur: ".$donnee['processeur'] ."autonomie: ".$donnee['autonomie'] ."taille: ".$donnee['taille'] ."prix: ".$donnee['prix']."<br/>";
   
}
?>
                    
		</body>
		</html>

