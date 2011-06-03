<?php
	/*char.php内容为：header("Content-Type:text/html;charset=gb2312");是为了设置字符编码*/
	include_once 'inc/char.php';
	/*使用ADODB,对选用不同的数据库透明化*/
	include_once "adodb5/adodb.inc.php";
	/*新建一个ADODB连接对象*/
	$conn = ADONewConnection('mysql');
	/*设置连接的数据库的数据库IP，端口号，用户名，数据库名字*/
	$conn->PConnect('10.5.110.251:8066','root','','db_database26') or die('connection error');
	/*设置数据库的操作编码，防止出现乱码*/
	$conn->Execute('set names gb2312');
	$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
?>