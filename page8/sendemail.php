<?php
session_start();
require_once('phpmailer/class.phpmailer.php');
require("phpmailer/class.smtp.php");
$mail = new PHPMailer(true);
$mail->IsSMTP();
$to='davidhariyanto08@gmail.com';
//$att="pdfnasabah/".$_SESSION['newid']."-".$_SESSION['nama'].".pdf";
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
	$mail->Host       = "103.225.209.36"; // isi dengan host sesuai keinginan Anda 103.225.209.37
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = "tls";
	$mail->Host       = "103.225.209.36";
	$mail->Port       = 25;
	$mail->SMTPDebug  = 0;
	$mail->Username   = 'support@esandar.co.id';  // isi dengan gmail anda
	$mail->Password   = 'superduper357';       // isi dengan password gmail anda
	//$mail->AddReplyTo('david@mss.co.id', 'Esandar');      
	$mail->AddAddress($to,'Real Account Request ['.$_SESSION['newid'].']'); // isi alamat tujuan email, NB : khusus untuk mengirim dari gmail ke yahoo agak lama
	$mail->AddBCC("davidhariyanto08@gmail.com", 'Real Account Request ['.$_SESSION['newid'].']');
	$mail->SetFrom('support@esandar.co.id', 'Real Account Request ['.$_SESSION['newid'].']'); 
	$mail->Subject = 'Test Email SMTP Support Esandar';
	//$mail->AddAttachment($att);
	$mail->AltBody = 'Untuk melihat email ini, gunakan browser yang kompatibel dengan html';
	
	$mail->Body = "Test Email use support@esandar.co.id";
	$mail->Send();
	
} 
catch (phpmailerException $e){print_r($mail);
    echo $e;
}
catch (Exception $e) {
    echo $e;
}

?>
