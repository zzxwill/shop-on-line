<?php /* Smarty version 2.6.19, created on 2009-05-06 08:47:26
         compiled from newhot.tpl */ ?>
<link rel="stylesheet" href="css/newhot.css" />
<link href="css/top.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/showcommo.js"></script>
<table id="__01" width="643" border="0" cellpadding="0" cellspacing="0" style=" border: 3px solid #f0f0f0;" >
	<tr>
		<td colspan="2" height="2"></td>
	</tr>
	<tr>
	  <td width="321" height="33" align="center" background="images/shop_07.gif"><div class="new"><a href="?page=nom" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	 </td>
	  <td width="322" height="33" align="right" background="images/shop_14.gif"><div class="hot"><a href="?page=hot" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	  &nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
	<tr>
	  <td align="center" valign="top" style="border-right: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr> <?php $_from = $this->_tpl_vars['newarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nkey'] => $this->_tpl_vars['nitem']):
?>
          <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="<?php echo $this->_tpl_vars['nitem']['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['nitem']['name']; ?>
" style="border:1px solid #f0f0f0;" onclick="openshowcommo(<?php echo $this->_tpl_vars['nitem']['id']; ?>
)" /></a></td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle"><?php echo $this->_tpl_vars['nitem']['name']; ?>
</td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['nitem']['m_price']; ?>
&nbsp;元</td>
                </tr>
                <tr>
                  <td height="16" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['nitem']['v_price']; ?>
&nbsp;元</td>
                </tr>
            </table></td>
          <?php if ($this->_tpl_vars['nkey'] % 2 != 0): ?> </tr>
	    <tr> <?php endif; ?>
	      <?php endforeach; endif; unset($_from); ?> </tr>
      </table></td>
        
		<td align="center" valign="top" style="border-left: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
          <tr> <?php $_from = $this->_tpl_vars['hotarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hkey'] => $this->_tpl_vars['hitem']):
?>
            <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="<?php echo $this->_tpl_vars['hitem']['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['hitem']['name']; ?>
" style="border:1px solid #f0f0f0;" onclick="openshowcommo(<?php echo $this->_tpl_vars['hitem']['id']; ?>
)" /></a></td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle"><?php echo $this->_tpl_vars['hitem']['name']; ?>
</td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['hitem']['m_price']; ?>
</td>
                  </tr>
                  <tr>
                    <td height="16" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['hitem']['v_price']; ?>
</td>
                  </tr>
              </table></td>
            <?php if ($this->_tpl_vars['hkey'] % 2 != 0): ?> </tr>
		  <tr> <?php endif; ?>
		    <?php endforeach; endif; unset($_from); ?> </tr>
        </table></td>
</tr>
</table>