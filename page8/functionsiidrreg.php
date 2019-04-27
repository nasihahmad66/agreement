<?php 
	if(isset($_POST['submit'])){
		$d=$_POST['terima'];	

include('config.php');
session_start();
$Menerima = $_POST['terima'];
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $tgl->format('d-m-Y');

$newid=$_SESSION['newid'];

$query = mysqli_query($connect, "update formulirsiidrreg set Menerima='$Menerima',tanggal='$Tanggal' where id='$newid'") or die (mysql_error());
if ($query) {
echo "<script>document.location = 'page9.php';</script>";
		}
	
	}

?>