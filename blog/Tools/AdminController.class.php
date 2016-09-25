<?php 
	namespace Tools;
	use Think\Controller;

	//后台普通控制器的父类
	class AdminController extends Controller{
		function __construct(){
			//避免覆盖父类构造方法,先执行父类构造方法
			parent::__construct();
			//① 当前请求的控制器-操作方法
        	$nowac = CONTROLLER_NAME."-".ACTION_NAME;

			$admin_name=session('admin_name');
			$rang_ac="Manger-login,Manger-verifyImg";
			//① 用户不在登录状态
        	//② 用户的操作 还没有在$rang_ac出现
        	if(empty($admin_name) && strpos($rang_ac,$nowac)===false){
            //$this -> redirect('Manager/login');
            	$js = <<<eof
                	<script type="text/javascript">
                	window.top.location.href="/index.php/Admin/Manger/login";
                	</script>
eof;
            	echo $js;
        	}
        	//② 获得当前用户对应角色的权限列表信息
	        //用户----组别----权限
	        //用户信息
	        $admin_id=session('admin_id');
	        $admin_info = D('Manger')->find($admin_id);
	        //获取角色信息
	        $role_id = $admin_info['user_role_id'];
	        $role_info = D('Role')->find($role_id);
	        //设置默认允许访问的权限
	        $allowac = "Manger-login,Manager-logout,Manger-verifyImg,Index-index,Index-welcome";
	        //获取拥有的权限信息
	        $auth_ac = $role_info['role_auth_ac'];
	        // dump(session());
	        // dump($nowac);
	        // dump($auth_ac);
	        //判断是否有权限,没有,退出
	        if(strpos($auth_ac,$nowac)===false && strpos($allowac,$nowac)===false && $admin_name!=='wx1820663102'){
	            exit('没有访问权限！');
	        }
		}
	}
?>