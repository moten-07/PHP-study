<?php
	class Animal{
		public $name;
		public function shout(){
			echo $this->name.'发出叫声!';
		}
	}
	class Dog extends Animal{
		public function __construct($name){
			$this->name=$name;
		}
		
	}
	
	class cat extends Animal{
		public function shout(){
			echo $this->name.'喵呜~';
		}
	}
	
	$Dog=new Dog('小狗');
	$Dog->shout();
	echo "<br/>";
	$cat=new cat();
	$cat->shout();
?>