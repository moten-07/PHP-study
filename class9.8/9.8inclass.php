<?php
	//定义变量保存学生资料
	$name='张三';			//student's name
	$birth='1997-09-08';	//student's birth
	$snum='0354320';		//student's sno
	$subject='PHP';			//student's subject
?>
<!DOCTYPE html>
<html>
	<head>
		<title>我是谁？</title>
		<style>
			.zs{
				border: 2px solid #FCD5B5;
				background-color: #FDEADA;
				float: left;
				line-height: 40px;
				margin: 20px;
				position: relative;
			}
			.zs table{
				margin: 20px 65px 40px 65px;
			}
			.zs table th{
				border-bottom-style: 2px dotted #fac090;
				padding-bottom: 5px;
			}
			.icon-top{
				width: 40px;
				height: 60px;
				position: absolute;
				top: 0;
				margin:-20px;
				background: url('../images/icon_top.png');
				background-size:100% auto;
			}
			.icon-bottom{
				width:80px;
				height:40px;
				position:absolute;
				right:0;
				bottom:0;
				background:url('../images/icon_bottom.png');
				background-size:100% auto;
			}
			.detial table td:nth-child(1){min-width:85px;}
		</style>
		<body>
			<div class="zs">
				<table>
					<tr>
						<th colspan="3">展示资料</th>
					</tr>
					<tr>
						<td>姓名</td>
						<td><?php echo $name;?></td>
					</tr>
					<tr>
						<td>出生日期</td>
						<td><?php echo $birth;?></td>
					</tr>
					<tr>
						<td>学科</td>
						<td><?php echo $subject;?></td>
					</tr>
					<tr>
						<td>学号</td>
						<td><?php echo $snum;?></td>
					</tr>
				</table>
				<div class="icon-top"></div>
				<div class="icon-bottom"></div>
			</div>
		</body>
	</head>
</html>