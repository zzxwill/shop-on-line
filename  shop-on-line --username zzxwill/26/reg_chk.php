<?php
	session_start();
	include_once 'conn/conn.php';
	$name = $_POST['name'];
	$password = md5($_POST['pwd1']);
	$question = $_POST['question'];	
	$answer = $_POST['answer'];
	$realname = $_POST['realname'];
	$card = $_POST['card'];
	$tel = $_POST['tel'];
	$phone = $_POST['phone'];
	$Email = $_POST['email'];
	$QQ = $_POST['qq'];
	$code = $_POST['code'];
	$address = $_POST['address'];
	$addtime = $conn->DBDate(time());
	$sql = "insert into tb_user(name,password,question,answer,realname,card,tel,phone,Email,QQ,code,address,addtime,isfreeze,shopping)" ;
	$sql .= " values ('$name', '$password', '$question', '$answer', '$realname', '$card', '$tel', '$phone', '$Email', '$QQ', '$code', '$address',$addtime,'0','')";
	$rst = $conn->execute($sql);

	if($rst == false){
		echo '<script>alert(\'���ʧ��\');history.back;</script>';
	}else{
		$_SESSION['member'] = $name;
		$_SESSION['id'] = $conn->Insert_ID();
		echo "<script>top.opener.location.reload();alert('ע��ɹ�');window.close();</script>";
	}
?>