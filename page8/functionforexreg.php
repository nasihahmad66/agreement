<?php 
	
	if(isset($_POST['submit'])){		
		$d=$_POST['terima'];		
session_start();
include('../config.php');
$Menerima = $_POST['terima'];
$t = $_POST['t7'];
$b = $_POST['b7'];
$th = $_POST['th7'];
$tgl = new datetime('Asia/Jakarta');
$tanggal = $tgl->format('d-m-Y');
$newid = $_SESSION['newid'];
$query = mysql_query("update formulirforexreg set Menerima = '$Menerima',tanggal = '$tanggal' where id='$newid'") or die(mysql_error());
	
if ($query) {
echo "<script>document.location = 'page9.php';</script>";
		}
			}
		?>