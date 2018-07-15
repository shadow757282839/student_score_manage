<?php
session_start();
session_destroy();
header("content-type:text/html;charset=utf-8");
echo "退出成功";
echo "<a href='login.php'>返回</a>";
?>