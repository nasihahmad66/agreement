<?php session_start();

include "config.php";
require_once("function_pass.php");

$username=$_POST['namauser'];
$pwd=$_POST['password'];
$pwd=encodePwd($pwd);
$query=mysqli_query($connect,"select * from login where username='$username' and password='$pwd'");
$cek=mysqli_num_rows($query);
$hasil=mysqli_fetch_array($query);


if($cek > 0){
$_SESSION['id_akses']=$hasil['id_akses'];
$_SESSION['namauser']=$username;
$_SESSION['nama_lengkap']=$hasil['nama_lengkap'];
$_SESSION['hak_akses']=$hasil['hak_akses'];
echo "<script>document.location='index.php';</script>";
}else{
	echo "<script>;
		alert('Username/Password salah');
		window.location='login.php';</script>";
	echo mysqli_error($connect);
}



?>