<?php
	$cars=array("BMW","BYD","HQ");
	for($i=0;$i<count($cars);$i++){
		echo $cars[$i]."&emsp;";
	}
	$cars[3]="bt";
	echo "<br/>";
	$liangshan=array("1"=>"晁盖","2"=>"公孙胜","3"=>"卢俊义");
	foreach($liangshan as $k=>$v){
		echo "排位：$k 姓名：$v";
	}
	
	
?>