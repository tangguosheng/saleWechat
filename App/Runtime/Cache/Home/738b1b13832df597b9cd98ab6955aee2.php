<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    	<meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <title>商品详情</title>
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
		商品详情
		<span class="left">
			<a href="javascript:;" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		</span>
	</div>
	
	<div class="product-main">
		<div class="product-pic">
			<img src="<?php echo ($info["pic"]); ?>" />
		</div>
		<div class="product-title"><?php echo ($info["title"]); ?></div>
		<div class="product-price">
			<span class="left">市场价:￥<?php echo ($info["market_price"]); ?></span>
			<span class="right">会员价:<span class="red" id="price">￥<?php echo ($info["price"]); ?></span></span>
		</div>
	</div>
	<style>
	.product-attr{ border-top:1px solid #ccc; line-height:30px; padding-left:15px;}
	.product-attr .attr-name{ font-weight:bold;}
	.product-attr .attr-value a{ padding:5px 10px; background:#eee; margin-right:10px;}
	.product-attr .attr-value a.checked{ background:red; color:#fff;}
	</style>
	<div class="product-attr">
		<?php if(is_array($info['attr_names'])): $i = 0; $__LIST__ = $info['attr_names'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="attr-name"><?php echo ($vo); ?></div>
			<div class="attr-value">
				<?php if(is_array($info['attr_values'][$key])): $j = 0; $__LIST__ = $info['attr_values'][$key];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($j % 2 );++$j;?><a href="javascript:;" class="attr-item" onclick="checkattr(this)"><?php echo ($vv); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<script>
		var stock = <?php echo ((isset($info["stock"]) && ($info["stock"] !== ""))?($info["stock"]):0); ?>;
		var attr = [];
		function checkattr(obj){
			$(obj).parent(".attr-value").find("a").removeClass('checked');
			$(obj).addClass('checked');
			
			getProductInfo();
		}
		// 根据选择的属性获得商品信息
		function getProductInfo(){
			attr = [];
			$(".attr-value .checked").each(function(index, el){
				attr.push($(el).text());
			})
			if(attr.length != $(".attr-name").size()){
				// 还有属性没选择
				return false;
			}
			$.post("<?php echo U('get_product_info');?>",{attr:attr.join(','),product_id:<?php echo ($info["id"]); ?>},function(d){
				if(d.status!=1){
					alert(d.info);
				}
				$("#price").text("￥"+d.price);
				$("#stock").text("库存"+d.stock);
				stock = parseInt(d.stock);
			});
		}
		</script>
	</div>
	<div class="product-nums">
		数&nbsp;量:
		<a href="javascript:;" onclick="nums_down()" class="down">-</a>
		<input type="text" name="nums" value="1" id="nums" class="nums" />
		<a href="javascript:;" onclick="nums_up()" class="up">+</a>
		<script>
			function nums_down(){
				var cur_nums = parseInt($("#nums").val());
				if(isNaN(cur_nums) || cur_nums < 0)cur_nums = 1;
				if(cur_nums > 1){
					cur_nums --;
				}
				$("#nums").val(cur_nums);
			}
			
			function nums_up(){
				var cur_nums = parseInt($("#nums").val());
				if(isNaN(cur_nums) || cur_nums < 0)cur_nums = 1;
				cur_nums ++;
				$("#nums").val(cur_nums);
			}
		</script>
		<span id="stock" style="float:right;">库存<?php echo ((isset($info["stock"]) && ($info["stock"] !== ""))?($info["stock"]):0); ?></span>
	</div>
	<div class="product-body-title">
		<div class="product-body-title-box">图文详情</div>
	</div>
	<div class="product-body">
		<?php echo ($info["body"]); ?>
	</div>
	
	<div class="product-footer-blank"></div>
	<div class="product-footer">
		<?php if($_CFG['site']['tel'] != ''): ?><a class="left" href="tel:<?php echo ($_CFG["site"]["tel"]); ?>" >
			<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
			客服
		</a><?php endif; ?>
		<a class="right" href="<?php echo U('Index/cart');?>">
			<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
			购物车
		</a>
		<a href="javascript:;" onclick="add_to_cart()" class="buy">
			加入购物车
		</a>
	</div>
	
	<!--模态框-->
	<div class="modal fade" id="tips">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">操作提示</h4>
		  </div>
		  <div class="modal-body">
			<p>产品已添加到购物车</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal">继续购物</button>
			<button type="button" class="btn btn-danger" onclick="location.href='<?php echo U("Index/cart");?>'">立即结算</button>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<script>
		function add_to_cart(){
			
			var nums = parseInt($("#nums").val());
			if(isNaN(nums) || nums <1){
				alert('请输入数量');
				return false;
			}
			if(isNaN(stock) || stock < nums ){
				alert('库存不足！');
				return false;
			}
			
			<?php if($info['attr_open'] > 0): ?>if(attr.length<1 || attr.length < $(".attr-name").size()){
				alert('请选择属性！');
				return false;
			}<?php endif; ?>
			
			$.post("<?php echo U('Index/add_to_cart');?>",{product_id:<?php echo ($info["id"]); ?>,nums:nums,attr:attr},function(d){
				if(d.status == 1){
					$("#tips").modal();
				}else{
					alert(d.info);
				}
			});
			
		}
	</script>

</body>
</html>