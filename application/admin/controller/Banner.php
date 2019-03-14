<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Banner as Ban;
/**
 * 广告图模块
 */
class Banner extends Common
{
	// 广告图列表界面
	public function index()
	{
		$bannerList = Ban::select();

		$this->assign('res', $bannerList);

		return $this->fetch();
	}

	// 添加广告图
	public function insert(Request $request)
	{
		$data = $request->param();	// 把接收的数据保存到$data
		unset($data['_method']);	// 删除$data中的'_method'方法(隐藏控件,put)

		$file = $request->file('bpic');		// 获取上传文件(路径)，并转换为文件编码保存
		$res = $file->move(ROOT_PATH.'public/uploads'); // 把文件移动到框架应用根目录/public/uploads/ 目录下(文件已保存)
		// 把路径地址赋给$data['bpic']
		$data['bpic'] = '/uploads/'.$res->getSaveName();

		// dump($data);

		if (Ban::create($data)) {
			$this->success('添加成功！',url('admin/Banner/index'));
		} else {
			$this->error('添加失败');
		}
	}

	// 修改广告图
	public function update(Request $request)
	{
		$data = $request->param();	// 获取edit.html中提交的表单数据(post)
		$im = $data['bimg'];		// 把表单的原图片地址(value值)保存到$im
		unset($data['bimg']);		// 删除表单中的'bimg'项
		// dump($data);

		$mark = false;				// 记录是否有新文件上传
		// 获取用户上传的新文件, 把上传文件转换为文件编码保存到$file
		$file = $request->file('bpic');
		if ($file) {
			// 当有文件上传时，则更新数据表记录
			$mark = true;
			$res = $file->move(ROOT_PATH.'public/uploads'); // 把文件保存到新路径
			$data['bpic'] = '/uploads/'.$res->getSaveName();

		} else {
			// 没有新文件上传时，把$im的值(原文件)赋给数据表数据中的对应项
			$data['bpic'] = $im;
		}
		// dump($data);
		// 修改数据表记录
		if (Ban::update($data)) {
			// 当有新文件上传时则删除旧文件记录
			// 先统一删除图片文件前包含'.'，再为图片文件添加'.'
			$path = '.' . ltrim($im, '.');
			// 当新文件上传结束时，删除($im)原文件记录
			if($mark && file_exists($path)) {
				unlink($path);
			}
			$this->success('修改成功！',url('admin/Banner/index'));

		} else {
			$this->error('修改失败');
		}
	}

	// 删除广告图
	public function delete(Request $request)
	{
		// 获取对应广告图ID号的图片路径(删除文件)
		$num = $request->param('id');
		// dump($num);
		$data = Ban::where('bid',$num)->value('bpic');
		$path = '.' . ltrim($data , '.');
		// print_r($path);
		// 删除数据表中对应(ID号)的记录
		if (Ban::destroy($request->param('id'))) {
			$del = unlink($path);	// unlink()函数删除文件。成功返回 true，失败则返回false
			if ($del) {
				$this->success('删除成功！');
			}
		} else {
			$this->error('删除失败');
		}
	}

	// 展示添加或修改的页面
	public function view(Request $request)
	{
		if ($request->param('type') == 'insert') {
			return $this->fetch('insert');

		} elseif ($request->param('type') == 'edit') {
			// 查出与页面传递的ID值相等的一条数据，保存到变量$banner中
			$banner = Ban::find($request->param('id'));

			$this->assign('ban',$banner);

			return $this->fetch('edit');

		} else {
			echo "error";
		}
		// return '展示添加或则修改的页面';
	}
}