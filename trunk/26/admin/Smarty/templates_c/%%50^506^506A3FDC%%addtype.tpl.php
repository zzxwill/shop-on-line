<?php /* Smarty version 2.6.19, created on 2009-05-05 07:54:41
         compiled from addtype.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/chktype.js"></script>
<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
<form id="addtype" name="addtype" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">�����Ʒ���</td>
	</tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">������ƣ�</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<input name="names" type="text" id="names" class="txt" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
      </td>
    </tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">���ȼ���</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<select name="grade" OnChange="changetype(addtype)" class="txt">
                <option value="1">һ�����</option>
                <option value="2" selected>�������</option>
            </select>
      </td>
    </tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">�������ƣ�</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['op']; ?>
</td>
    </tr>
    <tr>
        <td height="30" colspan="2" align="center" valign="middle">
        	<input id="add" name="id" type="button" value="���" class="btn" onClick="chktype(addtype)">
        </td>
    </tr>
</form>
</table>