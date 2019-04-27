<?php

include('config.php');
include_once("/phpmailer/class.phpmailer.php");
$nologin = $_POST['nologin'];
$namanasabah = $_POST['namanasabah'];
$email = $_POST['email'];
$bank = $_POST['bank'];
$nba = $_POST['nba'];
$jumlah = $_POST['jumlah'];
$nominalidr = $_POST['nominalidr'];
$nominalusd = $_POST['nominalusd'];
$ip=$_SERVER['REMOTE_ADDR'];
$tgl = new datetime('Asia/Jakarta');
$tgl_str = $tgl->format('Y-m-d H:i:s');

if($jumlah=="Rp")
{
	echo "No Login:".$nologin."<br/>";
	echo "Nama Nasabah:".$namanasabah."<br/>";
	echo "Email:".$email."<br/>";
	echo "Nama Bank:".$bank."<br/>";
	echo "Nomor Bank Account:".$nba."<br/>";
	echo "Jumlah:".$jumlah."<br/>";
	echo "Nominal IDR:".$nominalidr."<br/>";
	echo "IP:".$ip."<br/>";	
	echo "Tanggal:".$tgl_str."<br/>";	
	
	$sql=mysqli_query($connect, "insert into withdrawal(nologin, namanasabah, email, bank, nba, jumlah, bukti, IP, date) values('$nologin','$namanasabah','$email','$bank','$nba', '$jumlah $nominalidr','$buktigambar','$ip','$tgl_str')");
	require_once('PHPMailer-master/class.phpmailer.php');
	$mail = new PHPMailer(true);
	$mail->IsSMTP();
	try 
		{
			$mail->Host       = "smtp.gmail.com"; // isi dengan host sesuai keinginan Anda 74.125.129.108
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = "tls";
			$mail->Host       = "smtp.gmail.com";
			$mail->Port       = 587;
			$mail->SMTPDebug  = 0;
			$mail->Username   = 'davidhariyanto08@gmail.com';  // isi dengan gmail anda
			$mail->Password   = 'Rx-*f3R@r1';       // isi dengan password gmail anda
			$mail->AddCC('admin@hif.co.id', 'HIF');   //admin@hif.co.id  
			$mail->AddAddress('hif.settlement@yahoo.com','HIF'); // hif.settlement@yahoo.com
			$mail->SetFrom('davidhariyanto08@gmail.com', 'HIF'); 
			$mail->Subject = "Penarikan $namanasabah";
			//$mail->AddAttachment($att);
			$mail->AltBody = 'Untuk melihat email ini, gunakan browser yang kompatibel dengan html';
			$mail->Body = "<table><center>Penarikan Dana Nasabah</center><tr><td>
			No Login</td><td>:</td><td> $nologin</td></tr>
			<tr><td>Nama Lengkap</td><td>:</td><td> $namanasabah</td></tr>
			<tr><td>Email</td><td>:</td><td> $email</td></tr>
			<tr><td>Bank</td><td>:</td><td> $bank</td></tr>
			<tr><td>No. Bank Account</td><td>:</td><td> $nba</td></tr>
			<tr><td>Jumlah</td><td>:</td><td> $jumlah $nominalidr</td></tr>
			<tr><td>IP</td><td>:</td><td> $ip</td></tr>
			<tr><td>Tanggal</td><td>:</td><td> $tgl_str</td></tr></table>";
			$mail->Send();
		
		}
		catch (phpmailerException $e)
		{ print_r($mail); 
		  echo $e;
		} 
		catch (Exception $e) 
		{ 
			echo $e;
		}
	
		$sql=mysqli_query($connect, "select email from withdrawal where email='$email'");
		$tangkap=mysqli_fetch_array($sql);
		
		if($tangkap)
		{
			
			$mail = new PHPMailer(true);
			$mail->IsSMTP();
			//$att="$buktigambar";
			try 
			{
				$mail->Host       = "smtp.gmail.com"; // isi dengan host sesuai keinginan Anda 74.125.129.108
				$mail->SMTPAuth   = true;
				$mail->SMTPSecure = "tls";
				$mail->Host       = "smtp.gmail.com";
				$mail->Port       = 587;
				$mail->SMTPDebug  = 0;
				$mail->Username   = 'davidhariyanto08@gmail.com';  // isi dengan gmail anda
				$mail->Password   = 'Rx-*f3R@r1';       // isi dengan password gmail anda
				$mail->AddAddress($email,'HIF'); // isi alamat tujuan email, NB : khusus untuk mengirim dari gmail ke yahoo agak lama
				$mail->SetFrom('davidhariyanto08@gmail.com', 'HIF'); 
				$mail->Subject = "Penarikan $namanasabah";
				//$mail->AddAttachment($att);
				$mail->AltBody = 'Untuk melihat email ini, gunakan browser yang kompatibel dengan html';
				$mail->Body = "<table><center>Penarikan Dana Nasabah</center><tr><td>
				No Login</td><td>:</td><td> $nologin</td></tr>
				<tr><td>Nama Lengkap</td><td>:</td><td> $namanasabah</td></tr>
				<tr><td>Email</td><td>:</td><td> $email</td></tr>
				<tr><td>Bank</td><td>:</td><td> $bank</td></tr>
				<tr><td>No. Bank Account</td><td>:</td><td> $nba</td></tr>
				<tr><td>Jumlah</td><td>:</td><td> $jumlah $nominalidr</td></tr>
				<tr><td>Tanggal</td><td>:</td><td> $tgl_str</td></tr></table>";
				$mail->Send();
		
			}
			catch (phpmailerException $e)
			{ print_r($mail); 
			echo $e;
			} 
			catch (Exception $e) 
			{ 
				echo $e;
			}
		}
	
}
else if ($jumlah=="USD")
{
	echo "No Login:".$nologin."<br/>";
	echo "Nama Nasabah:".$namanasabah."<br/>";
	echo "Email:".$email."<br/>";
	echo "Setoran:".$setoran."<br/>";
	echo "Nama Bank:".$bank."<br/>";
	echo "Nomor Bank Account:".$nba."<br/>";
	echo "Jumlah:".$jumlah."<br/>";
	echo "Nominal USD:".$nominalusd."<br/>";
	echo "IP:".$ip."<br/>";
	$sql=mysqli_query($connect, "insert into withdrawal(nologin, namanasabah, email, bank, nba, jumlah, bukti, IP, date) values('$nologin','$namanasabah','$email','$bank','$nba', '$jumlah $nominalusd','$buktigambar','$ip','$tgl_str')");
	require_once('PHPMailer-master/class.phpmailer.php');
	$mail = new PHPMailer(true);	
	$mail->IsSMTP();
	//$att="$buktigambar";
	try 
	{
		$mail->Host       = "smtp.gmail.com"; // isi dengan host sesuai keinginan Anda 74.125.129.108
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = "tls";
		$mail->Host       = "smtp.gmail.com";
		$mail->Port       = 587;
		$mail->SMTPDebug  = 0;
		$mail->Username   = 'davidhariyanto08@gmail.com';  // isi dengan gmail anda
		$mail->Password   = 'Rx-*f3R@r1';       // isi dengan password gmail anda
		$mail->AddAddress('admin@hif.co.id','HIF'); //
		$mail->AddCC('hif.settlement@yahoo.com', 'HIF');		
		$mail->SetFrom('davidhariyanto08@gmail.com', 'HIF'); 
		$mail->Subject = "Penarikan $namanasabah";
		//$mail->AddAttachment($att);
		$mail->AltBody = 'Untuk melihat email ini, gunakan browser yang kompatibel dengan html';
		$mail->Body = "<table><center>Penarikan Dana Nasabah<center><tr><td>
		No Login</td><td>:</td><td> $nologin</td></tr>
		<tr><td>Nama Lengkap</td><td>:</td><td> $namanasabah</td></tr>
		<tr><td>Email</td><td>:</td><td> $email</td></tr>
		<tr><td>Bank</td><td>:</td><td> $bank</td></tr>
		<tr><td>No. Bank Account</td><td>:</td><td> $nba</td></tr>
		<tr><td>Jumlah</td><td>:</td><td> $jumlah $nominalusd</td></tr>
		<tr><td>IP</td><td>:</td><td> $ip</td></tr>
		<tr><td>Tanggal</td><td>:</td><td> $tgl_str</td></tr></table>";
		$mail->Send();
	
	} catch (phpmailerException $e){print_r($mail); echo $e;
	} catch (Exception $e) { echo $e;
	}
	
	$sql=mysqli_query($connect, "select email from deposit where email='$email'");
	$tangkap=mysqli_fetch_array($sql);
	
	if($tangkap)
	{
		
		$mail = new PHPMailer(true);
		$mail->IsSMTP();
		//$att="$buktigambar";
		try 
		{
			$mail->Host       = "smtp.gmail.com"; // isi dengan host sesuai keinginan Anda 74.125.129.108
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = "tls";
			$mail->Host       = "smtp.gmail.com";
			$mail->Port       = 587;
			$mail->SMTPDebug  = 0;
			$mail->Username   = 'davidhariyanto08@gmail.com';  // isi dengan gmail anda
			$mail->Password   = 'Rx-*f3R@r1';       // isi dengan password gmail anda
			$mail->AddAddress($email,'HIF'); // isi alamat tujuan email, NB : khusus untuk mengirim dari gmail ke yahoo agak lama
			$mail->SetFrom('davidhariyanto08@gmail.com', 'HIF'); 
			$mail->Subject = "Penarikan $namanasabah";
			//$mail->AddAttachment($att);
			$mail->AltBody = 'Untuk melihat email ini, gunakan browser yang kompatibel dengan html';
			$mail->Body = "<table><center>Penarikan Dana Nasabah<center><tr><td>
			No Login</td><td>:</td><td> $nologin</td></tr>
			<tr><td>Nama Lengkap</td><td>:</td><td> $namanasabah</td></tr>
			<tr><td>Email</td><td>:</td><td> $email</td></tr>
			<tr><td>Bank</td><td>:</td><td> $bank</td></tr>
			<tr><td>No. Bank Account</td><td>:</td><td> $nba</td></tr>
			<tr><td>Jumlah</td><td>:</td><td> $jumlah $nominalidr</td></tr>
			<tr><td>Tanggal</td><td>:</td><td> $tgl_str</td></tr></table>";
			$mail->Send();
	
		}
		catch (phpmailerException $e)
		{ print_r($mail); 
		echo $e;
		} 
		catch (Exception $e) 
		{ 
			echo $e;
		}
	}

	
}


?>