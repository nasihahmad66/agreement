<?php session_start();

include "config.php";
require_once("function_pass.php");

$username=$_POST['namauser'];
$pwd=$_POST['password'];
$query=mysql_query("select * from login where username='$username' and password='".encodePwd($pwd)."'");
$cek=mysql_num_rows($query);
$hasil=mysql_fetch_array($query);


if($cek){
$_SESSION['id_akses']=$hasil['id_akses'];
$_SESSION['namauser']=$username;
$_SESSION['nama_lengkap']=$hasil['nama_lengkap'];
$_SESSION['hak_akses']=$hasil['hak_akses'];
echo "<script>document.location='index.php';</script>";
}
else

echo "<script>;
		alert('Username/Password salah');
		window.location='login.php';</script>";
echo mysql_error();


?>