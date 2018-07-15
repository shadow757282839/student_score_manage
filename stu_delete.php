<?php
require_once 'conn.php';
header ( "content-type:text/html;charset=utf-8" );
// 取表单数据
$id = $_REQUEST ['id'];
// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "delete from student where id=$id";
if (mysql_query ( $sql )) {
	echo "<script>alert('删除成功！');</script>";
	echo '<script>location.href="index.php";</script>';
} else {
	echo "<script>alert('删除失败！');</script>";
	echo "删除失败！！！<br/>";
	echo "<a href='index.php'>返回</a>";
}