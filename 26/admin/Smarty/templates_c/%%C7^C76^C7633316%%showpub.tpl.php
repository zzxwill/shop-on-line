<?php /* Smarty version 2.6.19, created on 2008-04-23 02:53:37
         compiled from showpub.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/public.js"></script>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="showpub" name="showpub" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first">�鿴����</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="center" valign="middle" class="left">ɾ��</td>
    <td align="center" valign="middle" class="center">�������</td>
  </tr>
  <?php $_from = $this->_tpl_vars['pubarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
    <td align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td height="25" colspan="2">
    	<a href="#" onclick="return alldel(showpub)">ȫѡ</a> <a href="#" onclick="return overdel(showpub)">��ѡ</a>&nbsp;&nbsp;
      <input type="submit" value="ɾ��ѡ��" class="btn" style="border-color: #FFFFFF;" onClick = 'return delepub(showpub)'>
      &nbsp;&nbsp;
    </td>
  </tr>
</form>
</table>



