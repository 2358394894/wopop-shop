<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\News as Ne;
/**
 * 新闻模块
 */
class News extends Common
{
	// 新闻列表界面
	public function index()
	{
		// 查询新闻表所有数据
		$newsList = Ne::select();
		// dump($newsList);
		// 将数据分配到模板
		$this->assign('res',$newsList);
		return $this->fetch();
	}

	// 添加新闻
	public function insert(Request $request)
	{
		$data = $request->param();	// 接收表单数据
		unset($data['_method']);	// 删除表单提交的隐藏控件
		$data['ndate'] = date('Y-m-d H:i:s',time());	// 把时间戳转换为日期格式
		// dump($data);
		$res = Ne::create($data);

		if ($res) {
    		$this->success('添加成功！', url('admin/News/index'));
    	} else {
    		$this->error('添加失败');
    	}
	}
	
	// 修改新闻
	public function update(Request $request)
	{
		// 读取所选新闻的内容信息
		$edit = Ne::find($request->param('id'));
		// print($edit);
		// 获取输入的值，并更新数据表中的值
		$edit->ntitle = $request->param('ntitle');
		$edit->author = $request->param('author');
		$edit->ncontent = $request->param('ncontent');
		$edit['ndate'] = date('Y-m-d H:i:s',time());	// 获取当前时间戳转换为日期格式,并更新原有日期
		// print($edit);
		$res = $edit->save();

		if ($res) {
			$this->success('修改成功!', url('admin/News/index'));
		} else {
			$this->error('修改失败');
		}
		
	}

	// 删除新闻
	public function delete(Request $request)
	{
		$id = $request->param('id');

		$res = Ne::destroy($id);

		if ($res) {
    		$this->success('删除成功');
    	} else {
    		$this->error('删除失败');
    	}
	}

	// 展示添加或修改的页面
	public function view(Request $request)
	{
		if ($request->param('type') == 'insert') {
			return $this->fetch('insert');

		} else if ($request->param('type') == 'edit') {
			$nid = $request->param('id');
			// dump($cid);
			$res = Ne::find($nid);
			// 将数据分配到模板
			$this->assign('res',$res);
			// 返回视图
			return $this->fetch('edit');
		} else {
			echo "error";
		}
	}
}