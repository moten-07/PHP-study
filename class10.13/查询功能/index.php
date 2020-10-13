<?php
//当文件的编码是utf-8时，要同时设定网页字符集为utf-8，防止中文乱码
header('Content-Type:text/html;charset=utf-8');
$mysqli=new mysqli("localhost", "root", "", "project5");
$mysqli->query("SET NAMES utf8");
if(mysqli_connect_errno()){
	echo "错误：".mysqli_connect_error();
	exit;
}
	//执行select语句，返回来的就是结果集（对象）	
$sql = 'select `id`,`title`,`addtime` from `news` order by `addtime` desc';
$result=$mysqli->query($sql);
// var_dump($result);
$rows=$result->num_rows;
// $rows=$result->num_rows;
$cols=$result->field_count;
echo "表中{$rows}行，{$cols}列<br>";
// $row=$result->fetch_row();
// var_dump($row);
// echo "<br>";
// $row=$result->fetch_assoc();
// var_dump($row);
// echo "<br>";
// $row=$result->fetch_array();
// var_dump($row);
$data = array(); //定义数组用于保存数据
while($row=$result->fetch_assoc())
{
$data[] = $row;
}
// var_dump($data);
require './news.html';
// //连接数据库
// //避免PHP5.5提示，使用“@”屏蔽错误
// $link = mysqli_connect('localhost','root','','project5') || exit('数据库连接失败');

// // //设置数据库编码格式为utf8
// // mysqli_query('set names utf8');

// //执行SQL语句
// $sql = 'select `id`,`title`,`addtime` from `news` order by `addtime` desc';
// $result = mysqli_query($link,$sql);

// //处理结果集
// $data = array(); //定义数组用于保存数据
// while($row = mysqli_fetch_assoc($result)){
// 	$data[] = $row;
// }

// //载入HTML模板
