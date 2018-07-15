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
									<{foreach from=$sce item=s}>
									<tr>
										<td><{$s.studentId}></td>
										<td><{$s.test_name}></td>
										<td><{$s.subject}></td>
										<td><{$s.mark}></td>
										<td>
                                          <a href="score_edit.php?id=<{$s.id}>" class='btn btn-primary'><i class='fa fa-pencil fa-1'></i>编辑</a>&nbsp;&nbsp;
                                          <a href="score_delete.php?id=<{$s.id}>" class='btn btn-danger '><i class='fa fa-trash-o fa-1'></i>删除</a></td>
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
