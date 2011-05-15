<title>{$title}</title>
<link rel="stylesheet" href="css/nominate.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" align="left" valign="middle" background="images/shop_07.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle">
   {foreach key=key item=item from=$nomarr}
   
    <table width="636" height="134" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td width="145" rowspan="5" align="center" valign="middle"><img src="{$item.pics}" width="90" height="100" alt="{$item.name}" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">商品名称：{$item.name}</td>
            <td width="156" height="35">商品类别：{$item.class}</td>
    	    <td width="157">商品型号：{$item.model}</td>
    	</tr>
    	<tr>
    	  <td height="23">商品品牌：{$item.brand}</td>
  	      <td height="23" colspan="2">商品产地：{$item.area}</td>
    	</tr>
    	<tr>
    	  <td width="178" height="23">剩余数量：{$item.stocks}</td>
  	      <td colspan="2">销售数量：{$item.sell}</td>
    	</tr>
    	<tr>
    	  <td height="23">市场价：<font color="red">{$item.m_price}&nbsp;元</font></td>
  	      <td height="23" colspan="2">上市日期：{$item.addtime}</td>
    	</tr>
    	<tr>
    	  <td height="30">会员价格：<font color="#FF0000">{$item.v_price}&nbsp;元</font></td>
  	      <td height="30" colspan="2" align="center" valign="middle"><input id="allshow" name="allshow" type="button" value="" class="showinfo" onclick="openshowcommo({$item.id})"  />  &nbsp;<input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo({$item.id})" /></td>
    	</tr>
    </table>
    <hr style="border: 1px solid #f0f0f0;" />
    {/foreach}
	
    </td>
  </tr>
  <tr>
  	<td height="25">&nbsp;</td>
  </tr>
</table>
