<?php
/*数据库类
*/
include_once 'adodb5/adodb.inc.php';
class ado_operator{
	/*	连接数据信息	*/
	private $Database = 'mysql'; 			//默认数据库驱动
	private $Host = 'localhost';			//服务器地址
	private $Dataname = 'db_shop';			//数据库名称
	private $User = 'root';					//用户名
	private $Pwd = 'root';					//密码
	/*	操作数据库	*/
	private $conn = '';						//连接数据库
	private $rst = '';						//查询结果集
	private $error = '';					//错误信息
	private $get_rows = 0;					//结果集行数
	private $get_fields = 0;				//结果字段数
	/*  构造函数  */
	function __construct(){
		$this->connection();
	}
	/*  析构函数  */
	function __destruct(){
		
	}
	/*  连接数据库  */
	function connection($Host = '',$User = '',$Pwd = '',$Dataname = ''){
		if ('' == $Host){
			$Host = $this->Host;
		}
		if ('' == $Dataname){
			$Dataname = $this->Dataname;
		}
		if ('' == $User){
			$User = $this->User;
		}
		if ('' == $Pwd){
			$Pwd = $this->Pwd;
		}
		$this->conn = @ADONewConnection($this->Database);
		@$this->conn->PConnect($Host,$User,$Pwd,$Dataname);
		$this->conn->execute('set names gb2312');
		return $this->conn;
	}
	/*  查询数据  */
	function query($sql){
		if('' == $this->conn){
			$this->connection();
		}
		$this->rst = $this->conn->execute($sql);
		if(false == $this->rst){
			$this->msg('查询语句错误!');
		}
		return $this->rst;
	}
	/*	返回结果集行数  */
	function get_rows(){
		$this->get_rows = $this->rst->RecordCount();
		return $this->get_rows;
	}
	/*	返回结果集字段数  */
	function get_fields(){
		$this->get_fields = $this->rst->FieldCount();
		return $this->get_fields;
	}
	/*	错误处理	*/
	function msg($err){
		$this->error = $this->conn->ErrorMsg();
		echo '<strong>数据库错误:'.$err.'。错误原因：'.$this->error.'</strong>';
	}
	
}
/*
$con = new ado_operator();
$sql = 'select * from tb_users where id=2';
$con->query($sql);
*/
$link = new ado_operator();
?>
