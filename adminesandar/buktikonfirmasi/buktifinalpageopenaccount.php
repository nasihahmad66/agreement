<?php
$pdf->AddPage();
$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

$pdf->SetFont('Helvetica','B','10');
$pdf->Write(0, 'Open Real Account', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);
$pdf->SetFont('Helvetica','','10');
$html = '
<ul><li>Untuk Account Kontrak Berjangka dapat melakukan demo terlebih dahulu dengan menghubungi settlement PT. Esandar Arthamas Berjangka pada hari kerja di nomor telp: 021-29339318.
<br/>Harap mencatat Login yang disesuaikan dengan nama nasabah.
</li>
<li>Untuk Account Kontrak Derivatif Forex, Loco London, dan Stock Indeks, dapat mengunduh aplikasi Esandar Trader melalui PC / Android / Ipad / Iphone (Link ke Buka Account Demo) dan membuat account demo pada server Esandar-Demo, dan harap mencatat login yang disesuaikan dengan nama nasabah.
</li>
</ul>
<p style="text-align:center;"><strong>(Untuk Nomor Account Demo yang diisi salah dan tidak sesuai dengan nama nasabah, maka account real tidak akan diproses)</strong></p>
<br/>
<p style="text-align:center;">Nomor Account Demo : '.$form3['No_Demo'].'</p>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Ln(5);
$pdf->SetFont('Helvetica','B','10');
$pdf->Write(0, 'PERHATIAN !!!
HARAP DIBACA TERLEBIH DAHULU', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

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
$pdf->MultiCell(0, 0, '- Persiapkan nomor Rekening bank yang hendak dipakai untuk lalu lintas margin yang disesuaikan dengan 
  nama nasabah. (Penarikan dana menggunakan rekening bank BCA dapat dilakukan pada hari itu juga, 
  sedangkan penggunaan rekening bank lain dapat mengakibatkan dana sampai lebih dari T+0 ke rekening 
  Nasabah.)

- Scan 3 buah dokumen berikut ini dengan ukuran yang tidak lebih besar dari 1MB/dokumen:
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
?>