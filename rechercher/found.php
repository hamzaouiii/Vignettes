<?php 
session_start();
				//la connection
				$host = "localhost";
				$user = "root";
				$bd = "admin";  
				$bdd= new PDO("mysql:host=".$host.";dbname=".$bd, $user,"");	
				?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Recherche | Gestion des Vignettes </title>
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="icon" href="../images/img02.png" />

</head>
<body>
<?php include("../header.php") ?>

<div id="page">
		<form id="rech" method="post" action="rech.php">
         	
         	<h2>1 commande a été trouvé</h2>

          <ul>
          	<li>date de facteur : <strong> 2014-07-18</strong></li>
          	<li>matricule :  <strong>M171654613</strong></li>
          	<li>kilometrage :<strong> 9856</strong></li>
          	<li>numero de facture facteur :<strong> 685</strong></li>
          	<li>Fournaisseur :<strong>Zaid</strong></li>
          	<li>Numero de bon :<strong> 654</strong></li>
          	<li>cout : <strong>748 DH</strong></li>
          </ul>
					        </form>
</div> 
</body>
</html>

					
				
			
				