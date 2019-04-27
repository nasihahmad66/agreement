<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
<title>FOREX 0,1 LOT</title></head>
<?php
include '../config.php';
session_start();

$sql = mysqli_query($connect, 'select * from formulir1 where No_Identitas=' . $_SESSION['id'] . '');
$hasil = mysqli_fetch_array($sql);
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
 <h2 align="left"><p class="mda" align="left"><a href="delete1.php" style="font-size:20px;"><img src="../image/mda.PNG" width="120px"></a></p></h2>
<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page8" value="8" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>
<?php session_start(); ?>

<p align="right" style="font-size:14px; font-family:Arial"><br/>Lampiran 2 Peraturan Kepala Badan Pengawas<br/> 
Perdagangan Berjangka Komoditi <br/>
Nomor: 107/BAPPEBTI/PER/11/2013 <br/>
</p>
<h3 align="center" style="font-size:16px; font-family:Arial">Formulir: 107.PBK.06<br/>
Trading Rules Kontrak Derivatif Forex dan Loco London Gold untuk 0.1 Lot<br/>
</h3><br/><hr><br>

<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="left" colspan="3"><strong>PEMBUKAAN ACCOUNT (REKENING)</strong></td>
</tr>
<tr>
	<td align="left" width="20%"><strong>Aplikasi Penerimaan Nasabah Secara Elektronik dan Online</strong></td>
	<td valign="top" align="justify" colspan="2">Untuk keperluan pembukaan rekening, maka nasabah wajib registrasi melalui Sistem Agreement dan Registrasi Online yang ada di website esandar.co.id guna pengisian aplikasi pembukaan rekening transaksi dan dokumen-dokumen yang wajib dibaca, dipahami dan dimengerti.
		</td>
</tr>
<tr>
	<td valign="top" align="left"><strong>Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)</strong></td>
	<td valign="top" align="justify" ><strong>Dokumen Pemberitahuan Adanya Risiko :</strong><br/>
		Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti "Pernyataan Menerima Pemberitahuan Adanya Risiko" yang ada pada "Dokumen Pemberitahuan Adanya Risiko". 

		Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.</td>
	<td valign="top" align="justify" ><strong>Perjanjian Pemberian Amanat :</strong><br/>
		Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian Pemberian Amanat.
		</td>
</tr>
<tr>
	<td valign="top" align="left"><strong>Rekening Segregated </strong></td>
	<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan setoran dana dalam mata uang Rupiah dan US Dollar sebagai Margin Deposit untuk jaminan Pembukaan Account, dan Additional Margin ( Inject Dana ) ke Rekening Segregated PT. Esandar Arthamas Berjangka :
		<table>
			<tr>
				<td><font style="font-family:Arial; font-size:13px">    
					<strong> &rArr;</strong></td>
				<td><strong>Bank Central Asia (BCA) Sudirman - Jakarta</strong></td>
			</tr>
			<tr>
				<td></td><td>No. Account : 035.313.6019 (IDR)</td>
			</tr>
			<tr>
				<td></td><td>Atas Nama : PT. Esandar Arthamas Berjangka</td>
			</tr>
			<tr>
				<td><strong> &rArr;</strong></td>
				<td><strong>Bank Central Asia (BCA) Sudirman - Jakarta</strong></td>
			</tr>
			<tr>
				<td></td><td>No. Account : 035.313.4610 (USD)</td>
			</tr>
			<tr>
				<td></td><td>Atas Nama : PT. Esandar Arthamas Berjangka</td>
			</tr>
					</font>
				</td>
			</tr>
			<tr>
				<td><font style="font-family:Arial; font-size:13px">    
					<strong> &rArr;</strong></td>
				<td><strong>Bank CCB Indonesia (China Construction Bank Indonesia)-Rawamangun</strong></td>
			</tr>
			<tr>
				<td></td><td>No. Account : 100-7585-388 (IDR)</td>
			</tr>
			<tr>
				<td></td><td>Atas Nama : PT. Esandar Arthamas Berjangka</td>
			</tr>
		</table>	
	</td>
</tr>
<tr>
	<td align="left" ><strong>Rekening Nasabah Berlaku Efektif</strong></td>
	<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan transaksi, apabila setoran dana telah efektif (Good Fund) dan telah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya.
		</td>
</tr>
</table>
<br/>
<br/>
<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="center" colspan="3"><strong>KETENTUAN TRADING</strong></td>
</tr>
<tr>
	<td valign="top" width="20%" align="left" ><strong>Margin Deposit</strong></td>
	<td valign="top" align="justify" colspan="2">Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.
		</td>
</tr>
<tr>
	<td valign="top" width="20%" align="left" ><strong>Margin Deposit Awal</strong></td>
	<td valign="top" align="justify" colspan="2">Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : $ 500 (New Account).
		</td>
</tr>
<tr>
	<td valign="top" width="20%" align="left" ><strong>Rate</strong></td>
	<td valign="top" align="justify" colspan="2"><table><tr><td>Fixed Rate</td><td>:</td><td> 1 USD = 10.000 IDR</td></tr><tr><td></td><td></td><td> 1 USD = 12.000 IDR</td></tr><tr><td>Floating Rate</td><td></td><td></td></tr></table></td>
</tr>
<tr>
	<td valign="top" width="20%" align="left" ><strong>Commission Charge</strong></td>
	<td valign="top" align="justify" colspan="2">Commission Charge : USD. 5.- / 0.1 lot settled</td>
</tr>
</table>
<br/>
<br/>
<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="center" colspan="4"><strong>Jam Perdagangan (WIB)</strong></td>
</tr>
<tr>
	<td valign="top" width="30%" align="left" ><strong></strong></td>
	<td valign="top" width="35%" align="center" colspan="2"><strong>Winter Time</strong></td>
	<td valign="top" width="35%" align="center" ><strong>Summer Time</strong></td>
</tr>
<tr>
	<td valign="top" width="30%" align="left" ><strong>MAJOR & CROSS RATE</strong></td>
	<td valign="top" width="35%" align="center" colspan="2">Senin buka pada jam 05:05 dan tutup pada hari sabtu jam 05:00</td>
	<td valign="top" width="35%" align="center" colspan="2">Senin buka pada jam 04:05 dan tutup pada hari sabtu jam 04:00</td>
</tr>
<tr>
	<td valign="top" width="30%" align="left" ><strong>LOCO LONDON GOLD</strong></td>
	<td valign="top" width="35%" align="center" colspan="2">Senin buka pada jam 06.05 dan Sabtu tutup pada jam 05.00</td>
	<td valign="top" width="35%" align="center" >Senin buka pada jam 05.05 dan Sabtu tutup pada jam 04.00</td>
</tr>
<tr>
	<td valign="top" width="30%" align="left" ><strong>Waktu istirahat pada time trading LOCO LONDON GOLD</strong></td>
	<td valign="top" width="35%" align="center" colspan="2">05.00 sampai jam 06.00(Setiap Hari)</td>
	<td valign="top" width="35%" align="center" >04.00 sampai jam 05.00(Setiap Hari)</td>
</tr>
</table>
<br/>
<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="center" colspan="4"><strong>MAJOR RATE</strong></td>
	<td align="center" colspan="4"><strong>Contract Size</strong></td>
	<td align="center" colspan="4"><strong>Minimum Tick Value</strong></td>
	<td align="center" colspan="4"><strong>Normal Spread</strong></td>
	<td align="center" colspan="4"><strong>Maximum Volume New Open Position</strong></td>
	<td align="center" colspan="4"><strong>Margin Requirement per 0,1 lot Day Trade/Overnight :</strong></td>
	<td align="center" colspan="4"><strong>Margin Hedged per 0,1 lot</strong></td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>EURUSD</strong></td>
	<td align="center" colspan="4">&euro; 100,000.-</td>
	<td align="center" colspan="4">0.00001</td>
	<td align="center" colspan="4">0.00025</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>USDJPY</strong></td>
	<td align="center" colspan="4">$ 100,000,-</td>
	<td align="center" colspan="4">0.001</td>
	<td align="center" colspan="4">0.025</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>GBPUSD</strong></td>
	<td align="center" colspan="4">&pound; 100,000.-</td>
	<td align="center" colspan="4">0.00001</td>
	<td align="center" colspan="4">0.00025</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>USDCHF</strong></td>
	<td align="center" colspan="4">$ 100,000.-</td>
	<td align="center" colspan="4">0.00001</td>
	<td align="center" colspan="4">0.00025</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>AUDUSD</strong></td>
	<td align="center" colspan="4">AUD 100,000.-</td>
	<td align="center" colspan="4">0.00001</td>
	<td align="center" colspan="4">0.00025</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>

<tr>
	<td align="center" height="15px" colspan="40"></td>
</tr>
<tr class="top">
	<td align="center" colspan="4"><strong>CROSS RATE</strong></td>
	<td align="center" colspan="4"></td>
	<td align="center" colspan="4"></td>
	<td align="center" colspan="4"></td>
	<td align="center" colspan="4"></td>
	<td align="center" colspan="4"></td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>EURJPY</strong></td>
	<td align="center" colspan="4">EUR 100,000.-</td>
	<td align="center" colspan="4">0.001</td>
	<td align="center" colspan="4">0.03</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>GBPJPY</strong></td>
	<td align="center" colspan="4">GBP 100,000,-</td>
	<td align="center" colspan="4">0.001</td>
	<td align="center" colspan="4">0.03</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>AUDJPY</strong></td>
	<td align="center" colspan="4">AUD 100,000.-</td>
	<td align="center" colspan="4">0.001</td>
	<td align="center" colspan="4">0.03</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>CHFJPY</strong></td>
	<td align="center" colspan="4">CHF 100,000.-</td>
	<td align="center" colspan="4">0.001</td>
	<td align="center" colspan="4">0.03</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>EURGBP</strong></td>
	<td align="center" colspan="4">EUR 100,000.-</td>
	<td align="center" colspan="4">0.00001</td>
	<td align="center" colspan="4">0.0003</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 150.-</td>
	<td align="center" colspan="4">USD 30,-</td>
</tr>

<tr>
	<td align="center" height="15px" colspan="40"></td>
</tr>
<tr class="top">
	<td align="center" colspan="4"><strong>LOCO LONDON GOLD</strong></td>
	<td align="center" colspan="4"></td>
	<td align="center" colspan="4"></td>
	<td align="center" colspan="4"></td>
	<td align="center" colspan="4"></td>
	<td align="center" colspan="4"></td>
</tr>
<tr>
	<td align="center" colspan="4"><strong>XAUUSD</strong></td>
	<td align="center" colspan="4">100 Troy Ounce</td>
	<td align="center" colspan="4">USD 0.01</td>
	<td align="center" colspan="4">USD 1</td>
	<td align="center" colspan="4">5 lot</td>
	<td align="center" colspan="4">USD. 100.-</td>
	<td align="center" colspan="4">USD 20,-</td>
</tr>
<tr>
	<td colspan="40"><strong>
	<ul>
		<li>Maksimal Open Posisi Dalam 1 Account 20 LOT </li>
		<li>Dealing Quote (DQ) menggunakan telepon akan dikenakan tambahan 3 point untuk Majors, Cross Rate dan tambahan 1$ untuk Loco London Gold dari tabel di atas. Ketentuan ini tidak berlaku bila kondisi server sedang mengalami gangguan teknis (down)</li>
	</ul>
	</strong></td>
</tr>
</table><br>
<table cellpadding="5" width="100%" border="1">
<tr>
	<td valign="top" width="15%" align="left"><strong>KALKULASI : Profit/Loss</strong></td>
	<td valign="top" width="40%" align="left">
		<table><font style="font-family:Arial; font-size:13px">    
			<tr>
				<td><strong> &#9658;</strong></td><td><strong>EURUSD ; GBPUSD ; AUDUSD  :</strong></td> 
			</tr>
			<tr>
				<td></td><td>(SELL-BUY) x lot x contract size</td>
			</tr>
			<tr>
				<td><strong> &#9658;</strong></td><td><strong>USDJPY ; USDCHF :</strong></td>
			</tr>
			<tr>
				<td></td><td>(SELL-BUY) x lot x contract size/harga likuidasi</td>
			</tr>
		</table>
	</td>
	<td valign="top" width="45%" align="left"><font style="font-family:Arial; font-size:13px">
		<table><font style="font-family:Arial; font-size:13px">    
			<tr>
				<td><strong>&diams;</strong></td><td><strong>EURJPY ; GBPJPY ; AUDJPY ; CHFJPY :</strong></td> 
			</tr>
			<tr>
				<td></td><td>(SELL-BUY) x lot x contract size /(USDJPY)</td>
			</tr>
			<tr>
				<td><strong>&diams;</strong></td><td><strong>EURGBP :</strong></td>
			</tr>
			<tr>
				<td></td><td>(SELL-BUY) x lot x contract size x (GBPUSD)</td>
			</tr>
			<tr>
				<td><strong>&diams;</strong></td><td><strong>XAUUSD :</strong></td>
			</tr>
			<tr>
				<td></td><td>(SELL-BUY) x lot x contract size</td>
			</tr></font>
		</table>
	</td>
</tr>
<tr>
	<td valign="top" width="15%" align="left"><strong>KALKULASI : Swap</strong></td>
	<td valign="top" width="15%" align="left"><font style="font-family:Arial; font-size:13px">    
		<table>
		<tr>
			<td><strong>&#9658;</strong></td><td><strong>EURUSD ; GBPUSD ; AUDUSD  :</strong></td>
		</tr>
		<tr>
			<td></td><td>(closing price x lot x contract size x interest) /360</td>
		</tr>
		<tr>
			<td><strong>&#9658;</strong></td><td><strong>USDJPY ; USDCHF :</strong></td>
		</tr>
		<tr>
			<td></td><td>(USD 100,000.- x lot x interest)/360</td>
		</tr>
		</table>
		</font>
	</td>
	<td valign="top" width="15%" align="left"><font style="font-family:Arial; font-size:13px">
	<table>
		<tr>
			<td><strong>&diams;</td><td><strong>EURJPY :</strong></td>
		</tr>
		<tr>
			<td></td><td>(EURUSD closing price x lot x contract size x interest)/360</td>
		</tr>
		<tr>
			<td><strong>&diams;</td><td><strong>GBPJPY :</strong></td>
		</tr>
		<tr>
			<td></td><td>(GBPUSD closing price x lot x contract size x interest)/360</td>
		</tr>
		<tr>
			<td><strong>&diams;</td><td><strong>AUDJPY :</strong></td>
		</tr>
		<tr>
			<td></td><td>(AUDJPY closing price x lot x contract size x interest)/360</td>
		</tr>
		<tr>
			<td><strong>&diams;</td><td><strong>CHFJPY :</strong></td>
		</tr>
		<tr>
			<td></td><td>lot x contract size x interest /USDCHF closing price /360</td>
		</tr>
		<tr>
			<td><strong>&diams;</td><td><strong>EURGBP :</strong></td>
		</tr>
		<tr>
			<td></td><td>(EURUSD closing price x lot x contract size x interest)/360</td>
		</tr>
		<tr>
			<td><strong>&diams;</td><td><strong>XAUUSD :</strong></td>
		</tr>
		<tr>
			<td></td><td>(XAUUSD closing price x lot x contract size x interest) /360</td>
		</tr>
	</table></font>
	</td>
</tr>
<tr>
	<td valign="top" width="15%" align="left"><strong>Interest Rate / Swap</strong></td>
	<td valign="top" width="15%" align="left" colspan='2'>Interest rate akan mempengaruhi equity account nasabah yang mempunyai posisi open (overnight). Masing-masing currency tersebut tidak sama tingkat interest rate (suku bunga). Interest
rate tersebut tergantung kepada Pedagang.
	<table>
	<tr>
		<td>&diams;</td><td>Perhitungan bunga 1 hari valuta walaupun dari hari Jum'at ke Senin</td>
	</tr>
	<tr>
		<td>&diams;</td><td>Perhitungan bunga 3 hari valuta walaupun dari hari Rabu ke Kamis</td>
	</tr>
	</table></td>
</tr>
<tr>
	<td valign="top" width="15%" align="justify"><strong>Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)</strong></td>
	<td valign="top" width="15%" align="justify">Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang dipasang / diorder dimana menyebabkan uang jaminan menjadi berkurang.<br/><br/>

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah <strong><I>good fund.</I>
</strong></td>
	<td valign="top" width="15%" align="left">Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :
	<table>
	<tr>
		<td valign="top">&diams;</td><td>Dana yang dapat ditarik tidak dapat melebihi dari Free Margin yang ada di platform Esandar Trader.</td>
	</tr>
	<tr>
		<td valign="top">&diams;</td><td>Penarikan dana yang diterima sebelum jam 12:00 wib akan dibayar pada hari yang sama (T+0).</td>
	</tr>
	<tr>
		<td valign="top">&diams;</td><td>Penarikan dana yang diterima setelah jam 12:00 wib akan dibayar pada hari berikutnya (T+1).</td>
	</tr></table>
	</td>
</tr>

<tr>
	<td valign="top" width="15%" align="left"><strong>Level / Spread Pending Order (Limit Order (LO) / Stop Order (SO))</strong></td>
	<td valign="top" width="15%" align="left" colspan='2'><font style="font-family:Arial; font-size:15px">
Level / Spread antara harga yang diminta dan harga running adalah minimum 15 poin dari harga running.</td>
</tr>

<tr>
	<td valign="top" width="15%" align="left"><strong>Expiration Pending Order</strong></td>
	<td valign="top" width="15%" align="left" colspan='2'>
	<table>
	<tr>
		<td valign="top">&#9658 </td><td>Expiration (masa berlaku ) Pending Order untuk new position adalah Good Till Friday (GTF).</td>
	</tr>
	<tr>
		<td valign="top">&#9658 </td><td>Jika Market Holiday (Libur) atau jam trading closing lebih awal maka semua pending order untuk new Position dan liquidation position akan dicancel secara automatis oleh system setelah market closed.</td>
	</tr>
	<tr>
		<td valign="top">&#9658 </td><td>Expiration (masa berlaku) Pending Order untuk liquidation position adalah Good Till Friday (GTF).</td>
	</tr>
	<tr>
		<td valign="top">&#9658 </td><td>Apabila terjadi error pada sistem, Konfirmasi Pending Order akan diputuskan oleh PT. Esandar Arthamas Berjangka.</td>
	</tr></table>
</td>
</tr>
<tr>
	<td valign="top" width="15%" align="justify"><strong>Margin Call & <i>Force Liquidation</i></strong></td>
	<td valign="top" align="left" width="15%"><Strong style="font-size:15px"><i>Margin Call Equity Level :</i></Strong> <br>
	<Strong style="font-size:13px">(10% < Margin Level < 100%)</Strong><br>
	<font style="font-family:Arial; font-size:13px">Nasabah harus menambah equity (margin call) apabila equity nasabah sudah  mencapai level
antara (10% < <i>Margin Level</i>< 100%)dari <i>Margin Requirement</i>.</font></td>

	<td valign="top" width="15%" align="left"><b style="font-size:15px"><i>Force Liquidation :</i></b><br><br>
	<table>
	<tr>
		<td valign="top"><strong><i>A.</i></strong></td><td><strong><i>Margin Level mencapai 10% atau dibawahnya.</i></strong></td>
	</tr>
	<tr>
		<td align="justify"></td><td>Apabila Equity account Nasabah mencapai level 10% atau dibawahnya dari Margin Requirement, maka Force Liquidation akan dilakukan.</td>
	</tr>
	<tr>
		<td valign="top"><strong><i>B.</i></strong></td><td><strong><i>Short Margin untuk posisi Overnight.</i></strong></td>
	</tr>
	<tr>
		<td align="justify"></td><td>Semua posisi yang masih terbuka pada saat market close hari Jumat dengan jumlah margin yang tidak cukup (short margin) akan dilikuidasi dengan harga closing yang mengacu pada harga closing Esandar Trader.</td>
	</tr>
	</table>
	</td>
</tr>
<tr>
	<td valign="top" align="Left" width="15%"><Strong>Keadaan Hectic Market</Strong></td>
	<td valign="top" width="15%" colspan="2" align="justify"><font style="font-family:arial; font-size:15px">Adalah keadaan ketika pasar dalam kondisi yang tidak normal atau tidak menentu.Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi
yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara. 

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:
	<table>
	<tr>
		<td valign="top">&#9658;</td><td>Bid atau offer hanya ada satu sisi;</td>
	</tr>
	<tr>
		<td valign="top">&#9658;</td><td>Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh pedagang Penyelenggara;</td>
	</tr>
	<tr>
		<td valign="top">&#9658;</td><td>Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal lain yang mempengaruhi kondisi pasar Financial.</td>
	</tr>
	</table>
</font></td>
</tr>
<tr>
	<td valign="top" width="15%" align="justify"><Strong>KERAHASIAAN</Strong></td>
	<td valign="top" width="15%" align="justify" colspan="2">
	<font style="font-family:arial; font-size:15px">Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), 
dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. 
Fungsinya adalah sebagai hak akses ke Fasilitas Platform Esandar Trader. 

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama <Strong><u>WAJIB</u></Strong> untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan
kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. 

Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.
</font></td>
</tr>
<tr>
	<td valign="top" align="Left" width="15%"><Strong>REPORTING</Strong></td>
	<td valign="top" align="left" width="15%" colspan="2">
	<table>
		<tr>
			<td valign="top">1.</td><td align="justify">Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar Trader secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang dikirimkan secara otomatis ke email nasabah.</td>
		</tr>
		<tr>
			<td valign="top">2.</td><td align="justify">Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada laporan yang tersedia didalam Sistem Esandar Trader.</td>
		</tr>
		<tr>
			<td valign="top">3.</td><td align="justify">Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada pemberitahuantertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan nasabah tersebut.</td>
		</tr>
		<tr>
			<td valign="top">4.</td><td align="justify">Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut dianggap benar dan sah.</td>
		</tr>
	</table>
</font></td>

</tr>
<tr>
	<td valign="top" align="Justify" width="15%"><Strong>Lain-Lain (Miscellaneous)</Strong></td>
	<td valign="top" align="left" width="15%" colspan="2">
	<table>
		<tr>
			<td valign="top">1.</td><td align="justify">Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market.</td>
		</tr>
		<tr>
			<td valign="top">2.</td><td align="justify">Apabila terjadi <i>wrong quote</i> (wrong price) pada Platform Esandar Trader, maka order yang dilakukan pada harga <i>wrong quote</i> dinyatakan tidak berlaku (batal), dan akan dibatalkan secara otomatis, tanpa adanya pemberitahuan terlebih dahulu.</td>
		</tr>
		<tr>
			<td valign="top">3.</td><td align="justify">Waktu yang digunakan pada sistem adalah GMT + 2.</td>
		</tr>
		<tr>
			<td valign="top">4.</td><td align="justify">Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan atau email nasabah.</td>
		</tr>
		<tr>
			<td valign="top">5.</td><td align="justify">Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu  nasabah dapat menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras atau
	perangkat lunak atau<u><b> terganggunya koneksi internet berakibat tidak dapat dilaksanakan sesuai dengan perintah nasabah.</b></u></td>
		</tr>
		<tr>
			<td align="justify" colspan="2"><b>Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka (021-29339318) disertai Phone Password</b>.</font></td>
		</tr>
	</table>
</tr>
<tr>
	<td valign="top" align="justify" width="15%"><Strong>PENYELESAIAN PERSELISIHAN</Strong></td>
	<td valign="top" align="left" width="15%" colspan="2">
	<table>
		<tr>
			<td valign="top">1.</td><td align="justify">Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis transaksi, report, dan data-data pendukung lainnya.</td>
		</tr>
		<tr>
			<td valign="top">2.</td><td align="justify">Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.
Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.</td>
		</tr>
	</table>
	</font></td>
</tr>
</table>

<form onSubmit="return validateForm()" method='post' action="functionforexlot.php" >
<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
<td align="center" colspan="5">
Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.
</td>
</tr>
<tr>
<td width="27%">Pernyataan menerima / tidak</td>
<td width="3%">:</td>
<td width="70%" align='left'>
<input class='checkbox' id='ya' name="terima" type="radio" value="Ya" onclick="myFunction()">Ya
<input class='checkbox' id='tidak' name="terima" type="radio" value="Tidak">Tidak</td>
</tr>
<tr>
<td width="27%">Menerima pada Tanggal</td>
<td width="3%">:</td>
<td width="70%" align="left"><input class='kodeae' type='text' name='t1' id='tanggalya' readonly>

</td>
</tr>
</table>

  <tr>
  <td><center>
<button id='submit' name='submit' type='submit'>Submit</button>
  </td>
    </tr>

</form>
</div>
</div>
</body>
</html>