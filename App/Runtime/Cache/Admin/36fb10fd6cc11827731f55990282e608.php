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
            <h1 class="pagetitle">首页轮播图设置</h1>
            <span class="pagedesc">设置首页顶部轮播的图片和链接,最多支持8张图片</span>
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper lineheight21">
        
        
            <form class="stdform stdform2" method="post">
				<div class="tableoptions">                    
                    <input value="添加图片" type="button" class="radius3" onclick="add_row()" />
                </div><!--tableoptions-->
				<table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                    <thead>
                        <tr>
                            <th class="head1" width="520">图片</th>
                            <th class="head0" style=" text-align:center;">链接</th>
							<th class="head0">操作</th>
                        </tr>
                    </thead>
                    <tbody>
						
                    	<?php if(is_array($_CFG['banner']['config'])): $i = 0; $__LIST__ = $_CFG['banner']['config'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td>
								<iframe src="<?php echo U('upload?event=setPath'.$i.'&url='.$vo['pic']);?>" scrolling="no" style="width:500px; height:200px;"></iframe>
								<input type="hidden" name="pic[]" value="<?php echo ($vo["pic"]); ?>" />
							</td>
                            <td><input type="text" name="url[]" value="<?php echo ($vo["url"]); ?>" /></td>
							<td><a href="javascript:;" onclick="del_row(this)">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						 <!--tr>
                            <td>
								<iframe src="<?php echo U('upload?event=setPath0');?>" scrolling="no" style="width:500px; height:200px;"></iframe>
								<input type="hidden" name="pic[]" value="<?php echo ($vo["pic"]); ?>" />
							</td>
                            <td><input type="text" name="url[]" value="<?php echo ($vo["url"]); ?>" /></td>
							<td><a href="javascript:;" onclick="del_row(this)">删除</a></td>
                        </tr-->
                    </tbody>
                </table>
				<script>
				function add_row(){
					//return false;
					html = '<tr>'
						  +'	 <td>'
						  +'		<iframe src="<?php echo U('upload?event=setPath_n_');?>" scrolling="no" style="width:500px; height:200px;"></iframe>'
						  +'		<input type="hidden" name="pic[]" value="" />'
						  +'	</td>'
						  +'	<td><input type="text" name="url[]" /></td>'
						  +'	<td><a href="javascript:;" onclick="del_row(this)">删除</a></td>'
						  +'</tr>';
					size = jQuery("#table2").find("tbody").find("tr").size();
					if(size>=8){
						alert('最多8张图片');
						return false;
					}
					jQuery("#table2").find("tbody").append(html.replace('_n_',size+1));
				}
				
				function del_row(obj){
					jQuery(obj).parent("td").parent("tr").remove();
				}
				
				function setPath(index,url){
					jQuery("#table2").find("tbody").find("tr").eq(index-1).find("td:eq(0)").find("input[type=hidden]").val(url);
				}
				function setPath0(url){
					setPath(0, url)
				}
				function setPath1(url){
					setPath(1, url)
				}
				function setPath2(url){
					setPath(2, url)
				}
				function setPath3(url){
					setPath(3, url)
				}
				function setPath4(url){
					setPath(4, url)
				}
				function setPath5(url){
					setPath(5, url)
				}
				function setPath6(url){
					setPath(6, url)
				}
				function setPath7(url){
					setPath(7, url)
				}
				function setPath8(url){
					setPath(8, url)
				}
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