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
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des Vignettes | Consulter la Situation des veignettes de réparation 2013</title>
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

mysql_connect($host,$user,$pass);
@mysql_select_db($base) or die("error");

//stocker la requete de selection dans une variable requete
$requete = "select * from reparation";
//stocker la resultat du requete dans le variable $resultat
$resultat = mysql_query($requete);
//stocker le nombre des linges de requete
$nombre = mysql_num_rows($resultat);



?>
<body>
<br>
<br>


<table> 
    <h1 id="jomla">La page de vignettes attribué au Réparation </h1>

  <thead>
    <tr>
        <th>Nature </th>
        <th>Nombre </th>
        <th>Nombre repporté</th>
        <th>Valeur repporté DH</th>
        <th>Nombre total</th>
        <th>valeur total</th>
        <th>Nombre Disponibile</th>
        <th>Valeur Disponibile</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php   
$i = 0;
while ( $i < $nombre)
{
    $natureV = mysql_result($resultat,$i,"natureV");
    $nbrV = mysql_result($resultat,$i,"nbrV");
    $nbrVrepport = mysql_result($resultat,$i,"nbrVrepport");
    $DHrepport = mysql_result($resultat,$i,"DHrepport");
    $nbrTotal = mysql_result($resultat,$i,"nbrTotal");
    $DHTotal = mysql_result($resultat,$i,"DHTotal");
    $dispoV = mysql_result($resultat,$i,"dispoV");
    $dispoDH = mysql_result($resultat,$i,"dispoDH");

?>  
        <tr>
        <td><?php echo "$natureV DH"?></td>
        <td><?php echo "$nbrV"?></td>
        <td><?php echo "$nbrVrepport" ?></td>
        <td><?php echo "$DHrepport DH" ?></td>
        <td><?php echo "$nbrTotal" ?></td>
        <td><?php echo "$DHTotal DH" ?></td>
        <td><?php echo "$dispoV" ?></td>
        <td><?php echo "$dispoDH DH" ?></td>
      </tr>


<?php	$i++;
}
    $requete1 = "SELECT sum(dhrepport) as dhrepport FROM `reparation` ";
    $requete2 = "SELECT sum(nbrTotal) as nbrTotal FROM `reparation` ";
    $requete3 = "SELECT sum(DHTotal) as DH FROM `reparation` ";
    $requete4 = "SELECT sum(natureV) as nature FROM `reparation` ";
    $requete5 = "SELECT sum(nbrVrepport) as nbrVrepport FROM `reparation` ";
    $requete6 = "SELECT sum(dispoV) as dispoV FROM `reparation` ";
    $requete7 = "SELECT sum(dispoDH) as dispoDH FROM `reparation` ";




 $sql1 = mysql_query($requete1);
 $sql2 = mysql_query($requete2);
 $sql3 = mysql_query($requete3);
 $sql4 = mysql_query($requete4);
 $sql5 = mysql_query($requete5);
 $sql6 = mysql_query($requete6);
 $sql7 = mysql_query($requete7);


//la somme des vigs repporté en DH
 if($sql1 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql1);
 $dhrepport = $row['dhrepport'];


//la somme des vigs repporté
 if($sql2 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql2);
 $nbrTotal = $row['nbrTotal'];

////la valeur total des vigs en DH
 if($sql3 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql3);
 $DHTotal = $row['DH'];


 if($sql4 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql4);
 $nature = $row['nature'];

  if($sql5 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql5);
 $nbrVrepport = $row['nbrVrepport'];

   if($sql6 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql6);
 $dispoV = $row['dispoV'];

//la somme de les vigs disponible en DH
   if($sql7 === FALSE) {
    die(mysql_error()); 
}
else $row = mysql_fetch_array($sql7);
 $dispoDH = $row['dispoDH'];
?>
        <tr>
            <td >Total =</td>
            <td  ><?php  echo "$nature"; ?> </td>
            <td  ><?php  echo "$nbrVrepport"; ?> </td>
            <td  ><?php  echo "$dhrepport DH"; ?> </td>
            <td  ><?php  echo "$nbrTotal "; ?> </td>
            <td  ><?php  echo "$DHTotal DH"; ?> </td>
            <td  ><?php  echo "$dispoV"; ?> </td>
            <td  ><?php  echo "$dispoDH DH"; ?> </td>

        </tr>
</div>
</table>	
</body>
</html>
