<?php
	include("conn.php");
	include("init.inc.php");
	include("base.php");
	$sql = "select * from select_question";
	$r = mysql_query($sql);
	$sel = array();
	while($row = mysql_fetch_array($r)){
		$sel[] = $row;
	}
	$smarty->assign("sel",$sel);
	$smarty->display("select_question.tpl");
?>