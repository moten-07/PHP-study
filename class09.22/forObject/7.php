<?php
	class student{
		public static $school;
		public static function show(){
			echo '我的学校是：'.self::$school;
		}
	}
	student::$school='GDIT';
	student::show();
?>