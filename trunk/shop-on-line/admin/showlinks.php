<?php
	include_once 'config.php';
	//include_once 'conn/conn.php';
	include_once 'conn/conn4DistibutiveDB.php';
	$sql = 'select * from tb_links';
	$rst = $conn->execute($sql);
	$linkarr = $rst->GetArray();
	$smarty->assign('title','²é¿´Á´½Ó');
	$smarty->assign('linkarr',$linkarr);
	$smarty->display('showlinks.tpl');
?>