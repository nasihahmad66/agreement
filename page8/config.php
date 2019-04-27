<?php
$hostmysql = "localhost";
$username = "esandarc_userfor";
$password = "Esandar2019!";
$dbname = "esandarc_formweb";
$connect = mysql_connect($hostmysql, $username, $password) or die(mysql_error());
$dbselect = mysql_select_db($dbname);
 
?>