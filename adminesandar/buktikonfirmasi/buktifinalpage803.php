<?php
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/10/2010', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
	
$pdf->SetFont('Helvetica','B','14');
$pdf->Write(0, 'Formulir: Nomor 107.PBK.06', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(0);

$pdf->Write(0, 'Trading Rules Kontrak Derivatif Forex dan Loco London Gold 0,1 Lot', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('Helvetica', 'B', 14);
$pdf->MultiCell(0, 0,'PEMBUKAAN ACCOUNT (REKENING)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('Helvetica', '', 10);
$pdf->MultiCell(40, 0,'Aplikasi Penerimaan Nasabah Secara Elektronik dan Online                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Untuk keperluan pembukaan rekening, maka nasabah wajib registrasi melalui Sistem Agreement dan Registrasi Online yang ada di website esandar.co.id guna pengisian aplikasi pembukaan rekening transaksi dan dokumen-dokumen yang wajib dibaca, dipahami dan dimengerti.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 66.4, 'Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0, 'Dokumen Pemberitahuan Adanya Risiko:

Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti Pernyataan Menerima Pemberitahuan Adanya Risiko yang ada pada Dokumen Pemberitahuan Adanya Risiko.

Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 79.5, 'Perjanjian Pemberian Amanat:

Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian Pemberian Amanat.                                                                                                                                                                                                                                                                                                  ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 31,'Rekening Segregated                                                                                                                                                                                                                                                                                                                                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Nasabah dapat melakukan setoran dana dalam mata uang Rupiah dan US Dollar sebagai Margin Deposit untuk jaminan Pembukaan Account, dan Additional Margin (Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:

    Bank Central Asia (BCA) Sudirman - Jakarta
    No. Account: 035.313.6019 (IDR)
    Atas Nama: PT. Esandar Arthamas Berjangka
	
    Bank Central Asia (BCA) Sudirman - Jakarta
    No. Account: 035.313.4610 (USD)
    Atas Nama: PT. Esandar Arthamas Berjangka', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 10.4,'Rekening Nasabah Berlaku Efektif                                                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Nasabah dapat melakukan transaksi, apabila setoran dana telah efektif (Good Fund) dan telah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->MultiCell(0, 0,'KETENTUAN TRADING', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('Helvetica', '', 10);
$pdf->MultiCell(40, 17.9,'Margin Deposit                                                                                                                                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Margin Deposit Awal                          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : USD. 500.- (New Account).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Rate                                                                                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Fixed Rate : 1 USD = 10.000 IDR
                     1 USD = 12.000 IDR
Floating Rate', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Commission Charge: USD. 5,- / 0.1 lot closingd', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(4);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(180, 0,'Jam Perdagangan (WIB)', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(60, 0,'    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,'Winter Time', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,'Summer Time', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(60, 0,'MAJOR & CROSS RATE                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,'Senin buka pada jam 05:05 dan tutup pada hari sabtu jam 05:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,'Senin buka pada jam 04:05 dan tutup pada hari sabtu jam 04:00', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(60, 0,'LOCO LONDON GOLD                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,'Senin buka pada 06.05 dan Sabtu tutup pada jam 05.00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,'Senin buka pada jam 05.05 dan sabtu tutup pada jam 04.00', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(60, 0,'Waktu istirahat pada time trading LOCO LONDON GOLD', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,'05.00 sampai jam 06.00 						(Setiap Hari)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,'04.00 sampai jam 05.00 						(Setiap Hari)', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(4);
 
$pdf->MultiCell(30, 0,'MAJOR RATE                                                                                       ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Contract Size                                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'Minimum Tick Value                            ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'Normal Spread
                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Maximum Volume 				(0.1 lot)
 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'Margin Requirement per 0,1 lot Day Trade / Overnight :    ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'Margin Hedged      per 0,1 lot                                          ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','','8');
$pdf->MultiCell(30, 0,'EURUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'USDJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'$100,000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'GBPUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'USDCHF', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'$ 100,000', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','','8');
$pdf->MultiCell(30, 0,'AUDUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'AUD 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(0, 0,'    ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'CROSS RATE', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'   ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'EURJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'EUR 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD.100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'GBPJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'GBP 100,000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'AUDJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'AUD 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'CHFJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'CHF 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.0001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'EURGBP', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'EUR 100,000', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.0003', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 150.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 30,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(0, 0,'         ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'LOCO LONDON GOLD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'                                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'                                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'                                                ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'XAUUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 100 Troy Ounce', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'USD 0.01', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'USD 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'- Maksimal Open Posisi Dalam 1 Account 20 LOT
- Dealing Quote (DQ) menggunakan telepon akan dikenakan tambahan 3 point untuk Majors, Cross Rate dan
  tambahan 1$ untuk Loco London Gold dari tabel di atas.
- Ketentuan ini tidak berlaku bila kondisi server sedang mengalami gangguan teknis (down)', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 40,' KALKULASI : Profit / Loss', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(75, 40,'  EURUSD; GBPUSD; AUDUSD  : 
   (SELL - BUY)x lot x contract size
   
   USDJPY; USDCHF  : 
   (SELL - BUY) x lot x contract size/harga likuidasi', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->MultiCell(75, 0,'  EURJPY; GBPJPY; AUDJPY; CHFJPY  : 
   (SELL - BUY)x lot x contract size/(USDJPY)
   
   EURGBP  : 
   (SELL - BUY) x lot x contract size x (GBPUSD)
   
   XAUUSD  : 
   (SELL - BUY) x lot x contract size', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
 
$pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 101.5,'KALKULASI: Swap', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(75, 101.5,'EURUSD; GBPUSD; AUDUSD  : 
(closing price x lot x contract size x interest)/360

   USDJPY; USDCHF  : 
   (USD 100,000.- x lot x interest)/ 360', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->MultiCell(75, 0,'EURJPY : 
(EURUSD closing price x lot x contract size x interest)/360

GBPJPY : 
(GBPUSD closing price x lot x contract size x interest)/360

AUDJPY : 
(AUDUSD closing price x lot x contract size x interest)/360

CHFJPY : 
lot x contract size x interest /USDCHF closing price /360

EURGBP : 
(EURUSD closing price x lot x contract size x interest)/360

XAUUSD : 
(XAUUSD closing price x lot x contract size x interest)/360', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);   

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 22.3,'Interest Rate / Swap', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'Interest rate akan mempengaruhi equity account nasabah yang mempunyai posisi open (overnight). Masing-masing currency tersebut tidak sama tingkat interest rate (suku bunga). Interest rate tersebut tergantung kepada Pedagang.
        Perhitungan bunga 1 hari valuta walaupun dari hari Jumat ke Senin
        Perhitungan bunga 3 hari valuta walaupun dari hari Rabu ke Kamis', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 53,'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(75, 53,'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0,'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

1. Dana yang dapat ditarik tidak dapat 			
				melebihi dari Free Margin yang ada di 
				platform Esandar Trader.
2. Penarikan dana yang diterima sebelum jam 
				12:00 wib akan dibayar pada hari yang 
				sama(T+0).
3. Penarikan dana yang diterima setelah jam
				12:00 wib akan dibayar pada hari 
				berikutnya(T+1).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Level / Spread Pending order(Limit Order(LO) / Stop Order(SO))', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(150, 22.5,'Level / Spread antara harga yang diminta dan harga running adalah minimum 150 poin dari harga running untuk harga Forex dan Cross Rate, sedangkan untuk Loco London Gold sebesar USD 2.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 22.5,'Expiration Pending Order', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(150, 0,'Expiration (masa berlaku ) Pending Order untuk Limit, stop, TP, SL adalah Good Till 
Friday (GTF). Jika Market Holiday (Libur) atau jam trading closing lebih awal maka semua 
Pending Order untuk new position dan liquidation position akan dicancel secara automatis 
oleh system setelah market closed.Apabila terjadi error pada Sistem, Konfirmasi Pending 
Order akan diputuskan oleh PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 70.5,'Margin Call & Force Liquidation', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(75, 70.5,'Margin Call Equity Level : 
(10% < Margin Level < 100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah mencapai level antara (10% < Margin Level< 100%)dari Margin Requirement.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0,'Force Liquidation :

A.Margin Level mencapai 10% 
				atau dibawahnya.
				Apabila Equity account Nasabah 
				mencapai level 10% atau dibawahnya 
				dari Margin Requirement, maka Force 
				Liquidation akan dilakukan.

B. Short Margin untuk posisi Overnight
				Semua posisi yang masih terbuka pada 
				saat market close setiap harinya 
				dengan jumlah margin yang tidak 
				cukup (short margin) akan dilikuidasi 
				dengan harga closing yang mengacu 
				pada harga closing Esandar Trader.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 53.3,'Keadaan Hectic Market', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(150, 0,'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara.

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

1. Bid atau offer hanya ada satu sisi;
2. Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang 
				Penyelenggara;
3. Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang 
				mempengaruhi kondisi pasar financial.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'KERAHASIAAN                                                                                                                                                                                                                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(150, 0,'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 66.3,'REPORTING', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'1. Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, 
				baik itu Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam 
				di sistem Esandar Trader secara online atau dapat mengakses Laporan Transaksi 
				yang dilakukan di hari sebelumnya yang dikirimkan secara otomatis ke email nasabah.
2. Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang 
				terdapat pada laporan yang tersedia didalam Sistem Esandar Trader.
3. Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar
    Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada 
				pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan 
				Keuangan nasabah tersebut.
4. Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah 
				tersebut dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada 
				PT. Esandar Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah 
				menerima Laporan Keuangan tersebut seperti yang tertulis didalamnya maka Laporan 
				Keuangan nasabah tersebut dianggap benar dan sah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10'); 
$pdf->MultiCell(30, 66.4,'Lain-Lain							  (Miscellaneous)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'1. Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market.
2. Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang 
    dilakukan pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan
    secara otomatis, tanpa adanya pemberitahuan terlebih dahulu.
3. Waktu yang digunakan pada sistem adalah GMT + 2.
4. Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat
    Pemberitahuan atau email nasabah.
5. Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat
    menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat
    keras atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat
    dilaksanakan sesuai dengan perintah nasabah.
	
Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka (021-29339318) disertai Phone Password.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
	
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'PENYELESAIAN PERSELISIHAN                                                                                                                                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(150, 0,'1. Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam 
				historis transaksi, report, dan data-data pendukung lainnya.
2. Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka 
				dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

				Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah 
				dan mengajukan kepada PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(180,0,'Dengan mengisi kolom Ya di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(90,0,'Pernyataan Menerima / Tidak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(90,0,': '.$form803['Menerima'], 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(90,0,'Menyatakan pada Tanggal', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(90,0,': '.$form803['tanggal'], 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

?>