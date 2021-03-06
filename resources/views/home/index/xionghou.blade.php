
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="keywords" content="互联网金融,投资理财,互联网投资理财">
    <meta name="description" content="爱钱帮从事的互联网金融，以资金托管 + 担保 + 独立风控的阳光P2B互联网投资理财新模式，为投资人提供12%—15%的优质投资项目，安全合规并且全面保护用户的资金安全。">
    <title>关于我们丨理财产品，为您赚钱的互联网金融理财投资平台-爱钱帮  </title>
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

    <!-- 右侧边栏start -->
    <!-- 右侧登录窗口 -->

    <!--右侧登录框-->
    <div class="mo2-indexLoginbox" id="right-fix">
        <!-- 登录注册start -->
        <div class="mo2-indLogreg" style="display: none">
            <div class="mo2-indLogtab">
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
                    <img class="mo2-indRegcode" src="home-register-VerifyCode.png" onClick="document.getElementById('reverifyCodeRight').src='home-register-VerifyCode.png'+Math.random();void(0);" id="reverifyCodeRight"  alt="点击刷新验证码">
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
                    <div class="mo2-indLogcod-rig"><img src="home-register-VerifyCode.png" onClick="document.getElementById('reverifyCode').src='home-register-VerifyCode.png?time='+Math.random();void(0);" alt="点击刷新验证码"></div>
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
                    <div class="num num1">
                        3                </div>
                    <div class="toAbs">
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
                                <img id="ivrSecurityCodeImg" onclick="getCode()" src="home-register-VerifyCode.png" alt="验证码" title="点击更新验证码">
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
        $(function(){
            $(".fixbox_bar").click(function(event){
                event.stopPropagation();
            });

            $("#fixbar .myclick li").click(function(event){
                var select=$(this).attr("data");
                $(".fixnavbar").css("display","none");
                $(select).css("display","block");
                $('#fixbar').animate({ right: '300'}, "slow");
                $("#fixbar .fixbox_bar").animate({ right: '-18'}, "slow");

                // 阻止事件冒泡
                event.stopPropagation();
                if(select=="#fixnavbar_one"){
                    $.ajax({
                        type:'POST',

                        url:"/Home-RightHomePage-account_right_new",
                        success:function(msg){
                            var obj = eval('('+msg+')');
                            $("#right_today_earn").text(obj.today_earn);
                            $("#right_total_capital").text(obj.total_capital);
                            $("#right_account_money").text(obj.account_money);
                            $("#right_reward_money").text(obj.reward_money);
                            $("#right_total_asset").text(obj.total_asset);
                            $("#right_total_wait_interest").text(obj.total_wait_interest);
                            $("#right_name_info").text(obj.real_name);
                            $("#right_total_reward_normal_interest").text(obj.total_reward_normal_interest);
                        }

                    });
                }else if(select=="#fixnavbar_two"){
                    $.ajax({
                        type: "POST",
                        url: '/Home-RightHomePage-hb_right_new',
                        success: function(data) {
                            $('#fixnavbar_two').empty();
                            $('#fixnavbar_two').append(data);
                        }
                    });
                }else if(select=="#fixnavbar_three"){
                    $.ajax({
                        type: "POST",
                        url: '/Home-RightHomePage-jxq_right_new',
                        success: function(data) {
                            $('#fixnavbar_three').empty();
                            $('#fixnavbar_three').append(data);
                        }
                    });
                }else if(select=="#fixnavbar_four"){
                    $.ajax({
                        type: "POST",
                        url: '/Home-RightHomePage-sitemsg_right_new',
                        success: function(data) {
                            $('#fixnavbar_four').empty();
                            $('#fixnavbar_four').append(data);
                        }
                    });
                }



            });
            // 点击页面其他地方框消失
            $("body").click(function(){
                $('#fixbar').animate({ right: '0'}, "slow");
                $("#fixbar .fixbox_bar").animate({ right: '-318'}, "slow");
            });

        })
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
                        <li class="m2-commonTop-loged">
                            <span class="m2-commonTop-userName"><a href="usercenter.html">您好，iqb13737301354</a></span>
                        </li>
                        <li class="m2-commonTop-btn"><a href="#" style="border-right:none;">退出</a></li>
                        <li class="m2-commonTop-btn"><a href="company_finance.html" id="cfpage" style="border-right:none;width: 50px;">企业理财</a></li>
                        </li>
                    </ul>
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
           var _uid = Number(305497);
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
                <ul class="m2-commonNavul-fir" data_page='fivepage'>
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
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>关于我们</title>
        <script type="text/javascript" src="statics/home2/js/jquery.roundabout.js"></script>
        <script type="text/javascript" src="statics/home2/js/jquery.easing.js"></script>
        <link rel="stylesheet" href="statics/home2/css/m2-main.css?20160520">
    </head>
<body style="background-color:#F0F0F0;">
<div class="m2-parBg"></div>
<div class="m2-parHidebox">
    <b class="m2-parHideclose"></b>
    <h2>我要转让</h2>
    <div class="m2-parHideimg">
        <img src="statics/home2/images/guarantee/m2-partnersImg1.png" alt="">
    </div>
    <div class="m2-parHidefoot">
        <span class="m2-parPagecurrent"></span>&frasl;<span class="m2-parPagetotal"></span>
        <i class="m2-parPageprev"></i><i class="m2-parPagenext"></i>
    </div>
</div>

<link rel="stylesheet" href="statics/home2/css/front.css?20160520">
<script type="text/javascript" src="statics/home2/js/m2-front.js"></script>
<!--头部导航start-->
<div class="m2-frontHead">
    <div class="m2-frontHeadbox">
        <ul class="m2-frontHeadlist" id='aboutusul' style="width:998px;">
            <li>
                <i class="m2-frontHeadbox-line"></i>
                <a href="guanyu_aiqianbang.html">
                    <b class="m2-headIcon1"></b>
                    <span>关于我们</span>
                </a>
            </li>
            <li>
                <i class="m2-frontHeadbox-line"></i>
                <a href="anquanlicai_yewutese.html">
                    <b class="m2-headIcon2"></b>
                    <span>业务特色</span>
                </a>
            </li>
            <li>
                <i class="m2-frontHeadbox-line"></i>
                <a href="aiqianbang_touzilicaigongsi_dashiji.html">
                    <b class="m2-headIcon3"></b>
                    <span>大事记</span>
                </a>
            </li>
            <li>
                <i class="m2-frontHeadbox-line"></i>
                <a href="meitibaodao_aiqianbang_licaiwang.html">
                    <b class="m2-headIcon4"></b>
                    <span>媒体报道</span>
                </a>
            </li>
            <li>
                <i class="m2-frontHeadbox-line"></i>
                <a href="licai_gonggao.html">
                    <b class="m2-headIcon5"></b>
                    <span id="announcementnav">网站公告</span>
                </a>
            </li>
            <li>
                <i class="m2-frontHeadbox-line"></i>
                <a href="aiqianbang_touzilicaigongsi_tuanduijieshao.html">
                    <b class="m2-headIcon6"></b>
                    <span>管理团队</span>
                </a>
            </li><!--
            <li>
                <i class="m2-frontHeadbox-line"></i>
                <a href="/aiqianbang_licaiwang_zhaopin.html">
                    <b class="m2-headIcon7"></b>
                    <span>加入我们</span>
                </a>
            </li>
            --><li style="margin-right:0px">
                <a href="lianxi_aiqianbang_licaiwang.html">
                    <b class="m2-headIcon8"></b>
                    <span>联系我们</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    var href = window.location.href;
    var search = window.location.search;
    $('#aboutusul a').each(function () {
        if ($(this).prop('href') + search == href) {
            $(this).children('span').css('color', '#09ABE9');
        }
    });
    $(function(){
        $('body').css('background-color','#F0F0F0');
    });
</script>
<!--头部导航end-->
<div class="m2-aboutBanner-con">

</div>

<div class="m2-about-con">
    <h1>爱钱帮是谁</h1>
    <div class="m2-abuoutDet-box">
        <h3><i></i>公司简介</h3>
        <p>北京爱钱帮财富科技有限公司是一家践行普惠金融的科技金融公司，爱钱帮平台于2014年4月上线运营，上线两个月即获盛大资本的战略投资。管理团队来自清华、北航、上财等知名院校，具有丰富的金融和风险管理经验。2015年7月，爱钱帮与徽商银行首创“银行存管+余额理财”新模式，成为真正实现银行资金存管的平台。2015年10月，爱钱帮联合江西银行推出基于游戏消费场景的消费金融新产品“闪垫侠”，即“游戏白条”。截至2016年4月，平台累计成交额已经超过20亿元，用户数超过35万人。爱钱帮自主研发的业内领先的大数据风控系统实现了线上审批，即刻放款，贷后系统监控，结合线下风控手段，形成了独特的O2O风险管理体系。</p>
        <h3><i></i>公司优势</h3>
        <p>爱钱帮的业务模式安全合规，受到政府部门和行业协会的高度认可。爱钱帮是央行中国互联网金融协会的首批会员单位，是北京网贷行业协会的首批创始会员，也是中关村网贷联盟的首批创始会员，同时还是中国小额信贷联盟会的理事单位。2014年，爱钱帮荣获“年度最具成长性P2P平台”。同年，爱钱帮全面升级信息安全体系，并通过了ISO27001信息安全管理体系认证。2015年1月，爱钱帮荣获由中国证券市场研究设计中心与和讯网联合主办的“第12届中国财经风云榜2014年最佳品牌营销奖”。2015年，爱钱帮被授予国家高新科技企业称号。</p>
        <!-- <h3><i></i>公司特色</h3>
        <p>随着公司的快速发展，爱钱帮不断带给P2P行业新的惊喜，海鲜帮、娱乐帮、汽车帮等特色产业“帮派”项目也接连而出，在创造高收益的同时也优化了单一的理财产品模式，不断的进行创新，开始走出自己的特色。</p> -->
    </div>
    <h1 style="margin-top:10px;">公司资质</h1>
    <ul class="m2-aboutImglist">
        <li src="statics/home2/images/guarantee/m2-yyzz.jpg">
            <i class="m2-aboutImglist-1"></i>
            <p>营业执照</p>
        </li>
        <li src="statics/home2/images/guarantee/m2-khxkz.jpg">
            <i class="m2-aboutImglist-2"></i>
            <p>开户许可证</p>
        </li>
        <!--		<li src="statics/home2/images/guarantee/m2-partnersImg1.png">-->
        <!--			<i class="m2-aboutImglist-3"></i>-->
        <!--			<p>税务登记证</p>-->
        <!--		</li>-->
        <!--		<li src="statics/home2/images/guarantee/m2-partnersImg1.png">-->
        <!--			<i class="m2-aboutImglist-4"></i>-->
        <!--			<p>组织机构代码</p>-->
        <!--		</li>-->
        <li src="statics/home2/images/guarantee/m2-xydmz.jpg">
            <i class="m2-aboutImglist-5"></i>
            <p>信用代码证</p>
        </li>
        <li src="statics/home2/images/guarantee/m2-jyxkz.jpg">
            <i class="m2-aboutImglist-6"></i>
            <p>经营许可证</p>
        </li>
    </ul>
</div>

<div id="m2-aboutSec-list" style="width:1030px;margin-bottom:50px;">
    <h3>企业荣誉</h3>
    <ul>
        <li><img src="statics/home2/images/about/prize01_v2.jpg" alt=""></li>
        <li><img src="statics/home2/images/about/prize04_v2.jpg" alt=""></li>
        <li><img src="statics/home2/images/about/prize02_v2.jpg" alt=""></li>
        <li><img src="statics/home2/images/about/prize03_v2.jpg" alt=""></li>
        <li><img src="statics/home2/images/about/prize05_v2.jpg" alt=""></li>
        <li><img src="statics/home2/images/about/prize06_v2.jpg" alt=""></li>
    </ul>
</div>

<!--<div class="m2-aboutPho-con">-->
<!--	<div class="m2-aboutPho-tit">-->
<!--		<h3>爱钱帮风采</h3>-->
<!--		 <p>我们提供安全高收益的投资，选择追求项目的公开透明，挖掘企业的信用价值，支持有梦想的企业家提升融资效率和社会整体生产力。</p> -->
<!--	</div>-->
<!--	<div class="m2-aboutPho-box">-->
<!--		<ul>-->
<!--			<li>-->
<!--				<span><img src="statics/home2/images/about/photo01_v2.jpg" alt=""></span>-->
<!--				<a >一路有你，相伴随行</a>-->
<!--				<i></i>-->
<!--				<b></b>-->
<!--			</li>-->
<!--			<li>-->
<!--				<span><img src="statics/home2/images/about/photo02_v2.jpg" alt=""></span>-->
<!--				<a >休闲环境</a>-->
<!--				<i></i>-->
<!--				<b></b>-->
<!--			</li>-->
<!--			<li>-->
<!--				<span><img src="statics/home2/images/about/photo03_v2.jpg" alt=""></span>-->
<!--				<a >外部环境</a>-->
<!--				<i></i>-->
<!--				<b></b>-->
<!--			</li>-->
<!--			<li>-->
<!--				<span><img src="statics/home2/images/about/photo04_v2.jpg" alt=""></span>-->
<!--				<a >员工风采</a>-->
<!--				<i></i>-->
<!--				<b></b>-->
<!--			</li>-->
<!--			<li>-->
<!--				<span><img src="statics/home2/images/about/photo05_v2.jpg" alt=""></span>-->
<!--				<a >办公环境</a>-->
<!--				<i></i>-->
<!--				<b></b>-->
<!--			</li>-->
<!--			<li>-->
<!--				<span><img src="statics/home2/images/about/photo06_v2.jpg" alt=""></span>-->
<!--				<a>周边景色</a>-->
<!--				<i></i>-->
<!--				<b></b>-->
<!--			</li>-->
<!--		</ul>-->
<!--	</div>-->
<!--</div>-->



<script type="text/javascript">
    $(document).ready(function() {
        $('#m2-aboutSec-list ul').roundabout({
            easing: 'easeOutInCirc',
            duration: 600
        });
        $('.m2-frontHead').css('z-index',120);
        $('.m2-topNav-ulSec').css('z-index',130);
        $('.m2-parBg').css('z-index',140);
        $('.m2-parHidebox').css('z-index',150);
    });
</script>
<script type="text/javascript">
    $(function(){
        var docTop =$(document).scrollTop()+142; //弹出层top
        var tolPage=4; //总页数
        var curPage=1; //当前页
        $('.m2-parPagetotal').html(tolPage);
        /*点击弹出蒙板*/
        $('.m2-aboutImglist li').click(function(){
            curPage=$(this).index()+1; //当前页
            docTop =$(document).scrollTop()+142; //滚动条高度
            var imgSrc=$(this).attr('src'); //图片src
            var imgTit=$(this).children('p').html();
            $('.m2-parHidebox').css('top',docTop); //改变图片box的top
            $('.m2-parHideimg img').attr('src',imgSrc); //替换图片
            $('.m2-parPagecurrent').html(curPage); //改变当前页值
            $('.m2-parHidebox h2').html(imgTit); //改变图片标题
            $('.m2-parBg,.m2-parHidebox').show() //显示蒙板和图片box
            btnShow();
        });

        /*上一页点击*/
        $('.m2-parPageprev').click(function(){
            if(curPage != 1){
                curPage-=1;
            }
            showpage(curPage);
            btnShow();
        });

        /*下一页点击*/
        $('.m2-parPagenext').click(function(){
            curPage+=1;
            showpage(curPage);
            btnShow();
        });

        /*点击关闭弹窗*/
        $('.m2-parHideclose').click(function(){
            $('.m2-parBg').hide();
            $('.m2-parHidebox').hide();
        });

        /*判断翻页是否显示*/
        function btnShow(){console.log(curPage);
            if (curPage<=1) {
                $('.m2-parPageprev').fadeOut(200);
                $('.m2-parPagenext').show();
                curPage=1;
            }
            else if (curPage>=tolPage) {
                $('.m2-parPagenext').fadeOut(200);
                $('.m2-parPageprev').show();
                curPage=tolPage;
            }
            else{
                $('.m2-parPageprev').show();
                $('.m2-parPagenext').show();
            }
        }
        //点击换页数图片等函数
        function showpage(pagenumber){
            var pagenumber=pagenumber-1;
            var imgSrc=$($('.m2-aboutImglist').find("li")[pagenumber]).attr("src");
            var imgTit=$($('.m2-aboutImglist').find("li")[pagenumber]).children('p').html();
            $('.m2-parHidebox h2').html(imgTit);
            $('.m2-parHideimg img').attr('src',imgSrc); //替换图片
            $('.m2-parPagecurrent').html(curPage); //改变当前页值
        }
    });
</script>
<link rel="stylesheet" href="statics/home/css/newPage.css?20160520" />
<div id="mainNewfoot">
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
                    <li><a href="touzi_licai_chanpin.html">我要投资</a></li>
                    <li><a href="guide.html">帮助中心</a></li>
                    <li><a href="guanyu_aiqianbang.html">关于我们</a></li>
                    <li><a href="licai_gonggao.html">新闻公告</a></li>
                </ul>
            </div>
            <div class="mainNewown">
                <p>页面版权所有：北京爱钱帮财富科技有限公司&nbsp;&nbsp;京ICP证150216号</p>
                <!--                <p>推荐使用IE7以上版本&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;法律顾问：<a href="http://www.iqianbang.com/ihzhb-527.shtml" target="_blank" style="color:#a4a3a3">国浩律师事务所</a></p>-->
                <p>推荐使用IE7以上版本&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;法律顾问：国浩律师事务所（grandall.com.cn）</p>
            </div>
            <div class="mainNewsafe">
                <ul>
                    <li class="icon-norton"><a rel="nofollow"  href="https://sealinfo.verisign.com/splash?form_file=fdf/splash.fdf&amp;dn=www.iqianbang.com&amp;lang=zh_cn" target='_blank'></a></li>
                    <!--                    <li class="icon-cx"><a rel="nofollow"  href="https://credit.szfw.org/CX20150715010327080139.html" target="_blank"></a></li>-->
                    <li class="icon-kx"><a rel="nofollow"  href="https://ss.knet.cn/verifyseal.dll?sn=e14032111010847492vg0o000000&amp;ct=df&amp;a=1&amp;pa=0.8090716653969139" target="_blank"></a></li>
                    <!--                    <li class="icon-360"><a rel="nofollow"  href="http://webscan.360.cn/index/checkwebsite/url/www.iqianbang.com" target="_blank"></a></li>-->
                    <li class="icon-zhx"><a rel="nofollow"  href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1076572005" target="_blank"></a></li>
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
        TOKEN: "8ba1ece370de1b3e55877e7ef191af79_e104e13a491d385198f84a34f74ec90a",
        THIS_URL: "Aboutus-",
        TINVEST_URL: "/invest-shownewinvest.shtml"
    };
</script>

<script src="statics/common/js/common.js?20160520"></script>
<link type="text/css" rel="stylesheet" href="statics/common/tipBox/colorbox-master/css/colorbox.css?20160520">
<script src="statics/common/tipBox/layer-v1.5.1/layer/layer.js?20160520"></script>
<script src="statics/common/tipBox/common.js?20160520"></script>
<!--tipBOx-->
<script language=JavaScript type="text/javascript" src="statics/home/js/tab.js?20160520"></script>
<script type="text/javascript">$(function () {
        if ($.browser && $.browser.msie && ($.browser.version == "6.0") && !$.support.style) {
            $('#fixed-services').css('display', 'none');
        }
    })
</script>
</body>
</html>
</body>
</html>