<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
     	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title>订单列表</title>
    <link href="/Public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/Public/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/store.css?bc" rel="stylesheet" type="text/css" />
	<link href="/Public/css/user.css" rel="stylesheet" type="text/css" />
	<script src="/Public/js/jquery.min.js" type="text/javascript"></script>
	<script src="/Public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	
	
</head>

<body style="background:#f2f2f2;">
	<div class="header-blank"></div>
    <div class="header">
		订单列表
		<span class="left">
			<a href="javascript:;" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		</span>
	</div>
	
	<div class="orderlist-tab-blank"></div>
	<div class="orderlist-tab">
		<ul>
			<li <?php if($_GET['before'] == ''): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/order_list');?>">近一个月的订单</a></li>
			<li <?php if($_GET['before'] != ''): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/order_list?before=1');?>">一个月前的订单</a></li>
		</ul>
	</div>
	<div class="orderlist-main">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="orderlist-item">
			<div class="no"><?php echo ($vo["sn"]); ?></div>
			<div class="money">
				<span class="detail"><a href="<?php echo U('Index/order_detail?id='.$vo['id']);?>">查看详情</a></span>
				<span class="gray">金额:</span>￥<?php echo ($vo["total"]); ?>
			</div>
			<div class="time"><span class="gray">时间:</span><?php echo (date("Y-m-d H:i:s", $vo["create_time"])); ?></div>
			<div class="product">
				<?php if(is_array($vo['products'])): $i = 0; $__LIST__ = $vo['products'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><img src="<?php echo ($v["pic"]); ?>" /><?php endforeach; endif; else: echo "" ;endif; ?>
				<span class="right"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></span>
			</div>
			<div class="status">
				订单状态：<span class="red"><?php echo get_order_status($vo['status']);?></span>
				<?php if($vo['status'] == 3): ?><a href="<?php echo U('order_confirm?id='.$vo['id']);?>" class="btn">确认收货</a><?php endif; ?>
				<?php if($vo['status'] == 1): ?><a href="<?php echo U('Index/order_pay?id='.$vo['id']);?>" class="btn">去支付</a><?php endif; ?>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
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