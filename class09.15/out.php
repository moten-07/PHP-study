<?php
	$f1=Abs(-3.14);
	$f2=floor(3.14);
	$f3=ceil(3.14);
	echo "$f1&emsp;$f2&emsp;$f3&emsp;<hr/>";
	for($i=1;$i<=9;++$i){
		$lis=(rand(0,9));
		echo $lis."<br/>";
	}
	echo "<hr/>";

	echo "<hr/>";
	for ($a=0;$a<10;$a++){
		if($a==4){
			die("error");
		}
		echo $a."&emsp;";
	}
?>