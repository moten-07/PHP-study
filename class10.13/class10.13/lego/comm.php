<?php
include_once("config.php");//���������ļ�
/*
* ����������
*/
function get_Connect(){
	$connection = mysqli_connect($GLOBALS["cfg"]["server"]["adds"],$GLOBALS["cfg"]["server"]["db_user"],$GLOBALS["cfg"]["server"]["db_psw"]) or die (header("location: ./error.php?msg=���ݿ��������������"));
	$db = mysqli_select_db($connection,$GLOBALS["cfg"]["server"]["db_name"]) or die (header("http://localhost:80/bookstore/error.php?msg=���ݿ�������ȷ"));
	mysqli_query($connection,"set names gb2312");
	return $connection;
}

/**
* ִ�в�ѯ����
*/
function execQuery($strQuery){
	$results = array();
	$connection = get_Connect();
	$rs = mysqli_query($connection,$strQuery) or  die("��ѯʧ��");// die (header("http://localhost:80/bookstore/error.php?msg=��ѯʧ��"));
	for($i=0;$i<mysqli_num_rows($rs);$i++){
		$results[$i] = mysqli_fetch_assoc($rs);//��ȡһ����¼
	}
	mysqli_free_result($rs);//�ͷŽ����
	mysqli_close($connection);//�ر�����
	return $results;//���ز�ѯ���
}
/**
* �����ݱ��¼ִ���޸ġ�ɾ���Ͳ������ header("location: ./error.php?msg=���ݱ����ʧ��")
* @param <type> $strUpdate  sql���
*/
function execUpdate($strUpdate){
	$connection = get_Connect();
	//ִ��SQL���
	$rs = mysqli_query($connection,$strUpdate) or die (header("http://localhost:80/bookstore/error.php?msg=���ݱ����ʧ��"));
	$result = mysqli_affected_rows($connection);
	mysqli_close($connection);
	return $result;
}
?>