<?php
if (! isset($_SESSION)) {
    session_start();
}
if (! isset($_SESSION['userName'])) {
    header("location:login.php");
}
$userName = $_SESSION['userName'];
if (! isset($_REQUEST['id'])) {
    header("location:index.php");
}
include ("conn.php");
include ("init.inc.php");
include ("base.php");
$id = $_REQUEST['id'];
$sql = "select * from student where id = $id";
$r = mysql_query($sql);
if ($row = mysql_fetch_array($r)) {
    $smarty->assign("stu", $row);
    $smarty->display("stu_edit.tpl");
}
?>