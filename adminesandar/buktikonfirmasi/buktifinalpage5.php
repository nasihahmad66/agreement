<?php
$pdf->AddPage();
$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
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

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(70, 0,'Kode Nasabah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,':'.$namaid['no_acc'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(70, 0,'Data Pribadi', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(70, 0,'Nama Lengkap', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['Nama_Lengkap'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tempat Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['Tempat_lahir'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$tanggalform5="".$form5['Tanggal_Lahir']."-".$form5['Bulan_lahir']."-".$form5['Tahun_lahir']."";
$pdf->MultiCell(70, 0,'Tanggal Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tanggalform5 , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No.Identitas KTP / SIM / PASPOR', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['No_Identitas'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. NPWP', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['No_NPWP'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jenis Kelamin', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Jenis_Kelamin']=='Laki-Laki'){
$pdf->Image('rb.png', 88, 101.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 113.5, 101.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(30, 0,':    Laki-Laki', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,' Perempuan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}else if($form5['Jenis_Kelamin']=='Perempuan'){
$pdf->Image('rb.png', 113.5, 101.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 101.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(30, 0,':    Laki-Laki', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,' Perempuan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);
$pdf->MultiCell(70, 0,'Status Perkawinan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['Status_Perkawinan'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);


if($form5['Namaistrisuami']!=null)
{
	$namaistrisuami=$form5['Namaistrisuami'];
}
else if($form5['Namaistrisuami']==null)
{
	$namaistrisuami='-';
}
$pdf->MultiCell(70, 0,'Nama Istri/Suami', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$namaistrisuami , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nama Ibu Kandung', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['Nama_Ibu_Kandung'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Alamat_Rumah'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(9);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['kde_Pos'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['No_telp'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Faksimili Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['No_fax'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp Handphone', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['Notelphp'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Status Kepemilikan Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Status_Rumah']=='Pribadi'){
$pdf->Image('rb.png', 88, 150.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 155, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 159.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 163.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Pribadi', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Keluarga', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Sewa/Kontrak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Status_Rumah']=='Keluarga'){
$pdf->Image('rb.png', 88, 155, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 150.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 159.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 163.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Pribadi', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Keluarga', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Sewa/Kontrak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Status_Rumah']=='Sewa/Kontrak'){
$pdf->Image('rb.png', 88, 159.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 150.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 155, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 163.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Pribadi', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Keluarga', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Sewa/Kontrak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Status_Rumah']=='Lainnya'){
$pdf->Image('rb.png', 88, 163.8, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 150.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 155, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 159.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Pribadi', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Keluarga', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Sewa/Kontrak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya, '.$form5['lainnyaSR'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}


$pdf->MultiCell(70, 0,'Tujuan Pembukaan Rekening', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Tujuan_Rekening']=='Lindung Nilai')
{
$pdf->Image('rb.png', 88, 168, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 172.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 177, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 181.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Lindung Nilai', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Gain', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Spekulasi', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Tujuan_Rekening']=='Gain')
{
$pdf->Image('rb.png', 88, 172.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 168, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 177, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 181.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Lindung Nilai', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Gain', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Spekulasi', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Tujuan_Rekening']=='Spekulasi')
{
$pdf->Image('rb.png', 88, 177, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 172.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 168, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 181.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Lindung Nilai', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Gain', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Spekulasi', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Tujuan_Rekening']=='Lainnya')
{
$pdf->Image('rb.png', 88, 181.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 172.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 177, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 168, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Lindung Nilai', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Gain', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Spekulasi', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya'.$form5['lainnyaTR'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}

$pdf->MultiCell(70, 0,'Pengalaman Investasi', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Pengalaman_Investasi']=='Ya, Bidang')
{
$pdf->Image('rb.png', 88, 186, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 190, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(0, 0,':     Ya, Bidang '.$form5['bidanginv'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Tidak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Pengalaman_Investasi']=='Tidak')
{
$pdf->Image('rb.png', 88, 190, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 186, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(0, 0,':     Ya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Tidak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}

if($form5['Anggota_Keluarga']=='Ya')
{
	$angkel="".$form5['Anggota_Keluarga'].", ".$form5['namaAK']."";
}
else if($form5['Anggota_Keluarga']=='Tidak')
{
	$angkel=$form5['Anggota_Keluarga'];
}
$pdf->MultiCell(70, 0,'Apakah Anda memiliki anggota keluarga yang bekerja di BAPPEBTI/Bursa Berjangka/ Kliring Berjangka?', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Anggota_Keluarga']=='Ya')
{
$pdf->Image('rb.png', 88, 194.8, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 199, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Ya, '.$form5['namaAK'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tidak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Anggota_Keluarga']=='Tidak')
{
$pdf->Image('rb.png', 88, 199, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 194.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Ya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tidak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);
$pdf->MultiCell(70, 0,'Apakah Anda telah dinyatakan pailit oleh Pengadilan ?', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Pailit_Pengadilan']=='Ya'){
$pdf->Image('rb.png', 88, 208.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 212.9, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Ya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tidak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Pailit_Pengadilan']=='Tidak'){
$pdf->Image('rb.png', 88, 212.9, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,208.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Ya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tidak', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);
$pdf->Ln(2);

$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'PIHAK YANG DIHUBUNGI DALAM KEADAAN DARURAT', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(2);

$pdf->SetFont('helvetica','', 10);
$pdf->Write(0, 'Dalam keadaan darurat, pihak yang dapat dihubungi:', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(2);

$pdf->MultiCell(70, 0,'Nama', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Nama'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Alamat'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(10);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['Kod_pos'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['no_tl'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Hubungan dengan anda', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Hubungan'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

$pdf->AddPage();
$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'PEKERJAAN', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(3);

$pdf->SetFont('helvetica','', 10);
$pdf->MultiCell(70, 0,'Pekerjaan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Pekerjaan']=='Swasta')
{
$pdf->Image('rb.png', 88, 36, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,40.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,45, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,49, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,53.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,58, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,62.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Swasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Wiraswasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Ibu RT', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Profesional', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Pegawai Negeri', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Mahasiswa', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Pekerjaan']=='Wiraswasta')
{
$pdf->Image('rb.png', 88, 40.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,36, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,45, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,49, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,53.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,58, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,62.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Swasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Wiraswasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Ibu RT', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Profesional', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Pegawai Negeri', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Mahasiswa', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Pekerjaan']=='Ibu RT')
{
$pdf->Image('rb.png', 88, 45, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,36, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,40.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,49, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,53.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,58, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,62.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Swasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Wiraswasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Ibu RT', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Profesional', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Pegawai Negeri', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Mahasiswa', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Pekerjaan']=='Profesional')
{
$pdf->Image('rb.png', 88, 49, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,36, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,40.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,45, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,53.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,58, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,62.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Swasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Wiraswasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Ibu RT', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Profesional', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Pegawai Negeri', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Mahasiswa', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Pekerjaan']=='Pegawai Negeri')
{
$pdf->Image('rb.png', 88, 53.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,36, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,40.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,45, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,49, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,58, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,62.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Swasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Wiraswasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Ibu RT', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Profesional', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Pegawai Negeri', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Mahasiswa', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Pekerjaan']=='Mahasiswa')
{
$pdf->Image('rb.png', 88, 58, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,36, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,40.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,45, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,49, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,53.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,62.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Swasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Wiraswasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Ibu RT', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Profesional', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Pegawai Negeri', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Mahasiswa', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Pekerjaan']=='Lainnya')
{
$pdf->Image('rb.png', 88, 62.3, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,36, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,40.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,45, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,49, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,53.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,58, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Swasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Wiraswasta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Ibu RT', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Profesional', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Pegawai Negeri', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Mahasiswa', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Lainnya, '.$form5['lainnyaPKJ'] , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}

$pdf->MultiCell(70, 0,'Nama Perusahaan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Nama_Perusahaan'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Bidang Usaha', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Bidang_Usaha'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jabatan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Jabatan'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Lama Bekerja', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Lama_Bekerja'].' tahun' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Kantor Sebelumnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Kantor_Sebelum'].' tahun' , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Kantor', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Alamat_Kantor'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(10);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Kd_Pos'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp Kantor', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['No_Tlp'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Faksimili', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['no_fx'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'DAFTAR KEKAYAAN', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(3);

$pdf->SetFont('helvetica','', 10);
$pdf->MultiCell(70, 0,'Penghasilan Per Tahun', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Penghasilan_Tahun']=='Antara 100-250 juta'){
$pdf->Image('rb.png', 88, 130, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,134.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,138.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Antara 100-250 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Antara 250-500 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Di atas 500 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Penghasilan_Tahun']=='Antara 250-500 juta'){
$pdf->Image('rb.png', 88, 134.3, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,130, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,138.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Antara 100-250 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Antara 250-500 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Di atas 500 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Penghasilan_Tahun']=='Di atas 500 juta'){
$pdf->Image('rb.png', 88, 138.8, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,134.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,130, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Antara 100-250 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Antara 250-500 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Di atas 500 juta', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}
$pdf->SetFont('helvetica','B', 10);
$pdf->MultiCell(70, 0,'Daftar Kekayaan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica','', 10);
$pdf->MultiCell(70, 0,'Rumah Lokasi', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Rumah_Lokasi'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(9);

$pdf->MultiCell(70, 0,'Nilai NJOP', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Nilai_NJOP'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Deposit Bank', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Deposit_Bank'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jumlah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form5['Jumlah'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Lainnya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Lainnya']==''){
$pdf->MultiCell(70, 0,': -', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}else{
$pdf->MultiCell(70, 0,': '.$form5['Lainnya'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'REKENING BANK NASABAH UNTUK PENYETORAN DAN PENARIKAN MARGIN', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica','', 10);
$pdf->Write(0, 'Rekening Bank Nasabah Untuk Penyetoran dan Penarikan Margin (hanya rekening dibawah ini yang dapat Saudara pergunakan untuk lalulintas margin).', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln();

$pdf->MultiCell(70, 0,'Nama Bank', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['nam_Bank'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Cabang', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['Cabang'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nomor A/C', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form5['Noac'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['No_tel']=='')
{
$pdf->MultiCell(70, 0,': -', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}else{
$pdf->MultiCell(70, 0,': '.$form5['No_tel'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jenis Rekening', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Jenis_Rekening']=='Giro')
{
$pdf->Image('rb.png', 88, 226.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,230.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,235.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Giro', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tabungan', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Jenis_Rekening']=='Tabungan')
{
$pdf->Image('rb.png', 88, 230.8, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,226.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,235.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Giro', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tabungan', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Jenis_Rekening']=='Lainnya')
{
$pdf->Image('rb.png', 88, 235.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,231.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,226.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Giro', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tabungan', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya, '.$form5['lainnyaJR1'] , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}

$pdf->MultiCell(70, 0,'Nama Bank', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Nama_bank']==''){
$pdf->MultiCell(70, 0,': -', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}else{
$pdf->MultiCell(70, 0,': '.$form5['Nama_bank'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Cabang', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['caban']==''){
$pdf->MultiCell(70, 0,': -', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}else{
$pdf->MultiCell(70, 0,': '.$form5['caban'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nomor A/C', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['No_AC']==''){
$pdf->MultiCell(70, 0,': -', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}else{
$pdf->MultiCell(70, 0,': '.$form5['No_AC'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);
$pdf->MultiCell(70, 0,'No. Telp', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['NoTlp']==''){
$pdf->MultiCell(70, 0,': -', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}else{
$pdf->MultiCell(70, 0,': '.$form5['NoTlp'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
}
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Jenis Rekening', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form5['Jns_Rekening']=='Giro'){
$pdf->Image('rb.png', 88, 259, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,263.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,268, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Giro', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tabungan', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Jns_Rekening']=='Tabungan'){
$pdf->Image('rb.png', 88, 259, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,263.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,268, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Giro', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tabungan', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else if($form5['Jns_Rekening']=='Lainnya'){
$pdf->Image('rb.png', 88, 259, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,263.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88,268, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(70, 0,':     Giro', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Tabungan', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'      Lainnya, '.$form5['lainnyaJR2'] , 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}else{ $pdf->MultiCell(70, 0,': -', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);}
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

$sqlpage5=mysql_query("select * from formulir5 where id='$id'");
$lihatgambar=mysql_fetch_array($sqlpage5);

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
$pdf->Image($gabung1, 15, 45, 180, 220, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat1==".JPG"||$lihat1=="JPEG" || $lihat1==".jpg"){
$pdf->Image($gabung1, 15, 45, 180, 220, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}

$pdf->AddPage();

$pdf->MultiCell(180, 0,'Rekening Listrik / Telepon', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

if($lihat2==".png" || $lihat2==".PNG"){
$pdf->Image($gabung2, 15, 35, 180, 110, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat2=="JPEG" || $lihat2==".JPG" || $lihat2==".jpg"){
$pdf->Image($gabung2, 15, 35, 180, 110, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(88);

$pdf->MultiCell(180, 0,'Tambahan Dokumen lain 1', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($lihat3==".png" || $lihat3==".PNG"){
$pdf->Image($gabung3, 15, 155, 180, 110, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat3=="JPEG" || $lihat3==".JPG" || $lihat3==".jpg"){
$pdf->Image($gabung3, 15, 155, 180, 110, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
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
$pdf->Image($gabung4, 15, 35, 180, 220, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat4=="JPEG" || $lihat4==".JPG" || $lihat4==".jpg"){
$pdf->Image($gabung4, 15, 35, 180, 220, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
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
$pdf->Image($gabung5, 15, 35, 90, 110, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat5=="JPEG" || $lihat5==".JPG" || $lihat5==".jpg"){
$pdf->Image($gabung5, 15, 35, 90, 110, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
}
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(88);

$pdf->MultiCell(70, 0,'KTP / SIM / Paspor', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($lihat6==".png" || $lihat6==".PNG"){
$pdf->Image($gabung6, 15, 155, 180, 110, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
}
else if($lihat6=="JPEG" || $lihat6==".JPG" || $lihat6==".jpg"){
$pdf->Image($gabung6, 15, 155, 180, 110, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
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
$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0, 'PERNYATAAN KEBENARAN DAN TANGGUNG JAWAB', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Dengan mengisi kolom YA di bawah ini, saya menyatakan bahwa semua informasi dan semua dokumen yang saya lampirkan dalam APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE adalah benar dan tepat, Saya akan bertanggung jawab penuh apabila dikemudian hari terjadi sesuatu hal sehubungan dengan ketidakbenaran data yang saya berikan.', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->MultiCell(80,0,'Pernyataan Kebenaran dan Tanggung Jawab', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(80,0,': Ya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(80,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(80,0,': '.$form5['Tanggal'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
?>