
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if lt IE 9]>
    <script src="statics/newcommon/js/html5shiv.js"></script>
    <![endif]-->
    <meta name="keywords" content="网贷平台,网络借贷，网络赚钱项目,理财产品">
    <meta name="description" content="爱钱帮网贷平台为您提供网络赚钱项目；为此相继推出了许多新的理财产品，在为您创造高收益的同时也优化了理财产品模式。网络借贷，就选爱钱帮。">
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <link  rel="Shortcut  Icon"  href="statics/home/images/minilogo.png">
    <link rel="stylesheet" href="statics/newcommon/css/m2-commonNew.css?20160520">
    <link rel="stylesheet" href="statics/newcommon/css/m2-common.css?20160520">
    <link rel="Shortcut  Icon" href="statics/newcommon/images/minilogo.png?20160520">
    <link rel="stylesheet" href="statics/usercenter/css/userCenter.css?20160520">
    <script type="text/javascript" src="statics/newcommon/js/jquery.min.js?20160520"></script>
    <script type="text/javascript" src="statics/newcommon/js/common.js?20160520"></script>
    <script type="text/javascript" src="statics/usercenter/js/esl.js?20160520"></script>
    <link rel="stylesheet" href="statics/usercenter/css/jquery.datetimepicker.css?20160520" />
    <script type="text/javascript" src="statics/usercenter/js/jquery.datetimepicker.js?20160520"></script>
</head>
<title>我的账户丨理财产品，为您赚钱短期理财的互联网金融理财投资平台-爱钱帮</title>
<div class="m2-userCentercommon-bg" style="display:none;"></div>
<!-- 右侧边栏start -->
<div class="m2-commonRight">
    <ul class="m2-comRiglist">
        <li class="m2-comRigli m2-comRigli-ewm">
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
        <li class="m2-comRigli m2-comRigli-qq">
            <a  target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2522274059&amp;site=qq&amp;menu=yes">
                <i class="m2-comRigli-icon"></i>
                <span class="m2-comRigli-hov">在线<br>客服</span>
            </a>
            <!-- <div class="m2-comRighide"></div> -->
        </li>
        <!--<li class="m2-comRigli m2-comRigli-sug">-->
        <!--<i class="m2-comRigli-icon"></i>-->
        <!--<span class="m2-comRigli-hov">意见<br>反馈</span>-->
        <!-- <div class="m2-comRighide"></div> -->
        <!--</li>-->
        <li class="m2-comRigli m2-comRigli-top">
            <i class="m2-comRigli-icon"></i>
            <span class="m2-comRigli-hov">返回<br>顶部</span>
            <!-- <div class="m2-comRighide"></div> -->
        </li>
    </ul>
</div>

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
            <div class="m2-commonTop-service"><i></i><span>客服：</span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2522274059&amp;site=qq&amp;menu=yes" title="">2522274059</a></div>
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
                    <i class="m2-commonEwmicon" onclick='window.open("http://weibo.com/iqianbang");'></i>
                </div>
            </div>
        </div>
        <div class="m2-commonTop-right">
            <div class="m2-commonTop-link">
                <ul>
                    <li class="m2-commonTop-btn" style="display: none" id="bbs"><a id="bbslogin" target="_blank">论坛</a></li>
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
</div>
<div class="m2-commonNav-con">
    <div class="m2-commonNav-box">
        <div class="m2-commonLogo">
            <a href="index.html"><img src="statics/newcommon/images/m2-logo.png" title="爱钱帮官网" alt="爱钱帮_logo"></a>
        </div>
        <div class="m2-commonNav">
            <ul class="m2-commonNavul-fir" data_page='threepage'>
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
<!--公用提示框start-->
<div class="m2-userCentercommon-confirm" style="display:none;" id="dialog-info-div1">
    <span class="m2-userCentercommon-confirmClose"></span>
    <!--<p class="m2-userCommon-confirmWar"></p>-->
    <p class="m2-userCommon-confirmSuc" style='padding-right: 20px;'></p>
    <p class="m2-userCommon-confirmBtn"><a class="m2-user-confirmBtn" target="_blank" href="#">确&nbsp;定</a></p>
</div>
<div class="m2-userCentercommon-confirm" style="top:30%;padding-top:10px;display:none"  id='dialog-info-div'>
    <span class="m2-userCentercommon-confirmClose"></span>
    <div style="text-align: center;padding: 20px 0 20px 0;">
        <h3 id='dialog-info-text'></h3>
    </div>
    <p class="m2-userCommon-confirmBtn">
        <a class="m2-user-confirmBtn" target="_blank" href="#">确定</a>
    </p>
</div>
<script type="text/javascript">
    $('.m2-userCentercommon-confirmClose,.m2-user-confirmBtn').click(function () {
        $('.m2-userCommon-confirmSuc').hide();
        $('.m2-userCommon-confirmWar').hide();
        $('.m2-userCentercommon-confirm').hide();
        $('.m2-userCentercommon-bg').hide();
        window.location.reload();
    });
</script>
<!--公用提示框end-->


<div class="m2-userCentermain">
    <div class="m2-userCentermain-aside">
        <ul>
            <li class="m2-asideListitem">
                <a class="m2-aside-item" href="usercenter.html"><i class="m2-asideIcon1"></i>我的账户</a>
            </li>
            <li class="m2-asideListitem">
                <a class="m2-aside-item" href="usercenter-growth-index.html"><i class="m2-asideIcon-vip"></i>成长值中心</a>
            </li>
            <li class="m2-asideListitem">
                <a class="m2-aside-item m2-aside-toggle" ><i class="m2-asideIcon2"></i>投资管理<b class="m2-asideIcon-new"></b></a>
                <ul class="m2-aside-secItem" style="display:none">
                    <!--             取消自动投标-->
                    <!--                   <li>-->
                    <!--                        <a class="m2-aside-secLink-item" href="/usercenter-investcontrol-autoinvest"><b class="m2-asideIcon-new"></b>自动投标</a>-->
                    <!--                    </li>-->

                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-investcontrol-investrecord.html">投资记录</a>
                    </li>
                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-investcontrol-monthrepayment.html">回款计划</a>
                    </li>
                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-investcontrol-transfer.html">债权转让</a>
                    </li>
                    <li>
                        <a class="m2-aside-secLink-item" href="touzi_licai_chanpin.html" target="_blank">立即投资</a>
                    </li>

                </ul>
            </li>

            <li class="m2-asideListitem">
                <a class="m2-aside-item" href="usercenter-invitefriends.html">
                    <i class="m2-asideIcon-invit"></i>
                    <b class="m2-asideIcon-prize"></b>
                    邀请好友
                </a>
            </li>
            <li class="m2-asideListitem">
                <a class="m2-aside-item m2-aside-toggle" href="home-register-openbankid.html"><i class="m2-asideIcon3"></i>徽商资金管理</a>            <ul class="m2-aside-secItem" style="display:none">
                    <li><a class="m2-aside-secLink-item" href="#">充&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;值</a></li>
                    <li><a class="m2-aside-secLink-item" href="#">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;现</a></li>
                    <li><a class="m2-aside-secLink-item" href="#">资金流水</a></li>

                </ul>
            </li>
            <li class="m2-asideListitem">
                <a class="m2-aside-item m2-aside-toggle" ><i class="m2-asideIcon4"></i>奖励管理</a>
                <ul class="m2-aside-secItem" style="display:none">
                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-rewardcontrol-rewardrecord.html">奖励金流水</a>
                    </li>
                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-rewardcontrol-redpacket.html">我的红包</a>
                    </li>
                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-rewardcontrol-interestcoupon.html">我的加息券</a>
                    </li>
                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-rewardcontrol-mycoin.html">我的钱帮币</a>
                    </li>
                </ul>
            </li>
            <li class="m2-asideListitem">
                <a class="m2-aside-item m2-aside-toggle" ><i class="m2-asideIcon5"></i>消息管理 </a>
                <ul class="m2-aside-secItem" style="display:none">
                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-messagecontrol-sitemsg.html">站内消息</a>
                    </li>
                    <li>
                        <a class="m2-aside-secLink-item" href="usercenter-messagecontrol-set_message.html">通知设置</a>
                    </li>
                </ul>
            </li>
            <li class="m2-asideListitem">
                <a class="m2-aside-item m2-aside-toggle" ><i class="m2-asideIcon6"></i>账户管理</a>
                <ul class="m2-aside-secItem" style="display:none" id='aaa'>
                    <li>
                        <a class="m2-aside-secLink-item" href="#">账户设置</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <script>
        // 		$(document).ready(function(){
        var href = window.location.href;
        var search = window.location.search;
        $('.m2-asideListitem ul a').each(function () {
            if ($(this).prop('href') + search == href) {
                if ($(this).prop('href') == "/usercenter-wangbaoqiang" || $(this).prop('href') == "/usercenter-sirendingqi") {
                } else {
                    $(this).parent().parent('ul').show();
                    $(this).parent().parent('ul').prev('a').removeClass('m2-aside-item');
                    $(this).parent().parent('ul').prev('a').addClass('m2-aside-cur');
                    $(this).css('text-decoration', 'underline');
                    $(this).css('color', '#0996CC');
                }
            }
        });
        $('.m2-asideListitem a:not(.m2-asideListitem ul a)').each(function () {
            if ($(this).prop('href') + search == href) {
                if ($(this).prop('href').search("usercenter-wangbaoqiang") > -1) {
                    $(this).removeClass('m2-aside-wbq');
                    $(this).addClass('m2-aside-cur');
                } else if ($(this).prop('href').search("usercenter-sirendingqi") > -1) {
                    $(this).removeClass('m2-aside-wbq');
                    $(this).addClass('m2-aside-cur');
                } else {
                    $(this).removeClass('m2-aside-item');
                    $(this).addClass('m2-aside-cur');
                }
            }
        });
        $('.m2-asideListitem a:not(.m2-asideListitem ul a)').click(function () {
            if ($(this).prop('href') == '') {
                $(this).siblings('ul').slideToggle();
                $(this).parent().siblings('.m2-asideListitem').children('.m2-aside-secItem').slideUp();
            }
        });
        // 		});
    </script>

    <style>
        #growth_scale {position:relative;width: 200px;display: inline-block;height: 16px;background-color: #f0f4f7;border-radius: 10px;line-height: 16px;font-size: 14px;}
        #growth_scale .bg {width:0;height: 16px;background-color: #5bd916;border-radius: 10px;overflow: hidden;}
        .m2-userMsg-iconLv span {padding-left:28px;font-size:16px;color:#f87450;}
        .m2-userMsg-iconLv a {width:98px;padding:38px 8px;height:0;}
        .m2-wel-lef .left {width:186px;text-align:center;height:240px;color:#f5944f;line-height:24px;font-size:12px;
        }
        .m2-wel-lef .left button {width:100px;height:40px;color:white;border:0;background-color:#fe6555;font-size:18px;border-radius:10px;margin-bottom:12px;}
        .m2-wel-lef .right {position:absolute;right:-20px;top:4px;width:240px;}
        .m2-wel-profitLink .m2-profit-cha{float:left;padding:0 20px;height:34px;line-height:34px;}
        .m2-userMsg-iconLv a i {top:30px;left:0;height:40px;}
    </style>
    <div style="width:100%; height:100%; position:fixed; z-index:100; display:none; top:0; left:0;" id="allP" >
        <div style="width:100%; height:100%; position:absolute; top:0; left:0; background:#000; opacity:0.5;"></div>
        <div style="width:404px; height:154px; background:#fff; position:absolute; top:50%; left:50%; margin-left:-252px; margin-top:-100px; border:2px solid #666;">
            <p style="color: #666666;font-size: 16px;absolute;line-height:170px;text-align: center; font-family: Microsoft YaHei;;">该项目已还清，为保护企业隐私，不再公示项目信息</p>
            <div style="width: 30px;height: 30px;position: absolute;top: 11px;right: 0px;color: #666;font-size: 20px;cursor: pointer;" id="close">X</div>
        </div>

    </div>
    <div class="m2-userCentermain-con">
        <div class="m2-msgBox">
            <b>通知<em></em></b>
            <span id='notice-text'></span>
            <a id='notice-url' href="usercenter-messagecontrol-sitemsg.html">&nbsp;&nbsp;[详情]</a>
            <i class="m2-msgBox-close" id='notice-close'></i>
        </div>
        <div class="m2-wel-con" style="background-color:white;width:798px;">
            <p class="m2-wel-hello" id='greeting' style="background-color:white;margin:0 10px;width: 730px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" title='上午好，iqb13737301354，投资，是为了更好的自己！'>上午好，iqb13737301354，投资，是为了更好的自己！</p>
            <div class="m2-wel-lef">
                <!--            <span style="position:absolute;top:85px;right:10px;font-size:15px;line-height:15px;">邀请码：<i style="font-style:normal;">xrejfr</i></span>-->
                <div class="left">
                    <img src="statics/usercenter/images/growth/vip.png" alt="爱钱帮" style="margin:20px;"><br>
                    <button style="background-color:#b7b6b6;outline:none;" >已签到</button>                <p>您已连续签到<span id='day'>1</span>天，</p>
                    <p><span id='today'>明天</span>再签到可获得<span id='growth'>2</span>个成长值</p>
                </div>
                <div class="right">
                    <div class="m2-userMsg-iconLv" >
                        <a href="usercenter-growth-index.html" class="m2-iconLevel-normal"><i></i><span>帮主</span></a>
                    </div>

                    <div>成长值：<span id="mydetail_num" data="4000">1</span><a href="/usercenter-growth-index#mao" style="color:#69b1d7;float:right;">如何加速？</a></div>
                    <div id="desc" style="margin:10px 0;font-size:12px;">距离 <span id='vipname'>铁帮主</span> 还需要 <span id='integral'>3999</span> 成长值</div>	            <div id="growth_scale"><div class='bg'></div></div>
                    <ul style="margin:16px 0 10px 0;">
                        <li class="m2-userMsg-icon" style="margin-left:-8px;"><a href="#" id='verify_id' class="m2-iconUser-fal" title='实名认证'></a></li>
                        <li class="m2-userMsg-icon"><a href="#?phone=1" id='verify_phone' class="m2-iconPho-fal" title='手机认证'></a></li>
                        <li class="m2-userMsg-icon"><a href="#?email=1" id='verify_email' class="m2-iconEmail-fal" title='邮箱认证'></a></li>
                    </ul>
                    <div class="m2-wel-level" style="margin-left:0;">
                        <p>安全等级：<span class="m2-level-low" id='safe_level'  style="color:#1adb9e;"></span><a href="#" id='safe_level_url' style="color:#0996cc;">[提升]</a></p>
                        <!--                <div class="m2-level-image" id='safe_level_bar'>-->
                        <!--                    <i class="m2-levelIcon-fal"></i>-->
                        <!--                    <i class="m2-levelIcon-fal"></i>-->
                        <!--                    <i class="m2-levelIcon-fal"></i>-->
                        <!--                </div>-->
                        <!--                <div class="m2-wel-border"></div>-->
                    </div>
                </div>
            </div>
            <div class="m2-wel-rig" style="float:right;width:320px;padding-top:66px;height:174px;border-left:1px solid #f0f0f0;">
                <div class="m2-wel-profitCon" >
                    <div class="m2-wel-profit" style="width:142px;">
                        <p>
                            累计收益（元）
                            <b>
                                <u style="width:100px;z-index: 10;">
                                    <em class="m2-userProfit-arr"></em>
                                    <em class="m2-userProfit-arrBg"></em>
                                    到账收益：0.00<br>
                                </u>
                            </b>
                        </p>
                        <span>0.00</span>
                    </div>
                    <div class="m2-wel-profit" style="width:142px;">
                        <p>
                            今日赚取（元）
                            <b>
                                <u style="width:120px;">
                                    <em class="m2-userProfit-arr"></em>
                                    <em class="m2-userProfit-arrBg"></em>
                                    按在投项目精确计算的当天收益金额
                                </u>
                            </b>
                        </p>
                        <span>0.00</span>
                    </div>
                </div>
                <div class="m2-wel-profitLink" style="padding-top:26px; margin-left:10px;">
                    <a class="m2-profit-cha" href="home-register-openbankid.html">徽商充值</a>
                    <a class="m2-profit-cha" href="home-register-openbankid.html" style="margin-left:54px;">徽商提现</a><!--                 -->
                </div>
            </div>
        </div>
        <div class="m2-userInd-num">
            <div class="border">
                温馨提示：因数据处理存在延迟，项目还款时数值会存在异常波动，还款后2小时银行完成对账后显示为正常值。
            </div>
            <ul>
                <li class="m2-userIndnum-item">
                    <p class="m2-detail-tit">资产总计:
                    </p>
                    <span class="m2-detailNum-tur" style="color:#f5944f">0.00</span>
                    <i class="m2-userIndnum-equ" ></i>
                </li>
                <li class="m2-userIndnum-item">
                    <p class="m2-detail-tit">待收本金:

                    </p>
                    <span class="m2-detailNum-fal">0.00</span>
                    <i class="m2-userIndnum-add"></i>
                </li>
                <li class="m2-userIndnum-item">
                    <p class="m2-detail-tit">待收收益:
                    </p>
                    <span class="m2-detailNum-fal">0.00</span>
                    <i class="m2-userIndnum-add"></i>
                </li>
                <li class="m2-userIndnum-item">
                    <p class="m2-detail-tit">可用奖励金:
                    </p>
                    <span class="m2-detailNum-fal">0.00</span>
                    <i class="m2-userIndnum-add"></i>
                </li>
                <li class="m2-userIndnum-item">
                    <p class="m2-detail-tit">账户余额:
                        <b class="m2-detail-titIcon">
                            <u style="width:160px;text-align:left">
                                <em class="m2-detail-titHide-arr"></em>
                                <em class="m2-detail-titHide-arrBg"></em>
                                <!---->
                                徽商账户余额：0.00                        </u>
                        </b>
                    </p>
                    <span class="m2-detailNum-fal">0.00</span>
                </li>
            </ul>
        </div>
        <!--
           <div class="m2-detail-con">
               <ul>
                   <li>
                       <i class="m2-detialIcon-alr"></i>
                       <p class="m2-detail-tit">已投资本金：
                           <b class="m2-detail-titIcon">
                               <u>
                                   <em class="m2-detail-titHide-arr"></em>
                                   <em class="m2-detail-titHide-arrBg"></em>
                                   已投资本金=已回款本金+待收本金<br>
                                   已回款本金：0.00<br>
                                   待收本金：0.00                           </u>
                           </b>
                       </p>
                       <span class="m2-detailNum-fal">0.00</span>
                   </li>
                   <li>
                       <i class="m2-detialIcon-sum"></i>
                       <p class="m2-detail-tit">资产总计：
                           <b class="m2-detail-titIcon">
                               <u>
                                   <em class="m2-detail-titHide-arr"></em>
                                   <em class="m2-detail-titHide-arrBg"></em>
                                   资产总计=账户余额+待收本金+待收收益+可用奖励<br>
                                   账户余额：0.00<br>
                                   待收本金：0.00<br>
                                   待收收益：0.00<br>
                                   可用奖励：0.00                           </u>
                           </b>
                       </p>
                       <span class="m2-detailNum-fal">0.00</span>
                   </li>
                   <li>
                       <i class="m2-detialIcon-awa"></i>
                       <p class="m2-detail-tit">可用奖励：
                           <b class="m2-detail-titIcon">
                               <u style="width:130px">
                                   <em class="m2-detail-titHide-arr"></em>
                                   <em class="m2-detail-titHide-arrBg"></em>
                                                                      累计投资满10000元（含10000），即可使用。
                                                                  </u>
                           </b>
                       </p>
                       <span class="m2-detailNum-fal">0.00</span>
                   </li>
                   <li>
                       <i class="m2-detialIcon-bal"></i>
                       <p class="m2-detail-tit">账户余额：
                        <b class="m2-detail-titIcon">
                               <u style="width:170px">
                                   <em class="m2-detail-titHide-arr"></em>
                                   <em class="m2-detail-titHide-arrBg"></em>
                                   账户余额=  可用资金+冻结金额<br>
                                  可用资金：0.00<br>
                                  冻结金额：0.00                           </u>
                           </b>
                       </p>
                       <span class="m2-detailNum-fal">0.00</span>
                   </li>
               </ul>
           </div>
        -->
        <div class="m2-profitChart">
            <img src="statics/usercenter/images/m2-ajax-loading.gif" alt="" class="m2-chartLoading">
            <div class="m2-chart-head">
                <h3><i></i>收益走势</h3>
                <hr style="display:inline-block;width:110px;border:0;background-color:#0996cc;height:1px;margin-left:6px;"></h3>
                <hr style="display:inline-block;width:682px;border:0;background-color:#dadada;height:1px;margin-left:-4px;"></h3>
            </div>
            <div class="m2-profitChart-tit">
                <span class="m2-chartItemtit-day m2-chart-unsel">日收益</span>
                <span class="m2-chartItemtit-mon m2-chart-sel">月收益</span>
            </div>
            <div class="m2-chart-con" style="background-color:white;">
                <div class="m2-chartItemuser" id="m2-chartMonth"></div>
            </div>
        </div>

        <div class="m2-backCalendar">
            <div class="m2-backCalendar-head" style="margin-bottom:8px;">
                <h3><i></i>回款日历</h3>
                <hr style="display:inline-block;width:110px;border:0;background-color:#0996cc;height:1px;margin-left:6px;"></h3>
                <hr style="display:inline-block;width:682px;border:0;background-color:#dadada;height:1px;margin-left:-4px;"></h3>
            </div>
            <style>
            </style>
            <div class="m2-backCalendar-con">
                <div class="m2-backCalendar-lef">
                    <div class="m2-calendarItemuser">
                        <input type="text" id="m2-user-datetimepicker"/>
                    </div>
                    <div class="b0-backDet">
                        <div class="b0-backLef">
                            <div class="b0-orange">
                                <span class="b0-lefTit" style="color:black">本月计划回款：</span>
                                <span class="b0-lefNum" id="thismonthincome" style="color:black" ></span>
                            </div>
                            <div class="b0-purple">
                                <span class="b0-lefTit">本月实际回款：</span>
                                <span class="b0-lefNum" id="thismonthrealincome"></span>
                            </div>
                        </div>
                        <div class="b0-backRig">
                            <div class="b0-rigTop">
                                <div class="b0-rigDis"><i style="background-color:#FBBBA3;"></i><span>待还款</span></div>
                                <div class="b0-rigDis" style="margin-left:20px;"><i style="background-color:#D4D4D4;"></i><span>已结清</span></div>
                            </div>
                            <div class="b0-rigBot">
                                <i class="b0-iconAdv"></i><span class="b0-botDet">提前还款</span><span class="b0-backMore"><span><i></i>借款人在有能力且有意愿提前归还本金的时候，提前清偿了所有剩余本金及实际借款期间所产生的利息，则投资者的本金及实际借款期间所产生的利息会即时返还至投资者的账户；<br><b>收到提前还款：当日有提前清偿的本息到账；<br>提前还款：当日有计划还款的资金已于日前清偿本息；</b></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m2-backCalendar-rig">
                    <div class="m2-backRig-nextDate">
                        <span class="m2-nextDatetit">下个回款日期</span><a id="paymentdetail-a">回款细节</a>
                        <p class="m2-nextDatecon" id="next_pay_day">---- . -- . --</p>
                    </div>
                    <div class="m2-backRiginfo">
                        <p class="m2-backRiginfo-amo">回款交易：<span id="next_pay_day_num"></span>个</p>
                        <p class="m2-backRiginfo-tit">收回本息(元)</p>
                        <p class="m2-backRiginfo-num"><span id="next_pay_day_income"></span></p>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="statics/usercenter/js/jquery.datetimepicker.modified.js?20160520"></script>
            <script><!--

                var now = new Date();
                var year = now.getFullYear();       //年
                var month = now.getMonth() + 1;     //月
                var day = now.getDate();            //日
                var date_current = year + "-";

                if(month < 10){
                    date_current += "0";
                }

                date_current += month + "-";

                if(day < 10){
                    date_current += "0";
                }
                date_current += day;

                var calendarData = Array();
                $(document).ready(function(){
                    //加载日历
                    loadDatepicker();
                    getIncomeStat();
                });

                function getIncomeStat(){

                    $.ajax({
                        url:"usercenter-index-getIncomeStat",
                        data:{},
                        success:function(data){
                            obj = eval('('+data+')');
                            $('#next_pay_day').text(obj['nextday']);
                            $('#next_pay_day_num').text(obj['num']);
                            $('#next_pay_day_income').text(parseFloat(obj['income']).toLocaleString());
                            var date = obj['nextday'];
                            $("#paymentdetail-a").click(function(){getPaymentDetail(date);});
                            if(typeof(afterInitNextPayday)=='function'){
                                afterInitNextPayday(date);
                            }
                        }
                    });
                }

                function loadDatepicker(){
                    $.ajax({
                        url:"usercenter-index-getServerTime",
                        data:{},
                        success:function(data){
                            var obj = eval('('+data+')');
                            $('#m2-user-datetimepicker').val(obj['date']);
                            $('#m2-user-datetimepicker').datetimepicker_uc({
                                lang:'ch',
                                format:'Y-m-d',
                                inline:true
                            });
                            $(".m2-calendarItemuser .xdsoft_datetimepicker").css({"zoom":"1.45","min-height":"204px","padding":"0","background-color":"#F5F5F5","-moz-transform":"scale(1.45)","-moz-transform-origin":"top left"});
                            loadCalendarInfo(Number(obj['year']),Number(obj['month'])-1);
                        }
                    });
                };

                function loadCalendarInfo(y,m){
                    //m:0-11
                    var y1 = m==0 ? y-1 : y;
                    var m1 = (m + 11) % 12 + 1;
                    var y3 = m==11 ? y+1 : y;
                    var m3 = (m + 1) % 12 + 1;
                    var t1 = '';
                    var t2 = '';
                    var t3 = '';

                    t2=( y + '-' + (m+1));

                    $.ajax({
                        url:"usercenter-index-getPaymentList",
                        data:{
                            time2:t2,
                        },
                        success:function(data){
                            var	obj = eval('('+data+')');
                            var total=obj['total_real_pay'];
                            var total_plan=obj['total_plan_pay'];
                            $('#thismonthincome').text(parseFloat(total_plan).toLocaleString()+'元');
                            $('#thismonthrealincome').text(parseFloat(total).toLocaleString()+'元');

                            obj=obj['plan_income'];
                            for(k in obj){
                                var mth = obj[k]['month'];
                                if(mth<10)
                                    mth = mth.substr(1);
                                calendarData[obj[k]['year']] ? 1 : calendarData[obj[k]['year']] = Array();
                                calendarData[obj[k]['year']][mth] ? 1 : calendarData[obj[k]['year']][mth] = Array();
                                calendarData[obj[k]['year']][mth][obj[k]['day']] ? 1 : calendarData[obj[k]['year']][mth][obj[k]['day']] = Array();
                                calendarData[obj[k]['year']][mth][obj[k]['day']][1] = obj[k]['income'];	 //正常还款
                                calendarData[obj[k]['year']][mth][obj[k]['day']][2] = obj[k]['new_status_pay'];
                                calendarData[obj[k]['year']][mth][obj[k]['day']][3] = obj[k]['new_status_no'];
                                calendarData[obj[k]['year']][mth][obj[k]['day']][4] = obj[k]['new_status_get'];
                                calendarData[obj[k]['year']][mth][obj[k]['day']][5] = obj[k]['new_status_normal'];
                                calendarData[obj[k]['year']][mth][obj[k]['day']][6] = obj[k]['no_income'];		//未还款
                                calendarData[obj[k]['year']][mth][obj[k]['day']][7] = obj[k]['ele_get_income'];//收到提前还款
                                calendarData[obj[k]['year']][mth][obj[k]['day']][8] = obj[k]['ele_pay_income'];//提前还款
                                calendarData[obj[k]['year']][mth][obj[k]['day']][9] = obj[k]['plan_date'];//日期
                            }
                            markCalendar(y,m+1);
                        },
                        fail:function(){
                            markCalendar(y,m+1);
                        }
                    });
//		}
                }

                function markCalendar(y,m){
                    //m:1-12
                    var y1 = m==1 ? y-1 : y;
                    var m1 = m==1 ? 12 : m-1;
                    var y3 = m==12 ? y+1 : y;
                    var m3 = m==12 ? 1 : m+1;
                    var sum = 0;
                    var sum_real_receive = 0;
                    $('.xdsoft_calendar td:not(.xdsoft_other_month)').each(function(){
                        if(calendarData[y]){
                            for(var i in calendarData[y][m]){
                                if(calendarData[y][m][i] && Number(i) == $(this).children('div').text()){
                                    setCalendarColorByMoney(calendarData[y][m][i],this);
                                    var n1 = calendarData[y][m][i][1] ? calendarData[y][m][i][1] : 0.00;  //正常还款
                                    var n2 = calendarData[y][m][i][2] ? calMinus(calendarData[y][m][i][2],n1) : 0.00; //
                                    var n3 = calendarData[y][m][i][6] ? calendarData[y][m][i][6] : 0.00;  //待还款
                                    var n4 = calendarData[y][m][i][7] ? calendarData[y][m][i][7] : 0.00;	//提前还款
                                    var n5 = calendarData[y][m][i][8] ? calendarData[y][m][i][8] : 0.00; //收到提前还款
                                    var n6 = calendarData[y][m][i][10]? calendarData[y][m][i][10] : 0.00;   //计划
                                    var n7 = calendarData[y][m][i][11]? calendarData[y][m][i][11] : 0.00; //实际
                                    sum_plan_receive=calPlus(sum,calendarData[y][m][i][10]);//本月计划回款金额
                                    sum_real_receive=calPlus(sum_real_receive,calendarData[y][m][i][11]);//本月实际回款金额
                                    n1 = n1==0 ? '0.00' : n1;
                                    n2 = n2==0 ? '0.00' : n2;
                                    if(date_current >= calendarData[y][m][i][9]){ // 显示title的时候，需要比对日期与实际日期，当前日期比返回日期大，则执行else部分
                                        $(this).append('<div class="calenderdetail"><div class="calItem"><span class="lefItem">待还款</span><span class="rigItem">'+ parseFloat(n3).toLocaleString() +'元</span></div>'
                                            +'<div class="calItem"><span class="lefItem">正常还款</span><span class="rigItem">'+ parseFloat(n1).toLocaleString() +'元</span></div>'
                                            +'<div class="calItem"><span class="lefItem">收到提前还款</span><span class="rigItem">'+ parseFloat(n5).toLocaleString() +'元</span></div>'
                                            +'<div class="calItem"><span class="lefItem">提前还款</span><span class="rigItem">'+parseFloat(n4).toLocaleString() +'元</span></div>'
                                            +'<div class="calMore"><a class="link_more" onclick="getPaymentDetail(\''+y+'.'+m+'.'+i+'\')">更多详情&gt;&gt;</a></div></div>')
                                    }else{
                                        $(this).append('<div class="calenderdetail"><div class="calItem"><span class="lefItem">待还款</span><span class="rigItem">'+ parseFloat(n3).toLocaleString() +'元</span></div>'
                                            +'<div class="calItem"><span class="lefItem">提前还款</span><span class="rigItem">'+parseFloat(n4).toLocaleString() +'元</span></div>'
                                            +'<div class="calMore"><a class="link_more" onclick="getPaymentDetail(\''+y+'.'+m+'.'+i+'\')">更多详情&gt;&gt;</a></div></div>')
                                    }

                                }
                            }
                        }
                    });
                    $('.xdsoft_calendar td.xdsoft_other_month').each(function(){
                        if(calendarData[y1]){
                            for(var i in calendarData[y1][m1]){
                                if(i>15 && calendarData[y1][m1][i] && Number(i) == $(this).children('div').text()){
                                    setCalendarColorByMoney(calendarData[y][m][i],this);
                                }
                            }
                        }
                        if(calendarData[y3]){
                            for(var i in calendarData[y3][m3]){
                                if(i<15 && calendarData[y3][m3][i] && Number(i) == $(this).children('div').text()){
                                    setCalendarColorByMoney(calendarData[y][m][i],this);
                                }
                            }
                        }
                    });
                }

                function setCalendarColorByMoney(data,dom){
                    var color1 = '#fabaa2';//待
                    var color2 = '#d4d4d4';//正常还款
//		if(!data[6]){
//
//		}else{
                    if(data[5]>0){
                        $(dom).css('color','#fff');
                        $(dom).css('background-color',color2);
                        if(data[2]>0||data[4]>0){
                            $(dom).append('<i class=advIcon><img src="statics/usercenter/images/advIcon.png" alt=""></i>');
                        }
                    }
                    if(data[3]>0&&data[6]!=0.00){
                        $(dom).css('color','#fff');
                        $(dom).css('background-color',color1);
                        if(data[2]>0||data[4]>0){
                            $(dom).append('<i class=advIcon><img src="statics/usercenter/images/advIcon.png" alt=""></i>');
                        }
                    }
                    if(data[2]>0||data[4]>0){
                        $(dom).append('<i class=advIcon><img src="statics/usercenter/images/advIcon.png" alt=""></i>');
                    }
//		}

                }

                function calPlus(num1,num2){
                    var sq1,sq2,m;
                    try{sq1=num1.toString().split(".")[1].length;} catch(e){sq1=0;}
                    try{sq2=num2.toString().split(".")[1].length;} catch(e){sq2=0;}
                    m=Math.pow(10,Math.max(sq1,sq2));
                    return Math.round(( num1 * m + num2 * m ) / m * 100)/100;
                }

                function calMinus(num1,num2){
                    var sq1,sq2,m;
                    try{sq1=num1.toString().split(".")[1].length;} catch(e){sq1=0;}
                    try{sq2=num2.toString().split(".")[1].length;} catch(e){sq2=0;}
                    m=Math.pow(10,Math.max(sq1,sq2));
                    return Math.round(( num1 * m - num2 * m ) / m * 100)/100;
                }
                --></script>
            <style type="text/css">
                div.calenderdetail{
                    position: absolute;
                    display: none;
                    top: 0px;
                    left: 39px;
                    box-sizing:contect-box;
                    -moz-box-sizing:contect-box; /* Firefox */
                    -webkit-box-sizing:contect-box; /* Safari */
                    z-index: 100;
                    width: 222px;
                    border: 1px solid #F67645;
                    background-color: #fff;
                }
                .calItem{
                    width: 220px;
                    height: 29px;
                    line-height: 29px;
                    border-bottom: 1px solid #F67645;
                    zoom: 1;
                }
                .calItem:after{display:block;clear:both;visibility:hidden;height:0;content:'-';}
                .lefItem{
                    float: left;
                    display: inline-block;
                    width: 95px;
                    height: 29px;
                    line-height: 29px;
                    background-color: #F67645;
                    color: #fff;
                    font-size: 12px;
                    text-align: center;
                }
                .rigItem{
                    float: left;
                    display: inline-block;
                    width: 124px;
                    height: 28px;
                    line-height: 28px;
                    background-color: #fff;
                    color: #F67645;
                    font-size: 12px;
                    color: #F67645;
                    text-align: center;
                }
                .calMore{
                    width: 220px;
                    height: 28px;
                    line-height: 28px;
                    background-color: #fff;
                    text-align: right;
                }
                .link_more{
                    display: inline-block;
                    padding-right: 15px;
                    color: #F67645;
                    font-size: 12px;
                }
                .link_more:hover,.link_more:active{
                    color: #F85625;
                }
                .xdsoft_calendar td:hover div.calenderdetail{
                    display: block;
                }
                .xdsoft_calendar td{
                    position: relative;
                }
                .advIcon{
                    display: block;
                    position: absolute;
                    width: 26px;
                    height: 21px;
                    top: -4px;
                    left: -3px;
                }
                .advIcon img{
                    width: 100%;
                    height: 100%;
                }
                .b0-backDet{
                    width: 414px;
                    padding: 10px 0;
                    zoom: 1;
                }
                .b0-backDet:after{display:block;clear:both;visibility:hidden;height:0;content:'-';}
                .b0-backLef{
                    float: left;
                    width: 232px;
                    border-right: 1px solid #CDCDCD;
                    padding-left: 12px;
                }
                .b0-orange{
                    height: 24px;
                    line-height: 24px;
                }
                .b0-orange span,.b0-purple span{
                    display: inline-block;
                }
                .b0-purple{
                    height: 24px;
                    line-height: 24px;
                }
                .b0-orange .b0-lefTit{
                    color: #fb9c77;
                    font-size: 12px;
                }
                .b0-orange .b0-lefNum{
                    color: #f67645;
                    font-size: 16px;
                    font-weight: bold;
                }
                .b0-purple .b0-lefTit{
                    color: #cb7bcb;
                    font-size: 12px;
                }
                .b0-purple .b0-lefNum{
                    color: #b35db3;
                    font-size: 16px;
                    font-weight: bold;
                }
                .b0-backRig{
                    float: left;
                    width: 152px;
                    padding-left: 6px;
                }
                .b0-rigTop{
                    zoom: 1;
                    height: 23px;
                    line-height: 23px;
                    border-bottom: 1px solid #CDCDCD;
                }
                .b0-rigTop:after{display:block;clear:both;visibility:hidden;height:0;content:'-';}
                .b0-rigDis{
                    float: left;
                    position: relative;
                    width: 40px;
                    padding-left: 22px;
                }
                .b0-rigDis i{
                    display: block;
                    position: absolute;
                    width: 13px;
                    height: 13px;
                    left: 4px;
                    top: 5px;
                    border-radius: 50%;
                }
                .b0-rigBot{
                    zoom: 1;
                }
                .b0-rigBot:after{display:block;clear:both;visibility:hidden;height:0;content:'-';}
                .b0-iconAdv{
                    display: inline-block;
                    float: left;
                    margin-left: 4px;
                    width: 50px;
                    height: 25px;
                    background: url(statics/usercenter/images/iconAdv.png) no-repeat 0 5px;
                }
                .b0-botDet{
                    display: inline-block;
                    float: left;
                    font-size: 12px;
                    color: #4e4e4e;
                    margin-left: 13px;
                    line-height: 30px;
                }
                .b0-backMore{
                    display: inline-block;
                    float: left;
                    position: relative;
                    width: 16px;
                    height: 16px;
                    margin: 6px 0 0 12px;
                    background: url(statics/usercenter/images/b-question.png) no-repeat;
                    cursor: pointer;
                }
                .b0-backMore:hover span{
                    display: block;
                }
                .b0-backMore span{
                    display: none;
                    position: absolute;
                    width: 200px;
                    left: 22px;
                    top: -70px;
                    padding: 5px 8px;
                    line-height: 18px;
                    font-size: 12px;
                    color: #717171;
                    background-color: #fff;
                    border: 1px solid #b35db3;
                }
                .b0-backMore span i{
                    display: block;
                    position: absolute;
                    width: 8px;
                    height: 12px;
                    left: -8px;
                    top:70px;
                    background: url(statics/usercenter/images/borrow_arrow.png);
                }
                .b0-backMore span b{
                    font-weight:normal;
                    color:#0996cc;
                }
            </style>
        </div>

        <div class="m2-user-invest">
            <div class="m2-user-invest-head">
                <h3><i></i>最近投资记录<a href="usercenter-investcontrol-investrecord.html">更多</a></h3>
                <hr style="display:inline-block;width:148px;border:0;background-color:#0996cc
				;height:1px;margin-left:6px;"></h3>
                <hr style="display:inline-block;width:642px;border:0;background-color:#dadada;height:1px;margin-left:-4px;"></h3>
            </div>
            <div class="m2-user-invest-list">
                <table class="m2-userInvest-table"  cellpadding="0" cellspacing="0" >
                    <tr class="m2-userInevst-head" >
                        <th style="width:150px;">项目名称</th>
                        <th style="width:130px;">投资金额</th>
                        <th style="width:110px;">收益率</th>
                        <th style="width:120px;">计息日</th>
                        <th style="width:120px;">还款日</th>
                        <th style="width:148px;"></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div style="display:none;">
        <span id='ntitle'></span>
        <span id='nmsg'></span>
    </div>

    <script>
        $(function(){
            var scale=$("#mydetail_num").text()/$("#mydetail_num").attr("data")*100+"%";
            $("#growth_scale .bg").animate({width:scale},900);
            $('#sign').click(function(){
                var active_id='0';
                $.ajax({
                    type:"POST",
                    url: "/usercenter-Index-sign_in",
                    data: {active_id:active_id},
                    success: function (data) {
                        var obj=JSON.parse(data);
                        var data = obj.data;
                        if(obj.resultcode==41001){
                            if(data.level==4 ||data.level==5){
                                $("#mydetail_num").attr("data",data.growthvalue);
                            }else{
                                $("#mydetail_num").attr("data",parseInt(data.growthvalue+data.integral));
                            }
                            $("#mydetail_num").text(data.growthvalue);
                            $("#sign").css("backgroundColor","#b7b6b6");
                            $("#sign").text('已签到');
                            $('#day').html(parseInt($('#day').html())+1);
                            var growth=parseInt($('#growth').html())+1;
                            if (growth>=10){
                                growth=10;
                            }
                            $('#growth').html(growth);
                            $('#today').html('明天');
                            var scale=$("#mydetail_num").text()/$("#mydetail_num").attr("data")*100+"%";
                            $("#growth_scale .bg").animate({width:scale},900);
                            $('#integral').html(data.integral);
                            $('#vipname').html(data.name);
                            switch(data.level){
                                case 0:
                                    $('.right .m2-userMsg-iconLv a').attr('class','m2-iconLevel-normal');
                                    $('.right .m2-userMsg-iconLv a span').text('帮主');
                                    break;
                                case 1:
                                    $('.right .m2-userMsg-iconLv a').attr('class','m2-iconLevel-iron');
                                    $('.right .m2-userMsg-iconLv a span').text('铁帮主');
                                    break;
                                case 2:
                                    $('.right .m2-userMsg-iconLv a').attr('class','m2-iconLevel-copper');
                                    $('.right .m2-userMsg-iconLv a span').text('铜帮主');
                                    break;
                                case 3:
                                    $('.right .m2-userMsg-iconLv a').attr('class','m2-iconLevel-gold');
                                    $('.right .m2-userMsg-iconLv a span').text('金帮主');
                                    break;
                                case 4:
                                    $('.right .m2-userMsg-iconLv a').attr('class','m2-iconLevel-paltinum');
                                    $('.right .m2-userMsg-iconLv a span').text('白金帮主');
                                    $('#desc').text('您已然是一人之下，万人之上，无比荣耀');
                                    break;
                                case 5:
                                    $('.right .m2-userMsg-iconLv a').attr('class','m2-iconLevel-svip');
                                    $('.right .m2-userMsg-iconLv a span').text('特邀帮主');
                                    $('#desc').text('爱钱帮最高等级，王者荣耀');
                                    break;
                            }
                        }
                    }
                });
            })
        })
        var oP=document.getElementById('allP');
        var oClose=document.getElementById('close');
        //oP.style.display='none';
        oClose.onclick=function(){
            oP.style.display='none';
        };

        /**
         * 已结束的项目不允许查看合同
         */
        function linkContractContract(that){
            var bid=that.getAttribute('bid');
            var status = that.getAttribute('status');
            if(status==7||status==11){
                oP.style.display='block';
            } else {
                window.open("member-contract-investor.shtml?id="+bid,"_blank");
            }
        }
        /**
         * 已结束的项目不允许查看合同
         */
        function linkContracttransContract(that){
            var bid=that.getAttribute('bid');
            var status = that.getAttribute('status');
            if(status==7||status==11){
                oP.style.display='block';
            } else {
                window.open("member-contracttrans-investor.shtml?id="+bid,"_blank");
            }
        }
        /**
         * 已结束的项目不允许下载合同
         */
        function linkDownload(that){
            var bid=that.getAttribute('bid');
            var status = that.getAttribute('status');
            if(status==7||status==11){
                oP.style.display='block';
            } else {
                window.open("Member-Contract-createAndSendPdfbyid?id="+bid,"_blank");
            }
        }
    </script>

    <script>

        $(document).ready(function () {
            //用户通知
            getMsg();
            //用户问候语图标
            getGreeting();

            //用户认证
            userVerify();
            //收益金颜色
            moneyColor();
            //异步加载月收益图
            loadMonChart();
            fitBottom();
        });

        function getMsg() {

            var title = $('<div>' + $('#ntitle').text() + '</div>').text();
            var msg = $('<div>' + $('#nmsg').text() + '</div>').text();
            if (title == '') {
                $('.m2-msgBox').hide();
            }
            if (title.length > 10) {
                $('#notice-text').text(title);
            } else {
                if (!msg) {
                    $('.m2-msgBox').hide();
                } else {
                    if (msg.length > 55) {
                        msg = msg.substr(0, 55);
                        msg += '...  ';
                    }
                    $('#notice-text').text(msg);
                }
            }
        }

        function getGreeting() {

            var date = new Date();
            var H = date.getHours();
            if (H < 5) {
                icon = '<i class="m2-hello-nig">';
            } else if (H < 12) {
                icon = '<i class="m2-hello-mor">';
            } else if (H < 18) {
                icon = '<i class="m2-hello-aft">';
            } else if (H < 20) {
                icon = '<i class="m2-hello-nig">';
            } else {
                icon = '<i class="m2-hello-nig">';
            }
            $('#greeting').prepend(icon);
        }

        function userVerify() {

            var i = 0;
            if (1 == '0') {
                $('#verify_id').prop('class', 'm2-iconUser-tur');
                i++;
            }
            if (1 == '1') {
                $('#verify_phone').prop('class', 'm2-iconPho-tur');
                i++;
            }
            if (1 == '0') {
                $('#verify_email').prop('class', 'm2-iconEmail-tur');
                i++;
            }
            if (i == 1) {
                $('#safe_level').text('低');
            } else if (i == 2) {
                $('#safe_level').text('中');
            } else if (i == 3) {
                $('#safe_level').text('高');
                $('#safe_level_url').hide();
            } else {
                $('#safe_level').text('极低');
            }
            var j = 0;
            $('#safe_level_bar i').each(function () {
                if (j < i) {
                    $(this).prop('class', 'm2-levelIcon-tur');
                    j++;
                }
            });
        }

        function moneyColor() {

            var a;
            $('span.m2-detailNum-fal').each(function () {
                a = $(this).text();
// 			if(!isNaN(a)){
                if (a != 0) {
                    $(this).prop('class', 'm2-detailNum-tur');
                } else {
                    $(this).text('0.00');
                }
// 			}
            });
        }

        function loadMonChart() {

            $('.m2-chartLoading').show();
            $.ajax({
                url: "usercenter-Index-getIncomeList",
                data: {},
                success: function (data) {
                    $('.m2-chartLoading').hide();
                    var obj = eval('(' + data + ')');
                    monthData = getList(obj.monlist, 'income');
                    monthCate = getList(obj.monlist, 'month');
                    dailyData = getList(obj.daylist, 'income');
                    dailyCate = getList(obj.daylist, 'day');
                    loadChartmonth(monthData, monthCate);
                }
            });
        }

        function getList(data, key) {
            var l = Array();
            for (k in data) {
                l.push(data[k][key]);
            }
            return l;
        }
        function getPaymentDetail(date) {
            //日期.分割
            window.location.href = '/usercenter-investcontrol-dayrepayment?date=' + date;
        }
        //日历日期点击事件
        function getPaymentList(y, m, d) {
            window.location.href = '/usercenter-investcontrol-dayrepayment?date=' + y + '.' + m + '.' + d;
        }


        //提示框
        function showMsgs(text) {
            $('#dialog-info-div').show();
            $('#dialog-info-text').text(text);
        }

        //js:
        //$().shijian
        //$(".class")
        //$("#id")


        //close
        $('.m2-userCentercommon-confirmClose,.m2-user-confirmBtn').click(function(){
            $('#dialog-info-div').hide();
            $('#dialog-info-text').text("");
        });
        var card = '';

        function showMsg() {

            //当前银行卡
            if(!card) {
                //没有绑卡
                showMsgs('您还未绑卡，现在确定去绑卡吗？');
                return;
            } else {
                $('.m2-userCommon-confirmSuc').html('使用一键转账功能可将您的汇付账户中资金转移至您的徽商银行账户（无任何手续费），资金预计在1-3个工作日内到账，请耐心等候！');
                $('.m2-userCentercommon-bg').show();
                //  $('.m2-userCentercommon-confirm').show();
                $('#dialog-info-div1').show();
                return;
            }
        }
    </script>
    <script type="text/javascript" src="statics/usercenter/js/m2-userCenter.js?20160520"></script>
</div>
</div>
</body>
</html>