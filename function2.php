<?php

session_start();
include('config.php');
 
$Menerima = $_POST['radio2'];
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $_POST['t1'];
 
$newid=$_SESSION['newid'];

$query = mysql_query("update formulir2 set Menerima = '$Menerima',Tanggal = '$Tanggal' where id='$newid'") or die(mysql_error());

echo "<script>document.location='page3.php';</script>";

?>