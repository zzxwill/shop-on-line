<?php
	include_once "conn/conn.php";
	include_once "config.php";
	$sql = "select id,title from tb_public order by id";
	$num = 4;
	$rst = $conn->SelectLimit($sql,$num);
	$arr = $rst->GetAssoc();
	$smarty->assign('arr',$arr);
	$smarty->display('public.tpl');
?>