<?php /* Smarty version Smarty-3.1.6, created on 2016-08-09 08:51:49
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Home/View\Category\about.html" */ ?>
<?php /*%%SmartyHeaderCode:2261457a69738781f17-24597711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be71a853eaa7b656332dc8188e7d98709fe2a6e4' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Home/View\\Category\\about.html',
      1 => 1470703076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2261457a69738781f17-24597711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a697388ba76',
  'variables' => 
  array (
    'catelists' => 0,
    'catelist' => 0,
    'artinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a697388ba76')) {function content_57a697388ba76($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>关于我</title>
<meta name="keywords" content="张文潇" />
<meta name="description" content="" />
<link href="<?php echo @HOME_CSS_URL;?>
/base.css" rel="stylesheet">
<link href="<?php echo @HOME_CSS_URL;?>
/about.css" rel="stylesheet">
<link rel="icon" href="<?php echo @HOME_IMG_URL;?>
/mytouxiang.jpg" type="image/x-icon">
<!--[if lt IE 9]>
<script src="<?php echo @HOME_JS_URL;?>
/modernizr.js"></script>
<![endif]-->
</head>
<body>
 <header>
  <div id="logo"><a href="index.html"></a></div>
  <nav class="topnav" id="topnav"><a href="<?php echo @__MODULE__;?>
/Index/index"><span>首页</span><span class="en">Protal</span></a>
   <?php  $_smarty_tpl->tpl_vars['catelist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catelist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catelists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catelist']->key => $_smarty_tpl->tpl_vars['catelist']->value){
$_smarty_tpl->tpl_vars['catelist']->_loop = true;
?>
    <a href="<?php echo @__MODULE__;?>
/Category/<?php echo $_smarty_tpl->tpl_vars['catelist']->value['info'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['catelist']->value['name'];?>
</span><span class="en"><?php echo $_smarty_tpl->tpl_vars['catelist']->value['info'];?>
</span></a>
  <?php } ?>
  <!-- <a href="about.html"><span>关于我</span><span class="en">About</span></a> -->
  <!-- <a href="news.html"><span>慢生活</span><span class="en">Life</span></a> --><!-- <a href="talk.html"><span>碎言碎语</span><span class="en">Doing</span></a><a href="news.html"><span>模板分享</span><span class="en">Share</span></a><a href="learn.html"><span>学无止境</span><span class="en">Learn</span></a><a href="message.html"><span>留言版</span><span class="en">Guestbook</span></a> --></nav>
  </nav>
</header>
<article class="aboutcon">
<h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="<?php echo @__MODULE__;?>
/Index/index" class="n1">网站首页</a><a href="about.html" class="n2">关于我</a></h1>
<div class="about left">
  <h2><?php echo $_smarty_tpl->tpl_vars['artinfo']->value['title'];?>
</h2>
    <ul> 
    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['artinfo']->value['content']);?>

    </ul>
    <h2>About my blog</h2>
    <p>域  名：zhangwenxiao.cn 创建于2016年07月18日 <a href="http://www.net.cn/domain/" class="blog_link" target="_blank">注册域名</a></p>
    <p>服务器：腾讯云服务器<a href="https://www.qcloud.com/?utm_source=bdppzq&utm_medium=line&utm_campaign=baidu" target="_blank" class="blog_link" >购买空间</a><a href="#" target="_blank" class="blog_link" >参考我的空间配置</a></p>


</div>
<aside class="right">  
    <div class="about_c">
    <p>网名：<span>安静的小白</span> | 心机"婊"加藤惠</p>
    <p>姓名：张文潇 </p>
    <p>籍贯：河南省—信阳市</p>
    <p>现居：常熟市—湖山路</p>
    <p>职业：网站制作,phper</p>
    <p>喜欢的书：《白夜行》《嫌疑人X的献身》</p>
    <p>喜欢的音乐：《小小的手心》《晴天》《Cry On My Shoulder》</p>
<p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=HSwlLy0rKy4sLS9dbGwzfnJw" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png"/></a></p>
<!-- <p>
<a target="_blank" href="http://list.qq.com/cgi-bin/qf_invite?id=65fb9b3618916f162973471ebc5b97ff786efae0ec9a863e"><img border="0" alt="填写您的邮件地址，订阅我们的精彩内容：" src="<?php echo @HOME_IMG_URL;?>
/picMode_light_m.png" /></a>
</p> -->
  <p><img src="<?php echo @HOME_IMG_URL;?>
/jthh.jpg" alt="加藤惠"></p>
</div>     
</aside>
</article>
<footer>
  <p>Design by Zwx <a href="http://www.miitbeian.gov.cn/" target="_blank">豫ICP备16022482号-1</a> </p>
</footer>
<script src="<?php echo @HOME_JS_URL;?>
/silder.js"></script>
<!-- <script type="text/javascript">
    /*图 推广-yangqq.com*/
var cpro_id = "u1685956";
</script>
<script src="<?php echo @HOME_JS_URL;?>
/i.js" type="text/javascript"></script>
<script type="text/javascript">
    /*yangqq内文- 创建于 2014-11-27*/
var cpro_id = "u1831141";
</script>
<script src="<?php echo @HOME_JS_URL;?>
/cnw.js" type="text/javascript"></script>
</body> -->
</html>
<?php }} ?>