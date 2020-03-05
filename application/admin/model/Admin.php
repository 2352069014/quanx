<?php
/*************************************************
 * Created by Yqx.
 * Date: 2020/3/3
 * Time: 10:33
 * Description:
 *************************************************/
namespace app\admin\model;
use think\Collection;
use think\Model;

class Admin extends Model{
	public function getList($param){
		extract($param);
		$res 	=	 Admin::order('id','desc')->field('id,name')->paginate($limit ?: 1);
		return $res;
	}

	/**
	 * Notes:添加管理员
	 * User: Yqx
	 * @param $data
	 * @return bool
	 */
	public   function addAdmin($data){
		$data['password']	=	md5($data['password']);
		if(empty($data) || !is_array($data)){
			return false;
		}
		$info 	=	$this->allowField(true)->save($data);
		if($info){
			return true;
		}else{
			return false;
		}
	}

	public function login($param){
		if(!isset($param['name']) || !isset($param['password']) || empty($param['name']) || empty($param['password'])){
			return msgReturn('用户名或密码不能为空！');
		}
		$exist = $this->getByName($param['name'])->toArray();
		if(!$exist){
			return msgReturn('用户名不存在！');
		}
		if(md5($param['password']) !== $exist['password']){
			return msgReturn('用户名或密码不正确！');
		}
		session('username', $param['name']);
		session('password', $param['password']);
		session('id', $exist['id']);
		if(session('id')){
			return msgReturn('登录成功！',0);
		}else{
			return msgReturn('登录失败!');
		}

	}



}