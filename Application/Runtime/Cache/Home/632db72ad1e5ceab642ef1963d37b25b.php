<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title><?php echo ($pagetitle); ?></title>
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
		<?php echo ($pagetitle); ?>
		<span class="left">
			<a href="javascript:;" onclick="history.go(-1)"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		</span>
		<span class="right">
			<a href="javascript:;" id="showCates"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
		</span>
	</div>
	
	<div class="cover">
	</div>
	<div class="cates">
		<ul>
			<li><a href="<?php echo U('all');?>">全部商品</a></li>
			<?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('all?cate_id='.$vo['id']);?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<span class="close">×</span>
	</div>
	<script>
	$(document).ready(function(e){
		w = $(this).width();
		h = $(this).height();
		
		// 点击关闭按钮或者遮罩
		$(".cates .close").on('click',function(){close();});
		$(".cover").on('click',function(){close();});
		
		// 显示分类
		$("#showCates").on('click',function(){
			showCates();
		});
		
		function close(){
			$(".cover").hide();
			$(".cates").animate({right:'-150px'},function(){
				$(this).hide();
			});
		}
		
		function showCates(){
			$(".cover").show();
			$(".cates").show(100,function(e){
				$(this).animate({right:'0px'});;
			})
			
		}
	});
	</script>
	
	<div class="all-sort-blank"></div>
	<div class="all-sort">
		<ul>
			<li <?php if($_GET['order'] == ''): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/all');?>">默认</a></li>
			<li <?php if($_GET['order'] == 'price'): ?>class="active"<?php endif; ?>>
				<a href="<?php if($_GET['order'] == 'price' && $_GET['type'] == 'desc')echo U('Index/all?order=price&type=asc&cate_id='.$_GET['cate_id']);else echo U('Index/all?order=price&type=desc&cate_id='.$_GET['cate_id'])?>">
					价格
					<span class="glyphicon glyphicon-triangle-<?php if($_GET['order'] == 'price' && $_GET['type'] == 'desc')echo 'bottom';else echo 'top';?>" aria-hidden="true"></span>
				</a>
			</li>
			<li <?php if($_GET['order'] == 'sold'): ?>class="active"<?php endif; ?>>
				<a href="<?php if($_GET['order'] == 'sold' && $_GET['type'] == 'desc')echo U('Index/all?order=sold&type=asc&cate_id='.$_GET['cate_id']);else echo U('Index/all?order=sold&type=desc&cate_id='.$_GET['cate_id'])?>">
					销量
					<span class="glyphicon glyphicon-triangle-<?php if($_GET['order'] == 'sold' && $_GET['type'] == 'desc')echo 'bottom';else echo 'top';?>" aria-hidden="true"></span>
				</a>
			</li>
		</ul>
	</div>
	
	<div class="all-main">
		<div class="all-msg">
			找到相关商品<?php echo ($count); ?>件
		</div>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="all-item">
			<a href="<?php echo U('Index/product?id='.$vo['id']);?>">
				<img src="<?php echo ($vo["pic"]); ?>" class="product" />
				<div class="title"><?php echo ($vo["title"]); ?></div>
				<div class="price">￥<?php echo ($vo["price"]); ?></div>
			</a>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="page">
		<?php echo ($page); ?>
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