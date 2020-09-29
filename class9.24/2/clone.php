<?php
	class Book{
		public $sales=0;
		public function __clone(){
			$this->sales=3;
		}
	}
	
	$Book1=new Book();
	$Book1->sales=250;
	$Book2=clone $Book1;
	
	echo $Book1->sales."<br/>".$Book2->sales;
?>