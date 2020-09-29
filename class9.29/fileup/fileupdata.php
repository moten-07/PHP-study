<?php
	header("Content-type:text/html;charset=utf-8");
	$file=$_FILES["file"];
	echo "<pre>";
	var_dump($file);
	echo "</pre>";
	if($file['error']>0){
		echo "错误：".$file["error"];
	}else{
		echo "文件名称：".$file["name"]."<br/>";
		echo "文件类型：".$file["type"]."<br/>";
		echo "文件大小：".($file["size"]/1024)."<br/>";
		echo "文件临时存储的位置：".$file["tmp_name"]."<br/>";
	}
	
	if(file_exists("uploads/".$file["name"])){
		echo $file["name"]."文件已经存在";
	}else{
		move_uploaded_file($file['tmp_name'],"uploads/".$file["name"]);
		echo "文件上传成功";
	}
?>
