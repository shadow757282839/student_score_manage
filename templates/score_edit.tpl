<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="js/laydate.js"></script>
<title>学生成绩</title>
</head>
<body>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>修改成绩基本信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑成绩信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="score_editdo.php" method='post'>
							<br /> <input type='hidden' name='id' value='<{$sce.id}>' />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag">&nbsp;学号</i></span>
								<input type="text" class="form-control" placeholder="学号"
									name='studentId' value="<{$sce.studentId}>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-flag">&nbsp;考试名</i></span>
								<input type="text" class="form-control" placeholder="考试名"
									name='test_name' value="<{$sce.test_name}>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-birthday-cake">&nbsp;科目</i></span>
								<input type="text" class="form-control" placeholder="科目"
								name='subject' value="<{$sce.subject}>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-files-o">&nbsp;成绩</i></span>
								<div align='left'>&nbsp;&nbsp;
									<input type="text" placeholder="成绩" name='mark' value="<{$sce.mark}>" />
								</div>
							</div>
							<input type='submit' class="btn btn-success" value='确认修改' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="score.php" class='btn btn-danger '><i class='fa fa-reply fa-1'></i>返回</a></td>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
</script>
</body>
</html>