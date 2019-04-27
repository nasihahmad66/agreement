<?php
	
	session_start();
	include('config.php');
	date_default_timezone_set('Asia/Jakarta');

		$id = $_GET['id'];
		$status = $_GET['status'];

		$date = strtotime(date("Y-m-d H:i:s"));

		$sql = 'UPDATE managers SET status="'.$status.'" WHERE id="'.$id.'"';
		
		$retval = mysql_query($sql, $connect);

		if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}

		$_SESSION['alert'] = 'Sukses. Status manager sudah terupdate.';
		header("Location: data_manager.php");

		mysql_close($connect);

?>