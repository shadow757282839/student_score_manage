<?php require_once 'base.php';?>
<?php
require_once 'conn.php';
if (! isset ( $_REQUEST ['id'] )) {
	header ( "location:select_question.php" );
}
$id = $_REQUEST ['id'];
$query = "select * from select_question where id='$id'";
$result = mysql_query ( $query );
$data = mysql_fetch_array ( $result );
$queryItem = "select * from select_item where select_question_id='$id'";
$resultItem = mysql_query ( $queryItem );
while ( $row = mysql_fetch_array ( $resultItem ) ) {
	 $items [] = $row;
}
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
							<br /> <input type="hidden" name='id' value="<?=$data['id']?>" />
							<div class="form-group">
								<h4>
									<label>选&nbsp;择&nbsp;科&nbsp;目：</label><label
										class="checkbox-inline"> <input type="radio" name='subject'
										value='php' <?=$data['subject']== 'php'?'checked':''?> />php
									</label> <label class="checkbox-inline"> <input type="radio"
										name='subject' value='java'
										<?=$data['subject']== 'java'?'checked':''?> /> java
									</label> <label class="checkbox-inline"> <input type="radio"
										name='subject' value='android'
										<?=$data['subject']== 'android'?'checked':''?> /> android
									</label>
								</h4>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i
									class="fa fa-question-circle fa-1x"> &nbsp;题&nbsp;&nbsp;目</i></span>
								<textarea name='title' class="form-control" rows="3"
									placeholder="在此输入问题描述"><?=$data['title']?></textarea>
							</div>
							<div class="form-group input-group">
								<input type="hidden" name='id1' value="<?=$items[0]['id']?>" />
								<span class="input-group-addon"><label><input type="checkbox"
										name='answer1' value='true'
										<?=$items[0]['isanswer']== '1'?'checked':''?> /> 选项一 </label></span>
								<textarea name='item1' class="form-control" rows="3"
									placeholder="在此输入选项 内容"><?=$items[0]['content']?></textarea>
							</div>
							<div class="form-group input-group">
								<input type="hidden" name='id2' value="<?=$items[1]['id']?>" />
								<span class="input-group-addon"><label><input type="checkbox"
										name='answer2' value='true'
										<?=$items[1]['isanswer']== '1'?'checked':''?> /> 选项二</label></span>
								<textarea name='item2' class="form-control" rows="3"
									placeholder="在此输入选项 内容"><?=$items[1]['content']?></textarea>
							</div>
							<div class="form-group input-group">
								<input type="hidden" name='id3' value="<?=$items[2]['id']?>" />
								<span class="input-group-addon"><label><input type="checkbox"
										name='answer3' value='true'
										<?=$items[2]['isanswer']== '1'?'checked':''?> /> 选项三</label></span>
								<textarea name='item3' class="form-control" rows="3"
									placeholder="在此输入选项 内容"><?=$items[2]['content']?></textarea>
							</div>
							<div class="form-group input-group">
								<input type="hidden" name='id4' value="<?=$items[3]['id']?>" />
								<span class="input-group-addon"><label><input type="checkbox"
										name='answer4' value='true'
										<?=$items[3]['isanswer']== '1'?'checked':''?> /> 选项四</label></span>
								<textarea name='item4' class="form-control" rows="3"
									placeholder="在此输入选项 内容"><?=$items[3]['content']?></textarea>
							</div>
							<input type='submit' class="btn btn-success col-md-offset-6" value='保&nbsp;&nbsp;存' />&nbsp;&nbsp;<a href="select_question.php" class='btn btn-danger '>返回</a></td>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	!function() {
		laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
		laydate({
			elem : '#birthday'
		});//绑定元素
	}();
</script>
</body>
</html>