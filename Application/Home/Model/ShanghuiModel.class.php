<?php
namespace Home\Model;
use Think\Model;

class ShanghuiModel extends Model
{
	
	/*
	 * 获取所有商会
	 */
	public function getAll()
	{
		$info=$this->select();
		return $info;
	}
	
	/*
	 * 增加商会
	 */
	public function addSh($data)
	{
	//	dump($data);
		//数组重组
		$info['shName']=$data['shanghuiname'];
		$info['masterName']=$data['mastername'];
		$info['masterPhone']=$data['masterphone'];
		$info['masterWechat']=$data['masterwechat'];
		$info['masterQQ']=$data['masterqq'];
		$info['bankAccount']=$data['bankaccount'];
		$info['shCount']='0';
		$info['addTime']=date("Y-m-d H:m:s");
		$info['updateTime']=date("Y-m-d H:m:s");
		
		$res=$this->data($info)->add();
		return $res;
	}
	
	
	/*
	 * 修改商会
	*/
	public function updateSh($data)
	{
		//	dump($data);
		//数组重组
		$info['id']=$data['id'];
		$info['shName']=$data['shanghuiname'];
		$info['masterName']=$data['mastername'];
		$info['masterPhone']=$data['masterphone'];
		$info['masterWechat']=$data['masterwechat'];
		$info['masterQQ']=$data['masterqq'];
		$info['bankAccount']=$data['bankaccount'];
		$info['updateTime']=date("Y-m-d H:m:s");
	
		$res=$this->save($info);
		return $res;
	}
	
	
	/*
	 * 根据id获取商会信息
	 */
	  public function getInfoById($id)
	  {
	  	$data = $this->where("id={$id}")->find();
	  	return  $data;
	  }
	
	
	/*
	 * 删除商会
	 */
	  
	 public function deleteSh($id)
	 {
	 	return $this->delete($id);
	 }
	
     /*
      * 根据商会 id  获得商会名
      */
	 public function getNameByid($id)
	 {
	 	$data = $this->where("id={$id}")->getField('shName');
	 	return  $data;
	 }
	
	
	
	/*
	 * 回去所有 商会的部分信息
	 */
	 
	 public function getPartInfo()
	 {
	 	$data = $this->getField('shName,masterName,masterPhone,masterWechat,masterQQ,bankAccount,addTime,updateTime');
	 	return $data;
	 }
	
	
	
}