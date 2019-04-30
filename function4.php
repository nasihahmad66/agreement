<?php
session_start();
$Pialang = $_POST['pialang'];
$_SESSION['pialang'] = $Pialang;
$b=$_POST['radio4'];
				
include('config.php');
$Nama_Lengkap = $_POST['nama4'];
//echo $Nama_Lengkap;
$Tempat_Lahir = $_POST['tempat4'];
//echo $Tempat_Lahir;
$c3=$_POST['tgl4'];
//echo $c3;
$d3=$_POST['bln2'];
//echo $d3;
$e3=$_POST['thn2'];
//echo $e3;
$Alamat_Rumah = $_POST['alamat3'];
//echo $Alamat_Rumah;
$Kode_Pos = $_POST['pos3'];
//echo $Kode_Pos;
$No_Identitas = $_POST['id3'];
//echo $No_Identitas;
$No_Demo = $_POST['demo'];
//echo $No_Demo;
$Nama_Pialang = $_POST['pialang'];
//echo $Nama_Pialang;
$Menerima = $_POST['radio4'];
//echo $Menerima;
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $_POST['t1'];
//echo $Tanggal;

$newid=$_SESSION['newid'];

$query = mysqli_query($connect, "update formulir4 set Nama_Lengkap='$Nama_Lengkap',Tempat_Lahir='$Tempat_Lahir',Tanggal_Lahir='$c3',Bulan_lahir='$d3',Tahun_lahir='$e3',Alamat_Rumah='$Alamat_Rumah',Kode_Pos='$Kode_Pos',No_Demo='$No_Demo',Tempat_Lahir='$Tempat_Lahir',Nama_Pialang='$Nama_Pialang',Menerima='$Menerima',Tanggal='$Tanggal' where id='$newid'") or die (mysqli_error());
if ($query){ 
   echo "<script>document.location = 'page5.php';</script>";
}
else{
			echo "<script language='javascript'>";
			echo "alert('Silakan pilih Ya untuk lanjut ke halaman berikutnya')</script>";
			echo "<script>document.location='page4.php';</script>";
	}
?>