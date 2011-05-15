<?php /* Smarty version 2.6.19, created on 2009-05-02 08:17:50
         compiled from searchrst.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="540" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">商品信息</td>
    </tr>
<?php $_from = $this->_tpl_vars['searcharr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?> 
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="<?php echo $this->_tpl_vars['item']['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品名称：</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item']['name']; ?>
</td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品类别：</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['item']['class']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品品牌：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item']['brand']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">商品型号：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['item']['model']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品产地：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item']['area']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">商品库存：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['item']['stocks']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">市场价格：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['item']['m_price']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">会员价格：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['item']['v_price']; ?>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">商品简介：</td>
    <td colspan="3" class="center">&nbsp;<?php echo $this->_tpl_vars['item']['info']; ?>
</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="button" value="" class="buy" onclick="return subbuycommo(<?php echo $this->_tpl_vars['item']['id']; ?>
)" ></td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
</table>