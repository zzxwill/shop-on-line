<title>{$title}</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/public.js"></script>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="showpub" name="showpub" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first">查看公告</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="center" valign="middle" class="left">删除</td>
    <td align="center" valign="middle" class="center">公告标题</td>
  </tr>
  {foreach key=key item=item from=$pubarr}
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="{$item.id}"></td>
    <td align="center" valign="middle" class="center">{$item.title}</td>
  </tr>
  {/foreach}
  <tr>
    <td height="25" colspan="2">
    	<a href="#" onclick="return alldel(showpub)">全选</a> <a href="#" onclick="return overdel(showpub)">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return delepub(showpub)'>
      &nbsp;&nbsp;
    </td>
  </tr>
</form>
</table>




