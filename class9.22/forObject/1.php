<?php
	class Student{
		public $name='小明';
		public function study(){
			echo '正在学习……';
		}
	}
	
	$Student1=new Student();
	echo $Student1->name;
	echo '<br/>';
	$Student1->name='小红';
	echo $Student1->name;
	echo '<br/>';
	$Student1->study();
?>