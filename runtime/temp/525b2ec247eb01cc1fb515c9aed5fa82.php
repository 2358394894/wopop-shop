<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"F:\phpStudy\WWW\public/../application/index\view\index\index.html";i:1540798536;s:55:"F:\phpStudy\WWW\application\index\view\layout\base.html";i:1541923579;}*/ ?>
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

<!--广告幻灯片样式-->
<div id="slideBox" class="slideBox">
	<div class="hd">
		<ul class="smallUl"></ul>
	</div>
	<div class="bd">
		<ul>
			<li><a href="#" target="_blank"><div style="background:url(/static/index/ws/ad-1.jpg) no-repeat; background-position:center ; width:100%; height:450px;"></div></a></li>
			<li><a href="#" target="_blank"><div style="background:url(/static/index/ws/ad-2.jpg) no-repeat; background-position:center ; width:100%; height:450px;"></div></a></li>
			<li><a href="#" target="_blank"><div style="background:url(/static/index/ws/ad-3.jpg) no-repeat rgb(226, 155, 197);background-position:center; width:100%; height:450px;"></div></a></li>
            <li><a href="#" target="_blank"><div style="background:url(/static/index/ws/ad-1.jpg) no-repeat #f7ddea; background-position:center; width:100%; height:450px;"></div></a></li>
            <li><a href="#" target="_blank"><div style="background:url(/static/index/ws/ad-2.jpg) no-repeat  #F60; background-position:center; width:100%; height:450px;"></div></a></li>
		</ul>
	</div>
	<!-- 下面是前/后按钮-->
	<a class="prev" href="javascript:void(0)"></a>
	<a class="next" href="javascript:void(0)"></a>

	<script type="text/javascript">
	jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true});
	</script>
</div>

<!--内容样式-->
<div id="mian">
<div class="clearfix marginbottom">
	<!--产品分类样式-->
	<div class="Menu_style" id="allSortOuterbox">
	   	<div class="title_name"><em></em>所有商品分类</div>
	   	<div class="content hd_allsort_out_box_new">
	    <ul class="Menu_list">
	    	<!--鼠标-->
	      	<li class="name">
			<div class="Menu_name"><a href="#">鼠标</a><span>&lt;</span></div>
			<div class="link_name"></div>
			<div class="menv_Detail">
				<div class="cat_pannel clearfix">
					<div class="hd_sort_list">
					    <dl class="clearfix" data-tpc="1">
							<dt><a href="#">有线鼠标<i>></i></a></dt>
							<dd>
							<?php if(is_array($cateMouse) || $cateMouse instanceof \think\Collection || $cateMouse instanceof \think\Paginator): $i = 0; $__LIST__ = $cateMouse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<a href="#"><?php echo $vo['cname']; ?></a>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							</dd>
						</dl>
						 <dl class="clearfix" data-tpc="2">
							<dt><a href="#">无线鼠标<i>></i></a></dt>
							<dd><a href="#"></a><img src="/static/index/ws/bingb.jpg"/></dd>
						</dl>
				   	</div>
			   		<div class="Brands"></div>
				</div>
			</div>	 
			</li>
			<!-- 键盘 -->
	        <li class="name">
			<div class="Menu_name"><a href="#">键盘</a><span>&lt;</span></div>
			<div class="link_name"></div>
			<div class="menv_Detail">
				<div class="cat_pannel clearfix">
					<div class="hd_sort_list">
						    <dl class="clearfix" data-tpc="1">
								<dt><a href="#">机械键盘<i>></i></a></dt>
								<dd>
								<?php if(is_array($cateKeyboard) || $cateKeyboard instanceof \think\Collection || $cateKeyboard instanceof \think\Paginator): $i = 0; $__LIST__ = $cateKeyboard;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<a href="#"><?php echo $vo['cname']; ?></a>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								</dd>
							</dl>
					</div>
				   	<div class="Brands"></div>
				</div>
			</div>
			</li>
			<!-- 耳机 -->
	        <li class="name">
			<div class="Menu_name"><a href="#">耳机</a><span>&lt;</span></div>
			<div class="link_name"></div>
			<div class="menv_Detail">
				<div class="cat_pannel clearfix">
					<div class="hd_sort_list">
					    <dl class="clearfix" data-tpc="1">
							<dt><a href="#">运动耳机<i>></i></a></dt>
							<dd>
							<?php if(is_array($cateHeadset) || $cateHeadset instanceof \think\Collection || $cateHeadset instanceof \think\Paginator): $i = 0; $__LIST__ = $cateHeadset;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<a href="#"><?php echo $vo['cname']; ?></a>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							</dd>
						</dl>
					</div>
				   	<div class="Brands"></div>
				</div>
			</div>
			</li>
		</ul>
		</div>
	</div>
	<!-- 产品分类框显示与隐藏函数 -->
  	<script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail",	});</script>

	<!--产品栏切换-->
	<div class="product_list left">
		<div class="slideGroup">
			<div class="parHd">
				<ul><li>新品上市</li><li>电竞鼠标</li><li>机械键盘</li><li>高端耳机</li><li>热销商品</li></ul>
			</div>
			<div class="parBd">
					<!-- 新品上市 -->
					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<?php if(is_array($proList1) || $proList1 instanceof \think\Collection || $proList1 instanceof \think\Paginator): $i = 0; $__LIST__ = $proList1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="<?php echo $vo['ppic']; ?>" /></a></div>
								<div class="title">
	                            <a href="#" target="_blank" class="name"><?php echo $vo['pname']; ?></a>
	                            <h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
	                            </div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
					<!-- 鼠标 -->
					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<?php if(is_array($proMouse) || $proMouse instanceof \think\Collection || $proMouse instanceof \think\Paginator): $i = 0; $__LIST__ = $proMouse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="<?php echo $vo['ppic']; ?>" /></a></div>
								<div class="title">
	                            <a href="#" target="_blank" class="name"><?php echo $vo['pname']; ?></a>
	                            <h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
	                            </div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
					<!-- 键盘 -->
					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<?php if(is_array($proKeyboard) || $proKeyboard instanceof \think\Collection || $proKeyboard instanceof \think\Paginator): $i = 0; $__LIST__ = $proKeyboard;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="<?php echo $vo['ppic']; ?>" /></a></div>
								<div class="title">
	                            <a href="#" target="_blank" class="name"><?php echo $vo['pname']; ?></a>
	                            <h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
	                            </div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
					<!-- 耳机 -->
	                <div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<?php if(is_array($proHeadset) || $proHeadset instanceof \think\Collection || $proHeadset instanceof \think\Paginator): $i = 0; $__LIST__ = $proHeadset;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="<?php echo $vo['ppic']; ?>" /></a></div>
								<div class="title">
	                            <a href="#" target="_blank" class="name"><?php echo $vo['pname']; ?></a>
	                            <h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
	                            </div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
					<!-- 热销商品 -->
	                <div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<?php if(is_array($proHot) || $proHot instanceof \think\Collection || $proHot instanceof \think\Paginator): $i = 0; $__LIST__ = $proHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="<?php echo $vo['ppic']; ?>" /></a></div>
								<div class="title">
	                            <a href="#" target="_blank" class="name"><?php echo $vo['pname']; ?></a>
	                            <h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
	                            </div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
			</div><!-- parBd End -->
		</div>
		<!-- 图片滚动函数 -->
	    <script type="text/javascript">
			/* 内层图片无缝滚动 */
			jQuery(".slideGroup .slideBoxs").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftMarquee",interTime:50,autoPlay:true,trigger:"click"});
			/* 外层tab切换 */
			jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
		</script>
	    <!--广告样式-->
	    <div class="Ads_style"><a href="#"><img src="/static/index/ws/b-1.jpg"  width="318"/></a><a href="#"><img src="/static/index/ws/b-2.jpg" width="318"/></a><a href="#"><img src="/static/index/ws/b-3.jpg" width="318"/></a></div>
	</div>
</div>

<!--板块栏目样式-->
<div class="clearfix Plate_style">
	<!-- 鼠标模块 -->
  	<div class="Plate_column Plate_column_left">
	    <div class="Plate_name">
		    <h2>鼠标🖱</h2>
		    <div class="Sort_link">
				<?php if(is_array($cateMouse) || $cateMouse instanceof \think\Collection || $cateMouse instanceof \think\Paginator): $i = 0; $__LIST__ = $cateMouse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		    		<a href="#" class="name"><?php echo $vo['cname']; ?></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
		    </div>
		    <a href="#" class="Plate_link"><img src="/static/index/images/bk_img_11.png" /></a>
	    </div>
    	<div class="Plate_product">
		    <ul id="lists">
	    	<?php if(is_array($proMouse) || $proMouse instanceof \think\Collection || $proMouse instanceof \think\Paginator): $i = 0; $__LIST__ = $proMouse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		    <li class="product_display">
		    	<a href="" class="Collect"><em></em>收藏</a>
		    	<a href="#" class="img_link"><img src="<?php echo $vo['ppic']; ?>" width="140" height="140"/></a>
		     	<a href="#" class="name"><?php echo $vo['pname']; ?></a>
		    	<h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
		    	<div class="Detailed">
					<div class="content"><p class="center"><a href="#" class="Buy_btn">立即购买</a></p></div>
			   </div>
		    </li>
		    <?php endforeach; endif; else: echo "" ;endif; ?>
		    </ul>
    	</div>
  	</div>
	<!-- 键盘模块 -->
    <div class="Plate_column Plate_column_right">
    	<div class="Plate_name">
		    <h2>键盘⌨</h2>
		    <div class="Sort_link">
				<?php if(is_array($cateKeyboard) || $cateKeyboard instanceof \think\Collection || $cateKeyboard instanceof \think\Paginator): $i = 0; $__LIST__ = $cateKeyboard;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		    		<a href="#" class="name"><?php echo $vo['cname']; ?></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
		    </div>
		    <a href="#" class="Plate_link"><img src="/static/index/images/bk_img_14.png" /></a>
	    </div>
    	<div class="Plate_product">
	    	<ul id="lists">
		    <?php if(is_array($proKeyboard) || $proKeyboard instanceof \think\Collection || $proKeyboard instanceof \think\Paginator): $i = 0; $__LIST__ = $proKeyboard;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		    <li class="product_display">
		    	<a href="" class="Collect"><em></em>收藏</a>
		    	<a href="#" class="img_link"><img src="<?php echo $vo['ppic']; ?>" width="140" height="140"/></a>
		     	<a href="#" class="name"><?php echo $vo['pname']; ?></a>
		    	<h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
		    	<div class="Detailed">
					<div class="content"><p class="center"><a href="#" class="Buy_btn">立即购买</a></p></div>
			   </div>
		    </li>
		    <?php endforeach; endif; else: echo "" ;endif; ?>
	    	</ul>
    	</div>
	</div>
	<!-- 耳机模块 -->
	<div class="Plate_column Plate_column_left">
    	<div class="Plate_name">
		    <h2>耳机🎧</h2>
		    <div class="Sort_link">
				<?php if(is_array($cateHeadset) || $cateHeadset instanceof \think\Collection || $cateHeadset instanceof \think\Paginator): $i = 0; $__LIST__ = $cateHeadset;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		    		<a href="#" class="name"><?php echo $vo['cname']; ?></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
		    </div>
		    <a href="#" class="Plate_link"><img src="/static/index/images/bk_img_19.png" /></a>
	    </div>
    	<div class="Plate_product">
	    	<ul id="lists">
		    <?php if(is_array($proHeadset) || $proHeadset instanceof \think\Collection || $proHeadset instanceof \think\Paginator): $i = 0; $__LIST__ = $proHeadset;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		    <li class="product_display">
		    	<a href="" class="Collect"><em></em>收藏</a>
		    	<a href="#" class="img_link"><img src="<?php echo $vo['ppic']; ?>" width="140" height="140"/></a>
		     	<a href="#" class="name"><?php echo $vo['pname']; ?></a>
		    	<h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
		    	<div class="Detailed">
					<div class="content"><p class="center"><a href="#" class="Buy_btn">立即购买</a></p></div>
			   </div>
		    </li>
		    <?php endforeach; endif; else: echo "" ;endif; ?>
	    	</ul>
    	</div>
    </div>
    <!-- 猜你喜欢 -->
    <div class="Plate_column Plate_column_right">
    	<div class="Plate_name">
		    <h2>猜你喜欢💗</h2>
		    <div class="Sort_link">
				<?php if(is_array($cateLike) || $cateLike instanceof \think\Collection || $cateLike instanceof \think\Paginator): $i = 0; $__LIST__ = $cateLike;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		    		<a href="#" class="name"><?php echo $vo['cname']; ?></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
		    </div>
		    <a href="#" class="Plate_link"><img src="/static/index/images/bk_img_22.png" /></a>
	    </div>
	    <div class="Plate_product">
	    	<ul id="lists">
		    <?php if(is_array($proHot) || $proHot instanceof \think\Collection || $proHot instanceof \think\Paginator): $i = 0; $__LIST__ = $proHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		    <li class="product_display">
		    	<a href="" class="Collect"><em></em>收藏</a>
		    	<a href="#" class="img_link"><img src="<?php echo $vo['ppic']; ?>" width="140" height="140"/></a>
		     	<a href="#" class="name"><?php echo $vo['pname']; ?></a>
		    	<h3><b>￥</b><?php echo $vo['pprice']; ?></h3>
		    	<div class="Detailed">
					<div class="content"><p class="center"><a href="#" class="Buy_btn">立即购买</a></p></div>
			   </div>
		    </li>
		    <?php endforeach; endif; else: echo "" ;endif; ?>
	    	</ul>
    	</div>
 	</div>
</div>

<!--友情链接-->
	<div class="link_style clearfix">
	<div class="title">友情链接</div>
	<div class="link_name">
	<a href="#"><img src="/static/index/ws/01.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/02.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/03.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/04.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/05.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/06.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/07.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/08.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/09.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/10.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/11.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/12.jpg"  width="100"/></a>
	<a href="#"><img src="/static/index/ws/13.jpg"  width="100"/></a>
	</div>
	</div>
</div>

<!--右侧菜单栏购物车样式-->
<div class="fixedBox">
	<ul class="fixedBoxList">
		<!-- 消息中心 -->
	  	<li class="fixeBoxLi user">
	  		<a href="#"><span class="fixeBoxSpan"></span> <strong>消息中心</strong></a>
	  	</li>
	  	<!-- 购物车 -->
		<li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
			<p class="good_cart">0</p>
			<span class="fixeBoxSpan"></span> <strong>购物车</strong>
			<div class="cartBox">
		   		<div class="bjfff"></div>
		   		<div class="message">购物车内暂无商品，赶紧选购吧</div>
		   	</div>
		</li>
		<!-- 客服 -->
		<li class="fixeBoxLi Service">
			<span class="fixeBoxSpan"></span><strong>客服</strong>
			<div class="ServiceBox">
	    		<div class="bjfffs"></div>
	    		<dl onclick="javascript:;">
		    		<dt><img src="/static/index/images/Service1.png"></dt>
		       		<dd><strong>在线客服1</strong>
		          		<p class="p1">9:00-22:00</p>
		           		<p class="p2"><a href="#">点击交谈</a></p>
		        	</dd>
		        </dl>
				<dl onclick="javascript:;">
		        	<dt><img src="/static/index/images/Service1.png"></dt>
		        	<dd> <strong>在线客服2</strong>
		        		<p class="p1">9:00-22:00</p>
		        		<p class="p2"><a href="#">点击交谈</a></p>
		        	</dd>
		        </dl>
		    </div>
		</li>
		<!-- 微信 -->
		<li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
			<span class="fixeBoxSpan"></span><strong>微信</strong>
			<div class="cartBox">
	   			<div class="bjfff"></div>
				<div class="QR_code">
					<p><img src="/static/index/images/qd.jpg" width="180px" height="180px" /></p>
					<p>微信扫一扫，关注我们</p>
				</div>		
			</div>
		</li>
		<!-- 收藏夹 -->
		<li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan"></span> <strong>收藏夹</strong></a> </li>
		<!-- 返回顶部 -->
		<li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
	</ul>
</div>



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
