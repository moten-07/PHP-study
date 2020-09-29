<?php
	interface ComInterface{//接口
		public function connect();
		public function transfer();
		public function disconnect();
	}
	
	class MobilePhone implements ComInterface{
		public function connect(){
			echo "链接开始...<br/>";
		}
		public function transfer(){
			echo '传输数据开始...传输数据结束...<br/>';
		}
		public function disconnect(){
			echo "链接断开...<br/>";
		}
	}
	
	$mu=new MobilePhone();
	$mu->connect();
	$mu->transfer();
	$mu->disconnect();
?>