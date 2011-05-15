<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$newsql = "select id,name,pics,m_price,v_price from tb_commo where isnew = 1 order by id desc";
	$hotsql = "select id,name,pics,m_price,v_price from tb_commo order by sell,id desc";
	$nm = 4;
	$newrst = $conn->SelectLimit($newsql,$nm);
	$hotrst = $conn->SelectLimit($hotsql,$nm);
	
	$newarr = $newrst->GetArray();
	$hotarr = $hotrst->GetArray();
	
	$smarty->assign('newarr',$newarr);
	$smarty->assign('hotarr',$hotarr);
	$smarty->display('newhot.tpl');
?>