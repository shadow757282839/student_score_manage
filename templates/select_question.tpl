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
								<{foreach from=$sel item=s}>
                                 <tr>
    	                           <td><{$s.id}></td>
                                   <td><{$s.subject}></td>
                                   <td><{$s.type}></td>
                                   <td><{$s.title}></td>
                                   <td>
                                     <a href="select_question_edit.php?id=<{$s.id}>" class='btn btn-primary'><i class='fa fa-pencil fa-1'></i>编辑</a>&nbsp;&nbsp;
                                   </td>
                                 </tr> 
                              <{/foreach}>
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
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>
</html>
