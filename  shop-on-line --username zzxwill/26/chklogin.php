<?php
	session_start();
	/**
	  *  1��ʾ��ӳɹ�
	  *  2��ʾ�û�û�е�¼
	  *  3��ʾ��Ʒ����ӹ�
	  *  4��ʾ���ʱ���ִ���
	  *  5��ʾû����Ʒ���
	  */
	include_once 'conn/conn.php';
	$reback = '0';
	if(empty($_SESSION['member'])){
		$reback = '2';
	}else{
		$key = $_GET['key'];
		if($key == ''){
			$reback = '5';
		}else{	
			$id = (int)$_SESSION['id'];
			$boo = false;
			$addshop = array();
			$sql = "select id,shopping from tb_user where id = ".$id;
			$rst = $conn->execute($sql);
			$shopcont = $rst->fields['shopping'];
			if(!empty($shopcont)){
				$arr = explode('@',$shopcont);
				foreach($arr as $value){
					$arrtmp = explode(',',$value);			
					if($key == $arrtmp[0]){
						$reback = '3';
						$boo = true;
						break;
					}
				}
				if($boo == false){
					$shopcont .= '@'.$key.',1'; 
					$addshop['shopping'] = $shopcont;
					$updateSQL = $conn->GetUpdateSQL($rst,$addshop);
					if(false == $conn->execute($updateSQL)){
						$reback = '4';
					}else{
						$reback = '1';
					}
				}
			}else{
				$tmparr = $key.",1";
				$addshop['shopping'] = $tmparr;
				$updateSQL = $conn->GetUpdateSQL($rst,$addshop);
				if(false == $conn->execute($updateSQL)){
					$reback = '4';
				}else{
					$reback = '1';
				}
			}
		}
	}
	echo $reback;
?>