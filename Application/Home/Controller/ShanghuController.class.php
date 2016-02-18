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
		$id=I('get.id');
		$this->assign('id',$id);
		$this->display('addshanghu');
	}
	
	
	public function addShanghu()
	{
		$info['id']=I('post.id');
		$info['shanghuname']=I('post.shanghuname');
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
		//根据商户id获得商户信息
		$shanghuModel=D('Shanghu');
		$result=$shanghuModel->getInfoByShId($id);
		//dump($result);
		$this->assign('data',$result);
		$this->display('updateshanghu');
	}
	
	public function updateShanghu()
	{
		//商户id
		$data['id']=I('post.id');
		$data['shanghuname']=I('post.shanghuname');
		$data['ismoney']=I('post.ismoney');
		$data['isvip']=I('post.isvip');
		$shanghuModel=D('Shanghu');
		$result=$shanghuModel->updateSh($data);
		//根据商户id查找对应的商会id
		$shanghuiId=$shanghuModel->getShanghuiIdByid($data['id']);
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
		//dump($result);
		//根据商会id获得商会名:
		$shanghuiModel=D('Shanghui');
		$shanghuiName=$shanghuiModel->getNameByid($id);
		$this->exportExcel($result,$shanghuiName);


	}
	
	public function exportExcel($data,$shanghuiName)
	{
		vendor('PHPExcel.PHPExcel');
		vendor('PHPExcel.PHPExcel.PHPExcel_IOFactory');
		//实例化对象
		$phpExcel = new \PHPExcel();
		//获得当前活动sheet的操作对象
		$sheet=$phpExcel->getActiveSheet();
		//给当前活动sheet设置名称
		
		$sheet->setTitle($shanghuiName);
		//给当前活动sheet填充数据
        
        $sheet->setCellValue("A1","商户名")->setCellValue("B1","是否缴费")->setCellValue("C1","是否充值")->setCellValue("D1","添加时间")->setCellValue("E1","修改时间");//填充数据
		//$sheet->fromArray($data);
        $j=2;
        foreach($data as $key=>$val){
        	$sheet->setCellValue("A".$j,$val['shname'])->setCellValue("B".$j,$val['ismoney'])->setCellValue("C".$j,$val['isvip'])->setCellValue("D".$j,$val['addtime'])->setCellValue("E".$j,$val['updatetime']);
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