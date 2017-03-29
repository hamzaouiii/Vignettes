<?php 
session_start();
unset($_SESSION['USR']); 
unset($_SESSION['ID']);
unset($_SESSION['USR']);
unset($_SESSION['NOM']);
unset($_SESSION['EMAIL']);
unset($_SESSION['addresse']);
unset($_SESSION['position']);
unset($_SESSION['date']);
header("Location:index.php");

?>