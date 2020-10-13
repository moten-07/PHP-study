<?php
session_start();
include "lg_user.php";

if(isset($_POST['ok'])){
	$username=$_POST['username'];
	$password=($_POST['password']);
	
	$rs=findUser2($username,$password);
	if(!empty($rs)){
		// $_SESSION['username']=$username;
		// $_SESSION['islogin']=1;
		// $_SESSION['userid']=$rs['userid'];;
		echo "ok!";
	}else{
		echo "<script>alert('用户名或密码错误');</script>";
		echo "<script>location.href='login2.html';</script>";
	}
	// var_dump($rs);
}
?>