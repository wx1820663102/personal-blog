<?php /* Smarty version Smarty-3.1.6, created on 2016-09-07 18:02:20
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\Auth\authlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1984557ce5e7d76f903-53719395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1223eba3e8a3f644c0b10248a2c0bc85ebd5c3c' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\\Auth\\authlist.html',
      1 => 1473242537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984557ce5e7d76f903-53719395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ce5e7d80bd2',
  'variables' => 
  array (
    'count' => 0,
    'auths' => 0,
    'auth' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ce5e7d80bd2')) {function content_57ce5e7d80bd2($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<style type="text/css">
	.page{
		margin-top: 10px;
		word-spacing: 5px;
	}
	.page span,.page a{
		margin-right: 20px;
	}
</style>
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>权限管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 权限管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form class="Huiform" method="post" action="" target="_self">
			<input type="text" class="input-text" style="width:250px" placeholder="权限名称" id="" name="">
			<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜权限节点</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="<?php echo U('authadd');?>
"  class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加权限节点</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['count']->value['count(auth_id)'];?>
</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="7">权限节点</th>
			</tr>
			
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="200">权限名称</th>
				<th>字段名</th>
				<th width="100">操作</th>
			</tr>
			
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['auth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auth']->key => $_smarty_tpl->tpl_vars['auth']->value){
$_smarty_tpl->tpl_vars['auth']->_loop = true;
?>
			<tr class="text-c">
				<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['auth']->value['auth_id'];?>
" name=""></td>
				<td><?php echo $_smarty_tpl->tpl_vars['auth']->value['auth_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['auth']->value['auth_name'];?>
</td>
				<td><?php echo (($_smarty_tpl->tpl_vars['auth']->value['auth_c']).(" ")).($_smarty_tpl->tpl_vars['auth']->value['auth_a']);?>
</td>
				<td><a title="编辑" href="<?php echo @__CONTROLLER__;?>
/authedit/auth_id/<?php echo $_smarty_tpl->tpl_vars['auth']->value['auth_id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="<?php echo @__CONTROLLER__;?>
/authdel/auth_id/<?php echo $_smarty_tpl->tpl_vars['auth']->value['auth_id'];?>
"  class="ml-5" style="text-decoration:none" onclick="javascript:return confirm('您确认要删除这个权限吗?')"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</div>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
/h-ui.admin/js/H-ui.admin.js"></script> 

<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-权限-添加*/
function admin_permission_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-权限-编辑*/
function admin_permission_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}

/*管理员-权限-删除*/
function admin_permission_del(obj,id){
	layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
</script>

</body>
</html><?php }} ?>