<?php

$pdf->AddPage();

$pdf->SetFont('helvetica','B', 10);
$pdf->MultiCell(0, 0,'Peraturan untuk mengisi Formulir Agreement', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->SetFont('Helvetica','','10');
$pdf->MultiCell(0, 0, '- Nasabah DIWAJIBKAN mengisi secara BENAR dan JELAS.
- Jika terdapat kesalahan pengisian di halaman sebelumnya, Nasabah DIHARUSKAN menekan tombol "Mulai 
  Dari Awal" yang terdapat di kiri atas setiap halaman.
- DILARANG kembali ke halaman sebelumnya dengan menekan tombol back pada browser.
- Pelanggaran yang disebabkan karena melalaikan peraturan ini menjadi tanggung jawab NASABAH.
', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica','B', 10);
$pdf->Write(0, 'DATA NASABAH', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(2);

$pdf->SetFont('helvetica','', 10);
$pdf->MultiCell(70, 0,'Kode AE (Optional)', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form1['Kode_AE'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Nama Lengkap', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form1['Nama_Lengkap'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tempat Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form1['Tempat_Lahir'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$tanggalform1="".$form1['Tanggal_Lahir']."-".$form1['Bulan_lahir']."-".$form1['Tahun_lahir']."";
$pdf->MultiCell(70, 0,'Tanggal Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$tanggalform1 , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form1['Alamat_Rumah'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(10);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form1['Kode_Pos'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Status Perkawinan', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

if($form1['status_perkawinan']=='Tidak Menikah'){
$pdf->Image('rb.png', 88, 101.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 105.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 110, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 114.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(0, 0,':     Tidak Menikah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Menikah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Janda', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Duda', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}
elseif($form1['status_perkawinan']=='Menikah'){
$pdf->Image('rbkosong.jpg', 88, 101.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rb.png', 88, 105.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 110, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 114.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(0, 0,':     Tidak Menikah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Menikah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Janda', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Duda', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}
elseif($form1['status_perkawinan']=='Janda'){
$pdf->Image('rbkosong.jpg', 88, 102.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 106.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rb.png', 88, 111, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 115.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(0, 0,':     Tidak Menikah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Menikah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Janda', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Duda', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}
elseif($form1['status_perkawinan']=='Duda'){
$pdf->Image('rbkosong.jpg', 88, 101.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 105.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 110, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rb.png', 88, 114.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(0, 0,':     Tidak Menikah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Menikah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Janda', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Duda', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
}

$pdf->MultiCell(70, 0,'E-Mail', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form1['email'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No.Identitas KTP / SIM / PASPOR', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form1['No_Identitas'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Telp Handphone', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form1['No_Telp'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$transaksi="".$form1['Transaksi'].", ".$form1['sebutkan']."";
$pdf->MultiCell(70, 0,'Apakah Nasabah pernah bertransaksi sebelumnya di bidang Perdagangan Berjangka Komoditi ?', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
if($form1['Transaksi']=='belum'){
$pdf->Image('rb.png', 88, 134, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 138.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(0, 0,':     Belum Pernah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Sudah Pernah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

	$pdf->MultiCell(70, 0,'Margin Awal dan Jenis Transaksi yang akan di pilih', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	if($form1['Jenis_Transaksi']=='KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250'){
	$pdf->Image('rb.png', 88, 148, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 157, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='KONTRAK_BERJANGKA_KAKAO'){
	$pdf->Image('rb.png', 88, 152.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 148, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 157, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='FOREX_0,1_LOT'){
	
	
	$pdf->Image('rb.png', 88, 157, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 148, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	
		if($form1['forexoption']=='Forex Lot Fixed Rate 10.000'){
			$pdf->Image('rb.png', 92, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		elseif($form1['forexoption']=='Forex Lot Fixed Rate 12.000'){
			$pdf->Image('rbkosong.jpg', 92, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rb.png', 92, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		elseif($form1['forexoption']=='Forex Lot Floating Rate USD'){
			$pdf->Image('rbkosong.jpg', 92, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rb.png', 92, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}

	$pdf->Image('rbkosong.jpg', 88, 174.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 183, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);	
	$pdf->Image('rbkosong.jpg', 88, 187.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 192, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
		if($form1['forexoption']!=''){
			$pdf->MultiCell(100, 0,'          Fixed Rate 10.000', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(100, 0,'          Fixed Rate 12.000', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(100, 0,'          Floating Rate USD', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
		}
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	
	
	
	
	/*
	$pdf->Image('rb.png', 88, 157, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 148, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	*/
	}else if($form1['Jenis_Transaksi']=='FOREX_REGULAR'){
	$pdf->Image('rb.png', 88, 161, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 148.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 157, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);

		if($form1['forexoption']=='Forex Reg Fixed Rate 10.000'){
			$pdf->Image('rb.png', 92, 165.2, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		elseif($form1['forexoption']=='Forex Reg Fixed Rate 12.000'){
			$pdf->Image('rbkosong.jpg', 92, 165.2, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rb.png', 92, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		elseif($form1['forexoption']=='Forex Reg Floating Rate USD'){
			$pdf->Image('rbkosong.jpg', 92, 165.2, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rb.png', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		
	$pdf->Image('rbkosong.jpg', 88, 178.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 182.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 187.4, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 191.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	
		if($form1['forexoption']!=''){
			$pdf->MultiCell(100, 0,'          Fixed Rate 10.000', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(100, 0,'          Fixed Rate 12.000', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(100, 0,'          Floating Rate USD', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
		}
	
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='INDEX_USD_0,1_LOT'){
	$pdf->Image('rb.png', 88, 165.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 148, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 157, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='INDEX_USD_REGULAR'){
	$pdf->Image('rb.png', 88, 169.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 148, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 157, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='INDEX_IDR_0,1_LOT'){
	$pdf->Image('rb.png', 88, 174.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 148, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 157, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='INDEX_IDR_REGULAR'){
	$pdf->Image('rb.png', 88, 178.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 148, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 157, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}
}
else if($form1['Transaksi']=='pernah'){
$pdf->Image('rb.png', 88, 138.3, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->Image('rbkosong.jpg', 88, 134, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
$pdf->MultiCell(0, 0,':     Belum Pernah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      Sudah Pernah', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,'      di '.$form1['sebutkan'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$pdf->Ln(5);

	$pdf->MultiCell(70, 0,'Margin Awal dan Jenis Transaksi yang akan di pilih', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	if($form1['Jenis_Transaksi']=='KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250'){
	$pdf->Image('rb.png', 88, 152, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 156.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 183, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='KONTRAK_BERJANGKA_KAKAO'){
	$pdf->Image('rb.png', 88, 156.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 183, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='FOREX_0,1_LOT'){
	$pdf->Image('rb.png', 88, 161, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 156.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);

		if($form1['forexoption']=='Forex Lot Fixed Rate 10.000'){
			$pdf->Image('rb.png', 92, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		elseif($form1['forexoption']=='Forex Lot Fixed Rate 12.000'){
			$pdf->Image('rbkosong.jpg', 92, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rb.png', 92, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		elseif($form1['forexoption']=='Forex Lot Floating Rate USD'){
			$pdf->Image('rbkosong.jpg', 92, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rb.png', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
	
	$pdf->Image('rbkosong.jpg', 88, 178.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 183, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 187.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 191.7, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 196.2, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

		if($form1['forexoption']!=''){
			$pdf->MultiCell(100, 0,'          Fixed Rate 10.000', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(100, 0,'          Fixed Rate 12.000', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(100, 0,'          Floating Rate USD', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
		}
	
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='FOREX_REGULAR'){
	$pdf->Image('rb.png', 88, 165.3, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 156.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		if($form1['forexoption']=='Forex Reg Fixed Rate 10.000'){
			$pdf->Image('rb.png', 92, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 178.6, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		elseif($form1['forexoption']=='Forex Reg Fixed Rate 12.000'){
			$pdf->Image('rbkosong.jpg', 92, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rb.png', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 178.6, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		elseif($form1['forexoption']=='Forex Reg Floating Rate USD'){
			$pdf->Image('rbkosong.jpg', 92, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rbkosong.jpg', 92, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
			$pdf->Image('rb.png', 92, 178.6, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		}
		
	$pdf->Image('rbkosong.jpg', 88, 183, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 187.6, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 191.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 196.4, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

		if($form1['forexoption']!=''){
			$pdf->MultiCell(100, 0,'          Fixed Rate 10.000', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(100, 0,'          Fixed Rate 12.000', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(100, 0,'          Floating Rate USD', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
			$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
		}
	
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='INDEX_USD_0,1_LOT'){
	$pdf->Image('rb.png', 88, 169.8, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 156.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 183, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='INDEX_USD_REGULAR'){
	$pdf->Image('rb.png', 88, 174.3, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 156.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 183, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='INDEX_IDR_0,1_LOT'){
	$pdf->Image('rb.png', 88, 178.8, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 156.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 183, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
	}else if($form1['Jenis_Transaksi']=='INDEX_IDR_REGULAR'){
	$pdf->Image('rb.png', 88, 183, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 152, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 156.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 161, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 165.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 169.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 174.3, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 88, 178.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->MultiCell(100,0,':     Kontrak Berjangka Emas GOL, GOL100, GOL250', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Berjangka Kakao', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Kontrak Derivative Forex dan Loco London GOLD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index USD Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR 0,1 Lot', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(70, 0,'', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(100, 0,'      Index IDR Regular', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);

	}
}



?>