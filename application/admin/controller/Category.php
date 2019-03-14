<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category as Cate;

/**
 * 品牌模块
 */
class Category extends Common
{
	// 品牌列表界面
	public function index()
	{
		$res = Cate::select();
		// dump($res);
		$this->assign('res',$res);
		return $this->fetch();
	}

	// 添加品牌
	public function insert(Request $request)
	{
		$data = $request->param();
		unset($data['_method']);
		// dump($data);
		$res = Cate::create($data);

		if ($res) {
			$this->success('添加成功！',url('admin/Category/index'));
		} else {
			$this->error('添加失败');
		}
	}

	// 修改品牌
	public function update(Request $request)
	{
		$edit = Cate::find($request->param('id'));
		// print($edit);
		// 获取输入的新名称，并更新数据表中的值
		$edit->cname = $request->param('cname');
		// dump($edit->cname);
		$res = $edit->save();

		if ($res) {
			$this->success('修改成功！',url('admin/Category/index'));
		} else {
			$this->error('修改失败');
		}
	}

	// 删除品牌
	public function delete(Request $request)
	{
		$id = $request->param('id');

		$res = Cate::destroy($id);

		if ($res) {
			$this->success('删除成功！');
		} else {
			$this->error('删除失败');
		}
	}

	// 用于展示添加或修改的页面
	public function view(Request $request)
	{
		if ($request->param('type') == 'insert') {
			return $this->fetch('insert');

		} else if ($request->param('type') == 'edit') {
			$cid = $request->param('id');
			// dump($cid);
			$res = Cate::find($cid);
			// 将数据分配到模板
			$this->assign('res',$res);
			// 返回视图
			return $this->fetch('edit');
		} else {
			echo "error";
		}
	}
}