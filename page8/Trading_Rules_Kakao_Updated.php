<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="../css/style.css" media="all" /></head>
<?php
include('config.php');
session_start();

$sql=mysql_query("select * from formulir1 where No_Identitas=".$_SESSION['id']."");
$hasil=mysql_fetch_array($sql);
?>
<script type="text/javascript" src="../jquery-1.11.0.js"></script>
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
var x=$("input[name=terima]:checked").val();
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
 <div id="signup-form"><img src="../image/logo-esandar.jpg" width="30%">
 <div id="signup-inner">
<h2 align="left"><p class="mda" align="left"><a href="../delete1.php" style="font-size:20px;"><img src="../image/mda.PNG" width="120px"></a></p></h2>
        	<div class="clearfix" id="header">
<p align="right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page8" value="8" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>
<?php session_start(); ?>
<form onSubmit="return validateForm()" method='post' action="functionkakao.php">
<p align=right>Lampiran 2 Peraturan Kepala Badan Pengawas<br> 
Perdagangan Berjangka Komoditi<br> 
Nomor: 107/BAPPEBTI/PER/11/2013<br></p>

<h3 align=center>Formulir: 107.PBK.06<br>
Peraturan Perdagangan (Trading Rules)<br>
Kontrak Berjangka Kakao<br></h3><br><hr>

<div align="justify">
<br><p style="font-size:18px"><b>A. Spesifikasi Kontrak</b></p>
	<table border="1" width=80% cellpadding="5" cellspacing="3" align="center"  class="tab-rule">
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Kode Kontrak</font></b></td>
			<td>CC5</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Satuan Kontrak</font></b></td>
			<td>5 metrik ton (5.000 kg)</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Bulan Kontrak</font></b></td>
			<td>Maret, Mei, Juli, September dan Desember</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Hari & Jam Perdagangan</font></b></td>
			<td>Hari perdagangan adalah hari kerja Bursa dari Senin-Jumat<br>
				Sesi 1 : 08.30 – 12.30 WIB<br>
				Sesi 2 : 16.00 – 02.00 WIB<br></td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Tukar Fisik dengan Berjangka</font></b></td>
			<td>Pihak-pihak yang melakukan transaksi jual/beli kakao diluar bursa dapat mendaftarkannya ke Bursa untuk ditukar dengan transaksi berjangka bagi kedua belah pihak.</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Hari Perdagangan Terakhir</font></b></td>
			<td>11 hari kerja sebelum hari kerja terakhir dari bulan penyerahan. Apabila hari tersebut bukan hari perdagangan, maka hari perdagangan sebelumnya merupakan hari perdagangan terakhir.</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Harga</font></b></td>
			<td>Rupiah per kilogram</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Perubahan Harga Minimum (Tik)</font></b></td>
			<td>Rp 10,-/kg<br>
				Rp 50.000,-/lot<br></td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Waktu Pemberitahuan Penyerahan</font></b></td>
			<td>Pihak yang mempunyai posisi jual pada Bulan Berjalan, dapat melakukan Pemberitahuan Penyerahan dalam waktu 10 (sepuluh) hari kerja sebelum hari kerja pertama dalam Bulan Berjalan.</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Batas Perubahan Harga</font></b></td>
			<td>Rp. 1.000,- per kilogram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya. Batas perubahan harga ini tidak berlaku untuk Bulan Berjalan dan Bulan Terdekat, kalau Bulan Berjalan sudah tidak diperdagangkan lagi.</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Mutu</font></b></td>
			<td>Mutu Fermentasi sesuai mutu yang ditentukan dalam Standard Nasional Indonesia (SNI) No. 2323-2008 yang dikeluarkan oleh Badan Standarisasi Nasional (BSN)</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Harga Penyelesaian</font></b></td>
			<td>Harga Penyelesaian ditentukan pada akhir sesi perdagangan berdasarkan harga rata-rata 10 transaksi dalam 5 menit dan/atau 30 menit dan/atau 1 hari terakhir atau menggunakan harga penutupan sebelumya jika dalam 1 hari tidak terjadi transaksi.</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Tempat Penyerahan</font></b></td>
			<td>Di Gudang Penyimpanan Terdaftar di Makasar, Palu dan Lampung, Pilihan tempat penyerahan berada pada penjual</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'><font color='white'>Posisi Wajib Lapor</font></b></td>
			<td>150 lot</td>
		</tr>
		<tr>
			<td class="top" style="background: #919191;"><b><font color='white'>Batas Posisi</font></b></td>
			<td>500 lot</td>
		</tr>
	</table>
</div>

<div align="justify">
<br><p style="font-size:18px"><b>B. Margin</b></p>	
<p style="font-size:15px">Nasabah harus menempatkan sejumlah dana (Margin) pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah berdasarkan bukti setoran bank, form penyetoran dana dan form penarikan dana yang diterima. Dana Nasabah bisa juga bertambah/berkurang bila terjadi laba/rugi pada transaksi di dalam Rekening Nasabah.</p>
<ol type=a style="font-size:15px; margin-left:50px; margin-top:0;"><li><b>Margin Awal Pembukaan Rekening</b><br>
Dana minimum yang wajib disetor oleh Nasabah untuk membuka Rekening (Account) sebesar Rp 50.000.000,-</li><br>
<li><b>Margin Requirement/Initial Margin</b><br>
Margin yang diberlakukan per-lot adalah Rp 7.500.000,-</li></ol><br>

<div align="justify">
<br><p style="font-size:18px"><b>C. Commission (Komisi)</b></p>
<p style="font-size:15px">Komisi dibebankan kepada Nasabah setiap kali transaksi per-lot (settled) , sebesar  
<b>Rp 500.000,-</b></p>
</div>

<div align="justify">
<br><p style="font-size:18px"><b>D. Margin In & Out</b></p>
<ol type="a" style="font-size:15px; margin-left:50px; margin-top:0;">
<li>Nasabah dapat melakukan transaksi setelah dana good fund.</li>
<li>Untuk penarikan margin dapat dilakukan dengan mengajukan permohonan  setiap hari kerja  Senin – Jumat sampai  dengan pukul 12.00 WIB dengan menandatangani slip penarikan dana terlebih dahulu.</li>
</ol>
</div>

<div align="justify">
<br><p style="font-size:18px"><b>E. Price (Harga)</b></p>
<p style="font-size:15px">
Harga masing-masing kontrak sesuai dengan harga yang terjadi di Bursa Berjangka Jakarta dengan sistem JAFeTS 3.</p>
</div>

<div align="justify">
<br><p style="font-size:18px"><b>F. Sistem Order</b></p>
<p style="font-size:15px">
Nasabah dapat menyampaikan amanatnya dengan cara menghubungi dealer PT. Esandar Arthamas Berjangka melalui telepon setiap hari perdagangan dan dealer akan meneruskan amanat Nasabah tersebut ke Bursa Berjangka Jakarta melalui sistem JAFeTS 3.</p>
</div>

<div align="justify">
<br><p style="font-size:18px"><b>G. Market Order</b></p>
<p style="font-size:15px">
Adalah amanat untuk membeli/menjual kontrak berjangka pada harga pasar di Bursa Berjangka Jakarta.</p>
</div>

<div align="justify">
<br><p style="font-size:18px"><b>H. Limit Order/Stop Order</b></p>
<ol type="a" style="font-size:15px; margin-left:50px; margin-top:0;">
<li>Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.</li>
<li>Nasabah dapat menempatkan amanat Limit Order di dalam waktu jam perdagangan berlangsung.</li>
</ol>
<p style="font-size:15px">Pemasangan Stop Order untuk membatasi Rugi <i>(stop loss)</i>  mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Berjangka.</p>
</div>

<div align="justify">
<br><p style="font-size:18px"><b>I. Over Trading</b></p>
<p style="font-size:15px">
Perusahaan akan menolak order Nasabah apabila Nasabah melakukan transaksi yang melebihi dana atau margin yang ada.</p>

<div align="justify">
<br><p style="font-size:18px"><b>J. Call Margin</b></p>
<p style="font-size:15px">
Call margin akan dilakukan apabila floating loss dari posisi transaksi Nasabah yang masih terbuka/open menyentuh/mencapai range (50% < call margin < 80%) terhadap Equity yang ada. Untuk mempertahankan posisi Nasabah yang terbuka maka setiap Nasabah diharapkan untuk segera menambah kekurangan margin.
</p>

<div align="justify">
<br><p style="font-size:18px"><b>K. Force Liquidation</b></p>
<p style="font-size:15px">
Apabila Nasabah tidak menambah kekurangan margin (memenuhi call margin), maka  perusahaan berhak melikuidasi posisi terbuka tersebut pada saat terjadi kondisi floating loss menyentuh/mencapai level &#8804; 50% dari Margin Requirement.<br> 
Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak Berjangka tersebut.</p>

<div align="justify">
<br><p style="font-size:18px"><b>L. Akhir Masa Kontrak</b></p>
<ol type="a" style="font-size:15px; margin-left:50px; margin-top:0;">
<li>Apabila Nasabah masih memiliki posisi terbuka <b>Jual</b> hingga jatuh tempo kontrak bulan berjalan maka Nasabah wajib menyerahkan fisik kontrak berupa Kakao dengan standar Mutu senilai 5.000 Kg/lot dan menerima dana senilai kontrak.</li>
<li>Apabila Nasabah masih memiliki posisi terbuka <b>Beli</b> hingga jatuh tempo kontrak bulan berjalan maka Nasabah menerima fisik kontrak berupa Kakao dengan standar Mutu senilai 5.000 Kg/lot dan membayar atau melunasi dana senilai kontrak.</li></ol>

<div align="justify">
<br><p style="font-size:18px"><b>M. Kerahasiaan</b></p>
<p style="font-size:15px">
Setiap Account memiliki phone password yang sifatnya <b>SANGAT PRIBADI</b> dan <b>RAHASIA.</b> Phone password digunakan setiap kali Nasabah ingin melakukan transaksi. Jika terjadi perbedaan phone password yang di sebutkan Nasabah, dealer berhak menolak untuk melakukan transaksi.</p>

<b><p style="font-size:15px">Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor Account dan phone password akibat kelalaian Nasabah sendiri.</b></p>

<table width="100%" border="0" align="center">
<tr>
<td align="center" colspan="5" style="font-size:15px">
Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang<br/>
PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.<br>
</td>
</tr>
<tr>
<td width="221">Pernyataan menerima / tidak</td>
<td width="3">:</td>
<td width="66%">
      <input class='checkbox' id='ya' name="terima" type="radio" value="Ya" onclick="myFunction()">Ya
	<input class='checkbox' id='tidak' name="terima" type="radio" value="Tidak">Tidak</td>
</tr>
<tr>
<?php
$tgl = new datetime('Asia/Jakarta');
$tgl_str = $tgl->format('d-m-Y');
?>
<td>Menerima pada Tanggal</td>
<td>:</td>
<td>
<input class='kodeae' type='text' name='t1' id='tanggalya' readonly>

</td>
</tr>
</table>
  <table width="70%" align="center">
  <tr>
  <td>
  <center>
  <button id='submit' name='submit' type='submit'>Submit</button>
  </center>
  </td>
    </tr>
  </table>
	</form>
</div>
</div>
</div>
</body>
</html>
<?php
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