<?php
	session_start();
	/*	�������ݿ��ļ�	*/
	include_once 'conn/conn.php';
	/*  xmlhttp���ز���  */				
	$reback = '0';
	/*	���������ı����Զ��ŷָ�	*/
	$commid = explode(',',$_GET['rd']);
	/*  �������ݿ���������	*/
	$newshop = array();
	/*	���ҵ�ǰ�û�	*/
	$sql = "select id,shopping from tb_user where id = ".(int)$_SESSION['id'];
	$rst = $conn->execute($sql);
	/*	�����ǰ�û�Ϊ�գ��򷵻�2	*/
	if($rst->RecordCount() != 1){
		$reback = '2';
	}else{
		/*	��shopping�ֶ���@�ָ�	*/
		if(!empty($rst->fields['shopping'])){
			$tmpshop = array();
			$shopping = explode('@',$rst->fields['shopping']);
			foreach($shopping as $ky => $vl){
				$tmp = explode(',',$vl);
				$boo = false;
				foreach($commid as $value){
					if($value == $tmp[0]){
						$boo = true;
					}
				}
				if(!$boo){
					$tmpshop[$ky] = $vl;
				}
			}
			if(!empty($tmpshop)){
				$newshop['shopping'] = implode('@',$tmpshop);
			}else{
				$newshop['shopping'] = '';
			}
			$updateSQL = $conn->GetUpdateSQL($rst,$newshop);

			if(false == $conn->execute($updateSQL)){
				$reback = '3';
			}else{
				$reback = '1';
			}
		}
	}
	echo $reback;
?>