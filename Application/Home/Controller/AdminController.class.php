<?php
namespace Home\Controller;


use Think\Controller;
class AdminController extends Controller
{
	public function login()
	{
		if(is_null(session('user_auth'))){
			//尚未登录
		    $this->display('admin');
		}else{
           redirect('/Shanghui/shlist');
		}
		
	}
	
	public function getLogin()
	{
		//获取登录信息
		$admin = I('post.admin');
		$pass =  I('post.password');
		
		$adminModel = D('Admin');
		$result=$adminModel->verify($admin,$pass);
		if(is_null($result)){
			//登录失败
			$auth =null;
			session('user_auth', $auth);
			$this->error('登录失败','/Admin/login',5);
		}else{
			//登录成功
		
			$auth = array(
					'id'=>$result['id'],
					'username'=>$result['adminname'],
					'last_login'=>date("Y-m-d H:i:s")
			);
			//写入session
			session('user_auth', $auth);
			
			
			$this->success('登录成功','/Shanghui/shlist',1);
		}
	}
	
	/*
	 * 退出登录
	 */
	
	public function logout()
	{
		$auth =null;
		session('user_auth', $auth);
		$this->redirect('/Admin/login');
		
	}
	
	
	
	
	
	
	
	
	
	
	
}