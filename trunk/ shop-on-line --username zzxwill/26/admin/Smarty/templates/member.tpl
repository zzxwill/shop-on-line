<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/member.js"></script>
<link rel="stylesheet" href="css/table.css" />
<title>{$title}</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="showmem" name="showmem" method="post" action="#">
  <tr>
    <td height="25" colspan="5" align="center" valign="middle" class="first">会员管理</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">昵称</td>
    <td height="25" align="center" valign="middle" class="center">状态</td>
    <td height="25" align="center" valign="middle" class="right">查看信息</td>
  </tr>
{foreach key=key item=item from=$memarr}
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="{$key}"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$key}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$item.name}</td>
    <td height="25" align="center" valign="middle" class="center">
   <input id="free" name="free" type="button" class="btn" value = "{if $item.isfreeze == 0}未冻结 {elseif $item.isfreeze == 1}冻结{/if}" style="border-color: #FFFFFF;" onClick="return changestate({$key},{$item[1]})">
    </td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="show" name="show{$key}" type='button' value="详细信息" class="btn" style=" border-color: #FFFFFF; cursor: hand;" onclick="showme({$key})"/></td>
  </tr>
{/foreach} 
  <tr>
    <td colspan="5"><a href="#" onclick="return alldel(showmem)">全选</a> <a href="#" onclick="return overdel(showmem);">反选</a>&nbsp;&nbsp;
      <input type="button" value="删除选择" onClick = 'return deletemem(showmem);'>
      &nbsp;&nbsp;</td>
     </tr>
</form>
</table>
