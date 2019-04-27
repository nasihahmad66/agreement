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
	$pdf->Write(0,'Formulir Nomor 107.PBK.05.2
	Perjanjian Pemberian Amanat Secara Elektronik Online
	Untuk Transaksi Kontrak Derivatif Dalam Sistem Perdagangan Alternatif','',0,'C',true,0, false, false, 0);
	$pdf->Ln(4);

	$pdf->SetFont('Helvetica','B','12');
	$pdf->Write(0,'PERHATIAN !
	PERJANJIAN INI MERUPAKAN KONTRAK HUKUM. HARAP DIBACA DENGAN SEKSAMA.','',0,'C',true,0, false, false, 0);
	$pdf->Ln(2);
	$pdf->Ln(2);

	$temtang2="".$form702['hari1'].", Tanggal ".$form702['tanggal1'].", Bulan ".$form702['bulan1'].", Tahun ".$form702['tahun1']."";
	$pdf->SetFont('Helvetica','','10');
	$pdf->Write(0,"Pada Hari ini $temtang2, 
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
	$pdf->writeHTMLCell(182, '', 14, 100,$tablenamanasabah, 0, 0, 0, true, 'J', true);
	$pdf->Image('checkbox.png', 172, 104.5, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(20);
	$pdf->Write(0,'dalam hal ini bertindak untuk dan atas nama sendiri, yang selanjutnya disebut Nasabah,','',0,'L',true,0, false, false, 0);
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
	$pdf->writeHTMLCell(182, '', 14, 126,$tablenamapialang, 0, 0, 0, true, 'J', true);	
	
	$pdf->Image('checkbox.png', 172, 131, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
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
	$pdf->MultiCell(7,0,'                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127,0,'Nasabah menempatkan sejumlah dana (Margin) ke Rekening Terpisah (Segregated Account) Pialang Berjangka sebagai Margin awal dan wajib mempertahankannya sebagaimana ditetapkan.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,"                                       saya sudah membaca        dan memahami", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 179, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->MultiCell(7,0,'                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)                  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127,0,'membayar biaya-biaya yang diperlukan untuk transaksi yaitu biaya transaksi, pajak, komisi, dan biaya pelayanan, biaya bunga sesuai tingkat yang berlaku, dan biaya lainnya yang dapat dipertanggungjawabkan berkaitan dengan transaksi sesuai amanat Nasabah, maupun biaya rekening Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,"                                                                             saya sudah membaca        dan memahami", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 196, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7,0,'2', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Pelaksanaan Transaksi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,0,'              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127,0,'Setiap transaksi Nasabah dilaksanakan secara elektronik on-line oleh Nasabah yang bersangkutan.                                                                                                                                        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,"                                       saya sudah membaca        dan memahami", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 215, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,0,'                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127,0,'Setiap amanat Nasabah yang diterima dapat langsung dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi dan eksekusinya dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan transaksi tersebut. Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum memberikan amanat untuk transaksi berikutnya.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,"                                                                                                                   saya sudah membaca        dan memahami", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 236, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);


	$pdf->MultiCell(7, 0, '               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(3)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Setiap transaksi Nasabah secara bilateral dilawankan dengan Penyelenggara Sistem Perdagangan Alternatif PT Harta International Investama yang bekerjasama dengan Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,"                                      saya sudah membaca        dan memahami", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 250.5, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7,0, '3', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,'Kewajiban Memelihara Margin', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,0,'                	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)             	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 17.8,'Setiap transaksi Nasabah secara bilateral dilawankan dengan Penyelenggara Sistem Perdagangan Alternatif PT Harta International Investama yang bekerjasama dengan Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 35, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 0,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7,0,'              		', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)            	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127,17.8,'Apabila jumlah Margin memerlukan penambahan maka Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah untuk menambah Margin segera.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 55, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 0,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '                    	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(3)                	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 17.8,'Apabila jumlah Margin memerlukan tambahan (Call Margin) maka Nasabah wajib melakukan penyerahan Call Margin selambat-lambatnya sebelum dimulai hari perdagangan berikutnya. Kewajiban Nasabah sehubungan dengan penyerahan Call Margin tidak terbatas pada jumlah Margin awal.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 72, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 0,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '          			', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(4) 		     		', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 17.8,'Pialang Berjangka tidak berkewajiban melaksanakan amanat untuk melakukan transaksi yang baru dari Nasabah sebelum Call Margin dipenuhi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 90, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 0,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '             	  	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(5)            	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 17.8,'Untuk memenuhi kewajiban Call Margin dan keuangan lainnya dari Nasabah, Pialang Berjangka dapat mencairkan dana Nasabah yang ada di Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 108, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 0,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '4', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Hak Pialang Berjangka Melikudiasi Posisi Nasabah', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 30,'Nasabah bertanggung jawab memantau/mengetahui posisi terbukanya secara terus- menerus dan memenuhi kewajibannya. Apabila dalam jangka waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan, Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau sebagian, membatasi transaksi, atau tindakan lain untuk melindungi diri dalam pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa memberitahu Nasabah dan Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tindakan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 135, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 35.5,'
	
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '5', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Pengganti Kerugian Tidak Adanya Penutupan Polisi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Apabila Nasabah tidak mampu melakukan penutupan atas transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas transaksi Nasabah yang terjadi. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka, dan apabila Nasabah lalai untuk membayar biaya-biaya tersebut, Pialang Berjangka berhak untuk mengambil pembayaran dari dana Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 170, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 27,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '6', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Pialang Berjangka Dapat Membatasi Posisi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                		', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 17.8,'Nasabah mengakui hak Pialang Berjangka untuk membatasi posisi terbuka Kontrak dan Nasabah tidak melakukan transaksi melebihi batas yang telah ditetapkan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 202, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 0,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '7', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Tidak Ada Jaminan atas Informasi atau Rekomendasi Nasabah mengakui bahwa:', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '           			', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)    			', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 17.8,'Informasi dan rekomendasi yang diberikan oleh Pialang Berjangka kepada Nasabah tidak selalu lengkap dan perlu diverifikasi.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 223, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 0,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '					', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)       	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.4,'Pialang Berjangka tidak menjamin bahwa informasi dan rekomendasi yang diberikan merupakan informasi yang akurat dan lengkap.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 238.5, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 0,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	
	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->MultiCell(7, 0, '                          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(3)                      ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Informasi dan rekomendasi yang diberikan oleh Wakil Pialang Berjangka yang satu dengan yang lain mungkin berbeda karena perbedaan analisis fundamental atau teknikal. Nasabah menyadari bahwa ada kemungkinan Pialang Berjangka dan pihak terafiliasinya memiliki posisi di pasar dan memberikan rekomendasi tidak konsisten kepada Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 31, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 22.3,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '8', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Pembatasan Tanggung Jawab Pialang Berjangka', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)                           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Pialang Berjangka tidak bertanggung jawab untuk memberikan penilaian kepada Nasabah mengenai iklim, pasar, keadaan politik dan ekonomi nasional dan internasional, nilai Kontrak Derivatif, kolateral, atau memberikan nasihat mengenai keadaan pasar. Pialang Berjangka hanya memberikan pelayanan untuk melakukan transaksi secara jujur serta memberikan laporan atas transaksi tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 58, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 26.9,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '                                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)                                        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Perdagangan sewaktu-waktu dapat dihentikan oleh pihak yang memiliki otoritas (Bappebti/Bursa Berjangka) tanpa pemberitahuan terlebih dahulu kepada Nasabah. Atas posisi terbuka yang masih dimiliki oleh Nasabah pada saat perdagangan tersebut dihentikan, maka akan diselesaikan (likuidasi) berdasarkan pada peraturan/ketentuan yang dikeluarkan dan ditetapkan oleh pihak otoritas tersebut, dan semua kerugian serta biaya yang timbul sebagai akibat dihentikannya transaksi oleh pihak otoritas perdagangan tersebut, menjadi beban dan tanggung jawab Nasabah sepenuhnya.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 89, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 35.5,'
	
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '9', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Transaksi Harus Mematuhi Peraturan Yang Berlaku', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Semua transaksi dilakukan sendiri oleh Nasabah dan wajib mematuhi peraturan perundang-undangan di bidang Perdagangan Berjangka, kebiasaan dan interpretasi resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 122, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '10', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Pialang Berjangka Tidak Bertanggung jawab atas Kegagalan Komunikasi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Pialang Berjangka tidak bertanggung jawab atas keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi lainnya yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain diluar kontrol Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 140, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '11', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Konfirmasi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '         		', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)      	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Konfirmasi dari Nasabah dapat berupa surat, telex, media lain, surat elektronik, secara tertulis ataupun rekaman suara.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 158, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)                                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Pialang Berjangka berkewajiban menyampaikan konfirmasi transaksi, laporan rekening, permintaan Call Margin, dan pemberitahuan lainnya kepada Nasabah secara akurat, benar dan secepatnya pada alamat (email) Nasabah sesuai dengan yang tertera dalam rekening Nasabah. Apabila dalam jangka waktu 2 x 24 jam setelah amanat jual atau beli disampaikan, tetapi Nasabah belum menerima konfirmasi melalui alamat email Nasabah dan/atau sistem transaksi, Nasabah segera memberitahukan hal tersebut kepada Pialang Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 180, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 35.5,'
	
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(3)            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Jika dalam waktu 2 x 24 jam sejak tanggal penerimaan konfirmasi tersebut tidak ada sanggahan dari Nasabah maka konfirmasi Pialang Berjangka dianggap benar dan sah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 207, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(4)             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Kekeliruan atas konfirmasi yang diterbitkan Pialang Berjangka akan diperbaiki oleh Pialang Berjangka sesuai keadaan yang sebenarnya dan demi hukum konfirmasi yang lama batal.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 220, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(5)          	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Nasabah tidak bertanggung jawab atas transaksi yang dilaksanakan atas rekeningnya apabila konfirmasi tersebut tidak disampaikan secara benar dan akurat.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 234, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	
	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '12', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Kebenaran Informasi Nasabah', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Nasabah memberikan informasi yang benar dan akurat mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi perubahan, termasuk perubahan kemampuan keuangannya untuk terus melaksanakan transaksi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 32, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 18.1,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '13', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Komisi Transaksi', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Nasabah mengetahui dan menyetujui bahwa Pialang Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan, dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang Berjangka. Perubahan beban (fees) dan biaya lainnya harus disetujui secara tertulis oleh Para Pihak.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 59, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 22.3,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '14', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Pemberian Kuasa', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                                        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Nasabah memberikan kuasa kepada Pialang Berjangka untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau institusi lain yang terkait untuk memperoleh keterangan atau verifikasi mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi persyaratan yang diperlukan.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 91, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 31,'
	
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '15', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Pemindahan Dana', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Pialang Berjangka dapat setiap saat mengalihkan dana dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang dilakukan Nasabah seperti pembayaran komisi, pembayaran biaya transaksi, kliring dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu memberitahukan kepada Nasabah. Transfer yang telah dilakukan akan segera diberitahukan secara tertulis kepada Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 122, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 26.8,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);


	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '16', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Pemberitahuan', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Semua komunikasi, uang, surat berharga, dan kekayaan lainnya harus dikirimkan langsung ke alamat Nasabah seperti tertera dalam rekeningnya atau alamat lain yang ditetapkan/diberitahukan secara tertulis oleh Nasabah.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 149, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)                                                                    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Semua uang, harus disetor atau ditransfer langsung oleh Nasabah ke Rekening Terpisah (Segregated Account) Pialang Berjangka: 

		Nama           : PT.Esandar Arthamas Berjangka
		Alamat         : Agung Podomoro Land Tower Lt. 36
                        Jl. Letjen S. Parman Kav. 28, 
                        Jakarta Barat 11470 - Indonesia 
		Bank            : Bank Central Asia cab Sudirman
		No. Rekening Terpisah : 035.313.6019 (Rupiah)
                                          035.313.4610 (USD)

	dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda terima bukti setor atau transfer dari pegawai Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 170, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 57.5,'
	
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	
	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->MultiCell(7, 0, '                                                                            ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(3)                                                                    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Semua surat berharga, kekayaan lainnya, atau komunikasi harus dikirim kepada Pialang Berjangka: 

		Nama       : PT.Esandar Arthamas Berjangka
		Alamat     : Agung Podomoro Land Tower Lt. 36
                    Jl. Letjen S. Parman Kav. 28, 
                    Jakarta Barat 11470 - Indonesia 
		Telepon   : 021-2933 9229
		Facsimile : 021-2933 9230
		Email       : info@esandar.co.id

	dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda bukti penerimaan dari pegawai Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 36, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 57.5,'
	
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);
	

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '17', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Dokumen Pemberitahuan Adanya Risiko', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '           	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 13.3,'Nasabah mengakui menerima dan mengerti Dokumen Pemberitahuan Adanya Risiko', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 90, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '18', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Jangka Waktu Perjanjian dan Pengakhiran', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Perjanjian ini mulai berlaku terhitung sejak tanggal dilakukannya konfirmasi oleh Pialang Berjangka dengan diterimanya Bukti Konfirmasi Penerimaan Nasabah dari Pialang Berjangka oleh Nasabah.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 108, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Nasabah dapat mengakhiri Perjanjian ini hanya jika Nasabah sudah tidak lagi memiliki posisi terbuka dan tidak ada kewajiban Nasabah yang diemban oleh atau terhutang kepada Pialang Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 121, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '            	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(3)    		', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.2,'Pengakhiran tidak membebaskan salah satu Pihak dari tanggung jawab atau kewajiban yang terjadi sebelum pemberitahuan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 135, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.3,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '19', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Berakhirnya Perjanjian', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	

	$pdf->MultiCell(7, 0, '  ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Perjanjian dapat berakhir dalam hal Nasabah', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '           	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)     	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Dinyatakan pailit, memiliki hutang yang sangat besar, dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau meninggal;', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 158, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '           	', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)    		', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 13.3,'Tidak dapat memenuhi atau mematuhi perjanjian ini dan/atau melakukan pelanggaran terhadapnya;', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 171, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '                                ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(3)                          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Berkaitan dengan angka (1) dan (2) tersebut di atas, Pialang Berjangka dapat: 

	i). meneruskan atau menutup posisi Nasabah tersebut setelah mempertimbangkannya secara cermat dan jujur; dan 

	ii). menolak perintah dari Nasabah atau kuasanya.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 190, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 26.7,'
	
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);	

	$pdf->MultiCell(7, 0, '                     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(4)              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Pengakhiran Perjanjian sebagaimana dimaksud dengan angka (1) dan (2) tersebut di atas tidak melepaskan kewajiban dari Para Pihak yang berhubungan dengan penerimaan atau kewajiban pembayaran atau pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 215, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 17.2,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->AddPage();
	$pdf->Image('draft3.png', 30, 50, 150, 150, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '20', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Force Majeur', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                                                                                   ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Tidak ada satupun pihak di dalam Perjanjian dapat diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab yang berada di luar kemampuannya atau kekuasaannya (force majeur), sepanjang pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya sebab itu. Yang dimaksud dengan Force Majeur dalam Perjanjian adalah peristiwa kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir), pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan perundang-undangan yang berlaku dan kondisi di bidang ekonomi, keuangan dan Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan, kliring dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 34.9, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 62.2,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '21', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Perubahan atas Isian dalam Perjanjian Pemberian Amanat', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Perubahan atas isian dalam Perjanjian ini hanya dapat dilakukan atas persetujuan Para Pihak, atau Pialang Berjangka telah memberitahukan secara tertulis perubahan yang diinginkan, dan Nasabah tetap memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara tertulis atas usul perubahan tersebut. Tindakan Nasabah tersebut dianggap setuju atas usul perubahan tersebut.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 104, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 22.2,'
	
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	
	$pdf->SetFont('Helvetica','B','10');
	$pdf->MultiCell(7, 0, '22', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Penyelesaian Perselisihan', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7, 0, '             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(1)         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Semua perselisihan dan perbedaan pendapat yang timbul dalam pelaksanaan Perjanjian ini wajib diselesaikan terlebih dahulu secara musyawarah untuk mencapai mufakat antara Para Pihak.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 126, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 13.2,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->MultiCell(7, 0, '                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(2)              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, Para Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 173, 140, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->MultiCell(0, 17.7,'
	saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(0);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(7,0,'                                              ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(3)                                       ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0,0,"Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka (2), maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui : 
	    Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI)  berdasarkan Peraturan dan Prosedur Badan Arbitrase Perdagangan Berjangka  Komoditi (BAKTI)
	    Pengadilan Negeri Jakarta Barat
	    Pengadilan Negeri Surabaya
	    Pengadilan Negeri Pontianak", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	if($form702['nomer22_3']=='Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI) berdasarkan Peraturan dan Prosedur Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI)')
	{
	$pdf->Image('rb.png', 30, 170.6, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,179, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,183.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,187.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form702['nomer22_3']=='Jakarta Barat')
	{
	$pdf->Image('rb.png', 30, 179, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,170.6, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,183.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,187.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form702['nomer22_3']=='Surabaya')
	{
	$pdf->Image('rb.png', 30, 183.5, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,170.6, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,179, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,187.8, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form702['nomer22_3']=='Pontianak')
	{
	$pdf->Image('rb.png', 30, 187.8, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,170.6, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,183.5, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,179, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}
	
	$pdf->Ln(0);
	$pdf->MultiCell(7, 0, '                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7,0,'(4)             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Kantor atau kantor cabang Pialang Berjangka terdekat dengan domisili Nasabah tempat penyelesaian dalam hal terjadi perselisihan :
	    Jakarta Barat	         	           Surabaya	         	           Pontianak', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	if($form702['nomer22_4']=='Jakarta Barat'){
	$pdf->Image('rb.png', 30, 201.4, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 73,201.4, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 110,201.4, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form702['nomer22_4']=='Surabaya'){
	$pdf->Image('rb.png', 73, 201.4, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,201.4, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 110,201.4, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}else if($form702['nomer22_4']=='Pontianak'){
	$pdf->Image('rb.png', 110, 201.4, 3, 3, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 73,201.4, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	$pdf->Image('rbkosong.jpg', 30,201.4, 3, 3, 'jpg', '', '', true, 150, '', false, false, 0, false, false, false);
	}
	$pdf->MultiCell(7, 0, '23', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'Bahasa', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->MultiCell(7, 0, '                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(134, 0,'Perjanjian ini dibuat dalam Bahasa Indonesia. Demikian Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar, sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun. 
	
Saya telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum dalam perjanjian ini.', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
		$pdf->Image('checkbox.png', 173, 215, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
		$pdf->MultiCell(0, 27,'
		
		saya sudah membaca dan memahami', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
		$pdf->Ln(0);

	$pdf->SetFont('helvetica', '', 10);
	$pdf->Ln(5);
	$pdf->Write(0, 'Dengan mengisi kolom YA di bawah, saya menyatakan bahwa saya telah menerima PERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK DERIVATIF SISTEM PERDAGANGAN ALTERNATIF, mengerti dan menyetujui isinya.', '', 0, 'L', true, 0, false, false, 0);

	$pdf->SetFont('helvetica', '', 10);
	$pdf->Ln(2);
	$pdf->MultiCell(70, 0, 'Pernyataan menerima / tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(10, 0, $form702['menerima'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->Ln(2);
	$pdf->MultiCell(70, 0, 'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(5, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(40, 0, $form702['tanggal'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Ln(3);
	$pdf->Ln(3);
?>