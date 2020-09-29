<?php
	class A{
		public $v1=10;
		private static $instance;
		private function __construct(){}//私有化构造方法，阻止new 创建
		public static function getNew(){
			if(!isset(A::$instance)){
				A::$instance=new self;
			}
			return A::$instance;
		}
		
		private function __clone(){}//同构造方法
	}
	
	// $o1=new A();
	$o1=A::getNew();
	$o1->v1=100;
	$o2=A::getNew();
	var_dump($o1);
	echo "<br/>";
	var_dump($o2);
	echo "<br/>o1中的v1为：".$o1->v1;
	echo "<br/>o2中的v1为：".$o2->v1;
	// $o3=clone $o1;
?>
