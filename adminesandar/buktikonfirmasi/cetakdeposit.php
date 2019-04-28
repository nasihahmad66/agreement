<?php
require_once('tcpdf/tcpdf.php');
$pdf = new TCPDF('', PDF_UNIT, 'A4', true, 'UTF-8', false);
include('../config.php');
session_start();
$id=$_GET['id'];

/*mysql query*/
$sql=mysqli_query($connect,"select * from deposit where id_deposit='$id'");
$form1=mysqli_fetch_array($sql);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, '40', 'PT. Esandar Arthamas Berjangka', 'APL Tower 36th Floor
Jl Letjen S Parman Kav 28 Central Park
West Jakarta 11470, Indonesia      
                                 
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



$pdf->AddPage();

$pdf->Ln(5);
$pdf->SetFont('helvetica','B', 10);
$pdf->Write(0, 'KONFIRMASI DEPOSIT / PENYETORAN DANA NASABAH', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(2);
$pdf->SetFont('helvetica','', 10);
if($form1['setoran']=='IDR'){
$table="<table border=\"0\" >
			  <tr>
			  	<td width='100px'>Tanggal</td><td width=\"20\"> : </td><td width=\"350\">".$form1['tanggal']."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>Nama</td><td width=\"20\"> : </td><td width=\"350\">".$form1['namanasabah']."</td>			  	
			  </tr>
			  <tr>
			  	<td width='100px'>No Login</td><td width=\"20\"> : </td><td width=\"350\">".$form1['nologin']."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>Email</td><td width=\"20\"> : </td><td width=\"350\">".$form1['email']."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>Jumlah Deposit</td><td width=\"20\"> : </td><td width=\"350\">Rp ".number_format($form1['jumlah'],0,'','.')."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>IP Address</td><td width=\"20\"> : </td><td width=\"350\">".$form1['ip_addr']."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>Bukti Deposit</td><td width=\"20\"> : </td><td width=\"350\"></td>
			  </tr>
			</table>";
}
else{
$table="<table border=\"0\" >
			  <tr>
			  	<td width='100px'>Tanggal</td><td width=\"20\"> : </td><td width=\"350\">".$form1['tanggal']."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>Nama</td><td width=\"20\"> : </td><td width=\"350\">".$form1['namanasabah']."</td>			  	
			  </tr>
			  <tr>
			  	<td width='100px'>No Login</td><td width=\"20\"> : </td><td width=\"350\">".$form1['nologin']."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>Email</td><td width=\"20\"> : </td><td width=\"350\">".$form1['email']."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>Jumlah Withdrawal</td><td width=\"20\"> : </td><td width=\"350\">$ ".number_format($form1['jumlah'],0,'','.')."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>IP Address</td><td width=\"20\"> : </td><td width=\"350\">".$form1['ip_addr']."</td>
			  </tr>
			  <tr>
			  	<td width='100px'>Bukti Deposit</td><td width=\"20\"> : </td><td width=\"350\"></td>
			  </tr>
			</table>";
}
$pdf->writeHTMLCell(182, '', 14, 45,$table, 0, 0, 0, true, 'J', true);

$pdf->Image('../../../deposit/'.$form1['bukti'], 30, 85, 120, 100, 'JPG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('../../../deposit/'.$form1['bukti'], 30, 85, 120, 100, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

$id1=$_SESSION['id_nasabah1'];
$namanasabah=$_SESSION['namanasabah1'];
$Output = "VERI-".$id1."-".$namanasabah."";
ob_end_clean();
$pdf->Output("Output.pdf",'I');

?>