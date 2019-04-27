<?php
if(isset($_POST['submit5'])){
session_start();		
		$terima=$_POST['menerima'];
			if($terima == 'Ya'){
$a=$_POST['1_1'];
$b=$_POST['1_2'];
$c=$_POST['1_3'];
$d=$_POST['1_4'];
$e=$_POST['1_5'];
$f=$_POST['1_6'];
$g=$_POST['1_7'];
$h=$_POST['1_8'];
$i=$_POST['1_9'];
$j=$_POST['1_10'];
$k=$_POST['1_11'];
$l=$_POST['1_12'];
$m=$_POST['1_13'];
$n=$_POST['1_14'];
$o=$_POST['1_15'];
$p=$_POST['1_16'];

		$_SESSION['1_1'] = $a;
		$_SESSION['1_2'] = $b;
		$_SESSION['1_3'] = $c;
		$_SESSION['1_4'] = $d;
		$_SESSION['1_5'] = $e;
		$_SESSION['1_6'] = $f;
		$_SESSION['1_7'] = $g;
		$_SESSION['1_8'] = $h;
		$_SESSION['1_9'] = $i;
		$_SESSION['1_10'] = $j;
		$_SESSION['1_11'] = $k;
		$_SESSION['1_12'] = $l; 
		$_SESSION['1_13'] = $m;
		$_SESSION['1_14'] = $n;
		$_SESSION['1_15'] = $o;
		$_SESSION['1_16'] = $p;
			
include('config.php');
$s1_1 = $_POST['1_1'];
$s1_2 = $_POST['1_2'];
$s1_3 = $_POST['1_3'];
$s1_4 = $_POST['1_4'];
$s1_5 = $_POST['1_5'];
$s1_6 = $_POST['1_6'];
$s1_7 = $_POST['1_7'];
$s1_8 = $_POST['1_8'];
$s1_9 = $_POST['1_9'];
$s1_10 = $_POST['1_10'];
$s1_11 = $_POST['1_11'];
$s1_12 = $_POST['1_12'];
$s1_13 = $_POST['1_13'];
$s1_14 = $_POST['1_14'];
$s1_15 = $_POST['1_15'];
$s1_16 = $_POST['1_16'];
$Menerima = $_POST['menerima'];
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $_POST['t1'];

$newid=$_SESSION['newid'];

$query = mysql_query("Update formulir6_1 set 1_1 = '$s1_1',1_2 = '$s1_2',1_3 = '$s1_3',1_4 = '$s1_4',1_5 = '$s1_5',1_6 = '$s1_6',1_7 = '$s1_7',1_8 = '$s1_8',1_9 = '$s1_9',1_10 = '$s1_10',1_11 = '$s1_11',1_12 = '$s1_12',1_13 = '$s1_13',1_14 = '$s1_14',1_15 = '$s1_15',1_16 = '$s1_16',Menerima = '$Menerima',Tanggal = '$Tanggal' where id='$newid'") or die(mysql_error());
 
if ($query)
 echo "<script>document.location='page701.php';</script>";
}
else
			echo "<script language='javascript'>";
			echo "alert('Silakan pilih Ya untuk lanjut ke halaman berikutnya')</script>";
			echo "<script>document.location='page601.php';</script>";
		
}

?>