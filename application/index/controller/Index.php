<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
	public function article()
	{
		return $this->fetch();
	}
	public function artlist()
	{
		return $this->fetch();
	}
	public function imglist()
	{
		return $this->fetch();
	}
	public function page()
	{
		return $this->fetch();
	}

}
