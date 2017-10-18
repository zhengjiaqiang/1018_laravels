<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TouziController extends Controller
{
    //我要投资
    public function index()
    {
        return view('home.touzi.index');
    }
}
