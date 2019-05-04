<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('phpmailer/class.phpmailer.php');
require("phpmailer/class.smtp.php");
$mail = new PHPMailer(true);
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
	$mail->setFrom('support@esandar.co.id', 'Real Account Request ['.$_SESSION['newid'].']'); 
	$mail->Subject = 'Test Email SMTP Support Esandar';
	//$mail->AddAttachment($att);
	$mail->AltBody = 'Untuk melihat email ini, gunakan browser yang kompatibel dengan html';
	
	$mail->Body = "Test Email use support@esandar.co.id";
	$mail->send();
	
} 
catch (phpmailerException $e){print_r($mail);
    echo $e;
}
catch (Exception $e) {
    echo $e;
}

?>
