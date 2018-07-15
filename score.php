<?php
	include("conn.php");
	include("init.inc.php");
	include("base.php");
	$sql = "select * from score";
	$r = mysql_query($sql);
	$sce = array();
	while($row = mysql_fetch_array($r)){
		$sce[] = $row;
	}
	$smarty->assign("sce",$sce);
	$smarty->display("score.tpl");
	
?>