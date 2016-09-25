<?php /* Smarty version Smarty-3.1.6, created on 2016-09-07 18:49:42
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\Auth\authedit.html" */ ?>
<?php /*%%SmartyHeaderCode:3165557cfedeb810d87-96956741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4abd308c410ea2232e7171a4530ec690758d9b11' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Admin/View\\Auth\\authedit.html',
      1 => 1473245375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3165557cfedeb810d87-96956741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57cfedeb91694',
  'variables' => 
  array (
    'info' => 0,
    'authlist' => 0,
    'v' => 0,
    'authac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cfedeb91694')) {function content_57cfedeb91694($_smarty_tpl) {?><!DOCTYPE HTML>
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
/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://<?php echo @ADMIN_LIB_URL;?>
.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>修改权限节点</title>
</head>
<body>
<div class="page-container">
  <form action="<?php echo @__SELF__;?>
" method="post" class="form form-horizontal" id="form-user-add">
  <input type="hidden" name="auth_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_id'];?>
">
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>权限名称：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_name'];?>
" placeholder="" id="user-name" name="auth_name">
      </div>
      <div class="col-5"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>所属模块：</label>
      <div class="formControllers col-5">
        <select name="auth_pid">
          <option value="0">
            顶级模块
          </option>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['auth_id']==$_smarty_tpl->tpl_vars['info']->value['auth_pid']){?>selected='selected'<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>

          </option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>方法名称：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['authac']->value;?>
" placeholder="输入控制器和方法,用 ',' 分隔" id="user-name" name="auth">
      </div>
      <div class="col-5"> </div>
    </div>
    <!-- <div class="row cl">
      <label class="form-label col-2">备注：</label>
      <div class="formControls col-5">
        <textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,100)"></textarea>
        <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
      </div>
      <div class="col-5"> </div>
    </div> -->
    <div class="row cl">
      <div class="col-9 col-offset-2">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
</div>
</div>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_URL;?>
/layer/2.1/layer.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_STATIC_URL;?>
/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-user-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
</script>
</body>
</html><?php }} ?>