

    <?php
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "admin";
    $prefix = "";
    $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("impossibe de connecter à la base");
    mysql_select_db($mysql_database, $bd) or die("impossibe de selectionner la base");
    ?>