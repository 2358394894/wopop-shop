<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"F:\phpStudy\WWW\public/../application/index\view\address\index.html";i:1541842198;s:55:"F:\phpStudy\WWW\application\index\view\layout\base.html";i:1541923579;s:56:"F:\phpStudy\WWW\application\index\view\layout\ubase.html";i:1541984623;}*/ ?>
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

<!--右侧样式属性-->
<div class="right_style">
    <!--地址管理-->
    <div class="user_address_style">
        <div class="title_style"><em></em>地址管理</div> 
        <div class="add_address">
            <span class="name">添加送货地址</span>
            <form id="tab" action="<?php echo url('index/Address/insert'); ?>" method="post" enctype="multipart/form-data">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr><td class="label_name">收&nbsp;货&nbsp;&nbsp;人：</td><td><input name="dname" type="text"  class="add_text" style=" width:100px"/><i>*</i></td></tr>
                    <tr><td class="label_name">详细地址：</td><td><textarea name="daddress" cols="" rows="" style=" width:500px; height:100px; margin:5px 0px"></textarea><i>*</i></td></tr>
                    <tr><td class="label_name">邮&emsp;&ensp;&nbsp;编：</td><td><input name="zipcode" type="text" class="add_text" style=" width:100px"/><i>*</i></td></tr>
                    <tr><td class="label_name">手&emsp;&ensp;&nbsp;机：</td><td><input name="dphone" type="text" class="add_text" style=" width:200px"/>&ensp;(选填)</td></tr>
                    <tr class="moren_dz" style="color: #999"><td class="label_name"></td><td><label><input name="" type="checkbox" value="" />设置为默认地址</label></td></tr>
                    <tr><td colspan="2" class="center"><input type="submit" value="保存"  class="add_dzbtn"/><input type="reset" value="清空" onclick="res()" class="reset_btn"/></td></tr>
                    <script type="text/javascript">
                        function res() {
                            document.getElementById('tab').reset();
                        }
                    </script>
                </table>
            </form>
        </div>
        <!--用户地址-->
        <div class="address_content">
            <div class="address_prompt">以添加了5条地址，最多保存添加15条地址</div>
            <table cellpadding="0" cellspacing="0" class="user_address" width="100%">
                <thead>
                    <tr class="label"><td width="80px;">收货人</td><td width="400px;">详细地址</td><td width="80px;">邮编</td><td width="120px;">电话手机</td><td width="180px;">发票抬头</td><td width="80px;">操作</td></tr>
                </thead>
                <?php if(is_array($arList) || $arList instanceof \think\Collection || $arList instanceof \think\Paginator): $i = 0; $__LIST__ = $arList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tbody>
                    <tr><td><?php echo $vo['dname']; ?></td><td><?php echo $vo['daddress']; ?></td><td><?php echo $vo['zipcode']; ?></td><td><?php echo $vo['dphone']; ?></td><td>个人</td><td><a href="#">修改</a> | <a href="<?php echo url('index/Address/delete', ['id' => $vo['did']]); ?>">删除</a></td></tr>
                </tbody>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </div>
</div>

</div>
</div>
<script>
    $(document).ready(function(){
        $('.moren_dz input').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
    });
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
