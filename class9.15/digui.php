<?php
	function f1(){
		static $i=1;
		echo "$i &ensp;";
		$i++;
		if ($i<100){
			f1();
		}
	}
	f1();
	
	function jiecheng($n){
		if($n==1){
			return 1;
		}
		$result=jiecheng($n-1)*$n;
		return $result;
	}
	$v1=jiecheng(6);
	echo "<br/>v1=$v1";
?>