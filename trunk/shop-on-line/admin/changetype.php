<?php
	/**********************************
	$reback˵����
	0��δ֪����
	1�������ظ�
	2������ʧ��
	3�������ɹ�
	4���ж�������
	***********************************/
	include_once 'conn/conn.php';
	$action = $_GET['action'];
	$reback = '';
	if($action == 'm'){
		$names = $_GET['names'];
		$key = $_GET['key'];
		$sql = "select * from tb_class where name = '$names'";
		$rst = $conn->execute($sql);
		if($rst->RecordCount() == 1){
			$reback = '1';
		}else{
			$updatesql = "select * from tb_class where id = ".$key;
			$updaterst = $conn->execute($updatesql);
			$upd = array();
			$upd["id"] = $key;
			$upd["name"] = $names;
			$update = $conn->GetUpdateSQL($updaterst,$upd);
			if($conn->execute($update) == false){
				$reback = '2';
			}else{
				$reback = '3';
			}
		}	
	}else if($action == 'sd'){
		$key = $_GET['key'];
		$delsql = "delete from tb_class where id = ".$key;
		if($conn->execute($delsql) == false){
			$reback = '2';
		}else{
			$reback = '3';
		}
	}else if($action == 'bd'){
		$key = $_GET['key'];
		$sql = "select * from tb_class where supid = ".$key;
		$rst = $conn->execute($sql);
		if($rst->RecordCount() >= 1){
			$reback = '4';
		}else{
			$delsql = "delete from tb_class where id = ".$key;
			if($conn->execute($delsql) == false){
				$reback = '2';
			}else{
				$reback = '3';
			}
		}
	}else{
		$reback = '0';
	}
	echo $reback;
?>