<?php /* Smarty version 2.6.19, created on 2011-05-29 05:01:04
         compiled from modifycommo.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/modicommo.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="720" border="0" cellpadding="0" cellspacing="1">
<form id="modcommo" name="addcomm" enctype="multipart/form-data" method="post" action="modifycommo_chk.php"  onsubmit="return chkcommo(modcommo)">
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">�޸���Ʒ </td>
    </tr>
    <tr>
        <td height="25" class="left">��Ʒ���ƣ�</td>
        <td width="618" class="right">
        	<input id="name" type="text" name="name" size="25" value="<?php echo $this->_tpl_vars['mcarr'][0]; ?>
" class="txt" readonly="readonly">
            <font color="#FF0000">*</font>		</td>
    </tr>
    <tr>
        <td height="25" class="left">��ƷͼƬ��</td>
        <td height="25" class="right">
	        <input id="pics" type="file" name="pics" class="langtxt">
            <input id="picss" name="picss" type="hidden" value="<?php echo $this->_tpl_vars['mcarr'][1]; ?>
">
            </td>
    </tr>
	<tr>
        <td height="25" class="left">��Ʒ���أ�</td>
        <td height="25" class="right">
        	<input id="area" name="area" type="text" value="<?php echo $this->_tpl_vars['mcarr'][2]; ?>
" class="txt">
            <font color="#FF0000">*</font>		</td>
	</tr>
    <tr>
        <td height="25" class="left">��Ʒ�ͺţ�</td>
        <td height="25" class="right">
        	<input id="model" name="model" type="text" value="<?php echo $this->_tpl_vars['mcarr'][3]; ?>
" class="txt">
            <font color="#FF0000">*</font>        </td>
    </tr>
    <tr>
        <td height="25" class="left">��Ʒ���</td>
      <td height="25" align="left" valign="top" class="right">
      <iframe id="menu1" name="menu1" src="menu.php" width="300" height="22" frameborder="0" scrolling="no" style=" margin-top:0px; margin-left: 0px; top:0px;"></iframe>
      <input id="stype" name="stype" type="hidden" value="<?php echo $this->_tpl_vars['mcarr'][4]; ?>
" />
         </td>
    </tr>
    <tr>
        <td height="22" class="left">��ƷƷ�ƣ�</td>
        <td height="22" class="right">
        	<input id="brand" name="brand" type="text" value="<?php echo $this->_tpl_vars['mcarr'][5]; ?>
" class="txt">        </td>
    </tr>
    <tr>
        <td height="25" class="left">��Ʒ������</td>
        <td height="25" class="right">
        	<input id="stocks" name="stocks" type="text" value="<?php echo $this->_tpl_vars['mcarr'][6]; ?>
" class="txt">
            <font color="#FF0000">*</font>        </td>
	</tr>
    <tr>
    	<td height="25" class="left">�г��۸�</td>
    	<td height="25" class="right">
    		<input id="m_price" name="m_price" type="text" class="shorttxt" value="<?php echo $this->_tpl_vars['mcarr'][7]; ?>
" onkeyup="cvp(modcommo)">&nbsp;Ԫ
            <font color="#FF0000">*</font>        </td>
    </tr>
	<tr>
        <td height="25" class="left">�����ʣ�</td>
        <td height="25" class="right">
        	<input id="fold" name="fold" type="text" value="<?php echo $this->_tpl_vars['mcarr'][8]; ?>
"  class="shorttxt" onkeyup="cvp(modcommo)">&nbsp;��
            <font color="#FF0000">*</font>        </td>
	</tr>
    <tr>
    	<td height="25" class="left">��Ա�۸�</td>
    	<td height="25" class="right"><div id="v_price">&nbsp;<?php echo $this->_tpl_vars['mcarr'][9]; ?>
Ԫ</div></td>
    </tr>
    <tr>
        <td height="25" class="left">�Ƿ���Ʒ��</td>
        <td height="25" class="right">
          <select id="isnew" name="isnew" class="shorttxt" >
            <option value="1" <?php if ($this->_tpl_vars['mcarr'][10] == '1'): ?>selected<?php endif; ?>>��</option>
            <option value="0" <?php if ($this->_tpl_vars['mcarr'][10] == '0'): ?>selected<?php endif; ?>>��</option>
          </select>		</td>
	</tr>
    <tr>
        <td height="25" class="left">�Ƿ��Ƽ���</td>
        <td height="25" class="right">
        <select id="isnom" name="isnom" class="shorttxt" >
        <option value="1" <?php if ($this->_tpl_vars['mcarr'][11] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="0" <?php if ($this->_tpl_vars['mcarr'][11] == '0'): ?>selected<?php endif; ?>>��</option>
        </select>        </td>
    </tr>
    <tr>
        <td height="25" class="left">���ʱ�䣺</td>
        <td height="25" class="right"><div id="dt"><?php echo $this->_tpl_vars['mcarr'][12]; ?>
</div></td>
      </tr>
	<tr>
    	<td height="80" class="left">��Ʒ��飺</td>
    	<td height="25" class="right"><textarea id="info" name="info" cols="80" rows="8"><?php echo $this->_tpl_vars['mcarr'][13]; ?>
</textarea></td>
    </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="mod" name="mod" type="submit" class="btn" value="�޸�"><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
    &nbsp;&nbsp;<input id="reset" name="reset" type="reset" value="��д" class="btn"></td>
    </tr>
	</form>
</table>