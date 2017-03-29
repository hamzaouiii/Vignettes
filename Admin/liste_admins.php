<?php
session_start();

	if(!isset($_SESSION['USR']))
{ //if login in session is not set
    header("Location:../index.php");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des Vignettes </title>
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php include("../header.php"); ?>

<div id="page">
		
		<div id="admin">
			<div >
			<table>
				<thead>
				<tr>
							<th>Nom :</th>
							<th>Prenom :</th>		
							<th>Position :</th>
							<th>Adresse :</th> 
							<th>Date de naissence :</th>
							<th>Email :</th>
				</tr>
				</thead>
				<tbody>
			<?php
			$host = "localhost";
				$user = "root";
				$bd = "admin";  
				$bdd= new PDO("mysql:host=".$host.";dbname=".$bd, $user,"");	
				$sql = "SELECT * FROM utilisateurs";
				$resultat = $bdd->query($sql);
				if($resultat->rowCount() > 0)
				{
					foreach ($resultat as $item) 
					{
				?>
					<TR>
						
					<td> <?php echo ($item['userNom']." ");?></td>
					<td> <?php echo ($item['userPrenom']." ");?></td>
					<td> <?php echo ($item['userPosition']." ");?></td>
					<td> <?php echo ($item['userAdresse']." ");?></td>
					<td> <?php echo ($item['userDate']." ");?></td>
					<td> <?php echo ($item['userEmail']." ");?></td>
					</TR>
				<?php	
					}
				}
			?>
			</tbody>
			</table>
			</div>
		</div>
	</div>
	</body>
	</html>	