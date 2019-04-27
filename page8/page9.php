<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>Page 9</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
</head>
<?php
include('config.php');
session_start();

$sql=mysqli_query($connect,"select * from formulir1 where No_Identitas=".$_SESSION['id']."");
$hasil=mysqli_fetch_array($sql);
?>
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script type='text/javascript' >
function myFunction() {
    var d = new Date();
    var da = d.getDate();
    var m = d.getMonth();
    m = m+1;
    var y = d.getFullYear();
    var gab = "" + da + "-" + m + "-" + y;
    document.getElementById('tanggalya').value = gab;
	document.getElementById('tidak').disabled=true;
}
function validateForm()
{
//jQuery.noConflict();
var x=$("input[name=terima]:checked").val();
var y=$('#tidak').val();

  if (x==null || x=="")
  {
  alert("Pernyataan Menerima atau tidak harus diisi");
  return false;
  }
  else if (x==y)
  {
  alert("Silakan pilih 'Ya' untuk lanjut ke halaman berikutnya");
  return false;
  }
}
</script>
</head>
<body>
 <div id="signup-form"><img src="images/logo-esandar300x105.png" width="30%">
 <div id="signup-inner">
<h2 align="left"><p class="mda" align="left"><a href="../delete1.php" style="font-size:20px;"><img src="../image/mda.PNG" width="120px"></a></p></h2>
        	<div class="clearfix" id="header">
<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page9" value="9" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>
<form onSubmit="return validateForm()" action='function9.php' method='post' name='formku'>
<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas<br/> 
Perdagangan Berjangka Komoditi<br/>
Nomor: 107/BAPPEBTI/PER/11/2013</p><br/>
<h3 align='center'>
Formulir: 107.PBK.07<br/>
Pernyataan Bertanggung Jawab Atas<br/>
Kode Akses Transaksi Nasabah (Personal Access Password)
</h3><br><hr><br>
<p align='justify' style="font-size:14px;" width='70%'>&nbsp; Yang mengisi formulir di bawah ini:</p>
<table align='left' width='100%' border='0'>
<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td>
<?php session_start(); ?>
<input class='nama' name='nama9' type='text' value='<?php 
echo $_SESSION["nama"]; 
?>' size='50' readonly>
</td>
</tr>
<tr>
<td>Tempat/ Tanggal Lahir</td>
<td>:</td>
<td>
<input class='nama' name='tempat9' type='text' value='<?php 
echo $_SESSION['tempat']; 
?>' size='24' readonly> /
<input class='tempat' name='tgl9' type='text' size='2' value='<?php 
echo $_SESSION['tgl1']; 
?>' readonly> -
<input class='tempat' name='bln9' type='text' size='2' value='<?php 
echo $_SESSION['bln1']; 
?>' readonly> -
<input class='tempat' name='thn9' type='text' size='4' value='<?php 
echo $_SESSION['thn1']; 
?>' readonly></td>
</tr>
<tr>
<td>Alamat Rumah</td>
<td>:</td>
<td><input name='alamat9' type='text' size='50' value='<?php 
echo $_SESSION['alamat']; 
?>' readonly></td>
</tr>
<tr>
<td>Kode Pos</td>
<td>:</td>
<td><input class='pos' name='pos9' type='text' size='50' value='<?php 
echo $_SESSION['pos']; 
?>' readonly></td>
</tr>
<tr>
<td>No. Identitas KTP/SIM/Passpor*</td>
<td>:</td>
<td><input name='id9' type='text' size='50' value='<?php 
echo $_SESSION['id']; 
?>' readonly></td>
</tr>
<tr>
<td>No. Acc</td>
<td>:</td>
<td><input name='demo9' type='text' size='27' value=0 disabled></td>
</tr>
</table><br><br>

<p align='left' width='70%'><br><br>Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya bertanggungjawab sepenuhnya terhadap kode akses transaksi Nasabah (Personal Access Password) dan tidak menyerahkan kode akses transaksi Nasabah (Personal Access Password) ke pihak lain, terutama kepada pegawai pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.</p><br>

<table align='center' width='100%' border='0'>
	<tr>
		<td align='center'>
			<b>PERINGATAN !!!<br/><br/>Pialang Berjangka, Wakil Pialang Berjangka, Pegawai Pialang Berjangka, atau pihak yang<br/>memiliki kepentingan dengan Pialang Berjangka dilarang menerima kode akses transaksi Nasabah (Personal Access Password).</b>
		</td>
	</tr>
</table>

<table align='center' width='70%' border='0'>
<tr>
<td colspan='5' align='center'><br>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun</td>
</tr>
<tr>
<td width='153'>Pernyataan menerima</td>
<td width='7'>:</td>
<td width="66%">
      <input class='checkbox' id='ya' name="terima" type="radio" value="Ya" onclick="myFunction()">Ya
	<input class='checkbox' id='tidak' name="terima" type="radio" value="Tidak">Tidak</td>
<tr>
<?php
$tgl = new datetime('Asia/Jakarta');
$tgl_str = $tgl->format('d-m-Y');
?>
<td>Menyatakan pada Tanggal</td>
<td>:</td>
<td>&nbsp;
<input class='kodeae' type='text' name='t1' id='tanggalya' readonly>
<input type='hidden' name='email' value='<?php echo $_SESSION['email'];?>' readonly>
</td>
</tr>
</table>
<table width='100%'>
<tr>
<td align='center'>
<button name='submit' id='submit' type='submit'>Submit</button>
</td>
</tr>
</table>
<input type="hidden" name="page1" value="<?php 
echo $_SESSION['page1'];
?>">
</form>
</div>
</div>
</div>
</body>
</html>
<?php
	}
	else
	{
			echo "<script>document.location = '../openrealaccount.php';</script>";
	}
}
else
{
		echo "<script>document.location = '../openrealaccount.php';</script>";
}
?>