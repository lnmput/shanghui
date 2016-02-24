<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商户管理</title>
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/main.css" rel="stylesheet">
  </head>
	    <nav class="navbar navbar-default navbar-fixed-top" >
		  <div class="container">
		  	<div class="navbar-header text-center">
          <a class="navbar-brand" href="#"><strong>L&K</strong></a>
        </div>
		  	<ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo U('Shanghui/shlist');?>">商会管理</a></li>
        <li><a target="_blank" href="<?php echo U('Admin/backup');?>">数据备份</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        	    <form class="navbar-form navbar-left" role="search" method="get" action="<?php echo U('Shangping/searchShangping');?>">
		            <div class="form-group">
		            <input type="text" name="keywords" class="form-control" placeholder="请输入商品关键字">
		            </div>
		            <button type="submit" class="btn btn-default">搜索</button>
              </form>
           	  <li  class="active"><a  href="/admin/logout">退出</a></li>
        </ul>
		  </div>
</nav>
    <div class="container-fluid">
    	
    	<div class="row">
	    	<div class="col-md-2"></div>
	    	<div class="col-md-8">
	    		<h3 style="margin:80px 0 10px;"><?php echo ($shanghuiInfo['shname']); ?></h3>
				<span class="label label-info">负责人姓名:<?php echo ($shanghuiInfo['mastername']); ?></span>
	    		<span class="label label-info">负责人手机:<?php echo ($shanghuiInfo['masterphone']); ?></span>
	    		<span class="label label-info">负责人微信:<?php echo ($shanghuiInfo['masterwechat']); ?></span>
	    		<span class="label label-info">负责人QQ:<?php echo ($shanghuiInfo['masterqq']); ?></span>
				<span class="label label-info">结算账户:<?php echo ($shanghuiInfo['shcount']); ?></span>
				
	    		<a class="btn btn-default addshanghu" href="<?php echo U('Shanghu/addShanghuList',array('id'=>$shanghuiInfo['id'],'shanghuiName'=>$shanghuiInfo['shname']));?>" role="button">增加商户</a>
	    		<a class="btn btn-default importshanghu" href="#" style="display:none;" role="button">导入</a>
				<a class="btn btn-default exportshanghu" id="exportshanghu" target="_blank" href="<?php echo U('Shanghu/exportShanghu',array('id'=>$shanghuiInfo['id']));?>" role="button">导出</a>
	    	</div>
	    	<div class="col-md-2"></div>
    	</div>
    	<div class="row">
    		<div class="col-md-2"></div>
    		<div class="col-md-8">
    			      <table class="table table-striped">
					        <thead>
					          <tr>
					            <th>商户名</th>
					            <th>是否缴费</th>
					            <th>是否充值</th>
					            <th>修改</th>
					            <th>删除</th>
					          </tr>
					        </thead>
					        <tbody>
							   <?php if(is_array($shanghuInfo)): foreach($shanghuInfo as $key=>$vo): ?><tr>
								  <td><a href="<?php echo U('Shangping/index',array('id'=>$vo['id']));?>"><?php echo ($vo["shname"]); ?></a></td>
					              <td><?php echo ($vo["ismoney"]); ?></td>
								  <td><?php echo ($vo["isvip"]); ?></td>
					              <td><a title="<?php echo ($vo["id"]); ?>" href="<?php echo U('Shanghu/updateShanghuList',array('id'=>$vo['id'],'shanghuiName'=>$shanghuiInfo['shname']));?>">修改</a></td>
					              <td><a title="<?php echo U('Shanghu/deleteshanghu',array('id'=>$vo['id']));?>" class="deleteshanghu" href="#">删除</a></td>
								  </tr><?php endforeach; endif; ?> 
					        </tbody>
                      </table>
    		</div>
    		<div class="col-md-2"></div>
    	</div>
    	
    	
    	
    	
    	
    	
    </div>
    
    
    
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/main.js"></script>
  </body>
</html>