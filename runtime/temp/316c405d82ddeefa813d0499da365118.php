<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"F:\phpStudy\WWW\public/../application/index\view\confirmorder\index.html";i:1542280975;s:55:"F:\phpStudy\WWW\application\index\view\layout\base.html";i:1541923579;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>wopop</title>
	<link href="/static/index/css/common.css" rel="stylesheet" type="text/css" />
	<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
	<script src="/static/index/js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="/static/index/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
	<script src="/static/index/js/common_js.js" type="text/javascript"></script>
	<script src="/static/index/js/footer.js" type="text/javascript"></script>
</head>
<body>

<!-- （公共）头部模块（导航栏、logo、搜索框、我的购物车、菜单栏） -->
<head>
<div id="header_top">
	<!-- 导航栏 -->
	<div id="top">
		<div class="Inside_pages">
			<!-- echo输出语句中使用'.'拼接字符串 -->
		<?php
    		if(session('user_status') == true){
        		echo('<div class="Collection">'.session('user_name').'&ensp;您好！<a href="/logout">注销</a>&nbsp;&nbsp;<a href="#">我的订单</a></div>');
    		}
    		else{
        		echo('<div class="Collection"><a href="/login" class="green">请登录</a> <a href="/register" class="green">免费注册</a></div>');
    		}
    	?>
			<div class="hd_top_manu clearfix">
				  <ul class="clearfix">
					   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="<?php echo url('index/Index/index'); ?>">首页</a></li> 
					   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="<?php echo url('index/User/index'); ?>">个人主页</a></li>
					   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
					   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="<?php echo url('index/Products/index'); ?>">商品分类</a></li>
					   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>(23)</b></a></li>	
				  </ul>
			</div>
		</div>
	</div>
	<div id="header"  class="header page_style">
	<div class="logo"><a href="<?php echo url('index/Index/index'); ?>"><img src="/static/index/images/logo.png" /></a></div>
	<!--结束图层-->
	<div class="Search">
	    <div class="search_list">
	        <ul>
	            <li class="current"><a href="#">产品</a></li>
	            <li><a href="#">信息</a></li>
	        </ul>
	    </div>
	    <div class="clear search_cur">
	       <input name="searchName" id="searchName" class="search_box" onkeydown="keyDownSearch()" type="text">
	       <input name="" type="submit" value="搜 索"  class="Search_btn"/>
	    </div>
	    <div class="clear hotword">热门搜索词：Rival 300&nbsp;&nbsp;&nbsp;蟒蛇&nbsp;&nbsp;&nbsp;G502&nbsp;&nbsp;&nbsp;QPAD&nbsp;&nbsp;&nbsp;MK Pro</div>
	</div>
		<!--购物车样式-->
		<div class="hd_Shopping_list" id="Shopping_list">
		<div class="s_cart"><a href="#">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
		<div class="dorpdown-layer">
		<div class="spacer"></div>
		 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
		 <ul class="p_s_list">	   
			<li>
			    <div class="img"><img src="/static/index/ws/b-4.jpg"></div>
			    <div class="content"><p class="name"><a href="#">产品名称</a></p><p>美瑞海盗船机械键盘</p></div>
				<div class="Operations">
				<p class="Price">￥55.00</p>
				<p><a href="#">删除</a></p></div>
			  </li>
			</ul>		
		 <div class="Shopping_style">
		 <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
		  <a href="Shop_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
		 </div>	 
		</div>
		</div>
	</div>
	<!--菜单栏-->
	<div class="Navigation" id="Navigation">
		 <ul class="Navigation_name">
			<li><a href="index.html">首页</a></li>
            <li class="hour"><a href="<?php echo url('index/Products/index'); ?>" target="_blank"><span class="bg_muen"></span>烧友所爱-外设</a></li>
			<li><a href="#">免费维修</a></li>
			<li><a href="#">免费试用</a><em class="hot_icon"></em></li>
			<li><a href="<?php echo url('index/News/index'); ?>">新闻中心</a></li>
			
			<li><a href="#">私人定制</a></li>
			<li><a href="#">个人寄售</a></li>
			<li><a href="#">联系我们</a></li>
		 </ul>			 
		</div>
	<script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
</div>
</head>


<!-- 主体 -->

<!--右侧内容样式-->
<div class="conter_que">
	<style type="text/css">
		.con{border: 1px solid red !important;}
	</style>
	<div class="shou">
		<h2>请选择收货信息(必选)</h2>
		<?php if(is_array($addressList) || $addressList instanceof \think\Collection || $addressList instanceof \think\Paginator): $i = 0; $__LIST__ = $addressList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<div class="left choose_add">
			<h3 class="c_name"><?php echo $vo['dname']; ?></h3>
			<p class="c_phone"><?php echo $vo['dphone']; ?></p>
			<p class="c_address"><?php echo $vo['daddress']; ?></p>
			<p class="c_zipcode"><?php echo $vo['zipcode']; ?></p>
			<span><a href="#">修改</a></span>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class="fu"><h2>付款方式</h2><p>在线支付 （支持支付宝、微信、网银、快捷支付等</p></div>

	<form id="tab" action="/confirmorder" method="post" enctype="multipart/form-data">
		<!-- 添加表单隐藏控件，用于修改表单提交方式 -->
		<input type="hidden" name="_method" value="PUT">
		<div class="song">
			<h2>送货清单</h2>
			<div class="biao">
				<?php if(is_array($productList) || $productList instanceof \think\Collection || $productList instanceof \think\Paginator): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<img src="<?php echo $vo['ppic']; ?>" width="25" height="25"/>
				<span><a href="#"><?php echo $vo['pname']; ?></a></span>
				<span>￥ <?php echo $vo['pprice']; ?></span>
				<span>x <?php echo $pnum; ?></span>
				<!-- 创建表单隐藏控件，保存商品id、购买数量、商品单价 -->
				<input type="text" name="pid" value="<?php echo $vo['pid']; ?>" hidden>
				<input type="text" name="pnum" value="<?php echo $pnum; ?>" hidden>
				<input type="text" name="pprice" value="<?php echo $vo['pprice']; ?>" hidden>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="ti">
			<div class="left">
				<p>配送至 : <span class="editdz">请选择收货信息</span></p>
				<p>收货人 : <span class="editxm" id="xm"></span>&emsp;&emsp;&emsp;&ensp;手机号 : <span class="editphone"></span></p>
				<p>邮&emsp;编 : <span class="editzc"></span></p>
				<!-- 创建表单隐藏控件，保存用户选择的收货信息(地址、姓名、手机号、邮编) -->
				<input type="text" class="editdz" name="address" value="" hidden>
				<input type="text" class="editxm" name="uname" value="" hidden>
				<input type="text" class="editphone" name="uphone" value="" hidden>
				<input type="text" class="editzc" name="zipcode" value="" hidden>
			</div>
			<div class="right">
				<?php if(is_array($productList) || $productList instanceof \think\Collection || $productList instanceof \think\Paginator): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<span>应付总额:</span><span><p class="zj">￥<?php echo $vo['pprice']*$pnum; ?></p></span>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<input type="button" id="sub" value="" style="background-image: url('/static/index/images/add_comment.png');width: 156px;height: 52px;border: 0px;">
			</div>
		</div>
	</form>

</div>

<script type="text/javascript">
	$(function () {
		// 收货信息选择并绑定
		$('body').on('click', '.choose_add', function() {
			$(this).addClass('con').siblings().removeClass('con');
			var address = $(this).children('.c_address').text();
			var uname = $(this).children('.c_name').text();
			var uphone = $(this).children('.c_phone').text();
			var zipcode = $(this).children('.c_zipcode').text();
			// 把数据传递到对应位置与表单隐藏控件
			$('.editdz').text(address).val(address);
			$('.editxm').text(uname).val(uname);
			$('.editphone').text(uphone).val(uphone);
			$('.editzc').text(zipcode).val(zipcode);
		});
		// 验证收货信息是否存在(判断是否提交数据)
		$('#sub').click(function() {
			if($('#xm').text() == ''){
				alert("请选择您的收货信息！");
				return;
			} else{
				$('#tab').submit();
			}
		});
	})
</script>



<!--网站地图-->
<div class="fri-link-bg clearfix">
    <div class="fri-link">
        <div class="logo left margin-r20"><img src="/static/index/images/logo.png" width="135" /></div>
        <div class="left"><img src="/static/index/images/qd.jpg" width="90"  height="90" />
            <p>扫描下载APP</p>
        </div>
       <div class="">
		    <dl>
			 <dt>新手上路</dt>
			 <dd><a href="#">售后流程</a></dd>
		     <dd><a href="#">购物流程</a></dd>
		     <dd><a href="#">订购方式</a> </dd>
		     <dd><a href="#">隐私声明 </a></dd>
		     <dd><a href="#">推荐分享说明 </a></dd>
			</dl>
			<dl>
			 <dt>配送与支付</dt>
			 <dd><a href="#">保险需求测试</a></dd>
		     <dd><a href="#">专题及活动</a></dd>
		     <dd><a href="#">挑选保险产品</a> </dd>
		     <dd><a href="#">常见问题 </a></dd>
			</dl>
			<dl>
			 <dt>售后保障</dt>
			 <dd><a href="#">保险需求测试</a></dd>
		     <dd><a href="#">专题及活动</a></dd>
		     <dd><a href="#">挑选保险产品</a> </dd>
		     <dd><a href="#">常见问题 </a></dd>
			</dl>
			<dl>
			 <dt>支付方式</dt>
			 <dd><a href="#">保险需求测试</a></dd>
		     <dd><a href="#">专题及活动</a></dd>
		     <dd><a href="#">挑选保险产品</a> </dd>
		     <dd><a href="#">常见问题 </a></dd>
			</dl>	
		    <dl>
			 <dt>帮助中心</dt>
			 <dd><a href="#">保险需求测试</a></dd>
		     <dd><a href="#">专题及活动</a></dd>
		     <dd><a href="#">挑选保险产品</a> </dd>
		     <dd><a href="#">常见问题 </a></dd>
			</dl>
		     <dl>
			 <dt>帮助中心</dt>
			 <dd><a href="#">保险需求测试</a></dd>
		     <dd><a href="#">专题及活动</a></dd>
		     <dd><a href="#">挑选保险产品</a> </dd>
		     <dd><a href="#">常见问题 </a></dd>
			</dl>
		     <dl>
			 <dt>帮助中心</dt>
			 <dd><a href="#">保险需求测试</a></dd>
		     <dd><a href="#">专题及活动</a></dd>
		     <dd><a href="#">挑选保险产品</a> </dd>
		     <dd><a href="#">常见问题 </a></dd>
			</dl>
		</div>
    </div>
</div>
<!--网站地图END-->
<!--网站页脚-->
<div class="copyright">
    <div class="copyright-bg">
        <div class="hotline">为生活充电在线<span>招商热线：020-66668888</span>客服热线：400-168458</div>
        <div class="hotline co-ph">
            <p>版权所有 Copyright © cjl-wopop.com</p>
            <p>粤ICP证0301xx号&emsp;不良信息举报</p>
            <p>粤公网安备1100000xxx000001号 </p>
            <p>总机电话：4004-69789/194/195/196&emsp;客服电话：4000-15602402x&emsp;传 真：TEL-123456&emsp;E-mail:wopop@163.com</p>
        </div>
    </div>
</div>

</body>
</html>
