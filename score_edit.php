<?php require_once 'base.php';?>
<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}

require_once 'conn.php';
if (! isset ( $_REQUEST ['id'] )) {
	header ( "location:index.php" );
}
include ("conn.php");
include ("init.inc.php");
include ("base.php");
$id = $_REQUEST ['id'];
$sql = "select * from score where id = $id";
$r = mysql_query($sql);
if ($row = mysql_fetch_array($r)) {
    $smarty->assign("sce", $row);
    $smarty->display("score_edit.tpl");
}
?>