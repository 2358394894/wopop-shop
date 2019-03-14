<?php
// 确认订单(点击购买后数据提交)(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category as  Cate;
use app\admin\model\Product;
use app\admin\model\Users;
use app\admin\model\Address;
use app\admin\model\Orders;
use app\admin\model\Oitems;
/**
 * 确认订单
 */
class Confirmorder extends Common
{
	// 界面生成订单
	public function index(Request $request)
	{
		$pid = $request->param('id');
		$num = $request->param('num');

		$uid = session('user_id');

		$productList = Product::where('pid', $pid)->select();
		$addressList = Address::where('duid', $uid)->select();

		$this->assign('pnum' , $num);	//传递获取的商品数量
		$this->assign('productList' , $productList);

		$this->assign('addressList' , $addressList);

		return $this->fetch();
	}

	// 保存订单信息
	public function insert(Request $request)
	{
		// 获取表单提交的所有数据
		$data = $request->param();
		// dump($data);

		// 获取保存到订单表的数据
		$order = [];
		$order['oname'] = $data['uname'];
		$order['oaddress'] = $data['address'];
		$order['ophone'] = $data['uphone'];
		$order['odate'] = date('Y-m-d H:i:s',time());	// 获取当前时间，并把时间戳转换为日期格式;
		$order['ostate'] = 1;		// 订单状态为(买家已付款)
		$order['ouid'] = session('user_id');
		dump($order);

		// 获取订单项的数据，并在(订单记录)生成后插入到订单项表中
		$items = [];
		$items['oiuid'] = session('user_id'); // 用户id
		$items['opid'] = $data['pid'];	// 商品id
		$items['onum'] = $data['pnum'];
		$items['opprice'] = $data['pprice'];
		$items['ototal'] = $data['pprice'] * $data["pnum"];	// 结算
		dump($items);



		// 把订单信息保存到订单表中
		$res = Orders::create($order);
		if ($res) {
			// echo $res->oid;
			// 获取当前插入数据的id号(订单)，保存到订单项表中
			$items['oid'] = $res->oid;

			if (Oitems::create($items)) {
				// 提交成功后跳转至支付页(传递当前订单id号)
				$this->redirect('index/Pay/index', ['id' => $items['oid']]);
			} else {
				$this->error('订单提交失败，请重试');
			}
		} else {
			$this->error('订单提交失败，请重试');
		}

	}
}