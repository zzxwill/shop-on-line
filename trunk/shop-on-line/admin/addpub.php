<?php
	/*��ֱ��Ƭ*/
	/*���ݿ�ڵ�10.5.110.251�ı�tb_public,ֻ��id,title,content�ֶ�
	 *���ݿ�ڵ�10.5.110.236�ı�tb_public,ֻ��id,addtime�ֶ�
	 * */

	/*���ݿ�ڵ�10.5.110.251����*/	
	include_once 'conn/conn4251.php';
	/*���ݿ�ڵ�10.5.110.236����*/
	include_once 'conn/conn4236.php';
	/*��ȡҳ������Ĺ�������title����������content,���⣬ȡ���ݿ��ʱ��*/
	$title = $_GET['title'];
	$content = $_GET['content'];
	$addtime = $conn->DBDate(time());
	$reback = '0';
	
	
	/*���ݿ�ڵ�10.5.110.251 ����id ���� ���� */
	$insertSQL = "insert into tb_public(title,content)values('$title','$content')";
	
	if(false == $conn->execute($insertSQL)){
		$reback = '2';
	}else{
		/*ȥ���ող�������ݵ�id*/
		$id = $conn->insert_id();

		/*���ݿ�ڵ�10.5.110.251 ����id ���ݿ�ʱ�� */
		/*��������ط����ܼӵ����ţ�$addtime*/
		$insertSQL236 = "insert into tb_public(id,addtime)values($id,$addtime)";
		if(true == $conn236->execute($insertSQL236)){
			$reback = '1';
		}	
	}
	echo $reback;
?>
