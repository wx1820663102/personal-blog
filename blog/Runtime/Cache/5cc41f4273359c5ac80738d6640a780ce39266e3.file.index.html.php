<?php /* Smarty version Smarty-3.1.6, created on 2016-08-11 13:24:25
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2707657a68f2ee64e47-24239060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cc41f4273359c5ac80738d6640a780ce39266e3' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Home/View\\Index\\index.html',
      1 => 1470893060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2707657a68f2ee64e47-24239060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a68f2ef244f',
  'variables' => 
  array (
    'catelists' => 0,
    'catelist' => 0,
    'commendart' => 0,
    'comm' => 0,
    'newarts' => 0,
    'newart' => 0,
    'top10arts' => 0,
    'top10art' => 0,
    'top9news' => 0,
    'top9new' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a68f2ef244f')) {function content_57a68f2ef244f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\php\\WWW\\chuanzhi\\tpblog\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<title>首页</title>
<meta name="keywords" content="个人博客,张文潇个人博客,个人博客模板" />
<meta name="description" content="张文潇个人博客，是一个PHP程序猿的个人网站，提供个人博客模板免费资源下载和分享php知识的个人网站。" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link href="<?php echo @HOME_CSS_URL;?>
/base.css" rel="stylesheet">
<link href="<?php echo @HOME_CSS_URL;?>
/index.css" rel="stylesheet">
<link rel="icon" href="<?php echo @HOME_IMG_URL;?>
/mytouxiang.jpg" type="image/x-icon">
<!--[if lt IE 9]>
<script src="<?php echo @HOME_JS_URL;?>
/modernizr.js"></script>
<![endif]-->
<meta property="qc:admins" content="432060664761167116375" />
</head>
<body>
 <header>
  <div id="logo"><a href="index.html"></a></div>
  <nav class="topnav" id="topnav">
 
    <a href="index.html"><span>首页</span><span class="en">Protal</span></a>
  
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
  <!-- <a href="news.html"><span>慢生活</span><span class="en">Life</span></a> -->
    <!-- <a href="talk.html"><span>碎言碎语</span><span class="en">Doing</span></a>
    <a href="news.html"><span>模板分享</span><span class="en">Share</span></a>
    <a href="learn.html"><span>学无止境</span><span class="en">Learn</span></a>
    <a href="message.html"><span>留言版</span><span class="en">Guestbook</span></a> -->
  </nav>
</header>
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p>我们不停的翻弄着回忆</p>
      <p>却再也找不回那时的自己</p>
      <p>红尘一梦，不再追寻</p>
    </ul>
    <div class="avatar"><a href="<?php echo @__MODULE__;?>
/Category/about"><span>张文潇</span></a> </div>
  </section>
</div>
<div class="template">
  <div class="box">
    <h3><p><span>个人博客</span>模板 Templates</p></h3>
    <ul>
<?php  $_smarty_tpl->tpl_vars['comm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commendart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comm']->key => $_smarty_tpl->tpl_vars['comm']->value){
$_smarty_tpl->tpl_vars['comm']->_loop = true;
?>
<li>
  <a href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['comm']->value['article_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['comm']->value['title'];?>
" >
    <img src="<?php echo @SITE_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['comm']->value['thumb_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['comm']->value['title'];?>
">
  </a>
  <span><?php echo $_smarty_tpl->tpl_vars['comm']->value['title'];?>
</span>
</li>
<?php } ?>
<!-- <li><a href="news.htmldiv/2014-09-18/730.html" title="情侣博客模板系列之《回忆》Html" ><img src="<?php echo @HOME_IMG_URL;?>
/a79ec800b99c6348be21f17b0364621b.jpg" alt="情侣博客模板系列之《回忆》Html"></a><span>情侣博客模板系列之《回忆》Html</span></li>
<li><a href="news.htmldiv/2014-08-18/727.html" title="情侣博客模板系列之《回忆》PSD" ><img src="<?php echo @HOME_IMG_URL;?>
/82341b1592c4edca23cd73b390d1e4af.jpg" alt="情侣博客模板系列之《回忆》PSD"></a><span>情侣博客模板系列之《回忆》PSD</span></li>
<li><a href="news.htmldiv/2014-08-11/726.html" title="情侣博客模板系列之《初夏》Html" ><img src="<?php echo @HOME_IMG_URL;?>
/a0fdaddb02589193917cc8c239aca5cb.gif" alt="情侣博客模板系列之《初夏》Html"></a><span>情侣博客模板系列之《初夏》Html</span></li>
<li><a href="news.htmldiv/2014-06-13/689.html" title="个人博客模板《世界杯来袭》" ><img src="<?php echo @HOME_IMG_URL;?>
/1c0c0b9ba7b4b72266d980e69258933c.jpg" alt="个人博客模板《世界杯来袭》"></a><span>个人博客模板《世界杯来袭》</span></li>  -->
   </ul>
  </div>
</div>
<article>
  <h2 class="title_tj">
    <p>文章<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
    <?php  $_smarty_tpl->tpl_vars['newart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newarts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newart']->key => $_smarty_tpl->tpl_vars['newart']->value){
$_smarty_tpl->tpl_vars['newart']->_loop = true;
?>
    <h3><a href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['newart']->value['article_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['newart']->value['title'];?>
</a></h3>
    <figure><img src="<?php echo @SITE_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['newart']->value['thumb_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['newart']->value['title'];?>
"></figure>
    <ul>
      <p><?php echo $_smarty_tpl->tpl_vars['newart']->value['remark'];?>
</p>
      <a title="<?php echo $_smarty_tpl->tpl_vars['newart']->value['title'];?>
" href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['newart']->value['article_id'];?>
"  target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <p class="dateview"><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['newart']->value['pubtime'],'%Y-%m-%d %T');?>
</span><span>作者：<?php echo $_smarty_tpl->tpl_vars['newart']->value['author'];?>
</span><span>个人博客：[<a href="<?php echo @__MODULE__;?>
/Category/<?php echo $_smarty_tpl->tpl_vars['newart']->value['info'];?>
"><?php echo $_smarty_tpl->tpl_vars['newart']->value['name'];?>
</a>]</span></p>
    <?php } ?>
  </div>
  <aside class="right">
    <div class="weather">
     <iframe name="sinaWeatherTool" src="http://weather.news.sina.com.cn/chajian/iframe/weatherStyle0.html?city=%E8%8B%8F%E5%B7%9E" width="200" height="20" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
    </div>
    <div class="news">
    <h3>
      <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
      <?php  $_smarty_tpl->tpl_vars['top10art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top10art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top10arts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top10art']->key => $_smarty_tpl->tpl_vars['top10art']->value){
$_smarty_tpl->tpl_vars['top10art']->_loop = true;
?>
       <li><a href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['top10art']->value['article_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['top10art']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['top10art']->value['title'];?>
</a></li>
      <?php } ?>
       <!-- <li><a href="learn.htmlbj/2015-02-14/744.html" title="【郑重申明】本站只提供静态模板下载！" target="_blank">【郑重申明】本站只提供静态模板下载！</a></li>
       <li><a href="/news/s/2015-01-23/741.html" title="【孕期日记】生活本该如此" target="_blank">【孕期日记】生活本该如此</a></li>
       <li><a href="learn.htmlbj/2015-01-09/740.html" title="【匆匆那些年】总结个人博客经历的这四年…" target="_blank">【匆匆那些年】总结个人博客经历的这四年…</a></li>
       <li><a href="learn.htmlweb/2015-01-01/739.html" title=" 2014年度优秀个人博客排名公布" target="_blank"> 2014年度优秀个人博客排名公布</a></li>
       <li><a href="learn.htmlweb/2014-12-18/736.html" title="2014年度优秀个人博客评选活动" target="_blank">2014年度优秀个人博客评选活动</a></li>
       <li><a href="learn.htmlcss3/2014-12-09/734.html" title="使用CSS3制作文字、图片倒影" target="_blank">使用CSS3制作文字、图片倒影</a></li>
       <li><a href="learn.htmlcss3/2014-11-18/733.html" title="【分享】css3侧边栏导航不同方向划出效果" target="_blank">【分享】css3侧边栏导航不同方向划出效果</a></li>
       <li><a href="learn.htmlbj/2014-11-06/732.html" title="分享我的个人博客访问量如何做到IP从10到600的(图文)" target="_blank">分享我的个人博客访问量如何做到IP从10到600的(图文)</a></li>
       <li><a href="learn.htmlbj/2014-10-18/731.html" title="帝国cms常用标签调用方法总结（不得不收藏哦）" target="_blank">帝国cms常用标签调用方法总结（不得不收藏哦）</a></li>
       <li><a href="learn.htmlcss3/2014-09-11/729.html" title="【分享】css3标签切换卡样式" target="_blank">【分享】css3标签切换卡样式</a></li>
       <li><a href="/news/life/2014-07-31/725.html" title="即便是坑，我也想要拉你入伙！" target="_blank">即便是坑，我也想要拉你入伙！</a></li> -->
    </ul>
    <h3 class="ph">
      <p>模板<span>排行</span></p>
    </h3>
    <ul class="paih">
      <?php  $_smarty_tpl->tpl_vars['top9new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top9new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top9news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top9new']->key => $_smarty_tpl->tpl_vars['top9new']->value){
$_smarty_tpl->tpl_vars['top9new']->_loop = true;
?>
     <li><a href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['top9new']->value['article_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['top9new']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['top9new']->value['title'];?>
</a></li>
     <?php } ?>
     <!-- <li><a href="news.htmldiv/2014-04-17/661.html" title="黑色Html5个人博客模板主题《如影随形》" target="_blank">黑色Html5个人博客模板主题《如影随形》</a></li>
     <li><a href="news.htmldiv/2014-09-18/730.html" title="情侣博客模板系列之《回忆》Html" target="_blank">情侣博客模板系列之《回忆》Html</a></li>
     <li><a href="news.htmldiv/2014-01-22/647.html" title="响应式个人博客模板（蓝色清新）" target="_blank">响应式个人博客模板（蓝色清新）</a></li>
     <li><a href="news.htmldiv/2014-08-11/726.html" title="情侣博客模板系列之《初夏》Html" target="_blank">情侣博客模板系列之《初夏》Html</a></li>
     <li><a href="news.htmldiv/2014-06-13/689.html" title="个人博客模板《世界杯来袭》" target="_blank">个人博客模板《世界杯来袭》</a></li>
     <li><a href="news.htmldiv/2014-06-11/688.html" title="情侣博客模板系列之《初夏》PSD" target="_blank">情侣博客模板系列之《初夏》PSD</a></li>
     <li><a href="news.htmldiv/2014-08-18/727.html" title="情侣博客模板系列之《回忆》PSD" target="_blank">情侣博客模板系列之《回忆》PSD</a></li>
     <li><a href="news.htmldiv/2013-07-19/394.html" title="Green绿色小清新的夏天-个人博客模板" target="_blank">Green绿色小清新的夏天-个人博客模板</a></li>  -->
    </ul>
    <h3 class="links">
      <p>友情<span>链接</span></p>
    </h3>
    <ul class="website">
      <li><a href="http://www.thinkphp.cn/" target="_blank">ThinkPHP官网</a></li>
    </ul>     
  
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='{$smarty.const.HOME_JS_URL}/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

<div class="guanzhu">扫描二维码关注<span>张文潇博客</span>官方微信账号</div>   
    <a href="index.html" class="weixin"></a></aside>
</article>
<footer>
  <p>Design by Zwx <a href="http://www.miitbeian.gov.cn/" target="_blank">豫ICP备16022482号-1</a> </p>
</footer>
<script src="<?php echo @HOME_JS_URL;?>
/silder.js"></script>
<script type="text/javascript">
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
</body>
</html>
<?php }} ?>