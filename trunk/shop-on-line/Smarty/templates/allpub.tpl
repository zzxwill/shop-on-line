<title>{$title}</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/links.js"></script>
<table width="400" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" height="25" align="center" valign="middle" class="first">全部公告</td>
  </tr>
{foreach key=key item=item from=$arr}
  <tr>
    <td width="70%" height="25" align="right" valign="middle" class="left">标题：<a href="#" onclick="return showme({$item.id},'showpub.php')">{$item.title}</a></td>
    <td width="30%" height="25" align="center" valign="middle" class="right">&nbsp;{$item.addtime}</td>
    </tr>
{/foreach}
</table>
