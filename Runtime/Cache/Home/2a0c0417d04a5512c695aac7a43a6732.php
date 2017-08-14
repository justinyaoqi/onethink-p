<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<meta content="telephone=no" name="format-detection" />
	<title>通知详情</title>
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
		通知详情
	</div>
	<br>
	<h4 style="text-align: center"><?php echo ($info["title"]); ?></h4><br>

	<p  style="text-indent: 2em;font-size: large;" id="contents"><?php echo ($info["content"]); ?></p>
<br>
	<span  style="display:block" class="pull-left">
		<span class="author"><font style="font-size: medium" class="color_g puff_left">发布者：<?php echo (get_username($info["uid"])); ?></font></span><br>
		<span><font style="font-size: medium" class="color_g puff_right"> 发表于 <?php echo (date('Y-m-d H:i',$info["create_time"])); ?></font></span>
	</span>



</div>

</body>
</html>