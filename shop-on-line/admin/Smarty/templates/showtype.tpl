<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/changetype.js"></script>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modi" name="modi" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">�鿴��Ʒ���</td>
	</tr>
{foreach name=ftype key=fkey item=fitem from=$bigarray}
    <tr>
      <td height="25" align="center" valign="middle" class="left"><font size="2" color="#FF0000">���ࣺ</font><input id="moditype{$fkey}" name="moditype{$fkey}" type="text" class="shorttxt" value="{$fitem}" style="border-color:#996633;" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="modify" name="modify" type="button" class="btn" value="�޸�" onclick="javascript:modifytype({$fkey});" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="ɾ��" class="btn" onclick="javascript:delbigtype({$fkey});" style="border-color:#FFFFFF;"></td>
    </tr>
    {foreach name = stype key = skey item = sitem from = $smallarray}
    {if $sitem[1] == $fkey}
    <tr>
      <td height="25" align="center" valign="middle" class="left" style="text-indent: 50px;" ><font size="2" color="#996600">���ࣺ</font><input id="modtype{$skey}" name="moditype{$skey}" type="text" class="shorttxt" value="{$sitem[0]}" style="border-color:#996633;" /></td>
        <td height="25" align="center" valign="middle" class="right"><input id="modidfy" name="modify" type="button" value="�޸�" class="btn" onclick="javascript:modifytype({$skey})" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="ɾ��" class="btn" onclick="javascript:delsmalltype({$skey})" style="border-color:#FFFFFF;"></td>
    </tr>
  	{/if}
    {/foreach}
{/foreach}
</form>
</table>
