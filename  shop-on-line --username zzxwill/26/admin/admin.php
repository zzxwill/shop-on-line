<?php
	include_once 'config.php';
	include_once 'conn/conn.php';
	$sql = "select * from tb_admin";
	$rst = $conn->execute($sql);
	$arr = $rst->GetAssoc();
	$smarty->assign('arr',$arr);
	$smarty->assign('title','管理员管理');
	$smarty->display('admin.tpl');
?>