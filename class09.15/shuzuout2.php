<?php
	$arr1 = array(3,8=>5,'ddl'=>6,2,11=>9,4);
	$max=reset($arr1);
	foreach($arr1 as $k=>$v){
		if ($v>$max){
			$max=$v;
		}
		
	}echo "max is $max";
?>