<?php 
	session_start();
	if(!isset($_SESSION['USR']))
{ //if login in session is not set
    header("Location:../index.php");
}

$cout = $_SESSION['cout'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des Vignettes </title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php include("../header.php") ?>

<div id="page">
		
		<form action="" method="POST" >
			<h3>Entrez le nombre de chaque vignettes pour terminer le processus</h3>
			<h4>la somme de ces nombre doit être egal à <?php echo $cout;?> DH</h4>
			<table id="vigs">
				<tr>
			<td id="txt">10 DH:</td><td><input type="text" name="10"></td>
			<td id="txt">20 DH:</td><td><input type="text" name="20"></td>
			<td id="txt">50 DH:</td><td><input type="text" name="50"></td>
				</tr>
				<tr>
			<td id="txt">100 DH:</td><td><input type="text" name="100"></td>
			<td id="txt">200 DH:</td><td><input type="text" name="200"></td>
			<td id="txt">500 DH:</td><td><input type="text" name="500"></td>
				</tr>
				<tr>
					<td colspan="5"></td>
					<td id="nxt"><input type="submit" name="nxt" value ="suivant" ></td>
				</tr>

			</table>
			<?php
				if (isset($_POST['nxt']))
				{
						$sum = 0;
						$sum = $sum + $_POST['10'] * 10;
						$sum = $sum + $_POST['20'] * 20;
						$sum = $sum + $_POST['50'] * 50;
						$sum = $sum + $_POST['100'] * 100;
						$sum = $sum + $_POST['200'] * 200;
						$sum = $sum + $_POST['500'] * 500;
						
				if($sum != $cout)
				{
					echo '<span style="color: red;" /> la somme de Ce que vous avez entré est <strong>'.$sum.'</strong> et est defferent de <strong> '.$cout.' </strong></span>';
				}
				else
				{
					echo "string";
				}
				}
			?>	
		</form>
</div> 

</body>
</html>
