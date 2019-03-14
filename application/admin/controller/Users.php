<?php
// (Users)控制器
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Users as UserModel;

class Users extends Common
{
	// (后台)用户列表列表
	public function index()
	{
		// 查询所有数据
		$res = UserModel::select();
		// 数组不能用 echo 来输出，需用print_r() 来输出数组，使用dump(),var_dump() 来查看数据类型
		// var_dump($res);

		// 将数据分配到模板
		$this->assign('res',$res);
		return $this->fetch();
	}
}