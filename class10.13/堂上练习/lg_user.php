<?php
include_once "comm.php";//���빫���������еĹ��������ļ�
/*
* �����û�������������ѯ�û���Ϣ
*/
function findUser($username,$password){
	$strQuery = "select * from lg_user where username = '$username' and password = '$password'"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs[0];
	}
	return $rs;
}
/*
* ����������ֵ����ѯ�û���Ϣ
*/

function findUserLimit($line,$row){
	$strQuery = "select * from lg_user limit $line,$row"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}
/*
* ��ѯȫ���û���Ϣ
*/
function findAllUser(){
	$strQuery = "select * from lg_user"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}
/*
* �����û�����ѯ�û���Ϣ
*/
function findUserByUserName($username){
	$strQuery = "select * from lg_user where userid = '$username'"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs[0];
	}
	return $rs;
}
/*
* �����û���ţ�id����ѯ�û���Ϣ
*/
function findUserByUserid($userid){
	$strQuery = "select * from lg_user where userid = $userid"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs[0];
	}
	return $rs;
}
/**
* �����û�
*/
function addUser($username,$password,$email,$address,$telephone,$regdate){ 
//����Ϊ��Ӧ���ݿ����ֶΣ�����userid����Ҫ�ֶ����ӣ���Ϊ����������
	$insertStr = "insert into lg_user(username,password,email,address,telephone,regdate) values ('$username','$password','$email','$address','$telephone','$regdate')"; //SQL���
	$rs = execUpdate($insertStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}
/*
* �޸��û�
*/
function updateUser($userid,$username,$password,$email,$address,$telephone,$regdate){ //����Ϊ��Ӧ���ݿ����ֶ�
	$updateStr = "update lg_user set username = '$username' , password = '$password',email = '$email', address = '$address' , telephone = '$telephone',regdate = '$regdate' where userid = $userid"; //SQL���
	$rs = execUpdate($updateStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}
/*
* ɾ���û�
*/
function deleteUser($userid){ //�����û����ɾ���û�
	$deleteStr = "delete from lg_user where userid = $userid";
	$rs = execUpdate($deleteStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}
?>