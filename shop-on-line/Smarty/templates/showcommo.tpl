<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<title>{$title}</title>
<table width="540" border="0" cellspacing="0" cellpadding="0">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">ͼ����Ϣ</td>
    </tr>
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="{$arr.pics}" width="100" height="80" alt="{$arr.name}" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">ͼ�����ƣ�</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;{$arr.name}</td>
    <td width="100" height="25" align="center" valign="middle" class="center">ͼ�����</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;{$arr.class}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center"><!-- ͼ��Ʒ�� -->���ԣ�</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$arr.brand}</td>
    <td height="25" align="center" valign="middle" class="center"><!--ͼ���ͺ�-->ISBN��</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$arr.model}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center"><!--ͼ�����-->�����磺</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$arr.area}</td>
    <td height="25" align="center" valign="middle" class="center">ͼ���棺</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$arr.stocks}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">�г��۸�</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$arr.m_price}</td>
    <td height="25" align="center" valign="middle" class="center">��Ա�۸�</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$arr.v_price}</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">ͼ���飺</td>
    <td colspan="3" class="center">&nbsp;{$arr.info}</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="image" src="images/looks.JPG" value="" class="buy" onclick="return subbuycommo({$arr.id})" ></td>
  </tr>
</table>
