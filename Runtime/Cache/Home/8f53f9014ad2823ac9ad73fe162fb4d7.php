<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<meta content="telephone=no" name="format-detection" />
	<title>在线报修</title>
	<link href="Public/Home/Index/css/main.css" rel="stylesheet" type="text/css">
	<link href="Public/Home/Index/css/style.css" rel="stylesheet" type="text/css">
	<link href="Public/Home/Index/css/shake.css" rel="stylesheet" type="text/css">
	<link href="Public/Home/Index/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="Public/Home/Index/css/animate.min.css" rel="stylesheet" type="text/css">
	<link href="Public/Home/Index/css/idangerous.swiper.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="Public/Home/Index/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="Public/Home/Index/js/wo.js"></script>
	<style>
		.search{font-size: 1.4rem;}
	</style>
</head>
<body>
<div class="warpe">
	<div class="reveal-modal-bg dis_none"></div>
	<div class="head">
		<a href="#" class="return"><i class="icon-chevron-left"></i> 返回</a>
		在线报修
		<a href="<?php echo U('Pro/myrepair');?>" class="search">我的报修</a>
	</div>
	<div class="I_div">
		<div class="car_t"></div>
		<div class="inter_add">
			<form action="<?php echo U();?>" method="post" class="form-horizontal" id="form_">
				<input type="hidden" name="pid" value="<?php echo ($pid); ?>">

			<ul>
				<li class="animated bounceInLeft">


					<div class="reginput">
						<input type="text" class="text input-large" name="name" value="<?php echo ((isset($info["title"]) && ($info["title"] !== ""))?($info["title"]):''); ?>" placeholder="报修人姓名">
					</div>



				</li>
				<li class="animated bounceInRight">
					<div class="reginput">
						<input type="text" class="text input-large" name="tel" value="<?php echo ((isset($info["url"]) && ($info["url"] !== ""))?($info["url"]):''); ?>" placeholder="报修人电话">
					</div>
				</li>
				<li class="animated bounceInLeft">
					<div class="reginput">
						<input type="text" class="text input-large" name="address" value="<?php echo ((isset($info["url"]) && ($info["url"] !== ""))?($info["url"]):''); ?>" placeholder="地址">
					</div>
				</li>
				<li class="animated bounceInRight clear_border">
					<div class="reginput">
						<input type="text" class="text input-large" name="title" value="<?php echo ((isset($info["url"]) && ($info["url"] !== ""))?($info["url"]):''); ?>" placeholder="标题">
					</div>
				</li>
				<li class="animated bounceInRight clear_border">

						<textarea style="resize: none;font-size: large" name="content" rows='10' cols='70' placeholder="请详细说明您的问题"></textarea>

				</li>
			</ul>
				<div class="id_bth inersest_bth animated bounceIn" style="margin-top: 2rem;">
					<a  href="javascript:;"  onclick='aa()'  >提交</a>
				</div>

			</form>
		</div>
		<p class="w_txt">报修后请您耐心等待~</p>
	</div>
</div>
</body>
<script type="text/javascript">
    function aa(){
        document.getElementById("form_").submit();
    }
</script>
</html>