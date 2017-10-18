<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\CommonController;
class ZhiyaController extends CommonController
{
    //抵押物信息列表
    public function diyawu()
    {
        $info_list=Db::table('info')->join('user','info.user_id','=','user.user_id')->where('user.user_id',1)->get();
        return view('admin.zhiya.diyawu',['info_list'=>$info_list]);
    }
    /*估价修改*/
    public function update(Request $request)
    {
        $id=$request->input('id');
        $new_num=$request->input('new_num');
        $res=Db::table('info')->where('info_id',$id)->update(['info_judge'=>$new_num]);
        if($res)
        {
        echo 1;
        }
        else
        {
        echo 0;
        }
      
    }

    /*状态值修改*/
    public function status(Request $request)
    {
    $info_id=$request->info_id;
    $status=$request->status;
    //echo $info_id.','.$status;
    $bool=Db::table('info')->where('info_id',$info_id)->update(['info_status'=>$status]);
    if($bool)
    {
     $data['state']=0;
     $data['msg']='ok';
    }
    else
    {
    $data['state']=1;
    $data['msg']='fail';
    }

    }

}
