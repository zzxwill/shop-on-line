<?php
	/*垂直分片*/
	/*数据库节点10.5.110.251的表tb_public,只有id,title,content字段
	 *数据库节点10.5.110.236的表tb_public,只有id,addtime字段
	 * */

	/*数据库节点10.5.110.251连接*/	
	include_once 'conn/conn4251.php';
	/*数据库节点10.5.110.236连接*/
	include_once 'conn/conn4236.php';
	/*获取页面输入的公告名称title，公告内容content,另外，取数据库的时间*/
	$title = $_GET['title'];
	$content = $_GET['content'];
	$addtime = $conn->DBDate(time());
	$reback = '0';
	
	
	/*数据库节点10.5.110.251 插入id 标题 内容 */
	$insertSQL = "insert into tb_public(title,content)values('$title','$content')";
	
	if(false == $conn->execute($insertSQL)){
		$reback = '2';
	}else{
		/*去除刚刚插入的数据的id*/
		$id = $conn->insert_id();

		/*数据库节点10.5.110.251 插入id 数据库时间 */
		/*日期这个地方不能加单引号，$addtime*/
		$insertSQL236 = "insert into tb_public(id,addtime)values($id,$addtime)";
		if(true == $conn236->execute($insertSQL236)){
			$reback = '1';
		}	
	}
	echo $reback;
?>
