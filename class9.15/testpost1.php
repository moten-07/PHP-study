<?php
	if(isset($_POST['n1']) && isset($_POST['n2'])){
		$date1=$_POST['n1'];
		$date2=$_POST['n2'];
		$fuhao=$_POST['yunsunfu'];
		if(is_numeric($date1) && is_numeric($date2)){
			switch($fuhao){
				case "+":
					$result=$date1+$date2;
					break;
				case "-":
					$result=$date1-$date2;
					break;
				case "*":
					$result=$date1*$date2;
					break;
				case "/":
					if($date2==0){
						$result="除数不能为0";
					}else{
						$result=$date1/$date2;
					}
					break;
				case "^":
					$result=pow($date1,$date2);
					break;
			}
			echo "计算结果为：$result";
		}else{
			echo "请输入数字进行计算";
		}
		
	}else{
		echo "数据不齐全";
	}
?>