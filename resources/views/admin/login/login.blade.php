<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录 - 异清轩博客管理系统</title>
    <base href="{{asset('admin').'/'}}">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="apple-touch-icon-precomposed" href="images/icon/icon.png">
    <link rel="shortcut icon" href="images/icon/favicon.ico">
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--[if gte IE 9]>
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/html5shiv.min.js" type="text/javascript"></script>
    <script src="js/respond.min.js" type="text/javascript"></script>
    <script src="js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
</head>

<body class="user-select">
<div class="container">
        @if (session('msg'))
        <div class="alert alert-success">
        {{ session('msg') }}
        </div>
        @endif
    <div class="siteIcon"><img src="images/icon/icon.png" alt="" data-toggle="tooltip" data-placement="top" title="欢迎使用异清轩博客管理系统" draggable="false" /></div>
    <form action="{{url('admin/login')}}" method="post" autocomplete="off" class="form-signin">
        {{csrf_field()}}  {{--防止csrf攻击--}}
        <h2 class="form-signin-heading">管理员登录</h2>
        <label for="userName" class="sr-only">用户名</label>
        <input type="text" id="userName" name="admin_name" class="form-control" placeholder="请输入用户名" required autofocus autocomplete="off" maxlength="10">
        <label for="userPwd" class="sr-only">密码</label>
        <input type="password" id="userPwd" name="admin_pwd" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18">
        <label for="userPwd" class="sr-only">验证码</label>
        <input type="text"  name="captcha" class="form-control" placeholder="请输入验证码" >
        <img src="{{url('admin/captcha/1')}}" alt="验证码" style="height: 100px; height: 40px;" class="yanzhengma" id="c2c98f0de5a04167a9e427d883690ff6">
        <input type="submit" value="登录" class="btn btn-lg btn-primary btn-block">
    </form>
    <div class="footer">
        <p><a href="{{url('admin/index')}}" data-toggle="tooltip" data-placement="left" title="不知道自己在哪?">回到异清轩博客 →</a></p>
    </div>
</div>
<script src="jquery-1.7.2.min.js"></script>
<script>
/*生成验证码*/
$(function(){
    $("input[name=captcha]").blur(function () {
    var captcha=$(this).val();
    if(captcha=='')
    {
    alert('验证码不能为空');
    return;
    }
    })
    $('.yanzhengma').click(function () {
    var _this=$(this);
    var url="{{url('admin/captcha')}}";
    var url=url+'/'+Math.random();
    document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=url;
    })
})
</script>
</body>
</html>
