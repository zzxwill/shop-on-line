<?php
	/*ֻ������������ҳ�����ֲ�ʽ���ݿ����*/
	//include_once 'conn/conn.php';
	include_once 'conn/conn4DistibutiveDB.php';
	
	$name = $_POST['names'];
	$url = $_POST['url'];
	$sql = "select * from tb_links where id = -1";
	$rst = $conn->execute($sql); 
	$addarr = array();
	$addarr['name'] = $name;
	$addarr['url'] = $url;
	//$insertSQL = $conn->GetInsertSQL($rst,$addarr);
	$insertSQL = "insert into tb_links(name,url)values('$name','$url')";
	if(false == $conn->execute($insertSQL)){
		echo $rst;
		echo $insertSQL;
		echo $conn->errormsg();
	}else{
		echo "<script>alert('��ӳɹ�');location=('showlinks.php');</script>";
	}
?>
