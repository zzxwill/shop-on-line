<?php /* Smarty version 2.6.19, created on 2008-04-22 12:03:07
         compiled from showcommo.tpl */ ?>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/alldelete.js"></script>
<link rel="stylesheet" href="css/table.css" />
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="delcomm" name="delcomm" method="post" action="#">
  <tr>
    <td height="25" colspan="10" align="center" valign="middle" class="first">��Ʒ�鿴</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">����</td>
    <td height="25" align="center" valign="middle" class="center">Ʒ��</td>
    <td height="25" align="center" valign="middle" class="center">����</td>
    <td height="25" align="center" valign="middle" class="center">�ͺ�</td>
    <td height="25" align="center" valign="middle" class="center">���</td>
    <td height="25" align="center" valign="middle" class="center">����</td>
    <td height="25" align="center" valign="middle" class="center">����ʱ��</td>
    <td height="25" align="center" valign="middle" class="right">����</td>
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
" type='button' value="����" class="btn" style=" border-color: #FFFFFF; cursor: ahnd;" onclick="modi(<?php echo $this->_tpl_vars['key']; ?>
)"/></td>
  </tr>
<?php endforeach; endif; unset($_from); ?> 
  <tr>
    <td colspan="10"><a href="#" onclick="return alldel(delcomm)">ȫѡ</a> <a href="#" onclick="return overdel(delcomm);">��ѡ</a>&nbsp;&nbsp;
      <input type="submit" value="ɾ��ѡ��" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(delcomm);'>
      &nbsp;&nbsp;</td>
    <?php echo '<?php'; ?>
 echo $sqlstr1 <?php echo '?>'; ?>
 </tr>
</form>
</table>