<?php /* Smarty version 2.6.19, created on 2011-05-29 04:22:48
         compiled from nominate.tpl */ ?>
<link href="css/nominate.css" rel="stylesheet" type="text/css" />
<link href="css/links.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="643" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="6" width="636" height="33" align="right" valign="middle"><img src="images/shop_10.gif" width="643" height="33" border="0" usemap="#Map" /></td>
		<td rowspan="3" width="7" height="238">&nbsp;</td>
	</tr>
	<tr>
    	<td width="23" height="185">&nbsp;</td>
       <?php $_from = $this->_tpl_vars['nomarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?> 
	  <td width="145" height="185" align="left" valign="top">
      
       	  <table width="145" border="0" cellpadding="0" cellspacing="0" >
<tr>
               	  <td height="100" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['item']['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" style="border: 1px solid #f0f0f0;" ></td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">&nbsp;<?php echo $this->_tpl_vars['item']['name']; ?>
</td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['item']['m_price']; ?>
&nbsp;元</td>
            </tr>
                <tr>
                	<td height="19" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['item']['v_price']; ?>
&nbsp;元</td>
            </tr>
                <tr>
                	<td height="32" align="center" valign="middle">
                		<!-- <input id="showinfo" name="showinfo" type="button" value="" class="showinfo" onclick="openshowcommo(<?php echo $this->_tpl_vars['item']['id']; ?>
)"/>&nbsp;-->
                		<input id="showinfo" name="showinfo" type="image" src="images/look.JPG" value="" class="showinfo" onclick="openshowcommo(<?php echo $this->_tpl_vars['item']['id']; ?>
)"/>&nbsp;
                		<!-- <input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $this->_tpl_vars['item']['id']; ?>
)" /></td>-->
                		<input id="buy" name="buy" type="image" src="images/looks.JPG" value="" class="buy" onclick="return buycommo(<?php echo $this->_tpl_vars['item']['id']; ?>
)" /></td>
            </tr>
       	</table>
      </td>
      <?php endforeach; endif; unset($_from); ?>
        <td width="33" height="185">&nbsp;</td>
  </tr>
	<tr>
		<td colspan="6" width="636" height="14">&nbsp;</td>
	</tr>
</table>

<map name="Map" id="Map">
<area shape="rect" coords="585,8,635,27" href="?page=new" class="lk" />
</map>