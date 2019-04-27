<?php
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

$pdf->Write(0, 'Trading Rules Kontrak Derivatif Stock Index USD Regular', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'PEMBUKAAN ACCOUNT (REKENING)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 0,'Aplikasi Penerimaan Nasabah Secara Elektronik dan Online', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Untuk keperluan pembukaan rekening, maka nasabah wajib registrasi melalui Sistem Agreement dan Registrasi Online yang ada di website esandar.co.id guna pengisian aplikasi pembukaan rekening transaksi dan dokumen-dokumen yang wajib dibaca, dipahami dan dimengerti.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 75, 'Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0, 'Dokumen Pemberitahuan Adanya Risiko:

Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti Pernyataan Menerima Pemberitahuan Adanya Risiko yang ada pada Dokumen Pemberitahuan Adanya Risiko.

Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 75, 'Perjanjian Pemberian Amanat:

Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian Pemberian Amanat.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 31,'Rekening Terpisah / Segregated Account', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Nasabah dapat melakukan setoran dana dalam mata uang USD sebagai Margin Deposit untuk jaminan Pembukaan Account, dan Additional Margin (Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:

    Bank Central Asia (BCA) Sudirman - Jakarta
    No. Account: 035.313.4610 (USD)
    Atas Nama: PT. Esandar Arthamas Berjangka', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 13.4,'Rekening Nasabah Berlaku Efektif', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Nasabah dapat melakukan transaksi, apabila setoran dana telah efektif (Good Fund) dan telah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'KETENTUAN TRADING', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 22.3,'Margin Deposit', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Margin Deposit Awal', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : USD. 5.000.- (New Account).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Rate', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Rate dalam USD', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Harga Penutupan Pasar(Closing Market)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9, 'Harga Penutupan Pasar berdasarkan Harga Setlement Price', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(40, 0,'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Commission Charge: USD. 50,- / 1 lot settled', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(90, 0,'Jam Perdagangan (GMT+7)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0,'Sesi 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Sesi 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(90, 0,'Stock Index Hongkong', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0,'08:15 - 11:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'12:00 - 15:30', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(90, 0,'Stock Index Jepang', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0,'06:30 - 13:25', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'14:15 - 01:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(90, 0,'Stock Index Korea', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0,'07:00 - 13:35', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(0, 0,'1. Maksimal Open Posisi Dalam 1 Account 30 LOT
2. Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit setelah market open.
3. Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.
4. DQ menggunakan telepon akan dikenakan spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama dan pada saat
    kondisi server sedang mengalami gangguan teknis (Down).
5. Overnight margin Index Saham Hongkong dimulai setelah sesi 2 berakhir dan Index Saham Jepang dimulai pada sesi 2.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'Trading Facilities', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(0, 0,'1. Kontrak Berjangka (Stock Index Futures)
	   Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang mengenal akhir bulan 
	   perdagangan. Pada akhir bulan perdagangan tersebut posisi nasabah harus terlikuidasi (Clear Posisi).
2. Kontrak Berkala (Stock Index Rollover)
	   Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang tidak mengenal akhir bulan 
	   perdagangan tetapi terdapat Bulan Referensi. Pada bulan referensi tersebut akan diadakan penyesuaian untuk 
	   open posisi yang masih ada dan open posisi (Original Price) tetap ada selama belum dilikuidasi nasabah.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(40, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(72, 0,'Stock Index Futures', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(68, 0,'Stock Index Rollover', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'KOREA', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'KOREA', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 0,'Code Contract', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'HKJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'JPJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'KRJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'HKK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'JPK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'KRK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Contract Size', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Normal Spread', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'0.10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'0.10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Minimum Tick', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'0.05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'0.05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Maximal Volume (Day Trade)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Requirement per 1 lot Day Trade:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Requirement per 1 lot Overnight:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Hedged Day Trade per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Hedged Overnight per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Swap Buy / 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'- ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'USD 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'USD 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'USD 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Swap Sell / 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'USD 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'USD 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'USD 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Open Gap', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->AddPage();

$pdf->MultiCell(40, 53.2,'Bulan Kontrak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'F = Januari
G = Februari
H = Maret
J = April
K = Mei
M = Juni
N = Juli
Q = Agustus
U = September
V = Oktober
X = November
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 53.2,'H = Maret
M = Juni
U = September
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 53.2,'H = Maret
M = Juni
U = September
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 18,'Transaksi Bulan Berikutnya', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 35.5,'Hari Perdagangan Terakhir(Hanya untuk melikuidasi posisi)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 35.5,'Satu hari sebelum hari Perdagangan Terakhir Bulan Kontrak dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 35.5,'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 35.5,'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(24, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(22, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 40,'Roll Over', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 40,'Nasabah harus menutup semua posisinya yang terbuka pada saat waktu kontrak berakhir (expired). Tidak ada Roll Over secara otomatis. Apabila Nasabah belum melikuidasi posisinya yang terbuka pada saat waktu kontrak berakhir, maka Sistem Esandar Trader akan melikuidasi posisi yang terbuka secara otomatis (dengan harga closing market pada Platform Esandar Trader untuk kontrak tersebut)', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 40,'Automatic Rollover (Lihat Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract))', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'KALKULASI: Profit/Loss', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 9,'HKJ5U; JPJ5U; KRJ5U:
(SELL-BUY) X lot X contract size', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 9,'HKK5U; JPK5U; KRK5U:
(SELL-BUY) X lot X contract size', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 9,'Angka Penyelesaian', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Mengacu pada Settlement Price Kontrak Berjangka untuk Bulan Referensi terdekat sampai hari ganti Bulan Referensi.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Hari Ganti Bulan Referensi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Satu hari kerja sebelum hari kerja terakhir Bulan Referensi yang sedang berjalan, Angka Penyelesaian akan mengacu pada Settlement Price Bulan Referensi Berikutnya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(40, 145.8,'Penyesuaian Akibat Ganti Bulan Referensi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Beda antara Angka Penyelesaian kedua bulan kontrak itu pada akhir hari sebelumnya Hari Ganti Bulan
Referensi tidak diperhitungkan sebagai laba atau rugi tetapi dilakukan penyesuaian.

Besarnya penyesuaian yang terjadi sebagai berikut :
Open posisi Buy:
Penyesuaian = (Harga Closing Kontrak Lama-Harga Closing Kontrak Baru) x Contract Size x Lot
Open posisi Sell:
Penyesuaian = (Harga Closing Kontrak Baru-Harga Closing Kontrak Lama) x Contract Size x Lot

Open posisi (original price) tetap ada selama belum dilikuidasi oleh nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 66.4, '', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0, 'Contoh:

Nasabah A Buy HKK5U 0,1 Lot;

Closing kontrak lama 22600
Closing kontrak baru 22625

Penyesuaian
= (22600-22625) x USD 5 x 1
= - USD 125

Contoh:
Nasabah C Buy HKK5U 1 Lot;

Closing kontrak lama 23600
Closing kontrak baru 23500

Penyesuaian
= (23600-23500) x USD 5 x 1
= $ 500', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 66.4, 'Contoh:

Nasabah B Sell HKK5U 1 Lot;

Closing kontrak lama 22600
Closing kontrak baru 22625

Penyesuaian
= (22625-22600) x USD 5x 1
= USD 125

Contoh:
Nasabah D Sell HKK5U 1 Lot;

Closing kontrak lama 23600
Closing kontrak baru 23500

Penyesuaian
= (23500-23600) x USD 5x 1
= - $ 500', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(40, 31,'Ketentuan Pending Order (Limit Order (LO) / Stop Order (SO) / (Stop Loss (SL) /Take Profit (TP))', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 0,'Stock Index Hongkong', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 0,'Stock Index Jepang', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 0,'Stock Index Korea', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 0,'1. Pending Order dapat 
				dipasang pada setiap 
				sesi.
2. Pending Order secara 
				otomatis akan berakhir pada 
				akhir sesi 1 dan 2.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 0,'1. Pending Order dapat 
				dipasang pada setiap 
				sesi.
2. Pending Order secara 
				otomatis akan berakhir pada 
				akhir sesi 1 dan 2.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 26.5,'1. Pending Order dapat 
				dipasang pada setiap sesi.
2. Pending Order secara 
				otomatis akan berakhir pada 
				akhir sesi I.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
	
$pdf->MultiCell(40, 9,'Expiration Pending Order', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9, 'Harga yang tampil di luar jam transaksi tidak berlaku. Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Level/Spread Pending Order (Limit Order (LO) / Stop Order (SO) / Stop Loss (SL) / Take Profit (TP))', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 22.3,'Level / Spread antara harga yang diminta dan harga running adalah minimum 30 poin dari harga Running.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);


$pdf->AddPage();

$pdf->MultiCell(40, 79.5,'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 79.5,'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 79.5,'Apabila equity nasabah tidak mencukupi untuk margin overnight maka untuk margin tambahan (inject dana) harus dilakukan 2 jam setelah market close, dan apabila tidak dilakukan penambahan dana maka posisi nasabah akan dilikuidasi berdasarkan harga market close.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(46.7, 0,'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

1. Dana yang dapat ditarik 
				tidak dapat melebihi dari 
				Free Margin yang ada di 
				platform Esandar Trader.
2. Penarikan dana yang 
				diterima sebelum 
				jam 12:00 wib akan 
				dibayar pada hari 
				yang sama (T+0).
3. Penarikan dana yang 
				diterima setelah 
				jam 12:00 wib akan 
				dibayar pada hari 
				berikutnya (T+1).', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 79.5,'Margin Call & Force Liquidation', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 79.5,'Margin Call Equity Level : 
(10% < Margin Level < 100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah mencapai level antara (10% < Margin Level< 100%)dari Margin Requirement.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'Force Liquidation :

A. Margin Level mencapai 10% atau 
					dibawahnya.

					Apabila Equity account Nasabah mencapai 
					level 10% atau dibawahnya dari Margin 
					Requirement, maka Force Liquidation akan 
					dilakukan.

B. Short Margin untuk posisi Overnight

					Semua posisi yang masih terbuka pada 
					saat market close setiap harinya 
					dengan jumlah margin yang tidak cukup 
					(short margin) akan dilikuidasi dengan 
					harga closing yang mengacu pada harga 
					closing Esandar Trader.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 44.3,'KERAHASIAAN', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(40, 88.5,'Lain-Lain(Miscellaneous)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market
2. Harga yang tampil di luar jam transaksi tidak berlaku.
3. Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang 
				terjadi pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan secara 
				otomatis, tanpa adanya pemberitahuan terlebih dahulu.
4. Open Gap berlaku untuk semua produk futures maupun rollover. Apabila selisih harga closing 
				market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap 
				kontraknya, maka semua posisi open pada overnight akan dihedge secara otomatis oleh 
				Sistem. Atas keuntungan maupun kerugian yang timbul karena Open Gap tersebut menjadi 
				hak atau tanggungjawab nasabah sepenuhnya.
5. Waktu yang digunakan pada sistem adalah GMT + 2.
6. Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui 
				Surat Pemberitahuan
7. Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat 
   menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras 
   atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan 
   sesuai dengan perintah nasabah.
   Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah 
   dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka 
   (021-29339318) disertai Phone Password', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
   
$pdf->MultiCell(40, 53,'Keadaan Hectic Market', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara.

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

1. Bid atau offer hanya ada satu sisi.
2. Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang 
				Penyelenggara.
3. Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang 
				mempengaruhi kondisi pasar financial.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 66.3,'REPORTING', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu 
				Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar 
				Trader secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari 
				sebelumnya yang dikirimkan secara otomatis ke email nasabah.
2. Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat 
				pada laporan yang tersedia didalam Sistem Esandar Trader.
3. Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar 
				Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada 
				pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan 
				nasabah tersebut.
4. Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut 
				dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar 
				Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan 
				Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut 
				dianggap benar dan sah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 31,'PENYELESAIAN PERSELISIHAN', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam
    historis transaksi, report, dan data-data pendukung lainnya.
2. Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai 
    dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Dengan mengisi kolom Ya di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(2);
	
$pdf->MultiCell(50,0,'Pernyataan Menerima / Tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$form806['Menerima'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$form806['tanggal'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

?>