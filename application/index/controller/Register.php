<?php
// 注册(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Users;	// 调用Users模型
/**
 * 注册页
 */
class Register extends Controller
{
	// 显示注册界面
	public function index()
	{
		return $this->fetch();
	}

	// 注册界面数据处理
	public function registerdo(Request $request)
	{
		// 获取用户提交的注册信息
		$data = $request->post();
		$data['udate'] = date('Y-m-d H:i:s',time());	// 把时间戳转换为日期格式
		// dump($data);

		// 把数据添加到数据表中
		if ($data['uemail'] && $data['upwd'] && $data['cpass'] && $data['uname'] && $data['uphone'] != '') {
			if ($data['upwd'] === $data['cpass']) {
				// 删除确认密码
				unset($data['cpass']);
				// 对用户密码进行加密后保存
				$data['upwd'] = md5($data['upwd']);
				// dump($data);
				// $this->success('注册成功', url('index/Index/index'));
				if (Users::create($data)) {
					// 重定向到Index模块的index操作(直接跳转到首页)
					$this->redirect('index/Index/index');
				}
			} else {
				$this->error('注册失败，两次密码输入不正确，请重新输入');
			}
		} else {
			$this->error('注册失败，注册信息不能为空，请重新输入');
		}
	}
}