<?php
	include_once 'config.php';
	$smarty->assign('title','��Ʒ���');
	$smarty->assign('date',date("Y-m-d"));
	$smarty->display('addcommo.tpl');
?>