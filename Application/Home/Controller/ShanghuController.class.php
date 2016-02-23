<?php
/*
 * 商户控制器
 */

namespace Home\Controller;
class ShanghuController extends HomeController
{
	
	/*
	 * 根据id显示不同商会下的商户
	 */
	public function index()
	{
		$id=I('get.id');
		//获得商户信息
		$shanghuModel=D('Shanghu');
		$result1=$shanghuModel->getInfoById($id);
		//dump($result1);
		//获得商会信息
		$shanghuiModel=D('Shanghui');
		$result2=$shanghuiModel->getInfoById($id);
		//dump($result2);
		$this->assign('shanghuInfo',$result1);
		$this->assign('shanghuiInfo',$result2);
		$this->display('shanghu');
	}
	
	/*
	 * 增加商会下面对应的商户
	 * 
	 * $id
	 */
	
	public function addShanghuList()
	{
		//id为商会id
		$id=I('get.id');
		$shanghuiName=I('get.shanghuiName');
		$this->assign('id',$id);
		$this->assign('shanghuiName',$shanghuiName);
		//根据商会id获得商会名
		$this->display('addshanghu');
	}
	
	
	public function addShanghu()
	{
		//商会id
		$info['id']=I('post.id');
		$info['shName']=I('post.shanghuname');
		$info['masterName']=I('post.mastername');
		$info['masterPhone']=I('post.masterphone');
		$info['masterQQ']=I('post.masterqq');
		$info['masterWechat']=I('post.masterwechat');
		$info['masterEmail']=I('post.masteremail');
		$info['ismoney']=I('post.ismoney');
		$info['isvip']=I('post.isvip');
		
		$shanghuModel=D('Shanghu');
		$result=$shanghuModel->addShanghu($info);
		if($result){
			//增加成功
			$this->redirect('Shanghu/index', array('id' => $info['id']), 1, '页面跳转中...');
		}else{
			//新增失败
			$this->error("新增失败");
		}
	}
	
	/*
	 * 修改商户信息
	 */
	public function updateShanghuList()
	{
		$id=I('get.id');
		$shanghuiName=I('get.shanghuiName');
		//根据商户id获得商户信息
		$shanghuModel=D('Shanghu');
		$result=$shanghuModel->getInfoByShId($id);
		//dump($result);
		$this->assign('shanghuiName',$shanghuiName);
		$this->assign('data',$result);
		$this->display('updateshanghu');
	}
	
	public function updateShanghu()
	{
		//商户id
		$info['id']=I('post.id');
		$info['shName']=I('post.shanghuname');
		$info['masterName']=I('post.mastername');
		$info['masterPhone']=I('post.masterphone');
		$info['masterQQ']=I('post.masterqq');
		$info['masterWechat']=I('post.masterwechat');
		$info['masterEmail']=I('post.masteremail');
		$info['ismoney']=I('post.ismoney');
		$info['isvip']=I('post.isvip');
		
		$shanghuModel=D('Shanghu');
		$result=$shanghuModel->updateSh($info);
		//根据商户id查找对应的商会id
		$shanghuiId=$shanghuModel->getShanghuiIdByid($info['id']);
		if($result){
	        //echo $shanghuiId;
			$this->redirect('Shanghu/index', array('id' => $shanghuiId), 1, '修改成功...');
		}else{
			$this->error('修改失败,请重试...');
		}
	}
	
	/*
	 * 删除商户
	 */
	
	public function deleteshanghu()
	{
		$id=I('get.id');
		$shanghuModel=D('Shanghu');
		//根据商户id查找对应的商会id
		$shanghuiId=$shanghuModel->getShanghuiIdByid($id);
		$result=$shanghuModel->deleteShanghu($id);

        if(result){
        	//echo $shanghuiId;
        	$this->success('删除成功',"/Shanghu/index/id/{$shanghuiId}",3);
        }else{
        	$this->error("删除失败");
        }
	}
	/*
	 * 导出商会下的所有商户信息
	*/
	public function exportShanghu()
	{

		$id=I('get.id');
		//根据商会id获得该商会下的所有商户
		$shanghuModel=D('Shanghu');
		$result=$shanghuModel->getPartInfoById($id);
		//dump($result);exit();
		//根据商会id获得商会名:
		$shanghuiModel=D('Shanghui');
		$shanghuiName=$shanghuiModel->getNameByid($id);
		$this->exportExcel($result,$shanghuiName);


	}
	
	public function exportExcel($data,$shanghuiName)
	{
		//注释
		//该类的文件夹放在Library/Vendor/PHPExcel文件夹下
		//TP框架如此引入第三方类
		vendor('PHPExcel.PHPExcel');
		vendor('PHPExcel.PHPExcel.PHPExcel_IOFactory');
		//实例化对象
		$phpExcel = new \PHPExcel();
		//获得当前活动sheet的操作对象
		$sheet=$phpExcel->getActiveSheet();
		//给当前活动sheet设置名称
		
		$sheet->setTitle($shanghuiName);
		//给当前活动sheet填充数据
        
        $sheet->setCellValue("A1","商户名")->setCellValue("B1","负责人姓名")->setCellValue("C1","负责人手机")->setCellValue("D1","负责人QQ")->setCellValue("E1","负责人微信")->setCellValue("F1","负责人邮箱")->setCellValue("G1","是否缴费")->setCellValue("H1","是否充值")->setCellValue("I1","添加时间")->setCellValue("J1","修改时间");//填充数据
		//$sheet->fromArray($data);
        $j=2;
        foreach($data as $key=>$val){
        	$sheet->setCellValue("A".$j,$val['shname'])->setCellValue("B".$j,$val['mastername'])->setCellValue("C".$j,$val['masterphone'])->setCellValue("D".$j,$val['masterqq'])->setCellValue("E".$j,$val['masterwechat'])->setCellValue("F".$j,$val['masteremail'])->setCellValue("G".$j,$val['ismoney'])->setCellValue("H".$j,$val['isvip'])->setCellValue("I".$j,$val['addtime'])->setCellValue("J".$j,$val['updatetime']);
        	$j++;
        }
		$objWriter=\PHPExcel_IOFactory::createWriter($phpExcel,'Excel5');//生成excel文件
		$title=$shanghuiName.date("Y-m-d H:m:s").'.xls';
		$this->browser_export('Excel5',$title);//输出到浏览器
		
		$objWriter->save("php://output");
	}
	

    public function browser_export($type,$filename){
		if($type=="Excel5"){
			header('Content-Type: application/vnd.ms-excel');//告诉浏览器将要输出excel03文件
		}else{
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');//告诉浏览器数据excel07文件
		}
		header('Content-Disposition: attachment;filename="'.$filename.'"');//告诉浏览器将输出文件的名称
		header('Cache-Control: max-age=0');//禁止缓存
	}
	
	

	
}