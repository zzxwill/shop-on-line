<?php /* Smarty version 2.6.19, created on 2009-05-05 05:53:23
         compiled from queryform.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel='stylesheet' href='css/table.css' />
<script language='javascript' src='js/createxmlhttp.js'></script>
<script language='javascript' src='js/queryform.js'></script>
<br />
<table width='540' border='0' align='center' cellpadding='0' cellspacing='0'>
<form id='queryform' name='queryform' method='post' action='#'>
  <tr>
    <td height='25' colspan='5' align='center' valign='middle' class='first'>��ѯ����</td>
  </tr>
  <tr>
    <td width='80' height='25' align='right' valign='middle' class='left'>��ѯ�û���</td>
    <td width='130' height='25' align='left' valign='middle' class='center'>&nbsp;<input id='name' name='name' type='text' class='txt' /></td>
    
    <td width='100' height='25' align='right' valign='middle' class='center'>��ѯ�����ţ�</td>
    <td width='130' height='25' align='left' valign='middle' class='right'>&nbsp;<input id='formid' name='formid' type='text' class='txt' /></td>
		<td width='100' align='center' valign='middle' class='center'><input id='enter' name='enter' type='button' value='��ѯ' class='btn' onclick='return queryrst(queryform)'/></td>
  </tr>
  <tr>
    <td height='25' colspan='5' align='center' valign='middle'>&nbsp;</td>
    </tr>
</form>
</table>
<div id='exam'></div>

