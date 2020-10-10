<?php
	require('./MySQLPDO.class.php');
	$db=MySQLPDO::getInstance(array('dbname'=>'php9.26'));
	$error=array();
	$sql="select 
		t1.t_name as t1_name, m.t1_score, m.t2_score, 
		t2.t_name as t2_name, m.m_time 
		from `match` as m 
		left join `team` as t1 ON m.t1_id = t1.t_id  
		left join `team` as t2 ON m.t2_id=t2.t_id;";
		$match_list=$db->fetchAll($sql);
		echo '<pre>';
		var_dump($match_list);
		require "./match_list_xianshi.html";
?>