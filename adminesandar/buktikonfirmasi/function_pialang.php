<?php
session_start();
include("../config.php");
if(isset ($_SESSION['namauser']))
{
	if($_SESSION['namauser']!=null)
	{
		include('../config.php');
		$ACC = $_POST['acc'];
		$Wakil_Pialang = $_POST['wakil'];
		$id_pialang=$_POST['id_nasabah'];
		$_SESSION['newid']=$id_pialang;
		$tgl = new datetime('Asia/Jakarta');
		$tanggal = $tgl->format('Y-m-d H:i:s');
		//echo $tanggal;
		
		if($_SESSION['hak_akses']=='Wakil Pialang')
		{
			$query = mysqli_query($connect,"update namaid set no_acc='$ACC', status_pialang='Selesai', tanggal_add_pialang='$tanggal' where ID='$id_pialang'");
			include 'bukti.php';
			require 'buktifinal.php';
			if($query)
			{
				
				echo "<script>document.location = '../history.php';</script>";
			}
		}
		else if($_SESSION['hak_akses']=='Co-Wakil Pialang')
		{
			$query = mysqli_query($connect,"update namaid set no_acc='$ACC', status_pialang='Selesai', tanggal_add_pialang='$tanggal' where ID='$id_pialang'");
			include 'bukti.php';
			require 'buktifinal.php';
			if($query)
			{
				
				echo "<script>document.location = '../index.php';</script>";
			}
		}
		else
		{
			$query = mysqli_query($connect,"update namaid set no_acc='$ACC', Wakil_Pialang='$Wakil_Pialang',status_pialang='Selesai', tanggal_add_pialang='$tanggal' where ID='$id_pialang'");
			include 'bukti.php';
			require 'buktifinal.php';
			if($query)
			{	
				
				echo "<script>document.location = '../history.php';</script>";
			}
			
		}
	}
	else
	{
		echo "<script>document.location = '../login.php';</script>";
	}
}
else
{
		echo "<script>document.location = '../login.php';</script>";
}
?>