<?php /* Smarty version 2.6.19, created on 2011-06-02 04:21:50
         compiled from forminfo.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">�����鿴 </td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">�����ţ�</td>
    <td width="90" height="25" align="left" valign="middle" class="right"><font color="red">&nbsp;<?php echo $this->_tpl_vars['formarr']['formid']; ?>
</font></td>
    <td width="70" height="25" align="right" valign="middle" class="right">����ʱ�䣺</td>
    <td width="160" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['formarr']['formtime']; ?>
</td>
  </tr>
  
  <tr>
    <td height="25" align="right" valign="middle" class="left">�µ��ˣ�</td>
    <td height="25" class="center">&nbsp;<?php echo $this->_tpl_vars['formarr']['vendee']; ?>
</td>
    <td height="25" align="right" valign="middle" class="center">�ջ��ˣ�</td>
    <td height="25" class="right">&nbsp;<?php echo $this->_tpl_vars['formarr']['taker']; ?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">�ʱࣺ</td>
    <td height="25" align="left" class="center">&nbsp;<?php echo $this->_tpl_vars['formarr']['code']; ?>
</td>
    <td height="25" align="right" valign="middle" class="center">�绰��</td>
    <td height="25" align="left" class="right">&nbsp;<?php echo $this->_tpl_vars['formarr']['tel']; ?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">��ַ��</td>
    <td height="25" colspan="3" align="left" class="right">&nbsp;<?php echo $this->_tpl_vars['formarr']['address']; ?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">�ͻ���ʽ��</td>
    <td height="25" align="left" class="center">&nbsp;<?php echo $this->_tpl_vars['formarr']['del_method']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">���ʽ��</td>
    <td height="25" align="left" class="right">&nbsp;<?php echo $this->_tpl_vars['formarr']['pay_method']; ?>
</td>
  </tr>
</table>
<table width="777" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
</table>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="5" align="center" valign="middle" class="first">��������</td>
  </tr>
  <tr>
    <td width="100" height="25" align="center" valign="middle" class="left">��Ʒ��</td>
    <td width="100" height="25" align="center" valign="middle" class="center">����</td>
    <td width="100" height="25" align="center" valign="middle" class="center">�۸�</td>
    <td width="100" height="25" align="center" valign="middle" class="center">�۸�����</td>
    <td width="100" height="25" align="center" valign="middle" class="right">�ϼ�</td>
  </tr>
<?php $_from = $this->_tpl_vars['commname']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><?php echo $this->_tpl_vars['item']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['commnumber'][$this->_tpl_vars['key']]; ?>
</td>
    <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['commagoprice'][$this->_tpl_vars['key']]; ?>
&nbsp;Ԫ</td>
    <td align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['commfold'][$this->_tpl_vars['key']]; ?>
&nbsp;��</td>
    <td align="center" valign="middle" class="right"><?php echo $this->_tpl_vars['commagoprice'][$this->_tpl_vars['key']]*$this->_tpl_vars['commnumber'][$this->_tpl_vars['key']]; ?>
&nbsp;Ԫ</td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
	<td colspan="5" height="25" align="right" valign="middle">�����ѣ�<?php echo $this->_tpl_vars['formarr']['total']; ?>
&nbsp;Ԫ</td>
</tr>
</table>
<p align="center">��ϲ���������ύ�ɹ���<br />������һ���ڰ�����֧����ʽ���л��,���ʱע������<font color="red">������</font>!�����뼰ʱ֪ͨ���ǡ�<br />ע�⣺</font>���ס<font color="red">������</font>���Ա��պ��ѯ��������ʱʹ�á�</p>

<p align="center"><input type="button" value="��Ҫ��ӡ" onclick="window.print()" class="btn" /> </p>