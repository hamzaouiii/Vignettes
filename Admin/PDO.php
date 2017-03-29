<?php
	
	$host = "localhost";
	$user = "root";
	$bd = "admin";  
	$bdd= new PDO("mysql:host=".$host.";dbname=".$bd, $user,"");	
	
	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		$prenom = $_POST['prenom'];
		$position =  $_POST['position'];
		$email = $_POST['email']; 
		$tele = $_POST['tele'];
		$pass = $_POST['pass'];

		$q ="INSERT INTO utilisateurs (userNom, userPrenom, userPosition, userEmail, userTele, userPass) VALUES  (:name, :prenom, :position, :email, :tele, :pass)";
        $sql  = $bdd->prepare($q);
        $resultat = $sql->execute(array(
        	':name' => $name,
        	':prenom' => $prenom,
        	':position' =>$position,
        	':email' => $email,
        	':tele' => $tele,
        	':pass' => $pass ));    
	}

	
	else echo "not working"
?>
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
		<form method="" action="PDO.php" id="form"  >

		<h1>
		<?php 
			echo "l'inscription de Mr. $name $prenom a terminé avec succès";
		?>
		</h1>
		</form>
		</div>

</div> 

</body>
</html>
