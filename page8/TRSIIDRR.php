<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<html>
<head><link rel="stylesheet" type="text/css" href="../css/style.css" media="all" /></head>
<?php
include('config.php');

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
			<div>
				<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page8" value="8" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>
				<p align="right" style="font-size:14px; font-family:Arial"><br/>Lampiran 2 Peraturan Kepala Badan Pengawas <br/> 
				Perdagangan Berjangka Komoditi <br/>
				Nomor: 107/BAPPEBTI/PER/11/2013 <br/>
				</p>
				<h3 align="center" style="font-size:16px; font-family:Arial">Formulir: 107.PBK.06 <br/>
				Trading Rules Kontrak Derivatif Stock Index IDR Regular
				</h3>

				<table cellpadding="5" width="100%" class="tab-rule" border="1">
					<tr class="top">
						<td align="left" colspan="3"><strong>PEMBUKAAN ACCOUNT (REKENING)</strong></td>
					</tr>
					<tr>
						<td align="left" ><strong>Aplikasi Penerimaan Nasabah Secara Elektronik dan Online</strong></td>
						<td valign="top" align="justify" colspan="2">Untuk keperluan pembukaan rekening, maka nasabah wajib registrasi melalui Sistem Agreement dan Registrasi Online yang ada di website esandar.co.id guna pengisian aplikasi pembukaan rekening transaksi dan dokumen-dokumen yang wajib dibaca, dipahami dan dimengerti.</td>
					</tr>
					<tr>
						<td align="justify" valign="top"><strong>Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)</strong></td>
						<td align="justify" valign="top" ><strong>Dokumen Pemberitahuan Adanya Risiko :</strong><br/>
							Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti "Pernyataan Menerima Pemberitahuan Adanya Risiko" yang ada pada "Dokumen Pemberitahuan Adanya Risiko". <br/><br/>
							Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.</td>
						<td align="justify" valign="top" ><strong>Perjanjian Pemberian Amanat :</strong><br/>
						  Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian Pemberian Amanat.</td>
					</tr>
					<tr>
						<td align="left" valign="top"><strong>Rekening Terpisah / Segregated Account</strong></td>
						<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan setoran dana dalam mata uang Rupiah sebagai Margin Deposit untuk jaminan Pembukaan Account, dan Additional Margin (Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:
					<pre style="font-family:Arial; font-size:15px"><strong> &rArr; Bank Central Asia (BCA) Sudirman - Jakarta</strong>
						  No. Account : 035.313.6019 (IDR)
						  Atas Nama : PT. Esandar Arthamas Berjangka
						  <strong> &rArr; Bank CCB Indonesia (China Construction Bank Indonesia)-Rawamangun</strong>
						  No. Account : 100-7585-388 (IDR)
						  Atas Nama : PT. Esandar Arthamas Berjangka
						</pre>
						</td>
					</tr>
					<tr>
						<td align="left" ><strong>Rekening Nasabah Berlaku Efektif</strong></td>
						<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan transaksi, apabila setoran dana telah efektif (Good Fund) dan telah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya.</td>
					</tr>
				</table>
				<table cellpadding="5" width="100%" class="tab-rule" border="1">
					<tr class="top">
						<td colspan="3"><strong>KETENTUAN TRADING</strong></td>
					</tr>
					<tr>
						<td width="10%" align="left" ><strong>Margin Deposit</strong></td>
						<td valign="top" align="justify" colspan="2">Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.</td>
					</tr>
					<tr>
						<td valign="top" width="10%" align="left" ><strong>Margin Deposit Awal</strong></td>
						<td valign="top" align="justify" colspan="2">Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : Rp. 50.000.000.- (New Account).
					</td>
					</tr>
					<tr>
						<td valign="top" width="10%" align="left" ><strong>Rate</strong></td>
						<td valign="top" align="justify" colspan="2">Rate dalam Rupiah</td>
					</tr>
					<tr>
						<td valign="top" width="10%" align="left" ><strong>Harga Penutupan Pasar(Closing Market)</strong></td>
						<td valign="top" align="justify" colspan="2">Harga Penutupan Pasar berdasarkan Harga Setlement Price</td>
					</tr>
					<tr>
						<td valign="top" width="10%" align="left" ><strong>Commission Charge</strong></td>
						<td valign="top" align="justify" colspan="2">Commission Charge: IDR. 500.000,- / 1 lot settled</td>
					</tr>
				</table>
				<table cellpadding="5" width="100%" class="tab-rule" border="1">
					<tr class="top">
						<td align="center" colspan="4"><strong>Jam Perdagangan (GMT+7)</strong></td>
					</tr>
					<tr>
						<td valign="top" width="30%" align="left" ><strong>&nbsp;</strong></td>
						<td valign="top" align="center"><strong>Sesi 1</strong></td>
						<td valign="top" align="center"><strong>Sesi 2</strong></td>
					</tr>
					<tr>
						<td valign="top" width="30%" align="left"><strong>Stock Index Hongkong</strong></td>
						<td valign="top" align="center">08:15 - 11:00</td>
						<td valign="top" align="center">12:00 - 15:30</td>
					</tr>
					<tr>
						<td valign="top" width="30%" align="left" ><strong>Stock Index Jepang</strong></td>
						<td valign="top" align="center">06:30 - 13:25</td>
						<td valign="top" align="center">14:15 - 01:00</td>
					</tr>
					<tr>
						<td valign="top" width="30%" align="left" ><strong>Stock Index Korea</strong></td>
						<td valign="top" align="center">07:00 - 13:35</td>
						<td valign="top" align="center">&nbsp;</td>
					</tr>
					<tr>
						<td align="justify" valign="top" colspan="4">
									&diams; Maksimal Open Posisi Dalam 1 Account 30 LOT<br/>
									&diams; Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit setelah market open.<br/>
									&diams; Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.<br/>
									&diams; DQ menggunakan telepon akan dikenakan spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama dan pada saat kondisi server sedang mengalami gangguan teknis (down).<br/>
									&diams; Overnight margin Index Saham <b>Hongkong</b> dimulai setelah sesi 2 berakhir dan Index Saham <b>Jepang</b> dimulai pada sesi 2.<br/></td>
					</tr>
				</table>

				<table cellpadding="5" width="100%" class="tab-rule" border="1">
					<tr class="top">
						<td align="left"><strong>Trading Facilities</strong></td>
					</tr>
					<tr>
						<td align="justify" valign="top">
						<strong>&#9658;	Kontrak Berjangka (Stock Index Futures)</strong><br/>
							Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang mengenal akhir bulan perdagangan. 
							Pada akhir bulan perdagangan tersebut posisi nasabah harus terlikuidasi (Clear Posisi).<br/><br/>

						<strong>&#9658;	Kontrak Berkala (Stock Index Rollover)</strong><br/>
							Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang tidak mengenal akhir bulan perdagangan
							tetapi terdapat Bulan Referensi.<br/>
								Pada bulan referensi tersebut akan diadakan penyesuaian untuk open posisi yang masih ada dan
							open posisi (Original Price) tetap ada selama belum dilikuidasi nasabah.</font></td>
					</tr>
				</table>

				<table cellpadding="5" width="100%" class="tab-rule" border="1">
					<tr class="top">
						<td valign="top" align="center" width="20%"><strong>&nbsp;</strong></td>
						<td valign="top" align="center" colspan="3" width="35%"><strong>Stock Index Futures</strong></td>
						<td valign="top" align="center" colspan="3" width="35%"><strong>Stock Index Rollover</strong></td>
					</tr>
					<tr>
						<td valign="top" align="center"><strong>&nbsp;</strong></td>
						<td valign="top" align="center"><strong>HONGKONG</strong></td>
						<td valign="top" align="center"><strong>JEPANG</strong></td>
						<td valign="top" align="center"><strong>KOREA</strong></td>
						<td valign="top" align="center"><strong>HONGKONG</strong></td>
						<td valign="top" align="center"><strong>JEPANG</strong></td>
						<td valign="top" align="center"><strong>KOREA</strong></td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Code Contract</strong></td>
						<td valign="top" align="center">HKJ50</td>
						<td valign="top" align="center">JPJ30</td>
						<td valign="top" align="center">KRJ35</td>
						<td valign="top" align="center">HKK50</td>
						<td valign="top" align="center">JPK50</td>
						<td valign="top" align="center">KRK35</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Contract Size</strong></td>
						<td valign="top" align="center">Rp. 50.000,-</td>
						<td valign="top" align="center">Rp. 30.000,-</td>
						<td valign="top" align="center">Rp. 3.500.000,-</td>
						<td valign="top" align="center">Rp. 50.000,-</td>
						<td valign="top" align="center">Rp. 50.000,-</td>
						<td valign="top" align="center">Rp. 3.500.000,-</td>
					<tr>
						<td valign="top" align="left"><strong>Normal Spread</strong></td>
						<td valign="top" align="center">10</td>
						<td valign="top" align="center">10</td>
						<td valign="top" align="center">0.10</td>
						<td valign="top" align="center">10</td>
						<td valign="top" align="center">10</td>
						<td valign="top" align="center">0.10</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Minimum Tick</strong></td>
						<td valign="top" align="center">1 pip</td>
						<td valign="top" align="center">5 pip</td>
						<td valign="top" align="center">0.05</td>
						<td valign="top" align="center">1 pip</td>
						<td valign="top" align="center">5 pip</td>
						<td valign="top" align="center">0.05</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Maximal Volume (Day Trade)</strong></td>
						<td valign="top" align="center">20 lot</td>
						<td valign="top" align="center">20 lot</td>
						<td valign="top" align="center">20 lot</td>
						<td valign="top" align="center">20 lot</td>
						<td valign="top" align="center">20 lot</td>
						<td valign="top" align="center">20 lot</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Margin Requirement per 1 lot Day Trade: </strong></td>
						<td valign="top" align="center">Rp. 5.000.000,-</td>
						<td valign="top" align="center">Rp. 6.000.000,-</td>
						<td valign="top" align="center">Rp. 3.500.000,-</td>
						<td valign="top" align="center">Rp. 5.000.000,-</td>
						<td valign="top" align="center">Rp. 5.000.000,-</td>
						<td valign="top" align="center">Rp. 3.500.000,-</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Margin Requirement per 1 lot Overnight: </strong></td>
						<td valign="top" align="center">Rp. 16.000.000,-</td>
						<td valign="top" align="center">Rp. 15.000.000,-</td>
						<td valign="top" align="center">Rp. 18.200.000,-</td>
						<td valign="top" align="center">Rp. 16.000.000,-</td>
						<td valign="top" align="center">Rp. 16.000.000,-</td>
						<td valign="top" align="center">Rp. 18.200.000,-</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Margin Hedged Day Trade per 1 lot</strong></td>
						<td valign="top" align="center">Rp. 1.000.000,-</td>
						<td valign="top" align="center">Rp. 1.200.000,-</td>
						<td valign="top" align="center">Rp. 700.000,-</td>
						<td valign="top" align="center">Rp. 1.000.000,-</td>
						<td valign="top" align="center">Rp. 1.000.000,-</td>
						<td valign="top" align="center">Rp. 700.000,-</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Margin Hedged Overnight per 1 lot</strong></td>
						<td valign="top" align="center">Rp. 3.200.000,-</td>
						<td valign="top" align="center">Rp. 3.000.000,-</td>
						<td valign="top" align="center">Rp. 3.640.000,-</td>
						<td valign="top" align="center">Rp. 3.200.000,-</td>
						<td valign="top" align="center">Rp. 3.200.000,-</td>
						<td valign="top" align="center">Rp. 3.640.000,-</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Swap Buy /1 lot</strong></td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">Rp 20.000,-</td>
						<td valign="top" align="center">Rp 20.000,-</td>
						<td valign="top" align="center">Rp 20.000,-</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Swap Sell / 1 lot</strong></td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">Rp 10.000,-</td>
						<td valign="top" align="center">Rp 10.000,-</td>
						<td valign="top" align="center">Rp 10.000,-</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Open Gap</strong></td>
						<td valign="top" align="center">300 poin</td>
						<td valign="top" align="center">300 poin</td>
						<td valign="top" align="center">500 poin</td>
						<td valign="top" align="center">300 poin</td>
						<td valign="top" align="center">300 poin</td>
						<td valign="top" align="center">500 poin</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Bulan Kontrak</strong></td>
						<td valign="top" align="left">F = Januari<br/>
					G = Februari<br/>
					H = Maret<br/>
					J = April<br/>
					K = Mei<br/>
					M = Juni<br/>
					N = Juli<br/>
					Q = Agustus<br/>
					U = September<br/>
					V = Oktober<br/>
					X = November<br/>
					Z = Desember<br/></td>
						<td valign="top" align="left">H = Maret<br/>
					M = Juni<br/>
					U = September<br/>
					Z = Desember<br/></td>
						<td valign="top" align="left">H = Maret<br/>
					M = Juni<br/>
					U = September<br/>
					Z = Desember<br/></td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">-</td>
					</tr>
					<tr>
						<td align="left"><strong>Transaksi Bulan Berikutnya</strong></td>
						<td valign="top" align="center">Dua hari sebelum hari Perdagangan Terakhir</td>
						<td valign="top" align="center">Dua hari sebelum hari Perdagangan Terakhir</td>
						<td valign="top" align="center">Dua hari sebelum hari Perdagangan Terakhir</td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">-</td>
						<td valign="top" align="center">-</td>
					</tr>
					<tr>
						<td valign="top" align="left"><strong>Hari Perdagangan Terakhir<br/>(Hanya untuk melikuidasi posisi)</strong></td>
						<td valign="top" align="justify">Satu hari sebelum hari Perdagangan Terakhir Bulan Kontrak dan hanya untuk melikuidasi posisi.</td>
						<td valign="top" align="justify">Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi. </td>
						<td valign="top" align="justify">Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.</td>
						<td valign="top" align="center">Tidak ada hari perdagangan Terakhir</td>
						<td valign="top" align="center">Tidak ada hari perdagangan Terakhir</td>
						<td valign="top" align="center">Tidak ada hari perdagangan Terakhir</td>
					</tr>
					<tr>
						<td align="left"><strong>Roll Over</strong></td>
						<td valign="top" align="justify" colspan="3">Nasabah harus menutup semua posisinya yang terbuka pada saat waktu kontrak berakhir (expired). Tidak ada Roll Over secara otomatis. Apabila Nasabah belum melikuidasi posisinya yang terbuka pada saat waktu kontrak berakhir, maka Sistem Esandar Trader akan melikuidasi posisi yang terbuka secara otomatis (dengan harga closing market pada Platform Esandar Trader untuk kontrak tersebut).</td>
						<td valign="top" align="justify" colspan="3">Automatic Rollover (Lihat Ketentuan Tambahan untuk Konrak Berkala (Rollover Contract))</td>
					</tr>
					<tr>
						<td align="left"><strong>KALKULASI: Profit/Loss</strong></td>
						<td valign="top" align="left" colspan="3">
					<strong>&#9658;	HKJ50; JPJ30; KRJ35:</strong>
						(SELL - BUY) x lot x contract size</td>
						<td valign="top" align="left" colspan="3">
					<strong>&#9658;	HKK50; JPK50; KRK35:</strong>
						(SELL - BUY) x lot x contract size</td>
					</tr>
				</table>
				<br/>

				<table cellpadding="5" width="100%" class="tab-rule" border="1">
					<tr class="top">
						<td align="center" colspan="3"style="font-size:16px; font-family:Arial"><strong>Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract)</strong></td>
					</tr>
					<tr>
						<td align="left" ><strong>Angka Penyelesaian</strong></td>
						<td valign="top" colspan="2" align="justify">Mengacu pada Settlement Price Kontrak Berjangka untuk Bulan Referensi terdekat sampai hari ganti Bulan Referensi.</td>
					</tr>
					<tr>
						<td align="left" ><strong>Hari Ganti Bulan Referensi</strong></td>
						<td valign="top" colspan="2" align="justify">Satu hari kerja sebelum hari kerja terakhir Bulan Referensi yang sedang berjalan, Angka Penyelesaian akan mengacu pada Settlement Price Bulan Referensi Berikutnya.</td>
					</tr>
					<tr>
						<td align="left" valign="top" rowspan="3" ><strong>Penyesuaian Akibat Ganti Bulan Referensi</strong></td>
						<td valign="top" align="justify" colspan="2">
						Beda antara Angka Penyelesaian kedua bulan kontrak itu pada akhir hari sebelumnya Hari Ganti Bulan<br/>
						Referensi tidak diperhitungkan sebagai laba atau rugi tetapi dilakukan penyesuaian.<br/><br/>

						Besarnya penyesuaian yang terjadi sebagai berikut :<br/>
						Open posisi Buy:<br/> 
						Penyesuaian = (Harga Closing Kontrak Lama - Harga Closing Kontrak Baru) x Contract Size x Lot<br/><br/>
						Open posisi Sell:<br/> 
						Penyesuaian = (Harga Closing Kontrak Baru - Harga Closing Kontrak Lama) x Contract Size x Lot<br/><br/>

						Open posisi (original price) tetap ada selama belum dilikuidasi oleh nasabah.<br/></td></tr>

					<tr>
						<td valign="top" align="justify">
							Contoh:<br/><br/>
							Nasabah A Buy HKK50 1 Lot;<br/><br/>
							Closing kontrak lama 22600<br/>
							Closing kontrak baru 22625<br/><br/>
							Penyesuaian<br/> 
							= (22600-22625) x Rp 50.000 x 1<br/>
							= - Rp 1.250.000</td>
						<td valign="top" align="justify">
							Contoh:<br/><br/>
							Nasabah B Sell HKK50 1 Lot;<br/><br/>
							Closing kontrak lama 22600<br/>
							Closing kontrak baru 22625<br/><br/>
							Penyesuaian<br/> 
							= (22625-22600) x Rp 50.000 x 1<br/>
							= Rp 1.250.000</td>
					</tr>
					<tr>
						<td valign="top" align="justify">
							Contoh:<br/>
							Nasabah C Buy HKK50 1 Lot;<br/><br/>
							Closing kontrak lama 23600<br/>
							Closing kontrak baru 23500<br/><br/>
							Penyesuaian<br/> 
							= (23600-23500) x Rp 50.000 x 1<br/>
							= Rp 5.000.000</td>
						<td valign="top" align="justify">
							Contoh:<br/>
							Nasabah D Sell HKK50 1 Lot;<br/><br/>
							Closing kontrak lama 23600<br/>
							Closing kontrak baru 23500<br/><br/>
							Penyesuaian<br/>
							= (23500-23600) x Rp 50.000 x 1<br/>
							= - Rp 5.000.000</td>
					</tr>
				</table>

				<br/>
				<table cellpadding="5" width="100%" class="tab-rule" border="1">
					<tr>
						<td align="left" rowspan="2"><strong>Ketentuan Pending Order (Limit Order (LO) / Stop Order (SO) / (Stop Loss (SL) /Take Profit (TP))</strong></td>
						<td valign="top" align="center"><strong>Stock Index Hongkong</strong></td>
						<td valign="top" align="center"><strong>Stock Index Jepang</strong></td>
						<td valign="top" align="center"><strong>Stock Index Korea</strong></td></tr>
					<tr>
						<td valign="top" align="justify">
							<table>
								<tr>
									<td valign="top">1.</td><td align="justify"> Pending Order dapat dipasang pada setiap sesi</td>
								</tr>
								<tr>
									<td valign="top">2.</td><td align="justify"> Pending Order secara otomatis akan berakhir pada akhir sesi 1 dan 2.</td>
								</tr>
							</table>
						</td>
						<td valign="top" align="justify">
							<table>
								<tr>
									<td valign="top">1.</td><td align="justify"> Pending Order dapat dipasang pada setiap sesi.</td>
								</tr>
								<tr>
									<td valign="top">2.</td><td align="justify"> Pending Order secara otomatis akan berakhir pada akhir sesi 1 dan 2.</td>
								</tr>
							</table>
						</td>
						<td valign="top" align="justify">
							<table>
								<tr>
									<td valign="top">1.</td><td align="justify"> Pending Order dapat dipasang pada setiap sesi.</td>
								</tr>
								<tr>
									<td valign="top">2.</td><td align="justify"> Pending Order secara otomatis akan berakhir pada akhir sesi 1.</td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td align="left"><strong>Expiration Pending Order</strong></td>
						<td align="left"colspan="3">
						Harga yang tampil di luar jam transaksi tidak berlaku.<br/>
						Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh Head Settlement
						PT. Esandar Arthamas Berjangka.
						</td>
					<tr>
						<td align="left"><strong>Level/Spread Pending Order (Limit Order (LO) / Stop Order (SO) / Stop Loss (SL) / Take Profit (TP))</strong></td>
						<td align="left"colspan="3">Level / Spread antara harga yang diminta dan harga running adalah minimum 30 poin dari harga Running.</td>
					</tr>
				</table>
				<table cellpadding="5" width="100%" border="1"><br/>
					<tr>
						<td align="left" valign="top" width="20%"><strong>Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)</strong></td>
						<td align="justify" width="25%">Dalam melakukan transaksi, nasabah membutuhkan margin tambahan
									dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada,
									dimana menyebabkan uang jaminan menjadi berkurang.<br/><br/>
									Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah 
									dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan
									dalam account nasabah apabila dana telah good fund.</td>
						<td align="justify" valign="top" width="25%">Apabila equity nasabah tidak mencukupi
									untuk margin overnight maka untuk margin tambahan (inject dana)
									harus dilakukan 2 jam setelah market close, dan apabila tidak dilakukan 
									penambahan dana maka posisi nasabah akan dilikuidasi berdasarkan harga market close.</td>
						<td align="left" valign="top" width="30%">Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :<br/><br/>
							<table>
								<tr>
								<td valign="top">&#9658</td><td align="justify"> Dana yang dapat ditarik tidak dapat melebihi dari 
									Free Margin yang ada di platform Esandar Trader.</td>
								</tr>
								<tr>
								<td valign="top">&#9658</td><td align="justify"> Penarikan dana yang diterima sebelum jam 12:00 wib 
									akan dibayar pada hari yang sama (T+0).</td>
								</tr>
								<tr>
								<td valign="top">&#9658</td><td align="justify"> Penarikan dana yang diterima setelah jam 12:00 wib 
									akan dibayar pada hari berikutnya (T+1).</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td valign="top" width="25%" align="left" ><strong>Margin Call & Force Liquidation</strong></td>
						<td valign="top"align="left" colspan="2"><Strong><i>Margin Call Equity Level :</i><br/>(10% < Margin Level < 100%)</strong><br/>
						Nasabah harus menambah equity <I>(margin call)</I> apabila equity nasabah sudah  mencapai level antara <strong><I>(10%< Margin Level <100%) dari Margin Requirement.</I></strong>
						</td>

						<td valign="top" width="25%" align="justify" colspan="2"><strong><I>Force Liquidation : </I></strong>
							<br/>
							<strong>A. Margin Level mencapai 10% atau dibawahnya.</strong><br/>
							Apabila Equity account Nasabah mencapai level 10% atau dibawahnya dari Margin Requirement, maka Force Liquidation akan dilakukan.
							<br/><br/>
							<strong>B. Short Margin untuk posisi Overnight</strong><br/>
							Semua posisi yang masih terbuka pada saat market close setiap harinya dengan jumlah margin yang tidak cukup (short margin) akan dilikuidasi dengan harga closing yang mengacu pada harga closing Esandar Trader.
						</td>
					</tr>
					<tr>
						<td align="left"><strong>KERAHASIAAN</strong></td>
						<td align="justify"colspan="3">Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.<br/><br/>
							Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.</td>
					</tr>
					<tr>
						<td align="left"><strong>Lain-Lain(Miscellaneous)</strong></td>
						<td align="left"colspan="3">
							<table>
								<tr>
									<td valign="top">1.</td><td align="justify"> Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market</td>
								</tr>
								<tr>
									<td valign="top">2.</td><td align="justify"> Harga yang tampil di luar jam transaksi tidak berlaku.</td>
								</tr>
								<tr>
									<td valign="top">3.</td><td align="justify"> Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader,
										maka order yang terjadi pada harga wrong quote dinyatakan tidak berlaku (batal), 
										dan akan dibatalkan secara otomatis, tanpa adanya pemberitahuan terlebih dahulu.</td>
								</tr>
								<tr>
									<td valign="top">4.</td><td align="justify"> Open Gap berlaku untuk semua produk futures maupun rollover.
										Apabila selisih harga closing market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap kontraknya, 
										maka semua posisi open pada overnight akan dihedge secara otomatis oleh Sistem.</td>
								</tr>
								<tr>
									<td valign="top"></td><td align="justify"> Atas keuntungan maupun kerugian yang timbul karena Open Gap tersebut menjadi hak atau tanggungjawab nasabah sepenuhnya.</td>
								</tr>
								<tr>
									<td valign="top">5.</td><td align="justify"> Waktu yang digunakan pada sistem adalah GMT + 2.</td>
								</tr>
								<tr>
									<td valign="top">6.</td><td align="justify"> Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan.</td>
								</tr>
								<tr>
									<td valign="top">7.</td><td align="justify"> Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, 
										karena itu nasabah dapat menghadapi risiko yang berkaitan dengan Sistem tersebut. 
										Kegagalan dengan perangkat keras atau perangkat lunak atau 
										<strong><U>terganggunya koneksi internet berakibat tidak dapat dilaksanakan sesuai dengan perintah nasabah.</strong></U></td>
								</tr>
								<tr>
									<td valign="top"></td><td align="justify"> <strong>Apabila terjadi kondisi sebagaimana yang disebutkan diatas,
										maka order / perintah nasabah dilaksanakan dengan menggunakan telepon ke kantor pusat 
										PT. Esandar Arthamas Berjangka (021-29339318) disertai Phone Password.
										</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="left"><strong>Keadaan Hectic Market</strong></td>
						<td valign="top" width="25%" align="justify" colspan="3">
							Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara. 
							<br/><br/> 

							Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:
							<table>
								<tr>
									<td valign="top">&rArr;</td><td align="justify"> Bid atau offer hanya ada satu sisi;</td>
								</tr>
								<tr>
									<td valign="top">&rArr;</td><td align="justify"> Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang Penyelenggara;</td>
								</tr>
								<tr>
									<td valign="top">&rArr;</td><td align="justify"> Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang mempengaruhi kondisi pasar financial.</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="left"><strong>REPORTING</strong></td>
						<td valign="top" width="25%" align="justify" colspan="3">
							<table>
								<tr>
									<td valign="top">1.</td><td align="justify"> Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu Laporan Keuangan hasil transaksi 
										nasabah secara otomatis akan terekam di sistem Esandar Trader secara online atau dapat mengakses Laporan Transaksi 
										yang dilakukan di hari sebelumnya yang dikirimkan secara otomatis ke email nasabah.</td>
								</tr>
								<tr>
									<td valign="top">2.</td><td align="justify"> Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada laporan yang tersedia didalam Sistem Esandar Trader.</td>
								</tr>
								<tr>
									<td valign="top">3.</td><td align="justify"> Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar Arthamas Berjangka tidak menerima pemberitahuan melalui telepon 
										dan disusul pada pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan nasabah tersebut.</td>
								</tr>
								<tr>
									<td valign="top">4.</td><td align="justify"> Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada 
										PT. Esandar Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah
										menerima Laporan Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut dianggap benar dan sah.</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="left"><strong>PENYELESAIAN PERSELISIHAN</strong></td>
						<td align="left"colspan="3">
							<table>
								<tr>
									<td valign="top">1.</td><td align="justify"> Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis transaksi, report, dan data-data pendukung lainnya.</td>
								</tr>
								<tr>
									<td valign="top">2.</td><td align="justify"> Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.</td>
								</tr>
								<tr>
									<td valign="top"></td><td align="justify"> Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>

				<form onSubmit="return validateForm()" name='formku' method='post' action="functionsiidrreg.php">
					<table cellpadding="5" width="100%" class="tab-rule" border="1">
						<tr>
							<td align="center" colspan="5">Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang<br/>
								<b>PERATURAN PERDAGANGAN (TRADING RULES)</b>, mengerti dan menerima ketentuan<br/>
								dalam bertransaksi.</td>
						</tr>
						<tr>
							<td width="27%">Pernyataan menerima / tidak</td>
							<td width="3%">:</td>
							<td width="70%" align='left'>
								<input class='checkbox' id='ya' name="terima" type="radio" value="Ya" onclick="myFunction()"> Ya &nbsp;&nbsp;
								<input class='checkbox' id='tidak' name="terima" type="radio" value="Tidak"> Tidak</td>
						</tr>
						<tr>
							<?php
							$tgl = new datetime('Asia/Jakarta');
							$tgl_str = $tgl->format('d-m-Y');
							?>
							<td width="27%">Menerima pada Tanggal</td>
							<td width="3%">:</td>
							<td width="70%" align='left'><input class='kodeae' type='text' name='t1' id='tanggalya' readonly></td>
						</tr>
					</table>
					<table align='center'>
						<tr>
						  <td><button id='submit' name='submit' type='submit'>Submit</button></td>
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