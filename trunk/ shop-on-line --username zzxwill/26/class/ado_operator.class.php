<?php
/*���ݿ���
*/
include_once 'adodb5/adodb.inc.php';
class ado_operator{
	/*	����������Ϣ	*/
	private $Database = 'mysql'; 			//Ĭ�����ݿ�����
	private $Host = 'localhost';			//��������ַ
	private $Dataname = 'db_shop';			//���ݿ�����
	private $User = 'root';					//�û���
	private $Pwd = 'root';					//����
	/*	�������ݿ�	*/
	private $conn = '';						//�������ݿ�
	private $rst = '';						//��ѯ�����
	private $error = '';					//������Ϣ
	private $get_rows = 0;					//���������
	private $get_fields = 0;				//����ֶ���
	/*  ���캯��  */
	function __construct(){
		$this->connection();
	}
	/*  ��������  */
	function __destruct(){
		
	}
	/*  �������ݿ�  */
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
	/*  ��ѯ����  */
	function query($sql){
		if('' == $this->conn){
			$this->connection();
		}
		$this->rst = $this->conn->execute($sql);
		if(false == $this->rst){
			$this->msg('��ѯ������!');
		}
		return $this->rst;
	}
	/*	���ؽ��������  */
	function get_rows(){
		$this->get_rows = $this->rst->RecordCount();
		return $this->get_rows;
	}
	/*	���ؽ�����ֶ���  */
	function get_fields(){
		$this->get_fields = $this->rst->FieldCount();
		return $this->get_fields;
	}
	/*	������	*/
	function msg($err){
		$this->error = $this->conn->ErrorMsg();
		echo '<strong>���ݿ����:'.$err.'������ԭ��'.$this->error.'</strong>';
	}
	
}
/*
$con = new ado_operator();
$sql = 'select * from tb_users where id=2';
$con->query($sql);
*/
$link = new ado_operator();
?>
