<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Page 6</title>
<link rel="stylesheet" type="text/css" href="css/style.css"></head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>

<script type='text/javascript'>
$(document).ready(function()
{
$('#no1').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no2').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no2').disabled=true;
			document.getElementById('no3').disabled=true;
			document.getElementById('no4').disabled=true;
			document.getElementById('no5').disabled=true;
			document.getElementById('no6').disabled=true;
			document.getElementById('no7').disabled=true;
			document.getElementById('no8').disabled=true;
			document.getElementById('no9').disabled=true;
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no2').attr('checked', false);
			$('#no3').attr('checked', false);
			$('#no4').attr('checked', false);
			$('#no5').attr('checked', false);
			$('#no6').attr('checked', false);
			$('#no7').attr('checked', false);
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
	});
	$('#no2').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no3').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no3').disabled=true;
			document.getElementById('no4').disabled=true;
			document.getElementById('no5').disabled=true;
			document.getElementById('no6').disabled=true;
			document.getElementById('no7').disabled=true;
			document.getElementById('no8').disabled=true;
			document.getElementById('no9').disabled=true;
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no3').attr('checked', false);
			$('#no4').attr('checked', false);
			$('#no5').attr('checked', false);
			$('#no6').attr('checked', false);
			$('#no7').attr('checked', false);
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });
	$('#no3').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no4').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no4').disabled=true;
			document.getElementById('no5').disabled=true;
			document.getElementById('no6').disabled=true;
			document.getElementById('no7').disabled=true;
			document.getElementById('no8').disabled=true;
			document.getElementById('no9').disabled=true;
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no4').attr('checked', false);
			$('#no5').attr('checked', false);
			$('#no6').attr('checked', false);
			$('#no7').attr('checked', false);
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no4').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no5').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no5').disabled=true;
			document.getElementById('no6').disabled=true;
			document.getElementById('no7').disabled=true;
			document.getElementById('no8').disabled=true;
			document.getElementById('no9').disabled=true;
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no5').attr('checked', false);
			$('#no6').attr('checked', false);
			$('#no7').attr('checked', false);
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no5').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no6').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no6').disabled=true;
			document.getElementById('no7').disabled=true;
			document.getElementById('no8').disabled=true;
			document.getElementById('no9').disabled=true;
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no6').attr('checked', false);
			$('#no7').attr('checked', false);
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no6').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no7').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no7').disabled=true;
			document.getElementById('no8').disabled=true;
			document.getElementById('no9').disabled=true;
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no7').attr('checked', false);
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no7').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no8').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no8').disabled=true;
			document.getElementById('no9').disabled=true;
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no8').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no9').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no9').disabled=true;
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no9').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no10').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no10').disabled=true;
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no10').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no11').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no11').disabled=true;
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no11').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no12').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no12').disabled=true;
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no12').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no13').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no13').disabled=true;
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no13').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no14').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no14').disabled=true;
			document.getElementById('no15').disabled=true;
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
		}
    });	
	$('#no14').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no15').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no15').disabled=true;
			$('#no15').attr('checked', false);
		}
    });


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
var x=$("input[name=menerima]:checked").val();
var x1_1=$("input[name=1_1]:checked").val();
var x1_2=$("input[name=1_2]:checked").val();
var x1_3=$("input[name=1_3]:checked").val();
var x1_4=$("input[name=1_4]:checked").val();
var x1_5=$("input[name=1_5]:checked").val();
var x1_6=$("input[name=1_6]:checked").val();
var x1_7=$("input[name=1_7]:checked").val();
var x1_8=$("input[name=1_8]:checked").val();
var x1_9=$("input[name=1_9]:checked").val();
var x1_10=$("input[name=1_10]:checked").val();
var x1_11=$("input[name=1_11]:checked").val();
var x1_12=$("input[name=1_12]:checked").val();
var x1_13=$("input[name=1_13]:checked").val();
var x1_14=$("input[name=1_14]:checked").val();
var x1_15=$("input[name=1_15]:checked").val();
var y=$('#tidak').val();

  if(x1_1==null || x1_1=="")
  {  
  alert("Silakan centang pernyataan bagian awal  'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_2==null || x1_2=="")
  {  
  alert("Silakan centang pernyataan bagian dua  'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_3==null || x1_3=="")
  {  
  alert("Silakan centang pernyataan No.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_4==null || x1_4=="")
  {  
  alert("Silakan centang pernyataan No.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_5==null || x1_5=="")
  {  
  alert("Silakan centang pernyataan No.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_6==null || x1_6=="")
  {  
  alert("Silakan centang pernyataan No.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_7==null || x1_7=="")
  {  
  alert("Silakan centang pernyataan No.5 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_8==null || x1_8=="")
  {  
  alert("Silakan centang pernyataan No.6 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_9==null || x1_9=="")
  {  
  alert("Silakan centang pernyataan No.7 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_10==null || x1_10=="")
  {  
  alert("Silakan centang pernyataan No.8 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_11==null || x1_11=="")
  {  
  alert("Silakan centang pernyataan No.9 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_12==null || x1_12=="")
  {  
  alert("Silakan centang pernyataan No.10 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_13==null || x1_13=="")
  {  
  alert("Silakan centang pernyataan No.11 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_14==null || x1_14=="")
  {  
  alert("Silakan centang pernyataan No.12 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_15==null || x1_15=="")
  {  
  alert("Silakan centang pernyataan No.13 'Saya sudah membaca dan memahami'");
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
 <div id="signup-form"><img src="image/logo-esandar.jpg" width="30%">
 <div id="signup-inner">
<h2 align="left"><p class="mda" align="left"><a href="delete1.php" style="font-size:20px;"><img src="image/mda.PNG" width="120px"></a></p></h2>
        	<div class="clearfix" id="header">
<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page602" value="6" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>
<form onSubmit="return validateForm()" action='function6_2.php' method='post' name='formku'>

<p align='right'>
Lampiran 2 Peraturan Kepala Badan Pengawas<br/>
Perdagangan Berjangka Komoditi<br/>
Nomor: 107/BAPPEBTI/PER/11/2013
</p>
<h3 align='center' style="font-size:18px;">Formulir Nomor 107.PBK.04.2
<p align='center style="font-size:18px;"'>DOKUMEN PEMBERITAHUAN ADANYA RISIKO YANG HARUS DISAMPAIKAN OLEH PIALANG<br/>
BERJANGKA UNTUK TRANSAKSI KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN
ALTERNATIF
</p></h3><br><br>
<table align="center" width="100%"  border="1">
<tr>
<td width="75%" align="justify">Dokumen Pemberitahuan Adanya Risiko ini disampaikan kepada Anda sesuai dengan Pasal 50 ayat (2) Undang-Undang Nomor 32 Tahun 1997 tentang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan Undang-undang Nomor 10 Tahun 2011 tentang Perubahan Atas Undang-Undang Nomor 32 Tahun 1997 Tentang Perdagangan Berjangka Komoditi.</td>
<td align='center' width="25%">
<input id='no1' class='checkbox' name='1_1' type='checkbox' value='saya sudah membaca dan memahami'><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td>Maksud dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif bisa mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan Anda mencukupi.
</td>
<td align='center'>
<input id='no2' class='checkbox'  name='1_2' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
</table>
<br/>
<table align="center" width="100%" border='1'>
<tr>
<td width='4%' align='center' valign='top'>1</td>
<td width='71%' align="justify">Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif belum tentu layak bagi semua investor. Anda dapat menderita kerugian dalam jumlah besar dan dalam jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah uang yang pertama kali Anda setor (Margin Awal) ke Pialang Berjangka Anda. Anda mungkin menderita kerugian seluruh Margin dan Margin tambahan yang ditempatkan pada Pialang Berjangka untuk mempertahankan posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif Anda. Hal ini disebabkan Perdagangan Berjangka sangat dipengaruhi oleh mekanisme leverage, dimana dengan jumlah investasi dalam bentuk yang relatif kecil dapat digunakan untuk membuka posisi dengan aset yang bernilai jauh lebih tinggi. Apabila Anda tidak siap dengan risiko seperti ini, sebaiknya Anda tidak melakukan perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif.</td>
<td width='25%' align='center'>
<input id='no3' class='checkbox' name='1_3' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>2</td>
<td align="justify">
Perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif mempunyai risiko dan mempunyai kemungkinan kerugian yang tidak terbatas yang jauh lebih besar dari jumlah uang yang disetor (Margin) ke Pialang Berjangka. Kontrak Derivatif dalam Sistem Perdagangan Alternatif sama dengan produk keuangan lainnya yang mempunyai risiko tinggi, Anda sebaiknya tidak menaruh risiko terhadap dana yang Anda tidak siap untuk menderita rugi, seperti tabungan pensiun, dana kesehatan atau dana untuk keadaan darurat, dana yang disediakan untuk pendidikan atau kepemilikan rumah, dana yang diperoleh dari pinjaman pendidikan atau gadai, atau dana yang digunakan untuk memenuhi kebutuhan sehari-hari.
</td>
<td align='center'>
<input id='no4' class='checkbox' name='1_4' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>3</td>
<td align="justify">Berhati-hatilah terhadap pernyataan bahwa Anda pasti mendapatkan keuntungan besar dari perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif. Meskipun perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif dapat memberikan keuntungan yang besar dan cepat, namun hal tersebut tidak pasti, bahkan dapat menimbulkan kerugian yang besar dan cepat juga. Seperti produk keuangan lainnya, tidak ada yang dinamakan "pasti untung".
</td>
<td align='center'>
<input id='no5' class='checkbox' name='1_5' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>4</td>
<td align="justify">Disebabkan adanya mekanisme leverage dan sifat dari transaksi Kontra Derivatif dalam Sistem Perdagangan Alternatif, Anda dapat merasakan dampak bahwa Anda menderita kerugian dalam waktu cepat. Keuntungan maupun kerugian dalam transaksi akan langsung dikredit atau didebet ke rekening Anda, paling lambat secara harian. Apabila pergerakan di pasar terhadap Kontrak Derivatif dalam Sistem Perdagangan Alternatif menurunkan nilai posisi Anda dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif, dengan kata lain berlawanan dengan posisi yang Anda ambil, Anda diwajibkan untuk menambah dana untuk pemenuhan kewajiban Margin ke perusahaan Pialang Berjangka. Apabila rekening Anda berada dibawah minimum Margin yang telah ditetapkan Lembaga Kliring Berjangka atau Pialang Berjangka, maka posisi Anda dapat dilikuidasi pada saat rugi, dan Anda wajib menyelesaikan defisit (jika ada) dalam rekening Anda.
</td>
<td align='center'>
<input id='no6' class='checkbox' name='1_6' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>5</td>
<td align="justify">Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tidak mungkin melikuidasi posisi. Pada umumnya Anda harus melakukan transaksi mengambil posisi yang berlawanan dengan maksud melikuidasi posisi (offset) jika ingin melikuidasi posisi dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif. Apabila Anda tidak dapat melikuidasi posisi Kontrak Derivatif dalam Sistem Perdagangan Alternatif, Anda tidak dapat merealisasikan keuntungan pada nilai posisi tersebut atau mencegah kerugian yang lebih tinggi. Kemungkinan tidak dapat melikuidasi dapat terjadi, antara lain: jika perdagangan berhenti dikarenakan aktivitas perdagangan yang tidak lazim pada Kontrak Derivatif atau subjek Kontrak Derivatif, atau terjadi kerusakan sistem pada Pialang Berjangka Peserta Sistem Perdagangan Alternatif atau Pedagang Berjangka Penyelenggara Sistem Perdagangan Alternatif. Bahkan apabila Anda dapat melikuidasi posisi tersebut, Anda mungkin terpaksa melakukannya pada harga yang menimbulkan kerugian besar.
</td>
<td align='center'>
<input id='no7' class='checkbox' name='1_7' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>6</td>
<td align="justify">Pada saat pasar dalam keadaan tertentu, Anda mungkin akan sulit atau tida mungkin mengelola risiko atas posisi terbuka Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan cara membuka posisi dengan nilai yang sama namun dengan posisi yang berlawanan dalam kontrak bulan yang berbeda, dalam pasar yang berbeda atau dalam "subjek Kontrak Derivatif dalam Sistem Perdagangan Alternatif" yang berbeda. Kemungkinan untuk tidak dapat mengambil posisi dalam rangka membatasi risiko yang timbul, contohnya; jika perdagangan dihentikan pada pasar yang berbeda disebabkan aktivitas perdagangan yang tidak lazim pada Kontrak Derivatif dalam Sistem Perdagangan Alternatif atau "Kontrak Derivatif dalam Sistem Perdagangan Alternatif".
</td>
<td align='center'>
<input id='no8' class='checkbox' name='1_8' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>7</td>
<td align="justify">Anda dapat menderita kerugian yang disebabkan kegagalan sistem informasi. Sebagaimana yang terjadi pada setiap transaksi keuangan, Anda dapat menderita kerugian jika amanat untuk melaksanakan transaksi Kontrak Derivatif dalam Sistem Perdagangan Alternatif tidak dapat dilakukan karena kegagalan sistem informasi di Bursa Berjangka, Pedagang Penyelenggara Sistem Perdagangan Alternatif , maupun sistem di Pialang Berjangka Peserta Sistem Perdagangan Alternatif yang mengelola posisi Anda. Kerugian Anda akan semakin besar jika Pialang Berjangka yang mengelola posisi Anda tidak memiliki sistem informasi cadangan atau prosedur yang layak.
</td>
<td align='center'>
<input id='no9' class='checkbox' name='1_9' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>8</td>
<td align="justify">Semua Kontrak Derivatif dalam Sistem Perdagangan Alternatif mempunyai risiko, dan tidak ada strategi berdagang yang dapat menjamin untuk menghilangkan risiko tersebut. Strategi dengan menggunakan kombinasi posisi seperti spread, dapat sama berisiko seperti posisi long atau short.Melakukan Perdagangan Berjangka memerlukan pengetahuan mengenai Kontrak Derivatif dalam Sistem Perdagangan Alternatif dan pasar berjangka.
</td>
<td align='center'>
<input id='no10' class='checkbox' name='1_10' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>9</td>
<td align="justify">Strategi perdagangan harian dalam Kontrak Derivatif dalam Sistem Perdagangan Alternatif dan produk lainnya memiliki risiko khusus. Seperti pada produk keuangan lainnya, pihak yang ingin membeli atau menjual Kontrak Derivatif dalam Sistem Perdagangan Alternatif yang sama dalam satu hari untuk mendapat keuntungan dari perubahan harga pada hari tersebut ("day traders") akan memiliki beberapa risiko tertentu antara lain jumlah komisi yang besar, risiko terkena efek pengungkit ("exposure to leverage"), dan persaingan dengan pedagang profesional. Anda harus mengerti risiko tersebut dan memiliki pengalaman yang memadai sebelum melakukan perdagangan harian ("day trading").
</td>
<td align='center'>
<input id='no11' class='checkbox' name='1_11' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>10</td>
<td align="justify">Menetapkan amanat bersyarat, Kontrak Derivatif dalam Sistem Perdagangan Alternatif dilikuidasi pada keadaan tertentu untuk membatasi rugi (stop loss), mungkin tidak akan dapat membatasi kerugian Anda sampai jumlah tertentu saja. Amanat bersyarat tersebut mungkin tidak dapat dilaksanakan karena terjadi kondisi pasar yang tidak memungkinkan melikuidasi Kontrak Derivatif dalam Sistem Perdagangan Alternatif.
</td>
<td align='center'>
<input id='no12' class='checkbox' name='1_12' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>11</td>
<td align="justify">Anda harus membaca dengan seksama dan memahami Perjanjian Pemberian Amanat Nasabah dengan Pialang Berjangka Anda sebelum melakukan transaksi Kontrak Derivatif dalam Sistem Perdagangan Alternatif.
</td>
<td align='center'>
<input id='no13' class='checkbox' name='1_13' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>12</td>
<td align="justify">Pernyataan singkat ini tidak dapat memuat secara rinci seluruh risiko atau aspek penting lainnya tentang Perdagangan Berjangka. Oleh karena itu Anda harus mempelajari kegiatan Perdagangan Berjangka secara cermat sebelum memutuskan melakukan transaksi.
</td>
<td align='center'>
<input id='no14' class='checkbox' name='1_14' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
<tr>
<td valign='top' align='center'>13</td>
<td valign="top">Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure) ini dibuat dalam Bahasa Indonesia.
</td>
<td align='center'>
<input id='no15' class='checkbox' name='1_15' type='checkbox' value='saya sudah membaca dan memahami' disabled><br/>
saya sudah membaca dan memahami
</td>
</tr>
</table><br/><br/>
<table align="center" width="70%" border='0'>
<tr>
<td align='center' colspan='5'><h3>PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO</h3><br></td>
</tr>
<tr>
<td align='center' colspan='5'>Dengan mengisi kolom "YA" di bawah, saya menyatakan bahwa saya telah menerima "DOKUMEN PEMBERITAHUAN ADANYA RISIKO" mengerti dan menyetujui isinya.<br><br></td>
</tr>
<tr>
<td width='38%'>Pernyataan menerima / tidak</td>
<td width='2%'>:</td>
<td width='60%'>
<input class='checkbox' name='menerima' type='radio' value='Ya' onclick="myFunction()">Ya
<input class='checkbox' id='tidak' name='menerima' type='radio' value='Tidak'>Tidak
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
<table align="center" width="70%" border='0'>
<tr>
<td width='581' align='center'>
<button id='submit' name='submit5' type='submit'>Submit</button>
</td>
</tr>
</table>
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
			echo "<script>document.location = 'openrealaccount.php';</script>";
	}
}
else
{
		echo "<script>document.location = 'openrealaccount.php';</script>";
}
?>