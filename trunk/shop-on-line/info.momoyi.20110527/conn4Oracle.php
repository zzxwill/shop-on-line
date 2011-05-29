<?php

	//echo phpinfo();
	include_once "./adodb5/adodb.inc.php";
	//$conn = ADONewConnection('oracle');
	$conn = ADONewConnection('oci8');
	$conn->PConnect(false, 'lab1107', 'lab1107', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=10.17.40.198)(PORT=1521)))(CONNECT_DATA=(SID=lab1107)(SERVER=DEDICATED)))');
	echo "aaa";
	$rst = $conn -> Execute("select * from course");  //select * from t_b_notice在数据库中能查到数据，但在此处调试时停止
	echo "bbb";
	while ( $arr = $rst->FetchRow () ) {
	print_r ( $arr );
	echo "<hr>";
}
	/*while(!$rst -> EOF){
		echo 'fff';	
		echo $rst->					
		echo $rst -> fields['coursename'].' ';	
		$rst -> movenext();					
	}*/
	$rst -> close();
	$conn -> close();	
	

/*include_once "./adodb5/adodb.inc.php";
$db = NewADOConnection ( "oci8" );
$tnsName = "(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=10.17.40.198)(PORT=1521)))(CONNECT_DATA=(SID=lab1107)(SERVER=DEDICATED)))";

$db->Connect ( $tnsName, "lab1107", "lab1107" );

$rs = $db->Execute ( "select * from course");
while ( $arr = $rs->FetchRow () ) {
	print_r ( $arr );
	echo "<hr>";
}*/
?>