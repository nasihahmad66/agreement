<?php
include("config.php");
session_start();

$idf=$_SESSION['newid'];

$sql= "delete from formulir1 where id='$idf'";
$query1=mysqli_query($connect, $sql);

$form2= "delete from formulir2 where id='$idf'";
$query2=mysqli_query($connect, $form2);

$form3= "delete from formulir3 where id='$idf'";
$query3=mysqli_query($connect, $form3);

$form4= "delete from formulir4 where id='$idf'";
$query4=mysqli_query($connect, $form4);

$form5= "delete from formulir5 where id='$idf'";
$query5=mysqli_query($connect, $form5);

$form601= "delete from formulir6_1 where id='$idf'";
$query601=mysqli_query($connect, $form601);

$form602= "delete from formulir6_2 where id='$idf'";
$query602=mysqli_query($connect, $form602);

$form701= "delete from formulir7_1 where id='$idf'";
$query701=mysqli_query($connect, $form701);

$form702= "delete from formulir7_2 where id='$idf'";
$query702=mysqli_query($connect, $form702);

$formforexlot= "delete from formulirforexlot where id='$idf'";
$queryforexlot=mysqli_query($connect, $formforexlot);

$formforexreg= "delete from formulirforexreg where id='$idf'";
$queryforexreg=mysqli_query($connect, $formforexreg);

$formgol= "delete from formulirgol where id='$idf'";
$querygol=mysqli_query($connect, $formgol);

$formkakao= "delete from formulirkakao where id='$idf'";
$querykakao=mysqli_query($connect, $formkakao);

$formsiidr= "delete from formulirsiidr where id='$idf'";
$querysiidr=mysqli_query($connect, $formsiidr);

$formsiidrreg= "delete from formulirsiidrreg where id='$idf'";
$querysiidrreg=mysqli_query($connect, $formsiidrreg);

$formsiusd= "delete from formulirsiusd where id='$idf'";
$querysiusd=mysqli_query($connect, $formsiusd);

$formsiusdreg= "delete from formulirsiusdreg where id='$idf'";
$querysiusdreg=mysqli_query($connect, $formsiusdreg);

$form9= "delete from formulir9 where id='$idf'";
$query9=mysqli_query($connect, $form9);

session_destroy();
header("location:index.php");

?>