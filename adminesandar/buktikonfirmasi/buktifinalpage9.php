<?php
$pdf->Addpage();
$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas 
Perdagangan Berjangka Komoditi
Nomor: 107/BAPPEBTI/PER/11/2013','',0,'R',true,0, false, false, 0);
$pdf->Ln(10);

$pdf->SetFont('Helvetica','B','12');
$pdf->Write(0,'Formulir: 107.PBK.07
Pernyataan Bertanggung Jawab Atas
Kode Akses Transaksi Nasabah (Personal Access Password)','',0,'C',true,0,false,false,0);
$pdf->Ln(3);

$pdf->SetFont('Helvetica','','10');
$pdf->Write(0,'Yang mengisi formulir di bawah ini','',0,'C',true,0,false,false,0);

$temtang="".$form9['tempat_lahir']." / ".$form9['tanggal_lahir']."-".$form9['bulan_lahir']."-".$form9['tahun_lahir']."";
$tablenamapialang = '<table border="0" width="100%">
			<tr>
				<td width="33%">Nama Lengkap</td>
				<td width="2%" align="center">:</td>
				<td width="60%">'.$form9['nama_lengkap'].'</td>
			</tr>
			<tr>
				<td width="33%">Tempat / Tanggal Lahir</td>
				<td width="2%" align="center">:</td>
				<td width="60%">'.$temtang.'</td>
			</tr>
			<tr>
				<td width="33%">Alamat Rumah</td>
				<td width="2%" align="center">:</td>
				<td width="60%">'.$form9['alamat_rumah'].'</td>
			</tr>
			<tr>
				<td width="33%">Kode Pos</td>
				<td width="2%" align="center">:</td>
				<td width="60%">'.$form9['kode_pos'].'</td>
			</tr>
			<tr>
				<td width="33%">No. Identitas KTP / SIM / Passpor</td>
				<td width="2%" align="center">:</td>
				<td width="60%">'.$form9['No_Identitas'].'</td>
			</tr>
			<tr>
				<td width="33%">No. Acc</td>
				<td width="2%" align="center">:</td>
				<td width="65%">'.$namaid['no_acc'].'</td>
			</tr>
			</table>';
$pdf->writeHTMLCell(182, '', 14, 80,$tablenamapialang, 0, 0, 0, true, 'J', true);	

$pdf->Ln(50);
$pdf->SetFont('Helvetica','','10');
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

$pdf->Write(0,'Pernyataan Menerima                                 :   '.$form9['pernyataan'],'',0,'L',true,0,false,false,0);
$pdf->Ln(2);

$pdf->Write(0,"Menyatakan pada Tanggal                          :   ".$form9['terima_tanggal'],'',0,'L',true,0,false,false,0);

?>