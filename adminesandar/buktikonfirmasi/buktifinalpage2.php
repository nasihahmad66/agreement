<?php
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
	
$pdf->SetFont('Helvetica','B','13');
$pdf->Write(0, 'Formulir Nomor 107.PBK.01', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(0);

$pdf->Write(0, 'PROFIL PERUSAHAAN PIALANG BERJANGKA', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(70, 0,'Nama', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': PT. Esandar Arthamas Berjangka' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(74, 0,': Agung Podomoro Land Tower Lt 36
  Jl Letjen S Parman Kav 28
  Jakarta Barat 11470 Indonesia' , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telepon', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0,': (021) 2933 92 29' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Faksimili', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0,': (021) 2933 92 30' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'E-Mail', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,': info@esandar.co.id' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Home-Page', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,': http://esandar.co.id' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','B','10');
$pdf->Write(0, 'Susunan Pengurus Perusahaan', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(70, 0,'Direktur Utama', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': Francois Haberth Hallatu' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Direktur Kepatuhan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,': Zahid Anwari' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Direktur Operasional', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0,': Handoko' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->Ln(5);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(70, 0,'Dewan Komisaris', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(70, 0,'Komisaris Utama', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47, 0,': Supardi Hardjono' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Komisaris', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,': Solihin' , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);


$pdf->SetFont('Helvetica','B','10');
$pdf->Write(0, 'Susunan Pengurus Perusahaan', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(100, 0,'Nomor dan Tanggal Izin Usaha dari Bappebti', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': No 78/BAPPEBTI/PA/07/2012' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nomor dan Tanggal Keanggotaan Bursa Berjangka', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': SPAB-070/BBJ/05/04' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nomor dan Tanggal Keanggotaan Lembaga Kliring Berjangka', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': 21/AK-KBI/PA/X/2012' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nomor dan Tanggal Persetujuan sebagai Peserta Sistem Perdagangan Alternatif', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': SPAB-070/BBJ/05/04' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nama Penyelenggara Sistem Perdagangan Alternatif', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': PT. Harta International Investama' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Kontrak Berjangka Yang Diperdagangkan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': Kakao dan GOL' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Kontrak Derivatif Syariah Yang Diperdagangkan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': --' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Kontrak Derivatif dalam Sistem Perdagangan Alternatif', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': Forex
  Stock Indeks
  Komoditi' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);


$pdf->Open();
$pdf->AddPage();
$pdf->MultiCell(100, 0,'Biaya secara rinci yang dibebankan kepada Nasabah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': Biaya Komisi per lot
  Biaya Swap
  Biaya Penyerahan fisik (apabila ada)' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nomor atau alamat email jika terjadi keluhan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': 021-2933 9318 atau
  admin@esandar.co.id dan clients.esandar@yahoo.com', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Sarana penyelesaian perselisihan yang dipergunakan apabila terjadi perselisihan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': Badan Arbitrase Perdagangan Berjangka Komoditi 
  Pengadilan Negeri Setempat' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nama-Nama Wakil Pialang Berjangka yang Bekerja di Perusahaan Pialang Berjangka', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': - Hamrija
  - Francois Haberth Hallatu
  - Erwin Gunawan
  - Sulianto
  - Mohammad Alamsyah Abdi Negara
  - Handoko
  - Mariano A Zakarias Soe
  - Neneng Rihla
  - Dede Mulyadi
  - Muhammad Iqbal' , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nama-Nama Wakil Pialang Berjangka yang secara khusus ditunjuk oleh Pialang Berjangka untuk melakukan verifikasi dalam rangka penerimaan Nasabah elektronik on-line', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': - Erwin Gunawan
  - Sulianto
  - Mohammad Alamsyah Abdi Negara
  - Handoko
  - Dede Mulyadi
  - Muhammad Iqbal' , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nomor Rekening Terpisah (Segregated Account) Perusahaan Pialang Berjangka', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': Bank Central Asia IDR cabang Sudirman
  No Acc : 035.313.6019
  Bank Central Asia USD cabang Sudirman
  No Acc : 035.313.4610' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','B','11');
$pdf->Write(0,'PERNYATAAN TELAH MEMBACA PROFIL PERUSAHAAN PIALANG BERJANGKA', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);	

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Dengan mengisi kolom YA di bawah ini, saya menyatakan bahwa saya telah membaca dan menerima informasi PROFIL PERUSAHAAN PIALANG BERJANGKA, mengerti dan memahami isinya.', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(2);
	
$pdf->MultiCell(50,0,'Pernyataan Menerima / Tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$Menerima, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$form2['Tanggal'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

?>