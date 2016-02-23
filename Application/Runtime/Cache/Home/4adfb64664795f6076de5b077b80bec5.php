<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>修改商户</title>
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
			    			      <h3>正在修改[ <?php echo ($shanghuiName); ?> ]旗下商户</h3>
			    			      <h4><?php echo ($data[0]['shname']); ?>的信息...</h4>
								  <form class="form-horizontal" id="updateshanghu_form" method="post" action="<?php echo U('Shanghu/updateShanghu');?>">
								   <input type="hidden" name='id' value="<?php echo ($data[0]['id']); ?>"/>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data[0]['shname']); ?>" name="shanghuname" class="form-control" placeholder="请输入商户名">
								    </div>
								  </div>
								   <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data[0]['mastername']); ?>" name="mastername" class="form-control" placeholder="请输入商户负责人姓名">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data[0]['masterphone']); ?>" name="masterphone" class="form-control" placeholder="请输入商户负责人手机">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data[0]['masterqq']); ?>" name="masterqq" class="form-control" placeholder="请输入商户负责人QQ">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data[0]['masterwechat']); ?>" name="masterwechat" class="form-control" placeholder="请输入商户负责人微信">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <input type="text" value="<?php echo ($data[0]['masteremail']); ?>" name="masteremail" class="form-control" placeholder="请输入商户负责人邮箱">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								       <select class="form-control" name="ismoney">							      									   
										    <?php if(($data[0]['ismoney'] == 1) ): ?><option value="0">尚未缴费</option>
										         <option selected="selected" value="1">已经缴费</option>
											<?php else: ?>
											     <option selected="selected" value="0">尚未缴费</option>
										         <option  value="1">已经缴费</option><?php endif; ?>								  
									   </select>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <select class="form-control" name="isvip">
										   <?php if(($data[0]['isvip'] == 1) ): ?><option value="0">尚未充值</option>
										         <option selected="selected" value="1">已经充值</option>
											<?php else: ?>
											     <option selected="selected" value="0">尚未充值</option>
										         <option  value="1">已经充值</option><?php endif; ?>	
									   </select>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10">
								      <button type="submit" class="btn btn-default" id="updateshanghu">修改</button>
								      
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