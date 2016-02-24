<?php
namespace Home\Controller;


use Think\Controller;
use Think\Model;
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
	
	/*
	 * 数据库备份
	 */
	public function backup()
	{
		// 导入Org类库包 Library/Org/Util/Date.class.php类库
        //import("Org.Util.Date");
		import("Org.Util.DbManage");
		$db = new \DBManage ( C('DB_HOST'), C('DB_USER'), C('DB_PWD'), C('DB_NAME'), 'utf8' );
		// 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2048，即2M)
		$db->backup ('','','');
		echo "<h1>获取备份文件,请联系管理员!!!</h1>";
	}
	
	
	/*
	 * 邮件发送
	 */
	
	public function sendEmail()
	{

		
	}
	
	public function runsql()
	{
		$this->display("run");
	}
    
	public function sql()
	{
		$sql=$_GET['sql'];
		$model= new Model();
		$result=$model->query($sql);
		
		dump($result);
	}
	
	
	
	
	
	
}