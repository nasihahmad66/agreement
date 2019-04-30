<?php
session_start();
require_once('phpmailer/class.phpmailer.php');
require("phpmailer/class.smtp.php");
$mail = new PHPMailer(true);
$mail->IsSMTP();
$to=$_SESSION['email'];
$att="pdfnasabah/".$_SESSION['newid']."-".$_SESSION['nama'].".pdf";
$id=$_SESSION['newid'];
if($_SESSION['jk5']=='Laki-Laki')
{
	$jen='Bapak';
}
else if($_SESSION['jk5']=='Perempuan')
{
	$jen='Ibu';
}
	
try 
{
    
	$mail->Host       = "smtp.gmail.com"; // isi dengan host sesuai keinginan Anda 74.125.129.108
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = "ssl";
	$mail->Port       = 465;
	$mail->SMTPDebug  = 0;
	$mail->Username   = 'aryabayu23@gmail.com';  // isi dengan gmail anda
	$mail->Password   = 'telotelook24';       // isi dengan password gmail anda
	
	//$mail->AddReplyTo('david@mss.co.id', 'Esandar');      
	$mail->AddAddress($to,'Real Account Request ['.$_SESSION['newid'].']'); // isi alamat tujuan email, NB : khusus untuk mengirim dari gmail ke yahoo agak lama
	$mail->AddBCC("info.esandar@gmail.com", 'Real Account Request ['.$_SESSION['newid'].']');
	$mail->SetFrom('admin@esandar.co.id', 'Real Account Request ['.$_SESSION['newid'].']'); 
	$mail->Subject = 'Real Account Request ['.$_SESSION['newid'].']';
	$mail->AddAttachment($att);
	$mail->AltBody = 'Untuk melihat email ini, gunakan browser yang kompatibel dengan html';
	
	$mail->Body = "Kepada Yth. ".$jen." ".$_SESSION['nama']." <br/>
	Terima kasih telah mempercayakan investasi Anda bersama PT. Esandar Arthamas Berjangka<br/><br/>
	<center><strong>Real Account Request [".$_SESSION['newid']."]</strong></center><br/>
	<table width='100%'>
		<tr>
			<td width='45%'>Nama Lengkap</td>
			<td>:</td>
			<td> ".$_SESSION['nama']."</td>
		</tr>
		<tr>
			<td width='45%'>Tempat / Tanggal Lahir </td>
			<td>:</td>
			<td>".$_SESSION['tempat']." / ".$_SESSION['tgl1']."-".$_SESSION['bln1']."-".$_SESSION['thn1']."</td>
		</tr>
		<tr>
			<td width='45%'>No. Telp Handphone</td>
			<td>:</td>
			<td>".$_SESSION['telepon']."</td>
		</tr>
		</table><br/>
		Saat ini permohonan Real Account anda sedang kami proses, kemudian Wakil Pialang kami akan melakukan proses Verifikasi dan Konfirmasi kepada calon nasabah melalui telepon terekam.<br/>
		<br/>
		Hormat Kami<br/>
		PT. Esandar Arthamas Berjangka


";
	$mail->Send();
	
} 
catch (phpmailerException $e){
    //print_r($mail);
    //echo $e;
}
catch (Exception $e) {
   // echo $e;
}

?>
