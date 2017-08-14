<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta content="telephone=no" name="format-detection" />
    <title>首页</title>
    <link href="Public/Home/Index/css/main.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/style.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/shake.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/animate.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="Public/Home/Index/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="Public/Home/Index/js/wo.js"></script>
</head>
<body>

<div class="warpe">
    <div class="banner">
        <div class="swipe">
            <ul id="slider">
                <li>
                    <a href="#"><img src="Public/Home/Index/img/banner.jpg" alt="" /></a>
                </li>
                <li>
                    <a href="#"><img src="Public/Home/Index/img/banner.jpg" alt="" /></a>
                </li>

            </ul>
            <div id="pagenavi">
                <a href="javascript:void(0);" class="active"></a>
                <a href="javascript:void(0);" class=""></a>

            </div>
        </div>


        <div class="mess_iocn mess_iocn2 animated rotateIn">
            <a href="message.html">
                <i class="icon-user puff_left"></i>
                <span></span>
            </a>
        </div>
    </div>

    <div class="nav">
        <ul>
            <li>
                <a href="#">
                    <p><img src="Public/Home/Index/img/icon_fk.png" class="animated bounceIn"></p>
                    <span>商家活动</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <p><img src="Public/Home/Index/img/icon_jk.png" class="animated bounceIn"></p>
                    <span>小区活动</span>
                </a>
            </li>

            <li>
                <a href="<?php echo U('/Home/Article/lists/category/Notice');?>">
                    <p><img src="Public/Home/Index/img/icon_wifi.png" class="animated bounceIn"></p>
                    <span>小区通知</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <p><img src="Public/Home/Index/img/icon_cy.png" class="animated rotateIn"></p>
                    <span>便民服务</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <p><img src="Public/Home/Index/img/icon_jjqy.png" class="animated bounceIn"></p>
                    <span>小区租售</span>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Pro/add');?>">
                    <p><img src="Public/Home/Index/img/icon_sq.png" class="animated rotateIn"></p>
                    <span>在线报修</span>
                </a>
            </li>
        </ul>
    </div>

</div>
<div class="navside">
    <ul>
        <li class="margin_left animated bounceInLeft">
            <a href="#" class="navside_hover">
                <p><i class="icon-home"></i> </p>
                <span>首页</span>
            </a>
        </li>
        <li class="animated bounceInRight">
            <a href="#">
                <p><i class="icon-globe"></i> </p>
                <span>智能中心</span>
            </a>
        </li>
        <li class="animated bounceInLeft">
            <a href="Service_Centre.html">
                <p><i class="icon-star-empty"></i> </p>
                <span>服务中心</span>
            </a>
        </li>
        <li class="animated bounceInRight">
            <a href="#">
                <p><i class="icon-columns"></i> </p>
                <span>社区互动</span>
            </a>
        </li>
        <li class="animated bounceInLeft">
            <a href="Information_index.html">
                <p><i class="  icon-th-large"></i> </p>
                <span>信息中心</span>
            </a>
        </li>
    </ul>
</div>
<script type="text/javascript" src="Public/Home/Index/js/slide_wap.js"></script>
<script type="text/javascript" src="Public/Home/Index/js/common.js"></script>
</body>
</html>