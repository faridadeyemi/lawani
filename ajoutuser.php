
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head >
     <link rel="stylesheet" type="text/css" href="style.css">
       <meta http-equiv="Content-Type" content="text/html;
   charset=utf-8" " />
        <title>authentification</title>   
	    </head>
	
		<body>

<p>Pour ajouter un nouvel utilisateur remplissez ces champs </p>
        	<form  method ="POST" >
        		<fieldset><legend>USER</legend>
        		<table>

                <!--tr><td>Iduser:  </td>    <td><input type ="text" name = "iduser" required /> </td></tr-->
        		<tr><td>Nom:  </td>    <td><input type ="text" name = "nomuser" required /> </td></tr>
                <tr><td>Prenom:</td>   <td><input type ="text" name = "prenomuser" required /> </td></tr>
        		<tr><td>Type:</td> <td><input type="radio" name ="type_user" value ="user"/> <label for="user">User</label></td></tr>
                <tr><td></td> <td > <input type="radio" name ="type_user"value="admin" /> <label for="admin">Administrateur</label></td></tr>
                <tr><td> Tapez le mot de passe: </td><td><input type ="password" name="mot" required></td></tr>
                 <tr><td> Retapez le mot de passe: </td><td><input type ="password" name="mot1" required></td></tr>
            </table>
        		<p><input type = "submit" value="Envoyer" name="envoyer"/> <input type="reset" value="Annuler" /></p>
        		</fieldset>
        	</form>	

            <?php 
            if (isset($_POST['envoyer']))
            {
                $nom=$_POST['nomuser'];
                $prenom=$_POST['prenomuser'];
                $type=$_POST['type_user'];
                $mot=$_POST['mot'];
                $mot1=$_POST['mot1'];

               

                 try
               {
                 $bdd = new PDO('mysql:host=localhost;dbname=databaselaw', 'root', '');
              }
                 catch(Exception $e)
                 {
                 die('Erreur : '.$e->getMessage());
                 }
                 if(($mot==$mot1) and !empty($nom) and !empty($prenom) and !empty($type) and !empty($mot))
                 {
                 $req = $bdd->prepare('INSERT INTO user (nomuser, prenomuser, type_user, mot) VALUES(:nomuser, :prenomuser, :type_user, :mot)');
                 
                 $req ->execute(array(
                    'nomuser' =>$nom,
                    'prenomuser' =>$prenom,
                    'type_user' =>$type,
                    'mot' =>md5($mot), ));
                 if ($req=true)
                 {
                    echo 'enregistrement effectuer avec succes';

                    header('location:authentification.php');
                 } 
                 else
                 {
                    echo'veuillez verifier les informations';
                 }



                 } 
             else
             {
                    echo 'veuillez entrer tout les champs ou verifier que les mots de passe correspondent';
             }


            }
            /*
if (isset($_POST['nomuser']) AND isset($_POST['prenomuser']) AND isset($_POST['type_user']) AND isset($_POST['mot']) AND isset($_POST['mot1']))
{
    if ($_POST['mot'] == $_POST['mot1'])
    {
        $mot_hache = sha1($_POST['mot']);
    
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=databaselaw', 'root', '');
    }
    catch(Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
    $req = $bdd->prepare('INSERT INTO user (iduser,nomuser, prenomuser, type, pass) VALUES(:iduser,:nomuser, :prenomuser, :type, :pass)');
    $req->execute(array(
        'id_user'=>$_POST['iduser'],
        'nom_user' =>$_POST['nomuser'],
        'prenom_user' => $_POST['prenomuser'],
         'type' => $_POST['type_user'], 
          'mot' =>$mot_hache, 
        ));

    echo "Enregistrement éffectué avec succès!!!";

}
    else 
    {
        echo "Les mots de passe ne correspondent pas...veuillez réessayer </br>";
        ?>
        <h4>Réessayer</h4>
        
    }
}*/

?>
</body>
		</html>


    