<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = "select * from tb_commo where isnom = 1 order by isnom,id desc";
	$num = 4;
	$rst = $conn->SelectLimit($sql,$num);
	$nomarr = $rst->GetArray();
	$smarty->assign('nomarr',$nomarr);
	$smarty->assign('title','�Ƽ��鼮');
	$smarty->assign('total',$rst->RecordCount());
	$smarty->display('allnom.tpl');
?>