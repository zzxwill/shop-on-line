<title>{$title}</title>
<link rel="stylesheet" href="../../css/table.css" />
<link rel="stylesheet" href="css/table.css" />
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">�����鿴 </td>
  </tr>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">�����ţ�</td>
    <td height="25" align="left" valign="middle" class="right">{$formarr.formid}</td>
    <td height="25" align="center" valign="middle" class="right">����ʱ�䣺</td>
    <td height="25" align="left" valign="middle" class="right">{$formarr.formtime}</td>
  </tr>
  
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">�µ��ˣ�</td>
    <td width="125" height="25" class="center">{$formarr.vendee}</td>
    <td width="75" height="25" align="center" valign="middle" class="center">�ջ��ˣ�</td>
    <td width="125" height="25" class="right">{$formarr.taker}</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">�ʱࣺ</td>
    <td width="125" height="25" align="left" class="center">{$formarr.code}</td>
    <td width="75" height="25" align="center" valign="middle" class="center">�绰��</td>
    <td width="125" height="25" align="left" class="right">{$formarr.tel}</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">��ַ��</td>
    <td height="25" colspan="3" align="left" class="right">{$formarr.address}</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">�ͻ���ʽ��</td>
    <td width="125" height="25" align="left" class="center">{$formarr.del_method}</td>
    <td width="75" height="25" align="center" valign="middle" class="center">���ʽ��</td>
    <td width="125" height="25" align="left" class="right">{$formarr.pay_method}</td>
  </tr>
</table>



<p>&nbsp;</p>
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
  <tr>
{foreach key=key item=item from=$commname}
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
<p>&nbsp;</p>
