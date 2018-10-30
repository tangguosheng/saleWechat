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
		微商中心
		<span class="left">
			<a href="<?php echo U('Index/index');?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		</span>
	</div>
	<div class="ucenter-main">
		<div class="uc-header">
			<table>
				<tr>
					<td>
						<img src="<?php echo ($user["headimg"]); ?>" class="headimg" />
						<div class="level"><?php if($user['sex'] > 1): ?>♀<?php else: ?>♂<?php endif; echo ($_CFG['level'][$user['level']]['name']); ?></div>
					</td>
					<td valign="top">
						<div class="nickname"><?php echo ($user["nickname"]); ?></div>
						<div class="username">关注编码：<?php echo ($_CFG["site"]["prefix"]); echo ($user["id"]); ?></div>
						<div class="parent"><?php echo ($_CFG["dist"]["parent_name"]); ?>：<?php echo ($parent_name); ?></div>
					</td>
				</tr>
			</table>
			<div class="bar">
				<ul>
					<li><a href="<?php echo U('log');?>">余额：<?php echo ((isset($user["money"]) && ($user["money"] !== ""))?($user["money"]):0); ?></a></li>
					<li><a href="<?php echo U('separate');?>">分成：<?php echo ((isset($separate) && ($separate !== ""))?($separate):0); ?></a></li>
					<li><a href="<?php echo U('log?type=points');?>"><?php echo ($_CFG["site"]["points_name"]); ?>：<?php echo ((isset($user["points"]) && ($user["points"] !== ""))?($user["points"]):0); ?></a></li>
				</ul>
			</div>
		</div>
		
		<?php if(!empty($notice)): ?><div class="uc-notice">
			<a href="<?php echo U('Index/notice_detail?id='.$notice['id']);?>"><span class="edage"><span class=" glyphicon glyphicon-volume-up">公告</span></span> <?php echo ($notice["title"]); ?></a>
		</div><?php endif; ?>
		
		<?php if($_CFG['level'][$user['level']]['dist'] > 0): ?><div class="uc-list">
			<ul>
				<li>
					<a href="<?php echo U('Index/my_agent');?>">
						<span class="glyphicon glyphicon-transfer left" aria-hidden="true" style="background:#9ed365;"></span>
						我的下级
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/separate');?>">
						<span class="glyphicon glyphicon-transfer left" aria-hidden="true" style="background:#9ed365;"></span>
						我的分成
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/qrcode');?>">
						<span class="glyphicon glyphicon-qrcode left" aria-hidden="true" style="background:#3670BE;"></span>
						推广二维码
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
			</ul>
		</div><?php endif; ?>
		
		<div class="uc-list">
			<ul>
				<li>
					<a href="<?php echo U('Index/rank');?>">
						<span class="glyphicon glyphicon-list left" aria-hidden="true" style="background:#9ed365;"></span>
						<?php echo ($_CFG["site"]["rank_name"]); ?>
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/order_list');?>">
						<span class="glyphicon glyphicon-list-alt left" aria-hidden="true" style="background:#88abe4;"></span>
						订单管理
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
				<?php if($_CFG['level'][$user['level']]['deposit'] > 0): ?><li>
					<a href="<?php echo U('Index/deposit');?>">
						<span class="glyphicon glyphicon-retweet left" aria-hidden="true" style="background:#7688A0;"></span>
						余额转让
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li><?php endif; ?>
				<li>
					<a href="<?php echo U('Index/charge');?>">
						<span class="glyphicon glyphicon-briefcase left" aria-hidden="true" style="background:#56DF6C;"></span>
						在线充值
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
				<?php if($_CFG['level'][$user['level']]['withdraw'] > 0): ?><li>
					<a href="<?php echo U('withdraw');?>">
						<span class="glyphicon glyphicon-import left" aria-hidden="true" style="background:#E55460;"></span>
						提现管理
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li><?php endif; ?>
				<li>
					<a href="<?php echo U('Index/bankcard');?>">
						<span class="glyphicon glyphicon-credit-card left" aria-hidden="true" style="background:#3670BE;"></span>
						银行卡管理
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
			</ul>
		</div>
		
		<div class="uc-list">
			<ul>
				<li>
					<a href="<?php echo U('Index/sync_profile');?>">
						<span class="glyphicon glyphicon-transfer left" aria-hidden="true" style="background:#9ed365;"></span>
						同步微信资料
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/profile');?>">
						<span class="glyphicon glyphicon-user left" aria-hidden="true" style="background:#64cbad;"></span>
						个人资料
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/addr');?>">
						<span class="glyphicon glyphicon-tag left" aria-hidden="true" style="background:#f76a6a;"></span>
						地址管理
						<span class="glyphicon glyphicon-chevron-right right" aria-hidden="true"></span>
					</a>
				</li>
			</ul>
		</div>
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