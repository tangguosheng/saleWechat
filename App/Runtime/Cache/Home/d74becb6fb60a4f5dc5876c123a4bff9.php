<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title>提现申请</title>
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
		提现申请
		<span class="left">
			<a href="javascript:;" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		</span>
	</div>
	
	<div class="withdrawadd-main">
		<form method="post" name="form" id="form">
			<?php if(!empty($errmsg)): ?><blockquote>
			  <p>提示:</p>
			  <p><?php echo ($errmsg); ?></p>
			</blockquote><?php endif; ?>
			<div class="withdrawadd-avail">
				<label>可提现金额:</label><br/>
				<span class="red">￥<?php echo ($user["money"]); ?></span>
			</div>
			<div class="withdrawadd-info gray">
				提现说明:每周一统一处理提现申请;提现金额必须50起，均按50的倍数提现否则无法通过审核！
			</div>
			<div class="withdrawadd-accept">
				<label>申请提现：</label><br/>
				<div class="input-group">
					<input type="text" class="form-control" name="money" placeholder="0.00" aria-describedby="basic-addon1">
					<span class="input-group-addon" id="basic-addon1">元</span>
				</div>
				<span class="gray">即日起将统一收取5%的服务费</span>
			</div>
			
			<div class="depositadd-accept">
				<label>开户银行：</label><br/>
				<select name="bank" class="myselect">
					<?php if(is_array($banks)): $i = 0; $__LIST__ = $banks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["bank"]); ?>(<?php echo ($vo["cardno"]); ?>)</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
			<div class="depositadd-btn">
				<a href="javascript:;" onclick="form_submit()">提交申请</a>
			</div>
			<script>
			function form_submit(){
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