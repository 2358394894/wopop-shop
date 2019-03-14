<?php
// 新闻中心(控制器)
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\News as Ne;
/**
 * 新闻中心
 */
class News extends Controller
{
	// 新闻列表界面
	public function index()
	{
		// 查询新闻表所有数据
		$newsList = Ne::select();

		$this->assign('news',$newsList);
		return $this->fetch();
	}
}