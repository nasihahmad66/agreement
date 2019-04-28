<?php
session_start();
include("config.php");
if(isset ($_SESSION['namauser']))
{
	if($_SESSION['namauser']!=null)
	{
		$verifikasi = $_POST['centang'];
		$id_pialang=$_POST['id_nasabah'];
		$nama_lengkap=$_POST['nama_lengkap'];
		
		$tgl = new datetime('Asia/Jakarta');
		$tanggal = $tgl->format('Y-m-d H:i:s');
		//echo $tanggal;
		
		$query = mysqli_query($connect, "update namaid set status_verifikasi='$verifikasi', Wakil_Pialang='$nama_lengkap', tanggal_verifikasi='$tanggal' where ID='$id_pialang'") or die (mysqli_error());
		if ($query) {
			if($verifikasi=='Telah Terverifikasi'){
				echo "<script>document.location = 'file_verifikasi.php';</script>";
			}
			else if($verifikasi=='Ditolak'){
				echo "<script>document.location = 'file_ditolak.php';</script>";
			}
		}
	}
	else
	{
		echo "<script>document.location = 'login.php';</script>";
	}
}
else
{
		echo "<script>document.location = 'login.php';</script>";
}
?>