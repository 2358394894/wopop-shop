<?php
// 用户地址(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Users;
use app\admin\model\Address as Ar;
/**
 * 用户地址
 */
class Address extends Common
{
	// 地址管理显示界面
	public function index()
	{
		// 获取当前用户的收货地址
		$uid = session('user_id');
		$arList = Ar::where('duid' , $uid)->select();
		// dump($arList);

		$this->assign('arList' , $arList);

		return $this->fetch();
	}

	// 添加收货地址
	public function insert(Request $request)
	{
		$data = $request->param();
		// 保存用户ID号，用于记录查询
		$data['duid'] = session('user_id');
		// dump($data);

		if (Ar::create($data)) {
			// $this->success('添加成功',url('index/Address/index'));
			$this->redirect('index/Address/index');
		} else {
			$this->error('添加失败');
		}
	}

	// 删除收货地址
	public function delete(Request $request)
	{
		$id = $request->param('id');
		// dump($id);
		if (Ar::destroy($id)) {
			$this->success('删除成功！');
			// $this->redirect('index/Address/index');
		} else {
			$this->error('删除失败');
		}
	}

	// 修改收货地址
}