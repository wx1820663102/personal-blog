<?php 

namespace Model;
use Think\Model;

//Auth模型model类
class AuthModel extends Model{
    //全路径 和 等级 二期制作
    //权限信息整体维护
    function saveData($four){
        //1) 利用已有数据生成一条新记录(获得新记录主键id值)
        $newid = $this -> add($four); //数组方式添加数据
        //2) 利用新记录信息制作 全路径和等级
        //----制作全路径
        if($four['auth_pid']==0){//① 顶级权限
            $path = $newid;
        }else{      //② 非顶级权限
            //获得对应父级权限的信息(父级全路径)
            $pinfo = $this -> find($four['auth_pid']);
            $ppath = $pinfo['auth_path'];//父级全路径
            $path = $ppath ."-".$newid;
        }
        //----制作等级
        //算法：全路径中"-"中横线的个数
        $level = substr_count($path,'-');

        //把差的两个字段(全路径/等级)通过update更新进来
        $sql = "update blog_auth set auth_path='$path',auth_level='$level' where auth_id='$newid'";
        return $this -> execute($sql);
    }
}
