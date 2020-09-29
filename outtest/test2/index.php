<?php
require "./common/function.php";

//统计题库目录下的“.php”文件个数
$count = count(glob('./data/*.php'));  //要求题库序号必须是连续的

//自动读取题库
$info = array();  //保存试题信息
for($i=1; $i<=$count; $i++){
	//获取题库
	$data = getDataById($i);
	//判断题库是否存在
	if(!$data){
		require './view/notFound.html';
		exit;
	}
	//从题库中读取数据
	$info[$i] =array(
		'title' => $data['title'],			       //题库标题
		'time' => round($data['timeout'] / 60),	   //答题时限（分钟数）
		'score' => getDataTotal($data['data'])     //总分数
	);
}
unset($data);  //题库已经用不到，删除变量
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>首页 - 在线考试系统</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="top">
		<div class="top-title">在线考试系统</div>
	</div>
	<div class="main">
		<div class="main-wrap">
			<div class="main-title">请选择题库</div>
			<?php foreach($info as $k=>$v): ?>
				<div class="main-each">
					<div class="main-each-L"><?php echo $v['title'];?></div>
					<div class="main-each-R">
						<span>时间：<?=$v['time']?>分钟 总分：<?=$v['score']?>分</span>
						<a href="test.php?id=<?=$k?>">开始考试</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="footer">
		PHP在线考试系统　本项目仅供学习使用
	</div>
</body>
</html>