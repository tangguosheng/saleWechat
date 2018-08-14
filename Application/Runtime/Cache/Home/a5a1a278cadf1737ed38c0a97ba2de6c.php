<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title>推广二维码</title>
    <link href="/Public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/Public/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/store.css?bc" rel="stylesheet" type="text/css" />
	<link href="/Public/css/user.css" rel="stylesheet" type="text/css" />
	<script src="/Public/js/jquery.min.js" type="text/javascript"></script>
	<script src="/Public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	
	
</head>

<body>
	<!--div class="header-blank"></div>
    <div class="header">
		推广二维码
		<span class="left">
			<a href="<?php echo U('Index/ucenter');?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		</span>
	</div-->
	
	<div class="qrcode-main">
		生成中需要5秒左右，请稍后...
		<img src="<?php echo U('Index/get_qrcode');?>" id="qrcode" style=" width:100%" />
		
		<script>
		$(document).ready(function(d){
			h = $(window).height();
			img_h = h;// - 90;
			$("#qrcode").height(img_h+"px");
		});
		</script>
	</div>
	<!--include file="include/bottom" /-->


</body>
</html>