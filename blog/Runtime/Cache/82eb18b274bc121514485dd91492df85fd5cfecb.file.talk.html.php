<?php /* Smarty version Smarty-3.1.6, created on 2016-08-09 08:51:13
         compiled from "D:/php/WWW/chuanzhi/tpblog/blog/Home/View\Category\talk.html" */ ?>
<?php /*%%SmartyHeaderCode:1500457a69bd54672b0-32982201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82eb18b274bc121514485dd91492df85fd5cfecb' => 
    array (
      0 => 'D:/php/WWW/chuanzhi/tpblog/blog/Home/View\\Category\\talk.html',
      1 => 1470703872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1500457a69bd54672b0-32982201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a69bd555d47',
  'variables' => 
  array (
    'catelists' => 0,
    'catelist' => 0,
    'artinfos' => 0,
    'artinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a69bd555d47')) {function content_57a69bd555d47($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\php\\WWW\\chuanzhi\\tpblog\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>碎言碎语</title>
<meta name="keywords" content="个人博客,个人网站,个人博客模板,个人网站模板" />
<meta name="description" content="杨青个人博客网站,一个站在web前段设计之路的女技术员个人博客网站，提供个人博客，个人网站div+css源码分享" />
<link href="<?php echo @HOME_CSS_URL;?>
/base.css" rel="stylesheet">
<link href="<?php echo @HOME_CSS_URL;?>
/mood.css" rel="stylesheet">
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
/Index/index"><span>首页</span><span class="en">Protal</span></a>
 <!--  <a href="about.html"><span>关于我</span><span class="en">About</span></a><a href="news.html"><span>慢生活</span><span class="en">Life</span></a><a href="talk.html"><span>碎言碎语</span><span class="en">Doing</span></a><a href="news.html"><span>模板分享</span><span class="en">Share</span></a><a href="learn.html"><span>学无止境</span><span class="en">Learn</span></a><a href="message.html"><span>留言版</span><span class="en">Guestbook</span></a> -->
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
</header>
<div class="moodlist">
  <h1 class="t_nav"><span>删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span><a href="<?php echo @__MODULE__;?>
/Index/index" class="n1">网站首页</a><a href="#" class="n2">碎言碎语</a></h1>
  <div class="bloglist">
    <?php  $_smarty_tpl->tpl_vars['artinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artinfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artinfos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artinfo']->key => $_smarty_tpl->tpl_vars['artinfo']->value){
$_smarty_tpl->tpl_vars['artinfo']->_loop = true;
?>
    <ul class="arrow_box">
     <div class="sy"><p><img src="<?php echo @SITE_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['artinfo']->value['thumb_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['artinfo']->value['remark'];?>
" /><?php echo $_smarty_tpl->tpl_vars['artinfo']->value['remark'];?>
</p></div>
      <span class="dateview"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['artinfo']->value['pubtime'],'%Y-%m-%d');?>
</span>
    </ul>  
    <?php } ?>
    <!-- <ul class="arrow_box">
     <div class="sy"><p><img src="<?php echo @HOME_IMG_URL;?>
/87c1014624896c14449bef7e3de91def.jpg" alt="圣诞快乐" width="200" />汉语版：圣诞快乐！ 闵南语：心蛋快裸！ 江西版：生蛋快落！ 英文版：哈皮克瑞死么死！ 俄语版：买个萝卜切吧切吧炖了吧 韩语版：空起哇 撒起哇 哭死米塔  日文版：锅你得洗哇 碗你得洗哇 盆你得洗哇 锅碗盆你得洗哇～</p></div>
      <span class="dateview">2014-12-24</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p><img src="<?php echo @HOME_IMG_URL;?>
/9a33d5db47475b15799c2656f8e9b9e0.jpg" alt="身边一直对你好的人有多珍贵" width="140" height="100" />有一天当你发现疏远和拉黑的可能是曾经最聊得来的朋友；背后指责你说你不好的可能是你过去最亲密的伙伴；出手阻碍你的或许是你当初的合伙人；你才会明白，这个世界没有什么是不变的，这个时代，因为利益会有许多人做出许多你想不到的事。沙里淘金后，你才知道原来身边一直对你好的人有多珍贵。</p></div>
      <span class="dateview">2014-12-21</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>每个人都会有一段异常艰难的时光，生活的窘迫，工作的失意，学业的压力，爱的惶惶不可终日。挺过来的，人生就会豁然开朗；挺不过来的，时间也会教会你怎么与它们握手言和，所以你都不必害怕的。</p></div>
      <span class="dateview">2014-12-15</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p><img src="<?php echo @HOME_IMG_URL;?>
/587c5a227b8cfc3884ea3d1a4420392a.jpg" alt="真相被揭开，选择原谅还是不原谅？" /></p>
<p>时隔多年，本来以为已经豪不介怀，当真正的真相被揭开，却再也找不着可以原谅的理由</p></div>
      <span class="dateview">2014-07-15</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>你还记得那个深秋么，当冷冷的风捎来彻骨的寒意，当落叶在这浊黄的季节里盈满你的双眼，那时候我们不懂得孤独。
挥别你的时候，我知道所有的故事已不会再来，就像走在那个寂寞的冬夜，心中盛满深深的无奈。
许多年以后我们都远远地离开了那个季节，我们想着最初的一片叶子，想着两个人的车站，那些不经意来去的人。</p></div>
      <span class="dateview">2014-05-07</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>工作中摸索出来一句话：&ldquo;创意是被提出来的，能力是被逼出来的！&rdquo;</p></div>
      <span class="dateview">2014-04-08</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>男人只有穷了，才知道哪个女人最爱你。女人只有老了，才知道哪个男人真爱你。陪伴，不是你有钱我才追随；珍惜，不是你漂亮我才关注。时间留下的，不是财富，不是美丽，是真诚。</p> -->
<!-- <p><strong><span style="color: rgb(255, 102, 0);">喜欢一句话:你赢，我陪你君临天下；你输，我陪你东山再起！</span></strong></p></div>
      <span class="dateview">2014-03-31</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><img src="<?php echo @HOME_IMG_URL;?>
/b31b74ecb64937435c12def2292b9451.jpg" alt="有的人你可能认识了一辈子却忽视了一辈子" width="140" height="100" /><p>有的人你可能认识了一辈子却忽视了一辈子；有的人你也许只见了一面却影响了一生；有的人默默的守在你身边为你付出却被冷落；有的人无心的一个表情却成了你永恒的牵挂，我们常常是努力珍惜未得到的，而遗忘了已拥有的。不要向远方寻找幸福，它也许就在你的手中，你只要安然，握住。</p>
</div>
      <span class="dateview">2014-03-31</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>我们都按自己的方式生活着，10岁、20岁、30岁，不同的环境和心境下，领悟都会改变，没有谁好谁坏，这就是成长。</p></div>
      <span class="dateview">2014-03-31</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>【青春感悟】15岁觉得游泳难，放弃游泳，到18岁遇到一个你喜欢的人约你去游泳，你只好说&ldquo;我不会&rdquo;；18岁觉得英文难，放弃英文，28岁出现一个很棒但要会英文的工作，你只好说&ldquo;我不会&rdquo;。人生前期越嫌麻烦，越懒得学，后来就越可能错过让你动心的人和事，错过新风景！</p></div>
      <span class="dateview">2014-03-21</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>很清晰的梦境，右脚、左脚、耸肩、每个动作我都记得很清楚，一早起来还为这独创舞步惊喜，哪知，这是名副其实的&ldquo;秧歌&rdquo;</p></div>
      <span class="dateview">2014-02-25</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p><img src="<?php echo @HOME_IMG_URL;?>
/f6b834bba836a6c02bc840f84eb53328.jpg" alt="三月三圣乡自助烧烤" /></p>
<p>23号包括我带了的4个家属，一共十一人，小聚在三圣乡三叶草农家乐，自助烧烤...</p></div>
      <span class="dateview">2014-02-24</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>最囧的事，莫过于，手机没电，来到营业厅，看见模型手机，找到同样的接口，拔掉！'吱'报警了！瞬间成为瞩目的焦点，保安霎时也出现在眼前，'这有提示，别拔！''我没看见，只看见接口了！'</p></div>
      <span class="dateview">2014-01-19</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>每每接到新项目，都感觉困难，踏出第一步后，就加班加点，如果客户没有在那个空档给出回复，状态一下子恢复到之前，害的我现在也有拖延症了...</p></div>
      <span class="dateview">2014-01-13</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><img src="<?php echo @HOME_IMG_URL;?>
/1bc1b95067b4763b683cea09d3bc0c41.jpg" alt="2014我希望"  /><p>Each youth will be old, but I hope that your memories have been good.每段青春都会苍老，但我希望记忆里的你一直都好。</p></div>
      <span class="dateview">2014-01-08</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>2014又是一个新的开始，自从网站被百度降权后就顺便把网站域名、空间都换了地方，趁恢复期这个空档，把网站换个面貌，翻看记录，原来我也习惯在每年的年末给网站也换换新...</p></div>
      <span class="dateview">2014-01-03</span>
    </ul>    <ul class="arrow_box"> -->
     <!-- <div class="sy"><img src="<?php echo @HOME_IMG_URL;?>
/4994cb1ffabbc9523d0ec13b37129833.jpg" alt="加了锁的青春,不会再因谁而推开心门" /><p>早已习惯孤影对阵，谢绝藏在四季背后的春。红颜苍老的眼眸，看不清梦里一道道远景。打了死结的青春，捆死一颗苍白绝望的灵魂。为自己掘一个坟墓来葬心，红尘一梦，不再追寻。一切关于爱的诗篇，从此沉沦。加了锁的青春，不会再因谁而推开心门。</p>

</div>
      <span class="dateview">2013-12-15</span>
    </ul>
  <ul class="arrow_box">
     <div class="sy"><img src="<?php echo @HOME_IMG_URL;?>
/2873794d8ac040a1abf7e6bfac1918d1.jpg" alt="不到万不得已的时候，谁又会想重新开始！"/><p>不到万不得已的时候，谁又会想重新开始！曾经经受过的煎熬折磨猜疑失望，通通都要再来一次。重新认识新的人，适应新的环境，以前说过的有趣无趣的话都得重复着再说，温故却不知新。有些事情真的跟勇敢毫无关系，仅仅是因为难以为继。对某些事物和人的眷恋不是不再了，只是那份眷恋，真的走投无路了。</p>
</div>
      <span class="dateview">2013-12-15</span>
    </ul>   
     <ul class="arrow_box">
     <div class="sy"><p>晚上回家，见到路灯，一路延伸到天边，象天上落下的流星，被谁串成了串，铺在路旁，照亮黑暗中的行者。</p>
<p>顺着成串的流星看见了无边的，黑暗的夜空，有了感叹～～～我已在这条路上走了十三年！我要记下这心情，以后才能回忆自己的过去。因为我太平淡，只有文字才能够勾起我的回忆。</p>
<p>一叶被树遗弃被风带走的枯叶，在风中飘落，居然有人认为那是活的飘逸，可知它正为它的将来担忧。一颗悬在夜色中的星星，用生命发出光茫，有人说它是多耀眼，可知它每次光茫过后它的能量便会衰败。它冒着生命之险的发出的光茫，也许是为了寻找适合自己的路&hellip;&hellip;</p>
<p>而我脚下的这条路还能走多久，到最后是我选择了其它路还是到时已无路可走？我下过决心，换条路走走，结果被现实打败。是脚步不坚定？还是安于现状？还是少了拼搏的心？可为什么有燥动的心？</p>
<p style="text-align: right;">&mdash;&mdash;苦瓜先生</p></div>
      <span class="dateview">2013-11-26</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>不管何时，人生之旅终是自己，或者说是孤独的。回首过去，我们哭过，笑过，最终铭记。没有什么可以与时间抗衡，也没有什么可以与光阴一起长青，轮回的四季，回不去的昨天，今天是明天的永远，明天是后天的纪念，还有多少青春经得起我们挥霍？</p></div>
      <span class="dateview">2013-11-22</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>每个人都有坏脾气，我的坏脾气正在被自己慢慢挫减，有时候能控制住自己，但却无法控制别人。不是所有谦让都能换取原谅，也许付出的是自尊&hellip;</p></div>
      <span class="dateview">2013-11-07</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"> -->
<!-- <img src="<?php echo @HOME_IMG_URL;?>
/7d687ae778364b207cbf55cf142cdfa6.jpg" alt="为什么暗恋那么好" /><p>为什么暗恋那么好。因为暗恋从来不会失恋，你一笑我高兴很多天；你一句话我记得好多年。</p></div>
      <span class="dateview">2013-09-03</span>
    </ul>    <ul class="arrow_box">
     <div class="sy"><p>昨天白天到晚上，一直都在刮着大风，温度从30几度骤降，今早5点过就饿醒了，赶紧吃了早餐，看看温度计上的室内温度，24&deg;，难怪这秋意难挡，今年夏天姗姗来迟，却离开的如此匆匆...</p></div>
      <span class="dateview">2013-08-30</span>
    </ul>    <ul class="arrow_box">
     <div class="sy">
<img src="<?php echo @HOME_IMG_URL;?>
/3b02c65c8debfc8d81342ea2a7ea69d8.jpg" alt="你多美好"/><p>很多的梦 在等待着世界，而我已分不清 你是友情还是错过的爱情</p></div>
      <span class="dateview">2013-08-17</span>
    </ul> -->
  </div>
  <div class="page"><a title="Total record"><b>168</b> </a><b>1</b><a href="/newstalk/index_2.html">2</a><a href="/newstalk/index_3.html">3</a><a href="/newstalk/index_4.html">4</a><a href="/newstalk/index_5.html">5</a><a href="/newstalk/index_6.html">6</a><a href="/newstalk/index_7.html">7</a><a href="/newstalk/index_2.html">></a><a href="/newstalk/index_7.html">>></a></div> 
</div>
<div id="tbox"><a id="gotop" href="javascript:void(0)"></a> </div>
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
/cnw.js" type="text/javascript"></script> -->
</body>
</html>
<?php }} ?>