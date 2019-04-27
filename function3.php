<?php

	session_start();

		
		$b=$_POST['radio3'];
		$c=$_POST['demo'];
		
		$_SESSION['demo'] = $c;
		
			if($b == 'Ya'){
include('config.php');
 
$Nama_Lengkap = $_POST['nama2'];
//echo $Nama_Lengkap;

$Tempat_Lahir = $_POST['tempat2'];
//echo $Tempat_Lahir;

$c2=$_POST['tgl2'];
//echo $c2;

$d2=$_POST['bln2'];
//echo $d2;

$e2=$_POST['thn2'];
//echo $e2;

$Alamat_Rumah = $_POST['alamat3'];
//echo $Alamat_Rumah;

$Kode_Pos = $_POST['pos3'];
//echo $Kode_Pos;

$No_Identitas = $_POST['id3'];
//echo $No_Identitas;

$No_Demo = $c;
//echo $No_Demo;

$Menerima = $b;
//echo $Tempat_Lahir;
//echo $_SESSION['demo'];

$f=$_POST['t2'];
$g=$_POST['b2'];
$h=$_POST['th2'];
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $_POST['t1'];

$newid=$_SESSION['newid'];
 
$query = mysqli_query($connect, "update formulir3 set Nama_Lengkap = '$Nama_Lengkap',Tempat_Lahir = '$Tempat_Lahir',Tanggal_Lahir = '$c2',Bulan_lahir = '$d2',Tahun_lahir = '$e2',Alamat_Rumah = '$Alamat_Rumah',Kode_Pos = '$Kode_Pos',No_Demo = '$No_Demo',Menerima = '$Menerima',Tanggal = '$Tanggal' where id='$newid'") or die(mysqli_error());

if ($query) {
   if($_SESSION['pengalaman'] == 'belum')
   {
    echo "<script>document.location = 'page5.php';</script>";
   }
   else if(($_SESSION['pengalaman'] == 'pernah'))
   {
    echo "<script>document.location = 'page4.php';</script>";
   }

		} else{
			echo "<script language='javascript'>";
			echo "alert('Silakan pilih Ya untuk lanjut ke halaman berikutnya')</script>";
			echo "<script>document.location='page3.php';</script>";
		
	}
}

?>