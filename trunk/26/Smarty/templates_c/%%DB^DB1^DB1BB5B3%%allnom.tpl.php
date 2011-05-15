<?php /* Smarty version 2.6.19, created on 2009-05-02 07:17:00
         compiled from allnom.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/nominate.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" align="left" valign="middle" background="images/shop_07.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle">
   <?php $_from = $this->_tpl_vars['nomarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
   
    <table width="636" height="134" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td width="145" rowspan="5" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['item']['pics']; ?>
" width="90" height="100" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">商品名称：<?php echo $this->_tpl_vars['item']['name']; ?>
</td>
            <td width="156" height="35">商品类别：<?php echo $this->_tpl_vars['item']['class']; ?>
</td>
    	    <td width="157">商品型号：<?php echo $this->_tpl_vars['item']['model']; ?>
</td>
    	</tr>
    	<tr>
    	  <td height="23">商品品牌：<?php echo $this->_tpl_vars['item']['brand']; ?>
</td>
  	      <td height="23" colspan="2">商品产地：<?php echo $this->_tpl_vars['item']['area']; ?>
</td>
    	</tr>
    	<tr>
    	  <td width="178" height="23">剩余数量：<?php echo $this->_tpl_vars['item']['stocks']; ?>
</td>
  	      <td colspan="2">销售数量：<?php echo $this->_tpl_vars['item']['sell']; ?>
</td>
    	</tr>
    	<tr>
    	  <td height="23">市场价：<font color="red"><?php echo $this->_tpl_vars['item']['m_price']; ?>
&nbsp;元</font></td>
  	      <td height="23" colspan="2">上市日期：<?php echo $this->_tpl_vars['item']['addtime']; ?>
</td>
    	</tr>
    	<tr>
    	  <td height="30">会员价格：<font color="#FF0000"><?php echo $this->_tpl_vars['item']['v_price']; ?>
&nbsp;元</font></td>
  	      <td height="30" colspan="2" align="center" valign="middle"><input id="allshow" name="allshow" type="button" value="" class="showinfo" onclick="openshowcommo(<?php echo $this->_tpl_vars['item']['id']; ?>
)"  />  &nbsp;<input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $this->_tpl_vars['item']['id']; ?>
)" /></td>
    	</tr>
    </table>
    <hr style="border: 1px solid #f0f0f0;" />
    <?php endforeach; endif; unset($_from); ?>
	
    </td>
  </tr>
  <tr>
  	<td height="25">&nbsp;</td>
  </tr>
</table>