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
<title>Gestion des Vignettes | Entrer une commande pour la reparation </title>
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php include("../header.php") ?>

<div id="page">
		
		<div id="cmd">
			<form method="post" action="cmd.php" >
				<input type="date" placeholder="La Date Ex: 2014-07-17" name="date"><br>
				<input type="text" placeholder="Matricule" name="matricule"><br>
				<input type="text" placeholder="Kilometrage" name="kilometrage"><br>
				<input type="text" placeholder="Numero de facteur" name="num_fact"><br>
				<input type="text" placeholder="Fournisseur" name="Fournisseur" ><br>
				<input type="text" placeholder="N° de bon à delivrer au fornisseurs ou facture" name="num_bon"><br>
				<input type="text" placeholder="Fonctionnaire ayant effectué la Réparation" name="Fonctionnaire" ><br>
				<input type="text" placeholder="le coût de la reparation en DH" name="cout" ><br>
				<input type="submit" value="Valider">
			</form>
		
		</div>
</div> 

</body>
</html>
