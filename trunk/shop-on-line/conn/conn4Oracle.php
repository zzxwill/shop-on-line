<?php
	include_once 'C:/Program Files/xampp/htdocs/shop-on-line/inc/char.php';
	include_once "C:/Program Files/xampp/htdocs/shop-on-line/adodb5/adodb.inc.php";
	$conn = ADONewConnection('oracle');
	//$conn->PConnect('localhost','root','','db_database26') or die('connection error');
	//$conn->PConnect('10.17.199.8','lab1107','lab1107','LAB1107') or die('connection error');
	//$conn->Connect("10.17.199.8", "lab1107", "lab1107", "lab1107");
	$conn->PConnect(false, 'lab1107', 'lab1107', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=10.17.199.8)(PORT=1521)))(CONNECT_DATA=(SID=lab1107)(SERVER=DEDICATED)))');
	
	//$conn->Connect('server:1521', 'scott', 'tiger', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=10.17.199.8)(PORT=1521)))(CONNECT_DATA=(SID=lab1107)(SERVER=DEDICATED)))'); # ��ʹ�� tnsnames.ora
	echo "aaa";
	//$conn->Execute('set names gb2312');
	//$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
	echo "bbb";
	//echo phpinfo();
	$rst = $conn -> Execute("select bookid from t_d_bookinfo where bookid = 1000000300");
	echo "ccc";
	 

	while(!$rst -> EOF){
		echo 'fff';						//���û�д��������wihle���ѭ��������
		echo $rst -> fields['bookid'].' ';	
		$rst -> movenext();					//ָ������
	}	

$rst -> close();
$conn -> close();


	
?>