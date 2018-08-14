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
            <h1 class="pagetitle">编辑收款</h1>
            <span class="pagedesc">请认真编辑各项信息</span>
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper lineheight21">
            <form class="stdform stdform2" method="post">
				<style>
				.form-table{ width:100%; background:#ddd;}
				.form-table th,.form-table td{ padding:15px;}
				.form-table th.title{ width:190px; background:#fcfcfc; color:#666; text-align:left;}
				.form-table th small{ font-weight:normal; color:#999; display:block;}
				.form-table td{ background:#fff; vertical-align:middle;}
				</style>
				<table class="form-table" cellspacing="1" border="0">
					<tr>
						<th class="title">标题</th>
						<td>
							<input type="text" name="title" id="title" value="<?php echo ($info["title"]); ?>" class="smallinput" />
						</td>
					</tr>
					<tr>
						<th class="title">原价</th>
						<td>
							<input type="text" name="market_price" id="market_price" value="<?php echo ($info["market_price"]); ?>" class="smallinput" />
						</td>
					</tr>
					<tr>
						<th class="title">优惠价<small>真实价格</small></th>
						<td>
							<input type="text" name="price" id="price" value="<?php echo ($info["price"]); ?>" class="smallinput" />
						</td>
					</tr>
					<tr>
						<th class="title">
							表单
						</th>
						<td>
							<div class="">
							<input type="checkbox" name="form_open" id="form_open" value="1" onclick="isFormOpen()" <?php if($info['form_open'] == 1): ?>checked<?php endif; ?> /> 启用
							</div>
							<style>
								.form-table{ background:#ddd; border:0; border-spacing:1px; width:100%;}
								.form-table tr{ background:#fff;}
								.form-table th,.form-table td{ vertical-align:middle;}
								.form-value{position:relative; width:100px; height:30px; float:left;}
								.form-value a{ background:red; color:#fff; height:32px; line-height:32px; padding:0 5px; 
										position:absolute; right:0; top:0; border-radius:0 2px 2px 0; 
									}
								input.short{ width:80px !important;}
							</style>
							<table class="form-table" id="form-table">
								<thead>
									<tr>
										<th>名称</th>
										<th>提示</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
									<?php if(is_array($info['form'])): $i = 0; $__LIST__ = $info['form'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
										<td><input type="text" class="short" name="name[]" value="<?php echo ($vo["name"]); ?>"/></td>
										<td><input type="text" class="" name="tips[]" value="<?php echo ($vo["tips"]); ?>"/></td>
										<td><a href="javascript:;" onclick="delRow(this)">删除</a></td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
							</table>
							<div class="" id="form-add" style=" line-height:30px; border:1px solid #ddd; border-top:none; text-align:center;">
								<a href="javascript:;" onclick="addRow()">添加一行</a>
							</div>
							<script>
							function isFormOpen(){
								if(jQuery("#form_open").is(':checked')){
									jQuery("#form-table").show();
									jQuery("#form-add").show();
								}else{
									jQuery("#form-table").hide();
									jQuery("#form-add").hide();	
								}
							}
							
							function addRow(){
								form_num = jQuery(".form-value").size();
								html = '<tr>';
								html	+= '<td><input type="text" class="short" name="form_name[]"/></td>'
										+'<td><input type="text" class="" name="form_tips[]"/></td>'
										+'<td><a href="javascript:;" onclick="delRow(this)">删除</a></td>'
									+'</tr>';
								jQuery("#form-table").append(html);
							}
							
							function delRow(obj){
								jQuery(obj).parent("td").parent("tr").remove();
							}
							
							jQuery(document).ready(function(e){
								isFormOpen();
							});
							</script>
						</td>
					</tr>
					<tr>
						<th class="title" valign="top">介绍说明</th>
						<td>
							<textarea name="body" id="body" class="longinput" style="margin: 0px; height: 400px; max-width:640px;"><?php echo ($info["body"]); ?></textarea>
						</td>
					</tr>
				</table>
				
				
				
				<p class="stdformbutton">
					<button class="submit radius2">提交</button>
					<input type="reset" class="reset radius2" value="重置" />
				</p>
			</form>
			<script src="/Public/plugins/ueditor1.4.3/ueditor.config.js"></script>
			<script src="/Public/plugins/ueditor1.4.3/ueditor.all.min.js"></script>
			<script>
				ue = UE.getEditor('body');
				jQuery(document).ready(function(d){
					$ = jQuery;
					//调整下拉的默认选择
					$("select").each(function(index, element) {
					  $(element).find("option[value='"+$(this).attr('default')+"']").attr('selected','selected');
					});
				});
			</script>
        
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