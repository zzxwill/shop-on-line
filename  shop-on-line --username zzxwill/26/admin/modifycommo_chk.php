<?php
include_once 'func/upfile.php';
include_once 'conn/conn.php';
$sql = "select * from tb_commo where id = ".$_POST['id'];
$rst = $conn->execute($sql);
$mod = array();

$fileinfo = $_FILES['pics'];				//��ƷͼƬ
if($_FILES['pics']['name'] != ""){
	/*  ��ȡͼƬ·��  */
	$reback = uppic($fileinfo);
	if($reback === false){
		echo '�ϴ�ʧ��';
	}else{
		$mod['pics'] = $reback;
	}
}
/*****************/
$mod['info'] = $_POST['info'];									//��Ʒ����
$mod['area'] = $_POST['area'];									//��Ʒ����
$mod['model'] = $_POST['model'];								//��Ʒ�ͺ�
$mod['class'] = $_POST['stype'];								//��Ʒ���
$mod['brand'] = $_POST['brand'];								//��ƷƷ��
$mod['stocks'] = $_POST['stocks'];								//��Ʒ����
$mod['m_price'] = $_POST['m_price'];							//��Ʒ�г��۸�
$mod['v_price'] = (float)$_POST['m_price'] * (float)$_POST['fold'] / 10;
$mod['fold'] = $_POST['fold'];									//������
$mod['isnew'] = $_POST['isnew'];								//�Ƿ���Ʒ
$mod['isnom'] = $_POST['isnom'];								//�Ƿ��Ƽ�
$updatesql = $conn->GetUpdateSQL($rst,$mod);
if(!$conn->execute($updatesql)){
	echo $sql.'<p>';
	echo $updatesql.'<p>';
	echo $conn->errormsg();
}else{
	echo  "<script>top.opener.location.reload();alert('�޸ĳɹ�');window.close();</script>";
}
?>