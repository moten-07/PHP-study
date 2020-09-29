<?php
	require './page.php';
	$info=array(
		array('name'=>'王六','brith'=>'1996-08-07','subject'=>'php','snum'=>'0150427001'),
		array('name'=>'张三','brith'=>'1995-12-23','subject'=>'php','snum'=>'0150427002'),
		array('name'=>'赵二','brith'=>'1996-01-09','subject'=>'php','snum'=>'0150427003'),
		array('name'=>'孙四','brith'=>'1995-05-04','subject'=>'php','snum'=>'0150427004'),
		array('name'=>'钱一','brith'=>'1996-06-24','subject'=>'php','snum'=>'0150427005'),
		array('name'=>'郑七','brith'=>'1995-10-10','subject'=>'php','snum'=>'0150427006'),
		array('name'=>'白三','brith'=>'1996-12-28','subject'=>'php','snum'=>'0150427007'),
		array('name'=>'李四','brith'=>'1995-11-01','subject'=>'php','snum'=>'0150427008'),
		array('name'=>'陆八','brith'=>'1996-02-02','subject'=>'php','snum'=>'0150427009'),
		array('name'=>'刘六','brith'=>'1995-03-08','subject'=>'php','snum'=>'0150427010'),
		array('name'=>'谭九','brith'=>'1996-06-01','subject'=>'php','snum'=>'0150427011'),
		array('name'=>'韩十','brith'=>'1995-07-09','subject'=>'php','snum'=>'0150427012'),
		array('name'=>'史二','brith'=>'1996-11-11','subject'=>'php','snum'=>'0150427013')
	);
	
	//总记录数
	$total_num=count($info);
	//每页显示的条数
	$perpage=4;
	
	//获取当前页
	$page=isset($_GET['page']) ? (int)$_GET['page'] : 1;
	// 获取总页数
	$total_page=ceil($total_num/$perpage);
	
	// 对获取页数进行合理性判断
	// 1、判断当前页是否小于1
	$page=max($page,1);
	// 2、判断当前页码数是否大于总页数
	$page=min($page,$total_page);
	
	//获取遍历学生数组时，每页开始的坐标值
	$start_index=$perpage * ($page-1);
	//获取遍历学生数组时，每页最大的坐标值
	$end_index=$perpage * $page-1;
	//防止计算结果超过最大记录数
	$end_index=min($end_index,$total_num-1);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>展示学生列表</title>
	</head>
	<link type="text/css" rel="stylesheet" href="style.css" />
	<body>
		<div class="list">
			<div class="crumbs">
				&gt;&gt;&nbsp;学生管理&nbsp;&gt;&gt;&nbsp;0427PHP就业班&nbsp;&gt;&gt;&nbsp;学生列表
			</div>
			<table>
				<tr> <th>学号</th> <th>姓名</th> <th>出生日期</th> <th>详情</th> </tr>
				<?php for($i=$start_index;$i<=$end_index;$i++): ?>
				<tr>
					<td><?php echo $info[$i]['snum']; ?></td>
					<td><?php echo $info[$i]['name'];?></td>
					<td><?php echo $info[$i]['brith']; ?></td>
					<td><a href="#">点击查看详情</a></td>
				</tr>
				<?php endfor; ?>
			</table>
			<div class="page"><?php echo showPage($page,$total_page); ?></div>
		</div>
	</body>
</html>