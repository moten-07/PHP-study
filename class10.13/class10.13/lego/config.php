<?php
/*
* ��ʼ����
*/
//���ݿ��������������
$cfg["server"]["adds"]="localhost";
$cfg["server"]["db_user"]="root";
$cfg["server"]["db_psw"]="";
$cfg["server"]["db_name"]="lg_shop";
$cfg["server"]["page_size"]=20;
/**
*��̳��������
* @param <type> $errno ������
* @param <type> $errstr ������Ϣ
*/
function bbsError($errno,$errstr){
	//ʹ��header������������Ϣת����������ʾҳ��
	die(header("location: ./error.php?msg=$errstr"));	
}
//���ô��󲶻���
set_error_handler("bbsError",E_ERROR);
?>
