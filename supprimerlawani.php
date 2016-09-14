<?php
	session_start();

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
    <head >
     <link rel="stylesheet" type="text/css" href="style.css">
       <meta http-equiv="Content-Type" content="text/html;
   charset=utf-8" " />
        <title>authentification</title>   
	    </head>
	
		<body>
                    </body>
		</html>

