<?php /* Smarty version 2.6.19, created on 2011-05-29 03:53:06
         compiled from addpublic.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/public.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="addpub" name="addpub" method="post" action="#">
  <tr>
    <td colspan="2" height="25" align="center" valign="middle" class="first">添加公告</td>  
  </tr>
  <tr>
    <td width="30%" height="25" align="right" valign="middle" class="left">公告标题：</td>
    <td align="left" valign="top" class="right" ><input id="title" name="title" type="text" class="langtxt" style="text-indent:5px;"/></td>
  </tr>
  <tr>
    <td width="30%" height="25" align="right" valign="middle" class="left">公告内容：</td>
    <td align="left" valign="top" class="right">&nbsp;<textarea id="content" name="content" class="areatxt" cols="35" rows="10"></textarea></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="add" name="add" type="button" class="btn" value="添加公告" onclick="return chkaddpub(addpub);"/></td>
  </tr>
</form>
</table>