<title>{$title}</title>
<link rel="stylesheet" href="../../css/table.css" />
<link rel="stylesheet" href="css/table.css" />
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">订单查看 </td>
  </tr>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">订单号：</td>
    <td height="25" align="left" valign="middle" class="right">{$formarr.formid}</td>
    <td height="25" align="center" valign="middle" class="right">订单时间：</td>
    <td height="25" align="left" valign="middle" class="right">{$formarr.formtime}</td>
  </tr>
  
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">下单人：</td>
    <td width="125" height="25" class="center">{$formarr.vendee}</td>
    <td width="75" height="25" align="center" valign="middle" class="center">收货人：</td>
    <td width="125" height="25" class="right">{$formarr.taker}</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">邮编：</td>
    <td width="125" height="25" align="left" class="center">{$formarr.code}</td>
    <td width="75" height="25" align="center" valign="middle" class="center">电话：</td>
    <td width="125" height="25" align="left" class="right">{$formarr.tel}</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">地址：</td>
    <td height="25" colspan="3" align="left" class="right">{$formarr.address}</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">送货方式：</td>
    <td width="125" height="25" align="left" class="center">{$formarr.del_method}</td>
    <td width="75" height="25" align="center" valign="middle" class="center">付款方式：</td>
    <td width="125" height="25" align="left" class="right">{$formarr.pay_method}</td>
  </tr>
</table>



<p>&nbsp;</p>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="5" align="center" valign="middle" class="first">订单内容</td>
  </tr>
  <tr>
    <td width="100" height="25" align="center" valign="middle" class="left">商品名</td>
    <td width="100" height="25" align="center" valign="middle" class="center">数量</td>
    <td width="100" height="25" align="center" valign="middle" class="center">价格</td>
    <td width="100" height="25" align="center" valign="middle" class="center">价格折率</td>
    <td width="100" height="25" align="center" valign="middle" class="right">合计</td>
  </tr>
  <tr>
{foreach key=key item=item from=$commname}
    <td height="25" align="center" valign="middle" class="left">{$item}</td>
    <td height="25" align="center" valign="middle" class="center">{$commnumber[$key]}</td>
    <td height="25" align="center" valign="middle" class="center">{$commagoprice[$key]}&nbsp;元</td>
    <td align="center" valign="middle" class="center">{$commfold[$key]}&nbsp;折</td>
    <td align="center" valign="middle" class="right">{$commagoprice[$key]*$commnumber[$key]}&nbsp;元</td>
  </tr>
{/foreach}
<tr>
	<td colspan="5" height="25" align="right" valign="middle">总消费：{$formarr.total}&nbsp;元</td>
</tr>
</table>
<p>&nbsp;</p>
