<?php
	$fruit=["apple","pear","peach"];
	foreach ($fruit as $key=>$value){
		echo $key."---".$value."&emsp;";
	}
	echo "<hr/>";
	foreach($fruit as $v){
		echo $v."&emsp;";
	}
	echo "<hr/>";
	
	$info =['id'=>1,'name'=>'Jetso'];
	foreach ($info as $key=>$value){
		echo $key."---".$value."&emsp;";
	}
	echo "<hr/>";
	
	//字符串处理函数explode:字符串分割
	echo "<pre>";
	var_dump(explode('n',"banana"));
	echo "</pre>";
	echo "<hr/>";
	
	$tel=[110,120,119];		
	echo in_array(120,$tel,true)?'Got it!':'not found!';
	echo "<br/>";
	echo in_array('120',$tel,true)?'Got it!':'not found!';
	echo "<br/>";
	echo in_array(120,$tel)?'Got it!':'not found!';
	echo "<br/>";
	echo in_array('120',$tel)?'Got it!':'not found!';//+true详细到数据类型
	echo "<hr/>";
	
	
?>