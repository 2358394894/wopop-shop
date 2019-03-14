<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"F:\phpStudy\WWW\public/../application/index\view\details\index.html";i:1542444567;s:55:"F:\phpStudy\WWW\application\index\view\layout\base.html";i:1541923579;}*/ ?>
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

<link href="/static/index/css/base.css" rel="stylesheet" type="text/css" />
<link href="/static/index/css/css.css" rel="stylesheet" type="text/css" />
<script src="/static/index/js/jquery.imagezoom.min.js" type="text/javascript"></script>
<style>
	img {
		max-width: none;
	}
	.tb-pic a {
		display: table-cell;
		text-align: center;
		vertical-align: middle;
	}
	.tb-pic a img {
		vertical-align: middle;
	}
	.tb-pic a {
	*display:block;
	*font-family:Arial;
	*line-height:1;
	}
	.tb-thumb {
		margin: 10px 0 0;
		overflow: hidden;
	}
	.tb-thumb li {
		float: left;
		width: 86px;
		height: 86px;
		overflow: hidden;
		border: 1px solid #cdcdcd;
		margin-right: 5px;
	}
	.tb-thumb li:hover, .tb-thumb .tb-selected {
		width: 84px;
		height: 84px;
		border: 2px solid #799e0f;
	}
	.tb-s310, .tb-s310 a {
		height: 365px;
		width: 365px;
	}
	.tb-s310, .tb-s310 img {
		max-height: 365px;
		max-width: 365px;
	}
	.tb-booth {
		border: 1px solid #CDCDCD;
		position: relative;
		z-index: 1;
	}
	div.zoomDiv {
		z-index: 999;
		position: absolute;
		top: 0px;
		left: 0px;
		background: #ffffff;
		border: 1px solid #ccc;
		display: none;
		overflow: hidden;
	}
	div.zoomMask {
		position: absolute;
		background: url("/static/index/images/mask.png") repeat;
		cursor: move;
		z-index: 1;
	}
	<!--弹出隐藏层-->
	 .black_overlay {
		display: none;
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 1200px;
		background-color: black;
		z-index: 9999;
		-moz-opacity: 0.4;
		opacity: 0.40;
		filter: alpha(opacity=40);
	}
	.white_content {
		display: none;
		position: absolute;
		top: 20%;
		left: 40%;
		width: 400px;
		height: 175px;
		border: none;
		background-color: white;
		z-index: 100200;
		overflow: auto;
	}
	.white_content_small {
		display: none;
		position: absolute;
		top: 20%;
		left: 30%;
		width: 40%;
		height: 50%;
		background-color: white;
		z-index: 1002;
		overflow: auto;
	}
	.dialogbox {
		padding: 20px;
		line-height: 40px;
	}
	.addbtn {
		width: 22px;
		height: 22px;
		background: url("/static/index/images/close2.png") no-repeat;
		margin-right: 5px;
		margin-top: 3px;
		border: none;
		float: right;
	}
</style>

<!--网站头部-->
<div class="sup-wid">
    <div class="supplie-top">
        <div class=" clear bread"><a href="index.html">首页</a>&ensp;&gt;&ensp;<a href="product.html">外设天下</a>&ensp;&gt;&ensp;<a href="#">产品详情</a></div>
    </div>

	<script type="text/javascript">
	//弹出隐藏层
	function ShowDiv(show_div,bg_div){
		document.getElementById(show_div).style.display='block';
		document.getElementById(bg_div).style.display='block' ;
		var bgdiv = document.getElementById(bg_div);
		bgdiv.style.width = document.body.scrollWidth;
		// bgdiv.style.height = $(document).height();
		$("#"+bg_div).height($(document).height());
	};
	//关闭弹出层
	function CloseDiv(show_div,bg_div){
		document.getElementById(show_div).style.display='none';
		document.getElementById(bg_div).style.display='none';
	};
	</script>
	<!-- 产品详情 -->
    <div class="pro_detail" >
        <div class="pro_detail_img float-lt">
        	<!-- 左侧商品图片 -->
            <div class="gallery">
                <?php if(is_array($productList) || $productList instanceof \think\Collection || $productList instanceof \think\Paginator): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="tb-booth tb-pic tb-s310"> <a href="#"><img src="<?php echo $vo['ppic']; ?>"  alt="展品细节展示放大镜特效" rel="<?php echo $vo['ppic']; ?>" class="jqzoom" /></a> </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <ul class="tb-thumb" id="thumblist">
                	<?php if(is_array($productList) || $productList instanceof \think\Collection || $productList instanceof \think\Paginator): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="tb-selected">
                        <div class="tb-pic tb-s40"><a href="#"><img src="<?php echo $vo['ppic']; ?>" mid="<?php echo $vo['ppic']; ?>" big="<?php echo $vo['ppic']; ?>" style="width: 100%;"></a></div>
                    </li>
                    <li>
                    	<div class="tb-pic tb-s40"><a href="#"><img  src="/static/index/images/02_small.jpg"  mid="/static/index/images/02_mid.jpg" big="/static/index/images/02.jpg"></a></div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <script type="text/javascript">
		        $(function(){
						$("#h1").toggle(function(){
							$("#h1").css("background-image","url('/static/index/images/iconfont-xingxingman_add.png')");
						},function(){
							$("#h1").css("background-image","url('/static/index/images/iconfont-xingxingman_add.png') ");
						})
					});
			</script>
            <input type="button" value="加入收藏" id="h1" class="addcart" onclick="ShowDiv('MyDiv2','fade2')" />
        </div>
        <!-- 右侧商品详细信息 -->
        <div class="float-lt pro_detail_con">
        	<?php if(is_array($productList) || $productList instanceof \think\Collection || $productList instanceof \think\Paginator): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        	<div class="pro_detail_tit"><?php echo $vo['pname']; ?></div>
        	<div class="pro_detail_ad"><?php echo $vo['pcontent']; ?></div>
            <div class="pro_detail_score margin-t20">
                <ul>
                    <li class="margin-r20">评分</li>
                </ul>
                <ul>
                    <li style="width:16px; height:16px;"><img src="/static/index/images/iconfont-xingxingman.png" width="16" height="16" /></li>
                    <li style="width:16px; height:16px;"><img src="/static/index/images/iconfont-xingxingman.png" width="16" height="16" /></li>
                    <li style="width:16px; height:16px;"><img src="/static/index/images/iconfont-xingxingman.png" width="16" height="16" /></li>
                    <li style="width:16px; height:16px;"><img src="/static/index/images/iconfont-xingxingman.png" width="16" height="16" /></li>
                    <li style="width:16px; height:16px;"><img src="/static/index/images/iconfont-xingxingkong.png" width="16" height="16" /></li>
                </ul>
            </div>
        	<div class="clear"></div>
        	<div class="pro_detail_price  margin-t20"><span class="margin-r20">市场价</span><span style=" font-size:16px"><s>￥<?php echo $vo['pprice']+150; ?></s></span></div>
        	<div class="clear"></div>
        	<div class="pro_detail_act margin-t20 fl"><span class="margin-r20">售价</span><span style="font-size:26px; font-weight:bold; color:#dd514c;">￥<?php echo $vo['pprice']; ?></span></div>
        	<div class="clear"></div>
        	<div class="act_block margin-t5"><span>本商品可使用9999积分抵用￥9.99元</span></div>
            <div class="pro_detail_number margin-t30">
                <div class="margin-r20 float-lt">数量</div>
                <div class=""><i class="jian"></i>
                    <input type="text" value="1" class="float-lt choose_input" id="num" />
                    <i class="jia"></i> <span>&nbsp;件</span> <span>（库存1000件）</span></div>
                <div class="clear"></div>
            </div>
            <div class="guige">
                <div class="margin-r20 float-lt" style="line-height:25px;">规格</div>
                <ul>
                    <li class="guige-cur">套餐一</li>
                    <li>套餐二</li>
                    <li>套餐三</li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="pro_detail_number margin-t20">
                <div class="margin-r20 float-lt">月成交量：<span class="colorred"><strong>666件</strong></span></div>
                <div class="clear"></div>
            </div>
            <input type="hidden" id="pid" value="<?php echo $vo['pid']; ?>">
            <div class="clear"></div>
            <div class="pro_detail_btn margin-t30">
                <ul>
                    <li class="pro_detail_shop"><a href="javascript:void(0)">立即购买</a></li>
                    <li class="pro_detail_add"><a href="#" onclick="ShowDiv('MyDiv','fade')">加入我的货仓</a></li>
                    <script type="text/javascript">
                    $(function () {
                        $(".pro_detail_shop").click(function(event) {
                            let pid = $("#pid").val();
                            let num = $("#num").val();
                            // console.log(pid);
                            // console.log(num);
                            url = "/confirmorder?id="+pid+"&num="+num;
                            window.location.href=url;
                        });
                    });
                    </script>
                </ul>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- 会员信息框 -->
        <div class="float-rt pro_right">
            <div align="center">
                <p><img src="/static/index/images/lmrz.png" /></p>
                <p class="margin-t10">普通会员</p>
            </div>
            <div align="center"><img src="/static/index/images/pro_V2_r6_c9.png" />
                <p class="line-ht20">信用度</p>
                <p class="line-ht20" style="color:#ec3c36;">2.5</p>
            </div>
            <div align="center"><img src="/static/index/images/pro_V2_r8_c10.png" />
                <p class="line-ht30">在线联系</p>
            </div>
            <div align="center"><img src="/static/index/images/pro_V2_r8_c9.png" />
                <p class="line-ht30">了解更多</p>
            </div>
        </div>
    </div>
    <div class="clear"></div>

    <script>
		$(function(){
			$(".pro_tab li").each(function(i){
				$(this).click(function(){
					$(this).addClass("cur").siblings().removeClass("cur");
					$(".conlist .conbox").eq(i).show().siblings().hide();
				})
			})
		})
	</script>

	<!-- 产品介绍、规格、评价模块 -->
    <div class="pro_con margin-t55" style="overflow:hidden;">
    	<!-- 标题 -->
        <div class="pro_tab">
        	<ul>
        		<li class="cur">产品介绍</li>
        		<li>规格及包装</li>
        		<li>评价</a></li>
        	</ul>
        </div>
        <div class="conlist">
        	<!-- 产品介绍模块 -->
        	<?php if(is_array($productList) || $productList instanceof \think\Collection || $productList instanceof \think\Paginator): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="conbox" style="display:block;"><?php echo $vo['pcontent']; ?></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- 规格及包装模块 -->
            <div class="conbox">2</div>
            <!-- 评价模块 -->
            <div class="conbox">
                <div class="pro_judge">
                	<!-- 评价等级 -->
                    <ul>
                        <li class="cur">
                            <input name="RadioGroup1" type="radio" value="" checked="checked" id="RadioGroup1_0" />
                            全部（100）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_1" />
                            好评（80）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_2" />
                            中评（10）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_3" />
                            差评（10）</li>
                    </ul>
                    <!-- 评价内容 -->
                    <table width="100%" border="0">
                        <tr>
                            <td width="80" align="left"><a href="" rel="images/01_mid.jpg" class="preview"><img src="/static/index/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>键盘手感很好，，效果绝对好的没法想象，而且键盘包装很好，手感很重<br />
                                <br /><span class="pro_judge_time">2018.7.3</span>
                            </td>
                            <td>张三</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- 热销产品模块 -->
    <div class="hotpro">
        <div class="hotpro_title">热销产品</div>
        <div class="hotpro_box">
            <div class="pro-view-hot">
                <?php if(is_array($productList2) || $productList2 instanceof \think\Collection || $productList2 instanceof \think\Paginator): $i = 0; $__LIST__ = $productList2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <ul>
                    <li class="pro-img"><a href="#"><img src="<?php echo $vo['ppic']; ?>" /></a></li>
                    <li class="price"><strong>￥ <?php echo $vo['pprice']; ?></strong><span>已销售227</span></li>
                    <li><a href="#" class="title"><?php echo $Brand[$vo['pcid']]; ?></a></li>
                </ul>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <style type="text/css">
                .pro-view-hot ul:last-child { margin-right: 0; }
            </style>
        </div>
    </div>

    <!-- 便捷服务 -->
    <div class="helper">
        <div class="mod">
            <div class="mod-wrap">
                <h4><img src="/static/index/images/h1.png" width="60" height="60" /><span>新手上路</span> </h4>
            </div>
        </div>
        <div class="mod">
            <div class="mod-wrap">
                <h4><img src="/static/index/images/h2.png" width="60" height="60" /><span>如何支付</span> </h4>
            </div>
        </div>
        <div class="mod">
            <div class="mod-wrap">
                <h4><img src="/static/index/images/h3.png" width="60" height="60" /><span>配送运输</span> </h4>
            </div>
        </div>
        <div class="mod mod-last">
            <div class="mod-wrap">
                <h4><img src="/static/index/images/h4.png" width="60" height="60" /><span>售后服务</span> </h4>
            </div>
        </div>
        <div class="mod mod-last">
            <div class="mod-wrap">
                <h4><img src="/static/index/images/h5.png" width="60" height="60" /><span>联系我们</span> </h4>
            </div>
        </div>
    </div>
</div>

<div class="clear">&nbsp;</div>


<!--弹出层时背景层DIV--> 
<!--商品添加成功DIV-->
<div id="fade" class="black_overlay"></div>
<div id="MyDiv" class="white_content">
    <div  style="width:385px; height:30px; background:#1ba67f; padding-left:15px; color:#fff; line-height:30px; font-size:14px;"> <span onclick="CloseDiv('MyDiv','fade')">
        <input type="button" class="addbtn">
        </span>商品加入货仓 </div>
    <div class="dialogbox">
        <p>商品添加成功！</p>
    </div>
</div>

<!--商品收藏成功DIV-->
<div id="fade2" class="black_overlay"></div>
<div id="MyDiv2" class="white_content">
    <div  style="width:385px; height:30px; background:#1ba67f; padding-left:15px; color:#fff; line-height:30px; font-size:14px;"> <span onclick="CloseDiv('MyDiv2','fade2')">
        <input type="button" class="addbtn">
        </span>商品收藏 </div>
    <div class="dialogbox">
        <p>商品收藏成功！</p>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		$(".jqzoom").imagezoom();
		
		$("#thumblist li a").mousemove(function(){
			$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
			$(".jqzoom").attr('src',$(this).find("img").attr("mid"));
			$(".jqzoom").attr('rel',$(this).find("img").attr("big"));
		});

	});
</script>


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
			<span class="fixeBoxSpan"></span> <strong>客服</strong>
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
