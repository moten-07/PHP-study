<?php
	for($i=1;$i<=9;++$i){
		for($j=1;$j<=$i;++$j){
			if ($i==5){
				break 2;		//终止外层循环
			}
			echo "&nbsp;&nbsp;$i X $j = ".$i*$j;
		}
		echo "<br/>";
	}
	echo "<hr/>";
	for($i=1;$i<=9;++$i){
		for($j=1;$j<=$i;++$j){
			if ($i==5){
				break 1;		//终止最内层循环
			}
			echo "&nbsp;&nbsp;$i X $j = ".$i*$j;
		}
		echo "<br/>";
	}
	echo "<hr/>";
	for($i=1;$i<=9;++$i){
		for($j=1;$j<=$i;++$j){
			if ($i==5){
				continue 1;		//跳过最内层循环
			}
			echo "&nbsp;&nbsp;$i X $j = ".$i*$j;
		}
		echo "<br/>";
	}
?>