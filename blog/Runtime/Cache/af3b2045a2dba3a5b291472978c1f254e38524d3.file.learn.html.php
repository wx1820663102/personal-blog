<?php /* Smarty version Smarty-3.1.6, created on 2016-09-08 08:24:00
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Home/View\Category\learn.html" */ ?>
<?php /*%%SmartyHeaderCode:2124457a697f8297fd3-32083008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3b2045a2dba3a5b291472978c1f254e38524d3' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Home/View\\Category\\learn.html',
      1 => 1473294237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2124457a697f8297fd3-32083008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a697f8416d2',
  'variables' => 
  array (
    'catelists' => 0,
    'catelist' => 0,
    'top10arts' => 0,
    'top10art' => 0,
    'jutitag' => 0,
    'page' => 0,
    'tags' => 0,
    'tag' => 0,
    'new8arts' => 0,
    'new8art' => 0,
    'click9arts' => 0,
    'click9art' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a697f8416d2')) {function content_57a697f8416d2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\php\\WWW\\chuanzhi\\tpblog\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>学无止境</title>
<meta name="keywords" content="html5,div,css,个人博客,个人网站,个人博客模板,个人网站模板" />
<meta name="description" content="杨青个人博客网站,一个站在web前段设计之路的女技术员个人博客网站，提供个人博客，个人网站div+css源码分享" />
<link href="<?php echo @HOME_CSS_URL;?>
/base.css" rel="stylesheet">
<link href="<?php echo @HOME_CSS_URL;?>
/learn.css" rel="stylesheet">
<link rel="icon" href="<?php echo @HOME_IMG_URL;?>
/mytouxiang.jpg" type="image/x-icon">
<!--[if lt IE 9]>
<script src="<?php echo @HOME_JS_URL;?>
/modernizr.js"></script>
<![endif]-->
<!-- 返回顶部调用 begin -->
<link href="<?php echo @HOME_CSS_URL;?>
/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo @HOME_JS_URL;?>
/jquery.js"></script>
<script type="text/javascript" src="<?php echo @HOME_JS_URL;?>
/js.js"></script>
<!-- 返回顶部调用 end-->
</head>
<body>
 <header>
  <div id="logo"><a href="index.html"></a></div>
  <nav class="topnav" id="topnav"><a href="<?php echo @__MODULE__;?>
/Index/index"><span>首页</span><span class="en">Protal</span></a><!-- <a href="about.html"><span>关于我</span><span class="en">About</span></a> <a href="news.html"><span>慢生活</span><span class="en">Life</span></a><a href="talk.html"><span>碎言碎语</span><span class="en">Doing</span></a><a href="news.html"><span>模板分享</span><span class="en">Share</span></a><a href="learn.html"><span>学无止境</span><span class="en">Learn</span></a><a href="message.html"><span>留言版</span><span class="en">Guestbook</span></a> -->
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
<article class="blogs">
<h1 class="t_nav"><span>我们长路漫漫，只因学无止境。 </span><a href="<?php echo @__MODULE__;?>
/Index/index" class="n1">网站首页</a><a href="<?php echo @__SELF__;?>
" class="n2">学无止境</a></h1>
<div class="newblog left">
<?php  $_smarty_tpl->tpl_vars['top10art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top10art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top10arts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top10art']->key => $_smarty_tpl->tpl_vars['top10art']->value){
$_smarty_tpl->tpl_vars['top10art']->_loop = true;
?>
     <h2><a title="<?php echo $_smarty_tpl->tpl_vars['top10art']->value['title'];?>
" href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['top10art']->value['article_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['top10art']->value['title'];?>
</a></h2>
    <p class="dateview"><span>发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['top10art']->value['pubtime'],'%Y-%m-%d');?>
</span><span>作者：<?php echo $_smarty_tpl->tpl_vars['top10art']->value['author'];?>
</span><span>[<a href="learn.htmlweb/"><?php echo $_smarty_tpl->tpl_vars['jutitag']->value[$_smarty_tpl->tpl_vars['top10art']->value['article_id']]['tagname'];?>
</a>]</span></p>
    <figure><a title="<?php echo $_smarty_tpl->tpl_vars['top10art']->value['title'];?>
" href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['top10art']->value['article_id'];?>
" ><img src="<?php echo @SITE_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['top10art']->value['thumb_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['top10art']->value['title'];?>
"></a></figure>
    <ul class="nlist">
      <p><?php echo $_smarty_tpl->tpl_vars['top10art']->value['remark'];?>
</p>
      <a title="<?php echo $_smarty_tpl->tpl_vars['top10art']->value['title'];?>
" href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['top10art']->value['article_id'];?>
" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div> 
<?php } ?>
    <!-- <h2><a title="【郑重申明】本站只提供静态模板下载！" href="learn.htmlbj/2015-02-14/744.html" >【郑重申明】本站只提供静态模板下载！</a></h2>
   <p class="dateview"><span>发布时间：2015-02-14</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="【郑重申明】本站只提供静态模板下载！" href="learn.htmlbj/2015-02-14/744.html" ><img src="<?php echo @HOME_IMG_URL;?>
/7bfa86da623b574b18a1ea892e684b4a.jpg" alt="【郑重申明】本站只提供静态模板下载！"></a></figure>
    <ul class="nlist">
      <p>本站郑重申明只提供静态模板下载，拒绝伸手党！本站所有能提供的模板均已发布，喜欢就下载！下载是干嘛的？！学习参考！初衷就是让更多喜欢web设计的新手能从中找到乐趣，以及开发设计更多更好的模板！</p>
      <a title="【郑重申明】本站只提供静态模板下载！" href="learn.htmlbj/2015-02-14/744.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="【匆匆那些年】总结个人博客经历的这四年…" href="learn.htmlbj/2015-01-09/740.html" >【匆匆那些年】总结个人博客经历的这四年…</a></h2>
   <p class="dateview"><span>发布时间：2015-01-09</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="【匆匆那些年】总结个人博客经历的这四年…" href="learn.htmlbj/2015-01-09/740.html" ><img src="<?php echo @HOME_IMG_URL;?>
/1d7c3211eba65ca6b328d7f28e10ecc6.jpg" alt="【匆匆那些年】总结个人博客经历的这四年…"></a></figure>
    <ul class="nlist">
      <p>博客从最初的域名购买，到上线已经有四年的时间了，这四年的时间，有笑过，有怨过，有悔过，有执着过，也有放弃过…但最后还是坚持了下来，时间如此匆匆，等再回过头已来不及去弥补</p>
      <a title="【匆匆那些年】总结个人博客经历的这四年…" href="learn.htmlbj/2015-01-09/740.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title=" 2014年度优秀个人博客排名公布" href="learn.htmlweb/2015-01-01/739.html" > 2014年度优秀个人博客排名公布</a></h2>
   <p class="dateview"><span>发布时间：2015-01-01</span><span>作者：杨青</span><span>[<a href=learn.htmlweb/>网站建设</a>]</span></p>
    <figure><a title=" 2014年度优秀个人博客排名公布" href="learn.htmlweb/2015-01-01/739.html" ><img src="<?php echo @HOME_IMG_URL;?>
/04e3825c7798116930e1e2fe7e5c136c.jpg" alt=" 2014年度优秀个人博客排名公布"></a></figure>
    <ul class="nlist">
      <p>经筛选合格的参赛个人博客网站，合计29个。评分标准按照网站的（内容10分、创意5分、原创5分、界面10分、兼容性10分、用户体验度10分）总分数50分来排名次。</p>
      <a title=" 2014年度优秀个人博客排名公布" href="learn.htmlweb/2015-01-01/739.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="2014年度优秀个人博客评选活动" href="learn.htmlweb/2014-12-18/736.html" >2014年度优秀个人博客评选活动</a></h2>
   <p class="dateview"><span>发布时间：2014-12-18</span><span>作者：杨青</span><span>[<a href=learn.htmlweb/>网站建设</a>]</span></p>
    <figure><a title="2014年度优秀个人博客评选活动" href="learn.htmlweb/2014-12-18/736.html" ><img src="<?php echo @HOME_IMG_URL;?>
/edb4fc539bfae3741c985e11e2ee97b6.jpg" alt="2014年度优秀个人博客评选活动"></a></figure>
    <ul class="nlist">
      <p>2014年即将结束，相信很多来此站的朋友都有自己的独立博客，本站欲做个小调查，在此收集个人独立博客网站， 评选出本年度优秀博客网站。无论你是使用了本站模板或是其他网站模板还是自己设计，均可参与评选活动！</p>
      <a title="2014年度优秀个人博客评选活动" href="learn.htmlweb/2014-12-18/736.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="使用CSS3制作文字、图片倒影" href="learn.htmlcss3/2014-12-09/734.html" >使用CSS3制作文字、图片倒影</a></h2>
   <p class="dateview"><span>发布时间：2014-12-09</span><span>作者：杨青</span><span>[<a href=learn.htmlcss3/>css3</a>]</span></p>
    <figure><a title="使用CSS3制作文字、图片倒影" href="learn.htmlcss3/2014-12-09/734.html" ><img src="<?php echo @HOME_IMG_URL;?>
/1cba05d9e0c7cfcfa897394b85f7e5f9.jpg" alt="使用CSS3制作文字、图片倒影"></a></figure>
    <ul class="nlist">
      <p>CSS3制作文字、图片倒影需要涉及到使用CSS3.0新属性之box-reflect。box-reflect属性目前仅在Chrome、Safari和Opera浏览器下支持，但这并不影响我们来学习这个属性的应用。</p>
      <a title="使用CSS3制作文字、图片倒影" href="learn.htmlcss3/2014-12-09/734.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="【分享】css3侧边栏导航不同方向划出效果" href="learn.htmlcss3/2014-11-18/733.html" >【分享】css3侧边栏导航不同方向划出效果</a></h2>
   <p class="dateview"><span>发布时间：2014-11-18</span><span>作者：杨青</span><span>[<a href=learn.htmlcss3/>css3</a>]</span></p>
    <figure><a title="【分享】css3侧边栏导航不同方向划出效果" href="learn.htmlcss3/2014-11-18/733.html" ><img src="<?php echo @HOME_IMG_URL;?>
/0ce295f3c5f3c2d60e45e5715580aefa.jpg" alt="【分享】css3侧边栏导航不同方向划出效果"></a></figure>
    <ul class="nlist">
      <p>设定一组侧边栏导航菜单，然后可以从任何一边滑出。有两种实现方式，一种固定菜单，一种从左右两侧推出</p>
      <a title="【分享】css3侧边栏导航不同方向划出效果" href="learn.htmlcss3/2014-11-18/733.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="分享我的个人博客访问量如何做到IP从10到600的(图文)" href="learn.htmlbj/2014-11-06/732.html" >分享我的个人博客访问量如何做到IP从10到600的(图文)</a></h2>
   <p class="dateview"><span>发布时间：2014-11-06</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="分享我的个人博客访问量如何做到IP从10到600的(图文)" href="learn.html --><!-- bj/2014-11-06/732.html" ><img src="<?php echo @HOME_IMG_URL;?>
/e45c61e63ef00078e2a594d7bfbe4cbb.jpg" alt="分享我的个人博客访问量如何做到IP从10到600的(图文)"></a></figure>
    <ul class="nlist">
      <p>我的个人博客总共展示了三个版本，界面也经历了由“简单”到“复杂”再到“简单”，颜色从“色泽单一”到“五彩斑斓”再到“局部点缀”的过程。原来一年一个版本！而每次改版的契机都是被百度惩罚！界面不要频繁更换！好好检查代码，有没有冗余、结构有没有不合理的地方。</p>
      <a title="分享我的个人博客访问量如何做到IP从10到600的(图文)" href="learn.htmlbj/2014-11-06/732.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="帝国cms常用标签调用方法总结（不得不收藏哦）" href="learn.htmlbj/2014-10-18/731.html" >帝国cms常用标签调用方法总结（不得不收藏哦）</a></h2>
   <p class="dateview"><span>发布时间：2014-10-18</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="帝国cms常用标签调用方法总结（不得不收藏哦）" href="learn.htmlbj/2014-10-18/731.html" ><img src="<?php echo @HOME_IMG_URL;?>
/a0b65d3d8160f90f6556c4dfa3a85a59.jpg" alt="帝国cms常用标签调用方法总结（不得不收藏哦）"></a></figure>
    <ul class="nlist">
      <p>整理了一些常用的帝国cms调用，灵动标签和万能标签的调用方法举例。幻灯片、标题、一级栏目、二级栏目、带模版的友情链接（下拉菜单）、判断内容页字段为空时是如何调用的等等...新手可以借鉴学习。</p>
      <a title="帝国cms常用标签调用方法总结（不得不收藏哦）" href="learn.htmlbj/2014-10-18/731.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="【分享】css3标签切换卡样式" href="learn.htmlcss3/2014-09-11/729.html" >【分享】css3标签切换卡样式</a></h2>
   <p class="dateview"><span>发布时间：2014-09-11</span><span>作者：杨青</span><span>[<a href=learn.htmlcss3/>css3</a>]</span></p>
    <figure><a title="【分享】css3标签切换卡样式" href="learn.htmlcss3/2014-09-11/729.html" ><img src="<?php echo @HOME_IMG_URL;?>
/0589c68f5d066f1d71c648d084334dd5.jpg" alt="【分享】css3标签切换卡样式"></a></figure>
    <ul class="nlist">
      <p>今天我们想和大家分享几个选项卡样式。该集合包含了一些风格和现代的标签效应;从一个简单的盒子到SVG的形状。根据你的设计，不同的选项卡的布局和外观可以丰富您的网站</p>
      <a title="【分享】css3标签切换卡样式" href="learn.htmlcss3/2014-09-11/729.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="【分享】css3圆环倒计时效果" href="learn.htmlcss3/2014-07-27/724.html" >【分享】css3圆环倒计时效果</a></h2>
   <p class="dateview"><span>发布时间：2014-07-27</span><span>作者：杨青</span><span>[<a href=learn.htmlcss3 --><!-- />css3</a>]</span></p>
    <figure><a title="【分享】css3圆环倒计时效果" href="learn.htmlcss3/2014-07-27/724.html" ><img src="<?php echo @HOME_IMG_URL;?>
/407df87fa1c244466d9b487e29b88ed3.jpg" alt="【分享】css3圆环倒计时效果"></a></figure>
    <ul class="nlist">
      <p>分享一个css3设计的圆环倒计时的效果。以及详细的实现步骤分解说明，例如clip:rect遮罩，"transform:rotate"连续改变扇形旋转角度，加入渐变、阴影等修饰，及倒计时数字</p>
      <a title="【分享】css3圆环倒计时效果" href="learn.htmlcss3/2014-07-27/724.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="有创意的鼠标悬停效果集锦" href="learn.htmlcss3/2014-06-28/698.html" >有创意的鼠标悬停效果集锦</a></h2>
   <p class="dateview"><span>发布时间：2014-06-28</span><span>作者：杨青</span><span>[<a href=learn.htmlcss3/>css3</a>]</span></p>
    <figure><a title="有创意的鼠标悬停效果集锦" href="learn.htmlcss3/2014-06-28/698.html" ><img src="<?php echo @HOME_IMG_URL;?>
/8438184fe2ec592f7f9e14dc8a410fe8.jpg" alt="有创意的鼠标悬停效果集锦"></a></figure>
    <ul class="nlist">
      <p>分享一些用css3技术，三维、伪元素实现一些有创意的悬停效果</p>
      <a title="有创意的鼠标悬停效果集锦" href="learn.htmlcss3/2014-06-28/698.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="使用ASPCMS建站网站被黑" href="learn.htmlbj/2014-06-17/692.html" >使用ASPCMS建站网站被黑</a></h2>
   <p class="dateview"><span>发布时间：2014-06-17</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="使用ASPCMS建站网站被黑" href="learn.htmlbj/2014-06-17/692.html" ><img src="<?php echo @HOME_IMG_URL;?>
/2ab0bdcc2d40794f183031053dd1a4d2.jpg" alt="使用ASPCMS建站网站被黑"></a></figure>
    <ul class="nlist">
      <p>之前使用过aspcms建站，都使用的是最新发布的版本，时隔半年，竟然以将近每个月升一次的速度更新了n个版本。当然是一次比一次好，但是之前的版本，升级又非常麻烦，暂且就先没管。</p>
      <a title="使用ASPCMS建站网站被黑" href="learn.htmlbj/2014-06-17/692.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="IE6到底哪里不好？你还继续用IE6吗？" href="learn.htmlbj/2014-05-26/682.html" >IE6到底哪里不好？你还继续用IE6吗？</a></h2>
   <p class="dateview"><span>发布时间：2014-05-26</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="IE6到底哪里不好？你还继续用IE6吗？" href="learn.htmlbj/2014-05-26/682.html" ><img src="<?php echo @HOME_IMG_URL;?>
/b1d8cde248671b1e75ef302609595b1f.jpg" alt="IE6到底哪里不好？你还继续用IE6吗？"></a></figure>
    <ul class="nlist">
      <p>初接触网页设计，IE6是检查代码严谨性的一个很好的工具，虽然，曾经无数的抱怨、甚至憎恨。但是只要100个用户群里面有一位用户在使用IE6，你就不得不做好兼容。因为我们就是设计师。</p>
      <a title="IE6到底哪里不好？你还继续用IE6吗？" href="learn.htmlbj/2014-05-26/682.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="网页常用的js实例汇总" href="learn.htmlweb/2014-05-22/681.html" >网页常用的js实例汇总</a></h2>
   <p class="dateview"><span>发布时间：2014-05-22</span><span>作者：杨青</span><span>[<a href=learn.htmlweb/>网站建设</a>]</span></p>
    <figure><a title="网页常用的js实例汇总" href="learn.htmlweb/2014-05-22/681.html" ><img src="<?php echo @HOME_IMG_URL;?>
/a8696ebf141cd8a784227dfebf0e40a5.jpg" alt="网页常用的js实例汇总"></a --><!-- ></figure>
    <ul class="nlist">
      <p>简易选项卡、IE6使png图片背景透明的方法、文字或图片向上向左无缝滚动、javascript显示年月日时间代码</p>
      <a title="网页常用的js实例汇总" href="learn.htmlweb/2014-05-22/681.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="简易选项卡" href="learn.htmlweb/2014-05-22/680.html" >简易选项卡</a></h2>
   <p class="dateview"><span>发布时间：2014-05-22</span><span>作者：杨青</span><span>[<a href=learn.htmlweb/>网站建设</a>]</span></p>
    <figure><a title="简易选项卡" href="learn.htmlweb/2014-05-22/680.html" ><img src="<?php echo @HOME_IMG_URL;?>
/dd08d8ecafa13564e6d579444570d775.jpg" alt="简易选项卡"></a></figure>
    <ul class="nlist">
      <p>简易选项卡</p>
      <a title="简易选项卡" href="learn.htmlweb/2014-05-22/680.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="IE6使png图片背景透明的方法" href="learn.htmlweb/2014-05-22/679.html" >IE6使png图片背景透明的方法</a></h2>
   <p class="dateview"><span>发布时间：2014-05-22</span><span>作者：杨青</span><span>[<a href=learn.htmlweb/>网站建设</a>]</span></p>
    <figure><a title="IE6使png图片背景透明的方法" href="learn.htmlweb/2014-05-22/679.html" ><img src="<?php echo @HOME_IMG_URL;?>
/d8e5085d53b3e6de9b75fa8f8b7cb37b.jpg" alt="IE6使png图片背景透明的方法"></a></figure>
    <ul class="nlist">
      <p>IE6使png图片背景透明的方法</p>
      <a title="IE6使png图片背景透明的方法" href="learn.htmlweb/2014-05-22/679.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="js实现文字、图片向上向左无缝滚动" href="learn.htmlweb/2014-05-22/678.html" >js实现文字、图片向上向左无缝滚动</a></h2>
   <p class="dateview"><span>发布时间：2014-05-22</span><span>作者：杨青</span><span>[<a href=learn.htmlweb/>网站建设</a>]</span></p>
    <figure><a title="js实现文字、图片向上向左无缝滚动" href="learn.htmlweb/2014-05-22/678.html" ><img src="<?php echo @HOME_IMG_URL;?>
/73bd56db305a57eed6bf2f236198f2bc.jpg" alt="js实现文字、图片向上向左无缝滚动"></a></figure>
    <ul class="nlist">
      <p>无缝滚动代码在网页中也经常用到，例举两个常用的参考</p>
      <a title="js实现文字、图片向上向左无缝滚动" href="learn.htmlweb/2014-05-22/678.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="javascript显示年月日时间代码" href="learn.htmlweb/2014-05-22/677.html" >javascript显示年月日时间代码</a></h2>
   <p class="dateview"><span>发布时间：2014-05-22</span><span>作者：杨青</span><span>[<a href=learn.htmlweb/>网站建设</a>]</span></p>
    <figure><a title="javascript显示年月日时间代码" href="learn.htmlweb/2014-05-22/677.html" ><img src="<?php echo @HOME_IMG_URL;?>
/ff8d96400abf55a54cdf1c08e3b02bcb.jpg" alt="javascript显示年月日时间代码"></a></figure>
    <ul class="nlist">
      <p>常用js显示时间代码格式：北京时间：2014年05月22日星期四</p>
      <a title="javascript显示年月日时间代码" href="learn.htmlweb/2014-05-22/677.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="css技巧以及经验总结" href="learn.htmlbj/2014-05-14/666.html" >css技巧以及经验总结</a></h2>
   <p class="dateview"><span>发布时间：2014-05-14</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="css技巧以及经验总结" href="learn.htmlbj/2014-05-14/666.html" ><img src="<?php echo @HOME_IMG_URL;?>
/ce3c6881c5f27e55588f8f9843d8be38.jpg" alt="css技巧以及经验总结"></a></figure>
    <ul class="nlist">
      <p>1、如何清除图片下方出现几像素的空白间隙？2、如何让文本垂直对齐文本输入框？3、如何让单行文本在容器内垂直居中？4、如何让超链接访问后和访问前的颜色不同且访问后仍保留hover和active效果？</p>
      <a title="css技巧以及经验总结" href="learn.htmlbj/2014-05-14/666.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="IE常见bugs以及解决方案列表" href="learn.htmlbj/2014-05-14/665.html" >IE常见bugs以及解决方案列表</a></h2>
   <p class="dateview"><span>发布时间：2014-05-14</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="IE常见bugs以及解决方案列表" href="learn.htmlbj/2014-05-14/665.html" ><img src="<?php echo @HOME_IMG_URL;?>
/1ed9f310ffdbfdbb4c695671233296b5.jpg" alt="IE常见bugs以及解决方案列表"></a></figure>
    <ul class="nlist">
      <p>1、如何解决IE6及更早浏览器浮动时产生双倍边距的BUG？2、如何解决IE6及更早浏览器下的3像素BUG？3、如何在IE6及更早浏览器下模拟min-height效果？4、如何解决IE7及更早浏览器下当li中出现2个或以上的浮动时，li之间产生的空白间隙的BUG？</p>
      <a title="IE常见bugs以及解决方案列表" href="learn.htmlbj/2014-05-14/665.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="关于响应式Web设计技巧以及入门" href="learn.htmlcss3/2014-05-12/664.html" >关于响应式Web设计技巧以及入门</a></h2>
   <p class="dateview"><span>发布时间：2014-05-12</span><span>作者：杨青</span><span>[<a href=learn.htmlcss3/>css3</a>]</span></p>
    <figure><a title="关于响应式Web设计技巧以及入门" href="learn.htmlcss3/2014-05-12/664.html" ><img src="<?php echo @HOME_IMG_URL;?>
/a5d40a42129d1a1e1099d62a20bc0fc1.jpg" alt="关于响应式Web设计技巧以及入门"></a></figure>
    <ul class="nlist">
      <p>html5和css3流行至今，我在做响应式的网站一直是在“尝试”的阶段。并没有深入的去研究和学习，浅显的理解就是根据屏幕分辨率的大小，网站布局、图片、文字大小等相应改变。以后使用平板、手机浏览网站的用户会越来越多，对于前端设计师，学号用html5、css3做响应式网站是势在必行。</p>
      <a title="关于响应式Web设计技巧以及入门" href="learn.htmlcss3/2014-05-12/664.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="响应式纵向时间轴" href="learn.htmlcss3/2014-05-05/662.html" >响应式纵向时间轴</a></h2>
   <p class="dateview"><span>发布时间：2014-05-05</span><span>作者：杨青</span><span>[<a href=learn.htmlcss3/>css3</a>]</span></p>
    <figure><a title="响应式纵向时间轴" href="learn.htmlcss3/2014-05-05/662.html" ><img src="<?php echo @HOME_IMG_URL;?>
/55f56d3cded38ec453178eeffcbe6bb1.jpg" alt="响应式纵向时间轴"></a></figure>
    <ul class="nlist">
      <p>这是一个简单的响应时间轴，交替的颜色标签，以及伸缩响应式的结构</p>
      <a title="响应式纵向时间轴" href="learn.htmlcss3/2014-05-05/662.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="我的个人博客之——阿里云空间选择" href="learn.htmlweb/2014-01-18/644.html" >我的个人博客之——阿里云空间选择</a></h2>
   <p class="dateview"><span>发布时间：2014-01-18</span><span>作者：杨青</span><span>[<a href=learn.htmlweb/>网站建设</a>]</span></p>
    <figure><a title="我的个人博客之——阿里云空间选择" href="learn.htmlweb/2014-01-18/644.html" ><img src="<?php echo @HOME_IMG_URL;?>
/6fe49814982f3624e441334fea1999a4.png" alt="我的个人博客之——阿里云空间选择"></a></figure>
    <ul class="nlist">
      <p>之前服务器放在电信机房， 联通用户访问速度很不稳定，经常出现访问速度慢的问题，换到阿里云解决了之前的问题。很多人都问我的博客选得什么空间，一年的费用得多少钱，今天我列个表出来，供大家参考。</p>
      <a title="我的个人博客之——阿里云空间选择" href="learn.htmlweb/2014-01-18/644.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div>  <h2><a title="鼠标悬停图片、文字css3效果" href="learn.htmlbj/2014-01-14/640.html" ><strong>鼠标悬停图片、文字css3效果</strong></a></h2>
   <p class="dateview"><span>发布时间：2014-01-14</span><span>作者：杨青</span><span>[<a href=learn.htmlbj/>心得笔记</a>]</span></p>
    <figure><a title="鼠标悬停图片、文字css3效果" href="learn.htmlbj/2014-01-14/640.html" ><img src="<?php echo @HOME_IMG_URL;?>
/12f33cc4c1c692e2fa0017275fcc265f.jpg" alt="鼠标悬停图片、文字css3效果"></a></figure>
    <ul class="nlist">
      <p>其实这样的效果也很常见，但是我平时用到很少，在其他网站看到这样的效果，第一反应就是查看源代码，看他怎么运用的，结果用了很多的div，最主要的是用js来实现。目前很多浏览器也都兼容css3新属性，这个例子就可以使用rgba(0,0,0,0.5)、opacity、当然关键也要看怎么定位，还是会用到position属性。</p>
      <a title="鼠标悬停图片、文字css3效果" href="learn.htmlbj/2014-01-14/640.html" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <div class="line"></div> -->
    <div class="blank"></div>
    <!-- <div class="page"><a title="Total record"><b>135</b> </a><b>1</b><a href="learn.htmlindex_2.html">2</a><a href="learn.htmlindex_3.html">3</a><a href="learn.htmlindex_4.html">4</a><a href="learn.htmlindex_5.html">5</a><a href="learn.htmlindex_6.html">6</a><a href="learn.htmlindex_2.html">></a><a href="learn.htmlindex_6.html">>></a></div> -->
    <div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</div>
<aside class="right">
<script type="text/javascript">document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E%3Cscript charset="utf-8" src="http://znsv.baidu.com/customer_search/api/js?sid=14370360379971546235') + '&plate_url=' + (encodeURIComponent(window.location.href)) + '&t=' + (Math.ceil(new Date()/3600000)) + unescape('"%3E%3C/script%3E'));</script>
<div class="blank"></div>  
 <div class="rnav">
      <h2>栏目导航</h2>
      <ul>
      <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['tag']->value['tag_id']==11){?>
      <li><a href="http://www.ip3q.com/" ><?php echo $_smarty_tpl->tpl_vars['tag']->value['tagname'];?>
</a></li>
      <?php }else{ ?>
      <li><a href="<?php echo @__CONTROLLER__;?>
/concretetag/tag_id/<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['tag']->value['tagname'];?>
</a></li>
      <?php }?>
      <?php } ?>
      <!-- <li><a href="http://www.ip3q.com/" >IP查询</a></li>

      <li><a href="learn.htmlcss3/" >CSS3|Html5</a></li>

      <li><a href="learn.htmlweb/" >网站建设</a></li>

      <li><a href="/news/jsex/" >JS经典实例</a></li>

      <li><a href="learn.htmlt/" >推荐工具</a></li> -->
     </ul>      
    </div>
 <div class="rnavs">
      <h2>栏目导航</h2>
      <ul>
     <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['tag']->value['tag_id']==11){?>
      <li><a href="http://www.ip3q.com/" ><?php echo $_smarty_tpl->tpl_vars['tag']->value['tagname'];?>
</a></li>
      <?php }else{ ?>
      <li><a href="<?php echo @__CONTROLLER__;?>
/concretetag/tag_id/<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['tag']->value['tagname'];?>
</a></li>
       <?php }?>
      <?php } ?>
      
     </ul>      
    </div>

<div class="news">
<h3>
      <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
    <?php  $_smarty_tpl->tpl_vars['new8art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new8art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new8arts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new8art']->key => $_smarty_tpl->tpl_vars['new8art']->value){
$_smarty_tpl->tpl_vars['new8art']->_loop = true;
?>
     <li><a href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['new8art']->value['article_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['new8art']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['new8art']->value['title'];?>
</a></li>
     <?php } ?>
     <!-- <li><a href="learn.htmlbj/2015-02-14/744.html" title="【郑重申明】本站只提供静态模板下载！" target="_blank">【郑重申明】本站只提供静态模板下载！</a></li>
     <li><a href="learn.htmlbj/2015-01-09/740.html" title="【匆匆那些年】总结个人博客经历的这四年…" target="_blank">【匆匆那些年】总结个人博客经历的这四年…</a></li>
     <li><a href="learn.htmlweb/2015-01-01/739.html" title=" 2014年度优秀个人博客排名公布" target="_blank"> 2014年度优秀个人博客排名公布</a></li>
     <li><a href="learn.htmlweb/2014-12-18/736.html" title="2014年度优秀个人博客评选活动" target="_blank">2014年度优秀个人博客评选活动</a></li>
     <li><a href="learn.htmlcss3/2014-12-09/734.html" title="使用CSS3制作文字、图片倒影" target="_blank">使用CSS3制作文字、图片倒影</a></li>
     <li><a href="learn.htmlcss3/2014-11-18/733.html" title="【分享】css3侧边栏导航不同方向划出效果" target="_blank">【分享】css3侧边栏导航不同方向划出效果</a></li>
     <li><a href="learn.htmlbj/2014-11-06/732.html" title="分享我的个人博客访问量如何做到IP从10到600的(图文)" target="_blank">分享我的个人博客访问量如何做到IP从10到600的(图文)</a></li> -->
    </ul>
    <h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
<?php  $_smarty_tpl->tpl_vars['click9art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['click9art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['click9arts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['click9art']->key => $_smarty_tpl->tpl_vars['click9art']->value){
$_smarty_tpl->tpl_vars['click9art']->_loop = true;
?>
<li><a href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['click9art']->value['article_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['click9art']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['click9art']->value['title'];?>
</a></li>
<?php } ?>
<!-- <li><a href="learn.htmlbj/2013-07-28/530.html" title="如果要学习web前端开发，需要学习什么？" target="_blank">如果要学习web前端开发，需要学习什么？</a></li>
<li><a href="learn.htmlcss3/2014-05-12/664.html" title="关于响应式Web设计技巧以及入门" target="_blank">关于响应式Web设计技巧以及入门</a></li>
<li><a href="learn.htmlbj/2014-11-06/732.html" title="分享我的个人博客访问量如何做到IP从10到600的(图文)" target="_blank">分享我的个人博客访问量如何做到IP从10到600的(图文)</a></li>
<li><a href="learn.htmlcss3/2013-08-01/535.html" title="css3背景(一)背景图片、颜色渐变、多重背景图" target="_blank">css3背景(一)背景图片、颜色渐变、多重背景图</a></li>
<li><a href="learn.htmlbj/2015-01-09/740.html" title="【匆匆那些年】总结个人博客经历的这四年…" target="_blank">【匆匆那些年】总结个人博客经历的这四年…</a></li>
<li><a href="learn.htmlcss3/2014-06-28/698.html" title="有创意的鼠标悬停效果集锦" target="_blank">有创意的鼠标悬停效果集锦</a></li>
<li><a href="learn.htmlweb/2015-01-01/739.html" title=" 2014年度优秀个人博客排名公布" target="_blank"> 2014年度优秀个人博客排名公布</a></li>
<li><a href="learn.htmlbj/2014-10-18/731.html" title="帝国cms常用标签调用方法总结（不得不收藏哦）" target="_blank">帝国cms常用标签调用方法总结（不得不收藏哦）</a></li> -->
    </ul>
    </div>
<!-- <a href="http://shop35160146.taobao.com/index.htm" target="_blank"><img src="<?php echo @HOME_IMG_URL;?>
/a542c6f4b3f114ae5149636183e95831.jpg"></a> -->
   <script type="text/javascript">
/*yangqq-250*250，创建于2014-7-12*/
var cpro_id = "u1618958";
</script>
<script src="<?php echo @HOME_JS_URL;?>
/c.js" type="text/javascript"></script>
 <div class="visitors">
      <h3><p>最近访客</p></h3>
<ul class="ds-recent-visitors"  data-num-items="24"></ul>

<script type="text/javascript">
var duoshuoQuery = {short_name:"zhangwx"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = 'http://static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		|| document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
  
    </div>
</aside>
</article>
<div id="tbox"> <a id="togbook" href="message.html"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
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