<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page 2</title>

	<!---------- CSS ------------>
	<link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script type='text/javascript' >
function myFunction() {
    var d = new Date();
    var da = d.getDate();
    var m = d.getMonth();
    m = m+1;
    var y = d.getFullYear();
    var gab = "" + da + "-" + m + "-" + y;
    document.getElementById('tanggalya').value = gab;
	document.getElementById('tidak').disabled=true;
}

function validateForm()
{
//jQuery.noConflict();
var x=$("input[name=radio2]:checked").val();
var y=$('#tidak').val();

  if (x==null || x=="")
  {
  alert("Pernyataan Menerima atau tidak harus diisi");
  return false;
  }
  else if (x==y)
  {
  alert("Silakan pilih 'Ya' untuk lanjut ke halaman berikutnya");
  return false;
  }
}
</script>

<body>

    <!--BEGIN #signup-form -->
    <div id="signup-form"><img src="image/logo-esandar.jpg" width="30%">
	
		<h2 align="left"><p class="mda" align="left"><a href="delete1.php" style="font-size:20px;"><img src="image/mda.PNG" width="120px"></a></p></h2>
        <!--BEGIN #subscribe-inner -->
        <div id="signup-inner">
        
        	<div class="clearfix" id="header">
        	
        		<p align='right' class='paging1'>Page <input class='paging' type="text" value="2" disabled> of <input class='paging' type="text" value="9" disabled></p>
				<br/><br/><br/>
				
				<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas<br/>
				Perdagangan Berjangka Komoditi <br/>
				Nomor: 107/BAPPEBTI/PER/11/2013</p><br/>

       
                <h2><center>Formulir Nomor 107.PBK.01<br/>
PROFIL PERUSAHAAN PIALANG BERJANGKA</center></h2><br/>
				<table width="100%" border="0" style="border-color:#00000">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>PT. Esandar Arthamas Berjangka</td>
					</tr>
					<tr>
						<td valign='top'>Alamat</td>
						<td valign='top'>:</td>
						<td>Agung Podomoro Land Tower Lt 36<br/>
						Jl Letjen S Parman Kav 28<br/>
						Jakarta Barat 11470 Indonesia</td>
					</tr>
					<tr>
						<td>No.Telepon</td>
						<td>:</td>
						<td>(021) 2933 92 29</td>
					</tr>
					<tr>
						<td>Faksimili</td>
						<td>:</td>
						<td>(021) 2933 92 30</td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>:</td>
						<td>info@esandar.co.id</td>
					</tr>
					<tr>
						<td>Home-page</td>
						<td>:</td>
						<td>http://esandar.co.id</td>
					</tr>
				</table><br/>
				<p align='justify' style='font-size:19px'><strong> Susunan Pengurus Perusahaan</strong><br></p>
				<table width="100%" border="0" style="border-color:#00000">
					<tr>
						<td>Direktur Utama</td>
						<td>:</td>
						<td>Francois Haberth Hallatu</td>
					</tr>
					<tr>
						<td>Direktur Kepatuhan</td>
						<td>:</td>
						<td>Zahid Anwari</td>
					</tr>
					<tr>
						<td>Direktur Operasional</td>
						<td>:</td>
						<td>Handoko</td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td align="justify"><strong>Dewan Komisaris</strong></td>
					</tr>
					<tr>
						<td>Komisaris Utama</td>
						<td>:</td>
						<td>Supardi Hardjono</td>
					</tr>
					<tr>
						<td>Komisaris</td>
						<td valign="top">:</td>
						<td>Tjhia Sun Hok</td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td colspan='5'><h3>Susunan Pemegang Saham Perusahaan</h3></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td width="40%">Nomor dan Tanggal Izin Usaha dari<br/>Bappebti</td>
						<td valign='top'>:</td>
						<td valign='top'>No 78/BAPPEBTI/PA/07/2012</td>
					</tr>
					<tr class="tr1">
						<td>Nomor dan Tanggal Keanggotaan<br/>Bursa Berjangka</td>
						<td valign='top'>:</td>
						<td valign='top'>SPAB-070/BBJ/05/04</td>
					</tr>
					<tr>
						<td>Nomor dan Tanggal Keanggotaan<br/>Lembaga Kliring Berjangka</td>
						<td valign='top'>:</td>
						<td valign='top'>21/AK-KBI/PA/X/2012</td>
					</tr>
					<tr class="tr1">
						<td>Nomor dan Tanggal Persetujuan<br/>sebagai Peserta Sistem Perdagangan Alternatif</td>
						<td valign='center'>:</td>
						<td valign='center'>SPAB-070/BBJ/05/04</td>
					</tr>
					<tr>
						<td>Nama Penyelenggara Sistem<br/>Perdagangan Alternatif</td>
						<td valign='top'>:</td>
						<td valign='top'>PT. Harta International Investama</td>
					</tr>
					<tr class="tr1">
						<td>Kontrak Berjangka Yang Diperdagangkan</td>
						<td valign='top'>:</td>
						<td valign='top'>Kakao dan GOL</td>
					</tr>
					<tr>
						<td>Kontrak Derivatif Syariah Yang Diperdagangkan</td>
						<td valign='top'>:</td>
						<td valign='top'>-</td>
					</tr>
					<tr class="tr1">
						<td valign='top'>Kontrak Derivatif dalam Sistem Perdagangan Alternatif</td>
						<td valign='top'>:</td>
						<td valign='top'>Forex<br/>Stock Indeks<br/>Komoditi</td>
					</tr>
					<tr>
						<td valign='top'>Kontrak Derivatif dalam Sistem<br/>Perdagangan Alternatif dengan volume<br/>minimum 0,1 (nol koma satu) lot yang<br/>diperdagangkan</td>
						<td valign='top'>:</td>
						<td valign='top'>Forex<br/>
						Stock Indeks<br/>
						Komoditi</td>
					</tr>
					<tr class="tr1">
						<td valign='top'>Biaya secara rinci yang dibebankan<br/>kepada Nasabah</td>
						<td valign='top'>:</td>
						<td valign='top'>Biaya Komisi per lot<br/>
						Biaya Swap<br/>
						Biaya Penyerahan fisik (apabila ada)</td>
					</tr>
					<tr>
						<td valign='top'>Nomor atau alamat email jika terjadi<br/>keluhan</td>
						<td valign='top'>:</td>
						<td valign='top'>021-2933 9318 atau<br/>admin@esandar.co.id dan clients.esandar@yahoo.com</td>
					</tr>
					<tr class="tr1">
						<td valign='top'>Sarana penyelesaian perselisihan yang<br/>dipergunakan apabila terjadi perselisihan</td>
						<td valign='top'>:</td>
						<td valign='top'>Badan Arbitrase Perdagangan Berjangka Komoditi Pengadilan Negeri Setempat</td>
					</tr>
					<tr class="tr1">
						<td valign='top'>Nama-Nama Wakil Pialang Berjangka<br/>yang Bekerja di Perusahaan Pialang Berjangka</td>
						<td valign='top'>:</td>
						<td valign='top'>
						- Francois Haberth Hallatu<br/>
						- Sulianto<br/>
						- Mohammad Alamsyah Abdi Negara<br/>
						- Handoko<br/>
						- Neneng Rihla<br/>
						- Dede Mulyadi<br/>
						- Muhammad Iqbal<br/>
						- Widi Kurniawan<br/>
						- Inayatur Rohmaniyah
						</td>
					</tr>
					<tr>
						<td valign='top'>Nama-Nama Wakil Pialang Berjangka yang secara khusus ditunjuk oleh Pialang Berjangka untuk melakukan verifikasi dalam rangka penerimaan<br/>Nasabah elektronik on-line</td>
						<td valign='top'>:</td>
						<td>
						- Sulianto<br/>
						- Mohammad Alamsyah Abdi Negara<br/>
						- Dede Mulyadi<br/>
						- Muhammad Iqbal<br/>
						- Neneng Rihla
						</td>
					</tr>
					<tr class="tr1">
						<td>Nomor Rekening Terpisah (Segregated Account) Perusahaan Pialang Berjangka</td>
						<td valign='top'>:</td>
						<td>- Bank Central Asia IDR cabang Sudirman<br/>
						&nbsp;&nbsp;&nbsp;No Acc : 035.313.6019</td>
					</tr>
					<tr>
						<td></td>
						<td></td>

						<td>- Bank Central Asia USD cabang Sudirman<br/>
						&nbsp;&nbsp;&nbsp;No Acc : 035.313.4610</td>
					</tr>
					<tr>
						<td></td>
						<td></td>

						<td>- Bank CCB Indonesia (China Construction Bank Indonesia) IDR Cabang Rawamangun<br/>
						&nbsp;&nbsp;&nbsp;No Acc : 100-7585-388</td>
					</tr>
				</table>

				</div>

			<h3 align='center'>PERNYATAAN TELAH MEMBACA PROFIL PERUSAHAAN PIALANG BERJANGKA</h3>
           
            <form onSubmit="return validateForm()" action='function2.php' method='post' name='formku'>
            	<table align='center' width='100%' border='0'>
					<tr>
						<td colspan='5' align="center">Dengan mengisi kolom 'YA' di bawah ini, saya menyatakan bahwa saya telah membaca dan menerima informasi PROFIL PERUSAHAAN PIALANG BERJANGKA, mengerti dan memahami isinya. </td>
					</tr>
					<tr>
						<td width="20%">Pernyataan menerima / tidak</td>
						<td>: </td>
						<td><input class="checkbox" name='radio2' type='radio' value='Ya' onclick="myFunction()">Ya
						<input class="checkbox" id='tidak' name='radio2' type='radio' value='Tidak'>Tidak
						</td>
					</tr>
					<tr>
						<td>Menyatakan pada Tanggal</td>
						<td>:</td>
						<td>&nbsp;
						<input class="kodeae" type='text' name='t1' id='tanggalya' readonly>
						</td>
					</tr>
				</table><br/>
						<p><center><button name='submit1' id="submit" type="submit">Submit</button></center></p>
						
            </form>
            
		


            </div>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

</body>
</html>
<?php
	}
	else
	{
			echo "<script>document.location = 'openrealaccount.php';</script>";
	}
}
else
{
		echo "<script>document.location = 'openrealaccount.php';</script>";
}
?>