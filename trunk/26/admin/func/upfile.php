<?php

/*
 *�ж��ļ���׺
 *$f_type�������ļ��ĺ�׺����
 *$f_upfiles���ϴ��ļ���
 */
 
function f_postfix($f_type,$f_upfiles){
	$is_pass = false;
	$tmp_upfiles = split("\.",$f_upfiles);
	$tmp_num = count($tmp_upfiles);
	if(in_array(strtolower($tmp_upfiles[$tmp_num - 1]),$f_type))
		$is_pass = $tmp_upfiles[$tmp_num - 1];
	return $is_pass;
}
/*
 *	�ϴ�ͼƬ
 *	����$fileinfoΪ�ϴ�ͼƬ��Ϣ
 *	$default_pathΪĬ��ͼƬ����û���ϴ�ͼƬʱʹ��
 *	$picture_pathΪ�ϴ���ͼƬ��ַ��Ҫ���浽���ݿ��е�
 */
function uppic ($fileinfo){
	$p_type = array("jpg","jpeg","bmp","gif");
	$Root =$_SERVER['DOCUMENT_ROOT'].'/26/';
	$default_path = 'pics/null.jpg';
	$picture_path = 'pics/';
	$reback = false;
	if($fileinfo[size] > 0 and $fileinfo[size] < 700000){
		if(($postf = f_postfix($p_type,$fileinfo[name])) != false){
			$picture_path .= time().".".$postf;
			if($fileinfo[tmp_name]){
				move_uploaded_file($fileinfo[tmp_name],$Root.$picture_path);
				$reback = $picture_path;
			}
		}
	}else{
		$reback = $default_path;
	}
	return $reback;
}
?>