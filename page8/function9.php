<?php
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{
	
if(isset($_POST['submit'])){

include('../config.php');

//page1
$kode = $_SESSION['aecode'];
$namalengkap = $_SESSION['nama'];
$tempat = $_SESSION['tempat'];
$tanggal = $_SESSION['tgl1'];
$bulan = $_SESSION['bln1'];
$tahun = $_SESSION['thn1'];
$alamat = $_SESSION['alamat'];
$kodepos = $_SESSION['pos'];
$email = $_SESSION['email'];
$noid = $_SESSION['id'];
$notelp = $_SESSION['telepon'];
$pekerjaan = $_SESSION['kerja'];
$transaksi = $_SESSION['a'];
$sebutkan = $_SESSION['sebut'];
$tanggallahir = "$tanggal - $bulan - $tahun";

$nama_lengkap = $_POST['nama9'];
$tempat_lahir = $_POST['tempat9'];
$c3=$_POST['tgl9'];
$d3=$_POST['bln9'];
$e3=$_POST['thn9'];
$alamat_rumah = $_POST['alamat9'];
$kode_pos = $_POST['pos9'];
$no_identitas = $_POST['id9'];
$no_acc = $_POST['demo9'];
$pernyataan = $_POST['terima'];
$tgl = new datetime('Asia/Jakarta');
$terima_tanggal = $_POST['t1'];
$email = $_POST['email'];
$jk=$_SESSION['jk5'];
$newid = $_SESSION['newid'];
$wakil_pialang = '';
$tgl_verifikasi = '';
$tgl_add_pialang = '';
$note = '';

$query = mysqli_query($connect, "update formulir9 set nama_lengkap = '$nama_lengkap',tempat_lahir =  '$tempat_lahir',tanggal_lahir = '$c3',bulan_lahir = '$d3',tahun_lahir = '$e3',alamat_rumah = '$alamat_rumah',kode_pos = '$kode_pos',no_acc = 0,pernyataan =  '$pernyataan',terima_tanggal = '$terima_tanggal' where id='$newid'") or die(mysql_error());

$sql_mode = "SET sql_mode = ''";
$mode = mysqli_query($connect, $sql_mode);

$sql_pialang = "insert into namaid (
id, NAMA,jk_nasabah, no_identitas, alamat_rumah, no_acc, Wakil_Pialang, status_pialang, status_verifikasi, tanggal_verifikasi, tanggal_add_pialang, note, ip_address) 
values (
    '$newid','$nama_lengkap','$jk','$no_identitas','$alamat_rumah','$no_acc', '$wakil_pialang', 'Belum Selesai','Belum Terverifikasi', '$tgl_verifikasi', '$tgl_add_pialang', '$note', '".$_SESSION['ip']."'
    )";
$pialang = mysqli_query($connect, $sql_pialang);

if($pernyataan == "Ya")
{
		if($_SESSION['page1'] == "KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250" || $_SESSION['page1'] == "KONTRAK_BERJANGKA_KAKAO")
	{
		include('pdfnasabah/cetak.php');
                include('testmail.php');
		echo "

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Agreement Form</title>

	<!---------- CSS ------------>
	<link rel='stylesheet' type='text/css' href='../css/style.css'>

</head>
<body>
   <div id='signup-form'><img src='images/logo-esandar300x105.png'>
	
		<h2 align='left'><p class='mda' align='left'></p></h2>
        <!--BEGIN #subscribe-inner -->
        <div id='signup-inner'>
        
        	<div class='clearfix' id='header'>
        	<p align='right'><br/>

        
                <h2><center> Terima kasih telah mempercayakan investasi Anda bersama PT. Esandar Arthamas Berjangka</Strong></center></h2><br/>
				<h3><strong>Real Account Request $newid</strong></h3>
   
        <!--BEGIN #subscribe-inner -->
        <div id='signup-inner'>
        
        	<div class='clearfix' id='header'>
				
				<table width='100%' border='1' style='border-color:#00000' align='left'>
					<tr>
						<td width='20%'>Nama Lengkap</td>
						<td>:</td>
						<td> ".$_SESSION['nama']."</td>
                                                <td rowspan='11' valign='top' align='center'><a href='/agreement/page8/pdfnasabah/$newid-".$_SESSION['nama'].".pdf' target='_blank'><strong>Download File Agreement ".$_SESSION['nama']."</strong><br/><img src='PDF_Download_Button.jpg' width='170' height='100'/></a></td>
					</tr>
					<tr>
						<td width='20%'>Tempat / Tanggal Lahir</td>
						<td>:</td>
						<td>".$_SESSION['tempat']."  ".$_SESSION['tgl1']."-".$_SESSION['bln1']."-".$_SESSION['thn1']."</td>
					</tr>
					<tr>
						<td width='20%'>Alamat Rumah</td>
						<td>:</td>
						<td>".$_SESSION['alamat']."</td>
					</tr>
					<tr>
						<td width='20%'>Kode Pos</td>
						<td>:</td>
						<td>".$_SESSION['pos']."</td>
					</tr>
					<tr>
						<td width='20%'>Email</td>
						<td>:</td>
						<td>".$_SESSION['email']."</td>
					</tr>
					<tr>
						<td width='20%'>No.Identitas KTP / SIM / PASPOR</td>
						<td>:</td>
						<td>".$_SESSION['id']."</td>
					</tr>
					<tr>
						<td width='20%'>No. Telp Handphone</td>
						<td>:</td>
						<td>".$_SESSION['telepon']."</td>
					</tr>
					<tr>
						<td width='20%'>Pekerjaan</td>
						<td>:</td>
						<td>".$_SESSION['kerja5']."</td>
					</tr>
					<tr>
						<td width='20%'>Nama Bank</td>
						<td>:</td>
						<td>".$_SESSION['bank5']."</td>
					</tr>
					<tr>
						<td width='20%'>Cabang</td>
						<td>:</td>
						<td>".$_SESSION['cab5']."</td>
					</tr>
					<tr>
						<td width='20%'>No. Rekening Bank</td>
						<td>:</td>
						<td>".$_SESSION['noAC5']."</td>
					</tr>
				</table><br/>
				<table width='100%' border='0' style='border-color:#00000' align='left'>
					<tr>
						<td style='font-size:16px; font-family:Arial;'><br/><strong>Saat ini permohonan Real Account anda sedang kami proses, kemudian Wakil Pialang kami akan melakukan proses Verifikasi dan Konfirmasi kepada calon nasabah melalui telepon terekam.
</strong>
						</td>
</tr>
<tr>
</tr>
<tr>
<td style='font-size:16px; font-family:Arial;'><br/><br/><strong>Hormat Kami</strong></td>
</tr>
<tr>
<td style='font-size:16px; font-family:Arial;'><strong>PT. Esandar Arthamas Berjangka</strong></td>
					</tr>
				</table>
				</div>

            </div>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

</body>
</html>";
	}
		else if($_SESSION['page1'] == "FOREX_0,1_LOT" || $_SESSION['page1'] == "FOREX_REGULAR" || $_SESSION['page1'] == "INDEX_USD_0,1_LOT" || $_SESSION['page1'] == "INDEX_USD_REGULAR" || $_SESSION['page1'] == "INDEX_IDR_0,1_LOT" || $_SESSION['page1'] == "INDEX_IDR_REGULAR")
	{
		include('pdfnasabah/cetak.php');
                include('testmail.php');
		echo "

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Agreement Form</title>

	<!---------- CSS ------------>
	<link rel='stylesheet' type='text/css' href='../css/style.css'>

</head>
<body>
   <div id='signup-form'><img src='images/logo-esandar300x105.png'>
	
		<h2 align='left'><p class='mda' align='left'></p></h2>
        <!--BEGIN #subscribe-inner -->
        <div id='signup-inner'>
        
        	<div class='clearfix' id='header'>
        	<p align='right'><br/>

        
                <h2><center> Terima kasih telah mempercayakan investasi Anda bersama PT. Esandar Arthamas Berjangka</Strong></center></h2><br/>
				<h3><strong>Real Account Request $newid</strong></h3>
   
        <!--BEGIN #subscribe-inner -->
        <div id='signup-inner'>
        
        	<div class='clearfix' id='header'>
				
				<table width='100%' border='1' style='border-color:#00000' align='left'>
					<tr>
						<td width='20%'>Nama Lengkap</td>
						<td>:</td>
						<td> ".$_SESSION['nama']."</td>
                                                <td rowspan='11' valign='top' align='center'><a href='/agreement/page8/pdfnasabah/$newid-".$_SESSION['nama'].".pdf' target='_blank'><strong>Download File Agreement ".$_SESSION['nama']."</strong><br/><img src='PDF_Download_Button.jpg' width='170' height='100'/></a></td>
					</tr>
					<tr>
						<td width='20%'>Tempat / Tanggal Lahir</td>
						<td>:</td>
						<td>".$_SESSION['tempat']."  ".$_SESSION['tgl1']."-".$_SESSION['bln1']."-".$_SESSION['thn1']."</td>
					</tr>
					<tr>
						<td width='20%'>Alamat Rumah</td>
						<td>:</td>
						<td>".$_SESSION['alamat']."</td>
					</tr>
					<tr>
						<td width='20%'>Kode Pos</td>
						<td>:</td>
						<td>".$_SESSION['pos']."</td>
					</tr>
					<tr>
						<td width='20%'>Email</td>
						<td>:</td>
						<td>".$_SESSION['email']."</td>
					</tr>
					<tr>
						<td width='20%'>No.Identitas KTP / SIM / PASPOR</td>
						<td>:</td>
						<td>".$_SESSION['id']."</td>
					</tr>
					<tr>
						<td width='20%'>No. Telp Handphone</td>
						<td>:</td>
						<td>".$_SESSION['telepon']."</td>
					</tr>
					<tr>
						<td width='20%'>Pekerjaan</td>
						<td>:</td>
						<td>".$_SESSION['kerja5']."</td>
					</tr>
					<tr>
						<td width='20%'>Nama Bank</td>
						<td>:</td>
						<td>".$_SESSION['bank5']."</td>
					</tr>
					<tr>
						<td width='20%'>Cabang</td>
						<td>:</td>
						<td>".$_SESSION['cab5']."</td>
					</tr>
					<tr>
						<td width='20%'>No. Rekening Bank</td>
						<td>:</td>
						<td>".$_SESSION['noAC5']."</td>
					</tr>
				</table><br/>
				<table width='100%' border='0' style='border-color:#00000' align='left'>
					<tr>
						<td style='font-size:16px; font-family:Arial;'><br/><strong>Saat ini permohonan Real Account anda sedang kami proses, kemudian Wakil Pialang kami akan melakukan proses Verifikasi dan Konfirmasi kepada calon nasabah melalui telepon terekam.
</strong>
						</td>
</tr>
<tr>
</tr>
<tr>
<td style='font-size:16px; font-family:Arial;'><br/><br/><strong>Hormat Kami</strong></td>
</tr>
<tr>
<td style='font-size:16px; font-family:Arial;'><strong>PT. Esandar Arthamas Berjangka</strong></td>
					</tr>
				</table>
				</div>

            </div>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

</body>
</html>";
unset($_SESSION['aecode']);
		
	}

	}
}
}
	else
	{
			echo "<script>document.location = '../openrealaccount.php';</script>";
	}
}
else
{
		echo "<script>document.location = '../openrealaccount.php';</script>";
}
?>