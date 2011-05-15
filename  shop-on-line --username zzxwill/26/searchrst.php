<?php
	include_once 'conn/conn.php';
	include_once 'config.php';
	$act = $_GET['act'];
	
	if($act == "simple"){
		$cont = $_GET['cont'];
		if(!empty($_GET['cont'])){
			$sql = "select * from tb_commo where name like '%".$cont."%'";
		}
	}else{
		$name = $_GET['name'];
		$model = $_GET['model'];
		$class = $_GET['stype'];
		$sql = "select * from tb_commo where name like '%".$name."%' and model like '%".$model."%' and class like '%".$class."%' ";
	}
		$rst = $conn->execute($sql);
		$searcharr = $rst->GetArray();
		$smarty->assign('searcharr',$searcharr);
		$smarty->assign('title','²éÑ¯½á¹û');
		$smarty->assign('total',$rst->RecordCount());
		$smarty->display('searchrst.tpl');
?>