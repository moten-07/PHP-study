<?php
	function getArea($r,$PI=3.14){
		$result=$PI*pow($r,2);
		$r++;
		return $result;
	}
	$m1 = 4;
	$a1 =getArea($m1);
	
	function getArea2(&$r,$PI=3.14){//引用
		$result=$PI*pow($r,2);
		$r++;
		return $result;
	}
	$m2 = 4;
	$a2 =getArea2($m2,3.1415926);
	
	echo "<br/>a1=$a1&emsp;a2=$a2 <br/>m1=$m1&emsp;&emsp;&ensp;m2=$m2 <hr/>";
	
?>