<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>修改商会</title>
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
    		</div>
    		<div class="col-md-2">
    		</div>
    	</div>
    	<div class="row" style="margin-top: 50px;">
			    		<div class="col-md-4"></div>
			    		<div class="col-md-4">
			    			       <h3>修改商会 :<?php echo ($id); ?></h3>
								  <form class="form-horizontal" id="updateshanghui_form" method="post" action="<?php echo U('Shanghui/update');?>">
								  	<input type="hidden" value="<?php echo ($data['id']); ?>" name="id">
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data['shname']); ?>" name="shanghuiname" class="form-control" placeholder="商会名">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data['mastername']); ?>" name="mastername" class="form-control" placeholder="商会负责人姓名">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data['masterphone']); ?>" name="masterphone" class="form-control" placeholder="商会负责人手机">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data['masterwechat']); ?>" name="masterwechat" class="form-control" placeholder="商会负责人微信">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data['masterqq']); ?>" name="masterqq" class="form-control" placeholder="商会负责人QQ">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data['bankaccount']); ?>" name="bankaccount" class="form-control" placeholder="商会结算账户">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <button type="submit" class="btn btn-default" id="updateshanghui">修改</button>
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