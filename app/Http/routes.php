<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*前台登录、注册*/
Route::group(['prefix'=>'home','namespace'=>'Home'],function (){
/*前台首页*/
Route::get('index','IndexController@index');
Route::get('register','RegistController@regist');  //注册
Route::resource('touzi','TouziController');       //我要投资
Route::resource('user','UserController');        //我的账户
Route::resource('safe','SafeController');        //安全保障                                        //安全保障
Route::resource('about','AboutController');       //关于我们                                       //安全保障
Route::resource('huodong','DongController');     //活动专区
Route::get('index/kekao','IndexController@kekao');//安全可靠                                                 //安全可靠
Route::get('index/shouyi','IndexController@shouyi');//安全收益                                              //安全可靠
Route::get('index/fangbian','IndexController@fangbian');//灵活方便                                              //安全可靠
Route::get('index/xionghou','IndexController@xionghou');//实力雄厚                                            //安全可靠
Route::get('tiyan','IndexController@tiyan');     //新手体验
Route::get('tiyan/now_invest','IndexController@now_invest');//立即投资
});
Route::match(['get','post'],'home/login','Home\LoginController@login');
/*后台*/
Route::match(['get','post'],'admin/login','Admin\LoginController@login');//登录
Route::match(['get','post'],'admin/out','Admin\LoginController@out');    //退出
Route::match(['get','post'],'admin/captcha/{tmp}','Admin\LoginController@captcha');    //验证码
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
/*后台首页*/
Route::get('index','IndexController@index') ;
/*系统设置*/
Route::get('system/backup','SystemController@backup');//数据库备份
Route::get('system/restore','SystemController@restore');//数据库还原
Route::get('rbac/up','RbacController@db_update');//数据库修改
Route::resource('rbac','RbacController');//权限
/*质押管理*/
Route::get('zhiya/diyawu','ZhiyaController@diyawu');//抵押物管理
Route::get('zhiya/update','ZhiyaController@update');//估价修改
Route::get('zhiya/status','ZhiyaController@status');//状态值修改
/*********************************************************************/
Route::resource('count','CountController');//统计
Route::resource('show','CountController@show');//统计充值列表
Route::resource('tixian','CountController@tixian');//统计提现
Route::resource('tixian_list','CountController@tixian_list');//提现列表
Route::resource('dai','CountController@dai');//贷款统计
Route::resource('dai_list','CountController@dai_list');//贷款统计列表
Route::resource('tou','CountController@tou');//投资统计
Route::resource('tou_list','CountController@tou_list');//投资统计列表
Route::resource('guanggao','GuangController@index');//广告首页
Route::resource('add','GuangController@add');//广告添加页面
Route::resource('add_do','GuangController@add_do');//广告添加加
});



