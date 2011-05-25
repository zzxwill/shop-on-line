<?php
	include_once ('inc/char.php');
	include_once ("adodb5/adodb.inc.php");
	$conn = ADONewConnection('mysql');
	$conn->PConnect('10.5.110.251','root','','db_database26') or die('connection error');
	$conn->Execute('set names gb2312');
	$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
?>