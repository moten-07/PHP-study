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
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>比赛列表</title>
	</head>
	<body>
		<table>
			<tr>
				<th>球队一</th> <th>比分</th> <th>球队二</th> <th>时间</th>
			</tr>
			<?php foreach($match_list as $row){ ?>
			<tr>
				<td><?php echo $row['t1_name'];?></td>
				<td><?php echo $row['t1_score'];?>:<?php echo $row['t2_score'];?></td>
				<td><?php echo $row['t2_name'];?></td>
				<td><?php echo date('Y-m-d H:i',$row['m_time']);?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
