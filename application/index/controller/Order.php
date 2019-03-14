<?php
// 我的订单(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Product;
use app\admin\model\Orders;
use app\admin\model\Oitems;
/**
 * 我的订单
 */
class Order extends Common
{
	// 订单列表
	public function index()
	{
		$uid = session('user_id');

		$productList = Product::select();

		$OrdList = Orders::select();
		
		$oitemsList=Db::name('Oitems')
					->alias('a')
					->field('a.oiid,a.oid,a.opid,a.onum,a.opprice,a.ototal,b.odate,b.ostate')
					->join('Orders b','a.oid = b.oid')
					->where('a.oiuid',$uid)
					->select();
		// dump($oitemsList);
		
		// 获取对应商品id的图片
		$picList = [];
		foreach ($productList as $key => $value) {
			$picList[$value->pid] = $value->ppic;
		}
		// 获取对应商品id的商品名称
		$pnameList = [];
		foreach ($productList as $key => $value) {
			$pnameList[$value->pid] = $value->pname;
		}

		// 获取对应订单id的订单状态码
		$ordstate = [];
		foreach ($OrdList as $key => $value) {
			$ordstate[$value->oid] = $value->ostate;
		}

		// 获取订单项表的结果集
		$this->assign('oitem', $oitemsList);

		$this->assign('opic', $picList);
		$this->assign('opname', $pnameList);

		$this->assign('ordstate', $ordstate);

		return $this->fetch();
	}

	// 用户确认收货数据处理
	public function confirm(Request $request)
	{
		$oid = $request->param('id');
		// dump($oid);
		$data['oid'] = $oid;	//更新条件
		$data['ostate'] = 3;
		// dump($data);
		if (Orders::update($data)) {
			$this->success('收货成功！',url('index/Order/index'));
		} else {
			$this->error('系统出错，请稍后再试');
		}
	}
}