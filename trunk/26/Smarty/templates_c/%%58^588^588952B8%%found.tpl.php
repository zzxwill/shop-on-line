<?php /* Smarty version 2.6.19, created on 2008-04-24 07:32:51
         compiled from found.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/found.js"></script>
<div id="first">
<table width="200" border="0" cellspacing="0" cellpadding="0">
<form id="foundname" name="found" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first"> �һ�����</td>
  </tr>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">��Ա���ƣ�</td>
    <td width="125" align="left" valign="middle" class="right"><input id="user" name="user" type="text" class="txt"></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><input id="next1" name="next1" type="button" class="btn" value="��һ��" onClick="return chkname(foundname)"/></td>
    </tr>
</form>
</table>
</div>
<div id="second" style="display:none;">
<table width="200" border="0" cellspacing="0" cellpadding="0">
<form id="foundanswer" name="found" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first"> �һ�����</td>
  </tr>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">�ܱ����⣺</td>
    <td width="125" align="left" valign="middle" class="right"><div id="question"></div></td>
  </tr>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">�ܱ��𰸣�</td>
    <td width="125" align="left" valign="middle" class="right"><input id="answer" name="answer" type="text" class="txt" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><input id="next2" name="next2" type="button" class="btn" value="��һ��" onClick="return chkanswer(foundanswer)"></td>
    </tr>
</form>
</table>
</div>

<div id='third' style="display:none;">
<table width="200" border="0" cellspacing="0" cellpadding="0">
<form id="modifypwd" name="found" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first"> ��������</td>
  </tr>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">�������룺</td>
    <td width="125" align="left" valign="middle" class="right"><input id="pwd1" name="pwd1" type="password" class="txt"></td>
  </tr>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">ȷ�����룺</td>
    <td width="125" align="left" valign="middle" class="right"><input id="pwd2" name="pwd2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><input id="next2" name="next2" type="button" class="btn" value="���" onClick="return chkpwd(modifypwd)"></td>
    </tr>
</form>
</table>
</div>