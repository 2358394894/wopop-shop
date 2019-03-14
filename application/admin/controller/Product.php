<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Product as Pro;
use app\admin\model\Category as Cate;

/**
 * 商品模块
 */
class Product extends Common
{
	// 商品列表界面
	public function index()
	{
		$productList = Pro::select();
		// dump($productList);
		$cateGory = Cate::select();

		$newList = [];

		foreach ($cateGory as $key => $value) {
			$newList[$value->cid] = $value->cname;
		}

		// 将数据分配到模板
		$this->assign('cateGory',$newList);
		$this->assign('productList',$productList);
		// 返回视图
		return $this->fetch();
	}

	// 添加商品信息
	public function insert(Request $request)
	{
		$data = $request->param();	// 把接收的表单数据保存到$data
		unset($data['_method']);	// 删除$data中的'_method'方法(隐藏控件,put)

		$data['pdate'] = date('Y-m-d H:i:s',time());	// 把时间戳转换为日期格式

		$file = $request->file('ppic');		// 获取上传文件(路径)，并转换为文件编码保存
		$res = $file->move(ROOT_PATH.'public/uploads');		// 定义文件保存路径

		$data['ppic'] = '/uploads/'.$res->getSaveName();

		// dump($data);

		if (Pro::create($data)) {
			$this->success('添加成功',url('admin/Product/index'));
		} else {
			$this->error('添加失败');
		}
	}

	// 修改商品信息
	public function update(Request $request)
	{
		$data = $request->param();	// 获取edit.html中提交的表单数据(post)
		$im = $data['pimg'];		// 把表单的原图片地址(value值)保存到$im
		// dump($data);
		unset($data['pimg']);		// 删除表单中的'pimg'项

		$mark = false;				// 记录是否有新文件上传
		// 获取用户上传的新文件, 把上传文件转换为文件编码保存到$file
		$file = $request->file('ppic');
		if ($file) {
			// 当有文件上传时，则更新数据表记录
			$mark = true;
			$res = $file->move(ROOT_PATH.'public/uploads'); // 把文件保存到新路径
			$data['ppic'] = '/uploads/'.$res->getSaveName();

		} else {
			// 没有新文件上传时，把$im的值(原文件)赋给数据表数据中的对应项
			$data['ppic'] = $im;
		}
		// dump($data);
		if (Pro::update($data)) {
			// 先统一删除图片文件前包含'.'，再为图片文件添加'.'
			$path = '.' . ltrim($im, '.');
			// 当文件上传结束时，删除($im)原文件记录
			if($mark && file_exists($path)) {
				unlink($path);
			}
			$this->success('修改成功！',url('admin/Product/index'));

		} else {
			$this->error('修改失败');
		}
	}

	// 删除商品信息
	public function delete(Request $request)
	{
		// 获取对应商品ID号的图片路径
		$num = $request->param('id');
		$data = Pro::where('pid',$num)->value('ppic');
		$path = '.' . ltrim($data,'.');
		// print_r($path);
		// 删除数据表中对应的记录
		if (Pro::destroy($request->param('id'))) {
			$del = unlink($path);	// unlink()函数删除文件。成功返回 true，失败则返回 false
			if ($del) {
				$this->success('删除成功！');
			}
		} else {
			$this->error('删除失败');
		}
	}

	// 用于展示添加或修改的页面
	public function view(Request $request)
	{
		if ($request->param('type') == 'insert') {
			$cateGory = Cate::select();		// 查询品牌分类

			$newList = [];
			// 把所有品牌保存到数组
			foreach ($cateGory as $key => $value) {
				$newList[$value->cid] = $value->cname;
			}

			$this->assign('cateGory',$newList);

			return $this->fetch('insert');

		} else if ($request->param('type') == 'edit') {
			$cateGory = Cate::select();

			$newList=[];
			// 把所有品牌保存到数组
			foreach ($cateGory as $key => $value) {
				$newList[$value->cid] = $value->cname;
			}
			// 查出与页面传递的ID值相等的一条数据，保存到变量$product中
			$product = Pro::find($request->param('id'));

			$this->assign('pro',$product);
			$this->assign('cateGory',$newList);

			return $this->fetch('edit');

		} else {
			echo "error";
		}
		// return '展示添加或则修改的页面';
	}
}