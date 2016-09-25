<?php /* Smarty version Smarty-3.1.6, created on 2016-09-07 16:14:51
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\Role\roleadd.html" */ ?>
<?php /*%%SmartyHeaderCode:2946257cf9b90868497-07395071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f539378a8d360e6088805fb5b99e3809e785749' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\\Role\\roleadd.html',
      1 => 1473236083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2946257cf9b90868497-07395071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57cf9b90a48c8',
  'variables' => 
  array (
    'auths_infoA' => 0,
    'v' => 0,
    'auths_infoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cf9b90a48c8')) {function content_57cf9b90a48c8($_smarty_tpl) {?>﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
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
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>新建网站角色 - 管理员管理 - H-ui.admin v2.3</title>
<meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="<?php echo @__SELF__;?>
" method="post" class="form form-horizontal" id="form-admin-role-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="roleName" name="role_name" datatype="*4-16" nullmsg="用户账户不能为空">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="description">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">网站角色：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auths_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<dl class="permission-list">
					<dt>
						<label>
							<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" name="auth_id[]" id="user-Character-0">
							<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</label>
					</dt>
					<dd>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auths_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
						<dl class="cl permission-list2">
							<dt>
								<label class="">
									<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_id'];?>
" name="auth_id[]" id="user-Character-0-0">
									<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</label>
							</dt>
						</dl>
						<?php }?>
						<?php } ?>
					</dd>
				</dl>
				<?php } ?>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/icheck/jquery.icheck.min.js"></script> 
 
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});
	
	$("#form-admin-role-add").validate({
		rules:{
			roleName:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.layer.close(index);
		}
	});
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html><?php }} ?>