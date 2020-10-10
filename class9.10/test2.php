<?php
	$v1=100;
	$v2=$v1;//值传递
	$v3=$v1+10;
	$v2++;
	echo "<br/>v1=$v1,v2=$v2,v3=$v3";
	
	echo "<hr/>";
	$v1a=100;
	$v2a=&$v1a;//引用
	$v2a++;
	echo "<br/>v1a=$v1a,v2a=$v2a<br/>";
	
	//可变变量
	$v1b='abc';
	$abc=1000;
	echo $$v1b,"<hr/>";
	
	//常量
	define("EMALL","2172850870@qq.com",true);//名称、值、是否忽略大小写（默认false）
	echo EMALL,"<br/>", emall;
	
	//运算符
		//算术
		echo "<hr/>",1-2*3/4+7%6;
		
		//赋值：+=、-=、*=、/=
		
		//. 串联
		echo '<hr/>豹子头'.'林冲<hr/>';
		
		//比较
		$x=123;
		$y='123';
		echo $x==$y,"<br/>";
		if($x===$y){//全等于
			echo '1';
		}else{
			echo '0';
		} 
		
		//逻辑：与：&&/and、或：or/||、非：！、异或：xor
?>