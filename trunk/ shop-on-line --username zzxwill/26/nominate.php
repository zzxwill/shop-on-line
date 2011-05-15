<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql = "select id,name,pics,m_price,v_price from tb_commo where isnom = 1 order by id desc";
	$num = 4;
	$rst = $conn->SelectLimit($sql,$num);
	$nomarr = $rst->GetArray();
	$smarty->assign('nomarr',$nomarr);
	$smarty->display('nominate.tpl');
?>