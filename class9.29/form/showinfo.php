<?php
	if(empty($_POST)){
		die('无数据提交。');
	}
	var_dump($_POST);
	echo "<h2>接受新用户注册</h2>";
	echo "<p>用户名：".$_POST['username']."</p>";
	echo "<p>密码：".$_POST['password']."</p>";
	echo "<p>性别：".$_POST['sex']."</p>";
	echo "<p>教育程度：".$_POST['study']."</p>";
	echo "<p>兴趣爱好：";
	$arr=$_POST['hobby'];
	foreach($arr as $result){
		echo $result."&emsp;";
	}
	echo "<p>血型：".$_POST['blood']."</p>";
	// echo "<p>IP地址：".$_SERVER['REMOTE_ADDR']."</p>";
?>