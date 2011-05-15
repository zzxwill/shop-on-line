<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = "select * from tb_commo order by sell,id desc";
	$num = 4;
	$rst = $conn->SelectLimit($sql,$num);
	$hotarr = $rst->GetArray();
	$smarty->assign('hotarr',$hotarr);
	$smarty->assign('title','热门商品');
	$smarty->assign('total',$rst->RecordCount());
	$smarty->display('allhot.tpl');
?>