<?php
	include("conn.php");
	include("init.inc.php");
	include("base.php");
	$sql = "select * from student";
	$r = mysql_query($sql);
	$stu = array();
	while($row = mysql_fetch_array($r)){
		$stu[] = $row;
	}
	$smarty->assign("stu",$stu);
	$smarty->display("index.tpl");
?>