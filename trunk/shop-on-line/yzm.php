<?php
srand((double)microtime()*1000000);				//���������
$im=imagecreate(42,16);							//��������
$black=imagecolorallocate($im,0,0,0);			//���屳��
$white=imagecolorallocate($im,255,255,255);		//���屳��
$gray=imagecolorallocate($im,200,200,200);		//���屳��
imagefill($im,0,0,$gray);						//�����ɫ
for($i=0;$i<4;$i++){	//����4λ�����
 $str=mt_rand(1,3);		//��������ַ�����λ�õĵ�Y����
 $size=mt_rand(3,6);	//��������ַ�������
 $authnum=substr($_GET[num],$i,1);		//��ȡ���������д��ݵ���֤��
 imagestring($im,$size,(2+$i*10),$str,$authnum,imagecolorallocate($im,rand(0,130),rand(0,130),rand(0,130)));
} 						//ˮƽ����ַ���
for($i=0;$i<200;$i++){		//ִ��forѭ����Ϊ��֤�����ģ������
  $randcolor=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));	//��������
  imagesetpixel($im,rand()%70,rand()%30,$randcolor); 	//���Ƶ�һԪ��
}
imagepng($im);				//����pngͼ��
imagedestroy($im);			//����ͼ��
?>