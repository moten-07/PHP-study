<?php
	session_start();
	include "include/lg_user.php";
	if(isset($_POST['ok']))
		{
			$username = $_POST['username'];
			$passwords = $_POST['passwords'];
			$repasswords = md5($_POST['repasswords']);
			$telephone = $_POST['telephone'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$coded = $_POST['code'];
			$regdate = date('Y-m_d',time());		
			$rs = findUserByUserName($username);
			//�ж��û��Ƿ����
					if(!empty($rs)){
						echo "<script>alert('�û����Ѵ��ڣ���������д��')</script>";
						echo "<script>location='regsiter.html'</script>";
					}
					//д�����ݿ�
					else{
						//�����֤��
							if($_SESSION["identifying"] == $coded)
								{	
									/**
										$isok = mysql_query($sql) or die(mysql_error());//��ʱ�����ֱ�۵���ʾ�Ƿ���sql��䱨��
									*/	
									$sql = addUser($username,$repasswords,$email,$address,$telephone,$regdate);//���ú����������û�
																											
									if($sql == 1){
										echo "<script>alert('ע��ɹ���')</script>";
										echo "<script>location='index.php'</script>";
									}
									else{
										echo "<script>alert('ע��ʧ�ܣ���������д��')</script>";
										echo "<script>location='regsiter.php'</script>";
									}
								}
							else{
								echo "<script>alert('��֤�����')</script>";
								echo "<script>location='regsiter.php'</script>";
							}
							
						}
			
		}
?>