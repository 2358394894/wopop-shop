<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

// 在全局范围用指定正则表达式限定路由参数，使用 pattern 方法
// \d表示一位数字，\d+ 或 (\d)+ 表示由一个或者多个数字组成，\ 表示转义符，\. 就是表示.
// \w 表示匹配大小写英文字母、数字以及下划线，等价于'[A-Za-z0-9_]'，“+”元字符规定其前导字符必须在目标对象中连续出现一次或多次。[\w]+或\w+表示匹配数字和字母下划线的多个字符
Route::pattern([
    'id' => '\d+',
	'uid' => '\d+',
	'type' => '\w+',
]);

/**
 * 前台模块 路由
 */

// 网站首页
Route::get('/','index/Index/index');

// 商品列表页
Route::get('/product','index/Products/index');
// 商品详情页
Route::get('/details/:id','index/Details/index');
// 注册页
Route::get('/register','index/Register/index');
Route::post('/register','index/Register/registerdo');   // 注册数据处理
// 登录页
Route::get('/login','index/Login/index');
Route::post('/login','index/Login/logindo');     // 登录数据验证
// 退出登录(用户)
Route::get('/logout','index/Index/logout');    // 用户退出登录

// 个人中心模块
Route::get('/user','index/User/logout');    // 个人中心
// 用户信息模块
Route::get('/userinfo','index/Userinfo/index');    // 用户信息
Route::post('/userinfo','index/Userinfo/update');    // 修改用户信息
// 收货地址
Route::get('/address/:id','index/Address/delete');   // 删除收货地址
Route::get('/address','index/Address/index');   // 收货地址

// 新闻中心
Route::get('/news','index/News/index');

// 我的订单
Route::get('/order','index/Order/index');
// *用户确认收货*
Route::get('/order/confirm','index/Order/confirm');

// 确认订单
Route::get('/confirmorder','index/Confirmorder/index');
// 保存订单
Route::put('/confirmorder','index/Confirmorder/insert');
// 支付界面
Route::get('/pay/:id','index/Pay/index');

/**
 * 后台模块 路由
 */

// 后台登录(管理员)
Route::get('/admin/login', 'admin/Login/login'); 	// 登录页面
Route::post('/admin/login', 'admin/Login/logindo'); // 登录数据验证
// 退出登录
Route::get('/admin/logout', 'admin/Index/logout');

// 后台(首页)的路由
Route::get('/admin/index', 'admin/Index/index');

// 后台用户列表
Route::get('/admin/user', 'admin/Users/index'); // 显示用户列表

// 后台商品列表
// 显示页面(判断视图路径的路由必须位于所有视图文件(index、insert、edit)之上)
Route::get('/admin/product/:id', 'admin/Product/delete');// 删除商品
Route::get('/admin/product/:type/[:id]','admin/Product/view');// 显示页面
Route::get('/admin/product', 'admin/Product/index');	// 商品列表
Route::put('/admin/product', 'admin/Product/insert');	// 添加商品
Route::post('/admin/product', 'admin/Product/update');	// 修改商品信息


// 后台订单列表
Route::get('/admin/orders/delete','admin/Orders/delete');  // 删除订单
Route::get('/admin/orders/:type/[:id]/[:uid]','admin/Orders/view');// 显示页面
Route::get('/admin/orders', 'admin/Orders/index');    // 订单列表
Route::post('/admin/orders', 'admin/Orders/update');  // 修改订单信息数据处理

// 后台品牌列表
Route::get('/admin/category/:id','admin/Category/delete');	// 删除品牌
Route::get('/admin/category/:type/[:id]','admin/Category/view');// 显示页面
Route::get('/admin/category','admin/Category/index');	// 品牌列表
Route::put('/admin/category','admin/Category/insert');	// 添加品牌
Route::post('/admin/category','admin/Category/update');	// 修改品牌

// 后台管理员列表
Route::get('/admin/admins/:id','admin/Admins/delete');	// 删除管理员
Route::get('/admin/admins/:type/[:id]','admin/Admins/view'); // 显示页面
Route::get('/admin/admins','admin/Admins/index');	// 管理员列表
Route::put('/admin/admins','admin/Admins/insert');	// 添加管理员
Route::post('/admin/admins','admin/Admins/update');	// 修改管理员

// 后台新闻列表
Route::get('/admin/news/:id','admin/News/delete');	// 删除新闻
Route::get('/admin/news/:type/[:id]','admin/News/view'); // 显示页面
Route::get('/admin/news','admin/News/index');		// 新闻列表
Route::put('/admin/news','admin/News/insert');		// 添加新闻
Route::post('/admin/news','admin/News/update');		// 修改新闻

// 后台广告图列表
Route::get('/admin/banner/:id','admin/Banner/delete');  // 删除广告图
Route::get('admin/banner/:type/[:id]','admin/Banner/view'); // 显示页面
Route::get('admin/banner','admin/Banner/index');     // 广告图列表
Route::put('admin/banner','admin/Banner/insert');    // 添加广告图
Route::post('admin/banner','admin/Banner/update');    // 修改广告图


// 用作调试，查看管理用户状态(调试用)
Route::get('/admin_user', function(){
	var_dump(session('admin_user_status'));
});


/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/