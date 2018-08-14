<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title>我的代理</title>
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
		我的代理
		<span class="left">
			<a href="<?php echo U('Index/ucenter');?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		</span>
	</div>
	
	<div class="myagent-main">
		<div class="myagent-tab">
			<ul>
				<li <?php if($_GET['type'] == 1): ?>class="active"<?php endif; ?>><a href="<?php echo U('my_agent?type=1');?>"><?php echo ($_CFG["dist"]["level1_name"]); ?><p><span class="edage"><?php echo ($user["agent1"]); ?></span></p></a></li>
				<li <?php if($_GET['type'] == 2): ?>class="active"<?php endif; ?>><a href="<?php echo U('my_agent?type=2');?>"><?php echo ($_CFG["dist"]["level2_name"]); ?><p><span class="edage"><?php echo ($user["agent2"]); ?></span></p></a></li>
				<li <?php if($_GET['type'] == 3): ?>class="active"<?php endif; ?>><a href="<?php echo U('my_agent?type=3');?>"><?php echo ($_CFG["dist"]["level3_name"]); ?><p><span class="edage"><?php echo ($user["agent3"]); ?></span></p></a></li>
			</ul>
		</div>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="myagent-item">
			<img src="<?php echo ($vo["headimg"]); ?>" class="headimg"/>
			<div class="nickname"><?php echo ($vo["nickname"]); ?></div>
			<!--div class="info">
				<!--span class="level">{ $level_name[$vo['level']]}</span-->
				<!--span class="expense">累计佣金:￥{ $vo.expense_total}</span-->
			</div-->
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<!--div class="myagent-item">
			<img src="/Public/images/product-test.jpg" class="headimg"/>
			<div class="nickname">阿拉丁龙哥</div>
			<div class="info">
				<span class="level">见习男神</span>
				<span class="expense">累计佣金:￥111</span>
			</div>
		</div-->
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