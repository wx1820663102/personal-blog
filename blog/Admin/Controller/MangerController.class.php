<?php
namespace Admin\Controller;
use Think\Controller;
//use Tools\AdminController;
use Think\Verify;
class MangerController extends Controller {
    public function login(){
       //两个逻辑,展示表单,验证登陆
       	if(!empty($_POST)){
       		$vry=new Verify();
       		if($vry->check($_POST['captcha'])){
       			$user=array(
       				'name'=>$_POST['name'],
       				'password'=>md5($_POST['password'])
       			);
       			$info=D('Manger')->where($user)->find();
       			if($info){
              session('admin_id',$info['user_id']);
       				session('admin_name',$info['name']);
       				session('password',$ifno['password']);
              //存入登陆的ip
              $loginip=$_SERVER['REMOTE_ADDR'];
              $data=array('loginip'=>$loginip);
              D('Manger')->where($user)->save($data);
       				$this->redirect('Index/index');
       			}else{
       				echo '用户名或密码错误!IP已被锁定';
       			}
       		}else{
       			echo '验证码错误';
       		}
       	}
       	$this->display();
    }
    //退出
    public function logout(){
    	session(null);
    	$this->redirect('Manger/login');
    }
    //验证码
    public function verifyImg(){
    	$cfg = array(
            'imageH'    =>  40,               // 验证码图片高度
            'imageW'    =>  100,               // 验证码图片宽度
            'fontSize'  =>  15,              // 验证码字体大小(px)
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        );
      ob_end_clean();
    	//实例化Verify类对象
        $very = new \Think\Verify($cfg);
        $very -> entry();
    }

    public function userlist(){
      //获取所有的管理员用户
      $mangers=D('Manger')->select();
      $rolename=D('Role')->field(array('role_id','role_name'))->select();
      //dump($rolename);
      $this->assign('mangers',$mangers);
      $this->assign('rolename',$rolename);
      $this->display();
    }

    public function mangeradd(){
      $roles=D('Role')->field(array('role_id','role_name'))->select();
      $this->assign('roles',$roles);
      if(!empty($_POST)){
        $data=D('Manger')->create();
        $z=D('Manger')->add($data);
        if($z){
          $this->redirect('userlist',array(),2,'管理员添加成功');
        }else{
          $this->redirect('mangeradd',array(),2,'管理员添加失败');
        }
      }else{
        $this->display();
      }
    }

    public function mangeredit(){
      if(!empty($_POST)){
        $data=D('Manger')->create();
        $z=D('Manger')->save($data);
        if($z){
          $this->redirect('userlist',array(),2,'管理员修改成功');
        }else{
          $this->redirect('mangeredit',array('user_id'=>I('get.user_id')),2,'管理员修改失败');
        }
      }else{
        $user_id=I('get.user_id');
        $mangerinfo=D('Manger')->where(array('user_id'=>$user_id))->find();
        $jutirole=D('Role')->field(array('role_id','role_name'))->where(array('role_id'=>$mangerinfo['user_role_id']))->find();
        $roles=D('Role')->field(array('role_id','role_name'))->select();
        $this->assign('roles',$roles);
        $this->assign('jutirole',$jutirole);
        $this->assign('mangerinfo',$mangerinfo);
        $this->display();
      }
    }

    public function mangerdel(){
      $user_id=I('get.user_id');
      $z=D('Manger')->delete($user_id);
      if($z){
        $this->redirect('userlist',array(),2,'删除管理员成功');
      }else{
        $this->redirect('userlist',array(),2,'删除失败!');
      }
    }
}