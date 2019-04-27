<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page 4</title>

	<!---------- CSS ------------>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	

</head>
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
var x=$("input[name=radio4]:checked").val()
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

<body>

    <!--BEGIN #signup-form -->
    <div id="signup-form"><img src="image/logo-esandar.jpg" width="30%">
		
		<h2 align="left"><p class="mda" align="left"><a href="delete1.php" style="font-size:20px;"><img src="image/mda.PNG" width="120px"></a></p></h2>
        <!--BEGIN #subscribe-inner -->
        <div id="signup-inner">
        
        	<div class="clearfix" id="header">
        	
        		<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page4" value="4" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>
				<br/><br/><br/>
				
				
				
				<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas <br/>
				Perdagangan Berjangka Komoditi <br/>
				Nomor: 107/BAPPEBTI/PER/11/2013 </p><br/>

        
                <h2><center>Formulir: 107.PBK.02.2<br/>
SURAT PERNYATAAN TELAH BERPENGALAMAN MELAKSANAKAN TRANSAKSI PERDAGANGAN BERJANGKA KOMODITI</center></h2><br/>
				Yang mengisi formulir di bawah ini:
				<form onSubmit="return validateForm()" action='function4.php' method='post' name='formku'>
				<table width="100%" border="0" style="border-color:#00000">
					<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td>
					<input class="nama" name='nama4' type='text' value='<?php 
					echo $_SESSION["nama"]; 
					?>' size='50' readonly>
					</td>
					</tr>
					<tr>
					<td valign="top">Tempat/ Tanggal Lahir</td>
					<td valign="top">:</td>
					<td>
					<input class="tempat" name='tempat4' type='text' value='<?php 
					echo $_SESSION['tempat']; 
					?>' size='24' readonly> /
					<input class="tempat" name='tgl4' type='text' size='2' value='<?php 
					echo $_SESSION['tgl1']; 
					?>' readonly> -
					<input class="tempat" name='bln2' type='text' size='2' value='<?php 
					echo $_SESSION['bln1']; 
					?>' readonly> -
					<input class="tempat" name='thn2' type='text' size='4' value='<?php 
					echo $_SESSION['thn1']; 
					?>' readonly></td>
					</tr>
					<tr>
					<td>Alamat Rumah</td>
					<td>:</td>
					<td><input name='alamat3' type='text' size='50' value='<?php 
					echo $_SESSION['alamat']; 
					?>' readonly></td>
					</tr>
					<tr>
					<td>Kode Pos</td>
					<td>:</td>
					<td><input class="pos" name='pos3' type='text' size='50' value='<?php 
					echo $_SESSION['pos']; 
					?>' readonly></td>
					</tr>
					<tr>
					<td>No. Identitas KTP/SIM/Passpor</td>
					<td>:</td>
					<td><input class="kodeae" name='id3' type='text' size='50' value='<?php 
					echo $_SESSION['id']; 
					?>' readonly></td>
					</tr>
					<tr>
					<td>No. Demo Acc <font color="red"> *</font></td>
					<td>:</td>
					<td><input class="kodeae" name='demo' id='demo' type='text' size='27' value='<?php 
echo $_SESSION["demo"];?>' readonly></td>
					</tr>
				</table><br/>
				<p align='center' style="font-size:15px;">Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya telah memiliki pengalaman yang mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada Perusahaan Pialang Berjangka 
<?php 
if($_SESSION['sebut']=='')
{
?><input name='pialang' class="nama" type='text' value='-' disabled> 
<?php
}
else
{
?><input name='pialang' class="nama" type='text' value='<?php echo "".$_SESSION['sebut'].""; ?>' readonly> 
<?php
}
?>, dan telah memahami tentang tata cara bertransaksi Perdagangan Berjangka. </p>
				

				</div>

            	<table align='center' width='100%' border='0'>
					<tr>
						<td colspan='5' align="center">Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun. </td>
					</tr>
					<tr>
						<td width="20%">Pernyataan menerima / tidak</td>
						<td>: </td>
						<td><input class="checkbox" name='radio4' type='radio' value='Ya' onclick="myFunction()">Ya
						<input class="checkbox" id='tidak' name='radio4' type='radio' value='Tidak'>Tidak
						</td>
					</tr>
					<tr>
						<td>Menyatakan pada Tanggal</td>
						<td>:</td>
						<td>&nbsp;
						<input class="kodeae" type='text' name='t1' id='tanggalya' readonly>
						</td>
					</tr>
				</table><br/>
						<p align='center'><button id="submit" name='submit4' type="submit">Submit</button></p>
						
            </form>
            
		


            </div>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

</body>
</html>
<?php
	}
	else
	{
			echo "<script>document.location = 'openrealaccount.php';</script>";
	}
}
else
{
		echo "<script>document.location = 'openrealaccount.php';</script>";
}
?>