<?php /* Smarty version 2.6.19, created on 2008-04-19 05:29:21
         compiled from showlinks.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/links.js"></script>
<table width="" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="showlink" name="showlink" method="post" action="#">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">查看链接</td>
  </tr>
  <tr>
    <td width="30" height="25" align="center" valign="middle" class="left">删除</td>
    <td width="150" align="center" valign="middle" class="center">链接网站</td>
    <td width="250" align="center" valign="middle" class="center">URL</td>
    <td width="40" align="center" valign="middle" class="center">修改</td>
  </tr>
  <?php $_from = $this->_tpl_vars['linkarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
    <td align="center" valign="middle" class="center"><input id="wnames" name="wnames<?php echo $this->_tpl_vars['item']['id']; ?>
" type="text" class="txt" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td>
    <td align="center" valign="middle" class="center"><input id="wurl" name="wurl<?php echo $this->_tpl_vars['item']['id']; ?>
" type="text" class="langtxt" value="<?php echo $this->_tpl_vars['item']['url']; ?>
" /></td>
    <td align="center" valign="middle" class="center"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="return modlink(<?php echo $this->_tpl_vars['item']['id']; ?>
)" style="border-color:#FFFFFF;"/></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td height="25" colspan="4">
    	<a href="#" onclick="return alldel(showlink)">全选</a> <a href="#" onclick="return overdel(showlink);">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onclick="return dellinks(showlink);">
      &nbsp;&nbsp;
    </td>
  </tr>
</form>
</table>