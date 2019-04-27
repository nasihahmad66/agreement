<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();
include('config.php');

$jenis="AGG-";
$query = "SELECT max(id) as maxID FROM formulir1 WHERE id LIKE '$jenis%'";

$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$idMax = $data['maxID'];
$noUrut = (int) substr($idMax, 5, 10);
$noUrut++;
$newID = $jenis . sprintf("%010s", $noUrut);

$_SESSION['newid'] = $newID;


$Kode_AE = $_POST['kodeae'];
//echo "kodeae".$Kode_AE;
$_SESSION['kodeae'] = $Kode_AE;

$Nama_Lengkap = $_POST['nama'];
//echo "Nama Lengkap".$Nama_Lengkap;
$_SESSION['nama'] = $Nama_Lengkap;
//echo $_SESSION['nama'];

$Tempat_Lahir = $_POST['tempat'];
//echo "Tempat_Lahir ".$Tempat_Lahir;
$_SESSION['tempat'] = $Tempat_Lahir;
//echo $_SESSION['tempat'];

$thn=$_POST['thn1'];
//echo "thn".$thn;
$c= substr($thn, 0, 2);
$d= substr($thn, 3, 2);
$e= substr($thn, 6, 4);
$_SESSION['tgl1'] = $c;
$_SESSION['bln1'] = $d;
$_SESSION['thn1'] = $e;

$Alamat_Rumah = $_POST['alamat'];
$_SESSION['alamat'] = $Alamat_Rumah;
//echo $Alamat_Rumah;
//echo $_SESSION['alamat'];

$Kode_Pos = $_POST['pos'];
//echo $Kode_Pos;
$_SESSION['pos'] = $Kode_Pos;
//echo $_SESSION['pos'];

$perkawinan = $_POST['status'];
$_SESSION['status'] = $perkawinan;
//echo $_SESSION['status'];

$email = $_POST['email'];
//echo $email;
$_SESSION['email'] = $email;
//echo $_SESSION['email'];

$No_Identitas = $_POST['id'];
//echo $No_Identitas;
$_SESSION['id'] = $No_Identitas;
//echo $_SESSION['id'];

$No_Telp = $_POST['telepon'];
//echo $No_Telp;
$_SESSION['telepon'] = $No_Telp;
//echo $_SESSION['telepon'];

//echo $_SESSION['kerja'];

$Transaksi = $_POST['a'];
//echo $Transaksi;
$_SESSION['pengalaman'] = $Transaksi;
$sebutkan = $_POST['sebut']; 
//echo $sebutkan;
$_SESSION['sebut'] = $sebutkan;

$p=$_POST['page'];
$_SESSION['page'] = $p;

$p=$_POST['forexoption'];
$_SESSION['forexoption'] = $p;

$ip=$_SERVER['REMOTE_ADDR'];
$_SESSION['ip'] = $ip;

$Menerima = '';
$_SESSION['radio2'] = $Menerima;
$Tanggal = '';
$_SESSION['t1'] = $Tanggal;

$No_Demo = 0;
$_SESSION['demo'] = $No_Demo;
$Pialang = '';
$_SESSION['pialang'] = $Pialang;

$No_NPWP = '';
$_SESSION['NPWP5'] = $No_NPWP;

$Jenis_Kelamin = '';
$_SESSION['jk5'] = $Jenis_Kelamin;
$Nama_Istri_Suami = '';
$_SESSION['namaIS5'] = $Nama_Istri_Suami;
$Nama_Ibu_Kandung = '';
$_SESSION['namaIK5'] = $Nama_Ibu_Kandung;
$No_telp = '';
$_SESSION['telp5'] = $No_telp;
$No_fax = '';
$_SESSION['fax5'] = $No_fax;
$Status_Rumah = '';
$_SESSION['statusR5'] = $Status_Rumah;
$lainnyaSR = '';
$_SESSION['lainSR5'] = $lainnyaSR;
$Tujuan_Rekening = '';
$_SESSION['rekening5'] = $Tujuan_Rekening;
$lainnyaTR = '';
$_SESSION['lainTR5'] = $lainnyaTR;
$Pengalaman_Investasi = '';
$_SESSION['investasi5'] = $Pengalaman_Investasi;
$bidanginv = '';
$_SESSION['bidanginv'] = $bidanginv;
$Anggota_Keluarga = '';
$_SESSION['anggotaK5'] = $Anggota_Keluarga;
$namaAK = '';
$_SESSION['namaAK'] = $namaAK;
$Pailit_Pengadilan = '';
$_SESSION['pengadilan5'] = $Pailit_Pengadilan;
$Nama = '';
$_SESSION['nama5'] = $Nama;
$Alamat = '';
$_SESSION['alamat5'] = $Alamat;
$Kod_pos = 0;
$_SESSION['kodeP5'] = $Kod_pos;
$no_tl = '';
$_SESSION['tl5'] = $no_tl;
$Hubungan = '';
$_SESSION['hub5'] = $Hubungan;
$Pekerjaan = '';
$_SESSION['kerja5'] = $Pekerjaan;
$lainnyaPKJ = '';
$_SESSION['lainPKJ5'] = $lainnyaPKJ;
$Nama_Perusahaan = '';
$_SESSION['usaha5'] = $Nama_Perusahaan;
$Bidang_Usaha = '';
$_SESSION['bidang5'] = $Bidang_Usaha;
$Jabatan = '';
$_SESSION['jabat5'] = $Jabatan;
$Lama_Bekerja = 0;
$_SESSION['lama5'] = $Lama_Bekerja;
$Kantor_Sebelum = '';
$_SESSION['kantor5'] = $Kantor_Sebelum;
$Alamat_Kantor = '';
$_SESSION['alamatK5'] = $Alamat_Kantor;
$Kd_Pos = 0;
$_SESSION['kdpos5'] = $Kd_Pos;
$No_Tlp = '';
$_SESSION['notel5'] = $No_Tlp;
$no_fx = '';
$_SESSION['fx5'] = $no_fx;
$Penghasilan_Tahun = '';
$_SESSION['hasil5'] = $Penghasilan_Tahun;
$Rumah_Lokasi = '';
$_SESSION['rulok5'] = $Rumah_Lokasi;
$Nilai_NJOP = '';
$_SESSION['NJOP5'] = $Nilai_NJOP;
$Deposit_Bank = '';
$_SESSION['deposit5'] = $Deposit_Bank;
$Jumlah = '';
$_SESSION['jml5'] = $Jumlah;
$Lainnya = '';
$_SESSION['lain5'] = $Lainnya;
$nam_Bank = '';
$_SESSION['bank5'] = $nam_Bank;
$Cabang = '';
$_SESSION['cab5'] = $Cabang;
$No_A_C = '';
$_SESSION['noAC5'] = $No_A_C;
$No_tel = '';
$_SESSION['tel5'] = $No_tel;
$Jenis_Rekening = '';
$_SESSION['JenisR5'] = $Jenis_Rekening;
$lainnyaJR1 = '';
$_SESSION['lainJR15'] = $lainnyaJR1;
$Nama_bank = '';
$_SESSION['nabank5'] = $Nama_bank;
$caban = '';
$_SESSION['caba5'] = $caban;
$No_AC = '';
$_SESSION['ac5'] = $No_AC;
$NoTlp = '';
$_SESSION['tlp5'] = $NoTlp;
$Jns_Rekening = '';
$_SESSION['reken5'] = $Jns_Rekening;
$lainnyaJR2 = '';
$_SESSION['lainJR25'] = $lainnyaJR2;
$tagihan5 = '';
$_SESSION['tagihan'] = $tagihan5;
$rektel5 = '';
$_SESSION['rektel'] = $rektel5;
$skb5 = '';
$_SESSION['skb5'] = $skb5;
$skp5 = '';
$_SESSION['skp5'] = $skp5;
$kini5 = '';
$_SESSION['kini'] = $kini5;
$KTP5 = '';
$_SESSION['ktp'] = $KTP5;

$a = '';
$_SESSION['1_1'] = $a;
$b = '';
$_SESSION['1_2'] = $b;
$c2 = '';
$_SESSION['1_3'] = $c2;
$d2 = '';
$_SESSION['1_4'] = $d2;
$e2 = '';
$_SESSION['1_5'] = $e2;
$f = '';
$_SESSION['1_6'] = $f;
$g = '';
$_SESSION['1_7'] = $g;
$h = '';
$_SESSION['1_8'] = $h;
$i = '';
$_SESSION['1_9'] = $i;
$j = '';
$_SESSION['1_10'] = $j;
$k = '';
$_SESSION['1_11'] = $k;
$l = '';
$_SESSION['1_12'] = $l;
$m = '';
$_SESSION['1_13'] = $m;
$n = '';
$_SESSION['1_14'] = $n;
$o = '';
$_SESSION['1_15'] = $o;
$p2 = '';
$_SESSION['1_16'] = $p2;

$hari1 = '';
$_SESSION['namahari'] = $hari1;
$tanggal1 = 0;
$_SESSION['tanggal'] = $tanggal1;
$bulan1 = '';
$_SESSION['bulan'] = $bulan1;
$tahun1 = 0;
$_SESSION['tahun'] = $tahun1;
$cek1 = '';
$_SESSION['cek1'] = $cek1;
$cek2 = '';
$_SESSION['cek2'] = $cek2;
$aa = '';
$_SESSION['checkbox16'] = $aa;
$bb = '';
$_SESSION['checkbox17'] = $bb;
$cc = '';
$_SESSION['checkbox18'] = $cc;
$dd = '';
$_SESSION['checkbox19'] = $dd;
$ee = '';
$_SESSION['checkbox20'] = $ee;
$ff = '';
$_SESSION['checkbox21'] = $ff;
$gg = '';
$_SESSION['checkbox22'] = $gg;
$hh = '';
$_SESSION['checkbox23'] = $hh;
$ii = '';
$_SESSION['checkbox24'] = $ii;
$jj = '';
$_SESSION['checkbox25'] = $jj;
$kk = '';
$_SESSION['checkbox26'] = $kk;
$ll = '';
$_SESSION['checkbox27'] = $ll;
$mm = '';
$_SESSION['checkbox28'] = $mm;
$nn = '';
$_SESSION['checkbox29'] = $nn;
$oo = '';
$_SESSION['checkbox30'] = $oo;
$pp = '';
$_SESSION['checkbox31'] = $pp;
$qq = '';
$_SESSION['checkbox32'] = $qq;
$rr = '';
$_SESSION['checkbox33'] = $rr;
$ss = '';
$_SESSION['checkbox34'] = $ss;
$tt = '';
$_SESSION['checkbox35'] = $tt;
$uu = '';
$_SESSION['checkbox36'] = $uu;
$vv = '';
$_SESSION['checkbox37'] = $vv;
$ww = '';
$_SESSION['checkbox38'] = $ww;
$xx = '';
$_SESSION['checkbox39'] = $xx;
$yy = '';
$_SESSION['checkbox40'] = $yy;
$zz = '';
$_SESSION['checkbox41'] = $zz;
$aaa = '';
$_SESSION['checkbox42'] = $aaa;
$bbb = '';
$_SESSION['checkbox43'] = $bbb;
$ccc = '';
$_SESSION['checkbox44'] = $ccc;
$ddd = '';
$_SESSION['checkbox45'] = $ddd;
$eee = '';
$_SESSION['checkbox46'] = $eee;
$fff = '';
$_SESSION['checkbox47'] = $fff;
$ggg = '';
$_SESSION['checkbox48'] = $ggg;
$hhh = '';
$_SESSION['checkbox49'] = $hhh;
$iii = '';
$_SESSION['checkbox50'] = $iii;
$jjj = '';
$_SESSION['checkbox51'] = $jjj;
$kkk = '';
$_SESSION['checkbox52'] = $kkk;
$lll = '';
$_SESSION['checkbox53'] = $lll;
$mmm = '';
$_SESSION['checkbox54'] = $mmm;
$nnn = '';
$_SESSION['checkbox55'] = $nnn;
$ooo = '';
$_SESSION['checkbox56'] = $ooo;
$ppp = '';
$_SESSION['checkbox58'] = $ppp;
$qqq = '';
$_SESSION['checkbox59'] = $qqq;
$rrr = '';
$_SESSION['checkbox60'] = $rrr;
$sss = '';
$_SESSION['checkbox61'] = $sss;
$ttt = '';
$_SESSION['checkbox62'] = $ttt;
$uuu = '';
$_SESSION['checkbox63'] = $uuu;
$vvv = '';
$_SESSION['checkbox64'] = $vvv;
$www = '';
$_SESSION['checkbox65'] = $www;
$xxx = '';
$_SESSION['mel1'] = $xxx;
$yyy = '';
$_SESSION['dk'] = $yyy;
$zzz = '';
$_SESSION['checkbox66'] = $zzz;

$cek3 = '';
$_SESSION['cek3'] = $cek3;
$cek4 = '';
$_SESSION['cek4'] = $cek4;
$s1_1 = '';
$_SESSION['checkbox67'] = $s1_1;
$s1_2 = '';
$_SESSION['checkbox68'] = $s1_2;
$s2_1 = '';
$_SESSION['checkbox69'] = $s2_1;
$s2_2 = '';
$_SESSION['checkbox70'] = $s2_2;
$s2_3 = '';
$_SESSION['checkbox71'] = $s2_3;
$s3_1 = '';
$_SESSION['checkbox72'] = $s3_1;
$s3_2 = '';
$_SESSION['checkbox73'] = $s3_2;
$s3_3 = '';
$_SESSION['checkbox74'] = $s3_3;
$s3_4 = '';
$_SESSION['checkbox75'] = $s3_4;
$s3_5 = '';
$_SESSION['checkbox76'] = $s3_5;
$s4 = '';
$_SESSION['checkbox77'] = $s4;
$s5 = '';
$_SESSION['checkbox78'] = $s5;
$s6 = '';
$_SESSION['checkbox79'] = $s6;
$s7_1 = '';
$_SESSION['checkbox80'] = $s7_1;
$s7_2 = '';
$_SESSION['checkbox81'] = $s7_2;
$s7_3 = '';
$_SESSION['checkbox82'] = $s7_3;
$s8_1 = '';
$_SESSION['checkbox83'] = $s8_1;
$s8_2 = '';
$_SESSION['checkbox84'] = $s8_2;
$s9 = '';
$_SESSION['checkbox85'] = $s9;
$s10 = '';
$_SESSION['checkbox86'] = $s10;
$s11_1 = '';
$_SESSION['checkbox87'] = $s11_1;
$s11_2 = '';
$_SESSION['checkbox88'] = $s11_2;
$s11_3 = '';
$_SESSION['checkbox89'] = $s11_3;
$s11_4 = '';
$_SESSION['checkbox90'] = $s11_4;
$s11_5 = '';
$_SESSION['checkbox91'] = $s11_5;
$s12 = '';
$_SESSION['checkbox92'] = $s12;
$s13 = '';
$_SESSION['checkbox93'] = $s13;
$s14 = '';
$_SESSION['checkbox94'] = $s14;
$s15 = '';
$_SESSION['checkbox95'] = $s15;
$s16_1 = '';
$_SESSION['checkbox96'] = $s16_1;
$s16_2 = '';
$_SESSION['checkbox97'] = $s16_2;
$s16_3 = '';
$_SESSION['checkbox98'] = $s16_3;
$s17 = '';
$_SESSION['checkbox99'] = $s17;
$s18_1 = '';
$_SESSION['checkbox100'] = $s18_1;
$s18_2 = '';
$_SESSION['checkbox101'] = $s18_2;
$s18_3 = '';
$_SESSION['checkbox102'] = $s18_3;
$s19_1 = '';
$_SESSION['checkbox103'] = $s19_1;
$s19_2 = '';
$_SESSION['checkbox104'] = $s19_2;
$s19_3 = '';
$_SESSION['checkbox105'] = $s19_3;
$s19_4 = '';
$_SESSION['checkbox106'] = $s19_4;
$s20 = '';
$_SESSION['checkbox107'] = $s20;
$s21 = '';
$_SESSION['checkbox108'] = $s21;
$s22_1 = '';
$_SESSION['checkbox109'] = $s22_1;
$s22_2 = '';
$_SESSION['checkbox110'] = $s22_2;
$s22_3 = '';
$_SESSION['mel1'] = $s22_3;
$s22_3lain = '';
$_SESSION['lain'] = $s22_3lain;
$s22_4 = '';
$_SESSION['b'] = $s22_4;
$s23 = '';
$_SESSION['checkbox111'] = $s23;



if($Nama_Lengkap!='' || $Tempat_Lahir!='' || $thn!='' || $Alamat_Rumah!='' || $Kode_Pos!='')
{
	$query = mysql_query("insert into formulir1 (id,Kode_AE,Nama_Lengkap,Tempat_Lahir,Tanggal_Lahir,Bulan_lahir,Tahun_lahir,Alamat_Rumah,Kode_Pos,status_perkawinan,email,No_Identitas,No_Telp,Transaksi,sebutkan,Jenis_Transaksi,forexoption,ip_address)
	values('".$_SESSION['newid']."','".$_SESSION['kodeae']."','".$_SESSION['nama']."','".$_SESSION['tempat']."','".$_SESSION['tgl1']."','".$_SESSION['bln1']."','".$_SESSION['thn1']."', '".$_SESSION['alamat']."', '".$_SESSION['pos']."' ,'".$_SESSION['status']."' ,'".$_SESSION['email']."', '".$_SESSION['id']."', '".$_SESSION['telepon']."','".$_SESSION['pengalaman']."', '".$_SESSION['sebut']."', '".$_SESSION['page']."','".$_SESSION['forexoption']."','$ip')");
	$form2 = mysql_query("insert into formulir2 (id, Menerima, Tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$form3 = mysql_query("insert into formulir3 (id, Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Bulan_lahir, Tahun_lahir, Alamat_Rumah, Kode_Pos, No_Identitas, No_Demo, Menerima, Tanggal)
	values('".$_SESSION['newid']."', '".$_SESSION['nama']."', '".$_SESSION['tempat']."', '".$_SESSION['tgl1']."', '".$_SESSION['bln1']."', '".$_SESSION['thn1']."', '".$_SESSION['alamat']."', '".$_SESSION['pos']."', '".$_SESSION['id']."', '".$_SESSION['demo']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."')");
	$form4 = mysql_query("insert into formulir4 (id, Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Bulan_lahir, Tahun_lahir, Alamat_Rumah, Kode_Pos, No_Identitas, No_Demo, Nama_Pialang, Menerima, Tanggal)
	values('".$_SESSION['newid']."', '".$_SESSION['nama']."', '".$_SESSION['tempat']."', '".$_SESSION['tgl1']."', '".$_SESSION['bln1']."', '".$_SESSION['thn1']."', '".$_SESSION['alamat']."', '".$_SESSION['pos']."', '".$_SESSION['id']."', '".$_SESSION['demo']."', '".$_SESSION['pialang']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."')");
	
	$sql_form5 = "insert into formulir5 
	(
	id, Nama_Lengkap, Tempat_lahir, Tanggal_Lahir, Bulan_lahir, Tahun_lahir, No_Identitas, No_NPWP, Jenis_Kelamin, Namaistrisuami, Nama_Ibu_Kandung, Status_Perkawinan, Alamat_Rumah, kde_Pos, No_telp, No_fax, Notelphp, Status_Rumah, lainnyaSR, Tujuan_Rekening, lainnyaTR, Pengalaman_Investasi, bidanginv, Anggota_Keluarga, namaAK, Pailit_Pengadilan, Nama, Alamat, Kod_pos, no_tl, Hubungan, Pekerjaan, lainnyaPKJ, Nama_Perusahaan, Bidang_Usaha, Jabatan, Lama_Bekerja, Kantor_Sebelum, Alamat_Kantor, Kd_Pos, No_Tlp, no_fx, Penghasilan_Tahun, Rumah_Lokasi, Nilai_NJOP, Deposit_Bank, 	
	Jumlah,
	Lainnya, nam_Bank, Cabang, Noac, No_tel, Jenis_Rekening, lainnyaJR1, Nama_bank, caban, No_AC, NoTlp, Jns_Rekening, lainnyaJR2, Rekening_Tagihan, skb, skp, Rekening_Telp, Foto_Kini, 
	Foto_KTP, Menerima, 
	Tanggal
	)
	values
	(
	'".$_SESSION['newid']."', '".$_SESSION['nama']."', '".$_SESSION['tempat']."', '".$_SESSION['tgl1']."', '".$_SESSION['bln1']."', '".$_SESSION['thn1']."', '".$_SESSION['id']."', '".$_SESSION['NPWP5']."', '".$_SESSION['jk5']."', '".$_SESSION['namaIS5']."', '".$_SESSION['namaIK5']."', '".$_SESSION['status']."', '".$_SESSION['alamat']."', '".$_SESSION['pos']."', '".$_SESSION['telp5']."', '".$_SESSION['fax5']."', '".$_SESSION['telepon']."', '".$_SESSION['statusR5']."', '".$_SESSION['lainSR5']."', '".$_SESSION['rekening5']."', '".$_SESSION['lainTR5']."', '".$_SESSION['investasi5']."', '".$_SESSION['bidanginv']."', '".$_SESSION['anggotaK5']."', '".$_SESSION['namaAK']."', '".$_SESSION['pengadilan5']."', '".$_SESSION['nama5']."', '".$_SESSION['alamat5']."', '".$_SESSION['kodeP5']."', '".$_SESSION['tl5']."', '".$_SESSION['hub5']."', '".$_SESSION['kerja5']."', '".$_SESSION['lainPKJ5']."', '".$_SESSION['usaha5']."', '".$_SESSION['bidang5']."', '".$_SESSION['jabat5']."', '".$_SESSION['lama5']."', '".$_SESSION['kantor5']."', '".$_SESSION['alamatK5']."', '".$_SESSION['kdpos5']."', '".$_SESSION['notel5']."', '".$_SESSION['fx5']."', '".$_SESSION['hasil5']."', '".$_SESSION['rulok5']."', '".$_SESSION['NJOP5']."', '".$_SESSION['deposit5']."', '".$_SESSION['jml5']."', '".$_SESSION['lain5']."', '".$_SESSION['bank5']."', '".$_SESSION['cab5']."', '".$_SESSION['noAC5']."', '".$_SESSION['tel5']."', '".$_SESSION['JenisR5']."', '".$_SESSION['lainJR15']."', '".$_SESSION['nabank5']."', '".$_SESSION['caba5']."', '".$_SESSION['ac5']."', '".$_SESSION['tlp5']."', '".$_SESSION['reken5']."', '".$_SESSION['lainJR25']."', '".$_SESSION['tagihan']."', '".$_SESSION['skb5']."', '".$_SESSION['skp5']."', '".$_SESSION['rektel']."', '".$_SESSION['kini']."', '".$_SESSION['ktp']."', 
	'".$_SESSION['radio2']."', '".$_SESSION['t1']."'
	)";
	$form5 = mysql_query($sql_form5);
	//echo '<pre>';
    //print_r($sql_form5);
    //echo '</pre>';
	
	$form601 = mysql_query("insert into formulir6_1 (id, 1_1, 1_2, 1_3, 1_4, 1_5, 1_6, 1_7, 1_8, 1_9, 1_10, 1_11, 1_12, 1_13, 1_14, 1_15, 1_16, Menerima, Tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['1_1']."', '".$_SESSION['1_2']."', '".$_SESSION['1_3']."', '".$_SESSION['1_4']."', '".$_SESSION['1_5']."', '".$_SESSION['1_6']."', '".$_SESSION['1_7']."', '".$_SESSION['1_8']."', '".$_SESSION['1_9']."', '".$_SESSION['1_10']."', '".$_SESSION['1_11']."', '".$_SESSION['1_12']."', '".$_SESSION['1_13']."', '".$_SESSION['1_14']."', '".$_SESSION['1_15']."', '".$_SESSION['1_16']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$form602 = mysql_query("insert into formulir6_2 (id, 1_1, 1_2, 1_3, 1_4, 1_5, 1_6, 1_7, 1_8, 1_9, 1_10, 1_11, 1_12, 1_13, 1_14, 1_15, Menerima, Tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['1_1']."', '".$_SESSION['1_2']."', '".$_SESSION['1_3']."', '".$_SESSION['1_4']."', '".$_SESSION['1_5']."', '".$_SESSION['1_6']."', '".$_SESSION['1_7']."', '".$_SESSION['1_8']."', '".$_SESSION['1_9']."', '".$_SESSION['1_10']."', '".$_SESSION['1_11']."', '".$_SESSION['1_12']."', '".$_SESSION['1_13']."', '".$_SESSION['1_14']."', '".$_SESSION['1_15']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	
	$sql_form701 = "insert into formulir7_1 
	(
    id, hari1, tanggal1, bulan1, tahun1, nama1, pekerjaan1, alamat1, cekno1, cekno2, 1_1, 1_2, 2_1, 2_2, 2_3, 2_4, 3_1, 3_2, 3_3, 4_1, 4_2, 4_3, 4_4, 4_5, nomer5, nomer6, nomer7, nomer8, 9_1, 9_2 , 9_3, 10_1, 10_2, nomer11, nomer12, 13_1, 13_2, 13_3, 13_4, 13_5, nomer14, nomer15, nomer16, nomer17, 18_1, 18_2, 18_3, nomer19, 20_1, 20_2, 20_3, 21_1, 21_2, 21_3, 21_4, nomer22, nomer23, 24_1, 24_2, 24_3melalui, 24_4daftar_kantor, nomer25, menerima, tanggal, No_Identitas
    )
	values(
	    '".$_SESSION['newid']."', '".$_SESSION['namahari']."', '".$_SESSION['tanggal']."', '".$_SESSION['bulan']."', '".$_SESSION['tahun']."', '".$_SESSION['nama']."', '".$_SESSION['kerja5']."', '".$_SESSION['alamat']."', '".$_SESSION['cek1']."', '".$_SESSION['cek2']."', '".$_SESSION['checkbox16']."', '".$_SESSION['checkbox17']."', '".$_SESSION['checkbox18']."', '".$_SESSION['checkbox19']."', '".$_SESSION['checkbox20']."', '".$_SESSION['checkbox21']."', '".$_SESSION['checkbox22']."', '".$_SESSION['checkbox23']."', '".$_SESSION['checkbox24']."', '".$_SESSION['checkbox25']."', '".$_SESSION['checkbox26']."', '".$_SESSION['checkbox27']."', '".$_SESSION['checkbox28']."', '".$_SESSION['checkbox29']."', '".$_SESSION['checkbox30']."', '".$_SESSION['checkbox31']."', '".$_SESSION['checkbox32']."', '".$_SESSION['checkbox33']."', '".$_SESSION['checkbox34']."', '".$_SESSION['checkbox35']."', '".$_SESSION['checkbox36']."', '".$_SESSION['checkbox37']."', '".$_SESSION['checkbox38']."', '".$_SESSION['checkbox39']."', '".$_SESSION['checkbox40']."', '".$_SESSION['checkbox41']."', '".$_SESSION['checkbox42']."', '".$_SESSION['checkbox43']."', '".$_SESSION['checkbox44']."', '".$_SESSION['checkbox45']."', '".$_SESSION['checkbox46']."', '".$_SESSION['checkbox47']."', '".$_SESSION['checkbox48']."', '".$_SESSION['checkbox49']."', '".$_SESSION['checkbox50']."', '".$_SESSION['checkbox51']."', '".$_SESSION['checkbox52']."', '".$_SESSION['checkbox53']."', '".$_SESSION['checkbox54']."', '".$_SESSION['checkbox55']."', '".$_SESSION['checkbox56']."', '".$_SESSION['checkbox58']."', '".$_SESSION['checkbox59']."', '".$_SESSION['checkbox60']."', '".$_SESSION['checkbox61']."', '".$_SESSION['checkbox62']."', '".$_SESSION['checkbox63']."', '".$_SESSION['checkbox64']."', '".$_SESSION['checkbox65']."', '".$_SESSION['mel1']."', '".$_SESSION['dk']."', '".$_SESSION['checkbox66']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."'
	    )";
	$form701 = mysql_query($sql_form701);
	    
	$form702 = mysql_query("insert into formulir7_2 (id, hari1, tanggal1, bulan1, tahun1, nama1, pekerjaan1, alamat1, cekno1, cekno2, nomer1_1, nomer1_2, nomer2_1, nomer2_2, nomer2_3, nomer3_1, nomer3_2, nomer3_3, nomer3_4, nomer3_5, nomer4, nomer5, nomer6, nomer7_1, nomer7_2, nomer7_3, nomer8_1, nomer8_2, nomer9, nomer10, nomer11_1, nomer11_2, nomer11_3, nomer11_4, nomer11_5, nomer12, nomer13, nomer14, nomer15, nomer16_1, nomer16_2, nomer16_3, nomer17, nomer18_1, nomer18_2, nomer18_3, nomer19_1, nomer19_2, nomer19_3, nomer19_4, nomer20, nomer21, nomer22_1, nomer22_2, nomer22_3, lainnya22_3, nomer22_4, nomer23, menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['namahari']."', '".$_SESSION['tanggal']."', '".$_SESSION['bulan']."', '".$_SESSION['tahun']."', '".$_SESSION['nama']."', '".$_SESSION['kerja5']."', '".$_SESSION['alamat']."', '".$_SESSION['cek3']."', '".$_SESSION['cek4']."', '".$_SESSION['checkbox67']."', '".$_SESSION['checkbox68']."', '".$_SESSION['checkbox69']."', '".$_SESSION['checkbox70']."', '".$_SESSION['checkbox71']."', '".$_SESSION['checkbox72']."', '".$_SESSION['checkbox73']."', '".$_SESSION['checkbox74']."', '".$_SESSION['checkbox75']."', '".$_SESSION['checkbox76']."', '".$_SESSION['checkbox77']."', '".$_SESSION['checkbox78']."', '".$_SESSION['checkbox79']."', '".$_SESSION['checkbox80']."', '".$_SESSION['checkbox81']."', '".$_SESSION['checkbox82']."', '".$_SESSION['checkbox83']."', '".$_SESSION['checkbox84']."', '".$_SESSION['checkbox85']."', '".$_SESSION['checkbox86']."', '".$_SESSION['checkbox87']."', '".$_SESSION['checkbox88']."', '".$_SESSION['checkbox89']."', '".$_SESSION['checkbox90']."', '".$_SESSION['checkbox91']."', '".$_SESSION['checkbox92']."', '".$_SESSION['checkbox93']."', '".$_SESSION['checkbox94']."', '".$_SESSION['checkbox95']."', '".$_SESSION['checkbox96']."', '".$_SESSION['checkbox97']."', '".$_SESSION['checkbox98']."', '".$_SESSION['checkbox99']."', '".$_SESSION['checkbox100']."', '".$_SESSION['checkbox101']."', '".$_SESSION['checkbox102']."', '".$_SESSION['checkbox103']."', '".$_SESSION['checkbox104']."', '".$_SESSION['checkbox105']."', '".$_SESSION['checkbox106']."', '".$_SESSION['checkbox107']."', '".$_SESSION['checkbox108']."', '".$_SESSION['checkbox109']."', '".$_SESSION['checkbox110']."', '".$_SESSION['mel1']."', '".$_SESSION['lain']."', '".$_SESSION['b']."', '".$_SESSION['checkbox111']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	
	$formforexlot = mysql_query("insert into formulirforexlot (id, Menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$formforexreg = mysql_query("insert into formulirforexreg (id, Menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$formgol = mysql_query("insert into formulirgol (id, Menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$formkakao = mysql_query("insert into formulirkakao (id, Menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$formsiidr = mysql_query("insert into formulirsiidr (id, Menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$formsiidrreg = mysql_query("insert into formulirsiidrreg (id, Menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$formsiusd = mysql_query("insert into formulirsiusd (id, Menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	$formsiusdreg = mysql_query("insert into formulirsiusdreg (id, Menerima, tanggal, No_Identitas)
	values('".$_SESSION['newid']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."', '".$_SESSION['id']."')");
	
	$sql_form9 = "insert into formulir9 (
	id, nama_lengkap, tempat_lahir, tanggal_lahir, bulan_lahir, tahun_lahir, alamat_rumah, kode_pos, No_Identitas, no_acc, pernyataan, terima_tanggal)
	values(
	    '".$_SESSION['newid']."', '".$_SESSION['nama']."', '".$_SESSION['tempat']."', '".$_SESSION['tgl1']."', '".$_SESSION['bln1']."', '".$_SESSION['thn1']."', '".$_SESSION['alamat']."', '".$_SESSION['pos']."', '".$_SESSION['id']."', '".$_SESSION['demo']."', '".$_SESSION['radio2']."', '".$_SESSION['t1']."'
	    )";
	$form9 = mysql_query($sql_form9);
	
	echo "<script>document.location = 'page2.php';</script>";	
}
else 
{
	echo "<script language='javascript'>";
	echo "alert('Data Belum Lengkap')</script>";
	echo "<script>window.location='index.php';</script>";
}
?>