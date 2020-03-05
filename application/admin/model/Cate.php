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

class  Cate extends Model
{
	protected $table = 'bk_cate';

	public function getCateList($param)
	{
		$res = $this->select();
		return $this->sort(Collection($res)->toArray());
	}

	public function sort($res, $pid = 0, $level = 0)
	{
		static $array = [];
		foreach ($res as $key => $v) {
			if ($v['pid'] == $pid) {
				$v['level'] = $level;
				$array[]    = $v;
				$this->sort($res, $v['id'], $level + 1);
			}
		}
		return $array;
	}

	public function add($param)
	{
		$exist = $this->getByCatename($param['catename']);
		if ($exist) {
			return msgReturn('该栏目已存在！');
		}
		if (empty($param['catename']) || empty($param['type'])) {
			return msgReturn('缺少重要参数！');
		}
		$res = $this->allowField(true)->save($param);
		if ($res) {
			return msgReturn('添加成功！', 0);
		} else {
			return msgReturn('添加失败！', 0);
		}
	}

	/**
	 * @param array  $param
	 * @param int    $id
	 * @param string $pk
	 * @param string $pid
	 * @return array
	 * 获取所有下级
	 */
	function get_upper_level($param = array(), $id = 0, $pk = "id", $pid = "pid")
	{
		static $subs = array();
		foreach ($param as $item) {
			if ($item['id'] == $id) {
				$pid    = $item['pid'];
				$subs[] = $item;
				$subs   = $this->get_upper_level($param, $pid);
			}

		}
		return $subs;
	}


}