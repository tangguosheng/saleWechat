<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>管理后台</title>
<link rel="stylesheet" href="/Public/admin/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="/Public/plugins/bootstrap/css/bootstrap.font.css" type="text/css" />
<script type="text/javascript" src="/Public/admin/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/admin/js/custom/general.js"></script>

<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">分销.<span>商城</span></h1>
            <span class="slogan">后台管理系统</span>
                 
            <br clear="all" />
            
        </div><!--left-->
		<div class="right">
        	 <span style=" color:#fff;"><?php echo session('admin');?> <a href="<?php echo U('Index/logout');?>" style=" color:#ccc;">[退出]</a></span>
        </div><!--right-->

    </div><!--topheader-->
    
    <style>
	.vernav2 span.text{ padding-left:10px;}
	.menucoll2 span.text{ display:none;}
	.menucoll2>ul>li>a{ width:12px; padding:9px 10px; !important;}
	</style>
    <div class="vernav2 iconmenu">
    	<ul>
        	<li>
				<a href="#formsub">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					<span class="text">系统设置</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="formsub">
               		<li><a href="<?php echo U('Config/site');?>">网站设置</a></li>
					<li><a href="<?php echo U('Config/user');?>">管理员设置</a></li>
                    <li><a href="<?php echo U('Config/mp');?>">公众号设置</a></li>
                    <li><a href="<?php echo U('Config/dist');?>">分销设置</a></li>
					<li><a href="<?php echo U('Config/level');?>">等级设置</a></li>
					<li><a href="<?php echo U('Config/banner');?>">轮播图设置</a></li>
					<li><a href="<?php echo U('Config/tpl');?>">模板设置</a></li>
					<li><a href="<?php echo U('Config/css');?>">自定义样式</a></li>
                </ul>
            </li>
			<li>
				<a href="#product" class="elements">
					<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
					<span class="text">商品管理</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="product">
					<li><a href="<?php echo U('Product/index');?>">商品管理</a></li>
               		<li><a href="<?php echo U('Product/cate');?>">分类设置</a></li>
                </ul>
            </li>
			<li>
				<a href="<?php echo U('Notice/index');?>" class="editor">
					<span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
					<span class="text">通知公告管理</span>
				</a>
            </li>
			<li>
				<a href="<?php echo U('Order/index');?>" class="typo">
					<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
					<span class="text">订单管理</span>
				</a>
            </li>
			<li>
				<a href="<?php echo U('User/index');?>" class="tables">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<span class="text">用户管理</span>
				</a>
            </li>
			<li>
				<a href="<?php echo U('Reward/index');?>" class="support">
					<span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
					<span class="text">绩效管理</span>
				</a>
            </li>
			<li>
				<a href="<?php echo U('Withdraw/index');?>" class="support">
					<span class="glyphicon glyphicon-import" aria-hidden="true"></span>
					<span class="text">提现管理</span>
				</a>
            </li>
			<li>
				<a href="<?php echo U('Selfmenu/index');?>" class="widgets">
					<span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span>
					<span class="text">自定义菜单管理</span>
				</a>
            </li>
			<li>
				<a href="<?php echo U('Autoreply/index');?>" class="addons">
					<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
					<span class="text">自动回复管理</span>
				</a>
            </li>
			<li>
				<a href="<?php echo U('Sk/index');?>">
					<span class="glyphicon glyphicon-eur" aria-hidden="true"></span>
					<span class="text">收款管理</span>
				</a>
            </li>
			<li>
				<a href="#report" class="elements">
					<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
					<span class="text">统计分析</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="report">
					<li><a href="<?php echo U('Report/index');?>">数据报表</a></li>
               		<li><a href="<?php echo U('Report/instant');?>">实时数据</a></li>
                </ul>
            </li>
			<li>
				<a href="<?php echo U('Update/index');?>" class="editor">
					<span class="glyphicon glyphicon-open" aria-hidden="true"></span>
					<span class="text">在线升级</span>
				</a>
            </li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
        
    <div class="centercontent">
		
        <div class="pageheader notab">
            <h1 class="pagetitle">订单详情</h1>
            <span class="pagedesc">查看订单的详细信息或者操作订单</span>
            
        </div><!--pageheader-->
        <style>
			.stdtable tbody tr:first-child  td{ border-top:1px solid #eee;}
		</style>
        <div id="contentwrapper" class="contentwrapper lineheight21">
			<div class="contenttitle2">
				<h3>订单基本信息</h3>
		   </div><!--contenttitle-->

		   <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
				<colgroup>
					<col class="con0" />
					<col class="con1" />
					<col class="con0" />
					<col class="con1" />
					<col class="con0" />
				</colgroup>
				<tbody>
					<tr>
						<td>订单号</td>
						<td><?php echo ($info["sn"]); ?></td>
						<td>分成状态</td>
						<td>
							<?php if($info['status'] == -1): ?>已取消<?php elseif($info['separate'] > 0): ?>已分成<?php else: ?>未分成<?php endif; ?>
							
						</td>
					</tr>
					<tr>
						<td>总金额</td>
						<td><?php echo ($info["total"]); ?></td>
						<td>支付</td>
						<td>
						<?php echo ($_CFG["site"]["points_name"]); echo ($info["points"]); ?> + 余额<?php echo ($info["money"]); ?> + 微信支付<?php echo ($info["wxpay"]); ?> = <?php echo ($info['wxpay'] + $info['money'] + $info['points']); ?>
						</td>
					</tr>
					<tr>
						<td>状态</td>
						<td><?php echo (get_order_status($info["status"])); ?></td>
						<td>时间信息</td>
						<td>
							<?php echo (date("Y-m-d H:i:s",$info["create_time"])); ?> 创建订单<br/>
							<?php if($info['status'] > 1): echo (date("Y-m-d H:i:s",$info["pay_time"])); ?> 支付成功<br/><?php endif; ?>
							<?php if($info['status'] > 2): echo (date("Y-m-d H:i:s",$info["delivery_time"])); ?> 已经发货<br/><?php endif; ?>
							<?php if($info['status'] > 3): echo (date("Y-m-d H:i:s",$info["confirm_time"])); ?> 已完成<br/><?php endif; ?>
							<?php if($info['status'] == -1): echo (date("Y-m-d H:i:s",$info["confirm_time"])); ?> 已关闭<br/><?php endif; ?>
						</td>
					</tr>
				</tbody>
			</table>

		   <div class="contenttitle2">
				<h3>收货信息</h3>
		   </div><!--contenttitle-->
		   <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
				<colgroup>
					<col class="con0" />
					<col class="con1" />
					<col class="con0" />
					<col class="con1" />
					<col class="con0" />
				</colgroup>
				<tbody>
					<tr>
						<td>收货人</td>
						<td><?php echo ($info["name"]); ?></td>
						<td>联系电话</td>
						<td><?php echo ($info["mobile"]); ?></td>
					</tr>
					<tr>
						<td>收货地址</td>
						<td colspan="3"><?php echo ($info["addr"]); ?></td>
					</tr>
					<tr>
						<td>客户留言</td>
						<td colspan="3"><?php echo ($info["msg"]); ?></td>
					</tr>
					
				</tbody>
			</table>
			
		   <div class="contenttitle2">
				<h3>商品信息</h3>
		   </div><!--contenttitle-->
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable">
				<colgroup>
					<col class="con0" />
					<col class="con1" />
					<col class="con0" />
					<col class="con1" />
					<col class="con0" />
				</colgroup>
				<thead>
					<tr>
						<th class="head0">商品标题</th>
						<th class="head1">属性</th>
						<th class="head0">价格</th>
						<th class="head1">数量</th>
						<th class="head0">小计</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vo["title"]); ?></td>
						<td><?php echo ($vo["attr"]); ?></td>
						<td><?php echo ($vo["price"]); ?></td>
						<td><?php echo ($vo["nums"]); ?></td>
						<td><?php echo ($vo['nums']*$vo['price']); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<?php if($info['status'] > -1): ?><div class="contenttitle2">
				<h3>操作</h3>
			</div><!--contenttitle-->
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable">
				<colgroup>
					<col class="con0" />
					<col class="con1" />
					<col class="con0" />
					<col class="con1" />
					<col class="con0" />
				</colgroup>
				<tbody>
					<tr>
						<td>发货</td>
						<td>
							快递公司:
							<input type="text" name="express" id="express_name" value="<?php echo ($info["express"]); ?>" />
							快单号:
							<input type="text" name="express_no" id="express_no" value="<?php echo ($info["express_no"]); ?>" />
							
							<?php if($info['status'] < 3): ?><input type="button" class="stdbtn" onclick="set_express()" value="确定" />
							<?php else: ?>
							<input type="button" class="stdbtn" onclick="if(confirm('修改后订单重置为已发货状态，确定要修改吗？'))set_express()" value="修改" /><?php endif; ?>
						</td>
					</tr>
					<tr>
						<td>取消订单</td>
						<td>
							取消订单后，余额支付和积分支付的原路返回，分成也将会被取消，但是通过微信支付的款项请手动联系客户退款.
							<input type="button" class="stdbtn" onclick="if(confirm('取消订单后款项原路返回，分成自动取消，继续？'))cancle_order()" value="取消订单" />
						</td>
					</tr>
				</tbody>
			</table>
			<script>
			function set_express(){
				exp_name = jQuery("#express_name").val();
				exp_no	= jQuery("#express_no").val();
				if(exp_name == ''){
					alert('请填写快递公司');
					return false;
				}else if(exp_no == ''){
					alert('请填写快递单号');
					return false;
				}
				
				jQuery.post("<?php echo U('set_express');?>",{order:<?php echo ($info["id"]); ?>,name:exp_name,no:exp_no},function(d){
					alert(d.info);
				})
			}
			
			function cancle_order(){
				jQuery.post("<?php echo U('cancle_order');?>",{order:<?php echo ($info["id"]); ?>},function(d){
					alert(d.info);
					if(d.status == 1){
						location.href = location.href;
					}
				})
			}
			</script><?php endif; ?>
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->
<script>
	jQuery(document).ready(function(e){
		// 菜单添加提示 
		$ = jQuery;
		$(".vernav2 ul li").each(function(index, el){
			$(this).attr('title', $(this).find("a").find('span.text').text());
		});
		
		// 调整默认选择内容
		$("select").each(function(index, element) {
			$(element).find("option[value='"+$(this).attr('default')+"']").attr('selected','selected');
		});
		// 调整提示内容
	});
</script>
</body>
</html>