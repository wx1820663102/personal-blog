<?php 
	namespace Tools;
	use Think\Controller;
	//文章类基类,用来更新浏览次数
	class ArtController extends Controller{
		function __contruct(){
			parent::__construct();
			$acticle_id=$_GET['article_id'];
			$article=new \Model\ArticleModel();
			$click=$article->field('click')->where(array('article_id'=>$article_id))->find();
			$data['click']=$click['click']+1;
			$article->where(array('article_id'=>$article_id))->save($data);
		}
	}
?>