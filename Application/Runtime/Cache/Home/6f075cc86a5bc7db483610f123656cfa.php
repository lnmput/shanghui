<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理员登录</title>
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/main.css" rel="stylesheet">
  </head>

    <div class="container">
    	<div class="row login">
    		<div class="col-md-2">
    		</div>
    		<div class="col-md-8">
    			    <form class="form-inline" method="post" action="/Admin/getLogin">
					  <div class="form-group">
					    <label>管理员:</label>
					    <input type="text" class="form-control" name="admin"  placeholder="请输入管理员名">
					  </div>
					  <div class="form-group">
					    <label >密码:</label>
					    <input type="password" class="form-control" name="password" placeholder="请输入密码">
					  </div>
					  <button type="submit" class="btn btn-default">登录</button>
					</form>
    		</div>
    		<div class="col-md-2">
    			
    		</div>
    	</div>
    </div>
  
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
  </body>
</html>