<?php

namespace Model;
use Think\Model;

//Role模型model类
class RoleModel extends Model{
    //分配权限，收集信息、二期制作、存储信息
    function saveAuth($role_id,$authids){
        //① 数组的authid 变为 字符串的authid
        $authid_str = implode(',',$authids);
        //② 根据字符串的authid信息 查询对应的"控制器-操作方法""
        $authinfo = D('Auth')->select($authid_str);
        $s = "";
        foreach($authinfo as $k => $v){
            if(!empty($v['auth_c']) && !empty($v['auth_a'])){
                $s .= $v['auth_c']."-".$v['auth_a'].",";
            }
        }
        $s = rtrim($s,',');

        $sql = "update blog_role set role_auth_ids='$authid_str',role_auth_ac='$s' where role_id='$role_id'";
        return $this -> execute($sql);
    }
}
