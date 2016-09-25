<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;
class CategoryController extends AdminController {
    //分类列表
    public function categorylist(){
        $category=D('Category');
        $info=$category->select();
       	$this->assign('info',$info);
        $this->display();
    }
    //添加分类
    public function categoryadd(){
    	$category=D('Category');
    	if(!empty($_POST)){
    		$data=$category->create();
    		$z=$category->add($data);
    		if($z){
    			$this->redirect('categorylist',array(),2,'添加分类成功!');
    		}
    		else{
    			$this->redirect('categoryadd',array(),2,'添加分类失败!');
    		}
    	}else{
    		$this->display();
    	}
    }
    //修改分类
    public function categoryedit($category_id){
    	$category=D('Category');
    	if(!empty($_POST)){
    		$data=$category->create();
    		$z=$category->save($data);
    		if($z){
    			$this->redirect('categorylist',array(),2,'修改分类成功!');
    		}else{
    			$this->redirect('categoryedit',array('category_id'=>$category_id),2,'修改分类失败!');
    		}
    	}else{
    		$info=$category->find($category_id);
    		$this->assign('info',$info);
    		$this->display();
    	}
    }
    //删除分类
    public function categorydelete($category_id){
    	$category=D('Category');
    	$z=$category->delete($category_id);
    	if($z){
    		$this->redirect('categorylist',array(),2,'删除分类成功!');
    	}else{
    		$this->redirect('categorylist',array(),2,'删除分类失败!');
    	}
    }
}