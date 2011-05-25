<?php
	include_once 'config.php';
	$fst = $_GET['fst'];
	$snd = $_GET['snd'];
	$uid = $_GET['uid'];
	$smarty->assign('title','ЪевјЬЈ');
	$smarty->assign('fst',$fst);
	$smarty->assign('snd',$snd);
	$smarty->assign('uid',$uid);
	$smarty->display('settle.tpl');
?>