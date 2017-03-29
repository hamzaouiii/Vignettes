    <?php
    //Start session
    session_start();	
    //Unset the variables stored in session
    unset($_SESSION['ID']);
    unset($_SESSION['USR']);
    unset($_SESSION['NOM']);
    unset($_SESSION['PASS']);
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des Vignettes</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="icon" href="images/img02.png" />
</head>

<body>

<div id="wrapper">
	<div id="header">
		<div id="logo">
			<img src="images/img02.png">
			<h1><a href="#">Gestion des Vignettes </a></h1>
			<p> Centre Regional D'investissement</p>
		</div>
	</div>

	<!-- end #menu -->
	<div >
		
	<form id="form" name="loginform" action="login_exec.php" method="post">
   

		<h1>Authentification</h1><br>
        
        <input type="text" name="username" placeholder="Entrer votre nom de la famille" id="inputext">
        <input type="password" name="password" placeholder="mot de passe" id="inputext">
        <a href="pass/index.php">Vous ne pouvez pas vous connecter ?</a>
        <input type="submit" value="Connexion" id="inputbutt">
         <?php
    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul class="err">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo "<div style ='font:14px Arial,tahoma,sans-serif;color:red'>",$msg,"</div>";
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
    }
    ?>
    </form>

	
	</div>
		<!-- end #content -->


		
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
