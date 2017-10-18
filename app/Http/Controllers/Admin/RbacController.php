<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CommonController;
class RbacController extends CommonController
{
    //列表展示
    public function index()
    {
        return 'index';
    }
    //表单添加
    public function create()
    {
        return 'create';
    }
    //入库
    public function store()
    {
        return 'store';
    }
    //根据修改id查询数据
    public function edit()
    {
        return 'edit';
    }
    //数据更新
    public function update()
    {
        return 'update';
    }
    //数据库修改
    public function db_update()
    {
        return 'db_update';

    }

}
