<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/changeadmin.js"></script>
<title>{$title}</title>
<div id="showdiv">
<table width="275" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modi" name="modi" method="post" action="#">
	<tr>
	  <td height="25" colspan="2" align="center" valign="middle" class="first">����Ա����</td>
	    <td height="25" align="center" valign="middle" class="first"><input id="addadmin" name="addadmin" type="button" value="���" class="btn" onclick="showadd()"/></td>
	</tr>
{foreach key=key item=item from=$arr}
    <tr>
      <td height="25" align="center" valign="middle" class="left" width="25">{$key}</td>
      <td width="150" align="center" valign="middle" class="center"><div id="admin{$key}">{$item[0]}</div></td>
      <td width="100" align="center" valign="middle" class="right"><input id="modify" name="modify" type="button" class="btn" value="�޸�" onclick="javascript:showdiv('{$key}','{$item[0]}');" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="ɾ��" class="btn" onclick="javascript:deladmin({$key});" style="border-color:#FFFFFF;"></td>
    </tr>
{/foreach}
</form>
</table>
</div>
<p>&nbsp;</p>

<div id="moddiv" style="display:none;">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modifyadmin" name="modifyadmin" method="post" actioin="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first"><div id="showname"></div></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">ԭ���룺</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="old" nanme="old" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">�����룺</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="new1" name="new2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">ȷ�����룺</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="new2" name="new2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle">
	<input id="modid" name="modid" type="hidden" value="" />
	<input id="enter" name="enter" type="button" value="�޸�" class="btn" onclick="modiadmin()" /></td>
  </tr>
</form>
</table>
</div>

<div id="adddiv" style="display: none;">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="addadminform" name="addadminform" method="post" actioin="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first">����¹���Ա</td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">�˺ţ�</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="names" name="names" type="txt" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">���룺</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="pwd1" name="pwd1" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">ȷ�����룺</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="pwd2" name="pwd2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="enter" name="enter" type="button" value="���" class="btn" onclick="addadmin(addadminform)" /></td>
  </tr>
</form>
</table>
</div>