<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title>订单支付</title>
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
		订单支付
	</div>
	
	<div class="orderpay-main">
		<form method="post" action="<?php echo U('Index/pay?order_id='.$info['id']);?>" name="form" id="form">
			<div class="orderpay-tips">订单提交成功，请尽快支付！</div>
			<div class="orderpay-info">
				<p>订单号：<?php echo ($info["sn"]); ?></p>
				<p>商品总价：<?php echo ($info["total"]); ?></p>
				<p>&nbsp;</p>
				<p>应付金额：<?php echo ($info['total']-$info['wxpay']-$info['points']-$info['money']); ?></p>
			</div>
			<div class="orderpay-pay">
				<p>
					<input type="checkbox" name="points" value="1" /> <?php echo ($_CFG["site"]["points_name"]); ?>支付(可抵：￥<?php echo sprintf('%.2f',$user['points']/$_CFG['site']['points_rate']);?>)
				</p>
				<p>
					<input type="checkbox" name="money" value="1" /> 余额支付(可用：￥<?php echo ($user["money"]); ?>)
				</p>
				<p>
					<input type="checkbox" name="wxpay" value="1" checked readonly /> 微信安全支付
				</p>
				<p>
					提示:<?php echo ($_CFG["site"]["points_rate"]); echo ($_CFG["site"]["points_name"]); ?> 相当于1元RMB
				</p>
			</div>
			<div class="orderpay-btn">
				<a href="javascript:;" onclick="form_submit()">立即支付</a>
			</div>
			<script>
				var need = <?php echo ($info['total']-$info['wxpay']-$info['points']-$info['money']); ?>;
				var points = <?php echo ($user["points"]); ?>;
				var money = <?php echo ($user["money"]); ?>;
				
				function form_submit(){
					// 没有勾选微信支付则判断余额是否足够
					if(!$("input[name=wxpay]").is(':checked')){
						var have = 0;
						if($("input[name=points]").is(':checked')){
							have += points;
						}
						if($("input[name=money]").is(':checked')){
							have += money;
						}
						if(have < need){
							alert('所选择的支付方式余额不够,请勾选微信支付');
							return false;
						}
					}					
					form.submit();
				}
			</script>
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