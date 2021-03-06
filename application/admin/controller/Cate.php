<?php

namespace app\admin\controller;


use app\admin\model\Cate as CateModel;
class Cate extends Common
{
	protected $cate;


	public function _initialize()
	{
		parent::_initialize(); // TODO: Change the autogenerated stub
		$this->cate = new CateModel();
	}


	public function getCateList()
	{
		$param['limit'] = !empty($limit = input('limit')) ?: 5;
		$info           = $this->cate->getCateList($param);
		$this->assign('info', $info);
		return $this->fetch('list');
	}

	public function add(){
		if(request()->isPost()){
			$param	=	input('');
			$res =	$this->cate->add($param);
			$this->controllerReturn($res,'getCateList');
		}else{
			$info =	 db('cate')->field('id,catename,pid')->select();
			$info = $this->cate->sort($info);
			$this->assign('info',$info);
			return $this->fetch();
		}
	}
	public function edit(){
		$id = input('id');
		if(request()->isPost()){
			$param	=	input('');
			$exsit 	= $this->getExists('cate','catename',$param['catename'],$param['id']);
			if($exsit){
				$this->jsAlert('栏目已存在!','javascript:history.back(-1);');
			}
			$res =	$this->cate->edit($param);
			if($res){
				$this->success('编辑成功！','getCateList');
			}else{
				$this->error('编辑失败！');
			}
		}else{
			$info = $this->cate->find($id)->toArray();
			$cateInfo = $this->cate->all();
			$this->assign('info',$info);
			$this->assign('cate',$this->cate->sort($cateInfo));
			return $this->fetch();
		}
	}

	public function del(){
		$id 	= input('id');
		if(empty($id)){
			$this->error('缺少参数！');
		}
		if(empty( CateModel::get($id))){
			$this->error('该栏目不存在！');
		}
		db()->startTrans();
		try{
			$param 	= db('cate')->field('id,pid,catename')->select();
			$delChild = $this->getLowerInfo($param,input('id'));
			if(!empty($delChild)){
				db('cate')->where('id','in',$delChild)->delete();
			}
			$this->cate->where('id',$id)->delete();
			db()->commit();
			$this->jsAlert('删除成功！', 'getCateList');
		}catch (\Exception $e){
			db()->rollback();
			$this->jsAlert($e->getMessage(), "javascript:history.back(-1);");
		}
	}

	public function getLowerInfo($param,$id){
		static $childId = [];
		foreach ($param as $key=>$value){
			if($value['pid']==$id){
				$childId[] = $value['id'];
				$childId = $this->getLowerInfo($param,$value['id']);
			}
		}
		return $childId;
	}


}
