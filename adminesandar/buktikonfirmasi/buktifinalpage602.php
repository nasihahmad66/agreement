<?php
$pdf->AddPage();
	$pdf->Write(0, 'Lampiran 2 Peraturan Kepala Badan Pengawas
	Perdagangan Berjangka Komoditi
	Nomor: 107/BAPPEBTI/PER/11/2013', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Ln();
	$pdf->Ln();

	$pdf->SetFont('Helvetica','B','10');
	$pdf->Write(0, 'Formulir Nomor 107.PBK.04.2', '', 0, 'C', true, 0, false, false, 0);
	$pdf->Write(0, 'DOKUMEN PEMBERITAHUAN ADANYA RISIKO YANG HARUS DISAMPAIKAN OLEH PIALANG
	BERJANGKA UNTUK TRANSAKSI KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN
	ALTERNATIF', '', 0, 'C', true, 0, false, false, 0);
	$pdf->Ln(5);

	$pdf->SetFont('times', '', 10);

	// create columns content
	// create columns content
	$form62_1=$form602['1_1'];
	$form62_2=$form602['1_2'];
	$form62_3=$form602['1_3'];
	$form62_4=$form602['1_4'];
	$form62_5=$form602['1_5'];
	$form62_6=$form602['1_6'];
	$form62_7=$form602['1_7'];
	$form62_8=$form602['1_8'];
	$form62_9=$form602['1_9'];
	$form62_10=$form602['1_10'];
	$form62_11=$form602['1_11'];
	$form62_12=$form602['1_12'];
	$form62_13=$form602['1_13'];
	$form62_14=$form602['1_14'];
	$form62_15=$form602['1_15'];

	$dokumen = ''."\n";
	$memahamidok = ""."\n";

	$maksud = ''."\n";
	$memahamimak = ""."\n";

	$no1 = 'Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif belum tentu layak bagi semua investor. Anda dapat menderita kerugian dalam jumlah besar dan dalam jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah uang yang pertama kali Anda setor (Margin Awal) ke Pialang Berjangka Anda. Anda mungkin menderita kerugian seluruh Margin dan Margin tambahan yang ditempatkan pada Pialang Berjangka untuk mempertahankan posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif Anda. Hal ini disebabkan Perdagangan Berjangka sangat dipengaruhi oleh mekanisme leverage, dimana dengan jumlah investasi dalam bentuk yang relatif kecil dapat digunakan untuk membuka posisi dengan aset yang bernilai jauh lebih tinggi. Apabila Anda tidak siap dengan risiko seperti ini, sebaiknya Anda tidak melakukan perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif.'."\n";
	$memahami1 = "$form62_3                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              "."\n";

	// write the second column
	$pdf->MultiCell(134, 0,'Dokumen Pemberitahuan Adanya Risiko ini disampaikan kepada Anda sesuai dengan Pasal 50 ayat (2) Undang-Undang Nomor 32 Tahun 1997 tentang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan Undang-undang Nomor 10 Tahun 2011 tentang Perubahan Atas Undang-Undang Nomor 32 Tahun 1997 Tentang Perdagangan Berjangka Komoditi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                         saya sudah membaca dan                     memahami                                                  ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 76, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(134, 0,'Maksud dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif bisa mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan Anda mencukupi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                         saya sudah membaca dan                     memahami              ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 98, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(5);

	$pdf->MultiCell(7, 0, '1                                                           ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif belum tentu layak bagi semua investor. Anda dapat menderita kerugian dalam jumlah besar dan dalam jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah uang yang pertama kali Anda setor (Margin Awal) ke Pialang Berjangka Anda. Anda mungkin menderita kerugian seluruh Margin dan Margin tambahan yang ditempatkan pada Pialang Berjangka untuk mempertahankan posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif Anda. Hal ini disebabkan Perdagangan Berjangka sangat dipengaruhi oleh mekanisme leverage, dimana dengan jumlah investasi dalam bentuk yang relatif kecil dapat digunakan untuk membuka posisi dengan aset yang bernilai jauh lebih tinggi. Apabila Anda tidak siap dengan risiko seperti ini, sebaiknya Anda tidak melakukan perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                                                                                                                               saya sudah membaca dan                     memahami                                                                                                                                                                                                         ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 134, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->MultiCell(7, 0, '2                                                ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif mempunyai risiko dan mempunyai kemungkinan kerugian yang tidak terbatas yang jauh lebih besar dari jumlah uang yang disetor (Margin) ke Pialang Berjangka. Kontrak Derivatif dalam Sistem Perdagangan Alternatif sama dengan produk keuangan lainnya yang mempunyai risiko tinggi, Anda sebaiknya tidak menaruh risiko terhadap dana yang Anda tidak siap untuk menderita rugi, seperti tabungan pensiun, dana kesehatan atau dana untuk keadaan darurat, dana yang disediakan untuk pendidikan atau kepemilikan rumah, dana yang diperoleh dari pinjaman pendidikan atau gadai, atau dana yang digunakan untuk memenuhi kebutuhan sehari-hari.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                                                                             saya sudah membaca dan                     memahami                                                                                                                          ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 177, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->Ln(0);
	
	$pdf->MultiCell(7, 0, '3                               ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Berhati-hatilah terhadap pernyataan bahwa Anda pasti mendapatkan keuntungan besar dari perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif. Meskipun perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif dapat memberikan keuntungan yang besar dan cepat, namun hal tersebut tidak pasti, bahkan dapat menimbulkan kerugian yang besar dan cepat juga. Seperti produk keuangan lainnya, tidak ada yang dinamakan "pasti untung".', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                           saya sudah membaca dan                     memahami                                                                   ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 214, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->AddPage();	
	
	$pdf->Ln(0);
	$pdf->MultiCell(7, 0, '4                                                                    ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Disebabkan adanya mekanisme leverage dan sifat dari transaksi Kontra Derivatif dalam Sistem Perdagangan Alternatif, Anda dapat merasakan dampak bahwa Anda menderita kerugian dalam waktu cepat. Keuntungan maupun kerugian dalam transaksi akan langsung dikredit atau didebet ke rekening Anda, paling lambat secara harian. Apabila pergerakan di pasar terhadap Kontrak Derivatif dalam Sistem Perdagangan Alternatif menurunkan nilai posisi Anda dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif, dengan kata lain berlawanan dengan posisi yang Anda ambil, Anda diwajibkan untuk menambah dana untuk pemenuhan kewajiban Margin ke perusahaan Pialang Berjangka. Apabila rekening Anda berada dibawah minimum Margin yang telah ditetapkan Lembaga Kliring Berjangka atau Pialang Berjangka, maka posisi Anda dapat dilikuidasi pada saat rugi, dan Anda wajib menyelesaikan defisit (jika ada) dalam rekening Anda.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                                                                                                                                                                                 saya sudah membaca dan                     memahami                                                                                                                                                                                                               ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 48, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(0);
	$pdf->MultiCell(7, 0, '5                                                                          ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tidak mungkin melikuidasi posisi. Pada umumnya Anda harus melakukan transaksi mengambil posisi yang berlawanan dengan maksud melikuidasi posisi (offset) jika ingin melikuidasi posisi dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif. Apabila Anda tidak dapat melikuidasi posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif, Anda tidak dapat merealisasikan keuntungan pada nilai posisi tersebut atau mencegah kerugian yang lebih tinggi. Kemungkinan tidak dapat melikuidasi dapat terjadi, antara lain: jika perdagangan berhenti dikarenakan aktivitas perdagangan yang tidak lazim pada Kontrak Derivatif atau subjek Kontrak Derivatif, atau terjadi kerusakan sistem pada Pialang Berjangka Peserta Sistem Perdagangan Alternatif atau Pedagang Berjangka Penyelenggara Sistem Perdagangan Alternatif. Bahkan apabila Anda dapat melikuidasi posisi tersebut, Anda mungkin terpaksa melakukannya pada harga yang menimbulkan kerugian besar.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                                                                                                                                                                                 saya sudah membaca dan                     memahami                                                                                                                                                                                                                             ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 102, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(0);
	$pdf->MultiCell(7, 0, '6                                               ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tida mungkin mengelola risiko atas posisi terbuka Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan cara membuka posisi dengan nilai yang sama namun dengan posisi yang berlawanan dalam kontrak bulan yang berbeda, dalam pasar yang berbeda atau dalam “subjek Kontrak Derivatif dalam Sistem Perdagangan Alternatif” yang berbeda. Kemungkinan untuk tidak dapat mengambil posisi dalam rangka membatasi risiko yang timbul, contohnya; jika perdagangan dihentikan pada pasar yang berbeda disebabkan aktivitas perdagangan yang tidak lazim pada Kontrak Derivatif dalam Sistem Perdagangan Alternatif atau “Kontrak Derivatif dalam Sistem Perdagangan Alternatif”.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                                                                                                                               saya sudah membaca dan                     memahami                                                                                                           ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 155, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(0);
	$pdf->MultiCell(7, 0, '7                                                ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Anda dapat menderita kerugian yang disebabkan kegagalan sistem informasi. Sebagaimana yang terjadi pada setiap transaksi keuangan, Anda dapat menderita kerugian jika amanat untuk melaksanakan transaksi Kontrak Derivatif dalam Sistem Perdagangan Alternatif tidak dapat dilakukan karena kegagalan sistem informasi di Bursa Berjangka, Pedagang Penyelenggara Sistem Perdagangan Alternatif , maupun sistem di Pialang Berjangka Peserta Sistem Perdagangan Alternatif yang mengelola posisi Anda. Kerugian Anda akan semakin besar jika Pialang Berjangka yang mengelola posisi Anda tidak memiliki sistem informasi cadangan atau prosedur yang layak.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0, '                                                                                                                                                                                                             saya sudah membaca dan                     memahami                                                                                                                         ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 190, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(0);
	$pdf->MultiCell(7, 0, '8                              ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Semua Kontrak Derivatif dalam Sistem Perdagangan Alternatif mempunyai risiko, dan tidak ada strategi berdagang yang dapat menjamin untuk menghilangkan risiko tersebut. Strategi dengan menggunakan kombinasi posisi seperti spread, dapat sama berisiko seperti posisi long atau short.Melakukan Perdagangan Berjangka memerlukan pengetahuan mengenai Kontrak Derivatif dalam Sistem Perdagangan Alternatif dan pasar berjangka.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                           saya sudah membaca dan                     memahami                                                    ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 225, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->AddPage();

	$pdf->Ln(0);
	$pdf->MultiCell(6, 0, '9                                          ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Strategi perdagangan harian dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif dan produk lainnya memiliki risiko khusus. Seperti pada produk keuangan lainnya, pihak yang ingin membeli atau menjual Kontrak Derivatif dalam Sistem Perdagangan Alternatif yang sama dalam satu hari untuk mendapat keuntungan dari perubahan harga pada hari tersebut (“day traders”) akan memiliki beberapa risiko tertentu antara lain jumlah komisi yang besar, risiko terkena efek pengungkit (“exposure to leverage”), dan persaingan dengan pedagang profesional. Anda harus mengerti risiko tersebut dan memiliki pengalaman yang memadai sebelum melakukan perdagangan harian (“day trading”).', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                                                                                     saya sudah membaca dan                     memahami                                                                                                                             ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 39, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(0);
	$pdf->MultiCell(6, 0, '10                    ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Menetapkan amanat bersyarat, Kontrak Derivatif dalam Sistem Perdagangan Alternatif dilikuidasi pada keadaan tertentu untuk membatasi rugi (stop loss), mungkin tidak akan dapat membatasi kerugian Anda sampai jumlah tertentu saja. Amanat bersyarat tersebut mungkin tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Derivatif dalam Sistem Perdagangan Alternatif.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                                                                                 saya sudah membaca dan                     memahami                ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 74, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);

	$pdf->Ln(0);
	$pdf->MultiCell(6, 0, '11         ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Anda harus membaca dengan seksama dan memahami Perjanjian Pemberian Amanat Nasabah dengan Pialang Berjangka Anda sebelum melakukan transaksi Kontrak Derivatif dalam Sistem Perdagangan Alternatif.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                         saya sudah membaca dan                     memahami            ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 90.5, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(0);
	$pdf->MultiCell(6, 0, '12            ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Pernyataan singkat ini tidak dapat memuat secara rinci seluruh risiko atau aspek penting lainnya tentang Perdagangan Berjangka. Oleh karena itu Anda harus mempelajari kegiatan Perdagangan Berjangka secara cermat sebelum memutuskan melakukan transaksi.', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                                                                             saya sudah membaca dan                     memahami                  ', 1, 'C', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 106, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);

	$pdf->Ln(0);
	$pdf->MultiCell(6, 0, '13        ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(127, 0,'Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure) ini dibuat dalam Bahasa Indonesia.                                                                                                                                                    ', 1, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(0, 0,'                                                           saya sudah membaca dan                     memahami', 1, 'L', 0, 1, '', '', true, 0, false, true, 0);
	$pdf->Image('checkbox.png', 170, 121.5, 4, 4, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
	
	$pdf->Ln(10);
	$pdf->SetFont('helvetica', 'B', 12);
	$pdf->Cell(0, 0, 'PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO', 0, 1, 'C', 0, '', 0);
	$pdf->Ln(5);
	$pdf->SetFont('helvetica', '', 10);
	$pdf->Write(0,'Dengan mengisi kolom “YA” di bawah, saya menyatakan bahwa saya telah menerima “DOKUMEN PEMBERITAHUAN ADANYA RISIKO” mengerti dan menyetujui isinya.', '', 0, 'C', true, 0, false, false, 0);

	$pdf->Ln(2);
	$pdf->MultiCell(70, 0, 'Pernyataan menerima / tidak', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(10, 0, $form602['Menerima'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);

	$pdf->Ln(2);
	$pdf->MultiCell(70, 0, 'Menyatakan pada Tanggal', 0, 'L', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(7, 0,':', 0, 'J', 0, 0, '', '', true, 0, false, true, 0);
	$pdf->MultiCell(40, 0, $form602['Tanggal'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
?>