<?php
	if(!empty($_GET['uName'])&&!empty($_GET['uPswd'])){
		$v1=$_GET['uName'];
		$v2=$_GET['uPswd'];
		echo "v1=$v1 ,v2=$v2";
		echo "<hr/>";
		echo "<pre>";
		var_dump($_GET);
		echo "</pre>";
	}
?>
