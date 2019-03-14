<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"F:\phpStudy\WWW\public/../application/index\view\user\index.html";i:1542803051;s:55:"F:\phpStudy\WWW\application\index\view\layout\base.html";i:1541923579;s:56:"F:\phpStudy\WWW\application\index\view\layout\ubase.html";i:1541984623;}*/ ?>
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

<!-- 用户中心css -->
<link href="/static/index/css/user_style.css" rel="stylesheet" type="text/css" />


<!--用户中心样式-->
<div class="user_style clearfix">
  <div class="user_center clearfix">

    <!-- 左侧用户信息 -->
    <!-- 使用包含文件继承公共代码 -->
    <!-- 左侧用户信息 -->
<div class="left_style">
  <div class="menu_style">
    <div class="user_title"><a href="用户中心.html">用户中心</a></div>
    <div class="user_Head">
      <div class="user_portrait">
        <a href="#" title="修改头像" class="btn_link"></a> <img src="/static/index/images/people.png">
        <div class="background_img"></div>
      </div>
      <div class="user_name">
        <p><span class="name"><?php echo session('user_name');?></span><a href="<?php echo url('index/Userinfo/index'); ?>">[修改信息]</a></p>
        <p>访问时间：2016-1-21 10:23</p>
      </div>
    </div>
    <!--菜单列表图层-->
    <div class="sideMen">
      <dl class="accountSideOption1">
        <dt class="transaction_manage"><em class="icon_1"></em>订单管理</dt>
        <dd>
          <ul>
            <li><a href="<?php echo url('index/Order/index'); ?>">我的订单</a></li>
            <li><a href="<?php echo url('index/Address/index'); ?>">收货地址</a></li>
            <li><a href="#">产品预订</a></li>
          </ul>
        </dd>
      </dl>
      <dl class="accountSideOption1">
        <dt class="transaction_manage"><em class="icon_2"></em>会员管理</dt>
        <dd>
          <ul>
            <li><a href="<?php echo url('index/Userinfo/index'); ?>">个人信息</a></li>
            <li><a href="#">我的留言</a></li>
            <li><a href="#">我的评论</a></li>
          </ul>
        </dd>
      </dl>
      <dl class="accountSideOption1">
        <dt class="transaction_manage"><em class="icon_3"></em>账户管理</dt>
        <dd>
          <ul>
            <li><a href="#">账户余额</a></li>
            <li><a href="#">消费记录</a></li>
            <li><a href="#">跟踪包裹</a></li>
            <li><a href="#">资金管理</a></li>
          </ul>
        </dd>
      </dl>
    </div>

    <script>jQuery(".sideMen").slide({titCell:"dt", targetCell:"dd",trigger:"click",defaultIndex:0,effect:"slideDown",delayTime:300,returnDefault:true});</script>
  </div>
</div>
<!-- End-左侧用户信息 --><!-- End-左侧用户信息 -->

    <!--右侧样式-->
    <div class="right_style">

      <!-- 公告与用户信息 -->
      <div class="info_content">
        <div class="Notice"><span>系统最新公告:</span>为了更好地服务于【每日鲜】的会员朋友及读者 发表意见。</div>
        <div class="user_info">
          <ul class="">
           <li class="Balance"><a href="#"><img src="/static/index/images/user_img_05.png" /><h4>余额：￥54.00</h4></a></li>
           <li class="Order_form"><a href="#"><img src="/static/index/images/user_img_04.png" /><h4>订单：(5)</h4></a></li>
           <li class="grade"><a href="#"><img src="/static/index/images/user_img_08.png" /><h4>3</h4></a></li>
           <li class="Favorable"><a href="#"><img src="/static/index/images/user_img_07.png" /><h4>钻石会员</h4></a></li>
           <li class="integral"><a href="#"><img src="/static/index/images/user_img_06.png" /><h4>234分</h4></a></li>
         </ul>
       </div>
      </div><!-- End-公告与用户信息 -->

      <!--样式-->
      <div class="user_info_p_s  clearfix">

        <!--订单记录-->
        <div class="left_user_cont">
          <div class="us_Orders left clearfix">
            <div class="Orders_name">
              <div class="title_name"><div class="Records">购买记录</div><div class="right select">只记录你最近30天的购买记录</div></div>
            </div>
            <table>
              <thead>
                <tr>
                  <th>产品名称</th><th>单价</th><th>数量</th><th>状态</th><th>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($oitemsList) || $oitemsList instanceof \think\Collection || $oitemsList instanceof \think\Paginator): $k = 0; $__LIST__ = $oitemsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                <!-- 这样就设置了只循环3条数据，offset的意思是从第几条记录开始，length是循环多少次的意思 -->
                <tr>
                  <td class="img_link">
                    <a href="#" class="img"><img src="<?php echo $opic[$vo['opid']]; ?>" width="80" height="80"></a>
                    <a href="#" class="title" style="width: 200px;"><?php echo $opname[$vo['opid']]; ?></a>
                  </td>
                  <td><?php echo $vo['opprice']; ?></td>
                  <td><?php echo $vo['onum']; ?></td>
                  <td>
                    <?php switch($ostate[$vo['oid']]): case "1 2": ?><p style="color: red;">交易中</p><?php break; case "3": ?><p style="color: #999999;">交易完毕</p><?php break; default: ?>未定义
                    <?php endswitch; ?>
                  </td>
                  <td><a href="#" class="View">查看</a></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
            <!-- 记录数放在循环外获取 -->
            <div class="us_jls">共&ensp;<?php echo $k; ?>&ensp;条记录</div>
          </div>
        </div>
<!--右侧记录样式-->
<div class="right_user_recording">
  <div class="us_Record">
   <div id="Record_p" class="Record_p">
     <div class="title_name"><span class="name left">浏览历史</span><span class="pageState right"><span>1</span>/7</span></div>
     <div class="hd"><a class="next">&lt;</a><a class="prev">&gt;</a></div>
     <div class="bd">
      <ul >
        <?php if(is_array($productList2) || $productList2 instanceof \think\Collection || $productList2 instanceof \think\Paginator): $i = 0; $__LIST__ = $productList2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class="clone">
          <div class="p_width">
            <div class="pic"><a href=""><img src="<?php echo $vo['ppic']; ?>"></a></div>	
            <div class="title"><a href="#"><?php echo $vo['pname']; ?></a></div>
            <div class="Purchase_info"><span class="p_Price">￥<?php echo $vo['pprice']; ?></span> <a href="#" class="Purchase">立即购买</a></div>
          </div>	
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>    
  </div>
  <script type="text/javascript">jQuery("#Record_p").slide({ mainCell:".bd ul",effect:"leftLoop",vis:1,autoPlay:false });</script>
</div>
</div>      
</div>



<!--收藏商品-->
<div class="Collections_p">
  <div class="slideGroups">
    <div class="parHd">
      <ul><li>收藏的商品</li><li>收藏的店铺</li></ul>
    </div>
    <div class="parBd">
      <!-- 收藏的商品 -->
      <div class="Collect_Products">
        <a class="sPrev" href="javascript:void(0)">&lt;</a>
        <ul >
          <?php if(is_array($productList) || $productList instanceof \think\Collection || $productList instanceof \think\Paginator): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li>
            <div class="pic"><a href=""><img src="<?php echo $vo['ppic']; ?>"></a></div>	
            <div class="title"><a href="#"><?php echo $vo['pname']; ?></a></div>
            <div class="p_Price">￥<?php echo $vo['pprice']; ?></div>		
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <a class="sNext" href="javascript:void(0)">&gt;</a>
        <a href="#" class="more">更多收藏</a>
      </div>
      <!-- 收藏的店铺 -->
      <div class="Collect_Products">
       <a class="sPrev" href="javascript:void(0)">&lt;</a>
       <ul >
        <?php if(is_array($productList2) || $productList2 instanceof \think\Collection || $productList2 instanceof \think\Paginator): $i = 0; $__LIST__ = $productList2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li>
          <div class="pic"><a href=""><img src="<?php echo $vo['ppic']; ?>"></a></div>
          <div class="title"><a href="#"><?php echo $vo['pname']; ?></a></div>
          <div class="shop_name"><span>品牌：<?php echo $Brand[$vo['pcid']]; ?></span><a href="#" >进入店铺</a></div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <a class="sNext" href="javascript:void(0)">&gt;</a>
      <a href="#" class="more">更多收藏</a>
    </div>
  </div>
</div>
<script type="text/javascript">
 /* 内层图片无缝滚动 */
 jQuery(".slideGroups .Collect_Products").slide({ mainCell:"ul",vis:5,prevCell:".sPrev",nextCell:".sNext",effect:"leftMarquee",interTime:50,autoPlay:true,trigger:"click"});

 /* 外层tab切换 */
 jQuery(".slideGroups").slide({titCell:".parHd li",mainCell:".parBd",trigger:"click"});

</script>
</div>
<!--结束-->       
</div>

</div>
</div>
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
