<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>登录页面</title>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body>
<?php header("Content-Type:text/html;charset=GB2312") ?>
<div id="logo">
<h1><img src="images/leGo.gif" width="115" height="52" />快来加入乐GO商城吧！</h1>
<h1 id="h"> 各种精品等你来看个够。</h1>
<p style="text-align:right; color: #0C0;"><a href="index.php" style="color:#254B62">返回首页</a>&nbsp;<a href="regsiter.php" style="color:#254B62">注册</a></p>
<form action="checkLogin.php" method="post"> 
  <p>用户名：
    <input name="username" type="text" id="username" />
  </p>
  <p>
    密&nbsp;&nbsp;码：
      <input name="password" type="password" id="password" />
  </p>
  <input name="ok"  type="submit" style="background:url(images/login_btn2.gif); width:99px ; height:36px;  margin-left:30px;" value="登录" id="ok" />
  <input name=""  type="reset" style="background:url(images/login_btn3.gif)  ; width:97px ; height:36px; margin-left:30px; " value="重置" />
</form>
</div>

</body>
</html>
