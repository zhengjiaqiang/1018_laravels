<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CountController extends Controller
{
    /*对象转数组*/
    public function __construct()
    {
        config(['database.fetch' => 2]);
    }
    //统计充值
    public function index()
    {
        //统计每个用户充值的金额以及最后充值时间
        $list=DB::select('SELECT SUM(cord_recharge)as price,user_tel,moneyrecord.user_id,MAX(cord_time)as cord_time,cord_id from moneyrecord  jOIN `user` on moneyrecord.user_id=`user`.user_id where cord_recharge is NOT null and cord_state=1 GROUP BY moneyrecord.user_id');
        //print_r($list);
         return view('admin.count.index',array('list'=>$list));
    }
    //充值详情
    public function  show()
    {
        //接受用户id
        @$user_id=$_GET['user_id'];
        //判断用户是否存在
        if(empty($user_id))
        {
              echo "用户不存在";die;
        }
        //查询用充值记录
        $list_all=DB::select("select cord_time,user_tel,cord_recharge,cord_id from moneyrecord jOIN `user` on moneyrecord.user_id=`user`.user_id where moneyrecord.user_id='$user_id' and cord_state=1");
        //print_r($list_all);
        return view('admin.count.index_chong',array('list_all'=>$list_all));
    }
    //提现
    public function tixian()
    {
        //统计每个用户提现的金额以及最后充值时间
        $list=DB::select('SELECT SUM(cord_wals)as price,user_tel,moneyrecord.user_id,MAX(cord_time)as cord_time,cord_id from moneyrecord  jOIN `user` on moneyrecord.user_id=`user`.user_id where cord_wals is NOT null and cord_state=-1 GROUP BY moneyrecord.user_id');
        //print_r($list);
        return view('admin.count.index_tixian',array('list'=>$list));
    }
    //提现详情
    public function  tixian_list()
    {
        //接受用户id
        @$user_id=$_GET['user_id'];
        //判断用户是否存在
        if(empty($user_id))
        {
            echo "用户不存在";die;
        }
        //查询充值记录
        $list_all=DB::select("select cord_time,user_tel,cord_wals,cord_id from moneyrecord jOIN `user` on moneyrecord.user_id=`user`.user_id where moneyrecord.user_id='$user_id' and cord_state=-1");
        //print_r($list_all);
        return view('admin.count.index_tixian_list',array('list_all'=>$list_all));
    }


    //贷款统计
    public function dai()
    {
        //统计每个用户贷款的金额以及最后贷款时间和成功次数
        $list=DB::select("SELECT SUM(loan_money)as price,COUNT(loan_sta)as cheng,count(loan.user_id)as num,loan.user_id,loan_time,user_tel from loan jOIN `user` on loan.user_id=`user`.user_id WHERE loan_money is not null   GROUP BY loan.user_id ORDER BY  loan_time DESC");
        return view('admin.count.index_dai',array('list'=>$list));
    }
    //贷款统计列表
    public function  dai_list()
    {
        @$user_id=$_GET['user_id'];
        //判断用户是否存在
        if(empty($user_id))
        {
            echo "用户不存在";die;
        }
        //查询贷款记录
        $list_all=DB::select("select loan_time,loan_sta,info_name,loan_rate,user_tel,loan_money from loan jOIN `user` on loan.user_id=`user`.user_id jOIN info on loan.loan_id=info.loan_id where loan.user_id='$user_id'  and  loan_money is not null");
        return view('admin.count.index_dai_list',array('list_all'=>$list_all));
    }
    //投资统计
    public function tou()
    {
        //投资统计
        $list=DB::select("select user_tel,invest.user_id as user,invest_time,sum(invest_money) as price,COUNT(invest.user_id)as sum,SUM(invest_state) as zong,user_tel from invest join `user` on invest.user_id=`user`.user_id  GROUP BY invest.user_id ");
        //贷款人名

        return view('admin.count.index_tou',array('list'=>$list));
    }
    //投资列表
    public function tou_list()
    {
        $user_id=$_GET['user_id'];
        $list_all=DB::select("select user_tel,invest_state,invest_profit,invest_money,user_tel,invest_time from invest join `user` on invest.user_id=`user`.user_id WHERE  invest.user_id='$user_id'");
        $dai=DB::select("select user_tel from invest join `user` on invest.user_loan_id=`user`.user_id WHERE invest_state=1 GROUP BY invest.user_id");
        $daik=$dai[0]['user_tel'];
         foreach($list_all as $k=>$v)
         {
               $list_all[$k]['daik']=$daik;
         }
         //print_r($list_all);
        return view('admin.count.index_tou_list',array('list_all'=>$list_all));
    }
}