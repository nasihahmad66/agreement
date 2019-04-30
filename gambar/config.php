<?php
$hostmysql = "localhost";
$username = "esandarc_userfor";
$password = "Esandar2019!";
$dbname = "esandarc_formweb";
$connect = mysqli_connect($hostmysql,$username,$password,$dbname);
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>