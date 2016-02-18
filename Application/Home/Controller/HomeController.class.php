<?php
/*
 * 公共控制器
 */
namespace Home\Controller;
use Think\Controller;


class HomeController extends Controller
{
   public function __construct()
   {
   	  parent::__construct();
   	  if(is_null(session('user_auth'))){
   	  	 //尚未登录
   	  	 $this->error('请先登录','/Admin/login',3);
   	  }
   }
}