<?php
include("config.php");
session_start();

$idf=$_SESSION['newid'];

$sql= "delete from formulir1 where id='$idf'";
$query1=mysql_query($sql);

$form2= "delete from formulir2 where id='$idf'";
$query2=mysql_query($form2);

$form3= "delete from formulir3 where id='$idf'";
$query3=mysql_query($form3);

$form4= "delete from formulir4 where id='$idf'";
$query4=mysql_query($form4);

$form5= "delete from formulir5 where id='$idf'";
$query5=mysql_query($form5);

$form601= "delete from formulir6_1 where id='$idf'";
$query601=mysql_query($form601);

$form602= "delete from formulir6_2 where id='$idf'";
$query602=mysql_query($form602);

$form701= "delete from formulir7_1 where id='$idf'";
$query701=mysql_query($form701);

$form702= "delete from formulir7_2 where id='$idf'";
$query702=mysql_query($form702);

$formforexlot= "delete from formulirforexlot where id='$idf'";
$queryforexlot=mysql_query($formforexlot);

$formforexreg= "delete from formulirforexreg where id='$idf'";
$queryforexreg=mysql_query($formforexreg);

$formgol= "delete from formulirgol where id='$idf'";
$querygol=mysql_query($formgol);

$formkakao= "delete from formulirkakao where id='$idf'";
$querykakao=mysql_query($formkakao);

$formsiidr= "delete from formulirsiidr where id='$idf'";
$querysiidr=mysql_query($formsiidr);

$formsiidrreg= "delete from formulirsiidrreg where id='$idf'";
$querysiidrreg=mysql_query($formsiidrreg);

$formsiusd= "delete from formulirsiusd where id='$idf'";
$querysiusd=mysql_query($formsiusd);

$formsiusdreg= "delete from formulirsiusdreg where id='$idf'";
$querysiusdreg=mysql_query($formsiusdreg);

$form9= "delete from formulir9 where id='$idf'";
$query9=mysql_query($form9);

session_destroy();
header("location:index.php");

?>