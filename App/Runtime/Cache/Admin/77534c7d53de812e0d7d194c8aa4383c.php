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
            <h1 class="logo"><span>喜优良品</span></h1>
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
            	<ul id="formsub"  <?php if(strtolower(CONTROLLER_NAME)== 'config'): ?>style="display:block"<?php endif; ?>>
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
				<ul id="product" <?php if(strtolower(CONTROLLER_NAME)== 'product'): ?>style="display:block"<?php endif; ?> >
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
            	<ul id="report" <?php if(strtolower(CONTROLLER_NAME)== 'report'): ?>style="display:block"<?php endif; ?>>
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
            <h1 class="pagetitle">用户详情</h1>
            <span class="pagedesc">查看用户的详细信息</span>
            
        </div><!--pageheader-->
        <style>
			.stdtable tbody tr:first-child  td{ border-top:1px solid #eee;}
		</style>
        <div id="contentwrapper" class="contentwrapper lineheight21">
			<div class="contenttitle2">
				<h3>基本信息</h3>
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
						<td>编号</td>
						<td><?php echo ($info["id"]); ?></td>
						<td>头像</td>
						<td><img src="<?php echo ($info["headimg"]); ?>" style="width:50px; height:50px; border-radius:25px;" /></td>
					</tr>
					<tr>
						<td>昵称</td>
						<td><?php echo ($info["nickname"]); ?></td>
						<td>性别</td>
						<td>
							<?php if($info['sex'] == 1): ?>男<?php elseif($info['sex'] == 2): ?>女<?php else: ?>保密<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td>首次关注事件</td>
						<td><?php echo (date("Y-m-d H:i:s",$info["sub_time"])); ?></td>
						<td>当前关注状态</td>
						<td>
							<?php if($info['subscribe'] == 1): ?>已关注<?php else: ?>已取消关注<?php endif; ?>
						</td>
					</tr>
				</tbody>
			</table>

		   <div class="contenttitle2">
				<h3>个人资料</h3>
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
						<td>真实姓名</td>
						<td><?php echo ($info["true_name"]); ?></td>
						<td>身份证号</td>
						<td><?php echo ($info["cardno"]); ?></td>
					</tr>
					<tr>
						<td>手机号</td>
						<td><?php echo ($info["mobile"]); ?></td>
						<td>生日</td>
						<td><?php echo ($info["birth"]); ?></td>
					</tr>
				</tbody>
			</table>
			
		   <div class="contenttitle2">
				<h3>分销信息</h3>
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
					<th>一级下线数</th>
					<th>二级下线数</th>
					<th>三级下线数</th>
				</thead>
				<tbody>
					<tr>
						<td><?php echo ($info["agent1"]); ?></td>
						<td><?php echo ($info["agent2"]); ?></td>
						<td><?php echo ($info["agent3"]); ?></td>
					</tr>
				</tbody>
			</table>
			
			<div class="contenttitle2">
				<h3>账户信息</h3>
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
					<th>余额</th>
					<th>累计分成金额</th>
					<th><?php echo ($_CFG["site"]["points_name"]); ?></th>
					<th>累计分成<?php echo ($_CFG["site"]["points_name"]); ?></th>
				</thead>
				<tbody>
					<tr>
						<td><?php echo ($info["money"]); ?></td>
						<td><?php echo ((isset($info["separate_money"]) && ($info["separate_money"] !== ""))?($info["separate_money"]):0); ?></td>
						<td><?php echo ($info["points"]); ?></td>
						<td><?php echo ((isset($info["separate_points"]) && ($info["separate_points"] !== ""))?($info["separate_points"]):0); ?></td>
					</tr>
				</tbody>
			</table>
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