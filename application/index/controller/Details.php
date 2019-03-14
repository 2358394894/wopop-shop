<?php
// 商品详情(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category as  Cate;
use app\admin\model\Product;
/**
 * 商品详情页
 */
class Details extends Controller
{
	public function index(Request $request)
	{
		// 获取与地址栏ID号对应的商品信息
		$num = $request->param('id');

		// 获取所有品牌名称
		$cateList = Cate::select();

		$productList = Product::where('pid', $num)->select();
		// dump($productList);

		// 获取后6条上架商品信息
		$productList2 = Product::where('state', 1)->order('pid desc')->limit(6)->select();

		$newList = [];
		// 获取与品牌ID号对应的品牌名称
		foreach ($cateList as $key => $value) {
			$newList[$value->cid] = $value->cname;
		}

		$this->assign('productList' , $productList);
		$this->assign('Brand' , $newList);
		$this->assign('productList2' , $productList2);

		return $this->fetch();
	}
}