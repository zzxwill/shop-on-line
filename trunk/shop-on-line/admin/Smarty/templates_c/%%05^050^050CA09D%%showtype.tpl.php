<?php /* Smarty version 2.6.19, created on 2008-04-19 04:59:35
         compiled from showtype.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/changetype.js"></script>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modi" name="modi" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">查看商品类别</td>
	</tr>
<?php $_from = $this->_tpl_vars['bigarray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ftype'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ftype']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['fkey'] => $this->_tpl_vars['fitem']):
        $this->_foreach['ftype']['iteration']++;
?>
    <tr>
      <td height="25" align="center" valign="middle" class="left"><font size="2" color="#FF0000">父类：</font><input id="moditype<?php echo $this->_tpl_vars['fkey']; ?>
" name="moditype<?php echo $this->_tpl_vars['fkey']; ?>
" type="text" class="shorttxt" value="<?php echo $this->_tpl_vars['fitem']; ?>
" style="border-color:#996633;" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="javascript:modifytype(<?php echo $this->_tpl_vars['fkey']; ?>
);" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:delbigtype(<?php echo $this->_tpl_vars['fkey']; ?>
);" style="border-color:#FFFFFF;"></td>
    </tr>
    <?php $_from = $this->_tpl_vars['smallarray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['stype'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['stype']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['sitem']):
        $this->_foreach['stype']['iteration']++;
?>
    <?php if ($this->_tpl_vars['sitem'][1] == $this->_tpl_vars['fkey']): ?>
    <tr>
      <td height="25" align="center" valign="middle" class="left" style="text-indent: 50px;" ><font size="2" color="#996600">子类：</font><input id="modtype<?php echo $this->_tpl_vars['skey']; ?>
" name="moditype<?php echo $this->_tpl_vars['skey']; ?>
" type="text" class="shorttxt" value="<?php echo $this->_tpl_vars['sitem'][0]; ?>
" style="border-color:#996633;" /></td>
        <td height="25" align="center" valign="middle" class="right"><input id="modidfy" name="modify" type="button" value="修改" class="btn" onclick="javascript:modifytype(<?php echo $this->_tpl_vars['skey']; ?>
)" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:delsmalltype(<?php echo $this->_tpl_vars['skey']; ?>
)" style="border-color:#FFFFFF;"></td>
    </tr>
  	<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
</form>
</table>