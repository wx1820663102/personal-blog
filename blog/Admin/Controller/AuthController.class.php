<?php
namespace Admin\Controller;
use Think\Controller;
class AuthController extends Controller {
    public function index(){
        $this->display();
    }
    public function authlist(){
    	$count=D('Auth')->field('count(auth_id)')->find();
    	//$auths=D('Auth')->select();
    	$total=D('Auth')->count();
    	$Page = new \Think\Page($total, 5);
    	$auths = D('Auth')->where($where)->limit($Page->firstRow, $Page->listRows)->select();

    	$this->assign('count',$count);
    	$this->assign('auths',$auths);
    	$this->assign('page', $Page->show());
    	$this->display();
    }

    public function authadd(){
    	if(IS_POST){
    		$data=D('Auth')->create();
    		$data['auth_level']=1;
    		$authtmp=explode(',',I('post.auth'));
    		$data['auth_c']=$authtmp[0];
    		$data['auth_a']=$authtmp[1];
    		$auth=new \Model\AuthModel();
    		if($auth->saveData($data)){
    			$this->redirect('authlist',array(),2,'权限添加成功');
    		}else{
    			$this->redirect('authlist',array(),2,'权限添加失败');
    		}
    	}
    	$authlist=D('Auth')->where('auth_level=0')->field(array('auth_id','auth_c','auth_name'))->select();
    	$this->assign('authlist',$authlist);
    	$this->display();
    }
	
	public function authedit(){
		if(IS_POST){
			$data=D('Auth')->create();
    		$data['auth_level']=1;
    		$authtmp=explode(',',I('post.auth'));
    		$data['auth_c']=$authtmp[0];
    		$data['auth_a']=$authtmp[1];
    		$pinfo = D('Auth') -> find($data['auth_pid']);
            $ppath = $pinfo['auth_path'];//父级全路径
            $path = $ppath ."-".$data['auth_id'];
    		$data['auth_path']=$path;
 
    		$z=D('Auth')->save($data);
    		if($z){
    			$this->redirect('authlist',array(),2,'权限更改成功');
    		}else{
    			$this->redirect('authlist',array(),2,'权限更改失败');
    		}
		}
		$auth_id=I('get.auth_id');
		$info=D('Auth')->find($auth_id);
		$authac=$info['auth_c'].','.$info['auth_a'];
		$authlist=D('Auth')->where('auth_level=0')->field(array('auth_id','auth_c','auth_name'))->select();
		$this->assign('info',$info);
		$this->assign('authac',$authac);
    	$this->assign('authlist',$authlist);
    	$this->display();
	}

    public function authdel(){
    	$auth_id=I('get.auth_id');
    	$z=D('Auth')->delete($auth_id);
    	if($z){
    		$this->redirect('authlist',array('p'=>I('get.p')),2,'权限删除成功');
    	}else{
    		$this->redirect('authlist',array('p'=>I('get.p')),2,'权限删除失败');
    	}
    }
}