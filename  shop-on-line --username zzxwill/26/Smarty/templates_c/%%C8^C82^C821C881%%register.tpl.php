<?php /* Smarty version 2.6.19, created on 2008-05-20 09:41:48
         compiled from register.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/reg.css"/>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/check.js"></script>
<body onLoad="javascript:register.name.focus()">
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
 <form id="register" name="register" action="reg_chk.php" method="post" onSubmit="return chkinput(this)">
 	<tr>
    	<td colspan="5" align="center" valign="middle"><h2>���û�ע��</h2></td>
    </tr>
    <tr>
      <td width="81" height="25"><div align="right">�û�����</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="name" name="name" type="text" onBlur="javascript:chkname(register)"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" /><input id="c_name" name="c_anme" type="hidden" value="not" >&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="name1"><font color="#999999">�������û���</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">ע�����룺</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="pwd1" name="pwd1" type="password"  onBlur="javascript:chkpwd1(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td width="152"><div id="pwd11"><font color="#999999">����������</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">ȷ�����룺</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="pwd2" name="pwd2" type="password" onBlur=" javascript:chkpwd2(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="pwd21"><font color="#999999">ȷ������</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">�ܱ����⣺</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="question" name="question" type="text" onBlur="javascript:chkquestion(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="question1"><font color="#999999">����д���뱣������</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">�ܱ��𰸣�</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="answer" name="answer" type="text" onBlur="javascript:chkanswer(register)"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="answer1"><font color="#999999">����д���뱣����</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">��ʵ������</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="realname" name="realname" type="text" onBlur="javascript:chkrealname(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="realname1"><font color="#999999">����д��ʵ����</font></div></td>
    </tr>
    <tr>
    	<td height="25"><div align="right">���֤�ţ�</div></td>
		<td height="25" colspan="3">&nbsp;
        <input id="card" name="card" type="text"  maxlength="18" onBlur="javascript:chkcard(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
		<td height="25"><div id="card1"><font color="#999999">������׼ȷ������ʺ�</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">�ƶ��绰��</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="tel" type="text" name="tel" onBlur="javascript:chktel(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="tel1"><font color="#999999">�������ƶ��绰</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">�̶��绰��</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="phone" type="text" name="phone" onBlur="javascript:chkphone(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="phone1"><font color="#999999">������̶��绰</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">QQ���룺</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="qq" type="text" name="qq" onBlur="javascript:chkqq(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="25"><div id="qq1"><font color="#999999">������QQ��</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">E-mail��</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="email" type="text" name="email" onBlur="javascript:chkemail(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="25"><div id="email1"><font color="#999999">������Email</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">��&nbsp;&nbsp;�ࣺ</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="code" type="text" name="code" onBlur="javascript:chkcode(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut= "this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="25"><div id="code1"><font color="#999999">�������ʱ�</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">��ϵ��ַ��</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="address" type="text" name="address" onBlur="javascript:chkaddress(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="address1"><font color="#999999">��������ϵ��ַ</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">��֤�룺</div></td>
      <td width="65" height="25">&nbsp;
        <input id="yzm" type="text" name="yzm" size="8" onBlur="javascript:chkyzm(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>
      <input name="yzm2" type="hidden" value="" /></td>
      <td width="65" align="center" valign="middle"><script>yzm(register)</script></td>
      <td width="51"><a href="javascript:code(register)">������</a></td>
      <td height="25"><div id="yzm1"><font color="#999999">������֤��</font></div></td>
    </tr>
    <tr>
      <td height="25" colspan="2">&nbsp;
          <input type="submit" value="�ύ"/>
        &nbsp;&nbsp;
        <input type="reset" value="��д" /></td>
      <td height="25" colspan="3"><div style="color:#FF0000">����*���ŵ�Ϊ������</div></td>
    </tr>
  </form>
</table>
</body>