<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统登陆处理页</title>
</head>
<body>
<?php   
 if( $_POST["txt_username"]!="" && $_POST["txt_pwd"]!="" )
 {
  $name= $_POST["txt_username"];  //获取提交的用户名
  $pwd=$_POST["txt_pwd"];         //获取提交的密码
  $mysqli=new mysqli("localhost", "root", "admin602", "88kengdao_db");

    $str = "select * from Admin_Info where A_UserName='$name' and A_Pwd='$pwd'";//注入式攻击
    //echo $str; //用于调试，输出查询语句
    
   $result=$mysqli->query($str);

	$rows=$result->num_rows;
	
    if($rows >0 )  //查看返回的行数
    {
      session_start();              //登陆成功，设置SESSION值
	  $_SESSION['user'] = $_POST['txt_username'];           
      echo "<script>window.location='main.php';</script>";  
    }
    else
    {
     echo "<script>alert('用户名或密码错误！'); window.location='login.php';</script>";
     }
	
 }
 ?>
</body>
</html>