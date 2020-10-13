<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>系统登录处理页</title>
	</head>
	<body>
		<?php
			if($_POST["txt_username"]!="" && $_POST["txt_pwd"]!=""){
				$name=$_POST["txt_username"];
				$pass=$_POST["txt_pwd"];
				$mysqli=new mysqli("localhost","root","","lg_shop");
				
				$str="select * from lg_admin where name='$name' and password = '$pass'";
				
				$result=$mysqli->query($str);
				$rows=$result->num_rows;
				if($rows>0){
					session_start();
					// $_SESION['user']=$_POST['txt_username'];
					// echo "<script>window.location='main.php';</script>";
					echo "正确，界面开发中……";
				}else{
					echo "<script>alert('用户名或密码错误！');</script>";
				}
			}else{
				print "没有接收到数据";
			}
		?>
	</body>
</html>
