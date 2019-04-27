<?php
require_once('tcpdf/tcpdf.php');
ob_start();
$pdf = new TCPDF('', PDF_UNIT, 'A4', true, 'UTF-8', false);
include('../config.php');
session_start();
$id=$_SESSION['newid'];


/*mysql query*/
$sql=mysql_query("select * from formulir1 where id='$id'");
$form1=mysql_fetch_array($sql);

$sql2=mysql_query("select * from formulir2 where id='$id'");
$form2=mysql_fetch_array($sql2);

$sql3=mysql_query("select * from formulir3 where id='$id'");
$form3=mysql_fetch_array($sql3);

$sql4=mysql_query("select * from formulir4 where id='$id'");
$form4=mysql_fetch_array($sql4);

$sql5=mysql_query("select * from formulir5 where id='$id'");
$form5=mysql_fetch_array($sql5);

$sql601=mysql_query("select * from formulir6_1 where id='$id'");
$form601=mysql_fetch_array($sql601);

$sql602=mysql_query("select * from formulir6_2 where id='$id'");
$form602=mysql_fetch_array($sql602);

$sql701=mysql_query("select * from formulir7_1 where id='$id'");
$form701=mysql_fetch_array($sql701);

$sql702=mysql_query("select * from formulir7_2 where id='$id'");
$form702=mysql_fetch_array($sql702);

$sqlgol=mysql_query("select * from formulirgol where id='$id'");
$formgol=mysql_fetch_array($sqlgol);

$sqlkakao=mysql_query("select * from formulirkakao where id='$id'");
$formkakao=mysql_fetch_array($sqlkakao);

$sql803=mysql_query("select * from formulirforexlot where id='$id'");
$form803=mysql_fetch_array($sql803);

$sql804=mysql_query("select * from formulirforexreg where id='$id'");
$form804=mysql_fetch_array($sql804);

$sql805=mysql_query("select * from formulirsiusd where id='$id'");
$form805=mysql_fetch_array($sql805);

$sql806=mysql_query("select * from formulirsiusdreg where id='$id'");
$form806=mysql_fetch_array($sql806);

$sql807=mysql_query("select * from formulirsiidr where id='$id'");
$form807=mysql_fetch_array($sql807);

$sql808=mysql_query("select * from formulirsiidrreg where id='$id'");
$form808=mysql_fetch_array($sql808);

$sql9=mysql_query("select * from formulir9 where id='$id'");
$form9=mysql_fetch_array($sql9);

$sqlnamaid=mysql_query("select * from namaid where id='$id'");
$namaid=mysql_fetch_array($sqlnamaid);

$sqlnamaid701=mysql_query("select * from namaid where id='$id'");
$formnamaid701=mysql_fetch_array($sqlnamaid701);

$sqlnamaid702=mysql_query("select * from namaid where id='$id'");
$formnamaid702=mysql_fetch_array($sqlnamaid702);




// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, '40', 'PT. Esandar Arthamas Berjangka', 'APL Tower 36th Floor
Jl Letjen S Parman Kav 28 Central Park
Jakarta Barat 11470, Indonesia      
                                 
                       ');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


/*PDF QUERY*/


$pdf->Open();


include('buktifinalpageopenaccount.php');
//page1
include('buktifinalpage1.php');

//page2
$Menerima = 'Ya';
include('buktifinalpage2.php');

//page3
include('buktifinalpage3.php');

//page4
if($form1['Transaksi']=='pernah')
{
	include('buktifinalpage4.php');
}

//page5
include('buktifinalpage5.php');

//page6
if($form1['Jenis_Transaksi']=='KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250'||$form1['Jenis_Transaksi']=='KONTRAK_BERJANGKA_KAKAO')
{
	//page601
	include('buktifinalpage601.php');

	//page701
	include('buktifinalpage701.php');	
}
else if($form1['Jenis_Transaksi']=='FOREX_0,1_LOT'||$form1['Jenis_Transaksi']=='FOREX_REGULAR'||
$form1['Jenis_Transaksi']=='INDEX_USD_0,1_LOT'||$form1['Jenis_Transaksi']=='INDEX_USD_REGULAR'||
$form1['Jenis_Transaksi']=='INDEX_IDR_0,1_LOT'||$form1['Jenis_Transaksi']=='INDEX_IDR_REGULAR')
{
	//page602
	include('buktifinalpage602.php');
	
	//page702
	include('buktifinalpage702.php');
}


//page8
if($form1['Jenis_Transaksi']  == "KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250")
{
	//page emas gol
	include('buktifinalpage801.php');
}

else if($form1['Jenis_Transaksi']  == "KONTRAK_BERJANGKA_KAKAO")
{ 
	//page kakao
	include('buktifinalpage802.php');
}
else if($form1['Jenis_Transaksi']  == "FOREX_0,1_LOT")
{
	//page forex 0,1 
	include('buktifinalpage803.php');
}
else if($form1['Jenis_Transaksi']  == "FOREX_REGULAR")
{
	//page forex regular
	include('buktifinalpage804.php');
}
else if($form1['Jenis_Transaksi']  == "INDEX_USD_0,1_LOT")
{
	//page index usd 0,1
	include('buktifinalpage805.php');
}
else if($form1['Jenis_Transaksi']  == "INDEX_USD_REGULAR")
{
	//page index usd 0,1
	include('buktifinalpage806.php');
}
else if($form1['Jenis_Transaksi']  == "INDEX_IDR_0,1_LOT")
{
	//page index idr 0,1
	include('buktifinalpage807.php');
}
else if($form1['Jenis_Transaksi']  == "INDEX_IDR_REGULAR")
{
	//page index idr regular
	include('buktifinalpage808.php');
}
	
//page9//
include('buktifinalpage9.php');

$id1=$_SESSION['id_nasabah1'];
$namanasabah=$_SESSION['namanasabah1'];
$Output = "VERI-".$id1."-".$namanasabah."";
ob_end_clean();
$pdf->Output("$Output.pdf",'F');
?>