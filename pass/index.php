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
		
	<form id="form" action="done.php" method="post">   
		<h1>Récupérer vos informations pour se connecter</h1>
		<br>
		<h3>Entrer votre email ici</h3><br>
				<input type="email" id="pass" nom="email">
				<input type="submit" name="valider" value="Valider" id="supp">	
		<h4>	Cicker sur valider pour envoyer votre mot de passe et nom d'utilisateur par e-mail</h4>
		
   
  
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
