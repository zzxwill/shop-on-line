<?php /* Smarty version 2.6.19, created on 2008-04-27 05:12:15
         compiled from showmem.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showmem.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>

<table width="400" border="0" cellpadding="0" cellspacing="1">
<form id="showmem" name="showmem" method="post" action="#"  onsubmit="return chkmem(modcommo)">
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">会员信息</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">会员名称：</td>
      <td width="618" class="right"><?php echo $this->_tpl_vars['viparr'][0]; ?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">消费总额：</td>
      <td width="618" class="right"><?php echo $this->_tpl_vars['viparr'][1]; ?>
</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">真实姓名：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][2]; ?>
</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">身份证号：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][3]; ?>
</td>
    </tr>
    <tr>
        <td width="30%" height="22" class="left">移动电话：</td>
      <td height="22" class="right"><?php echo $this->_tpl_vars['viparr'][4]; ?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">固定电话：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][5]; ?>
</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">Email：</td>
   	  <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][6]; ?>
</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">QQ号：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][7]; ?>
</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">邮编：</td>
   	  <td height="25" class="right">&nbsp;<?php echo $this->_tpl_vars['viparr'][8]; ?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">地址：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][9]; ?>
</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">是否冻结：</td>
      <td height="25" class="right"><div id="isfree">
       <?php if ($this->_tpl_vars['viparr'][10] == 1): ?>冻结
      <?php else: ?>未冻结<?php endif; ?></div></td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">注册时间：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][11]; ?>
</td>
      </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="free" name="free" type="button" class="btn" value="<?php if ($this->_tpl_vars['viparr'][10] == 1): ?>解冻<?php else: ?>冻结<?php endif; ?>" onClick= "return changestate(<?php echo $this->_tpl_vars['id']; ?>
,<?php echo $this->_tpl_vars['viparr'][10]; ?>
)">
    	&nbsp;&nbsp;
   	  <input id="del" name="del" type="button" value="删除" class="btn" onclick="return dele(<?php echo $this->_tpl_vars['id']; ?>
)"></td>
    </tr>
	</form>
</table>