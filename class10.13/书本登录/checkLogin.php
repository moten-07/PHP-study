<?php
session_start();
include "lg_user.php";
if(isset($_POST['ok'])){
	//�����û���������
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	//�����ж�
	$rs=findUser($username,$password);
	if(!empty($rs)){
		$_SESSION['username']=$username;
		$_SESSION['islogin']=1;
		$_SESSION['userid']=$rs['userid'];;
		echo "<script>location.href='index.php';</script>";
	}else{
		echo "<script>alert('�û������������');</script>";
		echo "<script>location.href='login.php';</script>";
	}
}
?>