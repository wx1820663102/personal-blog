<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;
class ArticleController extends AdminController {
    //文章列表
    public function articlelist(){
        $article=new \Model\ArticleModel();
        $category=D('Category');
       
        // $infos=$article->field(array('article_id','title','category_id','arttag','author','pubtime','click',))->select();
        // 两表联查.获取栏目信息
        if(IS_POST){
            //暂定
        }else{
            $infos=$article->join('blog_category ON blog_article.category_id = blog_category.category_id')->where(array('comm'=>1))->select();
        }

        $count=$article->field('count(article_id)')->select();
        $count=$count[0]['count(article_id)'];
        $this->assign('count',$count);
        $this->assign('infos',$infos);
        $this->display();
    }
    //新增文章
    public function articleadd(){
    	$article=new \Model\ArticleModel();
        $category=D('Category');
        $tag=D('Tag');
        $catelists=$category->field(array('category_id','name'))->select();
        $this->assign('catelists',$catelists);
    	if(!empty($_POST)){
            //判断文件上传
            if($_FILES['article_pic']['error']===0){
                $cfg=array(
                    'maxSize'=>3145728,
                    'rootPath'=>'./Public/Upload/',
                    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg')
                );
                $up=new \Think\Upload($cfg);
                //上传附件
                //如果附件上传成功，就可以通过uploadOne的返回值查看到附件
                //在服务器的存储情况
                $z=$up->uploadOne($_FILES['article_pic']);
                //附件保存到数据库中，保存路径名即可
                $bigpicname=$up->rootPath.$z['savepath'].$z['savename'];
                $_POST['article_pic']=substr($bigpicname,2);
                
                //制作缩略图
                $im=new \Think\Image();
                //打开原图
                $im->open($bigpicname);
                //制作成一张300*200的缩略图
                $im->thumb(300,200);
                $smallpicname=$up->rootPath.$z['savepath']."small_".$z['savename'];
                $im->save($smallpicname);
                $_POST['thumb_pic']=substr($smallpicname,2);
            }
            //收集表单信息
    		$data=$article->create();
            if($data){
               $data['arttag']=implode(',',$data['arttag']);
                $z=$article->add($data);
                if($z){
                    $this->redirect('articlelist',array(),2,'新增文章成功');
                } 
            }else{
                $this->assign('errorInfo',$article->getError());
                //dump($article->getError());
            }
    	}
    	$this->display();
    }
    //编辑文章
    public function articleedit($article_id){
        $article=new \Model\ArticleModel();
        $category=D('Category');
        $tag=D('Tag');
        $catelists=$category->field(array('category_id','name'))->select();
        $info=$article->join('blog_category ON blog_article.category_id = blog_category.category_id')->find($article_id);
        $tags=$tag->field(array('tag_id','tagname'))->where(array('category_id'=>$info['category_id']))->select();
        $this->assign('tags',$tags);
        $this->assign('catelists',$catelists);
        $this->assign('info',$info);
        if(!empty($_POST)){
            //没有图片上传时,用上次上传的图片提交
            if(empty($_POST['article_pic'])){
                $_POST['article_pic']=substr($_POST['hiddenpic'],6);
            }
            //有图片上传时,上传图片和缩略图的路径
            if($_FILES['article_pic']['error']===0){
                $cfg=array(
                    'maxSize'=>3145728,
                    'rootPath'=>'./Public/Upload/',
                    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg')
                );
                $up=new \Think\Upload($cfg);
                //上传附件
                //如果附件上传成功，就可以通过uploadOne的返回值查看到附件
                //在服务器的存储情况
                $z=$up->uploadOne($_FILES['article_pic']);
                //附件保存到数据库中，保存路径名即可
                $bigpicname=$up->rootPath.$z['savepath'].$z['savename'];
                $_POST['article_pic']=substr($bigpicname,2);
                
                //制作缩略图
                $im=new \Think\Image();
                //打开原图
                $im->open($bigpicname);
                //制作成一张300*200的缩略图
                $im->thumb(300,200);
                $smallpicname=$up->rootPath.$z['savepath']."small_".$z['savename'];
                $im->save($smallpicname);
                $_POST['thumb_pic']=substr($smallpicname,2);
            }
            //收集表单,提交
            $data=$article->create();
            if($data){
                $data['arttag']=implode(',',$data['arttag']);
                $z=$article->save($data);
                if($z){
                    $this->redirect('articlelist',array(),2,'更改文章成功');
                }
            }else{
                $this->assign('errorInfo',$article->getError());
            }
        }
    	$this->display();
    }
    //删除文章(假)
    public function articledelete($article_id){
        $article=new \Model\ArticleModel();
        $info=$article->find($article_id);
        $info['comm']=0;
        $z=$article->save($info);
        if($z){
            $this->redirect('articlelist',array(),2,'已将文章放入回收站,可取回!');
        }else{
            $this->redirect('articlelist',array(),2,'人品不好,放入回收站失败,请重试!');
        }
    }
    //定义ajax方法
    public function ajax($category_id){
        $tag=D('Tag');
        $tags=$tag->field(array('tag_id','category_id','tagname'))->where(array('category_id'=>$category_id))->select();
        $this->ajaxReturn($tags,'JSON');
    }
}