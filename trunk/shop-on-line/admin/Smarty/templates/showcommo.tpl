<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/alldelete.js"></script>
<link rel="stylesheet" href="css/table.css" />
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="delcomm" name="delcomm" method="post" action="#">
  <tr>
    <td height="25" colspan="10" align="center" valign="middle" class="first">��Ʒ�鿴</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">����</td>
    <td height="25" align="center" valign="middle" class="center">Ʒ��</td>
    <td height="25" align="center" valign="middle" class="center">����</td>
    <td height="25" align="center" valign="middle" class="center">�ͺ�</td>
    <td height="25" align="center" valign="middle" class="center">���</td>
    <td height="25" align="center" valign="middle" class="center">����</td>
    <td height="25" align="center" valign="middle" class="center">����ʱ��</td>
    <td height="25" align="center" valign="middle" class="right">����</td>
  </tr>
{foreach key=key item=item from=$commoarr}
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="{$key}"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$key}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$item[0]}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$item[1]}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$item[2]}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$item[3]}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$item[4]}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$item[5]}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$item[6]}</td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="modcomm" name="mod{$key}" type='button' value="����" class="btn" style=" border-color: #FFFFFF; cursor: ahnd;" onclick="modi({$key})"/></td>
  </tr>
{/foreach} 
  <tr>
    <td colspan="10"><a href="#" onclick="return alldel(delcomm)">ȫѡ</a> <a href="#" onclick="return overdel(delcomm);">��ѡ</a>&nbsp;&nbsp;
      <input type="submit" value="ɾ��ѡ��" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(delcomm);'>
      &nbsp;&nbsp;</td>
    <?php echo $sqlstr1 ?> </tr>
</form>
</table>
