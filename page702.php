<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Page 7</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" /></head>
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script type='text/javascript' >
$(document).ready(function()
 {
	
$('#cek3').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('cek4').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('cek4').disabled=true;
			document.getElementById('no1').disabled=true;
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#cek4').attr('checked', false);
			$('#no1').attr('checked', false);
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
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
	});	
	
	$('#cek4').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no1').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no1').disabled=true;
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no1').attr('checked', false);
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
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
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
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
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
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
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
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
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
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
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
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
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
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no8').attr('checked', false);
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no9').attr('checked', false);
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no10').attr('checked', false);
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no11').attr('checked', false);
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no12').attr('checked', false);
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no13').attr('checked', false);
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no14').attr('checked', false);
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no15').attr('checked', false);
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
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
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no16').attr('checked', false);
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no16').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no17').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no17').disabled=true;
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no17').attr('checked', false);
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no17').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no18').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no18').disabled=true;
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no18').attr('checked', false);
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no18').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no19').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no19').disabled=true;
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no19').attr('checked', false);
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no19').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no20').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no20').disabled=true;
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no20').attr('checked', false);
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no20').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no21').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no21').disabled=true;
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no21').attr('checked', false);
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no21').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no22').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no22').disabled=true;
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no22').attr('checked', false);
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no22').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no23').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no23').disabled=true;
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no23').attr('checked', false);
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no23').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no24').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no24').disabled=true;
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no24').attr('checked', false);
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no24').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no25').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no25').disabled=true;
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no25').attr('checked', false);
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no25').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no26').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no26').disabled=true;
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no26').attr('checked', false);
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no26').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no27').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no27').disabled=true;
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no27').attr('checked', false);
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no27').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no28').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no28').disabled=true;
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no28').attr('checked', false);
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no28').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no29').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no29').disabled=true;
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no29').attr('checked', false);
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no29').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no30').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no30').disabled=true;
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no30').attr('checked', false);
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no30').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no31').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no31').disabled=true;
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no31').attr('checked', false);
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no31').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no32').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no32').disabled=true;
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no32').attr('checked', false);
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no32').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no33').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no33').disabled=true;
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no33').attr('checked', false);
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no33').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no34').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no34').disabled=true;
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no34').attr('checked', false);
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no34').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no35').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no35').disabled=true;
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no35').attr('checked', false);
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no35').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no36').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no36').disabled=true;
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no36').attr('checked', false);
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no36').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no37').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no37').disabled=true;
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no37').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no38').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no38').disabled=true;
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no38').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no39').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no39').disabled=true;
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no39').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no40').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no40').disabled=true;
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no40').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no41').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no41').disabled=true;
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no41').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no42').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no42').disabled=true;
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no42').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no43').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no43').disabled=true;
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no43').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no44').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no44').disabled=true;
			document.getElementById('no45').disabled=true;
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
		}
    });
	$('#no44').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no45').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no45').disabled=true;
			$('#no45').attr('checked', false);
		}
    });



/*
var x=$("input[name=a]:checked").val();
	var y=$('#tidak').val();
	$('#jakbar').hide();        
	$('#surabaya').hide();  
	$('#pontianak').hide(); 
	$('#lainnya22').hide(); 
	$('#lainnyapenj').hide();

    $('#bapbk').click(function(){
		$('#jakbar').hide();        
		$('#surabaya').hide();  
		$('#pontianak').hide(); 
		$('#lainnya22').hide(); 
    });
	
	$('#pengadilanneg').click(function(){
		$('#jakbar').show();        
		$('#surabaya').show();  
		$('#pontianak').show(); 
		$('#lainnya22').show(); 
    });
	*/
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
var cek3=$("input[name=cek3]:checked").val();
var cek4=$("input[name=cek4]:checked").val();
var x=$("input[name=menerima11]:checked").val();
var x1_1=$("input[name=checkbox67]:checked").val();
var x1_2=$("input[name=checkbox68]:checked").val();
var x1_3=$("input[name=checkbox69]:checked").val();
var x1_4=$("input[name=checkbox70]:checked").val();
var x1_5=$("input[name=checkbox71]:checked").val();
var x1_6=$("input[name=checkbox72]:checked").val();
var x1_7=$("input[name=checkbox73]:checked").val();
var x1_8=$("input[name=checkbox74]:checked").val();
var x1_9=$("input[name=checkbox75]:checked").val();
var x1_10=$("input[name=checkbox76]:checked").val();
var x1_11=$("input[name=checkbox77]:checked").val();
var x1_12=$("input[name=checkbox78]:checked").val();
var x1_13=$("input[name=checkbox79]:checked").val();
var x1_14=$("input[name=checkbox80]:checked").val();
var x1_15=$("input[name=checkbox81]:checked").val();
var x1_16=$("input[name=checkbox82]:checked").val();
var x1_17=$("input[name=checkbox83]:checked").val();
var x1_18=$("input[name=checkbox84]:checked").val();
var x1_19=$("input[name=checkbox85]:checked").val();
var x1_20=$("input[name=checkbox86]:checked").val();
var x1_21=$("input[name=checkbox87]:checked").val();
var x1_22=$("input[name=checkbox88]:checked").val();
var x1_23=$("input[name=checkbox89]:checked").val();
var x1_24=$("input[name=checkbox90]:checked").val();
var x1_25=$("input[name=checkbox91]:checked").val();
var x1_26=$("input[name=checkbox92]:checked").val();
var x1_27=$("input[name=checkbox93]:checked").val();
var x1_28=$("input[name=checkbox94]:checked").val();
var x1_29=$("input[name=checkbox95]:checked").val();
var x1_30=$("input[name=checkbox96]:checked").val();
var x1_31=$("input[name=checkbox97]:checked").val();
var x1_32=$("input[name=checkbox98]:checked").val();
var x1_33=$("input[name=checkbox99]:checked").val();
var x1_34=$("input[name=checkbox100]:checked").val();
var x1_35=$("input[name=checkbox101]:checked").val();
var x1_36=$("input[name=checkbox102]:checked").val();
var x1_37=$("input[name=checkbox103]:checked").val();
var x1_38=$("input[name=checkbox104]:checked").val();
var x1_39=$("input[name=checkbox105]:checked").val();
var x1_40=$("input[name=checkbox106]:checked").val();
var x1_41=$("input[name=checkbox107]:checked").val();
//var x1_42=$("input[name=checkbox57]:checked").val();
var x1_43=$("input[name=checkbox108]:checked").val();
var x1_44=$("input[name=checkbox109]:checked").val();
var x1_45=$("input[name=checkbox110]:checked").val();
var mel1=$("input[name=mel1]:checked").val();
var input=$("#jakbar");
var input1=$("#surabaya");
var input2=$("#pontianak");
var x1_46=$("input[name=checkbox111]:checked").val();

var x22_4=$("input[name=b]:checked").val();
var y=$('#tidak').val();

  if(cek3==null || cek3=="")
  {  
  alert("Silakan centang kolom Nasabah");
  return false;
  }
  else if(cek4==null || cek4=="")
  {  
  alert("Silakan centang kolom Pialang Berjangka");
  return false;
  }
  else if(x1_1==null || x1_1=="")
  {  
  alert("Silakan centang pernyataan No.1.1  'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_2==null || x1_2=="")
  {  
  alert("Silakan centang pernyataan No.1.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_3==null || x1_3=="")
  {  
  alert("Silakan centang pernyataan No.2.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_4==null || x1_4=="")
  {  
  alert("Silakan centang pernyataan No.2.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_5==null || x1_5=="")
  {  
  alert("Silakan centang pernyataan No.2.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_6==null || x1_6=="")
  {  
  alert("Silakan centang pernyataan No.3.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_7==null || x1_7=="")
  {  
  alert("Silakan centang pernyataan No.3.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_8==null || x1_8=="")
  {  
  alert("Silakan centang pernyataan No.3.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_9==null || x1_9=="")
  {  
  alert("Silakan centang pernyataan No.3.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_10==null || x1_10=="")
  {  
  alert("Silakan centang pernyataan No.3.5 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_11==null || x1_11=="")
  {  
  alert("Silakan centang pernyataan No.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_12==null || x1_12=="")
  {  
  alert("Silakan centang pernyataan No.5 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_13==null || x1_13=="")
  {  
  alert("Silakan centang pernyataan No.6 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_14==null || x1_14=="")
  {  
  alert("Silakan centang pernyataan No.7.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_15==null || x1_15=="")
  {  
  alert("Silakan centang pernyataan No.7.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_16==null || x1_16=="")
  {  
  alert("Silakan centang pernyataan No.7.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_17==null || x1_17=="")
  {  
  alert("Silakan centang pernyataan No.8.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_18==null || x1_18=="")
  {  
  alert("Silakan centang pernyataan No.8.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_19==null || x1_19=="")
  {  
  alert("Silakan centang pernyataan No.9 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_20==null || x1_20=="")
  {  
  alert("Silakan centang pernyataan No.10 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_21==null || x1_21=="")
  {  
  alert("Silakan centang pernyataan No.11.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_22==null || x1_22=="")
  {  
  alert("Silakan centang pernyataan No.11.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_23==null || x1_23=="")
  {  
  alert("Silakan centang pernyataan No.11.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_24==null || x1_24=="")
  {  
  alert("Silakan centang pernyataan No.11.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_25==null || x1_25=="")
  {  
  alert("Silakan centang pernyataan No.11.5 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_26==null || x1_26=="")
  {  
  alert("Silakan centang pernyataan No.12 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_27==null || x1_27=="")
  {  
  alert("Silakan centang pernyataan No.13 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_28==null || x1_28=="")
  {  
  alert("Silakan centang pernyataan No.14 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_29==null || x1_29=="")
  {  
  alert("Silakan centang pernyataan No.15 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_30==null || x1_30=="")
  {  
  alert("Silakan centang pernyataan No.16.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_31==null || x1_31=="")
  {  
  alert("Silakan centang pernyataan No.16.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_32==null || x1_32=="")
  {  
  alert("Silakan centang pernyataan No.16.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_33==null || x1_33=="")
  {  
  alert("Silakan centang pernyataan No.17 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_34==null || x1_34=="")
  {  
  alert("Silakan centang pernyataan No.18.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_35==null || x1_35=="")
  {  
  alert("Silakan centang pernyataan No.18.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_36==null || x1_36=="")
  {  
  alert("Silakan centang pernyataan No.18.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_37==null || x1_37=="")
  {  
  alert("Silakan centang pernyataan No.19.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_38==null || x1_38=="")
  {  
  alert("Silakan centang pernyataan No.19.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_39==null || x1_39=="")
  {  
  alert("Silakan centang pernyataan No.19.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_40==null || x1_40=="")
  {  
  alert("Silakan centang pernyataan No.19.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_41==null || x1_41=="")
  {  
  alert("Silakan centang pernyataan No.20 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_43==null || x1_43=="")
  {  
  alert("Silakan centang pernyataan No.21 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_44==null || x1_44=="")
  {  
  alert("Silakan centang pernyataan No.22.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_45==null || x1_45=="")
  {  
  alert("Silakan centang pernyataan No.22.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(mel1==null)
  {
	alert("Silakan Pilih Optional No.22 Point 3 ");
    return false;	
  }
  /*else if(input.prop( "checked" ) == false && input1.prop( "checked" ) == false && input2.prop( "checked" ) == false)
  {  
  alert("Silakan Pilih Optional Pengadilan Negeri No 22.3 : \n - Jakarta Barat \n - Surabaya \n - Pontianak");
  return false;
  }*/
  else if(x22_4==null || x22_4=="")
  {  
  alert("Silakan Pilih Optional No.22 Point 4 ");
  return false;
  }  
  else if(x1_46==null || x1_46=="")
  {  
  alert("Silakan centang pernyataan No.23 'Saya sudah membaca dan memahami'");
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
<?php session_start(); ?>
<h2 align="left"><p class="mda" align="left"><a href="delete1.php" style="font-size:20px;"><img src="image/mda.PNG" width="120px"></a></p></h2>
        	<div class="clearfix" id="header">
<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" name="page702" value="7" disabled> of <input class='paging' type="text" size="1" name="page1" value="9" disabled></p>
<form onSubmit="return validateForm()" action='function7_2.php' method='post' name='formku'>
<p align='right'>Lampiran 2 Peraturan Kepala Badan Pengawas<br/>
Perdagangan Berjangka Komoditi<br/>
Nomor: 107/BAPPEBTI/PER/11/2013</p>
<p align='center' style='font-size:18px'><strong>Formulir Nomor 107.PBK.05.2<br/>
Perjanjian Pemberian Amanat Secara Elektronik Online<br/>
Untuk Transaksi Kontrak Derivatif<br/>
Dalam Sistem Perdagangan Alternatif<br/></strong></p>
<br>
<table align='center' width='70%' border='0'>
<tr>
<td>
	<h3><center>PERHATIAN !!!</center></h3>
	<strong><center>PERJANJIAN INI MERUPAKAN KONTRAK HUKUM. HARAP DIBACA DENGAN SEKSAMA</center></strong>
	</td>
</tr>
</table>
<?php
$tgl = new datetime('Asia/Jakarta');
$tgl_str = $tgl->format('l');

if($tgl_str=='Sunday')
{ 
	$tgl_str='Minggu';
}
else if($tgl_str=='Monday')
{ 
	$tgl_str='Senin';
}
else if($tgl_str=='Tuesday')
{ 
	$tgl_str='Selasa';
}
else if($tgl_str=='Wednesday')
{ 
	$tgl_str='Rabu';
}
else if($tgl_str=='Thursday')
{ 
	$tgl_str='Kamis';
}
else if($tgl_str=='Friday')
{ 
	$tgl_str='Jumat';
}
else if($tgl_str=='Saturday')
{ 
	$tgl_str='Sabtu';
}
$date = $tgl->format('d');
$month = $tgl->format('m');
if($month=='01')
{
	$month='Januari';
}
else if($month=='02')
{
	$month='Februari';
}
else if($month=='03')
{
	$month='Maret';
}
else if($month=='04')
{
	$month='April';
}
else if($month=='05')
{
	$month='Mei';
}
else if($month=='06')
{
	$month='Juni';
}
else if($month=='07')
{
	$month='Juli';
}
else if($month=='08')
{
	$month='Agustus';
}
else if($month=='09')
{
	$month='September';
}
else if($month=='10')
{
	$month='Oktober';
}
else if($month=='11')
{
	$month='November';
}
else if($month=='12')
{
	$month='Desember';
}

$year = $tgl->format('Y');
?>
<br/><br/><center><strong>Pada Hari ini <input class='hari' name='namahari' type='Text' size='10' width='20%' value='<?php 
								echo $tgl_str;?>' readonly>, 
								Tanggal <input class='hari' name='tanggal' type='Text' size='5' width='20%' value='<?php 
								echo $date;?>' readonly>,
								Bulan <input class='hari' name='bulan' type='Text' size='5' width='20%' value='<?php 
								echo $month;?>' readonly>,
								Tahun <input class='hari' name='tahun' type='Text' size='5' width='20%' value='<?php 
								echo $year;?>' readonly>,
						
						</strong><br><br><b><font style='font-size:16px;'>Kami yang mengisi perjanjian di bawah ini:</b><br><br></center>

<table align='center' width='80%' border='1'>
	<tr>
		<td> &nbsp; Nama</td>	
		<td>:</td>	
		<td> <input class='nama' name='nama' type='text' size='30'   value="<?php
		echo $_SESSION['nama'];
		?>" readonly /> </td>
		
		<td width='21%' rowspan='3' class='checkbox' align='center' valign='middle'><input id='cek3' name='cek3' type='checkbox' value='Saya sudah membaca dan memahami'><br>Saya sudah membaca dan memahami</td>
		
	</tr>
	<tr>
		<td>&nbsp; Pekerjaan / Jabatan</td>
		<td>:</td>	
		<td><input name='Jabatan' type='text' size='20'   value="<?php
		echo "".$_SESSION['kerja5']."";
		?>" readonly/></td>
	</tr>
	<tr>
		<td>&nbsp; Alamat</td>
		<td>:</td>
		<td><input name='Alamat' type='text' size='35'   value="<?php
		echo $_SESSION['alamat'];
		?>" readonly /></td>
	</tr>
</table>
<br>
	<center><font style='font-size:16px;'>Dalam hal ini bertindak untuk dan atas nama sendiri, Yang selanjutnya disebut Nasabah,</font></center><br>

	<table align='center' width='80%' border='1'>
	<tr>
		<td>&nbsp; Nama</td>	
		<td>:</td>	
		<td> PT. Esandar Arthamas Berjangka </td>
		<td width='21%' rowspan='3' class='checkbox' align='center' valign='middle'><input id='cek4' name='cek4' type='checkbox' value='Saya sudah membaca dan memahami' disabled ><br>Saya sudah membaca dan memahami</td>
	</tr>
	<tr>
		<td>&nbsp; Pekerjaan / Jabatan</td>	
		<td>:</td>	
		<td>Wakil Pialang</td>
	</tr>
	<tr>
		<td>&nbsp; Alamat</td>
		<td>:</td>
		<td>Agung Podomoro Land Tower Lt 36. <br/>
Jl Letjen S Parman Kav 28 Jakarta Barat 11470
</td>
	</tr>
</table>
<table width='70%' border="0" align='center'>
  <tr>
    <td align='justify'><p>Dalam hal ini bertindak untuk dan atas nama PT. Esandar Arthamas Berjangka yang selanjutnya disebut Pialang Berjangka,<br><br>
 Nasabah dan Pialang Berjangka secara bersama – sama selanjutnya disebut Para Pihak.<br><br>
 Para Pihak sepakat untuk mengadakan Perjanjian Pemberian Amanat untuk melakukan transaksi penjualan maupun pembelian Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan ketentuan sebagai berikut:</p><br></td>
  </tr>
</table>

<table align='center' style='font-size:15px' width='90%' border='1'>
	<tr>
		<td width='6%' align='center'><strong>1</strong></td>
		<td colspan='3'><strong>Margin dan Pembayaran Lainnya</strong></td>
	</tr>
	<tr>
		<td></td>	
		<td width='72%' align='justify'>(1)&nbsp;&nbsp;&nbsp;Nasabah menempatkan sejumlah dana (Margin) 
		ke Rekening Terpisah (Segregated Account) Pialang Berjangka sebagai Margin awal dan wajib mempertahankannya sebagaimana ditetapkan.</td>
		<td width='20%'><center><input class='checkbox' id='no1' name='checkbox67' type='checkbox' value='saya sudah membaca dan memahami' disabled /><br/> 
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	<tr>
		<td></td>	
		<td align='justify'>(2)&nbsp;&nbsp;&nbsp; Membayar biaya-biaya yang diperlukan untuk transaksi yaitu biaya transaksi, pajak, komisi, dan biaya pelayanan,
		biaya bunga sesuai tingkat yang berlaku,
		dan biaya lainnya yang dapat dipertanggungjawabkan berkaitan dengan transaksi sesuai amanat Nasabah, maupun biaya rekening Nasabah.</td>
		<td><center><input class='checkbox' id='no2' name='checkbox68' type='checkbox' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	<tr>
		<td align='center'><strong>2</strong></td>
		<td colspan='3'><strong>Pelaksanaan Transaksi</strong></td>
	</tr>
	<tr>
		<td></td>
		<td align='justify'>(1)&nbsp;&nbsp;&nbsp;Setiap transaksi Nasabah dilaksanakan secara elektronik on-line oleh Nasabah yang bersangkutan. </td>
		<td><center><input class='checkbox' id='no3' name='checkbox69' type='checkbox' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td align='justify'>(2)&nbsp;&nbsp;&nbsp;Setiap amanat Nasabah yang diterima dapat langsung dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi dan eksekusinya dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan transaksi tersebut.
		Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum memberikan amanat untuk transaksi berikutnya.</td>
		<td><center> <input class='checkbox' id='no4' name='checkbox70' type='checkbox' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td align='justify'>(3)&nbsp;&nbsp;&nbsp;Setiap transaksi Nasabah secara bilateral dilawankan dengan Penyelenggara Sistem Perdagangan Alternatif PT Harta International Investama
		yang bekerjasama dengan Pialang Berjangka. </td>
		<td><center> <input class='checkbox' id='no5' name='checkbox71' type='checkbox' value='saya sudah membaca dan memahami' disabled ><br>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><strong>3</strong></td>
		<td colspan='3'><strong>Kewajiban Memelihara Margin</strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(1) &nbsp;&nbsp;&nbsp; Nasabah wajib memelihara/memenuhi tingkat Margin yang harus tersedia di rekening pada Pialang Berjangka
		sesuai dengan jumlah yang telah ditetapkan baik diminta ataupun tidak oleh Pialang Berjangka. </td>
		<td><center> <input class='checkbox' id='no6' name='checkbox72' type='checkbox' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	<td align='justify'>(2) &nbsp;&nbsp;&nbsp; Apabila jumlah Margin memerlukan penambahan maka Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah 
		untuk menambah Margin segera. </td>
		<td><center> <input class='checkbox' id='no7' name='checkbox73' type='checkbox' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td align='justify'>(3) &nbsp;&nbsp;&nbsp; Apabila jumlah Margin memerlukan tambahan (Call Margin) maka Nasabah wajib melakukan penyerahan Call Margin selambat-lambatnya sebelum dimulai hari perdagangan berikutnya. 
		Kewajiban Nasabah sehubungan dengan penyerahan Call Margin tidak terbatas
		pada jumlah Margin awal. </td>
		<td><center> <input class='checkbox' id='no8' type='checkbox' name='checkbox74' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	<td align='justify'>(4) &nbsp;&nbsp;&nbsp; Pialang Berjangka tidak berkewajiban melaksanakan amanat untuk melakukan transaksi yang baru
		dari Nasabah sebelum Call Margin dipenuhi. </td>
		<td><center> <input class='checkbox' id='no9' type='checkbox' name='checkbox75' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	<td align='justify'>(5) &nbsp;&nbsp;&nbsp; Untuk memenuhi kewajiban Call Margin dan keuangan lainnya dari Nasabah, 
		Pialang Berjangka dapat mencairkan dana Nasabah yang ada di Pialang Berjangka. </td>
		<td><center> <input class='checkbox' id='no10' type='checkbox' name='checkbox76' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>4</Strong></td>
		<td colspan='3'><strong>Hak Pialang Berjangka Melikudiasi Posisi Nasabah</Strong></td>
	</tr>
	
	<tr>
		<td></td>
		<td align='justify'>Nasabah bertanggung jawab memantau/mengetahui posisi terbukanya secara terus- menerus dan memenuhi kewajibannya. Apabila dalam jangka waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan, 
		Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau sebagian, membatasi transaksi, 
		atau tindakan lain untuk melindungi diri dalam pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa memberitahu Nasabah dan 
		Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tindakan tersebut.</td>
		<td><center> <input class='checkbox' id='no11' type='checkbox' name='checkbox77' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>5</Strong></td>
		<td colspan='3'><strong>Pengganti Kerugian Tidak Adanya Penutupan Polisi</Strong></td>
	</tr>
	
	<tr>
		<td></td>
		<td align='justify'>Apabila Nasabah tidak mampu melakukan penutupan atas transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas transaksi Nasabah yang terjadi. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka, 
		dan apabila Nasabah lalai untuk membayar biaya-biaya tersebut, 
		Pialang Berjangka berhak untuk mengambil pembayaran dari dana Nasabah.</td>
		<td><center> <input class='checkbox' id='no12' type='checkbox' name='checkbox78' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	<tr>
		<td align='center'><Strong>6</Strong></td>
		<td colspan='3'><strong>Pialang Berjangka Dapat Membatasi Posisi </Strong></td>
	</tr>
	
	<tr>
		<td></td>
		<td align='justify'>Nasabah mengakui hak Pialang Berjangka untuk membatasi posisi terbuka Kontrak dan Nasabah tidak melakukan transaksi melebihi batas yang telah ditetapkan tersebut.</td>
		<td><center> <input class='checkbox' id='no13' type='checkbox' name='checkbox79' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>7</Strong></td>
		<td colspan='3'><strong>Tidak Ada Jaminan atas Informasi atau Rekomendasi Nasabah mengakui bahwa: </Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(1) &nbsp;&nbsp;&nbsp; Informasi dan rekomendasi yang diberikan oleh Pialang Berjangka kepada Nasabah tidak selalu lengkap dan perlu diverifikasi. </td>	
		<td><center> <input class='checkbox' id='no14' type='checkbox' name='checkbox80' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	<tr>
		<td></td>
		<td align='justify'>(2) &nbsp;&nbsp;&nbsp; Pialang Berjangka tidak menjamin bahwa informasi dan rekomendasi yang diberikan merupakan informasi yang akurat dan lengkap. </td>	
		<td><center> <input class='checkbox' id='no15' type='checkbox' name='checkbox81' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(3) &nbsp;&nbsp;&nbsp; Informasi dan rekomendasi yang diberikan oleh Wakil Pialang Berjangka yang satu dengan yang lain mungkin berbeda karena perbedaan analisis fundamental atau teknikal. Nasabah menyadari bahwa ada kemungkinan Pialang Berjangka dan pihak terafiliasinya memiliki posisi di pasar dan memberikan rekomendasi tidak konsisten kepada Nasabah. </td>	
		<td><center> <input class='checkbox' id='no16' type='checkbox' name='checkbox82' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>8</Strong></td>		
		<td colspan='3'><strong>Pembatasan Tanggung Jawab Pialang Berjangka </Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(1) &nbsp;&nbsp;&nbsp; Pialang Berjangka tidak bertanggung jawab untuk memberikan penilaian kepada Nasabah mengenai iklim, pasar, keadaan politik dan ekonomi nasional dan internasional,
		nilai Kontrak Derivatif, kolateral, atau memberikan nasihat mengenai keadaan pasar. 
		Pialang Berjangka hanya memberikan pelayanan untuk melakukan transaksi secara jujur serta memberikan laporan atas transaksi tersebut. </td>	
		<td><center> <input class='checkbox' id='no17' type='checkbox' name='checkbox83' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(2) &nbsp;&nbsp;&nbsp; Perdagangan sewaktu-waktu dapat dihentikan oleh pihak yang memiliki otoritas (Bappebti/Bursa Berjangka) tanpa pemberitahuan terlebih dahulu kepada Nasabah. Atas posisi terbuka yang masih dimiliki oleh Nasabah pada saat perdagangan tersebut dihentikan, maka akan diselesaikan (likuidasi) berdasarkan pada peraturan/ketentuan yang dikeluarkan dan ditetapkan oleh pihak otoritas tersebut, 
		dan semua kerugian serta biaya yang timbul sebagai akibat dihentikannya transaksi oleh pihak otoritas perdagangan tersebut, 
		menjadi beban dan tanggung jawab Nasabah sepenuhnya. </td>	
		<td><center> <input class='checkbox' id='no18' type='checkbox' name='checkbox84' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>9</Strong></td>	
		<td colspan='3'><strong>Transaksi Harus Mematuhi Peraturan Yang Berlaku</Strong></td>
	</tr>
	
	<tr>
		<td></td>
		<td align='justify'>Semua transaksi dilakukan sendiri oleh Nasabah dan wajib mematuhi peraturan perundang-undangan di bidang Perdagangan Berjangka, 
		kebiasaan dan interpretasi resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.</td>
		<td><center> <input class='checkbox' id='no19' type='checkbox' name='checkbox85' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>10</Strong></td>	
		<td colspan='3'><strong>Pialang Berjangka Tidak Bertanggung jawab atas Kegagalan Komunikasi</Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>Pialang Berjangka tidak bertanggung jawab atas keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi lainnya 
		yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain diluar kontrol Pialang Berjangka.</td>
		<td><center> <input class='checkbox' id='no20' type='checkbox' name='checkbox86' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>11</Strong></td>	
		<td colspan='3'><strong>Konfirmasi</Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(1)&nbsp;&nbsp;&nbsp; Konfirmasi dari Nasabah dapat berupa surat, telex, media lain, surat elektronik, secara tertulis ataupun rekaman suara. </td>
		<td><center> <input class='checkbox' id='no21' type='checkbox' name='checkbox87' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(2)&nbsp;&nbsp;&nbsp; Pialang Berjangka berkewajiban menyampaikan konfirmasi transaksi, laporan rekening, permintaan Call Margin, dan pemberitahuan lainnya kepada Nasabah secara akurat, benar dan secepatnya pada alamat (email) Nasabah sesuai dengan yang tertera dalam rekening Nasabah. 
		Apabila dalam jangka waktu 2 x 24 jam setelah amanat jual atau beli disampaikan, 
		tetapi Nasabah belum menerima konfirmasi melalui alamat email Nasabah dan/atau sistem transaksi, 
		Nasabah segera memberitahukan hal tersebut kepada Pialang Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis. </td>
		<td><center> <input class='checkbox' id='no22' type='checkbox' name='checkbox88' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(3)&nbsp;&nbsp;&nbsp; Jika dalam waktu 2 x 24 jam sejak tanggal penerimaan konfirmasi tersebut tidak ada sanggahan dari Nasabah maka konfirmasi Pialang Berjangka dianggap benar dan sah. </td>
		<td><center> <input class='checkbox' id='no23' type='checkbox' name='checkbox89' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(4)&nbsp;&nbsp;&nbsp; Kekeliruan atas konfirmasi yang diterbitkan Pialang Berjangka akan diperbaiki oleh Pialang Berjangka
		sesuai keadaan yang sebenarnya dan demi hukum konfirmasi yang lama batal. </td>
		<td><center> <input class='checkbox' id='no24' type='checkbox' name='checkbox90' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(5)&nbsp;&nbsp;&nbsp; Nasabah tidak bertanggung jawab atas transaksi yang dilaksanakan atas rekeningnya 
		apabila konfirmasi tersebut tidak disampaikan secara benar dan akurat. </td>
		<td><center> <input class='checkbox' id='no25' type='checkbox' name='checkbox91' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>12</Strong></td>	
		<td colspan='3'><strong>Kebenaran Informasi Nasabah</Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'> Nasabah memberikan informasi yang benar dan akurat mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi perubahan, 
		termasuk perubahan kemampuan keuangannya untuk terus melaksanakan transaksi. </td>
		<td><center> <input class='checkbox' id='no26' type='checkbox' name='checkbox92' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>13</Strong></td>	
		<td colspan='3'><strong>Komisi Transaksi</Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'> Nasabah mengetahui dan menyetujui bahwa Pialang Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan, 
		dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang Berjangka. 
		Perubahan beban (fees) dan biaya lainnya harus disetujui secara tertulis oleh Para Pihak. </td>
		<td><center> <input class='checkbox' id='no27' type='checkbox' name='checkbox93' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>14</Strong></td>	
		<td colspan='3'><strong>Pemberian Kuasa</Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'> Nasabah memberikan kuasa kepada Pialang Berjangka untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau institusi lain yang terkait untuk memperoleh keterangan atau verifikasi mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan 
		secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi persyaratan yang diperlukan. </td>
		<td><center> <input class='checkbox' id='no28' type='checkbox' name='checkbox94' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>15</Strong></td>	
		<td colspan='3'><strong>Pemindahan Dana</Strong></td>
	</tr>
	<tr>
		<td></td>	
		<td align='justify'>Pialang Berjangka dapat setiap saat mengalihkan dana dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang dilakukan Nasabah seperti pembayaran komisi, 
		pembayaran biaya transaksi, kliring dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu memberitahukan kepada Nasabah. 
		Transfer yang telah dilakukan akan segera diberitahukan secara tertulis kepada Nasabah.</td>
		<td><center> <input class='checkbox' id='no29' type='checkbox' name='checkbox95' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>16</Strong></td>	
		<td colspan='3'><strong>Pemberitahuan</Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(1) &nbsp;&nbsp;&nbsp; Semua komunikasi, uang, surat berharga, dan kekayaan lainnya harus dikirimkan langsung ke alamat Nasabah seperti tertera dalam rekeningnya atau alamat lain
		yang ditetapkan/diberitahukan secara tertulis oleh Nasabah.</td>
		<td><center> <input class='checkbox' id='no30' type='checkbox' name='checkbox96' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td>(2) &nbsp;&nbsp;&nbsp; Semua uang, harus disetor atau ditransfer langsung oleh Nasabah ke Rekening Terpisah (Segregated Account) Pialang Berjangka: <br/> 
    <table>
	  <tr>
	  <td>Nama</td><td>:</td><td>PT.Esandar Arthamas Berjangka</td>
	  </tr>
	  <tr>
	  <td>Alamat</td><td>:</td><td>Agung Podomoro Land Tower Lt. 36</td>
	  </tr>
	  <tr>
	  <td></td><td></td><td>Jl. Letjen S. Parman Kav. 28, Jakarta Barat 11470 - Indonesia</td>
	  </tr>
	  <tr>
	  <td>Bank</td><td>:</td><td>Bank Central Asia cab Sudirman</td>
	  </tr>
	  <tr>
	  <td>No. Rekening Terpisah</td><td>:</td><td>035.313.6019 (Rupiah)</td>
	  </tr>
	  <tr>
	  <td></td><td></td><td>035.313.4610 (USD)</td>
	  </tr>
	  <tr>
	  <td>Bank</td><td>:</td><td>Bank CCB Indonesia (China Construction Bank Indonesia)</td>
	  </tr>
	  <tr>
	  <td>No. Rekening Terpisah</td><td>:</td><td>100-7585-388 (Rupiah)</td>
	  </tr>
	  </table>
dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda terima bukti setor atau transfer dari pegawai Pialang Berjangka.
</td>
		<td><center> <input class='checkbox' id='no31' type='checkbox' name='checkbox97' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td>(3) &nbsp;&nbsp;&nbsp; Semua surat berharga, kekayaan lainnya, atau komunikasi harus dikirim kepada Pialang Berjangka: <br/>
<table>
	  <tr>
	  <td>Nama</td><td>:</td><td>PT.Esandar Arthamas Berjangka</td>
	  </tr>
	  <tr>
	  <td>Alamat</td><td>:</td><td>Agung Podomoro Land Tower Lt. 36</td>
	  </tr>
	  <tr>
	  <td></td><td></td><td>Jl. Letjen S. Parman Kav. 28, Jakarta Barat 11470 - Indonesia</td>
	  </tr>
	  <tr>
	  <td>Telepon</td><td>:</td><td>021-2933 9229</td>
	  </tr>
	  <tr>
	  <td>Facsimile</td><td>:</td><td>021-2933 9230</td>
	  </tr>
	  <tr>
	  <td>Email</td><td>:</td><td>info@esandar.co.id</td>
	  </tr>
	  </table>
dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda bukti penerimaan dari pegawai Pialang Berjangka.
</td>
		<td><center> <input class='checkbox' id='no32' type='checkbox' name='checkbox98' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>17</Strong></td>	
		<td colspan='3'><strong>Dokumen Pemberitahuan Adanya Risiko</Strong></td>
	</tr>
	
	<tr>
	 <td></td>	
	 <td>Nasabah mengakui menerima dan mengerti Dokumen Pemberitahuan Adanya Risiko</td>
		<td><center> <input class='checkbox' id='no33' type='checkbox' name='checkbox99' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	<tr>
		<td align='center'><Strong>18</Strong></td>	
		<td colspan='3'><strong>Jangka Waktu Perjanjian dan Pengakhiran</Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(1) &nbsp;&nbsp;&nbsp; Perjanjian ini mulai berlaku terhitung sejak tanggal dilakukannya konfirmasi oleh Pialang Berjangka 
		dengan diterimanya Bukti Konfirmasi Penerimaan Nasabah dari Pialang Berjangka oleh Nasabah.</td>
		<td><center> <input class='checkbox' id='no34' type='checkbox' name='checkbox100' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(2) &nbsp;&nbsp;&nbsp; Nasabah dapat mengakhiri Perjanjian ini hanya jika Nasabah sudah tidak lagi memiliki posisi terbuka 
		dan tidak ada kewajiban Nasabah yang diemban oleh atau terhutang kepada Pialang Berjangka.</td>
		<td><center> <input class='checkbox' id='no35' type='checkbox' name='checkbox101' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(3) &nbsp;&nbsp;&nbsp; Pengakhiran tidak membebaskan salah satu Pihak dari tanggung jawab atau kewajiban yang terjadi sebelum pemberitahuan tersebut.</td>
		<td><center> <input class='checkbox' id='no36' type='checkbox' name='checkbox102' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>19</Strong></td>	
		<td colspan='3'><strong>Berakhirnya Perjanjian</Strong></td>
	</tr>
	<tr>
	<td></td>		
	<td colspan='3'>Perjanjian dapat berakhir dalam hal Nasabah :</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(1) &nbsp;&nbsp;&nbsp; Dinyatakan pailit, memiliki hutang yang sangat besar, 
		dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau meninggal;</td>
		<td><center> <input class='checkbox' id='no37' type='checkbox' name='checkbox103' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(2) &nbsp;&nbsp;&nbsp; Tidak dapat memenuhi atau mematuhi perjanjian ini dan/atau melakukan pelanggaran terhadapnya;</td>
		<td><center> <input class='checkbox' id='no38' type='checkbox' name='checkbox104' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td>(3) &nbsp;&nbsp;&nbsp; Berkaitan dengan angka (1) dan (2) tersebut di atas, Pialang Berjangka dapat: <br/><br/>
i). meneruskan atau menutup posisi Nasabah tersebut setelah mempertimbangkannya secara cermat dan jujur; dan <br/><br/>
ii). menolak perintah dari Nasabah atau kuasanya.
</td>
		<td><center> <input class='checkbox' id='no39' type='checkbox' name='checkbox105' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(4) &nbsp;&nbsp;&nbsp; Pengakhiran Perjanjian sebagaimana dimaksud dengan angka (1) dan (2) tersebut di atas tidak melepaskan kewajiban dari Para Pihak yang berhubungan dengan penerimaan atau kewajiban pembayaran 
		atau pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian. </td>
		<td><center> <input class='checkbox' id='no40' type='checkbox' name='checkbox106' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>20</Strong></td>	
		<td colspan='3'><strong>Force Majeur</Strong></td>
	</tr>
	
	<tr>
	<td></td>	
	<td align='justify'>Tidak ada satupun pihak di dalam Perjanjian dapat diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab yang berada di luar kemampuannya atau kekuasaannya (force majeur), sepanjang pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya sebab itu. Yang dimaksud dengan Force Majeur dalam Perjanjian adalah peristiwa kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir), pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan perundang-undangan yang berlaku dan kondisi di bidang ekonomi, keuangan dan Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan,
		kliring dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.</td>
		<td><center> <input class='checkbox' id='no41' type='checkbox' name='checkbox107' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>21</Strong></td>	
		<td colspan='3'><strong>Perubahan atas Isian dalam Perjanjian Pemberian Amanat</Strong></td>
	</tr>
	
	<tr>
	<td></td>	
	<td align='justify'>Perubahan atas isian dalam Perjanjian ini hanya dapat dilakukan atas persetujuan Para Pihak,
		atau Pialang Berjangka telah memberitahukan secara tertulis perubahan yang diinginkan,
		dan Nasabah tetap memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara tertulis atas usul perubahan tersebut.
		Tindakan Nasabah tersebut dianggap setuju atas usul perubahan tersebut.</td>
		<td><center> <input class='checkbox' id='no42' type='checkbox' name='checkbox108' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td align='center'><Strong>22</Strong></td>	
		<td colspan='3'><strong>Penyelesaian Perselisihan</Strong></td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(1) Semua perselisihan dan perbedaan pendapat yang timbul dalam pelaksanaan Perjanjian ini
		wajib diselesaikan terlebih dahulu secara musyawarah untuk mencapai mufakat antara Para Pihak.</td>
		<td><center> <input class='checkbox' id='no43' type='checkbox' name='checkbox109' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td align='justify'>(2) Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, 
		Para Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka.</td>
		<td><center> <input class='checkbox' id='no44' type='checkbox' name='checkbox110' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	
	<tr>
		<td></td>	
		<td colspan='3'>(3) Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka (2), 
		maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui *): <br/><br/>
<input class='checkbox' id='bapbk' name='mel1' type='radio' value='Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI) berdasarkan Peraturan dan Prosedur Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI)'  > Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI) berdasarkan Peraturan dan Prosedur Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI);
 atau<br/><br/>
<!--<input class='checkbox' id='pengadilanneg' name='mel1' type='radio' value="Pengadilan Negeri"> Pengadilan Negeri -->
					   <input class='checkbox' id='jakbar' name='mel1' type='radio' value="Jakarta Barat"> Pengadilan Negeri Jakarta Barat <br/>
                       <input class='checkbox' id='surabaya' name='mel1' type='radio' value="Surabaya"> Pengadilan Negeri Surabaya <br/>
                       <input class='checkbox' id='pontianak' name='mel1' type='radio' value="Pontianak"> Pengadilan Negeri Pontianak </td>
	</tr>
	
	<tr>
		<td></td>	
		<td colspan='3'>(4) &nbsp;&nbsp;&nbsp; Kantor atau kantor cabang Pialang Berjangka terdekat dengan domisili Nasabah tempat penyelesaian dalam hal terjadi perselisihan. <br/>
Daftar Kantor Kantor yang dipilih (salah satu) <br/><br/>
<input class='checkbox' name='b' type='radio' value="Jakarta Barat"> Jakarta Barat &nbsp; &nbsp; &nbsp;
<input class='checkbox' name='b' type='radio' value="Surabaya"> Surabaya &nbsp; &nbsp; &nbsp;
<input class='checkbox' name='b' type='radio' value="Pontianak"> Pontianak &nbsp; &nbsp; &nbsp; </td>
	</tr>
	
	<tr>
		<td align='center'><Strong>23</Strong></td>	
		<td colspan='3'><strong>Bahasa</Strong></td>
	</tr>
	
	<tr>
	<td></td>	
	<td>Perjanjian ini dibuat dalam Bahasa Indonesia. Demikian Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar, 
	sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun. <br/><br/>
<Strong>“Saya telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum dalam perjanjian ini”.</Strong>
</td>
		<td><center> <input class='checkbox' id='no45' name='checkbox111' type='checkbox' value='saya sudah membaca dan memahami' disabled ><br/>
		Saya sudah membaca dan memahami</center>
		</td>
	</tr>
	</table>
		<br/><br/><table border='0' align='center'>
	<tr>
		<td colspan='5'>Dengan mengisi kolom “YA” di bawah, saya menyatakan bahwa saya telah menerima <Strong> 
		"PERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK DERIVATIF SISTEM PERDAGANGAN ALTERNATIF"</Strong> ,mengerti dan menyetujui isinya.</td>
	</tr>
	
	<tr>
	<td width='231'>Pernyataan Menerima / Tidak</td>
	<td width='3'>:</td> 		
	<td width='836'>
	<input class='checkbox' name='menerima11' type='radio' value='Ya' onclick="myFunction()"> Ya  
	<input class='checkbox' id='tidak' name='menerima11' type='radio' value='Tidak'>  Tidak </td>
	</tr>
	

	<tr>
<td>Menerima pada Tanggal</td>
<td>:</td>
<td>&nbsp;
<input class='kodeae' type='text' name='t1' id='tanggalya' readonly>

</td>
	</tr>
	</table><br/>
	<table width="70%" border="0" align="center">
	<tr>
	<td width="816" align="center"> <button id='submit' type='submit' name='submit11'>Submit</button></td>
	</tr>
</table>
<input class='checkbox' type="hidden" name="page1" value="<?php 
echo $_SESSION['page'];
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
			echo "<script>document.location = 'openrealaccount.php';</script>";
	}
}
else
{
		echo "<script>document.location = 'openrealaccount.php';</script>";
}
?>