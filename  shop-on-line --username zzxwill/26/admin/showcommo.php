<?php
	include_once 'config.php';
	include_once 'conn/conn.php';
	$sql = "select id,name,brand,area,model,stocks,sell,addtime from tb_commo order by sell";
	$rst = $conn->execute($sql);
	$arr = $rst->GetAssoc();
	$smarty->assign('commoarr',$arr);	
	$smarty->assign('title','�鿴��Ʒ');
	$smarty->display('showcommo.tpl');
?>