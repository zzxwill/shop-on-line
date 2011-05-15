<?php session_start(); ?>
<?php
	include_once 'config.php';
	include_once 'conn/conn.php';
	/*	查找用户资料	*/
	$sql = 'select * from tb_user where id = '.$_SESSION['id'];
	$rst = $conn->execute($sql);
	$arr = $rst->GetArray();
	if($_GET['action'] == 'modify'){
			$smarty->display('modifypwd.tpl');
	}else{
			$smarty->assign('arr',$arr[0]);
			$smarty->display('membershow.tpl');
	}
?>