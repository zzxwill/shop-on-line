<?php /* Smarty version 2.6.19, created on 2008-05-21 12:03:01
         compiled from showcommo.tpl */ ?>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="540" border="0" cellspacing="0" cellpadding="0">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">��Ʒ��Ϣ</td>
    </tr>
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="<?php echo $this->_tpl_vars['arr']['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['arr']['name']; ?>
" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">��Ʒ���ƣ�</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['name']; ?>
</td>
    <td width="100" height="25" align="center" valign="middle" class="center">��Ʒ���</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['class']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">��ƷƷ�ƣ�</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['brand']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">��Ʒ�ͺţ�</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['model']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">��Ʒ���أ�</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['area']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">��Ʒ��棺</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['stocks']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">�г��۸�</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['m_price']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">��Ա�۸�</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['v_price']; ?>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">��Ʒ��飺</td>
    <td colspan="3" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['info']; ?>
</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="button" value="" class="buy" onclick="return subbuycommo(<?php echo $this->_tpl_vars['arr']['id']; ?>
)" ></td>
  </tr>
</table>