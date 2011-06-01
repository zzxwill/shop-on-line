<?php /* Smarty version 2.6.19, created on 2011-06-01 11:02:28
         compiled from showcommo.tpl */ ?>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="540" border="0" cellspacing="0" cellpadding="0">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">图书信息</td>
    </tr>
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="<?php echo $this->_tpl_vars['arr']['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['arr']['name']; ?>
" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">图书名称：</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['name']; ?>
</td>
    <td width="100" height="25" align="center" valign="middle" class="center">图书类别：</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['class']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center"><!-- 图书品牌 -->语言：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['brand']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center"><!--图书型号-->ISBN：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['model']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center"><!--图书产地-->出版社：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['area']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">图书库存：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['stocks']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">市场价格：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['m_price']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">会员价格：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr']['v_price']; ?>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">图书简介：</td>
    <td colspan="3" class="center">&nbsp;<?php echo $this->_tpl_vars['arr']['info']; ?>
</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="image" src="images/looks.JPG" value="" class="buy" onclick="return subbuycommo(<?php echo $this->_tpl_vars['arr']['id']; ?>
)" ></td>
  </tr>
</table>