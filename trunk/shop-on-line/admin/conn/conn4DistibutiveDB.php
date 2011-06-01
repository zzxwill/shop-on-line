<?php
	include_once 'inc/char.php';
	include_once "adodb5/adodb.inc.php";
	$conn = ADONewConnection('mysql');
	//$conn->PConnect('10.5.110.251','root','root','db_database26') or die('connection error');
	$conn->PConnect('10.5.110.251:8066','root','','db_database26') or die('connection error');
	
	
	/*Á¬½ÓOracle zzx */
	/*include_once 'inc/char.php';
	include_once "adodb5/adodb.inc.php";
	$conn = ADONewConnection('oci8');
	$conn->PConnect(false, 'lab1107', 'lab1107', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=10.17.40.198)(PORT=1521)))(CONNECT_DATA=(SID=lab1107)(SERVER=DEDICATED)))');
	*/
	
	$conn->Execute('set names gb2312');
	$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
?>