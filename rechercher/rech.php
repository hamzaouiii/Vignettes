<?php 
session_start();
				//la connection
				$host = "localhost";
				$user = "root";
				$bd = "admin";  
				$bdd= new PDO("mysql:host=".$host.";dbname=".$bd, $user,"");	
				
				//importer les donnes de la barre de recherche
				$rech = $_POST['s'];

				//les requetes
				$qry="SELECT * FROM reparation_cmd WHERE fonctionnaire_repar='$rech'";				
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
         	
          <?php
				//l'execution
				$resul = $bdd->query($qry);
				if(!empty($resul))
				{
					foreach ($resul as $item) 
					{
				?>	<ul>					
					<li>  <?php echo ($item['id_cmd']);?></li>	
					<li>  <?php echo ($item['date_facture']);?></li>	
					<li>  <?php echo ($item['matricule']);?></li>	
					<li>  <?php echo ($item['kilometrage']);?></li>	
					<li>  <?php echo ($item['kilometrage']);?></li>	
					<li>  <?php echo ($item['fournisseur']);?></li>	
					<li>  <?php echo ($item['num_bon']);?></li>	
					<li>  <?php echo ($item['cout']);?></li>	
					</ul>
				<?php	
					}
				}
				else
				{
					?>
				<h1>il y pas des resultats</h1>
				<?php
				}
				?>
					        </form>
</div> 
</body>
</html>

					
				
			
				