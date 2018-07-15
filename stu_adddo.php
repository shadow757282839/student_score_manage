<?php
require_once 'conn.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['name'];
$className = $_REQUEST ['className'];
$birthday = $_REQUEST ['birthday'];
$sex = $_REQUEST ['sex'];
$nation = $_REQUEST ['nation'];
// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO student(id, studentId, name, className, birthday, sex, nation) VALUES (NULL,'$studentId','$name', '$className', '$birthday','$sex', '$nation')";
//exit($sql);
if (mysql_query ( $sql )) {
    header ( "location:index.php" );
} else {
	echo "添加失败！！！<br/>";
	echo "<a href='index.php'>系统错误</a>";
}
?>