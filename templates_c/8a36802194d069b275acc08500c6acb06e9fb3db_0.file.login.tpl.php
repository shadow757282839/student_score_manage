<?php /* Smarty version 3.1.27, created on 2017-12-11 15:50:19
         compiled from "C:\wamp64\www\school\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165895a2ea93b8fc3c5_04783286%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a36802194d069b275acc08500c6acb06e9fb3db' => 
    array (
      0 => 'C:\\wamp64\\www\\school\\templates\\login.tpl',
      1 => 1513007409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165895a2ea93b8fc3c5_04783286',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2ea93b93b908_85155366',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2ea93b93b908_85155366')) {
function content_5a2ea93b93b908_85155366 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '165895a2ea93b8fc3c5_04783286';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>用户登录</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> 用户登录</h2>
               
                <h5>( 授权访问 )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   输入登录信息 </strong>  
                            </div>
                            <div class="panel-body">
                            
                                <form role="form" method= "post"  action= "logindo.php">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="在此输入用户名 " name='username'/>
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="在此输入密码" name='passcode' />
                                        </div>
                                        <div class="form-group input-group">
                                             <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                             <input type="text" class="form-control" placeholder="在这里输入验证码" name='imgcode' size="4"/>
                                             </div>
                                             <div class="form-group input-group">
                                             	<img id="yzm_img" border="1" src='code.php' style="width:150px; height:30px"/>
                                                </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> 记住密码
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >忘记密码 ? </a> 
                                            </span>
                                        </div>
                                     <input type="submit"  name= "Submit"  value= "登录" class="btn btn-primary "> 
                                    <hr />
                                    未注册 ? <a href="register.php" >点我 </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


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
      <!-- CUSTOM SCRIPTS -->
    <?php echo '<script'; ?>
 src="assets/js/custom.js"><?php echo '</script'; ?>
>
   
</body>
</html><?php }
}
?>