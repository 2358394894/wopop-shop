<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Users;
use app\admin\model\Product;
use app\admin\model\Orders as Ord;
use app\admin\model\Oitems;
/**
 * 订单模块
 */
class Orders extends Common
{
	// 订单列表界面
	public function index()
	{
		$productList = Product::select();

		$orderList = Db::table('Orders')
					->alias('a')
					->join('Oitems b', 'a.oid = b.oid')
					->field('a.oid, a.ouid, a.ostate, b.opid, b.onum, b.opprice, b.ototal')
					->select();
		// dump($orderList);

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

		$this->assign('orders', $orderList);

		$this->assign('opic', $picList);
		$this->assign('opname', $pnameList);

		return $this->fetch();
	}

	// 修改订单信息(提交数据处理)
	public function update(Request $request)
	{
		// 定义变量，接收订单状态记录，并判断该变量是否为空
		$state = $request->param('ostate');
		// dump($state);
		// 定义需更新的数据，条件为订单id号
		$data['oid'] = intval($request->param('oid'));
		$data['oaddress'] = $request->param('oaddress');
		$data['oname'] = $request->param('oname');
		$data['ophone'] = $request->param('ophone');
		$data['ostate'] = intval($request->param('ostate'));
		// dump($data);
		if ($state != '' && $state != null) {
			// dump($data);
			if (Ord::update($data)) {
				$this->success('修改成功！',url('admin/Orders/index'));
			}
		} else {
			$this->error('当前订单不可修改，订单信息修改只能在 发货时 执行，以下情况订单数据不可修改:1、(买家已付款)订单未发货；2、订单已发货；3、订单交易完毕');
		}
	}

	// 删除订单
	public function delete(Request $request)
	{
		$oid = $request->param('id');
		// dump($oid);
		// $ordersList = Ord::where('oid', $oid)->select();
		// dump($ordersList);
		// $oitemsList = Oitems::where('oid', $oid)->select();
		// dump($oitemsList);
		if (Ord::destroy(['oid'=>$oid])) {
			if (Oitems::destroy(['oid'=>$oid])) {
				$this->success('删除成功');
			} else {
				$this->error('删除失败，请重试');
			}
		} else {
			$this->error('系统繁忙，请稍后再试');
		}
		
	}

	// 用于展示修改页面(视图)的操作
	public function view(Request $request)
	{
		if ($request->param('type') == 'edit') {

			$oid = $request->param('id');	//订单id
			$uid = $request->param('uid');	//用户id

			$productList = Product::select();
			$unameList = Users::select();
			// $username = Users::where('uid', $uid)->field('uname')->select();
			// dump($username);

			$ordersList = Db::table('Orders')
						->alias('a')
						->field('a.oid,a.oname,a.oaddress,a.ophone,a.ostate,a.ouid,b.opid,b.onum,b.opprice,b.ototal')
						->join('Oitems b','a.oid = b.oid')
						->where('a.ouid', $uid)
						->where('a.oid', $oid)
						->select();
			// dump($ordersList);

			// 查询与当前订单id匹配的订单表记录，并获取其订单状态码
			$state = Ord::where('oid', $oid)->find();
			// dump($state);

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

			$this->assign('ordersList', $ordersList);

			$this->assign('opic', $picList);
			$this->assign('opname', $pnameList);
			// 订单状态码
			$this->assign('state', $state);

			return $this->fetch('edit');
		} else {
			echo "error";
		}
		
	}

}