<?php /* Smarty version 2.6.19, created on 2011-05-25 09:30:31
         compiled from index.tpl */ ?>
<html>
<head>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/login.css" rel="stylesheet" type="text/css">
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/login.js"></script>
</head>
<body onLoad="javascript:login.user.focus()">
<form id="login" name="long" method="post" action="#">

<table width="1023" height="635" border="0" cellpadding="0" cellspacing="0" background="images/admin.jpg">
  <tr>
    <td width="341">&nbsp;</td>
    <td width="285" height="260">&nbsp;</td>
    <td width="397">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25" align="right">�û�����</td>
    <td><input name="user" type="text" id="user" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="20" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25" align="right">���룺</td>
    <td><input name="pwd" type="password" id="pwd" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="20"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="50">&nbsp;</td>
    <td><input id="enter" name="enter" type="button" value="" onClick="check_login(login)">&nbsp;<input id="reset" name="reset" type="reset" value=""></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></form>

</body>
</html>