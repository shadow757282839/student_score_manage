<?php /* Smarty version 3.1.27, created on 2017-12-02 16:47:32
         compiled from "C:\wamp64\www\school\templates\score.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:90955a22d924b59809_78472864%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fea81ab81ceb6760953d1bfce183b60d48f6391c' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\templates\\score.tpl',
      1 => 1512233231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90955a22d924b59809_78472864',
  'variables' => 
  array (
    'sce' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a22d924c67ba0_98463838',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a22d924c67ba0_98463838')) {
function content_5a22d924c67ba0_98463838 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '90955a22d924b59809_78472864';
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>学生信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />

		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>学号</th>
										<th>考试名</th>
										<th>科目</th>
										<th>成绩</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
									<?php
$_from = $_smarty_tpl->tpl_vars['sce']->value;
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
										<td><?php echo $_smarty_tpl->tpl_vars['s']->value['studentId'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['s']->value['test_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['s']->value['subject'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['s']->value['mark'];?>
</td>
										<td>
                                          <a href="score_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" class='btn btn-primary'><i class='fa fa-pencil fa-1'></i>编辑</a>&nbsp;&nbsp;
                                          <a href="score_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" class='btn btn-danger '><i class='fa fa-trash-o fa-1'></i>删除</a></td>
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