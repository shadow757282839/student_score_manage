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
                             <{foreach from=$pap item=p}>
                                 <tr>
    	                           <td><{$p.name}></td>
                                   <td><{$p.subject}></td>
                                   <td><{$p.total}></td>
                                   <td><{$p.content}></td>
                                   <td><{$p.memo}></td>
                                   <td>
                                     <a href="paper_delete.php?id=<{$p.id}>" class='btn btn-danger '><i class='fa fa-trash-o fa-1'></i>删除</a></td>
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