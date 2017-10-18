<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SafeController extends Controller
{
       //安全保障
    public function index()
    {
        return view('home.safe.index');
    }
}
