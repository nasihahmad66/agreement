<?php
require_once('tcpdf/tcpdf.php');
$pdf = new TCPDF('', PDF_UNIT, 'A4', true, 'UTF-8', false);
include('../../config.php');
session_start();

$kodeae = $_SESSION['kodeae'];
$nama = $_SESSION['nama'];
$tempat= $_SESSION['tempat'];
$tgl= $_SESSION['tgl1'];
$bln= $_SESSION['bln1'];
$thn= $_SESSION['thn1'];
$tanggal = "$tgl - $bln - $thn";
$alamat= $_SESSION['alamat'];
$pos= $_SESSION['pos'];
$status = $_SESSION['status'];
$email= $_SESSION['email'];
$id= $_SESSION['id'];
$hp= $_SESSION['telepon'];
$kerja= $_SESSION['kerja'];
$transaksi= $_SESSION['pengalaman'];
$sebutkan=$_SESSION['sebut'];
$jentrans = $_SESSION['page1'];
		
$transkaksi = mysqli_query($connect,'select * From formulir1 where Jenis_Transaksi');
$sql = mysqli_fetch_array($transaksi);

		
$pdf->Open();

$pdf->AddPage();
$pdf->SetFont('helvetica','B', 10);
$pdf->Write(0, 'PERHATIAN !!!
HARAP DIBACA TERLEBIH DAHULU', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->MultiCell(0, 0,'Peraturan untuk mengisi Formulir Agreement', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0, '- Nasabah DIWAJIBKAN mengisi secara BENAR dan JELAS.
- Jika terdapat kesalahan pengisian di halaman sebelumnya, Nasabah DIHARUSKAN menekan tombol "Mulai Dari 
  Awal" yang terdapat di kiri atas setiap halaman.
- DILARANG kembali ke halaman sebelumnya dengan menekan tombol back pada browser.
- Pelanggaran yang disebabkan karena melalaikan peraturan ini menjadi tanggung jawab NASABAH.
', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica','B', 10);
$pdf->MultiCell(0, 0,'Nasabah hanya dapat dianggap cakap apabila sesuai dengan persyaratan di bawah ini :', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0, '- Nasabah pada saat mengisi perjanjian nasabah secara elektronis memiliki usia minimal 21 tahun atau 17 tahun
  apabila sudah menikah
- Tidak dinyatakan pailit oleh pengadilan
- Nasabah bukan merupakan pegawai atau pejabat dari BAPPEBTI, Bursa Berjangka, atau Lembaga Kliring 
  Berjangka.
- Nasabah bukan merupakan Bendahara  yang melayani kepentingan umum.
- Nasabah dengan keterbelakangan mental, buta, buta huruf dan keterbatasan fisik lainnya yang dapat 
  mengganggu (diperkirakan dapat mengganggu) tidak diperkenankan untuk membuka akun.
- Memiliki pengetahuan bertransaksi yang cukup, dibuktikan dengan adanya demo account.
', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(0, 0,'Dokumen yang harus dipersiapkan :', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0, '- Demo account	
  Untuk acc Kontrak Berjangka dapat melakukan demo terlebih dahulu di alamat http://demo.esandar.co.id.
  Harap mencatat Login yang disesuaikan dengan nama nasabah, dan mengisinya dibagian acc demo. 
  (Untuk Acc demo yang diisi salah, maka account real tidak akan diproses)

  Untuk acc Kontrak Derivatif Forex, Loco London, dan Stock Indeks, dapat mengunduh aplikasi Esandar Trader 
  melalui pc / android / Ipad / Iphone dan membuat account demo pada server esandar-demo, dan harap mencatat login
  yang disesuaikan dengan nama nasabah.

- Persiapkan juga nomor Rekening bank yang hendak dipakai untuk lalu lintas margin yang disesuaikan dengan 
  nama nasabah. (Penarikan dana menggunakan rekening bank BCA dapat dilakukan pada hari itu juga, 
  sedangkan penggunaan rekening bank lain dapat mengakibatkan dana sampai lebih dari T+0 ke rekening 
  Nasabah.)

- Scan 3 buah dokumen berikut ini dengan ukuran yang tidak lebih besar dari 2MB:
  1. KTP / SIM / Passpor dan
  2. Photo Berwarna Terbaru dan
  3. Salah satu dari dokumen dibawah ini (pilih salah satu):
      a) Rekening Koran Bank 3 (tiga) bulan terakhir yang dipergunakan sebagai tempat penyetoran dan penarikan 
          margin (hanya dapat dilakukan ke rekening bank yang tercantum dalam Aplikasi Pembukaan Rekening
          Transaksi secara Elektronik On-Line ini. Dalam hal ada lebih dari 1 (satu) rekening Bank yang akan
          dipergunakan, maka wajib melampirkan seluruh rekening Bank dimaksud;
      b) Surat Keterangan Bekerja;
      c) Surat Keterangan pendapatan (untuk calon Nasabah yang berstatus pegawai) atau Laporan Keuangan 3
          (tiga) bulan terakhir (untuk calon Nasabah berstatus wiraswasta atau pemilik usaha)
      d) Tagihan Kartu Kredit
      e) Rekening Listrik / Telepon
      f) Bukti Kepemilikan Tanah atau bangunan atau kendaraan Bermotor
      g) Dokumen Lain yang terkait, yang relevan berdasarkan pertimbangan Wakil Pialang Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
	
$pdf->SetFont('helvetica','B', 10);
$pdf->Write(0, 'DATA NASABAH', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln();

$pdf->SetFont('helvetica','', 10);
$pdf->MultiCell(70, 0,'Kode AE (Optional)', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$kodeae , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nama Lengkap', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$nama , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tempat Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tempat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tanggal Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tanggal , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$alamat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);


$pdf->AddPage();

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$pos , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Status Perkawinan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$status , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'E-Mail', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$email , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No.Identitas KTP / SIM / PASPOR', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$id , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp Handphone', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$hp , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Pekerjaan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$kerja , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);


$pdf->MultiCell(70, 0,'Apakah Nasabah pernah bertransaksi sebelumnya di bidang Perdagangan Berjangka Komoditi ?', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$transaksi                                                    , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(15);



$pdf->MultiCell(70, 0,'Sebutkan Transaksi Sebelumnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$sebutkan            , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);


$pdf->MultiCell(70, 0,'Margin Awal dan Jenis Transaksi yang akan di pilih', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100,0,': '.$jentrans             , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

 
$Menerima = 'YA';
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $tgl->format('d-m-Y');
$waktu = gmdate('H:i:s',time()+60*60*7);





$pdf->Open();
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
$pdf->MultiCell(74, 0,': Agung Podomoro Land Tower Lt 36' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(200, 0,'                                                                         Jl Letjen S Parman Kav 28' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->MultiCell(206, 0,'                                                                         Jakarta Barat 11470 Indonesia' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
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
$pdf->MultiCell(33, 0,': Solihin' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
//$pdf->MultiCell(190, 0,'                                                                         - Tessar Ari Krisna.' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
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
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan volume minimum 0,1 (nol koma satu) lot yang diperdagangkan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': Forex
  Stock Indeks
  Komoditi' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
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
  admin@esandar.co.id dan esandar.closingment@yahoo.com', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Sarana penyelesaian perselisihan yang dipergunakan apabila terjadi perselisihan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': Badan Arbitrase Perdagangan Berjangka Komoditi 
  Pengadilan Negeri Setempat' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nama-Nama Wakil Pialang Berjangka yang Bekerja di Perusahaan Pialang Berjangka', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': Hamrija
  Junaidi Roparulian Simanjuntak
  Francois Haberth Hallatu
  Fardian
  Erwin Gunawan
  Sulianto
  Mohammad Alamsyah Abdi Negara
  Handoko
  Mariano A Zakarias Soe
  Dessi Zulkarnain
  Nursalahuddin
  Debby Swandayani
  Sandy Arja
  Sri Suparti' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(100, 0,'Nama-Nama Wakil Pialang Berjangka yang secara khusus ditunjuk oleh Pialang Berjangka untuk melakukan verifikasi dalam rangka penerimaan Nasabah elektronik on-line', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0,': - Erwin Gunawan
  - Sulianto
  - Mohammad Alamsyah Abdi Negara
  - Handoko' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
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
$pdf->Multicell(50,0,': '.$Tanggal, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);






$demo = $_SESSION['demo'];

$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
Perdagangan Berjangka Komoditi
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
	
$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'Formulir: 107.PBK.02.1', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(0);

$pdf->Write(0, 'PERNYATAAN TELAH MELAKUKAN SIMULASI PERDAGANGAN BERJANGKA KOMODITI', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('helvetica','', 10);
$pdf->Write(0, 'Yang mengisi formulir di bawah ini:', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln();

$pdf->MultiCell(70, 0,'Nama Lengkap', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$nama , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tempat Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tempat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tanggal Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tanggal , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$alamat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$pos , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No.Identitas KTP / SIM / PASPOR', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$id , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Demo Acc', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$demo, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->Write(0,'Dengan mengisi kolom YA di bawah ini, saya menyatakan bahwa saya telah melakukan simulasi
bertransaksi di bidang Perdagangan Berjangka Komoditi pada PT. Esandar Arthamas Berjangka dan
telah memahami tentang tata cara bertransaksi di bidang Perdagangan Berjangka Komoditi.', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->Write(0,'Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Pernyataan Menerima', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$Menerima, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$Tanggal, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);






 

if($_SESSION['pengalaman']=='pernah')
{
$pialang = $_SESSION['pialang'];

$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas 
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
	
$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'Formulir: 107.PBK.02.2', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(0);

$pdf->Write(0, 'SURAT PERNYATAAN TELAH BERPENGALAMAN MELAKSANAKAN TRANSAKSI PERDAGANGAN BERJANGKA KOMODITI', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('helvetica','', 10);
$pdf->Write(0, 'Yang mengisi formulir di bawah ini:', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln();

$pdf->MultiCell(70, 0,'Nama Lengkap', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$nama , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tempat Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tempat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tanggal Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tanggal , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$alamat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$pos , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No.Identitas KTP / SIM / PASPOR', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$id , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Demo Acc', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$demo, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->Write(0,'Dengan mengisi kolom YA di bawah ini, saya menyatakan bahwa saya telah memiliki pengalaman yang
mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada
Perusahaan Pialang Berjangka   '.$pialang.'   ,dan telah memahami tentang tata cara bertransaksi Perdagangan Berjangka.', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->Write(0,'Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Pernyataan Menerima', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$Menerima, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$Tanggal, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
}




//Page5
$NPWP = $_SESSION['NPWP5'];
$JK = $_SESSION['jk5'];
$statusP = $_SESSION['status'];
$namaIS = $_SESSION['namaIS5'];
$namaIK = $_SESSION['namaIK5'];
$fax = $_SESSION['fax5'];
$notelp= $_SESSION['tlp5'];
$statusR = $_SESSION['statusR5'];
$lainnyaSR = $_SESSION['lainSR5'];
$Tujuan_Rekening = $_SESSION['rekening5'];
$lainnyaTR = $_SESSION['lainTR5'];
$Pengalaman_Investasi = $_SESSION['investasi5'];
$bidanginv = $_SESSION['bidanginv'];
$Anggota_Keluarga = $_SESSION['anggotaK5'];
$namaAK = $_SESSION['namaAK'];
$Pailit_Pengadilan = $_SESSION['pengadilan5'];

$Nama = $_SESSION['nama5'];
$Alamat = $_SESSION['alamat5'];
$Kod_pos = $_SESSION['kodeP5'];
$no_tl = $_SESSION['tl5'];
$Hubungan = $_SESSION['hub5'];

$Pekerjaan = $_SESSION['kerja5'];
$lainnyaPKJ = $_SESSION['lainPKJ5'];
$Nama_Perusahaan = $_SESSION['usaha5'];
$Bidang_Usaha = $_SESSION['bidang5'];
$Jabatan = $_SESSION['jabat5'];
$Lama_Bekerja = $_SESSION['lama5'];
$Kantor_Sebelum = $_SESSION['kantor5'];
$Alamat_Kantor = $_SESSION['alamatK5'];
$Kd_Pos = $_SESSION['kdpos5'];
$No_Tlp = $_SESSION['notel5'];
$no_fx = $_SESSION['fx5'];

$Penghasilan_Tahun = $_SESSION['hasil5'];
$Rumah_Lokasi = $_SESSION['rulok5'];
$Nilai_NJOP = $_SESSION['NJOP5'];
$Deposit_Bank = $_SESSION['deposit5'];
$Jumlah = $_SESSION['jml5'];
$Lainnya = $_SESSION['lain5'];

$nam_Bank = $_SESSION['bank5'];
$Cabang = $_SESSION['cab5'];
$No_A_C = $_SESSION['noAC5'];
$No_tel = $_SESSION['tel5'];
$Jenis_Rekening = $_SESSION['JenisR5'];
$lainnyaJR1 = $_SESSION['lainJR15'];
$Nama_bank = $_SESSION['nabank5'];
$caban = $_SESSION['caba5'];
$No_AC = $_SESSION['ac5'];
$NoTlp = $_SESSION['tlp5'];
$Jns_Rekening = $_SESSION['reken5'];
$lainnyaJR2 =$_SESSION['lainJR25'];

$tagihan5 = $_SESSION['tagihan5'];
$rektel5 = $_SESSION['rektel5']; 
$skb5 = $_SESSION['skb5']; 
$skp5 = $_SESSION['skp5']; 
$kini5 = $_SESSION['kini5']; 
$KTP5 = $_SESSION['KTP5'];

$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas 
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
	
$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'Formulir Nomor 107.PBK.03', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(0);

$pdf->Write(0, 'APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(70, 0,'Kode Nasabah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': ' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(70, 0,'Data Pribadi', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(70, 0,'Nama Lengkap', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$nama , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tempat Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tempat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tanggal Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tanggal , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No.Identitas KTP / SIM / PASPOR', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$id , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. NPWP', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$NPWP , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jenis Kelamin', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$JK , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Status Perkawinan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$statusP , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nama Istri/Suami', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$namaIS , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nama Ibu Kandung', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$namaIK , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$alamat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$pos , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$notelp , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Faksimili Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$fax , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp Handphone', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$hp, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Status Kepemilikan Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$statusR, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Status Kepemilikan Rumah Lainnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$lainnyaSR, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tujuan Pembukaan Rekening', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Tujuan_Rekening, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tujuan Pembukaan Rekening Lainnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$lainnyaTR, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Pengalaman Investasi', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Pengalaman_Investasi, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Bidang Inventasi', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$bidanginv, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Apakah Anda memiliki anggota keluarga yang bekerja di BAPPEBTI/Bursa Berjangka/ Kliring Berjangka?', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Anggota_Keluarga, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Siapa nama anggota keluarga yang bekerja di BAPPEBTI/Bursa Berjangka/ Kliring Berjangka?', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$namaAK, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Apakah Anda telah dinyatakan pailit oleh Pengadilan ?', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Pailit_Pengadilan, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'PIHAK YANG DIHUBUNGI DALAM KEADAAN DARURAT', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica','', 10);
$pdf->Write(0, 'Dalam keadaan darurat, pihak yang dapat dihubungi:', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln();

$pdf->MultiCell(70, 0,'Nama', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Nama , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Alamat , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Kod_pos , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$no_tl , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Hubungan dengan anda', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Hubungan , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'PEKERJAAN', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica','', 10);
$pdf->MultiCell(70, 0,'Pekerjaan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Pekerjaan , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Sebutkan Pekerjaan Lainnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$lainnyaPKJ , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nama Perusahaan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Pekerjaan , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Bidang Usaha', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Bidang_Usaha , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jabatan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Jabatan , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Lama Bekerja', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Lama_Bekerja , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Kantor Sebelumnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Kantor_Sebelum , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Kantor', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Alamat_Kantor , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Kd_Pos , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp Kantor', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$No_Tlp , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Faksimili', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$no_fx , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'DAFTAR KEKAYAAN', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica','', 10);
$pdf->MultiCell(70, 0,'Penghasilan Per Tahun', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Penghasilan_Tahun , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Daftar Kekayaan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Rumah Lokasi', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Rumah_Lokasi , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nilai NJOP', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Nilai_NJOP , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Deposit Bank', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Deposit_Bank , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jumlah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Jumlah , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Lainnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Lainnya , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'REKENING BANK NASABAH UNTUK PENYETORAN DAN PENARIKAN MARGIN', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica','', 10);
$pdf->Write(0, 'Rekening Bank Nasabah Untuk Penyetoran dan Penarikan Margin (hanya rekening dibawah ini yang dapat Saudara pergunakan untuk lalulintas margin).', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln();

$pdf->MultiCell(70, 0,'Nama Bank', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$nam_Bank , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Cabang', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Cabang , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nomor A/C', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$No_A_C , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$No_tel , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jenis Rekening', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Jenis_Rekening , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jenis Rekening Lainnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$lainnyaJR1 , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nama Bank', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Nama_bank , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Cabang', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$caban , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nomor A/C', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$No_AC , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$NoTlp , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jenis Rekening', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$Jns_Rekening , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jenis Rekening Lainnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$lainnyaJR2 , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'DOKUMEN YANG DILAMPIRKAN', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

//$img1=("$tagihan5");
//$img2=("$rektel5");
//$img3=("$skb5");
//$img4=("$skp5");
//$img5=("$kini5");
//$img6=("$KTP5");

$newid=$_SESSION['newid'];
$sqlpage5=mysqli_query($connect,"select * from formulir5 where id='$newid'");
$lihatgambar=mysqli_fetch_array($sqlpage5);

$lihat1=substr($lihatgambar['Rekening_Tagihan'], -4);
$lihat2=substr($lihatgambar['Rekening_Telp'], -4);
$lihat3=substr($lihatgambar['skb'], -4);
$lihat4=substr($lihatgambar['skp'], -4);
$lihat5=substr($lihatgambar['Foto_Kini'], -4);
$lihat6=substr($lihatgambar['Foto_KTP'], -4);


$gabung1="../../gambar/".$lihatgambar['Rekening_Tagihan']."";
$gabung2="../../gambar/".$lihatgambar['Rekening_Telp']."";
$gabung3="../../gambar/".$lihatgambar['skb']."";
$gabung4="../../gambar/".$lihatgambar['skp']."";
$gabung5="../../gambar/".$lihatgambar['Foto_Kini']."";
$gabung6="../../gambar/".$lihatgambar['Foto_KTP']."";
//$gabung1="/gambar/".$newid."-".$nama."/".$tagihan5."";
//$gabung2="/gambar/".$newid."-".$nama."/".$rektel5."";
//$gabung3="/gambar/".$newid."-".$nama."/".$skb5."";
//$gabung4="/gambar/".$newid."-".$nama."/".$skp5."";
//$gabung5="/gambar/".$newid."-".$nama."/".$kini5."";
//$gabung6="/gambar/".$newid."-".$nama."/".$KTP5."";

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(180, 0,'Rekening Koran Bank / Tagihan Kartu Kredit', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

if($lihat1==".png" || $lihat1==".PNG"){
$pdf->Image($gabung1, 10, 28, 190, 240, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat1==".JPG"||$lihat1=="JPEG" || $lihat1==".jpg"){
$pdf->Image($gabung1, 10, 28, 190, 240, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}

$pdf->AddPage();

$pdf->MultiCell(180, 0,'Rekening Listrik / Telepon', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

if($lihat2==".png" || $lihat2==".PNG"){
$pdf->Image($gabung2, 10, 20, 190, 120, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat2=="JPEG" || $lihat2==".JPG" || $lihat2==".jpg"){
$pdf->Image($gabung2, 10, 20, 190, 120, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(100);

$pdf->MultiCell(180, 0,'Tambahan Dokumen lain 1', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($lihat3==".png" || $lihat3==".PNG"){
$pdf->Image($gabung3, 10, 155, 190, 120, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat3=="JPEG" || $lihat3==".JPG" || $lihat3==".jpg"){
$pdf->Image($gabung3, 10, 155, 190, 120, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);


$pdf->AddPage();

$pdf->MultiCell(70, 0,'Tambahan Dokumen lain 2', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

if($lihat4==".png" || $lihat4==".PNG"){
$pdf->Image($gabung4, 10, 20, 190, 240, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat4=="JPEG" || $lihat4==".JPG" || $lihat4==".jpg"){
$pdf->Image($gabung4, 10, 20, 190, 240, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->AddPage();

$pdf->MultiCell(70, 0,'Foto Terkini', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($lihat5==".png" || $lihat5==".PNG"){
$pdf->Image($gabung5, 10, 20, 190, 120, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat5=="JPEG" || $lihat5==".JPG" || $lihat5==".jpg"){
$pdf->Image($gabung5, 10, 20, 190, 120, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(100);

$pdf->MultiCell(70, 0,'KTP / SIM / Paspor', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($lihat6==".png" || $lihat6==".PNG"){
$pdf->Image($gabung6, 10, 155, 190, 120, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat6=="JPEG" || $lihat6==".JPG" || $lihat6==".jpg"){
$pdf->Image($gabung6, 10, 155, 190, 120, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->AddPage();
$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'PERNYATAAN KEBENARAN DAN TANGGUNG JAWAB', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Dengan mengisi kolom YA di bawah ini, saya menyatakan bahwa semua informasi dan semua dokumen yang saya 
lampirkan dalam APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE adalah benar 
dan tepat, Saya akan bertanggung jawab penuh apabila dikemudian hari terjadi sesuatu hal sehubungan dengan ketidakbenaran data yang saya berikan.', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->MultiCell(80,0,'Pernyataan Kebenaran dan Tanggung Jawab', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(80,0,': '.$Menerima, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(80,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(80,0,': '.$Tanggal, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);


//page602
include('config.php');
 
$s1_1 = $_SESSION['1_1'];
$s1_2 = $_SESSION['1_2'];
$s1_3 = $_SESSION['1_3'];
$s1_4 = $_SESSION['1_4'];
$s1_5 = $_SESSION['1_5'];
$s1_6 = $_SESSION['1_6'];
$s1_7 = $_SESSION['1_7'];
$s1_8 = $_SESSION['1_8'];
$s1_9 = $_SESSION['1_9'];
$s1_10 = $_SESSION['1_10'];
$s1_11 = $_SESSION['1_11'];
$s1_12 = $_SESSION['1_12'];
$s1_13 = $_SESSION['1_13'];
$s1_14 = $_SESSION['1_14'];
$s1_15 = $_SESSION['1_15'];

// set font
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
Perdagangan Berjangka Komoditi
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(0, 'Formulir Nomor 107.PBK.04.2', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'DOKUMEN PEMBERITAHUAN ADANYA RISIKO YANG HARUS DISAMPAIKAN OLEH PIALANG
BERJANGKA UNTUK TRANSAKSI KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN
ALTERNATIF', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('times', '', 10);

// create columns content
// create columns content
$dokumen = 'Dokumen Pemberitahuan Adanya Risiko ini disampaikan kepada Anda sesuai dengan Pasal 50 ayat (2) Undang-Undang Nomor 32 Tahun 1997 tentang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan Undang-undang Nomor 10 Tahun 2011 tentang Perubahan Atas Undang-Undang Nomor 32 Tahun 1997 Tentang Perdagangan Berjangka Komoditi.'."\n";
$memahamidok = "$s1_1                                                                                                                                                                                                                                      "."\n";

$maksud = 'Maksud dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif bisa mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan Anda mencukupi.'."\n";
$memahamimak = "$s1_2                                                                                                                                                                                                      "."\n";

$no1 = 'Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif belum tentu layak bagi semua investor. Anda dapat menderita kerugian dalam jumlah besar dan dalam jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah uang yang pertama kali Anda setor (Margin Awal) ke Pialang Berjangka Anda. Anda mungkin menderita kerugian seluruh Margin dan Margin tambahan yang ditempatkan pada Pialang Berjangka untuk mempertahankan posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif Anda. Hal ini disebabkan Perdagangan Berjangka sangat dipengaruhi oleh mekanisme leverage, dimana dengan jumlah investasi dalam bentuk yang relatif kecil dapat digunakan untuk membuka posisi dengan aset yang bernilai jauh lebih tinggi. Apabila Anda tidak siap dengan risiko seperti ini, sebaiknya Anda tidak melakukan perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif.'."\n";
$memahami1 = "$s1_3                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              "."\n";

$no2 = 'Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif mempunyai risiko dan mempunyai kemungkinan kerugian yang tidak terbatas yang jauh lebih besar dari jumlah uang yang disetor (Margin) ke Pialang Berjangka. Kontrak Derivatif dalam Sistem Perdagangan Alternatif sama dengan produk keuangan lainnya yang mempunyai risiko tinggi, Anda sebaiknya tidak menaruh risiko terhadap dana yang Anda tidak siap untuk menderita rugi, seperti tabungan pensiun, dana kesehatan atau dana untuk keadaan darurat, dana yang disediakan untuk pendidikan atau kepemilikan rumah, dana yang diperoleh dari pinjaman pendidikan atau gadai, atau dana yang digunakan untuk memenuhi kebutuhan sehari-hari.'."\n";
$memahami2 = "$s1_4                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "."\n";

$no3 = 'Berhati-hatilah terhadap pernyataan bahwa Anda pasti mendapatkan keuntungan besar dari perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif. Meskipun perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif dapat memberikan keuntungan yang besar dan cepat, namun hal tersebut tidak pasti, bahkan dapat menimbulkan kerugian yang besar dan cepat juga. Seperti produk keuangan lainnya, tidak ada yang dinamakan pasti untung.'."\n";
$memahami3 = "$s1_5                                                                                                                                                                                                                                                                                                                                       				"."\n";

$no4 = 'Disebabkan adanya mekanisme leverage dan sifat dari transaksi Kontra Derivatif dalam Sistem Perdagangan Alternatif, Anda dapat merasakan dampak bahwa Anda menderita kerugian dalam waktu cepat. Keuntungan maupun kerugian dalam transaksi akan langsung dikredit atau didebet ke rekening Anda, paling lambat secara harian. Apabila pergerakan di pasar terhadap Kontrak Derivatif dalam Sistem Perdagangan Alternatif menurunkan nilai posisi Anda dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif, dengan kata lain berlawanan dengan posisi yang Anda ambil, Anda diwajibkan untuk menambah dana untuk pemenuhan kewajiban Margin ke perusahaan Pialang Berjangka. Apabila rekening Anda berada dibawah minimum Margin yang telah ditetapkan Lembaga Kliring Berjangka atau Pialang Berjangka, maka posisi Anda dapat dilikuidasi pada saat rugi, dan Anda wajib menyelesaikan defisit (jika ada) dalam rekening Anda.'."\n";
$memahami4 = "$s1_6                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             "."\n";

$no5 = 'Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tidak mungkin melikuidasi posisi. Pada umumnya Anda harus melakukan transaksi mengambil posisi yang berlawanan dengan maksud melikuidasi posisi (offset) jika ingin melikuidasi posisi dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif. Apabila Anda tidak dapat melikuidasi posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif, Anda tidak dapat merealisasikan keuntungan pada nilai posisi tersebut atau mencegah kerugian yang lebih tinggi. Kemungkinan tidak dapat melikuidasi dapat terjadi, antara lain: jika perdagangan berhenti dikarenakan aktivitas perdagangan yang tidak lazim pada Kontrak Derivatif atau subjek Kontrak Derivatif, atau terjadi kerusakan sistem pada Pialang Berjangka Peserta Sistem Perdagangan Alternatif atau Pedagang Berjangka Penyelenggara Sistem Perdagangan Alternatif. Bahkan apabila Anda dapat melikuidasi posisi tersebut, Anda mungkin terpaksa melakukannya pada harga yang menimbulkan kerugian besar.'."\n";
$memahami5 = "$s1_7                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           "."\n";

$no6 = 'Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tida mungkin mengelola risiko atas posisi terbuka Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan cara membuka posisi dengan nilai yang sama namun dengan posisi yang berlawanan dalam kontrak bulan yang berbeda, dalam pasar yang berbeda atau dalam subjek Kontrak Derivatif dalam Sistem Perdagangan Alternatif yang berbeda. Kemungkinan untuk tidak dapat mengambil posisi dalam rangka membatasi risiko yang timbul, contohnya; jika perdagangan dihentikan pada pasar yang berbeda disebabkan aktivitas perdagangan yang tidak lazim pada Kontrak Derivatif dalam Sistem Perdagangan Alternatif atau Kontrak Derivatif dalam Sistem Perdagangan Alternatif.'."\n";
$memahami6 = "$s1_8                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "."\n";

$no7 = 'Anda dapat menderita kerugian yang disebabkan kegagalan sistem informasi. Sebagaimana yang terjadi pada setiap transaksi keuangan, Anda dapat menderita kerugian jika amanat untuk melaksanakan transaksi Kontrak Derivatif dalam Sistem Perdagangan Alternatif tidak dapat dilakukan karena kegagalan sistem informasi di Bursa Berjangka, Pedagang Penyelenggara Sistem Perdagangan Alternatif , maupun sistem di Pialang Berjangka Peserta Sistem Perdagangan Alternatif yang mengelola posisi Anda. Kerugian Anda akan semakin besar jika Pialang Berjangka yang mengelola posisi Anda tidak memiliki sistem informasi cadangan atau prosedur yang layak.'."\n";
$memahami7 = "$s1_9                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 "."\n";

$no8 = 'Semua Kontrak Derivatif dalam Sistem Perdagangan Alternatif mempunyai risiko, dan tidak ada strategi berdagang yang dapat menjamin untuk menghilangkan risiko tersebut. Strategi dengan menggunakan kombinasi posisi seperti spread, dapat sama berisiko seperti posisi long atau short.Melakukan Perdagangan Berjangka memerlukan pengetahuan mengenai Kontrak Derivatif dalam Sistem Perdagangan Alternatif dan pasar berjangka.'."\n";
$memahami8 = "$s1_10                                                                                                                                                                                                                                                                                                                                    "."\n";

$no9 = 'Strategi perdagangan harian dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif dan produk lainnya memiliki risiko khusus. Seperti pada produk keuangan lainnya, pihak yang ingin membeli atau menjual Kontrak Derivatif dalam Sistem Perdagangan Alternatif yang sama dalam satu hari untuk mendapat keuntungan dari perubahan harga pada hari tersebut (day traders) akan memiliki beberapa risiko tertentu antara lain jumlah komisi yang besar, risiko terkena efek pengungkit (exposure to leverage), dan persaingan dengan pedagang profesional. Anda harus mengerti risiko tersebut dan memiliki pengalaman yang memadai sebelum melakukan perdagangan harian (day trading).'."\n";
$memahami9 = "$s1_11                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         "."\n";

$no10 = 'Menetapkan amanat bersyarat, Kontrak Derivatif dalam Sistem Perdagangan Alternatif dilikuidasi pada keadaan tertentu untuk membatasi rugi (stop loss), mungkin tidak akan dapat membatasi kerugian Anda sampai jumlah tertentu saja. Amanat bersyarat tersebut mungkin tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Derivatif dalam Sistem Perdagangan Alternatif.'."\n";
$memahami10 = "$s1_12                                                                                                                                                                                                                               "."\n";

$no11 = 'Anda harus membaca dengan seksama dan memahami Perjanjian Pemberian Amanat Nasabah dengan Pialang Berjangka Anda sebelum melakukan transaksi Kontrak Derivatif dalam Sistem Perdagangan Alternatif.'."\n";
$memahami11 = "$s1_13                                                                                             "."\n";

$no12 = 'Pernyataan singkat ini tidak dapat memuat secara rinci seluruh risiko atau aspek penting lainnya tentang Perdagangan Berjangka. Oleh karena itu Anda harus mempelajari kegiatan Perdagangan Berjangka secara cermat sebelum memutuskan melakukan transaksi.'."\n";
$memahami12 = "$s1_14                                                                                                                                                                                           "."\n";

$no13 = 'Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure) ini dibuat dalam Bahasa Indonesia.'."\n";
$memahami13 = "$s1_15                                          "."\n";

$pernyataan = 'PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO'."\n";
$dengan='Dengan mengisi kolom YA di bawah, saya menyatakan bahwa saya telah menerima DOKUMEN PEMBERITAHUAN ADANYA RISIKO mengerti dan menyetujui isinya.'."\n";






// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set color for background
//$pdf->SetFillColor(255, 255, 200);

// set color for text
//$pdf->SetTextColor(0, 63, 127);

// write the first column
$pdf->MultiCell(130, 0, $dokumen, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);

// set color for background
//$pdf->SetFillColor(215, 235, 255);

// set color for text
//$pdf->SetTextColor(127, 31, 0);

// write the second column
$pdf->MultiCell(60, 0, $memahamidok, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(130, 0, $maksud, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahamimak, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->MultiCell(5, 0, '1                                             ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no1, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami1, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(0);
$pdf->MultiCell(5, 0, '2                                 ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no2, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami2, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(0);
$pdf->MultiCell(5, 0, '3                     ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no3, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami3, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->Ln(0);
$pdf->MultiCell(5, 0, '4                                              ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no4, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami4, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->MultiCell(5, 0, '5                                                ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no5, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami5, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->MultiCell(5, 0, '6                                    ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no6, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami6, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->MultiCell(5, 0, '7                                ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no7, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami7, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->MultiCell(5, 0, '8                      ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no8, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami8, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->Ln(0);
$pdf->MultiCell(6, 0, '9                                          ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no9, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami9, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->MultiCell(6, 0, '10                    ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no10, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami10, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->MultiCell(6, 0, '11         ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no11, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami11, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->MultiCell(6, 0, '12            ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no12, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami12, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->MultiCell(6, 0, '13   ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(125, 0, $no13, 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(60, 0, $memahami13, 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, $pernyataan, 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0,$dengan, '', 0, 'C', true, 0, false, false, 0);

$pdf->Ln(2);
$pdf->MultiCell(70, 0, 'Pernyataan menerima / tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(10, 0, $Menerima, 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(2);
$pdf->MultiCell(70, 0, 'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0, $Tanggal, 0, 'L', 0, 1, '', '', true, 0, false, true, 0);



//Page702

$m67 = $_SESSION['checkbox67'];
$m68 = $_SESSION['checkbox68']; 
$m69 = $_SESSION['checkbox69'];
$m70 = $_SESSION['checkbox70']; 
$m71 = $_SESSION['checkbox71']; 
$m72 = $_SESSION['checkbox72']; 
$m73 = $_SESSION['checkbox73']; 
$m74 = $_SESSION['checkbox74']; 
$m75 = $_SESSION['checkbox75'];
$m76 = $_SESSION['checkbox76']; 
$m77 = $_SESSION['checkbox77']; 
$m78 = $_SESSION['checkbox78']; 
$m79 = $_SESSION['checkbox79']; 
$m80 = $_SESSION['checkbox80']; 
$m81 = $_SESSION['checkbox81'];
$m82 = $_SESSION['checkbox82']; 
$m83 = $_SESSION['checkbox83']; 
$m84 = $_SESSION['checkbox84']; 
$m85 = $_SESSION['checkbox85'];
$m86 = $_SESSION['checkbox86']; 
$m87 = $_SESSION['checkbox87']; 
$m88 = $_SESSION['checkbox88']; 
$m89 = $_SESSION['checkbox89']; 
$m90 = $_SESSION['checkbox90']; 
$m91 = $_SESSION['checkbox91']; 
$m92 = $_SESSION['checkbox92']; 
$m93 = $_SESSION['checkbox93']; 
$m94 = $_SESSION['checkbox94']; 
$m95 = $_SESSION['checkbox95'];
$m96 = $_SESSION['checkbox96']; 
$m97 = $_SESSION['checkbox97'];
$m98 = $_SESSION['checkbox98'];
$m99 = $_SESSION['checkbox99'];
$m100 = $_SESSION['checkbox100']; 
$m101 = $_SESSION['checkbox101'];
$m102 = $_SESSION['checkbox102'];
$m103 = $_SESSION['checkbox103']; 
$m104 = $_SESSION['checkbox104'];
$m105 = $_SESSION['checkbox105'];
$m106 =	$_SESSION['checkbox106']; 
$m107 =	$_SESSION['checkbox107'];
$m108 =	$_SESSION['checkbox108'];
$m109 =	$_SESSION['checkbox109'];
$m110 =	$_SESSION['checkbox110'];  
$mel1 =	$_SESSION['mel1'];
$lain =	$_SESSION['lain'];
$b = $_SESSION['b'];
$m111 = $_SESSION['checkbox111'];

$tgl = new datetime('Asia/Jakarta');
$tgl_str = $tgl->format('l');

if($tgl_str=='Sunday')
{ 
	$tgl_str='Minggu';
}
else if($tgl_str=='Monday')
{ 
	$tgl_str='Senin';
}
else if($tgl_str=='Tuesday')
{ 
	$tgl_str='Selasa';
}
else if($tgl_str=='Wednesday')
{ 
	$tgl_str='Rabu';
}
else if($tgl_str=='Thursday')
{ 
	$tgl_str='Kamis';
}
else if($tgl_str=='Friday')
{ 
	$tgl_str='Jumat';
}
else if($tgl_str=='Saturday')
{ 
	$tgl_str='Sabtu';
}
$date = $tgl->format('d');
$month = $tgl->format('m');
if($month=='01')
{
	$month='Januari';
}
else if($month=='02')
{
	$month='Februari';
}
else if($month=='03')
{
	$month='Maret';
}
else if($month=='04')
{
	$month='April';
}
else if($month=='05')
{
	$month='Mei';
}
else if($month=='06')
{
	$month='Juni';
}
else if($month=='07')
{
	$month='Juli';
}
else if($month=='08')
{
	$month='Agustus';
}
else if($month=='09')
{
	$month='September';
}
else if($month=='10')
{
	$month='Oktober';
}
else if($month=='11')
{
	$month='November';
}
else if($month=='12')
{
	$month='Desember';
}

$year = $tgl->format('Y');

$pdf->AddPage();

$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
Perdagangan Berjangka Komoditi
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(0, 'Formulir Nomor 107.PBK.04.2', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'Perjanjian Pemberian Amanat Secara Elektronik Online Untuk Transaksi Kontrak Derivatif
Dalam Sistem Perdagangan Alternatif', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->SetFont('times', '', 10);
$pdf->Write(0, 'PERHATIAN !!!
PERJANJIAN INI MERUPAKAN KONTRAK HUKUM. HARAP DIBACA DENGAN SEKSAMA', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->Write(0, 'Pada Hari ini '.$tgl_str.', Tanggal '.$date.' , Bulan '.$month.', Tahun '.$year.' , Kami yang mengisi perjanjian di bawah ini:', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(3);

$pdf->MultiCell(50, 0, 'Nama', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0, $nama, 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0, 'Pekerjaan / Jabatan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0, $kerja, 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0, 'Alamat', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0, 'Jl. Panglima Sudirman 101-103 Lt.2 Surabaya-Indonesia', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(3);

$pdf->Write(0, 'Dalam hal ini bertindak untuk dan atas nama sendiri, Yang selanjutnya disebut Nasabah,', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(3);

$pdf->MultiCell(50, 0, 'Nama', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0, '-', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0, 'Pekerjaan / Jabatan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0, 'Wakil Pialang', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0, 'Alamat', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(100, 0, 'Agung Podomoro Land Tower Lt 36. Jl Letjen S Parman Kav 28 Jakarta Barat 11470', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(3);

$pdf->Write(0, 'Dalam hal ini bertindak untuk dan atas nama PT. Esandar Arthamas Berjangka yang selanjutnya disebut Pialang Berjangka, Nasabah dan Pialang Berjangka secara bersama sama selanjutnya disebut Para Pihak. Para Pihak sepakat untuk mengadakan Perjanjian Pemberian Amanat untuk melakukan transaksi penjualan maupun pembelian Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan ketentuan sebagai berikut:', '', 0, 'L', true, 0, false, false, 0);

$pdf->MultiCell(5, 0, '1', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Margin dan Pembayaran Lainnya', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Nasabah menempatkan sejumlah dana (Margin) ke Rekening Terpisah (Segregated Account) Pialang Berjangka sebagai Margin awal dan wajib mempertahankannya sebagaimana ditetapkan.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m67, 1,'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Membayar biaya-biaya yang diperlukan untuk transaksi yaitu biaya transaksi, pajak, komisi, dan biaya pelayanan, biaya bunga sesuai tingkat yang berlaku, dan biaya lainnya yang dapat dipertanggungjawabkan berkaitan dengan transaksi sesuai amanat Nasabah, maupun biaya rekening Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 17.5,$m68, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '2', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pelaksanaan Transaksi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Setiap transaksi Nasabah dilaksanakan secara elektronik on-line oleh Nasabah yang bersangkutan.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m69, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Setiap amanat Nasabah yang diterima dapat langsung dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi dan eksekusinya dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan transaksi tersebut. Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum memberikan amanat untuk transaksi berikutnya.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 22.2,$m70, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(3) Setiap transaksi Nasabah secara bilateral dilawankan dengan Penyelenggara Sistem Perdagangan Alternatif PT Harta International Investama yang bekerjasama dengan Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m71, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '3', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Kewajiban Memelihara Margin', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Nasabah wajib memelihara/memenuhi tingkat Margin yang harus tersedia di rekening pada Pialang Berjangka sesuai dengan jumlah yang telah ditetapkan baik diminta ataupun tidak oleh Pialang Berjangka.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m72, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Apabila jumlah Margin memerlukan penambahan maka Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah untuk menambah Margin segera.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.6,$m73, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(3) Apabila jumlah Margin memerlukan tambahan (Call Margin) maka Nasabah wajib melakukan penyerahan Call Margin selambat-lambatnya sebelum dimulai hari perdagangan berikutnya. Kewajiban Nasabah sehubungan dengan penyerahan Call Margin tidak terbatas pada jumlah Margin awal.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 17.8,$m74, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(4) Pialang Berjangka tidak berkewajiban melaksanakan amanat untuk melakukan transaksi yang baru dari Nasabah sebelum Call Margin dipenuhi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m75, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->AddPage();

$pdf->MultiCell(5, 0, '       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(5) Untuk memenuhi kewajiban Call Margin dan keuangan lainnya dari Nasabah, Pialang Berjangka dapat mencairkan dana Nasabah yang ada di Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m76, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '4', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Hak Pialang Berjangka Melikudiasi Posisi Nasabah', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Nasabah bertanggung jawab memantau/mengetahui posisi terbukanya secara terus- menerus dan memenuhi kewajibannya. Apabila dalam jangka waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan, Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau sebagian, membatasi transaksi, atau tindakan lain untuk melindungi diri dalam pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa memberitahu Nasabah dan Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tindakan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 35.5,$m77, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '5', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pengganti Kerugian Tidak Adanya Penutupan Polisi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Apabila Nasabah tidak mampu melakukan penutupan atas transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas transaksi Nasabah yang terjadi. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka, dan apabila Nasabah lalai untuk membayar biaya-biaya tersebut, Pialang Berjangka berhak untuk mengambil pembayaran dari dana Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 26.5,$m78, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '6', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pialang Berjangka Dapat Membatasi Posisi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Nasabah mengakui hak Pialang Berjangka untuk membatasi posisi terbuka Kontrak dan Nasabah tidak melakukan transaksi melebihi batas yang telah ditetapkan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m79, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '7', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Tidak Ada Jaminan atas Informasi atau Rekomendasi Nasabah mengakui bahwa:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Informasi dan rekomendasi yang diberikan oleh Pialang Berjangka kepada Nasabah tidak selalu lengkap dan perlu diverifikasi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m80, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Pialang Berjangka tidak menjamin bahwa informasi dan rekomendasi yang diberikan merupakan informasi yang akurat dan lengkap.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m81, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(3) Informasi dan rekomendasi yang diberikan oleh Wakil Pialang Berjangka yang satu dengan yang lain mungkin berbeda karena perbedaan analisis fundamental atau teknikal. Nasabah menyadari bahwa ada kemungkinan Pialang Berjangka dan pihak terafiliasinya memiliki posisi di pasar dan memberikan rekomendasi tidak konsisten kepada Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 22,$m82, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '8', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pembatasan Tanggung Jawab Pialang Berjangka', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Pialang Berjangka tidak bertanggung jawab untuk memberikan penilaian kepada Nasabah mengenai iklim, pasar, keadaan politik dan ekonomi nasional dan internasional, nilai Kontrak Derivatif, kolateral, atau memberikan nasihat mengenai keadaan pasar. Pialang Berjangka hanya memberikan pelayanan untuk melakukan transaksi secara jujur serta memberikan laporan atas transaksi tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 22,$m83, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(5, 0, '                                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Perdagangan sewaktu-waktu dapat dihentikan oleh pihak yang memiliki otoritas (Bappebti/Bursa Berjangka) tanpa pemberitahuan terlebih dahulu kepada Nasabah. Atas posisi terbuka yang masih dimiliki oleh Nasabah pada saat perdagangan tersebut dihentikan, maka akan diselesaikan (likuidasi) berdasarkan pada peraturan/ketentuan yang dikeluarkan dan ditetapkan oleh pihak otoritas tersebut, dan semua kerugian serta biaya yang timbul sebagai akibat dihentikannya transaksi oleh pihak otoritas perdagangan tersebut, menjadi beban dan tanggung jawab Nasabah sepenuhnya.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 35.5,$m84, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(6, 0, '9', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Transaksi Harus Mematuhi Peraturan Yang Berlaku', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Semua transaksi dilakukan sendiri oleh Nasabah dan wajib mematuhi peraturan perundang-undangan di bidang Perdagangan Berjangka, kebiasaan dan interpretasi resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m85, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '10', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pialang Berjangka Tidak Bertanggung jawab atas Kegagalan Komunikasi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pialang Berjangka tidak bertanggung jawab atas keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi lainnya yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain diluar kontrol Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m86, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);


$pdf->MultiCell(6, 0, '11', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Konfirmasi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Konfirmasi dari Nasabah dapat berupa surat, telex, media lain, surat elektronik, secara tertulis ataupun rekaman suara.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m87, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Pialang Berjangka berkewajiban menyampaikan konfirmasi transaksi, laporan rekening, permintaan Call Margin, dan pemberitahuan lainnya kepada Nasabah secara akurat, benar dan secepatnya pada alamat (email) Nasabah sesuai dengan yang tertera dalam rekening Nasabah. Apabila dalam jangka waktu 2 x 24 jam setelah amanat jual atau beli disampaikan, tetapi Nasabah belum menerima konfirmasi melalui alamat email Nasabah dan/atau sistem transaksi, Nasabah segera memberitahukan hal tersebut kepada Pialang Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 35.5,$m88, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(3) Jika dalam waktu 2 x 24 jam sejak tanggal penerimaan konfirmasi tersebut tidak ada sanggahan dari Nasabah maka konfirmasi Pialang Berjangka dianggap benar dan sah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m89, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(4) Kekeliruan atas konfirmasi yang diterbitkan Pialang Berjangka akan diperbaiki oleh Pialang Berjangka sesuai keadaan yang sebenarnya dan demi hukum konfirmasi yang lama batal.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m90, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(5) Nasabah tidak bertanggung jawab atas transaksi yang dilaksanakan atas rekeningnya apabila konfirmasi tersebut tidak disampaikan secara benar dan akurat.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m91, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '12', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Kebenaran Informasi Nasabah', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Nasabah memberikan informasi yang benar dan akurat mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi perubahan, termasuk perubahan kemampuan keuangannya untuk terus melaksanakan transaksi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 18,$m92, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '13', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Komisi Transaksi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Nasabah mengetahui dan menyetujui bahwa Pialang Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan, dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang Berjangka. Perubahan beban (fees) dan biaya lainnya harus disetujui secara tertulis oleh Para Pihak.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 22.4,$m93, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '14', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pemberian Kuasa', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Nasabah memberikan kuasa kepada Pialang Berjangka untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau institusi lain yang terkait untuk memperoleh keterangan atau verifikasi mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi persyaratan yang diperlukan.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 31,$m94, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '15', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pemindahan Dana', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pialang Berjangka dapat setiap saat mengalihkan dana dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang dilakukan Nasabah seperti pembayaran komisi, pembayaran biaya transaksi, kliring dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu memberitahukan kepada Nasabah. Transfer yang telah dilakukan akan segera diberitahukan secara tertulis kepada Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 26.5,$m95, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);


$pdf->AddPage();

$pdf->MultiCell(6, 0, '16', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Pemberitahuan', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Semua komunikasi, uang, surat berharga, dan kekayaan lainnya harus dikirimkan langsung ke alamat Nasabah seperti tertera dalam rekeningnya atau alamat lain yang ditetapkan/diberitahukan secara tertulis oleh Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m96, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                                                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Semua uang, harus disetor atau ditransfer langsung oleh Nasabah ke Rekening Terpisah (Segregated Account) Pialang Berjangka: 

    Nama           : PT.ESANDAR ARTHAMAS BERJANGKA
    Alamat         : Agung Podomoro Land Tower Lt. 36
                           Jl. Letjen S. Parman Kav. 28, Jakarta Barat 11470 - Indonesia 
    Bank            : Bank Central Asia cab Sudirman
   	No. Rekening Terpisah : 035.313.6019 (Rupiah)
                                             035.313.4610 (USD)

dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda terima bukti setor atau transfer dari pegawai Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 53,$m97, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(3) Semua surat berharga, kekayaan lainnya, atau komunikasi harus dikirim kepada Pialang Berjangka: 

    Nama       : PT.ESANDAR ARTHAMAS BERJANGKA
    Alamat     : Agung Podomoro Land Tower Lt. 36
                       Jl. Letjen S. Parman Kav. 28, Jakarta Barat 11470 - Indonesia 
    Telepon   : 021-2933 9229
   	Facsimile : 021-2933 9230
   	Email       : info@esandar.co.id


dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda bukti penerimaan dari pegawai Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 57.5,$m98, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '17', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Dokumen Pemberitahuan Adanya Risiko', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Nasabah mengakui menerima dan mengerti Dokumen Pemberitahuan Adanya Risiko', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m99, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '18', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Jangka Waktu Perjanjian dan Pengakhiran', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Perjanjian ini mulai berlaku terhitung sejak tanggal dilakukannya konfirmasi oleh Pialang Berjangka dengan diterimanya Bukti Konfirmasi Penerimaan Nasabah dari Pialang Berjangka oleh Nasabah.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m100, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Nasabah dapat mengakhiri Perjanjian ini hanya jika Nasabah sudah tidak lagi memiliki posisi terbuka dan tidak ada kewajiban Nasabah yang diemban oleh atau terhutang kepada Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m101, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(3) Pengakhiran tidak membebaskan salah satu Pihak dari tanggung jawab atau kewajiban yang terjadi sebelum pemberitahuan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m102, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);


$pdf->MultiCell(6, 0, '19', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Berakhirnya Perjanjian', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Perjanjian dapat berakhir dalam hal Nasabah', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Dinyatakan pailit, memiliki hutang yang sangat besar, dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau meninggal;', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m103, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Tidak dapat memenuhi atau mematuhi perjanjian ini dan/atau melakukan pelanggaran terhadapnya;', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 9,$m104, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(3) Berkaitan dengan angka (1) dan (2) tersebut di atas, Pialang Berjangka dapat: 

i). meneruskan atau menutup posisi Nasabah tersebut setelah mempertimbangkannya secara cermat dan jujur; dan 

ii). menolak perintah dari Nasabah atau kuasanya.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 27,$m105, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);



$pdf->AddPage();

$pdf->MultiCell(6, 0, '                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(4) Pengakhiran Perjanjian sebagaimana dimaksud dengan angka (1) dan (2) tersebut di atas tidak melepaskan kewajiban dari Para Pihak yang berhubungan dengan penerimaan atau kewajiban pembayaran atau pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 18,$m106, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '20', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Force Majeur', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                                                                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Tidak ada satupun pihak di dalam Perjanjian dapat diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab yang berada di luar kemampuannya atau kekuasaannya (force majeur), sepanjang pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya sebab itu. Yang dimaksud dengan Force Majeur dalam Perjanjian adalah peristiwa kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir), pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan perundang-undangan yang berlaku dan kondisi di bidang ekonomi, keuangan dan Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan, kliring dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 66.5,$m107, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '21', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Perubahan atas Isian dalam Perjanjian Pemberian Amanat', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Perubahan atas isian dalam Perjanjian ini hanya dapat dilakukan atas persetujuan Para Pihak, atau Pialang Berjangka telah memberitahukan secara tertulis perubahan yang diinginkan, dan Nasabah tetap memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara tertulis atas usul perubahan tersebut. Tindakan Nasabah tersebut dianggap setuju atas usul perubahan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55,22,$m108, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '22', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Penyelesaian Perselisihan', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(1) Semua perselisihan dan perbedaan pendapat yang timbul dalam pelaksanaan Perjanjian ini wajib diselesaikan terlebih dahulu secara musyawarah untuk mencapai mufakat antara Para Pihak.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m109, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(2) Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, Para Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$m110, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 22.5, '             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 22.5,'(3) Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka (2), maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui *): ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$mel1, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'(4) Kantor atau kantor cabang Pialang Berjangka terdekat dengan domisili Nasabah tempat penyelesaian dalam hal terjadi perselisihan. 
Daftar Kantor Kantor yang dipilih (salah satu) ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 13.5,$b, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '23', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Bahasa', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 0, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(6, 0, '                          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(120, 0,'Perjanjian ini dibuat dalam Bahasa Indonesia. Demikian Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar, sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun. 

Saya telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum dalam perjanjian ini.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(55, 26.5,$m111, 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->Ln(5);
$pdf->Write(0, 'Dengan mengisi kolom YA di bawah, saya menyatakan bahwa saya telah menerima PERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK DERIVATIF SISTEM PERDAGANGAN ALTERNATIF, mengerti dan menyetujui isinya.', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->Ln(2);
$pdf->MultiCell(70, 0, 'Pernyataan menerima / tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(10, 0, $Menerima, 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(2);
$pdf->MultiCell(70, 0, 'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0, $Tanggal, 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(3);
$pdf->Ln(3); 
// reset pointer to the last page
$pdf->lastPage();


//page8
 

$page8=$_POST['page'];
$_SESSION['page'] = $page8;

//page8_3
if($sql['Jenis_Transaksi']  = "FOREX_0,1_LOT")
{	
$Menerima = 'YA';
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $tgl->format('d-m-Y');
$pdf->Open();
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
$pdf->MultiCell(75, 66.4, 'Perjanjian Pemberian Amanat:

Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian Pemberian Amanat.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 31,'Rekening Segregated                                                                                                                                                                                                                                                                                                                                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Nasabah dapat melakukan setoran dana dalam mata uang Rupiah dan US Dollar sebagai Margin Deposit untuk jaminan Pembukaan Account, dan Additional Margin (Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:

    Bank Central Asia (BCA) Sudirman - Jakarta
    No. Account: 035.310.6019 (IDR)
    Atas Nama: PT. Esandar Arthamas Berjangka
	
    Bank Central Asia (BCA) Sudirman - Jakarta
    No. Account: 035.310.4610 (USD)
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

$pdf->MultiCell(40, 0,'Rate                                                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Fixed Rate : 1 USD = 10.000 IDR
Floating Rate', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Commission Charge: USD. 5,- / 0.1 lot closingd', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(4);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(50, 0,'Jam Perdagangan (WIB)                                                                                                                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(40, 0,'    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Winter Time', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Summer Time', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0,'                                                                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,'MAJOR & CROSS RATE                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Senin buka pada jam 05:05 dan tutup pada hari sabtu jam 04:30', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Senin buka pada jam 05:05 dan tutup pada hari sabtu jam 03:30', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0,'                                                                                                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,'LOCO LONDON GOLD                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Senin buka pada 05.05 dan Sabtu tutup pada jam 04.00                                    ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Senin buka pada jam 05.05 dan sabtu tutup pada jam 03.00', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0,'                                                                                                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,'Waktu istirahat pada time trading LOCO LONDON GOLD', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'05.00 sampai jam 06.00                  (Setiap Hari)                                                                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'04.00 sampai jam 05.00                  (Setiap Hari)                                                                      ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(4);
 
$pdf->MultiCell(30, 0,'MAJOR RATE                                                                                                                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Contract Size                                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'Minimum Tick Value                                 
   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'Normal Spread
                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'Maximum Volume 
 (0.1 lot)
 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'Margin Requirement per 0,1 lot Day Trade / Overnight :                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'Margin Hedged      per 0,1 lot                                          ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(30, 0,'EURUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'USDJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'$100,000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.25', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'GBPUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'USDCHF', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'$ 100,000', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','','8');
$pdf->MultiCell(30, 0,'AUDUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'AUD 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(0, 0,'    ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'CROSS RATE', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'   ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'EURJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'EUR 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD.100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'GBPJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'GBP 100,000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'AUDJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'AUD 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'CHFJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'CHF 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.0001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'EURGBP', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'EUR 100,000', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.0003', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 150.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 30,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(0, 0,'         ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'LOCO LONDON GOLD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'                                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'                                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'                                                ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'
XAUUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 
100 Troy Ounce', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'
USD 0.01', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'
USD 0.50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'
20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'
USD. 100.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'
USD 20,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(0, 0,'Dealing Quote (DQ) menggunakan telepon akan dikenakan tambahan 3 point untuk Majors, Cross Rate dan tambahan 0.5 $ untuk Loco London Gold dari tabel di atas. Ketentuan ini tidak berlaku bila kondisi server sedang mengalami gangguan teknis (down)', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,' KALKULASI : Profit / Loss                                                                                                                                                                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(80, 0,'  EURUSD; GBPUSD; AUDUSD  : 
   (SELL - BUY)x lot x contract size
   
   USDJPY; USDCHF  : 
   (SELL - BUY) x lot x contract size/harga                   likuidasi                                                                                                                                                                                                                                                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(80, 0,'  EURJPY; GBPJPY; AUDJPY; CHFJPY  : 
   (SELL - BUY)x lot x contract size/(USDJPY)
   
   EURGBP  : 
   (SELL - BUY) x lot x contract size x (GBPUSD)
   
   XAUUSD  : 
   (SELL - BUY) x lot x contract size                           ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
 
$pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,' KALKULASI     : Swap                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(80, 0,'EURUSD; GBPUSD; AUDUSD  : 
(closing price x lot x contract size x interest)/360

   USDJPY; USDCHF  : 
   (USD 100,000.- x lot x interest)/ 360                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->MultiCell(80, 0,'EURJPY : 
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
$pdf->MultiCell(30, 0,'Interest Rate / Swap                                                                                    ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'Interest rate akan mempengaruhi equity account nasabah yang mempunyai posisi open (overnight). Masing-masing currency tersebut tidak sama tingkat interest rate (suku bunga). Interest rate tersebut tergantung kepada Pedagang.
        Perhitungan bunga 1 hari valuta walaupun dari hari Jumat ke Senin
        Perhitungan bunga 3 hari valuta walaupun dari hari Rabu ke Kamis
', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)                                                                                                                                                                                                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(80, 0,'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.                                                                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(80, 0,'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

1. Dana yang dapat ditarik tidak dapat melebihi     dari Free Margin yang ada di platform 
    Esandar Trader.
2. Penarikan dana yang diterima sebelum jam      10:00 wib akan dibayar pada hari yang sama       (T+0).
3. Penarikan dana yang diterima setelah jam      10:00 wib akan dibayar pada hari berikutnya 
   (T+1).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Level / Spread Pending order(Limit Order(LO) / Stop Order(SO))                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'Level / Spread antara harga yang diminta dan harga running adalah minimum 150 poin dari harga running untuk harga Forex dan Cross Rate, sedangkan untuk Loco London Gold sebesar USD 2.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','B','10');

$pdf->MultiCell(30, 0,'Expiration Pending Order                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'  Expiration (masa berlaku ) Pending Order untuk Limit, stop, TP, SL adalah Good Till Friday (GTF).
  Jika Market Holiday (Libur) atau jam trading closing lebih awal maka semua Pending Order untuk new position dan liquidation position akan dicancel secara automatis oleh system setelah market closed.
  Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

  $pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Margin Call & Force Liquidation                                                                                                                                                                                                                                                                                                                                             ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(80, 0,'Margin Call Equity Level : 
(10% < Margin Level < 100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah mencapai level antara (10% < Margin Level< 100%)dari Margin Requirement.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(80, 0,'Force Liquidation :

A.Margin Level mencapai 10% atau dibawahnya.
   Apabila Equity account Nasabah mencapai level 10% atau dibawahnya dari Margin Requirement, 
   maka Force Liquidation akan dilakukan.

B. Short Margin untuk posisi Overnight
   Semua posisi yang masih terbuka pada saat market close setiap harinya dengan jumlah margin yang tidak cukup (short margin) akan dilikuidasi dengan harga closing 
   yang mengacu pada harga closing Esandar Trader.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Keadaan Hectic Market                                                  	                                                                                                                                                                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara.

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

1. Bid atau offer hanya ada satu sisi;
2. Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang Penyelenggara;
3. Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang mempengaruhi 
    kondisi pasar financial.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'KERAHASIAAN                                                                                                                                                                                                                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'REPORTING                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'1. Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu 
    Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar Trader 
    secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang 
    dikirimkan secara otomatis ke email nasabah.
2. Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada 
    laporan yang tersedia didalam Sistem Esandar Trader.
3. Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar 
    Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada 
    pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan 
    nasabah tersebut.
4. Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut 
    dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar 
    Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan 
    Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut 
    dianggap benar dan sah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10'); 
$pdf->MultiCell(30, 0,'Lain-Lain(Miscellaneous)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'1. Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market
2. Harga yang tampil di luar jam transaksi tidak berlaku.
3. Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang terjadi 
    pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan secara otomatis, 
    tanpa adanya pemberitahuan terlebih dahulu.
4. Open Gap berlaku untuk semua produk futures maupun rollover. Apabila selisih harga closing 
    market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap kontraknya, 
    maka semua posisi open pada overnight akan dihedge secara otomatis oleh Sistem. Atas keuntungan 
    maupun kerugian yang timbul karena Open Gap tersebut menjadi hak atau tanggungjawab nasabah 
    sepenuhnya.
5. Waktu yang digunakan pada sistem adalah GMT + 2.
6. Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan
7. Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat 
   menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras 
   atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan 
   sesuai dengan perintah nasabah.
   Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah 
   dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka 
   (021-29339318) disertai Phone Password', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'PENYELESAIAN PERSELISIHAN                                                                                                                                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'1. Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam 
historis transaksi, report, dan data-data pendukung lainnya.
2. Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(190,0,'Dengan mengisi kolom Ya di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(100,0,'Pernyataan Menerima / Tidak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(90,0,': YA', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(100,0,'Menyatakan pada Tanggal', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(90,0,": $Tanggal", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
}
		
//page8_4
else if($sql['Jenis_Transaksi']  = "FOREX_REGULAR")
{
$Menerima = 'YA';
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $tgl->format('d-m-Y');
$pdf->Open();
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

$pdf->Write(0, 'Trading Rules Kontrak Derivatif Forex dan Loco London Gold Regular', '', 0, 'C', true, 0, false, false, 0);
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
$pdf->MultiCell(75, 66.4, 'Perjanjian Pemberian Amanat:

Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian Pemberian Amanat.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 31,'Rekening Segregated                                                                                                                                                                                                                                                                                                                                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Nasabah dapat melakukan setoran dana dalam mata uang Rupiah dan US Dollar sebagai Margin Deposit untuk jaminan Pembukaan Account, dan Additional Margin (Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:

    Bank Central Asia (BCA) Sudirman - Jakarta
    No. Account: 035.310.6019 (IDR)
    Atas Nama: PT. Esandar Arthamas Berjangka
	
    Bank Central Asia (BCA) Sudirman - Jakarta
    No. Account: 035.310.4610 (USD)
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

$pdf->MultiCell(40, 0,'Rate                                                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Fixed Rate : 1 USD = 10.000 IDR
Floating Rate', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Commission Charge: USD. 5,- / 0.1 lot closingd', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(4);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(50, 0,'Jam Perdagangan (WIB)                                                                                                                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(40, 0,'    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Winter Time', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Summer Time', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0,'                                                                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,'MAJOR & CROSS RATE                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Senin buka pada jam 05:05 dan tutup pada hari sabtu jam 04:30', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Senin buka pada jam 05:05 dan tutup pada hari sabtu jam 03:30', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0,'                                                                                                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,'LOCO LONDON GOLD                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Senin buka pada 05.05 dan Sabtu tutup pada jam 04.00                                    ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Senin buka pada jam 05.05 dan sabtu tutup pada jam 03.00', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(50, 0,'                                                                                                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0,'Waktu istirahat pada time trading LOCO LONDON GOLD', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'05.00 sampai jam 06.00                  (Setiap Hari)                                                                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'04.00 sampai jam 05.00                  (Setiap Hari)                                                                      ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(4);
 
$pdf->MultiCell(30, 0,'MAJOR RATE                                                                                                                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Contract Size                                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'Minimum Tick Value                                 
   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'Normal Spread
                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'Maximum Volume 
 (0.1 lot)
 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'Margin Requirement per 0,1 lot Day Trade / Overnight :                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'Margin Hedged      per 0,1 lot                                          ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(30, 0,'EURUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'USDJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'$100,000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.25', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'GBPUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'USDCHF', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'$ 100,000', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','','8');
$pdf->MultiCell(30, 0,'AUDUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'AUD 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00025', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(0, 0,'    ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'CROSS RATE', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'   ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'EURJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'EUR 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD.1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'GBPJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'GBP 100,000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'AUDJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'AUD 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'CHFJPY', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'CHF 100,000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.03', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'EURGBP', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'EUR 100,000', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.00001', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'0.0003', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'USD. 1500.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'USD 300,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(0, 0,'         ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'LOCO LONDON GOLD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'                                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'                                      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'                                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'                                                ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(30, 0,'
XAUUSD', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,' 
100 Troy Ounce', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'
USD 0.01', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(20, 0,'
USD 0.50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'
20 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(35, 0,'
USD. 1000.-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(30, 0,'
USD 200,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(0, 0,'Dealing Quote (DQ) menggunakan telepon akan dikenakan tambahan 3 point untuk Majors, Cross Rate dan tambahan 0.5 $ untuk Loco London Gold dari tabel di atas. Ketentuan ini tidak berlaku bila kondisi server sedang mengalami gangguan teknis (down)', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,' KALKULASI : Profit / Loss                                                                                                                                                                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(80, 0,'  EURUSD; GBPUSD; AUDUSD  : 
   (SELL - BUY)x lot x contract size
   
   USDJPY; USDCHF  : 
   (SELL - BUY) x lot x contract size/harga                   likuidasi                                                                                                                                                                                                                                                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(80, 0,'  EURJPY; GBPJPY; AUDJPY; CHFJPY  : 
   (SELL - BUY)x lot x contract size/(USDJPY)
   
   EURGBP  : 
   (SELL - BUY) x lot x contract size x (GBPUSD)
   
   XAUUSD  : 
   (SELL - BUY) x lot x contract size                           ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
 
$pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,' KALKULASI     : Swap                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(80, 0,'EURUSD; GBPUSD; AUDUSD  : 
(closing price x lot x contract size x interest)/360

   USDJPY; USDCHF  : 
   (USD 100,000.- x lot x interest)/ 360                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->MultiCell(80, 0,'EURJPY : 
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
$pdf->MultiCell(30, 0,'Interest Rate / Swap                                                                                    ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'Interest rate akan mempengaruhi equity account nasabah yang mempunyai posisi open (overnight). Masing-masing currency tersebut tidak sama tingkat interest rate (suku bunga). Interest rate tersebut tergantung kepada Pedagang.
        Perhitungan bunga 1 hari valuta walaupun dari hari Jumat ke Senin
        Perhitungan bunga 3 hari valuta walaupun dari hari Rabu ke Kamis
', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)                                                                                                                                                                                                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(80, 0,'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.                                                                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(80, 0,'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

1. Dana yang dapat ditarik tidak dapat melebihi     dari Free Margin yang ada di platform 
    Esandar Trader.
2. Penarikan dana yang diterima sebelum jam      10:00 wib akan dibayar pada hari yang sama       (T+0).
3. Penarikan dana yang diterima setelah jam      10:00 wib akan dibayar pada hari berikutnya 
   (T+1).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Level / Spread Pending order(Limit Order(LO) / Stop Order(SO))                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'Level / Spread antara harga yang diminta dan harga running adalah minimum 150 poin dari harga running untuk harga Forex dan Cross Rate, sedangkan untuk Loco London Gold sebesar USD 2.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','B','10');

$pdf->MultiCell(30, 0,'Expiration Pending Order                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'  Expiration (masa berlaku ) Pending Order untuk Limit, stop, TP, SL adalah Good Till Friday (GTF).
  Jika Market Holiday (Libur) atau jam trading closing lebih awal maka semua Pending Order untuk new position dan liquidation position akan dicancel secara automatis oleh system setelah market closed.
  Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

  $pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Margin Call & Force Liquidation                                                                                                                                                                                                                                                                                                                                             ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(80, 0,'Margin Call Equity Level : 
(10% < Margin Level < 100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah mencapai level antara (10% < Margin Level< 100%)dari Margin Requirement.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(80, 0,'Force Liquidation :

A.Margin Level mencapai 10% atau dibawahnya.
   Apabila Equity account Nasabah mencapai level 10% atau dibawahnya dari Margin Requirement, 
   maka Force Liquidation akan dilakukan.

B. Short Margin untuk posisi Overnight
   Semua posisi yang masih terbuka pada saat market close setiap harinya dengan jumlah margin yang tidak cukup (short margin) akan dilikuidasi dengan harga closing 
   yang mengacu pada harga closing Esandar Trader.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'Keadaan Hectic Market                                                  	                                                                                                                                                                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara.

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

1. Bid atau offer hanya ada satu sisi;
2. Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang Penyelenggara;
3. Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang mempengaruhi 
    kondisi pasar financial.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'KERAHASIAAN                                                                                                                                                                                                                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'REPORTING                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'1. Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu 
    Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar Trader 
    secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang 
    dikirimkan secara otomatis ke email nasabah.
2. Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada 
    laporan yang tersedia didalam Sistem Esandar Trader.
3. Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar 
    Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada 
    pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan 
    nasabah tersebut.
4. Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut 
    dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar 
    Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan 
    Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut 
    dianggap benar dan sah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Open();
$pdf->Addpage();
$pdf->SetFont('Helvetica','B','10'); 
$pdf->MultiCell(30, 0,'Lain-Lain(Miscellaneous)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0,'1. Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market
2. Harga yang tampil di luar jam transaksi tidak berlaku.
3. Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang terjadi 
    pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan secara otomatis, 
    tanpa adanya pemberitahuan terlebih dahulu.
4. Open Gap berlaku untuk semua produk futures maupun rollover. Apabila selisih harga closing 
    market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap kontraknya, 
    maka semua posisi open pada overnight akan dihedge secara otomatis oleh Sistem. Atas keuntungan 
    maupun kerugian yang timbul karena Open Gap tersebut menjadi hak atau tanggungjawab nasabah 
    sepenuhnya.
5. Waktu yang digunakan pada sistem adalah GMT + 2.
6. Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan
7. Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat 
   menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras 
   atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan 
   sesuai dengan perintah nasabah.
   Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah 
   dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka 
   (021-29339318) disertai Phone Password', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->SetFont('Helvetica','B','10');
$pdf->MultiCell(30, 0,'PENYELESAIAN PERSELISIHAN                                                                                                                                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(160, 0,'1. Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam 
historis transaksi, report, dan data-data pendukung lainnya.
2. Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(190,0,'Dengan mengisi kolom Ya di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(100,0,'Pernyataan Menerima / Tidak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(90,0,': YA', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(100,0,'Menyatakan pada Tanggal', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(90,0,": $Tanggal", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
}


//page8_5
else if($sql['Jenis_Transaksi']  = "INDEX_USD_0,1_LOT")
{

$tgl = new datetime('Asia/Jakarta');
$tanggal = $tgl->format('d-m-Y');

$pdf->Open();
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

$pdf->Write(0, 'Trading Rules Kontrak Derivatif Stock Index USD untuk 0.1 Lot', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'PEMBUKAAN ACCOUNT (REKENING)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 0,'Aplikasi Penerimaan Nasabah Secara Elektronik dan Online', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Untuk keperluan pembukaan rekening, maka nasabah wajib registrasi melalui Sistem Agreement dan Registrasi Online yang ada di website esandar.co.id guna pengisian aplikasi pembukaan rekening transaksi dan dokumen-dokumen yang wajib dibaca, dipahami dan dimengerti.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 66.4, 'Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0, 'Dokumen Pemberitahuan Adanya Risiko:

Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti Pernyataan Menerima Pemberitahuan Adanya Risiko yang ada pada Dokumen Pemberitahuan Adanya Risiko.

Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 66.4, 'Perjanjian Pemberian Amanat:

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
$pdf->MultiCell(40, 17.9,'Margin Deposit', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Margin Deposit Awal', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : USD. 500.- (New Account).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Rate', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Rate dalam USD', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Harga Penutupan Pasar(Closing Market)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9, 'Harga Penutupan Pasar berdasarkan Harga Setlement Price', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Commission Charge: USD. 5,- / 0.1 lot closingd', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(47.5, 0,'Jam Perdagangan (GMT+7)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 3', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(47.5, 0,'Stock Index Hongkong', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'08:15 - 11:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'12:00 - 15:15', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'16:00 - 22:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(47.5, 0,'Stock Index Jepang', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'06:45 - 13:25', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'14:15 - 01:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(47.5, 0,'Stock Index Korea', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'07:00 - 13:05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(0, 0,'1. Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit setelah market open.
2. Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.
3. DQ menggunakan telepon akan dikenakan spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama dan pada saat kondisi 
   server sedang mengalami gangguan teknis. (Down)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(2);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'Trading Facilities', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(0, 0,'1. Kontrak Berjangka (Stock Index Futures)
	   Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang mengenal akhir bulan perdagangan. 
	   Pada akhir bulan perdagangan tersebut posisi nasabah harus terlikuidasi (Clear Posisi).

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
$pdf->MultiCell(75, 0,'Stock Index Futures', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0,'Stock Index Rollover', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'KOREA', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 0,'Code Contract', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'HKJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'JPJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'KRJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'HKK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'JPK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Contract Size', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Normal Spread', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'0.05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Minimum Tick', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'0.05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Maximal Volume (0.1 lot)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Requirement per 0,1 lot Day Trade:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Requirement per 0,1 lot Overnight:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 160', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 160', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 160', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 160', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 160', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Hedged Day Trade per 0,1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 10', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Hedged Overnight per 0,1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 32', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 32', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 32', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 32', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 32', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Swap Buy /0.1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'- ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 0.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 0.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Swap Sell / 0.1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 0.1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 0.1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Open Gap', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 53.2,'Bulan Kontrak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'F = Januari
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
$pdf->MultiCell(25, 53.2,'H = Maret
M = Juni
U = September
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 53.2,'H = Maret
M = Juni
U = September
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 18,'Transaksi Bulan Berikutnya', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 35.5,'Hari Perdagangan Terakhir(Hanya untuk melikuidasi posisi)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Satu hari sebelum hari Perdagangan Terakhir Bulan Kontrak dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->AddPage();

$pdf->MultiCell(40, 40,'Roll Over', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 40,'Nasabah harus menutup semua posisinya yang terbuka pada saat waktu kontrak berakhir (expired). Tidak ada Roll Over secara otomatis. Apabila Nasabah belum melikuidasi posisinya yang terbuka pada saat waktu kontrak berakhir, maka Sistem Esandar Trader akan melikuidasi posisi yang terbuka secara otomatis (dengan harga closing market pada Platform Esandar Trader untuk kontrak tersebut)', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 40,'Automatic Rollover (Lihat Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract))', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'KALKULASI: Profit/Loss', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 9,'HKJ5U; JPJ5U; KRJ5U:
(SELL-BUY) X lot X contract size', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 9,'HKK5U; JPK5U:
(SELL-BUY) X lot X contract size', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 9,'Angka Penyelesaian', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Mengacu pada closingment Price Kontrak Berjangka untuk Bulan Referensi terdekat sampai hari ganti Bulan Referensi.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Hari Ganti Bulan Referensi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Satu hari kerja sebelum hari kerja terakhir Bulan Referensi yang sedang berjalan, Angka Penyelesaian akan mengacu pada closingment Price Bulan Referensi Berikutnya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 132.8,'Penyesuaian Akibat Ganti Bulan Referensi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Beda antara Angka Penyelesaian kedua bulan kontrak itu pada akhir hari sebelumnya Hari Ganti Bulan
Referensi tidak diperhitungkan sebagai laba atau rugi tetapi dilakukan penyesuaian.

Besarnya penyesuaian yang terjadi sebagai berikut :
Open posisi Buy:
Penyesuaian = (Harga Closing Kontrak Lama-Harga Closing Kontrak Baru) x Contract Size x Lot
Open posisi Sell:
Penyesuaian = (Harga Closing Kontrak Baru-Harga Closing Kontrak Lama) x Contract Size x Lot

Open posisi (original price) tetap ada selama belum dilikuidasi oleh nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 66.4, '', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0, 'Contoh:

Nasabah A Buy HKK5U 0,1 Lot;

Closing kontrak lama 22600
Closing kontrak baru 22625

Penyesuaian
= (22600-22625) x $ 5 x 0.1
= - $ 12,5

Contoh:
Nasabah C Buy HKK5U 0.1 Lot;

Closing kontrak lama 23600
Closing kontrak baru 23500

Penyesuaian
= (23600-23500) x $ 5 x 0.1
= $ 50', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 66.4, 'Contoh:

Nasabah B Sell HKK5U 0,1 Lot;

Closing kontrak lama 22600
Closing kontrak baru 22625

Penyesuaian
= (22625-22600) x $ 5x 0.1
= $ 12,5

Contoh:
Nasabah D Sell HKK5U 0,1 Lot;

Closing kontrak lama 23600
Closing kontrak baru 23500

Penyesuaian
= (23500-23600) x $ 5x 0.1
= - $ 50', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(40, 26.8,'Ketentuan Pending Order (Limit Order (LO) / Stop Order (SO) / (Stop Loss (SL) /Take Profit (TP))', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Hongkong', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Jepang', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Korea', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi 
    1,2, dan 3', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi 1 dan 2.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 22.3,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi I.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
	
$pdf->MultiCell(40, 9,'Expiration Pending Order', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9, 'Harga yang tampil di luar jam transaksi tidak berlaku. Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(40, 0,'Level/Spread Pending Order (Limit Order (LO) / Stop Order (SO) / Stop Loss (SL) / Take Profit (TP))', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 22.3,'Level / Spread antara harga yang diminta dan harga running adalah minimum 30 poin dari harga Running.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 70.7,'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 70.7,'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 70.7,'Apabila equity nasabah tidak mencukupi untuk margin overnight maka untuk margin tambahan (inject dana) harus dilakukan 2 jam setelah market close, dan apabila tidak dilakukan penambahan dana maka posisi nasabah akan dilikuidasi berdasarkan harga market close.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

1. Dana yang dapat ditarik tidak 
   dapat melebihi dari Free 
   Margin yang ada di platform 
   Esandar Trader.
2. Penarikan dana yang diterima 
   sebelum jam 12:00 wib akan 
   dibayar pada hari yang sama 
   (T+0).
3. Penarikan dana yang diterima 
   setelah jam 12:00 wib akan 
   dibayar pada hari berikutnya 
   (T+1).', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 70.8,'Margin Call & Force Liquidation', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 70.8,'Margin Call Equity Level : 
(10% < Margin Level < 100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah mencapai level antara (10% < Margin Level< 100%)dari Margin Requirement.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0,'Force Liquidation :

A.Margin Level mencapai 10% atau dibawahnya.

   Apabila Equity account Nasabah mencapai level 
   10% atau dibawahnya dari Margin Requirement, 
   maka Force Liquidation akan dilakukan.

B. Short Margin untuk posisi Overnight

   Semua posisi yang masih terbuka pada saat 
   market close setiap harinya dengan jumlah 
   margin yang tidak cukup (short margin) 
   akan dilikuidasi dengan harga closing 
   yang mengacu pada harga closing Esandar Trader.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 44.3,'KERAHASIAAN', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(40, 84,'Lain-Lain(Miscellaneous)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market
2. Harga yang tampil di luar jam transaksi tidak berlaku.
3. Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang terjadi 
    pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan secara otomatis, 
    tanpa adanya pemberitahuan terlebih dahulu.
4. Open Gap berlaku untuk semua produk futures maupun rollover. Apabila selisih harga closing 
    market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap kontraknya, 
    maka semua posisi open pada overnight akan dihedge secara otomatis oleh Sistem. Atas keuntungan 
    maupun kerugian yang timbul karena Open Gap tersebut menjadi hak atau tanggungjawab nasabah 
    sepenuhnya.
5. Waktu yang digunakan pada sistem adalah GMT + 2.
6. Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan
7. Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat 
   menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras 
   atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan 
   sesuai dengan perintah nasabah.
   Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah 
   dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka 
   (021-29339318) disertai Phone Password', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
   
$pdf->MultiCell(40, 44.3,'Keadaan Hectic Market', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara.

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

1. Bid atau offer hanya ada satu sisi;
2. Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang Penyelenggara;
3. Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang mempengaruhi 
    kondisi pasar financial.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 66.3,'REPORTING', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu 
    Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar Trader 
    secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang 
    dikirimkan secara otomatis ke email nasabah.
2. Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada 
    laporan yang tersedia didalam Sistem Esandar Trader.
3. Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar 
    Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada 
    pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan 
    nasabah tersebut.
4. Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut 
    dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar 
    Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan 
    Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut 
    dianggap benar dan sah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 31.1,'PENYELESAIAN PERSELISIHAN', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis 
    transaksi, report, dan data-data pendukung lainnya.
2. Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai 
    dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(2);
	
$pdf->MultiCell(50,0,'Pernyataan Menerima / Tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$Menerima, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$Tanggal, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

//page "Trading Rules Kontrak Derivatif Stock Index USD Regular"

$pdf->Open();
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

$pdf->MultiCell(40, 66.4, 'Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0, 'Dokumen Pemberitahuan Adanya Risiko:

Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti Pernyataan Menerima Pemberitahuan Adanya Risiko yang ada pada Dokumen Pemberitahuan Adanya Risiko.

Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 66.4, 'Perjanjian Pemberian Amanat:

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
$pdf->MultiCell(40, 17.9,'Margin Deposit', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Margin Deposit Awal', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : USD. 5.000.- (New Account).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Rate', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Rate dalam USD', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Harga Penutupan Pasar(Closing Market)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9, 'Harga Penutupan Pasar berdasarkan Harga Setlement Price', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Commission Charge: USD. 50,- / 1 lot closingd', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(47.5, 0,'Jam Perdagangan (GMT+7)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 3', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(47.5, 0,'Stock Index Hongkong', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'08:15 - 11:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'12:00 - 15:15', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'16:00 - 22:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(47.5, 0,'Stock Index Jepang', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'06:45 - 13:25', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'14:15 - 01:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(47.5, 0,'Stock Index Korea', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'07:00 - 13:05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(0, 0,'1. Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit setelah market open.
2. Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.
3. DQ menggunakan telepon akan dikenakan spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama dan pada saat kondisi 
   server sedang mengalami gangguan teknis. (Down)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(2);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'Trading Facilities', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(0, 0,'1. Kontrak Berjangka (Stock Index Futures)
	   Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang mengenal akhir bulan perdagangan. 
	   Pada akhir bulan perdagangan tersebut posisi nasabah harus terlikuidasi (Clear Posisi).

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
$pdf->MultiCell(75, 0,'Stock Index Futures', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0,'Stock Index Rollover', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'KOREA', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 0,'Code Contract', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'HKJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'JPJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'KRJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'HKK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'JPK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Contract Size', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Normal Spread', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'0.05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Minimum Tick', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'0.05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Maximal Volume (Day Trade)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Maximal Volume Hongkong (Sesi 3)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Requirement per 1 lot Day Trade:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Requirement per 1 lot Overnight:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Hedged Day Trade per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Hedged Overnight per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Swap Buy / 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'- ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Swap Sell / 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Open Gap', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 53.2,'Bulan Kontrak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'F = Januari
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
$pdf->MultiCell(25, 53.2,'H = Maret
M = Juni
U = September
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 53.2,'H = Maret
M = Juni
U = September
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 18,'Transaksi Bulan Berikutnya', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->AddPage();

$pdf->MultiCell(40, 35.5,'Hari Perdagangan Terakhir(Hanya untuk melikuidasi posisi)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Satu hari sebelum hari Perdagangan Terakhir Bulan Kontrak dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 40,'Roll Over', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 40,'Nasabah harus menutup semua posisinya yang terbuka pada saat waktu kontrak berakhir (expired). Tidak ada Roll Over secara otomatis. Apabila Nasabah belum melikuidasi posisinya yang terbuka pada saat waktu kontrak berakhir, maka Sistem Esandar Trader akan melikuidasi posisi yang terbuka secara otomatis (dengan harga closing market pada Platform Esandar Trader untuk kontrak tersebut)', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 40,'Automatic Rollover (Lihat Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract))', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'KALKULASI: Profit/Loss', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 9,'HKJ5U; JPJ5U; KRJ5U:
(SELL-BUY) X lot X contract size', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 9,'HKK5U; JPK5U:
(SELL-BUY) X lot X contract size', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 9,'Angka Penyelesaian', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Mengacu pada closingment Price Kontrak Berjangka untuk Bulan Referensi terdekat sampai hari ganti Bulan Referensi.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Hari Ganti Bulan Referensi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Satu hari kerja sebelum hari kerja terakhir Bulan Referensi yang sedang berjalan, Angka Penyelesaian akan mengacu pada closingment Price Bulan Referensi Berikutnya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 132.8,'Penyesuaian Akibat Ganti Bulan Referensi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Beda antara Angka Penyelesaian kedua bulan kontrak itu pada akhir hari sebelumnya Hari Ganti Bulan
Referensi tidak diperhitungkan sebagai laba atau rugi tetapi dilakukan penyesuaian.

Besarnya penyesuaian yang terjadi sebagai berikut :
Open posisi Buy:
Penyesuaian = (Harga Closing Kontrak Lama-Harga Closing Kontrak Baru) x Contract Size x Lot
Open posisi Sell:
Penyesuaian = (Harga Closing Kontrak Baru-Harga Closing Kontrak Lama) x Contract Size x Lot

Open posisi (original price) tetap ada selama belum dilikuidasi oleh nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 66.4, '', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0, 'Contoh:

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
$pdf->MultiCell(75, 66.4, 'Contoh:

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

$pdf->AddPage();

$pdf->MultiCell(40, 26.8,'Ketentuan Pending Order (Limit Order (LO) / Stop Order (SO) / (Stop Loss (SL) /Take Profit (TP))', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Hongkong', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Jepang', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Korea', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi 
    1,2, dan 3', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi 1 dan 2.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 22.3,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi I.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
	
$pdf->MultiCell(40, 9,'Expiration Pending Order', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9, 'Harga yang tampil di luar jam transaksi tidak berlaku. Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Level/Spread Pending Order (Limit Order (LO) / Stop Order (SO) / Stop Loss (SL) / Take Profit (TP))', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 22.3,'Level / Spread antara harga yang diminta dan harga running adalah minimum 30 poin dari harga Running.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 70.7,'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 70.7,'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 70.7,'Apabila equity nasabah tidak mencukupi untuk margin overnight maka untuk margin tambahan (inject dana) harus dilakukan 2 jam setelah market close, dan apabila tidak dilakukan penambahan dana maka posisi nasabah akan dilikuidasi berdasarkan harga market close.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

1. Dana yang dapat ditarik tidak 
   dapat melebihi dari Free 
   Margin yang ada di platform 
   Esandar Trader.
2. Penarikan dana yang diterima 
   sebelum jam 12:00 wib akan 
   dibayar pada hari yang sama 
   (T+0).
3. Penarikan dana yang diterima 
   setelah jam 12:00 wib akan 
   dibayar pada hari berikutnya 
   (T+1).', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 70.8,'Margin Call & Force Liquidation', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 70.8,'Margin Call Equity Level : 
(10% < Margin Level < 100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah mencapai level antara (10% < Margin Level< 100%)dari Margin Requirement.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0,'Force Liquidation :

A.Margin Level mencapai 10% atau dibawahnya.

   Apabila Equity account Nasabah mencapai level 
   10% atau dibawahnya dari Margin Requirement, 
   maka Force Liquidation akan dilakukan.

B. Short Margin untuk posisi Overnight

   Semua posisi yang masih terbuka pada saat 
   market close setiap harinya dengan jumlah 
   margin yang tidak cukup (short margin) 
   akan dilikuidasi dengan harga closing 
   yang mengacu pada harga closing Esandar Trader.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 44.3,'KERAHASIAAN', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(40, 84,'Lain-Lain(Miscellaneous)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market
2. Harga yang tampil di luar jam transaksi tidak berlaku.
3. Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang terjadi 
    pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan secara otomatis, 
    tanpa adanya pemberitahuan terlebih dahulu.
4. Open Gap berlaku untuk semua produk futures maupun rollover. Apabila selisih harga closing 
    market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap kontraknya, 
    maka semua posisi open pada overnight akan dihedge secara otomatis oleh Sistem. Atas keuntungan 
    maupun kerugian yang timbul karena Open Gap tersebut menjadi hak atau tanggungjawab nasabah 
    sepenuhnya.
5. Waktu yang digunakan pada sistem adalah GMT + 2.
6. Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan
7. Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat 
   menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras 
   atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan 
   sesuai dengan perintah nasabah.
   Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah 
   dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka 
   (021-29339318) disertai Phone Password', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
   
$pdf->MultiCell(40, 44.3,'Keadaan Hectic Market', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara.

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

1. Bid atau offer hanya ada satu sisi;
2. Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang Penyelenggara;
3. Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang mempengaruhi 
    kondisi pasar financial.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 66.3,'REPORTING', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu 
    Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar Trader 
    secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang 
    dikirimkan secara otomatis ke email nasabah.
2. Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada 
    laporan yang tersedia didalam Sistem Esandar Trader.
3. Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar 
    Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada 
    pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan 
    nasabah tersebut.
4. Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut 
    dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar 
    Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan 
    Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut 
    dianggap benar dan sah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 31.1,'PENYELESAIAN PERSELISIHAN', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis 
    transaksi, report, dan data-data pendukung lainnya.
2. Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai 
    dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(2);
	
$pdf->MultiCell(50,0,'Pernyataan Menerima / Tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$Menerima, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$Tanggal, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
}



//page8_6

else if($sql['Jenis_Transaksi']  = "INDEX_USD_REGULAR")
{
$tgl = new datetime('Asia/Jakarta');
$tanggal = $tgl->format('d-m-Y');

$pdf->Open();
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

$pdf->MultiCell(40, 66.4, 'Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0, 'Dokumen Pemberitahuan Adanya Risiko:

Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti Pernyataan Menerima Pemberitahuan Adanya Risiko yang ada pada Dokumen Pemberitahuan Adanya Risiko.

Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 66.4, 'Perjanjian Pemberian Amanat:

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
$pdf->MultiCell(40, 17.9,'Margin Deposit', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Margin Deposit Awal', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : USD. 5.000.- (New Account).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Rate', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Rate dalam USD', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Harga Penutupan Pasar(Closing Market)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9, 'Harga Penutupan Pasar berdasarkan Harga Setlement Price', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Commission Charge: USD. 50,- / 1 lot closingd', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(47.5, 0,'Jam Perdagangan (GMT+7)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'Sesi 3', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(47.5, 0,'Stock Index Hongkong', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'08:15 - 11:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'12:00 - 15:15', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'16:00 - 22:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(47.5, 0,'Stock Index Jepang', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'06:45 - 13:25', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'14:15 - 01:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(47.5, 0,'Stock Index Korea', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'07:00 - 13:05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(47.5, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(0, 0,'1. Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit setelah market open.
2. Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.
3. DQ menggunakan telepon akan dikenakan spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama dan pada saat kondisi 
   server sedang mengalami gangguan teknis. (Down)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(2);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'Trading Facilities', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(0, 0,'1. Kontrak Berjangka (Stock Index Futures)
	   Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang mengenal akhir bulan perdagangan. 
	   Pada akhir bulan perdagangan tersebut posisi nasabah harus terlikuidasi (Clear Posisi).

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
$pdf->MultiCell(75, 0,'Stock Index Futures', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0,'Stock Index Rollover', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'KOREA', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 0,'Code Contract', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'HKJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'JPJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'KRJ5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'HKK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'JPK5U', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Contract Size', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Normal Spread', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'0.05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Minimum Tick', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'0.05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Maximal Volume (Day Trade)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'20.0 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Maximal Volume Hongkong (Sesi 3)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'5 lot', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Requirement per 1 lot Day Trade:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 500', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Requirement per 1 lot Overnight:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 1600', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Hedged Day Trade per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 100', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'Margin Hedged Overnight per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 9,'USD 320', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Swap Buy / 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'- ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Swap Sell / 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'USD 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'Open Gap', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 0,'300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 53.2,'Bulan Kontrak', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'F = Januari
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
$pdf->MultiCell(25, 53.2,'H = Maret
M = Juni
U = September
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 53.2,'H = Maret
M = Juni
U = September
Z = Desember', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 53.2,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 18,'Transaksi Bulan Berikutnya', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 0,'Dua hari sebelum hari Perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 18,'-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->AddPage();

$pdf->MultiCell(40, 35.5,'Hari Perdagangan Terakhir(Hanya untuk melikuidasi posisi)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Satu hari sebelum hari Perdagangan Terakhir Bulan Kontrak dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(25, 35.5,'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(37.5, 35.5,'Tidak ada hari perdagangan Terakhir', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 40,'Roll Over', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 40,'Nasabah harus menutup semua posisinya yang terbuka pada saat waktu kontrak berakhir (expired). Tidak ada Roll Over secara otomatis. Apabila Nasabah belum melikuidasi posisinya yang terbuka pada saat waktu kontrak berakhir, maka Sistem Esandar Trader akan melikuidasi posisi yang terbuka secara otomatis (dengan harga closing market pada Platform Esandar Trader untuk kontrak tersebut)', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 40,'Automatic Rollover (Lihat Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract))', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 9,'KALKULASI: Profit/Loss', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 9,'HKJ5U; JPJ5U; KRJ5U:
(SELL-BUY) X lot X contract size', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 9,'HKK5U; JPK5U:
(SELL-BUY) X lot X contract size', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('times', 'B', 10);
$pdf->MultiCell(0, 0,'Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract)', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->SetFont('times', '', 10);
$pdf->MultiCell(40, 9,'Angka Penyelesaian', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Mengacu pada closingment Price Kontrak Berjangka untuk Bulan Referensi terdekat sampai hari ganti Bulan Referensi.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 9,'Hari Ganti Bulan Referensi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Satu hari kerja sebelum hari kerja terakhir Bulan Referensi yang sedang berjalan, Angka Penyelesaian akan mengacu pada closingment Price Bulan Referensi Berikutnya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 132.8,'Penyesuaian Akibat Ganti Bulan Referensi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0, 'Beda antara Angka Penyelesaian kedua bulan kontrak itu pada akhir hari sebelumnya Hari Ganti Bulan
Referensi tidak diperhitungkan sebagai laba atau rugi tetapi dilakukan penyesuaian.

Besarnya penyesuaian yang terjadi sebagai berikut :
Open posisi Buy:
Penyesuaian = (Harga Closing Kontrak Lama-Harga Closing Kontrak Baru) x Contract Size x Lot
Open posisi Sell:
Penyesuaian = (Harga Closing Kontrak Baru-Harga Closing Kontrak Lama) x Contract Size x Lot

Open posisi (original price) tetap ada selama belum dilikuidasi oleh nasabah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 66.4, '', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0, 'Contoh:

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
$pdf->MultiCell(75, 66.4, 'Contoh:

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

$pdf->AddPage();

$pdf->MultiCell(40, 26.8,'Ketentuan Pending Order (Limit Order (LO) / Stop Order (SO) / (Stop Loss (SL) /Take Profit (TP))', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Hongkong', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Jepang', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Stock Index Korea', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi 
    1,2, dan 3', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi 1 dan 2.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 22.3,'1. Pending Order dapat dipasang 
    pada setiap sesi.
2. Pending Order secara otomatis 
    akan berakhir pada akhir sesi I.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();
	
$pdf->MultiCell(40, 9,'Expiration Pending Order', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 9, 'Harga yang tampil di luar jam transaksi tidak berlaku. Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 0,'Level/Spread Pending Order (Limit Order (LO) / Stop Order (SO) / Stop Loss (SL) / Take Profit (TP))', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 22.3,'Level / Spread antara harga yang diminta dan harga running adalah minimum 30 poin dari harga Running.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(40, 70.7,'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 70.7,'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 70.7,'Apabila equity nasabah tidak mencukupi untuk margin overnight maka untuk margin tambahan (inject dana) harus dilakukan 2 jam setelah market close, dan apabila tidak dilakukan penambahan dana maka posisi nasabah akan dilikuidasi berdasarkan harga market close.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50, 0,'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

1. Dana yang dapat ditarik tidak 
   dapat melebihi dari Free 
   Margin yang ada di platform 
   Esandar Trader.
2. Penarikan dana yang diterima 
   sebelum jam 12:00 wib akan 
   dibayar pada hari yang sama 
   (T+0).
3. Penarikan dana yang diterima 
   setelah jam 12:00 wib akan 
   dibayar pada hari berikutnya 
   (T+1).', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 70.8,'Margin Call & Force Liquidation', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 70.8,'Margin Call Equity Level : 
(10% < Margin Level < 100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah mencapai level antara (10% < Margin Level< 100%)dari Margin Requirement.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(75, 0,'Force Liquidation :

A.Margin Level mencapai 10% atau dibawahnya.

   Apabila Equity account Nasabah mencapai level 
   10% atau dibawahnya dari Margin Requirement, 
   maka Force Liquidation akan dilakukan.

B. Short Margin untuk posisi Overnight

   Semua posisi yang masih terbuka pada saat 
   market close setiap harinya dengan jumlah 
   margin yang tidak cukup (short margin) 
   akan dilikuidasi dengan harga closing 
   yang mengacu pada harga closing Esandar Trader.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln();

$pdf->MultiCell(40, 44.3,'KERAHASIAAN', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->MultiCell(40, 84,'Lain-Lain(Miscellaneous)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market
2. Harga yang tampil di luar jam transaksi tidak berlaku.
3. Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang terjadi 
    pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan secara otomatis, 
    tanpa adanya pemberitahuan terlebih dahulu.
4. Open Gap berlaku untuk semua produk futures maupun rollover. Apabila selisih harga closing 
    market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap kontraknya, 
    maka semua posisi open pada overnight akan dihedge secara otomatis oleh Sistem. Atas keuntungan 
    maupun kerugian yang timbul karena Open Gap tersebut menjadi hak atau tanggungjawab nasabah 
    sepenuhnya.
5. Waktu yang digunakan pada sistem adalah GMT + 2.
6. Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan
7. Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat 
   menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras 
   atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan 
   sesuai dengan perintah nasabah.
   Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah 
   dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka 
   (021-29339318) disertai Phone Password', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
   
$pdf->MultiCell(40, 44.3,'Keadaan Hectic Market', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara.

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

1. Bid atau offer hanya ada satu sisi;
2. Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang Penyelenggara;
3. Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang mempengaruhi 
    kondisi pasar financial.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 66.3,'REPORTING', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu 
    Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar Trader 
    secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang 
    dikirimkan secara otomatis ke email nasabah.
2. Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada 
    laporan yang tersedia didalam Sistem Esandar Trader.
3. Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar 
    Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada 
    pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan 
    nasabah tersebut.
4. Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut 
    dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar 
    Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan 
    Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut 
    dianggap benar dan sah.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
$pdf->MultiCell(40, 31.1,'PENYELESAIAN PERSELISIHAN', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'1. Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis 
    transaksi, report, dan data-data pendukung lainnya.
2. Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai 
    dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Dengan mengisi kolom Ya di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(2);
	
$pdf->MultiCell(50,0,'Pernyataan Menerima / Tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': '.$Menerima, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$Tanggal, 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
}


//page8_7

else if($sql['Jenis_Transaksi']  = "INDEX_IDR_0,1_LOT")
{
$Menerima = 'YA';
$tgl = new datetime('Asia/Jakarta');
$Tanggal = $tgl->format('d-m-Y');

$pdf->AddPage();
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas 
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Write(0, 'Formulir: 107.PBK.06', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'Trading Rules Kontrak Derivatif Stock Index IDR 0,1 Lot', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$no13 = 'Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure) ini dibuat dalam Bahasa Indonesia.'."\n";
$memahami13 = 'saya sudah membaca dan memahami                                          '."\n";

$pernyataan = 'PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO'."\n";
$dengan='Dengan mengisi kolom ԙAԠdi bawah, saya menyatakan bahwa saya telah menerima ԄOKUMEN PEMBERITAHUAN ADANYA RISIKOԠmengerti dan menyetujui isinya.'."\n";

$tgl = new datetime('Asia/Jakarta');
$tanggal = $tgl->format('d-m-Y');




// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set color for background
//$pdf->SetFillColor(255, 255, 200);

// set color for text
//$pdf->SetTextColor(0, 63, 127);

// write the first column
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'PEMBUKAAN ACCOUNT (REKENING)', 1, 1, 'L', 0, '', 0);

// set color for background
//$pdf->SetFillColor(215, 235, 255);

// set color for text
//$pdf->SetTextColor(127, 31, 0);

// write the second column

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0,'Aplikasi Penerimaan Nasabah Secara Elektronik dan Online                                        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0,'Untuk keperluan pembukaan rekening, maka nasabah wajib registrasi melalui Sistem Agreement dan Registrasi Online yang ada di website esandar.co.id guna pengisian aplikasi pembukaan rekening transaksi dan dokumen-dokumen yang wajib dibaca, dipahami dan dimengerti.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(67.5, 0, 'Dokumen Pemberitahuan Adanya Risiko:
Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti Pernyataan Menerima Pemberitahuan Adanya Risiko yang ada pada Dokumen Pemberitahuan Adanya Risiko. 

Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.

', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Perjanjian Pemberian Amanat:
Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian Pemberian Amanat.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Rekening Terpisah / Segregated Account                                                                                                                                                                                                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Nasabah dapat melakukan setoran dana dalam mata uang Rupiah sebagai Margin Deposit untuk jaminan Pembukaan Account, dan Additional Margin (Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:

->	Bank Central Asia (BCA) Sudirman - Jakarta
     No. Account: 035.313.6019 (IDR)
     Atas Nama: PT. Esandar Arthamas Berjangka
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Rekening Nasabah Berlaku Efektif                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Nasabah dapat melakukan transaksi, apabila setoran dana telah efektif (Good Fund) dan telah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'KETENTUAN TRADING', 1, 1, 'L', 0, '', 0);
$pdf->Ln(0);

$pdf->MultiCell(45, 0, 'Margin Deposit                                                                                                                                                                                                              ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Margin Deposit Awal                                              ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : Rp. 5.000.000.- (New Account).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Rate               ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Rate dalam Rupiah', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Harga Penutupan Pasar (Closing Market)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Harga Penutupan Pasar berdasarkan Harga Setlement Price                                                 ', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Commission Charge: IDR. 50.000,- / 0.1 lot closingd                                                 ', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'Jam Perdagangan (GMT+7)', 1, 1, 'C', 0, '', 0);
$pdf->MultiCell(45, 0, '      ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Sesi 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Sesi 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Sesi 3', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Stock Index Hongkong', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '08:15 - 11:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '12:00 - 15:15', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '16:00 - 22:00', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(45, 0, 'Stock Index Jepang', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '06:45 - 13:25', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '14:15 - 01:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(45, 0, 'Stock Index Korea', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '07:00 - 13:05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->MultiCell(180, 0, '->	Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit setelah market open.
->	Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.
->	DQ menggunakan telepon akan dikenakan spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama dan pada saat kondisi server sedang mengalami gangguan teknis. (Down)
', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'Trading Facilities', 1, 1, 'L', 0, '', 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(180, 0, '
->	Kontrak Berjangka (Stock Index Futures)
Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang mengenal akhir bulan perdagangan.
Pada akhir bulan perdagangan tersebut posisi nasabah harus terlikuidasi (Clear Posisi).

->	Kontrak Berkala (Stock Index Rollover)
Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang tidak mengenal akhir bulan perdagangan tetapi terdapat Bulan Referensi. Pada bulan referensi tersebut akan diadakan penyesuaian untuk open posisi yang masih ada dan open posisi (Original Price) tetap ada selama belum dilikuidasi nasabah.

', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, '                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(81, 0, 'Stock Index Futures', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(54, 0, 'Stock Index Rollover', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, '                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'KOREA', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'JEPANG', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Code Contract', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'HKJ50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'JPJ30', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'KRJ35', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'HKK50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'JPK50', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Contract Size', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 50.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 30.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 3.500.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 50.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 50.000,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Normal Spread', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '0.05 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Minimum Tick', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '0.05 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5 pip', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Maximal Volume (0.1 lot)                                                        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '50.0 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '50.0 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '50.0 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '50.0 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '50.0 lot                                          ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Requirement per 0,1 lot Day Trade :', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 500.000,-                           ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 600.000,-                           ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 350.000,-                           ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 500.000,-                           ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 500.000,-                           ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Requirement per 0.1 lot Overnight: ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.600.000,-                     ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.500.000,-                     ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.820.000,-                     ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.600.000,-                     ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.600.000,-                     ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Hedged Day Trade per 0.1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 100.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 120.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 70.000,-                    ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 100.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 100.000,-                  ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Hedged Overnight per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 300.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 300.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 364.000,-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 320.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 320.000,-                  ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Swap Buy /0.1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 2000,-      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 2000,-      ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Swap Sell / 0.1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 1000,-      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 1000,-      ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Open Gap', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '500 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '300 poin', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Bulan Kontrak                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'F = Januari
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
Z = Desember
', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'H = Maret
M = Juni
U = September
Z = Desember
                                                                                                                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'H = Maret
M = Juni
U = September
Z = Desember
                                                                                                                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                                                                                                                                                                                                                                                                                                       ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                                                                                                                                                                                                                                                                                                       ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Transaksi Bulan Berikutnya                                                                                                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Dua hari sebelum hari Perdagangan Terakhir', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Dua hari sebelum hari Perdagangan Terakhir', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Dua hari sebelum hari Perdagangan Terakhir', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                                                                                 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                                                                                 ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Hari Perdagangan Terakhir
(Hanya untuk melikuidasi posisi)
                                                                                                                                                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Satu hari sebelum hari Perdagangan Terakhir Bulan Kontrak dan hanya untuk melikuidasi posisi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.                                                           ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.                                                           ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Tidak ada hari perdagangan Terakhir                                                                                                                      ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Tidak ada hari perdagangan Terakhir                                                                                                                      ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Roll Over                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(67.5, 0, 'Nasabah harus menutup semua posisinya yang terbuka pada saat waktu kontrak berakhir (expired).
Tidak ada Roll Over secara otomatis. Apabila Nasabah belum melikuidasi posisinya yang terbuka pada saat waktu kontrak berakhir, maka Sistem Esandar Trader akan melikuidasi posisi yang terbuka secara otomatis (dengan harga closing market pada Platform Esandar Trader untuk kontrak tersebut).
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Automatic Rollover (Lihat Ketentuan Tambahan untuk Konrak Berkala (Rollover Contract))                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'KALKULASI: Profit/Loss             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(67.5, 0, '->    HKJ50; JPJ30; KRJ35:
   (SELL- BUY) x lot x contract size',1,'J',0,0,'','', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, '->    HKK50; JPK50 :
   (SELL- BUY) x lot x contract size',1,'J',0,1,'','', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract)', 1, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Angka Penyelesaian                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(135, 0, 'Mengacu pada closingment Price Kontrak Berjangka untuk Bulan Referensi terdekat sampai hari ganti Bulan Referensi. ', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Hari Ganti Bulan Referensi                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(135, 0, 'Satu hari kerja sebelum hari kerja terakhir Bulan Referensi yang sedang berjalan, Angka Penyelesaian akan mengacu pada closingment Price Bulan Referensi Berikutnya.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Penyesuaian Akibat Ganti Bulan Referensi                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(135, 0, 'Beda antara Angka Penyelesaian kedua bulan kontrak itu pada akhir hari sebelumnya hari Ganti Bulan Referensi tidak diperhitungkan sebagai laba atau rugi tetapi dilakukan penyesuaian.

Besarnya penyesuaian yang terjadi sebagai berikut :
Open posisi Buy:
Penyesuaian = (Harga closing Kontrak Lama - Harga Closing Kontrak Baru) x Contract Size x lot
Open posisi Sell:
Penyesuaian = (Harga Closing Kontrak Baru - Harga Closing Kontrak Lama) x Contract Size x Lot

Open posisi (original price) tetap ada selama belum dilikuidasi oleh nasabah.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Contoh:

Nasabah A Buy HKK50 0,1 Lot;

Closing kontrak lama 22600
Closing kontrak baru 22625

Penyesuaian 
= (22600-22625) x Rp 50.000 x 0.1
= - Rp 125.000

Contoh:
Nasabah C Buy HKK50 0,1 Lot;

Closing kontrak lama 23600
Closing kontrak baru 23500

Penyesuaian
= (23600-23500) x Rp 50.000 x 0.1
= Rp 500.000
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Contoh:

Nasabah B Sell HKK50 0,1 Lot;

Closing kontrak lama 22600
Closing kontrak baru 22625

Penyesuaian 
= (22625-22600) x Rp 50.000 x 0,1
= Rp 125.000

Contoh:
Nasabah D Sell HKK50 0,1 Lot;

Closing kontrak lama 23600
Closing kontrak baru 23500

Penyesuaian
= (23500-23600) x Rp 50.000 x 0.1
= - Rp 500.000
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);



$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, '', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Stock Index Hongkong', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Stock Index Jepang', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Stock Index Korea', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);

$pdf->MultiCell(45, 0, 'Ketentuan Pending Order (Limit Order (LO) / Stop Order (SO) / (Stop Loss (SL) /Take Profit (TP))                             ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, '1.	Pending Order dapat dipasang pada setiap sesi
2.	Pending Order secara otomatis akan berakhir pada akhir sesi 1,2, dan 
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '1.	Pending Order dapat dipasang pada setiap sesi.
2.	Pending Order secara otomatis akan berakhir pada akhir sesi 1 dan 2.
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '1.	Pending Order dapat dipasang pada setiap sesi.
2.	Pending Order secara otomatis akan berakhir pada akhir sesi I.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Expiration PendingOrder                                                          ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Harga yang tampil di luar jam transaksi tidak berlaku.
Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh Head closingment PT. Esandar Arthamas Berjangka.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Level/Spread Pending Order (Limit Order (LO) / Stop Order (SO) / Stop Loss (SL) / Take Profit (TP))                                                          ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Level / Spread antara harga yang diminta dan harga running adalah minimum 30 poin dari harga Running.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);


$pdf->AddPage();

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Apabila equity nasabah tidak mencukupi untuk margin overnight maka untuk margin tambahan (inject dana) harus dilakukan 2 jam setelah market close, dan apabila tidak dilakukan penambahan dana maka posisi nasabah akan dilikuidasi berdasarkan harga market close.                                                                                                                                                                                                                                                                                                                                                                      ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

->	Dana yang dapat ditarik tidak dapat melebihi dari Free Margin yang ada di platform Esandar Trader.

->	Penarikan dana yang diterima sebelum jam 12:00 wib akan dibayar pada hari yang sama (T+0).

->	Penarikan dana yang diterima setelah jam 12:00 wib akan dibayar pada hari berikutnya (T+1).                                      ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Margin Call & Force Liquidation                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Call Equity level : (10%< Margin Level <100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah  mencapai level antara (10%<Margin Level<100%) dari Margin Requirement.                                                                                                                                                       ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(90, 0, 'Force Liquidation : 

A. Margin Level mencapai 10% atau dibawahnya.
Apabila Equity account Nasabah mencapai level 10% atau dibawahnya dari Margin Requirement, maka Force Liquidation akan dilakukan.

B. Short Margin untuk posisi Overnight
Semua posisi yang masih terbuka pada saat market close setiap harinya dengan jumlah margin yang tidak cukup (short margin) akan dilikuidasi dengan harga closing yang mengacu pada harga closing Esandar Trader.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'KERAHASIAAN                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);


$pdf->AddPage();

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Lain-Lain (Miscellaneous)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '1.	Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market 
2.	Harga yang tampil di luar jam transaksi tidak berlaku.
3.	Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang terjadi pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan secara otomatis, tanpa adanya pemberitahuan terlebih dahulu.
4.	Open Gap berlaku untuk semua produk futures maupun rollover. Apabila selisih harga closing market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap kontraknya, maka semua posisi open pada overnight akan dihedge secara otomatis oleh Sistem. 
Atas keuntungan maupun kerugian yang timbul karena Open Gap tersebut menjadi hak atau tanggungjawab nasabah sepenuhnya.
5.	Waktu yang digunakan pada sistem adalah GMT + 2.
6.	Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan
7.	Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan sesuai dengan perintah nasabah.
Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka (021-29339318) disertai Phone Password.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Keadaan Hectic Market                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara. 

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

->	Bid atau offer hanya ada satu sisi;
->	Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang Penyelenggara;
->	Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang mempengaruhi kondisi pasar financial.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'REPORTING                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '1.	Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar Trader secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang dikirimkan secara otomatis ke email nasabah.
2.	Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada laporan yang tersedia didalam Sistem Esandar Trader.
3.	Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan nasabah tersebut.
4.	Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut dianggap benar dan sah.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'PENYELESAIAN PERSELISIHAN                                                                                                                                                                                                   ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '1.	Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis transaksi, report, dan data-data pendukung lainnya.
2.	Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->Ln(5);
$pdf->Write(0, 'Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', '', 0, 'C', true, 0, false, false, 0);

$pdf->Ln(10);
$pdf->MultiCell(70, 0, 'Pernyataan menerima / tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(10, 0, 'Ya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(2);
$pdf->MultiCell(70, 0, 'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0, $tanggal, 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->lastPage();
}

//page8_8

else if($sql['Jenis_Transaksi']  = "INDEX_IDR_REGULAR")
{
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas 
Perdagangan Berjangka Komoditi 
Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Write(0, 'Formulir: 107.PBK.06', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'Trading Rules Kontrak Derivatif Stock Index IDR Regular', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$no13 = 'Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure) ini dibuat dalam Bahasa Indonesia.'."\n";
$memahami13 = 'saya sudah membaca dan memahami                                          '."\n";

$pernyataan = 'PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO'."\n";
$dengan='Dengan mengisi kolom ԙAԠdi bawah, saya menyatakan bahwa saya telah menerima ԄOKUMEN PEMBERITAHUAN ADANYA RISIKOԠmengerti dan menyetujui isinya.'."\n";

$tgl = new datetime('Asia/Jakarta');
$tanggal = $tgl->format('d-m-Y');




// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set color for background
//$pdf->SetFillColor(255, 255, 200);

// set color for text
//$pdf->SetTextColor(0, 63, 127);

// write the first column
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'PEMBUKAAN ACCOUNT (REKENING)', 1, 1, 'L', 0, '', 0);

// set color for background
//$pdf->SetFillColor(215, 235, 255);

// set color for text
//$pdf->SetTextColor(127, 31, 0);

// write the second column

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0,'Aplikasi Penerimaan Nasabah Secara Elektronik dan Online                                        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0,'Untuk keperluan pembukaan rekening, maka nasabah wajib registrasi melalui Sistem Agreement dan Registrasi Online yang ada di website esandar.co.id guna pengisian aplikasi pembukaan rekening transaksi dan dokumen-dokumen yang wajib dibaca, dipahami dan dimengerti.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Dokumen Pemberitahuan Adanya Resiko (Risk Disclosure) & Perjanjian Pemberian Amanat (Client Agreement)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(67.5, 0, 'Dokumen Pemberitahuan Adanya Risiko:
Nasabah harus memahami benar risiko perdagangan ini, oleh karena itu nasabah wajib membaca, menerima dan mengerti Ԑernyataan Menerima Pemberitahuan Adanya RisikoԠyang ada pada Ԅokumen Pemberitahuan Adanya RisikoԮ 

Maksud dari dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan kontrak berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu nasabah harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan nasabah mencukupi.
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Perjanjian Pemberian Amanat:
Perjanjian yang disepakati oleh PT. Esandar Arthamas Berjangka dengan nasabah untuk melakukan transaksi penjualan maupun pembelian kontrak berjangka dengan ketentuan-ketentuan yang ada pada Dokumen Perjanjian Pemberian Amanat.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Rekening Terpisah / Segregated Account                                                                                                                                                                                                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Nasabah dapat melakukan setoran dana dalam mata uang Rupiah sebagai Margin Deposit untuk jaminan Pembukaan Account, dan Additional Margin (Inject Dana) ke Rekening Segregated PT. Esandar Arthamas Berjangka:

->	Bank Central Asia (BCA) Sudirman - Jakarta
     No. Account: 035.313.6019 (IDR)
     Atas Nama: PT. Esandar Arthamas Berjangka
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Rekening Nasabah Berlaku Efektif                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Nasabah dapat melakukan transaksi, apabila setoran dana telah efektif (Good Fund) dan telah membaca, memahami dan menyetujui Dokumen Pemberitahuan Adanya Risiko dan Perjanjian Nasabah serta dokumen-dokumen pendukung lainnya.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'KETENTUAN TRADING', 1, 1, 'L', 0, '', 0);
$pdf->Ln(0);

$pdf->MultiCell(45, 0, 'Margin Deposit                                                                                                                                                                                                              ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Margin adalah sejumlah dana nasabah yang harus ditempatkan pada Rekening Segregated PT. Esandar Arthamas Berjangka untuk menjamin pelaksanaan transaksi Kontrak Berjangka Nasabah. PT. Esandar Arthamas Berjangka akan melakukan penambahan atau pengurangan dana di Rekening Nasabah, berdasarkan setoran dari bank (injection) dan penarikan dana (withdrawal) dari nasabah.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Margin Deposit Awal                                              ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Minimum setoran awal untuk new account yang disetor oleh nasabah untuk dapat melakukan transaksi sebesar : Rp. 50.000.000.- (New Account).', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Rate               ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Rate dalam Rupiah', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Harga Penutupan Pasar (Closing Market)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Harga Penutupan Pasar berdasarkan Harga Setlement Price                                                 ', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Commission Charge', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Commission Charge: IDR. 500.000,- / 1 lot closingd                                                 ', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'Jam Perdagangan (GMT+7)', 1, 1, 'C', 0, '', 0);
$pdf->MultiCell(45, 0, '      ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Sesi 1', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Sesi 2', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Sesi 3', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Stock Index Hongkong', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '08:15 - 11:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '12:00 - 15:15', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '16:00 - 22:00', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(45, 0, 'Stock Index Jepang', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '06:45 - 13:25', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '14:15 - 01:00', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->MultiCell(45, 0, 'Stock Index Korea', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '07:00 - 13:05', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->MultiCell(180, 0, '->	Untuk melakukan transaksi melalui sistem dapat dilakukan 5 menit setelah market open.
->	Nasabah dapat melakukan transaksi dengan cara DQ (Dealing Quote) melalui telepon pada saat market open.
->	DQ menggunakan telepon akan dikenakan spread 10. Ketentuan ini tidak berlaku untuk 5 menit pertama dan pada saat kondisi server sedang mengalami gangguan teknis. (Down)
', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'Trading Facilities', 1, 1, 'L', 0, '', 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(180, 0, '
->	Kontrak Berjangka (Stock Index Futures)
Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang mengenal akhir bulan perdagangan.
Pada akhir bulan perdagangan tersebut posisi nasabah harus terlikuidasi (Clear Posisi).

->	Kontrak Berkala (Stock Index Rollover)
Merupakan Kontrak Index yang diperdagangkan di Jakarta Futures Exchange (JFX) yang tidak mengenal akhir bulan perdagangan tetapi terdapat Bulan Referensi. Pada bulan referensi tersebut akan diadakan penyesuaian untuk open posisi yang masih ada dan open posisi (Original Price) tetap ada selama belum dilikuidasi nasabah.

', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, '                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(81, 0, 'Stock Index Futures', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(54, 0, 'Stock Index Rollover', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, '                                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'JEPANG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'KOREA', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'HONGKONG', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'JEPANG', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Code Contract', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'HKJ50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'JPJ30', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'KRJ35', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'HKK50', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'JPK50', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Contract Size', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 50.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 30.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 3.500.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 50.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 50.000,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Normal Spread', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '0.05 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Minimum Tick', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '0.05 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '1 pip', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5 pip', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Maximal Volume (Day Trade)                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Maximal Volume Hongkong (sesi 3)', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5 lot                           ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                           ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                           ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '5 lot                           ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                               ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Requirement per 1 lot DayTrade:', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 5.000.000,-                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 6.000.000,-                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 3.500.000,-                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 5.000.000,-                ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 5.000.000,-                ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Requirement per 1 lot Overnight: ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 16.000.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 15.000.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 18.200.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 16.000.000,-', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 16.000.000,-', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Maximal Volume (Day Trade)                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '20 lot                                          ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);


$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Hedged Day Trade per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.000.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.200.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 700.000,-                    ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.000.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 1.000.000,-                  ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Hedged Overnight per 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 3.200.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 3.000.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 3.640.000,-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 3.200.000,-                  ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp. 3.200.000,-                  ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Swap Buy /1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 20.000,-      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 20.000,-      ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Swap Sell / 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 10.000,-      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 10.000,-      ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Swap Sell / 1 lot', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                   ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 10.000,-      ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Rp 10.000,-      ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Open Gap', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '500 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '300 poin', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '300 poin', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Bulan Kontrak                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'F = Januari
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
Z = Desember
', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'H = Maret
M = Juni
U = September
Z = Desember
                                                                                                                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'H = Maret
M = Juni
U = September
Z = Desember
                                                                                                                                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                                                                                                                                                                                                                                                                                                       ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                                                                                                                                                                                                                                                                                                       ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Transaksi Bulan Berikutnya                                                                                                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Dua hari sebelum hari Perdagangan Terakhir', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Dua hari sebelum hari Perdagangan Terakhir', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Dua hari sebelum hari Perdagangan Terakhir', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                                                                                 ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, '-                                                                                 ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Hari Perdagangan Terakhir
(Hanya untuk melikuidasi posisi)
                                                                                                                                                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Satu hari sebelum hari Perdagangan Terakhir Bulan Kontrak dan hanya untuk melikuidasi posisi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.                                                           ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Minggu Kedua Bulan Kontrak,  dan hanya untuk melikuidasi posisi.                                                           ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Tidak ada hari perdagangan Terakhir                                                                                                                      ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(27, 0, 'Tidak ada hari perdagangan Terakhir                                                                                                                      ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Roll Over                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(67.5, 0, 'Nasabah harus menutup semua posisinya yang terbuka pada saat waktu kontrak berakhir (expired).
Tidak ada Roll Over secara otomatis. Apabila Nasabah belum melikuidasi posisinya yang terbuka pada saat waktu kontrak berakhir, maka Sistem Esandar Trader akan melikuidasi posisi yang terbuka secara otomatis (dengan harga closing market pada Platform Esandar Trader untuk kontrak tersebut).
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Automatic Rollover (Lihat Ketentuan Tambahan untuk Konrak Berkala (Rollover Contract))                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'KALKULASI: Profit/Loss             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(67.5, 0, '->	HKJ50; JPJ30; KRJ35: 
  (SELL֠BUY) x lot x contract size   ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, '->	HKK50 ; JPK50 :
  (SELL֠BUY) x lot x contract size   ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'Ketentuan Tambahan untuk Kontrak Berkala (Rollover Contract)', 1, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Angka Penyelesaian                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(135, 0, 'Mengacu pada closingment Price Kontrak Berjangka untuk Bulan Referensi terdekat sampai hari ganti Bulan Referensi. ', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Hari Ganti Bulan Referensi                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(135, 0, 'Satu hari kerja sebelum hari kerja terakhir Bulan Referensi yang sedang berjalan, Angka Penyelesaian akan mengacu pada closingment Price Bulan Referensi Berikutnya.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Penyesuaian Akibat Ganti Bulan Referensi                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(135, 0, 'Beda antara Angka Penyelesaian kedua bulan kontrak itu pada akhir hari sebelumnya Hari Ganti Bulan
Referensi tidak diperhitungkan sebagai laba atau rugi tetapi dilakukan penyesuaian.

Besarnya penyesuaian yang terjadi sebagai berikut :
Open posisi Buy: 
Penyesuaian = (Harga Closing Kontrak Lama ֠Harga Closing Kontrak Baru) x                                    Contract Size x Lot
Open posisi Sell: 
Penyesuaian = (Harga Closing Kontrak Baru ֠Harga Closing Kontrak Lama) x                                    Contract Size x Lot

Open posisi (original price) tetap ada selama belum dilikuidasi oleh nasabah.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Contoh:

Nasabah A Buy HKK50 1 Lot;

Closing kontrak lama 22600
Closing kontrak baru 22625

Penyesuaian 
= (22600-22625) x Rp 50.000 x 1
= - Rp 1.250.000
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Contoh:

Nasabah B Sell HKK50 1 Lot;

Closing kontrak lama 22600
Closing kontrak baru 22625

Penyesuaian 
= (22625-22600) x Rp 50.000 x 1
= Rp 1.250.000
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Contoh:
Nasabah C Buy HKK50 1 Lot;

Closing kontrak lama 23600
Closing kontrak baru 23500

Penyesuaian 
= (23600-23500) x Rp 50.000 x 1
= Rp 5.000.000
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(67.5, 0, 'Contoh:
Nasabah D Sell HKK50 1 Lot;

Closing kontrak lama 23600
Closing kontrak baru 23500

Penyesuaian
= (23500-23600) x Rp 50.000 x 1
= - Rp 5.000.000
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, '', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Stock Index Hongkong', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Stock Index Jepang', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Stock Index Korea', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);

$pdf->MultiCell(45, 0, 'Ketentuan Pending Order (Limit Order (LO) / Stop Order (SO) / (Stop Loss (SL) /Take Profit (TP))                             ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, '1.	Pending Order dapat dipasang pada setiap sesi
2.	Pending Order secara otomatis akan berakhir pada akhir sesi 1,2, dan 
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '1.	Pending Order dapat dipasang pada setiap sesi.
2.	Pending Order secara otomatis akan berakhir pada akhir sesi 1 dan 2.
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, '1.	Pending Order dapat dipasang pada setiap sesi.
2.	Pending Order secara otomatis akan berakhir pada akhir sesi I.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Expiration PendingOrder                                                          ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Harga yang tampil di luar jam transaksi tidak berlaku.
Apabila terjadi error pada Sistem, Konfirmasi Pending Order akan diputuskan oleh Head closingment PT. Esandar Arthamas Berjangka.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Level/Spread Pending Order (Limit Order (LO) / Stop Order (SO) / Stop Loss (SL) / Take Profit (TP))                                                          ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Level / Spread antara harga yang diminta dan harga running adalah minimum 30 poin dari harga Running.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);


$pdf->AddPage();

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Margin Tambahan & Penarikan Dana (Margin Inject & Withdrawal)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Dalam melakukan transaksi, nasabah membutuhkan margin tambahan dalam hal kondisi pasar bergerak berlawanan dengan posisi yang ada, dimana menyebabkan uang jaminan menjadi berkurang.

Apabila nasabah ingin tetap mempertahankan posisinya, maka nasabah dapat melakukan margin tambahan (inject dana). Inject dana akan ditambahkan dalam account nasabah apabila dana telah good fund.
', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Apabila equity nasabah tidak mencukupi untuk margin overnight maka untuk margin tambahan (inject dana) harus dilakukan 2 jam setelah market close, dan apabila tidak dilakukan penambahan dana maka posisi nasabah akan dilikuidasi berdasarkan harga market close.                                                                                                                                                                                                                                                                                                                                                                      ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(45, 0, 'Penarikan dana dapat diterima setiap hari kerja dengan ketentuan sbb :

->	Dana yang dapat ditarik tidak dapat melebihi dari Free Margin yang ada di platform Esandar Trader.

->	Penarikan dana yang diterima sebelum jam 12:00 wib akan dibayar pada hari yang sama (T+0).

->	Penarikan dana yang diterima setelah jam 12:00 wib akan dibayar pada hari berikutnya (T+1).                                      ', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Margin Call & Force Liquidation                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(45, 0, 'Margin Call Equity level : (10%< Margin Level <100%)
Nasabah harus menambah equity (margin call) apabila equity nasabah sudah  mencapai level antara (10%<Margin Level<100%) dari Margin Requirement.                                                                                                                                                       ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(90, 0, 'Force Liquidation : 

A. Margin Level mencapai 10% atau dibawahnya.
Apabila Equity account Nasabah mencapai level 10% atau dibawahnya dari Margin Requirement, maka Force Liquidation akan dilakukan.

B. Short Margin untuk posisi Overnight
Semua posisi yang masih terbuka pada saat market close setiap harinya dengan jumlah margin yang tidak cukup (short margin) akan dilikuidasi dengan harga closing yang mengacu pada harga closing Esandar Trader.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'KERAHASIAAN                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Setiap nasabah akan mendapatkan Login, Master Password, Investor Password (View Only Password), dan Phone Password (password untuk melakukan DQ) yang dikirimkan melalui e-mail nasabah. Fungsinya adalah sebagai hak akses ke Platform Esandar Trader, dan untuk melakukan DQ apabila terjadi gangguan pada platform Esandar Trader.

Setelah menerima password standar dari perusahaan, Nasabah pada kesempatan pertama WAJIB untuk segera mengganti password tersebut minimal 5 (lima) digit dan menggunakan kombinasi antara huruf besar, huruf kecil dan angka sebelum memulai transaksi. Password bersifat rahasia dan hanya diketahui oleh nasabah, dimana pejabat atau karyawan PT. Esandar Arthamas Berjangka pun dilarang untuk mengetahuinya.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);


$pdf->AddPage();

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Lain-Lain (Miscellaneous)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '1.	Pada saat Market Hectic, harga Bid / Ask yang ada di Platform tergantung pada Market 
2.	Harga yang tampil di luar jam transaksi tidak berlaku.
3.	Apabila terjadi wrong quote (wrong price) pada Platform Esandar Trader, maka order yang terjadi pada harga wrong quote dinyatakan tidak berlaku (batal), dan akan dibatalkan secara otomatis, tanpa adanya pemberitahuan terlebih dahulu.
4.	Open Gap berlaku untuk semua produk futures maupun rollover. Apabila selisih harga closing market hari sebelumnya ke harga open market sesi I hari berikutnya melebihi open gap kontraknya, maka semua posisi open pada overnight akan dihedge secara otomatis oleh Sistem. 
Atas keuntungan maupun kerugian yang timbul karena Open Gap tersebut menjadi hak atau tanggungjawab nasabah sepenuhnya.
5.	Waktu yang digunakan pada sistem adalah GMT + 2.
6.	Trading Rules ini dapat diubah dan akan diberitahukan kepada nasabah melalui Surat Pemberitahuan
7.	Platform Esandar Trader dilaksanakan melalui Sistem Elektronik, karena itu nasabah dapat menghadapi risiko yang berkaitan dengan Sistem tersebut. Kegagalan dengan perangkat keras atau perangkat lunak atau terganggunya koneksi internet berakibat tidak dapat dilaksanakan sesuai dengan perintah nasabah.
Apabila terjadi kondisi sebagaimana yang disebutkan diatas, maka order / perintah nasabah dilaksanakan dengan menggunakan telepon ke kantor pusat PT. Esandar Arthamas Berjangka (021-29339318) disertai Phone Password.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'Keadaan Hectic Market                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, 'Adalah keadaan ketika pasar dalam komdisi yang tidak normal atau tidak menentu. Pada situasi ini spread akan didasarkan pada kondisi pergerakan harga sebagaimana quotasi yang disampaikan oleh provider yang digunakan oleh Pedagang Penyelenggara. 

Yang dimaksud dengan kondisi hectic apabila dipenuhi minimal salah satu dari situasi sebagai berikut:

->	Bid atau offer hanya ada satu sisi;
->	Spread antara bid dan offer lebih dari spread normal yang ditetapkan oleh Pedagang Penyelenggara;
->	Adanya berita politik, ekonomi, terorisme, bencana alam dan hal-hal-hal lain yang mempengaruhi kondisi pasar financial.', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'REPORTING                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '1.	Nasabah dapat mengakses Laporan Keuangannya (Daily Statement) secara langsung, baik itu Laporan Keuangan hasil transaksi nasabah secara otomatis akan terekam di sistem Esandar Trader secara online atau dapat mengakses Laporan Transaksi yang dilakukan di hari sebelumnya yang dikirimkan secara otomatis ke email nasabah.
2.	Nasabah harus mereview dan melaporkan dengan segera kesalahan-kesalahan yang terdapat pada laporan yang tersedia didalam Sistem Esandar Trader.
3.	Segala pelaporan dalam Sistem tersebut akan dianggap telah disetujui apabila PT. Esandar Arthamas Berjangka tidak menerima pemberitahuan melalui telepon dan disusul pada pemberitahuan tertulis selambat-lambatnya 2 (dua) hari kerja dari tanggal Laporan Keuangan nasabah tersebut.
4.	Bilamana dalam waktu 2 (dua) hari kerja sejak tanggal Laporan Keuangan nasabah tersebut dikeluarkan tidak ada sanggahan dari nasabah atau pemberitahuan kepada PT. Esandar Arthamas Berjangka atas setiap kesalahan akan mengakibatkan nasabah menerima Laporan Keuangan tersebut seperti yang tertulis didalamnya maka Laporan Keuangan nasabah tersebut dianggap benar dan sah.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->AddPage();

$pdf->Ln(0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(45, 0, 'PENYELESAIAN PERSELISIHAN                                                                                                                                                                                                   ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(135, 0, '1.	Pembuktian atas fakta-fakta, di mana fakta-fakta tersebut dapat dilihat antara lain di dalam historis transaksi, report, dan data-data pendukung lainnya.
2.	Mengacu pada data-data terakhir yang tercatat di PT. Esandar Arthamas Berjangka dan sesuai dengan ketentuan - ketentuan yang ada di dalam Trading Rules.

Jika ada pengaduan atau keluhan, nasabah dapat mengisi Formulir Pengaduan Nasabah dan mengajukan kepada PT. Esandar Arthamas Berjangka.
', 1, 'J', 0, 1, '', '', true, 0, false, true, 0);

$pdf->SetFont('helvetica', '', 10);
$pdf->Ln(5);
$pdf->Write(0, 'Dengan mengisi kolom "Ya" di bawah ini, saya menyatakan bahwa saya telah membaca tentang PERATURAN PERDAGANGAN (TRADING RULES), mengerti dan menerima ketentuan dalam bertransaksi.', '', 0, 'C', true, 0, false, false, 0);

$pdf->Ln(10);
$pdf->MultiCell(70, 0, 'Pernyataan menerima / tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(10, 0, 'Ya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(2);
$pdf->MultiCell(70, 0, 'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(40, 0, $tanggal, 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->lastPage();
}

//page9
 


$nama9 = $_SESSION['nama'];
$tempat9 = $_SESSION['tempat'];
$tanggal9 = $_SESSION['tgl1'];
$bulan9 = $_SESSION['bln1'];
$tahun9 = $_SESSION['thn1'];
$tanggallahir9 = "$tanggal9 - $bulan9 - $tahun9";
$alamat9 = $_SESSION['alamat'];
$kodepos9 = $_SESSION['pos'];
$noid9 = $_SESSION['id'];
$tgl = new datetime('Asia/Jakarta');
$tanggalm9 = $tgl->format('d-m-Y');

$pdf->Open();
$pdf->Addpage();

$pdf->SetFont('Helvetica','','8');
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas 
Perdagangan Berjangka Komoditi
Nomor: 107/BAPPEBTI/PER/11/2013','',0,'R',true,0, false, false, 0);
$pdf->Ln(2);

$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0,'Formulir: 107.PBK.07
Pernyataan Bertanggung Jawab Atas
Kode Akses Transaksi Nasabah (Personal Access Password)','',0,'C',true,0,false,false,0);
$pdf->Ln(3);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Yang mengisi formulir di bawah ini','',0,'C',true,0,false,false,0);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);

$pdf->Write(0,"Nama Lengkap                                   :   $nama9",'',0,'L',true,0,false,false,0);
$pdf->Ln(1);

$pdf->Write(0,"Tempat / Tanggal Lahir                      :   $tempat9  /  $tanggal9 - $bulan9 - $tahun9",'',0,'L',true,0,false,false,0);
$pdf->Ln(1);

$pdf->Write(0,"Alamat Rumah                                   :   $alamat9",'',0,'L',true,0,false,false,0);
$pdf->Ln(1);

$pdf->Write(0,"Kode Pos                                           :   $kodepos9",'',0,'L',true,0,false,false,0);
$pdf->Ln(1);

$pdf->Write(0,"No. Identitas KTP / SIM / Passpor*    :   $noid9",'',0,'L',true,0,false,false,0);
$pdf->Ln(1);

$pdf->Write(0,"No. Acc                                               :   -",'',0,'L',true,0,false,false,0);
$pdf->Ln(3);
$pdf->Ln(3);
$pdf->Ln(3);

$pdf->SetFont('Helvetica','','8');
$pdf->Write(0,'Dengan mengisi kolom YA di bawah ini, saya menyatakan bahwa saya bertanggungjawab sepenuhnya terhadap kode akses transaksi Nasabah (Personal Access Password) dan tidak menyerahkan kode akses transaksi Nasabah (Personal Access Password) ke pihak lain, terutama kepada pegawai pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.','',0,'C',true,0,false,false,0);
$pdf->Ln(1);

$pdf->SetFont('Helvetica','B','13');
$pdf->Write(10,'PERINGATAN !!!','',0,'C',true,0,false,false,0);
$pdf->Ln(4);

$pdf->SetFont('Helvetica','B','10');
$pdf->Write(0,'Pialang Berjangka, Wakil Pialang Berjangka, Pegawai Pialang Berjangka, atau pihak yang
memiliki kepentingan dengan Pialang Berjangka dilarang menerima kode akses transaksi Nasabah (Personal Access password).','',0,'C',true,0,false,false,0);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani seta tanpa paksaan apapun dari pihak manapun.','',0,'L',true,0,false,false,0);
$pdf->Ln(2);
$pdf->Ln(3);

$pdf->Write(0,'Pernyataan Menerima                                :   YA','',0,'L',true,0,false,false,0);
$pdf->Ln(2);

$pdf->Write(0,"Menyatakan pada Tanggal                          :   $tanggalm9",'',0,'L',true,0,false,false,0);


$unix=$_SESSION['newid'];
$Output = "".$unix."-".$nama."";
$pdf->Output("pdfnasabah/$Output.pdf",'F');

?>