<?php
// 注册(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Users;
/**
 * 注册页
 */
class Login extends Controller
{
	// 显示登录界面
	public function index()
	{
		return $this->fetch();
	}

	// 登陆界面数据验证
	public function logindo(Request $request)
	{
		// 获取用户提交的账号(手机号)与密码，并对密码进行加密后保存
		$data = $request->post();

		$check['uphone'] = $data['account'];
		$check['upwd'] = md5($data['upwd']);

		// unset($data['account']);
		// dump($data);

		// 把获取到的数据与数据表记录进行查找比对
		$res = Users::where($check)->find();
		// dump($res);
		// 比对成功时(记录存在)跳转到首页
		if ($res) {
			session('user_status' , true);
			// 获取session数据,用于记录(用户)登录状态
			session('user_name' , $res->uname);
			session('user_id' , $res->uid);
			// 登陆成功后页面跳转
			$this->redirect('index/Index/index');
		} else {
			$this->error('登陆错误，账号或密码错误！');
		}

		// 执行下面这条语句就可以了，只会翻译成sql语句，不会执行。
		// echo Users::where($check)-> fetchSql(true) ->find();
		

		/*$User = M("User"); // 实例化User对象
		$map['name'] = 'thinkphp';
		$map['status'] = 1;
		 // 把查询条件传入查询方法
		$User->where($map)->select(); */
	}
}