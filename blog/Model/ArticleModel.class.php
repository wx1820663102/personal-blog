<?php 
	namespace Model;
	use \Think\Model;

	class ArticleModel extends Model{
		//开启批处理验证
		protected $patchValidate=true;
		//自动验证定义
		protected $_validate=array(
			array('title','require','文章标题不能为空'),
			array('title','0,30','标题在30个字符以内',0,'length'),
			array('category_id','require','分类栏目不能为空'),
			array('arttag','require','标签不能为空',2),
			array('sort','number','排序必须为数字值'),
			array('sort','0,100','排序必须在0到100之间',0,'between'),
			array('remark','require','摘要不能为空'),
			array('remark','0,200','摘要不能超过两百个字符!',0,'length'),
			array('author','require','作者不能为空'),
			array('content','require','文章内容不能为空',2)
		);
	}
?>