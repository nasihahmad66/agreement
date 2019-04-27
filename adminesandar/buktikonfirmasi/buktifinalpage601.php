<?php
$pdf->AddPage();
	$pdf->SetFont('helvetica', '', 10);
	$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
	Perdagangan Berjangka Komoditi
	Nomor: 107/BAPPEBTI/PER/10/2013', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Ln(5);
		

	$pdf->SetFont('Helvetica','B','12');
	$pdf->Write(0, 'Formulir Nomor 107.PBK.04.1', '', 0, 'C', true, 0, false, false, 0);
	$pdf->Ln(2);
	$pdf->Ln(2);

	$pdf->Write(0, 'DOKUMEN PEMBERITAHUAN ADANYA  RESIKO YANG HARUS DISAMPAIKAN
	OLEH PIALANG BERJANGKA UNTUK TRANSAKSI KONTRAK  BERJANGKA', '', 0, 'C', true, 0, false, false, 0);
	$pdf->Ln(2);
	$pdf->Ln(2);
	$pdf->Ln(2);


	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(120, 0,'Dokumen Pemberitahuan Adanya Resiko ini disampaikan kepada Anda sesuai dengan Pasal 50 ayat (2) Undang-Undang Nomor 32 Tahun 1997 tentang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan Undang-Undang Nomor 10 Tahun 2010 tentang Perubahan Atas  Undang-Undang Nomor 32 Tahun 1997 Tentang Perdagangan Berjangka Komoditi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60, 0,"                                                                                                                                                                                             saya sudah membaca dan                             memahami                                ", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 78, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);

	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(120, 0, 'Maksud dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi  keuangan Anda mencukupi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60, 0,"                                                                                                                                 saya sudah membaca dan                             memahami                                ", 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 101, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->ln(5);
	
	$pdf->MultiCell(7, 0,'1                                                                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113, 0, 'Perdagangan Kontrak Berjangka belum tentu layak bagi semua investor. Anda dapat menderita kerugian dalam jumlah besar dan dalam jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah uang yang pertama kali Anda setor (Margin awal) ke Pialang Berjangka Anda. Anda mungkin menderita kerugian seluruh Margin dan Margin tambahan yang ditempatkan pada Pialang Berjangka untuk mempertahankan posisi Kontrak Berjangka Anda. Hal ini disebabkan Perdagangan  Berjangka sangat dipengaruhi oleh mekanisme leverage, dimana dengan jumlah investasi dalam bentuk yang relatif kecil dapat digunakan untuk membuka posisi dengan aset yang bernilai jauh lebih tinggi. Apabila Anda tidak siap dengan risiko seperti ini, sebaiknya Anda tidak melakukan perdagangan Kontrak Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60, 0,"                                                                                                                                                                                                                                                                                                                     saya sudah membaca dan                             memahami                                                                                                                                                                                                                                                                                                                                                                                          ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 141, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7, 0, '2                                                         ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Perdagangan Kontrak Berjangka mempunyai risiko dan mempunyai kemungkinan kerugian yang tidak terbatas yang jauh lebih besar dari jumlah uang yang disetor (Margin) ke Pialang Berjangka. Kontrak Berjangka sama dengan produk keuangan lainnya yang mempunyai risiko tinggi, Anda sebaiknya tidak menaruh risiko terhadap dana yang Anda tidak siap untuk menderita rugi, seperti tabungan pensiun, dana kesehatan atau dana untuk keadaan darurat, dana yang disediakan untuk pendidikan atau kepemilikan rumah, dana yang diperoleh dari pinjaman pendidikan atau gadai, atau dana yang digunakan untuk memenuhi kebutuhan sehari-hari.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                                                                                                                                         saya sudah membaca dan                             memahami                                                                                                                                                                                                                        ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 194, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'3                              ' , 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Berhati-hatilah terhadap pernyataan bahwa Anda pasti mendapatkan keuntungan besar dari perdagangan Kontrak Berjangka. Meskipun perdagangan Kontrak Berjangka dapat memberikan keuntungan yang besar dan cepat, namun hal tersebut tidak pasti, bahkan dapat menimbulkan kerugian yang besar dan cepat juga. Seperti produk keuangan lainnya, tidak ada yang dinamakan pasti untung.' , 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                 saya sudah membaca dan                             memahami                                                                                                                            ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 230, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->AddPage();
	
	$pdf->MultiCell(7,0,'4                                                                     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Disebabkan adanya mekanisme leverage dan sifat dari transaksi Kontrak Berjangka, Anda dapat merasakan dampak bahwa Anda menderita kerugian dalam waktu cepat. Keuntungan maupun kerugian dalam transaksi Kontrak Berjangka akan langsung dikredit atau didebet ke rekening Anda, paling lambat secara harian. Apabila pergerakan di pasar terhadap Kontrak Berjangka menurunkan nilai posisi Anda dalam Kontrak Berjangka, Anda diwajibkan untuk menambah dana untuk pemenuhan kewajiban Margin ke Pialang Berjangka. Apabila rekening Anda berada dibawah minimum Margin yang telah ditetapkan Lembaga Kliring Berjangka atau Pialang Berjangka, maka posisi Anda dapat dilikuidasi pada saat rugi, dan Anda wajib menyelesaikan defisit (jika ada) dalam rekening Anda. 	', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                                                                                                                                                                                                     saya sudah membaca dan                             memahami                                                                                                                                                                                                                                                                                                     ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 44, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'5                                                                          ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tidak mungkin melikuidasi posisi. Pada umumnya Anda harus melakukan transaksi offset jika ingin melikuidasi posisi dalam Kontrak Berjangka. Apabila Anda tidak dapat melikuidasi posisi Kontrak Berjangka, Anda tidak dapat merealisasikan keuntungan pada nilai posisi tersebut atau mencegah kerugian yang lebih tinggi. Kemungkinan tidak dapat melikuidasi dapat terjadi, antara lain: jika perdagangan berhenti dikarenakan aktivitas perdagangan yang tidak lazim pada Kontrak Berjangka atau subjek Kontrak Berjangka, terjadi kerusakan sistem pada Bursa Berjangka atau Pialang Berjangka, atau posisi Anda berada dalam pasar yang tidak likuid. Bahkan apabila Anda dapat melikuidasi posisi tersebut, Anda mungkin terpaksa melakukannya pada harga yang menimbulkan kerugian besar', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,53,"                                                                                                                                                                                                                                                                                                                      saya sudah membaca dan                             memahami                                                                                                                                                                                                                                                                                                                                                                                        ", 1, 'C', 0,1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 96, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'6                                                        ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tidak mungkin mengelola risiko atas posisi terbuka Kontrak Berjangka dengan cara membuka posisi dengan nilai yang sama namun dengan posisi yang berlawanan dalam kontrak bulan yang berbeda, dalam pasar yang berbeda atau dalam Subjek Kontrak Berjangka yang berbeda. Kemungkinan untuk tidak dapat mengambil posisi dalam rangka membatasi risiko yang timbul, contohnya: jika perdagangan dihentikan pada pasar yang berbeda disebabkan aktivitas perdagangan yang tidak lazim pada Kontrak Berjangka atau subjek Kontrak Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                                                                                                                                                                                                     saya sudah membaca dan                             memahami                                                                                                                                                                     ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 153, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'7                                                                    ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Anda dapat diwajibkan untuk menyelesaikan Kontrak Berjangka dengan penyerahan fisik dari Subjek Kontrak Berjangka. Jika Anda mempertahankan posisi penyelesaian fisik dalam Kontrak Berjangka sampai hari terakhir perdagangan berdasarkan tanggal jatuh tempo Kontrak Berjangka, Anda akan diwajibkan menyerahkan atau menerima penyerahan Subjek Kontrak Berjangka yang dapat mengakibatkan adanya penambahan biaya. Pengertian penyelesaian dapat berbeda untuk suatu Kontrak Berjangka dengan Kontrak Berjangka lainnya atau suatu Bursa Berjangka dengan Bursa Berjangka lainnya. Anda harus melihat secara teliti mengenai penyelesaian dan kondisi penyerahan sebelum membeli atau menjual Kontrak Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                                                                                                                                                                                                     saya sudah membaca dan                             memahami                                                                                                                                                                                                                                                                                         ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);	
	$pdf->Image('checkbox.png', 163, 198, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->AddPage();
	
	$pdf->MultiCell(7,0,'8                                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Anda dapat menderita kerugian yang disebabkan kegagalan sistem informasi. Sebagaimana yang terjadi pada setiap transaksi keuangan, Anda dapat menderita kerugian jika amanat untuk melaksanakan transaksi Kontrak Berjangka tidak dapat dilakukan karena kegagalan sistem informasi di Bursa Berjangka, penyelenggara maupun sistem informasi di Pialang Berjangka yang mengelola posisi Anda. Kerugian Anda akan semakin besar jika Pialang Berjangka yang mengelola posisi Anda tidak memiliki sistem informasi cadangan atau prosedur yang layak.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                                                                                                                                          saya sudah membaca dan                             memahami                                                                                                                                              ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 40, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'9                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Semua Kontrak Berjangka mempunyai risiko, dan tidak ada strategi berdagang yang dapat menjamin untuk menghilangkan risiko tersebut. Strategi dengan menggunakan kombinasi posisi seperti spread, dapat sama berisiko seperti posisi long atau short. Melakukan Perdagangan Berjangka memerlukan pengetahuan mengenai Kontrak Berjangka dan pasar berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                                                                              saya sudah membaca dan                             memahami                                                 ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 74, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'10                                               ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Strategi perdagangan harian dalam Kontrak Berjangka dan produk lainnya memiliki risiko khusus. Seperti pada produk keuangan lainnya, pihak yang ingin membeli atau menjual Kontrak Berjangka yang sama dalam satu hari untuk mendapat keuntungan dari perubahan harga pada hari tersebut (day traders) akan memiliki beberapa risiko tertentu antara lain jumlah komisi yang besar, risiko terkena efek pengungkit (exposure to leverage), dan persaingan dengan pedagang profesional. Anda harus mengerti risiko tersebut dan memiliki pengalaman yang memadai sebelum melakukan perdagangan harian (day trading).', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                                                                                                                                         saya sudah membaca dan                             memahami                                                                                                                                                                                                      ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 105, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'11                             ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Menetapkan amanat bersyarat, seperti Kontrak Berjangka dilikuidasi pada keadaan tertentu untuk membatasi rugi (stop loss), mungkin tidak akan dapat membatasi kerugian Anda sampai jumlah tertentu saja. Amanat bersyarat tersebut mungkin tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                                                                             saya sudah membaca dan                             memahami                                                 ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 140, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'12           ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Anda harus membaca dengan seksama dan memahami Perjanjian Pemberian Amanat dengan Pialang Berjangka Anda sebelum melakukan transaksi Kontrak Berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                     saya sudah membaca dan                  memahami        ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 161, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'13                 ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Pernyataan singkat ini tidak dapat memuat secara rinci seluruh risiko atau aspek penting lainnya tentang Perdagangan Berjangka. Oleh karena itu Anda harus mempelajari kegiatan Perdagangan Berjangka secara cermat sebelum memutuskan melakukan transaksi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                                                                                 saya sudah membaca dan                    memahami         ", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 178, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7,0,'14            ', 1, 'C', 0, 0, '', '', true, 0, false, true, 0);	
	$pdf->SetFont('Helvetica','','10');
	$pdf->MultiCell(113,0,'Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure) ini dibuat dalam Bahasa Indonesia.                                                                                     ', 1, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(60,0,"                                                                     saya sudah membaca dan            memahami", 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 163, 192.5, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(2);	
	$pdf->Ln(2);
	$pdf->Ln(2);
		
	$pdf->SetFont('Helvetica','B','12');
	$pdf->Write(0,'PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO', '', 0, 'C', true, 0, false, false, 0);
	$pdf->Ln(1);	

		
		$pdf->SetFont('Helvetica','','11');
		$pdf->Write(0,'Dengan mengisi kolom YA di bawah, saya menyatakan bahwa saya telah menerima DOKUMEN PEMBERITAHUAN ADANYA RISIKO mengerti dan menyetujui isinya.', '', 0, 'C', true, 0, false, false, 0);
		$pdf->Ln(2);
		$pdf->Ln(2);
		$pdf->Ln(2);
		
	$pdf->MultiCell(60,0,'Pernyataan Menerima / Tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(50,0,': '.$form601['Menerima'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);

	$pdf->MultiCell(60,0,'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Multicell(50,0,': '.$form601['Tanggal'], 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->Ln(5);
?>