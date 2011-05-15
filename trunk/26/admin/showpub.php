<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = "select * from tb_public";
	$rst = $conn->execute($sql);
	$pubarr = $rst->GetArray();
	$smarty->assign('pubarr',$pubarr);
	$smarty->assign('title','查看公告');
	$smarty->display('showpub.tpl');
?>