<?php /* Smarty version Smarty-3.1.6, created on 2016-09-08 07:46:02
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2523657a00900a44a03-14271221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da494e9d8016fc1e3a4b861b42ba5cf42edc80c5' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\\Index\\index.html',
      1 => 1473291960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2523657a00900a44a03-14271221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a00900d1753',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a00900d1753')) {function content_57a00900d1753($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="<?php echo @ADMIN_TEMP_URL;?>
/favicon.ico" >
<LINK rel="Shortcut Icon" href="<?php echo @ADMIN_TEMP_URL;?>
favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/html5.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/respond.min.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_URL;?>
/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_URL;?>
/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_LIB_URL;?>
/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_LIB_URL;?>
/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_URL;?>
/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_URL;?>
/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://<?php echo @ADMIN_LIB_URL;?>
.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>个人博客网站后台</title>
<meta name="keywords" content="H-ui.admin v2.4,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.4，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="#">admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v2.4</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="<?php echo U('Admin/Category/categoryadd');?>
" target="_blank"><i class="Hui-iconfont">&#xe616;</i> 分类</a></li>
							<li><a href="<?php echo U('Admin/Article/articleadd');?>
" target="_blank"><i class="Hui-iconfont">&#xe613;</i> 文章</a></li>
							<li><a href="<?php echo U('Admin/Tag/tagadd');?>
" target="_blank"><i class="Hui-iconfont">&#xe620;</i> 标签</a></li>
							<li><a href="<?php echo U('Admin/Manger/mangeradd');?>
" target="_blank"><i class="Hui-iconfont">&#xe60d;</i> 管理员</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo $_SESSION['admin_name'];?>
 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">个人信息</a></li>
							<li><a href="<?php echo U('Admin/Manger/logout');?>
">切换账户</a></li>
							<li><a href="<?php echo @__MODULE__;?>
/Manger/logout">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="<?php echo U('Home/Index/index');?>
" title="查看前台" target="blank"><span class="badge badge-danger"></span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 分类管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo @__MODULE__;?>
/Category/categorylist.html" data-title="分类列表" href="javascript:void(0)">分类列表</a></li>
				</ul>
				<ul>
					<li><a _href="<?php echo @__MODULE__;?>
/Category/categoryadd.html" data-title="分类添加" href="javascript:void(0)">分类添加</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 文章管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo @__MODULE__;?>
/Article/articlelist.html" data-title="文章列表" href="javascript:void(0)">文章列表</a></li>
				</ul>
				<ul>
					<li><a _href="<?php echo @__MODULE__;?>
/Article/articleadd.html" data-title="文章添加" href="javascript:void(0)">文章添加</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 标签管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo @__MODULE__;?>
/Tag/taglist.html" data-title="标签列表" href="javascript:void(0)">标签列表</a></li>
					<li><a _href="<?php echo @__MODULE__;?>
/Tag/tagadd.html" data-title="标签添加" href="javascript:void(0)">标签添加</a></li>
					<!-- <li><a _href="<?php echo @__MODULE__;?>
/Tag/tagedit.html" data-title="标签编辑" href="javascript:void(0)">标签编辑</a></li> -->
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="http://zhangwx.duoshuo.com/admin/" data-title="评论列表" href="javascript:;">评论列表</a></li>
					<li><a _href="feedback-list.html" data-title="意见反馈" href="javascript:void(0)">意见反馈</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo @__MODULE__;?>
/Role/rolelist.html" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a _href="<?php echo @__MODULE__;?>
/Auth/authlist.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a _href="<?php echo @__MODULE__;?>
/Manger/userlist.html" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="member-list.html" data-title="会员列表" href="javascript:;">会员列表</a></li>
					<li><a _href="member-del.html" data-title="删除的会员" href="javascript:;">删除的会员</a></li>
					<li><a _href="member-level.html" data-title="等级管理" href="javascript:;">等级管理</a></li>
					<li><a _href="member-scoreoperation.html" data-title="积分管理" href="javascript:;">积分管理</a></li>
					<li><a _href="member-record-browse.html" data-title="浏览记录" href="javascript:void(0)">浏览记录</a></li>
					<li><a _href="member-record-download.html" data-title="下载记录" href="javascript:void(0)">下载记录</a></li>
					<li><a _href="member-record-share.html" data-title="分享记录" href="javascript:void(0)">分享记录</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="charts-1.html" data-title="折线图" href="javascript:void(0)">折线图</a></li>
					<li><a _href="charts-2.html" data-title="时间轴折线图" href="javascript:void(0)">时间轴折线图</a></li>
					<li><a _href="charts-3.html" data-title="区域图" href="javascript:void(0)">区域图</a></li>
					<li><a _href="charts-4.html" data-title="柱状图" href="javascript:void(0)">柱状图</a></li>
					<li><a _href="charts-5.html" data-title="饼状图" href="javascript:void(0)">饼状图</a></li>
					<li><a _href="charts-6.html" data-title="3D柱状图" href="javascript:void(0)">3D柱状图</a></li>
					<li><a _href="charts-7.html" data-title="3D饼状图" href="javascript:void(0)">3D饼状图</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="system-base.html" data-title="系统设置" href="javascript:void(0)">系统设置</a></li>
					<li><a _href="system-category.html" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li>
					<li><a _href="system-data.html" data-title="数据字典" href="javascript:void(0)">数据字典</a></li>
					<li><a _href="system-shielding.html" data-title="屏蔽词" href="javascript:void(0)">屏蔽词</a></li>
					<li><a _href="system-log.html" data-title="系统日志" href="javascript:void(0)">系统日志</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="U('Admin/Index/welcome')" href="U('Admin/Index/welcome')">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="welcome.html"></iframe>
		</div>
	</div>
</section>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
</script> 
<script type="text/javascript">
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s)})();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html><?php }} ?>