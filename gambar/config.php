<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$dbname = "esandarc_formweb";
$connect = mysqli_connect($hostmysql,$username,$password,$dbname);
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>