<?php
	header('Content-Type:text/html;charset=utf-8');
	$mysqli=new mysqli("localhost","root","","project5");
	$mysqli->query("set names utf8");
	if(mysqli_connect_errno()){
		echo "错误：".mysqli_connect_error();
		exit;
	}
	$sql="select id,title,addtime from news order by 'addtime' desc";
	$result=$mysqli->query($sql);
	// var_dump($result);
	$rows=$result->num_rows;
	$cols=$result->field_count;
	// echo "<br/>表中{$rows}行，{$cols}列<br/>";
	// $row=$result->fetch_row();
	// var_dump($row);
	$data=array();
	while($row=$result->fetch_assoc()){
		$data []=$row;
	}
	// echo "<pre>";
	// var_dump($data);
	// echo "</pre>";
	require 'news.html';
?>