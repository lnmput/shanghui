<?php
namespace Home\Model;
use Think\Model;

class AdminModel extends Model
{
	public function index()
	{
		 return $this->select();
	}
	
	public function verify($admin,$pass)
	{
		$pass=md5($pass);
		$data = $this->where("adminname='{$admin}' AND adminpass='{$pass}'")->find();
		return $data;
	}
}