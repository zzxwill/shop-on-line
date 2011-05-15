<?php /* Smarty version 2.6.19, created on 2008-04-27 05:35:39
         compiled from member.tpl */ ?>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/member.js"></script>
<link rel="stylesheet" href="css/table.css" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="showmem" name="showmem" method="post" action="#">
  <tr>
    <td height="25" colspan="5" align="center" valign="middle" class="first">会员管理</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">昵称</td>
    <td height="25" align="center" valign="middle" class="center">状态</td>
    <td height="25" align="center" valign="middle" class="right">查看信息</td>
  </tr>
<?php $_from = $this->_tpl_vars['memarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['key']; ?>
"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['key']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item']['name']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">
   <input id="free" name="free" type="button" class="btn" value = "<?php if ($this->_tpl_vars['item']['isfreeze'] == 0): ?>未冻结 <?php elseif ($this->_tpl_vars['item']['isfreeze'] == 1): ?>冻结<?php endif; ?>" style="border-color: #FFFFFF;" onClick="return changestate(<?php echo $this->_tpl_vars['key']; ?>
,<?php echo $this->_tpl_vars['item'][1]; ?>
)">
    </td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="show" name="show<?php echo $this->_tpl_vars['key']; ?>
" type='button' value="详细信息" class="btn" style=" border-color: #FFFFFF; cursor: hand;" onclick="showme(<?php echo $this->_tpl_vars['key']; ?>
)"/></td>
  </tr>
<?php endforeach; endif; unset($_from); ?> 
  <tr>
    <td colspan="5"><a href="#" onclick="return alldel(showmem)">全选</a> <a href="#" onclick="return overdel(showmem);">反选</a>&nbsp;&nbsp;
      <input type="button" value="删除选择" onClick = 'return deletemem(showmem);'>
      &nbsp;&nbsp;</td>
     </tr>
</form>
</table>