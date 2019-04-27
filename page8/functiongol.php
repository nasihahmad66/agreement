<?php
if(isset($_POST['submit'])){
		$d=$_POST['terima'];		
session_start();
include('../config.php');

$Menerima = $d;
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $tgl->format('d-m-Y');
$newid=$_SESSION['newid'];

$query = mysql_query("update formulirgol set Menerima = '$Menerima',tanggal = '$Tanggal' where id='$newid'") or die(mysql_error());
	if ($query) {
echo "<script>document.location = 'page9.php';</script>";
		}
	}
?>