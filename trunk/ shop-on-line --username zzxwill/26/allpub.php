<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = "select * from tb_public order by id desc";
	$num = 10;
	$rst = $conn->SelectLimit($sql,$num);
	$arr = $rst->GetArray();
	$smarty->assign('title','ȫ������');
	$smarty->assign('arr',$arr);
	$smarty->display('allpub.tpl');
	
?>