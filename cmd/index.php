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

<div id="wrapper">
		<div id="consult">
			    <h1 id="jomla">Enregestrer des commandes dans la base de données </h1>

		<table >
			<tr><td><a href="reparation_cmd.php">Reparation</a></td></tr>
			<tr><td><a href="carburant.php">carburant</a></td></tr>			
			<tr><td><a href="telecome.php">Telecom</a></td></tr>
			<tr><td><a href="telecome.php">Eau et electricité</a></td></tr>
		</table>
		</div>
</div>
</body>
</html>