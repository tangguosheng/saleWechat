<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title>购物车</title>
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
		购物车
		<span class="left">
			<a href="javascript:;" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		</span>
		<span class="right">
			<a href="javascript:;" onclick="del_product()"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</span>
	</div>
	
	<div class="cartedit-main" style="position:relative;">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="cartedit-item" record="<?php echo ($vo["id"]); ?>">
			<table>
				<tr>
					<td><input type="checkbox" class="checkbox" value="<?php echo ($vo["id"]); ?>" /></td>
					<td><img src="<?php echo ($vo["pic"]); ?>" class="product" /></td>
					<td>
						<div class="title"><?php echo ($vo["title"]); ?></div>
						<?php if(!empty($vo['attr'])): ?><div class="attr">
							属性：<?php echo ($vo["attr"]); ?>
						</div><?php endif; ?>
						<div class="price">
							<del style=" font-weight:normal; color:#666;">市场价：￥<?php echo ($vo["market_price"]); ?></del>
							￥<?php echo ($vo["price"]); ?>
						</div>
						<div class="nums">
							<a href="javascript:;" onclick="nums_down(<?php echo ($vo["id"]); ?>)" class="down">-</a>
							<input type="text" name="nums" value="<?php echo ($vo["nums"]); ?>" record="<?php echo ($vo["id"]); ?>" readonly />
							<a href="javascript:;" onclick="nums_up(<?php echo ($vo["id"]); ?>)" class="up">+</a>
						</div>
					</td>
				</tr>
			</table>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="cartedit-empty">
			<p>购物车暂时没有内容！</p>
			<p><a href="/">现在去逛逛</a></p>
		</div>
	</div>
	<script>
	function del_product(){
		// 获得选中的id
		var ids = [];
		$(".checkbox:checked").each(function(index, el){
			ids.push($(el).val());
		});
		$.post("<?php echo U('Index/del_product');?>",{ids:ids.join(',')},function(d){
			if(d.status == 1){
				$(".checkbox:checked").each(function(index, el){
					$("div[record="+$(el).val()+"]").remove();
				});
				$("#total").text("￥" + d.total);
			}else{
				alert(d.info);
			}
		});
	}
	
	function nums_down(id){
		cur_num = parseInt($("input[record="+id+"]").val());
		if(isNaN(cur_num) || cur_num <1){
			cur_num = 1;
		}
		cur_num --;
		set_product(id, cur_num);
	}
	
	function nums_up(id){
		cur_num = parseInt($("input[record="+id+"]").val());
		if(isNaN(cur_num) || cur_num <1){
			cur_num = 1;
		}
		cur_num ++;
		set_product(id, cur_num);
	}
	
	function set_product(id, cur_num){
		$.post("<?php echo U('Index/set_product');?>",{id:id,nums:cur_num},function(d){
			if(d.status){
				if(cur_num <=0){
					$("div[record="+id+"]").remove();
				}else{
					$("input[record="+id+"]").val(cur_num);
				}
				$("#total").text("￥" + d.total);
			}else{
				alert(d.info);
			}
		});
		
	}
	</script>
	<div class="cart-checkout-blank"></div>
	<div class="cart-checkout">
		总计：<span class="red" id="total">￥<?php echo ($total); ?></span>
		<div class="checkout-btn">
			<a href="<?php echo U('Index/cart?addr='.$_GET['addr']);?>">结算</a>
		</div>
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