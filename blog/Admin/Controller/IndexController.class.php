<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;
class IndexController extends AdminController {
    public function index(){
        $this->display();
    }

    public function welcome(){
    	//获取登陆的ip
    	$ip=D('Manger')->field('loginip')->where(array('username'=>I('session.username')))->find();
    	$loginip=$ip[0];
    	$this->assign('ip',$loginip);
    	$this->display();
    }
}