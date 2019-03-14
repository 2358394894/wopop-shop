<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Admins;  // 调用Admins模型
/**
 * 后台登录模块
 */
class Login extends Controller
{
	// 显示登录界面
	public function login()
	{
		return $this->fetch();
	}

	// 登录页面数据验证
	public function logindo(Request $request)
	{
		// $post = $request->param();
		// 获取用户提交的用户名与密码，并对密码进行加密后保存
		$post = $request->post();
		$post['apwd'] = md5($post['apwd']);
		// dump($post);
		// 把获取到的数据与数据表记录进行查找比对
		$res = Admins::where($post)->find();

		if ($res) {
			session('admin_user_status', true);	// 用于记录登录状态
			session('admin_name', $res->aname);
			session('admin_id', $res->aid);
			$this->success('登录成功！',url('admin/Index/index'));
		} else {
			$this->error('登陆错误，账号或密码错误！');
		}
		
	}
}