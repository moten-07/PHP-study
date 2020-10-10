<?php
	$info=array(
		array('name'=>'王六','birthday'=>'1996-08-07','subject'=>'PHP','snum'=>'015042701'),
		array('name'=>'张三','birthday'=>'1995-12-23','subject'=>'PHP','snum'=>'015042702'),
		array('name'=>'赵二','birthday'=>'1996-01-09','subject'=>'PHP','snum'=>'015042703'),
		array('name'=>'孙五','birthday'=>'1995-05-04','subject'=>'PHP','snum'=>'015042704')
	);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>展示学生列表</title>
	</head>
	<style type="text/css">
		.list .crumbs{
			margin: 20px;
			font-size: 16px;
			color: #000;
		}
		.list table{
			width: 85%;
			margin: 0 auto;
			text-align: center;
		}
		.list table th{
			border: 1px solid #fdd1ae;
			height: 50px;
			font-size: 24px;
			color: #66ccff;
			background-color: #fdeada;
		}
		.list table td{
			border: 1px solid #fdd1ae;
			height: 40px;
			font-size: 16px;
			color: #444;
			background-color: #fdeada;
			padding-left: 10px;
		}
		.list table td a{
			font-size: 13px ;
			color: #66ccff;
			font-family: "microsoft yahei";
			text-decoration: none;
		}
		.list table td a:hover{color: #FA3818;text-decoration: underline;}
	</style>
	<body>
		<div class="list">
			<div class="crumbs">
				&gt;&gt;&nbsp;学生管理
				&nbsp;&gt;&gt;&nbsp;0427PHP就业班
				&nbsp;&gt;&gt;&nbsp;学生列表
			</div>
			<table>
				<tr>
					<th>学号</th>
					<th>姓名</th>
					<th>出生日期</th>
					<th>详情</th>
				</tr>
				<?php
					for($i=0;$i<count($info);$i++){
				?>
				<tr>
					<td>
						<?php
							echo $info[$i]['snum'];
						?>
					</td>
					<td>
						<?php
							echo $info[$i]['name'];
						?>
					</td>
					<td>
						<?php
							echo $info[$i]['birthday'];
						?>
					</td>
					<td>
						<a href="#">点击查看详情</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</body>
</html>