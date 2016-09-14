<?php
session_start()
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head >
     <link rel="stylesheet" type="text/css" href="style.css">
       <meta http-equiv="Content-Type" content="text/html;
   charset=utf-8"  />
        <title>authentification</title>   
	    </head>
	
		<body>
		
            
			<h1>AUTHENTIFICATION</h1>
				<form  method ="POST" >
        		<fieldset><legend>Authentifiez vous</legend>
        		<table>
        		<tr><td>Nom:  </td>    <td><input type ="text" name = "nomuser" required /> </td></tr>
                <tr><td>Prenom:</td>   <td><input type ="text" name = "prenomuser" required /> </td></tr>
                <tr><td> Tapez le mot de passe: </td><td><input type ="password" name="mot" required></td></tr>
            </table>
        		<p><input type = "submit" value="Envoyer"/> <input type="reset" value="Annuler" /></p>
        		</fieldset>
        	</form>	
        	           <?php
        	
if (isset($_POST['nomuser']) AND isset($_POST['prenomuser']) AND isset($_POST['mot']) )
{
	
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=databaselaw', 'root', '');
    }
    catch(Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
    $req = $bdd->query('SELECT * FROM user');
   
    While($donnee = $req->fetch() )
    {
    	if ($_POST['nomuser']==$donnee['nomuser'] AND $_POST['prenomuser']==$donnee['prenomuser']  AND md5($_POST['mot'])==$donnee['mot']  )
        	{
                $_SESSION['iduser']=$donnee['iduser'];
           header('location:produitlawani.php') ;
         
           	}
   }


}	
else
{
    echo'vous navez pas acces';
}
?>      
    </body>
    </html>

 