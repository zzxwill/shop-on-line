<?php /* Smarty version 2.6.19, created on 2011-05-25 09:27:18
         compiled from public.tpl */ ?>
<link rel="stylesheet" href="css/pub.css" />
<script language="javascript" src="js/links.js"></script>
<table width="210" height="193" border="0" cellpadding="0" cellspacing="0" background="images/shop_06.gif">
	<tr>
		<td height="35" width="17"></td>
        <td width="193" align="left" valign="top" class="exam"></td>
  </tr>
  	<tr>
		<td height="21" width="17"></td>
        <td width="193" align="left" valign="top" class="exam">
         <?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
         	<a href="#" class="lk" onclick="return showme(<?php echo $this->_tpl_vars['key']; ?>
,'showpub.php');" ><img src="images/man.JPG" width="14" height="11" border="0" /><?php echo $this->_tpl_vars['item']; ?>
</a><br />
         <?php endforeach; endif; unset($_from); ?>
      </td>
  </tr>
  <tr>
		<td height="20" width="17"></td>
        <td width="193" align="left" valign="bottom" class="exam"><a href="?page=allpub" class="lk">>>more<<</a></td>
  </tr>
</table>