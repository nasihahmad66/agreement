<?php
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{
		include('config.php');
?>
<html>
<head>
<title>Page 3</title>

	<!---------- CSS ------------>
	<link rel="stylesheet" type="text/css" href="./css/style.css">

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
var x=$("input[name=radio3]:checked").val();
var y=$('#tidak').val();

	
  if (formku.demo.value == "") 
  { 
	alert("No. Demo Acc belum diisi"); 
	formku.demo.focus(); 
	return false; 
  } 
  else if (x==null || x=="")
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
        	
        		<p align='right' class='paging1'>Page <input class='paging2' type="text" value="3" disabled> of <input class='paging2' type="text" value="9" disabled></p>
				<br/><br/><br/>
				
				
				
				<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas<br/> 
				Perdagangan Berjangka Komoditi<br/>
				Nomor: 107/BAPPEBTI/PER/11/2013</p><br/>

        
                <h2><center>Formulir: 107.PBK.02.1<br/>
PERNYATAAN TELAH MELAKUKAN SIMULASI PERDAGANGAN BERJANGKA KOMODITI</center></h2><br/>
				Yang mengisi formulir di bawah ini:
				<form onSubmit="return validateForm()" action='function3.php' method='post' name='formku'>
				<table width="100%" border="0" style="border-color:#00000">
					<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td>
					<input class='nama' name='nama2' type='text' value='<?php echo $_SESSION["nama"]; ?>' size='50' readonly>
					</td>
					</tr>
					<tr>
					<td valign="top">Tempat/ Tanggal Lahir</td>
					<td valign="top">:</td>
					<td>
					<input class="kodeae" name='tempat2' type='text' value='<?php echo $_SESSION['tempat']; ?>' size='24' readonly> /
					<input class="tempat" name='tgl2' type='text' size='2' value='<?php echo $_SESSION['tgl1']; 	?>' readonly> -
					<input class="tempat" name='bln2' type='text' size='2' value='<?php echo $_SESSION['bln1'];	?>' readonly> -
					<input class="tempat" name='thn2' type='text' size='4' value='<?php echo $_SESSION['thn1'];	?>' readonly></td>
					</tr>
					<tr>
					<td>Alamat Rumah</td>
					<td>:</td>
					<td><input name='alamat3' type='text' value='<?php echo $_SESSION['alamat'];?>' readonly></td>
					</tr>
					<tr>
					<td>Kode Pos</td>
					<td>:</td>
					<td><input class="pos" name='pos3' type='text' value='<?php echo $_SESSION['pos'];?>' readonly></td>
					</tr>
					<tr>
					<td>No. Identitas KTP/SIM/Passpor</td>
					<td>:</td>
					<td><input class="kodeae" name='id3' type='text' value='<?php echo $_SESSION['id'];?>' readonly></td>
					</tr>
					<tr>
					<td>No. Demo Acc <font color="red"> *</font></td>
					<td>:</td>
					<td><input class="kodeae" name='demo' id='demo' type='text' value='<?php echo $_SESSION['nomoraccountdemo'];?>' readonly></td>
					</tr>
				</table><br/>
				<p align='center' style="font-size:15px;">Dengan mengisi kolom "YA" di bawah ini, saya menyatakan bahwa saya telah melakukan simulasi bertransaksi di bidang Perdagangan Berjangka Komoditi pada PT. Esandar Arthamas Berjangka dan telah memahami tentang tata cara bertransaksi di bidang Perdagangan Berjangka Komoditi.</p>
				

				</div>

           
            
            	<table align='center' width='100%' border='0'>
					<tr>
						<td colspan='5' align="center">Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun</td>
					</tr>
					<tr>
						<td width="20%">Pernyataan menerima / tidak</td>
						<td>: </td>
						<td><input class="checkbox" name='radio3' type='radio' value='Ya' onclick="myFunction()">Ya
						<input class="checkbox" id='tidak' name='radio3' type='radio' value='Tidak'>Tidak
						</td>
					</tr>
					<tr>
						<?php
						$tgl = new datetime('Asia/Jakarta');
						$tgl_str = $tgl->format('d-m-Y');
						?>
						<td>Menyatakan pada Tanggal</td>
						<td>:</td>
						<td>&nbsp;
						<input class="kodeae" type='text' name='t1' id='tanggalya' readonly>
						</td>
					</tr>
				</table><br/>
						<p><center><button id="submit" name='submit2' type="submit">Submit</button></center></p>
						
            </form></div>
        
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
