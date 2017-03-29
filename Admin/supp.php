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
<link rel="icon" href="../images/img02.png" />

</head>
<body>
<?php include("../header.php"); ?>

<div id="page">
		
		<div id="admin">
			<h3>suppression d'un utilisateur</h3><br>
			<form action="" method="post">
				<select name="stuff">
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
				$nom = $_POST['stuff'];

			?>
				</select>
				<input type="submit" name="supp" value="Supprimer" id="supp" onclick="return confirm('êtes-vous sûr de vouloir supprimer cet utilisateur ?');">	
			</form>

		</div>
		<div id="verf">
		
		<?php 
		if (isset($_POST['supp'])) {
			$nom = $_POST['stuff'];
			$req="DELETE FROM utilisateurs WHERE userNom ='$nom'";
			$res= $bdd->query($req);	
			header("Location: done.php");
		
		 }?>
	
</div>
	</body>
	</html>	