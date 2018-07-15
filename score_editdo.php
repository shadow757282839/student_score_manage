<?php
session_start();
require_once 'conn.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$test_name = $_REQUEST ['test_name'];
$subject = $_REQUEST ['subject'];
$mark = $_REQUEST ['mark'];

// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "update score set studentId ='$studentId',test_name='$test_name',subject = '$subject',mark ='$mark' where id = $id";
if (mysql_query ( $sql )) {
	echo "修改成功！！！<br/>";
	header ( "location:score.php" );
} else {
	echo "修改失败！！！<br/>";
	echo "<a href='score.php'>系统错误</a>";
}