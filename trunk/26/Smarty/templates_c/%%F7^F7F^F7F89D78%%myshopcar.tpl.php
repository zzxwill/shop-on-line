<?php /* Smarty version 2.6.19, created on 2008-05-21 13:03:35
         compiled from myshopcar.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/shopcar.js"></script>
<table border="0" cellspacing="0" cellpadding="0" align="center">
<form id="myshopcar" name="myshopcar" method="post" action="#">
  <tr>
    <td height="30" colspan="7" align="center" valign="middle" class="first">�ҵĹ��ﳵ</td>
  </tr>
  <tr>
    <td width="35" height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td width="100" height="25" align="center" valign="middle" class="center">��Ʒ����</td>
    <td width="100" height="25" align="center" valign="middle" class="center">��������</td>
    <td width="100" height="25" align="center" valign="middle" class="center">�г��۸�</td>
    <td width="100" height="25" align="center" valign="middle" class="center">��Ա�۸�</td>
    <td width="100" height="25" align="center" valign="middle" class="center">�ۿ���</td>
    <td width="100" height="25" align="center" valign="middle" class="right">�ϼ�</td>
  </tr>
<?php $_from = $this->_tpl_vars['commarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
    <td height="25" align="center" valign="middle" class="center"><div id = "c_name<?php echo $this->_tpl_vars['key']; ?>
"> &nbsp;<?php echo $this->_tpl_vars['item']['name']; ?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><input id="cnum<?php echo $this->_tpl_vars['key']; ?>
" name="cnum<?php echo $this->_tpl_vars['key']; ?>
" type="text" class="shorttxt" value="<?php echo $this->_tpl_vars['item']['num']; ?>
" onkeyup="cvp(<?php echo $this->_tpl_vars['key']; ?>
,<?php echo $this->_tpl_vars['item']['v_price']; ?>
,<?php echo $this->_tpl_vars['shoparr']; ?>
)"></td>
    <td height="25" align="center" valign="middle" class="center"><div id="m_price<?php echo $this->_tpl_vars['key']; ?>
">&nbsp;<?php echo $this->_tpl_vars['item']['m_price']; ?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="v_price<?php echo $this->_tpl_vars['key']; ?>
">&nbsp;<?php echo $this->_tpl_vars['item']['v_price']; ?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="fold<?php echo $this->_tpl_vars['key']; ?>
">&nbsp;<?php echo $this->_tpl_vars['item']['fold']; ?>
</div></td>
    <td height="25" align="center" valign="middle" class="right"><div id="total<?php echo $this->_tpl_vars['key']; ?>
">&nbsp;<?php echo $this->_tpl_vars['item']['total']; ?>
</div></td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
  <tr>
    <td height="25" colspan="3" align="left" valign="middle">
    <a href="#" onclick="return alldel(myshopcar)">ȫѡ</a> <a href="#" onclick="return overdel(myshopcar);">��ѡ</a>&nbsp;&nbsp;
      <input type="button" value="ɾ��ѡ��" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(myshopcar);'>
&nbsp;&nbsp;    </td>
    <td height="25" align="center" valign="middle"><input id="cont" name="cont" type="button" class="btn" value="��������" onclick="return conshop(myshopcar)" /></td>
    <td height="25" align="center" valign="middle"><input id="uid" name="uid" type="hidden" value="<?php echo $_SESSION['member']; ?>
" ><input id="settle" name="settle" type="button" class="btn" value="ȥ����̨" onclick="return formset(form)" /></td>
    <td height="25" colspan="2" align="right" valign="middle"><div id='sum'>���ƣ�<?php echo $this->_tpl_vars['sum']; ?>
&nbsp;Ԫ</div></td>
    </tr>
</form>
</table>