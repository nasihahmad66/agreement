<?php
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
	
$pdf->SetFont('Helvetica','B','10');
$pdf->Write(0, 'Formulir: Nomor 107.PBK.06', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(0);

$pdf->Write(0, 'Peraturan Perdagangan (Trading Rules)
Kontrak Berjangka Emas (GOL. GOL250, GOL100)
', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->SetFont('Helvetica','','8');
$table1='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="left" colspan="3" bgcolor="#5C5C5C"><font color="white"><strong><center>PEMBUKAAN ACCOUNT (REKENING)</center></strong></font></td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)</strong></td>
	<td align="justify" valign="top" ><strong>Dokumen Pemberitahuan Adanya Risiko :</strong><br/>	  
	  Nasabah harus memahami benar risiko  perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti  &ldquo;Pernyataan Menerima Pemberitahuan Adanya Risiko&rdquo; yang ada pada &ldquo;Dokumen  Pemberitahuan Adanya Risiko&rdquo;.
	  <p>Maksud dari dokumen ini adalah  memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan  kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu  nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah  kondisi keuangan nasabah mencukupi.</p></td>
	<td align="justify" valign="top" ><strong>Perjanjian Pemberian Amanat :</strong><br/>
	  Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian  kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian  Pemberian Amanat.</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Rekening Terpisah / Segregated Account</strong></td>
	<td valign="top" align="justify" colspan="3">Nasabah dapat melakukan setoran dana dalam mata uang Rupiah  sebagai Margin Deposit untuk jaminan Pembukaan <em>Account</em>, dan <em>Additional  Margin </em>(Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:
	<strong><ul><li>Bank Central Asia (BCA) Sudirman - Jakarta</strong>
	No. Account : 035.313.6019 (IDR)
	Atas Nama : PT. Esandar Arthamas Berjangka</li></ul></td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Rekening Nasabah Berlaku Efektif</strong></td>
	<td valign="top" align="justify" colspan="2">Nasabah dapat melakukan transaksi, setelah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya dan apabila setoran dana telah efektif <em>(Good Fund)</em>.</td>
</tr>
</table>';
$pdf->writeHTMLCell(182, '', 14, 65,$table1, 0, 0, 0, true, 'J', true);
$table1='<table cellpadding="5" width="100%" class="tab-rule" border="1">
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
</table>
';
$pdf->writeHTMLCell(182, '', 14, 178,$table1, 0, 0, 0, true, 'J', true);

$table1='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
	<td valign="top" align="left" ><strong>&nbsp;Jam Perdagangan (GMT + 7)</strong></td>
	<td align="center" valign="top"><strong>09:30 - 17:30</strong></td>
	
</tr>
<tr>
	<td valign="top" align="left"><strong>Pasca Penutupan</strong></td>
	<td valign="top" align="left"><ul><li>Sesi Pasca Penutupan dilaksanakan setiap hari perdagangan yaitu mulai pukul 17.45 WIB sampai dengan 18.00 WIB.</li></ul>
								  <ul><li>Amanat beli dan jual pada saat Pasca Penutupan yang dimasukkan kedalam JAFeTS adalah pada Harga Penyelesaian/Harga Settlement hari itu.</li></ul>
</td>
</tr></table>';
$pdf->writeHTMLCell(182, '', 14, 234,$table1, 0, 0, 0, true, 'J', true);
$pdf->AddPage();
$table1='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
	<td valign="top" align="left" ><strong>Hari Perdagangan Terakhir</strong></td>
	<td valign="top" align="justify">Perdagangan untuk suatu Bulan Kontrak, berakhir pada akhir sesi Pasca Penutupan pada hari perdagangan ketiga sebelum hari kerja terakhir bulan yang bersangkutan. Apabila hari perdagangan ketiga sebelum hari kerja terakhir tersebut bukan merupakan hari perdagangan, maka hari perdagangan sebelumnya menjadi hari perdagangan terakhir.</td>
</tr>
<tr>
	<td align="justify" colspan="4"><ul><li>Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit sebelum market open.</li></ul>
												 <ul><li>Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.</li></ul>
</td>
</tr>
</table>
';

$pdf->writeHTMLCell(182, '', 14, 27,$table1, 0, 0, 0, true, 'J', true);

$table2='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr class="top">
	<td align="center" colspan="4" bgcolor="#5C5C5C"><font color="white"><strong>TRADING FACILITIES</strong></font></td>
</tr>
<tr>
<td align="center" ></td>
<td align="center" ><strong>Kontrak 1Kg</strong></td>
<td align="center" ><strong>Kontrak 250 Gram</strong></td>
<td align="center" ><strong>Kontrak 100 Gram</strong></td>
</tr>
<tr>
<td align="center" ><strong>Kode Kontrak</strong></td>
<td align="center" >GOL</td>
<td align="center" >GOL250</td>
<td align="center" >GOL100</td>
</tr>
<tr>
<td align="center" ><strong>Ukuran Kontrak</strong></td>
<td align="center" >1 Kg (1.000 Gram)</td>
<td align="center" >250 Gram</td>
<td align="center" >100 Gram</td>
</tr>
<tr>
<td align="center" ><strong>Mutu</strong></td>
<td align="center" colspan="3">Emas dengan kualitas kemurnian minimum 99,99% dilengkapi dengan angka seri & stempel dari refineri yang diakui oleh LBMA (bisa dari dalam dan luar negeri)</td>
</tr>
<tr>
<td align="center" ><strong>Minimum Tick</strong></td>
<td align="center" >Rp 50,- / gram (termasuk PPN)
Rp 50.000,- /lot (termasuk PPN)</td>
<td align="center" >Rp 50,- / gram (termasuk PPN)
Rp 12.500,- /lot (termasuk PPN)</td>
<td align="center" >Rp 50,- / gram (termasuk PPN)
Rp 5.000,- /lot (termasuk PPN)</td>
</tr>
<tr>
<td align="center" ><strong>Komisi</strong></td>
<td align="center" >Rp.500.000,- (lot settled)</td>
<td align="center" >Rp. 150.000,- (lot settled)</td>
<td align="center" >Rp. 50.000,- (lot settled)</td>
</tr>
<tr>
<td align="center" ><strong>Biaya Pengiriman / Delivery Fee</strong></td>
<td align="center" >Rp.250.000,- / 1 Lot</td>
<td align="center" >Rp. 250.000,- / 4 Lot</td>
<td align="center" >Rp. 250.000,- / 10 Lot</td>
</tr>
<tr>
<td align="center" ><strong>Margin Requirement</strong></td>
<td align="center" >Rp. 10.000.000,-</td>
<td align="center" >Rp. 2.500.000,-</td>
<td align="center" >Rp. 1.000.000,-</td>
</tr>
<tr>
<td align="center" ><strong>Posisi Wajib Lapor</strong></td>
<td align="center" >150 Lot</td>
<td align="center" >600 Lot</td>
<td align="center" >1.500 Lot</td>
</tr>
<tr>
<td align="center" ><strong>Batas Posisi Spekulatif</strong></td>
<td align="center" >500 Lot</td>
<td align="center" >2000 Lot</td>
<td align="center" >5.000 Lot</td>
</tr>
<tr>
<td align="center"  rowspan="2" valign="top"><strong>Batas Perubahan Harga</strong></td>
<td align="center" >Rp 10.000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
<td align="center" >Rp 10.000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
<td align="center" >Rp 10.000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.</td>
</tr>
<tr>
<td align="center" colspan="3"><strong><u>Batas perubahan harga ini tidak berlaku untuk Bulan Berjalan dan Bulan Terdekat, kalau Bulan Berjalan sudah tidak diperdagangkan lagi.</u></strong></td>
</tr>
<tr>
<td align="center" ><strong>Tukar Fisik dengan Berjangka</strong></td>
<td align="center" colspan="3">Pihak-pihak yang melakukan transaksi jual/beli Emas diluar bursa dapat mendaftarkannya ke Bursa untuk ditukar dengan transaksi berjangka bagi kedua belah pihak.</td>
</tr>
<tr>
<td align="center" ><strong>Waktu Pemberitahuan Penyerahan</strong></td>
<td align="center" colspan="3">Pihak yang mempunyai posisi jual pada Bulan Berjalan, dapat melakukan Pemberitahuan Penyerahan dalam waktu 12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan.</td>
</tr>
<tr>
<td align="center" ><strong>Waktu Pemberitahuan Alokasi</strong></td>
<td align="center" colspan="3">Segera setelah sesi Pasca Penutupan dan penyampaian Surat Pemberitahuan Penyerahan</td>
</tr>
<tr>
<td align="center" ><strong>Waktu Serah</strong></td>
<td align="center" colspan="3">Paling lambat 2 (dua) hari perdagangan setelah Pemberitahuan Penyerahan</td>
</tr>
<tr>
<td align="center" ><strong>Tempat Penyerahan</strong></td>
<td align="center" colspan="3">Di Gudang Terdaftar di Jakarta, Surabaya, Bandung, Semarang, Solo, Yogyakarta, Medan, Makassar, Manado, Banjarmasin, Lampung, dan Denpasar. Pilihan tempat penyerahan berada pada penjual</td>
</tr>
<tr>
<td align="center" ><strong>Bulan Kontrak</strong></td>
<td align="center" colspan="3">3 (tiga) bulan berturut-turut, sehingga setiap hari perdagangan terdapat tiga Bulan Kontrak</td>
</tr>
</table>';
$pdf->writeHTMLCell(182, '', 14, 70,$table2, 0, 0, 0, true, 'J', true);

$pdf->AddPage();
$table2='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
<td align="center"  valign="top"><strong>Satuan Penyerahan</strong></td>
<td align="justify" ><ul><li>Penyerahan emas bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 5 (lima) lot atau kelipatannya</li></ul>
	<ul><li>Penyerahan emas harus dilakukan dalam lot yang terpisah, masing-masing 1 Kg berat bersih, dan berat tersebut dicantumkan dalam Surat Bukti Penyimpanan</li></ul>
</td>
<td align="justify" ><ul><li>Penyerahan emas bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 4 (empat) lot atau kelipatannya</li></ul>
	<ul><li>Penyerahan emas harus dilakukan dalam lot yang terpisah, masing-masing 250 gram berat bersih, dan berat tersebut dicantumkan dalam Surat Bukti Penyimpanan</li></ul>
</td>
<td align="justify" ><ul><li>Penyerahan emas bisa dilaksanakan apabila pihak penjual dan pembeli memiliki jumlah minimal 10 (sepuluh) lot atau kelipatannya</li></ul>
	<ul><li>Penyerahan emas harus dilakukan dalam lot yang terpisah, masing-masing 100 gram berat bersih, dan berat tersebut dicantumkan dalam Surat Bukti Penyimpanan</li></ul>
</td>
</tr>
<tr>
<td align="center" ><strong>KALKULASI: Profit/Loss</strong></td>
<td align="center" colspan="3">&raquo; GOL; GOL250; GOL100:
<br/>(Harga Jual - Harga Beli) x lot x Ukuran Kontrak
</td>
</tr>
</table>';
$pdf->writeHTMLCell(182, '', 14, 27,$table2, 0, 0, 0, true, 'J', true);

$table3 = '
<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
	<td align="left"><strong>Market Order</strong></td>
	<td valign="top" colspan="2" align="justify">Amanat untuk secara langsung membeli/menjual kontrak berjangka pada harga pasar.</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>Limit Order/Stop Order</strong></td>
	<td valign="top" colspan="2" align="justify">Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.
	<br/><u><strong>Pemasangan Stop Order untuk membatasi Rugi (stop loss) mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan untuk melikuidasi Kontrak Berjangka.</strong></u>
</td>
</tr>
<tr>
	<td align="left" rowspan="2" valign="top"><strong>Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)</strong></td>
	<td valign="top" align="justify">Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.
		Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.</td>
	<td valign="top" rowspan="2" align="justify">Apabila Nasabah mempunyai posisi terbuka (baik posisi Beli maupun Jual) pada bulan spot dan ingin melakukan penyerahan fisik, maka pada 12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan, nasabah wajib melakukan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak  posisi terbuka yang dimilikinya.
		Apabila Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka tersebut dapat dilakukan Force Liquidation.
		Pada saat Hari Perdagangan Terakhir berakhir, Untuk Serah Terima fisik, Nasabah yang memiliki Posisi Jual harus menyediakan Barang yang sesuai dengan mutu, dan jumlah lot satuan penyerahan, sedangkan Nasabah yang memiliki Posisi Beli harus menyediakan 2/3 dari sisa Kontrak yang harus dipenuhinya, dan menerima penyerahan fisik.
		Baik Posisi Jual dan Beli, akan dikenakan biaya Pengiriman / Delivery Fee sesuai dengan Tabel diatas.</td>
</tr>
<tr>
	<td valign="top" align="justify">Untuk penarikan margin (Withdrawal) dapat dilakukan dengan mengajukan permohonan setiap hari kerja Senin - Jumat sampai  dengan pukul 12.00 WIB dan tidak dapat diwakilkan.</td>
</tr></table>';
$pdf->writeHTMLCell(182, '', 14, 100,$table3, 0, 0, 0, true, 'J', true);

$pdf->AddPage();
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(40, 88.6,'Margin Call & Force Liquidation', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(60, 0,'Margin Call Equity level: (50% < Margin Level < 90%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah  mencapai level antara (50%< Margin Level <90%) dari Margin Requirement.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Force Liquidation dilakukan apabila:
A. Margin Level mencapai 50% atau dibawahnya.
Apabila Equity account Nasabah mencapai level 50% atau dibawahnya dari Margin Requirement, maka Force Liquidation akan dilakukan.

B. Penambahan Dana pada Bulan Spot
Apabila Nasabah mempunyai posisi terbuka (baik posisi Beli maupun Jual) pada bulan spot dan ingin melakukan penyerahan fisik, maka pada 12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan, nasabah wajib melakukan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak  posisi terbuka yang dimilikinya.
Apabila Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka tersebut dapat dilakukan Force Liquidation.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak Berjangka tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);

$table3 = '
<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
	<td align="left" valign="top"><strong>Akhir Masa Kontrak</strong></td>
	<td valign="top"  align="justify">Nasabah yang masih memiliki posisi terbuka <strong>Jual</strong> hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menyerahkan fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (Untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (Untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan menerima dana senilai kontrak.
		
		Apabila Nasabah gagal menyerahkan fisik kontrak berupa Emas, maka akan dilakukan Cash Settlement sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.
	</td>
	<td valign="top"  align="justify">Nasabah yang masih memiliki posisi terbuka <strong>Beli</strong> hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat menerima fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan membayar atau melunasi dana senilai kontrak.
		
		Apabila Nasabah gagal menyediakan dana sesuai dengan nilai kontrak, maka akan dilakukan Cash Settlement sesuai dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>KERAHASIAAN</strong></td>
	<td valign="top"  align="justify" colspan="2">Setiap nasabah akan mendapatkan Login, Password, dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform JAFeTS Colt, dan untuk melakukan DQ apabila terjadi gangguan pada platform JAFeTS Colt.
		
		Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama <strong>WAJIB</strong> untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.
	</td>
</tr></table>';
$pdf->writeHTMLCell(182, '', 14, 116,$table3, 0, 0, 0, true, 'J', true);
$pdf->AddPage();
$table4='<table cellpadding="5" width="100%" class="tab-rule" border="1"><tr>
	<td align="left" valign="top"><strong>Lain-Lain (Miscellaneous)</strong></td>
	<td valign="top"  align="justify" colspan="2">
		<ol><li>Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market</li>
		<li>Waktu yang digunakan pada sistem adalah GMT + 7.</li>
		<li>Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan</li>
		<li>Platform JAFeTS Colt dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan sesuai dengan perintah nasabah.</li></ol>
		Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka (021-29339318) disertai Phone Password.
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>REPORTING</strong></td>
	<td valign="top"  align="justify" colspan="2">
		<ol><li>Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem JAFeTS Colt secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang dikirimkan secara otomatis ke email nasabah.</li>
		<li>Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada laporan yang tersedia didalam Sistem JAFeTS Colt.</li>
		<li>Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan nasabah tersebut.</li>
		<li>Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut dianggap benar dan sah.</li></ol>
	</td>
</tr>
<tr>
	<td align="left" valign="top"><strong>PENYELESAIAN PERSELISIHAN</strong></td>
	<td valign="top"  align="justify" colspan="2">
		<ol><li>Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis transaksi, report, dan data-data pendukung lainnya.</li>
		<li>Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.</li></ol>
		Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.
	</td>
</tr>

</table>';
$pdf->writeHTMLCell(182, '', 14, 27,$table4, 0, 0, 0, true, 'J', true);
$pdf->AddPage();
$table5='<table cellpadding="5" width="100%" class="tab-rule" border="1">
<tr>
    <td align="center" colspan="2">Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang<br/>
<b>PERATURAN PERDAGANGAN (TRADING RULES)</b>, mengerti dan menerima ketentuan<br/>
dalam bertransaksi.</td>
  </tr>
  <tr>
    <td>Pernyataan menerima / tidak</td>
    <td width="3%">:</td>
    <td>Ya</td>
  </tr>
  <tr>
	<td>Menerima pada Tanggal</td>
	<td>:</td>
	<td>'.$formgol['tanggal'].'</td>
  </tr>
</table>';
$pdf->writeHTMLCell(182, '', 14, 27,$table5, 0, 0, 0, true, 'J', true);

/*
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
	
$pdf->SetFont('Helvetica','B','13');
$pdf->Write(0, 'Formulir: Nomor 107.PBK.06', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(0);

$pdf->Write(0, 'Peraturan Perdagangan (Trading Rules)
Kontrak Berjangka Emas (GOL. GOL250, GOL100)
', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'A.	Spesifikasi Kontrak', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->MultiCell(30, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 1Kg', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 100 Gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 100 Gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times','','10');
$pdf->MultiCell(30, 0,'Kode Kontrak', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'GOL', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'GOL 250', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'GOL 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(30, 13.4,'Dasar Kontrak', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1 kg Emas dengan nomor seri dan stempel dari refineri yang diakui LBMA.', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'250 g Emas dengan nomor seri dan stempel dari refineri yang diakui LBMA.', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'100g Emas dengan nomor seri dan stempel dari refineri yang diakui LBMA.', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(30, 0,'Satuan Kontrak', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1 kg (1000 gram)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'250 gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'100 gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(30, 0,'Satuan Penyerahan', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'5 Kg (5 Lot @ 1000 gram)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1 kg (4 Lot @ 250 gram)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1 kg (10 Lot @ 100 gram)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(30, 0,'Posisi Wajib Lapor', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'150 Lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'600 Lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1.500 Lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(30, 13.5,'Batas Posisi Spekulatif', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 13.5,'500 Lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 13.5,'2.000 Lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 13.5,'5.000 Lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(30, 13.5,'Perubahan Harga Minimum (Tik)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 13.5,'Rp 50,-/gram (termasuk PPN) 
Rp 50.000,-/lot (termasuk PPN)
', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 13.5,'Rp 50,-/gram (termasuk PPN)
Rp 12.500,-/gram (termasuk PPN)
', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 13.5,'	Rp 50,-/gram (termasuk PPN) 
Rp 5.000,-/gram (termasuk PPN)
', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(30, 13.5,'Batas Perubahan Harga', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Rp 5000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Rp 5000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Rp 10.000,- per gram diatas atau dibawah Harga Penyelesaian hari perdagangan sebelumnya.', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'B. Margin', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Nasabah harus menempatkan sejumlah dana (Margin) pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah berdasarkan bukti setoran bank, form penyetoran dana dan form penarikan dana yang diterima. Dana Nasabah bisa juga bertambah/berkurang bila terjadi laba/rugi pada transaksi di dalam Rekening Nasabah.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->MultiCell(0, 0,'a.	Margin Awal Pembukaan Rekening
				Dana minimum yang wajib disetor oleh Nasabah untuk membuka Rekening (Account) sebesar Rp 50.000.000,-
', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->MultiCell(0, 0,'b.	Margin Requirement/Initial Margin
				Margin yang diberlakukan per-lot adalah 
', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->MultiCell(30, 0,'Initial Margin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 1 Kg (1000 gram)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 250 gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 100 gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(30, 0,'Daytrade', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Rp. 10.000.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Rp. 2.500.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Rp. 1.000.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->AddPage();

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'C.	Commission (Komisi)', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Komisi dibebankan kepada Nasabah setiap kali transaksi per-lot (settled) (lihat table dibawah ini)', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->MultiCell(40, 9,'Batas Perubahan Harga', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9,'Batas perubahan harga ini tidak berlaku untuk Bulan Berjalan dan Bulan Terdekat, kalau Bulan Berjalan sudah tidak diperdagangkan lagi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Tukar Fisik dengan Berjangka', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9,'Pihak-pihak yang melakukan transaksi jual/beli Emas diluar bursa dapat mendaftarkannya ke Bursa untuk ditukar dengan transaksi berjangka bagi kedua belah pihak.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Waktu Pemberitahuan Penyerahan', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9,'Pihak yang mempunyai posisi jual pada Bulan Berjalan, dapat melakukan Pemberitahuan Penyerahan dalam waktu 12 (Dua Belas) hari perdagangan terakhir Bulan Berjalan.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Waktu Pemberitahuan Alokasi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9,'Segera setelah sesi Pasca Penutupan dan penyampaian Surat Pemberitahuan Penyerahan.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Waktu Serah', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9,'Paling lambat 2 (dua) hari perdagangan setelah Pemberitahuan Penyerahan.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Mutu', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9,'Emas dengan kualitas kemurnian minimum 99,99% dilengkapi dengan angka seri & stempel dari refineri yang diakui oleh LBMA (bisa dari dalam dan luar negeri).', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Tempat Penyerahan', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9,'Di Gudang Terdaftar di Jakarta dan Surabaya, pilihan tempat penyerahan berada pada penjual.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->SetFont('times','B','10');
$pdf->MultiCell(40, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.5, 0,'Kontrak 1 Kg (1000 gram)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.5, 0,'Kontrak 250 gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.5, 0,'Kontrak 100 gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times','','10');
$pdf->MultiCell(40, 0,'Komisi', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.5, 0,'Rp. 500.000,- (lot settled)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.5, 0,'Rp. 150.000,- (lot settled)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.5, 0,'Rp. 50.000,- (lot settled)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'D.	Jam Perdagangan', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Jam Perdagangan sesuai dengan ketentuan berikut :', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->MultiCell(40, 9,'Hari & Jam Perdagangan', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9,'Setiap hari perdagangan Pukul 
09.30-17.30 WIB', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 18,'Pasca Penutupan', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1.  Sesi Pasca Penutupan dilaksanakan setiap hari perdagangan yaitu mulai pukul 17.45 WIB 
						sampai dengan 18.00 WIB. 
2.  Amanat beli dan jual pada saat Pasca Penutupan yang dimasukkan kedalam JAFeTS adalah 
						pada Harga Penyelesaian/Harga Settlement hari itu.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 18,'Hari Perdagangan Terakhir', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Perdagangan untuk suatu Bulan Kontrak, berakhir pada akhir sesi Pasca Penutupan pada hari perdagangan ketiga sebelum hari kerja terakhir bulan yang bersangkutan. Apabila hari perdagangan ketiga sebelum hari kerja terakhir tersebut bukan merupakan hari perdagangan, maka hari perdagangan sebelumnya menjadi hari perdagangan terakhir.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'E.	Bulan Kontrak ', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(40, 0,'Bulan Kontrak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'3 (tiga) bulan berturut-turut, sehingga setiap hari perdagangan terdapat tiga Bulan Kontrak.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'F.	Penambahan Margin', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Nasabah yang memiliki posisi terbuka (baik posisi Beli maupun Jual) pada bulan berjalan di tanggal 15, maka nasabah wajib melakukan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak posisi terbuka yang dimilikinya.

Apabila Nasabah tidak mampu menyediakan dana yang dimaksud, maka posisi terbuka tersebut dapat dilakukan Force Liquidation.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->AddPage();

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'G.	Akhir Masa Kontrak', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'a. 	Nasabah yang masih memiliki posisi terbuka Jual hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat 
					menyerahkan fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot 
					(Untuk kontrak 1 kg) atau 250 gram/Lot x 4 Lot (Untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot 
					(Untuk kontrak 100 gram), dan menerima dana senilai kontrak.

					Apabila Nasabah gagal menyerahkan fisik kontrak berupa Emas, maka akan dilakukan Cash Settlement sesuai dengan 
					Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.
', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->MultiCell(0, 0,'b.	Nasabah yang masih memiliki posisi terbuka Beli hingga jatuh tempo kontrak bulan berjalan maka Nasabah dapat 
					menerima fisik kontrak berupa Emas dengan 99.9 finest kualitas LBMA senilai 1000 gr/lot x 5 Lot (untuk kontrak 1 kg) 
					atau 250 gram/Lot x 4 Lot (untuk kontrak 250 gram) atau 100 gram/Lot x 10 Lot (Untuk kontrak 100 gram), dan 
					membayar atau melunasi dana senilai kontrak.
		
					Apabila Nasabah gagal menyediakan dana sesuai dengan nilai kontrak, maka akan dilakukan Cash Settlement sesuai 
					dengan Closing Settlement price yang ditetapkan oleh Bursa Berjangka Jakarta.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'H.	Delivery Fee', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Apabila terjadi penyerahan fisik atas kontrak yang ditransaksikan maka Nasabah dibebankan biaya administrasi. (Delivery Fee) (lihat tabel di bawah ini)', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->SetFont('times','B','10');
$pdf->MultiCell(30, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 1 Kg (1000 gram)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 250 gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Kontrak 100 gram', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times','','10');
$pdf->MultiCell(30, 9,'Delivery Fee', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 9,'Rp. 250.000,- / 1 Lot kontrak 1kg', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 9,'Rp. 250.000,- / 4 Lot kontrak 250 g', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 9,'Rp. 250.000,- / 10 Lot kontrak 100 g', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'I.	Batas Lot Per-Order', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Batas penyampaian setiap order Nasabah untuk membuka posisi pada hari perdagangan dari masing-masing kontrak, hanya dapat membeli (buy new) dan/atau menjual (sell new) maksimum 20 lot untuk setiap bulan kontrak.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'J.	Call Margin', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Call margin akan dilakukan apabila margin level menyentuh/mencapai range (50% < call margin < 90%) terhadap equity yang ada. Untuk mempertahankan posisi Nasabah yang terbuka maka setiap Nasabah diharapkan untuk segera menambah kekurangan margin.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'K.	Force Liquidation', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'o	Apabila Nasabah tidak menambah kekurangan margin (memenuhi call margin), maka perusahaan berhak melikuidasi posisi 
			terbuka (open) tersebut pada saat terjadi kondisi margin level menyentuh/mencapai level = 50% dari Margin Requirement.

o	Apabila Nasabah tidak mampu menyediakan penambahan margin sesuai dengan 1/3 (sepertiga) dari nilai kontrak posisi 
			terbuka yang dimilikinya dana yang dimaksud, maka perusahaan berhak melikuidasi posisi terbuka (open) tersebut.

			Penutupan posisi Nasabah mungkin tidak akan dapat membatasi kerugian Nasabah sampai jumlah tertentu saja atau tidak 
			dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan menutup atau melikuidasi posisi Kontrak 
			Berjangka tersebut.
', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'L.	Over Trading', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Perusahaan akan menolak order Nasabah apabila Nasabah melakukan transaksi yang melebihi dana atau margin yang ada', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'M.	Price (Harga)', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Harga masing-masing kontrak sesuai dengan harga yang terjadi di Bursa Berjangka Jakarta dengan sistem JAFeTS3.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'N.	Market Order', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Adalah amanat untuk membeli/menjual kontrak berjangka pada harga pasar di Bursa Berjangka Jakarta.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'O.	Limit Order/Stop Order ', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'1. Nasabah dapat menempatkan Limit Order/Stop Order hanya dengan ketentuan Day Trade, setiap Limit Order/Stop Order 
				akan dihapus secara otomatis setelah berakhir jam perdagangan dan Nasabah dapat kembali menempatkan Limit 
				Order/Stop Order yang diinginkan pada hari perdagangan berikutnya.

2. Nasabah dapat menempatkan amanat Limit Order mulai pukul 08.30 WIB atau 1 (satu) jam lebih awal sebelum jam 
				perdagangan dibuka.

				Pemasangan Stop Order untuk membatasi Rugi (stop loss) mungkin tidak akan dapat membatasi kerugian Nasabah 
				sampai jumlah tertentu saja atau tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan 
				untuk melikuidasi Kontrak Berjangka.
', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'P.	Sistem Order', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Nasabah dapat menyampaikan amanatnya dengan cara menghubungi dealer PT. Esandar Arthamas Berjangka melalui telepon setiap hari perdagangan dan dealer akan meneruskan amanat Nasabah tersebut ke Bursa Berjangka Jakarta melalui sistem JAFeTS 3.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'Q.	Margin In & Out', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->writeHTML('<ol type="a">
<li>Nasabah dapat melakukan transaksi setelah dana good fund.</li>
<li>Untuk penarikan margin dapat dilakukan dengan mengajukan permohonan  setiap hari kerja  Senin s/d Jumat sampai  dengan pukul 12.00 WIB dengan menandatangani slip penarikan dana terlebih dahulu.</li>
</ol>', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('times','B','10');
$pdf->Write(0, 'R.	Kerahasiaan', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times','','10');
$pdf->MultiCell(0, 0,'Setiap Account memiliki phone password yang sifatnya SANGAT PRIBADI dan RAHASIA. Phone password digunakan setiap kali Nasabah ingin melakukan transaksi. Jika terjadi perbedaan phone password yang di sebutkan Nasabah, Pihak perusahaan berhak menolak untuk melakukan transaksi.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(2);

$pdf->SetFont('times','B','10');
$pdf->MultiCell(0, 0,'Perusahaan tidak bertanggung jawab apabila terjadi penyalahgunaan nomor Account dan phone password akibat kelalaian Nasabah sendiri.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(2);
	
$pdf->MultiCell(50,0,'Pernyataan Menerima / Tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$formgol['Menerima'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$formgol['tanggal'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
*/
?>