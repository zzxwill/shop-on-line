<?php /* Smarty version 2.6.19, created on 2011-05-29 03:52:24
         compiled from links.tpl */ ?>
 <!-- 客服服务热线去掉 -->
  <!-- 
<table id="__01" width="207" height="73" border="0" cellpadding="0" cellspacing="0">
 
  <tr>
    <td height="73" colspan="7" background="images/shop_11.gif">&nbsp;</td>
  </tr>
   
    
</table>
-->

<table width="207" height="211" border="0" cellpadding="0" cellspacing="0" background="images/shop_13.gif" id="__01">

  <tr>
    <td height="45" colspan="8">&nbsp;</td>
  </tr>
  <tr>
   
    <td width="24" rowspan="2" align="center" valign="top" style="line-height: 25px;">	</td>
    <td width="183" rowspan="2" align="left" valign="top" style="line-height: 25px;"><?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" target="_blank" class="lk"><?php echo $this->_tpl_vars['item']['name']; ?>
</a><br />
    <?php endforeach; endif; unset($_from); ?>    </td>
  </tr>
</table>