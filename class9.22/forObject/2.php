<?php
	class Student{
		public $name;
		public function __construct($name){
			$this->name=$name;
		}
		public function study(){
			echo $this->name.'正在学习……';
		}
		public function __destruct(){
			echo '析构方法正在执行:销毁对象'.$this->name."。";
		}
	}

	$Student1=new student("小明");
	$Student2=new student("小红");
	$Student1->study();
	echo '<br/>';
	// unset($Student1);
	// echo '<br/>';
	$Student2->study();
	echo '<br/>';