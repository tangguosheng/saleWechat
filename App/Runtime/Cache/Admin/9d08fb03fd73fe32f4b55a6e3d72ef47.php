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
            <h1 class="pagetitle">用户等级</h1>
            <span class="pagedesc">设置商城用户等级名称和条件</span>
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper lineheight21">
        
        
            <form class="stdform stdform2" method="post">
				<div class="tableoptions">                    
					<input type="button" class="radius3" onclick="add_level()" value="增加等级"/>
				</div><!--tableoptions-->
				<table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                    <thead>
                        <tr>
                            <th rowspan="2" class="head1">名称</th>
							<th colspan="3" class="head1">条件</th>
							<th colspan="3" class="head1">权限</th>
							 <th rowspan="2" class="head1">操作</th>
						</tr>
						<tr>
                            <th class="head0">订单数</th>
                            <th class="head1">直接下级数</th>
                            <th class="head0">所有下级数</th>
							<th class="head0">分销</th>
							<th class="head1">提现</th>
							<th class="head0">转账</th>
                        </tr>
                    </thead>
                    <tbody>
						<tr>
                            <td><input type="text" name="name[]" value="<?php echo ($_CFG['level'][0]['name']); ?>" /></td>
                            <td><input type="text" style="width:30px" name="orders[]" value="<?php echo ($_CFG['level'][0]['orders']); ?>" /></td>
                            <td><input type="text" style="width:30px" name="agent[]" value="<?php echo ($_CFG['level'][0]['agent']); ?>" /></td>
                            <td><input type="text" style="width:30px" name="agent_all[]" value="<?php echo ($_CFG['level'][0]['agent_all']); ?>" /></td>
							<td>
								<select name="dist[]" default="<?php echo ($_CFG['level'][0]['dist']); ?>">
									<option value="1">开启</option>
									<option value="0">关闭</option>
								</select>
							</td>
							<td>
								<select name="withdraw[]" default="<?php echo ($_CFG['level'][0]['withdraw']); ?>">
									<option value="1">开启</option>
									<option value="0">关闭</option>
								</select>
							</td>
							<td>
								<select name="deposit[]" default="<?php echo ($_CFG['level'][0]['deposit']); ?>">
									<option value="1">开启</option>
									<option value="0">关闭</option>
								</select>
							</td>
							<td>无</td>
                        </tr>
                    	<?php if(is_array($_CFG['level'])): $i = 0; $__LIST__ = array_slice($_CFG['level'],1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><input type="text" name="name[]" value="<?php echo ($vo["name"]); ?>" /></td>
                            <td><input type="text" style="width:30px" name="orders[]" value="<?php echo ($vo["orders"]); ?>" /></td>
                            <td><input type="text" style="width:30px" name="agent[]" value="<?php echo ($vo["agent"]); ?>" /></td>
                            <td><input type="text" style="width:30px" name="agent_all[]" value="<?php echo ($vo["agent_all"]); ?>" /></td>
							<td>
								<select name="dist[]" default="<?php echo ($vo["dist"]); ?>">
									<option value="1">开启</option>
									<option value="0">关闭</option>
								</select>
							</td>
							<td>
								<select name="withdraw[]" default="<?php echo ($vo["withdraw"]); ?>">
									<option value="1">开启</option>
									<option value="0">关闭</option>
								</select>
							</td>
							<td>
								<select name="deposit[]" default="<?php echo ($vo["deposit"]); ?>">
									<option value="1">开启</option>
									<option value="0">关闭</option>
								</select>
							</td>
							<td><a href="javascript:;" onclick="del_level(this)">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
				<script>
				function add_level(){
					//return false;
					html = '<tr>'
                           +' <td><input type="text" name="name[]" value="" /></td>'
                           +' <td><input type="text" style="width:30px" name="orders[]" value="" /></td>'
                           +' <td><input type="text" style="width:30px" name="agent[]" value="" /></td>'
                           +' <td><input type="text" style="width:30px" name="agent_all[]" value="" /></td>'
						   +' <td>'
						   +'	<select name="dist[]" default="">'
							+'		<option value="1">开启</option>'
							+'		<option value="0">关闭</option>'
							+'	</select>'
							+'</td>'
							+'<td>'
							+'	<select name="withdraw[]" default="">'
							+'		<option value="1">开启</option>'
							+'		<option value="0">关闭</option>'
							+'	</select>'
							+'</td>'
							+'<td>'
							+'	<select name="deposit[]" default="">'
							+'		<option value="1">开启</option>'
							+'		<option value="0">关闭</option>'
							+'	</select>'
							+'</td>'
							+'<td><a href="javascript:;" onclick="del_level(this)">删除</a></td>'
                        +'</tr>';
					
					jQuery("#table2").find("tbody").append(html);
				}
				
				function del_level(obj){
					jQuery(obj).parent("td").parent("tr").remove();
				}

				jQuery(document).ready(function(e) {
				   //调整下拉的默认选择
				   jQuery("select").each(function(index, element) {
					  jQuery(element).find("option[value='"+jQuery(this).attr('default')+"']").attr('selected','selected');
				   });
				 });
				</script>
				<p class="stdformbutton">
					<button class="submit radius2">提交</button>
					<input type="reset" class="reset radius2" value="重置" />
				</p>
			</form>
        
        
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