<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"F:\phpStudy\WWW\public/../application/admin\view\product\edit.html";i:1542472126;s:55:"F:\phpStudy\WWW\application\admin\view\layout\base.html";i:1542423402;}*/ ?>
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
        
        
<div class="header"><h1 class="page-title">修改 商品信息</h1></div>

<ul class="breadcrumb">
    <li><a href="index.html">主页</a> <span class="divider">/</span></li>
    <li><a href="users.html">商品列表</a> <span class="divider">/</span></li>
    <li class="active">修改商品信息</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <!-- 按钮 -->    
        <div class="btn-toolbar">
            <button class="btn btn-primary" onclick="sub()"><i class="icon-save"></i> 保存</button>
            <!-- 给保存按钮绑定表单提交事件 -->
            <script type="text/javascript">
                function sub(){
                    document.getElementById('tab').submit();
                }
            </script>
            <button class="btn btn-danger" onclick="res()"><i class="icon-undo"></i> 重置</button>
            <!-- 给重置按钮绑定表单清空事件 -->
            <script type="text/javascript">
                function res() {
                    document.getElementById('tab').reset();
                }
            </script>
            <div class="btn-group"></div>
        </div>
        <!-- 表单 -->
        <div class="well">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">商品信息</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                <form id="tab" action="/admin/product" method="post" enctype="multipart/form-data">
					<!-- 添加表单隐藏控件，用于绑定商品ID -->
                	<input type="hidden" name="pid" value="<?php echo $pro->pid; ?>">

                    <label>产品名称</label>
                    <input type="text" name="pname" class="input-xlarge" value="<?php echo $pro->pname; ?>">
                    <label>产品图片</label>
                    <input id="lefile" type="file" name="ppic" style="display:none">
                    <!-- 创建隐藏控件，用于获取保存原图片路径 -->
                    <input type="hidden" name="pimg" value="<?php echo $pro->ppic; ?>">
                    <div class="input-append">
                        <input id="photoCover" class="input-large" type="text" value="<?php echo $pro->ppic; ?>" disabled>
                        <a class="btn btn-info" onclick="$('input[id=lefile]').click();"><i class="icon-folder-open"></i> 选择文件</a>
                        <img src="<?php echo $pro->ppic; ?>" style="height: 100px; width: 100px; border:1px solid gray; margin: -70px 0 0 10px;">
                    </div>
                    <!-- 给选择文件按钮绑定文件上传事件 -->
                    <script type="text/javascript">
                        $('input[id=lefile]').change(function() {  
                            $('#photoCover').val($(this).val());
                            // console.log($(this).val());
                        });
                    </script>
                    <label>产品价格</label>
                    <div class="input-prepend input-append">
                        <span class="add-on">$</span>
                        <input class="span2" type="text" name="pprice" placeholder="RMB"  value="<?php echo $pro->pprice; ?>">
                        <span class="add-on">.00</span>
                    </div>
                    <label>产品介绍</label>
                    <textarea rows="3" class="input-xlarge" name="pcontent" placeholder="请填写内容"><?php echo $pro->pcontent; ?></textarea>
                    <label>产品分类</label>
                    <div class="input-prepend">
                        <label class="radio inline">
                            <input type="radio" name="ptype" value="1" <?php if ($pro->ptype == 1) echo 'checked'; ?>>鼠标</label>
                        <label class="radio inline">
                            <input type="radio" name="ptype" value="2" <?php if ($pro->ptype == 2) echo 'checked'; ?>>键盘</label>
                        <label class="radio inline">
                            <input type="radio" name="ptype" value="3" <?php if ($pro->ptype == 3) echo 'checked'; ?>>耳机</label>
                    </div>
                    <label>所属品牌</label>
                    <select class="input-xlarge" name="pcid">
                        <?php if(is_array($cateGory) || $cateGory instanceof \think\Collection || $cateGory instanceof \think\Paginator): $i = 0; $__LIST__ = $cateGory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <!-- $i是嵌套在volist内的自增变量，可直接调用 -->
						<option value="<?php echo $i; ?>" <?php if ($pro->pcid == $i) echo 'selected'; ?>><?php echo $vo; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <label>上架状态</label>
                    <select class="input-xlarge" name="state">
                        <option value="1" <?php if ($pro->state == 1) echo 'selected'; ?>>上架</option>
						<option value="0" <?php if ($pro->state == 0) echo 'selected'; ?>>下架</option>
                    </select>
                </form>
                </div>
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