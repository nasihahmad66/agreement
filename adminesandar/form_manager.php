<?php
	
	session_start();
	include('config.php');
	date_default_timezone_set('Asia/Jakarta');

	if (isset($_POST['submit'])) {
		
		$nama = $_POST['nama_lengkap'];
		$kode = $_POST['kode_ae'];

		$date = strtotime(date("Y-m-d H:i:s"));
		$link = 'http://esandar.co.id/agreement/openrealaccount.php?aeid=';
		$link = $link.$kode;

		/* GET shorten code */
		$urlcode=rand(10000,99999);  
		$shorten=base_convert($urlcode,20,36);

		$sql_kode_ae = "SELECT * FROM managers WHERE kode_ae='".$kode."'";

		$row = mysql_query( $sql_kode_ae, $connect );
		$result = mysql_num_rows($row);
	
		if ($result > 0) {

		   	$_SESSION['alert'] = 'Kode AE sudah tersimpan sebelumnya. Silahkan masukkan Kode AE yang berbeda';
		   	header("Location: tambah_manager.php");

		} else {
		   	$sql = "INSERT INTO managers (nama, kode_ae, link, shorten, status, created_date, modified_date) VALUES ('$nama', '$kode', '$link', '$shorten', '1', '$date', '$date')";
		
			$retval = mysql_query( $sql, $connect );

			if(! $retval )
			{
			  die('Could not enter data: ' . mysql_error());
			}

			$_SESSION['alert'] = 'Sukses. Data manager sudah tersimpan.';
			header("Location: data_manager.php");

			mysql_close($connect);
		}

	} 


?>