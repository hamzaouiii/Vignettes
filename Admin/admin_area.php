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
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="icon" href="../images/img02.png" />

</head>
<body>
<?php include("../header.php") ?>

<div id="page">
		
		<div id="admin">
				<div id="bigadmin">
		<?php
		$utilisateur = $_SESSION['USR'] ;

				//la connection
				$host = "localhost";
				$user = "root";
				$bd = "admin";  
				$bdd= new PDO("mysql:host=".$host.";dbname=".$bd, $user,"");	
				
				//les requetes
				$qry="SELECT * FROM ajout WHERE nom='$utilisateur'";
				$qry1="SELECT * FROM supp WHERE nom='$utilisateur'";
				$qry2="SELECT * FROM modf WHERE nom='$utilisateur'";
				$qry3="SELECT * FROM see WHERE nom='$utilisateur'";
				//l'execution
				$resul = $bdd->query($qry);
				$rows = $resul->rowCount();
				
				$resul1 = $bdd->query($qry1);
				$rows1 = $resul1->rowCount();
				
				$resul2 = $bdd->query($qry2);
				$rows2 = $resul2->rowCount();
				
				$resul3 = $bdd->query($qry3);
				$rows3 = $resul3->rowCount();


	?>
			<ul>
			
			<?php	if($rows)
			{
				?><li><img src="https://cdn1.iconfinder.com/data/icons/windows-8-metro-style/512/add_user.png"><a href="ajouter.php">Ajouter un Utilisateur</a></li><?php 
			}?>
			
			<?php	if($rows1)
			{	?>	<li><img src="http://icons.iconarchive.com/icons/visualpharm/icons8-metro-style/512/Users-Remove-user-icon.png"><a href="supp.php">Supprimer un Utilisateur déja existant</a></li> <?php 
			}?>
			
			<?php	if($rows2)
			{	?>	<li><img src="https://cdn4.iconfinder.com/data/icons/mosaicon-09/512/meeting_ok-512.png"><a href="liste_admins.php">Voir la liste des utilisateurs de ce systéme</a></li> <?php 
			}?>
			
			<?php	if($rows3)
			{	?>	<li><img src="http://icons.iconarchive.com/icons/visualpharm/icons8-metro-style/256/Users-Edit-user-icon.png"><a href="chng.php">Changer les droits pour un Utilisateur</a></li> <?php 
			}?>

					<li><img src="http://icons.iconarchive.com/icons/visualpharm/icons8-metro-style/512/Editing-Edit-icon.png"><a href="modf.php">Modifier votre mot de passe et nom de login</a></li>
			</ul>
			</div>

		
		<div id="infoPerso">
		<h3>Information personnel de <?php echo $_SESSION['USR']." ". $_SESSION['NOM']; ?> :</h3>
		<table  id="non">
		
		<tr>
		<td id="first">Prenom :</td>
		<td><strong> <?php echo $_SESSION['USR'];?></strong></td>
		</tr>

		<tr>
		<td id="first">Nom :</td>
		<td> <strong><?php echo $_SESSION['NOM'];?></strong></td>
		</tr>

		<tr>
		<td id="first">Position :</td>
		<td><strong><?php echo $_SESSION['position'];?></strong></td>
		</tr>

		<tr>
		<td id="first">Adresse :</td> 
		<td><strong><?php echo $_SESSION['addresse'];?></strong></td>
		</tr>
		
		<tr>
		<td id="first">Date de naissence :</td>
		<td><strong><?php echo $_SESSION['date'];?></strong></td>
		</tr>

		<tr>
		<td id="first">Email :</td>
		<td><strong><?php echo $_SESSION['EMAIL'];?></strong></td>
		</tr>

		</table>

		</div>
		</div>
</div> 

</body>
</html>