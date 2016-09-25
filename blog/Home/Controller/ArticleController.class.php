<?php 
	//文章详情页
	namespace Home\Controller;
	use Think\Controller;

	class ArticleController extends Controller{
		public function newsdetail($article_id){
			$article=new \Model\ArticleModel();
			$tag=D('Tag');
			$category=D('Category');
			//收集具体的文章信息,并展示
			$artinfo=$article->find($article_id);
			//获取所有栏目
			$catelists=$category->field(array('category_id','name','info'))->select();
			//获取当前栏目下的所有标签
			$tags=$tag->where(array('category_id'=>$artinfo['category_id']))->select();

			//收集当前文章的栏目和标签
			$cate=$category->find($artinfo['category_id']);
			$arr=explode(',',$artinfo['arttag']);
			$tousedtag=$arr[0];
			$nowarttag=$tag->find($tousedtag);
			//获取栏目最新
			$new8arts=$article->limit(8)->where(array('category_id'=>$artinfo['category_id']))->order('pubtime desc')->select();
			//获取点击排行
			$click5arts=$article->limit(5)->where(array('category_id'=>$artinfo['category_id']))->order('click desc')->select();
			//相关文章,就获取相同栏目的6篇文章
			$alikearts=$article->limit(6)->where(array('category_id'=>$artinfo['category_id']))->select();
			//更新文章阅读次数
			$data['click']=$artinfo['click']+1;
			$article->where(array('article_id'=>$article_id))->save($data);
			$this->assign('alikearts',$alikearts);
			$this->assign('click5arts',$click5arts);
			$this->assign('new8arts',$new8arts);
			$this->assign('tags',$tags);
			$this->assign('cate',$cate);
			$this->assign('nowarttag',$nowarttag);
			$this->assign('catelists',$catelists);
			$this->assign('artinfo',$artinfo);
			$this->display();
		}
	}
?>