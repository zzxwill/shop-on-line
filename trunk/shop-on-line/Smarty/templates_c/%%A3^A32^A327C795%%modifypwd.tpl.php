<?php /* Smarty version 2.6.19, created on 2008-04-24 11:39:27
         compiled from modifypwd.tpl */ ?>
<link rel="stylesheet" href="css/member.css" />
<script language="javascript" src="js/member.js"></script>
<p align="left"><?php echo $_SESSION['member']; ?>
&gt;&gt;&gt;<a href='?page=hyzx' id="mem">�鿴��Ϣ</a>&gt;&gt;&gt;<a href='?page=hyzx&action=modify' id="mem">�޸�����</a></p>
<table  id="member" width="300" border="0" cellpadding="0" cellspacing="0">
<form id="member" name="member" method="post" action="modify_pwd_chk.php" onsubmit="return pwd(member)">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0">�޸�����</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">ԭ���룺</td>
    <td height="25" align="left" valign="middle" id="right"><input id="old" name="old" type="password" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">�����룺</td>
    <td height="25" align="left" valign="middle" id="right"><input id="new1" name="new1" type="password" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">ȷ�����룺</td>
    <td height="25" align="left" valign="middle" id="right"><input id="new2" name="new2" type="password" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="enter" name="enter" type="submit" value="�޸�" /></td>
  </tr>
</form>
</table>