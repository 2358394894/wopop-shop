<?php
// 商品列表(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category as  Cate;
use app\admin\model\Product;
/**
 * 商品列表页
 */
class Products extends Controller
{
	public function index()
	{
		// 获取所有品牌名称
		$cateList = Cate::select();
		// dump($cateList);

		// 获取后16条上架商品信息
		$productList = Product::where('state', 1)->order('pid desc')->limit(16)->select();

		$newList = [];
		// 获取与品牌ID号对应的品牌名称
		foreach ($cateList as $key => $value) {
			$newList[$value->cid] = $value->cname;
		}

		$this->assign('productList' , $productList);
		$this->assign('Brand' , $newList);

    	$this->assign('cateList' , $cateList);

		return $this->fetch();
	}
}