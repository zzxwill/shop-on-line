<?php
	include_once 'conn/conn.php';
	$rd = $_GET['rd'];
	$reback = "1";
	$arr = explode(",",$rd);
	for($i = 0; $i < count($arr); $i++){
		$sql = "delete from tb_form where id = ".$arr[$i];
		if(false == ($rst = $conn->execute($sql))){
			$reback = "0";
			break;
		}
	}
	echo $reback;
?>