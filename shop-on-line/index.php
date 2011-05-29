<?php 
session_start(); 
/*引进字符设置*/
include_once 'inc/char.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" href="css/style.css" />
<title>网上书店</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<body>
<center>
<table width="850" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><?php include_once 'top.php'; ?></td>
  </tr>
  <tr>
    <td width="216" align="left" valign="top">
	<?php
		include_once 'login.php'; 
		include_once 'public.php';
    	include_once 'links.php'; 
	?>
    </td>
    <td width="634" height="700" align="center" valign="top">
    <?php 
			include_once 'search.php';
	?>
	<?php
    switch($_GET["page"]){
	  case "":
	    include_once 'nominate.php';
		include_once 'newhot.php';
		break;
	  case "hyzx":
	  	include_once "member.php";
	  	break;
	  case 'allpub':
	    include_once 'allpub.php';
		break;
	  case 'nom':
	    include_once 'allnom.php';
		break;
	  case 'new':
	    include_once 'allnew.php';
		break;
	  case 'hot':
	    include_once 'allhot.php';
		break;
	  case 'shopcar':
	    include_once 'myshopcar.php';
		break;
	  case 'settle':
	    include_once 'settle.php';
		break;
	  case 'queryform':
	    include_once 'queryform.php';
		break;
	  default:
	    include_once 'nominate.php';
		include_once 'newhot.php';
	}
	?></td>
  </tr>
</table>
<table width="850" border="0" cellspacing="0" cellpadding="0">
	<tr>
    	<td><?php include_once 'buttom.html'; ?></td>
    </tr>
</table>
</center>
</body>
</html>
