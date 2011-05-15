<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = "select id,name,isfreeze from tb_user";
	$rst = $conn->execute($sql);
	$memarr = $rst->GetAssoc();
	$smarty->assign('title','会员管理');
	$smarty->assign('memarr',$memarr);
	$smarty->display('member.tpl');
?>