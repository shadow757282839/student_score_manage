<?php /* Smarty version 3.1.27, created on 2017-12-02 16:50:06
         compiled from "C:\wamp64\www\school\templates\paper_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:116015a22d9be6cdc08_22304558%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3ba7984f4e075c5671895b27e0e47cd3ebc7a6' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\templates\\paper_index.tpl',
      1 => 1512232581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116015a22d9be6cdc08_22304558',
  'variables' => 
  array (
    'pap' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a22d9be7d8fc9_23457593',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a22d9be7d8fc9_23457593')) {
function content_5a22d9be7d8fc9_23457593 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '116015a22d9be6cdc08_22304558';
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>试卷管理</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<a class='btn btn-primary btn-sm shiny' href='paper_insert.php'><i
							class='fa fa-edit'>&nbsp;生成试卷</i></a>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>试卷名称</th>
										<th>科目</th>
										<th>总题量</th>
										<th>内容</th>
										<th>备注</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
                             <?php
$_from = $_smarty_tpl->tpl_vars['pap']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                                 <tr>
    	                           <td><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['p']->value['subject'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['p']->value['total'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['p']->value['content'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['p']->value['memo'];?>
</td>
                                   <td>
                                     <a href="paper_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class='btn btn-danger '><i class='fa fa-trash-o fa-1'></i>删除</a></td>
                                   </td>
                                 </tr> 
                              <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
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
</html><?php }
}
?>