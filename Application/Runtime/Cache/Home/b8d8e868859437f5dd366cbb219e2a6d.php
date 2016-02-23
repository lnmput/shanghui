<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品管理</title>
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
    	<div class="row">
	    	<div class="col-md-2"></div>
	    	<div class="col-md-8">
	    		<h3><?php echo ($shanghuiName); ?>旗下商会:</h3>
	    		<h4><?php echo ($shanghuInfo[0]['shname']); ?></h4>
	    		<span class="label label-info">负责人姓名:<?php echo ($shanghuInfo[0]['mastername']); ?></span>
	    		<span class="label label-info">负责人手机:<?php echo ($shanghuInfo[0]['masterphone']); ?></span>
	    		<span class="label label-info">负责人微信:<?php echo ($shanghuInfo[0]['masterwechat']); ?></span>
	    		<span class="label label-info">负责人QQ:<?php echo ($shanghuInfo[0]['masterqq']); ?></span>
				<span class="label label-info">负责人邮箱:<?php echo ($shanghuInfo[0]['masteremail']); ?></span>
	    		

	    		<a class="btn btn-default addshanghu" href="<?php echo U('Shangping/addShangpingList',array('id'=>$shanghuInfo[0]['id']));?>" role="button">添加商品</a>
	    		<a class="btn btn-default exportshanghu" target="_blank" href="<?php echo U('Shangping/exportshanghu',array('id'=>$shanghuInfo[0]['id'],'shanghuname'=>$shanghuInfo[0]['shname']));?>" role="button">导出</a>
	    	</div>
	    	<div class="col-md-2"></div>
    	</div>
    	<div class="row">
    		<div class="col-md-2"></div>
    		<div class="col-md-8">
    			      <table class="table table-striped">
					        <thead>
					          <tr>
					            <th>商品名称</th>
					            <th>商品价格</th>
					            <th>基础佣金比例</th>
					            <th>一级佣金比例</th>
					            <th>二级佣金比例</th>
					            <th>三级佣金比例</th>
					            <th>修改</th>
					            <th>删除</th>
					          </tr>
					        </thead>
					        <tbody>
					          <?php if(is_array($shangpingInfo)): $i = 0; $__LIST__ = $shangpingInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
								 <td><a href="shangping.html"><?php echo ($data["shangname"]); ?></a></td>
					             <td><?php echo ($data["shangprice"]); ?>元</td>
					             <td><?php echo ($data["shangbase"]); ?>%</td>
					             <td><?php echo ($data["shangone"]); ?>%</td>
					             <td><?php echo ($data["shangtwo"]); ?>%</td>
					             <td><?php echo ($data["shangthree"]); ?>%</td> 
					             <td><a title="<?php echo ($data["id"]); ?>" href="<?php echo U('Shangping/updateShangpingList',array('id'=>$data['id']));?>">修改</a></td>
					             <td><a  class="deleteshangping" title="<?php echo U('Shangping/deleteShangping',array('id'=>$data['id']));?>" href="#">删除</a></td>
								 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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