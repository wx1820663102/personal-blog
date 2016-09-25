<?php 
	namespace Home\Controller;
	//use Think\Controller;
	use Tools\CateController;
	class CategoryController extends CateController{

		public function about(){
			$category=D('Category');
			$category_id=$category->field('category_id')->
			where(array('info'=>'about'))->find();
			$article=new \Model\ArticleModel();
			$artinfo=$article->where(array('category_id'=>$category_id['category_id']))
			->find();
			$this->assign('artinfo',$artinfo);
			$this->display();
		}

		public function talk(){
			$category=D('Category');
			$category_id=$category->field('category_id')->where(array('info'=>'talk'))->find();
			$article=new \Model\ArticleModel();
			$artinfos=$article->where(array('category_id'=>$category_id['category_id']))
			->select();
			$this->assign('artinfos',$artinfos);
			$this->display();
		}

		public function news(){
			$category=D('Category');
			$article=new \Model\ArticleModel();
			$tag=D('Tag');
			//先获取此栏目下所有标签的前10篇文章
			$category_id=$category->field('category_id')->where(array('info'=>'news'))->find();
			//获取所有文章
			$total=D('Article')->where(array('category_id'=>$category_id['category_id']))->count();
			$Page=new \Think\Page($total,2);
			$top10arts=$article->where(array('category_id'=>$category_id['category_id']))->order('sort desc')->limit($Page->firstRow, $Page->listRows)->select();
			//查找具体标签
			foreach ($top10arts as $top10art) {
				$arr=explode(',',$top10art['arttag']);
				$tagaa=$arr[0];
				$jutitag[$top10art['article_id']]=$tag->field(array('tag_id','tagname'))->
				where(array('tag_id'=>$tagaa))->find();
			}
			//获取右上角的标签
			$tags=$tag->where(array('category_id'=>$category_id['category_id']))->select();
			//查找最新文章8条
			$new8arts=$article->limit(8)->order('pubtime desc')->where(array('category_id'=>$category_id['category_id']))->select();
			//按点击排行获取
			$click9arts=$article->limit(9)->order('click desc')->where(array('category_id'=>$category_id['category_id']))->select();

			$this->assign('click9arts',$click9arts);
			$this->assign('new8arts',$new8arts);
			$this->assign('tags',$tags);
			$this->assign('jutitag',$jutitag);
			$this->assign('top10arts',$top10arts);
			$this->assign('page',$Page->show());
			$this->display();
		}

		public function learn(){
			$category=D('Category');
			$article=new \Model\ArticleModel();
			$tag=D('Tag');
			//先获取此栏目下所有标签的前10篇文章
			$category_id=$category->field('category_id')->
			where(array('info'=>'learn'))->find();
			//获取所有文章
			$total=D('Article')->where(array('category_id'=>$category_id['category_id']))->count();
			$Page=new \Think\Page($total,3);
			$top10arts=$article->where(array('category_id'=>$category_id['category_id']))->order('sort desc')->limit($Page->firstRow, $Page->listRows)->select();
			//获取具体标签
			foreach ($top10arts as $top10art) {
				$arr=explode(',',$top10art['arttag']);
				$tagaa=$arr[0];
				$jutitag[$top10art['article_id']]=$tag->field(array('tag_id','tagname'))->
				where(array('tag_id'=>$tagaa))->find();
			}
			//获取右上角标签
			$tags=$tag->where(array('category_id'=>$category_id['category_id']))->select();
			//获取最新文章8条
			$new8arts=$article->limit(8)->where(array('category_id'=>$category_id['category_id']))->order('pubtime desc')->select();
			//获取点击排行前9
			$click9arts=$article->limit(9)->order('click desc')->where(array('category_id'=>$category_id['category_id']))->select();
			
			$this->assign('click9arts',$click9arts);
			$this->assign('new8arts',$new8arts);
			$this->assign('jutitag',$jutitag);
			$this->assign('tags',$tags);
			$this->assign('top10arts',$top10arts);
			$this->assign('page',$Page->show());
			$this->display();
		}

		public function message(){
			$this->display();
		}

		//针对news和lern分类下的tag方法
		public function concretetag($tag_id){
			$tag=D('Tag');
			$category=D('Category');
			$article=new \Model\ArticleModel();
			$category_id=$tag->where(array('tag_id'=>$tag_id))->find();
			//获取此Tag下的前10篇文章
			$arttag=$article->field('arttag')->where(array('category_id'=>$category_id['category_id']))->find();
			$arr=explode(',',$arttag['arttag']);
			$jutitagaa=$arr[0];
			$map=array(
				'arttag'=>array('like','%'.$jutitagaa.'%'),
			);
			$top10arts=$article->where($map)->limit(10)->order('pubtime desc')->select();
			//获取具体标签
			foreach ($top10arts as $top10art) {
				$arr=explode(',',$top10art['arttag']);
				$tagaa=$arr[0];
				$jutitag[$top10art['article_id']]=$tag->field(array('tag_id','tagname'))->
				where(array('tag_id'=>$tagaa))->find();
			}
			//获取右上角标签
			$tags=$tag->where(array('category_id'=>$category_id['category_id']))->select();
			//获取最新文章8条
			$new8arts=$article->limit(8)->where(array('category_id'=>$category_id['category_id']))->order('pubtime desc')->select();
			//获取点击排行前9
			$click9arts=$article->limit(9)->order('click desc')->where(array('category_id'=>$category_id['category_id']))->select();

			$this->assign('top10arts',$top10arts);
			$this->assign('jutitag',$jutitag);
			$this->assign('click9arts',$click9arts);
			$this->assign('new8arts',$new8arts);
			$this->assign('tags',$tags);
			$this->display('news');
		}
	}
?>