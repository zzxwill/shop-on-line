<?php
	include_once 'config.php';
	//include_once 'conn/conn.php';
	include_once 'conn/conn4DistibutiveDB.php';
	$sql = "select name,url from tb_links order by id";
	$rst = $conn->execute($sql);
	$arr = $rst->GetArray();
	$smarty->assign('arr',$arr);
	$smarty->display('links.tpl');
?>