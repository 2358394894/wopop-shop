<?php
// 支付界面(点击提交后数据保存至数据库，并跳转到该页面)(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Product;
use app\admin\model\Address;
use app\admin\model\Orders;
use app\admin\model\Oitems;
/**
 * 支付界面
 */
class Pay extends Common
{
	public function index(Request $request)
	{
		$id = $request->param('id');
		// dump($id);
		// 获取订单项表对应订单号的数据
		$data = Oitems::where('oid', $id)->select();
		// dump($data);

		$this->assign('oitems' , $data);

		return $this->fetch();
	}
}