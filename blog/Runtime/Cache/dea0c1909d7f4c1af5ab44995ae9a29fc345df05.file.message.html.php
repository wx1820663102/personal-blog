<?php /* Smarty version Smarty-3.1.6, created on 2016-08-10 13:01:08
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Home/View\Category\message.html" */ ?>
<?php /*%%SmartyHeaderCode:2871357a699429850a8-41170117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea0c1909d7f4c1af5ab44995ae9a29fc345df05' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Home/View\\Category\\message.html',
      1 => 1470805267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871357a699429850a8-41170117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a699429fa3b',
  'variables' => 
  array (
    'catelists' => 0,
    'catelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a699429fa3b')) {function content_57a699429fa3b($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>留言</title>
<meta name="keywords" content="默认留言分类" />
<meta name="description" content="默认留言分类" />
<link href="<?php echo @HOME_CSS_URL;?>
/base.css" rel="stylesheet">
<link href="<?php echo @HOME_CSS_URL;?>
/book.css" rel="stylesheet">
<link rel="icon" href="<?php echo @HOME_IMG_URL;?>
/mytouxiang.jpg" type="image/x-icon">
</head>
<body>
 <header>
  <div id="logo"><a href="index.html"></a></div>
  <nav class="topnav" id="topnav"><a href="<?php echo @__MODULE__;?>
/Index/index"><span>首页</span><span class="en">Protal</span></a>
  <!-- <a href="about.html"><span>关于我</span><span class="en">About</span></a><a href="news.html"><span>慢生活</span><span class="en">Life</span></a><a href="talk.html"><span>碎言碎语</span><span class="en">Doing</span></a><a href="news.html"><span>模板分享</span><span class="en">Share</span></a><a href="learn.html"><span>学无止境</span><span class="en">Learn</span></a><a href="message.html" id="topnav_current"><span>留言版</span><span class="en">Guestbook</span></a> -->
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
  </nav>
  </nav>
</header>
<article class="aboutcon">
<h1 class="t_nav"><span>你，生命中最重要的过客，之所以是过客，因为你未曾为我停留。</span><a href="<?php echo @__MODULE__;?>
/Index/index" class="n1">网站首页</a><a href="#" class="n2">留言版</a></h1>
<div class="book left">
<!-- Duoshuo Comment BEGIN -->
<div class="ds-thread" data-thread-key="c035b1948a2fb4b012aa7b8504bd9168" data-title="欢迎大家留言" data-url="http://tpblog.com/blog/index.php/Home/Category/message"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->

<script type="text/javascript">
var duoshuoQuery = {short_name:"zhangwx"};
  (function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] 
     || document.getElementsByTagName('body')[0]).appendChild(ds);
  })();
  </script>
  
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

</body>
</html>


<?php }} ?>