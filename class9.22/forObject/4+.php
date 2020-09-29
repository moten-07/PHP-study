<?php
	 abstract class goods{
		public $name;
		public $price;
		public function __construct ($name,$price){
			$this->name=$name;
			$this->price=$price;
		}
		abstract function getName();
		public function getPrice(){
			return $this->price;
		}
	}
	
	class book extends goods{
		public $author;
		public $publisher;
		public function __construct ($name,$price,$author,$publisher){
			parent::__construct($name,$price);
			$this->author;
			$this->publisher;
		}
		public function getName(){
			return '《'.$this->name."》";
		}
	}
	
	$book1=new book("PHP实例教程",85,"PHP教研组","ITCAST");
	echo $book1->getName();
	
	class phone extends goods{
		public $brand;
		public $color;
		public function getName(){
			return $this->name;
		}
	}
	$goods=new phone("mi",100);
	echo "<br/>".$goods->getName()."&emsp;".$goods->price;
	
?>