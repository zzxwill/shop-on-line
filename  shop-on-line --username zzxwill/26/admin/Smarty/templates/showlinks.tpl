<title>{$title}</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/links.js"></script>
<table width="" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="showlink" name="showlink" method="post" action="#">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">查看链接</td>
  </tr>
  <tr>
    <td width="30" height="25" align="center" valign="middle" class="left">删除</td>
    <td width="150" align="center" valign="middle" class="center">链接网站</td>
    <td width="250" align="center" valign="middle" class="center">URL</td>
    <td width="40" align="center" valign="middle" class="center">修改</td>
  </tr>
  {foreach key=key item=item from=$linkarr}
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="{$item.id}"></td>
    <td align="center" valign="middle" class="center"><input id="wnames" name="wnames{$item.id}" type="text" class="txt" value="{$item.name}" /></td>
    <td align="center" valign="middle" class="center"><input id="wurl" name="wurl{$item.id}" type="text" class="langtxt" value="{$item.url}" /></td>
    <td align="center" valign="middle" class="center"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="return modlink({$item.id})" style="border-color:#FFFFFF;"/></td>
  </tr>
  {/foreach}
  <tr>
    <td height="25" colspan="4">
    	<a href="#" onclick="return alldel(showlink)">全选</a> <a href="#" onclick="return overdel(showlink);">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onclick="return dellinks(showlink);">
      &nbsp;&nbsp;
    </td>
  </tr>
</form>
</table>
