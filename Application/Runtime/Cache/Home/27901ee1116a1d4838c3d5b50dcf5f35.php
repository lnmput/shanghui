<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>增加商品</title>
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/main.css" rel="stylesheet">
  </head>

    <div class="container-fluid">
    	<div class="row mynav">
    		<div class="col-md-2">
    		</div>
    		<div class="col-md-8">
                  <a class="btn btn-primary" href="<?php echo U('Shanghui/shlist');?>"  role="button">商会管理</a>
                  <a class="btn btn-warning logout" href="/admin/logout" role="button">退出</a>
			      <a class="btn btn-warning backup" target="_blank" href="<?php echo U('Admin/backup');?>" role="button">数据备份</a>
    		</div>
    		<div class="col-md-2">
    		</div>
    	</div>
    	<div class="row" style="margin-top: 50px;">
			    		<div class="col-md-4"></div>
			    		<div class="col-md-4">
			    			       <h3>添加商品:</h3>
								  <form class="form-horizontal" id="addshangping_form" method="post" action="<?php echo U('Shangping/addShangping');?>">
								  <input type="hidden" name="id" value="<?php echo ($id); ?>" />
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" name="shangName" class="form-control" placeholder="请输入商品名">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" name="shangPrice" class="form-control" placeholder="请输入商品价格">
								    </div>
								  </div>
								   <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" name="shangBase" class="form-control" placeholder="请输入基础佣金比例(1-100之间)">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" name="ShangOne" class="form-control" placeholder="请输入一级分销比例(1-100之间)">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" name="ShangTwo" class="form-control" placeholder="请输入二级分销比例(1-100之间)">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" name="shangThree" class="form-control" placeholder="请输入三级分销比例(1-100之间)">
								    </div>
								  </div>
								
								  <div class="form-group">
								    <div class="col-sm-10">
								      <button type="submit" class="btn btn-default" id="addshanghu">增加</button>
								    </div>
								  </div>
								</form>
			    		</div>
			    		<div class="col-md-4"></div>
    	</div>
    	
    	
    	
    </div>
    
    
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
	<script src="/Public/js/jquery.validate.js"></script>
    <script src="/Public/js/messages_zh.js"></script>
    <script src="/Public/js/main.js"></script>
  </body>
</html>