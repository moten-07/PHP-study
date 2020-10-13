<?php
	$host="127.0.0.1";//MySQL服务器地址
	$usename="root";
	$password="";
	if($connID=mysqli_connect($host,$usename,$password)){
		echo "OK!";
	}else{
		echo "ON!";
	}
	
?>