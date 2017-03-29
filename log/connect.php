<?php

/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'login'; 

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
$sql = mysql_query("select password from members where username='hamzaoui'");

	echo "votre mot de pass est $sql";

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>