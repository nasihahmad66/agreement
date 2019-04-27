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

$sql=mysqli_query($connect,"select * from formulir1 where No_Identitas=".$_SESSION['id']."");
$hasil=mysqli_fetch_array($sql);
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

<p align="right" style="font-size:14px; font-family:Arial"><br/>Lampiran 2 Peraturan Kepala Badan Pengawas<br/> 
Perdagangan Berjangka Komoditi <br/>
Nomor: 107/BAPPEBTI/PER/11/2013 <br/>
</p>
<h3 align="center" style="font-size:16px; font-family:Arial">Formulir: 107.PBK.06<br/>
 Peraturan Perdagangan  (Trading Rules)<br />
   Kontrak Berjangka Emas (GOL.  GOL250, GOL100)
</h3>
<br/>
<br>

<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="left" colspan="3" bgcolor="#5C5C5C"><font color="white"><strong><center>PEMBUKAAN ACCOUNT (REKENING)</center></strong></font></td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)</strong></td>
	<td width="40%" align="justify" valign="top" ><strong>Dokumen Pemberitahuan Adanya Risiko :</strong><br/>	  
	  Nasabah harus memahami benar risiko  perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti  &ldquo;Pernyataan Menerima Pemberitahuan Adanya Risiko&rdquo; yang ada pada &ldquo;Dokumen  Pemberitahuan Adanya Risiko&rdquo;.
	  <p>Maksud dari dokumen ini adalah  memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan  kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu  nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah  kondisi keuangan nasabah mencukupi.</p></td>
	<td width="39%" align="justify" valign="top" ><strong>Perjanjian Pemberian Amanat :</strong><br/>
	  Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian  kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian  Pemberian Amanat.</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Rekening Terpisah / Segregated Account</strong></td>
	<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan setoran dana dalam mata uang Rupiah  sebagai Margin Deposit untuk jaminan Pembukaan <em>Account</em>, dan <em>Additional  Margin </em>(Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:
<pre style="font-family:Arial; font-size:15px"><strong><ul><li>Bank Central Asia (BCA) Sudirman - Jakarta</strong>
No. Account : 035.313.6019 (IDR)
Atas Nama : PT. Esandar Arthamas Berjangka</li>
<li><strong>Bank CCB Indonesia (China Construction Bank Indonesia) - Rawamangun</strong>
No. Account : 100-7585-388 (IDR)
Atas Nama : PT. Esandar Arthamas Berjangka</li></ul></pre></td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Rekening Nasabah Berlaku Efektif</strong></td>
	<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan transaksi, setelah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya dan apabila setoran dana telah efektif <em>(Good Fund)</em>.</td>
</tr>
</table>
<br/>

<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td colspan="3" bgcolor="#5C5C5C"><font color="white"><strong><center>KETENTUAN TRADING</center></strong></font></td>
</tr>
<tr>
	<td width="21%" align="left" valign="top"><strong>Margin Deposit</strong></td>
	<td valign="top" align="justify" colspan="2">Margin adalah sejumlah dana nasabah yang  harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di  Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana  (withdrawal) dari nasabah.</td>
</tr>
<tr>
	<td valign="top" width="21%" align="left" ><strong>Margin Deposit Awal</strong></td>
	<td valign="top" align="justify" colspan="2">Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar: Rp. 50.000.000.- (New Account).</td>
</tr>
<tr>
	<td valign="top" width="21%" align="left" ><strong>Rate</strong></td>
	<td valign="top" align="justify" colspan="2">Rate dalam Rupiah</td>
</tr>
<tr>
	<td valign="top" width="21%" align="left" ><strong>Harga Penutupan Pasar (Closing Market)</strong></td>
	<td valign="top" align="justify" colspan="2">Harga Penutupan Pasar berdasarkan Harga Setlement Price</td>
</tr>
</table>
<br/>

<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
	<td valign="top" width="21%" align="left" ><strong>&nbsp;Jam Perdagangan (GMT + 7)</strong></td>
	<td align="center" valign="top"><strong>09:30 - 17:30</strong></td>
	
</tr>
<tr>
	<td valign="top" width="21%" align="left"><strong>Pasca Penutupan</strong></td>
	<td valign="top" align="left"><ul><li>Sesi Pasca Penutupan dilaksanakan setiap hari perdagangan yaitu mulai pukul 17.45 WIB sampai dengan 18.00 WIB.</li></ul>
								  <ul><li>Amanat beli dan jual pada saat Pasca Penutupan yang dimasukkan kedalam JAFeTS adalah pada Harga Penyelesaian/Harga Settlement hari itu.</li></ul>
</td>
</tr>
<tr>
	<td valign="top" width="21%" align="left" ><strong>Hari Perdagangan Terakhir</strong></td>
	<td valign="top" align="justify">Perdagangan untuk suatu Bulan Kontrak, berakhir pada akhir sesi Pasca Penutupan pada hari perdagangan ketiga sebelum hari kerja terakhir bulan yang bersangkutan. Apabila hari perdagangan ketiga sebelum hari kerja terakhir tersebut bukan merupakan hari perdagangan, maka hari perdagangan sebelumnya menjadi hari perdagangan terakhir.</td>
</tr>
<tr>
	<td align="justify" colspan="4"><ul><li>Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit sebelum market open.</li></ul>
												 <ul><li>Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.</li></ul>
</td>
</tr>
</table>
<br/>

<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="center" colspan="4" bgcolor="#5C5C5C"><font color="white"><strong>TRADING FACILITIES</strong></font></td>
</tr>
<tr>
<td align="center" width="25%"></td>
<td align="center" width="25%"><strong>Kontrak 1Kg</strong></td>
<td align="center" width="25%"><strong>Kontrak 250 Gram</strong></td>
<td align="center" width="25%"><strong>Kontrak 100 Gram</strong></td>
</tr>
<tr>
<td align="center" width="25%"><strong>Kode Kontrak</strong></td>
<td align="center" width="25%">GOL</td>
<td align="center" width="25%">GOL250</td>
<td align="center" width="25%">GOL100</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Ukuran Kontrak</strong></td>
<td align="center" width="25%">1 Kg (1.000 Gram)</td>
<td align="center" width="25%">250 Gram</td>
<td align="center" width="25%">100 Gram</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Mutu</strong></td>
<td align="center" colspan="3">Emas dengan kualitas kemurnian minimum 99,99% dilengkapi dengan angka seri & stempel dari refineri yang diakui oleh LBMA (bisa dari dalam dan luar negeri)</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Minimum Tick</strong></td>
<td align="center" width="25%">Rp 50,- / gram (termasuk PPN)
</br>
Rp 50.000,- /lot (termasuk PPN)
</td>
<td align="center" width="25%">Rp 50,- / gram (termasuk PPN)
</br>
Rp 12.500,- /lot (termasuk PPN)
</td>
<td align="center" width="25%">Rp 50,- / gram (termasuk PPN)
</br>
Rp 5.000,- /lot (termasuk PPN)
</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Komisi</strong></td>
<td align="center" width="25%">Rp.500.000,- (lot settled)</td>
<td align="center" width="25%">Rp. 150.000,- (lot settled)</td>
<td align="center" width="25%">Rp. 50.000,- (lot settled)</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Biaya Pengiriman / Delivery Fee</strong></td>
<td align="center" width="25%">Rp.250.000,- / 1 Lot</td>
<td align="center" width="25%">Rp. 250.000,- / 4 Lot</td>
<td align="center" width="25%">Rp. 250.000,- / 10 Lot</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Margin Requirement</strong></td>
<td align="center" width="25%">Rp. 10.000.000,-</td>
<td align="center" width="25%">Rp. 2.500.000,-</td>
<td align="center" width="25%">Rp. 1.000.000,-</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Posisi Wajib Lapor</strong></td>
<td align="center" width="25%">150 Lot</td>
<td align="center" width="25%">600 Lot</td>
<td align="center" width="25%">1.500 Lot</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Batas Posisi Spekulatif</strong></td>
<td align="center" width="25%">500 Lot</td>
<td align="center" width="25%">2000 Lot</td>
<td align="center" width="25%">5.000 Lot</td>
</tr>
<tr>
<td align="center" width="25%" rowspan="2" valign="top"><strong>Batas Perubahan Harga</strong></td>
<td align="center" width="25%">Rp 10.000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
<td align="center" width="25%">Rp 10.000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
<td align="center" width="25%">Rp 10.000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
</tr>
<tr>
<td align="center" colspan="3"><strong><u>Batas perubahan harga ini tidak berlaku untuk Bulan Berjalan dan Bulan Terdekat, kalau Bulan Berjalan sudah tidak diperdagangkan lagi.</u></strong></td>
</tr>
<tr>
<td align="center" width="25%"><strong>Tukar Fisik dengan Berjangka</strong></td>
<td align="center" colspan="3">Pihak-pihak yang melakukan transaksi jual/beli Emas diluar bursa dapat mendaftarkannya ke Bursa untuk ditukar dengan transaksi berjangka bagi kedua belah pihak.</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Waktu Pemberitahuan Penyerahan</strong></td>
<td align="center" colspan="3">Pihak yang mempunyai posisi jual pada Bulan Berjalan, dapat melakukan Pemberitahuan Penyerahan dalam waktu 12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan.</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Waktu Pemberitahuan Alokasi</strong></td>
<td align="center" colspan="3">Segera setelah sesi Pasca Penutupan dan penyampaian Surat Pemberitahuan Penyerahan</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Waktu Serah</strong></td>
<td align="center" colspan="3">Paling lambat 2 (dua) hari perdagangan setelah Pemberitahuan Penyerahan</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Tempat Penyerahan</strong></td>
<td align="center" colspan="3">Di Gudang Terdaftar di Jakarta, Surabaya, Bandung, Semarang, Solo, Yogyakarta, Medan, Makassar, Manado, Banjarmasin, Lampung, dan Denpasar. Pilihan tempat penyerahan berada pada penjual</td>
</tr>
<tr>
<td align="center" width="25%"><strong>Bulan Kontrak</strong></td>
<td align="center" colspan="3">3 (tiga) bulan berturut-turut, sehingga setiap hari perdagangan terdapat tiga Bulan Kontrak</td>
</tr>
<tr>
<td align="center" width="25%" valign="top"><strong>Satuan Penyerahan</strong></td>
<td align="justify" width="25%"><ul><li>Penyerahan emas bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 5 (lima) lot atau kelipatannya</li></ul>
	<ul><li>Penyerahan emas harus dilakukan dalam lot yang terpisah, masing-masing 1 Kg berat bersih, dan berat tersebut dicantumkan dalam Surat Bukti Penyimpanan</li></ul>
</td>
<td align="justify" width="25%"><ul><li>Penyerahan emas bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 4 (empat) lot atau kelipatannya</li></ul>
	<ul><li>Penyerahan emas harus dilakukan dalam lot yang terpisah, masing-masing 250 gram berat bersih, dan berat tersebut dicantumkan dalam Surat Bukti Penyimpanan</li></ul>
</td>
<td align="justify" width="25%"><ul><li>Penyerahan emas bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 10 (sepuluh) lot atau kelipatannya</li></ul>
	<ul><li>Penyerahan emas harus dilakukan dalam lot yang terpisah, masing-masing 100 gram berat bersih, dan berat tersebut dicantumkan dalam Surat Bukti Penyimpanan</li></ul>
</td>
</tr>
<tr>
<td align="center" width="25%"><strong>KALKULASI: Profit/Loss</strong></td>
<td align="center" colspan="3">&raquo; GOL; GOL250; GOL100:</br>
(Harga Jual - Harga Beli) x lot x Ukuran Kontrak
</td>
</tr>
</table>

<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
	<td align="left"><strong>Market Order</strong></td>
	<td valign="top" colspan="2" align="justify">Amanat untuk secara langsung membeli/menjual kontrak berjangka pada harga pasar.</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Limit Order/Stop Order</strong></td>
	<td valign="top" colspan="2" align="justify">Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.</br>
<u><strong>Pemasangan Stop Order untuk membatasi Rugi (stop loss) mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan untuk melikuidasi Kontrak Berjangka.</strong></u>
</td>
</tr>
<tr>
	<td align="left" rowspan="2" valign="top"><strong>Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)</strong></td>
	<td valign="top" width="40%" align="justify">Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.</br>Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.</td>
	<td valign="top" width="40%" rowspan="2" align="justify">Apabila Nasabah mempunyai posisi terbuka (baik posisi Beli maupun Jual) pada bulan spot dan ingin melakukan penyerahan fisik, maka pada 12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan, nasabah wajib melakukan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak  posisi terbuka yang dimilikinya.
</br></br>Apabila Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka tersebut dapat dilakukan Force Liquidation.
</br></br>Pada saat Hari Perdagangan Terakhir berakhir, Untuk Serah Terima fisik, Nasabah yang memiliki Posisi Jual harus menyediakan Barang yang sesuai dengan mutu, dan jumlah lot satuan penyerahan, sedangkan Nasabah yang memiliki Posisi Beli harus menyediakan 2/3 dari sisa Kontrak yang harus dipenuhinya, dan menerima penyerahan fisik.
</br></br>Baik Posisi Jual dan Beli, akan dikenakan biaya Pengiriman / Delivery Fee sesuai dengan Tabel diatas.
</td>
</tr>
<tr>
	<td valign="top" align="justify">Untuk penarikan margin (Withdrawal) dapat dilakukan dengan mengajukan permohonan setiap hari kerja Senin - Jumat sampai  dengan pukul 12.00 WIB dan tidak dapat diwakilkan.
      </td><br/><br/>
</tr>

<tr>
	<td align="left" rowspan="2" valign="top"><strong>Margin Call & Force Liquidation</strong></td>
	<td valign="top" width="40%" align="justify"><strong><em>Margin Call Equity level: (50%< Margin Level <90%)</em></strong></br>
		Nasabah harus menambah equity (margin call) apabila equity nasabah sudah  mencapai level antara (50%<Margin Level<90%) dari Margin Requirement.
	</td>
	<td valign="top" width="40%" align="justify"><strong>Force Liquidation dilakukan apabila:</strong></br>
		<strong>A.	Margin Level mencapai 50% atau dibawahnya.</strong></br>
		Apabila Equity account Nasabah mencapai level 50% atau dibawahnya dari Margin Requirement, maka Force Liquidation akan dilakukan.</br></br>
		<strong>B.	Penambahan Dana pada Bulan Spot</strong></br>
		Apabila Nasabah mempunyai posisi terbuka (baik posisi Beli maupun Jual) pada bulan spot dan ingin melakukan penyerahan fisik, maka pada 12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan, nasabah wajib melakukan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak  posisi terbuka yang dimilikinya.</br>
		Apabila Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka tersebut dapat dilakukan Force Liquidation.</br>
	</td>
</tr>
<tr>
	<td align="left" align="justify" colspan="2"><strong><u>Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak Berjangka tersebut.</u></strong></td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Akhir Masa Kontrak</strong></td>
	<td valign="top" width="40%" align="justify">Nasabah yang masih memiliki posisi terbuka <strong>Jual</strong> hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menyerahkan fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (Untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (Untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan menerima dana senilai kontrak.
		</br></br>
		Apabila Nasabah gagal menyerahkan fisik kontrak berupa Emas, maka akan dilakukan Cash Settlement sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.
	</td>
	<td valign="top" width="40%" align="justify">Nasabah yang masih memiliki posisi terbuka <strong>Beli</strong> hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menerima fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan membayar atau melunasi dana senilai kontrak.
		</br></br>
		Apabila Nasabah gagal menyediakan dana sesuai dengan nilai kontrak, maka akan dilakukan Cash Settlement sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>KERAHASIAAN</strong></td>
	<td valign="top" width="40%" align="justify" colspan="2">Setiap nasabah akan mendapatkan Login, Password, dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform JAFeTS Colt, dan untuk melakukan DQ apabila terjadi gangguan pada platform JAFeTS Colt.
		</br></br>
		Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama <strong>WAJIB</strong> untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Lain-Lain (Miscellaneous)</strong></td>
	<td valign="top" width="40%" align="justify" colspan="2">
		<ol><li>Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market</li>
		<li>Waktu yang digunakan pada sistem adalah GMT + 7.</li>
		<li>Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan</li>
		<li>Platform JAFeTS Colt dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan sesuai dengan perintah nasabah.</li></ol>
		Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka (021-29339318) disertai Phone Password.
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>REPORTING</strong></td>
	<td valign="top" width="40%" align="justify" colspan="2">
		<ol><li>Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem JAFeTS Colt secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang dikirimkan secara otomatis ke email nasabah.</li>
		<li>Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada laporan yang tersedia didalam Sistem JAFeTS Colt.</li>
		<li>Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan nasabah tersebut.</li>
		<li>Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut dianggap benar dan sah.</li></ol>
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>PENYELESAIAN PERSELISIHAN</strong></td>
	<td valign="top" width="40%" align="justify" colspan="2">
		<ol><li>Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis transaksi, report, dan data-data pendukung lainnya.</li>
		<li>Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.</li></ol>
		Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.
	</td>
</tr>
</table>

<form onSubmit="return validateForm()" name='formku' method='post' action="functiongol.php">
<table width="100%" border="1" align="center" bordercolor="#000000"align="center">
  <tr>
    <td align="center" colspan="5">Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang<br/>
<b>PERATURAN PERDAGANGAN (TRADING RULES)</b>, mengerti dan menerima ketentuan<br/>
dalam bertransaksi.</td>
  </tr>
  <tr>
    <td width="32%">Pernyataan menerima / tidak</td>
    <td width="2%">:</td>
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
<td>&nbsp;
<input class='kodeae' type='text' name='t1' id='tanggalya' readonly>

</td>
  </tr>
</table><br>
<table align='center' border='0'>
  <tr>
  <td>
<button id='submit' name='submit' type='submit'>Submit</button>
  </td>
    </tr>
</table>
</form>
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