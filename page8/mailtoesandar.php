<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('phpmailer/class.phpmailer.php');
require("phpmailer/class.smtp.php");
$mail = new PHPMailer(true);
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
	$mail->SMTPDebug = 0;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'arya_pamungkas_24rpl@student.smktelkom-mlg.sch.id';                 
    $mail->Password = 'franciersnew';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;       // isi dengan password gmail anda
	//$mail->AddReplyTo('david@mss.co.id', 'Esandar');      
	$mail->addAddress($to,'Real Account Request ['.$_SESSION['newid'].']'); // isi alamat tujuan email, NB : khusus untuk mengirim dari gmail ke yahoo agak lama
	$mail->addBCC("davidhariyanto08@gmail.com", 'Real Account Request ['.$_SESSION['newid'].']');
	$mail->setFrom('admin@esandar.co.id', 'Real Account Request ['.$_SESSION['newid'].']'); 
	$mail->Subject = 'Real Account Request ['.$_SESSION['newid'].']';
	$mail->addAttachment($att);
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
catch (phpmailerException $e){print_r($mail);
    echo $e;
}
catch (Exception $e) {
    echo $e;
}

?>
