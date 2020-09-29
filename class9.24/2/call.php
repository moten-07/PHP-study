<?php
	class Book{
		public function __call($name,$args){
			echo $name;
			echo "<br/>";
			print_r($args);
		}
	}
	
	$Book1=new Book();
	$Book1->show('PHP');
?>
