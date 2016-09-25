<?php
namespace Admin\Controller;
use Tools\AdminController;
class RoleController extends AdminController {
    public function index(){
        $this->display();
    }
    public function rolelist(){
    	$roles=D('Role')->select();
    	foreach ($roles as $v) {
    		$users[]=D('Manger')->where(array('user_role_id'=>$v['role_id']))->field(array('name','user_role_id'))->select();
    	}
    	foreach($users as $user){
    		foreach ($user as $v) {
    			$arr[]=array($v['name'],$v['user_role_id']);
    		}
    	}
        $count=D('Role')->field('count(role_id)')->find();
        $this->assign('count',$count);
    	$this->assign('arr',$arr);
    	$this->assign('roles',$roles);
    	$this->display();
    }

    public function roleadd(){
    	$role=new \Model\RoleModel();
    	if(IS_POST){
    		$data=$role->create();
    		$data['role_auth_ids']=implode(',',I('post.auth_id'));
    		$authinfo = D('Auth')->select($data['role_auth_ids']);
        	$s = "";
	        foreach($authinfo as $k => $v){
	            if(!empty($v['auth_c']) && !empty($v['auth_a'])){
	                $s .= $v['auth_c']."-".$v['auth_a'].",";
	            }
	        }
        	$s = rtrim($s,',');
    		$data['role_auth_ac']=$s;
    		$z=$role->add($data);
    		if($z){
    			$this->redirect('rolelist',array(),2,'新的角色添加成功');
    		}else{
    			$this->redirect('roleadd',I('post.'),2,'角色添加失败,请重试!');
    		}
    	}
    	$auths_infoA=D('Auth')->where(array('auth_level'=>0))->select();
    	$auths_infoB=D('Auth')->where(array('auth_level'=>1))->select();
    	$this->assign('auths_infoA',$auths_infoA);
    	$this->assign('auths_infoB',$auths_infoB);
    	$this->display();
    }

    public function roleedit(){
    	if(IS_POST){
    		$data=D('Role')->create();
    		//处理数据
    		$data['role_auth_ids']=implode(',',I('post.auth_id'));
    		$authinfo = D('Auth')->select($data['role_auth_ids']);
        	$s = "";
	        foreach($authinfo as $k => $v){
	            if(!empty($v['auth_c']) && !empty($v['auth_a'])){
	                $s .= $v['auth_c']."-".$v['auth_a'].",";
	            }
	        }
        	$s = rtrim($s,',');
    		$data['role_auth_ac']=$s;
    		$z=D('Role')->save($data);
    		if($z){
    			$this->redirect('rolelist',array(),2,'角色修改成功');
    		}else{
    			$this->redirect('roleedit',array('role_id',I('get.role_id')),2,
    				'角色修改失败');
    		}
    	}
    	$role_id=I('get.role_id');
    	$role_info=D('Role')->find($role_id);
    	$have_auth=explode(',',$role_info['role_auth_ids']); //已拥有权限
    	$auths_infoA=D('Auth')->where(array('auth_level'=>0))->select(); //顶级权限
    	$auths_infoB=D('Auth')->where(array('auth_level'=>1))->select(); //次级权限
    	$this->assign('auths_infoA',$auths_infoA);
    	$this->assign('auths_infoB',$auths_infoB);
    	$this->assign('have_auth',$have_auth);
    	$this->assign('role_info',$role_info);
    	$this->display('roleedit');
    }

    public function roledel(){
    	$role_id=I('get.role_id');
    	$z=D('Role')->delete($role_id);
    	if($z){
    		$this->redirect('rolelist',array(),2,'角色删除成功');
    	}else{
    		$this->redirect('rolelist',array(),2,'角色删除失败!');
    	}
    }
}