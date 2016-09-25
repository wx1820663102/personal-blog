<?php 
	//入口文件
	header("content-type:text/html;charset=utf-8");
	//设置模式
	define('APP_DEBUG',true);   //开发调试模式
	//define('APP_DEBUG',false);   //生产模式
	//给系统静态资源文件请求路径设置常量
	define('SITE_URL','/blog/');
	
	//定义前台后台的静态资源路径
	//Home前台
	define('HOME_CSS_URL','/blog/Home/Public/css/');
	define('HOME_IMG_URL','/blog/Home/Public/images/');
	define('HOME_JS_URL','/blog/Home/Public/js/');
	define('HOME_FONTS_URL','/blog/Home/Public/fonts/');
	//Admin后台
	define('ADMIN_LIB_URL','/blog/Admin/Public/lib/');
	define('ADMIN_STATIC_URL','/blog/Admin/Public/static/');
	define('ADMIN_TEMP_URL','/blog/Admin/Public/temp/');

	require('../ThinkPHP/ThinkPHP.php');
?>