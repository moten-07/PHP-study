<?php
	include "lg_user.php";
	
	function deleteAdmin($id){ //根据用户编号删除用户
		$deleteStr = "delete from lg_admin where id = $id";
		$rs = execUpdate($deleteStr);//调用comm.php中的execUpdate函数
		return $rs;//返回执行结果
	}
	
	header('Content-Type:text/html;charset=utf-8');
	if(isset($_POST)){
		$id=$_POST['Adminid'];
		$sql=deleteAdmin($id);
		if($sql==1){
			echo "<script>alert('删除成功！')</script>";
			echo "<script>location='index2.php'</script>";
		}else{
			echo "<script>alert('删除失败，请重新填写！')</script>";
			echo "<script>location='delete.html'</script>";
		}
	}else{
		echo "<script>alert('删除失败，请重新填写！')</script>";
		echo "<script>location='delete.html'</script>";
	}
?>