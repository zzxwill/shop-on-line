<?php
	//session_start();
	include_once 'config.php';
	if(empty($_SESSION['member'])){
		$smarty->display('login.tpl');
	}else{
		$smarty->assign('member',$_SESSION['member']);
		$smarty->display('info.tpl');
	}
?>      