<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/settle.js"></script>
<title>{$title}</title>
<table width="400" border="0" cellspacing="0" cellpadding="0">
<form id="buyform" name="buyform" method="post" action="settle_chk.php" onSubmit="return chkform(buyform)">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">������Ϣ</td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">�ջ��ˣ�</td>
    <td width="120" height="25" align="left" valign="middle" class="center">&nbsp;<input id="taker" name="taker" type="text" class="txt" /></td>
    <td width="80" align="right" valign="middle" class="center">�ʱࣺ</td>
    <td width="120" align="left" valign="middle" class="right">&nbsp;<input id="code" name="code" type="text" class="txt" /></td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">��ϵ�绰��</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<input id="tel" name="tel" type="text" class="txt" />
    </td>
    <td height="25" colspan="2" align="left" valign="middle" class="center">&nbsp;</td>
    </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">��ַ��</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<input id="address" name="address" type="text" class="langtxt" /></td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">�ͻ���ʽ��</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<select id="del" name="del">
    	<option value="ƽ��">ƽ��</option>
        <option value="���">���</option>
        <option value="�ͻ�����">�ͻ�����</option>
    </select>    </td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left"> ���ʽ��</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<select id="pay" name="pay">
    	<option value="����ת��">����ת��</option>
        <option value="�ʾֻ��">�ʾֻ��</option>
        <option value="֧����">֧����</option>
    </select>    </td>
  </tr>
  <tr>
    <td height="30" colspan="4" align="center" valign="middle"><input id="enter" name="enter" type="submit" value="�ύ����" class="btn" /><input id="fst" name="fst" type="hidden" value="{$fst}" /><input id="snd" name="snd" type="hidden" value="{$snd}" /><input id="uid" name="uid" type="hidden" value="{$uid}" ></td>
  </tr>
</form>
</table>