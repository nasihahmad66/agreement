<?php 
session_start(); 
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{
		
?>
<html>
<head><title>Page 6</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
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
			document.getElementById('no16').disabled=true;
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
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
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
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
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
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
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
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
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
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no7').attr('checked', false);
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
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
			document.getElementById('no16').disabled=true;
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
		}
    });	
	$('#no15').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no16').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no16').disabled=true;
			$('#no16').attr('checked', false);
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
var x1_16=$("input[name=1_16]:checked").val();
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
  else if(x1_16==null || x1_16=="")
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
</head>
<body>
 <div id="signup-form"><img src="image/logo-esandar.jpg" width="30%">
 <div id="signup-inner">
        <h2 align="left"><p class="mda" align="left"><a href="delete1.php" style="font-size:20px;"><img src="image/mda.PNG" width="120px"></a></p></h2>
        	<div class="clearfix" id="header">
<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" value="6" disabled> of <input class='paging' type="text" size="1" value="9" disabled></p>

<form onSubmit="return validateForm()" action='function6_1.php' method='post' name='formku'>
<p align='right'>Lampiran  2 Peraturan Kepala Badan Pengawas<br />
  Perdagangan  Berjangka Komoditi<br />
  Nomor:  107/BAPPEBTI/PER/11/2013</p>
<p align='center'>&nbsp;</p>
<h3 align='center'><b>Formulir  Nomor 107.PBK.04.1</b></h3>
<h3 align='center'><b>DOKUMEN PEMBERITAHUAN ADANYA  RISIKO YANG HARUS DISAMPAIKAN<br />
  OLEH PIALANG BERJANGKA UNTUK TRANSAKSI KONTRAK  BERJANGKA</b></h3>
</p>
<table align='center' width='100%' border='1' bordercolor='#000000'>
  <tr>
    <td width='75%' align="justify">Dokumen Pemberitahuan Adanya Risiko ini disampaikan  kepada Anda sesuai dengan Pasal 50 ayat (2) Undang-Undang Nomor 32 Tahun 1997  tentang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan  Undang-Undang Nomor 10 Tahun 2011 tentang Perubahan Atas Undang-Undang Nomor 32  Tahun 1997 Tentang Perdagangan Berjangka Komoditi.</td>
    <td width='25%' align="center">
      
        <input class='checkbox' id='no1' name='1_1' type='checkbox' align='middle' value="saya sudah membaca dan memahami" />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align="justify">Maksud dokumen ini adalah memberitahukan bahwa  kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Berjangka bisa  mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati  dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan Anda  mencukupi.</td>
    <td align="center">
      
        <input class='checkbox' id='no2' name='1_2' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<table width='100%' border='1' align='center' bordercolor='#000000'>
  <tr>
    <td width='6%' align='center' valign='top'>1</td>
    <td width='68%' align="justify">Perdagangan Kontrak Berjangka belum tentu layak bagi  semua investor. Anda dapat menderita kerugian dalam jumlah besar dan dalam  jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah  uang yang pertama kali Anda setor (Margin awal) ke Pialang Berjangka Anda. Anda  mungkin menderita kerugian seluruh Margin dan Margin tambahan yang ditempatkan  pada Pialang Berjangka untuk mempertahankan posisi Kontrak Berjangka Anda. Hal  ini disebabkan Perdagangan Berjangka sangat dipengaruhi oleh mekanisme leverage,  dimana dengan jumlah investasi dalam bentuk yang relatif kecil dapat digunakan  untuk membuka posisi dengan aset yang bernilai jauh lebih tinggi. Apabila Anda  tidak siap dengan risiko seperti ini, sebaiknya Anda tidak melakukan perdagangan  Kontrak Berjangka.</td>
    <td width='26%' align="center">
      
        <input class='checkbox' id='no3' name='1_3' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>2</td>
    <td align="justify">Perdagangan Kontrak Berjangka mempunyai risiko dan  mempunyai kemungkinan kerugian yang tidak terbatas yang jauh lebih besar dari  jumlah uang yang disetor (Margin) ke Pialang Berjangka. Kontrak Berjangka sama dengan  produk keuangan lainnya yang mempunyai risiko tinggi, Anda sebaiknya tidak  menaruh risiko terhadap dana yang Anda tidak siap untuk menderita rugi, seperti  tabungan pensiun, dana kesehatan atau dana untuk keadaan darurat, dana yang  disediakan untuk pendidikan atau kepemilikan rumah, dana yang diperoleh dari  pinjaman pendidikan atau gadai, atau dana yang digunakan untuk memenuhi kebutuhan  sehari-hari.</td>
    <td align="center">
      
        <input class='checkbox' id='no4' name='1_4' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>3</td>
    <td align="justify">Berhati-hatilah terhadap pernyataan bahwa Anda pasti  mendapatkan keuntungan besar dari perdagangan Kontrak Berjangka. Meskipun  perdagangan Kontrak Berjangka dapat memberikan keuntungan yang besar dan cepat,  namun hal tersebut tidak pasti, bahkan dapat menimbulkan kerugian yang besar  dan cepat juga. Seperti produk keuangan lainnya, tidak ada yang dinamakan  &ldquo;pasti untung&rdquo;.</td>
    <td align="center">
      
        <input class='checkbox' id='no5' name='1_5' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>4</td>
    <td align="justify">Disebabkan adanya mekanisme leverage dan sifat dari  transaksi Kontrak Berjangka, Anda dapat merasakan dampak bahwa Anda menderita  kerugian dalam waktu cepat. Keuntungan maupun kerugian dalam transaksi Kontrak Berjangka  akan langsung dikredit atau didebet ke rekening Anda, paling lambat secara  harian. Apabila pergerakan di pasar terhadap Kontrak Berjangka menurunkan nilai  posisi Anda dalam Kontrak Berjangka, Anda diwajibkan untuk menambah dana untuk  pemenuhan kewajiban Margin ke Pialang Berjangka. Apabila rekening Anda berada  dibawah minimum Margin yang telah ditetapkan Lembaga Kliring Berjangka atau  Pialang Berjangka, maka posisi Anda dapat dilikuidasi pada saat rugi, dan Anda  wajib menyelesaikan defisit (jika ada) dalam rekening Anda.</td>
    <td align="center">
      
        <input class='checkbox' id='no6' name='1_6' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>5</td>
    <td align="justify">Pada saat pasar dalam keadaan tertentu, Anda mungkin  akan sulit atau tidak mungkin melikuidasi posisi. Pada umumnya Anda harus  melakukan transaksi offset jika ingin melikuidasi posisi dalam Kontrak  Berjangka. Apabila Anda tidak dapat melikuidasi posisi Kontrak Berjangka, Anda  tidak dapat merealisasikan keuntungan pada nilai posisi tersebut atau mencegah  kerugian yang lebih tinggi. Kemungkinan tidak dapat melikuidasi dapat terjadi,  antara lain: jika perdagangan berhenti dikarenakan aktivitas perdagangan yang  tidak lazim pada Kontrak Berjangka atau subjek Kontrak Berjangka, terjadi  kerusakan sistem pada Bursa Berjangka atau Pialang Berjangka, atau posisi Anda  berada dalam pasar yang tidak likuid. Bahkan apabila Anda dapat melikuidasi  posisi tersebut, Anda mungkin terpaksa melakukannya pada harga yang menimbulkan  kerugian besar.</td>
    <td align="center">
      
        <input class='checkbox' id='no7' name='1_7' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>6</td>
    <td align="justify">Pada saat pasar dalam keadaan tertentu, Anda mungkin  akan sulit atau tidak mungkin mengelola risiko atas posisi terbuka Kontrak  Berjangka dengan cara membuka posisi dengan nilai yang sama namun dengan posisi  yang berlawanan dalam kontrak bulan yang berbeda, dalam pasar yang berbeda atau  dalam &ldquo;subjek Kontrak Berjangka&rdquo; yang berbeda. Kemungkinan untuk tidak dapat  mengambil posisi dalam rangka membatasi risiko yang timbul, contohnya: jika  perdagangan dihentikan pada pasar yang berbeda disebabkan aktivitas perdagangan  yang tidak lazim pada Kontrak Berjangka atau &ldquo;subjek Kontrak Berjangka&rdquo;.</td>
    <td align="center">
      
        <input class='checkbox' id='no8' name='1_8' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
</td>
  </tr>
  <tr>
    <td align='center' valign='top'>7</td>
    <td align="justify">Anda dapat diwajibkan untuk menyelesaikan Kontrak  Berjangka dengan penyerahan fisik dari &ldquo;subjek Kontrak Berjangka&rdquo;. Jika Anda  mempertahankan posisi penyelesaian fisik dalam Kontrak Berjangka sampai hari  terakhir perdagangan berdasarkan tanggal jatuh tempo Kontrak Berjangka, Anda  akan diwajibkan menyerahkan atau menerima penyerahan &ldquo;subjek Kontrak Berjangka&rdquo;  yang dapat mengakibatkan adanya penambahan biaya. Pengertian penyelesaian dapat  berbeda untuk suatu Kontrak Berjangka dengan Kontrak Berjangka lainnya atau  suatu Bursa Berjangka dengan Bursa Berjangka lainnya. Anda harus melihat secara  teliti mengenai penyelesaian dan kondisi penyerahan sebelum membeli atau menjual  Kontrak Berjangka.</td>
    <td align="center">
      
        <input class='checkbox' id='no9' name='1_9' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
</td>
  </tr>
  <tr>
    <td align='center' valign='top'>8</td>
    <td align="justify">Anda dapat menderita kerugian yang disebabkan  kegagalan sistem informasi. Sebagaimana yang terjadi pada setiap transaksi  keuangan, Anda dapat menderita kerugian jika amanat untuk melaksanakan  transaksi Kontrak Berjangka tidak dapat dilakukan karena kegagalan sistem  informasi di Bursa Berjangka, penyelenggara maupun sistem informasi di Pialang  Berjangka yang mengelola posisi Anda. Kerugian Anda akan semakin besar jika  Pialang Berjangka yang mengelola posisi Anda tidak memiliki sistem informasi  cadangan atau prosedur yang layak.</td>
    <td align="center">
      
        <input class='checkbox' id='no10' name='1_10' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
	</td>
  </tr>
  <tr>
    <td align='center' valign='top'>9</td>
    <td align="justify">Semua Kontrak Berjangka mempunyai risiko, dan tidak  ada strategi berdagang yang dapat menjamin untuk menghilangkan risiko tersebut.  Strategi dengan menggunakan kombinasi posisi seperti spread, dapat sama  berisiko seperti posisi long atau short. Melakukan Perdagangan Berjangka  memerlukan pengetahuan mengenai Kontrak Berjangka dan pasar berjangka.</td>
    <td align="center">
      
        <input class='checkbox' id='no11' name='1_11' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>10</td>
    <td align="justify">Strategi perdagangan harian dalam Kontrak Berjangka  dan produk lainnya memiliki risiko khusus. Seperti pada produk keuangan  lainnya, pihak yang ingin membeli atau menjual Kontrak Berjangka yang sama  dalam satu hari untuk mendapat keuntungan dari perubahan harga pada hari  tersebut (&ldquo;day traders&rdquo;) akan memiliki beberapa risiko tertentu antara lain  jumlah komisi yang besar, risiko terkena efek pengungkit (&ldquo;exposure to  leverage&rdquo;), dan persaingan dengan pedagang profesional. Anda harus mengerti  risiko tersebut dan memiliki pengalaman yang memadai sebelum melakukan  perdagangan harian (&ldquo;day trading&rdquo;).</td>
    <td align="center">
      
        <input class='checkbox' id='no12' name='1_12' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
 	</td>
  </tr>
  <tr>
    <td align='center' valign='top'>11</td>
    <td align="justify">Menetapkan amanat bersyarat, seperti Kontrak Berjangka  dilikuidasi pada keadaan tertentu untuk membatasi rugi (stop loss), mungkin  tidak akan dapat membatasi kerugian Anda sampai jumlah tertentu saja. Amanat  bersyarat tersebut mungkin tidak dapat dilaksanakan karena terjadi kondisi pasar  yang tidak memungkinkan melikuidasi Kontrak Berjangka.</td>
    <td align="center">
      
        <input class='checkbox' id='no13' name='1_13' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
   </td>
  </tr>
  <tr>
    <td align='center' valign='top'>12</td>
    <td align="justify">Anda harus membaca dengan seksama dan memahami  Perjanjian Pemberian Amanat dengan Pialang Berjangka Anda sebelum melakukan  transaksi Kontrak Berjangka.</td>
    <td align="center">
      
        <input class='checkbox' id='no14' name='1_14' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>13</td>
    <td align="justify">Pernyataan singkat ini tidak dapat memuat secara rinci  seluruh risiko atau aspek penting lainnya tentang Perdagangan Berjangka. Oleh  karena itu Anda harus mempelajari kegiatan Perdagangan Berjangka secara cermat  sebelum memutuskan melakukan transaksi.</td>
    <td align="center">
      
        <input class='checkbox' id='no15' name='1_15' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>14</td>
    <td align="justify">Dokumen Pemberitahuan Adanya Risiko (Risk Disclosure)  ini dibuat dalam Bahasa Indonesia.</td>
    <td align="center">
      
        <input class='checkbox' id='no16' name='1_16' type='checkbox' align='middle' value="saya sudah membaca dan memahami" disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr></table>
  <br><br>
  <table>
  <tr>
    <td colspan='3'><h3 align='center'><b>PERNYATAAN MENERIMA PEMBERITAHUAN ADANYA RISIKO</b></h3></td>
  </tr>
  <tr>
    <td colspan='3' align='center'>Dengan mengisi kolom "YA" di bawah, saya menyatakan  bahwa saya telah menerima &ldquo;DOKUMEN PEMBERITAHUAN ADANYA RISIKO&rdquo; mengerti dan  menyetujui isinya.</td>
  </tr>
</table>
<table width='70%' border='0' align='center' bordercolor='#000000'>
  <tr>
    <td width='28%' height='28' valign='top'>Pernyataan menerima / tidak</td>
    <td width='1%' valign='top'>:</td>
    <td width='70%' valign='top'>
	<input class='checkbox' name='menerima' type='radio' value='Ya' onclick="myFunction()">Ya&nbsp;&nbsp;
	<input class='checkbox' id='tidak' name='menerima' type='radio' value='Tidak'>Tidak
</td>
  </tr>
 <tr>

<?php
$tgl = new datetime('Asia/Jakarta');
$tgl_str = $tgl->format('d-m-Y');
?>
<td>Menyatakan pada Tanggal</td>
<td>:</td>
<td>
&nbsp;&nbsp;<input class='kodeae' type='text' name='t1' id='tanggalya' readonly>
</td>
</tr>
</table><br>
<table width='50%' align='center'>
  <tr>
    <td align="center">
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