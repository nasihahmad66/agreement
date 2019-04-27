<?php 
    require 'config.php';
    session_start();

    $sql = mysql_query('SELECT * FROM managers WHERE id="' . $_SESSION['id'] . '" ');
    $row = mysql_fetch_array($sql);

    if ($row['status'] == 1) {
        $_SESSION['aecode'] = $row['kode_ae'];
    } elseif ($row['status'] == 2) {
        $_SESSION['aecode'] = '';
    }

if (isset($_SESSION['nomoraccountdemo'])) {
    if ($_SESSION['nomoraccountdemo'] != null) {
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agreement Form</title>

	<!---------- CSS ------------>
	<link rel="stylesheet" type="text/css" href="css/style.css">

 <link rel="stylesheet" href="datepicker/jquery-ui.css">
  <script src="datepicker/jquery-1.10.2.js"></script>
  <script src="datepicker/jquery-ui.js"></script>
  <!--<script type="text/javascript" src="jquery.maskedinput-1.3.1.min_.js"></script>-->
<script type="text/javascript" src="jquery.maskedinput.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
<link rel="shortcut icon" href="/images/favicon.ico">

</head>
<!--<script type="text/javascript" src="jquery-1.11.0.js"></script>-->
<script> 
$(document).ready(function()
 {
	var x=$("input[name=a]:checked").val();
	var y=$('#tidak').val();

        $('#sebut').hide();
		$('#forexlot').hide();
		$('#forexlot1').hide();
		$('#forexlot2').hide();
		$('#forexreg').hide();
		$('#forexreg1').hide();
		$('#forexreg2').hide();
		
		$('#belum').click(function(){
		 $('#sebut').hide();
		});

		$('#sudah').click(function(){
		 $('#sebut').show();        
		});
		
		$('#forexlotmain').click(function(){
		 $('#forexlot').show(); 
		 $('#forexlot1').show();
		 $('#forexlot2').show(); 
		 $('#forexreg').hide();
		 $('#forexreg1').hide();
		 $('#forexreg2').hide();
		 $('input[name="forexoption"]').prop('checked', false);
		});
		
		$('#forexregmain').click(function(){
		 $('#forexreg').show();
		 $('#forexreg1').show();
		 $('#forexreg2').show();
		 $('#forexlot').hide();
		 $('#forexlot1').hide();
		 $('#forexlot2').hide();
		 $('input[name="forexoption"]').prop('checked', false); 		 
		});
		
 });

  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  defaultday:"1",
	  yearRange:"1920:2014",
          dateFormat: "dd/mm/yy",
          defaultDate: "01/01/1999"
    });
  });
jQuery(function($){
   $("#npwp").mask("99.999.999.9-999.999");
   $("#phone").mask("(999) 999-9999");
   $("#tin").mask("99-9999999");
   $("#ssn").mask("999-99-9999");
});
function validate()
{
	var x=$("input[name=a]:checked").val();
	var page=$("input[name=page]:checked").val();
	var pageforex=$("input[name=forexoption]:checked").val();
	
	var y=$('#tidak').val();
	var tahun=$('#datepicker').val();
        var tahunaja = tahun.substr(6, 10);
        var bulanaja = tahun.substr(3, 2);
        var hariaja = tahun.substr(0, 2);
        var gabungaja = bulanaja+"/"+hariaja+"/"+tahunaja;
        var dob = new Date(gabungaja);
        var date = new Date();
        var age = Math.floor((date-dob) / (365.25 * 24 * 60 * 60 * 1000));
	
	if (formku.nama.value == "") 
	{ 
		alert("Nama Lengkap belum diisi"); 
		formku.nama.focus(); 
		return false; 
	} 
	
	else if (formku.tempat.value == "")
	{
		alert("Tempat Lahir belum diisi");
		formku.tempat.focus();
		return false;
	} 
	
	else if (formku.thn1.value == "")
	{
		alert("Tahun Lahir belum diisi");
		formku.thn1.focus();
		return false;
	}
	else if (age <=20)
	{
		alert("Maaf Umur Anda Belum Mencukupi \nBatas Minimal Umur 21 Tahun \nUmur anda :"+age+" Tahun");
		return false;
	}
	else if (formku.alamat.value == "")
	{
		alert("Alamat belum diisi");
		formku.alamat.focus();
		return false;
	}
	else if (formku.status.value == "")
	{
		alert("Status Perkawinan belum diisi");
		//formku.status.focus();
		return false;
	}
	else if (formku.email.value == "")
	{
		alert("Email belum diisi");
		formku.email.focus();
		return false;
	}
	else if (formku.id.value == "")
	{
		alert("No. Identitas belum diisi");
		formku.id.focus();
		return false;
	}
	else if (formku.telepon.value == "")
	{
		alert("No. Telp/Handphone belum diisi");
		formku.telepon.focus();
		return false;
	}
	else if (x==null || x=="")
	{
		alert("Silakan pilih option belum pernah atau sudah pernah");
		return false;
	}
	else if (page==null || page=="")
	{
		alert("Silakan isi Margin awal");
		return false;
	}
	
	else if (page =='FOREX_0,1_LOT' || page =='FOREX_REGULAR')
	{
		if(pageforex == null || pageforex == "")
		{
			alert("Silakan isi pilihan forex selanjutnya");
			return false;
		}
	}
	else return true; 
}
function onlyAlphabets(e, t) {
	try {
		if (window.event) {
			var charCode = window.event.keyCode;
		}
		else if (e) {
			var charCode = e.which;
		}
		else { return true; }
		
		if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123 || charCode == 32 || charCode == 8 ))
		return true;
		else
		return false;
		}
	catch (err) {
		alert(err.Description);
	}
}
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false//disable key press
}
}
jQuery(function($){
    $("#kodeae1").mask("*-*-**-***");
});

</script>
<body>

    <!--BEGIN #signup-form -->
    <div id="signup-form"><img src="image/logo-esandar.jpg" width="30%">
        <!--BEGIN #subscribe-inner -->
        <div id="signup-inner">
        
        	<div class="clearfix" id="header">
        	
        		<p align='right' class='paging1'>Page <input class='paging' type="text" value="1" disabled> of <input class='paging' type="text" value="9" disabled></p>
        
                <h1></h1><br/>
				
				<table width="100%" border="1" style="border-color:#00000">
					<tr>
						<td style="font-size:20px"><Strong>Peraturan untuk mengisi Formulir Agreement</Strong></td>
					</tr>
					<tr>
						<td><table width="100%" border="0" style="border-color:#00000">
							<tr>
								<td valign="top">- </td>
								<td align="justify">Nasabah DIWAJIBKAN mengisi secara BENAR dan JELAS.</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td align="justify">Jika terdapat kesalahan pengisian di halaman sebelumnya, Nasabah DIHARUSKAN menekan tombol <img src="image/mda.PNG" width="80px"> yang terdapat di kiri atas setiap halaman.</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td align="justify">DILARANG kembali ke halaman sebelumnya dengan menekan tombol back <img src="image/back.png" width="15px"> pada browser.</td>
							</tr>
							<tr>
								<td valign="top">- </td>
								<td align="justify">Pelanggaran yang disebabkan karena melalaikan peraturan ini menjadi tanggung jawab NASABAH.</td>
							</tr>
							</table>
						</td>
					</tr>
				</table><br/>
				</div>
			<h2 align="left"><Strong>Data Nasabah</strong></h2>
			<form onSubmit="return validate()" action="function1.php" name="formku"  method='post'>
			<table width="100%" border="0" style="border-color:#00000">
				<tr>
					<td width="30%">Kode AE (Optional)</td>
					<td valign="top">:</td>
					<!-- <td><input id="kodeae" class="kodeae" type="text" name="kodeae" placeholder="X-X-XX-XXX" style="text-transform: uppercase"/></td> -->
					
					<?php
                        if (isset($_SESSION['aecode']) && $_SESSION['aecode'] != '') {
                            ?>
					<td><input id="kodeae" class="kodeae" type="text" name="kodeae" value="<?php echo $_SESSION['aecode']; ?>" style="text-transform: uppercase" readonly/></td> 
					<?php
                        } else {
                            ?>
					<td><input id="kodeae1" class="kodeae" type="text" name="kodeae" placeholder="X-X-XX-XXX" style="text-transform: uppercase"/></td>
					<?php
                        } ?>
				</tr>
				<tr>
					<td valign="top">Nama Lengkap<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td><input class="nama" name="nama" id="nama" type="text" size="50" onkeypress="return onlyAlphabets(event,this);"></td>
				</tr>
				<tr>
					<td valign="top">Tempat / Tanggal Lahir<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td><input class="tempat" name="tempat" id="tempat" size="15" type="text" onKeyPress="return onlyAlphabets(event,this);">&nbsp;&nbsp;/&nbsp;&nbsp;
					<input type="text" name="thn1" id="datepicker" class="kodeae"></td>
				</tr>
				<tr>
					<td valign="top">Alamat Rumah<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td><input class="nama" name="alamat" id="alamat" type="text" size="50"></td>
				</tr>
				<tr>
					<td valign="top">Kode Pos<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td><input class="pos" name="pos" id="pos" type="text" size="50" onKeyPress="return numbersonly(event)"></td>
				</tr>
				<tr>
					<td valign="top">Status Perkawinan<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td><input class="checkbox" name='status' type='radio' value='Tidak Menikah'> Tidak Menikah<br/>
						<input class="checkbox" name='status' type='radio' value='Menikah'> Menikah<br/>
						<input class="checkbox" name='status' type='radio' value='Janda'> Janda <br/>
						<input class="checkbox" name='status' type='radio' value='Duda'> Duda <br/></td>
				</tr>
				<tr>
					<td valign="top">Email<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td><input class="kodeae" name="email" id="email" type="email" size="50"></td>
				</tr>
				<tr>
					<td valign="top">No.Identitas<font color="red"> *</font><br />
				KTP / SIM / PASPOR</td>
					<td valign="top">:</td>
					<td><input class="kodeae" name="id" id="id" type="text" size="50"></td>
				</tr>
				<tr>
					<td valign="top">No. Telp Handphone<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td><input class="kodeae" name="telepon" id="telepon" type="text" size="50" onKeyPress="return numbersonly(event)"></td>
				</tr>
				<tr>
					<td valign="top">Apakah Nasabah pernah bertransaksi sebelumnya di bidang Perdagangan Berjangka Komoditi ?<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td><input class="checkbox" id="belum" name="a" type="radio" value="belum">&nbsp; Belum pernah<br />
					<input class="checkbox" id="sudah" name="a" type="radio" value="pernah">&nbsp; Sudah pernah, Sebutkan :<input class="kodeae" id="sebut" name="sebut" type="text" size="30"></td>
				</tr>
				<tr>
					<td valign="top">Margin Awal dan Jenis Transaksi yang akan di pilih<font color="red"> *</font></td>
					<td valign="top">:</td>
					<td>&nbsp; &bull; Kontrak Berjangka<br />
				&nbsp;&nbsp; <input class="checkbox" name="page" type="radio" value="KONTRAK_BERJANGKA_EMAS_GOL,_GOL100,_GOL250"> Kontrak Berjangka Emas GOL, GOL100, GOL250 (Min Rp. 50.000.000,-)<br />
				&nbsp;&nbsp; <input class="checkbox" name="page" type="radio" value="KONTRAK_BERJANGKA_KAKAO"> Kontrak Berjangka Kakao (Min Rp. 50.000.000,-)<br />
				&nbsp; &bull; Forex<br />
				&nbsp;&nbsp; <input id="forexlotmain" class="checkbox" name="page" type="radio" value="FOREX_0,1_LOT"> Kontrak Derivative Forex dan Loco London GOLD 0,1 Lot (Min Rp. 5.000.000,-)<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="forexlot" class="checkbox" name="forexoption" type="radio" value="Forex Lot Fixed Rate 10.000"/> Fixed Rate 10.000<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="forexlot1" class="checkbox" name="forexoption" type="radio" value="Forex Lot Fixed Rate 12.000"/> Fixed Rate 12.000<br />

				&nbsp;&nbsp; <input id="forexregmain" class="checkbox" name="page" type="radio" value="FOREX_REGULAR"> Kontrak Derivative Forex dan Loco London GOLD Regular (Min Rp. 50.000.000,-)<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="forexreg" class="checkbox" name="forexoption" type="radio" value="Forex Reg Fixed Rate 10.000"/> Fixed Rate 10.000<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="forexreg1" class="checkbox" name="forexoption" type="radio" value="Forex Reg Fixed Rate 12.000"/> Fixed Rate 12.000<br />
				<!-- &nbsp; &bull; Stock Index USD<br />
				&nbsp;&nbsp; <input class="checkbox" name="page" type="radio" value="INDEX_USD_0,1_LOT"> Index USD 0,1 Lot (Min USD 500 dengan Fixed Rate 10.000)<br />
				&nbsp;&nbsp; <input class="checkbox" name="page" type="radio" value="INDEX_USD_REGULAR"> Index USD Regular (Min USD 5.000 dengan Fixed Rate 10.000)<br /> -->
				&nbsp; &bull; Stock Index IDR<br />
				&nbsp;&nbsp; <input class="checkbox" name="page" type="radio" value="INDEX_IDR_0,1_LOT"> Index IDR 0,1 Lot (Min Rp. 5.000.000)<br />
				&nbsp;&nbsp; <input class="checkbox" name="page" type="radio" value="INDEX_IDR_REGULAR"> Index IDR Regular (Min Rp. 50.000.000,-)<br />
                </td>
				</tr>
                <tr>
					<td align="center" colspan="3"><div id="required"><p><font color="red">*</font> Required Fields</p></div>
					<button id="submit" name="submit" type="submit">Submit</button></center></td>
				</tr>
                </table>
            </form>
            </div>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

</body>
</html>
<?php
    } else {
        echo "<script>document.location = 'openrealaccount.php';</script>";
        exit();
    }
} else {
    echo "<script>document.location = 'openrealaccount.php';</script>";
    exit();
}
?>