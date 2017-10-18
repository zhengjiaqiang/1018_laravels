<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
     //我的账户
    public function index()
    {
        return view('home.user.usercenter');
    }
}
