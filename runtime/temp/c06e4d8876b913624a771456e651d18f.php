<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"F:\phpStudy\WWW\public/../application/index\view\order\index.html";i:1542523994;s:55:"F:\phpStudy\WWW\application\index\view\layout\base.html";i:1541923579;s:56:"F:\phpStudy\WWW\application\index\view\layout\ubase.html";i:1541984623;}*/ ?>
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
<!-- 订单管理选择样式 -->
<script src="/static/index/js/iCheck.js" type="text/javascript"></script>


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
            <div class="title_style"><em></em>订单管理</div> 
            <div class="Order_form_style">
                <div class="Order_form_filter">
                    <a href="#" class="on">全部订单（23）</a>
                    <a href="#" class="">代付款（2）</a>
                    <a href="#" class="">代发货（3）</a>
                    <a href="#" class="">待收货（5）</a>
                    <a href="#" class="">退货/退款（0）</a>
                    <a href="#" class="">交易成功（0）</a>
                    <a href="#" class="">交易关闭（0）</a>
                </div>
                <div class="Order_Operation">
                    <div class="left"> <label><input name="" type="checkbox" value=""  class="checkbox"/>全选</label> <input name="" type="submit" value="批量确认收货"  class="confirm_Order"/></div>
                    <div class="right_search"><input name="" type="text"  class="add_Ordertext" placeholder="请输入产品标题或订单号进行搜索"/><input name="" type="submit" value="搜索订单"  class="search_order"/></div>
                </div>
                <div class="Order_form_list">
                    <table>
                        <thead>
                            <tr><td class="list_name_title0">商品</td>
                                <td class="list_name_title1">单价(元)</td>
                                <td class="list_name_title2">数量</td>
                                <td class="list_name_title4">实付款(元)</td>
                                <td class="list_name_title5">订单状态</td>
                                <td class="list_name_title6">操作</td>
                            </tr>
                        </thead>
                        <?php if(is_array($oitem) || $oitem instanceof \think\Collection || $oitem instanceof \think\Paginator): $k = 0; $__LIST__ = $oitem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <tbody>
                            <tr class="Order_info"><td colspan="6" class="Order_form_time"><input name="" type="checkbox" value=""  class="checkbox"/>下单时间：<?php echo $vo['odate']; ?>&emsp;|&emsp;订单号：4456456 -- <em class="oid"><?php echo $vo['oid']; ?></em></td></tr>
                            <tr class="Order_Details">
                                <td colspan="3">
                                    <table class="Order_product_style">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="product_name clearfix">
                                                        <a href="#" class="product_img"><img src="<?php echo $opic[$vo['opid']]; ?>" width="80px" height="80px"></a>
                                                        <a href="3" class="p_name"><?php echo $opname[$vo['opid']]; ?></a>
                                                        <p class="specification"><?php echo $vo['onum']; ?>/件</p>
                                                    </div>
                                                </td>
                                                <td style="text-align: right;"><?php echo $vo['opprice']; ?></td>
                                                <td><?php echo $vo['onum']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>   
                                <td class="split_line"><?php echo $vo['ototal']; ?></td>
                                <td class="split_line">
                                    <p style="color:#F30">
                                    <?php switch($vo['ostate']): case "1": ?>买家已付款<?php break; case "2": ?>已发货、待收货<?php break; case "3": ?>已确认收货<p style="color: #999999;">交易完毕</p><?php break; default: ?>未定义
                                    <?php endswitch; ?>
                                    </p>
                                </td>
                                <td class="operating">
                                    <a href="#">查看订单</a>
                                    <a href="#" class="logistics">查看物流</a>
                                    <a href="#">联系客服</a>
                                    <!-- 创建表单隐藏控件，保存当前订单状态码 -->
                                    <p class="state" hidden><?php echo $ordstate[$vo['oid']]; ?></p>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <script type="text/javascript">
                            var cs = $(".state").length;  // 获取.state的长度
                            // console.log(cs);
                            for(i=0;i<cs;i++){
                                // 获取对应下标的.state的内容，进行比对
                                if ($(".state").eq(i).text() == 1) {
                                    $('.operating').eq(i).append('<a href="#">提醒发货</a>').children('.logistics').remove();
                                }else if ($(".state").eq(i).text() == 2) {
                                    // 获取与.state下标对应.oid的内容(当前订单的id号)
                                    var aa = $('.oid').eq(i).text();
                                    // console.log(aa);
                                    $('.operating').eq(i).append('<a href="/order/confirm?id='+aa+'" class="Delivery_btn">确认收货</a>');
                                }else if ($(".state").eq(i).text() == 3) {
                                    var aa = $('.oid').eq(i).text();// 获取订单id号
                                    // console.log(aa);
                                    $('.operating').eq(i).append('<a href="'+aa+'" class="Refund_btn">评价商品</a>').children('.logistics').remove();
                                }
                            }
                        </script>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.Order_form_style input').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });
        </script>
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
