<html>
<head>
<title>Form Penyetoran Dana</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script type="text/javascript">
 $(document).ready(function()
 {
	var x=$("input[name=jumlah]:checked").val();
	
  //Pertama sembunyikan elemen class gambar
        $('#nominalidr').hide();        
		$('#nominalusd').hide();        
  //Ketika elemen class tampil di klik maka elemen class gambar tampil
       $('#idr').click(function(){
	$('#nominalidr').show();
	$('#nominalusd').hide();
	$("#nominalusd").val('');
        });

  //Ketika elemen class sembunyi di klik maka elemen class gambar sembunyi
        $('#usd').click(function(){
   //Sembunyikan elemen class gambar
	$('#nominalusd').show(); 
	$('#nominalidr').hide();    
    $("#nominalidr").val('');
		});
	
	<?php 
		if(isset($_GET['filetype'])):
		?>
			alert("Format bukti setor harus : JPG,JPEG,JPE,PNG,PDF");
			window.location = "./deposit.php";
			
		<?php
		endif;
	?>
 });
function validate()
{
	var x=$("input[name=setoran]:checked").val();
	var y=$('#tidak').val();
	
	if (formku.nologin.value == "") 
	{ 
		alert("No. Login belum diisi"); 
		formku.nologin.focus(); 
		return false; 
	} 
	
	else if (formku.namanasabah.value == "")
	{
		alert("Nama Nasabah belum diisi");
		formku.namanasabah.focus();
		return false;
	} 
	else if (formku.email.value == "")
	{
		alert("Email belum diisi");
		formku.email.focus();
		return false;
	} 
	else if (x==null || x=="")
	{
		alert("Jenis Setoran Dana belum dipilih");
		return false;
	}
	
	else if (formku.jumlah.value == "")
	{
		alert("Jumlah belum diisi");
		formku.jumlah.focus();
		return false;
	} 
	else return true; 
}
</script>
<body>
<div class="header">
<img style="padding-top:5px;" src="/images/logo-hif-300x74.png" alt="logo-hif" width="20%" height="auto">
</div><br><br>
<div class="container">
<form onSubmit="return validate()" action="execdep.php" id="formku"  method='post' enctype="multipart/form-data">
<table width="70%" border="1" align="Center" style="border-color:#00000">
	<tr>
	<td colspan="3" style="font-size:20px" align="Center"><strong>Form Penyetoran Dana</strong></td>
	</tr>
	<tr>
		<td style="font-size:18px" colspan="3">
			<ol type="1" style="font-size:15px; margin-left:10px;">
			<li>&#9830; Dana dikirimkan ke Rekening Terpisah PT Esandar Arthamas Berjangka di BCA IDR (035-313-6019) atau BCA USD (035-313-4610)</li>
			<li>&#9830; Penyetoran dana HANYA dapat diterima apabila dikirim melalui rekening bank atas nama nasabahnya dan untuk penyetoran tunai, harap mencantumkan No Login dan Nama Nasabah di dalam beritanya</li>
			<li>&#9830; Dana yang sudah dikirim HANYA akan diinput kedalam sistem, apabila sudah Good Fund di rekening kami</li>
			<li>&#9830; Bukti Setor dapat dikirimkan kepada kita melalui fasilitas upload dibawah ini, di fax di nomor 021-29339230 atau dikirimkan ke email admin@esandar.co.id</li>
		</ol>
		</td>
	</tr>

	<tr>
		<td>&nbsp; No. Login *</td><td align="center">:</td><td>&nbsp;  <input name="nologin" id="nologin" size="50" type="text" placeholder="No. Login"></td>
	</tr>
	<tr>
		<td>&nbsp; Nama Nasabah *</td><td align="center">:</td><td>&nbsp;  <input name="namanasabah" id="namanasabah" type="text" size="50" placeholder="Nama Nasabah"></td>
	</tr>
	
	<tr>
		<td>&nbsp; Alamat Email *</td><td align="center">:</td><td>&nbsp;  <input name="email" id="email" type="email" size="50" placeholder="Alamat Email"></td>
	</tr>

	<tr>
		<td>&nbsp; Jenis Setoran Dana *</td><td align="center">:</td><td>&nbsp;  <input name="setoran" id="setoran" type="radio" value="Transfer Bank"> Transfer Bank</br>
															&nbsp; <input name="setoran" id="setoran" type="radio" value="Setoran Tunai"> Setoran Tunai</td>
	</tr>
	
	<tr>
		<td>&nbsp; Bank Pengirim</td><td align="center">:</td><td>&nbsp;  <input name="bank" id="bank" type="text" size="50" placeholder="Nama Bank"></td>
	</tr>
	
	<tr>
		<td>&nbsp; No. Bank Account</td><td align="center">:</td><td>&nbsp;  <input name="nba" id="nba" type="text" size="50" placeholder="No. Bank Account (no character)"></td>
	</tr>
	
	
	
	<tr>
		<td>&nbsp; Jumlah yang disetor *</td><td align="center">:</td><td>&nbsp;  <input name="jumlah" id="idr" type="radio" value="Rp"> IDR Nominal <input name="nominalidr" id="nominalidr" type="text" size="50" placeholder="i.e: 1.000.000"></br>
															&nbsp; <input name="jumlah" id="usd" type="radio" value="USD"> USD Nominal <input name="nominalusd" id="nominalusd" type="text" size="50" placeholder="i.e: 100"></td>
	</tr>
	
	<tr>
		<td>&nbsp; Bukti Setor</td>	<td align="center">:</td><td>&nbsp;  <input name="bukti" type="file" id="bukti" size="50"> File Upload JPG,JPEG,JPE,PNG,PDF (dibawah 1MB)</td>
	</tr>
	<tr><td></td></td><td>
		<td width="471">&nbsp; <input size="10" type="submit" name="submit" value="Submit" id="button"></td>
	</tr>
</table>
<br />
<table width="10px" border="0" align="Center" style="border-color:#00000">
<tr>
	<td>Note : * wajib diisi</td>
</tr>
<table>
</form> 
</div>
</body>
</html>