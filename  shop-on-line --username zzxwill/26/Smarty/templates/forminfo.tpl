<title>{$title}</title>
<link rel="stylesheet" href="css/table.css" />
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">�����鿴 </td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">�����ţ�</td>
    <td width="90" height="25" align="left" valign="middle" class="right"><font color="red">&nbsp;{$formarr.formid}</font></td>
    <td width="70" height="25" align="right" valign="middle" class="right">����ʱ�䣺</td>
    <td width="160" height="25" align="left" valign="middle" class="right">&nbsp;{$formarr.formtime}</td>
  </tr>
  
  <tr>
    <td height="25" align="right" valign="middle" class="left">�µ��ˣ�</td>
    <td height="25" class="center">&nbsp;{$formarr.vendee}</td>
    <td height="25" align="right" valign="middle" class="center">�ջ��ˣ�</td>
    <td height="25" class="right">&nbsp;{$formarr.taker}</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">�ʱࣺ</td>
    <td height="25" align="left" class="center">&nbsp;{$formarr.code}</td>
    <td height="25" align="right" valign="middle" class="center">�绰��</td>
    <td height="25" align="left" class="right">&nbsp;{$formarr.tel}</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">��ַ��</td>
    <td height="25" colspan="3" align="left" class="right">&nbsp;{$formarr.address}</td>
  </tr>
  <tr align="center" valign="middle">
    <td height="25" align="right" class="left">�ͻ���ʽ��</td>
    <td height="25" align="left" class="center">&nbsp;{$formarr.del_method}</td>
    <td height="25" align="center" valign="middle" class="center">���ʽ��</td>
    <td height="25" align="left" class="right">&nbsp;{$formarr.pay_method}</td>
  </tr>
</table>
<table width="777" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
</table>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="5" align="center" valign="middle" class="first">��������</td>
  </tr>
  <tr>
    <td width="100" height="25" align="center" valign="middle" class="left">��Ʒ��</td>
    <td width="100" height="25" align="center" valign="middle" class="center">����</td>
    <td width="100" height="25" align="center" valign="middle" class="center">�۸�</td>
    <td width="100" height="25" align="center" valign="middle" class="center">�۸�����</td>
    <td width="100" height="25" align="center" valign="middle" class="right">�ϼ�</td>
  </tr>
{foreach key=key item=item from=$commname}
  <tr>
    <td height="25" align="center" valign="middle" class="left">{$item}</td>
    <td height="25" align="center" valign="middle" class="center">{$commnumber[$key]}</td>
    <td height="25" align="center" valign="middle" class="center">{$commagoprice[$key]}&nbsp;Ԫ</td>
    <td align="center" valign="middle" class="center">{$commfold[$key]}&nbsp;��</td>
    <td align="center" valign="middle" class="right">{$commagoprice[$key]*$commnumber[$key]}&nbsp;Ԫ</td>
  </tr>
{/foreach}
<tr>
	<td colspan="5" height="25" align="right" valign="middle">�����ѣ�{$formarr.total}&nbsp;Ԫ</td>
</tr>
</table>
<p align="center">��ϲ���������ύ�ɹ���<br />������һ���ڰ�����֧����ʽ���л��,���ʱע������<font color="red">������</font>!�����뼰ʱ֪ͨ���ǡ�<br />ע�⣺</font>���ס<font color="red">������</font>���Ա��պ��ѯ��������ʱʹ�á�</p>

<p align="center"><input type="button" value="��Ҫ��ӡ" onclick="window.print()" class="btn" /> </p>