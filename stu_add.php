<?php require_once 'base.php';?>
<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];

?>
<!-- /. NAV SIDE  -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="js/laydate.js"></script>
<title>增加学生基本信息</title>
</head>
<body>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>增加学生基本信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>增加学生信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action='stu_adddo.php' method='post'>
						<input type='hidden' name='id'  />
							<br />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										学号</i></span> <input type="text" class="form-control"
									placeholder="学号 " name='studentId' />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 姓名</i></span>
								<input type="text" class="form-control" placeholder=" 姓名"
									name='name'/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-flag"> 班级</i></span>
								<input type="text" class="form-control" placeholder="班级"
									name='className'/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-birthday-cake"> 生日</i></span>
								<input type="text" class="form-control" placeholder="生日" 
									id='birthday' name='birthday'/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-female">性别</i></span>
								<div align='left'>&nbsp;&nbsp;
									<input type="radio" placeholder="性别" name='sex' value='男'/>男 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
										placeholder="性别" name='sex' value='女'/>女
								</div>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-male"> 民族</i></span>
								<input type="text" class="form-control" placeholder="民族"
									name='nation'/>
							</div>
							<input type='submit' class="btn btn-success" value='保存' />&nbsp;&nbsp;<a href="index.php" class='btn btn-danger '><i class='fa fa-reply fa-1'></i>返回</a></td>
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