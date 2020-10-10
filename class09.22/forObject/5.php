<?php
	class Animal{
		public function shout(){
		}
	}
	
	class dog extends Animal{
		public function shout(){
			echo '旺旺~';
		}
	}
	
	class cat extends Animal{
		public function shout(){
			echo '喵呜~';
		}
	}
	
	function AnimalShout(Animal $obj){
		$obj->shout();
	}
	
	AnimalShout(new cat);
	echo "<br/>";
	AnimalShout(new dog);
?>