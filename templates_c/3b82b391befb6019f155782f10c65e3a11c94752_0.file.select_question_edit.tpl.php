<?php /* Smarty version 3.1.27, created on 2017-12-03 07:59:58
         compiled from "C:\wamp64\www\school\templates\select_question_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:45935a23aefe288134_70059525%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b82b391befb6019f155782f10c65e3a11c94752' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\templates\\select_question_edit.tpl',
      1 => 1512287995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45935a23aefe288134_70059525',
  'variables' => 
  array (
    'sel' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a23aefe4a64d5_90735140',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a23aefe4a64d5_90735140')) {
function content_5a23aefe4a64d5_90735140 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45935a23aefe288134_70059525';
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>编辑选择题</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div
				class="col-md-10 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>编辑选择题 ，并选中标准答案（单选选一项，多选选多项）</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="select_question_editdo.php" method='post'> 
							<br /> <input type="hidden" name='id' value="<?php echo $_smarty_tpl->tpl_vars['sel']->value['id'];?>
" />
							<div class="form-group">
								<h4>
									<label>选&nbsp;择&nbsp;科&nbsp;目：</label><label
										class="checkbox-inline"> <input type="radio" name='subject'
										value='php' <?php if ($_smarty_tpl->tpl_vars['sel']->value['subject'] == 'php') {?>checked="checked"<?php }?>/>php
									</label> <label class="checkbox-inline"> <input type="radio"
										name='subject' value='java'
										<?php if ($_smarty_tpl->tpl_vars['sel']->value['subject'] == 'java') {?>checked="checked"<?php }?>/> java
									</label> <label class="checkbox-inline"> <input type="radio"
										name='subject' value='android'
										<?php if ($_smarty_tpl->tpl_vars['sel']->value['subject'] == 'android') {?>checked="checked"<?php }?> /> android
									</label>
								</h4>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i
									class="fa fa-question-circle fa-1x"> &nbsp;题&nbsp;&nbsp;目</i></span>
								<textarea name='title' class="form-control" rows="3"
									placeholder="在此输入问题描述"><?php echo $_smarty_tpl->tpl_vars['sel']->value['title'];?>
</textarea>
							</div>
							<div class="form-group input-group">
								<input type="hidden" name='id1' value="<?php echo $_smarty_tpl->tpl_vars['sel']->value['id'];?>
" />
								<span class="input-group-addon"><label><input type="checkbox"
										name='answer1' value='true'
										<?php echo '<?=';?>$items[1]['isanswer']== '1'?'checked':''<?php echo '?>';?> /> 选项一 </label></span>
								<textarea name='item1' class="form-control" rows="3"
									placeholder="在此输入选项 内容"><?php echo $_smarty_tpl->tpl_vars['items']->value['content'];?>
</textarea>
							</div>
							<div class="form-group input-group">
								<input type="hidden" name='id2' value="<?php echo $_smarty_tpl->tpl_vars['sel']->value['id'];?>
" />
								<span class="input-group-addon"><label><input type="checkbox"
										name='answer2' value='true'
										<?php echo '<?=';?>$items[1]['isanswer']== '1'?'checked':''<?php echo '?>';?> /> 选项二</label></span>
								<textarea name='item2' class="form-control" rows="3"
									placeholder="在此输入选项 内容"><?php echo '<?=';?>$items[1]['content']<?php echo '?>';?></textarea>
							</div>
							<div class="form-group input-group">
								<input type="hidden" name='id3' value="<?php echo '<?=';?>$items[2]['id']<?php echo '?>';?>" />
								<span class="input-group-addon"><label><input type="checkbox"
										name='answer3' value='true'
										<?php echo '<?=';?>$items[2]['isanswer']== '1'?'checked':''<?php echo '?>';?> /> 选项三</label></span>
								<textarea name='item3' class="form-control" rows="3"
									placeholder="在此输入选项 内容"><?php echo '<?=';?>$items[2]['content']<?php echo '?>';?></textarea>
							</div>
							<div class="form-group input-group">
								<input type="hidden" name='id4' value="<?php echo '<?=';?>$items[3]['id']<?php echo '?>';?>" />
								<span class="input-group-addon"><label><input type="checkbox"
										name='answer4' value='true'
										<?php echo '<?=';?>$items[3]['isanswer']== '1'?'checked':''<?php echo '?>';?> /> 选项四</label></span>
								<textarea name='item4' class="form-control" rows="3"
									placeholder="在此输入选项 内容"><?php echo '<?=';?>$items[3]['content']<?php echo '?>';?></textarea>
							</div>
							<input type='submit' class="btn btn-success col-md-offset-6" value='保&nbsp;&nbsp;存' />&nbsp;&nbsp;<a href="select_question.php" class='btn btn-danger '>返回</a></td>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	!function() {
		laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
		laydate({
			elem : '#birthday'
		});//绑定元素
	}();
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>