<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       	$category=D('Category');
       	//获取所有分类
       	$catelists=$category->field(array('category_id','name','info'))->select();
       	$article=new \Model\ArticleModel();
       	//获取模板下的推荐文章
       	$commendart=$article->where('category_id=4')->order('sort desc')->select();
       	//按时间获取最新的5篇文章
            $map=array(
                  'blog_article.category_id'=>array('in','4,5'),
            );
       	$newarts=$article->order('pubtime desc')->join('blog_category ON blog_article.category_id = blog_category.category_id')->limit(5)->where($map)->select();
       	//页面右侧获取最新的10篇文章
       	$top10arts=$article->order('pubtime desc')->field(array('title','article_id'))->limit(10)->where($map)->select();
       	//获取模板下的9个推荐位
       	$top9news=$article->where('category_id=4')->field(array('title','article_id'))->order('sort desc')->limit(9)->select();
            
       	$this->assign('top9news',$top9news);
       	$this->assign('top10arts',$top10arts);
       	$this->assign('newarts',$newarts);
       	$this->assign('commendart',$commendart);
       	$this->assign('catelists',$catelists);
       	$this->display();
    }
    
}