<?php
	class Employee{
		protected $_name="张三";
		protected $_age=25;
		
		public function __set($name,$value){
			$this->$name=$value;	
		}
		
		public function __get($name){
			if(isset($this->$name)){
				return $this->$name;
			}else{
				return null;
			}
		}
		
		public function introduce(){
			echo "大家好，我叫".$this->_name.",今年".$this->_age."岁！<br/>";
		}
	}
?>