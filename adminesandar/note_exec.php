<?php
session_start();
include("config.php");

$idnas=$_POST['idnas'];
echo $idnas;
$note=$_POST['note'];
echo $note;

if($_POST['idnas']!= null && $_POST['note']!= null)
{
$sql=mysqli_query($connect, "UPDATE `namaid` SET `note`= '$note' WHERE id='$idnas'");
echo "<script>document.location = 'history.php';</script>";
}
else
{
echo "<script>document.location = 'history.php';</script>";
}
?>