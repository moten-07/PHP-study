<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>88坑道名酒网站--网站管理平台</title>
</head>
<body style="margin:0px 0px 0px 0px;">
<table border="1" style="width:100%">
<tr><td colspan="2">88坑道名酒网站--网站管理平台</td></tr>
<tr><td colspan="2">
<?php
 session_start();
if($_SESSION['user']!="")  //登陆判断，如果登陆，则输出用户信息
{
    echo $_SESSION['user']."，欢迎来到系统管理平台！";
}
else  //如果没有登陆，则跳转到登陆页面
{
   echo "<script>alert('登陆超时，请重新登陆!'); window.location.href='login.php';</script>";
}
?>
</td>
</tr>
<tr>
	<td width="80px" valign="top">
	   <a href="product_add.php" target="mainframe">添加商品</a>  <br/>
	   <a href="product_list3.php" target="mainframe">商品管理</a>  <br/>
	</td>
	<td>
	  <iframe name="mainframe" style="width:100%; height:300px" ></iframe>  <!-- iframe框架 -->
	</td>
</tr>
</table>
</body>
</html>