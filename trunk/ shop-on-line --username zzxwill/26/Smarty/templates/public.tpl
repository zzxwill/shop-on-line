<link rel="stylesheet" href="css/pub.css" />
<script language="javascript" src="js/links.js"></script>
<table width="210" height="193" border="0" cellpadding="0" cellspacing="0" background="images/shop_06.gif">
	<tr>
		<td height="35" width="17"></td>
        <td width="193" align="left" valign="top" class="exam"></td>
  </tr>
  	<tr>
		<td height="21" width="17"></td>
        <td width="193" align="left" valign="top" class="exam">
         {foreach key=key item=item from=$arr}
         	<a href="#" class="lk" onclick="return showme({$key},'showpub.php');" ><img src="images/man.JPG" width="14" height="11" border="0" />{$item}</a><br />
         {/foreach}
      </td>
  </tr>
  <tr>
		<td height="20" width="17"></td>
        <td width="193" align="left" valign="bottom" class="exam"><a href="?page=allpub" class="lk">>>more<<</a></td>
  </tr>
</table>
