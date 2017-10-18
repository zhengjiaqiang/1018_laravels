<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class GuangController extends Controller
{
    /*对象转数组*/
    public function __construct()
    {
        config(['database.fetch' => 2]);
    }
   public function  index()
   {
       $list=DB::table('guanggao')->get();
       return view('admin.guang.index',array('list'=>$list));
   }
   public function  add()
   {
       return view('admin.guang.index_add');
   }
   public function  add_do()
   {
       $title=$_POST['title'];
       $url=$_POST['url'];
       $city=$_POST['city'];
       $is_show=$_POST['is_show'];
       $start=strtotime($_POST['start']);
       $end=strtotime($_POST['end']);
       $insert=DB::table('guanggao')->insert(array('g_name'=>$title,'g_url'=>$url,'g_city'=>$city,'g_addtime'=>$start,'g_endtime'=>$end,'is_show'=>$is_show));
       if($insert)
       {
          echo "<script>alert('添加成功');location.href='guanggao';</script>";
       }

   }
}