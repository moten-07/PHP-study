<?php
	//索引数组
	$color=array("red","blue","66ccff");
	print_r($color);	//用于输出数组
	echo "<br/>".$color[1]."<hr/>";
	echo "<pre>";
	var_dump ($color);	//顺便输出类型
	
	print "<hr/>";
	//关联数组（类似Python的字典）
	$fruit=array('2'=>"apple",'5'=>"orage");
	var_dump($fruit);
	$card=array("id"=>"zs","n"=>"jetso");
	var_dump($card);
	print "<hr/>";
	
	//空数组、混合型数组
	$empty=array();
	var_dump($empty);
	print "<hr/>";
	$mixed=array(0,'str',true,array(1,2));
	var_dump($mixed);
	print "<hr/>";
	$data=array('name'=>"zhangsan",12345);
	var_dump($data);
	print "<hr/>";
	$list=array(5=>'a','id'=>'b',456);
	var_dump($list);
	echo "<br/>".$mixed[3][1];
	print "<hr/>";
	
	//PHP5.5+的新写法
	$color2=['red','blue'];
	$fruit2=['a'=>'apple','b'=>'grape'];
	echo $fruit2['a']."<br/>";
	$number=[[1,2],[3,4]];
	var_dump($color2);
	print "<hr/>";
	var_dump($fruit2);
	print "<hr/>";
	var_dump($number);
	print "<hr/>";
	
	echo "</pre >";
?>