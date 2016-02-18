<?php
return array(
	     //'配置项'=>'配置值'
	    'MODULE_ALLOW_LIST' => array ('Home'),
		'DEFAULT_MODULE'        =>  'Home',  // 默认模块
		'DEFAULT_CONTROLLER'    =>  'Admin', // 默认控制器名称
		'DEFAULT_ACTION'        =>  'login', // 默认操作名称
		
		'DB_TYPE'=>'mysql', //数据库类型
		'DB_HOST'=>'localhost', //服务器地址
		'DB_NAME'=>'shanghu', //数据库名
		'DB_USER'=>'root', //用户名
		'DB_PWD'=>'root', //密码
		'DB_PORT'=>3306, //端口
		'DB_PREFIX'=>'lk_', //数据库表前缀
);