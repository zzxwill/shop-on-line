<?php
include_once 'func/upfile.php';
include_once 'conn/conn.php';
$sql = "select * from tb_commo where id = -1";
$rst = $conn->execute($sql);
$add = array();

$add['name'] = $_POST['name'];				//��Ʒ����

$fileinfo = $_FILES['pics'];				//��ƷͼƬ
/*  ��ȡͼƬ·��  */
$reback = uppic($fileinfo);
if($reback === false){
	echo '�ϴ�ʧ�ܣ����ʹ��󣬻򳬳���С';
	exit();
}else{
	$add['pics'] = $reback;
}
/*****************/
$add['info'] = $_POST['info'];									//��Ʒ����
$add['addtime'] = $conn->DBDate(time());						//���ʱ��
$add['area'] = $_POST['area'];									//��Ʒ����
$add['model'] = $_POST['model'];								//��Ʒ�ͺ�
$add['class'] = $_POST['stype'];								//��Ʒ���
$add['brand'] = $_POST['brand'];								//��ƷƷ��
$add['stocks'] = $_POST['stocks'];								//��Ʒ����
$add['m_price'] = (float)$_POST['m_price'];						//��Ʒ�г��۸�
$add['v_price'] = (float)$_POST['m_price'] * (float)$_POST['fold'] / 10;
$add['fold'] = (float)$_POST['fold'];							//������
$add['isnew'] = $_POST['isnew'];								//�Ƿ���Ʒ
$add['isnom'] = $_POST['isnom'];								//�Ƿ��Ƽ�



$insesql = $conn->GetInsertSQL($rst,$add);
if(!$conn->execute($insesql)){
	echo $insesql.'<p>';
	echo $conn->errormsg();
}else{
	echo '<script>alert(\'��ӳɹ�\');location=(\'addcommo.php\');</script>';
}
?>