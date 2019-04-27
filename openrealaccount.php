<?php

	require 'config.php';

	$sql = mysqli_query($connect,'SELECT * FROM managers WHERE kode_ae="'.$_GET['aeid'].'"');
	$row = mysqli_fetch_array($sql);

	if ($row['status'] == 1) {
		$_SESSION['id'] = $row['id'];
	} else if ($row['status'] == 2) {
		$_SESSION['id'] = $row['id'];
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agreement Form</title>

	<!---------- CSS ------------>
	<link rel="stylesheet" type="text/css" href="css/style.css">

 <link rel="stylesheet" href="datepicker/jquery-ui.css">
  <script src="datepicker/jquery-1.10.2.js"></script>
  <script src="datepicker/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
<link rel="shortcut icon" href="/images/favicon.ico">

</head>
<!--<script type="text/javascript" src="jquery-1.11.0.js"></script>-->
<script>
function validate()
{
	if (formnad.nomoraccountdemo.value == "") 
	{ 
		alert("Silakan isi Nomor Account Demo"); 
		formnad.nomoraccountdemo.focus(); 
		return false; 
	}
	else return true; 
}
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false//disable key press
}
}
</script>

<body>
    <!--BEGIN #signup-form -->
    <div id="signup-form"><img src="image/logo-esandar.jpg" width="30%">
        <!--BEGIN #subscribe-inner -->
        <div id="signup-inner">
        	<div class="clearfix" id="header"><br/><br/>
			<form onSubmit="return validate()" action="openrealaccount_exec.php" name="formnad"  method='post'>
				<table width="100%" border="0" style="border-color:#00000">
					<tr>
						<td style="font-size:20px"><h2 align="center"><strong><u>Open Real Account</u></Strong></h2></td>
					</tr>
					<tr>
						<td><ul><li>Untuk Account Kontrak Berjangka dapat melakukan demo terlebih dahulu dengan menghubungi settlement PT. Esandar Arthamas Berjangka pada hari kerja di nomor telp: 021-29339318.
						<br/>Harap mencatat Login yang disesuaikan dengan nama nasabah.</li><br/>
						<li>Untuk Account Kontrak Derivatif Forex, Loco London, dan Stock Indeks, dapat mengunduh aplikasi <a href="http://esandar.co.id/index.php/download-page" target="_blank">Esandar Trader</a> melalui PC / Android / Ipad / Iphone (Link ke Buka Account Demo) dan membuat account demo pada server Esandar-Demo, dan harap mencatat login yang disesuaikan dengan nama nasabah.</li></ul>
						</td>
					</tr>
					<tr>
						<td><center><h3>(Untuk Nomor Account Demo yang diisi salah dan tidak sesuai dengan nama nasabah, maka account real tidak akan diproses)</h3></center>
						</td>
					</tr>
					<tr>
						<td>
							<form onSubmit="return validate()" action="#" name="formku"  method='post'>
								<table width="100%" border="0" style="border-color:#00000">
									<tr>
										<td align="right" width="40%">Nomor Account Demo <font color="red"> *</font></td>
										<td>:</td>
										<td><input class="nama" type="text" name="nomoraccountdemo" onKeyPress="return numbersonly(event)"/>
										</td>
									</tr>
									<tr>
										<td align="center" width="40%" colspan="3"><font color="red"> *</font> Belum punya nomor account demo? <a href="/index.php/more-page/download-page">klik disini</a></td>
									</tr>
								</table>
							
						</td>
					</tr>
				</table><br/><br/><br/>

				<h2 align="center"><Strong>PERHATIAN !!!<br/>
				HARAP DIBACA TERLEBIH DAHULU</Strong></h2><br/>
				
				
				<table width="100%" border="1" style="border-color:#00000">
					<tr>
						<td style="font-size:20px"><Strong>Nasabah hanya dapat dianggap cakap apabila sesuai dengan persyaratan di bawah ini :</Strong></td>
					</tr>
					<tr>
						<td><table width="100%" border="0" style="border-color:#00000">
							<tr>
								<td valign="top">- </td>
								<td align="justify">Nasabah pada saat mengisi perjanjian nasabah secara elektronis memiliki usia minimal 21 tahun.</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td align="justify">Tidak dinyatakan pailit oleh pengadilan.</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td align="justify">Nasabah bukan merupakan pegawai atau pejabat dari BAPPEBTI, Bursa Berjangka, atau Lembaga Kliring Berjangka.</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td align="justify">Nasabah bukan merupakan Bendahara  yang melayani kepentingan umum.</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td align="justify">Nasabah dengan keterbelakangan mental, buta, buta huruf dan keterbatasan fisik lainnya yang dapat mengganggu (diperkirakan dapat mengganggu) tidak diperkenankan untuk membuka akun.</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td align="justify">Memiliki pengetahuan bertransaksi yang cukup, dibuktikan dengan adanya demo account.</td>
							</tr></table>
						</td>
					</tr>
				</table><br/>

				<table width="100%" align="left" border="1">
					<tr>
						<td style="font-size:20px"><Strong>Dokumen yang harus dipersiapkan :</Strong></td>
					</tr>
					<tr>
						<td><table width="100%" align="left" border="0">
							<tr>
								<td valign="top">- </td>
								<td align="justify">Persiapkan nomor Rekening bank yang hendak dipakai untuk lalu lintas margin yang disesuaikan dengan nama nasabah. (Penarikan dana menggunakan rekening bank BCA dapat dilakukan pada hari itu juga, sedangkan penggunaan rekening bank lain dapat mengakibatkan dana sampai lebih dari T+0 ke rekening Nasabah.)</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td>Scan 3 buah dokumen berikut ini dengan ukuran yang tidak lebih besar dari 1MB/dokumen:</td>
							</tr>
							<tr>
								<td></td>
								<td>1. KTP / SIM / Passpor dan</td>
							</tr>
							<tr>
								<td></td>
								<td>2. Photo Berwarna Terbaru dan</td>
							</tr>
							<tr>
								<td></td>
								<td>3. Salah satu dari dokumen dibawah ini (pilih salah satu):</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<table width="100%" align="left" border="0">
									<tr>
										<td valign="top">&nbsp;&nbsp;&nbsp;a). </td>
										<td align="justify">Rekening Koran Bank 3 (tiga) bulan terakhir yang dipergunakan sebagai tempat penyetoran dan penarikan margin (hanya dapat dilakukan ke rekening bank yang tercantum dalam Aplikasi Pembukaan Rekening Transaksi secara Elektronik On-Line ini. Dalam hal ada lebih dari 1 (satu) rekening Bank yang akan dipergunakan, maka wajib melampirkan seluruh rekening Bank dimaksud;</td>
									</tr>
									<tr>
										<td valign="top">&nbsp;&nbsp;&nbsp;b). </td>
										<td align="justify">Surat Keterangan Bekerja;</td>
									</tr>
									<tr>
										<td valign="top">&nbsp;&nbsp;&nbsp;c). </td>
										<td align="justify">Surat Keterangan pendapatan (untuk calon Nasabah yang berstatus pegawai) atau Laporan Keuangan 3 (tiga) bulan terakhir (untuk calon Nasabah berstatus wiraswasta atau pemilik usaha)</td>
									</tr>
									<tr>
										<td valign="top">&nbsp;&nbsp;&nbsp;d). </td>
										<td align="justify">Tagihan Kartu Kredit</td>
									</tr>
									<tr>
										<td valign="top">&nbsp;&nbsp;&nbsp;e). </td>
										<td align="justify">Rekening Listrik / Telepon</td>
									</tr>
									<tr>
										<td valign="top">&nbsp;&nbsp;&nbsp;f). </td>
										<td align="justify">Bukti Kepemilikan Tanah atau bangunan atau kendaraan Bermotor</td>
									</tr>
									<tr>
										<td valign="top">&nbsp;&nbsp;&nbsp;g). </td>
										<td align="justify">Dokumen Lain yang terkait, yang relevan berdasarkan pertimbangan Wakil Pialang Berjangka.</td>
									</tr>
									</table>
								</td>
							</tr>
							</table>
						</td>
					</tr>
				</table><center><button id="submit" name="submit" type="submit">Lanjutkan Pengisian Real Account</button></center>
							</form>
				</div>
            </div>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

</body>
</html>