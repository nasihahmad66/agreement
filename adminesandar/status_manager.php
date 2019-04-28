<?php
	
	session_start();
	include('config.php');
	date_default_timezone_set('Asia/Jakarta');

		$id = $_GET['id'];
		$status = $_GET['status'];

		$date = strtotime(date("Y-m-d H:i:s"));

		$sql = 'UPDATE managers SET status="'.$status.'" WHERE id="'.$id.'"';
		
		$retval = mysqli_query($connect, $sql);

		if(! $retval )
		{
			die('Could not enter data: ' . mysqli_error());
		}

		$_SESSION['alert'] = 'Sukses. Status manager sudah terupdate.';
		header("Location: data_manager.php");

		mysqli_close($connect);

?>