


<p>Pour ajouter un nouvel utilisateur remplissez ces champs </p>
        	<form  method ="POST" >
        		<fieldset><legend>USER</legend>
        		<table>

                <tr><td>Iduser:  </td>    <td><input type ="text" name = "iduser" required /> </td></tr>
        		<tr><td>Nom:  </td>    <td><input type ="text" name = "nomuser" required /> </td></tr>
                <tr><td>Prenom:</td>   <td><input type ="text" name = "prenomuser" required /> </td></tr>
        		<tr><td>Type:</td> <td><input type="radio" name ="type_user" value ="user"/> <label for="user">User</label></td></tr>
                <tr><td></td> <td > <input type="radio" name ="type_user"value="admin" /> <label for="admin">Administrateur</label></td></tr>
                <tr><td> Tapez le mot de passe: </td><td><input type ="password" name="mot" required></td></tr>
                 <tr><td> Retapez le mot de passe: </td><td><input type ="password" name="mpot1" required></td></tr>
            </table>
        		<p><input type = "submit" value="Envoyer"/> <input type="reset" value="Annuler" /></p>
        		</fieldset>
        	</form>	

           
    
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=databaselaw', 'root', '');
    }
    catch(Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
    $req = $bdd->prepare('INSERT INTO user (iduser,nomuser, prenomuser, type, mot) VALUES(:iduser, :nomuser, :prenomuser, :type, :mot)');
    $req->execute(array(
        'iduser' =>$_POST['iduser'],
        'nomuser' =>$_POST['nomuser'],
        'prenomuser' => $_POST['prenomuser'],
         'type' => $_POST['typeuser'], 
          'mot' =>$mot_hache, 
        ));

    echo "Enregistrement éffectué avec succès!!!";

}
    else 
    {
        echo "Les mots de passe ne correspondent pas...veuillez réessayer </br>"
        ?>
        <h4>Réessayer</h4>
        <?php
    }
}


?>
    