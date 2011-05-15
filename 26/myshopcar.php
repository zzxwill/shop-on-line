<?php
session_start();
	include_once 'conn/conn.php';
	include_once 'config.php';
	$sql1 = "select id,shopping from tb_user where id =".$_SESSION['id'];
	$rst = $conn->execute($sql1); 
	if($rst->fields['shopping'] == ''){
		
		echo "<p>";
		echo '购物车中暂时没有商品!';
		exit();
	}
	$tmparr = $rst->GetAssoc();
	$commarr = array();
	foreach($tmparr as  $value){
		$tmpnum = explode('@',$value);
		
		$shopnum = count($tmpnum);						//商品类数
	
		$sum = 0;
		foreach($tmpnum as $key => $vl){ 
		
			$s_commo = explode(',',$vl);
			$sql2 = "select id,name,m_price,fold,v_price from tb_commo";
			$commsql = $sql2." where id = ".$s_commo[0];
		//	echo $commsql;
			$commrst = $conn->execute($commsql);
			$arr = $commrst->GetArray();
			$arr[0]['num'] = $s_commo[1];
			$arr[0]['total'] = $s_commo[1]*$arr[0]['v_price'];
			$sum += $arr[0]['total'];
			$commarr[$key] = $arr[0];
		}
	}
	$smarty->assign('shoparr',$shopnum);
	$smarty->assign('commarr',$commarr);
	$smarty->assign('sum',$sum);
	$smarty->assign('title','我的购物车');
	$smarty->display('myshopcar.tpl');
?>