<?php
// 个人中心(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category as  Cate;
use app\admin\model\Product;
use app\admin\model\Orders;
use app\admin\model\Oitems;
/**
 * 个人中心
 */
class User extends Common
{
	public function index()
	{
		// 获取所有品牌名称(品牌表)
		$cateList = Cate::select();
		// 获取所有商品信息(商品表)
		$proList = Product::select();
		// 获取所有订单信息(订单表)
		$ordersList = Orders::select();

		$uid = session('user_id');

		// 获取前6条上架商品信息
		$productList = Product::where('state', 1)->order('pid asc')->limit(6)->select();
		// 获取后6条上架商品信息
		$productList2 = Product::where('state', 1)->order('pid desc')->limit(6)->select();


		// 查询该用户的订单记录(订单项表)
		$oitemsList = Oitems::where('oiuid', $uid)->select();
		// dump($oitemsList);
		// 获取对应商品id的图片(商品表)
		$picList = [];
		foreach ($proList as $key => $value) {
			$picList[$value->pid] = $value->ppic;
		}
		// 获取对应商品id的商品名称(商品表)
		$pnameList = [];
		foreach ($proList as $key => $value) {
			$pnameList[$value->pid] = $value->pname;
		}
		// 获取对应订单id的订单状态码(订单表)
		$stateList = [];
		foreach ($ordersList as $key => $value) {
			$stateList[$value->oid] = $value->ostate;
		}


		$newList = [];
		// 获取与品牌ID号对应的品牌名称
		foreach ($cateList as $key => $value) {
			$newList[$value->cid] = $value->cname;
		}

		$this->assign('productList' , $productList);
		$this->assign('productList2' , $productList2);
		$this->assign('Brand' , $newList);

		$this->assign('oitemsList' , $oitemsList);
		$this->assign('opic', $picList);
		$this->assign('opname', $pnameList);
		$this->assign('ostate', $stateList);

		return $this->fetch();
	}
}
