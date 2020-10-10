<?php
	session_start();
	include "lg_user.php";
	header('Content-Type:text/html;charset=utf-8');
	if(isset($_POST["ok"])){
		$username=$_POST['username'];
		$passwords=$_POST['passwords'];
		$repasswords=md5($_POST['repasswords']);
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$coded=$_POST['code'];
		$regdate=date('Y-m_d',time());
		$rs=findUserByUserName($username);
		//判断用户是否存在
			if(!empty($rs)){
				echo "<script>alert('用户名已存在，请重新填写！')</script>";
				echo "<script>location='regsiter.html'</script>";
			}
			//写入数据库
			else{
				//检查验证码
				if($_SESSION["identifying"]==$coded){
					$sql=addUser($username,$repasswords,$email,$address,$telephone,$regdate);
					if($sql==1){
						echo "<script>alert('注册成功！')</script>";
						echo "<script>location='index.php'</script>";
					}else{
						echo "<script>alert('注册失败，请重新填写！')</script>";
						echo "<script>location='regsiter.html'</script>";
					}
				}else{
					echo "<script>alert('验证码错误！')</script>";
					echo "<script>location='regsiter.html'</script>";
				}
			}
	}
?>