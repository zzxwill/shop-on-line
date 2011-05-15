<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$id = $_GET['id'];
	$sql = "select * from tb_public where id = ".$_GET['id'];
	$rst = $conn->execute($sql);
	$arr = $rst->getAssoc();
	$smarty->assign('title','查看公告');
	$smarty->assign('arr',$arr[$id]);
	$smarty->display('showpub.tpl');
?>