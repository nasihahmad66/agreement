<?php
## /var/www/vhosts/esandar.co.id/public_html/agreement/gambar/function5.php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();
include('config.php');

	$z=$_POST['nerima5'];
	$_SESSION['nerima5'] = $z;
	
	$page1=$_POST['page1'];
	$_SESSION['page1'] = $page1;
	
	$No_NPWP = $_POST['NPWP5'];
	$_SESSION['NPWP5'] = $No_NPWP;
	
	$Jenis_Kelamin = $_POST['jk5'];
	$_SESSION['jk5'] = $Jenis_Kelamin;
	
	$Nama_Istri_Suami = $_POST['namaIS5'];
	$_SESSION['namaIS5'] = $Nama_Istri_Suami;
	
	$Nama_Ibu_Kandung = $_POST['namaIK5'];
	$_SESSION['namaIK5'] = $Nama_Ibu_Kandung;

        $alamat4= $_POST['alamat4'];
	$_SESSION['alamat4'] = $alamat4;
	
	$Status_Perkawinan = $_POST['perkawinan5'];
	$_SESSION['perkawinan5'] = $Status_Perkawinan;

	$No_fax = $_POST['fax5'];
	$_SESSION['fax5'] = $No_fax;
	
	$No_Telp_hp = $_POST['hp5'];
	$_SESSION['hp5'] = $No_Telp_hp;
	
	$Status_Rumah = $_POST['statusR5'];
	$_SESSION['statusR5'] = $Status_Rumah;
	
	$lainnyaSR = $_POST['lainSR5'];
	$_SESSION['lainSR5'] = $lainnyaSR;
	
	$Tujuan_Rekening = $_POST['tupemburek'];
	$_SESSION['rekening5'] = $Tujuan_Rekening;
	
	$lainnyaTR = $_POST['lainTR5'];
	$_SESSION['lainTR5'] = $lainnyaTR;
	
	$Pengalaman_Investasi = $_POST['investasi5'];
	$_SESSION['investasi5'] = $Pengalaman_Investasi;
	
	$bidanginv = $_POST['bidanginv'];
	$_SESSION['bidanginv'] = $bidanginv;
	
	$Anggota_Keluarga = $_POST['anggotaK5'];
	$_SESSION['anggotaK5'] = $Anggota_Keluarga;
	
	$namaAK = $_POST['namaAK'];
	$_SESSION['namaAK'] = $namaAK;
	
	$Pailit_Pengadilan = $_POST['pengadilan5'];
	$_SESSION['pengadilan5'] = $Pailit_Pengadilan;
	
	
	$Nama = $_POST['nama5'];
	$_SESSION['nama5'] = $Nama;
	
	$Alamat = $_POST['alamat5'];
	$_SESSION['alamat5'] = $Alamat;
	
	$Kod_pos = $_POST['kodeP5'];
	$_SESSION['kodeP5'] = $Kod_pos;
	
	$no_tl = $_POST['tl5'];
	$_SESSION['tl5'] = $no_tl;
	
	$Hubungan = $_POST['hub5'];
	$_SESSION['hub5'] = $Hubungan;
	
	
	$Pekerjaan = $_POST['kerja5'];
	$_SESSION['kerja5'] = $Pekerjaan;
	
	$lainnyaPKJ = $_POST['lainPKJ5'];
	$_SESSION['lainPKJ5'] = $lainnyaPKJ;

	$Nama_Perusahaan = $_POST['usaha5'];
	$_SESSION['usaha5'] = $Nama_Perusahaan;

	$Bidang_Usaha = $_POST['bidang5'];
	$_SESSION['bidang5'] = $Bidang_Usaha;

	$Jabatan = $_POST['jabat5'];
	$_SESSION['jabat5'] = $Jabatan;

	$Lama_Bekerja = $_POST['lama5'];
	$_SESSION['lama5'] = $Lama_Bekerja;

	$Kantor_Sebelum = $_POST['kantor5'];
	$_SESSION['kantor5'] = $Kantor_Sebelum;

	$Alamat_Kantor = $_POST['alamatK5'];
	$_SESSION['alamatK5'] = $Alamat_Kantor;

	$Kd_Pos = $_POST['kdpos5'];
	$_SESSION['kdpos5'] = $Kd_Pos;

	$No_Tlp = $_POST['notel5'];
	$_SESSION['notel5'] = $No_Tlp;

	$no_fx = $_POST['fx5'];
	$_SESSION['fx5'] = $no_fx;
	
	
	$Penghasilan_Tahun = $_POST['hasil5'];
	$_SESSION['hasil5'] = $Penghasilan_Tahun;
	
	$Rumah_Lokasi = $_POST['rulok5'];
	$_SESSION['rulok5'] = $Rumah_Lokasi;
	
	$Nilai_NJOP = $_POST['NJOP5'];
	$_SESSION['NJOP5'] = $Nilai_NJOP;

	$Deposit_Bank = $_POST['deposit5'];
	$_SESSION['deposit5'] = $Deposit_Bank;

	$Jumlah = $_POST['jml5'];
	$_SESSION['jml5'] = $Jumlah;

	$Lainnya = $_POST['lain5'];
	$_SESSION['lain5'] = $Lainnya;

	$nam_Bank = $_POST['bank5'];
	$_SESSION['bank5'] = $nam_Bank;

	$Cabang = $_POST['cab5'];
	$_SESSION['cab5'] = $Cabang;

	$No_A_C = $_POST['noAC5'];
	$_SESSION['noAC5'] = $No_A_C;

	$No_tel = $_POST['tel5'];
	$_SESSION['tel5'] = $No_tel;

	$Jenis_Rekening = $_POST['JenisR5'];
	$_SESSION['JenisR5'] = $Jenis_Rekening;

	$lainnyaJR1 = $_POST['lainJR15'];
	$_SESSION['lainJR15'] = $lainnyaJR1;

	$Nama_bank = $_POST['nabank5'];
	$_SESSION['nabank5'] = $Nama_bank;

	$caban = $_POST['caba5'];
	$_SESSION['caba5'] = $caban;

	$No_AC = $_POST['ac5'];
	$_SESSION['ac5'] = $No_AC;

	$NoTlp = $_POST['tlp5'];
	$_SESSION['tlp5'] = $NoTlp;

	$Jns_Rekening = $_POST['reken5'];
	$_SESSION['reken5'] = $Jns_Rekening;

	$lainnyaJR2 =$_POST['lainJR25'];
	$_SESSION['lainJR25'] = $lainnyaJR2;

$c5=$_POST['tgl5'];
$d5=$_POST['bln5'];
$e5=$_POST['thn5'];
//$tgl5 = "$c5 - $d5 - $e5";
//$kode_nasabah = $_POST['kode']; 
$Nama_lengkap = $_POST['namaL5'];
$Tempat_lahir = $_POST['tempat5'];
//$Tanggal_Lahir = "$tgl5";
$No_Identitas = $_POST['id5'];
$No_NPWP = $_POST['NPWP5'];
$Jenis_Kelamin = $_POST['jk5'];
$Nama_Istri_Suami = $_POST['namaIS5'];
$Nama_Ibu_Kandung = $_POST['namaIK5'];
$Status_Perkawinan = $_POST['perkawinan5'];
$Alamat_Rumah = $_POST['alamat4'];
$kde_Pos = $_POST['pos5'];
$No_telp = $_POST['telp5'];
$_SESSION['No_telp'] = $No_telp;
$No_fax = $_POST['fax5'];
$No_Telp_hp = $_POST['hp5'];
$Status_Rumah = $_POST['statusR5'];
$lainnyaSR = $_POST['lainSR5'];
$Tujuan_Rekening = $_POST['tupemburek'];
$lainnyaTR = $_POST['lainTR5'];
$Pengalaman_Investasi = $_POST['investasi5'];
$bidanginv = $_POST['bidanginv'];
$Anggota_Keluarga = $_POST['anggotaK5'];
$namaAK = $_POST['namaAK'];
$Pailit_Pengadilan = $_POST['pengadilan5'];

$Nama = $_POST['nama5'];
$Alamat = $_POST['alamat5'];
$Kod_pos = $_POST['kodeP5'];
$no_tl = $_POST['tl5'];
$Hubungan = $_POST['hub5'];

$Pekerjaan = $_POST['kerja5'];
$lainnyaPKJ = $_POST['lainPKJ5'];
$Nama_Perusahaan = $_POST['usaha5'];
$Bidang_Usaha = $_POST['bidang5'];
$Jabatan = $_POST['jabat5'];
$Lama_Bekerja = $_POST['lama5'];
$Kantor_Sebelum = $_POST['kantor5'];
$Alamat_Kantor = $_POST['alamatK5'];
$Kd_Pos = $_POST['kdpos5'];
$No_Tlp = $_POST['notel5'];
$no_fx = $_POST['fx5'];

$Penghasilan_Tahun = $_POST['hasil5'];
$Rumah_Lokasi = $_POST['rulok5'];
$Nilai_NJOP = $_POST['NJOP5'];
$Deposit_Bank = $_POST['deposit5'];
$Jumlah = $_POST['jml5'];
$Lainnya = $_POST['lain5'];

$nam_Bank = $_POST['bank5'];
$Cabang = $_POST['cab5'];
$No_A_C = $_POST['noAC5'];
$No_tel = $_POST['tel5'];
$Jenis_Rekening = $_POST['JenisR5'];
$lainnyaJR1 = $_POST['lainJR15'];
$Nama_bank = $_POST['nabank5'];
$caban = $_POST['caba5'];
$No_AC = $_POST['ac5'];
$NoTlp = $_POST['tlp5'];
$Jns_Rekening = $_POST['reken5'];
$lainnyaJR2 =$_POST['lainJR25'];

$Rekening_Tagihan = $_FILES['tagihan5']['type'];
$Rekening_Tagihansize = $_FILES['tagihan5']['size'];
$Rekening_Telp = $_FILES['rektel5']['type'];
$Rekening_Telpsize = $_FILES['rektel5']['size'];
$skb5 = $_FILES['tmbh15']['type'];
$skb5size = $_FILES['tmbh15']['size'];
$skp5 = $_FILES['tmbh25']['type'];
$skp5size = $_FILES['tmbh25']['size'];
$Foto_Kini = $_FILES['kini5']['type'];
$Foto_Kinisize = $_FILES['kini5']['size'];
$Foto_KTP = $_FILES['KTP5']['type'];
$Foto_KTPsize = $_FILES['KTP5']['size'];

$tgl = new datetime('Asia/Jakarta');
$Tanggal = $tgl->format('d-m-Y');

$tgl = new datetime('Asia/Jakarta');
$waktu = $tgl->format('H:i:s');

$limit_size=1048576;


//echo '<pre>';
//print_r( $_SESSION );
//echo '</pre>';

$newid=$_SESSION['newid'];
$namafolder="".$newid."-".$Nama_lengkap."/";

$tagihan5 = $namafolder . basename($_FILES['tagihan5']['name']);
$rektel5 = $namafolder . basename($_FILES['rektel5']['name']);
$skb5 = $namafolder . basename($_FILES['tmbh15']['name']);
$skp5 = $namafolder . basename($_FILES['tmbh25']['name']);
$kini5 = $namafolder . basename($_FILES['kini5']['name']);
$KTP5 = $namafolder . basename($_FILES['KTP5']['name']);

$lihat1=substr($tagihan5, -4);
$lihat2=substr($rektel5 , -4);
$lihat3=substr($skb5, -4);
$lihat4=substr($skp5, -4);
$lihat5=substr($kini5 , -4);
$lihat6=substr($KTP5 , -4);

//print_r($lihat1);
//print_r($_FILES['tagihan5']);
//exit;


if($Rekening_Tagihansize > $limit_size || $Foto_Kinisize > $limit_size || $Foto_KTPsize > $limit_size || $Rekening_Telpsize > $limit_size || $skb5size > $limit_size || $skp5size > $limit_size){
	echo '<script>;
	alert("Ukuran Image Melebihi Maksimal yang ditentukan");
	window.location="../page5.php";</script>';
}
else {
if($lihat1==".png" || $lihat1==".PNG" || $lihat1==".JPG" || $lihat1=="JPEG" || $lihat1==".jpg" || $lihat1==".jpeg" || $lihat1==".jpe" || $lihat1==".pdf" || $lihat1==".JPE" || $lihat1==".PDF"){
	if($lihat5==".png" || $lihat5==".PNG" || $lihat5==".JPG" || $lihat5=="JPEG" || $lihat5==".jpg" || $lihat5==".jpeg" || $lihat5==".jpe" || $lihat5==".pdf" || $lihat5==".JPE" || $lihat5==".PDF"){
		if($lihat6==".png" || $lihat6==".PNG" || $lihat6==".JPG" || $lihat6=="JPEG" || $lihat6 ==".jpg" || $lihat6 ==".jpeg" || $lihat6 ==".jpe" || $lihat6 ==".pdf" || $lihat6 ==".JPE" || $lihat6 ==".PDF"){
				
				$newid=$_SESSION['newid'];
				mkdir("".$newid."-".$Nama_lengkap."");
				$namafolder="".$newid."-".$Nama_lengkap."/";
				$tagihan5 = $namafolder . basename($_FILES['tagihan5']['name']);
				$rektel5 = $namafolder . basename($_FILES['rektel5']['name']);
				$skb5 = $namafolder . basename($_FILES['tmbh15']['name']);
				$skp5 = $namafolder . basename($_FILES['tmbh25']['name']);
				$kini5 = $namafolder . basename($_FILES['kini5']['name']);
				$KTP5 = $namafolder . basename($_FILES['KTP5']['name']);

				move_uploaded_file($_FILES['tagihan5']['tmp_name'], $tagihan5);
				move_uploaded_file($_FILES['rektel5']['tmp_name'], $rektel5);
				move_uploaded_file($_FILES['tmbh15']['tmp_name'], $skb5);
				move_uploaded_file($_FILES['tmbh25']['tmp_name'], $skp5);
				move_uploaded_file($_FILES['kini5']['tmp_name'], $kini5);
				move_uploaded_file($_FILES['KTP5']['tmp_name'], $KTP5);

				$_SESSION['tagihan'] = $tagihan5;
				$_SESSION['rektel'] = $rektel5;
				$_SESSION['skb5'] = $skb5;
				$_SESSION['skp5'] = $skp5;
				$_SESSION['kini'] = $kini5;
				$_SESSION['ktp'] = $KTP5;
				
				$Menerima = $_POST['nerima5'];
				$query_str = "update formulir5 set Nama_Lengkap='$Nama_lengkap',Tempat_lahir='$Tempat_lahir',Tanggal_Lahir='$c5',Bulan_lahir='$d5',Tahun_lahir='$e5',No_NPWP='$No_NPWP',
							Jenis_Kelamin='$Jenis_Kelamin',Namaistrisuami='$Nama_Istri_Suami',Nama_Ibu_Kandung='$Nama_Ibu_Kandung',Status_Perkawinan='$Status_Perkawinan',Alamat_Rumah='$Alamat_Rumah',
							kde_Pos='$kde_Pos',No_telp='$No_telp',No_fax='$No_fax',Notelphp='$No_Telp_hp',Status_Rumah='$Status_Rumah',lainnyaSR='$lainnyaSR',Tujuan_Rekening='$Tujuan_Rekening',
							lainnyaTR='$lainnyaTR',Pengalaman_Investasi='$Pengalaman_Investasi',bidanginv='$bidanginv',Anggota_Keluarga='$Anggota_Keluarga',namaAK='$namaAK',Pailit_Pengadilan='$Pailit_Pengadilan', 
							Nama='$Nama',Alamat='$Alamat',Kod_pos='$Kod_pos',no_tl='$no_tl',Hubungan='$Hubungan',Pekerjaan='$Pekerjaan',
							lainnyaPKJ='$lainnyaPKJ',Nama_Perusahaan='$Nama_Perusahaan',Bidang_Usaha='$Bidang_Usaha',Jabatan='$Jabatan',Lama_Bekerja='$Lama_Bekerja',Kantor_Sebelum='$Kantor_Sebelum',
							Alamat_Kantor='$Alamat_Kantor',Kd_Pos='$Kd_Pos',No_Tlp='$No_Tlp',no_fx='$no_fx',Penghasilan_Tahun='$Penghasilan_Tahun',Rumah_Lokasi='$Rumah_Lokasi',
							Nilai_NJOP='$Nilai_NJOP',Deposit_Bank='$Deposit_Bank',Jumlah='$Jumlah',Lainnya='$Lainnya',nam_Bank='$nam_Bank',Cabang='$Cabang', 
							Noac='$No_A_C',No_tel='$No_tel',Jenis_Rekening='$Jenis_Rekening',lainnyaJR1='$lainnyaJR1',Nama_bank='$Nama_bank',caban='$caban',
							No_AC='$No_AC',NoTlp='$NoTlp',Jns_Rekening='$Jns_Rekening',lainnyaJR2='$lainnyaJR2',Rekening_Tagihan='$tagihan5',Rekening_Telp='$rektel5',skb='$skb5',skp='$skp5',
							Foto_Kini='$kini5',Foto_KTP='$KTP5',Menerima='$Menerima',Tanggal='$Tanggal' where id='$newid'";
							
				$query = mysqli_query($connect,$query_str) or die (mysqli_error());
				
			
			if($Menerima== "Ya")
			{
				if($_SESSION['page1'] == "KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250" || $_SESSION['page1'] == "KONTRAK_BERJANGKA_KAKAO")
				{
					echo "<script>document.location='../page601.php';</script>";
					echo "#337";
					
				}
				else if($_SESSION['page1'] == "FOREX_0,1_LOT" || $_SESSION['page1'] == "FOREX_REGULAR" 
				|| $_SESSION['page1'] == "INDEX_USD_0,1_LOT" || $_SESSION['page1'] == "INDEX_USD_REGULAR" || $_SESSION['page1'] == "INDEX_IDR_0,1_LOT" || $_SESSION['page1'] == "INDEX_IDR_REGULAR")
				{
					echo "<script>document.location='../page602.php';</script>";
					echo "#344";
				}
				else
				{
					echo '<script>;
					alert("Anda Belum mengisi page 1");
					window.location="../index.php";</script>';
				}
			}
		}
		else{
			echo '<script>;
					alert("Format gambar anda tidak sesuai");
					window.location="../page5.php";</script>';
		}
	}
	else{
		echo '<script>;
			alert("Format gambar anda tidak sesuai");
			window.location="../page5.php";</script>';
	}
}
elseif($lihat2==".png" || $lihat2==".PNG" || $lihat2==".JPG" || $lihat2=="JPEG" || $lihat2==".jpg" || $lihat2==".jpeg" || $lihat2==".jpe" || $lihat2==".pdf" || $lihat2==".JPE" || $lihat2==".PDF"){
	if($lihat5==".png" || $lihat5==".PNG" || $lihat5==".JPG" || $lihat5=="JPEG" || $lihat5==".jpg" || $lihat5==".jpeg" || $lihat5==".jpe" || $lihat5==".pdf" || $lihat5==".JPE" || $lihat5==".PDF"){
		if($lihat6==".png" || $lihat6==".PNG" || $lihat6==".JPG" || $lihat6=="JPEG" || $lihat6 ==".jpg" || $lihat6 ==".jpeg" || $lihat6 ==".jpe" || $lihat6 ==".pdf" || $lihat6 ==".JPE" || $lihat6 ==".PDF"){
		
				$newid=$_SESSION['newid'];
				mkdir("".$newid."-".$Nama_lengkap."");
				$namafolder="".$newid."-".$Nama_lengkap."/";
				
				$tagihan5 = $namafolder . basename($_FILES['tagihan5']['name']);
				$rektel5 = $namafolder . basename($_FILES['rektel5']['name']);
				$skb5 = $namafolder . basename($_FILES['tmbh15']['name']);
				$skp5 = $namafolder . basename($_FILES['tmbh25']['name']);
				$kini5 = $namafolder . basename($_FILES['kini5']['name']);
				$KTP5 = $namafolder . basename($_FILES['KTP5']['name']);

				move_uploaded_file($_FILES['tagihan5']['tmp_name'], $tagihan5);
				move_uploaded_file($_FILES['rektel5']['tmp_name'], $rektel5);
				move_uploaded_file($_FILES['tmbh15']['tmp_name'], $skb5);
				move_uploaded_file($_FILES['tmbh25']['tmp_name'], $skp5);
				move_uploaded_file($_FILES['kini5']['tmp_name'], $kini5);
				move_uploaded_file($_FILES['KTP5']['tmp_name'], $KTP5);
				
				$_SESSION['tagihan'] = $tagihan5;
				$_SESSION['rektel'] = $rektel5;
				$_SESSION['skb5'] = $skb5;
				$_SESSION['skp5'] = $skp5;
				$_SESSION['kini'] = $kini5;
				$_SESSION['ktp'] = $KTP5;
				
				$Menerima = $_POST['nerima5'];
				$query = mysqli_query($connect,"update formulir5 set Nama_Lengkap='$Nama_lengkap',Tempat_lahir='$Tempat_lahir',Tanggal_Lahir='$c5',Bulan_lahir='$d5',Tahun_lahir='$e5',No_NPWP='$No_NPWP',
							Jenis_Kelamin='$Jenis_Kelamin',Namaistrisuami='$Nama_Istri_Suami',Nama_Ibu_Kandung='$Nama_Ibu_Kandung',Status_Perkawinan='$Status_Perkawinan',Alamat_Rumah='$Alamat_Rumah',
							kde_Pos='$kde_Pos',No_telp='$No_telp',No_fax='$No_fax',Notelphp='$No_Telp_hp',Status_Rumah='$Status_Rumah',lainnyaSR='$lainnyaSR',Tujuan_Rekening='$Tujuan_Rekening',
							lainnyaTR='$lainnyaTR',Pengalaman_Investasi='$Pengalaman_Investasi',bidanginv='$bidanginv',Anggota_Keluarga='$Anggota_Keluarga',namaAK='$namaAK',Pailit_Pengadilan='$Pailit_Pengadilan', 
							Nama='$Nama',Alamat='$Alamat',Kod_pos='$Kod_pos',no_tl='$no_tl',Hubungan='$Hubungan',Pekerjaan='$Pekerjaan',
							lainnyaPKJ='$lainnyaPKJ',Nama_Perusahaan='$Nama_Perusahaan',Bidang_Usaha='$Bidang_Usaha',Jabatan='$Jabatan',Lama_Bekerja='$Lama_Bekerja',Kantor_Sebelum='$Kantor_Sebelum',
							Alamat_Kantor='$Alamat_Kantor',Kd_Pos='$Kd_Pos',No_Tlp='$No_Tlp',no_fx='$no_fx',Penghasilan_Tahun='$Penghasilan_Tahun',Rumah_Lokasi='$Rumah_Lokasi',
							Nilai_NJOP='$Nilai_NJOP',Deposit_Bank='$Deposit_Bank',Jumlah='$Jumlah',Lainnya='$Lainnya',nam_Bank='$nam_Bank',Cabang='$Cabang', 
							Noac='$No_A_C',No_tel='$No_tel',Jenis_Rekening='$Jenis_Rekening',lainnyaJR1='$lainnyaJR1',Nama_bank='$Nama_bank',caban='$caban',
							No_AC='$No_AC',NoTlp='$NoTlp',Jns_Rekening='$Jns_Rekening',lainnyaJR2='$lainnyaJR2',Rekening_Tagihan='$tagihan5',Rekening_Telp='$rektel5',skb='$skb5',skp='$skp5',
							Foto_Kini='$kini5',Foto_KTP='$KTP5',Menerima='$Menerima',Tanggal='$Tanggal' where id='$newid'") or die (mysql_error());
			
			if($Menerima== "Ya")
			{
				if($_SESSION['page1'] == "KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250" || $_SESSION['page1'] == "KONTRAK_BERJANGKA_KAKAO")
				{
					echo "<script>document.location='../page601.php';</script>";
					echo "#414";
				}
				else if($_SESSION['page1'] == "FOREX_0,1_LOT" || $_SESSION['page1'] == "FOREX_REGULAR" 
				|| $_SESSION['page1'] == "INDEX_USD_0,1_LOT" || $_SESSION['page1'] == "INDEX_USD_REGULAR" || $_SESSION['page1'] == "INDEX_IDR_0,1_LOT" || $_SESSION['page1'] == "INDEX_IDR_REGULAR")
				{
					echo "<script>document.location='../page602.php';</script>";
					echo "#420";
				}
				else
				{
					echo '<script>;
					alert("Anda Belum mengisi page 1");
					window.location="../index.php";</script>';
				}
			}
		}
		else{
			echo '<script>;
					alert("Format gambar anda tidak sesuai");
					window.location="../page5.php";</script>';
		}
	}
	else{
		echo '<script>;
			alert("Format gambar anda tidak sesuai");
			window.location="../page5.php";</script>';
	}
}
elseif($lihat3==".png" || $lihat3==".PNG" || $lihat3==".JPG" || $lihat3=="JPEG" || $lihat3==".jpg" || $lihat3==".jpeg" || $lihat3==".jpe" || $lihat3==".pdf"|| $lihat3==".JPE" || $lihat3==".PDF"){
	if($lihat5==".png" || $lihat5==".PNG" || $lihat5==".JPG" || $lihat5=="JPEG" || $lihat5==".jpg" || $lihat5==".jpeg" || $lihat5==".jpe" || $lihat5==".pdf" || $lihat5==".JPE" || $lihat5==".PDF"){
		if($lihat6==".png" || $lihat6==".PNG" || $lihat6==".JPG" || $lihat6=="JPEG" || $lihat6 ==".jpg" || $lihat6 ==".jpeg" || $lihat6 ==".jpe" || $lihat6 ==".pdf" || $lihat6 ==".JPE" || $lihat6 ==".PDF"){
			
				$newid=$_SESSION['newid'];
				mkdir("".$newid."-".$Nama_lengkap."");
				$namafolder="".$newid."-".$Nama_lengkap."/";
				
				$tagihan5 = $namafolder . basename($_FILES['tagihan5']['name']);
				$rektel5 = $namafolder . basename($_FILES['rektel5']['name']);
				$skb5 = $namafolder . basename($_FILES['tmbh15']['name']);
				$skp5 = $namafolder . basename($_FILES['tmbh25']['name']);
				$kini5 = $namafolder . basename($_FILES['kini5']['name']);
				$KTP5 = $namafolder . basename($_FILES['KTP5']['name']);

				move_uploaded_file($_FILES['tagihan5']['tmp_name'], $tagihan5);
				move_uploaded_file($_FILES['rektel5']['tmp_name'], $rektel5);
				move_uploaded_file($_FILES['tmbh15']['tmp_name'], $skb5);
				move_uploaded_file($_FILES['tmbh25']['tmp_name'], $skp5);
				move_uploaded_file($_FILES['kini5']['tmp_name'], $kini5);
				move_uploaded_file($_FILES['KTP5']['tmp_name'], $KTP5);

				$_SESSION['tagihan'] = $tagihan5;
				$_SESSION['rektel'] = $rektel5;
				$_SESSION['skb5'] = $skb5;
				$_SESSION['skp5'] = $skp5;
				$_SESSION['kini'] = $kini5;
				$_SESSION['ktp'] = $KTP5;
				
				$Menerima = $_POST['nerima5'];
				$query = mysqli_query($connect,"update formulir5 set Nama_Lengkap='$Nama_lengkap',Tempat_lahir='$Tempat_lahir',Tanggal_Lahir='$c5',Bulan_lahir='$d5',Tahun_lahir='$e5',No_NPWP='$No_NPWP',
							Jenis_Kelamin='$Jenis_Kelamin',Namaistrisuami='$Nama_Istri_Suami',Nama_Ibu_Kandung='$Nama_Ibu_Kandung',Status_Perkawinan='$Status_Perkawinan',Alamat_Rumah='$Alamat_Rumah',
							kde_Pos='$kde_Pos',No_telp='$No_telp',No_fax='$No_fax',Notelphp='$No_Telp_hp',Status_Rumah='$Status_Rumah',lainnyaSR='$lainnyaSR',Tujuan_Rekening='$Tujuan_Rekening',
							lainnyaTR='$lainnyaTR',Pengalaman_Investasi='$Pengalaman_Investasi',bidanginv='$bidanginv',Anggota_Keluarga='$Anggota_Keluarga',namaAK='$namaAK',Pailit_Pengadilan='$Pailit_Pengadilan', 
							Nama='$Nama',Alamat='$Alamat',Kod_pos='$Kod_pos',no_tl='$no_tl',Hubungan='$Hubungan',Pekerjaan='$Pekerjaan',
							lainnyaPKJ='$lainnyaPKJ',Nama_Perusahaan='$Nama_Perusahaan',Bidang_Usaha='$Bidang_Usaha',Jabatan='$Jabatan',Lama_Bekerja='$Lama_Bekerja',Kantor_Sebelum='$Kantor_Sebelum',
							Alamat_Kantor='$Alamat_Kantor',Kd_Pos='$Kd_Pos',No_Tlp='$No_Tlp',no_fx='$no_fx',Penghasilan_Tahun='$Penghasilan_Tahun',Rumah_Lokasi='$Rumah_Lokasi',
							Nilai_NJOP='$Nilai_NJOP',Deposit_Bank='$Deposit_Bank',Jumlah='$Jumlah',Lainnya='$Lainnya',nam_Bank='$nam_Bank',Cabang='$Cabang', 
							Noac='$No_A_C',No_tel='$No_tel',Jenis_Rekening='$Jenis_Rekening',lainnyaJR1='$lainnyaJR1',Nama_bank='$Nama_bank',caban='$caban',
							No_AC='$No_AC',NoTlp='$NoTlp',Jns_Rekening='$Jns_Rekening',lainnyaJR2='$lainnyaJR2',Rekening_Tagihan='$tagihan5',Rekening_Telp='$rektel5',skb='$skb5',skp='$skp5',
							Foto_Kini='$kini5',Foto_KTP='$KTP5',Menerima='$Menerima',Tanggal='$Tanggal' where id='$newid'") or die (mysql_error());
			
			if($Menerima== "Ya")
			{
				if($_SESSION['page1'] == "KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250" || $_SESSION['page1'] == "KONTRAK_BERJANGKA_KAKAO")
				{
					//echo "<script>document.location='../page601.php';</script>";
					echo "#490";
				}
				else if($_SESSION['page1'] == "FOREX_0,1_LOT" || $_SESSION['page1'] == "FOREX_REGULAR" 
				|| $_SESSION['page1'] == "INDEX_USD_0,1_LOT" || $_SESSION['page1'] == "INDEX_USD_REGULAR" || $_SESSION['page1'] == "INDEX_IDR_0,1_LOT" || $_SESSION['page1'] == "INDEX_IDR_REGULAR")
				{
					//echo "<script>document.location='../page602.php';</script>";
					echo "#496";
				}
				else
				{
					echo '<script>;
					alert("Anda Belum mengisi page 1");
					window.location="../index.php";</script>';
				}
			}
		}
		else{
			echo '<script>;
					alert("Format gambar anda tidak sesuai");
					window.location="../page5.php";</script>';
		}
	}
	else{
		echo '<script>;
			alert("Format gambar anda tidak sesuai");
			window.location="../page5.php";</script>';
	}
}
elseif($lihat4==".png" || $lihat4==".PNG" || $lihat4==".JPG" || $lihat4=="JPEG" || $lihat4==".jpeg" || $lihat4==".jpg" || $lihat4==".jpe" || $lihat4==".pdf" || $lihat4==".JPE" || $lihat4==".PDF"){
	if($lihat5==".png" || $lihat5==".PNG" || $lihat5==".JPG" || $lihat5=="JPEG" || $lihat5==".jpg" || $lihat5==".jpeg" || $lihat5==".jpe" || $lihat5==".pdf" || $lihat5==".JPE" || $lihat5==".PDF"){
		if($lihat6==".png" || $lihat6==".PNG" || $lihat6==".JPG" || $lihat6=="JPEG" || $lihat6 ==".jpg" || $lihat6 ==".jpeg" || $lihat6 ==".jpe" || $lihat6 ==".pdf" || $lihat6 ==".JPE" || $lihat6 ==".PDF"){
			
				$newid=$_SESSION['newid'];
				mkdir("".$newid."-".$Nama_lengkap."");
				$namafolder="".$newid."-".$Nama_lengkap."/";
				
				$tagihan5 = $namafolder . basename($_FILES['tagihan5']['name']);
				$rektel5 = $namafolder . basename($_FILES['rektel5']['name']);
				$skb5 = $namafolder . basename($_FILES['tmbh15']['name']);
				$skp5 = $namafolder . basename($_FILES['tmbh25']['name']);
				$kini5 = $namafolder . basename($_FILES['kini5']['name']);
				$KTP5 = $namafolder . basename($_FILES['KTP5']['name']);

				move_uploaded_file($_FILES['tagihan5']['tmp_name'], $tagihan5);
				move_uploaded_file($_FILES['rektel5']['tmp_name'], $rektel5);
				move_uploaded_file($_FILES['tmbh15']['tmp_name'], $skb5);
				move_uploaded_file($_FILES['tmbh25']['tmp_name'], $skp5);
				move_uploaded_file($_FILES['kini5']['tmp_name'], $kini5);
				move_uploaded_file($_FILES['KTP5']['tmp_name'], $KTP5);
				
				$_SESSION['tagihan'] = $tagihan5;
				$_SESSION['skb5'] = $skb5;
				$_SESSION['skp5'] = $skp5;
				$_SESSION['rektel'] = $rektel5;
				$_SESSION['kini'] = $kini5;
				$_SESSION['ktp'] = $KTP5;

				$Menerima = $_POST['nerima5'];

				$query = mysqli_query($connect,"update formulir5 set Nama_Lengkap='$Nama_lengkap',Tempat_lahir='$Tempat_lahir',Tanggal_Lahir='$c5',Bulan_lahir='$d5',Tahun_lahir='$e5',No_NPWP='$No_NPWP',
							Jenis_Kelamin='$Jenis_Kelamin',Namaistrisuami='$Nama_Istri_Suami',Nama_Ibu_Kandung='$Nama_Ibu_Kandung',Status_Perkawinan='$Status_Perkawinan',Alamat_Rumah='$Alamat_Rumah',
							kde_Pos='$kde_Pos',No_telp='$No_telp',No_fax='$No_fax',Notelphp='$No_Telp_hp',Status_Rumah='$Status_Rumah',lainnyaSR='$lainnyaSR',Tujuan_Rekening='$Tujuan_Rekening',
							lainnyaTR='$lainnyaTR',Pengalaman_Investasi='$Pengalaman_Investasi',bidanginv='$bidanginv',Anggota_Keluarga='$Anggota_Keluarga',namaAK='$namaAK',Pailit_Pengadilan='$Pailit_Pengadilan', 
							Nama='$Nama',Alamat='$Alamat',Kod_pos='$Kod_pos',no_tl='$no_tl',Hubungan='$Hubungan',Pekerjaan='$Pekerjaan',
							lainnyaPKJ='$lainnyaPKJ',Nama_Perusahaan='$Nama_Perusahaan',Bidang_Usaha='$Bidang_Usaha',Jabatan='$Jabatan',Lama_Bekerja='$Lama_Bekerja',Kantor_Sebelum='$Kantor_Sebelum',
							Alamat_Kantor='$Alamat_Kantor',Kd_Pos='$Kd_Pos',No_Tlp='$No_Tlp',no_fx='$no_fx',Penghasilan_Tahun='$Penghasilan_Tahun',Rumah_Lokasi='$Rumah_Lokasi',
							Nilai_NJOP='$Nilai_NJOP',Deposit_Bank='$Deposit_Bank',Jumlah='$Jumlah',Lainnya='$Lainnya',nam_Bank='$nam_Bank',Cabang='$Cabang', 
							Noac='$No_A_C',No_tel='$No_tel',Jenis_Rekening='$Jenis_Rekening',lainnyaJR1='$lainnyaJR1',Nama_bank='$Nama_bank',caban='$caban',
							No_AC='$No_AC',NoTlp='$NoTlp',Jns_Rekening='$Jns_Rekening',lainnyaJR2='$lainnyaJR2',skp='$skp5',
							Foto_Kini='$kini5',Foto_KTP='$KTP5',Menerima='$Menerima',Tanggal='$Tanggal' where id='$newid'") or die (mysql_error());
							
			if($Menerima== "Ya")
			{
				if($_SESSION['page1'] == "KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250" || $_SESSION['page1'] == "KONTRAK_BERJANGKA_KAKAO")
				{
					echo "<script>document.location='../page601.php';</script>";
					echo "#567";
				}
				else if($_SESSION['page1'] == "FOREX_0,1_LOT" || $_SESSION['page1'] == "FOREX_REGULAR" 
				|| $_SESSION['page1'] == "INDEX_USD_0,1_LOT" || $_SESSION['page1'] == "INDEX_USD_REGULAR" || $_SESSION['page1'] == "INDEX_IDR_0,1_LOT" || $_SESSION['page1'] == "INDEX_IDR_REGULAR")
				{
					echo "<script>document.location='../page602.php';</script>";
					echo "#573";
				}
				else
				{
					echo '<script>;
					alert("Anda Belum mengisi page 1");
					window.location="../index.php";</script>';
				}
			}
		}
		else{
			echo '<script>;
					alert("Format gambar anda tidak sesuai");
					window.location="../page5.php";</script>';
		}
	}
	else{
		echo '<script>;
			alert("Format gambar anda tidak sesuai");
			window.location="../page5.php";</script>';
	}
}

else{
echo '<script>;
		alert("Format gambar anda tidak sesuai");
		window.location="../page5.php";</script>';
}
}
?>