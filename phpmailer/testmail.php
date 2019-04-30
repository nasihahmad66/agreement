<?php
include('phpmailer/class.phpmailer.php');
include('phpmailer/class.smtp.php'); // optional, gets called from within class.phpmailer.php if not already loaded
/*
$mail             = new PHPMailer();
$mail->Mailer	  = 'SMTP';
$body             = ('Testing Mail use phpmailer');
//$body             = eregi_replace("[\]",'',$body);
 
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = 'ssl://smtp.gmail.com'; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = 'ssl';                 // sets the prefix to the servier
$mail->Host       = 'ssl://smtp.gmail.com';      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = 'davidhariyanto08@gmail.com';  // GMAIL username
$mail->Password   = 'Rx-*f3R@r1';            // GMAIL password

$mail->SetFrom('davidhariyanto08@gmail.com', 'First Last');

$mail->AddReplyTo('id_bushido@yahoo.com','First Last');
 
$mail->Subject    = 'PHPMailer Test Subject via smtp (Gmail), basic';

$mail->AltBody    = 'To view the message, please use an HTML compatible email viewer!'; // optional, comment out and test
 
$mail->MsgHTML($body);

$address = 'david@mss.co.id';
$mail->AddAddress($address, 'John Doe');
 
//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
*/
/*
$mail = new PHPMailer();
$mail->SMTPAuth   = true;                  // enable SMTP authentication  
$mail->CharSet = 'utf-8';  
$mail->SMTPDebug  = 0;  
$mail->Mailer	  = 'SMTP';
$mail->IsSMTP();  // telling the class to use SMTP
$mail->SMTPSecure = 'ssl';                 // sets the prefix to the servier
$mail->Host     = 'ssl://smtp.gmail.com'; // SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->SetFrom('davidhariyanto08@gmail.com', 'First Last');
$mail->Username   = 'davidhariyanto08@gmail.com';  // GMAIL username
$mail->Password   = 'Rx-*f3R@r1';            // GMAIL password
$mail->AddAddress("id_bushido@yahoo.com");
$mail->Subject  = "An HTML Message";
$mail->Body     = "Hello, <b>my friend</b>! \n\n This message uses HTML entities!";
if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
*/
//date_default_timezone_set('America/Toronto');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "gdssdh";
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "dev.webmaster212@gmail.com";  // GMAIL username
$mail->Password   = "T3St123#";            // GMAIL password

$mail->SetFrom('dev.webmaster212@gmail.com', 'First Last');

//$mail->AddReplyTo("user2@gmail.com', 'First Last");

$mail->Subject    = "PRSPS password";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "nasihahmad66@gmail.com";
$mail->AddAddress($address, "user2");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}






?>