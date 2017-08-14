<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <title>登录</title>
    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps -->
    <!-- Style --> <link rel="stylesheet" href="/public/css/style.css" type="text/css" media="all" />
    <script src="/Public/static/bootstrap/js/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>;)请登录</h1>
    <div class="signin">
        <form class="login-form" action="/Home/User/login" method="post">
            <input type="text" id="inputEmail" class="user" placeholder="请输入用户名"  ajaxurl="/member/checkUserNameUnique.html" errormsg="请填写1-16位用户名" nullmsg="请填写用户名" datatype="*1-16" value="" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
            <input type="password" id="inputPassword"  class="pass" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
            <div class="control-group">
                <label class="control-label" for="inputPassword">验证码</label>
                <div class="controls">
                    <input type="text" id="inputPassword" class="user" placeholder="请输入验证码"  errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify">
                </div><br>
            </div>
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify');?>" style="cursor:pointer;">
                </div>
                <div class="controls Validform_checktip text-warning"></div>
            </div>
            <label>
                <input type="checkbox"  /> 自动登录?
            </label>
            <input type="submit" value="登录" />
        </form>
    </div>
</div>
<div class="footer">
    <p>Copyright &copy; 2015 Lucid Login Form. All Rights Reserved   </p>
</div>

<script type="text/javascript">

    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>


<script type="text/javascript">

    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "", //当前网站地址
            "APP"    : "/index.php?s=", //当前项目地址
            "PUBLIC" : "/Public", //项目公共目录地址
            "DEEP"   : "/", //PATHINFO分割符
            "MODEL"  : ["3", "", "html"],
            "VAR"    : ["m", "c", "a"]
        }
    })();
</script>

<script type="text/javascript">

    $(document)
        .ajaxStart(function(){
            $("button:submit").addClass("log-in").attr("disabled", true);
        })
        .ajaxStop(function(){
            $("button:submit").removeClass("log-in").attr("disabled", false);
        });


    $("form").submit(function(){
        var self = $(this);
        $.post(self.attr("action"), self.serialize(), success, "json");
        return false;

        function success(data){
            if(data.status){
                window.location.href = data.url;
            } else {
                self.find(".Validform_checktip").text(data.info);
                //刷新验证码
                $(".reloadverify").click();
            }
        }
    });

    $(function(){
        var verifyimg = $(".verifyimg").attr("src");
        $(".reloadverify").click(function(){
            if( verifyimg.indexOf('?')>0){
                $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
            }else{
                $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
            }
        });
    });
</script>

</body>
</html>