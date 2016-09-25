<?php /* Smarty version Smarty-3.1.6, created on 2016-09-06 19:46:34
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\Manger\userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:221157ce5db1745e33-29764469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a81a1393d23101bea55b55981f3890baa1223527' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\\Manger\\userlist.html',
      1 => 1473162391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221157ce5db1745e33-29764469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ce5db17f1c5',
  'variables' => 
  array (
    'mangers' => 0,
    'manger' => 0,
    'rolename' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ce5db17f1c5')) {function content_57ce5db17f1c5($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/html5.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/respond.min.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_URL;?>
//h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_URL;?>
//h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_LIB_URL;?>
/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_LIB_URL;?>
/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_URL;?>
//h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_STATIC_URL;?>
//h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">
	
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="">
		<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
	</div>
	
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="<?php echo U('Admin/Manger/mangeradd');?>
"  class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">员工列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">登录名</th>
				<th width="90">常用IP</th>
				<th width="150">邮箱</th>
				<th>角色</th>
				<th width="130">管理员简介</th>
				<!-- <th width="100">是否已启用</th> -->
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['manger'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manger']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mangers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manger']->key => $_smarty_tpl->tpl_vars['manger']->value){
$_smarty_tpl->tpl_vars['manger']->_loop = true;
?>
			<tr class="text-c">
				<td><input type="checkbox" value="2" name=""></td>
				<td><?php echo $_smarty_tpl->tpl_vars['manger']->value['user_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['manger']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['manger']->value['loginip'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['manger']->value['email'];?>
</td>
				<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rolename']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['role']->value['role_id']==$_smarty_tpl->tpl_vars['manger']->value['user_role_id']){?>
				<td><?php echo $_smarty_tpl->tpl_vars['role']->value['role_name'];?>
</td>
				<?php }?>
				<?php } ?>
				<td><?php echo $_smarty_tpl->tpl_vars['manger']->value['remark'];?>
</td>
				<!-- <td class="td-manage"><span class="label radius">已启用</span></td> -->
				<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,'10001')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a> <a title="编辑" href="<?php echo @__CONTROLLER__;?>
/mangeredit/user_id/<?php echo $_smarty_tpl->tpl_vars['manger']->value['user_id'];?>
"  class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="<?php echo @__CONTROLLER__;?>
/mangerdel/user_id/<?php echo $_smarty_tpl->tpl_vars['manger']->value['user_id'];?>
"  class="ml-5" style="text-decoration:none" onclick="javascript:return confirm('您确认要删除这个分类吗?')"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
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
//h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
//h-ui.admin/js/H-ui.admin.js"></script> 

<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}
</script>

</body>
</html><?php }} ?>