<?php
	require "./Employee.class.php";
	$e1=new Employee("张三",25);
	// $e1=new Employee();
	// $e1->name="张三";//这样是不行的
	$e2=new Employee("李四",30);
	$e1->introduce();
	$e2->introduce();
?>