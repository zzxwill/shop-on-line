<?php
	include_once 'conn/conn.php';
	$vendee = $_GET['vendee'];
	$formid = $_GET['formid'];
	$reback = '0';
	$tmp = "<table width='600' border='0' align='center' cellpadding='0' cellspacing='0'><tr><td height='25' colspan='7' align='center' valign='middle' class='first'>��ѯ���</td></tr><tr><td width='100' height='25' align='center' valign='middle' class='left'>������</td><td width='75' height='25' align='center' valign='middle' class='center'>������Ա</td><td width='75' height='25' align='center' valign='middle' class='center'>�ջ���</td><td width='100' height='25' align='center' valign='middle' class='center'>�������</td><td width='75' height='25' align='center' valign='middle' class='center'>���ʽ</td><td width='75' height='25' align='center' valign='middle' class='center'>�տʽ</td><td width='100' height='25' align='center' valign='middle' class='right'>����״̬</td></tr>";

	$sql = "select id,formid,vendee,taker,total,pay_method,del_method,state from tb_form where vendee = '".$vendee."' or formid = '".$formid."'";
	$rst = $conn->execute($sql);
	if($rst->RecordCount() == 0){
	}else{
		$arr = $rst->getArray();
		
		foreach($arr as $value){
			$tmp .= "<tr><td height=25 align=center valign=middle class=left>".$value['formid']."</td><td align=center valign=middle class=center>".$value['vendee']."</td><td align=center valign=middle class=center>".$value['taker']."</td><td  align=center valign=middle class=center>".$value['total']."</td><td  align=center valign=middle class=center>".$value['pay_method']."</td><td align=center valign=middle class=center>".$value['del_method']."</td><td align=center valign=middle class=right>";
			switch ($value['state']){
				case 0:
					$tmp .= 'δ������';
					break;
				case 1:
					$tmp .= '�Ѹ���';
					break;
				case 2:
					$tmp .= '�ѷ���';
					break;
				case 3:
					$tmp .= '���ջ�';
					break;
			}
			$tmp .= "</td></tr>";
		}
		$tmp .= "</table>";
		$reback = $tmp;
	}
	echo $reback;
?>
