<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = "select * from tb_commo where isnew = 1 order by isnew,id desc";
	$num = 4;
	$rst = $conn->SelectLimit($sql,$num);
	$newarr = $rst->GetArray();
	$smarty->assign('newarr',$newarr);
	$smarty->assign('title','最新商品');
	$smarty->assign('total',$rst->RecordCount());
	$smarty->display('allnew.tpl');
	
?>