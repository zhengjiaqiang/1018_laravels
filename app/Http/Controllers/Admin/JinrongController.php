<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class JinrongController extends Controller
{
    //列表展示
    public function index()
    {
        return view('admin.jinrong.index');
    }

    /*表单添加*/
    public function create()
    {

    }
    /*数据入库*/
    public function store()
    {

    }
    /*修改表单 根据id查询数据*/
    public function edit($id=1)
    {

        return view('admin.jinrong.edit');
    }
    /*数据更新*/
    public function update()
    {

    }
    /*删除 destroy*/
    public function destroy($id)
     {
        echo $id;die;

     }
}
