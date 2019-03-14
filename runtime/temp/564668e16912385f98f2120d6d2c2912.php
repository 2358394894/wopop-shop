<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"F:\phpStudy\WWW\public/../application/index\view\products\index.html";i:1540830338;s:55:"F:\phpStudy\WWW\application\index\view\layout\base.html";i:1541923579;}*/ ?>
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

<!-- 产品列表 -->
<script src="/static/index/js/accordion.js" type="text/javascript"></script>
<script src="/static/index/js/lrtk.js" type="text/javascript"></script>

<script type="text/javascript" charset="UTF-8">
//点击效果start(品牌的更多与收起动态)
 function infonav_more_down(index)
 {
  var inHeight = ($("div[class='p_f_name infonav_hidden']").eq(index).find('p').length)*60;//先设置了P的高度，然后计算所有P的高度
  if(inHeight > 60){
   $("div[class='p_f_name infonav_hidden']").eq(index).animate({height:inHeight});
   $(".infonav_more").eq(index).replaceWith('<p class="infonav_more"><a class="more"  onclick="infonav_more_up('+index+');return false;" href="javascript:">收起<em class="pulldown"></em></a></p>');
  }else{
   return false;
  }
 }
 function infonav_more_up(index)
 {
  var infonav_height = 85;
  $("div[class='p_f_name infonav_hidden']").eq(index).animate({height:infonav_height});
  $(".infonav_more").eq(index).replaceWith('<p class="infonav_more"> <a class="more" onclick="infonav_more_down('+index+');return false;" href="javascript:">更多<em class="pullup"></em></a></p>');
 }
   
 function onclick(event) {
  info_more_down();
 return false;
 }
 //点击效果end

//菜单列表动态效果
$(function(){
   $(".nav").accordion({
        //accordion: true,
        speed: 500,
	    closedSign: '+',
		openedSign: '-'
	});
}); 

$(function() { 
	$("#scrollsidebar").fix({
		float : 'left',
		//minStatue : true,
		skin : 'green',	
		durationTime : 600
	});
});
</script>

<!--产品列表样式-->
<div class="Inside_pages">
<!--位置-->
<div id="Filter_style">
	<div class="Location_link">
		<em></em><a href="#">外设天下</a>&ensp;&gt;&ensp;<a href="#">鼠标 🖱 / 键盘 ⌨ / 耳机 🎧</a>
	</div>
	<!--条件筛选样式-->
 	<div class="Filter" id="Filter">
 	<!-- 品牌 -->
  	<div class="Filter_list clearfix">
   		<div class="Filter_title"><span>品牌：</span></div>
   		<div class="Filter_Entire"><a href="#" class="Complete">全部</a></div>
   		<div class="p_f_name infonav_hidden" style="height: 85px;">
   			<p><?php if(is_array($cateList) || $cateList instanceof \think\Collection || $cateList instanceof \think\Paginator): $i = 0; $__LIST__ = $cateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<a href="#" title="<?php echo $vo['cname']; ?>"><?php echo $vo['cname']; ?></a>  
   			<?php endforeach; endif; else: echo "" ;endif; ?></p>
   			<p><?php if(is_array($cateList) || $cateList instanceof \think\Collection || $cateList instanceof \think\Paginator): $i = 0; $__LIST__ = $cateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<a href="#" title="<?php echo $vo['cname']; ?>"><?php echo $vo['cname']; ?></a>  
   			<?php endforeach; endif; else: echo "" ;endif; ?></p>
   			<p><?php if(is_array($cateList) || $cateList instanceof \think\Collection || $cateList instanceof \think\Paginator): $i = 0; $__LIST__ = $cateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<a href="#" title="<?php echo $vo['cname']; ?>"><?php echo $vo['cname']; ?></a>  
   			<?php endforeach; endif; else: echo "" ;endif; ?></p>
   		</div>
   		<p class="infonav_more"> <a class="more" onclick="infonav_more_down(0);return false;" href="javascript:">更多<em class="pullup"></em></a></p>
   	</div>
   	<!-- 产品类型 -->
   	<div class="Filter_list clearfix">
  		<div class="Filter_title"><span>产品分类：</span></div>
  		<div class="Filter_Entire"><a href="#" class="Complete">不限</a></div>
  		<div class="p_f_name">
    	<div class="clearfix"><a href="#">鼠标 🖱</a><a href="#">键盘 ⌨</a><a href="#">耳机 🎧</a></div>
    		<!-- 二级分类 -->
    		<div class="area_style">
      			<div class="Filter_Entire"><a href="#" class="Complete">不限</a></div>
		      	<div class="area_position"><a href="#" class="Filter_btn">新品上市</a><a href="#" class="Filter_btn">热销产品</a><a href="#" class="Filter_btn">促销产品</a></div>
    		</div>
    	</div>
    </div>
   	<!-- 价格区间 -->
   	<div class="Filter_list clearfix">
  		<div class="Filter_title"><span>价格区间：</span></div>
  		<div class="Filter_Entire"><a href="#" class="Complete">不限</a></div>
  		<div class="p_f_name">
    		<div class="clearfix"><a href="#">1-200</a><a href="#">201-500</a><a href="#">501-1000</a><a href="#">1001-1500</a><a href="#">1501-2000</a><a href="#">&gt;2000</a></div>
    	</div>
    </div>
  	</div>
</div>
<!--产品列表样式-->
<div class="scrollsidebar side_green clearfix" id="scrollsidebar"> 
	<div class="show_btn" id="rightArrow"><span></span></div>
	<!--左侧样式-->
	<div class="page_left_style side_content"  >
  		<div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
  		<div class="side_list">
    		<div class="title_name">菜单列表</div>
    		<div class="demo">
    			<ul class="nav">
    				<li class="Menu_Bar"><a href="#" target="_blank">◀&ensp;返回首页</a></li>
    				<li class="Menu_Bar"><a href="#">📞在线客服</a>
    					<ul><li><a href="#">人工客服</a></li>
		                	<li><a href="#">智能客服</a></li></ul>
		            </li>
		         	<li class="Menu_Bar"><a href="#">ℹ实时头条</a></li>
		         	<li class="Menu_Bar"><a href="#">🏷三级分类菜单</a></a>
		              	<ul>
		                   <li><a href="#" target="_blank">未定义</a></li>
		                   <li class="active"><a href="#">未定义</a></li>
		                   <li><a href="#">产品分类</a>
		                        <ul><li><a href="#">鼠标</a></li><li><a href="#">键盘</a></li><li><a href="#">耳机</a></li></ul>
		                   </li>
		               </ul>
		            </li>
		            <li class="Menu_Bar"><a href="#" target="_blank">©关于我们</a></li>
		        </ul>
		    </div>
		</div>
	</div>
	<div class="page_right_style">
		<div class="Sorted">
			<!-- 商品排列方式 -->
			<div class="Sorted_style"><a href="#" class="on">综合</a><a href="#">价格</a><a href="#">销量</a></div>
			<!--页数-->
			<div class="s_Paging">
				<span> 1/12</span><a href="#" class="on">&lt;</a><a href="#">&gt;</a>
			</div>
		</div>
		<div class="p_list  clearfix">
			<ul>
				<?php if(is_array($productList) || $productList instanceof \think\Collection || $productList instanceof \think\Paginator): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li class="gl-item">
					<em class="icon_special tejia"></em>
					<div class="Borders">
						<div class="img"><a href="<?php echo url('index/Details/index', ['id' => $vo['pid']]); ?>" target="_blank"><img src="<?php echo $vo['ppic']; ?>" style="width:220px;height:220px"></a></div>
						<div class="Price"><b>¥<?php echo $vo['pprice']; ?></b><span>限量</span></div>
						<div class="name"><a href="<?php echo url('index/Details/index', ['id' => $vo['pid']]); ?>" target="_blank"><?php echo $vo['pname']; ?></a></div>
						<div class="Shop_name"><a href="#"><?php echo $Brand[$vo['pcid']]; ?> 旗舰店</a></div>
						<div class="p-operate">
							<a href="#" class="p-o-btn Collect"><em></em>收藏</a>
							<a href="#" class="p-o-btn shop_cart"><em></em>联系我们</a>
						</div>
					</div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="Paging">
				<div class="Pagination">
					<a href="#">首页</a>
					<a href="#" class="pn-prev disabled">&lt;上一页</a>
					<a href="#" class="on">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a>
					<a href="#">下一页&gt;</a><a href="#">尾页</a>	
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- 产品列表样式 END -->
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
