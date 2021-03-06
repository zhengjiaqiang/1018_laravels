
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="网贷理财,高收益投资理财项目,如何网上赚钱,理财知识,短期理财,银行理财,北京理财,普惠金融投资理财网">
    <meta name="description" content="爱钱帮是目前网贷理财知名的高收益理财项目平台，有海鲜帮、娱乐帮、汽车帮等高收益理财产品，还有“帮派”项目也接连而出，教您理财知识，如何网上赚钱。">
    <title>我要投资丨北京理财_银行理财_为您赚钱的互联网金融短期理财投资平台-爱钱帮       </title>
    <base href="{{asset('')}}">
    <!--[if lt IE 9]>
    <script src="statics/newcommon/js/html5shiv.js"></script>
    <![endif]-->
    <link  rel="Shortcut  Icon"  href="statics/home/images/minilogo.png">
    <link rel="stylesheet" href="statics/newcommon/css/m2-commonNew.css?20160520">
    <link rel="stylesheet" href="statics/home2/css/m2-main.css?20160520">
    <link rel="stylesheet" href="statics/newcommon/css/m2-common.css?20160520">
    <script type="text/javascript" src="statics/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="statics/newcommon/js/common.js?20160520"></script>

    <!--[if lt IE 9]>
    <script src="statics/home2/js/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="statics/home/css/newPage.css?20160520" />
    <link rel="stylesheet" type="text/css" href="statics/home/css/projectList.css?20160520">
    <script type="text/javascript" src="statics/home/js/projectList.js?20160520"></script>
    <script type="text/javascript" src="statics/common/js/common.js?20160520"></script>
    <script type="text/javascript" src="statics/home2/js/m2-front.js?20160520"></script>
    <!-- 右侧边栏start -->
    <!-- 右侧登录窗口 -->

    <!--右侧登录框-->
    <div class="mo2-indexLoginbox" id="right-fix">
        <!-- 登录注册start -->
        <div class="mo2-indLogreg" >				<div class="mo2-indLogtab">
                <ul>
                    <li class="mo2-logTab-unsel mo2-indTab-reg">
                        <span>注册</span><b></b>
                    </li>
                    <li class="mo2-logTab-sel mo2-indTab-log">
                        <span>登录</span><b></b>
                    </li>
                </ul>
            </div>
            <!-- 注册start -->
            <div class="mo2-indRegboxRight" style="display:none;">
                <div class="mo2-indLogitem" style="margin-bottom:6px;">
                    <i class="mo2-indLogicon-tel"></i><input class="mo2-indIpt-all" id="regTelRight" maxlength="11" type="text" placeholder="输入手机号码"><b class="mo2-indLogwarRight"><em class="mo2-indlogWar-arr"></em><u></u></b>
                </div>
                <div class="mo2-indLogitem" style="margin-bottom:6px;">
                    <i class="mo2-indLogicon-psw"></i><input class="mo2-indIpt-all m2-ind-banPsw" id="passRight" type="password" placeholder="6-20位数字与字母组合的密码"><b class="mo2-indLogwarRight"><em class="mo2-indlogWar-arr"></em><u></u></b>
                </div>
                <div class="mo2-indLogitem-step1">
                    <div class="mo2-indLogreg-step1">
                        <i class="mo2-indLogicon-code"></i><input class="mo2-indIptcod-step1" id="vcodeRight" type="text" placeholder="验证码">
                    </div>
                    <img class="mo2-indRegcode" src="home-register-VerifyCode.png" onClick="document.getElementById('reverifyCodeRight').src='home-register-VerifyCode.png?time='+Math.random();void(0);" id="reverifyCodeRight"  alt="点击刷新验证码">
                    <span class="mo2-indReg-refresh">看不清？换一张</span>
                    <b class="mo2-indLogwarRight"><em class="mo2-indlogWar-arr"></em><u></u></b>
                </div>
                <div class="mo2-indReg-btn" id="verifyregcode" onclick="verifycodeRight();" style="margin-top:8px;">
                    <a class="mo2-indRegbtn-able" href="#">立即注册</a>
                </div>
                <div class="mo2-indRegagree">
                    <i class="mo2-indReg-sel"></i><span>我已阅读并同意</span><b>《爱钱帮注册服务协议》</b>
                </div>
            </div>
            <!-- 注册end -->
            <!-- 注册step2 start -->
            <div class="mo2-indRegbox2Right"  style="display:none;" >
                <div class="mo2-indReg2-con">
                    <ul>
                        <li><i class="mo2-indRegicon-step1"></i><span>为了确保您手机可用，请填写您收到的手机动态码。</span></li>
                        <li><i class="mo2-indRegicon-step2"></i><span>如收不到短信验证码，可点击下面的获取语音验证码。</span></li>
                    </ul>
                </div>
                <div class="mo2-indLogitem">
                    <i class="mo2-indLogicon-code"></i><input class="mo2-indIpt-half" id="codeRight" type="text" placeholder="验证码">
                    <span class="mo2-indRegtim mo2-regTin-able"><u>60秒后</u><span>获取手机验证码</span></span>
                    <b class="mo2-indLogwarRight" style="width:200px;"><em class="mo2-indlogWar-arr"></em><u>错误提示信息</u></b>
                </div>
                <div class="mo2-indRegvoice">
                    <span class="mo2-indRegvoi-btn mo2-indRegvoi-able"><i></i>获取语音验证码</span>
                </div>
                <div class="mo2-indReg-btn" onclick="registerRight();" id="verifyregphone"  style="margin-top:8px;">
                    <a class="mo2-indRegbtn-able"  href="#">立即注册</a>
                </div>
            </div>
            <!-- 注册step2 end -->

            <!-- 登录start -->
            <div class="mo2-indLogboxRight">
                <div class="mo2-indLogitem mo2-indLogitem-use" style="margin-bottom:9px;">
                    <i class="mo2-indLogicon-use"></i><input class="mo2-indIpt-all" type="text" id="user_nameRight" placeholder="用户名/手机号">
                    <b class="mo2-indLogwar" id="w_username"><em class="mo2-indlogWar-arr"></em><u id="r_usernameRight"></u></b>
                </div>
                <div class="mo2-indLogitem mo2-indLogitem-psw" style="margin-bottom:9px;">
                    <i class="mo2-indLogicon-psw"></i><input class="mo2-indIpt-all m2-ind-banPsw" maxlength="20" id="pass_wordRight" type="password" id="pass_wordRight" placeholder="输入登录密码">
                    <b class="mo2-indLogwar" id="w_password"><em class="mo2-indlogWar-arr"></em><u id="r_passwordRight"></u></b>
                </div>
                <div class="mo2-indLog-code" style="display:none;margin-bottom:8px;">
                    <div class="mo2-indLogcod-lef">
                        <i class="mo2-indLogicon-psw"></i>
                        <input type="text" id="vcodeRight" placeholder="验证码"></div>
                    <div class="mo2-indLogcod-rig"><img src="Index-VerifyCode.png" onClick="document.getElementById('reverifyCode').src='Index-VerifyCode.png?time='+Math.random();void(0);" alt="点击刷新验证码"></div>
                </div>
                <div class="mo2-indLog-forget"><a href="forget.html">忘记密码?</a></div>
                <div style="padding-left: 24px;line-height: 30px;color:red;" id="error-hint"></div>
                <div class="mo2-indReg-btn">
                    <a class="mo2-indRegbtn-able" onclick="loginRight();">登录</a>
                </div>
            </div>
            <!-- 登录end -->
        </div>
        <!-- 登录注册end -->
    </div>
    <!-- 右侧登录窗口 -->
    <!--add by zml start-->
    <!--<div id="fixbar" style="width:50px;position:fixed;top:0;right:0px;background:#ff6666;z-index:5;"></div>-->

    <!--右侧悬浮条-->
    <div id="fixbar">
        <!-- 右侧边栏顶部 -->
        <!--右侧上边栏start -->
        <div class="m2-commonRight2"  id="m2-commonRight">
            <ul class="m2-comRiglist myclick">
                <li class="m2-comRigli m2-comRigli-ewm m2-comRigli_new" style="border-top:1px solid #fff;" data="#fixnavbar_one">
                    <div></div>
                    <img src="statics/home2/images/fixed-r1.png" alt="我的账户">
                    <div class="toAbs">
                        <div><img src="statics/home2/images/fixedl-1_v2.png" alt="我的账户"></div>
                        <div></div>
                    </div>
                </li>
                <li class="m2-comRigli m2-comRigli-tel m2-comRigli_new" data="#fixnavbar_two">
                    <img src="statics/home2/images/fixed-r2.png" alt="我的红包">
                    <div></div>            	<div class="toAbs">
                        <div><img src="statics/home2/images/fixedl-2_v2.png" alt="我的红包"></div>
                        <div></div>
                    </div>
                </li>
                <li class="m2-comRigli m2-comRigli-qq m2-comRigli_new" data="#fixnavbar_three">
                    <img src="statics/home2/images/fixed-r3.png" alt="我的加息券">
                    <div></div>            	<div class="toAbs">
                        <div><img src="statics/home2/images/fixedl-3_v2.png" alt="我的加息券"></div>
                        <div></div>
                    </div>
                </li>
                <li class="m2-comRigli m2-comRigli-sug m2-comRigli_new" data="#fixnavbar_four">
                    <img src="statics/home2/images/fixed-r4.png" alt="站内信息">
                    <div></div>            	<div class="toAbs">
                        <div><img src="statics/home2/images/fixedl-4_v2.png" alt="站内信息"></div>
                        <div></div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 右边侧栏顶部右边弹出 -->
        <div class="fixbox_bar">
            <div class="fixnavbar" id="fixnavbar_one">
                <div class="sumtop">
                    <div class="top" style="margin: 18px;text-align: center;font-size: 20px;position: relative;"><span style="position: absolute;top: 0;left:-18px">>></span>我的账户</div>
                    <div class="bottom">
                        <img src="statics/home2/images/user-head.png" alt="我的账户">
                        <div>
                            <p id ="right_name_info"></p>
                            <button id="right_recharge">充值</button>
                        </div>
                    </div>
                </div>
                <hr style="margin:0 10px;"/>
                <div class="summiddle">
                    <ul>
                        <li style="border-top-left-radius:10px;">
                            <p><span id="right_account_money"></span>元</p>
                            <span>可用资金</span>
                        </li>
                        <li style="border-top-right-radius:10px;">
                            <p><span id="right_reward_money"></span>元</p>
                            <span>可用奖励金</span>
                        </li>
                    </ul>
                    <div class="content">
                        <p>待收本金：<span id="right_total_capital"></span>元</p>
                        <p>待收收益：<span id="right_total_wait_interest"></span>元</p>
                    </div>
                    <p class="lastcontent">资产总计：<span id="right_total_asset"></span>元</p>
                    <ul style="margin-top:30px;">
                        <li style="border-top-left-radius:10px;border-bottom-left-radius:10px;">
                            <p><span id="right_today_earn"></span>元</p>
                            <span>今日赚取</span>
                        </li>
                        <li style="border-top-right-radius:10px;border-bottom-right-radius:10px;">
                            <p><span id="right_total_reward_normal_interest"></span>元</p>
                            <span>累计收益</span>
                        </li>
                    </ul>
                </div>
                <div class="sumbottom" id ="accountCommon_right">查看更多>></div>
            </div>

            <div class="fixnavbar common" id="fixnavbar_two">

            </div>

            <div class="fixnavbar common" id="fixnavbar_three">

            </div>

            <div class="fixnavbar" id="fixnavbar_four">

            </div>
        </div>

        <!-- 右侧边栏底部 -->
        <div class="m2-commonRight">
            <ul class="m2-comRiglist">
                <li class="m2-comRigli m2-comRigli-ewm"  style="border-top:1px solid #fff;">
                    <i class="m2-comRigli-icon"></i>
                    <span class="m2-comRigli-hov">关注<br>微信</span>
                    <div class="m2-comRighide m2-comRighide-ewm"><i></i></div>
                </li>
                <li class="m2-comRigli m2-comRigli-tel">
                    <i class="m2-comRigli-icon"></i>
                    <span class="m2-comRigli-hov">联系<br>我们</span>
                    <div class="m2-comRighide m2-comRighide-tel">
                        <div class="m2-comRighide-telSpace"></div>
                        <b class="m2-comRighide-telBorder"></b>
                        <div class="m2-comRigtel-lef">
                            <div class="m2-comRigtel-lefTop">
                                <input type="text" placeholder="请输入您的手机号"  id='phonenumber'>
                            </div>
                            <div class="m2-comRigtel-lefBot">
                                <input type="text" placeholder="验证码" id="ivrSecurityCode">
                                <img id="ivrSecurityCodeImg" onclick="getCode()" src="https://bj-out-2.ccic2.com/system!getLoginCodeForWebCall.action" alt="验证码" title="点击更新验证码">
                            </div>
                        </div>
                        <div class="m2-comRigtel-rig">
                            <span  onclick='callback()'>免费<br>拨打</span>
                        </div>
                    </div>
                </li>
                <li class="m2-comRigli m2-comRigli-qq" style="position:relative;">

                    <div id="BizQQWPA" style="width:50px;height:50px;position:absolute;top:0;left:0;z-index:150;">

                    </div>	                <i class="m2-comRigli-icon" style="z-index:100;"></i>
                    <span class="m2-comRigli-hov" style="z-index:100;">在线<br>客服</span>
                </li>
                <li class="m2-comRigli m2-comRigli-sug" style="border-bottom: 1px solid #fff;">
                    <i class="m2-comRigli-icon"></i>
                    <span class="m2-comRigli-hov"><a href="guide.html" style="color:#fff;">帮助<br>中心</a></span>
                </li>

                <li class="m2-comRigli m2-comRigli-top">
                    <i class="m2-comRigli-icon"></i>
                    <span class="m2-comRigli-hov">返回<br>顶部</span>
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        $(function(){
            $('#right_recharge').click(function(){
                window.location.href="#";
            });

            $(".fixbox_bar").click(function(event){
                event.stopPropagation();
            });
            $('#accountCommon_right').click(function(){
                window.location.href="usercenter.html";
            });
//			$('#redbagCommon_right').click(function(){
//				window.location.href="usercenter-rewardcontrol-redpacket.html";
//			});
//			$('#percentageCommon_right').click(function(){
//				window.location.href="usercenter-rewardcontrol-interestcoupon.html";
//			});
//			$('#messageCommon_right').click(function(){
//				window.location.href="usercenter-messagecontrol-sitemsg.html";
//			});
        })


    </script>


    <!--首页右侧提示悬浮窗、账户、红包、加息券 user_m_type -->
    <script type="text/javascript">
        $(".m2-comRigli").click(function(event){
            $('#right-fix').animate({ right: '50px'}, "slow");
            event.stopPropagation();
        });
        $("#right-fix").click(function(event){
            event.stopPropagation();
        });
        $("body").click(function(){
            $('#right-fix').animate({ right: '-290px'}, "slow");
        });
    </script>
    <script>
        //注册方法
        function verifycodeRight(){
            var canSubmit=true;
            $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").children("u").html('');
            if($("#vcodeRight").val().length==0){
                $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").children("u").html("验证码不能为空");
                $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").show();
                canSubmit = false;
            }
            if($("#passRight").val().length==0){
                $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").children("u").html("密码不能为空");
                $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").show();
                canSubmit = false;
            }
            if($("#regTelRight").val().length==0){
                $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").children("u").html("手机号不能为空");
                $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").show();
                canSubmit = false;
            }

            $(".mo2-indRegbox .mo2-indLogwarRight u").each(function(){
                if($(this).html().length>0){
                    canSubmit = false;
                }
            });
            if (canSubmit !== true) return false;
            var p={"vcode":$("#vcodeRight").val()};
            postData("/Home-Register-ckcode",p,function(d){
                if(d.message!=" "){
                    $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").children("u").html(d.message);
                    $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").show();
                    return false;
                }else{
                    $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").children("u").html('');
                    $("#reverifyCodeRight").siblings(".mo2-indLogwarRight").hide();
                    $('.mo2-indRegboxRight').css('display','none');
                    $('.mo2-indRegbox2Right').css('display','block');
                }

            });
        }
        //登录方法
        function loginRight(){
            var p = makevar(['user_nameRight','pass_wordRight','vcodeRight']);
            var canSubmit = true;
            if($('#user_nameRight').val()==""){
                $('#error-hint').html('用户名不能为空！');
            }else if($('#user_nameRight').val().lenght <6){
                $('#error-hint').html('用户名长度错误！');
            }else {
                if ($('#pass_wordRight').val() == ""){
                    $('#error-hint').html('密码不能为空！');
                }else if ($('#pass_wordRight').val().length < 6 || $('#pass_wordRight').val().length > 20){
                    $('#error-hint').html('密码长度错误！');
                }else {
                    $('#error-hint').html('');
                    postData("/Home-Login-index_loginRight",p,function(d){
                        if(d.status==0){
                            $('#error-hint').html(d.message);
                        }else if(d.status==1){
                            window.location.reload();
                        }else if(d.status==2){
                            window.location.href = "dashiji_show.html#15319.html";
                        }
                    });
                }
            }
        }
        $(document).keydown(function(event){
            var e = event || window.event || arguments.callee.caller.arguments[0];
            if(e && e.keyCode==13){
                loginRight();
            }
        });

        // 注册登录tab切换
        $('.mo2-indLogtab ul li').click(function(){
            if ($(this).hasClass('mo2-logTab-unsel')) {
                $(this).addClass('mo2-logTab-sel').removeClass('mo2-logTab-unsel');
                $(this).siblings('.mo2-logTab-sel').addClass('mo2-logTab-unsel').removeClass('mo2-logTab-sel');
            }
        });
        // 注册登录显示隐藏
        $('.mo2-indTab-reg').click(function(){
            $('.mo2-indRegboxRight').show();
            $('.mo2-indRegbox2Right').hide();
            $('.mo2-indLogboxRight').hide();
        });
        $('.mo2-indTab-log').click(function(){
            $('.mo2-indRegboxRight').hide();
            $('.mo2-indRegbox2Right').hide();
            $('.mo2-indLogboxRight').show();
        });

        //右侧悬浮框
        var aLi=$('.m2-comRigli_new');
        for(var i=0;i<aLi.length;i++){
            (function(index){
                aLi[index].onmouseover=function(){
                    var oDiv=aLi[index].children[2];
                    var aDiv=oDiv.children;
                    oDiv.style.display='block';
                    //if(flag==1){
                    var iNum=parseInt(aDiv[1].innerHTML);
                    if(iNum>=100){
                        aDiv[1].innerHTML='···';
                    }
                    //}			
                };
            })(i)
        }
        for(var i=0;i<aLi.length;i++){
            (function(index){
                aLi[index].onmouseout=function(){
                    var oDiv=aLi[index].children[2];
                    var aDiv=oDiv.children;
                    oDiv.style.display='none';
                    //if(flag==1){
                    var iNum=parseInt(aDiv[1].innerHTML);
                    if(iNum>=100){
                        aDiv[1].innerHTML='···';
                    }
                    //}
                };
            })(i)
        }

    </script>


    <script type="text/javascript">
        $(function () {
            var wHei = $(window).height();

            $(document).scroll(function () {
                // 判断返回顶部是否显示
                visTop(wHei);
            });

            $('.m2-comRigli-top').click(function () {
                $('body,html').animate({scrollTop: 0}, 600);
                return false;
            });
        });

        function visTop(high) {

            if ($(document).scrollTop() > high + 100) {
                $('.m2-comRigli-top').css('visibility', 'visible');
            } else {
                $('.m2-comRigli-top').css('visibility', 'hidden');
            }
        }
    </script>
    <!-- 右侧边栏end -->


    <!-- headerStart -->
    <div class="m2-commonTop-con">
        <div class="m2-commonTop">
            <div class="m2-commonTop-left">
                <div class="m2-commonTop-tel"><i></i>4006&nbsp;-&nbsp;777&nbsp;-&nbsp;518</div>
                <div class="m2-commonTop-service" style="padding-left:0;"><span style="float:left;">客服：</span>
                    <div style="float:left;display:inline-block;width:92px;height:22px;padding:6px 0 13px 0;"></div>
                </div>
                <div class="m2-commonEwm">
                    <span class="m2-commonEwm-tit">关注我们：</span>
                    <div class="m2-commonEwmwx">
                        <i class="m2-commonEwmicon"></i>
                        <div class="m2-commonEwmhid">
                            <em class="m2-commonEwmhid-arr"></em>
                            <em class="m2-commonEwmhid-arrBg"></em>
                            <b></b>
                            <span>扫一扫<br>关注爱钱帮订阅号</span>
                        </div>
                    </div>
                    <div class="m2-commonEwmwb">
                        <i class="m2-commonEwmicon" onclick='window.open("http://weibo.com/iqianbang")'></i>
                    </div>
                </div>
            </div>
            <div class="m2-commonTop-right">
                <div class="m2-commonTop-link">
                    <ul>
                        <!-- 论坛导航栏全部关闭 -->
                        <!--<li class="m2-commonTop-btn" style="display: none" id="bbs"><a id="bbslogin" target="_blank">论坛</a></li>-->
                        <li class="m2-commonTop-btn"><a href="register.html" target="_blank">注册</a></li>
                        <li class="m2-commonTop-btn"><a href="login.html#login_callback=/touzi_licai_chanpin.html" target="_blank" style="border-right:none;">登录</a></li>
                        <li class="m2-commonTop-btn"><a href="company_finance.html" id="cfpage" style="border-right:none;width: 50px;">企业理财</a></li>                </ul>
                </div>
                <div class="m2-commonTop-app" onclick='window.open("/appdownload.html")' style="cursor:pointer;">
                    <a href="" class="m2-commonTop-and"></a>
                    <a href="" class="m2-commonTop-ios"></a>
                    <span>app下载入口</span>
                </div>
            </div>
        </div>
    </div>
    <!--  用户登陆后，（部分用户）导航栏显示论坛选项、现在全部关闭
    <script type="text/javascript">
        $(function () {
           $('#bbslogin').click(function(){
               var w = window.open(); 
                $.ajax({
                    type:"GET",
                    url :"/api-bbslogin",
                    success:function(msg){
                        var obj = eval('('+msg+')');
                        var obj = eval(obj);
                        if (obj.status == 1){
                            w.location = obj.message;
                        }
                    }
                });
           });
           var _uid = Number();
           var _all_uid = Array(5277,320,25893,77960,70760,4762,36256,59960,126250,75980,4039,68689,133118,185);
           function in_array(uid,array){
                for(var i in array){
                    if(array[i] == uid){
                        $("#bbs").attr("style","display:block");
                    }
                }
           }
           in_array(_uid,_all_uid);
        });
    </script>
    -->
    </div>
    <div class="m2-commonNav-con">
        <div class="m2-commonNav-box">
            <div class="m2-commonLogo">
                <a class="m2-comImg-logo" href="index.html">
                    <img src="statics/newcommon/images/m2-logo.png" title="爱钱帮投资理财平台logo" alt="爱钱帮标识">
                </a>
                <a class="m2-conImg-slogan" href="">
                    <img src="statics/newcommon/images/m2-sloganHS.png" title="徽商银行投资理财托管" alt="">
                </a>
            </div>
            <div class="m2-commonNav">
                <ul class="m2-commonNavul-fir" data_page='twopage'>
                    <!--  <li class="m2-commonNav-fir"><a href="http://huifu.iqianbang.com" target="_blank" >汇付版本</a></li>-->
                    <li class="m2-commonNav-fir"><a href="index.html" id="onepage">首页</a></li>
                    <li class="m2-commonNav-fir"><a href="touzi_licai_chanpin.html" id="twopage">我要投资</a></li>
                    <li class="m2-commonNav-fir"><a href="membermall.html" id="sevenpage">会员商城</a></li>
                    <li class="m2-commonNav-fir"><a href="usercenter.html" id="threepage">我的账户</a></li>
                    <li class="m2-commonNav-fir"><a href="anquanlicai_baozhang.html" id="fourpage">安全保障</a></li>
                    <li class="m2-commonNav-fir"><a href="guanyu_aiqianbang.html" id="fivepage">关于我们</a></li>
                    <!-- <li class="m2-commonNav-fir"><a href="guide.html">新手引导</a></li> -->
                    <li class="m2-commonNav-fir"><a href="licaiwang_zhuantihuodong.html" id="sixpage">活动专区</a></li>
                </ul>
            </div>
        </div>
    </div>
    </header>

    <style>
        .vIVR{display:none}
    </style>
    <script>

        var page=$(".m2-commonNavul-fir").attr("data_page");
        $("#"+page).parent().css("borderBottom","2px solid #ff6666");
        var queuename = '30017180006';
        function callback() {
            $('#tel').val($('#phonenumber').val());
            call();
        }
        setCallResponse = function (json) {
            var obj = eval('(' + json + ')');
            if (obj['description']) {
                $('#callBack-codeErr').css('display', 'block');
                $('#ivrSecurityCode').val('');
                getCode();
                setTimeout(function () {
                    $('#callBack-codeErr').css('display', 'none');
                }, 3000);
            }
        }
    </script>
    <!-- headerEnd -->
    <div class="m2-investBanner"></div>
    <div class="m2-investBread">
        <div class="m2-investBreadbox">
            <i class="m2-investBreadicon"></i>
            <span class="m2-invBre-fat"><a href="index.html">首页&nbsp;&gt;</a></span>
            <span class="m2-invBre-fat"><a href="touzi_licai_chanpin.html">我要投资&nbsp;&gt;</a></span>
            <a class="m2-invBre-cur" href="touzi_licai_chanpin.html">项目直投</a>
        </div>
    </div>
    <div class="m2-invTable-con">
        <ul class="m2-invTablelist"><!-- 只能显示7个，其余隐藏 -->
            <li class="m2-invTab-sel"><span onclick="window.location.href='/touzi_licai_chanpin.html'">项目直投</span><i></i></li>
            <li class="m2-invTab-unsel"><span onclick="window.location.href='/wangshang_licai_chanpin.html'">债权转让</span><i></i></li>
            <li class="m2-invTab-unsel"><span onclick="window.location.href='/duanqi_licai_chanpin.html'">爱车贷</span><i></i></li>
            <li class="m2-invTab-unsel"><span onclick="window.location.href='/aifangdai_licai_chanpin.html'">爱房贷</span><i></i></li>
            <!--		<li class="m2-invTab-unsel"><span onclick="window.location.href='/yulebang_licai_chanpin.html'">娱乐帮</span><i></i></li>-->
            <li class="m2-invTab-unsel"><span onclick="window.location.href='/consumer_finance_chanpin.html'">消费金融</span><i></i></li>
            <!--		<li class="m2-invTab-unsel"><span onclick="window.location.href='/haixiangbang_licai_chanpin.html'">海鲜帮</span><i></i></li>-->
            <li class="m2-invTab-unsel"><span onclick="window.location.href='/aigongyi_licai_chanpin.html'">爱公益</span><i></i></li>


        </ul>
    </div>
    <div class="m2-invSearch">
        <div class="m2-invSearch-con">
            <!--		<h3>项目筛选</h3>-->
            <i class="m2-invSea-arrUp"></i>
        </div>
        <div class="m2-invSearchbox" style="display: none;">
            <ul class="m2-invSea-ben" id="search_borrow_interest_rate">
                <li class="m2-invSea-tit"><span>收&nbsp;&nbsp;益&nbsp;&nbsp;率</span></li>
                <li data="0" class="m2-invSea-sel m2-invSea-all"><span onclick="searchBorrow('borrow_interest_rate',0)">全部</span></li>
                <li data="0|8" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_interest_rate','0|8')">8%及以下</span></li>
                <li data="9|9" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_interest_rate','9|9')">9%</span></li>
                <li data="10|10" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_interest_rate','10|10')">10%</span></li>
                <li data="10.1|100" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_interest_rate','10.1|100')">其他</span></li>
            </ul>
            <ul class="m2-invSea-tim" id="search_leftday">
                <li class="m2-invSea-tit"><span>时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;限</span></li>
                <li data="0" class="m2-invSea-sel m2-invSea-all"><span onclick="searchBorrow('leftday',0)">全部</span></li>
                <li data="0|60" class="m2-invSea-unsel"><span onclick="searchBorrow('leftday','0|60')">60天及以下</span></li>
                <li data="61|180" class="m2-invSea-unsel"><span onclick="searchBorrow('leftday','61|180')">61天-180天</span></li>
                <li data="181|360" class="m2-invSea-unsel"><span onclick="searchBorrow('leftday','181|360')">181天-360天</span></li>
                <li data="361|3600" class="m2-invSea-unsel"><span onclick="searchBorrow('leftday','361|3600')">其他</span></li>
            </ul><!--
		<ul class="m2-invSea-sum" id="search_borrow_money">
			<li class="m2-invSea-tit"><span>金&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;额</span></li>
			<li data="0" class="m2-invSea-sel m2-invSea-all"><span onclick="searchBorrow('borrow_money',0)">全部</span></li>
			<li data="0|500000" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_money','0|500000')">50万以下</span></li>
			<li data="500001|1000000" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_money','500001|1000000')">50万-100万</span></li>
			<li data="1000001|2000000" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_money','1000001|2000000')">100万-200万</span></li>
			
		</ul>
		--><ul class="m2-invSea-pro" id="search_progress">
                <li class="m2-invSea-tit"><span>进&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;度</span></li>
                <li data="0" class="m2-invSea-sel m2-invSea-all"><span onclick="searchBorrow('progress',0)">全部</span></li>
                <li data="0|30" class="m2-invSea-unsel"><span onclick="searchBorrow('progress','0|30')">30%以下</span></li>
                <li data="31.01|60" class="m2-invSea-unsel"><span onclick="searchBorrow('progress','30.01|60')">30%-60%</span></li>
                <li  data="61.01|100" class="m2-invSea-unsel"><span onclick="searchBorrow('progress','60.01|100')">60%-100%</span></li>

            </ul>
            <ul class="m2-invSea-sta" id="search_borrow_status">
                <li class="m2-invSea-tit"><span>项目状态</span></li>
                <li data="0" class="m2-invSea-sel m2-invSea-all"><span onclick="searchBorrow('borrow_status','0')">全部</span></li>
                <li data="2" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_status','2')">正在募集</span></li>
                <li data="6" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_status','6')">还款中</span></li>
                <li data="7" class="m2-invSea-unsel"><span onclick="searchBorrow('borrow_status','7')">已结清</span></li>
            </ul>
            <div class="m2-invSeadisply">
                <span style="margin-left:10px;">筛选条件</span>
                <b class="m2-invDis-ben" onclick="searchBorrow('borrow_interest_rate',0)">全部<i></i></b>
                <b class="m2-invDis-tim" onclick="searchBorrow('leftday',0)">全部<i></i></b>
                <b class="m2-invDis-sum" onclick="searchBorrow('borrow_money',0)">全部<i></i></b>
                <b class="m2-invDis-pro" onclick="searchBorrow('progress',0)">全部<i></i></b>
                <b class="m2-invDis-sta" onclick="searchBorrow('borrow_status',0)">全部<i></i></b>
                <u onclick="searchBorrow('borrow_interest_rate',0)&searchBorrow('leftday',0)&searchBorrow('borrow_money',0)&searchBorrow('progress',0)&searchBorrow('borrow_status',0)"><i></i>重置</u>
            </div>
        </div>
    </div>
    <div class="m2-invResult-con">
        <div class="m2-invResult-head">
            <h3><i></i>项目筛选列表</h3>
        </div>
        <div style="width:100%; height:100%; position:fixed; z-index:100;top:0; left:0;display:none;" id="allP" >
            <div style="width:100%; height:100%; position:absolute; top:0; left:0; background:#000; opacity:0.5;"></div>
            <div style="width:404px; height:154px; background:#fff; position:absolute; top:50%; left:50%; margin-left:-252px; margin-top:-100px; border:2px solid #666;">
                <p style="color: #666666;font-size: 16px;absolute;line-height:170px;text-align: center; font-family: Microsoft YaHei;;">该项目已还清，为保护企业隐私，不再公示项目信息</p>
                <div style="width: 30px;height: 30px;position: absolute;top: 11px;right: 0px;color: #666;font-size: 20px;cursor: pointer;" id="close">X</div>
            </div>

        </div>
        <div class="m2-invResuleitem-box">
            <ul>
                <li class="m2-invResuleitem">
                    <div class="m2-invItem-lef">
                        <div class="m2-invItemleft-lef">
                            <i class="m2-invItem-new"></i>
                            <img src="uploadData/UserBorrowData/182015-20160902132425642.jpg" alt="爱车贷-雪佛兰迈锐宝-XAA067" />
                        </div>
                        <div class="m2-invItemleft-rig">
                            <h4>
                                <i class="m2-invItemIcon-inv"></i>														    <a href="chanpin.html#-moxOeTwTZaOw8TY79g.html" target="_blank" title="爱车贷-雪佛兰迈锐宝-XAA067">爱车贷-雪佛兰迈锐宝-XAA067</a>						</h4>
                            <ul class="m2-invItemleft-list">
                                <li>
								<span  class="m2-invItemdet-big huodongjiaxi">
																														8%+1% 										
										<p style="margin-left:-2px;" class="jiaxishow">
                                            活动加息1%																				</p>								</span>
                                    <span class="m2-invItemdet-nor">预期年化收益率</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
								<span class="m2-invItemdet-big">
																				26天																	</span>
                                    <span class="m2-invItemdet-nor">期限</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
                                    <span class="m2-invItemdet-big">86,200.00</span>
                                    <span class="m2-invItemdet-nor">融资金额</span>
                                </li>
                            </ul>
                            <div class="m2-invItemprogress">
							<span class="m2-invItemprogress-tit">
																	正在募集							</span>
                                <b>
                                    <i style="width:42.11% "></i>
                                    <u style="left:42.11%">可投：4.99万</u>							</b>
                                <span class="m2-invItemprogress-per">42.11%</span>
                            </div>
                        </div>
                    </div>
                    <div class="m2-invItem-rig">
                        <div class="m2-invItemrig-main">
                            <p class="m2-invItemrig-gua">
                                <span class="m2-invItemrig-guaTit" style="color:#333;">担保措施:</span>
                                <span class="m2-invItemrig-guaDet" style="color:#ff9900;">车辆质押</span>						</p>
                            <div class="m2-invItemrig-link">
                                <a href="chanpin.html#-moxOeTwTZaOw8TY79g.html" class="m2-invItemlink-inv" target="_blank" title="点击立即投资 爱车贷-雪佛兰迈锐宝-XAA067">立即投资</a>						</div>
                        </div>
                        <p class="m2-invItem-det" style="text-indent:20px;">投资万元预期收益：<span>64.10元</span></p>
                        <p class="m2-invItem-det">投资起点金额：<span style="color:#ff6666;">100元</span></p>				</div>
                </li><li class="m2-invResuleitem">
                    <div class="m2-invItem-lef">
                        <div class="m2-invItemleft-lef">
                            <i class="m2-invItem-hot"></i>						<img src="uploadData/UserBorrowData/200528-201609011135068334.jpg" alt="【新手标】爱车贷-丰田普瑞维亚-SX047" />
                        </div>
                        <div class="m2-invItemleft-rig">
                            <h4>
                                <i class="m2-invItemIcon-inv"></i>														    <a href="chanpin.html#-md0YeDEUbvew8TU68g.html" target="_blank" title="【新手标】爱车贷-丰田普瑞维亚-SX047">【新手标】爱车贷-丰田普瑞维亚-SX047</a>						</h4>
                            <ul class="m2-invItemleft-list">
                                <li>
								<span  class="m2-invItemdet-big huodongjiaxi">
																														9%+1% 										
										<p style="margin-left:-2px;" class="jiaxishow">
                                            活动加息1%																				</p>								</span>
                                    <span class="m2-invItemdet-nor">预期年化收益率</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
								<span class="m2-invItemdet-big">
																				53天																	</span>
                                    <span class="m2-invItemdet-nor">期限</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
                                    <span class="m2-invItemdet-big">230,000.00</span>
                                    <span class="m2-invItemdet-nor">融资金额</span>
                                </li>
                            </ul>
                            <div class="m2-invItemprogress">
							<span class="m2-invItemprogress-tit">
																	正在募集							</span>
                                <b>
                                    <i style="width:99.91% "></i>
                                    <u style="left:99.91%">可投：200元</u>							</b>
                                <span class="m2-invItemprogress-per">99.91%</span>
                            </div>
                        </div>
                    </div>
                    <div class="m2-invItem-rig">
                        <div class="m2-invItemrig-main">
                            <p class="m2-invItemrig-gua">
                                <span class="m2-invItemrig-guaTit" style="color:#333;">担保措施:</span>
                                <span class="m2-invItemrig-guaDet" style="color:#ff9900;">车辆质押</span>						</p>
                            <div class="m2-invItemrig-link">
                                <a href="chanpin.html#-md0YeDEUbvew8TU68g.html" class="m2-invItemlink-inv" target="_blank" title="点击立即投资 【新手标】爱车贷-丰田普瑞维亚-SX047">立即投资</a>						</div>
                        </div>
                        <p class="m2-invItem-det" style="text-indent:20px;">投资万元预期收益：<span>145.2元</span></p>
                        <p class="m2-invItem-det">投资起点金额：<span style="color:#ff6666;">100元</span></p>				</div>
                </li><li class="m2-invResuleitem">
                    <div class="m2-invItem-lef">
                        <div class="m2-invItemleft-lef">
                            <img src="uploadData/UserBorrowData/200528-201609031224409479.jpg" alt="爱车贷-尼桑天籁-SX119" />
                        </div>
                        <div class="m2-invItemleft-rig">
                            <h4>
                                <i class="m2-invItemIcon-back"></i>
                                <a href="chanpin.html#-md0fJWlJZPew8TY+8A.html" target="_blank" title="爱车贷-尼桑天籁-SX119">爱车贷-尼桑天籁-SX119</a>						</h4>
                            <ul class="m2-invItemleft-list">
                                <li>
								<span  class="m2-invItemdet-big huodongjiaxi">
																														9%+1% 										
										<p style="margin-left:-2px;" class="jiaxishow">
                                            活动加息1%																				</p>								</span>
                                    <span class="m2-invItemdet-nor">预期年化收益率</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
								<span class="m2-invItemdet-big">
																			2个月								</span>
                                    <span class="m2-invItemdet-nor">期限</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
                                    <span class="m2-invItemdet-big">40,000.00</span>
                                    <span class="m2-invItemdet-nor">融资金额</span>
                                </li>
                            </ul>
                            <div class="m2-invItemprogress">
							<span class="m2-invItemprogress-tit">
								还款中
															</span>
                                <b>
                                    <i style="width:100.00% "></i>
                                </b>
                                <span class="m2-invItemprogress-per">100.00%</span>
                            </div>
                        </div>
                    </div>
                    <div class="m2-invItem-rig">
                        <div class="m2-invItemrig-main">
                            <p class="m2-invItemrig-gua">
                                <span class="m2-invItemrig-guaTit" style="color:#333;">担保措施:</span>
                                <span class="m2-invItemrig-guaDet" style="color:#ff9900;">车辆质押</span>						</p>
                            <div class="m2-invItemrig-link">
                                <a href="chanpin.html#-md0fJWlJZPew8TY+8A.html" class="m2-invItemlink-back" target="_blank" title="点击还款中查看 爱车贷-尼桑天籁-SX119">还款中</a>
                            </div>
                        </div>
                        <div class="m2-invItem-rigBg"></div>
                    </div>
                </li><li class="m2-invResuleitem">
                    <div class="m2-invItem-lef">
                        <div class="m2-invItemleft-lef">
                            <img src="uploadData/UserBorrowData/199076-201609031612075569.jpg" alt="爱车贷-风行景逸-XT125" />
                        </div>
                        <div class="m2-invItemleft-rig">
                            <h4>
                                <i class="m2-invItemIcon-back"></i>
                                <a href="chanpin.html#-mNtPLjgTY!Gw8TY++A.html" target="_blank" title="爱车贷-风行景逸-XT125">爱车贷-风行景逸-XT125</a>						</h4>
                            <ul class="m2-invItemleft-list">
                                <li>
								<span  class="m2-invItemdet-big huodongjiaxi">
																														8%+1% 										
										<p style="margin-left:-2px;" class="jiaxishow">
                                            活动加息1%																				</p>								</span>
                                    <span class="m2-invItemdet-nor">预期年化收益率</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
								<span class="m2-invItemdet-big">
																			1个月								</span>
                                    <span class="m2-invItemdet-nor">期限</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
                                    <span class="m2-invItemdet-big">20,000.00</span>
                                    <span class="m2-invItemdet-nor">融资金额</span>
                                </li>
                            </ul>
                            <div class="m2-invItemprogress">
							<span class="m2-invItemprogress-tit">
								还款中
															</span>
                                <b>
                                    <i style="width:100.00% "></i>
                                </b>
                                <span class="m2-invItemprogress-per">100.00%</span>
                            </div>
                        </div>
                    </div>
                    <div class="m2-invItem-rig">
                        <div class="m2-invItemrig-main">
                            <p class="m2-invItemrig-gua">
                                <span class="m2-invItemrig-guaTit" style="color:#333;">担保措施:</span>
                                <span class="m2-invItemrig-guaDet" style="color:#ff9900;">车辆质押</span>						</p>
                            <div class="m2-invItemrig-link">
                                <a href="chanpin.html#-mNtPLjgTY!Gw8TY++A.html" class="m2-invItemlink-back" target="_blank" title="点击还款中查看 爱车贷-风行景逸-XT125">还款中</a>
                            </div>
                        </div>
                        <div class="m2-invItem-rigBg"></div>
                    </div>
                </li><li class="m2-invResuleitem">
                    <div class="m2-invItem-lef">
                        <div class="m2-invItemleft-lef">
                            <img src="uploadData/UserBorrowData/208071-201609031345456731.jpg" alt="爱车贷-本田艾力绅-HCK120" />
                        </div>
                        <div class="m2-invItemleft-rig">
                            <h4>
                                <i class="m2-invItemIcon-back"></i>
                                <a href="chanpin.html#-nNtKLzlGY!Gw8TY+8g.html" target="_blank" title="爱车贷-本田艾力绅-HCK120">爱车贷-本田艾力绅-HCK120</a>						</h4>
                            <ul class="m2-invItemleft-list">
                                <li>
								<span  class="m2-invItemdet-big huodongjiaxi">
																														9%+1% 										
										<p style="margin-left:-2px;" class="jiaxishow">
                                            活动加息1%																				</p>								</span>
                                    <span class="m2-invItemdet-nor">预期年化收益率</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
								<span class="m2-invItemdet-big">
																			2个月								</span>
                                    <span class="m2-invItemdet-nor">期限</span>
                                    <i class="m2-invItemdet-line"></i>
                                </li>
                                <li>
                                    <span class="m2-invItemdet-big">210,000.00</span>
                                    <span class="m2-invItemdet-nor">融资金额</span>
                                </li>
                            </ul>
                            <div class="m2-invItemprogress">
							<span class="m2-invItemprogress-tit">
								还款中
															</span>
                                <b>
                                    <i style="width:100.00% "></i>
                                </b>
                                <span class="m2-invItemprogress-per">100.00%</span>
                            </div>
                        </div>
                    </div>
                    <div class="m2-invItem-rig">
                        <div class="m2-invItemrig-main">
                            <p class="m2-invItemrig-gua">
                                <span class="m2-invItemrig-guaTit" style="color:#333;">担保措施:</span>
                                <span class="m2-invItemrig-guaDet" style="color:#ff9900;">车辆质押</span>						</p>
                            <div class="m2-invItemrig-link">
                                <a href="chanpin.html#-nNtKLzlGY!Gw8TY+8g.html" class="m2-invItemlink-back" target="_blank" title="点击还款中查看 爱车贷-本田艾力绅-HCK120">还款中</a>
                            </div>
                        </div>
                        <div class="m2-invItem-rigBg"></div>
                    </div>
                </li>	</ul>
        </div>
        <div class="m2-newListpage-con" style="padding-top:5px;">
            <div class="m2-newListpage">
                <div class="m2-news-pages" style="padding-right:40px;margin:12px auto;">
                    <a href='/touzi_licai_chanpin.html?isAjax=1&type=borrow&page=1' class="m2-pages-num m2-page-prev">&lt;</a><a href='/touzi_licai_chanpin.html?isAjax=1&type=borrow&page=1' class="m2-pages-num m2-page-sel">1</a><a href='/touzi_licai_chanpin.html?isAjax=1&type=borrow&page=2' class="m2-pages-num m2-page-unsel">2</a><a href='/touzi_licai_chanpin.html?isAjax=1&type=borrow&page=3' class="m2-pages-num m2-page-unsel">3</a><a href='/touzi_licai_chanpin.html?isAjax=1&type=borrow&page=4' class="m2-pages-num m2-page-unsel">4</a><a href='/touzi_licai_chanpin.html?isAjax=1&type=borrow&page=5' class="m2-pages-num m2-page-unsel">5</a><a href='/touzi_licai_chanpin.html?isAjax=1&type=borrow&page=2' class="m2-pages-num m2-page-next">&gt;</a>		</div>
            </div>
        </div>
        <script type="text/javascript">
            var oP=document.getElementById('allP');
            var oClose=document.getElementById('close');
            //oP.style.display='none';
            oClose.onclick=function(){
                oP.style.display='none';
            };
            /**
             * 已结束的项目不允许查看合同
             */
            function linkContract(that){
                oP.style.display='block';
            }

            $(".huodongjiaxi").mouseover(function(){
                $(this).find(".jiaxishow").show();
            })
            $(".huodongjiaxi").mouseout(function(){
                $(this).find(".jiaxishow").hide();
            })
        </script>


    </div>

    <script type="text/javascript">
        //分页
        $(document).on('click','.m2-news-pages a',function(){
            $.ajax({
                type: "GET",
                url: $(this).attr('href'),
                success: function(d) {
                    $(".m2-invResult-con").html(d);
                }
            });
            return false;
        })
        $(function(){
            $('.m2-invTablelist li').click(function(){
                if ($(this).hasClass('m2-invTab-unsel')) {
                    $(this).addClass('m2-invTab-sel').removeClass('m2-invTab-unsel');
                    $(this).siblings('.m2-invTab-sel').addClass('m2-invTab-unsel').removeClass('m2-invTab-sel');
                    //$('.m2-invSearch-con h3').html($(this).children('span').html()); //改变下方H3的值
                }
            });
            $('.m2-invTabhide-list li').click(function(){
                var newCon = $(this).html();
                var oldCon = $('.m2-invTab-old span').html();
                $('.m2-invTab-old span').html(newCon); //改变最后一个LI
                $(this).html(oldCon);
                $('.m2-invTab-old').addClass('m2-invTab-sel').removeClass('m2-invTab-unsel');
                $('.m2-invTab-old').siblings('.m2-invTab-sel').addClass('m2-invTab-unsel').removeClass('m2-invTab-sel');
            })

            var disIndex =0; //li的index值
            //搜索条件点击事件
            $('.m2-invSearchbox ul li span').click(function(){
                if ($(this).parent().hasClass('m2-invSea-unsel')) {
                    var disCon =$(this).html();
                    disIndex =$(this).parent().parent().index();
                    $(this).parent().addClass('m2-invSea-sel').removeClass('m2-invSea-unsel');
                    $(this).parent().siblings('.m2-invSea-sel').addClass('m2-invSea-unsel').removeClass('m2-invSea-sel');
                    $('.m2-invSeadisply b').eq(disIndex).show();
                    $('.m2-invSeadisply b').eq(disIndex).html(disCon+"<i></i>");
                    closeDis();

                }
            });

            //点击全部事件
            $('.m2-invSea-all span').click(function(){
                disIndex=$(this).parent().parent().index();
                $('.m2-invSeadisply b').eq(disIndex).hide();
            });

            //重置按钮 
            $('.m2-invSeadisply u').click(function(){
                $(this).siblings('b').hide();
                $('.m2-invSea-sel').addClass('m2-invSea-unsel').removeClass('m2-invSea-sel');
                $('.m2-invSea-all').addClass('m2-invSea-sel').removeClass('m2-invSea-unsel');
            });
            closeDis();

            //列表关闭按钮
            function closeDis(){
                $('.m2-invSeadisply b i').click(function(){
                    disIndex = $(this).parent().index()-1;
                    $(this).parent().hide();
                    $('.m2-invSearchbox ul').eq(disIndex).children('.m2-invSea-all').addClass('m2-invSea-sel').removeClass('m2-invSea-unsel');
                    $('.m2-invSearchbox ul').eq(disIndex).children('.m2-invSea-all').siblings('.m2-invSea-sel').addClass('m2-invSea-unsel').removeClass('m2-invSea-sel');
                });
            }

            //筛选收起展开
            $('.m2-invSearch-con i').click(function(){
                $(this).toggleClass('m2-invSea-arrDown m2-invSea-arrUp');
                $('.m2-invSearchbox').toggle();
            });
        });
    </script>
    <script type="text/javascript">
        //倒计时
        var start_time;
        var intDiff = parseInt(start_time);

        function timeDown(intDiff){
            window.setInterval(function() {
                if (intDiff > 0) {
                    $("#time").css('display', 'block');
                    day = Math.floor(intDiff / (60 * 60 * 24));
                    hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
                    minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
                    second = Math.floor(intDiff) - (day * 24 * 60 * 60)
                        - (hour * 60 * 60) - (minute * 60);
                }
                else {
                    $("#time").css('display', 'none');
                    return false;
                }
                if (minute <= 9)
                    minute = '0' + minute;
                if (second <= 9)
                    second = '0' + second;
                $('.m2-invDay').html('<i>'+day+'</i>天&nbsp;');
                $('.m2-invHou').html('<i>'+hour+'</i>时&nbsp;');
                $('.m2-invMin').html('<i>'+minute+'</i>分&nbsp;');
                $('.m2-invSec').html('<i>'+second+'</i>秒&nbsp;');
                intDiff--;
                if (intDiff > 86400) {
                    $('.m2-invSec').css('display', 'none');
                }
                if (intDiff < 86400) {
                    $('.m2-invDay').css('display', 'none');
                }
                if (intDiff == 0) {
                    window.location.reload();
                }
            }, 1000);
        }
        timeDown(intDiff);
    </script>
    <script type="text/javascript">
        function searchBorrow(stype,value){
            $("#search_"+stype+" li[data='"+value+"']").addClass("aprhover").siblings('li').removeClass('aprhover');
            var p=getCurrentFilter();
            getBorrowList(p);
        }

        function getBorrowList(p){
            p['isAjax']=2;
            getData("Project-index",function(d){
                if(d.status==1){
                    $(".m2-invResult-con").html(d.message);
                }
            },p);
        }

        function getCurrentFilter(){
            var p={ };
            p['progress'] = $("#search_progress li.aprhover").attr('data');
            p['borrow_interest_rate'] = $("#search_borrow_interest_rate li.aprhover").attr('data');
            p['borrow_money'] = $("#search_borrow_money li.aprhover").attr('data');
            p['borrow_status'] = $("#search_borrow_status li.aprhover").attr('data');
            p['leftday'] = $("#search_leftday li.aprhover").attr('data');
            return p;
        }
    </script>
    <div id="mainNewfoot" >
        <div class="mainNewfocus" style ="width:740px;">
            <div class="mainNewblog">
                <ul>
                    <li class="joinWb"><span></span><p>官方微博</p></li>
                    <li class="joinWx"><span></span><p>官方微信</p></li>
                </ul>
            </div>
            <div class="mainNewcopy">
                <div class="mainNewserve">
                    <h3>客服电话:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">投资有风险，请谨慎投资</span></h3>
                    <h3>4006-777-518&nbsp;&nbsp;&nbsp;http://www.iqianbang.com</h3>
                    <ul>
                        <li><a href="/invest">我要投资</a></li>
                        <li><a href="guide.html">帮助中心</a></li>
                        <li><a href="guanyu_aiqianbang.html">关于我们</a></li>
                        <li><a href="/licai_gonggao">新闻公告</a></li>
                    </ul>
                </div>
                <div class="mainNewown">
                    <p>页面版权所有：北京爱钱帮财富科技有限公司&nbsp;&nbsp;京ICP证150216号</p>
                    <!--							<p>推荐使用IE7以上版本&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;法律顾问：<a href="http://www.iqianbang.com/ihzhb-527.shtml" target="_blank" style="color:#a4a3a3">国浩律师事务所</a></p>-->
                    <p>推荐使用IE7以上版本&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;法律顾问：国浩律师事务所（grandall.com.cn）</p>
                </div>
                <div class="mainNewsafe">
                    <ul>
                        <li class="icon-norton"><a href="https://sealinfo.verisign.com/splash?form_file=fdf/splash.fdf&amp;dn=www.iqianbang.com&amp;lang=zh_cn" target='_blank'></a></li>
                        <!--<li class="icon-cx"><a href="https://search.szfw.org/cert/l/CX20140718008832008528" target="_blank"></a></li>
                        --><li class="icon-kx"><a href="https://ss.knet.cn/verifyseal.dll?sn=e14032111010847492vg0o000000&amp;ct=df&amp;a=1&amp;pa=0.8090716653969139" target="_blank"></a></li>
                        <!--								<li class="icon-360"><a href="http://webscan.360.cn/index/checkwebsite/url/www.iqianbang.com" target="_blank"></a></li>-->
                        <li class="icon-zhx"><a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1076572005" target="_blank"></a></li>
                        <li class="icon-icp"><a rel="nofollow"  href="/anquanlicai_icp.html" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--底部[end]-->
    <script type="text/javascript">
        //全局变量
        var GV = {
            DIMAUB: "",
            JS_ROOT: "statics/home/js/",
            TOKEN: "b8dcf7c99b769b87cd2829c74259b334_eecebeb36ec73ad415528e2026491124",
            THIS_URL:"Project-",
            TINVEST_URL:"/invest-shownewinvest.shtml"
        };
    </script>

    <script src="statics/common/js/common.js?20160520"></script>
    <link type="text/css" rel="stylesheet" href="statics/common/tipBox/colorbox-master/css/colorbox.css?20160520">
    <script src="statics/common/tipBox/layer-v1.5.1/layer/layer.js?20160520"></script>
    <script src="statics/common/tipBox/common.js?20160520"></script>
    <!--tipBOx-->
    <script language=JavaScript type="text/javascript" src="statics/home/js/tab.js?20160520"></script>
    <script type="text/javascript">$(function(){
            if ($.browser && $.browser.msie && ($.browser.version == "6.0") && !$.support.style) {
                $('#fixed-services').css('display','none');
            }
        })
    </script>
    </body>
</html>