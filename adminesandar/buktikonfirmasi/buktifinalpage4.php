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
$pdf->MultiCell(70, 0,': '.$form4['Nama_Lengkap'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Tempat Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form4['Tempat_Lahir'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$tanggalform4="".$form4['Tanggal_Lahir']."-".$form4['Bulan_lahir']."-".$form4['Tahun_lahir']."";
$pdf->MultiCell(70, 0,'Tanggal Lahir', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$tanggalform4 , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'Alamat Rumah', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,': '.$form4['Alamat_Rumah'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(10);

$pdf->MultiCell(70, 0,'Kode Pos', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form4['Kode_Pos'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No.Identitas KTP / SIM / PASPOR', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form4['No_Identitas'] , 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);

$pdf->MultiCell(70, 0,'No. Demo Acc', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(70, 0,': '.$form4['No_Demo'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(5);

$pdf->Write(0,'Dengan mengisi kolom YA di bawah ini, saya menyatakan bahwa saya telah memiliki pengalaman yang
mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada
Perusahaan Pialang Berjangka '.$form4['Nama_Pialang'].' ,dan telah memahami tentang tata cara bertransaksi Perdagangan Berjangka.', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->Write(0,'Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.', '', 0, 'L', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->MultiCell(50,0,'Pernyataan Menerima', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->MultiCell(50,0,': Ya', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);

$pdf->Ln(5);

$pdf->MultiCell(50,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Multicell(50,0,': '.$form4['Tanggal'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
?>