<?php
	$arr=array(3,5,8,41,54,5);
	$max=$arr[0];
	$len=count($arr);
	echo "arr:&ensp;";
	for($i=0;$i<$len;$i++){
		if($arr[$i]>$max){
			$max=$arr[$i];
		}
		echo $arr[$i]."&ensp;";
	}
	echo "<br/>the arr's max = $max";
	
	$arr2=array(
		array(5,6,3),
		array(4,5,9),
		array(8,5,6,5),
	);
	
	$max=$arr2[0][0];
	$len1=count($arr2);
	echo "<hr/>arr2:&ensp;";
	for($i=0;$i<$len1;$i++){
		$len2=count($arr2[$i]);
		for($j=0;$j<$len2;$j++){
			if($arr2[$i][$j]>$max){
				$max=$arr2[$i][$j];
			}
			echo $arr2[$i][$j]."&ensp;";
		}
		echo "<br/>";
	}
	echo "<br/>the arr2's max = $max";
?>