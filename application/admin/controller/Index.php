<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function list_r(){
		return $this->fetch('list');
	}
	public function add()
	{
		return $this->fetch();
	}
	public function edit()
	{
		return $this->fetch();
	}
	public function login()
	{
		return $this->fetch();
	}
}
