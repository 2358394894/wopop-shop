<?php
namespace app\admin\controller;

use think\Controller;

/**
 *  Common方法继承Controller
 */
class Common extends Controller
{
	// 检查是否登录
	/**
	 * _initialize() 初始化方法，用于类的初始化，tp框架的构造函数
	 * 初始化方法的注意事项 ：
	 * a)使用初始化方法必须继承Controller控制器类
	 * b)输出必须使用echo,return输出是不会显示的
	 */
	public function _initialize()
	{
		if (session('admin_user_status') !== true) {
			$this->error('请先登录！', 'admin/Login/login');
		}
	}
}