<?php
require_once('tcpdf/tcpdf.php');
ob_start();
$pdf = new TCPDF('', PDF_UNIT, 'A4', true, 'UTF-8', false);
include('../config.php');
session_start();
$id=$_SESSION['newid'];

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

/*mysql query*/
$sql=mysqli_query($connect,"select * from formulir1 where id='$id'");
$form1=mysqli_fetch_array($sql);

$sql2=mysqli_query($connect,"select * from formulir2 where id='$id'");
$form2=mysqli_fetch_array($sql2);

$sql3=mysqli_query($connect,"select * from formulir3 where id='$id'");
$form3=mysqli_fetch_array($sql3);

$sql4=mysqli_query($connect,"select * from formulir4 where id='$id'");
$form4=mysqli_fetch_array($sql4);

$sql5=mysqli_query($connect,"select * from formulir5 where id='$id'");
$form5=mysqli_fetch_array($sql5);

$sql601=mysqli_query($connect,"select * from formulir6_1 where id='$id'");
$form601=mysqli_fetch_array($sql601);

$sql602=mysqli_query($connect,"select * from formulir6_2 where id='$id'");
$form602=mysqli_fetch_array($sql602);

$sql701=mysqli_query($connect,"select * from formulir7_1 where id='$id'");
$form701=mysqli_fetch_array($sql701);

$sql702=mysqli_query($connect,"select * from formulir7_2 where id='$id'");
$form702=mysqli_fetch_array($sql702);

$sqlgol=mysqli_query($connect,"select * from formulirgol where id='$id'");
$formgol=mysqli_fetch_array($sqlgol);

$sqlkakao=mysqli_query($connect,"select * from formulirkakao where id='$id'");
$formkakao=mysqli_fetch_array($sqlkakao);

$sql803=mysqli_query($connect,"select * from formulirforexlot where id='$id'");
$form803=mysqli_fetch_array($sql803);

$sql804=mysqli_query($connect,"select * from formulirforexreg where id='$id'");
$form804=mysqli_fetch_array($sql804);

$sql805=mysqli_query($connect,"select * from formulirsiusd where id='$id'");
$form805=mysqli_fetch_array($sql805);

$sql806=mysqli_query($connect,"select * from formulirsiusdreg where id='$id'");
$form806=mysqli_fetch_array($sql806);

$sql807=mysqli_query($connect,"select * from formulirsiidr where id='$id'");
$form807=mysqli_fetch_array($sql807);

$sql808=mysqli_query($connect,"select * from formulirsiidrreg where id='$id'");
$form808=mysqli_fetch_array($sql808);

$sql9=mysqli_query($connect,"select * from formulir9 where id='$id'");
$form9=mysqli_fetch_array($sql9);

$sqlnamaid701=mysqli_query($connect,"select * from namaid where id='$id'");
$formnamaid701=mysqli_fetch_array($sqlnamaid701);

$sqlnamaid702=mysqli_query($connect,"select * from namaid where id='$id'");
$formnamaid702=mysqli_fetch_array($sqlnamaid702);

$sqlnamaid=mysqli_query($connect,"select * from namaid where id='$id'");
$namaid=mysqli_fetch_array($sqlnamaid);



/*PDF QUERY*/
$pdf->Open();


include('pdfopenaccount.php');
include('pdfpage1.php');

//page2
$Menerima = 'Ya';
include('pdfpage2.php');

//page3
include('pdfpage3.php');

//page4
if($form1['Transaksi']=='pernah')
{
include('pdfpage4.php');
}

//page5
include('pdfpage5.php');

//page6
if($form1['Jenis_Transaksi']=='KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250'||$form1['Jenis_Transaksi']=='KONTRAK_BERJANGKA_KAKAO')
{
	//page601
	include('pdfpage601.php');

	//page701
	include('pdfpage701.php');
}
else if($form1['Jenis_Transaksi']=='FOREX_0,1_LOT'||$form1['Jenis_Transaksi']=='FOREX_REGULAR'||
$form1['Jenis_Transaksi']=='INDEX_USD_0,1_LOT'||$form1['Jenis_Transaksi']=='INDEX_USD_REGULAR'||
$form1['Jenis_Transaksi']=='INDEX_IDR_0,1_LOT'||$form1['Jenis_Transaksi']=='INDEX_IDR_REGULAR')
{
	//page602
	include('pdfpage602.php');

	//page702
	include('pdfpage702.php');
}


//page8
if($form1['Jenis_Transaksi']  == "KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250")
{	//page emas gol
	include('pdfpage801.php');
}
else if($form1['Jenis_Transaksi']  == "KONTRAK_BERJANGKA_KAKAO")
{	//page kakao
	include('pdfpage802.php');
}
else if($form1['Jenis_Transaksi']  == "FOREX_0,1_LOT")
{	//page forex 0,1
	include('pdfpage803.php');
}
else if($form1['Jenis_Transaksi']  == "FOREX_REGULAR")
{	//page forex regular
	include('pdfpage804.php');
}
else if($form1['Jenis_Transaksi']  == "INDEX_USD_0,1_LOT")
{	//page index usd 0,1
	include('pdfpage805.php');
}
else if($form1['Jenis_Transaksi']  == "INDEX_USD_REGULAR")
{	//page index usd regular
	include('pdfpage806.php');
}
else if($form1['Jenis_Transaksi']  == "INDEX_IDR_0,1_LOT")
{	//page index idr 0,1
	include('pdfpage807.php');
}
else if($form1['Jenis_Transaksi']  == "INDEX_IDR_REGULAR")
{	//page index idr regular
	include('pdfpage808.php');
}

//page9//
include('pdfpage9.php');

$id1=$_SESSION['newid'];
$namanasabah=$_SESSION['nama'];
$Output = "".$id1."-".$namanasabah."";
ob_end_clean();
$pdf->Output("pdfnasabah/$Output.pdf",'i');


?>