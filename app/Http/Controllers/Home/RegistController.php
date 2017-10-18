<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistController extends Controller
{
    //注册
    public function regist()
    {
        return view('home.regist.regist');
    }
}
