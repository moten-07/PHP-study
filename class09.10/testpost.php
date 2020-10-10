<?php
	echo '<a href="9.10-2.html">返回</a>';
	if($_POST){		//超全局变量是否存在
		$data1=$_POST['n1'];
		$data2=$_POST['n2'];
		$fuhao=$_POST['yunsuanfu'];
		// echo $data1.$fuhao.$data2;
		if(is_numeric($data1)&&is_numeric($data2)){
			switch ($fuhao){
				case "+":
					$result=$data1+$data2;
				break;
				case "-":
					$result=$data1-$data2;
				break;
				case "*":
					$result=$data1*$data2;
				break;
				case "/":
					if($data2 == 0){
						echo "除数不能为0";
						exit;
					}else{
						$result=$data1/$data2;
					}
				break;
			}
			echo "$data1$fuhao$data2=$result";
		}else{
			echo "请输入数字";
		}
	}
?>