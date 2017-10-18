<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //关于我们首页展示
    public function index()
    {
        return view('home.safe.index');
    }
}
