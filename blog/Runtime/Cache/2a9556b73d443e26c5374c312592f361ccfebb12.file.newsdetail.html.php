<?php /* Smarty version Smarty-3.1.6, created on 2016-09-08 08:37:44
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Home/View\Article\newsdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:54357aaf76db3b211-21294362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9556b73d443e26c5374c312592f361ccfebb12' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Home/View\\Article\\newsdetail.html',
      1 => 1473295062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54357aaf76db3b211-21294362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57aaf76dc296d',
  'variables' => 
  array (
    'cate' => 0,
    'catelists' => 0,
    'catelist' => 0,
    'nowarttag' => 0,
    'artinfo' => 0,
    'alikearts' => 0,
    'alikeart' => 0,
    'tags' => 0,
    'tag' => 0,
    'new8arts' => 0,
    'new8art' => 0,
    'click5arts' => 0,
    'click5art' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aaf76dc296d')) {function content_57aaf76dc296d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\php\\WWW\\chuanzhi\\tpblog\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</title>
<meta name="keywords" content="程序员,html,女程序员" />
<meta name="description" content="即便是坑，我也想要拉你入伙！" />
<link href="<?php echo @HOME_CSS_URL;?>
/base.css" rel="stylesheet">
<link href="<?php echo @HOME_CSS_URL;?>
/new.css" rel="stylesheet">
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
  <!-- <a href="news.html"><span>慢生活</span><span class="en">Life</span></a> --><!-- <a href="talk.html"><span>碎言碎语</span><span class="en">Doing</span></a><a href="news.html"><span>模板分享</span><span class="en">Share</span></a><a href="learn.html"><span>学无止境</span><span class="en">Learn</span></a><a href="message.html"><span>留言版</span><span class="en">Guestbook</span></a> -->
  </nav>
</header>
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置：<a href="<?php echo @__MODULE__;?>
/Index/index">首页</a>&nbsp;>&nbsp;<a href="<?php echo @__MODULE__;?>
/Category/<?php echo $_smarty_tpl->tpl_vars['cate']->value['info'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</a>&nbsp;>&nbsp;<a href="<?php echo @__MODULE__;?>
/Category/<?php echo $_smarty_tpl->tpl_vars['cate']->value['info'];?>
"><?php echo $_smarty_tpl->tpl_vars['nowarttag']->value['tagname'];?>
</a></span><a href="<?php echo @__MODULE__;?>
/Index/index" class="n1">网站首页</a><a href="#" class="n2">程序人生</a></h1>
  <div class="index_about">
    <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['artinfo']->value['title'];?>
</h2>
    <p class="box_c"><span class="d_time">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['artinfo']->value['pubtime'],'%Y-%m-%d');?>
</span><span>编辑：<a href='mailto:1820663102@qq.com'>张文潇</a></span><span>阅读（<?php echo $_smarty_tpl->tpl_vars['artinfo']->value['click'];?>
）</span></p>
    <ul class="infos">
      <!-- <p>之前谈《<a href="/news/life/2014-07-10/722.html" target="_blank"><span style="color: rgb(0, 0, 0);"><strong>女程序员职业生涯该如何发展？</strong></span></a>》其实，女程序员的职业生涯相对于男程序员来说是很短暂的。就目前我来说，从事这行都已有五年时间，当觉得自己在一个瓶颈阶段无法突破自己的时候，出现了html5和css3，新的技术研究，可以重拾当初学习的激情和兴趣，于是又坚持至今....</p>
<p>个人博客也是动力之一，博客从一年前的每天访问IP不到60人升到了如今每天将近400个IP，跳出率也由60%缩短到了30%。博客模板也换了n个版本，也结交了很多朋友，一次次的更新和进步还有网友的支持才换来今天的成绩...</p>
<p>对于刚毕业的学生来说，想学习建网站，掌握一技之长，最简单的入门无非就是学会html和css，先前发表过一篇文章《<a href="learn.htmlbj/2013-07-28/530.html" target="_blank"><span style="color: rgb(0, 0, 0);"><strong>如果要学习web前端开发，需要学习什么？</strong></span></a>》，如果你还不知道如何着手，请仔细阅读....7天的时间，入门是没有问题的，当然，如果你用心的话！</p>
<p><span style="color: rgb(51, 153, 102);"><strong>即便是坑，我也想要拉你入伙！</strong></span><span style="color: rgb(255, 102, 0);">even the pit , and i also want to pull your occupation !</span></p>
<p>前两天有网友跟我聊天，谈到互联网的前景，他很迷茫，要不要继续坚持下去，我说&ldquo;如果是我，我在这一行肯定干不了多久，毕竟，我的人生规划，就是以后相夫教子。&rdquo;我劝他，如果自己在这一行这么迷茫堪忧下去，只会耽误自己的时间，趁着年轻，重新找自己喜欢的工作和行业，并且坚持下去....</p>
<p>表妹刚刚毕业，之前选专业的时候，就是冲着学html去的，结果几年时间下来，学的是维护...女孩子学这个，确实有点儿让人崩溃，这下又得走我的老路了，还是得自己学习。我不强迫她一定要学习html和css。如果她不感兴趣，是不能勉强的。就像找工作和对象一样，需要不断的摸索，才能找到自己的喜欢的....</p>
<p>但是学习一技之长也并不是一件坏事，有很多传统的企业已经开始往互联网方面发展，这方面的人才缺口其实也蛮大，如果说入门需要7天，何不花7天的时间，学习这一技之长，哪怕作为自己的一个后备。即便是坑，我也想要拉你入伙！</p><p align="center" class="pageLink"></p> -->
    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['artinfo']->value['content']);?>

    </ul>
    <div class="keybq">
    <p><span>关键字词</span>：程序员,html,程序员,PHP</p>    
    </div>
    <!-- <div class="nextinfo">
<p>上一篇：<a href='/news/life/2014-07-10/722.html'>女程序员职业生涯该如何发展？</a></p>
<p>下一篇：<a href='/news/life/'>返回列表</a></p>
    </div> -->
    <div class="otherlink">
      <h2>相关文章</h2>
      <ul>
<?php  $_smarty_tpl->tpl_vars['alikeart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alikeart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alikearts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alikeart']->key => $_smarty_tpl->tpl_vars['alikeart']->value){
$_smarty_tpl->tpl_vars['alikeart']->_loop = true;
?>
 <li><a href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['alikeart']->value['article_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['alikeart']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['alikeart']->value['title'];?>
</a></li>
<?php } ?>
 <!-- <li><a href="news.htmlfree/2014-05-30/685.html" title="HTML5摄影主题模板">HTML5摄影主题模板</a></li>
 <li><a href="news.htmldiv/2014-04-17/661.html" title="黑色Html5个人博客模板主题《如影随形》">黑色Html5个人博客模板主题《如影随形》</a></li>
 <li><a href="/news/s/2013-11-20/620.html" title="做程序员的这些年，慢慢才体会到健康才是奢侈品">做程序员的这些年，慢慢才体会到健康才是奢侈品</a></li>
 <li><a href="news.htmlfree/2013-11-29/627.html" title="国外免费响应式 HTML5 模板">国外免费响应式 HTML5 模板</a></li>
 <li><a href="/news/life/2013-11-04/618.html" title="程序员请放下你的技术情节，与你的同伴一起进步">程序员请放下你的技术情节，与你的同伴一起进步</a></li>
 <li><a href="learn.htmlcss3/2013-09-17/613.html" title="HTML5技术将推动移动浏览器变革">HTML5技术将推动移动浏览器变革</a></li>
 <li><a href="/news/life/2013-09-17/611.html" title=" 女程序员两年外包的日子"> 女程序员两年外包的日子</a></li>
 <li><a href="/news/life/2013-09-13/610.html" title="一个三十而立的男程序员真实讲述：代码搅乱我的生活">一个三十而立的男程序员真实讲述：代码搅乱我的生活</a></li>
 <li><a href="/news/s/2013-09-04/606.html" title="程序员应该如何高效的工作学习">程序员应该如何高效的工作学习</a></li>    -->
    </ul>
    </div>
<div class="blank"></div>
<div class="ad"><script type="text/javascript">
/*640*60，创建于2013-6-13-yangqq*/
var cpro_id = "u1302142";
</script>
<script src="<?php echo @HOME_JS_URL;?>
/c.js" type="text/javascript"></script></div>
<!-- Duoshuo Comment BEGIN -->
	<div class="ds-thread" data-category="5" data-thread-key="725" 
	data-title="即便是坑，我也想要拉你入伙！" data-author-key="" data-url=""></div>
<!-- Duoshuo Comment END -->
  </div>
  <aside class="right">

 <div class="rnav">
      <h2>栏目导航</h2>
      <ul>
      <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
      <li><a href="<?php echo @__MODULE__;?>
/Category/<?php echo $_smarty_tpl->tpl_vars['catelist']->value['info'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tagname'];?>
</a></li>
      <?php } ?>
      <!-- <li><a href="/news/read/" >欣赏</a></li>

      <li><a href="/news/life/" >程序人生</a></li>

      <li><a href="/news/humor/" >经典语录</a></li> -->
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
      <li><a href="<?php echo @__MODULE__;?>
/Category/<?php echo $_smarty_tpl->tpl_vars['catelist']->value['info'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tagname'];?>
</a></li>
      <?php } ?>
      <!-- <li><a href="/news/read/" >欣赏</a></li>

      <li><a href="/news/life/" >程序人生</a></li>

      <li><a href="/news/humor/" >经典语录</a></li> -->
     </ul>     
    </div>
<div class="blank"></div>
    <div class="news">
      <h3>
        <p>栏目<span>最新</span></p>
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
<!-- <li><a href="/news/life/2014-07-10/722.html" title="女程序员职业生涯该如何发展？" target="_blank">女程序员职业生涯该如何发展？</a></li>
<li><a href="/news/life/2013-11-04/618.html" title="程序员请放下你的技术情节，与你的同伴一起进步" target="_blank">程序员请放下你的技术情节，与你的同伴一起进步</a></li>
<li><a href="/news/life/2013-09-22/614.html" title="一个SEO站长分享个人博客产品网赚建站经历全过程" target="_blank">一个SEO站长分享个人博客产品网赚建站经历全过程</a></li>
<li><a href="/news/life/2013-09-17/611.html" title=" 女程序员两年外包的日子" target="_blank"> 女程序员两年外包的日子</a></li>
<li><a href="/news/life/2013-09-13/610.html" title="一个三十而立的男程序员真实讲述：代码搅乱我的生活" target="_blank">一个三十而立的男程序员真实讲述：代码搅乱我的生活</a></li>
<li><a href="/news/life/2013-08-19/599.html" title="给想去北大青鸟或是其他机构培训的同学" target="_blank">给想去北大青鸟或是其他机构培训的同学</a></li>
<li><a href="/news/life/2013-06-06/51.html" title="IT幽默——考考你的编程：这些笑话看得懂吗？" target="_blank">IT幽默——考考你的编程：这些笑话看得懂吗？</a></li>     -->
  </ul>
      <h3 class="ph">
        <p>点击<span>排行</span></p>
      </h3>
      <ul class="paih">
<?php  $_smarty_tpl->tpl_vars['click5art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['click5art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['click5arts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['click5art']->key => $_smarty_tpl->tpl_vars['click5art']->value){
$_smarty_tpl->tpl_vars['click5art']->_loop = true;
?>
<li><a href="<?php echo @__MODULE__;?>
/Article/newsdetail/article_id/<?php echo $_smarty_tpl->tpl_vars['click5art']->value['article_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['click5art']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['click5art']->value['title'];?>
</a></li>
<?php } ?>
<!-- <li><a href="/news/life/2014-07-10/722.html" title="女程序员职业生涯该如何发展？" target="_blank">女程序员职业生涯该如何发展？</a></li>
<li><a href="/news/life/2013-06-06/68.html" title="Web之路，经历了心酸之后" target="_blank">Web之路，经历了心酸之后</a></li>
<li><a href="/news/life/2013-09-13/610.html" title="一个三十而立的男程序员真实讲述：代码搅乱我的生活" target="_blank">一个三十而立的男程序员真实讲述：代码搅乱我的生活</a></li>
<li><a href="/news/life/2013-06-06/62.html" title="数字女孩，一个好强的女程序员" target="_blank">数字女孩，一个好强的女程序员</a></li>    -->  
 </ul>
    </div>
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='{$smarty.const.HOME_JS_URL}/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<script type="text/javascript">

/*yangqq-250*250，创建于2014-7-12*/
var cpro_id = "u1618958";
</script>
<script src="<?php echo @HOME_JS_URL;?>
/c.js" type="text/javascript"></script>
    <div class="blank"></div>
<div class="visitors">
      <h3>
        <p>最近访客</p>
      </h3>
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
<div id="tbox"> <a id="togbook" href="message.html"></a> <a id="gotop" href="javascript:void(0)" style="display: block;"></a> </div>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> </p>
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
</html><?php }} ?>