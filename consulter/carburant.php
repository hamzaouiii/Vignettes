<?php
 session_start();
    if(!isset($_SESSION['login'])){ //if login in session is not set
    header("../login.php");
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des Vignettes | Consulter la Situation des veignettes de carburant</title>
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">

<?php
include("../header.php");
$user = "root";
$base = "veignettes";
$host = "localhost";
$pass = "";

$lien = mysql_connect($host,$user,$pass);
mysql_select_db($base,$lien) or die("something went wrong");

//stocker la requete de selection dans une variable requete
$requete = "select * from `veignettes`.`carburant`";
//stocker la resultat du requete dans le variable $resultat
$resultat = mysql_query($requete);
//stocker le nombre des linges de requete
$nombre = mysql_num_rows($resultat);

?>
<body>
<br>
<br>
    <h1 id="jomla">La page de vignettes attribué au Carburant </h1>

<div id="stuff">
<table id="racetimes">
	<thead>
    <tr>
		<th>Nature </th>
        <th>Nombre </th>
        <th>valeur total</th>
        <th>Nombre Disponibile</th>
        <th>Valeur Disponibile</th>
    </tr>
    </thead>
    <tbody>
     
<?php	
$i = 0;
while ( $i < $nombre)
{  
	$natureDH = mysql_result($resultat,$i,"natureDH");
	$nombreV = mysql_result($resultat,$i,"nombreV");
	$valeur_DH = mysql_result($resultat,$i,"valeur_DH");
	$dispoV = mysql_result($resultat,$i,"dispoV");
	$dispoDH = mysql_result($resultat,$i,"dispoDH");
	$car_annee = mysql_result($resultat,$i,"car_annee");



?>                      
      <tr>
        <td ><?php echo "$natureDH"?></td>
        <td><?php echo "$nombreV"?></td>
        <td><?php echo "$valeur_DH" ?></td>
        <td><?php echo "$dispoV" ?></td>
        <td><?php echo "$dispoDH" ?></td>

      </tr>


<?php	$i++;
}
    //enregistrer les requetes chacune dans une variable
    $requete1 = "SELECT sum(natureDH) as nature FROM `carburant` ";
    $requete2 = "SELECT sum(nombreV) as nombreV FROM `carburant` ";
    $requete3 = "SELECT sum(valeur_DH) as valeur FROM `carburant` ";
    $requete4 = "SELECT sum(dispoV) as dispoV FROM `carburant` ";
    $requete5 = "SELECT sum(dispoDH) as dispoDH FROM `carburant` ";
   
    //executer les requetes
    $sql1 = mysql_query($requete1);
    $sql2 = mysql_query($requete2);
    $sql3 = mysql_query($requete3);
    $sql4 = mysql_query($requete4);
    $sql5 = mysql_query($requete5);

    //la somme des vigs repporté en DH
 if($sql1 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql1);
 $natureDH = $row['nature'];


//la somme des vigs repporté
 if($sql2 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql2);
 $nbrV = $row['nombreV'];

////la valeur total des vigs en DH
 if($sql3 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql3);
 $DH = $row['valeur'];


 if($sql4 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql4);
 $dispoV = $row['dispoV'];

  if($sql5 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql5);
 $dispoDH = $row['dispoDH'];
?>
         <tr>
            <td  >Total = </td>
            <td  ><?php  echo "$nbrV"; ?> </td>
            <td  ><?php  echo "$DH DH"; ?> </td>
            <td  ><?php  echo "$dispoV "; ?> </td>
            <td  ><?php  echo "$dispoDH DH"; ?> </td>

        </tr>
    </tbody>    
    </table>
</body>
</html>
