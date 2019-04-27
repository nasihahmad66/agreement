<?php
$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
	Perdagangan Berjangka Komoditi
	Nomor: 107/BAPPEBTI/PER/10/2013', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Ln(2);
	$pdf->Ln(2);
	$pdf->Ln(2);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->Write(0,'Formulir Nomor 107.PBK.05.1
	PERJANJIAN PEMBERIAN AMANAT SECARA ELEKTRONIK ONLINE
	UNTUK TRANSAKSI KONTRAK BERJANGKA','',0,'C',true,0, false, false, 0);
	$pdf->Ln(4);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->Write(0,'PERHATIAN !
	PERJANJIAN INI MERUPAKAN KONTRAK HUKUM. HARAP DIBACA DENGAN SEKSAMA.','',0,'C',true,0, false, false, 0);
	$pdf->Ln(2);
	$pdf->Ln(2);

		$pdf->SetFont('Helvetica','','10');
		$pdf->Write(0,"Pada Hari ini ".$form701['hari1'].", Tanggal ".$form701['tanggal1'].", Bulan ".$form701['bulan1'].", Tahun ".$form701['tahun1'].",
Kami yang mengisi perjanjian di bawah ini:",'',0,'L',true,0, false, false, 0);
		$pdf->Ln(20);

		$tablenamanasabah = '<table border="1" width="100%">
			<tr>
				<td width="3%"> 1.</td>
				<td width="73%">
					<table border="0">
					<tr><td width="2%"></td>
						<td width="23%">Nama</td>
						<td width="1%">:</td>
						<td width="69%">'.$form1['Nama_Lengkap'].'</td>
					</tr>
					<tr><td width="2%"></td>
						<td>Pekerjaan/Jabatan</td>
						<td>:</td>
						<td>'.$form5['Pekerjaan'].'</td>
					</tr>
					<tr><td width="2%"></td>
						<td>Alamat</td>
						<td>:</td>
						<td>'.$form1['Alamat_Rumah'].'</td>
					</tr></table>
				</td>
				<td width="24%" align="center">
					<table border="0">
						<tr><td width="2%"></td></tr>
						<tr><td width="2%"></td></tr>
						<tr><td width="98%">saya sudah membaca dan memahami</td></tr>
					</table>
				</td>
			</tr>
			</table>';
		$pdf->writeHTMLCell(182, '', 14, 97,$tablenamanasabah, 0, 0, 0, true, 'J', true);
	$pdf->Image('checkbox.png', 172, 101, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(20);
	$pdf->Write(0,'dalam hal ini bertindak untuk dan atas nama sendiri, yang selanjutnya disebut Nasabah,','',0,'L',true,0, false, false, 0);
	$pdf->Ln(2);
	$tablenamapialang = '<table border="1" width="100%">
			<tr>
				<td width="3%"> 2.</td>
				<td width="73%">
					<table border="0">
					<tr><td width="2%"></td>
						<td width="23%">Nama</td>
						<td width="1%">:</td>
						<td width="69%">PT. Esandar Arthamas Berjangka </td>
					</tr>
					<tr><td width="2%"></td>
						<td>Pekerjaan/Jabatan</td>
						<td>:</td>
						<td>Wakil Pialang</td>
					</tr>
					<tr><td width="2%"></td>
						<td>Alamat</td>
						<td>:</td>
						<td>Agung Podomoro Land Tower Lt 36. Jl Letjen S Parman Kav 28 Jakarta Barat 10470</td>
					</tr></table>
				</td>
				<td width="24%" align="center">
					<table border="0">
						<tr><td width="2%"></td></tr>
						<tr><td width="2%"></td></tr>
						<tr><td width="98%">saya sudah membaca dan memahami</td></tr>
					</table>
				</td>
			</tr>
			</table>';
	$pdf->writeHTMLCell(182, '', 14, 124,$tablenamapialang, 0, 0, 0, true, 'J', true);	
	$pdf->Image('checkbox.png', 172, 128, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(20);

	$pdf->Write(0,'dalam hal ini bertindak untuk dan atas nama PT. Esandar Arthamas Berjangka yang selanjutnya disebut Pialang Berjangka,','',0,'L',true,0, false, false, 0);
	$pdf->Ln(2);

	$pdf->Write(0,'Nasabah dan Pialang Berjangka secara bersama  sama selanjutnya disebut Para Pihak.','',0,'L',true,0, false, false, 0);
	$pdf->Ln(2);

	$pdf->Write(0,'Para Pihak sepakat untuk mengadakan Perjanjian Pemberian Amanat untuk melakukan transaksi penjualan maupun pembelian Kontrak Berjangka dengan ketentuan sebagai berikut:','',0,'L',true,0, false, false, 0);
	$pdf->Ln(1);


	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7,0,'1', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Margin dan Pembayaran Lainnya', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(1)           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Nasabah menempatkan sejumlah dana (Margin) ke Rekening Terpisah (Segregated Account) Pialang Berjangka sebagai Margin awal dan wajib mempertahankannya sebagaimana ditetapkan.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 180, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->MultiCell(7,23,'                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,23,'(2)                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,23,'membayar biaya-biaya yang diperlukan untuk transaksi yaitu biaya transaksi, pajak, komisi, dan biaya pelayanan, biaya bunga sesuai tingkat yang berlaku, dan biaya lainnya yang dapat dipertanggungjawabkan berkaitan dengan transaksi sesuai amanat Nasabah, maupun biaya rekening Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,23,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 200, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7,0,'2', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Pelaksanaan Amanat', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,30,'                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,30,'(1)                        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,30,'Setiap amanat yang disampaikan oleh Nasabah atau kuasanya yang ditunjuk secara tertulis oleh Nasabah, dianggap sah apabila diterima oleh Pialang Berjangka sesuai dengan ketentuan yang berlaku, dapat berupa amanat tertulis yang ditandatangani oleh Nasabah atau kuasanya, amanat telepon yang direkam, dan/atau amanat transaksi elektronik lainnya.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,30,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 228, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,30.5,'                                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,30.5,'(2)                                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,30.50,'Setiap amanat Nasabah yang diterima dapat langsung dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi dan eksekusinya tergantung pada kondisi dan sistem transaksi yang berlaku yang mungkin dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan amanat tersebut. Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum memberikan amanat untuk transaksi berikutnya.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,31,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 32, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(3)                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,0,'Amanat Nasabah hanya dapat dibatalkan dan/atau diperbaiki apabila transaksi atas amanat tersebut belum terjadi. Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tidak terlaksananya pembatalan dan/atau perbaikan sepanjang bukan karena kelalaian Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,22,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 62, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(4)    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Pialang Berjangka berhak menolak amanat Nasabah apabila harga yang ditawarkan atau diminta tidak wajar.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 84, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,' 3', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Antisipasi Penyerahan Barang', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,35,'                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,35,'(1)                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,35,'Untuk kontrak-kontrak tertentu penyelesaian transaksi dapat dilakukan dengan penyerahan atau penerimaan barang (delivery) apabila kontrak jatuh tempo. Nasabah menyadari bahwa penyerahan atau penerimaan barang mengandung risiko yang lebih besar daripada melikuidasi posisi dengan offset. Penyerahan fisik barang memiliki konsekuensi kebutuhan dana yang lebih besar serta tambahan biaya pengelolaan barang.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,35,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 109, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(2)         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Pialang Berjangka tidak bertanggung jawab atas klasifikasi mutu (grade), kualitas atau tingkat toleransi atas komoditi yang diserahkan atau akan diserahkan.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 143, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(3)  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Pelaksanaan penyerahan atau penerimaan barang tersebut akan diatur dan dijamin oleh Lembaga Kliring Berjangka.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 164, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'4', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Kewajiban Memelihara Margin', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(1)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Nasabah wajib memelihara/memenuhi tingkat Margin yang harus tersedia di rekening pada Pialang Berjangka sesuai dengan jumlah yang telah ditetapkan baik diminta ataupun tidak oleh Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 191, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(2)          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Apabila jumlah Margin memerlukan penambahan maka Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah untuk menambah Margin segera.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 211, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,25,'                    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,25,'(3)               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,25,'Apabila jumlah Margin memerlukan tambahan (Call Margin) maka Nasabah wajib melakukan penyerahan Call Margin selambat-lambatnya sebelum dimulai hari perdagangan berikutnya. Kewajiban Nasabah sehubungan dengan penyerahan Call Margin tidak terbatas pada jumlah Margin awal.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,25,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 231, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(4)          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Pialang Berjangka tidak berkewajiban melaksanakan amanat untuk melakukan transaksi yang baru dari Nasabah sebelum Call Margin dipenuhi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 254, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->Addpage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(5)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Untuk memenuhi kewajiban Call Margin dan keuangan lainnya dari Nasabah, Pialang Berjangka dapat mencairkan dana Nasabah yang ada di Pialang Berjangka.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 30, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'5', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Hak Pialang berjangka Melikuidasi Posisi Nasabah', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,43,'                                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,43,'Nasabah bertanggung jawab memantau / mengetahui posisi terbukanya secara terus menerus dan memenuhi kewajibannya. Apabila dalam jangka waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan, Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau sebagian, membatasi transaksi, atau tindakan lain untuk melindungi diri dalam pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa memberitahu Nasabah dan Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tindakan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,43,"                                                                                                                                                                                                     saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 64, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);


	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'6', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Penggantian Kerugian Tidak Menyerahkan Barang', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,35,'                                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,35,'Apabila Nasabah tidak mampu menyerahkan komoditi atas Kontrak Berjangka yang jatuh tempo, Nasabah memberikan kuasa kepada Pialang Berjangka untuk meminjam atau membeli komoditi untuk penyerahan tersebut. Nasabah wajib membayar secepatnya semua biaya, kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka atas tindakan tersebut. Apabila Pialang Berjangka harus menerima penyerahan komoditi atau surat berharga maka Nasabah bertanggung jawab atas penurunan nilai dari komoditi atas surat berharga tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,35.5,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 105, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);
	
	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'7', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Penggantian Kerugian Tidak Adanya Penutupan Posisi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,30,'                                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,30,'Apabila Nasabah tidak mampu melakukan penutupan atas transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas transaksi di Bursa. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka, dan apabila Nasabah lalai untuk membayar biayabiaya tersebut, Pialang Berjangka berhak untuk mengambil pembayaran dari dana Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,30,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 145, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'8', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Pialang Berjangka Dapat Membatasi Posisi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,20,'Nasabah mengakui hak Pialang Berjangka untuk membatasi posisi terbuka Kontrak Berjangka Nasabah dan Nasabah tidak melakukan transaksi melebihi batas yang telah ditetapkan tersebut.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 180, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'9', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Tidak Ada Jaminan atas Informasi atau Rekomendasi Nasabah mengakui bahwa:', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(1)     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Informasi dan rekomendasi yang diberikan oleh Pialang Berjangka kepada Nasabah tidak selalu lengkap dan perlu diverifikasi', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 205, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(2)     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Pialang Berjangka tidak menjamin bahwa informasi dan rekomendasi yang diberikan merupakan informasi yang akurat dan lengkap.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 228, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,28,'                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,28,'(3)                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,28,'Informasi dan rekomendasi yang diberikan oleh Wakil Pialang Berjangka yang satu dengan yang lain mungkin berbeda karena perbedaan analisis fundamental atau teknikal. Nasabah menyadari bahwa ada kemungkinan Pialang Berjangka dan pihak terafiliasinya memiliki posisi di pasar dan memberikan rekomendasi tidak konsisten kepada Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,28,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 247, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->Addpage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'10', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Pembatasan Tanggung Jawab Pialang Berjangka.', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,30,'                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,30,'(1)                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,30,'Pialang Berjangka tidak bertanggung jawab untuk memberikan penilaian kepada Nasabah mengenai iklim, pasar, keadaan politik dan ekonomi nasional dan internasional, nilai kontrak berjangka, kolateral, atau memberikan nasihat mengenai keadaan pasar. Pialang Berjangka hanya memberikan pelayanan untuk melakukan transaksi secara jujur serta memberikan laporan atas transaksi tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,30,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 36, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,40,'                                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,40,'(2)                                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,40,'Perdagangan sewaktu-waktu dapat dihentikan oleh pihak yang memiliki otoritas (Bappebti/Bursa Berjangka) tanpa pemberitahuan terlebih dahulu kepada Nasabah. Atas posisi terbuka yang masih dimiliki oleh Nasabah pada saat perdagangan tersebut dihentikan, maka akan diselesaikan (likuidasi) berdasarkan pada peraturan/ketentuan yang dikeluarkan dan ditetapkan oleh pihak otoritas tersebut, dan semua kerugian serta biaya yang timbul sebagai akibat dihentikannya transaksi oleh pihak otoritas perdagangan tersebut, menjadi beban dan tanggung jawab Nasabah sepenuhnya.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,40,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 65, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'11', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Transaksi Harus Mematuhi Peraturan Yang Berlaku', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,20,'Semua transaksi baik yang dilakukan sendiri oleh Nasabah maupun melalui Pialang Berjangka wajib mematuhi peraturan perundang-undangan di bidang Perdagangan Berjangka, kebiasaan dan interpretasi resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 110, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'12', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Pialang Berjangka tidak Bertanggung jawab atas Kegagalan Komunikasi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,20,'Pialang Berjangka tidak bertanggung jawab atas keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi lainnya yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain diluar kontrol Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 138, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'13', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Konfirmasi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,15,'            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,15,'(1)     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,15,'Konfirmasi dari Nasabah dapat berupa surat, telex, media lain, secara tertulis ataupun rekaman suara.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,15,"                                                  saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 160, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,38,'                                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,38,'(2)                                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,38,'Pialang Berjangka berkewajiban menyampaikan konfirmasi transaksi, laporan rekening, permintaan Call Margin, dan pemberitahuan lainnya kepada Nasabah secara akurat, benar dan secepatnya pada alamat Nasabah sesuai dengan yang tertera dalam rekening Nasabah. Apabila dalam jangka waktu 2 x 24 jam setelah amanat jual atau beli disampaikan, tetapi Nasabah belum menerima konfirmasi tertulis, Nasabah segera memberitahukan hal tersebut kepada Pialang Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,38,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 178, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);


	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(3)             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Jika dalam waktu 2 x 24 jam sejak tanggal penerimaan konfirmasi tertulis tersebut tidak ada sanggahan dari Nasabah maka konfirmasi Pialang Berjangka dianggap benar dan sah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 217, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(4)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Kekeliruan atas konfirmasi yang diterbitkan Pialang Berjangka akan diperbaiki oleh Pialang Berjangka sesuai keadaan yang sebenarnya dan demi hukum konfirmasi yang lama batal.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 236, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(5)           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Nasabah tidak bertanggung jawab atas transaksi yang dilaksanakan atas rekeningnya apabila konfirmasi tersebut tidak disampaikan secara benar dan akurat.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 255, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->Addpage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'14', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Kebenaran Informasi Nasabah', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,25,'                          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,25,'Nasabah memberikan informasi yang benar dan akurat mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi perubahan, termasuk perubahan kemampuan keuangannya untuk terus melaksanakan transaksi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,25,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 35, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'15', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Komisi Transaksi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,25,'                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,25,'Nasabah mengetahui dan menyetujui bahwa Pialang Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan, dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang Berjangka. Perubahan beban (fees) dan biaya lainnya harus disetujui secara tertulis oleh Para Pihak.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,25,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 66, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'16', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Pemberian Kuasa', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,36,'                                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,36,'Nasabah memberikan kuasa kepada Pialang Berjangka untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau institusi lain yang terkait untuk memperoleh keterangan atau verifikasi mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi persyaratan yang diperlukan.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,36,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 99, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'17', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Pemindahan Dana', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,28,'                                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,28,'Pialang Berjangka dapat setiap saat mengalihkan dana dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang dilakukan Nasabah seperti pembayaran komisi, pembayaran biaya transaksi, kliring, dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu memberitahukan kepada Nasabah. Transfer yang telah dilakukan akan segera diberitahukan secara tertulis kepada Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,28,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 139, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);


	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'18', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Pemberitahuan', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(1)                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Semua komunikasi, uang, surat berharga, dan kekayaan lainnya harus dikirimkan langsung ke alamat Nasabah seperti tertera dalam rekeningnya atau alamat lain yang ditetapkan/diberitahukan secara tertulis oleh Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 172, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,49,'                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,49,'(2)                                                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,49,'Semua uang, harus disetor atau ditransfer langsung oleh Nasabah ke Rekening Terpisah (Segregated Account) Pialang Berjangka:
	Nama   : PT.Esandar Arthamas Berjangka
	Alamat : Agung Podomoro Land Tower Lt. 36
	              Jl. Letjen S. Parman Kav. 28, 
	              Jakarta Barat 11470 - Indonesia
	Bank     :  Bank Central Asia cab Sudirman
	No. Rekening Terpisah : 035.313.6019 (Rupiah)
	                                        035.313.4610 (USD)
	dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda terima bukti setor atau transfer dari pegawai Pialang Berjangka.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,53,"                                                                                                                                                                                                                                              saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 205, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->Open();
	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,50,'                                                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,50,'(3)                                                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,50,'Semua surat berharga, kekayaan lainnya, atau komunikasi harus dikirim kepada Pialang Berjangka:
	Nama   : PT.Esandar Arthamas Berjangka
	Alamat : Agung Podomoro Land Tower Lt. 36 
	              Jl. Letjen S. Parman Kav. 28,
	              Jakarta Barat 11470 - Indonesia
	Telepon   : 021-2933 9229
	Facsimile : 021-2933 9230
	Email       : info@esandar.co.id
	dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda bukti penerimaan dari pegawai Pialang Berjangka.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,50,"                                                                                                                                                                                                       saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 40, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'19', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Dokumen Pemberitahuan Adanya Risiko', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,20,'Nasabah mengakui menerima dan mengerti Dokumen  Pemberitahuan Adanya Risiko.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 88, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'20', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Jangka Waktu Perjanjian dan Pengakhiran', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(1)             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Perjanjian ini mulai berlaku terhitung sejak tanggal ditandatanganinya sampai disampaikannya pemberitahuan pengakhiran secara tertulis oleh Nasabah atau Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                  saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 110, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(2)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Nasabah dapat mengakhiri Perjanjian ini hanya jika Nasabah sudah tidak lagi memiliki posisi terbuka dan tidak ada kewajiban Nasabah yang diemban oleh atau terhutang kepada Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                 saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 131, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(3)      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Pengakhiran tidak membebaskan salah satu Pihak dari tanggung jawab atau kewajiban yang terjadi sebelum pemberitahuan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                 saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 151, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'21', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Berakhirnya Perjanjian', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(1)             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Dinyatakan pailit, memiliki hutang yang sangat besar, dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau meninggal;                                                                                                                      ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 175, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'       ', 1, 'L', 0,0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(2)    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Tidak dapat memenuhi atau mematuhi perjanjian ini dan/atau melakukan pelanggaran terhadapnya;', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 196, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,23,'                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,23,'(3)                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,23,'Berkaitan dengan angka (1) dan (2) tersebut di atas, Pialang Berjangka dapat:
	i). meneruskan atau menutup posisi Nasabah tersebut setelah
	    mempertimbangkannya secara cermat dan jujur; dan
	ii). menolak perintah dari Nasabah atau kuasanya.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,23,"                                                                                                 saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 218, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(4)               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Pengakhiran Perjanjian sebagaimana dimaksud dengan angka (1) dan (2) tersebut di atas tidak melepaskan kewajiban dari Para Pihak yang berhubungan dengan penerimaan atau kewajiban pembayaran atau pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                 saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 240, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->Open();
	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'22', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Force Majeur', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,72,'                                                                                     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,72,'Tidak ada satupun pihak di dalam Perjanjian dapat diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab yang berada di luar kemampuannya atau kekuasaannya (force majeur), sepanjang pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya sebab itu. Yang dimaksud dengan Force Majeur dalam Perjanjian adalah peristiwa kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir), pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan perundang-undangan yang berlaku dan kondisi di bidang ekonomi, keuangan dan Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan, kliring dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,72,"                                                                                                                                                                                                                                                   saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 50, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'23', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Perubahan atas Isian dalam Perjanjian Pemberian Amanat', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,30,'                                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,30,'Perubahan atas isian dalam Perjanjian ini hanya dapat dilakukan atas persetujuan Para Pihak, atau Pialang Berjangka telah memberitahukan secara tertulis perubahan yang diinginkan, dan Nasabah tetap memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara tertulis atas usul perubahan tersebut. Tindakan Nasabah tersebut dianggap setuju atas usul perubahan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,30,"                                                                                                 saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 115, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'24', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Penyelesaian Perselisihan', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(1)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Semua perselisihan dan perbedaan pendapat yang timbul dalam pelaksanaan Perjanjian ini wajib diselesaikan terlebih dahulu secara musyawarah untuk mencapai mufakat antara Para Pihak.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 148, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,20,'                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,20,'(2)                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(115,20,'Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, Para Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,20,"                                                                                                 saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 168, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,0,'                                                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,0,'(3)                                                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,"Apabila perselisihan dan perbedaan pendapat yang timbul  tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka  (2), maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui : 
	    Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI) berdasarkan Peraturan dan Prosedur Badan Arbitrase Perdagangan Berjangka  Komoditi (BAKTI)
	    Pengadilan Negeri Jakarta Barat
	    Pengadilan Negeri Surabaya
	    Pengadilan Negeri Pontianak", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	if($form701['24_3melalui']=='Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI)  berdasarkan Peraturan dan Prosedur Badan Arbitrase Perdagangan Berjangka  Komoditi (BAKTI)')
	{
		$pdf->Image('rb.png', 31, 199.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,208, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,212.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,217, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form701['24_3melalui']=='Jakarta Barat')
	{
		$pdf->Image('rb.png', 31, 208, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,199.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,212.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,217, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form701['24_3melalui']=='Surabaya')
	{
		$pdf->Image('rb.png', 31, 212.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,208, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,199.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,217, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form701['24_3melalui']=='Pontianak')
	{
		$pdf->Image('rb.png', 31, 217, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,208, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,212.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
		$pdf->Image('rbkosong.jpg', 31,199.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,0,'                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(8,0,'(4)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,"Kantor atau kantor cabang Pialang Berjangka terdekat dengan domisili Nasabah tempat penyelesaian dalam hal terjadi perselisihan. Daftar Kantor yang dipilih:
     Jakarta Barat	         	           Surabaya	         	           Pontianak", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	if($form701['24_4daftar_kantor']=='Jakarta Barat'){
	$pdf->Image('rb.png', 31, 230.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 74,230.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 111,230.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form701['24_4daftar_kantor']=='Surabaya'){
	$pdf->Image('rb.png', 74, 230.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 31,230.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 111,230.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form701['24_4daftar_kantor']=='Pontianak'){
	$pdf->Image('rb.png', 111, 230.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 74,230.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 31,230.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}
	
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->MultiCell(7,0,'25', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Bahasa', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,30,'                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(123,30,'Perjanjian ini dibuat dalam Bahasa Indonesia. Demikian Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar, sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun.

Saya telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum dalam perjanjian ini.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,30,"                                                                                                 saya sudah membaca dan memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 166.5, 245, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->Open();
	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','B','12');
	$pdf->Write(0,'Dengan mengisi kolom YA di bawah, saya menyatakan bahwa saya telah menerima PERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK BERJANGKA mengerti dan menyetujui isinya.','',0,'C',true,0, false, false, 0);
	$pdf->Ln(3);

	$pdf->SetFont('Helvetica','','12');
	$pdf->Write(10,'Pernyataan Menerima / Tidak                                  :   Ya','',0,'L',true,0, false, false, 0);
	$pdf->Write(10,"Menyatakan pada Tanggal                                      :   ".$form701['tanggal']."",'',0,'L',true,0, false, false, 0);


?>