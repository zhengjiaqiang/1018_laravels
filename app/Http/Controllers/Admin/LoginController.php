<?php

namespace App\Http\Controllers\Admin;
use App\Models\Privilege;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
class LoginController extends Controller
{
       //登录
      public function login(Request $request)
      {
        if($request->isMethod('post'))
        {
        $admin_name=$request->input('admin_name');//用户名
        $admin_pwd=$request->input('admin_pwd');//密码
        $userInput=$request->captcha;           //验证码
        $res=Db::table('admin')->where(['admin_name'=>$admin_name,'admin_pwd'=>$admin_pwd])->first();
        //dd($accessList);
        //登录成功之后,保存用户基本信息
        if ($res)
        {
        $user_info=session(['user_info'=>$res]);
        $user_name=session(['user_name'=>$res->admin_name]);
        //查询当前用户所拥有的权限
        $accessList=Privilege::getAccess();
        session(['accessList'=>$accessList]);
        //判断验证码是否输入正确
        if (Session::get('milkcaptcha') == $userInput)
        {
        //用户输入验证码正确
        return redirect('admin/index');
        }
        else
        {
        //用户输入验证码错误
        echo  '您输入验证码错误';
        $url=url('admin/login');
        header('refresh:3 url='.$url);
        exit();
        }
        }
        else
        {
        return redirect('admin/login')->with('msg','用户名或密码输入有误');
        }
        }
        else
        {
        return view('admin.login.login');
        }
        }
        //退出
        public function out()
        {
        session('user_info');
        session(['user_info'=>null]);
        session(['user_name'=>null]);
        return redirect('admin/login');
        }
        /*生成验证码*/
        public function captcha()
        {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //dd($builder);
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
        }
}
