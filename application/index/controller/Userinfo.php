<?php
// 个人信息(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Users;
/**
 * 个人信息
 */
class Userinfo extends Common
{

	public function index(Request $request)
	{
		// 获取对应用户ID号的用户信息
		$num = session('user_id');
		// dump($num);
		// 获取当前用户信息
		$userdata = Users::where('uid' , $num)->select();

		$this->assign('userdata' , $userdata);

		return $this->fetch();
	}

	// 修改用户信息
	public function update(Request $request)
	{
		$data = $request->param();	// 获取用户提交的表单数据(post)
		// dump($data);
		// 修改用户表中对应的记录(用户ID)
		$res = Users::update($data);
		if ($res) {
			// 修改成功后页面跳转
			$this->redirect('index/Userinfo/index');
		} else {
			$this->error('修改失败');
		}
		
	}
}