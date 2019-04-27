<?php
function encodePwd($pwd)
{
	return base64_encode(base64_encode($pwd));
}
function decodePwd($pwd)
{
	return base64_decode(base64_decode($pwd));
}
?>