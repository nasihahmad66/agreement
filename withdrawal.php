<html>
<head>
<title>Form Penarikan Dana</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script>
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
 });
function validate()
{
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
	else if (formku.bank.value == "")
	{
		alert("Nama Bank belum diisi");
		formku.bank.focus();
		return false;
	} 
	else if (formku.nba.value == "")
	{
		alert("No. Bank Account belum diisi");
		formku.nba.focus();
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
<img style="padding-top:5px;" src="/image/logo-esandar.jpg" alt="logo-hif" width="20%" height="auto">
</div><br><br>
<div class="container">
<form onSubmit="return validate()" action="execwith.php" name="formku"  method='post'>
<table width="10px" border="1" align="Center" style="border-color:#00000">
	<tr>
	<td colspan="3" style="font-size:20px" align="Center"><strong>Form Penarikan Dana</strong></td>
	</tr>
	<tr>
		<td style="font-size:18px" colspan="3">
		<ol type="1" style="font-size:15px; margin-left:10px;">
			<li>&#9830; Penarikan dana HANYA dapat dikirim ke rekening bank atas nama nasabah yang sudah terdaftar di kami.</li>
			<li>&#9830; Penarikan Dana harap dikirimkan tidak melebihi jam 12 siang WIB. Penarikan dana yang melebihi waktu tersebut akan diproses pada hari kerja berikutnya.</li>
			<li>&#9830; Penarikan dana menggunakan rekening bank BCA dapat dilakukan pada hari itu juga, sedangkan penggunaan rekening bank lain dapat mengakibatkan dana sampai lebih dari T+0 ke rekening Nasabah.</li>
		</ol>
		</td>
	</tr>

	<tr>
		<td>&nbsp; No. Login</td><td align="center">:</td><td>&nbsp;   <input name="nologin" id="nologin" size="50" type="text" placeholder="No. Login" ></td>
	</tr>
	<tr>
		<td>&nbsp; Nama Nasabah</td><td align="center">:</td><td>&nbsp;   <input name="namanasabah" id="namanasabah" type="text" size="50" placeholder="Nama Nasabah"></td>
	</tr>
	
	<tr>
		<td>&nbsp; Alamat Email</td><td align="center">:</td><td>&nbsp;   <input name="email" id="email" type="email" size="50" placeholder="Alamat Email"></td>
	</tr>

	<tr>
		<td>&nbsp; Bank</td><td align="center">:</td><td>&nbsp;   <input name="bank" id="bank" type="text" size="50" placeholder="Bank Name"></td>
	</tr>
	
	<tr>
		<td>&nbsp; No Bank Account</td><td align="center">:</td><td>&nbsp;   <input name="nba" id="nba" type="text" size="50" placeholder="No. Bank Account"></td>
	</tr>
	<tr>
		<td>&nbsp; Jumlah yang ditarik</td><td align="center">:</td><td>&nbsp;  <input name="jumlah" id="idr" type="radio" value="Rp"> IDR Nominal <input name="nominalidr" id="nominalidr" type="text" size="50" placeholder="i.e: 1.000.000"></br>
															&nbsp; <input name="jumlah" id="usd" type="radio" value="USD"> USD Nominal <input name="nominalusd" id="nominalusd" type="text" size="50" placeholder="i.e: 100"></td>
	</tr>
		
	<tr><td></td></td><td>
		<td width="471">&nbsp;  <center><input size="10" type="submit" name="submit" value="Submit" id="button"></center></td>
	</tr>
</table></div>
<br />
</form>
</div>
</body>
</html>