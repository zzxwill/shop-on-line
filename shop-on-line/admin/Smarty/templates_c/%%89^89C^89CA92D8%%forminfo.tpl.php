<?php /* Smarty version 2.6.19, created on 2008-04-22 10:56:21
         compiled from forminfo.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="../../css/table.css" />
<link rel="stylesheet" href="css/table.css" />
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">订单查看 </td>
  </tr>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">订单号：</td>
    <td height="25" align="left" valign="middle" class="right"><?php echo $this->_tpl_vars['formarr']['formid']; ?>
</td>
    <td height="25" align="center" valign="middle" class="right">订单时间：</td>
    <td height="25" align="left" valign="middle" class="right"><?php echo $this->_tpl_vars['formarr']['formtime']; ?>
</td>
  </tr>
  
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">下单人：</td>
    <td width="125" height="25" class="center"><?php echo $this->_tpl_vars['formarr']['vendee']; ?>
</td>
    <td width="75" height="25" align="center" valign="middle" class="center">收货人：</td>
    <td width="125" height="25" class="right"><?php echo $this->_tpl_vars['formarr']['taker']; ?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">邮编：</td>
    <td width="125" height="25" align="left" class="center"><?php echo $this->_tpl_vars['formarr']['code']; ?>
</td>
    <td width="75" height="25" align="center" valign="middle" class="center">电话：</td>
    <td width="125" height="25" align="left" class="right"><?php echo $this->_tpl_vars['formarr']['tel']; ?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">地址：</td>
    <td height="25" colspan="3" align="left" class="right"><?php echo $this->_tpl_vars['formarr']['address']; ?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">送货方式：</td>
    <td width="125" height="25" align="left" class="center"><?php echo $this->_tpl_vars['formarr']['del_method']; ?>
</td>
    <td width="75" height="25" align="center" valign="middle" class="center">付款方式：</td>
    <td width="125" height="25" align="left" class="right"><?php echo $this->_tpl_vars['formarr']['pay_method']; ?>
</td>
  </tr>
</table>



<p>&nbsp;</p>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="5" align="center" valign="middle" class="first">订单内容</td>
  </tr>
  <tr>
    <td width="100" height="25" align="center" valign="middle" class="left">商品名</td>
    <td width="100" height="25" align="center" valign="middle" class="center">数量</td>
    <td width="100" height="25" align="center" valign="middle" class="center">价格</td>
    <td width="100" height="25" align="center" valign="middle" class="center">价格折率</td>
    <td width="100" height="25" align="center" valign="middle" class="right">合计</td>
  </tr>
  <tr>
<?php $_from = $this->_tpl_vars['commname']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <td height="25" align="center" valign="middle" class="left"><?php echo $this->_tpl_vars['item']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['commnumber'][$this->_tpl_vars['key']]; ?>
</td>
    <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['commagoprice'][$this->_tpl_vars['key']]; ?>
&nbsp;元</td>
    <td align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['commfold'][$this->_tpl_vars['key']]; ?>
&nbsp;折</td>
    <td align="center" valign="middle" class="right"><?php echo $this->_tpl_vars['commagoprice'][$this->_tpl_vars['key']]*$this->_tpl_vars['commnumber'][$this->_tpl_vars['key']]; ?>
&nbsp;元</td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
	<td colspan="5" height="25" align="right" valign="middle">总消费：<?php echo $this->_tpl_vars['formarr']['total']; ?>
&nbsp;元</td>
</tr>
</table>
<p>&nbsp;</p>