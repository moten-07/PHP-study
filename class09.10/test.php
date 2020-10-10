<?php
	$v1=1;
	$v2=null;
	echo $v1;
	if(isset($v1)){//判断变量是否存在
	
		echo "<br/>v1存在";
	}
	if(isset($v2)){
	
		echo "<br/>v2存在";
	}else{
		echo "<br/>v2不存在";
	}
	// empty()//空
	//值传递
	$v1=100;
	$v2=$v1;
	$v3=$v1+10;
	$v2++;
	echo "<br/>v1=$v1,v2=$v2,v3=$v3";
?>