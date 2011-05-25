<title>{$title}</title>
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="../../css/table.css" rel="stylesheet" type="text/css">
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/shwform.js"></script>
<table width="665" border="0" align="left" cellpadding="0" cellspacing="0">
  <form id="shwfrm" name="shwfrm" method="post" action"#">
    <tr>
      <td width="40" height="25" align="center" valign="middle" class="first">删除</td>
      <td width="75" height="25" align="center" valign="middle" class="first">订单号</td>
      <td width="75" height="25" align="center" valign="middle" class="first">购买用户</td>
      <td width="75" height="25" align="center" valign="middle" class="first">接收人</td>
      <td width="75" height="25" align="center" valign="middle" class="first">消费金额</td>
      <td width="75" height="25" align="center" valign="middle" class="first">付款方式</td>
      <td width="75" height="25" align="center" valign="middle" class="first">送货方式</td>
      <td width="75" height="25" align="center" valign="middle" class="first">订单状态</td>
      <td width="50" height="25" align="center" valign="middle" class="first">查看</td>
      <td width="50" height="25" align="center" valign="middle" class="first">处理</td>
    </tr>
    {foreach key=key item=item from=$formarr}
    <tr>
      <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" class="left" value="{$item.id}" /></td>
      <td height="25" align="center" valign="middle" class="center">{$item.formid}</td>
      <td height="25" align="center" valign="middle" class="center">{$item.vendee}</td>
      <td height="25" align="center" valign="middle" class="center">{$item.taker}</td>
      <td height="25" align="center" valign="middle" class="center">{$item.total}</td>
      <td height="25" align="center" valign="middle" class="center">{$item.pay_method}</td>
      <td height="25" align="center" valign="middle" class="center">{$item.del_method}</td>
      <td height="25" align="center" valign="middle" class="center">{if $item.state == 0}未处理{elseif $item.state == 1}已收款{elseif $item.state == 2}已发货{elseif $item.state == 3}已收货{/if}</td>
      <td height="25" align="center" valign="middle" class="right"><input id="lookform" name="lookform[]" type="button" class="btn" value="查看" style="border-color:#ffffff; cursor:hand;" onclick="showforminfo({$item.id})" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="deal" name="deal" type="button" value="请求处理" class="btn" style="border-color:#ffffff; width:100px; cursor: hand;" onclick="showme({$item.formid})" /></td>
    </tr>
    {/foreach}
    <tr>
      <td height="30" colspan="10" align="center" valign="middle"><a href="#" onclick="return alldel(shwfrm);">全选</a> <a href="#" onclick="return overdel(shwfrm);">反选</a>&nbsp;&nbsp;
          <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onclick = 'return del(shwfrm)' />      </td>
    </tr>
	  </form>
    <tr>
      <td height="30" colspan="10" align="left" valign="middle"><div id="chdl" style="display:none;">
  <table width="525" border="0" align="center" cellpadding="0" cellspacing="0">
    <form id="changedeal" name="changedeal" method="post">
      <tr>
        <td height="25" colspan="6" align="center" valign="middle" class="first">订单处理</td>
      </tr>
      <tr>
        <td width="75" height="25" align="center" valign="middle" class="left">订单号：</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><div id="formid">&nbsp;</div></td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="acceptmon" name="acceptsend" type="radio" value="1" checked="checked" />已收款</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="sendwa" name="acceptsend" type="radio" value="2" />已发货</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="acceptwa" name="acceptsend" type="radio" value="3" />已收货</td>
        <td width="50" height="25" align="center" valign="middle" class="right"><input id="chg" name="chg" type="button" class="btn" value="修改" style="border-color:#FFFFFF;" onclick="return changeme(changedeal)" /></td>
      </tr>
    </form>
  </table>
</div>
</td>
    </tr>

</table>
