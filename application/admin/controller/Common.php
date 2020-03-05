<?php
/*************************************************
 * Created by Yqx.
 * Date: 2020/3/4
 * Time: 13:45
 * Description:
 *************************************************/
namespace app\admin\controller;
use think\Controller;

class Common extends Controller{
	#白名单，不进行检测地址
	protected $notCheckUrl = [
		'index_login',
	];
	public function _initialize(){
		$controllerAction = strtolower(request()->controller().'_'.request()->action());
		if((!session('id')  || !session('username') ) && !in_array($controllerAction,$this->notCheckUrl)){
			$this->jsAlert('你未进行登录！请返回登录页面进行登录！','login');
		}
	}

	public function jsAlert($info, $url)
	{
		$this->assign('info', $info);
		$this->assign('url', $url);
		echo $this->fetch('public/alert');
		die;
	}

	public function controllerReturn($res,$sucessUrl){
		if($res['code'] == 0){
			$this->jsAlert($res['msg'], $sucessUrl);
		}else{
			$this->jsAlert($res['msg'], 'javascript:history.back(-1);');
		}
	}


}