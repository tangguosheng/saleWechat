<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title><?php echo ($_CFG["site"]["name"]); ?></title>
    <link href="/Public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/Public/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/store.css?bc" rel="stylesheet" type="text/css" />
	<link href="/Public/css/user.css" rel="stylesheet" type="text/css" />
	<script src="/Public/js/jquery.min.js" type="text/javascript"></script>
	<script src="/Public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	
	
</head>

<body>
	<div class="banner">
		<style>
			.focus{ width:100%;  margin:0 auto; position:relative; overflow:hidden;   }
			.focus .hd{ width:100%; height:11px;  position:absolute; z-index:1; bottom:5px; text-align:center;  }
			.focus .hd ul{ display:inline-block; height:5px; padding:3px 5px; background-color:rgba(255,255,255,0.7); 
				-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; font-size:0; vertical-align:top;
				box-sizing:content-box;
			}
			.focus .hd ul li{ display:inline-block; width:5px; height:5px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; background:#8C8C8C; margin:0 5px;  vertical-align:top; overflow:hidden;   }
			.focus .hd ul .on{ background:#FE6C9C;  }

			.focus .bd{ position:relative; z-index:0; }
			.focus .bd li img{ width:100%; background:url(/Public/images/loading.gif) center center no-repeat;  }
			.focus .bd li a{ -webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */  }
			.index-item .title{ white-space:nowrap; text-overflow:ellipsis; overflow:hidden; padding-left:10px;}
		</style>
		<div id="focus" class="focus">
			<div class="hd">
				<ul></ul>
			</div>
			<div class="bd">
				<ul>
					<?php if(is_array($_CFG['banner']['config'])): $i = 0; $__LIST__ = $_CFG['banner']['config'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ((isset($vo["url"]) && ($vo["url"] !== ""))?($vo["url"]):'javascript:;'); ?>"><img _src="<?php echo ($vo["pic"]); ?>" src="<?php echo ($vo["pic"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<script src="/Public/js/TouchSlide.1.1.js"></script>
		<script type="text/javascript">
			TouchSlide({ 
				slideCell:"#focus",
				titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
				mainCell:".bd ul", 
				effect:"left", 
				autoPlay:true,//自动播放
				autoPage:true, //自动分页
				switchLoad:"_src" //切换加载，真实图片路径为"_src" 
			});
		</script>
	</div>
	<div class="index-main">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="index-item">
			<img src="<?php echo ($vo["pic"]); ?>" class="product" />
			<div class="title"><?php echo (mb_substr($vo["title"],0,17,'utf-8')); ?></div>
			<div class="price">价格：￥<?php echo ($vo["price"]); ?>元</div>
			<div class="btn">
				<a href="<?php echo U('Index/product?id='.$vo['id']);?>">
					进入购买<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
				</a>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class="footer-blank"></div>
	<div class="footer">
		<ul>
			<li>
				<a href="<?php echo U('Index/index');?>">
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					首页
				</a>
			</li>
			<li>
				<a href="<?php echo U('Index/all');?>">
					<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
					产品
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
					会员中心
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