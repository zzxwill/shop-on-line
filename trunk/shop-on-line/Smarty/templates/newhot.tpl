<link rel="stylesheet" href="css/newhot.css" />
<link href="css/top.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/showcommo.js"></script>
<table id="__01" width="643" border="0" cellpadding="0" cellspacing="0" style=" border: 3px solid #f0f0f0;" >
	<tr>
		<td colspan="2" height="2"></td>
	</tr>
	<tr>
	  <td width="321" height="33" align="center" background="images/shop_07.gif"><div class="new"><a href="?page=nom" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	 </td>
	  <td width="322" height="33" align="right" background="images/shop_14.gif"><div class="hot"><a href="?page=hot" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	  &nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
	<tr>
	  <td align="center" valign="top" style="border-right: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr> {foreach key=nkey item=nitem from=$newarr}
          <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="{$nitem.pics}" width="100" height="80" alt="{$nitem.name}" style="border:1px solid #f0f0f0;" onclick="openshowcommo({$nitem.id})" /></a></td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle">{$nitem.name}</td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle">市场价：{$nitem.m_price}&nbsp;元</td>
                </tr>
                <tr>
                  <td height="16" align="center" valign="middle">会员价：{$nitem.v_price}&nbsp;元</td>
                </tr>
            </table></td>
          {if $nkey mod 2 != 0} </tr>
	    <tr> {/if}
	      {/foreach} </tr>
      </table></td>
        
		<td align="center" valign="top" style="border-left: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
          <tr> {foreach key=hkey item=hitem from=$hotarr}
            <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="{$hitem.pics}" width="100" height="80" alt="{$hitem.name}" style="border:1px solid #f0f0f0;" onclick="openshowcommo({$hitem.id})" /></a></td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle">{$hitem.name}</td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle">市场价：{$hitem.m_price}</td>
                  </tr>
                  <tr>
                    <td height="16" align="center" valign="middle">会员价：{$hitem.v_price}</td>
                  </tr>
              </table></td>
            {if $hkey mod 2 != 0} </tr>
		  <tr> {/if}
		    {/foreach} </tr>
        </table></td>
</tr>
</table>
