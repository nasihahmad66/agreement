<?php
if(isset($_POST['submit11']))
{
include('config.php');
	session_start();
	$a=$_POST['namahari'];
	$b=$_POST['tanggal'];
	$c=$_POST['bulan'];
	$d=$_POST['tahun'];
	$cek3=$_POST['cek3'];
	$cek4=$_POST['cek4'];
	$lali=$_POST['checkbox67'];
	$e=$_POST['checkbox68'];
	$f=$_POST['checkbox69'];
	$g=$_POST['checkbox70'];
	$h=$_POST['checkbox71'];
	$i=$_POST['checkbox72'];
	$j=$_POST['checkbox73'];
	$k=$_POST['checkbox74'];
	$l=$_POST['checkbox75'];
	$m=$_POST['checkbox76'];
	$n=$_POST['checkbox77'];
	$o=$_POST['checkbox78'];
	$p=$_POST['checkbox79'];
	$q=$_POST['checkbox80'];
	$r=$_POST['checkbox81'];
	$s=$_POST['checkbox82'];
	$t=$_POST['checkbox83'];
	$u=$_POST['checkbox84'];
	$v=$_POST['checkbox85'];
	$w=$_POST['checkbox86'];
	$x=$_POST['checkbox87'];
	$y=$_POST['checkbox88'];
	$z=$_POST['checkbox89'];
	$aa=$_POST['checkbox90'];
	$bb=$_POST['checkbox91'];
	$cc=$_POST['checkbox92'];
	$dd=$_POST['checkbox93'];
	$ee=$_POST['checkbox94'];
	$ff=$_POST['checkbox95'];
	$gg=$_POST['checkbox96'];
	$hh=$_POST['checkbox97'];
	$ii=$_POST['checkbox98'];
	$jj=$_POST['checkbox99'];
	$kk=$_POST['checkbox100'];
	$ll=$_POST['checkbox101'];
	$mm=$_POST['checkbox102'];
	$nn=$_POST['checkbox103'];
	$oo=$_POST['checkbox104'];
	$pp=$_POST['checkbox105'];
	$qq=$_POST['checkbox106'];
	$rr=$_POST['checkbox107'];
	$ss=$_POST['checkbox108'];
	$tt=$_POST['checkbox109'];
	$uu=$_POST['checkbox110'];
	$vv=$_POST['mel1'];
	$ww=$_POST['lain'];
	$xx=$_POST['b'];
	$yy=$_POST['checkbox111'];
	$z=$_POST['menerima11'];
	
		$_SESSION['namahari'] = $a;
		$_SESSION['tanggal'] = $b;
		$_SESSION['bulan'] = $c;
		$_SESSION['tahun'] = $d;
		$_SESSION['cek3'] = $cek3;
		$_SESSION['cek4'] = $cek4;
		$_SESSION['checkbox67'] = $lali;
		$_SESSION['checkbox68'] = $e; 
		$_SESSION['checkbox69'] = $f;
		$_SESSION['checkbox70'] = $g; 
		$_SESSION['checkbox71'] = $h; 
		$_SESSION['checkbox72'] = $i; 
		$_SESSION['checkbox73'] = $j; 
		$_SESSION['checkbox74'] = $k; 
		$_SESSION['checkbox75'] = $l;
		$_SESSION['checkbox76'] = $m; 
		$_SESSION['checkbox77'] = $n; 
		$_SESSION['checkbox78'] = $o; 
		$_SESSION['checkbox79'] = $p; 
		$_SESSION['checkbox80'] = $q; 
		$_SESSION['checkbox81'] = $r;
		$_SESSION['checkbox82'] = $s; 
		$_SESSION['checkbox83'] = $t; 
		$_SESSION['checkbox84'] = $u; 
		$_SESSION['checkbox85'] = $v;
		$_SESSION['checkbox86'] = $w; 
		$_SESSION['checkbox87'] = $x; 
		$_SESSION['checkbox88'] = $y; 
		$_SESSION['checkbox89'] = $z; 
		$_SESSION['checkbox90'] = $aa; 
		$_SESSION['checkbox91'] = $bb; 
		$_SESSION['checkbox92'] = $cc; 
		$_SESSION['checkbox93'] = $dd; 
		$_SESSION['checkbox94'] = $ee; 
		$_SESSION['checkbox95'] = $ff;
		$_SESSION['checkbox96'] = $gg; 
		$_SESSION['checkbox97'] = $hh;
		$_SESSION['checkbox98'] = $ii;
		$_SESSION['checkbox99'] = $jj;
		$_SESSION['checkbox100'] = $kk; 
		$_SESSION['checkbox101'] = $ll;
		$_SESSION['checkbox102'] = $mm;
		$_SESSION['checkbox103'] = $nn; 
		$_SESSION['checkbox104'] = $oo;
		$_SESSION['checkbox105'] = $pp;
		$_SESSION['checkbox106'] = $qq; 
		$_SESSION['checkbox107'] = $rr;
		$_SESSION['checkbox108'] = $ss;
		$_SESSION['checkbox109'] = $tt;
		$_SESSION['checkbox110'] = $uu;  
		$_SESSION['mel1'] = $vv;
		$_SESSION['lain'] = $ww;
		$_SESSION['b'] = $xx;
		$_SESSION['checkbox111'] = $yy;

$page1=$_POST['page1'];
$_SESSION['page1'] = $page1;
 
$namahari=$_POST['namahari'];
$tanggal1=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun']; 
 
 
$nama1 = $_POST['nama'];
$pekerjaan1 = $_POST['Jabatan'];
$alamat1 = $_POST['Alamat'];

$centang3=$_POST['cek3'];
$centang4=$_POST['cek4'];

$s1_1 = $_POST['checkbox67'];
$s1_2 = $_POST['checkbox68'];
$s2_1 = $_POST['checkbox69'];
$s2_2 = $_POST['checkbox70'];
$s2_3 = $_POST['checkbox71'];
$s3_1 = $_POST['checkbox72'];
$s3_2 = $_POST['checkbox73'];
$s3_3 = $_POST['checkbox74'];
$s3_4 = $_POST['checkbox75'];
$s3_5 = $_POST['checkbox76'];
$s4 = $_POST['checkbox77'];
$s5 = $_POST['checkbox78'];
$s6 = $_POST['checkbox79'];
$s7_1 = $_POST['checkbox80'];
$s7_2 = $_POST['checkbox81'];
$s7_3 = $_POST['checkbox82'];
$s8_1 = $_POST['checkbox83'];
$s8_2 = $_POST['checkbox84'];
$s9 = $_POST['checkbox85'];
$s10 = $_POST['checkbox86'];
$s11_1 = $_POST['checkbox87'];
$s11_2 = $_POST['checkbox88'];
$s11_3 = $_POST['checkbox89'];
$s11_4 = $_POST['checkbox90'];
$s11_5 = $_POST['checkbox91'];
$s12 = $_POST['checkbox92'];
$s13 = $_POST['checkbox93'];
$s14 = $_POST['checkbox94'];
$s15 = $_POST['checkbox95'];
$s16_1 = $_POST['checkbox96'];
$s16_2 = $_POST['checkbox97'];
$s16_3 = $_POST['checkbox98'];
$s17 = $_POST['checkbox99'];
$s18_1 = $_POST['checkbox100'];
$s18_2 = $_POST['checkbox101'];
$s18_3 = $_POST['checkbox102'];
$s19_1 = $_POST['checkbox103'];
$s19_2 = $_POST['checkbox104'];
$s19_3 = $_POST['checkbox105'];
$s19_4 = $_POST['checkbox106'];
$s20 = $_POST['checkbox107'];
$s21 = $_POST['checkbox108'];
$s22_1 = $_POST['checkbox109'];
$s22_2 = $_POST['checkbox110'];
$s22_3 = $_POST['mel1'];
$s22_3lain = $_POST['lain'];
$s22_4 = $_POST['b'];
$s23 = $_POST['checkbox111'];

$menerima = $z;
$tgl = new datetime('Asia/Jakarta');
$tanggal = $_POST['t1'];

$newid=$_SESSION['newid'];

$query = mysqli_query($connect, "update formulir7_2 set hari1='$namahari',tanggal1='$tanggal1',bulan1='$bulan',tahun1='$tahun',nama1='$nama1',cekno1='$centang3',cekno2='$centang4',pekerjaan1='$pekerjaan1',
alamat1='$alamat1',nomer1_1='$s1_1',nomer1_2='$s1_2',nomer2_1='$s2_1',nomer2_2='$s2_2',nomer2_3='$s2_3',nomer3_1='$s3_1',nomer3_2='$s3_2',nomer3_3='$s3_3',nomer3_4='$s3_4',nomer3_5='$s3_5',nomer4='$s4',nomer5='$s5',
nomer6='$s6',nomer7_1='$s7_1',nomer7_2='$s7_2',nomer7_3='$s7_3',nomer8_1='$s8_1',nomer8_2='$s8_2',nomer9='$s9',nomer10='$s10',nomer11_1='$s11_1',nomer11_2='$s11_2',nomer11_3='$s11_3',nomer11_4='$s11_4',nomer11_5='$s11_5',
nomer12='$s12',nomer13='$s13',nomer14='$s14',nomer15='$s15',nomer16_1='$s16_1',nomer16_2='$s16_2',nomer16_3='$s16_3',nomer17='$s17',nomer18_1='$s18_1',nomer18_2='$s18_2',nomer18_3='$s18_3',nomer19_1='$s19_1',
nomer19_2='$s19_2',nomer19_3='$s19_3',nomer19_4='$s19_4',nomer20='$s20',nomer21='$s21',nomer22_1='$s22_1',nomer22_2='$s22_2',nomer22_3='$s22_3',lainnya22_3='$s22_3lain',nomer22_4='$s22_4',nomer23='$s23',
menerima='$menerima',tanggal='$tanggal' where id='$newid'") or die (mysqli_error());



		if($_SESSION['page1'] == "FOREX_0,1_LOT"){
			echo "<script>document.location='page8/FOREXLOT.php';</script>";}
		else if($_SESSION['page1'] == "FOREX_REGULAR"){
			echo "<script>document.location='page8/FOREXREG.php';</script>";}
		else if($_SESSION['page1'] == "INDEX_USD_0,1_LOT"){
			echo "<script>document.location='page8/TRKDSIUSD.php';</script>";}
		
		else if($_SESSION['page1'] == 'INDEX_USD_REGULAR'){
			echo "<script>document.location='page8/TRKDSIUSDREG.php';</script>";}
			
		else if($_SESSION['page1'] == "INDEX_IDR_0,1_LOT"){
			echo "<script>document.location='page8/TRKDSIIDR.php';</script>";}
		
		else if($_SESSION['page1'] == 'INDEX_IDR_REGULAR'){
			echo "<script>document.location='page8/TRSIIDRR.php';</script>";}

	}
			?>