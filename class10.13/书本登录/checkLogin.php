<?php
session_start();
include "lg_user.php";
if(isset($_POST['ok'])){
	//接收用户名和密码
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	//进行判断
	$rs=findUser($username,$password);
	if(!empty($rs)){
		$_SESSION['username']=$username;
		$_SESSION['islogin']=1;
		$_SESSION['userid']=$rs['userid'];;
		echo "<script>location.href='index.php';</script>";
	}else{
		echo "<script>alert('用户名或密码错误');</script>";
		echo "<script>location.href='login.php';</script>";
	}
}
?>