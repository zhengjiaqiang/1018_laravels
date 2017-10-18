<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CommonController;
class IndexController extends CommonController
{
      //后台首页
    public function index()
    {

        return view('admin.index.index');
    }

}
