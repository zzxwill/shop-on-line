<?php /* Smarty version 2.6.19, created on 2008-04-19 07:36:45
         compiled from allpub.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/links.js"></script>
<table width="400" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" height="25" align="center" valign="middle" class="first">全部公告</td>
  </tr>
<?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td width="70%" height="25" align="right" valign="middle" class="left">标题：<a href="#" onclick="return showme(<?php echo $this->_tpl_vars['item']['id']; ?>
,'showpub.php')"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></td>
    <td width="30%" height="25" align="center" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['item']['addtime']; ?>
</td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
</table>