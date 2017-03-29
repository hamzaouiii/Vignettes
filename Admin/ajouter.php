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
<link rel="icon" href="../images/img02.png" />

</head>
<body>
<?php include("../header.php") ?>

<div id="page">
		
		<div id="admin">
			<form method="post" action="PDO.php" id="ajouter"  >
				<label>Nom :</label>
				<input type ="text" name="name" placeholder="Entrer le Nom">
				<label>Mot de Pass :</label>
				<input type ="password" name="pass" placeholder="Entrer le mot de pass">
				<label>Prénom :</label>
				<input type ="text" name="prenom" placeholder="Entrer le Prenom">
				<label>Position :</label>
				<input type ="text" name="position" placeholder="Entrer la Position">
				<label>Email :</label>
				<input type ="email" name="email" placeholder="Entrer l'email">
				<label>Telephone :</label>
				<input type ="text" name="tele" placeholder="Entrer le numero de telephone">
				<label>La date de Naissance :</label>
				<input type ="date" name="date">
				<label>Adresse :</label>
				<textarea></textarea>
				<input type="submit" id="button" value ="valider">
			</form>
		
		</div>
</div> 

</body>
</html>
