<?php
	/*char.php����Ϊ��header("Content-Type:text/html;charset=gb2312");��Ϊ�������ַ�����*/
	include_once 'inc/char.php';
	/*ʹ��ADODB,��ѡ�ò�ͬ�����ݿ�͸����*/
	include_once "adodb5/adodb.inc.php";
	/*�½�һ��ADODB���Ӷ���*/
	$conn = ADONewConnection('mysql');
	/*�������ӵ����ݿ�����ݿ�IP���˿ںţ��û��������ݿ�����*/
	$conn->PConnect('10.5.110.251:8066','root','','db_database26') or die('connection error');
	/*�������ݿ�Ĳ������룬��ֹ��������*/
	$conn->Execute('set names gb2312');
	$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
?>