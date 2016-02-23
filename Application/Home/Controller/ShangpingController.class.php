<?php
/*
 * 商品控制器
 */

namespace Home\Controller;
class ShangpingController extends HomeController
{
	/*
	 * 展示某个商户下的所有商品信息
	 */
	public function index()
	{
		//商户id
        $id=I('get.id');
        $shangpingModel=D("Shangping");
        //商品信息
        $result1=$shangpingModel->getAllShangping($id);
       // dump($result1);
        //商户信息
        $shanghuModel=D('Shanghu');
		$result2=$shanghuModel->getInfoByShId($id);
        //dump($result2);
        //商会信息
        $shanghuiId=$shanghuModel->getShanghuiIdByid($id);
        $shanghuiModel=D("Shanghui");
        $shanghuiName=$shanghuiModel->getNameByid($shanghuiId);
       // dump($shanghuiName);
        $this->assign('shangpingInfo',$result1);
        $this->assign('shanghuInfo',$result2);
        $this->assign('shanghuiName',$shanghuiName);
        

		$this->display('shangping');
	}
	/*
	 * 添加商品模板展示
	 */
	public function addShangpingList()
	{
		//商户id
		$id=I('get.id');
		//dump($id);
		$this->assign('id',$id);
		$this->display('addshangping');
	}
	/*
	 * 添加商品
	 */
	public function addShangping()
	{
		//id是商户id
		$data['id']=I('post.id');
		$data['shangName']=I('post.shangName');
		$data['shangPrice']=I('post.shangPrice');
		$data['shangBase']=I('post.shangBase');
		$data['ShangOne']=I('post.ShangOne');
		$data['ShangTwo']=I('post.ShangTwo');
		$data['shangThree']=I('post.shangThree');
		
		$shangpingModel=D("Shangping");
		//插入商品
		$result=$shangpingModel->addShangping($data);
        if($result){
        	$this->success("新增产品成功","index/id/{$data['id']}",3);
        }else{
        	$this->error("新增商品失败");
        }
	}
	
	/*
	 * 修改商品展示
	 */
	public function updateShangpingList()
	{
		//商品id
		$id=I('get.id');
		//获得商品信息
		$shangpingModel=D("Shangping");
		$result=$shangpingModel->getShangpingById($id);
		//dump($result);
		$this->assign('data',$result);
		$this->display('updateshangping');
	}
	/*
	 * 修改商品
	 */
	public function updateShangping()
	{
		//id是商品id
		$data['id']=I('post.id');
		$data['shangName']=I('post.shangName');
		$data['shangPrice']=I('post.shangPrice');
		$data['shangBase']=I('post.shangBase');
		$data['ShangOne']=I('post.ShangOne');
		$data['ShangTwo']=I('post.ShangTwo');
		$data['shangThree']=I('post.shangThree');
		$data['isshanghu']=I('post.isshanghu');
		//dump($data);
		$shangpingModel=D("Shangping");
		$result=$shangpingModel->updateShangping($data);
        if ($result){
        	//商户页面,商品对应的商户id
        	$this->success("修改成功","index/id/{$data['isshanghu']}",3);
        }else {
        	$this->error("修改失败,请重试");
        }
		
	}
	
	/*
	 * 删除商品
	 */
	public function deleteShangping()
	{
		$id=I('get.id');
		$shangpingModel=D("Shangping");
		$result=$shangpingModel->deleteShangping($id);
		if($result){
			$this->success("删除成功");
		}else{
			$this->error("删除失败,请重试");
		}
	}
	
	/*
	 * 导出商品
	 */
	public function exportshanghu()
	{
		//商户id
		$id=I('get.id');
		//根据商户id获得商品信息
		//商户名
		$shanghuname=I('get.shanghuname');
		
		//dump($shanghuiname);
		$shangpingModel=D("Shangping");
		//商品信息
		$result=$shangpingModel->getAllShangping($id);
		//dump($result);
		$this->exportExcel($result,$shanghuname);
	}
	
	public function exportExcel($data,$shanghuname)
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
		
		$sheet->setTitle($shanghuname);
		//给当前活动sheet填充数据
        
        $sheet->setCellValue("A1","商品名称")->setCellValue("B1","商品价格")->setCellValue("C1","基础佣金比例")->setCellValue("D1","一级分销比例")->setCellValue("E1","二级分销比例")->setCellValue("F1","三级分销比例")->setCellValue("G1","添加 时间")->setCellValue("H1","修改 时间");//填充数据
		//$sheet->fromArray($data);
        $j=2;
        foreach($data as $key=>$val){
        	$sheet->setCellValue("A".$j,$val['shangname'])->setCellValue("B".$j,$val['shangprice']."元")->setCellValue("C".$j,$val['shangbase']."%")->setCellValue("D".$j,$val['shangone']."%")->setCellValue("E".$j,$val['shangtwo']."%")->setCellValue("F".$j,$val['shangthree']."%")->setCellValue("G".$j,$val['addtime'])->setCellValue("H".$j,$val['updatetime']);
        	$j++;
        }
		$objWriter=\PHPExcel_IOFactory::createWriter($phpExcel,'Excel5');//生成excel文件
		$title=$shanghuname.date("Y-m-d H:m:s").'.xls';
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