<?php
	$allowedExts=array("gif","jpg","jpeg","png");
	$temp=explode(".",$_FILES["file"]["name"]);
	echo $_FILES["file"]["name"]."<br/>";
	print_r($temp);
	$extension=end($temp);		//获取文件名后缀
	echo "<hr/>";
	echo $extension."文件&emsp;t".($_FILES["file"]["size"]/1024)."kb<br/>";
	if(	 (	($_FILES["file"]["type"]=="image/gif")
			||($_FILES["file"]["type"]=="image/jpg")
			||($_FILES["file"]["type"]=="image/jpeg")
			||($_FILES["file"]["type"]=="image/png")
			||($_FILES["file"]["type"]=="image/x-png")
			||($_FILES["file"]["type"]=="image/pjpeg")
		)&&($_FILES["file"]["size"]<204800)				//小于200kb
		&& in_array($extension,$allowedExts)
	){
		if($_FILES["file"]["error"]>0){
			echo "错误：".$_FILES["file"]["error"]."<br/>";
		}else{
			echo "上传文件名：".$_FILES["file"]["name"]."<br/>";
			echo "文件类型：".$_FILES["file"]["type"]."<br/>";
			echo "文件大小：".($_FILES["file"]["size"]/1024)."KB<br/>";
			echo "文件临时存储位置：".$_FILES["file"]["tmp_name"]."<br/>";
			
			if(file_exists("upload/".$_FILES["file"]["name"])){
				echo $_FILES["file"]["name"]."文件已存在";
			}else{
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
				echo "文件存储在："."upload/".$_FILES["file"]["name"];
			}
		}
	}elseif(($_FILES["file"]["size"]>204800)){
		echo "文件超出大小限制(200kb)";
	}else{
		echo "非法的文件格式";
	}
?>