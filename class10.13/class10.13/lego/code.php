<?php
session_start();   //����session
/*  ����һ��4λ�����  */
$str="abcdefghijklmnopqrstuvwxyz0123456789";
for($i=0;$i<4;$i++){
	$num.=substr($str,rand(0,29),1);
}
$_SESSION['identifying']=$num;   //����������浽session��
$img=imagecreate(60,20);    //����һ��60*20��ͼ��
$white=ImageColorAllocate($img,255,255,255);  //����ͼ��ı���ɫΪ��ɫ
$blue=ImageColorAllocate($img,0,0,255);   //����ͼ�����ı���ɫΪ��ɫ
/*  �������ɫ��ͬ��*����ӵ�ͼ����  */
for($i=1;$i<200;$i++){
	$x=rand(1,60-9);
	$y=rand(1,20-6);
	$color=imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
	imagechar($img,1,$x,$y,"*",$color);
}
/*  ��4λ�������ӵ�ͼ���У���ӵ�λ�ò��̶�  */
$strx=rand(3,8);
for($i=0;$i<4;$i++){
	$strpos=rand(1,6);
	imagestring($img,5,$strx,$strpos,substr($num,$i,1),$blue);
	$strx+=rand(8,12);
}
header ("Content-type: image/jpg");  //�������ͼ��ĸ�ʽ
ob_clean();//�ؼ����룬��ֹ����'ͼ�����䱾���д��޷���ʾ'������
imagegif($img);   //���ͼ��
?>
