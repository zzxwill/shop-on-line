<?
	session_start();
	if(empty(isset($_SESSION['admin']))){
		echo "<script>alert('��û�е�¼��ʱ');history.back;</script>";
	}
	$ref = $_SERVER['HTTP_REFERER'];
	if($ref == ''){
		echo '�Բ��𣬲�����ӵ�ַ������!';
		exit();
	}else{
		$url = parse_url($ref);
		if($url[host] != '127.0.0.1' && $url[host] != 'localhost'){
			echo '���������';
			exit();
		}
	}

	
	
?>