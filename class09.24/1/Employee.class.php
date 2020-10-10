<?php
	class Employee{
		protected $_name;
		protected $_age;
		//1、构造方法
		public function __construct($name,$age){
			$this->_name=$name;
			$this->_age=$age;
		}
		
		public function introduce(){
			echo "大家好，我叫".$this->_name.",今年".$this->_age."岁！<br/>";
		}
	}
?>