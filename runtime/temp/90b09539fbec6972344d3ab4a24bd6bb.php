<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\phpStudy\WWW\public/../application/admin\view\login\login.html";i:1540916861;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap Admin</title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

        <link rel="stylesheet" type="text/css" href="/static/admin/lib/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="/static/admin/css/theme.css">
        <link rel="stylesheet" type="text/css" href="/static/admin/lib/font-awesome/css/font-awesome.css">

        <script type="text/javascript" src="/static/admin/lib/jquery-1.7.2.min.js"></script>

        <script type="text/javascript" src="/static/admin/lib/bootstrap/js/bootstrap.js"></script>
    </head>

<body class="">
    <div class="navbar">
        <div class="navbar-inner">
                <a class="brand" href="#"><span class="second">Wopop</span><span style="color: silver;">&ensp;后台管理系统</span></a>
        </div>
    </div>
    <div class="row-fluid">
        <div class="dialog">
            <div class="block">
                <p class="block-heading">欢迎登陆</p>
                <div class="block-body">
                    <form class="well" action="" method="post">
                        <label>用户名</label>
                        <input type="text" name="aname" class="span12">
                        <label>密码</label>
                        <input type="password" name="apwd" class="span12">
                        <input type="submit" class="btn btn-primary pull-right" value="登陆">
                        <label class="remember-me"><input type="checkbox"> Remember me</label>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <p><a href="reset-password.html">忘记了你的密码?</a></p>
        </div>
    </div>

</body>
</html>