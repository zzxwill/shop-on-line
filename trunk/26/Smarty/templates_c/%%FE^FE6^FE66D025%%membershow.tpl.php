<?php /* Smarty version 2.6.19, created on 2008-04-24 11:39:30
         compiled from membershow.tpl */ ?>
<link rel="stylesheet" href="css/member.css" />
<script language="javascript" src="js/member.js"></script>
<p align="left"><?php echo $_SESSION['member']; ?>
&gt;&gt;&gt;<a href='?page=hyzx' id="mem">查看信息</a>&gt;&gt;&gt;<a href='?page=hyzx&action=modify' id="mem">修改密码</a></p>
<table id='member' width="500" border="0" cellpadding="0" cellspacing="0">
<form id="member" name="member" method="post" action="modify_info_chk.php" onsubmit="return mem(member)" >
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0"><?php echo $this->_tpl_vars['arr']['name']; ?>
信息（不可更改信息）</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 会员编号：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['id']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 会员名称：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['name']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 密保问题：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['question']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">密保答案：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['answer']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 注册时间：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['addtime']; ?>
</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">消费总额：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;<?php echo $this->_tpl_vars['arr']['consume']; ?>
</td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0"><?php echo $this->_tpl_vars['arr']['name']; ?>
信息（可更改信息）</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">真实姓名：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="realname" name="realname" type="text" value="<?php echo $this->_tpl_vars['arr']['realname']; ?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">身份证号：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="card" name="card" type="text" value="<?php echo $this->_tpl_vars['arr']['card']; ?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">移动电话：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="tel" name="tel" type="text" value="<?php echo $this->_tpl_vars['arr']['tel']; ?>
">&nbsp;<font color="red">*</font> </td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">固定电话：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="phone" name="phone" type="text" value="<?php echo $this->_tpl_vars['arr']['phone']; ?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">Email：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="email" name="email" type="text" value="<?php echo $this->_tpl_vars['arr']['Email']; ?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">QQ号：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="qq" name="qq" type="text" value="<?php echo $this->_tpl_vars['arr']['QQ']; ?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">邮编：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="code" name="code" type="text" value="<?php echo $this->_tpl_vars['arr']['code']; ?>
" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">地址：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="address" name="address" type="text" value="<?php echo $this->_tpl_vars['arr']['address']; ?>
" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input name="enter" type="submit" id="enter" value="修改" />&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" id="reset" value="重置" /></td>
  </tr>
</form>
</table>