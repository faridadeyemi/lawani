<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head >
     <link rel="stylesheet" type="text/css" href="style.css">
       <meta http-equiv="Content-Type" content="text/html;
   charset=utf-8" " />
       </head >
     <?php  
if (!empty($_SESSION['iduser']))
{
	$iduser=$_SESSION['iduser'];
	

}
 if
 	(isset($_POST['numserie']) AND isset($_POST['ref']) AND isset($_POST['marque']) AND isset($_POST['capdisk'])AND isset($_POST['couleur']) AND isset($_POST['processeur']) AND isset($_POST['autonomie']) AND isset($_POST['taille']) AND isset($_POST['prix']) AND isset($_POST['stock']))

        {
	try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=databaselaw', 'root', '');
	}
	catch(Exception $e)
	{
	die('Erreur : '.$e->getMessage());
	}
	$req = $bdd->prepare('INSERT INTO  Lawani(numserie,ref,marque,capdisk,couleur,processeur,autonomie,taille,prix,stock,iduser) VALUES(:numserie,:ref,:marque,:capdisk,:couleur,:processeur,:autonomie,:taille,:prix,:stock,:iduser)');
	$req->execute(array(
		'numserie' =>$_POST['numserie'], 
		'ref' =>$_POST['ref'],
		'marque' => $_POST['marque'],
		'capdisk' => $_POST['capdisk'], 
		'couleur' =>$_POST['couleur'], 
		'processeur' => $_POST['processeur'],
		 'autonomie' =>$_POST['autonomie'],
		 'taille' =>$_POST['taille'],
		 'prix' =>$_POST['prix'],
		 'stock' =>$_POST['stock'],
		 'iduser'=>$iduser
		));

	echo "Enregistrement éffectué avec succès!!!";

?>

	<a href="lawaniets.php">Précédent!</a>
	<?php
}
else
{
	echo "echec de l'enregistrement </Br>";
	?>

	<a href="lawaniets.php">Veuillez réessayer!</a>
	<?php
}
?>
</html >
?>