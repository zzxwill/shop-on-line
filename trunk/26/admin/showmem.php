<?php
	include_once 'config.php';
	include_once 'conn/conn.php';
	$id = (int)$_GET['key'];
	$sql = "select id,name,consume,realname,card,tel,phone,Email,QQ,code,address,isfreeze,addtime from tb_user where id = ".$id;
	if(false == $rst = $conn->execute($sql)){
		echo "<script>alert('��ѯ����!');window.close();</script>";
	}else if ($rst->recordCount() == 0){
		echo "<script>top.opener.location.reload();alert('��Ա������');window.close();</script>";
	}else{
		$rstarr = $rst->GetAssoc();
	}
	$smarty->assign('viparr',$rstarr[$id]);	
	$smarty->assign('id',$id);
	$smarty->assign('title','��Ա��Ϣ');
	$smarty->display('showmem.tpl');
?>