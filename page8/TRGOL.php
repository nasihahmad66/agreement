<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<!DOCTYPE HTML> 
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
</head>
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
<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page8" value="8" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>

<?php session_start(); ?>
<form onSubmit="return validateForm()" method='post' action='functiongol.php'>
<p align='right'>Lampiran 2 Peraturan Kepala Badan  Pengawas <br />
  Perdagangan Berjangka Komoditi <br />
  Nomor: 107/BAPPEBTI/PER/11/2013 </p><br />
<h3 align='center'><b>Formulir: 107.PBK.06<br />
   Peraturan Perdagangan  (Trading Rules)<br />
   Kontrak Berjangka Emas (GOL.  GOL250, GOL100)</b><br /></h3><br>
   <br>
<div align="justify" style="width:90%;">
<ol type='A' style="font-size:16px;">
<li><h4><b>Spesifikasi Kontrak</b></h4><br>
<table align="center" width='70%' border='1' class="tab-rule2" cellspacing="0" cellpadding="0">
  <tr class="top">
    <td width='18%' align='center' valign='top'>&nbsp;</td>
    <td width='30%' align='center' valign='top'><strong>Kontrak 1Kg</strong></td>
    <td width='30%' align='center' valign='top'><strong>Kontrak 100 Gram</strong></td>
    <td width='22%' align='center' valign='top'><strong>Kontrak 100 Gram</strong></td>
  </tr>
  <tr>
    <td align='center' valign='top' style="background: #919191;" class="bottomline"><font color='white'>Kode  Kontrak</font></td>
    <td align='center' valign='top' class="bottomline">GOL</td>
    <td align='center' valign='top' class="bottomline">GOL 250 </td>
    <td align='center' valign='top' class="bottomline">GOL 100 </td>
  </tr>
  <tr>
    <td align='center' valign='top' style="background: #919191;" class="bottomline"><font color='white'>Dasar  Kontrak</font></td>
    <td align='center' valign='top' class="bottomline">1  kg Emas dengan  nomor seri dan stempel dari refineri yang diakui LBMA.</td>
    <td align='center' valign='top' class="bottomline">250  g  Emas dengan  nomor seri dan stempel dari refineri yang diakui LBMA.</td>
    <td align='center' valign='top' class="bottomline">100g Emas dengan nomor seri dan stempel dari refineri yang diakui LBMA.</td>
  </tr>
  <tr>
    <td align='center' valign='top' style="background: #919191;" class="bottomline"><font color='white'>Satuan  Kontrak</font></td>
    <td align='center' valign='top' class="bottomline">1  kg (1000 gram)</td>
    <td align='center' valign='top' class="bottomline">250  gram</td>
    <td align='center' valign='top' class="bottomline">100 gram </td>
  </tr>
  <tr>
    <td align='center' valign='top' style="background: #919191;" class="bottomline"><font color='white'>Satuan  Penyerahan</font></td>
    <td align='center' valign='top' class="bottomline">5  Kg (5 Lot @ 1000 gram)</td>
    <td align='center' valign='top' class="bottomline">1 kg (4  Lot @  250  gram) </td>
    <td align='center' valign='top' class="bottomline">1 kg (10  Lot @  100 gram) </td>
  </tr>
  <tr>
    <td align='center' valign='top' style="background: #919191;" class="bottomline"><font color='white'>Posisi  Wajib Lapor</font></td>
    <td align='center' valign='top' class="bottomline">150 Lot</td>
    <td align='center' valign='top' class="bottomline">600 Lot</td>
    <td align='center' valign='top' class="bottomline">1.500 Lot</td>
  </tr>
  <tr>
    <td align='center' valign='top' style="background: #919191;" class="bottomline"><font color='white'>Batas  Posisi Spekulatif</font></td>
    <td align='center' valign='top' class="bottomline">500 Lot</td>
    <td align='center' valign='top' class="bottomline">2000 Lot</td>
    <td align='center' valign='top' class="bottomline">5.000 Lot</td>
  </tr>
  <tr>
    <td align='center' valign='top' style="background: #919191;" class="bottomline"><font color='white'>Perubahan  Harga Minimum (Tik)</font></td>
    <td align='center' valign='top' class="bottomline">
      Rp 50,-/gram (termasuk    PPN)<br /><br />Rp 50.000,-/lot (termasuk  PPN)     </td>
    <td align='center' valign='top' class="bottomline">Rp 50,-/gram (termasuk    PPN)<br /><br />  Rp 12.500,-/gram (termasuk  PPN)    </td>
    <td align='center' valign='top' class="bottomline">Rp 50,-/gram (termasuk PPN)<br /><br />
Rp 5.000,-/gram (termasuk PPN)</td>
  </tr>
  <tr>
    <td align='center' valign='top' style="background: #919191;" class="bottomline"><font color='white'>Batas Perubahan Harga</font></td>
    <td align='center' valign='top' class="bottomline">Rp 5000,- per gram diatas  atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
    <td align='center' valign='top' class="bottomline">Rp 5000,- per gram diatas  atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
    <td align='center' valign='top' class="bottomline">Rp 10.000,-  per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
  </tr>
</table>
</li>
<br>
<li><h4><b>Margin</b></h4>
<p>Nasabah harus  menempatkan sejumlah dana (<em>Margin</em>)  pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin  pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah  berdasarkan bukti setoran bank, form penyetoran dana dan form penarikan dana  yang diterima. Dana Nasabah bisa juga bertambah/berkurang bila terjadi laba/rugi  pada transaksi di dalam Rekening Nasabah.</p>
<ol type='a' style="margin-left:3%;">
  <li><strong>Margin  Awal Pembukaan Rekening</strong>
<br>Dana minimum yang wajib disetor oleh Nasabah untuk membuka  Rekening (Account) sebesar <em>Rp 50.000.000</em>,-</li>
  <li><strong>Margin  Requirement/Initial Margin</strong>
<br>Margin yang diberlakukan  per-lot adalah
  <table width='70%' border='0' align="center" class="tab-rule2" cellspacing="0" >
    <tr>
      <td align='center' class="borderline">Initial Margin</td>
      <td align='center' class="borderline">Kontrak 1 Kg (1000 gram)</td>
      <td align='center' class="borderline">Kontrak 250 gram</td>
      <td align='center' class="borderline" style="border-right: solid 1px #000;">Kontrak 100 gram</td>
    </tr>
    <tr>
      <td align='center' class="borderline">Daytrade</td>
      <td align='center' class="borderline">Rp.10.000.000,-</td>
      <td align='center' class="borderline">Rp.2.500.000,-</td>
      <td align='center' class="borderline" style="border-right: solid 1px #000;">Rp. 1.000.000,-</td>
    </tr>
  </table></li></ol>
  </li> <br>
<li><h4>Commission (Komisi)</h4>
    Komisi dibebankan kepada Nasabah setiap kali transaksi per-lot (settled) (lihat table dibawah ini)<br>
<table width='70%' border='1' align="center" class="tab-rule2" cellpadding="0" cellspacing="0">
  <tr>
    <td>Batas Perubahan Harga</td>
    <td>Batas perubahan harga ini  tidak berlaku untuk Bulan Berjalan dan Bulan Terdekat, kalau Bulan Berjalan  sudah tidak diperdagangkan lagi.</td>
  </tr>
  <tr>
    <td>Tukar Fisik dengan Berjangka</td>
    <td>Pihak-pihak yang melakukan  transaksi jual/beli Emas diluar bursa dapat mendaftarkannya ke Bursa untuk  ditukar dengan transaksi berjangka bagi kedua belah pihak.</td>
  </tr>
  <tr>
    <td>Waktu Pemberitahuan  Penyerahan</td>
    <td>Pihak yang mempunyai posisi  jual pada Bulan Berjalan, dapat melakukan Pemberitahuan Penyerahan dalam waktu  12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan.</td>
  </tr>
  <tr>
    <td>Waktu Pemberitahuan Alokasi</td>
    <td>Segera setelah sesi Pasca  Penutupan dan penyampaian Surat Pemberitahuan Penyerahan</td>
  </tr>
  <tr>
    <td>Waktu Serah</td>
    <td>Paling lambat 2 (dua) hari  perdagangan setelah Pemberitahuan Penyerahan</td>
  </tr>
  <tr>
    <td>Mutu</td>
    <td>Emas dengan kualitas  kemurnian minimum 99,99% dilengkapi dengan angka seri &amp; stempel dari  refineri yang diakui oleh LBMA (bisa dari dalam dan luar negeri)</td>
  </tr>
  <tr>
    <td>Tempat Penyerahan </td>
    <td>Di gudang Terdaftar di Jakarta dan Surabaya, pilihan tempat penyerahan berada pada penjual </td>
  </tr>
</table>
<br>
<table width='70%' border='1' align="center" class="tab-rule2" cellpadding="0" cellspacing="0">
  <tr class="top">
    <td width='11%' align='center' valign='top'>&nbsp;</td>
    <td width='30%' align='center' valign='top'>Kontrak 1 Kg (1000 gram)</td>
    <td width='30%' align='center' valign='top'>Kontrak 250 gram</td>
    <td width='29%' align='center' valign='top'>Kontrak 100 gram</td>
  </tr>
  <tr>
    <td align='center' valign='top'>Komisi</td>
    <td align='center' valign='top'>Rp.500.000,- (lot settled)</td>
    <td align='center' valign='top'>Rp. 150.000,- (lot settled)</td>
    <td align='center' valign='top'>Rp. 50.000,- (lot  settled)</td>
  </tr>
</table>
</li><br>
<li><h4>Jam Perdagangan</h4>
Jam Perdagangan sesuai dengan ketentuan berikut :<br /><br />
<table width='70%' border='1' align="center" class="tab-rule2" cellspacing="0" cellpadding="0">
  <tr>
    <td style="background:#636363; border-top:solid #000 1px;"><font color='white'>Hari & Jam Perdagangan</font></td>
    <td style="border-top:solid #000 1px;">Setiap hari perdagangan<br />
Pukul 09.30 – 17.30 WIB</td>
  </tr>
  <tr>
    <td style="background:#636363; border-top:solid #000 1px;"><font color='white'>Pasca Penutupan</font></td>
    <td style="border-top:solid #000 1px;"><ul type='disc'><li>Sesi Pasca Penutupan dilaksanakan setiap hari perdagangan  yaitu mulai pukul 17.45 WIB sampai dengan 18.00 WIB.</li><br />
        <li>Amanat beli dan jual pada saat Pasca  Penutupan yang dimasukkan kedalam JAFeTS adalah pada Harga Penyelesaian/Harga  Settlement hari itu.</li></ul></td>
  </tr>
  <tr>
    <td style="background:#636363; border-top:solid #000 1px;"><font color='white'>Hari Perdagangan Terakhir</font></td>
    <td style="border-top:solid #000 1px;">Perdagangan untuk suatu Bulan Kontrak, berakhir pada  akhir sesi Pasca Penutupan pada hari perdagangan ketiga sebelum hari kerja  terakhir bulan yang bersangkutan. Apabila hari perdagangan ketiga sebelum hari kerja  terakhir tersebut bukan merupakan hari perdagangan, maka hari perdagangan  sebelumnya menjadi hari perdagangan terakhir.</td>
  </tr>
</table>
</li><br>
<li><h4>Bulan Kontrak</h4><table width='70%' border='0' align="center" >
  <tr>
    <td>Bulan Kontrak :</td>
    <td>3 (tiga) bulan  berturut-turut, sehingga setiap hari perdagangan terdapat tiga Bulan Kontrak</td>
  </tr>
</table>
</li><br>
<li><h4>Penambahan Margin</h4>
Nasabah yang  memiliki posisi terbuka (baik posisi <strong>Beli</strong> maupun <strong>Jual</strong>) pada bulan berjalan di  tanggal 15, maka nasabah wajib melakukan penambahan margin sesuai dengan 1/3  (sepertiga) dari nilai kontrak posisi terbuka yang dimilikinya.<br>
Apabila  Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka  tersebut dapat dilakukan <strong><em>Force</em> <em>Liquidation</em></strong>.<br />
</li><br>
<li><h4>Akhir Masa Kontrak</h4>
<ol type='a' style="margin-left:2%;"><li>Nasabah yang masih memiliki posisi terbuka <strong>Jual</strong> hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menyerahkan fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (Untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (Untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan menerima dana senilai kontrak.<br />
  <br />
	Apabila Nasabah gagal menyerahkan fisik kontrak berupa Emas, maka akan dilakukan <strong>Cash Settlement</strong> sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.<br />
	<br /></li>
<li>Nasabah yang masih memiliki posisi terbuka <strong>Beli</strong> hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menerima fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan membayar atau melunasi dana senilai kontrak.<br />
  <br />
	Apabila Nasabah gagal menyediakan dana sesuai dengan nilai kontrak, maka akan dilakukan <strong>Cash Settlement</strong> sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.</li>
  </ol>
</li><br>
<li><h4>Delivery Fee</h4>
Apabila terjadi  penyerahan fisik atas kontrak yang ditransaksikan maka Nasabah dibebankan biaya  administrasi. (<em>Delivery Fee</em>) (lihat tabel di  bawah ini) <br><br>
<table width='80%' border='1' align="center" cellpadding='0' cellspacing='0' class="tab-rule2">
  <tr class="top"> 
    <td width='14%' align='center' valign='top'>&nbsp;</td>
    <td width='25%' align='center' valign='top'>Kontrak 1 Kg (1000 gram)</td>
    <td width='30%' align='center' valign='top'>Kontrak 250 gram</td>
    <td width='31%' align='center' valign='top'>Kontrak 100 gram</td>
  </tr>
  <tr>
    <td align='center' valign='top'>Delivery Fee</td>
    <td align='center' valign='top'>Rp.250.000,- / 1 Lot kontrak 1kg</td>
    <td align='center' valign='top'>Rp. 250.000,- / 4 Lot kontrak 250 g</td>
    <td align='center' valign='top'>Rp. 250.000,- / 10 Lot kontrak 100 g</td>
  </tr>
</table>
    </li><br />
	<li><h4>Batas Lot Per-Order</h4>
	  <p>Batas penyampaian  setiap order Nasabah untuk membuka posisi pada hari perdagangan dari  masing-masing kontrak, hanya dapat membeli (buy new) dan/atau menjual (sell  new) maksimum <strong><em>20 lot</em></strong> untuk setiap bulan kontrak.</p></li>
	  <li><h4>Call Margin</h4>
  <p>Call margin akan dilakukan apabila margin level menyentuh/mencapai range (50% < call margin < 90%) terhadap equity yang ada. Untuk mempertahankan posisi Nasabah yang terbuka maka setiap Nasabah diharapkan untuk segera menambah kekurangan margin.</p></li>
  <li><h4>Force Liquidation</h4><ul type='circle'>
    <li>Apabila Nasabah tidak menambah kekurangan margin (memenuhi call margin), maka perusahaan berhak melikuidasi posisi terbuka (open) tersebut pada saat terjadi kondisi margin level menyentuh/mencapai level = 50% dari Margin Requirement.</li>
    <br />
<li>Apabila Nasabah tidak mampu menyediakan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak posisi terbuka yang dimilikinya dana yang dimaksud, maka perusahaan berhak melikuidasi posisi terbuka (open) tersebut.</li>
  </ul><br />
Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak Berjangka tersebut.</li>
<li><h4>Over Trading</h4>Perusahaan akan menolak order Nasabah apabila Nasabah melakukan transaksi yang melebihi dana atau margin yang ada.</li>
<li><h4>Price (Harga)</h4>Harga masing-masing kontrak sesuai dengan harga yang terjadi di Bursa Berjangka Jakarta dengan sistem JAFeTS3.</li>
<li><h4>Market Order</h4>Adalah amanat untuk membeli/menjual kontrak berjangka pada harga pasar di Bursa Berjangka Jakarta.</li>
<li><h4>Limit Order/Stop Order</h4>
<ul type='disc'><li>Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.</li>
<li>Nasabah dapat menempatkan amanat Limit Order mulai pukul 08.30 WIB atau 1 (satu) jam lebih awal sebelum jam perdagangan dibuka.</li></ul><br />
Pemasangan Stop Order untuk membatasi Rugi (<em>stop loss</em>) mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan untuk melikuidasi Kontrak Berjangka.</li>
<li><h4>Sistem Order</h4>Nasabah dapat menyampaikan amanatnya dengan cara menghubungi dealer PT. Esandar Arthamas Berjangka melalui telepon setiap hari perdagangan dan dealer akan meneruskan amanat Nasabah tersebut ke Bursa Berjangka Jakarta melalui sistem JAFeTS 3.</li>
<li><h4>Margin In & Out</h4><ul type='square'><li>Nasabah dapat melakukan transaksi setelah dana <em>good fund</em></li><br />
<li>Untuk penarikan margin dapat dilakukan dengan mengajukan permohonan setiap hari kerja Senin – Jumat sampai  dengan pukul 12.00 WIB dan tidak dapat diwakilkan.</li></ul>
</li>
<li><h4>Kerahasiaan</h4>Setiap Account memiliki phone password yang sifatnya <em><strong><u>SANGAT PRIBADI</u></strong></em> dan <em><strong><u>RAHASIA</u></strong></em>. Phone password digunakan setiap kali Nasabah ingin melakukan transaksi. Jika terjadi perbedaan phone password yang di sebutkan Nasabah, Pihak perusahaan berhak menolak untuk melakukan transaksi.<br /><br />
<strong>Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor Account dan phone password akibat kelalaian Nasabah sendiri.</strong><br /><br />
<table width='100%' border='0' align="center" cellpadding='3' cellspacing='0' >
  <tr>
    <td colspan='3' align='center'>Dengan mengisi kolom &quot;Ya&quot; di bawah ini, saya  menyatakan bahwa saya telah membaca tentang <strong>PERATURAN PERDAGANGAN (TRADING  RULES)</strong>, mengerti dan menerima ketentuan dalam bertransaksi.</td>
    </tr>
  <tr>
    <td width='26%'>Pernyataan menerima / tidak</td>
    <td width='2%'>:</td>
    <td width='72%'><input class='checkbox' id='ya' name="terima" type="radio" value="Ya" onclick="myFunction()">Ya &nbsp;
	<input class='checkbox' id='tidak' name="terima" type="radio" value="Tidak">Tidak</td>
       </td>
  </tr>
  <tr>
  <?php
$tgl = new datetime('Asia/Jakarta');
$tgl_str = $tgl->format('d-m-Y');
?>
<td>Menerima pada Tanggal</td>
<td>:</td>
<td>
<input class='kodeae' type='text' name='t1' id='tanggalya' readonly></td>
 </tr>
</table>
</li>
</ol>
<table width='6%' align='center'>
<tr>
<td width="180">
<button id='submit' name='submit' type='submit'>Submit</button></td>
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