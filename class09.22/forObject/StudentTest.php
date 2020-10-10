<?php
	require './student.class.php';
	$Student1=new Student();
	echo $Student1->name;
	echo '<br/>';
	$Student1->name='小红';
	echo $Student1->name;
	echo '<br/>';
	$Student1->study();
?>