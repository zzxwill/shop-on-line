<?php
	session_start();
	session_destroy();
	echo '<script>alert(\'�û��Ѱ�ȫ�˳�!\');location=(\'index.php\');</script>';
?>