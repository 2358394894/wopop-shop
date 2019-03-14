<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\phpStudy\WWW\public/../application/index\view\login\index.html";i:1541004086;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>用户登录</title>
	<link href="/static/index/css/landr.css" rel="stylesheet" media="screen" />
</head>

<body>
<div class="login_top">
    <div class="wrapper">
        <div class="login_logo"><a href="<?php echo url('index/Index/index'); ?>"><img src="/static/index/images/logo.png" width="196" height="46"></a></div>
        <div class="fr">您好，欢迎为生活充电在线！</div>
    </div>
</div>

<form id="msform" action="" method="post">
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">欢迎登录WOPOP外设商城</h2>
		<h3 class="fs-subtitle">Hello, welcome to wopop!</h3>
		<input type="text" name="account" placeholder="手机号" />
		<input type="password" name="upwd" placeholder="密码" />
		<p><span><a href="#" style="color:#ff6000;float: left;">立即注册</a></span><span><a href="#" style="color: blue;float: right;">忘记密码？</a></span></p>
		<input type="submit" class="submit action-button submit_login" value="登&emsp;录" />
	</fieldset>
</form>
<!-- 
<script src="/static/index/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="/static/index/js/jQuery.time.js" type="text/javascript"></script>
 -->
</body>
</html>