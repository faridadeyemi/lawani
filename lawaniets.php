<?php
	session_start();
echo $_SESSION['iduser'];
if (!empty($_SESSION['iduser']))
{
	$iduser=$_SESSION['iduser'];
}
else{
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
		
	
	<center><form action="lawanitest.php"  method="post">
<p>
   Numéro de série : <input type="text" name="numserie"/><br/><br/>
   Référence :<input type="text" name="ref" /><br/><br/>
   Marque : <input type="text" name="marque" /><br/><br/>
   Capacité du disque dur : <input type="text" name="capdisk" /><br/><br/>
   Couleur : <input type="text" name="couleur"  /><br/><br/>
   Processeur :<input type="text" name="processeur" /><br/><br/>
   Autonomie : <input type="text" name="autonomie" /><br/><br/>
   Taille de l'ecan : <input type="text" name="taille" /><br/><br/>
   Prix unitaire : <input type="text" name="prix" /><br/><br/>
   Quantité en stock : <input type="text" name="stock" /><br/><br/>

    <input type="submit" value="Enregistrer"  />
</p>
</form>
	 

</body>
<hr/>
<footer style="background:#111;color:#fff;padding:10px;text-align:center"style="color:#fff">
Mentions légales</a> - 183 avenue du travail - 92024 boite postal - Tél. +229 85258525 - Fax 89652365 
</footer>

</html>