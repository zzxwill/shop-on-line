<?php
	include_once 'config.php';
	include_once 'conn/conn.php';
	$id = (int)$_GET['key'];
	$sql = "select id,name,pics,area,model,class,brand,stocks,m_price,fold,v_price,isnew,isnom,addtime,info from tb_commo where id = ".$id;
	if(false == $rst = $conn->execute($sql)){
		echo "<script>alert('��ѯ����!');window.close();</script>";
	}else if ($rst->recordCount() == 0){
		echo "<script>top.opener.location.reload();alert('��ǰ��Ʒ������');window.close();</script>";
	}else{
		$rstarr = $rst->GetAssoc();
	}
	$smarty->assign('mcarr',$rstarr[$id]);	
	$smarty->assign('id',$id);
	$smarty->assign('title','�޸���Ʒ');
	$smarty->display('modifycommo.tpl');
?>