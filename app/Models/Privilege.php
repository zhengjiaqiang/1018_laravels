<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Privilege extends Model
{
        public static  function getAccess()
        {
        $user_info=session('user_info');
        //根据用户id查询出角色id
        $role_ids=Db::table('admin')
        ->join('user_role','admin.admin_id','=','user_role.admin_id')
        ->where('admin.admin_id',$user_info->admin_id)
        ->get();
        //根据角色id查询权限id
        $pri_ids=[];
        foreach ($role_ids as $key=>$value)
        {
        $pri_ids[$key]=Db::table('role')
        ->join('role_pri','role.role_id','=','role_pri.role_id')
        ->where('role.role_id',$value->role_id)
        ->get();
        }
        $pids=[];
        foreach ($pri_ids as $k=>$v)
        {
        foreach ($v as $k1=>$v1)
        {
        $pids[]=$v1->pri_id;
        }
        }
        //根据权限id查询权限
        $accessList=Db::table('privilege')->whereIn('pri_id',$pids)->get();
        return $accessList;

        }
}
