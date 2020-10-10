<?php
	function Sum1($a,$b){
		$result=$a+$b;
		return $result;
	}
	echo Sum1(200,50);
	
	echo "<br/>";
	
	function Sum2($a,$b="50"){
		$result=$a+$b;
		return "$result &emsp;";
	}
	echo Sum2(200);
	echo sum2(100,150);
	
	echo "<hr/>";
	
	$var=100;
	$str='php';
	function test(){
		global $var;
		echo "全局变量：$var";
		echo "<br/>2:".$GLOBALS['str']."<br/>";
	}
	test();
	
	function test2(){
		echo "wdnmd";
	}
	$funcname='test2';
	echo $funcname();
?>