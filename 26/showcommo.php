<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = "select * from tb_commo where id = ".$_GET['id']." order by id desc";
	$rst = $conn->execute($sql);
	$arr = $rst->GetArray($rst);
	$smarty->assign('title','��Ʒ��Ϣ');
	$smarty->assign('arr',$arr[0]);
	$smarty->display('showcommo.tpl');
?>