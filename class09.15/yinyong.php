<?php
	function &f1($p1,$p2){
		static $result = 0 ;
		echo "<br/>result=$result";
		$h=$p1**2+$p2*$p2;
		$result=pow($h,0.5);
		return $result;
	}
	$v1=&f1(3,4);
	echo "<br/>v1=$v1";
	$v1++;
	$v2=&f1(3,4);
?>