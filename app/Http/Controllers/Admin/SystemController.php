<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use app\libs\Backup;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    //数据备份
    public function backup()
    {
    $db=new Backup();
    $bool=$db->backup(['admin','role']);
    if($bool)
    {
    echo "<font color='red'>数据备份成功</font>";
    $url=url('admin/index');
    header("refresh:3 url=".$url);
    exit();
    }
    else
    {
    echo '数据备份失败,请联系管理员';
    $url=url('admin/index');
    header("refresh:3 url=".$url);
    exit();
    }

    }
    //数据还原
    public function restore()
    {
    $db=new Backup();
    $restore=$db->restore("./backup/sql.sql");
    if($restore)
    {
        echo "<font color='red'>数据还原成功</font>";
        $url=url('admin/index');
        header("refresh:3 url=".$url);
        exit();
    }
    else
    {
        echo '数据还原失败,请联系管理员';
        $url=url('admin/index');
        header("refresh:3 url=".$url);
        exit();
    }


    }
}
