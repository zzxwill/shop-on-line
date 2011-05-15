<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = 'select id,formid,vendee,taker,total,pay_method,del_method,state from tb_form';
	$rst = $conn->execute($sql);
	$formarr = $rst->GetArray();
	$smarty->assign('formarr',$formarr);
	$smarty->assign('title','²é¿´¶©µ¥');
	$smarty->display('showform.tpl');
?>