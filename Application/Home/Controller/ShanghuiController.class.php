<?php
/*
 * 商会控制器
 */
namespace Home\Controller;

class ShanghuiController extends HomeController
{
	//商会展示
	public function shlist()
	{
		$shanghuiModel=D('Shanghui');
		$result=$shanghuiModel->getAll();	
	    $this->assign('data',$result);
		$this->display('shanghui');
	}
	
	//增加商会展示
	public function addShanghui()
	{
		$this->display('addshanghui');
	}
	//增加商会
	public function add()
	{
		$data['shanghuiname']=I('post.shanghuiname');
		$data['mastername']=I('post.mastername');
		$data['masterphone']=I('post.masterphone');
		$data['masterwechat']=I('post.masterwechat');
		$data['masterqq']=I('post.masterqq');
		$data['bankaccount']=I('post.bankaccount');
		$shanghuiModel=D('Shanghui');
		$result=$shanghuiModel->addSh($data);
		if($result){
			$this->redirect('shlist');
		}else{
			$this->error('新增失败!');
		}
	}
	
	//修改商会
	public function updateShanghui($id)
	{
		$id=I('get.id');
		//$this->assign('id',$id);
		$shanghuiModel=D('Shanghui');
		$result=$shanghuiModel->getInfoById($id);
		//dump($result);
		$this->assign('data',$result);
		$this->display('updateshanghui');
	}
	
	public function update()
	{
		$data['id']=I('post.id');
		$data['shanghuiname']=I('post.shanghuiname');
		$data['mastername']=I('post.mastername');
		$data['masterphone']=I('post.masterphone');
		$data['masterwechat']=I('post.masterwechat');
		$data['masterqq']=I('post.masterqq');
		$data['bankaccount']=I('post.bankaccount');
		$shanghuiModel=D('Shanghui');
		$result=$shanghuiModel->updateSh($data);
		if($result){
			$this->redirect('shlist');
		}else{
			$this->error('修改失败!');
		}
	}
	
	/*
	 * 删除商会
	 */
	public function deleteShanghui()
	{
		//商会id
		$id=I('get.id');
		//判断商会下面是否有商会,如果有,则不能删除;
		//在商户控制器中查找
		$shanghuModel=D('Shanghu');
		$count=$shanghuModel->getCountByid($id);
        if($count>0){
        	$this->error("删除失败");
        }
		$shanghuiModel=D('Shanghui');
		$result=$shanghuiModel->deleteSh($id);
		if($result){
			$this->success('删除成功',"/Shanghui/shlist",3);
		}else{
			$this->error("删除失败");
		}
	}
	
	/*
	 * 商会信息导出  excel
	 */
	
	
	public function exportShanghui()
	{
	  //获得所有商会信息部分数据
		$shanghuiModel=D('Shanghui');
		$result=$shanghuiModel->getPartInfo();
		//dump($result);
		$this->exportExcel($result);
	}
	
	public function exportExcel($data)
	{
		vendor('PHPExcel.PHPExcel');
		vendor('PHPExcel.PHPExcel.PHPExcel_IOFactory');
		//实例化对象
		$phpExcel = new \PHPExcel();
		//获得当前活动sheet的操作对象
		$sheet=$phpExcel->getActiveSheet();
		//给当前活动sheet设置名称
	    $title="商会信息";
		$sheet->setTitle($title);
		//给当前活动sheet填充数据
	
		$sheet->setCellValue("A1","商会名")->setCellValue("B1","负责人姓名")->setCellValue("C1","负责人手机")->setCellValue("D1","负责人微信")->setCellValue("E1","负责人QQ")->setCellValue("F1","结算账户")->setCellValue("G1","添加时间")->setCellValue("H1","更新时间");//填充数据
		//$sheet->fromArray($data);
		$j=2;
		foreach($data as $key=>$val){
			$sheet->setCellValue("A".$j,$val['shname'])->setCellValue("B".$j,$val['mastername'])->setCellValue("C".$j,$val['masterphone'])->setCellValue("D".$j,$val['masterwechat'])->setCellValue("E".$j,$val['masterqq'])->setCellValue("F".$j,$val['bankaccount'])->setCellValue("G".$j,$val['addtime'])->setCellValue("H".$j,$val['updatetime']);
			$j++;
		}
		$objWriter=\PHPExcel_IOFactory::createWriter($phpExcel,'Excel5');//生成excel文件
		$title="商会信息".date("Y-m-d H:m:s").'.xls';
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