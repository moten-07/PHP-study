<?php
	echo "<pre>";
	$info =['id'=>1,'name'=>'Jetso'];
	echo $info['name']."<br/>";
	$var='id';
	echo $info[$var]."<br/>";
	print_r($info);
	echo "<br/>";
	var_dump($info);
	echo "<hr/>";
	
	//php5.5+
	$arr=[];
	$arr[]='PHP';	//<=>$arr[0]="PHP";
	$arr[]="Java";
	$arr[5]="C#";
	$arr['sub']='android';
	$arr[]="HTML";	//<=>$arr[6="HTML";
	$arr[6]="JavaScript";//修改
	print_r($arr);
	echo "<hr/>";
	
	//删除
	$fruit=["apple","pear","peach"];
	//单删
	unset($fruit[0]);
	print_r($fruit);
	//删列
	unset($fruit);
	print_r($fruit);	//Notice:  Undefined variable: fruit
	
	echo "</pre>";
?>