<?php
/*************************************************
 * Created by Yqx.
 * Date: 2020/3/6
 * Time: 16:23
 * Description:
 *************************************************/
namespace app\admin\controller;
use think\Request;
class Group extends  Common {
	public  function  index(){
		$info =	 db('auth_group')->paginate(6);
		$this->assign('info', $info);
		return $this->fetch('list');
	}
	public function add(Request $res)
	{
		if ($res->isPost()) {
			$param	=	$res->param("");
			halt($param);

		}
		return $this->fetch();
	}

}