<?php
	
	session_start();
	include('config.php');
	date_default_timezone_set('Asia/Jakarta');

	if (isset($_POST['submit'])) {

		$id = $_POST['id'];
		$nama = $_POST['nama_lengkap'];

		$date = strtotime(date("Y-m-d H:i:s"));

		$sql = 'UPDATE managers SET nama="'.$nama.'", modified_date="'.$date.'" WHERE id="'.$id.'"';
		
		$retval = mysqli_query($connect, $sql);

		if(! $retval )
		{
			die('Could not enter data: ' . mysqli_error());
		}

		$_SESSION['alert'] = 'Sukses. Data manager sudah terupdate.';
		header("Location: data_manager.php");

		mysqli_close($connect);
	}

?>