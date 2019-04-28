<?php
	
	session_start();
	include('config.php');
	date_default_timezone_set('Asia/Jakarta');

		
	$id = $_GET['id'];

	$sql = "DELETE FROM managers WHERE id='".$id."'";

	$row = mysqli_query($connect, $sql);
	
	if (!$row) {

		$_SESSION['alert'] = die('Could not enter data: ' . mysql_error());
		header("Location: tambah_manager.php");

	} 

	$_SESSION['alert'] = 'Sukses. Data manager sudah terhapus.';
	header("Location: data_manager.php");

	mysqli_close($connect);
?>