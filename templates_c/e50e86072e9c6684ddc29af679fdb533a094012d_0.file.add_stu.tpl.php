<?php /* Smarty version 3.1.27, created on 2017-11-20 13:11:18
         compiled from "C:\wamp64\www\sy20\templates\add_stu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:321915a12d4769fc210_91848737%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50e86072e9c6684ddc29af679fdb533a094012d' => 
    array (
      0 => 'C:\\wamp64\\www\\sy20\\templates\\add_stu.tpl',
      1 => 1511183367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321915a12d4769fc210_91848737',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a12d476a3d1d5_07543171',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a12d476a3d1d5_07543171')) {
function content_5a12d476a3d1d5_07543171 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '321915a12d4769fc210_91848737';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加学生</title>
</head>
<body>
<h1 align="center">填写学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="add_studo.php" method="post" >
	学号:<input type="text"  name="xh" value=""/><br/>
           姓名:<input type="text" name="xm" value=""/><br/>
           性别:<input type="radio" value="0" name="sex"/>男&nbsp;
        <input type="radio" value="1" name="sex"/>女 <br/>
           班级:<input type="text" name="bj" value=""/><br/>
       <input type="submit" name="sub" value="确定"/>
</form>
</div>
</body>
</html><?php }
}
?>