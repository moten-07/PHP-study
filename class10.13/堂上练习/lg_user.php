<?php
include_once "comm.php";//引入公共方法集中的公共程序文件
/*
* 根据用户名和密码来查询用户信息
*/
function findUser($username,$password){
	$strQuery = "select * from lg_user where username = '$username' and password = '$password'"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs[0];
	}
	return $rs;
}
/*
* 根据行列数值来查询用户信息
*/

function findUserLimit($line,$row){
	$strQuery = "select * from lg_user limit $line,$row"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}
/*
* 查询全部用户信息
*/
function findAllUser(){
	$strQuery = "select * from lg_user"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}
/*
* 根据用户名查询用户信息
*/
function findUserByUserName($username){
	$strQuery = "select * from lg_user where userid = '$username'"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs[0];
	}
	return $rs;
}
/*
* 根据用户编号（id）查询用户信息
*/
function findUserByUserid($userid){
	$strQuery = "select * from lg_user where userid = $userid"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs[0];
	}
	return $rs;
}
/**
* 新增用户
*/
function addUser($username,$password,$email,$address,$telephone,$regdate){ 
//参数为对应数据库表的字段，其中userid不需要手动增加，因为它是自增的
	$insertStr = "insert into lg_user(username,password,email,address,telephone,regdate) values ('$username','$password','$email','$address','$telephone','$regdate')"; //SQL语句
	$rs = execUpdate($insertStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}
/*
* 修改用户
*/
function updateUser($userid,$username,$password,$email,$address,$telephone,$regdate){ //参数为对应数据库表的字段
	$updateStr = "update lg_user set username = '$username' , password = '$password',email = '$email', address = '$address' , telephone = '$telephone',regdate = '$regdate' where userid = $userid"; //SQL语句
	$rs = execUpdate($updateStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}
/*
* 删除用户
*/
function deleteUser($userid){ //根据用户编号删除用户
	$deleteStr = "delete from lg_user where userid = $userid";
	$rs = execUpdate($deleteStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}
?>