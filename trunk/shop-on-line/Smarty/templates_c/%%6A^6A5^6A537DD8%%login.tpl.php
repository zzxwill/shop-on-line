<?php /* Smarty version 2.6.19, created on 2011-05-29 03:26:49
         compiled from login.tpl */ ?>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/login.js"></script>
<table width="210" height="208" border="0" cellpadding="0" cellspacing="0" background="images/shop_04.gif">
<form id="login" name="login" method="post" action="#" onsubmit="return lg(this)">
  <tr>
    <td width="64" height="35">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="right">用户名：</td>
    <td colspan="2"><input name="name" type="text" id="name"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="15" /></td>
  </tr>
  <tr>
    <td height="25" align="right">密码：</td>
    <td colspan="2"><input name="password" type="password" id="password"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="15" /></td>
  </tr>
  <tr>
    <td height="25" align="right">验证码：</td>
    <td colspan="2"><input name="check" type="text" id="check"  onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='#e8f4ff'" size="10" /></td>
  </tr>
  <tr>
    <td height="30"><input name="check2" type="hidden" value="" /></td>
    <td width="44"><script>yzm(login);</script></td>
    <td width="80"><a onclick="javascript:code(login)" style=" cursor:hand">换一张</a></td>
  </tr>
  <tr>
    <td height="25" colspan="3" align="center">
      <!-- <input id="enter" name="enter" type="submit" value=""> -->
      <input id="enter" name="enter" type="image" src="images/login.JPG" value="">
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center"><a href="#" id="login" onclick="reg()"><img src="images/check.JPG" width="59" height="23" border="0" /></a>&nbsp;<a id="login" href="#" onclick="found()"><img src="images/pass.JPG" width="59" height="23" border="0" /></a><strong></td>
    </tr>
  </form>
</table>