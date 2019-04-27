<?php
ob_start();
include 'tcpdf/tcpdf.php';
include "../config.php";
session_start();
$id=$_SESSION['newid'];
$sql="select * from namaid where id='$id'";
$query=mysql_query($sql);
$hasil1=mysql_fetch_array($query);

if($hasil1['jk_nasabah']=='Laki-Laki')
{
	$jen='Bapak';
}
else if($hasil1['jk_nasabah']=='Perempuan')
{
	$jen='Ibu';
}

$tv=$hasil1['tanggal_verifikasi'];
//$tanggalbaru = date('d F Y', strtotime($tv));
$hari = date('l', strtotime($tv));
if ($hari == "Sunday") $hari = "Minggu";
else if ($hari == "Monday") $hari = "Senin";
else if ($hari == "Tuesday") $hari = "Selasa";
else if ($hari == "Wednesday") $hari = "Rabu";
else if ($hari == "Thursday") $hari = "Kamis";
else if ($hari == "Friday") $hari = "Jumat";
else if ($hari == "Saturday") $hari = "Sabtu";

$tggl=substr($tv, 8, 2);
$bln=substr($tv, 5, 2);
$thn=substr($tv, 0, 4);
if($bln=='01')
{ $bln='Januari';}
else if($bln=='02')
{ $bln='Februari';}
else if($bln=='03')
{ $bln='Maret';}
else if($bln=='04')
{ $bln='April';}
else if($bln=='05')
{ $bln='Mei';}
else if($bln=='06')
{ $bln='Juni';}
else if($bln=='07')
{ $bln='Juli';}
else if($bln=='08')
{ $bln='Agustus';}
else if($bln=='09')
{ $bln='September';}
else if($bln=='10')
{ $bln='Oktober';}
else if($bln=='11')
{ $bln='November';}
else if($bln=='12')
{ $bln='Desember';}

$tanggalbaru="".$tggl." ".$bln." ".$thn."";

$tk=$hasil1['tanggal_add_pialang'];
//$tglk = date('d F Y', strtotime($tk));

$tgglap=substr($tk, 8, 2);
$blnap=substr($tk, 5, 2);
$thnap=substr($tk, 0, 4);
if($blnap=='01')
{ $blnap='Januari';}
else if($blnap=='02')
{ $blnap='Februari';}
else if($blnap=='03')
{ $blnap='Maret';}
else if($blnap=='04')
{ $blnap='April';}
else if($blnap=='05')
{ $blnap='Mei';}
else if($blnap=='06')
{ $blnap='Juni';}
else if($blnap=='07')
{ $blnap='Juli';}
else if($blnap=='08')
{ $blnap='Agustus';}
else if($blnap=='09')
{ $blnap='September';}
else if($blnap=='10')
{ $blnap='Oktober';}
else if($blnap=='11')
{ $blnap='November';}
else if($blnap=='12')
{ $blnap='Desember';}

$tglk="".$tgglap." ".$blnap." ".$thnap."";


$pdf = new TCPDF('', PDF_UNIT, 'A4', true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 017');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData('', '0', '                              ', '   
                                     
                                 
                       ');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP+20, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM+5);
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);



$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('helvetica','', 14);
$pdf->Write(0, 'BUKTI KONFIRMASI PENERIMAAN NASABAH
PADA PT. ESANDAR ARTHAMAS BERJANGKA', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln(5);

$pdf->SetFont('helvetica','', 10);
$pdf->MultiCell(0, 0,'Saya yang bertanda tangan dibawah ini,', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->SetFont('Helvetica','','10');
$tablenamapialang = '<table border="0" width="100%">
			<tr>
				<td width="20%">Nama</td>
				<td width="2%" align="center">:</td>
				<td width="75%">'.$hasil1['Wakil_Pialang'].'</td>
			</tr>
			<tr>
				<td width="20%">Pekerjaan / Jabatan</td>
				<td width="2%" align="center">:</td>
				<td width="75%">(Petugas Wakil Pialang yang Ditunjuk Memverifikasi)</td>
			</tr>
			<tr>
				<td width="20%">Alamat</td>
				<td width="2%" align="center">:</td>
				<td width="75%">Agung Podomoro Land Tower Lantai 36, Jln. Letjen S Parman Kav. 28</td>
			</tr>
			</table>';
$pdf->writeHTMLCell(182, '', 15, 70,$tablenamapialang, 0, 0, 0, true, 'J', true);
$pdf->Ln(15);
$pdf->MultiCell(0, 0,'Dalam hal ini bertindak untuk dan atas nama PT. Esandar Arthamas Berjangka.', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(3);
$pdf->MultiCell(0, 0,'Pada hari '.$hari.', Tanggal '.$tanggalbaru.' mengkonfirmasi kepada:', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
//$pdf->MultiCell(0, 0,'Pada hari Jumat, Tanggal 21 Juli 2017 mengkonfirmasi kepada:', 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

$tablenamapialang = '<table border="0" width="100%">
			<tr>
				<td width="20%">Nama</td>
				<td width="2%" align="center">:</td>
				<td width="75%">'.$hasil1['NAMA'].'</td>
			</tr>
			<tr>
				<td width="20%">Alamat Rumah</td>
				<td width="2%" align="center">:</td>
				<td width="75%">'.$hasil1['alamat_rumah'].'</td>
			</tr>
			<tr>
				<td width="20%">No.KTP/SIM/Paspor</td>
				<td width="2%" align="center">:</td>
				<td width="75%">'.$hasil1['no_identitas'].'</td>
			</tr>
			<tr>
				<td width="20%">No.Account</td>
				<td width="2%" align="center">:</td>
				<td width="75%">'.$hasil1['no_acc'].'</td>
			</tr>
			</table>';
$pdf->writeHTMLCell(182, '', 15, 100,$tablenamapialang, 0, 0, 0, true, 'J', true);	

$pdf->Ln(25);
$pdf->MultiCell(0, 0,"bahwa ".$jen." ".$hasil1['NAMA']." telah resmi menjadi Nasabah PT. Esandar Arthamas Berjangka sejak tanggal ".$tglk." Dengan Nomor Account ".$hasil1['no_acc'].", berdasarkan Perjanjian Pemberian Amanat yang ".$jen." ".$hasil1['NAMA']." telah isi dan setujui berdasarkan ketentuan Peraturan Kepala Bappebti Nomor 99/BAPPEBTI/PER/11/2012 tentang Penerimaan Nasabah Secara Elektronik On-Line Di Bidang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan Peraturan Kepala Bappebti Nomor 107/BAPPEBTI/PER/11/2013,", 0, 'J', 0, 1, '', '', true, 0, false, true, 0);
$pdf->MultiCell(0, 0,"serta telah mengisi dan menyetujui dokumen sebagai berikut:", 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(3);
$pdf->writeHTML('<ol><justify>
<li>Pernyataan telah melakukan simulasi Perdagangan Berjangka atau Pernyataan Telah Berpengalaman Dalam melaksanakan Transaksi Perdagangan Berjangka;</li>
<li>Profil Nasabah dan aplikasi pembukaan rekening;</li>
<li>Dokumen Pemberitahuan Adanya Resiko;</li>
<li>Perjanjian Pemberian Amanat;</li>
<li>Peraturan Perdagangan <I>(Trading Rules)</I>; dan</li>
<li>Pernyataan dari Nasabah untuk Tidak Menyerahkan Kode Akses Transaksi Nasabah <I>(Personal Access Password)</I> Ke pihak Lain.</li></justify>
</ol>
', true, false, true, false, '');
$pdf->Ln(4);


$pdf->MultiCell(0, 0,"Dengan membaca, mengisi dan menyetujui dokumen sebagaimana dimaksud diatas, dengan demikian ".$jen." ".$hasil1['NAMA']." telah :", 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(3);

$pdf->writeHTML('<ol><justify>
<li>Memahami dan mengerti resiko-resiko yang ada, termasuk kerugian atas seluruh dana yang disetor;</li>
<li>Memahami kewajiban dan hak selaku Nasabah Pialang Berjangka;</li>
<li>Memahami dan mengerti mekanisme dan cara Perdagangan Berjangka;</li>
<li>Memahami untuk tidak membuat perjanjian dalam bentuk apapun baik secara lisan maupun tertulis dengan pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka diluar Perjanjian Perdagangan Berjangka dan peraturan perdagangan <I>(Trading Rules)</I> antara Nasabah dengan PT Esandar Arthamas Berjangka;</li>
<li>Memahami untuk bertanggung jawab sepenuhnya terhadap nama pengguna <I>(user id)</I> dan kode akses transaksi Nasabah <I>(Personal Access Password)</I>, dan tidak menyerahkan nama pengguna <I>(User Id)</I> dan kode akses transaksi nasabah <I>(Personal Access Password)</I> ke pihak lain, terutama kepada pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka;</li>
<li>Melakukan simulasi atau mengerti mekanisme transaksi Perdagangan Berjangka;</li>
<li>Memahami mengenai peraturan perdagangan <I>(Trading Rules)</I> antara Nasabah dengan PT. Esandar Arthamas Berjangka;</li>
<li>Memahami tentang mekanisme penggunaan Rekening Terpisah <I>(Segregated Account)</I>, termasuk penyetoran dan penarikan dana, yakni akun keluar masuk dana wajib sama dengan akun yang didaftarkan dalam aplikasi pembukaan rekening, dan pelaksanaanya wajib dilakukan melalui pindah buku/transfer, serta prosedur penarikan dana; dan</li>
<li>Memahami dana yang dipergunakan dalam bertransaksi adalah dana milik pribadi, bukan dari dan/ atau milik pihak lain, atau berasal dari pencucian uang.</li></justify>
</ol>
', true, false, true, false, '');

$pdf->Ln(4);

$pdf->MultiCell(0, 0,"Data yang kami terima dari ".$jen." ".$hasil1['NAMA']." Akan kami rekam dan catat, dan sepenuhnya menjadi milik PT. Esandar Arthamas Berjangka. Kami bertanggung jawab untuk menjaga kerahasiaan data dan informasi ".$jen." ".$hasil1['NAMA']." Sesuai dengan Peraturan Perundang-Undangan.", 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
$pdf->Ln(5);
$pdf->Ln(3);


$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(80, 0, 'Verifikator
Wakil Pialang Berjangka






'.$hasil1['Wakil_Pialang'].'', 0, 'C', 0, 0, '', '', true, 0, false, true, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(100, 0, 'Mengetahui,
Direktur Utama PT. Esandar Arthamas Berjangka






Francois Haberth Hallatu', 0, 'C', 0, 1, '', '', true, 0, false, true, 0);
$Output = "KONF-".$id."-".$hasil1['NAMA']."";
ob_end_clean();
$pdf->Output("$Output.pdf",'F');
?>