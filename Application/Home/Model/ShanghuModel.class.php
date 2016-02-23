<?php
namespace Home\Model;
use Think\Model;

class ShanghuModel extends Model
{
	
	/*
	 * 
	 * 根据商会id获得该商会下的所有商户
	 */
	public function getInfoById($id)
	{
		$data = $this->where("belongSh={$id}")->select();
		return $data;
	}
	
	/*
	 *
	* 根据商会id获得该商会下的所有商户的部分信息
	* 
	*/
	public function getPartInfoById($id)
	{
		$data = $this->where("belongSh={$id}")->getField('shName,masterName,masterPhone,masterQQ,masterWechat,masterEmail,isMoney,isVip,addTime,updateTime');
		return $data;
	}
	
	/*
	 * 增加商户
	 */
	
	public function addShanghu($data)
	{
		//数据重组
		//dump($data);
		$time=date('Y-m-d H:m:s');
		$info['shName']=$data['shName'];
		$info['belongSh']=$data['id'];
		$info['masterName']=$data['masterName'];
		$info['masterPhone']=$data['masterPhone'];
		$info['masterQQ']=$data['masterQQ'];
		$info['masterWechat']=$data['masterWechat'];
		$info['masterEmail']=$data['masterEmail'];	
		$info['isMoney']=$data['ismoney'];
		$info['isVip']=$data['isvip'];
		$info['addTime']=$time;
		$info['updateTime']=$time;
		//dump($info);exit();
		$result=$this->data($info)->add();
		
		return $result;
	}
	
	/*
	 * 根据商户id获得商户信息
	 */
	public function getInfoByShId($id)
	{
		$data = $this->where("id={$id}")->select();
		return $data;
	}
	
	/*
	 * 修改商户信息
	 */
	
	public function updateSh($data)
	{
		//dump($data);
		//数据重组
		$info['id']=$data['id'];
		$info['shName']=$data['shName'];
		$info['masterName']=$data['masterName'];
		$info['masterPhone']=$data['masterPhone'];
		$info['masterQQ']=$data['masterQQ'];
		$info['masterWechat']=$data['masterWechat'];
		$info['masterEmail']=$data['masterEmail'];
		$info['isMoney']=$data['ismoney'];
		$info['isVip']=$data['isvip'];
		$info['updateTime']=date('Y-m-d H:m:s');
		//dump($info);exit();
		
		$result=$this->save($info);
		return $result;
	}
	
	/*
	 * 根据商户id查找对应的商会id
	 */
	public function getShanghuiIdByid($id)
	{
		$result=$this->where("id={$id}")->getField('belongSh');
		return $result;
	}
	
	/*
	 * 根据商会id查找商会名
	 */
	
	public function getShanghuiNameById($id)
	{
		$result=$this->where("id={$id}")->getField('belongSh');
		return $result;
		
	}
	
	/*
	 * 删除商户
	 */
	public function deleteShanghu($id)
	{
		$result=$this->delete($id);
		return $result;
	}
	
	
	/*
	 * 根据商会id查找是否有对应的商户数
	 */
	public function getCountByid($id)
	{
		$count = $this->where("belongSh=$id")->count("id");
		return $count;
	}

}