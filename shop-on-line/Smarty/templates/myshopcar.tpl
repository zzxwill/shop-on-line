<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/shopcar.js"></script>
<table border="0" cellspacing="0" cellpadding="0" align="center">
<form id="myshopcar" name="myshopcar" method="post" action="#">
  <tr>
    <td height="30" colspan="7" align="center" valign="middle" class="first">�ҵĹ��ﳵ</td>
  </tr>
  <tr>
    <td width="35" height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td width="100" height="25" align="center" valign="middle" class="center">��Ʒ����</td>
    <td width="100" height="25" align="center" valign="middle" class="center">��������</td>
    <td width="100" height="25" align="center" valign="middle" class="center">�г��۸�</td>
    <td width="100" height="25" align="center" valign="middle" class="center">��Ա�۸�</td>
    <td width="100" height="25" align="center" valign="middle" class="center">�ۿ���</td>
    <td width="100" height="25" align="center" valign="middle" class="right">�ϼ�</td>
  </tr>
{foreach key=key item=item from=$commarr}
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="{$item.id}"></td>
    <td height="25" align="center" valign="middle" class="center"><div id = "c_name{$key}"> &nbsp;{$item.name}</div></td>
    <td height="25" align="center" valign="middle" class="center"><input id="cnum{$key}" name="cnum{$key}" type="text" class="shorttxt" value="{$item.num}" onkeyup="cvp({$key},{$item.v_price},{$shoparr})"></td>
    <td height="25" align="center" valign="middle" class="center"><div id="m_price{$key}">&nbsp;{$item.m_price}</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="v_price{$key}">&nbsp;{$item.v_price}</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="fold{$key}">&nbsp;{$item.fold}</div></td>
    <td height="25" align="center" valign="middle" class="right"><div id="total{$key}">&nbsp;{$item.total}</div></td>
  </tr>
{/foreach}
  <tr>
    <td height="25" colspan="3" align="left" valign="middle">
    <a href="#" onclick="return alldel(myshopcar)">ȫѡ</a> <a href="#" onclick="return overdel(myshopcar);">��ѡ</a>&nbsp;&nbsp;
      <input type="button" value="ɾ��ѡ��" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(myshopcar);'>
&nbsp;&nbsp;    </td>
    <td height="25" align="center" valign="middle"><input id="cont" name="cont" type="button" class="btn" value="��������" onclick="return conshop(myshopcar)" /></td>
    <td height="25" align="center" valign="middle"><input id="uid" name="uid" type="hidden" value="{$smarty.session.member}" ><input id="settle" name="settle" type="button" class="btn" value="ȥ����̨" onclick="return formset(form)" /></td>
    <td height="25" colspan="2" align="right" valign="middle"><div id='sum'>���ƣ�{$sum}&nbsp;Ԫ</div></td>
    </tr>
</form>
</table>
