<?php /* Smarty version 2.6.19, created on 2008-04-24 11:39:30
         compiled from membershow.tpl */ ?>
<link rel="stylesheet" href="css/member.css" />
<script language="javascript" src="js/member.js"></script>
<p align="left"><?php echo $_SESSION['member']; ?>
&gt;&gt;&gt;<a href='?page=hyzx' id="mem">�鿴��Ϣ</a>&gt;&gt;&gt;<a href='?page=hyzx&action=modify' id="mem">�޸�����</a></p>
<table id='member' width="500" border="0" cellpadding="0" cellspacing="0">
<form id="member" name="member" method="post" action="modify_info_chk.php" onsubmit="return mem(member)" >
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0"><?php echo $this->_tpl_vars['arr']['name']; ?>
��Ϣ�����ɸ�����Ϣ��</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> ��Ա��ţ�</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['id']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> ��Ա���ƣ�</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['name']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> �ܱ����⣺</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['question']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">�ܱ��𰸣�</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['answer']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> ע��ʱ�䣺</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['addtime']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">�����ܶ</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['consume']; ?>
</td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0"><?php echo $this->_tpl_vars['arr']['name']; ?>
��Ϣ���ɸ�����Ϣ��</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">��ʵ������</td>
    <td height="25" align="left" valign="middle" id="right"><input id="realname" name="realname" type="text" value="<?php echo $this->_tpl_vars['arr']['realname']; ?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">���֤�ţ�</td>
    <td height="25" align="left" valign="middle" id="right"><input id="card" name="card" type="text" value="<?php echo $this->_tpl_vars['arr']['card']; ?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">�ƶ��绰��</td>
    <td height="25" align="left" valign="middle" id="right"><input id="tel" name="tel" type="text" value="<?php echo $this->_tpl_vars['arr']['tel']; ?>
">&nbsp;<font color="red">*</font> </td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">�̶��绰��</td>
    <td height="25" align="left" valign="middle" id="right"><input id="phone" name="phone" type="text" value="<?php echo $this->_tpl_vars['arr']['phone']; ?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">Email��</td>
    <td height="25" align="left" valign="middle" id="right"><input id="email" name="email" type="text" value="<?php echo $this->_tpl_vars['arr']['Email']; ?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">QQ�ţ�</td>
    <td height="25" align="left" valign="middle" id="right"><input id="qq" name="qq" type="text" value="<?php echo $this->_tpl_vars['arr']['QQ']; ?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">�ʱࣺ</td>
    <td height="25" align="left" valign="middle" id="right"><input id="code" name="code" type="text" value="<?php echo $this->_tpl_vars['arr']['code']; ?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">��ַ��</td>
    <td height="25" align="left" valign="middle" id="right"><input id="address" name="address" type="text" value="<?php echo $this->_tpl_vars['arr']['address']; ?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input name="enter" type="submit" id="enter" value="�޸�" />&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" id="reset" value="����" /></td>
  </tr>
</form>
</table>