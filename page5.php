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

<link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script type="text/javascript" src="http://digitalbush.com/wp-content/uploads/2013/01/jquery.maskedinput-1.3.1.min_.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type='text/javascript' >
$(document).ready(function()
 {
	var x=$("input[name=a]:checked").val();
	var y=$('#tidak').val();
	$('#lainSR5').hide();        
	$('#lainTR5').hide();  
	$('#bidanginv').hide(); 
	$('#namaAK').hide(); 
	$('#lainPKJ5').hide(); 
	$('#lainJR15').hide(); 
	$('#lainJR25').hide(); 
		
	
    $('#Pribadi').click(function(){
		$('#lainSR5').hide();
    });
	$('#Keluarga').click(function(){
		$('#lainSR5').hide();
    });
	$('#SewaKontrak').click(function(){
		$('#lainSR5').hide();
		
    });
	$('#Lainnya').click(function(){
		$('#lainSR5').show(); 
		$("#lainSR5").val('');		
    });
	
	
	
	$('#Lindung').click(function(){
		$('#lainTR5').hide();
    });
	$('#Gain').click(function(){
		$('#lainTR5').hide();
    });
	$('#Spekulasi').click(function(){
		$('#lainTR5').hide();
    });
	$('#LainnyaTPR').click(function(){
		$('#lainTR5').show();   
		$("#lainTR5").val('');	
    });
	
	
	
	$('#tidakpi').click(function(){
		$('#bidanginv').hide();
    });
	$('#yapi').click(function(){
		$('#bidanginv').show(); 
		$("#bidanginv").val('');		
    });
	
	
	
	$('#tidakakb').click(function(){
		$('#namaAK').hide();
    });
	$('#yaakb').click(function(){
		$('#namaAK').show();
		$("#namaAK").val('');
    });
	
	
	
	
	$('#Swasta').click(function(){
		$('#lainPKJ5').hide();
    });
	$('#Wiraswasta').click(function(){
		$('#lainPKJ5').hide();
    });
	$('#IbuRT').click(function(){
		$('#lainPKJ5').hide();
    });
	$('#Profesional').click(function(){
		$('#lainPKJ5').hide();
    });
	$('#PegawaiNegeri').click(function(){
		$('#lainPKJ5').hide();
    });
	$('#Mahasiswa').click(function(){
		$('#lainPKJ5').hide();
    });
	$('#Keluargapek').click(function(){
		$('#lainPKJ5').hide();
    });
	$('#Lainnyapek').click(function(){
		$('#lainPKJ5').show();   
		$("#lainPKJ5").val('');	
    });
	
	
	
	$('#Giro').click(function(){
		$('#lainJR15').hide();
    });
	$('#Tabungan').click(function(){
		$('#lainJR15').hide();
    });
	$('#Lainnyajr').click(function(){
		$('#lainJR15').show();   
		$("#lainJR15").val('');	
    });
	
	
	
	$('#Giro2').click(function(){
		$('#lainJR25').hide();
    });
	$('#Tabungan2').click(function(){
		$('#lainJR25').hide();
    });
	$('#Lainnyajr2').click(function(){
		$('#lainJR25').show();   
		$("#lainJR25").val('');	
    });
	
 });

jQuery(function($){
   $("#npwp").mask("99.999.999.9-999.999");
});

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
var x=$("input[name=nerima5]:checked").val();
//var jenisrek=$("input[name=JenisR5]:checked").val();
var y=$('#tidak').val();

  if (formkulah.NPWP5.value == "") 
  { 
		alert("No. NPWP belum diisi"); 
		formkulah.NPWP5.focus(); 
		return false; 
  }
  else if (formkulah.namaIK5.value == "") 
  { 
		alert("Nama Ibu Kandung belum diisi"); 
		formkulah.namaIK5.focus(); 
		return false; 
  }
  else if (formkulah.telp5.value == "") 
  { 
		alert("No. Telp Rumah belum diisi"); 
		formkulah.telp5.focus(); 
		return false; 
  }
  else if (formkulah.fax5.value == "") 
  { 
		alert("No. Fax Rumah belum diisi"); 
		formkulah.fax5.focus(); 
		return false; 
  }
  else if (formkulah.statusR5.value == "") 
  { 
		alert("Status Kepemilikan Rumah belum diisi"); 
		formkulah.statusR5.focus(); 
		return false; 
  }
  else if (formkulah.tupemburek.value == "") 
  { 
		alert("Tujuan Pembukaan Rekening belum diisi"); 
		formkulah.tupemburek.focus(); 
		return false; 
  }
  else if (formkulah.investasi5.value == "") 
  { 
		alert("Pengalaman Investasi belum diisi"); 
		formkulah.investasi5.focus(); 
		return false; 
  }
  else if (formkulah.anggotaK5.value == "") 
  { 
		alert("Anggota Keluarga belum diisi"); 
		formkulah.anggotaK5.focus(); 
		return false; 
  }
  else if (formkulah.pengadilan5.value == "") 
  { 
		alert("Penyataan Pailit belum diisi"); 
		formkulah.pengadilan5.focus(); 
		return false; 
  }
  else if (formkulah.nama5.value == "") 
  { 
		alert("Nama belum diisi"); 
		formkulah.nama5.focus(); 
		return false; 
  }
  else if (formkulah.alamat5.value == "") 
  { 
		alert("Alamat belum diisi"); 
		formkulah.alamat5.focus(); 
		return false; 
  }
  else if (formkulah.kodeP5.value == "") 
  { 
		alert("Kode Pos belum diisi"); 
		formkulah.kodeP5.focus(); 
		return false; 
  }
  else if (formkulah.tl5.value == "") 
  { 
		alert("No. Telepon belum diisi"); 
		formkulah.tl5.focus(); 
		return false; 
  }
  else if (formkulah.hub5.value == "") 
  { 
		alert("Hubungan belum diisi"); 
		formkulah.hub5.focus(); 
		return false; 
  }
  else if (formkulah.kerja5.value == "") 
  { 
		alert("Pekerjaan belum diisi"); 
		formkulah.kerja5.focus(); 
		return false; 
  }
  else if (formkulah.usaha5.value == "") 
  { 
		alert("Nama Perusahaan belum diisi"); 
		formkulah.usaha5.focus(); 
		return false; 
  }
  else if (formkulah.bidang5.value == "") 
  { 
		alert("Bidang Usaha belum diisi"); 
		formkulah.bidang5.focus(); 
		return false; 
  }
  else if (formkulah.jabat5.value == "") 
  { 
		alert("Jabatan belum diisi"); 
		formkulah.jabat5.focus(); 
		return false; 
  }
  else if (formkulah.lama5.value == "") 
  { 
		alert("Lama Bekerja belum diisi"); 
		formkulah.lama5.focus(); 
		return false; 
  }
  else if (formkulah.kantor5.value == "") 
  { 
		alert("Kantor Sebelumnya belum diisi"); 
		formkulah.kantor5.focus(); 
		return false; 
  }
  else if (formkulah.alamatK5.value == "") 
  { 
		alert("Alamat Kantor belum diisi"); 
		formkulah.alamatK5.focus(); 
		return false; 
  }
  else if (formkulah.kdpos5.value == "") 
  { 
		alert("Kode Pos belum diisi"); 
		formkulah.kdpos5.focus(); 
		return false; 
  }
  else if (formkulah.notel5.value == "") 
  { 
		alert("No. Telp Kantor belum diisi"); 
		formkulah.notel5.focus(); 
		return false; 
  }
  else if (formkulah.fx5.value == "") 
  { 
		alert("No. Fax belum diisi"); 
		formkulah.fx5.focus(); 
		return false; 
  }
  else if (formkulah.hasil5.value == "") 
  { 
		alert("Penghasilan per tahun belum diisi"); 
		formkulah.hasil5.focus(); 
		return false; 
  }
  else if (formkulah.rulok5.value == "") 
  { 
		alert("Rumah Lokasi belum diisi"); 
		formkulah.rulok5.focus(); 
		return false; 
  }
  else if (formkulah.NJOP5.value == "") 
  { 
		alert("Nilai NJOP belum diisi"); 
		formkulah.NJOP5.focus(); 
		return false; 
  }
  else if (formkulah.deposit5.value == "") 
  { 
		alert("Deposit Bank belum diisi"); 
		formkulah.deposit5.focus(); 
		return false; 
  }
  else if (formkulah.jml5.value == "") 
  { 
		alert("Jumlah belum diisi"); 
		formkulah.jml5.focus(); 
		return false; 
  }
  else if (formkulah.bank5.value == "") 
  { 
		alert("Nama Bank belum diisi"); 
		formkulah.bank5.focus(); 
		return false; 
  }
  else if (formkulah.cab5.value == "") 
  { 
		alert("Cabang belum diisi"); 
		formkulah.cab5.focus(); 
		return false; 
  }
  else if (formkulah.noAC5.value == "") 
  { 
		alert("No A/C belum diisi"); 
		formkulah.noAC5.focus(); 
		return false; 
  }
  else if (formkulah.kini5.value == "") 
  { 
		alert("Silahkan Masukkan Foto Terkini Anda!"); 
		formkulah.kini5.focus(); 
		return false; 
  }
  
  else if (formkulah.KTP5.value == "") 
  { 
		alert("Silahkan Masukkan Foto Identitas Anda!"); 
		formkulah.KTP5.focus(); 
		return false; 
  }
  else if (formkulah.tmbh25.value == "" && formkulah.tmbh15.value == "" && formkulah.rektel5.value == "" && formkulah.tagihan5.value == "") 
  { 
		alert("Silahkan Pilih \n -Rekening Koran Bank \n -Surat Keterangan Bekerja \n -Surat Keterangan Pendapatan \n -Rekening Listrik / Telepon \n -Bukti Kepemilikan Tanah atau bangunan atau kendaraan Bermotor \n -Dokumen Lain yang terkait \n untuk diupload"); 
		formkulah.tagihan5.focus(); 
		return false; 
  }
  else if (x==null || x=="")
  {
  alert("Pernyataan Menerima atau tidak harus diisi");
  return false;
  }
  else if (x!='Ya')
  {
  alert("Silakan pilih 'Ya' untuk lanjut ke halaman berikutnya");
  return false;
  }
else{
            document.formkulah.submit();}
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
		
		if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123 || charCode == 32))
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


</script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<body>
<div id="signup-form"><img src="image/logo-esandar.jpg" width="30%">
	
		<h2 align="left"><p class="mda" align="left"><a href="delete1.php" style="font-size:20px;"><img src="image/mda.PNG" width="120px"></a></p></h2>
        <!--BEGIN #subscribe-inner -->
        <div id="signup-inner">
        
        	<div class="clearfix" id="header">
        	
        		<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page5" value="5" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>
				<br/><br/><br/>
<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas <br/>
Perdagangan Berjangka Komoditi <br/>
Nomor: 107/BAPPEBTI/PER/11/2013 
</p><br/>
<h3 align='center' style="font-size:18px;">Formulir Nomor 107.PBK.03<br/>
APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE
</h3><br><hr><br><br>
<form onSubmit="return validateForm();" action='gambar/function5.php' enctype="multipart/form-data" method='post' name='formkulah'>
<table align='left' width='70%' border='0'>
<tr>
<td width='200'>Kode Nasabah</td>
<td width='3'>:</td>
<td width='413'>
<input class='kodeae' name='kode' type='text' size='30' value='disabled' disabled>
</td>
</tr>
<tr>
<td align='justify' colspan='5 style="font-size:15px;"'><h3><br>Data Pribadi</h3></td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><input class='nama' name='namaL5' type='text' size='40' value='<?php 
echo $_SESSION["nama"]; 
?>' readonly></td>
</tr>
<tr>
<td>Tempat/ Tanggal Lahir</td>
<td>:</td>



<td>
					<input class="nama" name='tempat5' type='text' value='<?php 
					echo $_SESSION['tempat']; 
					?>' size='24' readonly> /
					<input class="tempat" name='tgl5' type='text' size='2' value='<?php 
					echo $_SESSION['tgl1']; 
					?>' readonly> -
					<input class="tempat" name='bln5' type='text' size='2' value='<?php 
					echo $_SESSION['bln1']; 
					?>' readonly> -
					<input class="tempat" name='thn5' type='text' size='4' value='<?php 
					echo $_SESSION['thn1']; 
					?>' readonly></td>

</tr>
<tr>
<td>No. Identitas KTP/SIM/Passpor</td>
<td>:</td>
<td><input name='id5' type='text' size='30' value='<?php 
echo $_SESSION["id"]; 
?>' readonly></td>
</tr>
<tr>
<td>No. NPWP <font color="red">*</font></td>
<td>:</td>
<td><input id='npwp' name='NPWP5' type='text' size='30' value='<?php echo $_SESSION["NPWP5"]?>'></td>
</tr>
<tr>
<td>Jenis Kelamin <font color="red">*</font></td>
<td>:</td>
<td>
<?php
if($_SESSION['jk5']=='Laki-Laki')
{
?>
<input class='checkbox' name='jk5' type='radio' value='Laki-Laki' checked> Laki-Laki&nbsp;&nbsp;&nbsp;&nbsp;
<input class='checkbox' name='jk5' type='radio' value='Perempuan'> Perempuan
<?php 
}
else if($_SESSION['jk5']=='Perempuan'){ ?>
<input class='checkbox' name='jk5' type='radio' value='Laki-Laki'> Laki-Laki&nbsp;&nbsp;&nbsp;&nbsp;
<input class='checkbox' name='jk5' type='radio' value='Perempuan' checked> Perempuan
<?php }
else{
?>
<input class='checkbox' name='jk5' type='radio' value='Laki-Laki'> Laki-Laki&nbsp;&nbsp;&nbsp;&nbsp;
<input class='checkbox' name='jk5' type='radio' value='Perempuan'> Perempuan
<?php
}?>
</td>
</tr>
<tr>
<td valign="top">Status Perkawinan</td>
<td valign="top">:</td>
<td><input name='perkawinan5' type='text' size='20' value='<?php 
echo $_SESSION["status"]; 
?>' readonly>
</td>
</tr>
<?php
if ($_SESSION["status"] == "Tidak Menikah")
{
?>
<tr>
<td>Nama Istri/Suami</td>
<td>:</td>
<td><input class name='namaIS5' type='text' placeholder="-" readonly></td>
</tr>
<?php
}
else{
?>
<tr>
<td>Nama Istri/Suami <font color="red">*</font></td>
<td>:</td>
<td><input name='namaIS5' type='text' type='text' id="namaIS5" value='<?php echo $_SESSION["namaIS5"] ?>' onkeypress="return onlyAlphabets(event,this);"></td>
</tr>
<?php
}
?>
<tr> 
<td>Nama Ibu Kandung <font color="red">*</font></td>
<td>:</td>
<td><input name='namaIK5' type='text' value='<?php echo $_SESSION["namaIK5"]?>' onkeypress="return onlyAlphabets(event,this);"></td>
</tr>

<tr>
<td>Alamat Rumah </td>
<td>:</td>
<td><input name='alamat4' type='text' size='30' value='<?php 
echo $_SESSION["alamat"]; 
?>' readonly></td>
</tr>
<tr>
<td>Kode Pos</td>
<td>:</td>
<td><input class='kodeae' name='pos5' type='text' size='30' value='<?php 
echo $_SESSION["pos"]; 
?>' readonly></td>
</tr>
<tr>
<td>No. Telp Rumah <font color="red">*</font></td>
<td>:</td>
<td><input id='tlprmh' name='telp5' type='text' size='30' value="<?php echo $_SESSION['No_telp']?>" onKeyPress="return numbersonly(event)"></td>
</tr>
<tr>
<td>No. Faksimili Rumah <font color="red">*</font></td>
<td>:</td>
<td><input id='faxrmh' name='fax5' type='text' size='30' value="<?php echo $_SESSION['fax5']?>" onKeyPress="return numbersonly(event)"></td>
</tr>
<tr>
<td>No. Telp Handphone</td>
<td>:</td>
<td><input name='hp5' type='text' size='30' value='<?php 
echo $_SESSION["telepon"]; 
?>' readonly></td>
</tr>
<tr>
<td valign="top">Status Kepemilikan Rumah <font color="red">*</font></td>
<td valign="top">:</td>
<?php 
if($_SESSION['statusR5']=='Pribadi'){?>
<td><input class='checkbox' id='Pribadi' name='statusR5' type='radio' value='Pribadi' checked> Pribadi <br/>
<input class='checkbox' id='Keluarga' name='statusR5' type='radio' value='Keluarga'> Keluarga <br/>
<input class='checkbox' id='SewaKontrak' name='statusR5' type='radio' value='Sewa/Kontrak'> Sewa/Kontrak <br/>
<input class='checkbox' id='Lainnya' name='statusR5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input id='lainSR5' name='lainSR5' type='text'></td>

<?php }else if($_SESSION['statusR5']=='Keluarga'){?>
<td><input class='checkbox' id='Pribadi' name='statusR5' type='radio' value='Pribadi'> Pribadi <br/>
<input class='checkbox' id='Keluarga' name='statusR5' type='radio' value='Keluarga' checked> Keluarga <br/>
<input class='checkbox' id='SewaKontrak' name='statusR5' type='radio' value='Sewa/Kontrak'> Sewa/Kontrak <br/>
<input class='checkbox' id='Lainnya' name='statusR5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input id='lainSR5' name='lainSR5' type='text'></td>

<?php }else if($_SESSION['statusR5']=='Sewa/Kontrak'){?>
<td><input class='checkbox' id='Pribadi' name='statusR5' type='radio' value='Pribadi'> Pribadi <br/>
<input class='checkbox' id='Keluarga' name='statusR5' type='radio' value='Keluarga'> Keluarga <br/>
<input class='checkbox' id='SewaKontrak' name='statusR5' type='radio' value='Sewa/Kontrak' checked> Sewa/Kontrak <br/>
<input class='checkbox' id='Lainnya' name='statusR5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input id='lainSR5' name='lainSR5' type='text'></td>

<?php }else if($_SESSION['statusR5']=='Lainnya'){?>
<td><input class='checkbox' id='Pribadi' name='statusR5' type='radio' value='Pribadi'> Pribadi <br/>
<input class='checkbox' id='Keluarga' name='statusR5' type='radio' value='Keluarga'> Keluarga <br/>
<input class='checkbox' id='SewaKontrak' name='statusR5' type='radio' value='Sewa/Kontrak'> Sewa/Kontrak <br/>
<input class='checkbox' id='Lainnya' name='statusR5' type='radio' value='Lainnya' checked> Lainnya &nbsp;
<input id='lainSR5' name='lainSR5' value="<?php echo $_SESSION['lainSR5']?>" type='text'></td>
<?php }else{?>
<td><input class='checkbox' id='Pribadi' name='statusR5' type='radio' value='Pribadi'> Pribadi <br/>
<input class='checkbox' id='Keluarga' name='statusR5' type='radio' value='Keluarga'> Keluarga <br/>
<input class='checkbox' id='SewaKontrak' name='statusR5' type='radio' value='Sewa/Kontrak'> Sewa/Kontrak <br/>
<input class='checkbox' id='Lainnya' name='statusR5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input id='lainSR5' name='lainSR5' type='text'></td>
<?php }?>
</tr>
<tr>
<td valign="top">Tujuan Pembukaan Rekening <font color="red">*</font></td>
<td valign="top">:</td>
<?php 
if($_SESSION['rekening5']=='Lindung Nilai'){?>
<td><input class='checkbox' id='Lindung' name='tupemburek' type='radio' value='Lindung Nilai' checked> Lindung Nilai <br/>
<input class='checkbox' id='Gain' name='tupemburek' type='radio' value='Gain'> Gain <br/>
<input class='checkbox' id='Spekulasi' name='tupemburek' type='radio' value='Spekulasi'> Spekulasi <br/>
<input class='checkbox' id='LainnyaTPR' name='tupemburek' type='radio' value='Lainnya'> Lainnya &nbsp;
<input id='lainTR5' name='lainTR5' type='text'></td>
<?php }else if($_SESSION['statusR5']=='Gain'){?>
<td><input class='checkbox' id='Lindung' name='tupemburek' type='radio' value='Lindung Nilai'> Lindung Nilai <br/>
<input class='checkbox' id='Gain' name='tupemburek' type='radio' value='Gain' checked> Gain <br/>
<input class='checkbox' id='Spekulasi' name='tupemburek' type='radio' value='Spekulasi'> Spekulasi <br/>
<input class='checkbox' id='LainnyaTPR' name='tupemburek' type='radio' value='Lainnya'> Lainnya &nbsp;
<input id='lainTR5' name='lainTR5' type='text'></td>
<?php }else if($_SESSION['statusR5']=='Spekulasi'){?>
<td><input class='checkbox' id='Lindung' name='tupemburek' type='radio' value='Lindung Nilai'> Lindung Nilai <br/>
<input class='checkbox' id='Gain' name='tupemburek' type='radio' value='Gain'> Gain <br/>
<input class='checkbox' id='Spekulasi' name='tupemburek' type='radio' value='Spekulasi' checked> Spekulasi <br/>
<input class='checkbox' id='LainnyaTPR' name='tupemburek' type='radio' value='Lainnya'> Lainnya &nbsp;
<input id='lainTR5' name='lainTR5' type='text'></td>
<?php }else{?>
<td><input class='checkbox' id='Lindung' name='tupemburek' type='radio' value='Lindung Nilai' > Lindung Nilai <br/>
<input class='checkbox' id='Gain' name='tupemburek' type='radio' value='Gain'> Gain <br/>
<input class='checkbox' id='Spekulasi' name='tupemburek' type='radio' value='Spekulasi'> Spekulasi <br/>
<input class='checkbox' id='LainnyaTPR' name='tupemburek' type='radio' value='Lainnya'> Lainnya &nbsp;
<input id='lainTR5' name='lainTR5' type='text'></td>
<?php }?>

</tr>
<tr>
<td valign="top">Pengalaman Investasi <font color="red">*</font></td>
<td valign="top">:</td>
<?php if($_SESSION['investasi5']=='Ya, Bidang'){?>
<td><input class='checkbox' id='yapi' name='investasi5' type='radio' value='Ya, Bidang' checked> Ya, Bidang : &nbsp;
<input id='bidanginv' name='bidanginv' type='text' value="<?php echo $_SESSION['bidanginv']?>"><br/>
<input class='checkbox' id='tidakpi' name='investasi5' type='radio' value='Tidak'> Tidak</td>
<?php }else if($_SESSION['investasi5']=='Tidak'){?>
<td><input class='checkbox' id='yapi' name='investasi5' type='radio' value='Ya, Bidang'> Ya, Bidang : &nbsp;
<input id='bidanginv' name='bidanginv' type='text'><br/>
<input class='checkbox' id='tidakpi' name='investasi5' type='radio' value='Tidak' checked> Tidak</td>
<?php }else{?>
<td><input class='checkbox' id='yapi' name='investasi5' type='radio' value='Ya, Bidang'> Ya, Bidang : &nbsp;
<input id='bidanginv' name='bidanginv' type='text'><br/>
<input class='checkbox' id='tidakpi' name='investasi5' type='radio' value='Tidak'> Tidak</td>
<?php }?>
</tr>
<tr>
<td>Apakah Anda memiliki anggota keluarga yang bekerja di BAPPEBTI/Bursa Berjangka/ Kliring Berjangka? <font color="red">*</font></td>
<td valign='top'>:</td>
<?php if($_SESSION['anggotaK5']=='Ya'){?>
<td valign='top'><input class='checkbox' id='yaakb' name='anggotaK5' type='radio' value='Ya' checked> Ya,&nbsp;
<input id='namaAK' name='namaAK' type='text' value="<?php echo $_SESSION['namaAK']?>"><br/>
<input class='checkbox' id='tidakakb' name='anggotaK5' type='radio' value='Tidak'> Tidak</td>
<?php }else if($_SESSION['anggotaK5']=='Tidak'){?>
<td valign='top'><input class='checkbox' id='yaakb' name='anggotaK5' type='radio' value='Ya'> Ya,&nbsp;
<input id='namaAK' name='namaAK' type='text'><br/>
<input class='checkbox' id='tidakakb' name='anggotaK5' type='radio' value='Tidak' checked> Tidak</td>
<?php }else{?>
<td valign='top'><input class='checkbox' id='yaakb' name='anggotaK5' type='radio' value='Ya'> Ya,&nbsp;
<input id='namaAK' name='namaAK' type='text'><br/>
<input class='checkbox' id='tidakakb' name='anggotaK5' type='radio' value='Tidak'> Tidak</td>
<?php }?>
</tr>
<tr>
<td height='53'>Apakah Anda telah dinyatakan pailit oleh Pengadilan ? <font color="red">*</font></td>
<td valign='top'>:</td>
<?php if($_SESSION['pengadilan5']=='Ya'){?>
<td valign='top'><input class='checkbox' name='pengadilan5' type='radio' value='Ya' checked> Ya &nbsp;&nbsp;&nbsp;
<input class='checkbox' name='pengadilan5' type='radio' value='Tidak'> Tidak</td>
<?php }else if($_SESSION['pengadilan5']=='Tidak'){?>
<td valign='top'><input class='checkbox' name='pengadilan5' type='radio' value='Ya'> Ya &nbsp;&nbsp;&nbsp;
<input class='checkbox' name='pengadilan5' type='radio' value='Tidak' checked> Tidak</td>
<?php }else{?>
<td valign='top'><input class='checkbox' name='pengadilan5' type='radio' value='Ya'> Ya &nbsp;&nbsp;&nbsp;
<input class='checkbox' name='pengadilan5' type='radio' value='Tidak'> Tidak</td>
<?php }?>
</tr>
</table>
<br/><table align='left' width='100%' border='0'>
<tr>
<td colspan='5' align='center' style='font-size:18px'><b>PIHAK YANG DIHUBUNGI DALAM KEADAAN DARURAT</b><br><hr><br></td>
</tr>
<tr>
<td colspan='5'>Dalam keadaan darurat, pihak yang dapat dihubungi</td>
</tr>
<tr>
<td width='195'>Nama <font color="red">*</font></td>
<td width='3'>:</td>
<td width='578'><input class='nama' name='nama5' type='text' size='40' value="<?php echo $_SESSION['nama5'] ?>"></td>
</tr>
<tr>
<td>Alamat <font color="red">*</font></td>
<td>:</td>
<td><input name='alamat5' type='text' size='40' value="<?php echo $_SESSION['alamat5']?>"></td>
</tr>
<tr>
<td>Kode Pos <font color="red">*</font></td>
<td>:</td>
<td><input class='kodeae' name='kodeP5' type='text' size='30' value="<?php echo $_SESSION['kodeP5']?>" onKeyPress="return numbersonly(event)"></td>
</tr>
<tr>
<td>No. Telp <font color="red">*</font></td>
<td>:</td>
<td><input name='tl5' type='text' size='30' value="<?php echo $_SESSION['tl5']?>" onKeyPress="return numbersonly(event)"></td>
</tr>
<tr>
<td>Hubungan dengan anda <font color="red">*</font></td>
<td>:</td>
<td><input name='hub5' type='text' value="<?php echo $_SESSION['hub5']?>" ></td>
</tr>
</table>
<br/><table align='center' width='100%' border='0'>
<tr>
<td align='center' colspan='5'  style='font-size:18px' ><b>PEKERJAAN</b><br><hr><br></td>
</tr>
<tr>
<td valign="top">Pekerjaan <font color="red">*</font></td>
<td valign="top">:</td>
<?php if($_SESSION['kerja5']=='Swasta'){?>
<td><input class='checkbox' id='Swasta' name='kerja5' type='radio' value='Swasta' checked> Swasta <br/>
<input class='checkbox' id='Wiraswasta' name='kerja5' type='radio' value='Wiraswasta'> Wiraswasta <br/>
<input class='checkbox' id='IbuRT' name='kerja5' type='radio' value='Ibu RT'> Ibu RT <br/>
<input class='checkbox' id='Profesional' name='kerja5' type='radio' value='Profesional'> Profesional <br/>
<input class='checkbox' id='PegawaiNegeri' name='kerja5' type='radio' value='Pegawai Negeri'> Pegawai Negeri <br/>
<input class='checkbox' id='Mahasiswa' name='kerja5' type='radio' value='Mahasiswa'> Mahasiswa <br/>
<input class='checkbox' id='Lainnyapek' name='kerja5' type='radio' value='Lainnya'> Lain-lainya, Sebutkan
<input class='kodeae' id='lainPKJ5' name='lainPKJ5' type='text'></td>
<?php }else if($_SESSION['kerja5']=='Wiraswasta'){?>
<td><input class='checkbox' id='Swasta' name='kerja5' type='radio' value='Swasta'> Swasta <br/>
<input class='checkbox' id='Wiraswasta' name='kerja5' type='radio' value='Wiraswasta' checked> Wiraswasta <br/>
<input class='checkbox' id='IbuRT' name='kerja5' type='radio' value='Ibu RT'> Ibu RT <br/>
<input class='checkbox' id='Profesional' name='kerja5' type='radio' value='Profesional'> Profesional <br/>
<input class='checkbox' id='PegawaiNegeri' name='kerja5' type='radio' value='Pegawai Negeri'> Pegawai Negeri <br/>
<input class='checkbox' id='Mahasiswa' name='kerja5' type='radio' value='Mahasiswa'> Mahasiswa <br/>
<input class='checkbox' id='Lainnyapek' name='kerja5' type='radio' value='Lainnya'> Lain-lainya, Sebutkan
<input class='kodeae' id='lainPKJ5' name='lainPKJ5' type='text'></td>
<?php }else if($_SESSION['kerja5']=='Ibu RT'){?>
<td><input class='checkbox' id='Swasta' name='kerja5' type='radio' value='Swasta'> Swasta <br/>
<input class='checkbox' id='Wiraswasta' name='kerja5' type='radio' value='Wiraswasta'> Wiraswasta <br/>
<input class='checkbox' id='IbuRT' name='kerja5' type='radio' value='Ibu RT' checked> Ibu RT <br/>
<input class='checkbox' id='Profesional' name='kerja5' type='radio' value='Profesional'> Profesional <br/>
<input class='checkbox' id='PegawaiNegeri' name='kerja5' type='radio' value='Pegawai Negeri'> Pegawai Negeri <br/>
<input class='checkbox' id='Mahasiswa' name='kerja5' type='radio' value='Mahasiswa'> Mahasiswa <br/>
<input class='checkbox' id='Lainnyapek' name='kerja5' type='radio' value='Lainnya'> Lain-lainya, Sebutkan
<input class='kodeae' id='lainPKJ5' name='lainPKJ5' type='text'></td>
<?php }else if($_SESSION['kerja5']=='Profesional'){?>
<td><input class='checkbox' id='Swasta' name='kerja5' type='radio' value='Swasta'> Swasta <br/>
<input class='checkbox' id='Wiraswasta' name='kerja5' type='radio' value='Wiraswasta'> Wiraswasta <br/>
<input class='checkbox' id='IbuRT' name='kerja5' type='radio' value='Ibu RT'> Ibu RT <br/>
<input class='checkbox' id='Profesional' name='kerja5' type='radio' value='Profesional' checked> Profesional <br/>
<input class='checkbox' id='PegawaiNegeri' name='kerja5' type='radio' value='Pegawai Negeri'> Pegawai Negeri <br/>
<input class='checkbox' id='Mahasiswa' name='kerja5' type='radio' value='Mahasiswa'> Mahasiswa <br/>
<input class='checkbox' id='Lainnyapek' name='kerja5' type='radio' value='Lainnya'> Lain-lainya, Sebutkan
<input class='kodeae' id='lainPKJ5' name='lainPKJ5' type='text'></td>
<?php }else if($_SESSION['kerja5']=='Pegawai Negeri'){?>
<td><input class='checkbox' id='Swasta' name='kerja5' type='radio' value='Swasta'> Swasta <br/>
<input class='checkbox' id='Wiraswasta' name='kerja5' type='radio' value='Wiraswasta'> Wiraswasta <br/>
<input class='checkbox' id='IbuRT' name='kerja5' type='radio' value='Ibu RT'> Ibu RT <br/>
<input class='checkbox' id='Profesional' name='kerja5' type='radio' value='Profesional'> Profesional <br/>
<input class='checkbox' id='PegawaiNegeri' name='kerja5' type='radio' value='Pegawai Negeri' checked> Pegawai Negeri <br/>
<input class='checkbox' id='Mahasiswa' name='kerja5' type='radio' value='Mahasiswa'> Mahasiswa <br/>
<input class='checkbox' id='Lainnyapek' name='kerja5' type='radio' value='Lainnya'> Lain-lainya, Sebutkan
<input class='kodeae' id='lainPKJ5' name='lainPKJ5' type='text'></td>
<?php }else if($_SESSION['kerja5']=='Mahasiswa'){?>
<td><input class='checkbox' id='Swasta' name='kerja5' type='radio' value='Swasta'> Swasta <br/>
<input class='checkbox' id='Wiraswasta' name='kerja5' type='radio' value='Wiraswasta'> Wiraswasta <br/>
<input class='checkbox' id='IbuRT' name='kerja5' type='radio' value='Ibu RT'> Ibu RT <br/>
<input class='checkbox' id='Profesional' name='kerja5' type='radio' value='Profesional'> Profesional <br/>
<input class='checkbox' id='PegawaiNegeri' name='kerja5' type='radio' value='Pegawai Negeri'> Pegawai Negeri <br/>
<input class='checkbox' id='Mahasiswa' name='kerja5' type='radio' value='Mahasiswa' checked> Mahasiswa <br/>
<input class='checkbox' id='Lainnyapek' name='kerja5' type='radio' value='Lainnya'> Lain-lainya, Sebutkan
<input class='kodeae' id='lainPKJ5' name='lainPKJ5' type='text'></td>
<?php }else if($_SESSION['kerja5']=='Lainnya'){?>
<td><input class='checkbox' id='Swasta' name='kerja5' type='radio' value='Swasta'> Swasta <br/>
<input class='checkbox' id='Wiraswasta' name='kerja5' type='radio' value='Wiraswasta'> Wiraswasta <br/>
<input class='checkbox' id='IbuRT' name='kerja5' type='radio' value='Ibu RT'> Ibu RT <br/>
<input class='checkbox' id='Profesional' name='kerja5' type='radio' value='Profesional'> Profesional <br/>
<input class='checkbox' id='PegawaiNegeri' name='kerja5' type='radio' value='Pegawai Negeri'> Pegawai Negeri <br/>
<input class='checkbox' id='Mahasiswa' name='kerja5' type='radio' value='Mahasiswa'> Mahasiswa <br/>
<input class='checkbox' id='Lainnyapek' name='kerja5' type='radio' value='Lainnya' checked> Lain-lainya, Sebutkan
<input class='kodeae' id='lainPKJ5' name='lainPKJ5' type='text' value="<?php echo $_SESSION['lainPKJ5']?>"></td>
<?php }else {?>
<td><input class='checkbox' id='Swasta' name='kerja5' type='radio' value='Swasta'> Swasta <br/>
<input class='checkbox' id='Wiraswasta' name='kerja5' type='radio' value='Wiraswasta'> Wiraswasta <br/>
<input class='checkbox' id='IbuRT' name='kerja5' type='radio' value='Ibu RT'> Ibu RT <br/>
<input class='checkbox' id='Profesional' name='kerja5' type='radio' value='Profesional'> Profesional <br/>
<input class='checkbox' id='PegawaiNegeri' name='kerja5' type='radio' value='Pegawai Negeri'> Pegawai Negeri <br/>
<input class='checkbox' id='Mahasiswa' name='kerja5' type='radio' value='Mahasiswa'> Mahasiswa <br/>
<input class='checkbox' id='Lainnyapek' name='kerja5' type='radio' value='Lainnya'> Lain-lainya, Sebutkan
<input class='kodeae' id='lainPKJ5' name='lainPKJ5' type='text'></td>
<?php }?>
</tr>
<tr>
<td>Nama Perusahaan <font color="red">*</font></td>
<td>:</td>
<td><input name='usaha5' type='text' size='50' value="<?php echo $_SESSION['usaha5']?>"></td>
</tr>
<tr>
<td>Bidang Usaha <font color="red">*</font></td>
<td>:</td>
<td><input name='bidang5' type='text' value="<?php echo $_SESSION['bidang5']?>"></td>
</tr>
<tr>
<td>Jabatan <font color="red">*</font></td>
<td>:</td>
<td><input class='kodeae' name='jabat5' type='text' value="<?php echo $_SESSION['jabat5']?>"></td>
</tr>
<tr>
<td>Lama Bekerja <font color="red">*</font></td>
<td>:</td>
<td><input class='kodeae' name='lama5' type='text' value="<?php echo $_SESSION['lama5'] ?>" onKeyPress="return numbersonly(event)">&nbsp;&nbsp;Tahun</td>
</tr>
<tr>
<td>Kantor Sebelumnya <font color="red">*</font></td>
<td>:</td>
<td><input class='kodeae' name='kantor5' type='text' value="<?php echo $_SESSION['kantor5']?>" onKeyPress="return numbersonly(event)">&nbsp;&nbsp;Tahun</td>
</tr>
<tr>
<td>Alamat Kantor <font color="red">*</font></td>
<td>:</td>
<td><input name='alamatK5' type='text' size='40' value="<?php echo $_SESSION['alamatK5']?>"></td>
</tr>
<tr>
<td>Kode Pos <font color="red">*</font></td>
<td>:</td>
<td><input class='pos' name='kdpos5' type='text' value="<?php echo $_SESSION['kdpos5']?>" onKeyPress="return numbersonly(event)"></td>
</tr>
<tr>
<td>No. Telp Kantor <font color="red">*</font></td>
<td>:</td>
<td><input class='kodeae' name='notel5' type='text' value="<?php echo $_SESSION['notel5']?>" size='30' onKeyPress="return numbersonly(event)"></td>
</tr>
<tr>
<td>No. Faksimili <font color="red">*</font></td>
<td>:</td>
<td><input class='kodeae' name='fx5' type='text' size='30' value="<?php echo $_SESSION['fx5']?>" onKeyPress="return numbersonly(event)"></td>
</tr>
</table>
<br/><table align='center' width='100%' border='0'>
<tr>
<td colspan='5' align='center' style='font-size:18px'><b>DAFTAR KEKAYAAN</b><br><hr><br></td>
</tr>
<td valign='top'>Penghasilan Per tahun <font color="red">*</font></td>
<td valign='top'>:</td>

<?php if($_SESSION['hasil5']=='Antara 100-250 juta'){?>
<td><input class='checkbox' name='hasil5' type='radio' value='Antara 100-250 juta' checked> Antara 100-250 juta<br/>
<input class='checkbox' name='hasil5' type='radio' value='Antara 250-500 juta'> Antara 250-500 juta<br/>
<input class='checkbox' name='hasil5' type='radio' value='Di atas 500 juta'> Di atas 500 juta<br/>
</td>
<?php }else if($_SESSION['hasil5']=='Antara 250-500 juta'){?>
<td><input class='checkbox' name='hasil5' type='radio' value='Antara 100-250 juta'> Antara 100-250 juta<br/>
<input class='checkbox' name='hasil5' type='radio' value='Antara 250-500 juta' checked> Antara 250-500 juta<br/>
<input class='checkbox' name='hasil5' type='radio' value='Di atas 500 juta'> Di atas 500 juta<br/>
</td>
<?php }else if($_SESSION['hasil5']=='Antara 250-500 juta'){?>
<td><input class='checkbox' name='hasil5' type='radio' value='Antara 100-250 juta'> Antara 100-250 juta<br/>
<input class='checkbox' name='hasil5' type='radio' value='Antara 250-500 juta'> Antara 250-500 juta<br/>
<input class='checkbox' name='hasil5' type='radio' value='Di atas 500 juta' checked> Di atas 500 juta<br/>
</td>
<?php }else{?>
<td><input class='checkbox' name='hasil5' type='radio' value='Antara 100-250 juta'> Antara 100-250 juta<br/>
<input class='checkbox' name='hasil5' type='radio' value='Antara 250-500 juta'> Antara 250-500 juta<br/>
<input class='checkbox' name='hasil5' type='radio' value='Di atas 500 juta'> Di atas 500 juta<br/>
</td>
<?php }?>
<tr>
<td><strong>Daftar Kekayaan</strong></td>
</tr>
<tr>
<td>Rumah Lokasi <font color="red">*</font></td>
<td>:</td>
<td><input name='rulok5' type='text' size='40' value="<?php echo $_SESSION['rulok5']?>"></td>
</tr>
<tr>
<td>Nilai NJOP <font color="red">*</font></td>
<td>:</td>
<td><input name='NJOP5' type='text' size='26' value="<?php echo $_SESSION['NJOP5']?>"></td>
</tr>
<tr>
<td>Deposit Bank <font color="red">*</font></td>
<td>:</td>
<td><input name='deposit5' type='text' size='26' value="<?php echo $_SESSION['deposit5']?>"></td>
</tr>
<tr>
<td>Jumlah <font color="red">*</font></td>
<td>:</td>
<td><input name='jml5' type='text' size='26' value="<?php echo $_SESSION['jml5']?>"></td>
</tr>
<tr>
<td>Lainnya</td>
<td>:</td>
<td><input name='lain5' type='text' size='26' value="<?php echo $_SESSION['lain5']?>"></td>
</tr>
</table>
<br/>
<table align='center' width='100%' border='0'>
<tr>
<td align='center' colspan='5' style='font-size:18px'><b>REKENING BANK NASABAH UNTUK PENYETORAN DAN PENARIKAN MARGIN</b><br><hr><br></td>
</tr>
<tr>
<td colspan='5'>Rekening Bank Nasabah Untuk Penyetoran dan Penarikan Margin (hanya rekening dibawah ini yang dapat Saudara pergunakan untuk lalulintas margin)
</td>
</tr>
<tr>
<td colspan="3"></td>
</tr>
<tr>
<td>Nama Bank <font color="red">*</font></td>
<td>:</td>
<td><input class='nama' id='bank5' name='bank5' type='text' size='27' value="<?php echo $_SESSION['bank5']?>"></td>
</tr>
<tr>
<td>Cabang <font color="red">*</font></td>
<td>:</td>
<td><input class='nama' id='cab5' name='cab5' type='text' size='27' value="<?php echo $_SESSION['cab5']?>"></td>
</tr>
<tr>
<td>Nomor A/C <font color="red">*</font></td>
<td>:</td>
<td><input class='nama' id='noAC5' name='noAC5' type='text' size='27' value="<?php echo $_SESSION['noAC5']?>"></td>
</tr>
<tr>
<td>No. Telp </td>
<td>:</td>
<td><input class='kodeae' id='tel5' name='tel5' type='text' size='27' value="<?php echo $_SESSION['tel5']?>"></td>
</tr>
<tr>
<td valign="top">Jenis Rekening <font color="red">*</font></td>
<td valign="top">:</td>
<?php if($_SESSION['JenisR5']=='Giro'){?>
<td><input class='checkbox' id='Giro' name='JenisR5' type='radio' value='Giro' checked> Giro<br/>
<input class='checkbox' id='Tabungan' name='JenisR5' type='radio' value='Tabungan'> Tabungan<br/>
<input class='checkbox' id='Lainnyajr' name='JenisR5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input class='nama' id='lainJR15' name='lainJR15' type='text'></td>
<?php } else if($_SESSION['JenisR5']=='Tabungan'){?>
<td><input class='checkbox' id='Giro' name='JenisR5' type='radio' value='Giro'> Giro<br/>
<input class='checkbox' id='Tabungan' name='JenisR5' type='radio' value='Tabungan' checked> Tabungan<br/>
<input class='checkbox' id='Lainnyajr' name='JenisR5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input class='nama' id='lainJR15' name='lainJR15' type='text'></td>
<?php } else if($_SESSION['JenisR5']=='Lainnya'){?>
<td><input class='checkbox' id='Giro' name='JenisR5' type='radio' value='Giro'> Giro<br/>
<input class='checkbox' id='Tabungan' name='JenisR5' type='radio' value='Tabungan'> Tabungan<br/>
<input class='checkbox' id='Lainnyajr' name='JenisR5' type='radio' value='Lainnya' checked> Lainnya &nbsp;
<input class='nama' id='lainJR15' name='lainJR15' type='text' value="<?php echo $_SESSION['lainJR15']?>"></td>
<?php }else{?>
<td><input class='checkbox' id='Giro' name='JenisR5' type='radio' value='Giro'> Giro<br/>
<input class='checkbox' id='Tabungan' name='JenisR5' type='radio' value='Tabungan'> Tabungan<br/>
<input class='checkbox' id='Lainnyajr' name='JenisR5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input class='nama' id='lainJR15' name='lainJR15' type='text'></td>
<?php }?>
</tr>
<tr>
<td>Nama Bank</td>
<td>:</td>
<td><input class='nama' id='nabank5' name='nabank5' type='text' size='27' value="<?php echo $_SESSION['nabank5']?>"></td>
</tr>
<tr>
<td>Cabang</td>
<td>:</td>
<td><input class='nama' id='caba5' name='caba5' type='text' size='27' value="<?php echo $_SESSION['caba5']?>"></td>
</tr>
<tr>
<td>Nomor A/C</td>
<td>:</td>
<td><input class='nama' id='ac5' name='ac5' type='text' size='27' value="<?php echo $_SESSION['ac5']?>"></td>
</tr>
<tr>
<td>No. Telp</td>
<td>:</td>
<td><input class='kodeae' id='tlp5' name='tlp5' type='text' size='27' value="<?php echo $_SESSION['tlp5']?>"></td>
</tr>
<tr>
<td valign="top">Jenis Rekening</td>
<td valign="top">:</td>
<?php if($_SESSION['reken5']=='Giro'){?>
<td><input class='checkbox' id='Giro2' name='reken5' type='radio' value='Giro' checked> Giro<br/>
<input class='checkbox' id='Tabungan2' name='reken5' type='radio' value='Tabungan'> Tabungan<br/>
<input class='checkbox' id='Lainnyajr2' name='reken5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input class='nama' id='lainJR25' name='lainJR25' type='text'></td>
<?php } else if($_SESSION['reken5']=='Tabungan'){?>
<td><input class='checkbox' id='Giro2' name='reken5' type='radio' value='Giro'> Giro<br/>
<input class='checkbox' id='Tabungan2' name='reken5' type='radio' value='Tabungan' checked> Tabungan<br/>
<input class='checkbox' id='Lainnyajr2' name='reken5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input class='nama' id='lainJR25' name='lainJR25' type='text'></td>
<?php } else if($_SESSION['reken5']=='Lainnya'){?>
<td><input class='checkbox' id='Giro2' name='reken5' type='radio' value='Giro'> Giro<br/>
<input class='checkbox' id='Tabungan2' name='reken5' type='radio' value='Tabungan'> Tabungan<br/>
<input class='checkbox' id='Lainnyajr2' name='reken5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input class='nama' id='lainJR25' name='lainJR25' type='text'></td>
<?php } else {?>
<td><input class='checkbox' id='Giro2' name='reken5' type='radio' value='Giro'> Giro<br/>
<input class='checkbox' id='Tabungan2' name='reken5' type='radio' value='Tabungan'> Tabungan<br/>
<input class='checkbox' id='Lainnyajr2' name='reken5' type='radio' value='Lainnya'> Lainnya &nbsp;
<input class='nama' id='lainJR25' name='lainJR25' type='text' value="<?php echo $_SESSION['lainJR25']?>"></td>
<?php } ?>
</tr>
</table>
<br/>
<center><h3>DOKUMEN YANG DILAMPIRKAN</h3></center>
<table align='center' width='100%' border='0'>
<tr>
<td colspan='5' align='center'><strong>Pilih Salah Satu Dokumen Wajib Isi (Format Gambar .PNG / .JPG / .JPE / .JPEG)</strong></td>
</tr>
<tr>
<td width='304'>Rekening Koran Bank / Tagihan Kartu Kredit</td>
<td width='3' valign='top'>:</td>
<td width='221' valign='top'>
<input name='tagihan5' type='file'>&nbsp;(Max size:1MB)
</td>
</tr>
<tr>
<td>Rekening Listrik / Telepon</td>
<td>:</td>
<td>
<input name='rektel5' type='file'>&nbsp;(Max size:1MB)
</td>
</tr>
<tr>
<td>Tambahan Dokumen lain 1 (Landscape)</td>
<td>:</td>
<td>
<input name='tmbh15' type='file'>&nbsp;(Max size:1MB)
</td>
</tr>
<tr>
<td>Tambahan Dokumen lain 2 (Portrait)</td>
<td>:</td>
<td>
<input name='tmbh25' type='file'>&nbsp;(Max size:1MB)
</td>
</tr>
</table>
<center>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------</center>
<table align='center' width='100%' border='0'>
<tr>
<td colspan='5' align='center'><strong>Dokumen Wajib Isi (Format Gambar .PNG / .JPG / .JPE / .JPEG)</strong></td>
</tr>
<tr>
<td width='304'>Foto terkini <font color="red">*</font></td>
<td width='3' valign='top'>:</td>
<td width='221' valign='top'>
<input name='kini5' type='file'>&nbsp;(Max size:1MB)
</td>
</tr>
<tr>
<td>KTP / SIM / Paspor <font color="red">*</font></td>
<td>:</td>
<td>
<input name='KTP5' type='file'>&nbsp;(Max size:1MB)
</td>
</tr>
</table>
<br/><table align='center' width='100%' border='0'>
<tr>
<td align='center' colspan='5'><h3>PERNYATAAN KEBENARAN DAN TANGGUNG JAWAB</h3><br><hr><br></td>
</tr>
<tr>
<td height='104' colspan='5' align="center">Dengan mengisi kolom "YA" di bawah ini, saya menyatakan bahwa semua informasi dan semua dokumen yang saya lampirkan dalam APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE adalah benar dan tepat, Saya akan bertanggung jawab penuh apabila dikemudian hari terjadi sesuatu hal sehubungan dengan ketidakbenaran data yang saya berikan.
</td>
</tr>
<tr>
<td width='302'>Pernyataan Kebenaran dan Tanggung Jawab</td>
<td width='3' valign='top'>:</td>
<td width='339' valign='top'>
<input class='checkbox' name='nerima5' type='radio' value='Ya' onclick="myFunction()"> Ya &nbsp;&nbsp;&nbsp;
<input class='checkbox' id='tidak' name='nerima5' type='radio' value='Tidak'> Tidak
</td>
</tr>
<tr>

<td>Menyatakan pada Tanggal</td>
<td>:</td>
<td>&nbsp;
<input class='kodeae' type='text' name='t1' id='tanggalya' readonly>

</td>

</tr>
</table>
<br>
<br>
<table align='center' width='20%'>
<tr>
<td align='center'>
<input type="button" value="Submit" onclick='validateForm()'/></td>
</tr>
</table>
<input type="hidden" name="page1" value="<?php 
echo $_SESSION['page'];
?>">
</form>
</div>
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