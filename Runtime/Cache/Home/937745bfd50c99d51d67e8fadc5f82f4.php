<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta content="telephone=no" name="format-detection" />
    <title>我的报修</title>
    <link href="Public/Home/Index/css/main.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/style.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/shake.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Home/Index/css/idangerous.swiper.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="Public/Home/Index/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="Public/Home/Index/js/wo.js"></script>
</head>
<body style="background-color: #fff !important;">

<div class="warpe">
    <div class="head">
        <a href="#" class="return"><i class="icon-chevron-left"></i> 返回</a>
        我的报修
        <a href="community_sign.html" class="search"><i class="icon-edit"></i> </a>
    </div>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="content-slide">
                        <div class="mess">
                            <ul>
                                <li class="animated fadeInRight">
                                    <a href="message2.html">
                                        <div class="messdiv">
                                            <div class="mess_t"><span><a href="<?php echo U('Article/detail?id='.$data['id']);?>"><?php echo ($data["title"]); ?></a></span><font class="color_g puff_right"><?php echo (date('Y-m-d H:i',$data["time"])); ?></font></div>
                                            <div class="mess_b">
                                                <p class="color_g"><?php echo ($data["description"]); ?></p>
                                            </div>
                                            <span style="color: #00cc00;"><?php if($data['status']==0){echo '未处理';} if($data['status']==1){echo '处理中';} if($data['status']==2){echo '处理完成';}?></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <script type="text/javascript" src="Public/Home/Index/js/idangerous.swiper.min.js"></script>
    <script type="text/javascript">
        var tabsSwiper = new Swiper('.swiper-container',{
            speed:500,
            onSlideChangeStart: function(){
                $(".tabs .active").removeClass('active');
                $(".tabs a").eq(tabsSwiper.activeIndex).addClass('active');
            }
        });
        $(".tabs a").on('touchstart mousedown',function(e){
            e.preventDefault()
            $(".tabs .active").removeClass('active')
            $(this).addClass('active')
            tabsSwiper.slideTo( $(this).index() )
        })
        $(".tabs a").click(function(e){
            e.preventDefault()
        })
    </script>
</div>
</body>
</html>