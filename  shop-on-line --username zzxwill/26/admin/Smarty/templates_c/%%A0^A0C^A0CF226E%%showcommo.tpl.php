<?php /* Smarty version 2.6.19, created on 2008-04-22 12:03:07
         compiled from showcommo.tpl */ ?>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/alldelete.js"></script>
<link rel="stylesheet" href="css/table.css" />
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="delcomm" name="delcomm" method="post" action="#">
  <tr>
    <td height="25" colspan="10" align="center" valign="middle" class="first">商品查看</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">名称</td>
    <td height="25" align="center" valign="middle" class="center">品牌</td>
    <td height="25" align="center" valign="middle" class="center">产地</td>
    <td height="25" align="center" valign="middle" class="center">型号</td>
    <td height="25" align="center" valign="middle" class="center">库存</td>
    <td height="25" align="center" valign="middle" class="center">销量</td>
    <td height="25" align="center" valign="middle" class="center">加入时间</td>
    <td height="25" align="center" valign="middle" class="right">更改</td>
  </tr>
<?php $_from = $this->_tpl_vars['commoarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['key']; ?>
"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['key']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item'][0]; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item'][1]; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item'][2]; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item'][3]; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item'][4]; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item'][5]; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item'][6]; ?>
</td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="modcomm" name="mod<?php echo $this->_tpl_vars['key']; ?>
" type='button' value="更改" class="btn" style=" border-color: #FFFFFF; cursor: ahnd;" onclick="modi(<?php echo $this->_tpl_vars['key']; ?>
)"/></td>
  </tr>
<?php endforeach; endif; unset($_from); ?> 
  <tr>
    <td colspan="10"><a href="#" onclick="return alldel(delcomm)">全选</a> <a href="#" onclick="return overdel(delcomm);">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(delcomm);'>
      &nbsp;&nbsp;</td>
    <?php echo '<?php'; ?>
 echo $sqlstr1 <?php echo '?>'; ?>
 </tr>
</form>
</table>