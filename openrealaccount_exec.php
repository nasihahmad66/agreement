<?php
session_start();
$_SESSION['nomoraccountdemo']=$_POST["nomoraccountdemo"];

echo "<script>document.location = 'index.php';</script>";
?>