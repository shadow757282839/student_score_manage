<?php
	include("conn.php");
	include("init.inc.php");
	include("base.php");
	$sql = "select * from paper";
	$r = mysql_query($sql);
	$pap = array();
	while($row = mysql_fetch_array($r)){
		$pap[] = $row;
	}
	$smarty->assign("pap",$pap);
	$smarty->display("paper_index.tpl");
	
?>