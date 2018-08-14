<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title>微商中心</title>
    <link href="/Public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/Public/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/store.css?bc" rel="stylesheet" type="text/css" />
	<link href="/Public/css/user.css" rel="stylesheet" type="text/css" />
	<script src="/Public/js/jquery.min.js" type="text/javascript"></script>
	<script src="/Public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	
	
</head>

<body>
	<div class="header-blank"></div>
    <div class="header">
		商城首页
		<span class="left">
			<a href="<?php echo U('Index/ucenter');?>" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		</span>
	</div>
	
	<div class="profile-main">
		<form method="post" name="form" id="form">
			<div class="head">
				<img src="<?php echo ($user["headimg"]); ?>" class="headimg" /><br/>
				<!--我的奇妙天使：<span class="red">奇妙微商&杨斌</span>-->
				<?php echo ($user["nickname"]); ?>
			</div>
			<div class="profile-item">
				真实姓名<br/>
				<input type="text" name="true_name" <?php if(!empty($user['true_name'])): ?>value='<?php echo ($user["true_name"]); ?>' readonly<?php endif; ?> /><br/>
				<span class="gray">设置后无法修改</span>
			</div>
			<div class="profile-item">
				身份证号码<br/>
				<input type="text" name="cardno" <?php if(!empty($user['cardno'])): ?>value='<?php echo ($user["cardno"]); ?>' readonly<?php endif; ?> /><br/>
				<span class="gray">设置后无法修改</span>
			</div>
			<div class="profile-item">
				手机号码<br/>
				<input type="text" name="mobile"  <?php if(!empty($user['mobile'])): ?>value='<?php echo ($user["mobile"]); ?>'<?php endif; ?> /><br/>
				<span class="gray">此信息很重要</span>
			</div>
			<div class="profile-item">
				性别<br/>
				<input type="radio" name="sex" value="1" <?php if($user['sex'] == 1): ?>checked<?php endif; ?> />男&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="sex" value="2" <?php if($user['sex'] == 2): ?>checked<?php endif; ?> />女
			</div>
			<div class="profile-item">
				生日<br/>
				<input type="text" name="birth" <?php if(!empty($user['birth'])): ?>value='<?php echo ($user["birth"]); ?>'<?php endif; ?> />
			</div>
			
			<div class="profile-item">
				<input type="submit" class="btn" value="保存地址" />
				<a href="" class="cancle">取消</a>
			</div>
		</form>
	</div>
	
	<div class="footer-blank"></div>
	<div class="footer">
		<ul>
			<li>
				<a href="<?php echo U('Index/index');?>">
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					商城首页
				</a>
			</li>
			<li>
				<a href="<?php echo U('Index/all');?>">
					<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
					全部商品
				</a>
			</li>
			<li>
				<a href="javascript:;" id="search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					搜索
				</a>
			</li>
			<li>
				<a href="<?php echo U('Index/cart');?>">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
					购物车
				</a>
			</li>
			<li>
				<a href="<?php echo U('Index/ucenter');?>">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					微商中心
				</a>
			</li>
		</ul>
	</div>
	<style>
	.search-mask{ position:fixed; top:0; left:0; width:100%; height:100%; background:#000; opacity:.5; z-index:9999; display:none;}
	.search{ height:40px; width:100%; position:fixed; left:0; bottom:50px; z-index:999999;  padding:0 10px; box-sizig:border-box; display:none;}
	.search #keyword{ width:100%; height:40px; line-height:40px; background:#fff; border:1px solid red; padding-left:5px;}
	.search .search-btn{position:absolute; right:10px;; top:0; float:right; height:40px; width:80px; background:red;
		color:#fff; line-height:40px; text-align:center;
	}
	.search .triangle{ position:absolute; left:50%; top:37px; margin-left:-6px; color:red}
	</style>
	<div class="search-mask"></div>
	<div class="search">
		<form action="<?php echo U('all');?>" method="post" name="searchForm" id="searchForm">
			<input type="text" name="keyword" id="keyword" />
			<span class="search-btn">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				搜索
			</span>
		</form>
		<span class="glyphicon glyphicon-triangle-bottom triangle"></span>
	</div>
	
	<div style="display:none; position:absolute; top:-9999px; left:-9999px;">
		<img src="" _src="<?php echo U('data');?>" id="lazyload" />
	</div>
	<script>
	$(document).ready(function(e){
		$("#search").on('click',function(){
			showSearch();
		});
		
		$(".search-mask").on('click',function(){
			hideSearch();
		});
		
		$(".search-btn").on('click',function(){
			searchForm.submit();
		});
		
		function showSearch(){
			$(".search-mask").show();
			$('.search').show();
		}
		
		function hideSearch(){
			$(".search-mask").hide();
			$('.search').hide();
		}
		
		$("#lazyload").attr('src',$("#lazyload").attr('_src'));
	});
	</script>

</body>
</html>