<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //首页
     public function index(){
         return view('home.index.index');
     }
    //安全可靠
    public function kekao()
    {

        return view('home.index.kekao');
    }
    //安全收益
    public function shouyi()
    {
     return view('home.index.shouyi');
    }
    //灵活方便
    public function fangbian()
    {
        return view('home.index.fangbian');
    }
    //实力雄厚
    public function xionghou()
    {
        return view('home.index.xionghou');
    }
     //新手项目
    public function tiyan()
    {

      return view('home.index.tiyanjin');
    }
    //立即投资
    public function now_invest()
    {
        return view('home.index.now_invest');
    }
}
