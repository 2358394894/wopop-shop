<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"F:\phpStudy\WWW\public/../application/admin\view\category\index.html";i:1536655204;s:55:"F:\phpStudy\WWW\application\admin\view\layout\base.html";i:1539760980;}*/ ?>
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

        <a href="#brand-menu" class="nav-header" data-toggle="collapse"><i class="icon-star"></i>品牌模块<span class="label label-error">+2</span></a>
        <!-- <ul id="brand-menu" class="nav nav-list collapse"> -->
        <ul id="brand-menu" class="nav nav-list">
            <li ><a href="<?php echo url('admin/Category/index'); ?>">品牌列表</a></li>
            <li ><a href="<?php echo url('admin/Category/view',['type'=>'insert']); ?>">添加品牌</a></li>
        </ul>

        <a href="#orders-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-qrcode"></i>订单模块<i class="icon-chevron-up"></i></a>
        <!-- <ul id="orders-menu" class="nav nav-list collapse"> -->
        <ul id="orders-menu" class="nav nav-list">
            <li ><a href="#">订单列表</a></li>
            <li ><a href="#">订单信息</a></li>
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
        
        
<!-- 主体部分 -->
<div class="header"><h1 class="page-title">品牌列表</h1></div>

<ul class="breadcrumb">
    <li><a href="index.html">主页</a> <span class="divider">/</span></li>
    <li class="active">品牌列表</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <!-- 按钮 -->
        <div class="btn-toolbar">
            <!-- 绑定页面跳转事件 -->
            <button class="btn btn-primary" onclick="jump()"><i class="icon-plus"></i> 添加品牌</button>
            <button class="btn">Import</button>
            <button class="btn">Export</button>
            <div class="btn-group"></div>
        </div>
        <!-- 列表 -->
        <div class="well">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>品牌ID</th>
                        <th>品牌名称</th>
                        <th style="width: 26px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo $vo['cid']; ?></td>
                        <td><?php echo $vo['cname']; ?></td>
                        <td>
                            <a href="<?php echo url('admin/Category/view', ['type' => 'edit', 'id' => $vo['cid']]); ?>"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <script type="text/javascript">
                        // 删除事件，del()方法写在volist标签内，避免表记录为空时，变量vo不存在
                        function del() {
                            window.location.href = '<?php echo url('admin/Category/delete',['id' => $vo['cid']]); ?>';
                        }
                    </script>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <!-- 翻页按钮 -->
        <div class="pagination">
            <ul>
                <li class="disabled"><a href="#">首页</a></li>
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">&raquo;</a></li>
                <li><a href="#">尾页</a></li>
            </ul>
        </div>

        <!-- 删除确认框 -->
        <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">删除确认</h3>
            </div>
            <div class="modal-body">
                <p class="error-text"><i class="icon-warning-sign modal-icon"></i>你确定你要删除该品牌吗?</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
                <button onclick="del()" class="btn btn-danger" data-dismiss="modal">删除</button>
            </div>
        </div>
        <!-- 尾部 -->
        <footer>
            <hr>                        
            <p class="pull-right">Copyright statement<a href="#" title="wopop" target="_blank">&ensp;wopop</a></p>
            <p>&copy; wopop <a href="#" target="_blank">Create</a></p>
        </footer>
    </div>
</div>


<!-- 添加品牌页面跳转事件 -->
<script type="text/javascript">
    function jump(){
        window.location.href='<?php echo url('admin/Category/view',['type'=>'insert']); ?>';
    }
</script>

        
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