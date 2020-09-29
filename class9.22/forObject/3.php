<?php
	class Student{
		public $name='学生';
		public function show(){
			$var='name';
			echo $this->$var;
		}
	}
	
	$func='show';
	$Student1=new Student;
	$Student1->$func();
?>