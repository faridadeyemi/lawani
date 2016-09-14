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
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=databaselaw', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $req = $bdd->prepare('SELECT* FROM lawani where numserie=?');
        $req->execute(array($_POST['numserie']));
        $donnees = $req->fetch();
        ?>

        <center><form action="suppr.php"  method="post">
                <p>
                    Numéro de série : <input type="text" name="numserie" value = "<?php echo $donnees['numserie']; ?>"/><br/><br/>
                    Référence :<input type="text" name="ref" value = "<?php echo $donnees['ref']; ?>"/><br/><br/>
                    Marque : <input type="text" name="marque" value = "<?php echo $donnees['marque']; ?>" /><br/><br/>
                    Capacité du disque dur : <input type="text" name="capdisk" value = "<?php echo $donnees['capdisk']; ?>"/><br/><br/>
                    Couleur : <input type="text" name="couleur" value = "<?php echo $donnees['couleur']; ?>" /><br/><br/>
                    Processeur :<input type="text" name="processeur" value = "<?php echo $donnees['processeur']; ?>" /><br/><br/>
                    Autonomie : <input type="text" name="autonomie" value = "<?php echo $donnees['autonomie']; ?>"/><br/><br/>
                    Taille de l'ecan : <input type="text" name="taille" value = "<?php echo $donnees['taille']; ?>" /><br/><br/>
                    Prix unitaire : <input type="text" name="prix" value = "<?php echo $donnees['prix']; ?>" /><br/><br/>
                    Quantité en stock : <input type="text" name="stock" value = "<?php echo $donnees['stock']; ?>" /><br/><br/>

                    <input type="submit" value="Supprimer"  />
                </p>
            </form>


<?php
if
 (isset($_POST['numserie']) AND isset($_POST['ref']) AND isset($_POST['marque']) AND isset($_POST['capdisk'])AND isset($_POST['couleur']) AND isset($_POST['processeur']) AND isset($_POST['autonomie']) AND isset($_POST['taille']) AND isset($_POST['prix']) AND isset($_POST['stock'])) {

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=databaselaw', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->prepare('DELETE from Lawani where numserie=:numserie');
        $req->execute(array(
        'numserie' => $_POST['numserie']
            ));

    echo 'suppression valide';
} else {
    echo'echec de la suppression';
}
?>  
            </head>
            </htlm>
