<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商会管理</title>
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/main.css" rel="stylesheet">
  </head>
<body>
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
    	<div class="row" style="margin:50px 0 10px;">
	    	<div class="col-md-2"></div>
	    	<div class="col-md-8">
	    		<a class="btn btn-default addshanghui" href="addShanghui" role="button">增加商会</a>
				<a class="btn btn-default exportshanghu" target="_blank" href="<?php echo U('Shanghui/exportShanghui');?>" role="button">导出数据</a>
	    	</div>
	    	<div class="col-md-2"></div>
    	</div>
    	<div class="row">
    		<div class="col-md-2"></div>
    		<div class="col-md-8">
    			<table class="table table-striped">
			        <thead>
			          <tr>
			            <th>商会名</th>
			            <th>负责人</th>
			            <th>修改</th>
			            <th>删除</th>
			          </tr>
			        </thead>
			        <tbody>
					    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
						  <td><a href="<?php echo U('Shanghu/index',array('id'=>$vo['id']));?>"><?php echo ($vo["shname"]); ?></a></td>
			              <td><?php echo ($vo["mastername"]); ?></td>
			              <td><a title="<?php echo ($vo["id"]); ?>" href="<?php echo U('Shanghui/updateShanghui',array('id'=>$vo['id']));?>">修改</a></td>
			              <td><a title="<?php echo U('Shanghui/deleteShanghui',array('id'=>$vo['id']));?>" class="deleteshanghui" href="#">删除</a></td>
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