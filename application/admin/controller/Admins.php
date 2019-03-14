<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Admins as Ad;
/**
 * 管理员模块
 */
class Admins extends Common
{
	// 管理员列表界面
	public function index()
	{
		// 查询管理员表所有数据
		$res = Ad::select();
		// dump($res);
		// 将数据分配到模板
		$this->assign('res',$res);
		return $this->fetch();
	}

	// 添加管理员
	public function insert(Request $request)
	{
		$data = $request->put();
		unset($data['_method']);
		// dump($data);
		if ($data['apwd'] == $data['pwd_r']) {
			// 对用户输入的密码进行MD5加密处理
			$encrypt = (MD5($data['pwd_r']));
			unset($data['pwd_r']);
			// 把加密后的密码赋给表单对应的值
			$data['apwd'] = $encrypt;

			if (Ad::create($data)) {
				$this->success('添加成功！',url('admin/Admins/index'));
			} else {
				$this->error('添加失败');
			}
		} else {
			$this->error('两次密码不一致，请重新输入！');
		}
	}

	// 修改管理员
	public function update(Request $request)
	{
		$edit = Ad::find($request->param('id'));

        $edit->aname = $request->param('aname');
        $edit->apwd = MD5($request->param('apwd')); // 对密码进行MD5加密
        $edit->alevel = $request->param('alevel');
		// print($edit);
        $res = $edit->save();

        if ($res) {
            $this->success('修改成功！', url('admin/Admins/index'));   // 修改成功返回用户列表界面
        } else {
            $this->error('修改失败');
        }
	}

	// 删除管理员
	public function delete(Request $request)
	{
		$id = $request->param('id');

		$res = Ad::destroy($id);

		if ($res) {
			$this->success('删除成功！');
		} else {
			$this->error('删除失败');
		}
	}

	// 显示(添加、修改)操作页面
	public function view(Request $request)
	{
		if ($request->param('type') == 'insert') {
			return $this->fetch('insert');

		} else if ($request->param('type') == 'edit') {
			$aid = $request->param('id');

			$res = Ad::find($aid);
			$this->assign('res',$res);
			return $this->fetch('edit');

		} else {
			echo "error";
		}
	}
}