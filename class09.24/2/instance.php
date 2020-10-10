<?php
	//声明编码格式
	header('content-type:text/html;charset=utf-8');
	
	require "./Employee.class.php";
	require "./ManageEmployee.class.php";
	
	$e2=new ManageEmployee();
	$e2->_name='leader';
	$e2->_age=38;
	$e2->introduce();
?>