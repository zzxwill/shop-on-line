<?php /* Smarty version 2.6.19, created on 2008-04-18 11:08:00
         compiled from updateadmin.tpl */ ?>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modi" name="modi" method="post" action="#">
	<tr>
	  <td height="25" colspan="2" align="center" valign="middle" class="first">管理员管理</td>
	    <td height="25" align="center" valign="middle" class="first"><input id="addadmin" name="addadmin" type="button" value="添加" class="btn" onclick="showadd()"/></td>
	</tr>
<?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <tr>
      <td height="25" align="center" valign="middle" class="left" width="25"><?php echo $this->_tpl_vars['key']; ?>
</td>
      <td width="150" align="center" valign="middle" class="center"><div id="admin<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['item'][0]; ?>
</div></td>
      <td width="100" align="center" valign="middle" class="right"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="javascript:showdiv();" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:deladmin(<?php echo $this->_tpl_vars['key']; ?>
);" style="border-color:#FFFFFF;"></td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
</form>
</table>