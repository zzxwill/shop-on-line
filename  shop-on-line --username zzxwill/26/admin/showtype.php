<?php
	include_once 'config.php';
	include_once 'conn/conn.php';
	$bigsql = 'select id,name from tb_class where supid = 0';
	$smallsql = 'select * from tb_class where supid != 0';
	$bigclass = $conn->execute($bigsql);
	$smallclass = $conn->execute($smallsql);
	$bigarray = $bigclass->GetAssoc();
	$smallarray = $smallclass->GetAssoc();
	$smarty->assign('bigarray',$bigarray);
	$smarty->assign('smallarray',$smallarray);
	$smarty->display('showtype.tpl');
?>