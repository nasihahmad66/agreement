<?php 
include ('config.php');
if (isset($_POST['submit'])){
    header('Content-type: application/vnd.ms-word');
    header('Content-Disposition: attachment;Filename=nama_dokumennya.doc');

	//Page 1
	$email = $_POST['email'];
	$perintah = mysql_query("SELECT * FROM formulir1 where email = '$email'");
	$row = mysql_fetch_array($perintah);
	$kodeae = $row[0];
	$nama = $row[1];
	$tempat = $row[2];
	$tanggal = $row[3];
	$bulan = $row[4];
	$tahun = $row[5];
	$alamat = $row[6];
	$kodepos = $row[7];
	$email = $row[8];
	$noid = $row[9];
	$notelp = $row[10];
	$pekerjaan = $row[11];
	$transaksi = $row[12];
	$sebutkan = $row[13];
	$jenistransaksi = $row[14];
	$tanggallahir = "$tanggal - $bulan - $tahun";
	echo"
	<html>
		<body>
			<h2 align='center'><Strong>PERHATIAN !!!<br />
			HARAP DIBACA TERLEBIH DAHULU</Strong></h2><br><br>
			<table width='70%' border='1' align='Center' style='border-color:#00000'>
				<tr>
					<td style='font-size:20px'><Strong>Nasabah hanya dapat dianggap cakap apabila sesuai dengan persyaratan di bawah ini :</Strong>
					</td>
				</tr>
				<tr>
					<td style='font-size:18px'>
						<ul>
							<li>- Nasabah pada saat mengisi perjanjian nasabah secara elektronis memiliki usia minimal 21 tahun</li>
							<li>- Tidak dinyatakan pailit oleh pengadilan</li>
							<li>- Nasabah bukan merupakan pegawai atau pejabat dari BAPPEBTI, Bursa Berjangka, atau Lembaga Kliring Berjangka.</li>
							<li>- Nasabah bukan merupakan Bendahara  yang melayani kepentingan umum.</li>
							<li>- Nasabah dengan keterbelakangan mental, buta, buta huruf dan keterbatasan fisik lainnya yang dapat mengganggu (diperkirakan dapat mengganggu) tidak diperkenankan untuk membuka akun.</li>
							<li>- Memiliki pengetahuan bertransaksi yang cukup, dibuktikan dengan adanya demo account.</li>
						</ul>
					</td>
				</tr>
			</table><br /><br />
			<table width='70%' align='center' border='1'>
				<tr>
					<td style='font-size:18px'>
						<Strong>Dokumen yang harus dipersiapkan :</Strong><br />
						<ul>
							<li>- Demo account</br><br />
							Untuk acc Kontrak Berjangka dapat melakukan demo terlebih dahulu di alamat <a href='#'>http://demo.hif.co.id</a><br />
							Harap mencatat Login yang disesuaikan dengan nama nasabah, dan mengisinya dibagian acc demo. (Untuk Acc demo yang diisi salah, maka account real tidak akan diproses)<br /><br />
							Untuk acc SPA Reguler dan Mini, dapat mengunduh aplikasi Esandar trader melalui pc / android / Ipad / Iphone dan membuat account demo pada server esandar-demo, dan harap mencatat login yang disesuaikan dengan nama nasabah.
							</li>
						</ul><br />
						<ul>
							<li>- Scan salah satu dari KTP/SIM/PASPOR dengan ukuran yang tidak lebih besar dari 2MB</li>
							<li>- Persiapkan juga nomor Rekening bank yang hendak dipakai untuk lalu lintas margin yang disesuaikan dengan nama nasabah. (Untuk penggunaan rekening bank BCA, pengiriman dana dapat dilakukan pada T+0, sedangkan penggunaan rekening bank lain mengakibatkan dana dapat sampai T+3 atau lebih ke rekening Nasabah.)</li>
							<li>- Persiapkan data Rekening Koran Bank / tagihan Kartu Kredit / Listrik / Telepon (optional)</li>
						</ul>
					</td>
				</tr>
			</table><br /><br>
			<table width='70%' border='0' align='center'>
				<tr>
					<td colspan='5' style='font-size:22px' align='center'><Strong>DATA NASABAH</Strong></td>
				</tr>
				<tr>
					<td>&nbsp; Kode AE (Optional)</td>	
					<td align='center'>:</td>	
					<td>$kodeae</td>
				</tr>
				<tr>
					<td>&nbsp; Nama Lengkap</td>
					<td align='center'>:</td>
					<td>$nama</td>
				</tr>
				<tr>	
					<td>&nbsp; Tempat / Tanggal Lahir</td>
					<td align='center'>:</td>	
					<td>$tempat &nbsp; / &nbsp; $tanggallahir</td>
				</tr>
				<tr>
					<td>&nbsp; Alamat Rumah</td>		
					<td align='center'>:</td>
					<td>$alamat</td>
				</tr>
				<tr>
					<td>&nbsp; Kode Pos</td>		
					<td align='center'>:</td>		
					<td>$kodepos</td>
				</tr>
				<tr>
					<td>&nbsp; Email</td>		
					<td align='center'>:</td>		
					<td>$email</td>
				</tr>
				<tr>
					<td>&nbsp; No.Identitas<br />
						&nbsp; KTP / SIM / PASPOR</td>
					<td align='center'>:</td>		
					<td>$noid</td>
				</tr>
				<tr>
					<td>&nbsp; No. Telp Handphone</td>	
					<td align='center'>:</td>	
					<td>$notelp</td>
				</tr>
				<tr>
					<td>&nbsp; Pekerjaan</td>	
					<td align='center'>:</td>	
					<td>$pekerjaan</td>
				</tr>
				<tr>
					<td colspan='5'>&nbsp;</td>
				</tr>
				<tr>
					<td width='30%'>Apakah Nasabah perah bertransaksi sebelumnya di bidang Perdagangan Berjangka Komoditi ?</td>
					<td align='center'>:</td>
					<td>&nbsp; $transaksi $sebutkan
					</td>
				</tr>
				<tr>
					<td width='30%' valign='top'>Margin Awal dan Jenis Transaksi yang akan di pilih</td>
					<td align='center'valign='top'>:</td>	
					<td>&nbsp;- $jenistransaksi</td>
				</tr>
			</table><br><br><br><br><br><hr><br><br><br><br><br>";
	
	//Page 2
	$email = $_POST['email'];
	$perintah2 = mysql_query("SELECT * FROM formulir2 where email = '$email'");
	$row2 = mysql_fetch_array($perintah2);
	$menerima = $row2[0];
	$tanggal = $row2[1];
	echo"
			<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas<br/>Perdagangan Berjangka Komoditi <br/>
							 Nomor: 107/BAPPEBTI/PER/11/2013</p><br/>
			<h3 style='font-size:18px;' align='center'>Formulir Nomor 107.PBK.01<br/>
													   PROFIL PERUSAHAAN PIALANG BERJANGKA</h3><br><br>
			<table align='center' width='70%' border='0'>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>PT. Esandar Arthamas Berjangka</td>
				</tr>
				<tr>
					<td valign='top'>Alamat</td>
					<td valign='top'>:</td>
					<td>Agung Podomoro Land Tower Lt 32<br/>
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
			</table>
			<p align='center' style='font-size:19px'><strong> Susunan Pengurus Perusahaan</strong><br></p>
			<table align='center' width='70%' border='0'>
				<tr>
					<td width='500'>Direksi</td>
					<td width='10'>:</td>
					<td width='300'>Francois Haberth Hallatu</td>
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
					<td>Dewan Komisaris</td>
				</tr>
				<tr>
					<td>Komisaris Utama</td>
					<td>:</td>
					<td>Supardi Hardjono</td>
				</tr>
				<tr>
					<td>Komisaris</td>
					<td>:</td>
					<td>Solihin</td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td colspan='5'><center><h3>Susunan Pemegang Saham Perusahaan</h3></center></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
			</table>
			<table align='center' width='70%' border='0'>
				<tr>
					<td>Nomor dan Tanggal Izin Usaha dari<br/>Bappebti</td>
					<td valign='top'>:</td>
					<td valign='top'>No 78/BAPPEBTI/PA/07/2012</td>
				</tr>
				<tr>
					<td>Nomor dan Tanggal Keanggotaan<br/>Bursa Berjangka</td>
					<td valign='top'>:</td>
					<td valign='top'>SPAB-070/BBJ/05/04</td>
				</tr>
				<tr>
					<td>Nomor dan Tanggal Keanggotaan<br/>Lembaga Kliring Berjangka</td>
					<td valign='top'>:</td>
					<td valign='top'>21/AK-KBI/PA/X/2012</td>
	</tr>
	<tr>
	<td>Nomor dan Tanggal Persetujuan<br/>sebagai Peserta Sistem Perdagangan Alternatif</td>
	<td valign='center'>:</td>
	<td valign='center'>SPAB-070/BBJ/05/04</td>
	</tr>
	<tr>
	<td>Nama Penyelenggara Sistem<br/>Perdagangan Alternatif</td>
	<td valign='top'>:</td>
	<td valign='top'>PT. Harta International Investama</td>
	</tr>
	<tr>
	<td>Kontrak Berjangka Yang Diperdagangkan</td>
	<td valign='top'>:</td>
	<td valign='top'>PT. Harta International Investama</td>
	</tr>
	<tr>
	<td>Kontrak Derivatif Syariah Yang Diperdagangkan</td>
	<td valign='top'>:</td>
	<td valign='top'>-</td>
	</tr>
	<tr>
	<td>Kontrak Derivatif dalam Sistem Perdagangan Alternatif</td>
	<td valign='center'>:</td>
	<td valign='top'>Forex<br/>Stock Indeks<br/>Komoditi</td>
	</tr>
	<tr>
	<td>Kontrak Derivatif dalam Sistem<br/>Perdagangan Alternatif dengan volume<br/>minimum 0,1 (nol koma satu) lot yang<br/>diperdagangkan</td>
	<td valign='top'>:</td>
	<td valign='top'>Forex<br/>
	Stock Indeks<br/>
	Komoditi</td>
	</tr>
	<tr>
	<td>Biaya secara rinci yang dibebankan<br/>kepada Nasabah</td>
	<td valign='top'>:</td>
	<td valign='top'>Biaya Komisi per lot<br/>
	Biaya Swap<br/>
	Biaya Penyerahan fisik (apabila ada)</td>
	</tr>
	<tr>
	<td>Nomor atau alamat email jika terjadi<br/>keluhan</td>
	<td valign='top'>:</td>
	<td valign='top'>021-2933 9318 atau<br/>settlement1.harvest@yahoo.com</td>
	</tr>
	<tr>
	<td>Sarana penyelesaian perselisihan yang<br/>dipergunakan apabila terjadi perselisihan</td>
	<td valign='top'>:</td>
	<td valign='top'>Badan Arbitrase Perdagangan Berjangka Komoditi Pengadilan Negeri Setempat</td>
	</tr>
	<tr>
	<td valign='top'>Nama-Nama Wakil Pialang Berjangka<br/>yang Bekerja di Perusahaan Pialang Berjangka</td>
	<td valign='top'>:</td>
	<td valign='top'>Hamrija<br/>
	Francois Haberth Hallatu<br/> 
	Fardian<br/>
	Erwin Gunawan<br/>
	Sulianto<br/>
	Mohammad Alamsyah Abdi Negara<br/>
	Handoko<br/>
	Mariano A Zakarias Soe<br/>
	Dessi Zulkarnain<br/>
	Nursalahuddin<br/>
	Debby Swandayani<br/>
	Sandy Arja<br/>
	Sri Suparti</td>
	</tr>
	<tr>
	<td>Nama-Nama Wakil Pialang Berjangka yang secara khusus ditunjuk oleh Pialang Berjangka untuk melakukan verifikasi dalam rangka penerimaan<br/>Nasabah elektronik on-line</td>
	<td valign='top'>:</td>
	<td>Erwin Gunawan<br/>
	Sulianto<br/>
	Mohammad Alamsyah Abdi Negara<br/>
	Handoko</td>
	</tr>
	<tr>
	<td>Nomor Rekening Terpisah (Segregated Account) Perusahaan Pialang Berjangka</td>
	<td valign='top'>:</td>
	<td>Bank Central Asia IDR cabang Sudirman<br/>
	No Acc : 035.313.6019</td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	
	<td>Bank Central Asia USD cabang Sudirman<br/>
	No Acc : 035.313.4610</td>
	</tr>
	</table>
	<br/>
	<br><h3 align='center'>PERNYATAAN TELAH MEMBACA PROFIL PERUSAHAAN PIALANG BERJANGKA</h3>
	<table align='center' width='70%' border='0'>
	<tr>
	<td colspan='5'>Dengan mengisi kolom 'YA' di bawah ini, saya menyatakan bahwa saya telah membaca dan menerima informasi PROFIL PERUSAHAAN PIALANG BERJANGKA, mengerti dan memahami isinya. </td>
	</tr>
	<tr>
	<td>Pernyataan menerima / tidak</td>
	<td width='3%'>:</td>
	<td width='66%'>$menerima
	  </td>
	</tr>
	<tr>
	<td>Menyatakan pada Tanggal</td>
	<td>:</td>
	<td>
	$tanggal</td>
	</tr>
	</table><br><br><br><br><br><hr><br><br><br><br><br>";
	
	//Page 3
	$email = $_POST['email'];
	$perintah3 = mysql_query("SELECT * FROM formulir3 where email = '$email'");
	$row3 = mysql_fetch_array($perintah3);
	$nama = $row3[0];
	$tempat = $row3[1];
	$tanggal = $row3[2];
	$bulan = $row3[3];
	$tahun = $row3[4];
	$tanggallahir = "$tanggal - $bulan - $tahun";
	$alamat = $row3[5];
	$kodepos = $row3[6];
	$noid = $row3[7];
	$nodemo = $row3[8];
	$menerima = $row3[9];
	$tanggalm = $row3[10];
	echo"
	<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas<br/> 
	Perdagangan Berjangka Komoditi<br/>
	Nomor: 107/BAPPEBTI/PER/11/2013
	</p><br/>
	<h3 align='center'>
	Formulir: 107.PBK.02.1<br/>
	PERNYATAAN TELAH MELAKUKAN SIMULASI PERDAGANGAN BERJANGKA KOMODITI
	</h3>
	<p align='center' width='70%'>&nbsp; Yang mengisi formulir di bawah ini:</p>
	<table align='center' width='70%' border='0'>
	<tr>
	<td>Nama Lengkap</td>
	<td>:</td>
	<td>
	$nama</td>
	</tr>
	<tr>
	<td>Tempat/ Tanggal Lahir</td>
	<td>:</td>
	<td>
	$tempat /
	$tanggallahir</td>
	</tr>
	<tr>
	<td>Alamat Rumah</td>
	<td>:</td>
	<td>$alamat</td>
	</tr>
	<tr>
	<td>Kode Pos</td>
	<td>:</td>
	<td>$kodepos</td>
	</tr>
	<tr>
	<td>No. Identitas KTP/SIM/Passpor</td>
	<td>:</td>
	<td>$noid</td>
	</tr>
	<tr>
	<td>No. Demo Acc</td>
	<td>:</td>
	<td>$nodemo</td>
	
	</tr>
	</table>
	<p align='center' width='70%'>Dengan mengisi kolom �YA� di bawah ini, saya menyatakan bahwa saya telah melakukan simulasi</br>bertransaksi di bidang Perdagangan Berjangka Komoditi pada PT. Esandar Arthamas Berjangka dan<br/>telah memahami tentang tata cara bertransaksi di bidang Perdagangan Berjangka Komoditi.</p>
	<table align='center' width='70%' border='0'>
	<tr>
	<td colspan='5'>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani<br/>dan rohani serta tanpa paksaan apapun dari pihak manapun</td>
	</tr>
	<tr>
	<td width='153'>Pernyataan menerima</td>
	<td width='7'>:</td>
	<td width='419'>
	$menerima</td>
	</tr>
	<tr>
	<td>Menyatakan pada Tanggal</td>
	<td>:</td>
	<td>$tanggalm
	</td>
	</tr>
	</table><br><br><br><br><br><hr><br><br><br><br><br>";
	
	//Page 4
	$email = $_POST['email'];
	$perintah4 = mysql_query("SELECT * FROM formulir4 where email = '$email'");
	$row4 = mysql_fetch_array($perintah4);
	$nama = $row4[0];
	$tempat = $row4[1];
	$tanggal = $row4[2];
	$bulan = $row4[3];
	$tahun = $row4[4];
	$tanggallahir = "$tanggal - $bulan - $tahun";
	$alamat = $row4[5];
	$kodepos = $row4[6];
	$noid = $row4[7];
	$nodemo = $row4[8];
	$namapialang = $row4[9];
	$menerima = $row4[10];
	$tanggalm = $row4[11];
	echo"
	<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas <br/>
	Perdagangan Berjangka Komoditi <br/>
	Nomor: 107/BAPPEBTI/PER/11/2013 
	</p><br/>
	<h3 align='center'>Formulir: 107.PBK.02.2<br/>
	SURAT PERNYATAAN TELAH BERPENGALAMAN MELAKSANAKAN TRANSAKSI PERDAGANGAN BERJANGKA KOMODITI
	</h3>
	<p>&nbsp; Yang mengisi formulir di bawah ini:</p>
	<table align='center' width='70%' border='0'>
	<tr>
	<td>Nama Lengkap</td>
	<td>:</td>
	<td>$nama</td>
	</tr>
	<tr>
	<td>Tempat/ Tanggal Lahir</td>
	<td>:</td>
	<td>
	$tempat /
	$tanggallahir</td>
	</tr>
	<tr>
	<td>Alamat Rumah</td>
	<td>:</td>
	<td>$alamat</td>
	</tr>
	<tr>
	<td>Kode Pos</td>
	<td>:</td>
	<td>$kodepos</td>
	</tr>
	<tr>
	<td>No. Identitas KTP/SIM/Passpor</td>
	<td>:</td>
	<td>$noid</td>
	</tr>
	<tr>
	<td>No. Demo Acc</td>
	<td>:</td>
	<td>
	$nodemo</td>
	</tr>
	</table>
	<p width='70%'>
	Dengan mengisi kolom �YA� di bawah ini, saya menyatakan bahwa saya telah memiliki pengalaman yang<br/>mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada<br/>Perusahaan Pialang Berjangka $namapialang , dan telah memahami<br/>tentang tata cara bertransaksi Perdagangan Berjangka. 
	</p>
	<table align='center' width='70%' border='0'>
	<tr>
	<td colspan='5'>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.</td>
	</tr>
	<tr>
	<td width='153'>Pernyataan menerima</td>
	<td width='7'>:</td>
	<td width='419'>$menerima
	</td>
	</tr>
	<tr>
	<td>Menyatakan pada Tanggal</td>
	<td>:</td>
	<td>$tanggalm</td>
	</tr>
	<tr>
	</table><br><br><br><br><br><hr><br><br><br><br><br>";
	
	//Page 5
	$email = $_POST['email'];
	$perintah5 = mysql_query("SELECT * FROM formulir5 where email = '$email'");
	$row5 = mysql_fetch_array($perintah5);
	$kodenasabah = $row5[0];
	$nama1 = $row5[1];
	$tempat5 = $row5[2];
	$tanggal5 = $row5[3];
	$bulan5 = $row5[4];
	$tahun5 = $row5[5];
	$tanggallahir5 = "$tanggal - $bulan - $tahun";
	$noid5 = $row5[6];
	$nonpwp5 = $row5[7];
	$jeniskelamin = $row5[8];
	$namaistrisuami = $row5[9];
	$namaibu = $row5[10];
	$status = $row5[11];
	$alamat1 = $row5[12];
	$kodepos1 = $row5[13];
	$notelp1 = $row5[14];
	$nofax1 = $row5[15];
	$notelphp = $row5[16];
	$statusrumah = $row5[17];
	$lainnyaSR = $row5[18];
	$tujuanrekening = $row5[19];
	$lainnyaTR = $row5[20];
	$pengalamaninvestasi = $row5[21];
	$bidanginv = $row5[22];
	$anggotakeluarga = $row5[23];
	$namaak = $row5[24];
	$pailitpengadilan = $row5[25];
	$nama2 = $row5[26];
	$alamat2 = $row5[27];
	$kodepos2 = $row5[28];
	$notelp2 = $row5[29];
	$hubungan = $row5[30];
	$pekerjaan2 = $row5[31];
	$lainnyaPKJ = $row5[32];
	$namaperusahaan = $row5[33];
	$bidangusaha = $row5[34];
	$jabatan = $row5[35];
	$lamabekerja = $row5[36];
	$kantorsebelum = $row5[37];
	$alamatkantor = $row5[38];
	$kodepos3 = $row5[39];
	$notelp3 = $row5[40];
	$nofax2 = $row5[41];
	$penghasilanpertahun = $row5[42];
	$lokasirumah = $row5[43];
	$nilaiNJOP = $row5[44];
	$depositbank = $row5[45];
	$jumlah = $row5[46];
	$lainnya = $row5[47];
	$namabank1 = $row5[48];
	$cabang1 = $row5[49];
	$noac1 = $row5[50];
	$notelp4 = $row5[51];
	$jenisrekening1 = $row5[52];
	$lainnyaJR1 = $row5[53];
	$namabank2 = $row5[54];
	$cabang2 = $row5[55];
	$noac2 = $row5[56];
	$notelp5 = $row5[57];
	$jenisrekening2 = $row5[58];
	$lainnyaJR2 = $row5[59];
	$rekeningtagihan = $row5[60];
	$rekeningtelp = $row5[61];
	$tambah1 = $row5[62];
	$tambah2 = $row5[63];
	$fototerkini = $row5[64];
	$fotoktp = $row5[65];
	$menerima = $row5[66];
	$tanggalm = $row5[67];
	$rekeningtagihan = $row5['Rekening_Tagihan'];
	$rekeningtelp = $row5['Rekening_Telp'];
	$tambah1 = $row5['Tambah_1'];
	$tambah2 = $row5['Tambah_2'];
	$fototerkini = $row5['Foto_Kini'];
	$fotoktp = $row5['Foto_KTP'];
	echo"
	<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas <br/>
	Perdagangan Berjangka Komoditi <br/>
	Nomor: 107/BAPPEBTI/PER/11/2013 
	</p><br/>
	<h3 align='center' style='font-size:18px;'>Formulir Nomor 107.PBK.03<br/>
	APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE
	</h3><br><hr><br><br>
	<table align='center' width='70%' border='0'>
	<tr>
	<td width='200'>Kode Nasabah</td>
	<td width='3'>:</td>
	<td width='413'>
	$kodenasabah
	</td>
	</tr>
	<tr>
	<td align='center' colspan='5'><h3>Data Pribadi</h3></td>
	</tr>
	<tr>
	<td>Nama Lengkap</td>
	<td>:</td>
	<td>$nama1</td>
	</tr>
	<tr>
	<td>Tempat/ Tanggal Lahir</td>
	<td>:</td>
	<td>
	$tempat5 /
	$tanggallahir5
	</td>
	</tr>
	<tr>
	<td>No. Identitas KTP/SIM/Passpor</td>
	<td>:</td>
	<td>$noid5</td>
	</tr>
	<tr>
	<td>No. NPWP</td>
	<td>:</td>
	<td>$nonpwp5</td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td>
	<td>:</td>
	<td>
	$jeniskelamin</td>
	</tr>
	<tr>
	<td>Nama Istri/Suami</td>
	<td>:</td>
	<td>$namaistrisuami</td>
	</tr>
	<tr>
	<td>Nama Ibu Kandung</td>
	<td>:</td>
	<td>$namaibu</td>
	</tr>
	<tr>
	<td>Status Perkawinan</td>
	<td>:</td>
	<td>$status
	</td>
	</tr>
	<tr>
	<td>Alamat Rumah </td>
	<td>:</td>
	<td>$alamat1</td>
	</tr>
	<tr>
	<td>Kode Pos</td>
	<td>:</td>
	<td>$kodepos1</td>
	</tr>
	<tr>
	<td>No. Telp Rumah</td>
	<td>:</td>
	<td>$notelp1</td>
	</tr>
	<tr>
	<td>No. Faksimili Rumah</td>
	<td>:</td>
	<td>$nofax1</td>
	</tr>
	<tr>
	<td>No. Telp Handphone</td>
	<td>:</td>
	<td>$notelphp</td>
	</tr>
	<tr>
	<td>Status Kepemilikan Rumah</td>
	<td>:</td>
	<td>$statusrumah $lainnyaSR</td>
	</tr>
	<tr>
	<td>Tujuan Pembukaan Rekening</td>
	<td>:</td>
	<td>$tujuanrekening $lainnyaTR
	</td>
	</tr>
	<tr>
	<td>Pengalaman Investasi</td>
	<td>:</td>
	<td>$pengalamaninvestasi &nbsp;
	$bidanginv</td>
	</tr>
	<tr>
	<td>Apakah Anda memiliki anggota keluarga yang bekerja di BAPPEBTI/Bursa Berjangka/ Kliring Berjangka?</td>
	<td valign='top'>:</td>
	<td valign='top'>$anggotakeluarga &nbsp; $namaak
	</td>
	</tr>
	<tr>
	<td height='53'>Apakah Anda telah dinyatakan pailit oleh Pengadilan ? </td>
	<td valign='top'>:</td>
	<td valign='top'>$pailitpengadilan
	</td>
	</tr>
	</table>
	<br/><table align='center' width='70%' border='0'>
	<tr>
	<td colspan='5' align='center' style='font-size:18px'><b>PIHAK YANG DIHUBUNGI DALAM KEADAAN DARURAT</b><hr></td>
	</tr>
	<tr>
	<td colspan='5'>Dalam keadaan darurat, pihak yang dapat dihubungi</td>
	</tr>
	<tr>
	<td width='195'>Nama</td>
	<td width='3'>:</td>
	<td width='578'>$nama2</td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td>:</td>
	<td>$alamat2</td>
	</tr>
	<tr>
	<td>Kode Pos</td>
	<td>:</td>
	<td>$kodepos2</td>
	</tr>
	<tr>
	<td>No. Telp</td>
	<td>:</td>
	<td>$notelp2</td>
	</tr>
	<tr>
	<td>Hubungan dengan anda</td>
	<td>:</td>
	<td>$hubungan</td>
	</tr>
	</table>
	<br/><table align='center' width='70%' border='0'>
	<tr>
	<td align='center' colspan='5'  style='font-size:18px' ><b>PEKERJAAN</b><hr></td>
	</tr>
	<tr>
	<td>Pekerjaan </td>
	<td>:</td>
	<td>$pekerjaan2 $lainnyaPKJ
	</td>
	</tr>
	<tr>
	<td>Nama Perusahaan</td>
	<td>:</td>
	<td>$namaperusahaan</td>
	</tr>
	<tr>
	<td>Bidang Usaha</td>
	<td>:</td>
	<td>$bidangusaha</td>
	</tr>
	<tr>
	<td>Jabatan</td>
	<td>:</td>
	<td>$jabatan</td>
	</tr>
	<tr>
	<td>Lama Bekerja</td>
	<td>:</td>
	<td>$lamabekerja &nbsp; Tahun</td>
	</tr>
	<tr>
	<td>Kantor Sebelumnya</td>
	<td>:</td>
	<td>$kantorsebelum &nbsp;Tahun</td>
	</tr>
	<tr>
	<td>Alamat Kantor</td>
	<td>:</td>
	<td>$alamatkantor</td>
	</tr>
	<tr>
	<td>Kode Pos</td>
	<td>:</td>
	<td>$kodepos3</td>
	</tr>
	<tr>
	<td>No. Telp Kantor</td>
	<td>:</td>
	<td>$notelp3</td>
	</tr>
	<tr>
	<td>No. Faksimili</td>
	<td>:</td>
	<td>$nofax2</td>
	</tr>
	</table>
	<br/><table align='center' width='70%' border='0'>
	<tr>
	<td colspan='5' align='center' style='font-size:18px'><b>DAFTAR KEKAYAAN</b><hr></td>
	</tr>
	<td valign='top'>Penghasilan Per tahun</td>
	<td valign='top'>:</td>
	<td>
	$penghasilanpertahun</td>
	<tr>
	<td>Daftar Kekayaan</td>
	</tr>
	<tr>
	<td>Rumah Lokasi</td>
	<td>:</td>
	<td>$lokasirumah</td>
	</tr>
	<tr>
	<td>Nilai NJOP</td>
	<td>:</td>
	<td>$nilaiNJOP</td>
	</tr>
	<tr>
	<td>Deposit Bank</td>
	<td>:</td>
	<td>$depositbank</td>
	</tr>
	<tr>
	<td>Jumlah</td>
	<td>:</td>
	<td>$jumlah</td>
	</tr>
	<tr>
	<td>Lainnya</td>
	<td>:</td>
	<td>$lainnya</td>
	</tr>
	</table>
	<br/><table align='center' width='70%' border='0'>
	<tr>
	<td align='center' colspan='5' style='font-size:18px'><b>REKENING BANK NASABAH UNTUK PENYETORAN DAN PENARIKAN MARGIN</b><hr></td>
	</tr>
	<tr>
	<td colspan='5'>Rekening Bank Nasabah Untuk Penyetoran dan Penarikan Margin (hanya rekening dibawah ini yang dapat Saudara pergunakan untuk lalulintas margin)
	</td>
	</tr>
	<tr>
	<td>Nama Bank</td>
	<td>:</td>
	<td>$namabank1</td>
	</tr>
	<tr>
	<td>Cabang</td>
	<td>:</td>
	<td>$cabang1</td>
	</tr>
	<tr>
	<td>Nomor A/C</td>
	<td>:</td>
	<td>$noac1</td>
	</tr>
	<tr>
	<td>No. Telp</td>
	<td>:</td>
	<td>$notelp4</td>
	</tr>
	<tr>
	<td>Jenis Rekening</td>
	<td>:</td>
	<td>$jenisrekening1 $lainnyaJR1
	</td>
	</tr>
	<tr>
	<td>Nama Bank</td>
	<td>:</td>
	<td>$namabank2</td>
	</tr>
	<tr>
	<td>Cabang</td>
	<td>:</td>
	<td>$cabang2</td>
	</tr>
	<tr>
	<td>Nomor A/C</td>
	<td>:</td>
	<td>$noac2</td>
	</tr>
	<tr>
	<td>No. Telp</td>
	<td>:</td>
	<td>$notelp5</td>
	</tr>
	<tr>
	<td>Jenis Rekening</td>
	<td>:</td>
	<td>$jenisrekening2 $lainnyaJR2
	</td>
	</tr>
	</table>
	<br/><table align='center' width='70%' border='0'>
	<tr>
	<td height='39' colspan='5' align='center'><h3>DOKUMEN YANG DILAMPIRKAN</h3><hr></td>
	</tr>
	<tr>
	<td width='304'>Rekening Koran Bank / Tagihan Kartu Kredit</td>
	<td width='3'>:</td>
	<td width='221'>
	<img src='http://localhost/hif_co_id/hif.co.id/form/$rekeningtagihan' height='400' width='400'>
	</td>
	</tr>
	<tr>
	<td>Rekening Listrik / Telepon</td>
	<td>:</td>
	<td>
	<img src='http://localhost/hif_co_id/hif.co.id/form/$rekeningtelp' height='400' width='400'>
	</td>
	</tr>
	<tr>
	<td>Tambahan Dokumen lain 1</td>
	<td>:</td>
	<td>
	<img src='http://localhost/hif_co_id/hif.co.id/form/$tambah1' height='400' width='400'>
	</td>
	</tr>
	<tr>
	<td>Tambahan Dokumen lain 2</td>
	<td>:</td>
	<td>
	<img src='http://localhost/hif_co_id/hif.co.id/form/$tambah2' height='400' width='400'>
	</td>
	</tr>
	<tr>
	<td>Foto terkini</td>
	<td>:</td>
	<td>
	<img src='http://localhost/hif_co_id/hif.co.id/form/$fototerkini' height='400' width='400'>
	</td>
	</tr>
	<tr>
	<td>KTP / SIM / Paspor</td>
	<td>:</td>
	<td>
	<img src='http://localhost/hif_co_id/hif.co.id/form/$fotoktp' height='400' width='400'>
	</td>
	</tr>
	</table>
	<br/><table align='center' width='70%' border='0'>
	<tr>
	<td align='center' colspan='5'><h3>PERNYATAAN KEBENARAN DAN TANGGUNG JAWAB</h3><hr></td>
	</tr>
	<tr>
	<td height='104' colspan='5' align='justify'>Dengan mengisi kolom �YA� di bawah ini, saya menyatakan bahwa semua informasi dan semua dokumen yang saya lampirkan dalam APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE adalah benar dan tepat, Saya akan bertanggung jawab penuh apabila dikemudian hari terjadi sesuatu hal sehubungan dengan ketidakbenaran data yang saya berikan.
	</td>
	</tr>
	<tr>
	<td width='302'>Pernyataan Kebenaran dan Tanggung Jawab</td>
	<td width='3' valign='top'>:</td>
	<td width='339' valign='top'>$menerima
	</td>
	</tr>
	<tr>
	<td>Menyatakan pada Tanggal</td>
	<td>:</td>
	<td>$tanggalm</td>
	</tr>
	</table><br><br><br><br><br><hr><br><br><br><br><br>";
	
	//Page 601 & 602
	$page6=$_POST['page1'];
	$_SESSION['page1'] = $page6;
	//page 601
	if($_SESSION['page1'] == "IDR_50.000.000_Kontrak_Berjangka_Emas GOL,_GOL100,_GOL250" || $_SESSION['page1'] == "IDR_50.000.000_Kontrak_Berjangka_Kakao")
		{
	$email = $_POST['email'];
	$perintah6_1 = mysql_query("SELECT * FROM formulir6_1 where email = '$email'");
	$row6_1 = mysql_fetch_array($perintah6_1);
	$s1_1 = $row6_1[0];
	$s1_2 = $row6_1[1];
	$s1_3 = $row6_1[2];
	$s1_4 = $row6_1[3];
	$s1_5 = $row6_1[4];
	$s1_6 = $row6_1[5];
	$s1_7 = $row6_1[6];
	$s1_8 = $row6_1[7];
	$s1_9 = $row6_1[8];
	$s1_10 = $row6_1[9];
	$s1_11 = $row6_1[10];
	$s1_12 = $row6_1[11];
	$s1_13 = $row6_1[12];
	$s1_14 = $row6_1[13];
	$s1_15 = $row6_1[14];
	$s1_16 = $row6_1[15];
	$menerima = $row6_1[16];
	$tanggal = $row6_1[17];
	echo"<p align='right'>Lampiran  2 Peraturan Kepala Badan Pengawas<br />
	  Perdagangan  Berjangka Komoditi<br />
	  Nomor:  107/BAPPEBTI/PER/11/2013</p>
	<h3 align='center'><b>Formulir  Nomor 107.PBK.04.1</b></h3>
	<h3 align='center'><b><br />
	  DOKUMEN PEMBERITAHUAN ADANYA  RISIKO YANG HARUS DISAMPAIKAN<br />
	  OLEH PIALANG BERJANGKA UNTUK TRANSAKSI KONTRAK  BERJANGKA</b></h3>
	  
	<table width='70%' border='1' align='center' bordercolor='#000000'>
	<tr>
		<td width='75%' align='justify'>Dokumen Pemberitahuan Adanya Risiko ini disampaikan  kepada Anda sesuai dengan Pasal 50 ayat (2) Undang-Undang Nomor 32 Tahun 1997  tentang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan  Undang-Undang Nomor 10 Tahun 2011 tentang Perubahan Atas Undang-Undang Nomor 32  Tahun 1997 Tentang Perdagangan Berjangka Komoditi.</td>
		<td width='25%' align='center'>
			$s1_1
		</td>
	  </tr>
	  <tr>
		<td align='justify'>Maksud dokumen ini adalah memberitahukan bahwa  kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Berjangka bisa  mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati  dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan Anda  mencukupi.</td>
		<td align='center'>
		  $s1_2
		</td>
	  </tr>
	  </table><br><br><br>
	<table width='70%' border='1' align='center' bordercolor='#000000'>
	  <tr>
		<td width='6%' align='center' valign='top'>1</td>
		<td width='68%' align='justify'>Perdagangan Kontrak Berjangka belum tentu layak bagi  semua investor. Anda dapat menderita kerugian dalam jumlah besar dan dalam  jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah  uang yang pertama kali Anda setor (Margin awal) ke Pialang Berjangka Anda. Anda  mungkin menderita kerugian seluruh Margin dan Margin tambahan yang ditempatkan  pada Pialang Berjangka untuk mempertahankan posisi Kontrak Berjangka Anda. Hal  ini disebabkan Perdagangan Berjangka sangat dipengaruhi oleh mekanisme leverage,  dimana dengan jumlah investasi dalam bentuk yang relatif kecil dapat digunakan  untuk membuka posisi dengan aset yang bernilai jauh lebih tinggi. Apabila Anda  tidak siap dengan risiko seperti ini, sebaiknya Anda tidak melakukan perdagangan  Kontrak Berjangka.</td>
		<td width='26%' align='center'>
		   $s1_3
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>2</td>
		<td align='justify'>Perdagangan Kontrak Berjangka mempunyai risiko dan  mempunyai kemungkinan kerugian yang tidak terbatas yang jauh lebih besar dari  jumlah uang yang disetor (Margin) ke Pialang Berjangka. Kontrak Berjangka sama dengan  produk keuangan lainnya yang mempunyai risiko tinggi, Anda sebaiknya tidak  menaruh risiko terhadap dana yang Anda tidak siap untuk menderita rugi, seperti  tabungan pensiun, dana kesehatan atau dana untuk keadaan darurat, dana yang  disediakan untuk pendidikan atau kepemilikan rumah, dana yang diperoleh dari  pinjaman pendidikan atau gadai, atau dana yang digunakan untuk memenuhi kebutuhan  sehari-hari.</td>
		<td align='center'>
		  $s1_4
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>3</td>
		<td align='justify'>Berhati-hatilah terhadap pernyataan bahwa Anda pasti  mendapatkan keuntungan besar dari perdagangan Kontrak Berjangka. Meskipun  perdagangan Kontrak Berjangka dapat memberikan keuntungan yang besar dan cepat,  namun hal tersebut tidak pasti, bahkan dapat menimbulkan kerugian yang besar  dan cepat juga. Seperti produk keuangan lainnya, tidak ada yang dinamakan  &ldquo;pasti untung&rdquo;.</td>
		<td align='center'>
		  $s1_5
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>4</td>
		<td align='justify'>Disebabkan adanya mekanisme leverage dan sifat dari  transaksi Kontrak Berjangka, Anda dapat merasakan dampak bahwa Anda menderita  kerugian dalam waktu cepat. Keuntungan maupun kerugian dalam transaksi Kontrak Berjangka  akan langsung dikredit atau didebet ke rekening Anda, paling lambat secara  harian. Apabila pergerakan di pasar terhadap Kontrak Berjangka menurunkan nilai  posisi Anda dalam Kontrak Berjangka, Anda diwajibkan untuk menambah dana untuk  pemenuhan kewajiban Margin ke Pialang Berjangka. Apabila rekening Anda berada  dibawah minimum Margin yang telah ditetapkan Lembaga Kliring Berjangka atau  Pialang Berjangka, maka posisi Anda dapat dilikuidasi pada saat rugi, dan Anda  wajib menyelesaikan defisit (jika ada) dalam rekening Anda.</td>
		<td align='center'>
		  $s1_6
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>5</td>
		<td align='justify'>Pada saat pasar dalam keadaan tertentu, Anda mungkin  akan sulit atau tidak mungkin melikuidasi posisi. Pada umumnya Anda harus  melakukan transaksi offset jika ingin melikuidasi posisi dalam Kontrak  Berjangka. Apabila Anda tidak dapat melikuidasi posisi Kontrak Berjangka, Anda  tidak dapat merealisasikan keuntungan pada nilai posisi tersebut atau mencegah  kerugian yang lebih tinggi. Kemungkinan tidak dapat melikuidasi dapat terjadi,  antara lain: jika perdagangan berhenti dikarenakan aktivitas perdagangan yang  tidak lazim pada Kontrak Berjangka atau subjek Kontrak Berjangka, terjadi  kerusakan sistem pada Bursa Berjangka atau Pialang Berjangka, atau posisi Anda  berada dalam pasar yang tidak likuid. Bahkan apabila Anda dapat melikuidasi  posisi tersebut, Anda mungkin terpaksa melakukannya pada harga yang menimbulkan  kerugian besar.</td>
		<td align='center'>
		  $s1_7
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>6</td>
		<td align='justify'>Pada saat pasar dalam keadaan tertentu, Anda mungkin  akan sulit atau tidak mungkin mengelola risiko atas posisi terbuka Kontrak  Berjangka dengan cara membuka posisi dengan nilai yang sama namun dengan posisi  yang berlawanan dalam kontrak bulan yang berbeda, dalam pasar yang berbeda atau  dalam &ldquo;subjek Kontrak Berjangka&rdquo; yang berbeda. Kemungkinan untuk tidak dapat  mengambil posisi dalam rangka membatasi risiko yang timbul, contohnya: jika  perdagangan dihentikan pada pasar yang berbeda disebabkan aktivitas perdagangan  yang tidak lazim pada Kontrak Berjangka atau &ldquo;subjek Kontrak Berjangka&rdquo;.</td>
		<td align='center'>
		  $s1_8
	</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>7</td>
		<td align='justify'>Anda dapat diwajibkan untuk menyelesaikan Kontrak  Berjangka dengan penyerahan fisik dari &ldquo;subjek Kontrak Berjangka&rdquo;. Jika Anda  mempertahankan posisi penyelesaian fisik dalam Kontrak Berjangka sampai hari  terakhir perdagangan berdasarkan tanggal jatuh tempo Kontrak Berjangka, Anda  akan diwajibkan menyerahkan atau menerima penyerahan &ldquo;subjek Kontrak Berjangka&rdquo;  yang dapat mengakibatkan adanya penambahan biaya. Pengertian penyelesaian dapat  berbeda untuk suatu Kontrak Berjangka dengan Kontrak Berjangka lainnya atau  suatu Bursa Berjangka dengan Bursa Berjangka lainnya. Anda harus melihat secara  teliti mengenai penyelesaian dan kondisi penyerahan sebelum membeli atau menjual  Kontrak Berjangka.</td>
		<td align='center'>
		  $s1_9
	</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>8</td>
		<td align='justify'>Anda dapat menderita kerugian yang disebabkan  kegagalan sistem informasi. Sebagaimana yang terjadi pada setiap transaksi  keuangan, Anda dapat menderita kerugian jika amanat untuk melaksanakan  transaksi Kontrak Berjangka tidak dapat dilakukan karena kegagalan sistem  informasi di Bursa Berjangka, penyelenggara maupun sistem informasi di Pialang  Berjangka yang mengelola posisi Anda. Kerugian Anda akan semakin besar jika  Pialang Berjangka yang mengelola posisi Anda tidak memiliki sistem informasi  cadangan atau prosedur yang layak.</td>
		<td align='center'>
		  $s1_10
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>9</td>
		<td align='justify'>Semua Kontrak Berjangka mempunyai risiko, dan tidak  ada strategi berdagang yang dapat menjamin untuk menghilangkan risiko tersebut.  Strategi dengan menggunakan kombinasi posisi seperti spread, dapat sama  berisiko seperti posisi long atau short. Melakukan Perdagangan Berjangka  memerlukan pengetahuan mengenai Kontrak Berjangka dan pasar berjangka.</td>
		<td align='center'>
		  $s1_11
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>10</td>
		<td align='justify'>Strategi perdagangan harian dalam Kontrak Berjangka  dan produk lainnya memiliki risiko khusus. Seperti pada produk keuangan  lainnya, pihak yang ingin membeli atau menjual Kontrak Berjangka yang sama  dalam satu hari untuk mendapat keuntungan dari perubahan harga pada hari  tersebut (&ldquo;day traders&rdquo;) akan memiliki beberapa risiko tertentu antara lain  jumlah komisi yang besar, risiko terkena efek pengungkit (&ldquo;exposure to  leverage&rdquo;), dan persaingan dengan pedagang profesional. Anda harus mengerti  risiko tersebut dan memiliki pengalaman yang memadai sebelum melakukan  perdagangan harian (&ldquo;day trading&rdquo;).</td>
		<td align='center'>
		  $s1_12
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>11</td>
		<td align='justify'>Menetapkan amanat bersyarat, seperti Kontrak Berjangka  dilikuidasi pada keadaan tertentu untuk membatasi rugi (stop loss), mungkin  tidak akan dapat membatasi kerugian Anda sampai jumlah tertentu saja. Amanat  bersyarat tersebut mungkin tidak dapat dilaksanakan karena terjadi kondisi pasar  yang tidak memungkinkan melikuidasi Kontrak Berjangka.</td>
		<td align='center'>
		  $s1_13
	   </td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>12</td>
		<td align='justify'>Anda harus membaca dengan seksama dan memahami  Perjanjian Pemberian Amanat dengan Pialang Berjangka Anda sebelum melakukan  transaksi Kontrak Berjangka.</td>
		<td align='center'>
		  $s1_14
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>13</td>
		<td align='justify'>Pernyataan singkat ini tidak dapat memuat secara rinci  seluruh risiko atau aspek penting lainnya tentang Perdagangan Berjangka. Oleh  karena itu Anda harus mempelajari kegiatan Perdagangan Berjangka secara cermat  sebelum memutuskan melakukan transaksi.</td>
		<td align='center'>
		  $s1_15
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>14</td>
		<td align='justify'>Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure)  ini dibuat dalam Bahasa Indonesia.</td>
		<td align='center'>
		  $s1_16
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	  </table><br><br>
	  <table>
	  <tr>
		<td colspan='3'><h3 align='center'><b>PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO</b></h3></td>
	  </tr>
	  <tr>
		<td colspan='3'>Dengan mengisi kolom &ldquo;YA&rdquo; di bawah, saya menyatakan  bahwa saya telah menerima &ldquo;DOKUMEN PEMBERITAHUAN ADANYA RISIKO&rdquo; mengerti dan  menyetujui isinya.</td>
	  </tr>
	</table>
	<table width='70%' border='1' align='center' bordercolor='#000000'>
	  <tr>
		<td width='28%' height='28' valign='top'>Pernyataan menerima / tidak</td>
		<td width='1%' valign='top'>:</td>
		<td width='70%' valign='top'>
		$menerima
	</td>
	  </tr>
	 <tr>
	<td>Menyatakan pada Tanggal</td>
	<td>:</td>
	<td>&nbsp;
	$tanggal</td>
	</tr>
	</table><br><br><br><br><br><hr><br><br><br><br><br>";
	}
	
	//page 602
		else if($_SESSION['page1'] == "IDR_5.000.000_Kontrak_Derivative_Forex_dan_Loco_London" || $_SESSION['page1'] == "IDR_5.000.000_Kontrak_Derivative_Stock_Indeks" || $_SESSION['page1'] == "USD_500_Kontrak_Deritvative_Forex_dan_Loco_London" || $_SESSION['page1'] == "USD_500_Kontrak_Derivative_Stock_Indeks"){
	$email = $_POST['email'];
	$perintah6_2 = mysql_query("SELECT * FROM formulir6_2 where email = '$email'");
	$row6_2 = mysql_fetch_array($perintah6_2);
	$s1_1 = $row6_2[0];
	$s1_2 = $row6_2[1];
	$s1_3 = $row6_2[2];
	$s1_4 = $row6_2[3];
	$s1_5 = $row6_2[4];
	$s1_6 = $row6_2[5];
	$s1_7 = $row6_2[6];
	$s1_8 = $row6_2[7];
	$s1_9 = $row6_2[8];
	$s1_10 = $row6_2[9];
	$s1_11 = $row6_2[10];
	$s1_12 = $row6_2[11];
	$s1_13 = $row6_2[12];
	$s1_14 = $row6_2[13];
	$s1_15 = $row6_2[14];
	$menerima = $row6_2[15];
	$tanggal = $row6_2[16];
	echo"
	<p align='right'>
	Lampiran 2 Peraturan Kepala Badan Pengawas<br/>
	Perdagangan Berjangka Komoditi<br/>
	Nomor: 107/BAPPEBTI/PER/11/2013
	</p>
	<h3 align='center'>Formulir Nomor 107.PBK.04.2</h3>
	<p align='center'>DOKUMEN PEMBERITAHUAN ADANYA RISIKO YANG HARUS DISAMPAIKAN OLEH PIALANG<br/>
	BERJANGKA UNTUK TRANSAKSI KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN
	ALTERNATIF
	</p>
	<table align='center' width='85%'  border='1'>
	<tr>
	<td width='75%' align='justify'>Dokumen Pemberitahuan Adanya Risiko ini disampaikan kepada Anda sesuai dengan Pasal 50 ayat (2) Undang-Undang Nomor 32 Tahun 1997 tentang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan Undang-undang Nomor 10 Tahun 2011 tentang Perubahan Atas Undang-Undang Nomor 32 Tahun 1997 Tentang Perdagangan Berjangka Komoditi.</td>
	<td align='center' width='25%'>
	$s1_1</td>
	</tr>
	<tr>
	<td>Maksud dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif bisa mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan Anda mencukupi.
	</td>
	<td align='center'>
	$s1_2</td>
	</tr>
	</table>
	<br/>
	<table align='center' width='85%' border='1'>
	<tr>
	<td width='4%' valign='top'>1</td>
	<td width='71%' align='justify'>Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif belum tentu layak bagi semua investor. Anda dapat menderita kerugian dalam jumlah besar dan dalam jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah uang yang pertama kali Anda setor (Margin Awal) ke Pialang Berjangka Anda. Anda mungkin menderita kerugian seluruh Margin dan Margin tambahan yang ditempatkan pada Pialang Berjangka untuk mempertahankan posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif Anda. Hal ini disebabkan Perdagangan Berjangka sangat dipengaruhi oleh mekanisme leverage, dimana dengan jumlah investasi dalam bentuk yang relatif kecil dapat digunakan untuk membuka posisi dengan aset yang bernilai jauh lebih tinggi. Apabila Anda tidak siap dengan risiko seperti ini, sebaiknya Anda tidak melakukan perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif.</td>
	<td width='25%' align='center'>
	$s1_3
	</td>
	</tr>
	<tr>
	<td valign='top'>2</td>
	<td align='justify'>
	Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif mempunyai risiko dan mempunyai kemungkinan kerugian yang tidak terbatas yang jauh lebih besar dari jumlah uang yang disetor (Margin) ke Pialang Berjangka. Kontrak Derivatif dalam Sistem Perdagangan Alternatif sama dengan produk keuangan lainnya yang mempunyai risiko tinggi, Anda sebaiknya tidak menaruh risiko terhadap dana yang Anda tidak siap untuk menderita rugi, seperti tabungan pensiun, dana kesehatan atau dana untuk keadaan darurat, dana yang disediakan untuk pendidikan atau kepemilikan rumah, dana yang diperoleh dari pinjaman pendidikan atau gadai, atau dana yang digunakan untuk memenuhi kebutuhan sehari-hari.
	</td>
	<td align='center'>
	$s1_4
	</td>
	</tr>
	<tr>
	<td valign='top'>3</td>
	<td align='justify'>Berhati-hatilah terhadap pernyataan bahwa Anda pasti mendapatkan keuntungan besar dari perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif. Meskipun perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif dapat memberikan keuntungan yang besar dan cepat, namun hal tersebut tidak pasti, bahkan dapat menimbulkan kerugian yang besar dan cepat juga. Seperti produk keuangan lainnya, tidak ada yang dinamakan �pasti untung�.
	</td>
	<td align='center'>
	$s1_5
	</td>
	</tr>
	<tr>
	<td valign='top'>4</td>
	<td align='justify'>Disebabkan adanya mekanisme leverage dan sifat dari transaksi Kontra Derivatif dalam Sistem Perdagangan Alternatif, Anda dapat merasakan dampak bahwa Anda menderita kerugian dalam waktu cepat. Keuntungan maupun kerugian dalam transaksi akan langsung dikredit atau didebet ke rekening Anda, paling lambat secara harian. Apabila pergerakan di pasar terhadap Kontrak Derivatif dalam Sistem Perdagangan Alternatif menurunkan nilai posisi Anda dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif, dengan kata lain berlawanan dengan posisi yang Anda ambil, Anda diwajibkan untuk menambah dana untuk pemenuhan kewajiban Margin ke perusahaan Pialang Berjangka. Apabila rekening Anda berada dibawah minimum Margin yang telah ditetapkan Lembaga Kliring Berjangka atau Pialang Berjangka, maka posisi Anda dapat dilikuidasi pada saat rugi, dan Anda wajib menyelesaikan defisit (jika ada) dalam rekening Anda.
	</td>
	<td align='center'>
	$s1_6
	</td>
	</tr>
	<tr>
	<td valign='top'>5</td>
	<td align='justify'>Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tidak mungkin melikuidasi posisi. Pada umumnya Anda harus melakukan transaksi mengambil posisi yang berlawanan dengan maksud melikuidasi posisi (offset) jika ingin melikuidasi posisi dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif. Apabila Anda tidak dapat melikuidasi posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif, Anda tidak dapat merealisasikan keuntungan pada nilai posisi tersebut atau mencegah kerugian yang lebih tinggi. Kemungkinan tidak dapat melikuidasi dapat terjadi, antara lain: jika perdagangan berhenti dikarenakan aktivitas perdagangan yang tidak lazim pada Kontrak Derivatif atau subjek Kontrak Derivatif, atau terjadi kerusakan sistem pada Pialang Berjangka Peserta Sistem Perdagangan Alternatif atau Pedagang Berjangka Penyelenggara Sistem Perdagangan Alternatif. Bahkan apabila Anda dapat melikuidasi posisi tersebut, Anda mungkin terpaksa melakukannya pada harga yang menimbulkan kerugian besar.
	</td>
	<td align='center'>
	$s1_7</td>
	</tr>
	<tr>
	<td valign='top'>6</td>
	<td align='justify'>Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tida mungkin mengelola risiko atas posisi terbuka Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan cara membuka posisi dengan nilai yang sama namun dengan posisi yang berlawanan dalam kontrak bulan yang berbeda, dalam pasar yang berbeda atau dalam �subjek Kontrak Derivatif dalam Sistem Perdagangan Alternatif� yang berbeda. Kemungkinan untuk tidak dapat mengambil posisi dalam rangka membatasi risiko yang timbul, contohnya; jika perdagangan dihentikan pada pasar yang berbeda disebabkan aktivitas perdagangan yang tidak lazim pada Kontrak Derivatif dalam Sistem Perdagangan Alternatif atau �Kontrak Derivatif dalam Sistem Perdagangan Alternatif�.
	</td>
	<td align='center'>
	$s1_8
	</td>
	</tr>
	<tr>
	<td valign='top'>7</td>
	<td align='justify'>Anda dapat menderita kerugian yang disebabkan kegagalan sistem informasi. Sebagaimana yang terjadi pada setiap transaksi keuangan, Anda dapat menderita kerugian jika amanat untuk melaksanakan transaksi Kontrak Derivatif dalam Sistem Perdagangan Alternatif tidak dapat dilakukan karena kegagalan sistem informasi di Bursa Berjangka, Pedagang Penyelenggara Sistem Perdagangan Alternatif , maupun sistem di Pialang Berjangka Peserta Sistem Perdagangan Alternatif yang mengelola posisi Anda. Kerugian Anda akan semakin besar jika Pialang Berjangka yang mengelola posisi Anda tidak memiliki sistem informasi cadangan atau prosedur yang layak.
	</td>
	<td align='center'>
	$s1_9
	</td>
	</tr>
	<tr>
	<td valign='top'>8</td>
	<td align='justify'>Semua Kontrak Derivatif dalam Sistem Perdagangan Alternatif mempunyai risiko, dan tidak ada strategi berdagang yang dapat menjamin untuk menghilangkan risiko tersebut. Strategi dengan menggunakan kombinasi posisi seperti spread, dapat sama berisiko seperti posisi long atau short.Melakukan Perdagangan Berjangka memerlukan pengetahuan mengenai Kontrak Derivatif dalam Sistem Perdagangan Alternatif dan pasar berjangka.
	</td>
	<td align='center'>
	$s1_10
	</td>
	</tr>
	<tr>
	<td valign='top'>9</td>
	<td align='justify'>Strategi perdagangan harian dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif dan produk lainnya memiliki risiko khusus. Seperti pada produk keuangan lainnya, pihak yang ingin membeli atau menjual Kontrak Derivatif dalam Sistem Perdagangan Alternatif yang sama dalam satu hari untuk mendapat keuntungan dari perubahan harga pada hari tersebut (�day traders�) akan memiliki beberapa risiko tertentu antara lain jumlah komisi yang besar, risiko terkena efek pengungkit (�exposure to leverage�), dan persaingan dengan pedagang profesional. Anda harus mengerti risiko tersebut dan memiliki pengalaman yang memadai sebelum melakukan perdagangan harian (�day trading�).
	</td>
	<td align='center'>
	$s1_11
	</td>
	</tr>
	<tr>
	<td valign='top'>10</td>
	<td align='justify'>Menetapkan amanat bersyarat, Kontrak Derivatif dalam Sistem Perdagangan Alternatif dilikuidasi pada keadaan tertentu untuk membatasi rugi (stop loss), mungkin tidak akan dapat membatasi kerugian Anda sampai jumlah tertentu saja. Amanat bersyarat tersebut mungkin tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Derivatif dalam Sistem Perdagangan Alternatif.
	</td>
	<td align='center'>
	$s1_12
	</td>
	</tr>
	<tr>
	<td valign='top'>11</td>
	<td align='justify'>Anda harus membaca dengan seksama dan memahami Perjanjian Pemberian Amanat Nasabah dengan Pialang Berjangka Anda sebelum melakukan transaksi Kontrak Derivatif dalam Sistem Perdagangan Alternatif.
	</td>
	<td align='center'>
	$s1_13
	</td>
	</tr>
	<tr>
	<td valign='top'>12</td>
	<td align='justify'>Pernyataan singkat ini tidak dapat memuat secara rinci seluruh risiko atau aspek penting lainnya tentang Perdagangan Berjangka. Oleh karena itu Anda harus mempelajari kegiatan Perdagangan Berjangka secara cermat sebelum memutuskan melakukan transaksi.
	</td>
	<td align='center'>
	$s1_14
	</td>
	</tr>
	<tr>
	<td valign='top-center'>13</td>
	<td valign='justify'>Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure) ini dibuat dalam Bahasa Indonesia.
	</td>
	<td align='center'>
	$s1_15
	</td>
	</tr>
	</table><br/><br/>
	<table align='center' width='70%' border='0'>
	<tr>
	<td align='center' colspan='5'><h3>PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO</h3></td>
	</tr>
	<tr>
	<td align='center' colspan='5'>Dengan mengisi kolom �YA� di bawah, saya menyatakan bahwa saya telah menerima �DOKUMEN PEMBERITAHUAN ADANYA RISIKO� mengerti dan menyetujui isinya.</td>
	</tr>
	<tr>
	<td width='38%'>Pernyataan menerima / tidak</td>
	<td width='2%'>:</td>
	<td width='60%'>$menerima</td>
	</tr>
	<tr>
	<td>Menyatakan pada Tanggal</td>
	<td>:</td>
	<td>&nbsp;
	$tanggal
	</td>
	</tr>
	</table>
	<br><br><br><br><br><hr><br><br><br><br><br>
	";}
	
	//Page 701 & 702
	$page7=$_POST['page1'];
	$_SESSION['page1'] = $page7;
	//page 701
	if($_SESSION['page1'] == "IDR_50.000.000_Kontrak_Berjangka_Emas GOL,_GOL100,_GOL250" || $_SESSION['page1'] == "IDR_50.000.000_Kontrak_Berjangka_Kakao")
		{
	
	$email = $_POST['email'];
	$perintah7_1 = mysql_query("SELECT * FROM formulir7_1 where email = '$email'");
	$row7_1 = mysql_fetch_array($perintah7_1);
		$hari = $row7_1[0];
		$tanggal1 = $row7_1[1];
		$bulan1 = $row7_1[2];
		$tahun1 = $row7_1[3];
		$nama1 = $row7_1[4];
		$pekerjaan7_1 = $row7_1['pekerjaan1'];
		$alamat7_1 = $row7_1['alamat1'];
		$s1_1 = $row7_1[7];
		$s1_2 = $row7_1[8];
		$s2_1 = $row7_1[9];
		$s2_2 = $row7_1[10];
		$s2_3 = $row7_1[11]; 
		$s2_4 = $row7_1[12];
		$s3_1 = $row7_1[13];
		$s3_2 = $row7_1[14];
		$s3_3 = $row7_1[15];
		$s4_1 = $row7_1[16];
		$s4_2 = $row7_1[17];
		$s4_3 = $row7_1[18];
		$s4_4 = $row7_1[19];
		$s4_5 = $row7_1[20];
		$s5 = $row7_1[21];
		$s6 = $row7_1[22];
		$s7 = $row7_1[23];
		$s8 = $row7_1[24];
		$s9_1 = $row7_1[25];
		$s9_2 = $row7_1[26];
		$s9_3 = $row7_1[27];
		$s10_1 = $row7_1[28];
		$s10_2 = $row7_1[29];
		$s11 = $row7_1[30];
		$s12 = $row7_1[31];
		$s13_1 = $row7_1[32];
		$s13_2 = $row7_1[33];
		$s13_3 = $row7_1[34];
		$s13_4 = $row7_1[35];
		$s13_5 = $row7_1[36];
		$s14 = $row7_1[37];
		$s15 = $row7_1[38];
		$s16 = $row7_1[39];
		$s17 = $row7_1[40];
		$s18_1 = $row7_1[41];
		$s18_2 = $row7_1[42];
		$s18_3 = $row7_1[43];
		$s19 = $row7_1[44];
		$s20_1 = $row7_1[45];
		$s20_2 = $row7_1[46];
		$s20_3 = $row7_1[47];
		$s21_1 = $row7_1[48];
		$s21_2= $row7_1[49];
		$s21_3 = $row7_1[50];
		$s21_4 = $row7_1[51];
		$s22 = $row7_1[52];
		$s23 = $row7_1[53];
		$s24_1 = $row7_1[54];
		$s24_2 = $row7_1[55];
		$s24_3melalui = $row7_1[56];
		$lainnya = $row7_1[57];
		$s24_4daftar_kantor = $row7_1[58];
		$s25 = $row7_1[59];
		$menerima = $row7_1[60];
		$tanggal = $row7_1[61];
	echo"
	<p align='right'>Lampiran  2 Peraturan Kepala Badan Pengawas<br />
	  Perdagangan  Berjangka Komoditi<br />
	  Nomor:  107/BAPPEBTI/PER/11/2013</p>
	<h3 align='center'><b>Formulir Nomor 107.PBK.05.1</b></h3>
	<p align='center'><br />
	  PERJANJIAN PEMBERIAN AMANAT  SECARA ELEKTRONIK ONLINE</p>
	<p align='center'><br />
	  UNTUK TRANSAKSI KONTRAK BERJANGKA</p>
	<table width='70%' border='0' align='center'  cellpadding='10'>
	  <tr >
		<td ><h3 align='center'><b>PERHATIAN  !<br />
				  <br />
		  PERJANJIAN  INI MERUPAKAN KONTRAK HUKUM. HARAP DIBACA DENGAN SEKSAMA.</b></h3></td>
	  </tr>
	</table>
	<br />
	<table width='70%' align='center'><tr><td>
	<br/><br/><center><strong>Pada Hari ini $hari , 
									Tanggal $tanggal1 ,
									Bulan $bulan1 ,
									Tahun $tahun1 ,
									Kami yang mengisi perjanjian di bawah ini:</p><br/></td>
	  </tr>
	</table>
	<table width='70%' border='0' align='center' >
	  <tr>
		<td width='4%' align='center' valign='top'>1</td>
		<td width='23%'>Nama</td>
		<td width='1%'>:</td>
		<td width='72%'>
		  $nama1
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>Pekerjaan/Jabatan</td>
		<td>:</td>
		<td>
		  $pekerjaan7_1</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>Alamat</td>
		<td>:</td>
		<td>
		  $alamat7_1
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	</table>
	<table width='70%' align='center'>
	  <tr>
		<td><p>dalam hal ini bertindak untuk dan  atas nama sendiri, yang selanjutnya disebut Nasabah,</p></td>
	  </tr>
	</table>
	<table width='70%' border='0' align='center' >
	  <tr>
		<td width='4%' align='center' valign='top'>2</td>
		<td width='23%'>Nama</td>
		<td width='1%'>:</td>
		<td width='71%'>
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>Pekerjaan/Jabatan</td>
		<td>:</td>
		<td>Wakil Pialang</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td valign='top'>Alamat</td>
		<td valign='top'>:</td>
		<td><p>Agung Podomoro Land Tower Lt 32. </p>
		  Jl  Letjen S Parman Kav 28 Jakarta Barat 11470</td>
	  </tr>
	</table>
	<table width='70%' border='0' align='center'>
	  <tr>
		<td><p>dalam hal ini bertindak untuk dan  atas nama PT. Esandar Arthamas Berjangka yang selanjutnya disebut Pialang  Berjangka, <br />
				<br />
		  Nasabah dan Pialang Berjangka  secara bersama &ndash; sama selanjutnya disebut Para Pihak. <br />
		  <br />
		  Para Pihak sepakat untuk  mengadakan Perjanjian Pemberian Amanat untuk melakukan transaksi penjualan  maupun pembelian Kontrak Berjangka dengan ketentuan sebagai berikut:</p></td>
	  </tr>
	</table>
	<table width='70%' border='1' align='center' >
	  <tr>
		<td width='6%' align='center' valign='top'>1</td>
		<td colspan='3'>Margin dan Pembayaran Lainnya</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td width='6%' align='center' valign='top'>(1)</td>
		<td width='67%' valign='top'>Nasabah menempatkan sejumlah dana (Margin) ke Rekening  Terpisah (Segregated Account) Pialang Berjangka sebagai Margin awal dan wajib mempertahankannya  sebagaimana ditetapkan.</td>
		<td width='21%' align='center' valign='middle'>
			$s1_1
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'>membayar biaya-biaya yang diperlukan untuk transaksi  yaitu biaya transaksi, pajak, komisi, dan biaya pelayanan, biaya bunga sesuai  tingkat yang berlaku, dan biaya lainnya yang dapat dipertanggungjawabkan  berkaitan dengan transaksi sesuai amanat Nasabah, maupun biaya rekening  Nasabah.</td>
		<td align='center' valign='middle'>
		   $s1_2
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>2</td>
		<td colspan='3'>Pelaksanaan Amanat</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td valign='top'>Setiap amanat yang disampaikan oleh Nasabah atau  kuasanya yang ditunjuk secara tertulis oleh Nasabah, dianggap sah apabila  diterima oleh Pialang Berjangka sesuai dengan ketentuan yang berlaku, dapat  berupa amanat tertulis yang ditandatangani oleh Nasabah atau kuasanya, amanat  telepon yang direkam, dan/atau amanat transaksi elektronik lainnya.</td>
		<td align='center' valign='middle'>
			$s2_1
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'>Setiap amanat Nasabah yang diterima dapat langsung  dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi  dan eksekusinya tergantung pada kondisi dan sistem transaksi yang berlaku yang  mungkin dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan amanat  tersebut. Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum  memberikan amanat untuk transaksi berikutnya.</td>
		<td align='center' valign='middle'>
			$s2_2 
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td valign='top'>Amanat Nasabah hanya dapat dibatalkan dan/atau  diperbaiki apabila transaksi atas amanat tersebut belum terjadi. Pialang  Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tidak  terlaksananya pembatalan dan/atau perbaikan sepanjang bukan karena kelalaian  Pialang Berjangka.</td>
		<td align='center' valign='middle'>
			$s2_3
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(4)</td>
		<td valign='top'>Pialang Berjangka berhak menolak amanat Nasabah  apabila harga yang ditawarkan atau diminta tidak wajar.</td>
		<td align='center' valign='middle'>
			$s2_4
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>3</td>
		<td colspan='3' align='left'>Antisipasi Penyerahan Barang</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td>Untuk kontrak-kontrak tertentu penyelesaian transaksi  dapat dilakukan dengan penyerahan atau penerimaan barang (delivery) apabila  kontrak jatuh tempo. Nasabah menyadari bahwa penyerahan atau penerimaan barang  mengandung risiko yang lebih besar daripada melikuidasi posisi dengan offset.  Penyerahan fisik barang memiliki konsekuensi kebutuhan dana yang lebih besar  serta tambahan biaya pengelolaan barang.</td>
		<td align='center' valign='middle'>
			$s3_1
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td>Pialang Berjangka tidak bertanggung jawab atas  klasifikasi mutu (grade), kualitas atau tingkat toleransi atas komoditi yang  diserahkan atau akan diserahkan.</td>
		<td align='center' valign='middle'>
			$s3_2 
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td valign='top'>Pelaksanaan penyerahan atau penerimaan barang tersebut  akan diatur dan dijamin oleh Lembaga Kliring Berjangka.</td>
		<td align='center' valign='middle'>
			$s3_3
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>4</td>
		<td colspan='3'>Kewajiban Memelihara Margin</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td>Nasabah wajib memelihara/memenuhi tingkat Margin yang  harus tersedia di rekening pada Pialang Berjangka sesuai dengan jumlah yang  telah ditetapkan baik diminta ataupun tidak oleh Pialang Berjangka.</td>
		<td align='center' valign='middle'>
			$s4_1
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td>Apabila jumlah Margin memerlukan penambahan maka  Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah untuk  menambah Margin segera.</td>
		<td align='center' valign='middle'>
			$s4_2
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td>Apabila jumlah Margin memerlukan tambahan (Call  Margin) maka Nasabah wajib melakukan penyerahan Call Margin selambat-lambatnya  sebelum dimulai hari perdagangan berikutnya. Kewajiban Nasabah sehubungan  dengan penyerahan Call Margin tidak terbatas pada jumlah Margin awal.</td>
		<td align='center' valign='middle'>
			$s4_3
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(4)</td>
		<td>Pialang Berjangka tidak berkewajiban melaksanakan  amanat untuk melakukan transaksi yang baru dari Nasabah sebelum Call Margin  dipenuhi.</td>
		<td align='center' valign='middle'>
			$s4_4
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td align='center' valign='top'>(5)</td>
		<td>Untuk memenuhi kewajiban Call Margin dan keuangan  lainnya dari Nasabah, Pialang Berjangka dapat mencairkan dana Nasabah yang ada  di Pialang Berjangka.</td>
		<td align='center' valign='middle'>
			$s4_5    </td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>5</td>
		<td colspan='3'>Hak Pialang Berjangka Melikuidasi Posisi Nasabah </td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td colspan='2' valign='top'>Nasabah bertanggung jawab memantau / mengetahui posisi  terbukanya secara terusmenerus dan memenuhi kewajibannya. Apabila dalam jangka  waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan,  Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau  sebagian, membatasi transaksi, atau tindakan lain untuk melindungi diri dalam  pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa  memberitahu Nasabah dan Pialang Berjangka tidak bertanggung jawab atas kerugian  yang timbul akibat tindakan tersebut.</td>
		<td align='center'>
			$s5
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>6</td>
		<td colspan='3' valign='top'>Penggantian Kerugian Tidak Menyerahkan Barang</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td colspan='2' valign='top'>Apabila Nasabah tidak mampu menyerahkan komoditi atas  Kontrak Berjangka yang jatuh tempo, Nasabah memberikan kuasa kepada Pialang  Berjangka untuk meminjam atau membeli komoditi untuk penyerahan tersebut.  Nasabah wajib membayar secepatnya semua biaya, kerugian dan premi yang telah  dibayarkan oleh Pialang Berjangka atas tindakan tersebut. Apabila Pialang  Berjangka harus menerima penyerahan komoditi atau surat berharga maka Nasabah  bertanggung jawab atas penurunan nilai dari komoditi atas surat berharga  tersebut.</td>
		<td align='center'>
			$s6
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>7</td>
		<td colspan='3' valign='top'>Penggantian Kerugian Tidak Adanya Penutupan Posisi</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td colspan='2' valign='top'>Apabila Nasabah tidak mampu melakukan penutupan atas  transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas  transaksi di Bursa. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian  dan premi yang telah dibayarkan oleh Pialang Berjangka, dan apabila Nasabah  lalai untuk membayar biayabiaya tersebut, Pialang Berjangka berhak untuk  mengambil pembayaran dari dana Nasabah.</td>
		<td align='center'>
			$s7
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>8</td>
		<td colspan='3' valign='top'>Pialang Berjangka Dapat Membatasi Posisi</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td colspan='2' valign='top'>Nasabah mengakui hak Pialang Berjangka untuk membatasi  posisi terbuka Kontrak Berjangka Nasabah dan Nasabah tidak melakukan transaksi  melebihi batas yang telah ditetapkan tersebut.</td>
		<td align='center' valign='middle'>
			$s8
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>9</td>
		<td colspan='3' valign='top'>Tidak Ada Jaminan atas Informasi atau Rekomendasi Nasabah  mengakui bahwa:</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td valign='top'>Informasi dan rekomendasi yang diberikan oleh Pialang  Berjangka kepada Nasabah tidak selalu lengkap dan perlu diverifikasi.</td>
		<td align='center' valign='middle'>
			$s9_1
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'>Pialang Berjangka tidak menjamin bahwa informasi dan  rekomendasi yang diberikan merupakan informasi yang akurat dan lengkap.</td>
		<td align='center' valign='middle'>
			$s9_2
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td valign='top'>Informasi dan rekomendasi yang diberikan oleh Wakil  Pialang Berjangka yang satu dengan yang lain mungkin berbeda karena perbedaan  analisis fundamental atau teknikal. Nasabah menyadari bahwa ada kemungkinan  Pialang Berjangka dan pihak terafiliasinya memiliki posisi di pasar dan  memberikan rekomendasi tidak konsisten kepada Nasabah.</td>
		<td align='center' valign='middle'>
			$s9_3
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>10</td>
		<td colspan='3' valign='top'>Pembatasan Tanggung Jawab Pialang Berjangka.</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td valign='top'>Pialang Berjangka tidak bertanggung jawab untuk  memberikan penilaian kepada Nasabah mengenai iklim, pasar, keadaan politik dan  ekonomi nasional dan internasional, nilai kontrak berjangka, kolateral, atau  memberikan nasihat mengenai keadaan pasar. Pialang Berjangka hanya memberikan  pelayanan untuk melakukan transaksi secara jujur serta memberikan laporan atas  transaksi tersebut.</td>
		<td align='center' valign='middle'>
			$s10_1
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'>Perdagangan sewaktu-waktu dapat dihentikan oleh pihak  yang memiliki otoritas (Bappebti/Bursa Berjangka) tanpa pemberitahuan terlebih  dahulu kepada Nasabah. Atas posisi terbuka yang masih dimiliki oleh Nasabah  pada saat perdagangan tersebut dihentikan, maka akan diselesaikan (likuidasi)  berdasarkan pada peraturan/ketentuan yang dikeluarkan dan ditetapkan oleh pihak  otoritas tersebut, dan semua kerugian serta biaya yang timbul sebagai akibat  dihentikannya transaksi oleh pihak otoritas perdagangan tersebut, menjadi beban  dan tanggung jawab Nasabah sepenuhnya.</td>
		<td align='center' valign='middle'>
			$s10_2
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>11</td>
		<td colspan='3' valign='top'>Transaksi Harus Mematuhi Peraturan Yang Berlaku</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' valign='top'>Semua transaksi baik yang dilakukan sendiri oleh  Nasabah maupun melalui Pialang Berjangka wajib mematuhi peraturan  perundang-undangan di bidang Perdagangan Berjangka, kebiasaan dan interpretasi  resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.</td>
		<td align='center' valign='middle'>
			$s11
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>12</td>
		<td colspan='3' valign='top'>Pialang Berjangka tidak Bertanggung jawab atas  Kegagalan Komunikasi</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' valign='top'>Pialang Berjangka tidak bertanggung jawab atas  keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi  lainnya yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain  diluar kontrol Pialang Berjangka.</td>
		<td align='center' valign='middle'>
			$s12
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>13</td>
		<td colspan='3' valign='top'>Konfirmasi</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td valign='top'>Konfirmasi dari Nasabah dapat berupa surat, telex,  media lain, secara tertulis ataupun rekaman suara.</td>
		<td align='center' valign='middle'>
			$s13_1
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'>Pialang Berjangka berkewajiban menyampaikan konfirmasi  transaksi, laporan rekening, permintaan Call Margin, dan pemberitahuan lainnya  kepada Nasabah secara akurat, benar dan secepatnya pada alamat Nasabah sesuai  dengan yang tertera dalam rekening Nasabah. Apabila dalam jangka waktu 2 x 24  jam setelah amanat jual atau beli disampaikan, tetapi Nasabah belum menerima  konfirmasi tertulis, Nasabah segera memberitahukan hal tersebut kepada Pialang  Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis.</td>
		<td align='center' valign='middle'>
			$s13_2
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td valign='top'>Jika dalam waktu 2 x 24 jam sejak tanggal penerimaan  konfirmasi tertulis tersebut tidak ada sanggahan dari Nasabah maka konfirmasi  Pialang Berjangka dianggap benar dan sah.</td>
		<td align='center' valign='middle'>
			$s13_3
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(4)</td>
		<td valign='top'>Kekeliruan atas konfirmasi yang diterbitkan Pialang  Berjangka akan diperbaiki oleh Pialang Berjangka sesuai keadaan yang sebenarnya  dan demi hukum konfirmasi yang lama batal.</td>
		<td align='center' valign='middle'>
			$s13_4
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(5)</td>
		<td valign='top'>Nasabah tidak bertanggung jawab atas transaksi yang  dilaksanakan atas rekeningnya apabila konfirmasi tersebut tidak disampaikan  secara benar dan akurat.</td>
		<td align='center' valign='middle'>
			$s13_5
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>14</td>
		<td colspan='3' valign='top'>Kebenaran Informasi Nasabah</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' valign='top'>Nasabah memberikan informasi yang benar dan akurat  mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan  memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi  perubahan, termasuk perubahan kemampuan keuangannya untuk terus melaksanakan  transaksi.</td>
		<td align='center' valign='middle'>
			$s14
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>15</td>
		<td colspan='3' valign='top'>Komisi Transaksi</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' valign='top'>Nasabah mengetahui dan menyetujui bahwa Pialang  Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan,  dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang  Berjangka. Perubahan beban (fees) dan biaya lainnya harus disetujui secara  tertulis oleh Para Pihak.</td>
		<td align='center' valign='middle'>
			$s15
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>16</td>
		<td colspan='3' valign='top'>Pemberian Kuasa</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' valign='top'>Nasabah memberikan kuasa kepada Pialang Berjangka  untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau  institusi lain yang terkait untuk memperoleh keterangan atau verifikasi  mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa  penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang  Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan  secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi  persyaratan yang diperlukan.</td>
		<td align='center' valign='middle'>
			$s16
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>17</td>
		<td colspan='3' valign='top'>Pemindahan Dana</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' valign='top'>Pialang Berjangka dapat setiap saat mengalihkan dana  dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang  dilakukan Nasabah seperti pembayaran komisi, pembayaran biaya transaksi,  kliring, dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu  memberitahukan kepada Nasabah. Transfer yang telah dilakukan akan segera  diberitahukan secara tertulis kepada Nasabah.</td>
		<td align='center' valign='middle'>
			$s17
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>18</td>
		<td colspan='3' valign='top'>Pemberitahuan</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td valign='top'>Semua komunikasi, uang, surat berharga, dan kekayaan  lainnya harus dikirimkan langsung ke alamat Nasabah seperti tertera dalam  rekeningnya atau alamat lain yang ditetapkan/diberitahukan secara tertulis oleh  Nasabah.</td>
		<td align='center' valign='middle'>
			$s18_1
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'><p>Semua uang, harus disetor atau ditransfer langsung oleh  Nasabah ke Rekening Terpisah (Segregated Account) Pialang Berjangka:<br />
		  Nama&nbsp;&nbsp; : PT.ESANDAR ARTHAMAS BERJANGKA<br />
		  Alamat : Agung Podomoro Land Tower Lt. 32 <br />
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jl.  Letjen S. Parman Kav. 28, Jakarta Barat 11470 - Indonesia<br />
		  Bank&nbsp;&nbsp;&nbsp; &nbsp;:&nbsp; Bank  Central Asia cab Sudirman<br />
		  No. Rekening Terpisah : 035.313.6019 (Rupiah)<br />
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  035.313.4610 (USD)</p>
		  dan  dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda terima  bukti setor atau transfer dari pegawai Pialang Berjangka.</td>
		<td align='center' valign='middle'>
			$s18_2
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td valign='top'><p>Semua surat berharga, kekayaan lainnya, atau komunikasi  harus dikirim kepada Pialang Berjangka:<br />
		  Nama&nbsp;&nbsp; : PT.ESANDAR ARTHAMAS BERJANGKA<br />
		  Alamat : Agung Podomoro Land Tower Lt. 32 <br />
		  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jl. Letjen S. Parman Kav. 28,  Jakarta Barat 11470 - Indonesia<br />
		  Telepon&nbsp;&nbsp; : 021-2933  9229<br />
		  Facsimile : 021-2933 9230<br />
		  Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  info@esandar.co.id </p>
		  dan  dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda bukti  penerimaan dari pegawai Pialang Berjangka.</td>
		<td align='center' valign='middle'>
			$s18_3
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>19</td>
		<td colspan='3' valign='top'>Dokumen Pemberitahuan Adanya Risiko</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' align='left' valign='top'>Nasabah mengakui menerima dan mengerti Dokumen  Pemberitahuan Adanya Risiko.</td>
		<td align='center' valign='middle'>
			$s19
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>20</td>
		<td colspan='3' align='left' valign='top'>Jangka Waktu Perjanjian dan Pengakhiran</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td valign='top'>Perjanjian ini mulai berlaku terhitung sejak tanggal  ditandatanganinya sampai disampaikannya pemberitahuan pengakhiran secara  tertulis oleh Nasabah atau Pialang Berjangka.</td>
		<td align='center' valign='middle'>
			$s20_1
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'>Nasabah dapat mengakhiri Perjanjian ini hanya jika  Nasabah sudah tidak lagi memiliki posisi terbuka dan tidak ada kewajiban  Nasabah yang diemban oleh atau terhutang kepada Pialang Berjangka.</td>
		<td align='center' valign='middle'>
			$s20_2
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td valign='top'>Pengakhiran tidak membebaskan salah satu Pihak dari tanggung  jawab atau kewajiban yang terjadi sebelum pemberitahuan tersebut.</td>
		<td align='center' valign='middle'>
			$s20_3
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>21</td>
		<td colspan='3' valign='top'>Berakhirnya Perjanjian</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' align='left' valign='top'>Perjanjian dapat berakhir dalam hal Nasabah:</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td valign='top'>Dinyatakan pailit, memiliki hutang yang sangat besar,  dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau  meninggal;</td>
		<td align='center' valign='middle'>
			$s21_1
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'>Tidak dapat memenuhi atau mematuhi perjanjian ini  dan/atau melakukan pelanggaran terhadapnya;</td>
		<td align='center' valign='middle'>
			$s21_2
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td valign='top'><p>Berkaitan dengan angka (1) dan (2) tersebut di atas,  Pialang Berjangka dapat:<br />
		  i). meneruskan atau menutup posisi Nasabah tersebut setelah  mempertimbangkannya secara cermat dan jujur; dan</p>
		  ii).  menolak perintah dari Nasabah atau kuasanya.</td>
		<td align='center' valign='middle'>
			$s21_3
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(4)</td>
		<td valign='top'>Pengakhiran Perjanjian sebagaimana dimaksud dengan  angka (1) dan (2) tersebut di atas tidak melepaskan kewajiban dari Para Pihak  yang berhubungan dengan penerimaan atau kewajiban pembayaran atau  pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian.</td>
		<td align='center' valign='middle'>
			$s21_4
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>22</td>
		<td colspan='3' valign='top'>Force Majeur</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' align='left' valign='top'>Tidak ada satupun pihak di dalam Perjanjian dapat  diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya  memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab  yang berada di luar kemampuannya atau kekuasaannya (force majeur), sepanjang  pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain  dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya  sebab itu. Yang dimaksud dengan Force Majeur dalam Perjanjian adalah peristiwa  kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir),  pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan  perundang-undangan yang berlaku dan kondisi di bidang ekonomi, keuangan dan  Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan  Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan, kliring  dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan  yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.</td>
		<td align='center' valign='middle'>
		   $s22
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>23</td>
		<td colspan='3' valign='top'>Perubahan atas Isian dalam Perjanjian Pemberian Amanat</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' valign='top'>Perubahan atas isian dalam Perjanjian ini hanya dapat  dilakukan atas persetujuan Para Pihak, atau Pialang Berjangka telah  memberitahukan secara tertulis perubahan yang diinginkan, dan Nasabah tetap  memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara  tertulis atas usul perubahan tersebut. Tindakan Nasabah tersebut dianggap  setuju atas usul perubahan tersebut.</td>
		<td align='center' valign='middle'>
			$s23
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>24</td>
		<td colspan='3' valign='top'>Penyelesaian Perselisihan</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(1)</td>
		<td valign='top'>Semua perselisihan dan perbedaan pendapat yang timbul  dalam pelaksanaan Perjanjian ini wajib diselesaikan terlebih dahulu secara  musyawarah untuk mencapai mufakat antara Para Pihak.</td>
		<td align='center' valign='middle'>
			$s24_1
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(2)</td>
		<td valign='top'>Apabila perselisihan dan perbedaan pendapat yang  timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, Para  Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di  Bursa Berjangka.</td>
		<td align='center' valign='middle'>
			$s24_2
		</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(3)</td>
		<td valign='top'><p>Apabila perselisihan dan perbedaan pendapat yang timbul  tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka  (2), maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui *):<br /><br />
		  &nbsp;- $s24_3melalui $lainnya</p></td>
		<td align='center' valign='top'>&nbsp;</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>(4)</td>
		<td valign='top'><p>Kantor atau kantor cabang Pialang Berjangka terdekat dengan  domisili Nasabah tempat penyelesaian dalam hal terjadi perselisihan.<br />
		  Daftar Kantor Kantor yang dipilih (salah satu)<br /><br>
		  &nbsp;- $s24_4daftar_kantor</td>
		<td align='center' valign='top'>&nbsp;</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>25</td>
		<td colspan='3' valign='top'>Bahasa</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>&nbsp;</td>
		<td colspan='2' valign='top'><p>Perjanjian ini dibuat dalam Bahasa Indonesia. Demikian  Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar,  sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun.</p>
			<strong>&ldquo;Saya  telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum  dalam perjanjian ini&rdquo;.</strong></td>
		<td align='center' valign='middle'>
			$s25
		</td>
	  </tr>
	  <tr>
		<td colspan='4' valign='top'>Dengan mengisi kolom &ldquo;YA&rdquo; di bawah, saya menyatakan  bahwa saya telah menerima &ldquo;P<strong>ERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK  BERJANGKA</strong>&rdquo; mengerti dan menyetujui isinya.</td>
	  </tr>
	</table>
	<table width='70%' border='0' align='center' >
	  <tr>
		<td width='27%'>Pernyataan menerima / tidak</td>
		<td width='1%'>:</td>
		<td width='71%'>&nbsp;
		  $menerima    </td>
	  </tr>
	  <tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>&nbsp;
	$tanggal</td>
	 </tr>
	</table>
	<table width='60%' align='center'>
	  <tr>
		<td colspan='3'><p>*) Pilih salah satu</p></td>
	  </tr>
	</table><br><br><br><br><br><hr><br><br><br><br><br>
	";
	}
	
	//page 702
		else if($_SESSION['page1'] == "IDR_5.000.000_Kontrak_Derivative_Forex_dan_Loco_London" || $_SESSION['page1'] == "IDR_5.000.000_Kontrak_Derivative_Stock_Indeks" || $_SESSION['page1'] == "USD_500_Kontrak_Deritvative_Forex_dan_Loco_London" || $_SESSION['page1'] == "USD_500_Kontrak_Derivative_Stock_Indeks"){
	$email = $_POST['email'];
	$perintah7_2 = mysql_query("SELECT * FROM formulir7_2 where email = '$email'");
	$row7_2 = mysql_fetch_array($perintah7_2);
	$namahari = $row7_2[0];
	$tanggal1=$row7_2[1];
	$bulan=$row7_2[2];
	$tahun=$row7_2[3];  
	$nama1 = $row7_2['nama1'];
	$pekerjaan1 = $row7_2['pekerjaan1'];
	$alamat1 = $row7_2['alamat1'];
	$s1_1 = $row7_2[7];
	$s1_2 = $row7_2[8];
	$s2_1 = $row7_2[9];
	$s2_2 = $row7_2[10];
	$s2_3 = $row7_2[11];
	$s3_1 = $row7_2[12];
	$s3_2 = $row7_2[13];
	$s3_3 = $row7_2[14];
	$s3_4 = $row7_2[15];
	$s3_5 = $row7_2[16];
	$s4 = $row7_2[17];
	$s5 = $row7_2[18];
	$s6 = $row7_2[19];
	$s7_1 = $row7_2[20];
	$s7_2 = $row7_2[21];
	$s7_3 = $row7_2[22];
	$s8_1 = $row7_2[23];
	$s8_2 = $row7_2[24];
	$s9 = $row7_2[25];
	$s10 = $row7_2[26];
	$s11_1 = $row7_2[27];
	$s11_2 = $row7_2[28];
	$s11_3 = $row7_2[29];
	$s11_4 = $row7_2[30];
	$s11_5 = $row7_2[31];
	$s12 = $row7_2[32];
	$s13 = $row7_2[33];
	$s14 = $row7_2[34];
	$s15 = $row7_2[35];
	$s16_1 = $row7_2[36];
	$s16_2 = $row7_2[37];
	$s16_3 = $row7_2[38];
	$s17 = $row7_2[39];
	$s18_1 = $row7_2[40];
	$s18_2 = $row7_2[41];
	$s18_3 = $row7_2[42];
	$s19_1 = $row7_2[43];
	$s19_2 = $row7_2[44];
	$s19_3 = $row7_2[45];
	$s19_4 = $row7_2[46];
	$s20 = $row7_2[47];
	$s21 = $row7_2[48];
	$s22_1 = $row7_2[49];
	$s22_2 = $row7_2[50];
	$s22_3melalui = $row7_2[51];
	$lainnya = $row7_2[52];
	$s22_4 = $row7_2[53];
	$s23 = $row7_2[54];
	$menerima = $row7_2[55];
	$tanggal = $row7_2[56];
	echo"
	<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas<br/>
						Perdagangan Berjangka Komoditi<br/>
						Nomor: 107/BAPPEBTI/PER/11/2013</p>
	<p align='center' style='font-size:20px'><strong>Formulir Nomor 107.PBK.05.2</Strong><br/>
	PERJANJIAN PEMBERIAN AMANAT SECARA ELEKTRONIK ONLINE<br/>
	UNTUK TRANSAKSI KONTRAK DERIVATIF<br/>
	DALAM SISTEM PERDAGANGAN ALTERNATIF<br/></p>
	<table align='center' width='70%' border='0'>
	<tr>
	<td>
		<h3><center>PERHATIAN !</center></h3>
		<strong><center>PERJANJIAN INI MERUPAKAN KONTRAK HUKUM. HARAP DIBACA DENGAN SEKSAMA</center></strong>
		</td>
	</tr>
	</table>
	<br/><br/><center><strong>Pada Hari ini $namahari, Tanggal $tanggal1,
									Bulan $bulan,
									Tahun $tahun,
							
							Kami yang mengisi perjanjian di bawah ini:</strong></center>
	
	<table align='center' width='70%' border='0'>
		<tr>
			<td> &nbsp; Nama</td>	
			<td>:</td>	
			<td>$nama1</td>
		</tr>
		<tr>
			<td>&nbsp; Pekerjaan / Jabatan</td>
			<td>:</td>	
			<td>$pekerjaan1</td>
		</tr>
		<tr>
			<td>&nbsp; Alamat</td>
			<td>:</td>
			<td>$alamat1</td>
		</tr>
	</table>
		<center><h4>Dalam hal ini bertindak untuk dan atas nama sendiri, Yang selanjutnya disebut Nasabah,</h4></center>
	
		<table align='center' width='70%' border='0'>
		<tr>
			<td>&nbsp; Nama</td>	
			<td>:</td>	
			<td></td>
		</tr>
		<tr>
			<td>&nbsp; Pekerjaan / Jabatan</td>	
			<td>:</td>	
			<td>Wakil Pialang</td>
		</tr>
		<tr>
			<td>&nbsp; Alamat</td>
			<td>:</td>
			<td>Agung Podomoro Land Tower Lt 32. <br/>
	Jl Letjen S Parman Kav 28 Jakarta Barat 11470
	</td>
		</tr>
	</table><br/>
	
	<center>Dalam hal ini bertindak untuk dan atas nama PT. Esandar Arthamas Berjangka yang selanjutnya disebut Pialang Berjangka,<br/> 
	Nasabah dan Pialang Berjangka secara bersama � sama selanjutnya disebut Para Pihak.<br/>
	Para Pihak sepakat untuk mengadakan Perjanjian Pemberian Amanat untuk melakukan transaksi penjualan maupun pembelian Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan ketentuan sebagai berikut:</center><br/>
	
	<table align='center' style='font-size:15px' width='70%' border='1'>
		<tr>
			<td><strong>1</strong></td>
			<td><strong>Margin dan Pembayaran Lainnya</strong></td>
		</tr>
		<tr>
			<td></td>	
			<td>(1)&nbsp;&nbsp;&nbsp;Nasabah menempatkan sejumlah dana (Margin) 
			ke Rekening Terpisah (Segregated Account) Pialang Berjangka sebagai Margin awal dan wajib mempertahankannya sebagaimana ditetapkan.</td>
			<td><center>$s1_1</center>
			</td>
		</tr>
		<tr>
			<td></td>	
			<td>(2)&nbsp;&nbsp;&nbsp; Membayar biaya-biaya yang diperlukan untuk transaksi yaitu biaya transaksi, pajak, komisi, dan biaya pelayanan,
			biaya bunga sesuai tingkat yang berlaku,
			dan biaya lainnya yang dapat dipertanggungjawabkan berkaitan dengan transaksi sesuai amanat Nasabah, maupun biaya rekening Nasabah.</td>
			<td><center>$s1_2</center>
			</td>
		</tr>
		<tr>
			<td><strong>2</strong></td>
			<td><strong>Pelaksanaan Transaksi</strong></td>
		</tr>
		<tr>
			<td></td>
			<td>(1)&nbsp;&nbsp;&nbsp;Setiap transaksi Nasabah dilaksanakan secara elektronik on-line oleh Nasabah yang bersangkutan. </td>
			<td><center>$s2_1</center>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>(2)&nbsp;&nbsp;&nbsp;Setiap amanat Nasabah yang diterima dapat langsung dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi dan eksekusinya dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan transaksi tersebut.
			Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum memberikan amanat untuk transaksi berikutnya.</td>
			<td><center>$s2_2</center>
			</td>
		</tr>
		
		<tr>
			<td></td>
			<td>(3)&nbsp;&nbsp;&nbsp;Setiap transaksi Nasabah secara bilateral dilawankan dengan Penyelenggara Sistem Perdagangan Alternatif PT Harta International Investama
			yang bekerjasama dengan Pialang Berjangka. </td>
			<td><center>$s2_3</center>
			</td>
		</tr>
		
		<tr>
			<td><strong>3</strong></td>
			<td><strong>Kewajiban Memelihara Margin</strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(1) &nbsp;&nbsp;&nbsp; Nasabah wajib memelihara/memenuhi tingkat Margin yang harus tersedia di rekening pada Pialang Berjangka
			sesuai dengan jumlah yang telah ditetapkan baik diminta ataupun tidak oleh Pialang Berjangka. </td>
			<td><center>$s3_1</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	<td>(2) &nbsp;&nbsp;&nbsp; Apabila jumlah Margin memerlukan penambahan maka Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah 
			untuk menambah Margin segera. </td>
			<td><center>$s3_2</center>
			</td>
		</tr>
		
		<tr>
			<td></td>
			<td>(3) &nbsp;&nbsp;&nbsp; Apabila jumlah Margin memerlukan tambahan (Call Margin) maka Nasabah wajib melakukan penyerahan Call Margin selambat-lambatnya sebelum dimulai hari perdagangan berikutnya. 
			Kewajiban Nasabah sehubungan dengan penyerahan Call Margin tidak terbatas
			pada jumlah Margin awal. </td>
			<td><center>$s3_3</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	<td>(4) &nbsp;&nbsp;&nbsp; Pialang Berjangka tidak berkewajiban melaksanakan amanat untuk melakukan transaksi yang baru
			dari Nasabah sebelum Call Margin dipenuhi. </td>
			<td><center>$s3_4</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	<td>(5) &nbsp;&nbsp;&nbsp; Untuk memenuhi kewajiban Call Margin dan keuangan lainnya dari Nasabah, 
			Pialang Berjangka dapat mencairkan dana Nasabah yang ada di Pialang Berjangka. </td>
			<td><center>$s3_5</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>4</Strong></td>
			<td><Strong>Hak Pialang Berjangka Melikudiasi Posisi Nasabah</Strong></td>
		</tr>
		
		<tr>
			<td></td>
			<td>Nasabah bertanggung jawab memantau/mengetahui posisi terbukanya secara terus- menerus dan memenuhi kewajibannya. Apabila dalam jangka waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan, 
			Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau sebagian, membatasi transaksi, 
			atau tindakan lain untuk melindungi diri dalam pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa memberitahu Nasabah dan 
			Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tindakan tersebut.</td>
			<td><center>$s4</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>5</Strong></td>
			<td><Strong>Pengganti Kerugian Tidak Adanya Penutupan Polisi</Strong></td>
		</tr>
		
		<tr>
			<td></td>
			<td>Apabila Nasabah tidak mampu melakukan penutupan atas transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas transaksi Nasabah yang terjadi. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka, 
			dan apabila Nasabah lalai untuk membayar biaya-biaya tersebut, 
			Pialang Berjangka berhak untuk mengambil pembayaran dari dana Nasabah.</td>
			<td><center>$s5</center>
			</td>
		</tr>
		<tr>
			<td><Strong>6</Strong></td>
			<td><Strong>Pialang Berjangka Dapat Membatasi Posisi </Strong></td>
		</tr>
		
		<tr>
			<td></td>
			<td>Nasabah mengakui hak Pialang Berjangka 
			untuk membatasi posisi terbuka Kontrak dan Nasabah tidak melakukan transaksi melebihi batas yang telah ditetapkan tersebut.</td>
			<td><center>$s6</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>7</Strong></td>
			<td><Strong>Tidak Ada Jaminan atas Informasi atau Rekomendasi Nasabah mengakui bahwa: </Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(1) &nbsp;&nbsp;&nbsp; Informasi dan rekomendasi yang diberikan oleh Pialang Berjangka kepada Nasabah tidak selalu lengkap dan perlu diverifikasi. </td>	
			<td><center>$s7_1</center>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>(2) &nbsp;&nbsp;&nbsp; Pialang Berjangka tidak menjamin bahwa informasi dan rekomendasi 
			yang diberikan merupakan informasi yang akurat dan lengkap. </td>	
			<td><center>$s7_2</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(3) &nbsp;&nbsp;&nbsp; Informasi dan rekomendasi yang diberikan oleh Wakil Pialang Berjangka yang satu dengan yang lain mungkin berbeda karena perbedaan analisis fundamental atau teknikal. Nasabah menyadari bahwa ada kemungkinan Pialang Berjangka dan pihak terafiliasinya memiliki posisi di pasar 
			dan memberikan rekomendasi tidak konsisten kepada Nasabah. </td>	
			<td><center>$s7_3</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>8</Strong></td>		
			<td><Strong>Pembatasan Tanggung Jawab Pialang Berjangka </Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(1) &nbsp;&nbsp;&nbsp; Pialang Berjangka tidak bertanggung jawab untuk memberikan penilaian kepada Nasabah mengenai iklim, pasar, keadaan politik dan ekonomi nasional dan internasional,
			nilai Kontrak Derivatif, kolateral, atau memberikan nasihat mengenai keadaan pasar. 
			Pialang Berjangka hanya memberikan pelayanan untuk melakukan transaksi secara jujur serta memberikan laporan atas transaksi tersebut. </td>	
			<td><center>$s8_1</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(2) &nbsp;&nbsp;&nbsp; Perdagangan sewaktu-waktu dapat dihentikan oleh pihak yang memiliki otoritas (Bappebti/Bursa Berjangka) tanpa pemberitahuan terlebih dahulu kepada Nasabah. Atas posisi terbuka yang masih dimiliki oleh Nasabah pada saat perdagangan tersebut dihentikan, maka akan diselesaikan (likuidasi) berdasarkan pada peraturan/ketentuan yang dikeluarkan dan ditetapkan oleh pihak otoritas tersebut, 
			dan semua kerugian serta biaya yang timbul sebagai akibat dihentikannya transaksi oleh pihak otoritas perdagangan tersebut, 
			menjadi beban dan tanggung jawab Nasabah sepenuhnya. </td>	
			<td><center>$s8_2</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>9</Strong></td>	
			<td><Strong>Transaksi Harus Mematuhi Peraturan Yang Berlaku</Strong></td>
		</tr>
		
		<tr>
			<td></td>
			<td>Semua transaksi dilakukan sendiri oleh Nasabah dan wajib mematuhi peraturan perundang-undangan di bidang Perdagangan Berjangka, 
			kebiasaan dan interpretasi resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.</td>
			<td><center>$s9</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>10</Strong></td>	
			<td><Strong>Pialang Berjangka Tidak Bertanggung jawab atas Kegagalan Komunikasi</Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td>Pialang Berjangka tidak bertanggung jawab atas keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi lainnya 
			yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain diluar kontrol Pialang Berjangka.</td>
			<td><center>$s10</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>11</Strong></td>	
			<td><Strong>Konfirmasi</Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(1)&nbsp;&nbsp;&nbsp; Konfirmasi dari Nasabah dapat berupa surat, telex, media lain, surat elektronik, secara tertulis ataupun rekaman suara. </td>
			<td><center>$s11_1</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(2)&nbsp;&nbsp;&nbsp; Pialang Berjangka berkewajiban menyampaikan konfirmasi transaksi, laporan rekening, permintaan Call Margin, dan pemberitahuan lainnya kepada Nasabah secara akurat, benar dan secepatnya pada alamat (email) Nasabah sesuai dengan yang tertera dalam rekening Nasabah. 
			Apabila dalam jangka waktu 2 x 24 jam setelah amanat jual atau beli disampaikan, 
			tetapi Nasabah belum menerima konfirmasi melalui alamat email Nasabah dan/atau sistem transaksi, 
			Nasabah segera memberitahukan hal tersebut kepada Pialang Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis. </td>
			<td><center>$s11_2</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(3)&nbsp;&nbsp;&nbsp; Jika dalam waktu 2 x 24 jam sejak tanggal penerimaan konfirmasi tersebut tidak ada sanggahan dari Nasabah maka konfirmasi Pialang Berjangka dianggap benar dan sah. </td>
			<td><center>$s11_3</center>
			</td>
	
		</tr>
		
		<tr>
			<td></td>	
			<td>(4)&nbsp;&nbsp;&nbsp; Kekeliruan atas konfirmasi yang diterbitkan Pialang Berjangka akan diperbaiki oleh Pialang Berjangka
			sesuai keadaan yang sebenarnya dan demi hukum konfirmasi yang lama batal. </td>
			<td><center>$s11_4</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(5)&nbsp;&nbsp;&nbsp; Nasabah tidak bertanggung jawab atas transaksi yang dilaksanakan atas rekeningnya 
			apabila konfirmasi tersebut tidak disampaikan secara benar dan akurat. </td>
			<td><center>$s11_5</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>12</Strong></td>	
			<td><Strong>Kebenaran Informasi Nasabah</Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td> Nasabah memberikan informasi yang benar dan akurat mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi perubahan, 
			termasuk perubahan kemampuan keuangannya untuk terus melaksanakan transaksi. </td>
			<td><center>$s12</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>13</Strong></td>	
			<td><Strong>Komisi Transaksi</Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td> Nasabah mengetahui dan menyetujui bahwa Pialang Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan, 
			dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang Berjangka. 
			Perubahan beban (fees) dan biaya lainnya harus disetujui secara tertulis oleh Para Pihak. </td>
			<td><center>$s13</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>14</Strong></td>	
			<td><Strong>Pemberian Kuasa</Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td> Nasabah memberikan kuasa kepada Pialang Berjangka untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau institusi lain yang terkait untuk memperoleh keterangan atau verifikasi mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan 
			secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi persyaratan yang diperlukan. </td>
			<td><center>$s14</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>15</Strong></td>	
			<td><Strong>Pemindahan Dana</Strong></td>
		</tr>
		<tr>
			<td></td>	
			<td>Pialang Berjangka dapat setiap saat mengalihkan dana dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang dilakukan Nasabah seperti pembayaran komisi, 
			pembayaran biaya transaksi, kliring dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu memberitahukan kepada Nasabah. 
			Transfer yang telah dilakukan akan segera diberitahukan secara tertulis kepada Nasabah.</td>
			<td><center>$s15</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>16</Strong></td>	
			<td><Strong>Pemberitahuan</Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(1) &nbsp;&nbsp;&nbsp; Semua komunikasi, uang, surat berharga, dan kekayaan lainnya harus dikirimkan langsung ke alamat Nasabah seperti tertera dalam rekeningnya atau alamat lain
			yang ditetapkan/diberitahukan secara tertulis oleh Nasabah.</td>
			<td><center>$s16_1</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(2) &nbsp;&nbsp;&nbsp; Semua uang, harus disetor atau ditransfer langsung oleh Nasabah ke Rekening Terpisah (Segregated Account) Pialang Berjangka: <br/> <br/>
	  &nbsp;&nbsp;&nbsp; 	Nama   : PT.ESANDAR ARTHAMAS BERJANGKA<br/>
	  &nbsp;&nbsp;&nbsp;  	Alamat : Agung Podomoro Land Tower Lt. 32<br/>
	 &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;        Jl. Letjen S. Parman Kav. 28, Jakarta Barat 11470 - Indonesia <br/>
	&nbsp;&nbsp;&nbsp; 	Bank     : Bank Central Asia cab Sudirman<br/>
	 &nbsp;&nbsp;&nbsp;	No. Rekening Terpisah : 035.313.6019 (Rupiah)<br/>
	 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 035.313.4610 (USD)<br/><br/>
	dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda terima bukti setor atau transfer dari pegawai Pialang Berjangka.
	</td>
			<td><center>$s16_2</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(3) &nbsp;&nbsp;&nbsp; Semua surat berharga, kekayaan lainnya, atau komunikasi harus dikirim kepada Pialang Berjangka: <br/> <br/>
	  &nbsp;&nbsp;&nbsp; 	Nama   : PT.ESANDAR ARTHAMAS BERJANGKA<br/>
	  &nbsp;&nbsp;&nbsp;  	Alamat : Agung Podomoro Land Tower Lt. 32<br/>
	 &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;        Jl. Letjen S. Parman Kav. 28, Jakarta Barat 11470 - Indonesia <br/>
	&nbsp;&nbsp;&nbsp; 	Telepon  &nbsp;&nbsp;&nbsp; : 021-2933 9229<br/>
	 &nbsp;&nbsp;&nbsp;	Facsimile &nbsp; : 021-2933 9230<br/>
	 &nbsp;&nbsp;&nbsp;	Email   &nbsp;&nbsp;&nbsp;&nbsp;  : info@hif.co.id<br/>
	 <br/><br/>
	dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda bukti penerimaan dari pegawai Pialang Berjangka.
	</td>
			<td><center>$s16_3</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>17</Strong></td>	
			<td><Strong>Dokumen Pemberitahuan Adanya Risiko</Strong></td>
		</tr>
		
		<tr>
		 <td></td>	
		 <td>Nasabah mengakui menerima dan mengerti Dokumen Pemberitahuan Adanya Risiko</td>
			<td><center>$s17</center>
			</td>
		</tr>
		<tr>
			<td><Strong>18</Strong></td>	
			<td><Strong>Jangka Waktu Perjanjian dan Pengakhiran</Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(1) &nbsp;&nbsp;&nbsp; Perjanjian ini mulai berlaku terhitung sejak tanggal dilakukannya konfirmasi oleh Pialang Berjangka 
			dengan diterimanya Bukti Konfirmasi Penerimaan Nasabah dari Pialang Berjangka oleh Nasabah.</td>
			<td><center>$s18_1</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(2) &nbsp;&nbsp;&nbsp; Nasabah dapat mengakhiri Perjanjian ini hanya jika Nasabah sudah tidak lagi memiliki posisi terbuka 
			dan tidak ada kewajiban Nasabah yang diemban oleh atau terhutang kepada Pialang Berjangka.</td>
			<td><center>$s18_2</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(3) &nbsp;&nbsp;&nbsp; Pengakhiran tidak membebaskan salah satu Pihak dari tanggung jawab atau kewajiban yang terjadi sebelum pemberitahuan tersebut.</td>
			<td><center>$s18_3</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>19</Strong></td>	
			<td><Strong>Berakhirnya Perjanjian</Strong></td>
		</tr>
		<tr>
		<td></td>		
		<td>Perjanjian dapat berakhir dalam hal Nasabah</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(1) &nbsp;&nbsp;&nbsp; Dinyatakan pailit, memiliki hutang yang sangat besar, 
			dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau meninggal;</td>
			<td><center>$s19_1</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(2) &nbsp;&nbsp;&nbsp; Tidak dapat memenuhi atau mematuhi perjanjian ini dan/atau melakukan pelanggaran terhadapnya;</td>
			<td><center>$s19_2</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(3) &nbsp;&nbsp;&nbsp; Berkaitan dengan angka (1) dan (2) tersebut di atas, Pialang Berjangka dapat: <br/><br/>
	i). meneruskan atau menutup posisi Nasabah tersebut setelah mempertimbangkannya secara cermat dan jujur; dan <br/><br/>
	ii). menolak perintah dari Nasabah atau kuasanya.
	</td>
			<td><center>$s19_3</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(4) &nbsp;&nbsp;&nbsp; Pengakhiran Perjanjian sebagaimana dimaksud dengan angka (1) dan (2) tersebut di atas tidak melepaskan kewajiban dari Para Pihak yang berhubungan dengan penerimaan atau kewajiban pembayaran 
			atau pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian. </td>
			<td><center>$s19_4</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>20</Strong></td>	
			<td><Strong>Force Majeur</Strong></td>
		</tr>
		
		<tr>
		<td></td>	
		<td>Tidak ada satupun pihak di dalam Perjanjian dapat diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab yang berada di luar kemampuannya atau kekuasaannya (force majeur), sepanjang pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya sebab itu. Yang dimaksud dengan Force Majeur dalam Perjanjian adalah peristiwa kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir), pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan perundang-undangan yang berlaku dan kondisi di bidang ekonomi, keuangan dan Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan,
			kliring dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.</td>
			<td><center>$s20</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>21</Strong></td>	
			<td><Strong>Perubahan atas Isian dalam Perjanjian Pemberian Amanat</Strong></td>
		</tr>
		
		<tr>
		<td></td>	
		<td>Perubahan atas isian dalam Perjanjian ini hanya dapat dilakukan atas persetujuan Para Pihak,
			atau Pialang Berjangka telah memberitahukan secara tertulis perubahan yang diinginkan,
			dan Nasabah tetap memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara tertulis atas usul perubahan tersebut.
			Tindakan Nasabah tersebut dianggap setuju atas usul perubahan tersebut.</td>
			<td><center>$s21</center>
			</td>
		</tr>
		
		<tr>
			<td><Strong>22</Strong></td>	
			<td><Strong>Penyelesaian Perselisihan</Strong></td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(1) &nbsp;&nbsp;&nbsp; Semua perselisihan dan perbedaan pendapat yang timbul dalam pelaksanaan Perjanjian ini
			wajib diselesaikan terlebih dahulu secara musyawarah untuk mencapai mufakat antara Para Pihak.</td>
			<td><center>$s22_1</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(2) &nbsp;&nbsp;&nbsp; Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, 
			Para Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka.</td>
			<td><center>$s22_2</center>
			</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(3) &nbsp;&nbsp;&nbsp; Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka (2), 
			maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui *): <br/><br/>
	&nbsp;- $s22_3melalui $lainnya</td>
		</tr>
		
		<tr>
			<td></td>	
			<td>(4) &nbsp;&nbsp;&nbsp; Kantor atau kantor cabang Pialang Berjangka terdekat dengan domisili Nasabah tempat penyelesaian dalam hal terjadi perselisihan. <br/>
	Daftar Kantor Kantor yang dipilih (salah satu) <br/><br/>
	&nbsp;- $s22_4</td>
		</tr>
		
		<tr>
			<td><Strong>23</Strong></td>	
			<td><Strong>Bahasa</Strong></td>
		</tr>
		
		<tr>
		<td></td>	
		<td>Perjanjian ini dibuat dalam Bahasa Indonesia. Demikian Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar, 
		sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun. <br/><br/>
	<Strong>�Saya telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum dalam perjanjian ini�.</Strong>
	</td>
			<td><center>$s23</center>
			</td>
		</tr>
		</table>
			<br/><br/>
			<table border='0' align='center' width='70%'>
		<tr>
			<td colspan='5'>Dengan mengisi kolom �YA� di bawah, saya menyatakan bahwa saya telah menerima <Strong> 
			�PERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK DERIVATIF SISTEM PERDAGANGAN ALTERNATIF�</Strong> ,mengerti dan menyetujui isinya.</td>
		</tr>
		
		<tr>
		<td width='231'>Pernyataan Menerima / Tidak</td>
		<td width='3'>:</td> 		
		<td width='836'>
		$menerima</td>
		</tr>
		<tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>$tanggal
	</td>
		</tr>
		</table><br><br><br><br><br><hr><br><br><br><br><br>
	";}
	
	//Page 8
	$page8=$_POST['page1'];
	$_SESSION['page1'] = $page8;
	
	//page 8_1
			if($_SESSION['page1'] == 'IDR_50.000.000_Kontrak_Berjangka_Emas GOL,_GOL100,_GOL250')
			{
	$email = $_POST['email'];
	$perintah8_1 = mysql_query("SELECT * FROM formulir8_3 where email = '$email'");
	$row8_1 = mysql_fetch_array($perintah8_1);
	$menerima = $row8_1[0];
	$tanggal = $row8_1[1];
	echo "<p align='right'>Lampiran 2 Peraturan Kepala Badan  Pengawas <br />
	  Perdagangan Berjangka Komoditi <br />
	  Nomor: 107/BAPPEBTI/PER/11/2013 </p><br />
	<h3 align='center'><b>Formulir: 107.PBK.06<br />
	   Peraturan Perdagangan  (Trading Rules)<br />
	   Kontrak Berjangka Emas (GOL.  GOL250, GOL100)</b><br /></h3>
	<ol type='A'>
	<li><h4><b>Spesifikasi Kontrak</b></h4>
	<table align='center' width='70%%' border='0' >
	  <tr>
		<td width='18%' align='center' valign='top'>&nbsp;</td>
		<td width='30%' align='center' valign='top'><strong>Kontrak 1Kg</strong></td>
		<td width='30%' align='center' valign='top'><strong>Kontrak 100 Gram</strong></td>
		<td width='22%' align='center' valign='top'><strong>Kontrak 100 Gram</strong></td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>Kode  Kontrak</td>
		<td align='center' valign='top'>GOL</td>
		<td align='center' valign='top'>GOL 250 </td>
		<td align='center' valign='top'>GOL 100 </td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>Dasar  Kontrak</td>
		<td align='center' valign='top'>1  kg Emas dengan  nomor seri dan stempel dari refineri yang diakui LBMA.</td>
		<td align='center' valign='top'>250  g  Emas dengan  nomor seri dan stempel dari refineri yang diakui LBMA.</td>
		<td align='center' valign='top'>100g Emas dengan nomor seri dan stempel dari refineri yang diakui LBMA.</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>Satuan  Kontrak</td>
		<td align='center' valign='top'>1  kg (1000 gram)</td>
		<td align='center' valign='top'>250  gram</td>
		<td align='center' valign='top'>100 gram </td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>Satuan  Penyerahan</td>
		<td align='center' valign='top'>5  Kg (5 Lot @ 1000 gram)</td>
		<td align='center' valign='top'>1 kg (4  Lot @  250  gram) </td>
		<td align='center' valign='top'>1 kg (10  Lot @  100 gram) </td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>Posisi  Wajib Lapor</td>
		<td align='center' valign='top'>150 Lot</td>
		<td align='center' valign='top'>600 Lot</td>
		<td align='center' valign='top'>1.500 Lot</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>Batas  Posisi Spekulatif</td>
		<td align='center' valign='top'>500 Lot</td>
		<td align='center' valign='top'>2000 Lot</td>
		<td align='center' valign='top'>5.000 Lot</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>Perubahan  Harga Minimum (Tik)</td>
		<td align='center' valign='top'>
		  Rp 50,-/gram (termasuk    PPN)<br /><br />Rp 50.000,-/lot (termasuk  PPN)     </td>
		<td align='center' valign='top'>Rp 50,-/gram (termasuk    PPN)<br /><br />  Rp 12.500,-/gram (termasuk  PPN)    </td>
		<td align='center' valign='top'>Rp 50,-/gram (termasuk PPN)<br /><br />
	Rp 5.000,-/gram (termasuk PPN)</td>
	  </tr>
	  <tr>
		<td align='center' valign='top'>Batas Perubahan Harga</td>
		<td align='center' valign='top'>Rp 5000,- per gram diatas  atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
		<td align='center' valign='top'>Rp 5000,- per gram diatas  atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
		<td align='center' valign='top'>Rp 10.000,-  per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
	  </tr>
	</table>
	</li>
	<li><h4><b>Margin</b></h4>
	<p>Nasabah harus  menempatkan sejumlah dana (<em>Margin</em>)  pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin  pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah  berdasarkan bukti setoran bank, form penyetoran dana dan form penarikan dana  yang diterima. Dana Nasabah bisa juga bertambah/berkurang bila terjadi laba/rugi  pada transaksi di dalam Rekening Nasabah.</p>
	<ol type='a'>
	  <li><strong>Margin  Awal Pembukaan Rekening</strong>
	<p>Dana minimum yang wajib disetor oleh Nasabah untuk membuka  Rekening (Account) sebesar <em>Rp 50.000.000</em>,-</p></li>
	  <li><strong>Margin  Requirement/Initial Margin</strong>
	<p>Margin yang diberlakukan  per-lot adalah</p>
	  <table width='70%' border='0' align='center' >
		<tr>
		  <td align='center'>Initial Margin</td>
		  <td align='center'>Kontrak 1 Kg (1000 gram)</td>
		  <td align='center'>Kontrak 250 gram</td>
		  <td align='center'>Kontrak 100 gram</td>
		</tr>
		<tr>
		  <td align='center'>Daytrade</td>
		  <td align='center'>Rp.10.000.000,-</td>
		  <td align='center'>Rp.2.500.000,-</td>
		  <td align='center'>Rp. 1.000.000,-</td>
		</tr>
	  </table></li></ol>
	  </li>
	<li><h4>Commission (Komisi)</h4>
	<p>Komisi dibebankan kepada Nasabah setiap kali transaksi per-lot (settled) (lihat table dibawah ini)</p>
	<table width='70%' border='0' align='center'>
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
	</table>
	<table width='70%' border='0' align='center' >
	  <tr>
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
	</li>
	<li><h4>Jam Perdagangan</h4> 
	Jam Perdagangan sesuai dengan ketentuan berikut :<br /><br />
	<table width='70%' border='0' align='center' >
	  <tr>
		<td>Hari & Jam Perdagangan</td>
		<td>Setiap hari perdagangan<br />
	Pukul 09.30 � 17.30 WIB</td>
	  </tr>
	  <tr>
		<td>Pasca Penutupan</td>
		<td><ul type='disc'><li>Sesi Pasca Penutupan dilaksanakan setiap hari perdagangan  yaitu mulai pukul 17.45 WIB sampai dengan 18.00 WIB.</li><br />
		  � <li>Amanat beli dan jual pada saat Pasca  Penutupan yang dimasukkan kedalam JAFeTS adalah pada Harga Penyelesaian/Harga  Settlement hari itu.</li></ul></td>
	  </tr>
	  <tr>
		<td>Hari Perdagangan Terakhir</td>
		<td>Perdagangan untuk suatu Bulan Kontrak, berakhir pada  akhir sesi Pasca Penutupan pada hari perdagangan ketiga sebelum hari kerja  terakhir bulan yang bersangkutan. Apabila hari perdagangan ketiga sebelum hari kerja  terakhir tersebut bukan merupakan hari perdagangan, maka hari perdagangan  sebelumnya menjadi hari perdagangan terakhir.</td>
	  </tr>
	</table>
	</li>
	<li><h4>Bulan Kontrak</h4><table width='70%' border='0' align='center' >
	  <tr>
		<td>Bulan Kontrak</td>
		<td>3 (tiga) bulan  berturut-turut, sehingga setiap hari perdagangan terdapat tiga Bulan Kontrak</td>
	  </tr>
	</table>
	</li>
	<li><h4>Penambahan Margin</h4>
	<p>Nasabah yang  memiliki posisi terbuka (baik posisi <strong>Beli</strong> maupun <strong>Jual</strong>) pada bulan berjalan di  tanggal 15, maka nasabah wajib melakukan penambahan margin sesuai dengan 1/3  (sepertiga) dari nilai kontrak posisi terbuka yang dimilikinya.</p>
	Apabila  Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka  tersebut dapat dilakukan <strong><em>Force</em> <em>Liquidation</em></strong>.<br />
	</li>
	<li><h4>Akhir Masa Kontrak</h4>
	<ol type='a'><li>Nasabah yang masih memiliki posisi terbuka Jual hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menyerahkan fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (Untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (Untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan menerima dana senilai kontrak.<br /><br />
		Apabila Nasabah gagal menyerahkan fisik kontrak berupa Emas, maka akan dilakukan Cash Settlement sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.<br /><br /></li>
	<li>Nasabah yang masih memiliki posisi terbuka Beli hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menerima fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan membayar atau melunasi dana senilai kontrak.<br /><br />
		Apabila Nasabah gagal menyediakan dana sesuai dengan nilai kontrak, maka akan dilakukan Cash Settlement sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.</li>
	  </ol>
	</li>
	<li><h4>Delivery Fee</h4>
	<p>Apabila terjadi  penyerahan fisik atas kontrak yang ditransaksikan maka Nasabah dibebankan biaya  administrasi. (<em>Delivery Fee</em>) (lihat tabel di  bawah ini) </p>
	<table width='70%' border='0' align='center' cellpadding='2' cellspacing='0' >
	  <tr>
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
		<li>Apabila Nasabah tidak menambah kekurangan margin (memenuhi call margin), maka perusahaan berhak melikuidasi posisi terbuka (open) tersebut pada saat terjadi kondisi margin level menyentuh/mencapai level = 50% dari Margin Requirement.</li><br />
	<li>Apabila Nasabah tidak mampu menyediakan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak posisi terbuka yang dimilikinya dana yang dimaksud, maka perusahaan berhak melikuidasi posisi terbuka (open) tersebut.</li>
	  </ul><br />
	Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak Berjangka tersebut.
	</li>
	<li><h4>Over Trading</h4>Perusahaan akan menolak order Nasabah apabila Nasabah melakukan transaksi yang melebihi dana atau margin yang ada.</li>
	<li><h4>Price (Harga)</h4>Harga masing-masing kontrak sesuai dengan harga yang terjadi di Bursa Berjangka Jakarta dengan sistem JAFeTS3.</li>
	<li><h4>Market Order</h4>Adalah amanat untuk membeli/menjual kontrak berjangka pada harga pasar di Bursa Berjangka Jakarta.</li>
	<li><h4>Limit Order/Stop Order</h4>
	<ul type='disc'><li>Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.</li>
	<li>Nasabah dapat menempatkan amanat Limit Order mulai pukul 08.30 WIB atau 1 (satu) jam lebih awal sebelum jam perdagangan dibuka.</li></ul><br />
	Pemasangan Stop Order untuk membatasi Rugi (stop loss) mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan untuk melikuidasi Kontrak Berjangka.</li>
	<li><h4>Sistem Order</h4>Nasabah dapat menyampaikan amanatnya dengan cara menghubungi dealer PT. Esandar Arthamas Berjangka melalui telepon setiap hari perdagangan dan dealer akan meneruskan amanat Nasabah tersebut ke Bursa Berjangka Jakarta melalui sistem JAFeTS 3.</li>
	<li><h4>Margin In & Out</h4><ul type='square'><li>Nasabah dapat melakukan transaksi setelah dana good fund</li><br />
	<li>Untuk penarikan margin dapat dilakukan dengan mengajukan permohonan setiap hari kerja Senin � Jumat sampai  dengan pukul 12.00 WIB dan tidak dapat diwakilkan.</li></ul>
	</li>
	<li><h4>Kerahasiaan</h4>Setiap Account memiliki phone password yang sifatnya <em><strong><u>SANGAT PRIBADI</u></strong></em> dan <em><strong><u>RAHASIA</u></strong></em>. Phone password digunakan setiap kali Nasabah ingin melakukan transaksi. Jika terjadi perbedaan phone password yang di sebutkan Nasabah, Pihak perusahaan berhak menolak untuk melakukan transaksi.<br /><br />
	<strong>Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor Account dan phone password akibat kelalaian Nasabah sendiri.</strong><br /><br /><table width='70%' border='0' align='center' cellpadding='3' cellspacing='0' >
	  <tr>
		<td colspan='3' align='center'>Dengan mengisi kolom &quot;Ya&quot; di bawah ini, saya  menyatakan bahwa saya telah membaca tentang <strong>PERATURAN PERDAGANGAN (TRADING  RULES)</strong>, mengerti dan menerima ketentuan dalam bertransaksi.</td>
		</tr>
	  <tr>
		<td width='26%'>Pernyataan menerima / tidak</td>
		<td width='2%'>:</td>
		<td width='72%'>
		  $menerima </td>
	  </tr>
	  <tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>$tanggal
	</td>
	 </tr>
	</table>
	</li>
	</ol><br><br><br><br><br><hr><br><br><br><br><br>
	</body>
	</html>";
			}
			
	//Page 8_2
			else if($_SESSION['page1'] == 'IDR_50.000.000_Kontrak_Berjangka_Kakao')
			{
	$email = $_POST['email'];
	$perintah8_2 = mysql_query("SELECT * FROM formulir8_4 where email = '$email'");
	$row8_2 = mysql_fetch_array($perintah8_2);
	$menerima = $row8_2[0];
	$tanggal = $row8_2[1];
	echo "<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas<br> 
	Perdagangan Berjangka Komoditi<br> 
	Nomor: 107/BAPPEBTI/PER/11/2013<br></p>
	
	<h3 align='center'>Formulir: 107.PBK.06<br>
	Peraturan Perdagangan (Trading Rules)<br>
	Kontrak Berjangka Kakao<br></h3>
	
	<p align='left'><b>A. Spesifikasi Kontrak</b></p>
		<table border='1' width='70%' cellpadding='5' cellspacing='3' align='center'>
			<tr>
				<td><b>Kode Kontrak</b></td>
				<td>CC5</td>
			</tr>
			<tr>
				<td><b>Satuan Kontrak</b></td>
				<td>5 metrik ton (5.000 kg)</td>
			</tr>
			<tr>
				<td><b>Bulan Kontrak</b></td>
				<td>Maret, Mei, Juli, September dan Desember</td>
			</tr>
			<tr>
				<td><b>Hari & Jam Perdagangan</b></td>
				<td>Hari perdagangan adalah hari kerja Bursa dari Senin-Jumat<br>
					Sesi 1 : 08.30 � 12.30 WIB<br>
					Sesi 2 : 16.00 � 02.00 WIB<br></td>
			</tr>
			<tr>
				<td><b>Tukar Fisik dengan Berjangka</b></td>
				<td>Pihak-pihak yang melakukan transaksi jual/beli kakao diluar bursa dapat mendaftarkannya ke Bursa untuk ditukar dengan transaksi berjangka bagi kedua belah pihak.</td>
			</tr>
			<tr>
				<td><b>Hari Perdagangan Terakhir</b></td>
				<td>11 hari kerja sebelum hari kerja terakhir dari bulan penyerahan. Apabila hari tersebut bukan hari perdagangan, maka hari perdagangan sebelumnya merupakan hari perdagangan terakhir.</td>
			</tr>
			<tr>
				<td><b>Harga</b></td>
				<td>Rupiah per kilogram</td>
			</tr>
			<tr>
				<td><b>Perubahan Harga Minimum (Tik)</b></td>
				<td>Rp 10,-/kg<br>
					Rp 50.000,-/lot<br></td>
			</tr>
			<tr>
				<td><b>Waktu Pemberitahuan Penyerahan</b></td>
				<td>Pihak yang mempunyai posisi jual pada Bulan Berjalan, dapat melakukan Pemberitahuan Penyerahan dalam waktu 10 (sepuluh) hari kerja sebelum hari kerja pertama dalam Bulan Berjalan.</td>
			</tr>
			<tr>
				<td><b>Batas Perubahan Harga</b></td>
				<td>Rp. 1.000,- per kilogram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya. Batas perubahan harga ini tidak berlaku untuk Bulan Berjalan dan Bulan Terdekat, kalau Bulan Berjalan sudah tidak diperdagangkan lagi.</td>
			</tr>
			<tr>
				<td><b>Mutu</b></td>
				<td>Mutu Fermentasi sesuai mutu yang ditentukan dalam Standard Nasional Indonesia (SNI) No. 2323-2008 yang dikeluarkan oleh Badan Standarisasi Nasional (BSN)</td>
			</tr>
			<tr>
				<td><b>Harga Penyelesaian</b></td>
				<td>Harga Penyelesaian ditentukan pada akhir sesi perdagangan berdasarkan harga rata-rata 10 transaksi dalam 5 menit dan/atau 30 menit dan/atau 1 hari terakhir atau menggunakan harga penutupan sebelumya jika dalam 1 hari tidak terjadi transaksi.</td>
			</tr>
			<tr>
				<td><b>Tempat Penyerahan</b></td>
				<td>Di Gudang Penyimpanan Terdaftar di Makasar, Palu dan Lampung, Pilihan tempat penyerahan berada pada penjual</td>
			</tr>
			<tr>
				<td><b>Posisi Wajib Lapor</b></td>
				<td>150 lot</td>
			</tr>
			<tr>
				<td><b>Batas Posisi</b></td>
				<td>500 lot</td>
			</tr>
		</table>
		
	<p align='left'><b>B. Margin</b></p>	
	Nasabah harus menempatkan sejumlah dana (Margin) pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah berdasarkan bukti setoran bank, form penyetoran dana dan form penarikan dana yang diterima. Dana Nasabah bisa juga bertambah/berkurang bila terjadi laba/rugi pada transaksi di dalam Rekening Nasabah.
	<ol type='a'><li><b>Margin Awal Pembukaan Rekening</b><br>
	Dana minimum yang wajib disetor oleh Nasabah untuk membuka Rekening (Account) sebesar Rp 50.000.000,-</li><br>
	<li><b>Margin Requirement/Initial Margin</b><br>
	Margin yang diberlakukan per-lot adalah Rp 7.500.000,-</li></ol><br>
	
	<p align='left'><b>C. Commission (Komisi)</b></p>
	Komisi dibebankan kepada Nasabah setiap kali transaksi per-lot (settled) , sebesar  
	<b>Rp 500.000,-</b>
	
	<p align='left'><b>D. Margin In & Out</b></p>
	<ul><li>Nasabah dapat melakukan transaksi setelah dana good fund.</li>
	<li>Untuk penarikan margin dapat dilakukan dengan mengajukan permohonan  setiap hari kerja  Senin � Jumat sampai  dengan pukul 12.00 WIB dengan menandatangani slip penarikan dana terlebih dahulu.</li></ul>
	
	<p align='left'><b>E. Price (Harga)</b></p>
	Harga masing-masing kontrak sesuai dengan harga yang terjadi di Bursa Berjangka Jakarta dengan sistem JAFeTS 3.
	
	<p align='left'><b>F. Sistem Order</b></p>
	Nasabah dapat menyampaikan amanatnya dengan cara menghubungi dealer PT. Esandar Arthamas Berjangka melalui telepon setiap hari perdagangan dan dealer akan meneruskan amanat Nasabah tersebut ke Bursa Berjangka Jakarta melalui sistem JAFeTS 3.
	
	<p align='left'><b>G. Market Order</b></p>
	Adalah amanat untuk membeli/menjual kontrak berjangka pada harga pasar di Bursa Berjangka Jakarta.
	
	<p align='left'><b>H. Limit Order/Stop Order</b></p>
	<ul><li>Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.</li>
	<li>Nasabah dapat menempatkan amanat Limit Order di dalam waktu jam perdagangan berlangsung.</li></ul>
	Pemasangan Stop Order untuk membatasi Rugi <i>(stop loss)</i>  mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Berjangka.
	
	<p align='left'><b>I. Over Trading</b></p>
	Perusahaan akan menolak order Nasabah apabila Nasabah melakukan transaksi yang melebihi dana atau margin yang ada.
	
	<p align='left'><b>J. Call Margin</b></p>
	Call margin akan dilakukan apabila floating loss dari posisi transaksi Nasabah yang masih terbuka/open menyentuh/mencapai range (50% &lt; call margin &lt; 80%) terhadap Equity yang ada. Untuk mempertahankan posisi Nasabah yang terbuka maka setiap Nasabah diharapkan untuk segera menambah kekurangan margin.
	
	<p align='left'><b>K. Force Liquidation</b></p>
	Apabila Nasabah tidak menambah kekurangan margin (memenuhi call margin), maka  perusahaan berhak melikuidasi posisi terbuka tersebut pada saat terjadi kondisi floating loss menyentuh/mencapai level = 50% dari Margin Requirement.<br> 
	Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak Berjangka tersebut.
	
	<p align='left'><b>L. Akhir Masa Kontrak</b></p>
	<ul><li>Apabila Nasabah masih memiliki posisi terbuka <b>Jual</b> hingga jatuh tempo kontrak bulan berjalan maka Nasabah wajib menyerahkan fisik kontrak berupa Kakao dengan standar Mutu senilai 5.000 Kg/lot dan menerima dana senilai kontrak.</li>
	<li>Apabila Nasabah masih memiliki posisi terbuka <b>Beli</b> hingga jatuh tempo kontrak bulan berjalan maka Nasabah menerima fisik kontrak berupa Kakao dengan standar Mutu senilai 5.000 Kg/lot dan membayar atau melunasi dana senilai kontrak.</li></ul>
	
	<p align='left'><b>M. Kerahasiaan</b></p>
	Setiap Account memiliki phone password yang sifatnya <b>SANGAT PRIBADI</b> dan <b>RAHASIA.</b> Phone password digunakan setiap kali Nasabah ingin melakukan transaksi. Jika terjadi perbedaan phone password yang di sebutkan Nasabah, dealer berhak menolak untuk melakukan transaksi.<br><br>
	
	<b>Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor Account dan phone password akibat kelalaian Nasabah sendiri.</b><br><br>
	
	<table width='70%' border='1' align='center'>
		<tr>
			<td align='center' colspan='5'>Dengan mengisi kolom &quot;Ya&quot; di bawah ini, saya menyatakan bahwa saya telah membaca tentang <b>PERATURAN PERDAGANGAN (TRADING RULES)</b>, mengerti dan menerima ketentuan dalam bertransaksi.</td>
		</tr>
		<tr>
			<td width='38%'>Pernyataan menerima / tidak</td>
			<td width='2%'>:</td>
			<td width='60%'>$menerima</td>
		</tr>
		<tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>$tanggal
	</td>
	 </tr>
	</table>
	<br><br><br><br><br><hr><br><br><br><br><br>
	</body>
	</html>
	";
	}
	
	//Page 8_3
			else if($_SESSION['page1'] == "IDR_5.000.000_Kontrak_Derivative_Forex_dan_Loco_London" || $_SESSION['page1'] == "USD_500_Kontrak_Deritvative_Forex_dan_Loco_London"){
	
	$email = $_POST['email'];
	$perintah8_3 = mysql_query("SELECT * FROM formulir8_2 where email = '$email'");
	$row8_3 = mysql_fetch_array($perintah8_3);
	$menerima = $row8_3[0];
	$tanggal = $row8_3[1];
	echo "
	<p align='right'><br/>Lampiran 2 Peraturan Kepala Badan Pengawas<br/> 
	Perdagangan Berjangka Komoditi <br/>
	Nomor: 107/BAPPEBTI/PER/11/2013 <br/>
	</p>
	<h3 align='center'>Formulir: 107.PBK.06<br/>
	Peraturan Perdagangan (Trading Rules)<br/>
	Kontrak Derivative Forex dan Loco London
	</h3><br/>
	<p><b><u>GENERAL RULE</u></b></p>
	<br/>
	<table width='70%' align='center'>
	<tr>
	<td width='172'>Initial Margin</td>
	<td width='3'>:</td>
	<td width='243'>$ 500/New Account</td>
	</tr>
	<tr>
	<td>Fixed Rate</td>
	<td>:</td>
	<td>Banknote | Rp. 10.000</td>
	</tr>
	<tr>
	<td>Lot mulai</td>
	<td>:</td>
	<td>0.1 lot</td>
	</tr>
	<tr>
	<td>Commission Charge</td>
	<td>:</td>
	<td>$ 5</td>
	</tr>
	<tr>
	<td height='108' colspan='5'><b>TRADING TIME </b></td>
	</tr>
	</table>
	<table width='70%' border='0' align='center'>
	<tr align='center'>
	<td>&nbsp;</td>
	<td>Winter Time</td>
	<td>Summer Time</td>
	</tr>
	<tr align='center'>
	<td><b>MAJOR & CROSS RATE</b></td>
	<td>Senin buka pada jam 06.05 dan<br/>Sabtu tutup pada jam 04.30</td>
	<td>Senin buka pada jam 05.05 dan<br/>Sabtu tutup pada jam 03.30</td>
	</tr>
	<tr align='center'>
	<td><b>XAUUSD</b></td>
	<td>Senin buka pada jam 06.05 dan<br/>Sabtu tutup pada jam 04.00</td>
	<td>Senin buka pada jam 05.05 dan<br/>Sabtu tutup pada jam 03.00</td>
	</tr>
	</table>
	<br/><ul><li>Waktu istirahat pada time trading xauusd setiap hari nya jam 05.00 WIB sampai jam 06.00<br/>WIB (pada musim dingin).
	</li></ul><br/>
	<p style='font-size:18px'><b>CONTRACT SIZE | SPREAD | TICK SIZE | MAX. VOLUME</b></p>
	<table width='70%' border='0' align='center'>
	<tr align='center'>
	<td width='108' height='38'>&nbsp;</td>
	<td width='133'><b>CONTRACT SIZE</b></td>
	<td width='91'><b>SPREAD</b></td>
	<td width='86'><b>TICK SIZE</b></td>
	<td width='111'><b>MIN VOLUME</b></td>
	</tr>
	<tr align='center'>
	<td><b>MAJORS</b></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	<tr align='center'>
	<td>EURUSD<br/>
	USDJPY<br/>
	GBPUSD<br/>
	USDCHF<br/>
	AUDUSD
	</td>
	<td>100 000<br/>
	100 000<br/>
	100 000<br/>
	100 000<br/>
	100 000
	</td>
	<td>0.0003<br/>
	0.03<br/>
	0.0003<br/>
	0.0003<br/>
	0.0003
	</td>
	<td>0.0001<br/>
	0.01<br/>
	0.0001<br/>
	0.0001<br/>
	0.0001
	</td>
	<td>0.1<br/>
	0.1<br/>
	0.1<br/>
	0.1<br/>
	0.1
	</td>
	</tr>
	<tr align='center'>
	<td><b>CROSS RATE<br/>/ METAL</b></td>
	<td><b>CONTRACT SIZE</b></td>
	<td><b>MINIMUM<br/>SPREAD</b></td>
	<td><b>TICK SIZE</b></td>
	<td><b>MIN VOLUME</b></td>
	</tr>
	<tr align='center'>
	<td>EURJPY<br/>
	EURGBP<br/>
	GBPJPY<br/>
	CHFJPY<br/>
	AUDJPY<br/>
	XAUUSD</td>
	<td>100 000<br/>
	100 000<br/>
	100 000<br/>
	100 000<br/>
	100 000<br/>
	100</td>
	<td>0.07<br/>
	0.0004<br/>
	0.07<br/>
	0.07<br/>
	0.04<br/>
	0.5</td>
	<td>0.01<br/>
	0.0001<br/>
	0.01<br/>
	0.01<br/>
	0.01<br/>
	0.05</td>
	<td>0.1<br/>
	0.1<br/>
	0.1<br/>
	0.1<br/>
	0.1<br/>
	0.1</td>
	</tr>
	</table>
	<br/><ul><li>Dealing Quote (DQ) menggunakan telepon akan dikenakan tambahan 3 point untuk Majors<br/>
	dan Cross rate dari tabel di atas. Ketentuan ini tidak berlaku bila kondisi server sedang<br/>
	mengalami gangguan teknis (down).</li></ul>
	<br/><p style='font-size:18px'><b>MARGIN REQUIREMENT</b></p>
	<table width='70%' border='0' align='center'>
	<tr align='center'>
	<td width='176'>&nbsp;</td>
	<td width='87'><b>WEEKDAY</b></td>
	<td width='95'><b>WEEKEND</b></td>
	<td width='89'><b>HEDGING</b></td>
	</tr>
	<tr align='center'>
	<td><b>MAJORS</b></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	<tr align='center'>
	<td>EURUSD<br/>
	USDJPY<br/>
	GBPUSD<br/>
	USDCHF<br/>
	AUDUSD
	</td>
	<td>100<br/>
	100<br/>
	100<br/>
	100<br/>
	100
	</td>
	<td>100<br/>
	100<br/>
	100<br/>
	100<br/>
	100
	</td>
	<td>20<br/>
	20<br/>
	20<br/>
	20<br/>
	20
	</td>
	</tr>
	<tr align='center'>
	<td><b>CROSS RATE / METAL</b></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	<tr align='center'>
	<td>EURJPY<br/>
	EURGBP<br/>
	GBPJPY<br/>
	CHFJPY<br/>
	AUDJPY<br/>
	XAUUSD
	</td>
	<td>100<br/>
	150<br/>
	100<br/>
	100<br/>
	100<br/>
	100
	</td>
	<td>100<br/>
	150<br/>
	100<br/>
	100<br/>
	100<br/>
	100
	</td>
	<td>20<br/>
	30<br/>
	20<br/>
	20<br/>
	20<br/>
	20
	</td>
	</tr>
	</table>
	<p style='font-size:18px'><b>MARGIN IN & MARGIN OUT</b></p>
	<ul>
	<li>~ Margin In dengan menggunakan Cek Tunai/Giro diterima setiap saat dan berlaku setelah<br/>
	<b>Good Fund.</b></li>
	<li>~ Margin In secara tunai baik dengan mata uang IDR atau US Dollar diterima setiap
	<br/>saat selama hari kerja  Senin s/d Jumat.</li>
	<li>~ Pengajuan Withdrawal/Margin Out diterima setiap hari Senin s/d Jumat pukul 09.00 - 12.00<br/>
	WIB dan tidak bisa diwakilkan.
	</li>
	</ul>
	<p><b>PENDING ORDER RULE</b><br/>
	<b style='font-size:14px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PENDING ORDER CONFIRMATION</b></p>
	<ul type='a'>
	<li><b>~ Pada Saat Market Normal</b></li>
	Konfirmasi Pending Order dianggap &quot;DONE&quot; bila harga yang diminta/ditempatkan sesuai<br/>
	dengan harga yang tampil pada screen Esandar Trader 4.
	<li><b>~ Pada High dan Low</b></li>
	High dan Low yang tampil pada sistem Esandar Trader 4 berdasarkan harga BID <br/>
	Konfirmasi Limit Order Sell berdasarkan BID<br/>
	Konfirmasi Limit Order Buy berdasarkan BID+Spread
	<li><b>~ Pada saat market HECTIC</b></li>
	Spread tidak terbatas, sehingga aturan point a dan b tidak berlaku.
	</ul>
	<p><b style='font-size:14px'>LEVEL OF PENDING ORDER</b><br/>
	Harga yang diminta/ditempatkan oleh Nasabah harus berjarak minimal <b>15 (lima belas) point</b><br/>
	dari harga running.</p>
	<p><b style='font-size:18px'>EXPIRATION OF PENDING ORDER</b><br/>
	<b>Pending order hanya akan berlaku sampai dengan Closing Market hari Jumat<br/>
	(GTF= Good Till Friday).</b>
	</p>
	<p>Apabila kesalahan terjadi pada sistem Esandar Trader 4, maka konfirmasi pending order<br/>
	tergantung keputusan yang diberikan oleh Settlement pusat PT Esandar Arthamas Berjangka Jakarta.</p>
	<p><b style='font-size:20px'>FORCE LIQUIDATION</b><br/>
	<ul type='a'>
	<li><b>Equity mencapai level 10%.</b></li>
	Apabila Equity account Nasabah mencapai level 10% atau dibawahnya dari Margin<br/>
	Requirement / Contract Margin maka tindakan force liquidation akan dilakukan.
	<li><b>Short Margin untuk posisi overnight.</b></li>
	Semua posisi yang masih terbuka pada saat market close hari Jum�at dengan margin yang<br/>
	tidak cukup (short margin) akan dilikuidasi dengan harga closing yang mengacu pada<br/>
	harga closing Esandar Trader 4.
	</ul>
	</p>
	<p><b style='font-size:20px'>ADDITIONAL INFORMATION</b><br/>
	<b style='font-size:14px'>FORMULA PROFIT LOSS</b>
	</p>
	<table width='70%' align='center'>
	<tr>
	<ul>
	<li><b>MAJORS</b></li></ul>
	<td width='768' height='38'>
	<center><img border='0' src='http://localhost/hif_co_id/hif.co.id/form/image/major.PNG'  width='700' height='400'></center>
	</tr>
	</table>
	<br/><p><b>INTEREST RATE / SWAP</b><br/>
	Interest Rate akan mempengaruhi equity account yang mempunyai transaksi terbuka (Over<br/>
	Night). Besarnya berbeda-beda terhadap masing-masing currency maupun posisi transaksi.<br/>
	Interest Rate tergantung pada counter party atau principal.
	</p>
	<table width='70%' align='center'>
	<tr>
	<td width='534'><center><img border='0' src='http://localhost/hif_co_id/hif.co.id/form/image/inter.PNG'  width='700' height='400'></center>
	</tr>
	<tr>
	<td height='59'>
	<b><center>&nbsp;&nbsp;
	* Pada hari Jumat-Senin dikenakan charge 1 hari, sedangkan dari Rabu-Kamis<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dikenakan charge 3 hari.</center></b>
	</td>
	</tr>
	</table>
	<br/>
	<table width='70%' align='center'>
	<tr>
	<td><b>KERAHASIAAN</b></td>
	</tr>
	<tr>
	<td height='93'>
	Setiap account memiliki nomor login dan password yang sifatnya SANGAT PRIBADI  dan<br/>
	RAHASIA. Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan<br/>
	pertama WAJIB untuk segera merubah password standar tersebut dengan password yang diinginkan.
	</td>
	</tr>
	<tr>
	<td bgcolor='#CCCCCC'>
	Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor<br/> 
	login dan password akibat kelalaian Nasabah sendiri. 
	</td>
	</tr>
	<tr>
	<td height='21'><b>WRONG QUOTE</b></td>
	</tr>
	<tr>
	<td height='85'>
	Apabila terjadi Wrong Quote atau kesalahan harga pada screen Esandar Trader 4, maka order<br/>
	yang sudah tereksekusi pada harga Wrong Quote dinyatakan tidak berlaku dan akan di<br/>
	batalkan secara otomatis, tanpa adanya pemberitahuan terlebih dahulu.
	</td>
	</tr>
	<tr>
	<td height='21'><b>OTHER</b></td>
	</tr>
	<tr>
	<td height='143'>
	<ul type='disc'>
	<li>Pada saat market �Hectic�, maka selisih harga jual / beli tergantung pada market.<br/></li>
	<li>Waktu (Time) yang digunakan pada tampilan screen Esandar Trader 4 adalah GMT +2<br/></li>
	<li>Stop Order hanya berlaku untuk posisi yang masih terbuka, tidak diperkenankan<br/>
	memasang Stop Order (buy stop/sell stop) untuk posisi baru. Apabila ada Stop Order yg<br/>
	done, maka akan dikenakan sangsi OVER TRADE sebesar spread dan tetap dibebankan charge komisi.<br/></li>
	<li>Isi peraturan ini dapat berubah dengan pemberitahuan melalui mailbox Nasabah.</li><br/>
	</ul>
	</td>
	</tr>
	<tr>
	<td height='62'><b>Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor<br/>
	Account dan password akibat kelalaian Nasabah sendiri.</b></td>
	</tr>
	</table>
	<table width='70%' border='0' align='center'>
	<tr>
	<td align='center' colspan='5'>
	Dengan mengisi kolom &quot;Ya&quot; di bawah ini, saya menyatakan bahwa saya telah membaca tentang<br/>
	PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan<br/>
	dalam bertransaksi.
	</td>
	</tr>
	<tr>
	<td width='221'>Pernyataan menerima / tidak</td>
	<td width='3'>:</td>
	<td width='416'>
	$menerima</td>
	</tr>
	<tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>$tanggal
	</td>
	</tr>
	</table><br><br><br><br><br><hr><br><br><br><br><br>
	</body>
	</html>
	";}
			
	//Page 8_4		
		else if($_SESSION['page1'] == "IDR_5.000.000_Kontrak_Derivative_Stock_Indeks"){
	
	$email = $_POST['email'];
	$perintah8_4 = mysql_query("SELECT * FROM formulir8_5 where email = '$email'");
	$row8_4 = mysql_fetch_array($perintah8_4);
	$menerima = $row8_4[0];
	$tanggal = $row8_4[1];
	echo "<p align='right'>
	  Lampiran 2 Peraturan Kepala Badan  Pengawas <br/>
	  Perdagangan Berjangka Komoditi <br/>
	  Nomor: 107/BAPPEBTI/PER/11/2013 </p>
	<br/><h3 align='center'><b>Formulir: 107.PBK.06<br/>Peraturan Perdagangan  (Trading Rules)<br/>Kontrak Derivatives Stock Indeks IDR</b></h3><br/><br/>
	<p><strong>GENERAL RULE</strong></p>
	<hr><br/><br/>
	<table width='70%' align='center'>
	  <tr>
		<td width='37%' height='34' valign='middle'>Initial Margin&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
		<td width='2%'>:</td>
		<td width='61%'>Rp 5.000.000</td>
	  </tr>
	  <tr>
		<td height='34'>Fixed Rate</td>
		<td>:</td>
		<td>Rupiah</td>
	  </tr>
	  <tr>
		<td height='34'>Lot mulai</td>
		<td>:</td>
		<td>0.1 Lot</td>
	  </tr>
	  <tr>
		<td height='40'>Commission Charge</td>
		<td>:</td>
		<td>Rp 50.000/0.1 lot untuk  Kontrak Futures</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><p>Rp 50.000/0.1 lot untuk Kontrak Roll-over&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p></td>
	  </tr>
	</table><br/><br/>
	<table width='70%'align='center'>
	  <tr>
		<td colspan='4'><strong>TRADING TIME</strong></td>
	  </tr></table><br/>
	  <table width='100%' border='1' align='center' bordercolor='#000000'>
	  <tr>
		<td width='25%'>&nbsp;</td>
		<td width='25%' align='center'><strong>Sesi Pertama</strong></td>
		<td width='25%' align='center'><strong>Sesi Kedua</strong></td>
		<td width='25%' align='center'><strong>Sesi Ketiga</strong></td>
	  </tr>
	  <tr>
		<td><strong>INDEX JEPANG</strong></td>
		<td align='center'>06.45-13.25</td>
		<td align='center'>14.15-01.00</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><strong>INDEX HONGKONG</strong></td>
		<td align='center'>08.15-11.00</td>
		<td align='center'>12.00-15.15</td>
		<td align='center'>16:00-20:00</td>
	  </tr>
	  <tr>
		<td><strong>INDEX KOREA</strong></td>
		<td align='center'>07.00-13.05</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	</table>
	  <ul type='disc'>
		<li>~ Untuk melakukan transaksi melalui sistem  dapat dilakukan 5 menit setelah market open dan Nasabah dapat melakukan  transaksi dengan cara DQ ( Dealing Quote ) melalui telepon pada saat market  open.</li>
		<li>~ DQ menggunakan telepon akan di kenakan  spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama dan pada saat  kondisi server sedang mengalami gangguan teknis ( down ) </li>
	  </ul>
	<table width='70%'align='center'>
	  <tr>
		<td colspan='4'><p><strong>TRADING SYMBOLS</strong></p></td>
	  </tr>
	</table>
	<table width='70%' border='1' bordercolor='#000000' align='center'>
	  <tr>
		<td width='25%'>&nbsp;</td>
		<td width='25%' align='center'><strong>Futures Rupiah</strong></td>
		<td width='25%' align='center'><strong>Rollover Contracts</strong></td>
	  </tr>
	  <tr>
		<td><strong>INDEX JEPANG</strong></td>
		<td align='center'>JPJ30 ( Y ) ( M )</td>
		<td align='center'>JPK50</td>
	  </tr>
	  <tr>
		<td><strong>INDEX HONGKONG</strong></td>
		<td align='center'>HKJ50 ( Y ) ( M )</td>
		<td align='center'>HKK50</td>
	  </tr>
	  <tr>
		<td><strong>INDEX KOREA</strong></td>
		<td align='center'>KRJ35 ( Y ) ( M )</td>
		<td>&nbsp;</td>
	  </tr>
	</table><br/><br/>
	<strong>| CONTRACT SIZE |  SPREAD | TICK SIZE | MAX VOLUME | DAILY LIMIT |</strong>
	<table width='70%' border='1' bordercolor='#000000' align='center'>
	  <tr>
		<td width='19%' height='57'>&nbsp;</td>
		<td width='12%' align='center' valign='middle'><strong>Contract Size</strong></td>
		<td width='11%' align='center' valign='middle'><strong>Spread</strong></td>
		<td width='12%' align='center' valign='middle'><strong>Tick size</strong></td>
		<td width='16%' align='center' valign='middle'><strong>Min Volume</strong></td>
		<td width='30%' align='center' valign='middle'><strong>Daily limit</strong></td>
	  </tr>
	  <tr>
		<td><strong>INDEX JEPANG</strong></td>
		<td align='center' valign='middle'>30 000</td>
		<td align='center' valign='middle'>5</td>
		<td align='center' valign='middle'>5</td>
		<td align='center' valign='middle'>0.1</td>
		<td align='center' valign='middle'>300</td>
	  </tr>
	  <tr>
		<td><strong>INDEX JEPANG Rollover</strong></td>
		<td align='center' valign='middle'>50 000</td>
		<td align='center' valign='middle'>5</td>
		<td align='center' valign='middle'>5</td>
		<td align='center' valign='middle'>0.1</td>
		<td align='center' valign='middle'>300</td>
	  </tr>
	  <tr>
		<td><strong>INDEX HONGKONG</strong></td>
		<td align='center' valign='middle'>50 000</td>
		<td align='center' valign='middle'>5</td>
		<td align='center' valign='middle'>1</td>
		<td align='center' valign='middle'>0.1</td>
		<td align='center' valign='middle'>300</td>
	  </tr>
	  <tr>
		<td><strong>INDEX KOREA</strong></td>
		<td align='center' valign='middle'>35 000</td>
		<td align='center' valign='middle'>0.05</td>
		<td align='center' valign='middle'>0.05</td>
		<td align='center' valign='middle'>0.1</td>
		<td align='center' valign='middle'>500</td>
	  </tr>
	</table><br/><br/>
	<p><strong>Non Roll-over Contract.</strong></p>
	<p>Sebelum kontrak berakhir, Nasabah harus menutup  semua posisi nya. Tidak ada Roll-over secara otomatis. Apabila Nasabah tidak  menutup posisi nya pada masa kontrak berakhir maka sistem akan melikuidasi  secara otomatis dengan harga settlement kontrak tersebut +/- 5 point value.<br/></br></p>
	<p> <strong>Roll-over  Contract.</strong></p>
	<p>Roll-over secara otomatis hanya  dapat dilakukan pada kontrak dibawah ini :<br/>
		<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
	<ol>
	  <li><strong>A.) HKK50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; B.) JPK50</strong>
	  </li>
	</ol>
	<br/><hr><h3 align='left'><b>MARGIN RULE</b></h3><hr>
	
	<table width='70%'align='center'>
	  <tr>
		<td><p><strong>MARGIN REQUIREMENT</strong></p></td>
	  </tr>
	</table>
	<table width='70%' border='1' align='center' bordercolor='#000000'>
	  <tr>
		<td width='26%' height='31'>&nbsp;</td>
		<td width='19%' align='center' valign='top'><strong>Daily</strong></td>
		<td width='33%' align='center' valign='top'><strong>Overnight</strong></td>
		<td width='11%' align='center' valign='top'><strong>Hedging Daytrade</strong></td>
		<td width='11%' align='center' valign='top'><strong>Hedging Overnight</strong></td>
	  </tr>
	  <tr>
		<td><p><strong>INDEX FUTURES JEPANG</strong><br/>
		<strong>INDEX ROLLOVER JEPANG</strong></p></td>
		<td align='center' valign='middle'><strong>500.000</strong><br/>
		<strong>500.000</strong></td>
		<td align='center' valign='middle'><strong>1.600.000</strong><br/>
		<strong>1.600.000</strong></td>
		<td align='center' valign='middle'><strong>100.000</strong><br/>
		<strong>100.000</strong></td>
		<td align='center' valign='middle'><strong>320.000</strong><br/>
		<strong>320.000</strong></td>
	  </tr>
	  <tr>
		<td><p><strong>INDEX  FUTURES HONGKONG</strong><br/>
		<strong>INDEX ROLLOVER HONGKONG</strong></p></td>
		<td align='center' valign='middle'><strong>500.000</strong><br/>
		<strong>500.000</strong></td>
		<td align='center' valign='middle'><strong>1.600.000</strong><br/>
		<strong>1.600.000</strong></td>
		<td align='center' valign='middle'><strong>100.000</strong><br/>
		<strong>100.000</strong></td>
		<td align='center' valign='middle'><strong>320.000</strong><br/>
		  <strong>320.000</strong></td>
	  </tr>
	  <tr>
		<td><strong>INDEX KOREA</strong></td>
		<td align='center' valign='middle'><strong>500.000</strong></td>
		<td align='center' valign='middle'><strong>1.600.000</strong></td>
		<td align='center' valign='middle'><strong>100.000</strong>
		</td>
		<td align='center' valign='middle'><strong>320.000</strong></td>
	  </tr>
	</table><br/><br/>
	<p><strong>MARGIN IN &amp;  MARGIN OUT</strong></p>
	<ol type='a'>
	  <li>a. Margin  In dengan menggunakan Cek Tunai / Giro diterima setiap saat dan berlaku setelah <strong>Good Fund</strong>.<br/><br/></li>
	  <li>b. Margin  In secara Tunai baik dengan mata uang US Dollar diterima setiap saat selama  hari kerja&nbsp; Senin s/d Jumat.<br/><br/></li>
	  <li>c. Pengajuan  Withdrawal / Margin Out diterima setiap hari Senin s/d Jumat pukul 09.00 &ndash;  12.00 WIB dan tidak bisa diwakilkan.<br/><br/></li>
	</ol><hr>
	<p><strong>PENDING ORDER RULE</strong></p>
	<ul>
	  <li>~ Pending  Order ( New Limit/ Stop order , Stop Loss/ Take profit ) hanya dapat dipasang 5  Menit setelah open market.</li>
	  <li>~ Seluruh Pending Order akan dihapus tiap akhir  sesi.</li>
	</ul><br/>
	<table width='70%' border='1' align='center' bordercolor='#000000' bgcolor='#FFFFFF'>
	  <tr>
		<td><strong>Jika ada pending order yang dimaksud dalam  Pending Order Rule tidak terhapus secara otomatis akibat gangguan sistem dan  order tersebut terkonfirmasi pada sesi berikutnya, maka Order tersebut akan  dibatalkan.</strong></td>
	  </tr>
	</table ><br/><br/>
	<table width='70%' border='1' align='center' bordercolor='#000000' bgcolor='#000000'><p><strong>Pending  Order Confirmation</strong> </p>
	<ol type='a'>
	  <li><strong>a. Pada  saat Market NORMAL.</strong></li>
	<p>Konfirmasi Pending Order dianggap  &ldquo;DONE&rdquo;<strong>&nbsp; </strong>bila harga yang diminta / ditempatkan sesuai dengan harga&nbsp; yang tampil pada screen Esandar Trader 4.</p>
	  <li><strong>b. Pada  High &amp; Low.</strong></li>
	<p>High dan Low yang  tampil di sistem Esandar Trader 4 berdasarkan harga BID <br/>
	  Konfirmasi Limit Order Sell berdasarkan  BID <br/>
	  Konfirmasi Limit Order Buy berdasarkan  BID + Spread.</p>
	  <li><strong>c. Pada  saat Market HECTIC.</strong></li></ol>
	<p>Spread tidak  terbatas, sehingga aturan point a dan b tidak berlaku.</p>
	<p><br/>
	</table>
		<strong>LEVEL  OF PENDING ORDER</strong><br/>
		<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jarak antara harga yang diminta&nbsp; dengan harga running minimal 30 (tiga puluh)  point.<br/>
	<br/>
	  <strong>EXPIRATION  OF PENDING ORDER</strong><br/>
	  <br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Harga yang tampil diluar jam transaksi,  dianggap tidak berlaku.<strong></strong><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Harga settlement tidak berlaku&nbsp; untuk konfirmasi Pending Order.<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jika terjadi kesalahan pada sistem  Esandar Trader 4, konfirmasi Pending Order tergantung Settlement pusat PT. Esandar Arthamas Berjangka Jakarta.
	</p>
	<hr>
	<p><strong>FORCE LIQUIDATION</strong></p>
	<hr>
	<ol>
	  <li><strong>a. Equity  mencapai Level 10%.</strong></li>
	<p>Tindakan force liquidation akan  dilaksanakan apabila Equity account Nasabah mencapai level 10% atau dibawahnya  dari Margin Requirement / Contract Margin. </p>
	  <li><strong>b. Short  Margin untuk posisi Overnight.</strong>&nbsp; </li>
	<p>Semua posisi yang masih terbuka pada  saat market close dengan margin yang tidak cukup (Short Margin) akan  dilikuidasi dengan harga closing yang mengacu pada harga closing Esandar Trader  4.</p></ol>
	<hr>
	<p><strong>ADDITIONAL INFORMATION </strong></p>
	<hr>
	<p><strong>FORMULA  PROFIT LOSS</strong></p>
	<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>{(Sell Price &ndash; Buy Price) x Contract  Size x Lot} &ndash; ( Commission Charge x Lot)<br/><br/>
	<strong>INTEREST  RATE</strong><br/><br/>
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Interest  Rate/SWAP akan diberlakukan untuk produk Rollover pada saat overnight <br/>
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Besarnya Interest/SWAP yang  dibebankan bisa berubah terhadap masing-masing symbol maupun posisi transaksi  dan akan di beritahukan melalui mailbox.<br/>
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Pada  hari Jumat-Senin dikenakan charge 1 hari, sedangkan dari Rabu-Kamis dikenakan  charge 3 hari.</strong> <br/>
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
	<p><strong>TRADING  MONTHS</strong></p>
	<table width='70%' border='1' bordercolor='#000000' align='center'>
	  <tr>
		<td height='39' align='center' valign='top'>&nbsp;</td>
		<td align='center' valign='top'>Contract Months</td>
	  </tr>
	  <tr>
		<td height='36' align='center' valign='top'><strong>INDEX JEPANG</strong></td>
		<td align='center' valign='top'>H M U Z</td>
	  </tr>
	  <tr>
		<td height='31' align='center' valign='top'><strong>INDEX HONGKONG</strong></td>
		<td align='center' valign='top'>F G H J K M N Q U V X Z</td>
	  </tr>
	  <tr>
		<td height='33' align='center' valign='top'><strong>INDEX KOREA</strong></td>
		<td align='center' valign='top'>H M U Z</td>
	  </tr>
	</table><br/><br/>
	<p><strong>KERAHASIAAN </strong><br/><br/>
	Setiap account memiliki nomor login dan password yang  sifatnya <strong><em><u>SANGAT PRIBADI</u></em></strong> dan <strong><em><u>RAHASIA.</u></em></strong>&nbsp; Setelah menerima password standar dari  perusahaan, Nasabah pada kesempatan pertama <strong><em><u>WAJIB</u></em></strong> untuk segera  merubah password standar tersebut dengan password yang diinginkan.<strong> </strong></p>
	<table width='56%' border='1' align='center' bordercolor='#000000'>
	  <tr>
		<td><strong>Perusahaan tidak bertanggung jawab apabila  terjadi penyalahgunaan nomor login dan password akibat kelalaian Nasabah  sendiri.</strong></td>
	  </tr>
	</table>
	<p><strong>WRONG  QUOTE</strong><br/><br/>
	Apabila terjadi kesalahan harga pada screen Esandar  Trader 4, maka order yang sudah tereksekusi pada harga &lsquo;wrong quote&rsquo; dinyatakan  tidak berlaku.<br/><br/>
	<strong>LAIN  &ndash; LAIN </strong></p>
	<ol>
	  <li>~ Pada saat market &ldquo;Hectic&rdquo;, maka selisih  harga jual / beli tergantung&nbsp; pada  market.</li>
	  <li>~ Waktu ( Time ) yang digunakan pada tampilan  screen Esandar Trader 4 adalah GMT+2 atau WIB +5 jam.</li>
	  <li>~ Isi dan peraturan ini dapat berubah dengan  pemberitahuan melalui mailbox Nasabah.</li>
	  <li>~ Apabila terjadi Open Gap, maka posisi  terbuka Overnight akan di Hedge secara otomatis oleh sistem. Perhitungan Open Gap  berdasarkan Harga Closing Esandar Trader 4 +/- 5 point ( Yesterday ) &ndash; Harga  Open Esandar Trader 4 ( Today ) dan berselisih 300 point&nbsp; +/-&nbsp;  Naik / Turun untuk Index Hongkong dan Index Jepang sedangkan untuk Index  Korea perhitungan Open Gap berselisih 500 point&nbsp;  +/-&nbsp; Naik / Turun. </li>
	</ol>
	<p><strong>Perusahaan  tidak bertanggung jawab apabila terjadi penyalahgunaan nomor Account dan  password akibat kelalaian Nasabah sendiri.</strong></p>
	<table width='70%' border='1' align='center' bordercolor='#000000'>
	  <tr>
		<td colspan='3' align='center'>Dengan mengisi kolom &quot;Ya&quot; di bawah ini, saya  menyatakan bahwa saya telah membaca tentang <strong>PERATURAN PERDAGANGAN (TRADING  RULES)</strong>, mengerti dan menerima ketentuan dalam bertransaksi.</td>
	  </tr>
	  <tr>
		<td width='32%'>Pernyataan menerima / tidak</td>
		<td width='2%'>:</td>
		<td width='66%'>
		  $menerima
			  </td>
	  </tr>
	  <tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>$tanggal</td>
	  </tr>
	</table><br /><br /><br /><br /><br /><hr><br /><br /><br /><br /><br />
	</body>
	</html>";}
	
	//Page 8_5		
			else if($_SESSION['page1'] == 'USD_500_Kontrak_Derivative_Stock_Indeks'){
	$email = $_POST['email'];
	$perintah8_5 = mysql_query("SELECT * FROM formulir8_7 where email = '$email'");
	$row8_5 = mysql_fetch_array($perintah8_5);
	$menerima = $row8_5[0];
	$tanggal = $row8_5[1];
	echo "
	<p align='right'>
	<br/>Lampiran 2 Peraturan Kepala Badan Pengawas<br/>
	Perdagangan Berjangka Komoditi<br/>
	Nomor: 107/BAPPEBTI/PER/11/2013
	</p>
	<table width='70%' align='center'>
	<tr>
	<td align='center' colspan='5'><h3>Formulir: 107.PBK.06<br/>
	Peraturan Perdagangan (Trading Rules)<br/>
	Kontrak Derivatives Stock Indeks USD Mini</h3>
	</td>
	</tr>
	<tr>
	<td style='font-size:20px' colspan='5' align='left'><b>GENERAL RULE</b></td>
	</tr>
	</table>
	<hr/>
	<table width='70%' align='center'>
	<tr>
	<td width='150'>Initial Margin</td>
	<td>:</td>
	<td>USD 500,-</td>
	</tr>
	<tr>
	<td>Fixed Rate</td>
	<td>:</td>
	<td>USD</td>
	</tr>
	<tr>
	<td>Lot mulai</td>
	<td>:</td>
	<td>0.1 Lot</td>
	</tr>
	<tr>
	<td>Commission Charge</td>
	<td>:</td>
	<td>USD 5 untuk Kontrak Futures</td>
	</tr>
	<tr>
	<td></td>
	<td>:</td>
	<td>USD 5 untuk Kontrak Roll-over</td>
	</tr>
	</table>
	<br/><table align='center'>
	<tr>
	<td><h4>TRADING TIME</h4></td>
	</tr>
	</table>
	<table width='70%' border='0' align='center'>
	<tr align='center'>
	<td>&nbsp;</td>
	<td>Sesi Pertama</td>
	<td>Sesi Kedua</td>
	<td>Sesi Ketiga</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX JEPANG</td>
	<td align='center'>06.45-13.25</td>
	<td align='center'>14.15-01.00</td>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX HONGKONG</td>
	<td align='center'>08.15-11.00</td>
	<td align='center'>12.00-15.15</td>
	<td align='center'>16:00-20:00</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX KOREA</td>
	<td align='center'>07.00-13.05</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	</table>
	<br/><table width='70%' align='center'>
	<tr>
	<td>
	<ul>
	<li>~ Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit setelah market open dan Nasabah 
	dapat melakukan transaksi dengan cara DQ ( Dealing Quote ) melalui telepon pada saat market open.</li>
	</ul>
	</td>
	</tr>
	<tr>
	<td>
	<ul>
	<li>~ DQ menggunakan telepon akan di kenakan spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama
	dan pada saat kondisi server sedang mengalami gangguan teknis ( down )
	</li>
	</ul>
	</td>
	</tr>
	</table>
	<h4 align='center'>TRADING SYMBOLS</h4>
	<br/><table width='70%' border='0' align='center'>
	<tr align='center'>
	<td>&nbsp;</td>
	<td>Futures Dollar</td>
	<td>Rollover Contracts</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX JEPANG</td>
	<td align='center'>JPJ5U ( Y ) ( M )</td>
	<td align='center'>JPK5U</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX HONGKONG</td>
	<td align='center'>HKJ5U ( Y ) ( M )</td>
	<td align='center'>HKK5U</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX KOREA</td>
	<td align='center'>KRJ5U ( Y ) ( M )</td>
	<td>&nbsp;</td>
	</tr>
	</table>
	<br/><table width='70%' align='center'>
	<tr>
	<td><h4>
	| CONTRACT SIZE | SPREAD | TICK SIZE | MAX VOLUME | DAILY LIMIT |
	</h4>
	</td>
	</tr>
	</table>
	<table width='70%' border='1' align='center'>
	<tr align='center'>
	<td>&nbsp;</td>
	<td>Contract Size</td>
	<td>Spread</td>
	<td>Tick size</td>
	<td>Min Volume</td>
	<td>Daily limit</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX JEPANG
	</td>
	<td align='center'>5</td>
	<td align='center'>5</td>
	<td align='center'>5</td>
	<td align='center'>0.1</td>
	<td align='center'>300</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX HONGKONG
	</td>
	<td align='center'>5</td>
	<td align='center'>5</td>
	<td align='center'>1</td>
	<td align='center'>0.1</td>
	<td align='center'>300</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX KOREA
	</td>
	<td align='center'>500</td>
	<td align='center'>0.05</td>
	<td align='center'>0.05</td>
	<td align='center'>0.1</td>
	<td align='center'>500</td>
	</tr>
	</table>
	<br/><table width='70%' align='center'>
	<tr>
	<td><h4>
	Non Roll-over Contract.
	</h4></td>
	</tr>
	<tr>
	<td>Sebelum kontrak berakhir, Nasabah harus menutup semua posisi nya. Tidak ada Roll-over secara
	otomatis. Apabila Nasabah tidak menutup posisi nya pada masa kontrak berakhir maka sistem akan
	melikuidasi secara otomatis dengan harga settlement kontrak tersebut +/- 5 point value.</td>
	</tr>
	<tr>
	<td height='30'></td>
	</tr></table>
	<table width='70%' align='center'>
	<tr>
	<td><h4>
	Roll-over Contract.
	</h4></td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Roll-over secara otomatis hanya dapat dilakukan pada kontrak dibawah ini :</td>
	</tr>
	
	
	<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	A.&nbsp;&nbsp;HKK5U</td>
	<td>B.&nbsp;&nbsp;JPK5U</td>
	</tr>
	</table>
	<br/><br/><table width='70%' align='center'>
	<tr>
	<td><hr/></td>
	</tr>
	<tr>
	<td><b>MARGIN RULE</b></td>
	</tr>
	<tr>
	<td><hr/></td>
	</tr>
	<tr>
	<td style='font-size:14px'><b>MARGIN REQUIREMENT</b></td>
	</tr>
	</table>
	<table border='1' width='70%' align='center'>
	<tr align='center'>
	<td>&nbsp;</td>
	<td>Daily</td>
	<td>Overnight</td>
	<td>Hedging Daytrade</td>
	<td>Hedging Overnight</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX  FUTURES JEPANG<br/>
	&nbsp;&nbsp;INDEX ROLLOVER JEPANG</td>
	<td align='center'>50<br/>
	50</td>
	<td align='center'>160<br/>
	160</td>
	<td align='center'>10<br/>
	10</td>
	<td align='center'>32<br/>
	32</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX FUTURES HONGKONG<br/>
	&nbsp;&nbsp;INDEX ROLLOVER HONGKONG
	</td>
	<td align='center'>50<br/>
	50</td>
	<td align='center'>160<br/>
	160</td>
	<td align='center'>10<br/>
	10</td>
	<td align='center'>32<br/>
	32</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;INDEX KOREA</td>
	<td align='center'>50</td>
	<td align='center'>160</td>
	<td align='center'>10</td>
	<td align='center'>32</td>
	</tr>
	</table>
	<br/><table width='70%' align='center'>
	<tr>
	<td><b>
	MARGIN IN & MARGIN OUT
	</b></td>
	</tr>
	<tr>
	<td><ol><li>
	a. Margin In dengan menggunakan Cek Tunai / Giro diterima setiap saat dan berlaku
	setelah <strong>Good Fund.</strong>
	</li><br/>
	<li>b. Margin In secara Tunai baik dengan mata uang US Dollar diterima setiap saat
	selama hari kerja  Senin s/d Jumat.
	</li><br/>
	<li>c. 
	Pengajuan Withdrawal / Margin Out diterima setiap hari Senin s/d Jumat pukul
	09.00 � 12.00 WIB dan tidak bisa diwakilkan.
	</li>
	</ol>
	</td>
	</tr>
	<tr>
	<td><hr/></td>
	</tr>
	<tr>
	<td><b>PENDING ORDER RULE</b></td>
	</tr>
	<tr>
	<td><hr/></td>
	</tr>
	<tr>
	<td><ul>
	<li>~ Pending Order ( New Limit/ Stop order , Stop Loss/ Take profit ) hanya dapat<br/>
	dipasang 5 Menit setelah open market.
	</li><br/>
	<li>
	~ Seluruh Pending Order akan dihapus tiap akhir sesi.
	</li>
	</ul>
	</td>
	</tr>
	<tr>
	<td bgcolor='#CCCCCC'>Jika ada pending order yang dimaksud dalam Pending Order Rule tidak terhapus secara
	otomatis akibat gangguan sistem dan order tersebut terkonfirmasi pada sesi berikutnya, maka
	Order tersebut akan dibatalkan. </td>
	</tr>
	<tr>
	<td height='40'></td>
	</tr>
	<tr>
	<td><b>Pending Order Confirmation</b></td>
	</tr>
	<tr>
	<td>
	<ol>
	<li>a. 
	<b>Pada saat Market NORMAL.</b><br/>
	Konfirmasi Pending Order dianggap �DONE�  bila harga yang diminta / ditempatkan sesuai
	dengan harga  yang tampil pada screen Esandar Trader 4.
	</li><br/>
	<li>b.
	<b>Pada High & Low.</b><br/>
	High dan Low yang tampil di sistem Esandar Trader 4 berdasarkan harga BID <br/>
	Konfirmasi Limit Order Sell berdasarkan BID <br/>
	Konfirmasi Limit Order Buy berdasarkan BID + Spread.
	</li><br/>
	<li>c.
	<b>Pada saat Market HECTIC.</b><br/>
	Spread tidak terbatas, sehingga aturan point a dan b tidak berlaku.
	</li>
	</ol>
	</td>
	</tr>
	<tr>
	<td><b>LEVEL OF PENDING ORDER</b><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Jarak antara harga yang diminta  dengan harga running minimal 30 (tiga puluh) point.</td>
	</tr><br/>
	<tr>
	<td height='20'></td>
	</tr>
	<tr>
	<td><b>EXPIRATION OF PENDING ORDER<br/></b>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harga yang tampil diluar jam transaksi, dianggap tidak berlaku.<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harga settlement tidak berlaku  untuk konfirmasi Pending Order.<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika terjadi kesalahan pada sistem Esandar Trader 4, konfirmasi Pending Order tergantung<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Settlement pusat PT. Esandar Arthamas Berjangka Jakarta.
	</td>
	</tr>
	<tr>
	<td><hr/></td>
	</tr>
	<tr>
	<td><b>FORCE LIQUIDATION</b></td>
	</tr>
	<tr>
	<td><hr/></td>
	</tr>
	<tr>
	<td><ol><li>a. 
	<b>Equity mencapai Level 10%.</b><br/>
	Tindakan force liquidation akan dilaksanakan apabila Equity account Nasabah mencapai
	level 10% atau dibawahnya dari Margin Requirement / Contract Margin. 
	</li><br/>
	<li>b.
	<b>Short Margin untuk posisi Overnight.</b><br/>
	Semua posisi yang masih terbuka pada saat market close dengan margin yang tidak cukup
	(Short Margin) akan dilikuidasi dengan harga closing
	yang mengacu pada harga closing Esandar Trader 4.
	</li>
	</ol>
	</td>
	</tr>
	</table>
	<br/><br/><table width='70%' align='center'>
	<tr>
	<td><hr/></td>
	</tr>
	
	<tr>
	<td><b>ADDITIONAL INFORMATION</b></td>
	</tr>
	<tr>
	<td><hr/></td>
	</tr>
	<tr>
	<td style='font-size:14px'><b>FORMULA PROFIT LOSS</b></td>
	</tr>
	<tr>
	<td height='35'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{(Sell Price � Buy Price) x Contract Size x Lot} � ( Commission Charge x Lot)  </td>
	</tr>
	<tr>
	<td height='35'><b>INTEREST RATE</b></td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interest Rate/SWAP akan diberlakukan untuk produk Rollover pada saat overnight<br/> 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Besarnya Interest/SWAP yang dibebankan bisa berubah terhadap masing-masing symbol maupun<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;posisi transaksi dan akan di beritahukan melalui mailbox.
	</td>
	</tr>
	<tr>
	<td><br/><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	*Pada hari Jumat-Senin dikenakan charge 1 hari, sedangkan dari Rabu-Kamis<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dikenakan charge 3 hari.</b></td>
	</tr>
	<tr>
	<td height='35'></td>
	</tr>
	<tr>
	<td><b>TRADING MONTHS</b></td>
	</tr>
	</table>
	<br/><table width='70%' border='0' align='center'>
	<tr align='center'>
	<td>&nbsp;</td>
	<td>Contract Months</td>
	</tr>
	<tr align='center'>
	<td>INDEX JEPANG</td>
	<td>H M U Z</td>
	</tr>
	<tr align='center'>
	<td>INDEX HONGKONG</td>
	<td>F G H J K M N Q U V X Z</td>
	</tr>
	<tr align='center'>
	<td>INDEX KOREA</td>
	<td>H M U Z</td>
	</tr>
	</table>
	<br/><table width='70%' align='center'>
	<tr>
	<td><b>KERAHASIAAN</b></td>
	</tr>
	<tr>
	<td height='5'></td>
	</tr>
	<tr>
	<td>Setiap account memiliki nomor login dan password yang sifatnya <b><u><i>SANGAT PRIBADI</i></u></b> dan <b><i><u>RAHASIA.</u></i></b>
	Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama <b><u><i>WAJIB</i></u></b> untuk
	segera merubah password standar tersebut dengan password yang diinginkan.</td>
	</tr>
	<tr>
	<td height='15'></td>
	</tr>
	<tr>
	<td bgcolor='#CCCCCC'>Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor login dan<br/>
	password akibat kelalaian Nasabah sendiri.</td>
	</tr>
	<tr>
	<td height='30'></td>
	</tr>
	<tr>
	<td><b>WRONG QUOTE</b></td>
	</tr>
	<tr>
	<td height='5'></td>
	</tr>
	<tr>
	<td>Apabila terjadi kesalahan harga pada screen Esandar Trader 4, maka order yang sudah tereksekusi pada harga
	�wrong quote� dinyatakan tidak berlaku.</td>
	</tr>
	<tr>
	<td height='15'></td>
	</tr>
	<tr>
	<td><b>LAIN � LAIN</b></td>
	</tr>
	<tr>
	<td height='5'></td>
	</tr>
	<tr>
	<td>
	<ul>
	<li>Pada saat market �Hectic�, maka selisih harga jual / beli tergantung  pada market.</li><br/>
	<li>Waktu ( Time ) yang digunakan pada tampilan screen Esandar Trader 4 adalah GMT+2 atau WIB +5 jam.</li><br/>
	<li>Isi dan peraturan ini dapat berubah dengan pemberitahuan melalui mailbox Nasabah.</li><br/>
	<li>Apabila terjadi Open Gap, maka posisi terbuka Overnight akan di Hedge secara otomatis oleh sistem.
	Perhitungan Open Gap berdasarkan Harga Closing Esandar Trader 4 +/- 5 point ( Yesterday ) � Harga
	Open Esandar Trader 4 ( Today ) dan berselisih 300 point  +/-  Naik / Turun untuk Index Hongkong dan
	Index Jepang sedangkan untuk Index Korea perhitungan Open Gap berselisih 500 point  +/-  Naik / Turun.</li>
	</ul>
	</td>
	</tr>
	<tr>
	<td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account dan password akibat kelalaian Nasabah sendiri.</b></td>
	</tr>
	</table>
	<br/><br/><table border='0' width='70%' align='center'>
	<tr>
	<td align='center' colspan='5'>Dengan mengisi kolom 'Ya' di bawah ini, saya menyatakan bahwa saya telah membaca tentang<br/>
	<b>PERATURAN PERDAGANGAN (TRADING RULES)</b>, mengerti dan menerima ketentuan<br/>
	dalam bertransaksi.</td>
	</tr>
	<tr>
	<td width='34%'>Pernyataan menerima / tidak</td>
	<td width='2%'>:</td>
	<td width='64%'>
	$menerima</td>
	</tr>
	<tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>$tanggal</td>
	</tr>
	</table><br><br><br><br><br><hr><br><br><br><br><br>
	</body>
	</html>";}
}
?>