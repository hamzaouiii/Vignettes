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
			<h3>La suppression a terminé avec succès</h3><br>	
		</div>
	</body>
	</html>	