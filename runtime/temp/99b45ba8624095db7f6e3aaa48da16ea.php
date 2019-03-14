<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"F:\phpStudy\WWW\public/../application/admin\view\index\index.html";i:1535984298;s:55:"F:\phpStudy\WWW\application\admin\view\layout\base.html";i:1542423402;}*/ ?>
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
        <style>
            .box{
                height:100%;
                overflow-y: auto;
            }
        </style>
    </head>

<body class="">
    <!-- 头部导航条 -->
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">设置</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i>&ensp;<?php echo \think\Session::get('admin_name'); ?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo url('admin/Index/logout'); ?>">注销</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="<?php echo url('admin/Index/index'); ?>"><span class="second">Wopop</span></a>
        </div>
    </div>
    
    <!-- 左侧列表 -->
    <div class="sidebar-nav box">
        <a href="<?php echo url('admin/Index/index'); ?>" class="nav-header collapsed" data-toggle="collapse"><i class="icon-home"></i>首页<i class="icon-chevron-up"></i></a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="<?php echo url('admin/Index/index'); ?>">主页</a></li>
            <li><a href="#">数据统计</a></li>
            <li ><a href="<?php echo url('admin/Banner/index'); ?>">广告图管理</a></li>
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-shopping-cart"></i>产品模块<span class="label label-info">+4</span></a>
        <!-- <ul id="accounts-menu" class="nav nav-list collapse"> -->
        <ul id="accounts-menu" class="nav nav-list">
            <li ><a href="<?php echo url('admin/Product/index'); ?>">产品列表</a></li>
            <li ><a href="<?php echo url('admin/Product/view',['type'=>'insert']); ?>">添加产品</a></li>
        </ul>

        <a href="#orders-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-qrcode"></i>订单模块<i class="icon-chevron-up"></i></a>
        <!-- <ul id="orders-menu" class="nav nav-list collapse"> -->
        <ul id="orders-menu" class="nav nav-list">
            <li ><a href="<?php echo url('admin/Orders/index'); ?>">订单列表</a></li>
            <li ><a href="#">订单信息</a></li>
        </ul>

        <a href="#brand-menu" class="nav-header" data-toggle="collapse"><i class="icon-star"></i>品牌模块<span class="label label-error">+2</span></a>
        <!-- <ul id="brand-menu" class="nav nav-list collapse"> -->
        <ul id="brand-menu" class="nav nav-list">
            <li ><a href="<?php echo url('admin/Category/index'); ?>">品牌列表</a></li>
            <li ><a href="<?php echo url('admin/Category/view',['type'=>'insert']); ?>">添加品牌</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-user"></i>用户模块<i class="icon-chevron-up"></i></a>
        <!-- <ul id="error-menu" class="nav nav-list collapse"> -->
        <ul id="error-menu" class="nav nav-list">
            <li ><a href="<?php echo url('admin/Users/index'); ?>">用户列表</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-group"></i>管理员模块<i class="icon-chevron-up"></i></a>
        <!-- <ul id="legal-menu" class="nav nav-list collapse"> -->
        <ul id="legal-menu" class="nav nav-list">
            <li ><a href="<?php echo url('admin/Admins/index'); ?>">管理员列表</a></li>
            <li ><a href="<?php echo url('admin/Admins/view',['type'=>'insert']); ?>">添加管理员</a></li>
        </ul>

        <a href="#news-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-barcode"></i>新闻模块<i class="icon-chevron-up"></i></a>
        <ul id="news-menu" class="nav nav-list">
            <li><a href="<?php echo url('admin/News/index'); ?>">新闻列表</a></li>
            <li><a href="<?php echo url('admin/News/view',['type'=>'insert']); ?>">发布新闻</a></li>
        </ul>

        <a href="#reviews-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-comments-alt"></i>评论模块<i class="icon-chevron-up"></i></a>
        <ul id="reviews-menu" class="nav nav-list">
            <li><a href="#">商品评论</a></li>
            <li><a href="#">新闻评论</a></li>
        </ul>
        
        <a href="#" class="nav-header" ><i class="icon-question-sign"></i>未定义</a>
    </div>

    <!-- 主体 -->
    <div class="content">
        
        
<div class="header">
    <div class="stats">
        <p class="stat"><span class="number">53</span>访问量</p>
        <p class="stat"><span class="number">27</span>总流量</p>
        <p class="stat"><span class="number">15</span>订单量</p>
    </div>
    <h1 class="page-title">Dashboard</h1>
</div>

<ul class="breadcrumb">
    <li><a href="index.html">主页</a> <span class="divider">/</span></li>
    <li class="active">指示板</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Just a quick note:</strong> Hope you like the theme!
        </div>
    </div>
</div>

        
    </div>

    <script type="text/javascript" src="/static/admin/lib/bootstrap/js/bootstrap.js"></script>
</body>
</html>

<!-- 
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function() {
        $('.demo-cancel-click').click(function(){return false;});
    });
</script>
 -->