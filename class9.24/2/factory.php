<?php
	header ('content-type:text/html;charset=utf-8');
	class Db{
		public static function factory($type){			
			if(include_once $type.'.class.php'){
				$classname=$type;
				return new $classname;
			}else{
				echo "error！";
			}
			
			
		}
	}
	
	$mysql=Db::factory('Employee');
	var_dump($mysql);
	echo "<br/>";
	$s=Db::factory('ManageEmployee');
	$s->introduce();
	$s->call();
?>