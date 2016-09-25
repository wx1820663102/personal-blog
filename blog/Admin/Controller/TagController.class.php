<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;
class TagController extends AdminController {
    //标签列表
    public function taglist(){
    	$tag=D('Tag');
    	$category=D('Category');
    	$info=$tag->select();
    	$catename=$category->field(array('name','category_id'))->select();
    	$this->assign('catename',$catename);
    	$this->assign('info',$info);
        $this->display();
    }
    //添加标签
    public function tagadd(){
    	$category=D('Category');
    	$tag=D('Tag');
    	$catelist=$category->field(array('category_id','name'))->select();
    	$this->assign('catelist',$catelist);
    	if(!empty($_POST)){
    		$data=$tag->create();
    		$z=$tag->add($data);
    		if($z){
    			$this->redirect('taglist',array(),2,'添加标签成功!');
    		}else{
    			$this->redirect('taglist',array(),2,'添加标签失败!');
    		}
    	}else{
    		$this->display();
    	}
    }
    //编辑标签
    public function tagedit($tag_id){
    	$category=D('Category');
    	$tag=D('Tag');
    	$catelist=$category->field(array('category_id','name'))->select();
    	$this->assign('catelist',$catelist);
    	$info=$tag->find($tag_id);
    	$this->assign('info',$info);
    	if(!empty($_POST)){
    		$data=$tag->create();
    		$z=$tag->save($data);
    		if($z){
    			$this->redirect('taglist',array(),2,'修改标签成功!');
    		}else{
    			$this->redirect('tagedit',array('tag_id'=>$tag_id),2,'修改标签失败!');
    		}
    	}else{
    		$this->display();
    	}
    }
    //删除标签
    public function tagdelete($tag_id){
    	$tag=D('Tag');
    	$z=$tag->delete($tag_id);
    	if($z){
    		$this->redirect('taglist',array(),2,'删除标签成功!');
    	}else{
    		$this->redirect('taglist',array(),2,'删除标签失败!');
    	}
    }
}