<?php /* Smarty version 3.1.27, created on 2017-12-02 16:05:24
         compiled from "C:\wamp64\www\school\templates\stu_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:268585a22cf4437e850_27951968%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50095ac004413b1b6cbc5c128765b3e522b5a9d8' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\templates\\stu_edit.tpl',
      1 => 1512230600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268585a22cf4437e850_27951968',
  'variables' => 
  array (
    'stu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a22cf444c47d2_25316926',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a22cf444c47d2_25316926')) {
function content_5a22cf444c47d2_25316926 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '268585a22cf4437e850_27951968';
?>
<!-- /. NAV SIDE  -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php echo '<script'; ?>
 type="text/javascript" src="js/laydate.js"><?php echo '</script'; ?>
>
<title>修改学生基本信息</title>
<body>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>修改学生基本信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑学生信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action='stu_editdo.php' method='post'>
							<br /> <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['stu']->value['id'];?>
' />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										学号</i></span> <input type="text" class="form-control"
									placeholder="学号 " name='studentId'
									value='<?php echo $_smarty_tpl->tpl_vars['stu']->value['studentId'];?>
' />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 姓名</i></span>
								<input type="text" class="form-control" placeholder=" 姓名"
									name='name' value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['name'];?>
" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-flag"> 班级</i></span>
								<input type="text" class="form-control" placeholder="班级"
									name='className' value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['className'];?>
" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-birthday-cake"> 生日</i></span>
								<input type="text" class="form-control" placeholder="生日"
									id='birthday' name='birthday' value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['birthday'];?>
" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-female">性别</i></span>
								<div align='left'>&nbsp;&nbsp;
									<input type="radio" placeholder="性别" name='sex' value='男' <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == '男') {?>checked="checked"<?php }?>/>男 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
										placeholder="性别" name='sex' value='女'
										<?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == '女') {?>checked="checked"<?php }?>/>女
								</div>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-male"> 民族</i></span>
								<input type="text" class="form-control" placeholder="民族"
									name='nation' value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['nation'];?>
" />
							</div>
							<input type='submit' class="btn btn-success" value='确认修改' />&nbsp;&nbsp;<a href="index.php" class='btn btn-danger '><i class='fa fa-reply fa-1'></i>返回</a></td>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>