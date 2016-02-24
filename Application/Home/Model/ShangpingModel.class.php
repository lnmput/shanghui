<?php
namespace Home\Model;
use Think\Model;

class ShangpingModel extends Model
{
	/*
	 * 获得某个商户下的所有商品
	 */
	public function getAllShangping($id)
	{
		$info = $this->where("isShanghu={$id}")->order('updateTime')->select();
		return  $info;
	}
	/*
	 * 获得某个商户下的所有商品条数
	*/
	public function getAllCount($id)
	{
		$count=$this->where("isShanghu={$id}")->count('id');
		return $count;
	}
	/*
	 * 分页显示某个商户下的所有商品
	 */
	public function pageAllShangping()
	{
		$this->where('status=1')->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
	}
	
	/*
	 * 根据商品id获得商品信息
	 */
	public function getShangpingById($id)
	{
		$result=$this->where("id={$id}")->select();
		return $result;
	}
	
	/*
	 * 想数据库中插入商品
	 */
	public function addShangping($data)
	{
		//重组商品信息
		$time=date("Y-m-d H:m:s");
		$info['shangName']=$data['shangName'];
		$info['isShanghu']=$data['id'];
		$info['shangPrice']=$data['shangPrice'];
		$info['shangBase']=$data['shangBase'];
		$info['ShangOne']=$data['ShangOne'];
		$info['ShangTwo']=$data['ShangTwo'];
		$info['shangThree']=$data['shangThree'];
		$info['addTime']=$time;
		$info['updateTime']=$time;
		$result=$this->data($info)->add();
		return  $result;
	}
	
	/*
	 * x修改商品
	 */
	public function updateShangping($data)
	{
		//数据重组
		$time=date("Y-m-d H:m:s");
		$info['id']=$data['id'];
		$info['shangName']=$data['shangName'];
		$info['shangPrice']=$data['shangPrice'];
		$info['shangBase']=$data['shangBase'];
		$info['ShangOne']=$data['ShangOne'];
		$info['ShangTwo']=$data['ShangTwo'];
		$info['shangThree']=$data['shangThree'];
		$info['updateTime']=$time;
		$result=$this->save($info);
		return $result;
	}
	
	/*
	 * 删除商品
	 */
	public function deleteShangping($id)
	{
		$result=$this->delete($id);
		return $result;
	}
	

	
	
	
	
	
	
}