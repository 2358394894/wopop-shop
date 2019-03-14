<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
/**
 * 后台首页
 */
class Index extends Common
{
	// 首页界面
	public function index()
	{
		return $this->fetch();
	}

	// 退出登录
	public function logout()
	{
		session('admin_user_status', null);	// 用于记录登录状态
		session('admin_name', null);
		session('admin_id', null);
		$this->success('退出成功！', url('admin/Login/login'));
	}
}