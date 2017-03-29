<?php
session_start();

	if(!isset($_SESSION['USR']))
{ //if login in session is not set
    header("Location:../index.php");
}
error_reporting(0);

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
			<h3>Modifier les permissions pour un utilisateur choisi</h3><br>
			<form action="" method="post">
				<select name="modf">
					<option>-------</option>
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
					<option>  <?php echo ($item['userNom']);?></option>	
				<?php	
					}
				}
			?>
				</select>
				
		</div>
		<div id="verf">					
						<input name="ajout" type="checkbox">Créer des nouveaux utilisateurs <br>
						<input name="supp" type="checkbox">supprimer des utilisateurs<br>
						<input name="see" type="checkbox">Voir la liste des utilisateurs<br>
						<input name="edit" type="checkbox">modifier les permissions pour les utilisateurs<br>
						<input type="submit" name="ok" value="Sauvgarder" id="supp">
			</form>
					<?php
				
				if (isset($_POST['ok'])) 
				{
					$usr = $_POST['modf'];
					if (isset($_POST['ajout'])) 
					{
						$ajout="INSERT INTO ajout (nom) VALUES ('$usr')";
						$res= $bdd ->query($ajout);	
					}
					if (isset($_POST['supp'])) 
					{
						$supp="INSERT INTO supp (nom) VALUES ('$usr')";
						$res= $bdd ->query($supp);	
					}
					if (isset($_POST['see'])) 
					{
						$see="INSERT INTO see (nom) VALUES ('$usr')";
						$res= $bdd ->query($see);	
					}
					if (isset($_POST['edit'])) 
					{
						$modf="INSERT INTO modf (nom) VALUES ('$usr')";
						$res= $bdd ->query($modf);	
					}
				}
		
		 ?>
		</div>
</div>
	</body>
	</html>	