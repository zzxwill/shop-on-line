<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showmem.js"></script>
<title>{$title}</title>

<table width="400" border="0" cellpadding="0" cellspacing="1">
<form id="showmem" name="showmem" method="post" action="#"  onsubmit="return chkmem(modcommo)">
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">��Ա��Ϣ</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">��Ա���ƣ�</td>
      <td width="618" class="right">{$viparr[0]}</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">�����ܶ</td>
      <td width="618" class="right">{$viparr[1]}</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">��ʵ������</td>
      <td height="25" class="right">{$viparr[2]}</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">���֤�ţ�</td>
      <td height="25" class="right">{$viparr[3]}</td>
    </tr>
    <tr>
        <td width="30%" height="22" class="left">�ƶ��绰��</td>
      <td height="22" class="right">{$viparr[4]}</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">�̶��绰��</td>
      <td height="25" class="right">{$viparr[5]}</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">Email��</td>
   	  <td height="25" class="right">{$viparr[6]}</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">QQ�ţ�</td>
      <td height="25" class="right">{$viparr[7]}</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">�ʱࣺ</td>
   	  <td height="25" class="right">&nbsp;{$viparr[8]}</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">��ַ��</td>
      <td height="25" class="right">{$viparr[9]}</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">�Ƿ񶳽᣺</td>
      <td height="25" class="right"><div id="isfree">
       {if $viparr[10]==1}����
      {else}δ����{/if}</div></td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">ע��ʱ�䣺</td>
      <td height="25" class="right">{ $viparr[11] }</td>
      </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="free" name="free" type="button" class="btn" value="{if $viparr[10]==1}�ⶳ{else}����{/if}" onClick= "return changestate({$id},{$viparr[10]})">
    	&nbsp;&nbsp;
   	  <input id="del" name="del" type="button" value="ɾ��" class="btn" onclick="return dele({$id})"></td>
    </tr>
	</form>
</table>
