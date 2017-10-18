<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DongController extends Controller
{
    //活动专区
    public function index()
    {
        return view('home.dong.huodong');
    }
}
