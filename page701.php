<?php 
session_start();
if(isset ($_SESSION['nomoraccountdemo']))
{
	if($_SESSION['nomoraccountdemo']!=null)
	{

?>
<html>
<head>
<title>Page 7</title>
<link rel="stylesheet" type="text/css" href="css/style.css"></head>
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script type='text/javascript' >

$(document).ready(function()
{	
	$('#cek1').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('cek2').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('cek2').disabled=true;
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#cek2').attr('checked', false);
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
		}
	});	
	
	$('#cek2').click(function(){
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
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
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no37').attr('checked', false);
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no38').attr('checked', false);
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no39').attr('checked', false);
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no40').attr('checked', false);
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no41').attr('checked', false);
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no42').attr('checked', false);
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no43').attr('checked', false);
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no44').attr('checked', false);
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
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
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no45').attr('checked', false);
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
		}
    });
	$('#no45').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no46').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no46').disabled=true;
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no46').attr('checked', false);
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
		}
    });
	$('#no46').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no47').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no47').disabled=true;
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no47').attr('checked', false);
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
		}
    });
	$('#no47').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no48').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no48').disabled=true;
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no48').attr('checked', false);
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
		}
    });
	$('#no48').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no49').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no49').disabled=true;
			document.getElementById('no50').disabled=true;
			$('#no49').attr('checked', false);
			$('#no50').attr('checked', false);
		}
    });
	$('#no49').click(function(){
		var input = $( this );
		if(input.prop( "checked" ) == true )
		{
			document.getElementById('no50').disabled=false;
		}
		else if(input.prop( "checked" ) == false )
		{
			document.getElementById('no50').disabled=true;
			$('#no50').attr('checked', false);
		}
    });
	/*
	
	$('#jakbar').hide();        
	$('#surabaya').hide();  
	$('#pontianak').hide(); 
	$('#lainnya244').hide(); 
	$('#lainnyatext').hide(); 
	
    $('#bapbkbp').click(function(){
		$('#jakbar').hide();        
		$('#surabaya').hide();  
		$('#pontianak').hide(); 
		$('#lainnya244').hide(); 
		
    });
	
	$('#Pengneg').click(function(){
		$('#jakbar').show();        
		$('#surabaya').show();  
		$('#pontianak').show(); 
		$('#lainnya244').show(); 
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
var cek1=$("input[name=cek1]:checked").val();
var cek2=$("input[name=cek2]:checked").val();
var x=$("input[name=menerima11]:checked").val();
var x1_1=$("input[name=checkbox16]:checked").val();
var x1_2=$("input[name=checkbox17]:checked").val();
var x1_3=$("input[name=checkbox18]:checked").val();
var x1_4=$("input[name=checkbox19]:checked").val();
var x1_5=$("input[name=checkbox20]:checked").val();
var x1_6=$("input[name=checkbox21]:checked").val();
var x1_7=$("input[name=checkbox22]:checked").val();
var x1_8=$("input[name=checkbox23]:checked").val();
var x1_9=$("input[name=checkbox24]:checked").val();
var x1_10=$("input[name=checkbox25]:checked").val();
var x1_11=$("input[name=checkbox26]:checked").val();
var x1_12=$("input[name=checkbox27]:checked").val();
var x1_13=$("input[name=checkbox28]:checked").val();
var x1_14=$("input[name=checkbox29]:checked").val();
var x1_15=$("input[name=checkbox30]:checked").val();
var x1_16=$("input[name=checkbox31]:checked").val();
var x1_17=$("input[name=checkbox32]:checked").val();
var x1_18=$("input[name=checkbox33]:checked").val();
var x1_19=$("input[name=checkbox34]:checked").val();
var x1_20=$("input[name=checkbox35]:checked").val();
var x1_21=$("input[name=checkbox36]:checked").val();
var x1_22=$("input[name=checkbox37]:checked").val();
var x1_23=$("input[name=checkbox38]:checked").val();
var x1_24=$("input[name=checkbox39]:checked").val();
var x1_25=$("input[name=checkbox40]:checked").val();
var x1_26=$("input[name=checkbox41]:checked").val();
var x1_27=$("input[name=checkbox42]:checked").val();
var x1_28=$("input[name=checkbox43]:checked").val();
var x1_29=$("input[name=checkbox44]:checked").val();
var x1_30=$("input[name=checkbox45]:checked").val();
var x1_31=$("input[name=checkbox46]:checked").val();
var x1_32=$("input[name=checkbox47]:checked").val();
var x1_33=$("input[name=checkbox48]:checked").val();
var x1_34=$("input[name=checkbox49]:checked").val();
var x1_35=$("input[name=checkbox50]:checked").val();
var x1_36=$("input[name=checkbox51]:checked").val();
var x1_37=$("input[name=checkbox52]:checked").val();
var x1_38=$("input[name=checkbox53]:checked").val();
var x1_39=$("input[name=checkbox54]:checked").val();
var x1_40=$("input[name=checkbox55]:checked").val();
var x1_41=$("input[name=checkbox56]:checked").val();
//var x1_42=$("input[name=checkbox57]:checked").val();
var x1_43=$("input[name=checkbox58]:checked").val();
var x1_44=$("input[name=checkbox59]:checked").val();
var x1_45=$("input[name=checkbox60]:checked").val();
var x1_46=$("input[name=checkbox61]:checked").val();
var x1_47=$("input[name=checkbox62]:checked").val();
var x1_48=$("input[name=checkbox63]:checked").val();
var x1_49=$("input[name=checkbox64]:checked").val();
var x1_50=$("input[name=checkbox65]:checked").val();
var x1_51=$("input[name=checkbox66]:checked").val();
var mel1=$("input[name=mel1]:checked").val();
var bapbkbp=$("#bapbkbp");
var input=$("#jakbar");
var input1=$("#surabaya");
var input2=$("#pontianak");
var x24_4=$("input[name=dk]:checked").val();
var y=$('#tidak').val();


  if(cek1==null || cek1=="")
  {  
  alert("Silakan centang kolom Nasabah");
  return false;
  }
  else if(cek2==null || cek2=="")
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
  alert("Silakan centang pernyataan No.2.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_7==null || x1_7=="")
  {  
  alert("Silakan centang pernyataan No.3.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_8==null || x1_8=="")
  {  
  alert("Silakan centang pernyataan No.3.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_9==null || x1_9=="")
  {  
  alert("Silakan centang pernyataan No.3.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_10==null || x1_10=="")
  {  
  alert("Silakan centang pernyataan No.4.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_11==null || x1_11=="")
  {  
  alert("Silakan centang pernyataan No.4.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_12==null || x1_12=="")
  {  
  alert("Silakan centang pernyataan No.4.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_13==null || x1_13=="")
  {  
  alert("Silakan centang pernyataan No.4.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_14==null || x1_14=="")
  {  
  alert("Silakan centang pernyataan No.4.5 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_15==null || x1_15=="")
  {  
  alert("Silakan centang pernyataan No.5 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_16==null || x1_16=="")
  {  
  alert("Silakan centang pernyataan No.6 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_17==null || x1_17=="")
  {  
  alert("Silakan centang pernyataan No.7 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_18==null || x1_18=="")
  {  
  alert("Silakan centang pernyataan No.8 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_19==null || x1_19=="")
  {  
  alert("Silakan centang pernyataan No.9.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_20==null || x1_20=="")
  {  
  alert("Silakan centang pernyataan No.9.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_21==null || x1_21=="")
  {  
  alert("Silakan centang pernyataan No.9.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_22==null || x1_22=="")
  {  
  alert("Silakan centang pernyataan No.10.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_23==null || x1_23=="")
  {  
  alert("Silakan centang pernyataan No.10.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_24==null || x1_24=="")
  {  
  alert("Silakan centang pernyataan No.11 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_25==null || x1_25=="")
  {  
  alert("Silakan centang pernyataan No.12 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_26==null || x1_26=="")
  {  
  alert("Silakan centang pernyataan No.13.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_27==null || x1_27=="")
  {  
  alert("Silakan centang pernyataan No.13.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_28==null || x1_28=="")
  {  
  alert("Silakan centang pernyataan No.13.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_29==null || x1_29=="")
  {  
  alert("Silakan centang pernyataan No.13.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_30==null || x1_30=="")
  {  
  alert("Silakan centang pernyataan No.13.5 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_31==null || x1_31=="")
  {  
  alert("Silakan centang pernyataan No.14 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_32==null || x1_32=="")
  {  
  alert("Silakan centang pernyataan No.15 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_33==null || x1_33=="")
  {  
  alert("Silakan centang pernyataan No.16 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_34==null || x1_34=="")
  {  
  alert("Silakan centang pernyataan No.17 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_35==null || x1_35=="")
  {  
  alert("Silakan centang pernyataan No.18.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_36==null || x1_36=="")
  {  
  alert("Silakan centang pernyataan No.18.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_37==null || x1_37=="")
  {  
  alert("Silakan centang pernyataan No.18.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_38==null || x1_38=="")
  {  
  alert("Silakan centang pernyataan No.19 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_39==null || x1_39=="")
  {  
  alert("Silakan centang pernyataan No.20.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_40==null || x1_40=="")
  {  
  alert("Silakan centang pernyataan No.20.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_41==null || x1_41=="")
  {  
  alert("Silakan centang pernyataan No.20.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_43==null || x1_43=="")
  {  
  alert("Silakan centang pernyataan No.21.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_44==null || x1_44=="")
  {  
  alert("Silakan centang pernyataan No.21.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_45==null || x1_45=="")
  {  
  alert("Silakan centang pernyataan No.21.3 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_46==null || x1_46=="")
  {  
  alert("Silakan centang pernyataan No.21.4 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_47==null || x1_47=="")
  {  
  alert("Silakan centang pernyataan No.22 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_48==null || x1_48=="")
  {  
  alert("Silakan centang pernyataan No.23 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_49==null || x1_49=="")
  {  
  alert("Silakan centang pernyataan No.24.1 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(x1_50==null || x1_50=="")
  {  
  alert("Silakan centang pernyataan No.24.2 'Saya sudah membaca dan memahami'");
  return false;
  }
  else if(mel1==null)
  {
	alert("Silakan Pilih Optional No.24 Point 3 ");
    return false;	
  }
  /*else if(input.prop( "checked" ) == false && input1.prop( "checked" ) == false && input2.prop( "checked" ) == false)
  {  
	alert("Silakan Pilih Optional Pengadilan Negeri No 24.3 : \n - Jakarta Barat \n - Surabaya \n - Pontianak");
	return false;
  }*/
  else if(x24_4==null || x24_4=="")
  {  
  alert("Silakan Pilih Optional No.24 Point 4 ");
  return false;
  }
  else if(x1_51==null || x1_51=="")
  {  
  alert("Silakan centang pernyataan No.25 'Saya sudah membaca dan memahami'");
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
<p align="Right">&nbsp;&nbsp; Page <input class='paging' type="text" size="1" value="7" disabled> of <input class='paging' type="text" size="1" value="9" disabled></p>
<form onSubmit="return validateForm()" action='function7_1.php' method='post' name='formku'>
<p align='right'>Lampiran  2 Peraturan Kepala Badan Pengawas<br />
  Perdagangan  Berjangka Komoditi<br />
  Nomor:  107/BAPPEBTI/PER/11/2013</p>
<h3 align='center'><b>Formulir Nomor 107.PBK.05.1</b></h3>
<p align='center'>
  <b>PERJANJIAN PEMBERIAN AMANAT  SECARA ELEKTRONIK ONLINE</b></p>
<p align='center'>
  <b>UNTUK TRANSAKSI KONTRAK BERJANGKA</b></p>
<table width='70%' border='0' align='center'  cellpadding='10'>
  <tr >
    <td ><h3 align='center'><b>PERHATIAN  !<br />
             
      PERJANJIAN  INI MERUPAKAN KONTRAK HUKUM. HARAP DIBACA DENGAN SEKSAMA.</b></h3></td>
  </tr>
</table>
<br />
<table width='70%' align='center'>
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
								echo $tgl_str;?>' readonly> , 
								Tanggal <input class='hari' name='tanggal' type='Text' size='5' width='20%' value='<?php 
								echo $date;?>' readonly> ,
								Bulan <input class='hari' name='bulan' type='Text' size='5' width='20%' value='<?php 
								echo $month;?>' readonly> ,
								Tahun <input class='hari' name='tahun' type='Text' size='5' width='20%' value='<?php 
								echo $year;?>' readonly> ,
								</p><br/></td>
  </tr>
  <tr><td><Strong><center>Kami yang mengisi perjanjian di bawah ini:</center></Strong><br></td></tr>
</table>
<table width='80%' border='1' align='center' >
  <tr>
    <td width='4%' align='center'>1.</td>
    <td width='23%'>Nama</td>
    <td width='1%'>:</td>
    <td width='50%'>
      <input class='nama' type='text' name='nama1' size='60' value="<?php
		echo $_SESSION['nama'];
		?>" readonly />
    </td>
	
	<td width='22%' rowspan='3' class='checkbox' align='center' valign='middle'><input id='cek1' name='cek1' type='checkbox' value='Saya sudah membaca dan memahami'><br>Saya sudah membaca dan memahami</td>
  
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Pekerjaan</td>
    <td>:</td>
    <td>
      <input type='text' name='pekerjaan1' size='60' value="<?php
		echo "".$_SESSION['kerja5']."";
		?>" readonly />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Alamat</td>
    <td>:</td>
    <td>
      <input type='text' name='alamat1' size='60' value="<?php
		echo $_SESSION['alamat'];
		?>" readonly />
    </td>
  </tr>

</table><br>
<table width='70%' align='center'>
  <tr>
    <td><p>dalam hal ini bertindak untuk dan  atas nama sendiri, yang selanjutnya disebut Nasabah,</p></td>
  </tr>
</table>
<br>
<table width='80%' border='1' align='center' >
  <tr>
    <td width='4%' align='center'>2.</td>
    <td width='23%'>Nama</td>
    <td width='1%'>:</td>
    <td width='50%'>
       PT. Esandar Arthamas Berjangka
    </td>

	<td width='21%' rowspan='3' class='checkbox' align='center' valign='middle'><input id='cek2' name='cek2' type='checkbox' value='Saya sudah membaca dan memahami' disabled><br>Saya sudah membaca dan memahami</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Pekerjaan/Jabatan</td>
    <td>:</td>
    <td>Wakil Pialang</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign='top'>Alamat</td>
    <td valign='top'>:</td>
    <td><p>Agung Podomoro Land Tower Lt 36. </p>
      Jl  Letjen S Parman Kav 28 Jakarta Barat 11470</td>
  </tr>
</table>
<table width='70%' border="0" align='center'>
  <tr>
    <td align='justify'><p>Dalam hal ini bertindak untuk dan  atas nama PT. Esandar Arthamas Berjangka yang selanjutnya disebut Pialang  Berjangka, <br />
            <br />
      Nasabah dan Pialang Berjangka  secara bersama &ndash; sama selanjutnya disebut Para Pihak. <br />
      <br />
      Para Pihak sepakat untuk  mengadakan Perjanjian Pemberian Amanat untuk melakukan transaksi penjualan  maupun pembelian Kontrak Berjangka dengan ketentuan sebagai berikut:</p><br></td>
  </tr>
</table>
<table width='90%' border='1' align='center' >
  <tr>
    <td width='6%' align='center' valign='top'>1</td>
    <td colspan='3'><Strong>Margin dan Pembayaran Lainnya</Strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width='6%' align="justify" style="padding:1%;">(1)</td>
    <td width='67%' align="justify" style="padding:1%;">Nasabah menempatkan sejumlah dana (Margin) ke Rekening  Terpisah (Segregated Account) Pialang Berjangka sebagai Margin awal dan wajib mempertahankannya  sebagaimana ditetapkan.</td>
    <td width='21%' align="center" valign="middle">
        <input class='checkbox' id='no1' name='checkbox16' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(2)</td>
    <td align="justify" style="padding:1%;">membayar biaya-biaya yang diperlukan untuk transaksi  yaitu biaya transaksi, pajak, komisi, dan biaya pelayanan, biaya bunga sesuai  tingkat yang berlaku, dan biaya lainnya yang dapat dipertanggungjawabkan  berkaitan dengan transaksi sesuai amanat Nasabah, maupun biaya rekening  Nasabah.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no2' name='checkbox17' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>2</td>
    <td colspan='3'><Strong>Pelaksanaan Amanat</Strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(1)</td>
    <td align="justify" style="padding:1%;">Setiap amanat yang disampaikan oleh Nasabah atau  kuasanya yang ditunjuk secara tertulis oleh Nasabah, dianggap sah apabila  diterima oleh Pialang Berjangka sesuai dengan ketentuan yang berlaku, dapat  berupa amanat tertulis yang ditandatangani oleh Nasabah atau kuasanya, amanat  telepon yang direkam, dan/atau amanat transaksi elektronik lainnya.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no3' name='checkbox18' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(2)</td>
    <td align="justify" style="padding:1%;">Setiap amanat Nasabah yang diterima dapat langsung  dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi  dan eksekusinya tergantung pada kondisi dan sistem transaksi yang berlaku yang  mungkin dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan amanat  tersebut. Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum  memberikan amanat untuk transaksi berikutnya.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no4' name='checkbox19' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(3)</td>
    <td align="justify" style="padding:1%;">Amanat Nasabah hanya dapat dibatalkan dan/atau  diperbaiki apabila transaksi atas amanat tersebut belum terjadi. Pialang  Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tidak  terlaksananya pembatalan dan/atau perbaikan sepanjang bukan karena kelalaian  Pialang Berjangka.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no5' name='checkbox20' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(4)</td>
    <td align="justify" style="padding:1%;">Pialang Berjangka berhak menolak amanat Nasabah  apabila harga yang ditawarkan atau diminta tidak wajar.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no6' name='checkbox21' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>3</td>
    <td colspan='3' align='left'><b>Antisipasi Penyerahan Barang</Strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(1)</td>
    <td align="justify" style="padding:1%;">Untuk kontrak-kontrak tertentu penyelesaian transaksi  dapat dilakukan dengan penyerahan atau penerimaan barang (delivery) apabila  kontrak jatuh tempo. Nasabah menyadari bahwa penyerahan atau penerimaan barang  mengandung risiko yang lebih besar daripada melikuidasi posisi dengan offset.  Penyerahan fisik barang memiliki konsekuensi kebutuhan dana yang lebih besar  serta tambahan biaya pengelolaan barang.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no7' name='checkbox22' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(2)</td>
    <td align="justify" style="padding:1%;">Pialang Berjangka tidak bertanggung jawab atas  klasifikasi mutu (grade), kualitas atau tingkat toleransi atas komoditi yang  diserahkan atau akan diserahkan.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no8' name='checkbox23' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(3)</td>
    <td align="justify" style="padding:1%;">Pelaksanaan penyerahan atau penerimaan barang tersebut  akan diatur dan dijamin oleh Lembaga Kliring Berjangka.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no9' name='checkbox24' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>4</td>
    <td colspan='3'><Strong>Kewajiban Memelihara Margin</Strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(1)</td>
    <td align="justify" style="padding:1%;">Nasabah wajib memelihara/memenuhi tingkat Margin yang  harus tersedia di rekening pada Pialang Berjangka sesuai dengan jumlah yang  telah ditetapkan baik diminta ataupun tidak oleh Pialang Berjangka.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no10' name='checkbox25' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(2)</td>
    <td align="justify" style="padding:1%;">Apabila jumlah Margin memerlukan penambahan maka  Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah untuk  menambah Margin segera.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no11' name='checkbox26' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(3)</td>
    <td align="justify" style="padding:1%;">Apabila jumlah Margin memerlukan tambahan (Call  Margin) maka Nasabah wajib melakukan penyerahan Call Margin selambat-lambatnya  sebelum dimulai hari perdagangan berikutnya. Kewajiban Nasabah sehubungan  dengan penyerahan Call Margin tidak terbatas pada jumlah Margin awal.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no12' name='checkbox27' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(4)</td>
    <td align="justify" style="padding:1%;">Pialang Berjangka tidak berkewajiban melaksanakan  amanat untuk melakukan transaksi yang baru dari Nasabah sebelum Call Margin  dipenuhi.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no13' name='checkbox28' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="justify" style="padding:1%;">(5)</td>
    <td align="justify" style="padding:1%;">Untuk memenuhi kewajiban Call Margin dan keuangan  lainnya dari Nasabah, Pialang Berjangka dapat mencairkan dana Nasabah yang ada  di Pialang Berjangka.</td>
    <td align="center" valign="middle">
        <input class='checkbox' id='no14' name='checkbox29' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>5</td>
    <td colspan='3'><Strong>Hak Pialang Berjangka Melikuidasi Posisi Nasabah </Strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan='2' align="justify" style="padding:1%;">Nasabah bertanggung jawab memantau / mengetahui posisi  terbukanya secara terusmenerus dan memenuhi kewajibannya. Apabila dalam jangka  waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan,  Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau  sebagian, membatasi transaksi, atau tindakan lain untuk melindungi diri dalam  pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa  memberitahu Nasabah dan Pialang Berjangka tidak bertanggung jawab atas kerugian  yang timbul akibat tindakan tersebut.</td>
    <td align="center">
        <input class='checkbox' id='no15' name='checkbox30' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>6</td>
    <td colspan='3' align="justify" style="padding:1%;"><b>Penggantian Kerugian Tidak Menyerahkan Barang</Strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan='2' align="justify" valign='top'>Apabila Nasabah tidak mampu menyerahkan komoditi atas  Kontrak Berjangka yang jatuh tempo, Nasabah memberikan kuasa kepada Pialang  Berjangka untuk meminjam atau membeli komoditi untuk penyerahan tersebut.  Nasabah wajib membayar secepatnya semua biaya, kerugian dan premi yang telah  dibayarkan oleh Pialang Berjangka atas tindakan tersebut. Apabila Pialang  Berjangka harus menerima penyerahan komoditi atau surat berharga maka Nasabah  bertanggung jawab atas penurunan nilai dari komoditi atas surat berharga  tersebut.</td>
    <td align="center">
        <input class='checkbox' id='no16' name='checkbox31' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>7</td>
    <td colspan='3' valign='top'><Strong>Penggantian Kerugian Tidak Adanya Penutupan Posisi</Strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan='2' align="justify" valign='top'>Apabila Nasabah tidak mampu melakukan penutupan atas  transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas  transaksi di Bursa. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian  dan premi yang telah dibayarkan oleh Pialang Berjangka, dan apabila Nasabah  lalai untuk membayar biayabiaya tersebut, Pialang Berjangka berhak untuk  mengambil pembayaran dari dana Nasabah.</td>
    <td align="center">
        <input class='checkbox' id='no17' name='checkbox32' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>8</td>
    <td colspan='3' valign='top'><Strong>Pialang Berjangka Dapat Membatasi Posisi</Strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan='2' align="justify" valign='top'>Nasabah mengakui hak Pialang Berjangka untuk membatasi  posisi terbuka Kontrak Berjangka Nasabah dan Nasabah tidak melakukan transaksi  melebihi batas yang telah ditetapkan tersebut.</td>
    <td align="center" valign='middle'>
        <input class='checkbox' id='no18' name='checkbox33' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>9</td>
    <td colspan='3' valign='top'><Strong>Tidak Ada Jaminan atas Informasi atau Rekomendasi Nasabah  mengakui bahwa:</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(1)</td>
    <td valign='top' align="justify">Informasi dan rekomendasi yang diberikan oleh Pialang  Berjangka kepada Nasabah tidak selalu lengkap dan perlu diverifikasi.</td>
    <td align="center" valign='middle'>
        <input class='checkbox' id='no19' name='checkbox34' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(2)</td>
    <td valign='top' align="justify">Pialang Berjangka tidak menjamin bahwa informasi dan  rekomendasi yang diberikan merupakan informasi yang akurat dan lengkap.</td>
    <td align="center" valign='middle'>
        <input class='checkbox' id='no20' name='checkbox35' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(3)</td>
    <td valign='top' align="justify">Informasi dan rekomendasi yang diberikan oleh Wakil  Pialang Berjangka yang satu dengan yang lain mungkin berbeda karena perbedaan  analisis fundamental atau teknikal. Nasabah menyadari bahwa ada kemungkinan  Pialang Berjangka dan pihak terafiliasinya memiliki posisi di pasar dan  memberikan rekomendasi tidak konsisten kepada Nasabah.</td>
    <td align="center" valign='middle'>
        <input class='checkbox' id='no21' name='checkbox36' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>10</td>
    <td colspan='3' valign='top'><Strong>Pembatasan Tanggung Jawab Pialang Berjangka.</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(1)</td>
    <td valign='top' align="justify">Pialang Berjangka tidak bertanggung jawab untuk  memberikan penilaian kepada Nasabah mengenai iklim, pasar, keadaan politik dan  ekonomi nasional dan internasional, nilai kontrak berjangka, kolateral, atau  memberikan nasihat mengenai keadaan pasar. Pialang Berjangka hanya memberikan  pelayanan untuk melakukan transaksi secara jujur serta memberikan laporan atas  transaksi tersebut.</td>
    <td align="center" valign='middle'>
        <input class='checkbox' id='no22' name='checkbox37' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(2)</td>
    <td valign='top' align="justify">Perdagangan sewaktu-waktu dapat dihentikan oleh pihak  yang memiliki otoritas (Bappebti/Bursa Berjangka) tanpa pemberitahuan terlebih  dahulu kepada Nasabah. Atas posisi terbuka yang masih dimiliki oleh Nasabah  pada saat perdagangan tersebut dihentikan, maka akan diselesaikan (likuidasi)  berdasarkan pada peraturan/ketentuan yang dikeluarkan dan ditetapkan oleh pihak  otoritas tersebut, dan semua kerugian serta biaya yang timbul sebagai akibat  dihentikannya transaksi oleh pihak otoritas perdagangan tersebut, menjadi beban  dan tanggung jawab Nasabah sepenuhnya.</td>
    <td align="center" valign='middle'>
        <input class='checkbox' id='no23' name='checkbox38' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>11</td>
    <td colspan='3' valign='top'><Strong>Transaksi Harus Mematuhi Peraturan Yang Berlaku</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' valign='top' align="justify">Semua transaksi baik yang dilakukan sendiri oleh  Nasabah maupun melalui Pialang Berjangka wajib mematuhi peraturan  perundang-undangan di bidang Perdagangan Berjangka, kebiasaan dan interpretasi  resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.</td>
    <td align="center" valign='middle'>
        <input class='checkbox' id='no24' name='checkbox39' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>12</td>
    <td colspan='3' valign='top'><Strong>Pialang Berjangka tidak Bertanggung jawab atas  Kegagalan Komunikasi</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' valign='top' align="justify">Pialang Berjangka tidak bertanggung jawab atas  keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi  lainnya yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain  diluar kontrol Pialang Berjangka.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no25' name='checkbox40' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>13</td>
    <td colspan='3' valign='top'><Strong>Konfirmasi</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(1)</td>
    <td valign='top' align="justify">Konfirmasi dari Nasabah dapat berupa surat, telex,  media lain, secara tertulis ataupun rekaman suara.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no26' name='checkbox41' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(2)</td>
    <td valign='top' align="justify">Pialang Berjangka berkewajiban menyampaikan konfirmasi  transaksi, laporan rekening, permintaan Call Margin, dan pemberitahuan lainnya  kepada Nasabah secara akurat, benar dan secepatnya pada alamat Nasabah sesuai  dengan yang tertera dalam rekening Nasabah. Apabila dalam jangka waktu 2 x 24  jam setelah amanat jual atau beli disampaikan, tetapi Nasabah belum menerima  konfirmasi tertulis, Nasabah segera memberitahukan hal tersebut kepada Pialang  Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no27' name='checkbox42' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(3)</td>
    <td valign='top' align="justify">Jika dalam waktu 2 x 24 jam sejak tanggal penerimaan  konfirmasi tertulis tersebut tidak ada sanggahan dari Nasabah maka konfirmasi  Pialang Berjangka dianggap benar dan sah.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no28' name='checkbox43' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(4)</td>
    <td valign='top' align="justify">Kekeliruan atas konfirmasi yang diterbitkan Pialang  Berjangka akan diperbaiki oleh Pialang Berjangka sesuai keadaan yang sebenarnya  dan demi hukum konfirmasi yang lama batal.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no29' name='checkbox44' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(5)</td>
    <td valign='top' align="justify">Nasabah tidak bertanggung jawab atas transaksi yang  dilaksanakan atas rekeningnya apabila konfirmasi tersebut tidak disampaikan  secara benar dan akurat.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no30' name='checkbox45' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>14</td>
    <td colspan='3' valign='top'><Strong>Kebenaran Informasi Nasabah</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' valign='top' align="justify">Nasabah memberikan informasi yang benar dan akurat  mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan  memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi  perubahan, termasuk perubahan kemampuan keuangannya untuk terus melaksanakan  transaksi.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no31' name='checkbox46' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>15</td>
    <td colspan='3' valign='top'><Strong>Komisi Transaksi</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' valign='top' align="justify">Nasabah mengetahui dan menyetujui bahwa Pialang  Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan,  dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang  Berjangka. Perubahan beban (fees) dan biaya lainnya harus disetujui secara  tertulis oleh Para Pihak.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no32' name='checkbox47' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>16</td>
    <td colspan='3' valign='top'><Strong>Pemberian Kuasa</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' valign='top' align="justify">Nasabah memberikan kuasa kepada Pialang Berjangka  untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau  institusi lain yang terkait untuk memperoleh keterangan atau verifikasi  mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa  penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang  Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan  secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi  persyaratan yang diperlukan.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no33' name='checkbox48' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>17</td>
    <td colspan='3' valign='top'><Strong>Pemindahan Dana</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' valign='top' align="justify">Pialang Berjangka dapat setiap saat mengalihkan dana  dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang  dilakukan Nasabah seperti pembayaran komisi, pembayaran biaya transaksi,  kliring, dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu  memberitahukan kepada Nasabah. Transfer yang telah dilakukan akan segera  diberitahukan secara tertulis kepada Nasabah.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no34' name='checkbox49' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>18</td>
    <td colspan='3' valign='top'><Strong>Pemberitahuan</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(1)</td>
    <td valign='top' align="justify">Semua komunikasi, uang, surat berharga, dan kekayaan  lainnya harus dikirimkan langsung ke alamat Nasabah seperti tertera dalam  rekeningnya atau alamat lain yang ditetapkan/diberitahukan secara tertulis oleh  Nasabah.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no35' name='checkbox50' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(2)</td>
    <td valign='top'><p>Semua uang, harus disetor atau ditransfer langsung oleh  Nasabah ke Rekening Terpisah (Segregated Account) Pialang Berjangka:<br />
       <table>
	  <tr>
	  <td>Nama</td><td>:</td><td>PT. Esandar Arthamas Berjangka</td>
	  </tr>
	  <tr>
	  <td>Alamat</td><td>:</td><td>Agung Podomoro Land Tower Lt. 36</td>
	  </tr>
	  <tr>
	  <td></td><td></td><td>Jl.  Letjen S. Parman Kav. 28, Jakarta Barat 11470 - Indonesia</td>
	  </tr>
	  <tr>
	  <td>Bank</td><td>:</td><td>Bank  Central Asia cab Sudirman</td>
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
      dan  dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda terima  bukti setor atau transfer dari pegawai Pialang Berjangka.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no36' name='checkbox51' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(3)</td>
    <td valign='top'><p>Semua surat berharga, kekayaan lainnya, atau komunikasi  harus dikirim kepada Pialang Berjangka:<br />
      <table>
	  <tr>
	  <td>Nama</td><td>:</td><td>PT. Esandar Arthamas Berjangka</td>
	  </tr>
	  <tr>
	  <td>Alamat</td><td>:</td><td>Agung Podomoro Land Tower Lt. 36</td>
	  </tr>
	  <tr>
	  <td></td><td></td><td>Jl. Letjen S. Parman Kav. 28,  Jakarta Barat 11470 - Indonesia</td>
	  </tr>
	  <tr>
	  <td>Telepon</td><td>:</td><td>021-2933  9229</td>
	  </tr>
	  <tr>
	  <td>Faximile</td><td>:</td><td>021-2933 9230</td>
	  </tr>
	  <tr>
	  <td>Email</td><td>:</td><td>info@esandar.co.id</td>
	  </tr>
	  </table>
      dan  dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda bukti  penerimaan dari pegawai Pialang Berjangka.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no37' name='checkbox52' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>19</td>
    <td colspan='3' valign='top'><Strong>Dokumen Pemberitahuan Adanya Risiko</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' align='left' valign='top'>Nasabah mengakui menerima dan mengerti Dokumen  Pemberitahuan Adanya Risiko.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no38' name='checkbox53' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>20</td>
    <td colspan='3' align='left' valign='top'><b>Jangka Waktu Perjanjian dan Pengakhiran</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(1)</td>
    <td valign='top' align="justify">Perjanjian ini mulai berlaku terhitung sejak tanggal  ditandatanganinya sampai disampaikannya pemberitahuan pengakhiran secara  tertulis oleh Nasabah atau Pialang Berjangka.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no39' name='checkbox54' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(2)</td>
    <td valign='top' align="justify">Nasabah dapat mengakhiri Perjanjian ini hanya jika  Nasabah sudah tidak lagi memiliki posisi terbuka dan tidak ada kewajiban  Nasabah yang diemban oleh atau terhutang kepada Pialang Berjangka.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no40' name='checkbox55' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(3)</td>
    <td valign='top' align="justify">Pengakhiran tidak membebaskan salah satu Pihak dari tanggung  jawab atau kewajiban yang terjadi sebelum pemberitahuan tersebut.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no41' name='checkbox56' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>21</td>
    <td colspan='3' valign='top'><Strong>Berakhirnya Perjanjian</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' align='left' valign='top'>Perjanjian dapat berakhir dalam hal Nasabah:</td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(1)</td>
    <td valign='top' align="justify">Dinyatakan pailit, memiliki hutang yang sangat besar,  dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau  meninggal;</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no42' name='checkbox58' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(2)</td>
    <td valign='top' align="justify">Tidak dapat memenuhi atau mematuhi perjanjian ini  dan/atau melakukan pelanggaran terhadapnya;</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no43' name='checkbox59' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(3)</td>
    <td valign='top' align="justify"><p>Berkaitan dengan angka (1) dan (2) tersebut di atas,  Pialang Berjangka dapat:<br />
      i). meneruskan atau menutup posisi Nasabah tersebut setelah  mempertimbangkannya secara cermat dan jujur; dan</p>
      ii).  menolak perintah dari Nasabah atau kuasanya.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no44' name='checkbox60' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(4)</td>
    <td valign='top' align="justify">Pengakhiran Perjanjian sebagaimana dimaksud dengan  angka (1) dan (2) tersebut di atas tidak melepaskan kewajiban dari Para Pihak  yang berhubungan dengan penerimaan atau kewajiban pembayaran atau  pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no45' name='checkbox61' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>22</td>
    <td colspan='3' valign='top'><Strong>Force Majeur</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2'  align="justify" valign='top'>Tidak ada satupun pihak di dalam Perjanjian dapat  diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya  memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab  yang berada di luar kemampuannya atau kekuasaannya (force majeur), sepanjang  pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain  dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya  sebab itu. Yang dimaksud dengan Force Majeur dalam Perjanjian adalah peristiwa  kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir),  pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan  perundang-undangan yang berlaku dan kondisi di bidang ekonomi, keuangan dan  Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan  Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan, kliring  dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan  yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no46' name='checkbox62' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>23</td>
    <td colspan='3' valign='top'><Strong>Perubahan atas Isian dalam Perjanjian Pemberian Amanat</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' valign='top' align="justify">Perubahan atas isian dalam Perjanjian ini hanya dapat  dilakukan atas persetujuan Para Pihak, atau Pialang Berjangka telah  memberitahukan secara tertulis perubahan yang diinginkan, dan Nasabah tetap  memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara  tertulis atas usul perubahan tersebut. Tindakan Nasabah tersebut dianggap  setuju atas usul perubahan tersebut.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no47' name='checkbox63' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>24</td>
    <td colspan='3' valign='top'><Strong>Penyelesaian Perselisihan</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(1)</td>
    <td valign='top' align="justify">Semua perselisihan dan perbedaan pendapat yang timbul  dalam pelaksanaan Perjanjian ini wajib diselesaikan terlebih dahulu secara  musyawarah untuk mencapai mufakat antara Para Pihak.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no48' name='checkbox64' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(2)</td>
    <td valign='top' align="justify">Apabila perselisihan dan perbedaan pendapat yang  timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, Para  Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di  Bursa Berjangka.</td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no49' name='checkbox65' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(3)</td>
    <td valign='top' align="justify"><p>Apabila perselisihan dan perbedaan pendapat yang timbul  tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka  (2), maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui *):<br />
      <input class='checkbox' id='bapbkbp' type='radio' name='mel1' value='Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI)  berdasarkan Peraturan dan Prosedur Badan Arbitrase Perdagangan Berjangka  Komoditi (BAKTI)'> Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI)  berdasarkan Peraturan dan Prosedur Badan Arbitrase Perdagangan Berjangka  Komoditi (BAKTI); atau<br />
     <!--<input class='checkbox' id='Pengneg' type='radio' name='mel1' value='Pengadilan Negeri'> Pengadilan Negeri :&nbsp;&nbsp;-->
		<input class='checkbox' id='jakbar' type='radio' name='mel1' value='Jakarta Barat'>Pengadilan Negeri Jakarta Barat<br/>
		<input class='checkbox' id='surabaya' type='radio' name='mel1' value='Surabaya'>Pengadilan Negeri Surabaya<br/>
		<input class='checkbox' id='pontianak' type='radio' name='mel1' value='Pontianak'>Pengadilan Negeri Pontianak</td>
    <td align='center' valign='top'>&nbsp;</td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td align='center' valign='top'>(4)</td>
    <td valign='top'><p>Kantor atau kantor cabang Pialang Berjangka terdekat dengan  domisili Nasabah tempat penyelesaian dalam hal terjadi perselisihan.<br />
      Daftar Kantor Kantor yang dipilih (salah satu)<br />
      <input class='checkbox' type='radio' name='dk' value='Jakarta Barat'> Jakarta Barat<br />
      <input class='checkbox' type='radio' name='dk' value='Surabaya'> Surabaya<br />
      <input class='checkbox' type='radio' name='dk' value='Pontianak'>  Pontianak</p></td>
    <td align='center' valign='top'>&nbsp;</td>
  </tr>
  <tr>
    <td align='center' valign='top'>25</td>
    <td colspan='3' valign='top'><Strong>Bahasa</Strong></td>
  </tr>
  <tr>
    <td align='center' valign='top'>&nbsp;</td>
    <td colspan='2' valign='top'><p>Perjanjian ini dibuat dalam Bahasa Indonesia. Demikian  Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar,  sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun.</p>
        <strong>&ldquo;Saya  telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum  dalam perjanjian ini&rdquo;.</strong></td>
    <td align='center' valign='middle'>
        <input class='checkbox' id='no50' name='checkbox66' type='checkbox' align='middle' value='saya sudah membaca dan memahami' disabled />
        <br />
        saya sudah membaca dan memahami 
    </td>
  </tr>
  <tr>
    <td colspan='4' valign='top'>Dengan mengisi kolom &ldquo;YA&rdquo; di bawah, saya menyatakan  bahwa saya telah menerima &ldquo;<strong>PERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK  BERJANGKA</strong>&rdquo; mengerti dan menyetujui isinya.</td>
  </tr>
</table><br><br>
<table width='70%' border='0' align='center' >
  <tr>
    <td width='27%'>Pernyataan menerima / tidak</td>
    <td width='1%'>:</td>
    <td width='71%'>
      <input class='checkbox' type='radio' name='menerima11' value='Ya' onclick="myFunction()">
      Ya&nbsp;
      <input class='checkbox' id='tidak' type='radio' name='menerima11' value='Tidak'>
      Tidak
    </td>
  </tr>
  <tr>
  <?php
$tgl = new datetime('Asia/Jakarta');
$tgl_str = $tgl->format('d-m-Y');
?>
<td>Menerima pada Tanggal</td>
<td>:</td>
<td>&nbsp;
<input class='kodeae' type='text' name='t1' id='tanggalya' readonly>

</td>
 </tr>
</table>
<table width='60%' align='center'>
  <tr>
    <td colspan='3'><Strong><p>*) Pilih salah satu</p></td>
  </tr>
</table>
<br><table width='70%' align='center'>
  <tr>
    <td width="80%" align="center">
<button id='submit' name='submit11' type='submit'>Submit</button>

    </td>
  </tr>
</table>
<input class='checkbox' type="hidden" name="page1" value="<?php 
echo $_SESSION['page1'];
?>">

</form>
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