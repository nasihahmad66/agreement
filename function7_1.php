<?php
session_start();


if(isset($_POST['submit11']))
{
$a=$_POST['namahari'];
$b=$_POST['tanggal'];
$c=$_POST['bulan'];
$d=$_POST['tahun'];
$cek1=$_POST['cek1'];
$cek2=$_POST['cek2'];
$e=$_POST['checkbox16'];
$f=$_POST['checkbox17'];
$g=$_POST['checkbox18'];
$h=$_POST['checkbox19'];
$i=$_POST['checkbox20'];
$j=$_POST['checkbox21'];
$k=$_POST['checkbox22'];
$l=$_POST['checkbox23'];
$m=$_POST['checkbox24'];
$n=$_POST['checkbox25'];
$o=$_POST['checkbox26'];
$p=$_POST['checkbox27'];
$q=$_POST['checkbox28'];
$r=$_POST['checkbox29'];
$s=$_POST['checkbox30'];
$t=$_POST['checkbox31'];
$u=$_POST['checkbox32'];
$v=$_POST['checkbox33'];
$w=$_POST['checkbox34'];
$x=$_POST['checkbox35'];
$y=$_POST['checkbox36'];
$z=$_POST['checkbox37'];
$aa=$_POST['checkbox38'];
$bb=$_POST['checkbox39'];
$cc=$_POST['checkbox40'];
$dd=$_POST['checkbox41'];
$ee=$_POST['checkbox42'];
$ff=$_POST['checkbox43'];
$gg=$_POST['checkbox44'];
$hh=$_POST['checkbox45'];
$ii=$_POST['checkbox46'];
$jj=$_POST['checkbox47'];
$kk=$_POST['checkbox48'];
$ll=$_POST['checkbox49'];
$mm=$_POST['checkbox50'];
$nn=$_POST['checkbox51'];
$oo=$_POST['checkbox52'];
$pp=$_POST['checkbox53'];
$qq=$_POST['checkbox54'];
$rr=$_POST['checkbox55'];
$ss=$_POST['checkbox56'];
$uu=$_POST['checkbox58'];
$vv=$_POST['checkbox59'];
$ww=$_POST['checkbox60'];
$xx=$_POST['checkbox61'];
$yy=$_POST['checkbox62'];
$zz=$_POST['checkbox63'];
$aaa=$_POST['checkbox64'];
$bbb=$_POST['checkbox65'];
$ccc=$_POST['checkbox66'];
$eee=$_POST['mel1']; 
$fff=$_POST['lainnya'];
$ggg=$_POST['dk'];

			$_SESSION['namahari'] = $a;
			$_SESSION['tanggal'] = $b;
			$_SESSION['bulan'] = $c;
			$_SESSION['tahun'] = $d;
			$_SESSION['cek1'] = $cek1;
			$_SESSION['cek2'] = $cek2;
			$_SESSION['checkbox16'] = $e;
			$_SESSION['checkbox17'] = $f;
			$_SESSION['checkbox18'] = $g;
			$_SESSION['checkbox19'] = $h;
			$_SESSION['checkbox20'] = $i;
			$_SESSION['checkbox21'] = $j;
			$_SESSION['checkbox22'] = $k;
			$_SESSION['checkbox23'] = $l;
			$_SESSION['checkbox24'] = $m;
			$_SESSION['checkbox25'] = $n;
			$_SESSION['checkbox26'] = $o;
			$_SESSION['checkbox27'] = $p;
			$_SESSION['checkbox28'] = $q;
			$_SESSION['checkbox29'] = $r;
			$_SESSION['checkbox30'] = $s;
			$_SESSION['checkbox31'] = $t;
			$_SESSION['checkbox32'] = $u;
			$_SESSION['checkbox33'] = $v;
			$_SESSION['checkbox34'] = $w;
			$_SESSION['checkbox35'] = $x;
			$_SESSION['checkbox36'] = $y;
			$_SESSION['checkbox37'] = $z;
			$_SESSION['checkbox38'] = $aa;
			$_SESSION['checkbox39'] = $bb;
			$_SESSION['checkbox40'] = $cc;
			$_SESSION['checkbox41'] = $dd;
			$_SESSION['checkbox42'] = $ee;
			$_SESSION['checkbox43'] = $ff;
			$_SESSION['checkbox44'] = $gg;
			$_SESSION['checkbox45'] = $hh;
			$_SESSION['checkbox46'] = $ii;
			$_SESSION['checkbox47'] = $jj;
			$_SESSION['checkbox48'] = $kk;
			$_SESSION['checkbox49'] = $ll;
			$_SESSION['checkbox50'] = $mm;
			$_SESSION['checkbox51'] = $nn;
			$_SESSION['checkbox52'] = $oo;
			$_SESSION['checkbox53'] = $pp;
			$_SESSION['checkbox54'] = $qq;
			$_SESSION['checkbox55'] = $rr;
			$_SESSION['checkbox56'] = $ss;
			$_SESSION['checkbox58'] = $uu;
			$_SESSION['checkbox59'] = $vv;
			$_SESSION['checkbox60'] = $ww;
			$_SESSION['checkbox61'] = $xx;
			$_SESSION['checkbox62'] = $yy;
			$_SESSION['checkbox63'] = $zz;
			$_SESSION['checkbox64'] = $aaa;
			$_SESSION['checkbox65'] = $bbb;
			$_SESSION['checkbox66'] = $ccc;
			$_SESSION['mel1'] = $eee;
			$_SESSION['lainnya'] = $fff;
			$_SESSION['dk'] = $ggg;
		
		$z=$_POST['menerima11'];
		
	include('config.php');
	$hari = $_POST['namahari'];
	$tanggal1 = $_POST['tanggal'];
	$bulan1 = $_POST['bulan'];
	$tahun1 = $_POST['tahun'];
	$nama1 = $_POST['nama1'];
	$pekerjaan1 = $_POST['pekerjaan1'];
	$alamat1 = $_POST['alamat1'];
	
	$centang1 = $_POST['cek1'];
	$centang2 = $_POST['cek2'];
	$s1_1 = $_POST['checkbox16'];
	$s1_2 = $_POST['checkbox17'];
	$s2_1 = $_POST['checkbox18'];
	$s2_2 = $_POST['checkbox19'];
	$s2_3 = $_POST['checkbox20']; 
	$s2_4 = $_POST['checkbox21'];
	$s3_1 = $_POST['checkbox22'];
	$s3_2 = $_POST['checkbox23'];
	$s3_3 = $_POST['checkbox24'];
	$s4_1 = $_POST['checkbox25'];
	$s4_2 = $_POST['checkbox26'];
	$s4_3 = $_POST['checkbox27'];
	$s4_4 = $_POST['checkbox28'];
	$s4_5 = $_POST['checkbox29'];
	$s5 = $_POST['checkbox30'];
	$s6 = $_POST['checkbox31'];
	$s7 = $_POST['checkbox32'];
	$s8 = $_POST['checkbox33'];
	$s9_1 = $_POST['checkbox34'];
	$s9_2 = $_POST['checkbox35'];
	$s9_3 = $_POST['checkbox36'];
	$s10_1 = $_POST['checkbox37'];
	$s10_2 = $_POST['checkbox38'];
	$s11 = $_POST['checkbox39'];
	$s12 = $_POST['checkbox40'];
	$s13_1 = $_POST['checkbox41'];
	$s13_2 = $_POST['checkbox42'];
	$s13_3 = $_POST['checkbox43'];
	$s13_4 = $_POST['checkbox44'];
	$s13_5 = $_POST['checkbox45'];
	$s14 = $_POST['checkbox46'];
	$s15 = $_POST['checkbox47'];
	$s16 = $_POST['checkbox48'];
	$s17 = $_POST['checkbox49'];
	$s18_1 = $_POST['checkbox50'];
	$s18_2 = $_POST['checkbox51'];
	$s18_3 = $_POST['checkbox52'];
	$s19 = $_POST['checkbox53'];
	$s20_1 = $_POST['checkbox54'];
	$s20_2 = $_POST['checkbox55'];
	$s20_3 = $_POST['checkbox56'];
	$s21_1 = $_POST['checkbox58'];
	$s21_2= $_POST['checkbox59'];
	$s21_3 = $_POST['checkbox60'];
	$s21_4 = $_POST['checkbox61'];
	$s22 = $_POST['checkbox62'];
	$s23 = $_POST['checkbox63'];
	$s24_1 = $_POST['checkbox64'];
	$s24_2 = $_POST['checkbox65'];
	$s24_3melalui = $_POST['mel1'];
	$s24_4daftar_kantor = $_POST['dk'];
	$s25 = $_POST['checkbox66'];
	$menerima = $z;
	$tgl = new datetime('Asia/Jakarta');
	$tgl_str = $_POST['t1'];

	$newid=$_SESSION['newid'];
	
	$query = mysql_query("update formulir7_1 set hari1 = '$hari',tanggal1 = '$tanggal1',bulan1 = '$bulan1',tahun1 = '$tahun1',nama1 = '$nama1', cekno1='$centang1', cekno2='$centang2', pekerjaan1 = '$pekerjaan1',alamat1 =  '$alamat1',
	1_1 = '$s1_1',1_2 = '$s1_2',2_1 = '$s2_1',2_2 = '$s2_2',2_3 = '$s2_3',2_4 = '$s2_4',3_1 = '$s3_1',3_2 = '$s3_2',3_3 = '$s3_3',4_1 = '$s4_1',4_2 = '$s4_2',4_3 = '$s4_3',4_4 = '$s4_4',4_5 = '$s4_5',nomer5= '$s5',nomer6= '$s6',nomer7= '$s7',nomer8= '$s8',9_1 = '$s9_1',9_2 = '$s9_2',9_3 = '$s9_3',10_1 = '$s10_1',10_2 = '$s10_2',nomer11 = '$s11',nomer12 = '$s12',13_1 = '$s13_1',13_2 = '$s13_2',13_3 = '$s13_3',13_4 = '$s13_4',13_5 = '$s13_5',nomer14 = '$s14',nomer15 = '$s15',nomer16 = '$s16',
	nomer17 = '$s17',18_1 = '$s18_1',18_2 = '$s18_2',18_3 = '$s18_3',nomer19 = '$s19',20_1 = '$s20_1',20_2 = '$s20_2',20_3 = '$s20_3',21_1 = '$s21_1',21_2 = '$s21_2',21_3 = '$s21_3',21_4 = '$s21_4',nomer22 = '$s22',nomer23 = '$s23',24_1 = '$s24_1',24_2 = '$s24_2',
	24_3melalui = '$s24_3melalui',24_4daftar_kantor = '$s24_4daftar_kantor',nomer25 = '$s25',menerima = '$menerima',tanggal = '$tgl_str' where id='$newid'") or die(mysql_error());
}

	if($menerima == 'Ya')
	{
		if($_SESSION['page1'] == 'KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250')
		{
			echo "<script>document.location='page8/tradingrulesgol.php';</script>";
		}
		else if($_SESSION['page1'] == 'KONTRAK_BERJANGKA_KAKAO')
		{
			echo "<script>document.location='page8/tradingruleskakao.php';</script>";
		}
	}
	else
	{
		echo "<script language='javascript'>";
		echo "alert('Silakan pilih Ya untuk lanjut ke halaman berikutnya')</script>";
		echo "<script>document.location='page701.php';</script>";
	}

?>