
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="keywords" content="互联网金融,理财平台">
    <meta name="description" content="爱钱帮为您打造一个公平、透明、安全、高效的互联网金融平台，引入第三方平台进行资金托管，爱钱帮不接手借贷资金，保障资金安全，回归中介本质，是您首选的理财平台。">
    <title>安全保障丨理财产品，为您赚钱的互联网金融理财投资平台-爱钱帮</title>
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
                    <img class="mo2-indRegcode" src="Index-VerifyCode.png" onClick="document.getElementById('reverifyCodeRight').src='Index-VerifyCode.png?time='+Math.random();void(0);" id="reverifyCodeRight"  alt="点击刷新验证码">
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
                                <img id="ivrSecurityCodeImg" onclick="getCode()" src="Index-VerifyCode.png" alt="验证码" title="点击更新验证码">
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
                <ul class="m2-commonNavul-fir" data_page='fourpage'>
                    <!--  <li class="m2-commonNav-fir"><a href="http://huifu.iqianbang.com" target="_blank" >汇付版本</a></li>-->
                    <li class="m2-commonNav-fir"><a href="{{asset('home/index')}}" id="onepage">首页</a></li>
                    <li class="m2-commonNav-fir"><a href="{{url('home/touzi')}}" id="twopage">我要投资</a></li>
                    {{--<li class="m2-commonNav-fir"><a href="membermall.html" id="sevenpage">会员商城</a></li>--}}
                    <li class="m2-commonNav-fir"><a href="{{url('home/user')}}" id="threepage">我的账户</a></li>
                    <li class="m2-commonNav-fir"><a href="{{url('home/safe')}}" id="fourpage">安全保障</a></li>
                    <li class="m2-commonNav-fir"><a href="{{url('home/about')}}" id="fivepage">关于我们</a></li>
                    <!-- <li class="m2-commonNav-fir"><a href="guide.html">新手引导</a></li> -->
                    <li class="m2-commonNav-fir"><a href="{{url('home/huodong')}}" id="sixpage">活动专区</a></li>
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
    <head>
        <meta charset="UTF-8">
        <title>安全保障</title>
        <!--[if lt IE 9]>
        <script src="../common/js/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="statics/home2/css/front.css?20160520">
        <link rel="stylesheet" href="statics/home2/css/m2-main.css?20160520">
        <script type="text/javascript" src="statics/home2/js/m2-front.js"></script>
    </head>
<body>
<!--头部start-->
<header>
    <div class="m2-secBanner-con"></div>
    <div class="security_ensure_one">
        <div class="security_ensure_content_title"><div class="left solid"></div>为什么爱钱帮安全<div class="right solid"></div></div>
        <div class="content">
            &nbsp;爱钱帮以风险防控为核心，采用六重安全保障。用户信息和资金全部在徽商银行存管，平台项目全部小额分散有抵质押的优质资产，独立的第三方担保机构提供安全保障，并且采用全方位大数据风控。平台在上线两个月获得知名投资机构，美国上市公司盛大资本的战略投资。
        </div>
    </div>
    <div class="security_ensure_two">
        <div class="security_ensure_content_title"><div class="left solid"></div>安全体系<div class="right solid"></div></div>
        <div class="content">
            <div class="lefthover">
                <span>提供担保和债权回购</span>
                <img src="statics/home2/images/security/securitythree.png" style="vertical-align:-2px;margin-left:2px;">
                <div class="detail" style="color:#959595;">
                    <img src="statics/home2/images/security/securityfour.png" class="detail_title">
                    担保：是指在借贷、买卖、货物运输、加工承揽等经济活动中，债权人为保障其债权实现的，要求债务人向债权人提供担保的合同。担保方式为保证、抵押、质押、留置和定金五种。
                </div>
            </div>
            <div class="righthover">
                <span>提供反担保</span>
                <img src="statics/home2/images/security/securitythree.png" style="vertical-align:-2px;margin-left:2px;">
                <div class="detail" style="color:#959595;">
                    <img src="statics/home2/images/security/securityfour.png" class="detail_title">
                    反担保：反担保又可称为求偿担保，偿还约定书或反保证书。是指为保障债务人之外的担保人将来承担单号责任后对债务人的追偿权的实现而设定的担保。
                </div>
            </div>
        </div>
    </div>
    <div class="security_ensure_three">
        <div class="container">
            <img src="statics/home2/images/security/securityfive.png">
            <div class="container_style right" style="top:10px;">
                <h4>银行存管<span>用户信息和资金银行存管，用户资金完全隔离</span></h4>
                <p>用户信息和资金全部在徽商银行存管，平台不直接经手客户资金，也无权动用客户在银行存管系统的资金。投资人通过银行存管账户投资成功后，资金将直接进入借款人账户，保证交易真实和投资人资金安全。</p>
            </div>
        </div>
        <div class="container">
            <img src="statics/home2/images/security/securitysix.png" class="right">
            <div class="container_style">
                <h4>收益保障<span>强力担保回购机制，三重回款保障</span></h4>
                <p>除了借款人负有还款责任，将经营收入作为第一还款来源，个人无限责任，还有可以执行的抵质押物可以变现用于还款；平台引入第三方担保机构，负有连带责任保证，承诺到期回购。同时，平台也制定了完善的法律服务体系，将法律途径引入还款保障。</p>
            </div>
        </div>
        <div class="container">
            <img src="statics/home2/images/security/securityseven.png">
            <div class="container_style right" style="top:46px;">
                <h4>业务安全<span>小额分散有抵质押的优质资产</span></h4>
                <p>平台秉承安全至上的资产筛选原则，选择最安全的贷款领域，选取房产与车产抵质押资产，实现贷款的小额分散，并根据不同的领域与交易场景制定严苛的准入与审批标准。每一个项目都来自平台的精心筛选。</p>
            </div>
        </div>
        <div class="container">
            <img src="statics/home2/images/security/securityeight.png" class="right">
            <div class="container_style">
                <h4>技术安全<span>信息技术安全，多重加密多重备份</span></h4>
                <p>团队成员具有丰富的网络技术研发经验。爱钱帮已经通过ISO27001信息安全管理体系认证，2015年，爱钱帮被授予国家高新科技企业称号。平台对信息进行信息多重备份，并使用128位加密技术，保障数据传输安全。平台严格按照隐私条款保障用户的信息。</p>
            </div>
        </div>
        <div class="container">
            <img src="statics/home2/images/security/securitynine.png">
            <div class="container_style right" style="top:0;">
                <h4>法律安全<span>合法合规有据可依，有效法律保障</span></h4>
                <p>2014年平台聘用了国浩律师事务所为常年法律顾问。平台模式、各类法律文书，包括各类协议、合同等，均由律师事务所审核，确保与投资人相关的各类文书合法有效。《合同法》《电子签名法》《关于人民法院审理借贷案件的若干意见》等相关法律法规，是平台提供合法的居间服务的法律基础，同时说明互联网个人借贷合同的合法性。</p>
            </div>
        </div>
        <div class="container" style="margin-bottom:0;">
            <img src="statics/home2/images/security/securityten.png" class="right">
            <div class="container_style">
                <h4>风控安全<span>严格风险管理，全方位大数据风控</span></h4>
                <p>爱钱帮的风险管理核心技术脱胎于德国IPC技术。平台接入了国内多家知名征信公司、数据公司，实现大数据风控。在此基础之上，爱钱帮自主研发的业内领先的大数据风控系统实现了线上审批、贷后系统监控，结合线下风控手段，形成了独特的O2O风险管理体系，确保项目安全。</p>
            </div>
        </div>
    </div>
    <div class="security_ensure_four">
        <div class="security_ensure_content_title"><div class="left solid"></div>实力合作机构<div class="right solid"></div></div>
        <div style="margin:20px auto;width:840px;">
            <a href="/home-aboutus-coorprate?id=58" target="_blank"><img src="uploadData/ad/20160512110603864.png" alt=""></a><a href="http://www.hsbank.com.cn/" target="_blank"><img src="uploadData/ad/20160512111038163.png" alt=""></a><a href="http://www.jx-bank.com/nccbank/zh_CN/home/index.html" target="_blank"><img src="uploadData/ad/2016051211111329.png" alt=""></a><a href="/home-aboutus-coorprate?id=62" target="_blank"><img src="uploadData/ad/20160512111134837.png" alt=""></a><a href="/home-aboutus-coorprate?id=59" target="_blank"><img src="uploadData/ad/20160512111157415.png" alt=""></a><a href="/home-aboutus-coorprate?id=72" target="_blank"><img src="uploadData/ad/2016051211121652.png" alt=""></a><a href="https://www.alipay.com/" target="_blank"><img src="uploadData/ad/20160512111336923.png" alt=""></a><a href="http://www.yeepay.com/" target="_blank"><img src="uploadData/ad/20160512111356562.png" alt=""></a><a href="https://www.aliyun.com/" target="_blank"><img src="uploadData/ad/20160512111411694.png" alt=""></a><a href="/home-aboutus-coorprate?id=76" target="_blank"><img src="uploadData/ad/20160512111439851.png" alt=""></a><a href="/home-aboutus-coorprate?id=61" target="_blank"><img src="uploadData/ad/20160512111459408.png" alt=""></a><a href="http://www.cecr.com.cn/bencandy.php?fid=79&amp;id=858" target="_blank"><img src="uploadData/ad/20160616194004859.png" alt=""></a>
        </div>
    </div>
    <div class="security_ensure_five">
        <p>用户信息和资金全部在徽商银行存管，马上开启您的赚钱之旅吧！</p>
        <button class="success_btn" onclick='window.location.href="touzi_licai_chanpin.html"'>立即投资</button>
    </div>


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
            TOKEN: "7b578148de1565cb7ea895370618f82e_3622fbb55461a7e248a69c8b3e651175",
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