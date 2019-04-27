<?php
$pdf->AddPage();

$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/10/2010', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
	
$pdf->SetFont('Helvetica','B',10);
$pdf->Write(0, 'Formulir: Nomor 107.PBK.06', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(0);

$pdf->Write(0, 'Peraturan Perdagangan (Trading Rules)
Kontrak Berjangka Kakao (CC5)', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->SetFont('Helvetica','','8');
$bankusd = '<table cellspacing="0" cellpadding="4" width="100%" border="1">
<tr class="top">
	<td align="left" bgcolor="#5C5C5C" colspan="3"><font color="white"><strong><center>PEMBUKAAN ACCOUNT (REKENING)</center></strong></font></td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)</strong></td>
	<td align="justify" valign="top" ><strong>Dokumen Pemberitahuan Adanya Risiko :</strong>	  
	  <br/>Nasabah harus memahami benar risiko  perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti  &ldquo;Pernyataan Menerima Pemberitahuan Adanya Risiko&rdquo; yang ada pada &ldquo;Dokumen  Pemberitahuan Adanya Risiko&rdquo;.
	  <p>Maksud dari dokumen ini adalah  memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan  kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu  nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah  kondisi keuangan nasabah mencukupi.</p></td>
	<td align="justify" valign="top" ><strong>Perjanjian Pemberian Amanat :</strong>
	  <br/>Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian  kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian  Pemberian Amanat.</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Rekening Terpisah / Segregated Account</strong></td>
	<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan setoran dana dalam mata uang Rupiah  sebagai Margin Deposit untuk jaminan Pembukaan <em>Account</em>, dan <em>Additional  Margin </em>(Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:
<strong><ul><li>Bank Central Asia (BCA) Sudirman - Jakarta</strong>
<br/>No. Account : 035.313.6019 (IDR)
<br/>Atas Nama : PT. Esandar Arthamas Berjangka</li></ul></td>
<td valign="top" align="justify">Nasabah dapat melakukan transaksi, setelah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya dan apabila setoran dana telah efektif <em>(Good Fund)</em>.</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Rekening Nasabah Berlaku Efektif</strong></td>
	<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan transaksi, setelah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya dan apabila setoran dana telah efektif <em>(Good Fund)</em>.</td>
	<td valign="top" align="justify">Nasabah dapat melakukan transaksi, setelah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya dan apabila setoran dana telah efektif <em>(Good Fund)</em>.</td>
</tr>
</table>';
$pdf->writeHTMLCell(182, '', 14, 70,$bankusd, 0, 0, 0, true, 'J', true);

$table3 = '<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td colspan="3" bgcolor="#5C5C5C"><font color="white"><strong><center>KETENTUAN TRADING</center></strong></font></td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Margin Deposit</strong></td>
	<td valign="top" align="justify" colspan="2">Margin adalah sejumlah dana nasabah yang  harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di  Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana  (withdrawal) dari nasabah.</td>
</tr>
<tr>
	<td valign="top" align="left" ><strong>Margin Deposit Awal</strong></td>
	<td valign="top" align="justify" colspan="2">Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar: Rp. 50.000.000.- (New Account).</td>
</tr>
<tr>
	<td valign="top" align="left" ><strong>Rate</strong></td>
	<td valign="top" align="justify" colspan="2">Rate dalam Rupiah</td>
</tr>
<tr>
	<td valign="top" align="left" ><strong>Harga Penutupan Pasar (Closing Market)</strong></td>
	<td valign="top" align="justify" colspan="2">Harga Penutupan Pasar berdasarkan Harga Setlement Price</td>
</tr>
</table>';

$pdf->writeHTMLCell(182, '', 14, 197,$table3, 0, 0, 0, true, 'J', true);

$pdf->AddPage();
$table4 = '<table cellpadding="5" class="tab-rule" border="1">
<tr>
	<td valign="top" align="left"><strong>Jam Perdagangan (GMT + 7)</strong></td>
	<td align="center" valign="top"><strong>Sesi 1 : 08:30 - 12:30 <br/>Sesi 2 : 16:00 - 02:00</strong></td>
</tr>
<tr>
	<td valign="top" align="left"><strong>Hari Perdagangan Terakhir</strong></td>
	<td valign="top" align="justify">11 hari kerja sebelum hari kerja terakhir dari bulan penyerahan. Apabila hari tersebut bukan hari perdagangan, maka hari perdagangan sebelumnya merupakan hari perdagangan terakhir.</td>
</tr>
<tr>
	<td align="justify" colspan="4"><ul><li>Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit sebelum market open.</li></ul>
	<ul><li>Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.</li></ul>
	</td>
</tr>
</table>';

$pdf->writeHTMLCell(182, '', 14, 27,$table4, 0, 0, 0, true, 'J', true);


$table5 ='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="center" colspan="1" bgcolor="#5C5C5C"><font color="white"><strong>TRADING FACILITIES</strong></font></td>
</tr>
<tr>
<td align="center" width="20%"></td>
<td align="center"><strong>Kontrak Berjangka Kakao</strong></td>
</tr>
<tr>
<td align="center"><strong>Kode Kontrak</strong></td>
<td align="center">CC5</td>
</tr>
<tr>
<td align="center"><strong>Ukuran Kontrak</strong></td>
<td align="center">5 Metrik Ton (5.000 Kg)</td>
</tr>
<tr>
<td align="center"><strong>Mutu</strong></td>
<td align="center">Mutu Fermentasi sesuai mutu yang ditentukan dalam Standard Nasional Indonesia (SNI) No. 2323-2008 yang dikeluarkan oleh Badan Standarisasi Nasional (BSN)</td>
</tr>
<tr>
<td align="center"><strong>Minimum Tick</strong></td>
<td align="center">Rp 10,-/kg<br/>Rp 50.000,-/lot</td>
</tr>
<tr>
<td align="center"><strong>Komisi</strong></td>
<td align="center">Rp.500.000,- (lot settled)</td>
</tr>
<tr>
<td align="center"><strong>Margin Requirement</strong></td>
<td align="center">Rp. 7.500.000,-</td>
</tr>
<tr>
<td align="center"><strong>Posisi Wajib Lapor</strong></td>
<td align="center">150 Lot</td>
</tr>
<tr>
<td align="center"><strong>Batas Posisi Spekulatif</strong></td>
<td align="center">500 Lot</td>
</tr>
<tr>
<td align="center" valign="top" rowspan="2"><strong>Batas Perubahan Harga</strong></td>
<td align="center">Rp 1.000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
</tr>
<tr>
<td align="center"><strong><u>Batas perubahan harga ini tidak berlaku untuk Bulan Berjalan dan Bulan Terdekat, kalau Bulan Berjalan sudah tidak diperdagangkan lagi.</u></strong></td>
</tr>
<tr>
<td align="center"><strong>Tukar Fisik dengan Berjangka</strong></td>
<td align="center">Pihak-pihak yang melakukan transaksi jual/beli kakao diluar bursa dapat mendaftarkannya ke Bursa untuk ditukar dengan transaksi berjangka bagi kedua belah pihak.</td>
</tr>
<tr>
<td align="center"><strong>Waktu Pemberitahuan Penyerahan</strong></td>
<td align="center">Pihak yang mempunyai posisi jual pada Bulan Berjalan, dapat melakukan Pemberitahuan Penyerahan dalam waktu 10 (sepuluh) hari kerja sebelum hari kerja pertama dalam Bulan Berjalan.</td>
</tr>
<tr>
<td align="center"><strong>Harga Penyelesaian</strong></td>
<td align="center">Harga Penyelesaian ditentukan pada akhir sesi perdagangan berdasarkan harga rata-rata 10 transaksi dalam 1 hari terakhir atau menggunakan harga penutupan sebelumnya jika dalam 1 hari tidak terjadi transaksi</td>
</tr>
<tr>
<td align="center"><strong>Tempat Penyerahan</strong></td>
<td align="center">Di Gudang Penyimpanan Terdaftar di Makassar, Palu, dan Lampung. Pilihan tempat penyerahan berada pada penjual.</td>
</tr>
<tr>
<td align="center"><strong>Bulan Kontrak</strong></td>
<td align="center">3 (tiga) bulan berturut-turut, sehingga setiap hari perdagangan terdapat tiga Bulan Kontrak</td>
</tr>
<tr>
<td align="center" valign="top"><strong>Satuan Penyerahan</strong></td>
<td align="justify"><ul><li>Penyerahan kakao bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 3 (tiga) lot atau kelipatannya</li></ul>
	<ul><li>Pelaksanaan penyerahan kakao harus dilakukan dalam lot yang terpisah, masing-masing 5 (lima) ton sesuai dengan Surat Bukti Penyimpanan dengan total penyerahan minimal 3 (tiga) lot atau 15 (lima belas) ton.</li></ul>
</td>
</tr>
<tr>
<td align="center"><strong>KALKULASI: Profit/Loss</strong></td>
<td align="center">&raquo; CC5:<br/>
(Harga Jual - Harga Beli) x lot x Ukuran Kontrak (dalam kg)
</td>
</tr>
</table>';
$pdf->writeHTMLCell(182, '', 14, 70,$table5, 0, 0, 0, true, 'J', true);

$pdf->AddPage();
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(50, 0,'Market Order                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'Amanat untuk secara langsung membeli/menjual kontrak berjangka pada harga pasar.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','B','10');

$pdf->MultiCell(50, 35.7,'Limit Order/Stop Order', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$table5='Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.
<strong><u>Pemasangan Stop Order untuk membatasi Rugi (stop loss) mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan untuk melikuidasi Kontrak Berjangka.<u></strong>';
$pdf->writeHTMLCell(130, '', 65, 36.1,$table5, 1, 1, 0, true, 'J', true);

$margintambahan='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
	<td align="left" width="39%" rowspan="2" valign="top"><strong>Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)</strong></td>
	<td valign="top" width="43%" align="justify">Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.
	<br/><br/>Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.</td>
	<td valign="top" width="58.5%" rowspan="2" align="justify">Apabila Nasabah mempunyai posisi terbuka (baik posisi Beli maupun Jual) pada bulan spot dan ingin melakukan penyerahan fisik, maka pada 12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan, nasabah wajib melakukan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak  posisi terbuka yang dimilikinya.
<br/><br/>Apabila Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka tersebut dapat dilakukan Force Liquidation.
<br/><br/>Pada saat Hari Perdagangan Terakhir berakhir, Untuk Serah Terima fisik, Nasabah yang memiliki Posisi Jual harus menyediakan Barang yang sesuai dengan mutu, dan jumlah lot satuan penyerahan, sedangkan Nasabah yang memiliki Posisi Beli harus menyediakan 2/3 dari sisa Kontrak yang harus dipenuhinya, dan menerima penyerahan fisik.
<br/><br/>Baik Posisi Jual dan Beli, akan dikenakan biaya Pengiriman / Delivery Fee sesuai dengan Tabel diatas.
</td>
</tr>
<tr>
	<td valign="top" align="justify">Untuk penarikan margin (Withdrawal) dapat dilakukan dengan mengajukan permohonan setiap hari kerja Senin - Jumat sampai  dengan pukul 12.00 WIB dan tidak dapat diwakilkan.
      </td>
</tr>
</table>';
$pdf->writeHTMLCell(130, '', 14, 72,$margintambahan, 0, 1, 0, true, 'J', true);
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(50, 0,'Margin Call & Force Liquidation                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(55, 0,'Margin Call Equity level: (50% < Margin Level < 80%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah  mencapai level antara (50% < Margin Level < 80%) dari Margin Requirement.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'Force Liquidation dilakukan apabila:
A. Margin Level mencapai 50% atau dibawahnya.
Apabila Equity account Nasabah mencapai level 50% atau dibawahnya dari Margin Requirement, maka Force Liquidation akan dilakukan.
B. Penambahan Dana pada Bulan Spot
Apabila Nasabah mempunyai posisi terbuka (baik posisi Beli maupun Jual) pada bulan spot dan ingin melakukan penyerahan fisik, maka pada hari kerja pertama bulan berjalan, nasabah wajib melakukan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak  posisi terbuka yang dimilikinya.
Apabila Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka tersebut dapat dilakukan Force Liquidation.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();
$pdf->MultiCell(60, 0,'                                                                                                                                                                                                                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak Berjangka tersebut.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$table6 ='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
	<td align="left" valign="top"><strong>Akhir Masa Kontrak</strong></td>
	<td valign="top" align="justify">Nasabah yang masih memiliki posisi terbuka Jual hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menyerahkan fisik kontrak berupa Kakao dengan standar mutu yang berlaku dan menerima dana senilai kontrak.
		<br/><br/>Penyerahan kakao bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 3 (tiga) lot atau kelipatannya. Pelaksanaan penyerahan kakao harus mengikuti Satuan Penyerahan.
		<br/><br/>Apabila Nasabah gagal menyerahkan fisik kontrak berupa kakao, maka akan dilakukan Cash Settlement sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.
	</td>
	<td valign="top" align="justify">Nasabah yang masih memiliki posisi terbuka Beli hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menerima fisik kontrak berupa kakao dengan standar mutu yang berlaku dan membayar atau melunasi dana senilai kontrak.
		<br/><br/>Penyerahan kakao bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 3 (tiga) lot atau kelipatannya. Pelaksanaan penyerahan kakao harus mengikuti Satuan Penyerahan.
		<br/><br/>Apabila Nasabah gagal menyediakan dana sesuai dengan nilai kontrak, maka akan dilakukan Cash Settlement sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>KERAHASIAAN</strong></td>
	<td valign="top" align="justify" colspan="2">Setiap nasabah akan mendapatkan Login, Password, dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform JAFeTS Colt, dan untuk melakukan DQ apabila terjadi gangguan pada platform JAFeTS Colt.
		<br/><br/>Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama <strong>WAJIB</strong> untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.
	</td>
</tr></table>';
$pdf->writeHTMLCell(182, '', 14, 45,$table6, 0, 0, 0, true, 'J', true);
$pdf->AddPage();
$table6 ='<table cellpadding="5" width="100%" class="tab-rule" border="1"><tr>
	<td align="left" valign="top"><strong>Lain-Lain (Miscellaneous)</strong></td>
	<td valign="top" align="justify" colspan="2">
		<ol><li>Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market</li>
		<li>Waktu yang digunakan pada sistem adalah GMT + 7.</li>
		<li>Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan</li>
		<li>Platform JAFeTS Colt dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras atau perangkat lunak atau <strong><u>terganggunya koneksi internet berakibat tidak dapat dilaksanakan sesuai dengan perintah nasabah.</u></strong></li></ol>
		<strong>Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka (021-29339318) disertai Phone Password.</strong>
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>REPORTING</strong></td>
	<td valign="top" align="justify" colspan="2">
		<ol><li>Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem JAFeTS Colt secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang dikirimkan secara otomatis ke email nasabah.</li>
		<li>Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada laporan yang tersedia didalam Sistem JAFeTS Colt.</li>
		<li>Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan nasabah tersebut.</li>
		<li>Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut dianggap benar dan sah.</li></ol>
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>PENYELESAIAN PERSELISIHAN</strong></td>
	<td valign="top" align="justify" colspan="2">
		<ol><li>Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis transaksi, report, dan data-data pendukung lainnya.</li>
		<li>Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.</li></ol>
		Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.
	</td>
</tr></table>';
$pdf->writeHTMLCell(182, '', 14, 27,$table6, 0, 0, 0, true, 'J', true);
$pdf->AddPage();
$table7 ='
<br/><br/><br/><table width="100%" border="1" align="center" bordercolor="#000000"align="center">
  <tr>
    <td align="center" colspan="5">Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang<br/>
<b>PERATURAN PERDAGANGAN (TRADING RULES)</b>, mengerti dan menerima ketentuan<br/>
dalam bertransaksi.</td>
  </tr>
  <tr>
    <td width="32%">Pernyataan menerima / tidak</td>
    <td width="2%">:</td>
    <td width="66%">Ya</td>
  </tr>
  <tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>'.$formkakao['tanggal'].'</td>
  </tr>
</table>';
$pdf->writeHTMLCell(182, '', 14, 18,$table7, 0, 0, 0, true, 'J', true);


/*
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas 
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Write(0, 'Formulir: 107.PBK.06', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'Peraturan Perdagangan (Trading Rules)
Kontrak Berjangka Kakao
', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'A. Spesifikasi Kontrak', '', 0, 'L', true, 0, false, false, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0,'Kode Kontrak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0,'CC5', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Satuan Kontrak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '5 metrik ton (5.000 kg)', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Bulan Kontrak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Maret, Mei, Juli, September dan Desember', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Hari & Jam Perdagangan                                                                     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Hari perdagangan adalah hari kerja Bursa dari Senin-Jumat
 Sesi 1 : 08.30 – 12.30 WIB
 Sesi 2 : 16.00 – 02.00 WIB
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Tukar Fisik dengan Berjangka                                                                    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Pihak-pihak yang melakukan transaksi jual/beli kakao diluar bursa dapat mendaftarkannya ke Bursa untuk ditukar dengan transaksi berjangka bagi kedua belah pihak.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Hari Perdagangan Terakhir                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '11 hari kerja sebelum hari kerja terakhir dari bulan penyerahan. Apabila hari tersebut bukan hari perdagangan, maka hari perdagangan sebelumnya merupakan hari perdagangan terakhir.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Harga   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Rupiah per kilogram', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Perubahan Harga Minimum (Tik)                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Rp 10,-/kg
Rp 50.000,-/lot
', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Waktu Pemberitahuan Penyerahan                                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Pihak yang mempunyai posisi jual pada Bulan Berjalan, dapat melakukan Pemberitahuan Penyerahan dalam waktu 10 (sepuluh) hari kerja sebelum hari kerja pertama dalam Bulan Berjalan.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Batas Perubahan Harga                                                                          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Rp. 1.000,- per kilogram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya. Batas perubahan harga ini tidak berlaku untuk Bulan Berjalan dan Bulan Terdekat, kalau Bulan Berjalan sudah tidak diperdagangkan lagi.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Mutu                                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Mutu Fermentasi sesuai mutu yang ditentukan dalam Standard Nasional Indonesia (SNI) No. 2323-2008 yang dikeluarkan oleh Badan Standarisasi Nasional (BSN)', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Harga Penyelesaian                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Harga Penyelesaian ditentukan pada akhir sesi perdagangan berdasarkan harga rata-rata 10 transaksi dalam 5 menit dan/atau 30 menit dan/atau 1 hari terakhir atau menggunakan harga penutupan sebelumya jika dalam 1 hari tidak terjadi transaksi.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Tempat Penyerahan                                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Di Gudang Penyimpanan Terdaftar di Makasar, Palu dan Lampung, Pilihan tempat penyerahan berada pada penjual', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Posisi Wajib Lapor', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '150 lot', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Batas Posisi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '500 lot', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'B. Margin', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Nasabah harus menempatkan sejumlah dana (Margin) pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah berdasarkan bukti setoran bank, form penyetoran dana dan form penarikan dana yang diterima. Dana Nasabah bisa juga bertambah/berkurang bila terjadi laba/rugi pada transaksi di dalam Rekening Nasabah.', '', 0, 'J', true, 0, false, false, 0);
$pdf->Ln(1);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(2, '   a. Margin Awal Pembukaan Rekening', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(2, '   Dana minimum yang wajib disetor oleh Nasabah untuk membuka Rekening (Account) sebesar Rp 50.000.000,-', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(1);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(2, '   b. Margin Requirement/Initial Margin', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(2, '   Margin yang diberlakukan per-lot adalah Rp 7.500.000,-', '', 0, 'L', true, 0, false, false, 0);

$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'C. Commission (Komisi)', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Komisi dibebankan kepada Nasabah setiap kali transaksi per-lot (settled) , sebesar Rp 500.000,-
', '', 0, 'J', true, 0, false, false, 0);

$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'D. Margin In & Out', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTML('<ol type="a">
<li>Nasabah dapat melakukan transaksi setelah dana good fund.</li>
<li>Untuk penarikan margin dapat dilakukan dengan mengajukan permohonan  setiap hari kerja  Senin s/d Jumat sampai  dengan pukul 12.00 WIB dengan menandatangani slip penarikan dana terlebih dahulu.</li>
</ol>', true, false, true, false, '');


$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'E. Price (Harga)', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTML('<p>Harga masing-masing kontrak sesuai dengan harga yang terjadi di Bursa Berjangka Jakarta dengan sistem JAFeTS 3.</p>', true, false, true, false, '');
$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'F. Sistem Order', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTML('<p align="justify">
Nasabah dapat menyampaikan amanatnya dengan cara menghubungi dealer PT. Esandar Arthamas Berjangka melalui telepon setiap hari perdagangan dan dealer akan meneruskan amanat Nasabah tersebut ke Bursa Berjangka Jakarta melalui sistem JAFeTS 3.</p>', true, false, true, false, '');
$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'G. Market Order', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Adalah amanat untuk membeli/menjual kontrak berjangka pada harga pasar di Bursa Berjangka Jakarta.', '', 0, 'J', true, 0, false, false, 0);

$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'H. Limit Order/Stop Order', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);

$pdf->writeHTML('<ol type="a">
<li>Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.</li>
<li>Nasabah dapat menempatkan amanat Limit Order di dalam waktu jam perdagangan berlangsung.</li>
<li>Pemasangan Stop Order untuk membatasi Rugi <i>(stop loss)</i>  mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Berjangka.</li></ol>
', true, false, true, false, '');


$pdf->Ln(2);
$pdf->writeHTML('<p>Pemasangan Stop Order untuk membatasi Rugi <i>(stop loss)</i>  mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Berjangka.</p>', true, false, true, false, '');

$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'I. Over Trading', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTML('<p>
Perusahaan akan menolak order Nasabah apabila Nasabah melakukan transaksi yang melebihi dana atau margin yang ada.</p>', true, false, true, false, '');




$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'J. Call Margin', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Call margin akan dilakukan apabila floating loss dari posisi transaksi Nasabah yang masih terbuka/open menyentuh/mencapai range (50% < call margin < 80%) terhadap Equity yang ada. Untuk mempertahankan posisi Nasabah yang terbuka maka setiap Nasabah diharapkan untuk segera menambah kekurangan margin.', '', 0, 'J', true, 0, false, false, 0);

$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'K. Force Liquidation', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Apabila Nasabah tidak menambah kekurangan margin (memenuhi call margin), maka  perusahaan berhak melikuidasi posisi terbuka tersebut pada saat terjadi kondisi floating loss menyentuh/mencapai level = 50% dari Margin Requirement. 
Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak Berjangka tersebut.
', '', 0, 'J', true, 0, false, false, 0);

$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'L. Akhir Masa Kontrak', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);

$pdf->writeHTML('<ol type="a">
<li>Apabila Nasabah masih memiliki posisi terbuka <b>Jual</b> hingga jatuh tempo kontrak bulan berjalan maka Nasabah wajib menyerahkan fisik kontrak berupa Kakao dengan standar Mutu senilai 5.000 Kg/lot dan menerima dana senilai kontrak.</li>
<li>Apabila Nasabah masih memiliki posisi terbuka <b>Beli</b> hingga jatuh tempo kontrak bulan berjalan maka Nasabah menerima fisik kontrak berupa Kakao dengan standar Mutu senilai 5.000 Kg/lot dan membayar atau melunasi dana senilai kontrak.</li></ol>
', true, false, true, false, '');


$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'M. Kerahasiaan', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTML('<p>Setiap Account memiliki phone password yang sifatnya <b>SANGAT PRIBADI</b> dan <b>RAHASIA.</b> Phone password digunakan setiap kali Nasabah ingin melakukan transaksi. Jika terjadi perbedaan phone password yang di sebutkan Nasabah, dealer berhak menolak untuk melakukan transaksi.</p>', true, false, true, false, '');

$pdf->Ln(0);
$pdf->writeHTML('<b><p>Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor Account dan phone password akibat kelalaian Nasabah sendiri.</b></p>', true, false, true, false, '');

$pdf->SetFont('helvetica', '', 10);
$pdf->Ln(5);
$pdf->MultiCell(180, 0, 'Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', 0, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Pernyataan Menerima / Tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$formkakao['Menerima'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$formkakao['tanggal'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
*/
?>