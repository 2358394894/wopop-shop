<?php
// 网站首页(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category as  Cate;
use app\admin\model\Product;
/**
 * 首页
 */
class Index extends Controller
{
	// 首页界面
	public function index()
	{
		// 查询品牌表的所有数据
		// $cateList = Cate::select();

		// 获取前四条上架商品数据
		$proList1 = Product::where('state', 1)->order('pid asc')->limit(4)->select();
		// 获取后四条上架商品数据
		$proHot = Product::where('state', 1)->order('pid desc')->limit(4)->select();
		// 获取前四条鼠标数据
		$proMouse =  Product::where('ptype', 1)->order('pid desc')->limit(4)->select();
		// 获取前四条键盘数据
		$proKeyboard =  Product::where('ptype', 2)->order('pid desc')->limit(4)->select();
		// 获取前四条耳机数据
		$proHeadset =  Product::where('ptype', 3)->order('pid desc')->limit(4)->select();

		// 查询所有鼠标、键盘、耳机品牌，查询前八条品牌数据
		$cateMouse = Cate::where('cmouse', 1)->select();
		$cateKeyboard = Cate::where('ckeyboard', 1)->select();
		$cateHeadset = Cate::where('cheadset', 1)->select();
		$cateLike = Cate::order('cid asc')->limit(8)->select();
		// dump($proList1);

		// $proList2 = [];
		/*// 获取所有品牌名称
		$newList = [];
		foreach ($cateList as $key => $value) {
			$newList[$value->cid] = $value->cname;
		}
		$this->assign('newList', $newList);
		// dump($newList);*/

		// $this->assign('cateList', $cateList);
		
		// 把数据分配到模板
		// 把商品数据分配到模板
		$this->assign('proList1', $proList1);
		$this->assign('proHot', $proHot);
		$this->assign('proMouse', $proMouse);
		$this->assign('proKeyboard', $proKeyboard);
		$this->assign('proHeadset', $proHeadset);
		// 把品牌数据分配到模板
		$this->assign('cateMouse', $cateMouse);
		$this->assign('cateKeyboard', $cateKeyboard);
		$this->assign('cateHeadset', $cateHeadset);
		$this->assign('cateLike', $cateLike);

		return $this->fetch();
	}

	// 退出登录
	public function logout()
	{
		session('user_status', null);	// 用于记录登录状态(清空记录)
		session('user_name', null);
		session('user_id', null);
		// 退出成功后跳转回首页
		$this->redirect('index/Index/index');
	}
}