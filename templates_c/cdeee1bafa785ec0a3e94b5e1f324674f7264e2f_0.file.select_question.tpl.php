<?php /* Smarty version 3.1.27, created on 2017-12-03 05:51:10
         compiled from "C:\wamp64\www\school\templates\select_question.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:297015a2390ce5fad08_32215194%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdeee1bafa785ec0a3e94b5e1f324674f7264e2f' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\templates\\select_question.tpl',
      1 => 1512280177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297015a2390ce5fad08_32215194',
  'variables' => 
  array (
    'sel' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2390cebf72f4_67308991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2390cebf72f4_67308991')) {
function content_5a2390cebf72f4_67308991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '297015a2390ce5fad08_32215194';
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>选择题题库</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<a class='btn btn-primary btn-sm shiny' href='select_question_insert.php'><i
							class='fa fa-edit'>&nbsp;录入选择题</i></a>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>题号</th>
										<th>科目</th>
										<th>类别</th>
										<th>题目</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
								<?php
$_from = $_smarty_tpl->tpl_vars['sel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
                                 <tr>
    	                           <td><?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['s']->value['subject'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['s']->value['type'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
</td>
                                   <td>
                                     <a href="select_question_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" class='btn btn-primary'><i class='fa fa-pencil fa-1'></i>编辑</a>&nbsp;&nbsp;
                                   </td>
                                 </tr> 
                              <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
                                 </tbody>
							</table>
						</div>

					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>
	</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<?php echo '<script'; ?>
 src="assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
<!-- BOOTSTRAP SCRIPTS -->
<?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- METISMENU SCRIPTS -->
<?php echo '<script'; ?>
 src="assets/js/jquery.metisMenu.js"><?php echo '</script'; ?>
>
<!-- DATA TABLE SCRIPTS -->
<?php echo '<script'; ?>
 src="assets/js/dataTables/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/dataTables/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    <?php echo '</script'; ?>
>
<!-- CUSTOM SCRIPTS -->
<?php echo '<script'; ?>
 src="assets/js/custom.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>