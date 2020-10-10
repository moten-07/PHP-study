<?php
	echo "<pre>";
	$arr2=array(5,15,3,4,9,11);
	$len=count($arr2);
	echo "<br />before :";
	print_r($arr2);
	for ($i=0;$i<$len-1;$i++){
		for ($j=0;$j<$len-1-$i;$j++){
			if($arr2[$j]>$arr2[$j+1]){
				$temp=$arr2[$j];
				$arr2[$j]=$arr2[$j+1];
				$arr2[$j+1]=$temp;
			}
		}
	}
	echo "<br />often :";
	print_r($arr2);
	echo "</pre>";
?>