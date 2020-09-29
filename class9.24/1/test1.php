<?php
	class C{
		const const1=1;
		public $v2=2;
		static $v3=3;
		function f1(){
			echo "<br/><b>实例方法：</b>";
			echo "<br/>实例方法中可以访问实例属性：v2=".$this->v2;
			echo "<br/>普通方法中操作类常量:".C::const1;
			echo "<br/>普通方法中操作静态属性：".C::$v3;
			echo "<br/>普通方法中调用静态方法：".C::f2();
		}
		static function f2(){
			echo "<br/><b>静态方法：</b>";
			echo "<br/>静态方法中使用类常量：".C::const1;
			echo "<br/>静态方法中使用静态属性：".self::$v3;
		}
		function __construct($para1=2){
			echo "<br/><b>构造方法被执行</b>";
			$this->v2=$para1;
		}
		function __destruct(){
			echo "<br/><b>析构方法被执行。</b>";
		}
		
	}
	
	$obj1=new C(20);
	echo "<br/>对象obj1的v2的值为：".$obj1->v2;
	$obj1->f1();
?>
