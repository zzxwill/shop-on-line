<?
	session_start();
	if(!isset($_SESSION['id']) or !isset($_SESSION['member'])){
		echo "<script>alert('��û�е�¼��ʱ');history.back;</script>";
	}
?>