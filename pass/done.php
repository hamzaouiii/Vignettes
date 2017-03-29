    <?php
    //Start session
    session_start();	
    //Unset the variables stored in session
    unset($_SESSION['ID']);
    unset($_SESSION['USR']);
    unset($_SESSION['NOM']);
    unset($_SESSION['PASS']);
    error_reporting(0);
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Récupérer votre informations pour se connecter | Gestion des Vignettes</title>
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="icon" href="images/img02.png" />

</head>

<body>

<div id="wrapper">
	<div id="header">
		<div id="logo">
			<img src="../images/img02.png">
			<h1><a href="#">Gestion des Vignettes </a></h1>
			<p> Centre Regional D'investissement</p>
		</div>
	</div>

	<!-- end #menu -->
	<div >
		
	<form id="form" action="" method="post">   
		<h1>Récupérer votre informations pour se connecter</h1>
		<?php
		if(isset($_POST['valider']))
		{
		?>
				<h2>consulter votre courrier électronique, vous trouverez vos informations de connexion</h2>
		<?php
		}
		else
		{
		?>
				<h2 style="color : red;">Votre email n'exist pas dans lea base de données !</h2>
		<?php
		}
		?>

 </form>
	
	</div>
		
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
	</div>
	<!-- end #footer -->
</body>
</html>
