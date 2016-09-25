<?php 
	namespace Tools;
	use Think\Controller;
	//前台栏目类基类
	class CateController extends Controller{
		function __construct(){
			//避免覆盖父类构造方法,先执行父类构造方法
			parent::__construct();
			$category=D('Category');
			$catelists=$category->field(array('category_id','name','info'))->select();
			$this->assign('catelists',$catelists);
		}
	}
?>