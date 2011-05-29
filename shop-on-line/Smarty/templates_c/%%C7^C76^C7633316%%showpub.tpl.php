<?php /* Smarty version 2.6.19, created on 2011-05-25 14:39:33
         compiled from showpub.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<table width="400" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td colspan="2" height="25" align="center" valign="middle" class="first">公告信息</td>
</tr>
  <tr>
    <td width="70%" height="25" align="center" valign="middle" class="left">标题：<?php echo $this->_tpl_vars['arr']['title']; ?>
</td>
    <td width="30%" height="25" align="center" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['addtime']; ?>
</td>
  </tr>
  <tr>
    <td height="100" colspan="2" align="left" valign="top" class="all" style=" text-indent: 10px;"><br>&nbsp;<?php echo $this->_tpl_vars['arr']['content']; ?>
</td>
  </tr>
</table>