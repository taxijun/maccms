<?php if (!defined('THINK_PATH')) exit(); /*a:25:{s:38:"template/mytheme/html/index/index.html";i:1653890395;s:58:"/usr/local/html/cms/template/mytheme/html/public/data.html";i:1653890395;s:56:"/usr/local/html/cms/template/mytheme/html/seo/index.html";i:1653890395;s:61:"/usr/local/html/cms/template/mytheme/html/public/include.html";i:1653890395;s:59:"/usr/local/html/cms/template/mytheme/html/public/style.html";i:1653890395;s:56:"/usr/local/html/cms/template/mytheme/html/diy/style.html";i:1653890395;s:58:"/usr/local/html/cms/template/mytheme/html/public/head.html";i:1653890395;s:58:"/usr/local/html/cms/template/mytheme/html/index/slide.html";i:1653890395;s:56:"/usr/local/html/cms/template/mytheme/html/index/hot.html";i:1653890395;s:60:"/usr/local/html/cms/template/mytheme/html/block/vod_box.html";i:1653890395;s:57:"/usr/local/html/cms/template/mytheme/html/index/list.html";i:1653890395;s:65:"/usr/local/html/cms/template/mytheme/html/block/vod_box_rank.html";i:1653890395;s:58:"/usr/local/html/cms/template/mytheme/html/index/video.html";i:1653890395;s:67:"/usr/local/html/cms/template/mytheme/html/block/vod_box_active.html";i:1653890395;s:58:"/usr/local/html/cms/template/mytheme/html/index/topic.html";i:1653890395;s:57:"/usr/local/html/cms/template/mytheme/html/index/rank.html";i:1653890395;s:66:"/usr/local/html/cms/template/mytheme/html/block/vod_box_media.html";i:1653890395;s:58:"/usr/local/html/cms/template/mytheme/html/index/actor.html";i:1653890395;s:62:"/usr/local/html/cms/template/mytheme/html/block/actor_box.html";i:1653890395;s:56:"/usr/local/html/cms/template/mytheme/html/index/art.html";i:1653890395;s:61:"/usr/local/html/cms/template/mytheme/html/block/art_box2.html";i:1653890395;s:57:"/usr/local/html/cms/template/mytheme/html/index/logo.html";i:1653890395;s:57:"/usr/local/html/cms/template/mytheme/html/index/link.html";i:1653890395;s:58:"/usr/local/html/cms/template/mytheme/html/public/foot.html";i:1653890395;s:62:"/usr/local/html/cms/template/mytheme/html/user/ajax_login.html";i:1653890395;}*/ ?>
<?php 
	$incPath = dirname(APP_PATH); 
	$incPath .= ''.$maccms[path_tpl].'admin/data/mydata.php'; 
	require_once($incPath); 
	$my = parse_ini_file(substr($maccms['path_tpl'], strlen($maccms['path'])).'info.ini');
	if(!isset($mytheme)){
		$mytheme = g();
	}
	if($mytheme[web][close]){
		echo ($mytheme[web][close_tips]);
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $mytheme['site']['title']; ?></title>
<meta name="keywords" content="<?php echo $mytheme['site']['keywords']; ?>" />
<meta name="description" content="<?php echo $mytheme['site']['description']; ?>" />
   
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="<?php echo $mytheme['site']['ico']; ?>" type="image/x-icon" />					
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-font.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-ui.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-site.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/<?php echo $mytheme['style']['default']; ?>.css?v=<?php echo $my['version']; ?>" type="text/css" name="default" />
<?php if($mytheme['skin']['is'] && !$mytheme['color']['is']): $_65e815cea8125=explode(',',''.$mytheme['skin']['style'].''); if(is_array($_65e815cea8125) || $_65e815cea8125 instanceof \think\Collection || $_65e815cea8125 instanceof \think\Paginator): if( count($_65e815cea8125)==0 ) : echo "" ;else: foreach($_65e815cea8125 as $key=>$vo): ?>
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/<?php echo $vo; ?>.css?v=<?php echo $my['version']; ?>" type="text/css" name="skin" disabled/>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<script> 
	var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};
	var myui={"tpl":"<?php echo $maccms['path_tpl']; ?>","shortapi":"<?php echo $mytheme['short']['api']; ?>","bdapi":"<?php echo $mytheme['bdshare']['api']; ?>","thunderurl":"<?php echo $mytheme['downlist']['api']; ?>","language":"<?php echo $mytheme['language']['trans']; ?>"};
</script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/jquery.min.js?v=3.3.1"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/layer/layer.js?v3.1.1"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-site.js?v=<?php echo $my['version']; ?>"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-ui.js?v=<?php echo $my['version']; ?>"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-cms.js?v=<?php echo $my['version']; ?>"></script>
<?php echo $mytheme['site']['sub_static']; ?>
<style type="text/css">
	body{ font-family:<?php echo $mytheme['style']['font']; ?>;<?php if($mytheme['nav']['fixed']): ?> padding-top: 90px;<?php endif; ?>}
	.myui-header__top{<?php if($mytheme['nav']['fixed']): ?> position: fixed;<?php else: ?> position: relative; margin-bottom: 30px;<?php endif; ?>}
	<?php if($mytheme['nav']['fixed']): ?> body.active{padding-top: 60px;}<?php else: ?> body.active .myui-header__top{ margin-bottom: 0;}<?php endif; ?>
	[class*=col-],.myui-content__list li,.myui-vodlist__media.col li{ padding: <?php echo $mytheme['main']['col']; ?>px}
	.btn{ border-radius: <?php echo $mytheme['main']['btn_radius']; ?>px;}
	.myui-vodlist__thumb{ border-radius:<?php echo $mytheme['main']['pic_radius']; ?>px; padding-top:<?php echo $mytheme['pic']['high']; ?>%; background: url(<?php echo $mytheme['pic']['load1']; ?>) no-repeat;}
	.myui-vodlist__thumb.square{ padding-top: <?php echo $mytheme['pic']['square_high']; ?>%; background: url(<?php echo $mytheme['pic']['load3']; ?>) no-repeat;}
	.myui-vodlist__thumb.wide{ padding-top: <?php echo $mytheme['pic']['wide_high']; ?>%; background: url(<?php echo $mytheme['pic']['load2']; ?>) no-repeat;}
	.myui-vodlist__thumb.actor{ padding-top: <?php echo $mytheme['pic']['actor_high']; ?>%;}
	.flickity-prev-next-button.previous{ left: <?php echo $mytheme['main']['col']; ?>px;}
	.flickity-prev-next-button.next{ right: <?php echo $mytheme['main']['col']; ?>px;}
	.myui-sidebar{ padding: 0 0 0 <?php echo $mytheme['main']['block']; ?>px;}
	.myui-panel{ margin-bottom: <?php echo $mytheme['main']['block']; ?>px; border-radius: <?php echo $mytheme['main']['block_radius']; ?>px;}
	.myui-panel-mb{ margin-bottom: <?php echo $mytheme['main']['block']; ?>px;}
	.myui-player__item .fixed{ width: <?php echo $mytheme['player']['fixed_wide']; ?>px;}
	.myui-vodlist__text li a,.myui-vodlist__media li{ padding: <?php echo $mytheme['main']['col']; ?>px 0;}
	.myui-screen__list{ padding: <?php echo $mytheme['main']['col']; ?>px <?php echo $mytheme['main']['col']; ?>px 0;}
	.myui-screen__list li{ margin-bottom: <?php echo $mytheme['main']['col']; ?>px; margin-right: <?php echo $mytheme['main']['col']; ?>px;}
	.myui-page{ padding: 0 <?php echo $mytheme['main']['col']; ?>px;}
	.myui-extra{ right: <?php echo $mytheme['nav2']['right']; ?>px; bottom: <?php echo $mytheme['nav2']['bottom']; ?>px;}
	@media (min-width: 1200px){
		.container{ max-width: <?php echo $mytheme['page']['lg_wide']; ?>px;}
		.container{ padding-left: <?php echo $mytheme['page']['margin']; ?>px;  padding-right: <?php echo $mytheme['page']['margin']; ?>px;}
		.container.min{ width: <?php echo $mytheme['page']['md_wide']; ?>px; padding: 0;}
	}
	@media (max-width: 767px){
		body,body.active{ <?php if($mytheme['tabbar']): ?>padding-bottom: 50px;<?php endif; ?>}
		[class*=col-],.myui-panel,.myui-content__list li{ padding: <?php echo $mytheme['main']['xs_col']; ?>px}
		.flickity-prev-next-button.previous{ left: <?php echo $mytheme['main']['xs_col']; ?>px;}
		.flickity-prev-next-button.next{ right: <?php echo $mytheme['main']['xs_col']; ?>px;}
		.myui-vodlist__text li a,.myui-vodlist__media li{ padding: <?php echo $mytheme['main']['col']; ?>px 0;}
		.myui-screen__list{ padding: <?php echo $mytheme['main']['col']; ?>px <?php echo $mytheme['main']['xs_col']; ?>px 0;}
		.myui-screen__list li{ margin-bottom: <?php echo $mytheme['main']['xs_col']; ?>px; margin-right: <?php echo $mytheme['main']['xs_col']; ?>px;}
		.myui-extra{ right: <?php echo $mytheme['nav2']['right2']; ?>px; bottom: <?php echo $mytheme['nav2']['bottom2']; ?>px;}
		.myui-page{ padding: 0 <?php echo $mytheme['main']['xs_col']; ?>px;}}
		.myui-topbg{ position: absolute; top: 0; left: 0; right: 0; width: 100%; <?php echo $mytheme['nav']['bg']; ?>
	}
</style>
<?php if($mytheme['site']['bodystyle']): ?><style type="text/css"><?php echo $mytheme['site']['bodystyle']; ?></style><?php endif; if($mytheme['color']['is']): ?><style type="text/css">
	body{ background: <?php echo $mytheme['color']['bg']; ?>; color: <?php echo $mytheme['color']['text']; ?>;}
	a,h1, h2, h3, h4, h5, h6,h1 a, h2 a, h3 a, h4 a, h5 a, h6 a{ color: <?php echo $mytheme['color']['link']; ?>;}
	a:hover{ color: <?php echo $mytheme['color']['text_on']; ?>;}
	.text-muted{ color: <?php echo $mytheme['color']['text_sub']; ?>;}
	.form-control{ background-color: <?php echo $mytheme['color']['form_bg']; ?>; color: <?php echo $mytheme['color']['form_text']; ?>; border: 1px solid <?php echo $mytheme['color']['form_line']; ?>;}
	.form-control:focus{ border-color: <?php echo $mytheme['color']['text_on']; ?>;}
	.split-line{ background-color: <?php echo $mytheme['color']['line']; ?>;}
	.top-line:before,.bottom-line:after,.top-line-dot:before,.bottom-line-dot:before{ border-color: <?php echo $mytheme['color']['line']; ?>;}
	.nav li.active a{ border-color: <?php echo $mytheme['color']['text_on']; ?>; color: <?php echo $mytheme['color']['text_on']; ?>;}
	.myui-panel-bg{background-color: <?php echo $mytheme['color']['block']; ?>;}
	.myui-panel-bg2,.myui-vodlist__bg,.myui-screen__item,.myui-vodlist__text.striped .striped-head,.myui-vodlist__text.to-color li:nth-of-type(odd),.myui-extra li a{ background-color:  <?php echo $mytheme['color']['sub_bg']; ?>;}
	.myui-vodlist__bg:hover{ box-shadow: 0 3px 5px rgba(0,0,0,.08);}.myui-foot{ background-color: <?php echo $mytheme['color']['block']; ?>;}<?php echo $mytheme['color']['diy']; ?>
</style><?php endif; ?>
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
	<body class="active">
		
		<header class="myui-header__top<?php if($maccms['aid'] == 15): ?> hiddex-xs<?php endif; ?> clearfix" id="header-top">
	<div class="container">	
		<div class="row">
			<div class="myui-header_bd clearfix">					
			    <div class="myui-header__logo">			    	
					<a class="logo" href="<?php echo $maccms['path']; ?>">
						<img class="img-responsive hidden-xs" src="<?php echo $mytheme['site']['logo']; ?>"/>
						<img class="img-responsive visible-xs" src="<?php echo $mytheme['site']['wap_logo']; ?>"/>
					</a>					
				</div>
				<ul class="myui-header__menu nav-menu">
					<li class="<?php if($maccms['aid'] == 1): ?> active<?php endif; ?> hidden-sm hidden-xs"><a href="<?php echo $maccms['path']; ?>">首页</a></li>
					<?php $__TAG__ = '{"num":"all","order":"asc","by":"sort","ids":"'.$mytheme['nav']['id'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="<?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?> active<?php endif; ?> hidden-sm hidden-xs"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; if($mytheme['subnav']['is']): $__FOR_START_1834384076__=1;$__FOR_END_1834384076__=5;for($i=$__FOR_START_1834384076__;$i <= $__FOR_END_1834384076__;$i+=1){ if($mytheme['subnav']['url'.$i.'']): ?><li class="<?php if($GLOBALS['type_id'] == $mytheme['subnav']['id'.$i.''] || $maccms['aid'] == $mytheme['subnav']['id'.$i.'']): ?>active<?php endif; ?> hidden-md hidden-sm hidden-xs"><a href="<?php echo $mytheme['subnav']['url'.$i.'']; ?>"><?php echo $mytheme['subnav']['text'.$i.'']; ?></a></li><?php endif; } endif; if($maccms['aid'] == 15): ?>
					<li class="visible-xs">
						<a href="<?php echo $maccms['path']; ?>"> 首页</a>
					</li>
					<?php else: ?>
					<li class="dropdown-hover<?php if(!$mytheme['nav']['more']): ?> visible-sm visible-xs<?php endif; ?>">
						<a href="javascript:;">频道 <i class="fa fa-angle-down"></i></a>
						<div class="dropdown-box bottom fadeInDown clearfix">
							<ul class="item nav-list clearfix">
								<li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block<?php if($maccms['aid'] == 1): ?> btn-warm<?php else: ?> btn-default<?php endif; ?>" href="<?php echo $maccms['path']; ?>">首页</a></li>
								<?php $__TAG__ = '{"num":"all","order":"asc","by":"sort","ids":"'.$mytheme['nav']['more_id'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			                    <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block<?php if(($vo['type_id'] == $GLOBALS['type_id'])): ?> btn-warm<?php else: ?> btn-default<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
			                    <?php endforeach; endif; else: echo "" ;endif; if($mytheme['subnav']['is']): $__FOR_START_874083643__=1;$__FOR_END_874083643__=5;for($i=$__FOR_START_874083643__;$i <= $__FOR_END_874083643__;$i+=1){ if($mytheme['subnav']['url'.$i.'']): ?><li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a  class="btn btn-sm btn-block btn-default" href="<?php echo $mytheme['subnav']['url'.$i.'']; ?>"><?php echo $mytheme['subnav']['text'.$i.'']; ?></a></li><?php endif; } endif; ?>
							</ul>
						</div>
					</li>
					<?php endif; ?>
				</ul>
				<?php if($mytheme['search']['is']): if($mytheme['search']['auto']): ?><script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/jquery.autocomplete.js"></script><?php endif; ?>
				<div class="myui-header__search search-box"> 
					<?php if($mytheme['search']['select']): ?>
					<a class="search-select dropdown-hover" href="javascript:;">
						<span class="text">视频</span> <i class="fa fa-caret-down"></i>
						<div class="dropdown-box bottom fadeInDown">
							<ul class="item">
								<li class="vod" data-action="<?php echo mac_url('vod/search'); ?>">视频</li>
								<?php if($mytheme['search']['art']): ?><li class="news" data-action="<?php echo mac_url('art/search'); ?>">资讯</li><?php endif; if($mytheme['search']['actor']): ?><li class="actor" data-action="<?php echo mac_url('actor/search'); ?>">明星</li><?php endif; ?>
							</ul>
						</div>
					</a>
					<?php endif; ?>
					
			        <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
    					<input type="text" id="wd" name="wd" class="search_wd form-control" value="<?php echo $param['wd']; ?>" placeholder="<?php echo $mytheme['search']['text']; ?>" autocomplete="off" style="<?php if($mytheme['search']['select']): ?> padding-left: 72px; <?php endif; ?>"/>
						<button class="submit search_submit" id="searchbutton" type="submit" name="submit"><i class="fa fa-search"></i></button>							
					</form>
					<a class="search-close visible-xs" href="javascript:;"><i class="fa fa-close"></i></a>
					<?php if($mytheme['search']['hot']): ?>
					<div class="search-dropdown-hot dropdown-box bottom fadeInDown">
						<div class="item">
							<p class="text-muted">
								热门搜索
							</p>
							<?php $_65e815cea7e6f=explode(',',''.$mytheme['search'][hot].''); if(is_array($_65e815cea7e6f) || $_65e815cea7e6f instanceof \think\Collection || $_65e815cea7e6f instanceof \think\Paginator): if( count($_65e815cea7e6f)==0 ) : echo "" ;else: foreach($_65e815cea7e6f as $key=>$vo): ?>
							<p><a class="text-333" href="<?php echo mac_url('vod/search',['wd'=>$vo]); ?>" title=""><span class="badge<?php if($key+1 == 1): ?> badge-first<?php endif; if($key+1 == 2): ?> badge-second<?php endif; if($key+1 == 3): ?> badge-third<?php endif; ?>"><?php echo $key+1; ?></span> <?php echo $vo; ?></a></p>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<?php endif; ?>
			    </div>
			    <?php endif; ?>
				<ul class="myui-header__user">	
					<li class="visible-xs">
						<a class="open-search" href="javascript:;"><i class="fa fa-search"></i></a>
					</li>
					
					<?php if($mytheme['history']['style'] == pic): ?>
					<li>
						<a href="javascript:;" onclick="MyTheme.Other.Popup('#history')"><i class="fa fa-clock-o"></i></a>
					</li>
					<?php else: ?>
					<li class="dropdown-hover">
						<a href="javascript:;" title="播放记录"> <i class="fa fa-clock-o"></i></a>
						<div class="dropdown-box fadeInDown">
							<div class="item clearfix">					
								<p class="text-muted">
									<a class="text-red pull-right" href="javascript:;" onclick="MyTheme.Cookie.Del('history','您确定要清除记录吗？');">[清空]</a>
									播放记录 
								</p>
								<div class="history-list clearfix">
									<script type="text/javascript">
										var history_get = MyTheme.Cookie.Get("history");
										if(history_get){
										    var json=eval("("+history_get+")");
										    for(i=0;i<json.length;i++){
										        document.write("<p><a class='text-333' href='"+json[i].link+"' title='"+json[i].name+"'><span class='pull-right text-red'>"+json[i].part+"</span>"+json[i].name+"</a></p>");
										    }
										} else {
											document.write("<p style='padding: 80px 0; text-align: center'>您还没有看过影片哦</p>");
									    }
									</script>
								</div>
								
							</div>
						</div>	
					</li>
					<?php endif; if($mytheme['nav1']['is']): $__FOR_START_1203790992__=1;$__FOR_END_1203790992__=3;for($i=$__FOR_START_1203790992__;$i <= $__FOR_END_1203790992__;$i+=1){ if($mytheme['nav1']['url'.$i.'']): ?><li><a href="<?php echo $mytheme['nav1']['url'.$i.'']; ?>" title="<?php echo $mytheme['nav1']['text'.$i.'']; ?>"><i class="fa <?php echo $mytheme['nav1']['icon'.$i.'']; ?>"></i></a></li><?php endif; } endif; if($maccms['user_status'] == 1): if($user['group']['group_id'] == 1): ?>
					<li>
						<a href="javascript:;" onclick="Myui.User.Login();"><i class="fa fa-user"></i></a>
					</li>
					<?php else: ?>
					<li class="menu dropdown-hover">
						<a href="javascript:;"><i class="fa fa-user"></i></a>
						<div class="dropdown-box fadeInDown">
							<ul class="item clearfix">		
								<li><a class="text-333" href="<?php echo mac_url('user/index'); ?>">会员中心</a></li>
								<li><a class="text-333" href="<?php echo mac_url('user/favs'); ?>">我的收藏</a></li>
								<li><a class="text-333" href="<?php echo mac_url('user/plays'); ?>">播放记录</a></li>
								<li><a class="text-333" href="<?php echo mac_url('user/reward'); ?>">我的分销</a></li>
								<li><a class="text-333" href="<?php echo mac_url('user/logout'); ?>">退出</a></li>
							</ul>
						</div>
					</li>
					<?php endif; endif; ?>
				</ul>
		  	</div>		
		</div>						    
	</div>
</header>

<?php if($mytheme['nav']['fixed']): ?>
<script type="text/javascript">
	MyTheme.Other.Headroom();
</script>
<?php endif; if($mytheme['history']['style'] == pic): ?>
<div class="popup <?php echo $mytheme['history']['face']; ?>" id="history" style="width: <?php echo $mytheme['history']['wide']; ?>px; height: 100%;">
	<div class="popup-head">
		<a class="pull-right close-popup" href="javascript:;"><i class="fa fa-close"></i></a>
		<h5 class="title">播放记录 <small><a class="text-muted" href="javascript:;" onclick="MyTheme.Cookie.Del('history','您确定要清除记录吗？');">清空</a></small></h5>
	</div>
	<div class="popup-body">
		<div class="myui-panel clearfix">
			<div class="myui-panel-box clearfix">
				<ul class="myui-vodlist__media history-list">
					<script type="text/javascript">
						var history_get = MyTheme.Cookie.Get("history");
						if(history_get){
						    var json=eval("("+history_get+")");
						    for(i=0;i<json.length;i++){
						        document.write("<li><div class='thumb'><a class='myui-vodlist__thumb img-xs-80' href='"+json[i].link+"' style='background: url("+json[i].pic+");'></a></div><div class='detail'><h5 class='title'><a href='"+json[i].link+"'>"+json[i].name+"</a></h5><p class='font-12'>播放至：<span class='text-red'>"+json[i].part+"<span></p><p><a class='btn btn-xs btn-primary' href='"+json[i].link+"'>继续观看</a></p></div></li>");
						    }
						}
						else
						{
							document.write("<p style='padding: 80px 0; text-align: center'>您还没有看过影片哦</p>");
					    }
					</script>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?><!--头部 -->
		
		<?php if($mytheme['home_slide']['is']): ?>
<div class="myui-panel radius-0 padding-0 clearfix">
	<div id="home_slide" class="carousel slide clearfix" data-ride="carousel">
		<div class="carousel-inner">
			<?php $__TAG__ = '{"num":"'.$mytheme['home_slide']['num'].'","type":"'.$mytheme['home_slide']['type'].'","order":"desc","by":"'.$mytheme['home_slide']['by'].'","level":"'.$mytheme['home_slide']['level'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<div class="item text-center <?php if($key-1 == 0): ?>active<?php endif; ?>" style="background-color: <?php echo $vo[''.$mytheme['home_slide']['bg1'].'']; ?>;">
				<a title="<?php echo $vo['vod_name']; ?>"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?>>
					<img class="img-responsive hidden-xs" src="<?php echo mac_url_img($vo['vod_pic_slide']); ?>"/>
					<img class="img-responsive visible-xs" src="<?php echo mac_url_img($vo['vod_pic_slide']); ?>"/>
				</a>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div> 
		<?php if($mytheme['home_slide']['switch'] == 'text'): ?>
		<ul class="carousel-indicators carousel-indicators-text hidden-md hidden-sm hidden-xs">
			<?php $__TAG__ = '{"num":"'.$mytheme['home_slide']['num'].'","type":"'.$mytheme['home_slide']['type'].'","order":"desc","by":"'.$mytheme['home_slide']['by'].'","level":"'.$mytheme['home_slide']['level'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li data-target="#home_slide" data-slide-to="<?php echo $key-1; ?>" class="<?php if($key-1 == 0): ?>active<?php endif; ?>">
				<h4 class="title"><?php echo mac_substring($vo['vod_name'],10); ?></h4>
				<p class="text margin-0">
					<?php if($mytheme['home_slide']['data'] == remarks): ?>
					<?php echo $vo['vod_remarks']; elseif($mytheme['home_slide']['data'] == actor): ?>
					<?php echo mac_default($vo['vod_actor'],'内详'); elseif($mytheme['home_slide']['data'] == time): ?>
					<?php echo date('Y-m-d',$vo['vod_time']); ?>更新
					<?php elseif($mytheme['home_slide']['data'] == hits): ?>
					<i class="fa fa-youtube-play"></i> <?php echo $vo['vod_hits']; ?>次点播
					<?php elseif($mytheme['home_slide']['data'] == data): ?>
					<?php echo $vo['vod_year']; ?>/<?php echo mac_default($vo['vod_area'],'未知'); ?>/<?php echo $vo['type']['type_name']; endif; ?>
				</p>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<?php elseif($mytheme['home_slide']['switch'] == 'thumb'): ?>
		<ul class="carousel-indicators carousel-indicators-thumb hidden-md hidden-sm hidden-xs">
			<?php $__TAG__ = '{"num":"'.$mytheme['home_slide']['num'].'","type":"'.$mytheme['home_slide']['type'].'","order":"desc","by":"'.$mytheme['home_slide']['by'].'","level":"'.$mytheme['home_slide']['level'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li data-target="#home_slide" data-slide-to="<?php echo $key-1; ?>" class="<?php if($key-1 == 0): ?>active<?php endif; ?>" style="width: <?php echo $mytheme['home_slide']['pic_wide']; ?>px; height: <?php echo $mytheme['home_slide']['pic_high']; ?>px;">
				<img class="img-responsive" src="<?php echo mac_url_img($vo['vod_pic_thumb']); ?>"/>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<?php elseif($mytheme['home_slide']['switch'] == 'dots'): ?>
		<ul class="carousel-indicators carousel-indicators-dots hidden-sm hidden-xs">
			<?php $__TAG__ = '{"num":"'.$mytheme['home_slide']['num'].'","type":"'.$mytheme['home_slide']['type'].'","order":"desc","by":"'.$mytheme['home_slide']['by'].'","level":"'.$mytheme['home_slide']['level'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li data-target="#home_slide" data-home_slide-to="<?php echo $key-1; ?>" class="<?php if($key-1 == 0): ?>active<?php endif; ?>"></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<?php endif; if($mytheme['home_slide']['btn']): ?>
		<a class="carousel-control left" href="#home_slide" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-control right" href="#home_slide" data-slide="next"><i class="fa fa-angle-right"></i></a>
		<?php endif; ?>
	</div>
</div>
<?php if($mytheme['home_slide']['tag']): ?>
<div class="container">
	<div class="row">
		<div class="myui-panel myui-panel-bg clearfix">
			<div class="myui-panel-box clearfix">
        		<ul class="clearfix">					
					<?php $__TAG__ = '{"ids":"'.$mytheme['home_slide']['tag_id'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
					<li class="col-md-<?php echo $mytheme['home_slide']['tag_col']; ?> col-xs-<?php echo $mytheme['home_slide']['tag_col_xs']; ?>">
						<a class="btn btn-block btn-default" href="<?php echo mac_url_type($vo1); ?>">
							<span class="spot"></span><?php echo $vo1['type_name']; ?><span class="visible-inline-lg">（共<?php echo mac_data_count($vo1['type_id'],all); ?>部）</span>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; endif; ?><!-- 轮播 -->
		
	    <div class="container">
	        <div class="row"> 
	        	
	        	<?php if($mytheme['home_hot']['is']): ?>
<div class="myui-panel myui-panel-bg clearfix">	
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">			
				<span class="text-muted more pull-right">今日更新：“<?php echo mac_data_count(0,'today','vod'); ?>”<?php if($mytheme['label']['new']): ?><span class="split-line"></span><a href="<?php echo mac_url('label/new'); ?>">最近更新</a><?php endif; ?></span>
				<h3 class="title">
					<?php echo $mytheme['home_hot']['title']; ?>
				</h3>	
				
			</div>																			
		</div>	
		<div class="myui-panel_bd clearfix">								
			<ul class="myui-vodlist clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['home_hot']['num'].'","type":"'.$mytheme['home_hot']['type'].'","order":"desc","by":"'.$mytheme['home_hot']['by'].'","level":"'.$mytheme['home_hot']['level'].'","year":"'.$mytheme['home_hot']['year'].'","area":"'.$mytheme['home_hot']['area'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-lg-<?php echo $mytheme['home_hot']['col']; ?>  col-md-<?php echo $mytheme['home_hot']['col']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['home_hot']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['home_hot']['sm']): ?> hidden-xs<?php endif; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
		<span class="play hidden-xs"></span>
		<span class="pic-tag pic-tag-<?php echo $mytheme['pic']['tag_seat']; ?>">
			<?php if($mytheme['pic']['tag']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data'].'']; ?><?php echo $mytheme['pic']['tag_text']; ?></span><?php endif; if($mytheme['pic']['tag2']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg2']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data2'].'']; ?></span><?php endif; ?>
		</span>
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text']; ?><?php echo mac_default($vo[''.$mytheme['pic']['sub_data'].''],'内详'); ?></p><?php endif; ?>
	</div>										
</div>												
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>											
		</div>
	</div>
</div>
<?php if($mytheme['home']['ad'] && $mytheme['home']['ad1']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="col-xs-1">
				<?php echo $mytheme['home']['ad1']; ?>
			</div>
		</div>
	</div>				
</div>
<?php endif; endif; ?>
<!-- 推荐 -->	              	

	        	<?php if($mytheme['home_list']['is']): $_65e815cea7819=explode(',',''.$mytheme['home_list']['id'].''); if(is_array($_65e815cea7819) || $_65e815cea7819 instanceof \think\Collection || $_65e815cea7819 instanceof \think\Paginator): if( count($_65e815cea7819)==0 ) : echo "" ;else: foreach($_65e815cea7819 as $key=>$vo): $__TAG__ = '{"order":"asc","by":"sort","ids":"'.$vo.'","id":"vo1","key":"key1","flag":"vod"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">		
		<div class="myui-panel_bd clearfix">
			<div class="<?php if($mytheme['home_list']['right']): ?>col-lg-wide-75 col-md-wide-75<?php endif; ?> col-xs-1 padding-0">		
				<div class="myui-panel_hd">
					<div class="myui-panel__head clearfix">				
						<h3 class="title">
							<?php echo $mytheme['home_list']['title']; ?><?php echo $vo1['type_name']; ?>
						</h3>	
						<a class="more text-muted" href="<?php echo mac_url_type($vo1); ?>">更多 <i class="fa fa-angle-right"></i></a>
					</div>																			
				</div>	
				<ul class="myui-vodlist clearfix">
					<?php $__TAG__ = '{"num":"'.$mytheme['home_list']['num'].'","type":"'.$vo1['type_id'].'","order":"desc","by":"'.$mytheme['home_list']['by'].'","year":"'.$mytheme['home_list']['year'].'","area":"'.$mytheme['home_list']['area'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="col-lg-<?php echo $mytheme['home_list']['col']; ?> col-md-<?php echo $mytheme['col']['md']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['home_list']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['home_list']['sm']): ?> hidden-sm<?php endif; ?>">
						<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
		<span class="play hidden-xs"></span>
		<span class="pic-tag pic-tag-<?php echo $mytheme['pic']['tag_seat']; ?>">
			<?php if($mytheme['pic']['tag']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data'].'']; ?><?php echo $mytheme['pic']['tag_text']; ?></span><?php endif; if($mytheme['pic']['tag2']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg2']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data2'].'']; ?></span><?php endif; ?>
		</span>
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text']; ?><?php echo mac_default($vo[''.$mytheme['pic']['sub_data'].''],'内详'); ?></p><?php endif; ?>
	</div>										
</div>								
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?> 
				</ul>															
			</div>
			<?php if($mytheme['home_list']['right']): ?>
			<div class="col-lg-wide-25 col-md-wide-25 hidden-sm hidden-xs">
				<div class="myui-panel_hd">
					<div class="myui-panel__head clearfix">				
						<h3 class="title">
							<?php echo $mytheme['home_list']['r_title']; ?><?php echo $vo1['type_name']; ?>
						</h3>
						<a class="more text-muted" href="<?php echo mac_url_type($vo1['type_id'],['id'=>$vo1['type_id'],'by'=>'hits'],'show'); ?>">更多  <i class="fa fa-angle-right"></i></a>
					</div>																			
				</div>
				<ul class="myui-vodlist__text active clearfix" style="padding: 0 10px;">
					<?php $__TAG__ = '{"num":"'.$mytheme['home_list']['r_num'].'","type":"'.$vo1['type_id'].'","order":"desc","by":"'.$mytheme['home_list']['r_by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
	<a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>">
		<?php if($mytheme['rank']['is']): ?><span class="pull-right <?php if(!$mytheme['rank']['color']): ?> text-muted<?php endif; ?>" style="color: <?php echo $mytheme['rank']['color']; ?>;"><?php echo mac_substring($vo[''.$mytheme['rank']['data'].''],8); ?></span><?php endif; ?>
		<span class="badge<?php if($key == 1): ?> badge-first<?php endif; if($key == 2): ?> badge-second<?php endif; if($key == 3): ?> badge-third<?php endif; ?>"><?php echo $key; ?></span><?php echo mac_substring($vo['vod_name'],8); ?>
	</a>
</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>		
			</div>
			<?php endif; ?>
		</div>						
	</div>
</div>
<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; if($mytheme['home']['ad'] && $mytheme['home']['ad2']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="col-xs-1">
				<?php echo $mytheme['home']['ad2']; ?>
			</div>
		</div>
	</div>				
</div>
<?php endif; endif; ?>
<!-- 列表 -->
	        	
	        	<?php if($mytheme['home_video']['is']): $__TAG__ = '{"order":"asc","by":"sort","ids":"'.$mytheme['home_video']['type'].'","id":"vo1","key":"key1","flag":"vod"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">				
				<h3 class="title">
					<?php echo $mytheme['home_video']['title']; ?><?php echo $vo1['type_name']; ?>
				</h3>	
				<a class="more text-muted" href="<?php echo mac_url_type($vo1); ?>">更多 <i class="fa fa-angle-right"></i></a>
			</div>																			
		</div>
		<div class="myui-panel_bd clearfix">
			<ul class="myui-vodlist clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['home_video']['num'].'","type":"'.$vo1['type_id'].'","order":"desc","by":"'.$mytheme['home_video']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-md-<?php echo $mytheme['home_video']['col']; ?> col-sm-<?php echo $mytheme['col']['sm_wide']; ?> col-xs-<?php echo $mytheme['col']['xs_wide']; if($key > $mytheme['home_video']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['home_video']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb wide lazyload" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden-xs"></span>		
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data2'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text2']; ?><?php echo $vo[''.$mytheme['pic']['sub_data2'].'']; ?></p><?php endif; ?>
	</div>
</div>
									
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?> 
			</ul>															
		</div>
	</div>						
</div>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<!-- 视频 -->
				
	        	<?php if($mytheme['home_topic']['is']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">
				<h3 class="title">
					<?php echo $mytheme['home_topic']['title']; ?>
				</h3>	
				<a class="more text-muted" href="<?php echo mac_url_topic_index(); ?>">更多 <i class="fa fa-angle-right"></i></a>
			</div>																		
		</div>
		<div class="myui-panel_bd clearfix">															
			<ul class="myui-vodlist clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['home_topic']['num'].'","order":"desc","by":"'.$mytheme['home_topic']['by'].'","ids":"'.$mytheme['home_topic']['id'].'","id":"vo","key":"key1"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key1 % 2 );++$key1;?>
				<li class="col-lg-<?php echo $mytheme['home_topic']['col']; ?>  col-md-<?php echo $mytheme['col']['md_wide']; ?> col-sm-<?php echo $mytheme['col']['sm_wide']; ?> col-xs-<?php echo $mytheme['col']['xs_wide']; if($key1 > $mytheme['home_topic']['xs']): ?> hidden-xs<?php endif; if($key1 > $mytheme['home_topic']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box myui-panel_bg">
						<a class="myui-vodlist__thumb wide lazyload" href="<?php echo mac_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>" data-original="<?php echo mac_url_img($vo['topic_pic']); ?>">						
							<span class="play hidden-xs"></span>								
						</a>
						<div class="myui-vodlist__detail">
							<h4 class="title text-center text-overflow"><a href="<?php echo mac_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>"><?php echo $vo['topic_name']; ?></a></h4>
							<p class="text text-center text-overflow text-muted">—— 收录<?php echo count(explode(',',$vo['topic_rel_vod'])); ?>个影片 ——</p>
						</div>												
					</div>												
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>	
		</div>	
	</div>
</div>
<?php endif; ?>
<!-- 专题 -->       	
	        	
	        	<?php if($mytheme['home_rank']['is']): ?>
<div class="myui-panel myui-panel-bg <?php echo $mytheme['home_rank']['self']; ?> clearfix">
	<div class="myui-panel-box clearfix">														
		<?php $__TAG__ = '{"ids":"'.$mytheme['home_rank']['id'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>													
		<div class="col-lg-<?php echo $mytheme['home_rank']['col']; ?> col-md-4 col-sm-2 col-xs-1 padding-0">
			<div class="myui-panel_hd">
				<div class="myui-panel__head active bottom-line clearfix">
					<h3 class="title">
						<?php echo $vo1['type_name']; ?><?php echo $mytheme['home_rank']['title']; ?>
					</h3>		
					<a class="more text-muted" href="<?php echo mac_url_type($vo1['type_id'],['id'=>$vo1['type_id'],'by'=>'hits'],'show'); ?>">更多 <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
			<div class="myui-panel_bd clearfix">
				<ul class="myui-vodlist__media active col-pd clearfix">
					<?php $__TAG__ = '{"num":"1","type":"'.$vo1['type_id'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li>
	<div class="thumb">
		<a class="myui-vodlist__thumb img-xs-70 lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></a>
	</div>
	<div class="detail detail-side">
		<h4 class="title"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?>><i class="fa fa-angle-right text-muted pull-right"></i> <?php echo mac_substring($vo['vod_name'],8); ?></a></h4>
		<p class="font-12"><span class="text-muted">类型：</span><?php echo $vo['type']['type_name']; ?>，<span class="text-muted">地区：</span><?php echo $vo['vod_area']; ?></p>		
		<p class="font-12 margin-0"><span class="text-muted">主演：</span><?php echo mac_substring($vo['vod_actor'],12); ?></p>
	</div>																										
</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="myui-vodlist__text col-pd clearfix">
					<?php $__TAG__ = '{"num":"'.$mytheme['home_rank']['num'].'","type":"'.$vo1['type_id'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li>
	<a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>">
		<?php if($mytheme['rank']['is']): ?><span class="pull-right <?php if(!$mytheme['rank']['color']): ?> text-muted<?php endif; ?>" style="color: <?php echo $mytheme['rank']['color']; ?>;"><?php echo mac_substring($vo[''.$mytheme['rank']['data'].''],8); ?></span><?php endif; ?>
		<span class="badge<?php if($key == 1): ?> badge-first<?php endif; if($key == 2): ?> badge-second<?php endif; if($key == 3): ?> badge-third<?php endif; ?>"><?php echo $key; ?></span><?php echo mac_substring($vo['vod_name'],8); ?>
	</a>
</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>	
<?php endif; ?>
<!-- 排行 -->
	        	
	        	<?php if($mytheme['star_hot']['is']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">
				<h3 class="title">
					荧屏巨星
				</h3>	
				<?php if($maccms['aid'] == 1): ?><a class="more text-muted" href="<?php echo mac_url('actor/index'); ?>">更多 <i class="fa fa-angle-right"></i></a><?php endif; ?>
			</div>
		</div>
		<div class="myui-panel_bd">
			<ul class="myui-vodlist__bd clearfix">
				<?php $__TAG__ = '{"name":"'.$mytheme['star_hot']['name'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>				
				<li class="col-md-<?php echo $mytheme['star_hot']['col']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['star_hot']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['star_hot']['sm']): ?> hidden-sm<?php endif; ?>">
				<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb actor lazyload" href="<?php echo mac_url_actor_detail($vo); ?>" title="<?php echo $vo['actor_name']; ?>" data-original="<?php echo mac_url_img($vo['actor_pic']); ?>">
		<span class="play-v"></span>
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data3'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow text-center"><a href="<?php echo mac_url_actor_detail($vo); ?>" title="<?php echo $vo['actor_name']; ?>"><?php echo $vo['actor_name']; ?></a></h4>
	</div>										
</div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>	
		
	</div>						
</div>
<?php endif; ?>
<!-- 演员 -->
	        	
	        	<?php if($mytheme['home_art']['is']): $__TAG__ = '{"order":"asc","by":"sort","ids":"parent","id":"vo1","key":"key1","flag":"art"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
	<div class="myui-panel myui-panel-bg clearfix <?php echo $mytheme['home_art']['self']; ?>">	
		<div class="myui-panel-box clearfix">
			<div class="myui-panel_hd">
				<div class="myui-panel__head active bottom-line clearfix">	
					<h3 class="title">
						<?php echo $mytheme['home_art']['title']; ?>
					</h3>	
					<a class="more text-muted pull-left" href="<?php echo mac_url_type($vo1,[],'type'); ?>">更多 <i class="fa fa-angle-right"></i></a>
				</div>																			
			</div>	
			<div class="myui-panel_bd clearfix">								
				<ul class="myui-vodlist__media col clearfix">
					<?php $__TAG__ = '{"num":"'.$mytheme['home_art']['num'].'","type":"'.$vo1['type_id'].'","order":"desc","by":"'.$mytheme['home_art']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="col-lg-<?php echo $mytheme['home_art']['col']; ?> col-md-<?php echo $mytheme['home_art']['col']; ?> col-sm-2 col-xs-1">
						<div class="detail detail-left">
	<h5 class="title"><a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo mac_substring($vo['art_name'],20); ?></a></h5>										
	<p class="margin-0 text-muted font-12"><?php echo $vo['type']['type_name']; ?><span class="split-line"></span><?php echo date('Y-m-d',$vo['art_time']); ?></p>
</div>
<?php if($vo['art_pic']): ?>
<div class="thumb">
	<a class="myui-vodlist__thumb wide img-xs-110 lazyload" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
		<span class="play-v"></span>
	</a>
</div>
<?php endif; ?>
	<!-- 列表 -->	
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>															
			</div>								
		</div>
	</div>
	<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<!-- 资讯 -->
	        	
	        	<?php if($mytheme['home_partner']['is']): ?>
<div class="myui-panel myui-panel-bg clearfix <?php echo $mytheme['home_partner']['self']; ?>">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">                                                                                                                                                                                                                                                       
				<h3 class="title">
					合作伙伴
				</h3>								
			</div>																		
		</div>
		<div class="myui-panel_bd clearfix">
			<ul class="myui-link__pic clearfix">
				<?php $_65e815cea74a9=explode(',',''.$mytheme['home_partner']['name'].''); if(is_array($_65e815cea74a9) || $_65e815cea74a9 instanceof \think\Collection || $_65e815cea74a9 instanceof \think\Paginator): if( count($_65e815cea74a9)==0 ) : echo "" ;else: foreach($_65e815cea74a9 as $key=>$vo): ?>
				<li class="col-md-<?php echo $mytheme['home_partner']['col']; ?> col-sm-4 col-xs-3">
					<img class="img-responsive" src="<?php echo $mytheme['home_partner']['path']; ?><?php echo $vo; ?>.png"/>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>											
		</div>
	</div>
</div>
<?php if($mytheme['home']['ad'] && $mytheme['home']['ad3']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="col-xs-1">
				<?php echo $mytheme['home']['ad3']; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; endif; ?>
<!-- 合作 -->
	        	
	        	<?php if($mytheme['home_link']['is']): ?>
<div class="myui-panel myui-panel-bg <?php echo $mytheme['home_link']['self']; ?> clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">                                                                                                                                                                                                                                                       
				<h3 class="title">
					友情链接
				</h3>								
			</div>																		
		</div>
		<div class="myui-panel_bd clearfix">
			<div class="col-xs-1">
				<?php if($mytheme['home_link']['pic']): ?>
				<ul class="myui-link__pic clearfix">
					<?php $__TAG__ = '{"num":"'.$mytheme['home_link']['num'].'","type":"pic","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="col-md-<?php echo $mytheme['home_link']['col']; ?> col-sm-4 col-xs-3">
						<a target="_blank" href="<?php echo $vo['link_url']; ?>"><img class="img-responsive" src="<?php echo $vo['link_logo']; ?>"/></a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<?php else: ?>
				<ul class="myui-link__text clearfix">
					<?php $__TAG__ = '{"num":"'.$mytheme['home_link']['num'].'","type":"font","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li><a class="text-muted" href="<?php echo $vo['link_url']; ?>" title="<?php echo $vo['link_name']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>								
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<?php endif; ?>
			</div>																		
		</div>
	</div>
</div>
<?php endif; ?>
<!-- 友链 -->
	        	
	        </div>
	    </div>
	    
		<div class="myui-foot clearfix">
	<div class="container min">
		<div class="row">
			<div class="col-pd text-center">
				<p><?php echo $mytheme['site']['foot_tips']; ?></p>	
				<p class="hidden-xs">
					<a target="_blank" href="<?php echo mac_url('map/index'); ?>">网站地图</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/index'); ?>">RSS订阅</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/baidu'); ?>">百度蜘蛛</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/google'); ?>">谷歌地图</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/bing'); ?>">必应地图</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/so'); ?>">360地图</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/sogou'); ?>">搜狗地图</a>
				</p>	
				<p class="margin-0">
					<?php echo $mytheme['site']['copyright']; ?>
				</p>	
				<div class="tongji"><?php echo $mytheme['site']['stats_code']; ?></div>
			</div>
		</div>
	</div>
</div>

<!--登录弹窗开始-->
<div class="myui-msg__form ajax_login" style="display: none; width: 290px; padding: 50px 30px 20px; margin: 0; box-shadow: none;">
	<div class="myui-panel clearfix">
		<div class="myui-panel-box clearfix">		
			<div class="myui-panel_bd">
				<div class="myui-msg__head text-center">
					<p>登录账号</p>
				</div>
				<form class="mac_login_form">
					<p>
						<input type="text" class="form-control" name="user_name" placeholder="手机/登录账号">
					</p>
					<p>
						<input type="password" class="form-control" name="user_pwd" placeholder="登录密码">
					</p>
					<?php if($GLOBALS['config']['user']['login_verify'] == 1): ?>
					<p>
						<img class="mac_verify_img pull-right" src="<?php echo mac_url('verify/index'); ?>" height="35" onclick="this.src = this.src+'?'">
						<input type="text" class="form-control" name="verify" placeholder="验证码" style="display: inline-block; width: 100px;">
					</p>
					<?php endif; ?>
					<p>
						<a href="javascript:;" class="btn btn-block btn-primary login_form_submit">登录</a>
					</p>
					<p>
						<a class="pull-right" href="<?php echo mac_url('user/reg'); ?>">注册</a>
						<a href="<?php echo mac_url('user/findpass'); ?>">忘记密码</a>
					</p>
				</form>
				<?php if($GLOBALS['config']['connect']['qq']['status'] == 1 || $GLOBALS['config']['connect']['weixin']['status'] == 1): ?>
				<div class="text-center top-line">
					<p class="text-muted pt10">第三方快捷登录</p>
					<?php if($GLOBALS['config']['connect']['qq']['status'] == 1): ?>
					<a href="<?php echo mac_url('user/oauth'); ?>?type=qq"><img src="<?php echo $maccms['path_tpl']; ?>statics/img/qq.png" width="35" alt="QQ登录"/></a>&nbsp;&nbsp;
					<?php endif; if($GLOBALS['config']['connect']['weixin']['status'] == 1): ?>
					<a href="<?php echo mac_url('user/oauth'); ?>?type=weixin"><img src="<?php echo $maccms['path_tpl']; ?>statics/img/weixin.png" width="35" alt="微信登录"/></a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!--登录弹窗结束-->

<?php if($mytheme['tabbar']['is']): ?>
<div class="myui-nav__tabbar">
	<?php $__FOR_START_467928405__=1;$__FOR_END_467928405__=6;for($i=$__FOR_START_467928405__;$i <= $__FOR_END_467928405__;$i+=1){ if($mytheme['tabbar']['url'.$i.'']): ?>
	<a class="item" href="<?php echo $mytheme['tabbar']['url'.$i.'']; ?>">
		<img class="icon-img" src="<?php echo $maccms[path_tpl]; ?>statics/icon/<?php echo $mytheme['tabbar']['img'.$i.'']; if($GLOBALS['type_id'] == $mytheme['tabbar']['id'.$i.''] || $maccms['aid'] == $mytheme['tabbar']['id'.$i.'']): ?>_on<?php endif; ?>.png"/><p class="title"><?php echo $mytheme['tabbar']['title'.$i.'']; ?></p>
		</a>
	<?php endif; } ?>
</div>
<?php endif; if($mytheme['nav2']['is']): ?>
<ul class="myui-extra clearfix">
	<li>
		<a class="backtop" href="javascript:scroll(0,0)" title="返回顶部" style="display: none;"><i class="fa fa-angle-up"></i></a>
	</li>
	<?php if($mytheme['language']['is']): ?>
	<li>
		<a href="javascript:;" class="language" title="简繁体切换"><i class="fa <?php echo $mytheme['language']['icon']; ?>"></i></a>
	</li>
	<?php endif; if($mytheme['skin']['is'] && !$mytheme['color']['is']): ?>
	<li>
		<a class="btnskin" href="javascript:;" title="切换皮肤"><i class="fa <?php echo $mytheme['skin']['icon']; ?>"></i></a>
	</li>
	<?php endif; ?>
	<li class="visible-xs">
		<a class="open-share" href="javascript:;" title="分享给朋友"><i class="fa fa-share-alt"></i></a>
	</li>
	<?php if($mytheme['nav2']['wx']): ?>
	<li class="dropdown-hover hidden-xs">
		<a href="javascript:;" title="关注我们" onclick="MyTheme.Layer.Img('关注我们','<?php echo $mytheme['site']['weixin_img']; ?>','扫一扫关注我们')"><i class="fa <?php echo $mytheme['nav2']['wx_icon']; ?>"></i></a>
		<div class="dropdown-box right fadeInDown clearfix">
			<div class="item text-center">
				<div class="qrcode-box">
					<img src="<?php echo $mytheme['site']['weixin_img']; ?>" width="120" />
				</div>
				<p>扫一扫关注我们</p>
			</div>
		</div>
	</li>
	<?php endif; if($mytheme['nav2']['sub']): $__FOR_START_1433157064__=1;$__FOR_END_1433157064__=3;for($i=$__FOR_START_1433157064__;$i <= $__FOR_END_1433157064__;$i+=1){ if($mytheme['nav2']['url'.$i.'']): ?><li><a href="<?php echo $mytheme['nav2']['url'.$i.'']; ?>" title="<?php echo $mytheme['nav2']['text'.$i.'']; ?>"><i class="fa <?php echo $mytheme['nav2']['icon'.$i.'']; ?>"></i></a></li><?php endif; } endif; ?>
</ul>
<?php endif; if($mytheme['notice']['is']): ?>
<div class="noticetext hide">
	<?php echo $mytheme['notice']['html']; ?>
</div>
<?php endif; if($mytheme['language']['is']): ?>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/language.js"></script>
<script type="text/javascript">MyTheme.Other.Language();</script>
<?php endif; if($mytheme['ad']['float']): ?><?php echo $mytheme['ad']['float_html']; endif; ?>

<script type="text/javascript">
	<?php if($mytheme['qrcode']['is']): ?>MyTheme.Images.Qrcode.Init();<?php endif; if($mytheme['skin']['is'] && !$mytheme['color']['is']): ?>MyTheme.Other.Skin();<?php endif; if($mytheme['notice']['is']): ?>MyTheme.Layer.Popbody('allpop','.noticetext',<?php echo $mytheme['notice']['day']; ?>,'<?php echo $mytheme['notice']['wide']; ?>','<?php echo $mytheme['notice']['high']; ?>');<?php endif; ?>
</script>

<?php if($mytheme['click']['is']): ?>
<script type="text/javascript">
	<?php $_65e815cea71d1=explode(',',''.$mytheme['click']['url'].''); if(is_array($_65e815cea71d1) || $_65e815cea71d1 instanceof \think\Collection || $_65e815cea71d1 instanceof \think\Paginator): if( count($_65e815cea71d1)==0 ) : echo "" ;else: foreach($_65e815cea71d1 as $key=>$vo): ?>
	MyTheme.Ajax('<?php echo $vo; ?>','get','json','',function(){});
	<?php endforeach; endif; else: echo "" ;endif; ?>
</script>
<?php endif; if($mytheme['bdshare']['is']): ?>
<script type="text/javascript">
	if(".bdshare".length){
		window._bd_share_config = {
			common: {
				bdText: '',
				bdDesc: '',
				bdUrl: '',
				bdPic: ''
			},
			share: [{
				"bdSize": 24,
				bdCustomStyle: myui.tpl+'statics/css/mytheme-share.css'
			}]
		}
		with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement('script')).src=''+myui.bdapi+'?cdnversion='+~(-new Date()/36e5)];
	}
</script>
<?php endif; if($mytheme['safe']['is']): ?>
<script type="text/javascript">   
	document.onkeydown=function(){
		var e = window.event||arguments[0];
		<?php if($mytheme['safe']['f12']): ?>
			if(e.keyCode==123){
				alert('<?php echo $mytheme['safe']['tips']; ?>');
				return false;
			}
		<?php endif; if($mytheme['safe']['ctrl']): ?>
		if((e.ctrlKey)&&(e.shiftKey)&&(e.keyCode==73)){
			alert('<?php echo $mytheme['safe']['tips']; ?>');
			return false;
		}
		if((e.ctrlKey)&&(e.keyCode==85)){
			alert('<?php echo $mytheme['safe']['tips']; ?>');
			return false;
		}
		if((e.ctrlKey)&&(e.keyCode==83)){
		   alert('<?php echo $mytheme['safe']['tips']; ?>');
		   return false;
		}
		<?php endif; ?>
	}
	<?php if($mytheme['safe']['right']): ?>
	document.oncontextmenu=function(){
		alert('<?php echo $mytheme['safe']['tips']; ?>');
		return false;
	}
	<?php endif; if($mytheme['safe']['mode']): ?>
	var threshold = 160;
	window.setInterval(function() {  
	    if (window.outerWidth - window.innerWidth > threshold ||   
	    window.outerHeight - window.innerHeight > threshold) {  
			function disableDebugger() {
				debugger;
			}
			$(document).ready(function () {
				disableDebugger();
			});
	    }  
	}, 1e3);
	<?php endif; ?>
</script>
<?php endif; ?>
<!-- 尾部 -->
	
	</body>
</html>
<?php 
	$path = 'application/data/config/quickmenu.txt';
	$info = ''.$my[name].','.$maccms[path_tpl].'admin/index.php'; 
	if (stristr(file_get_contents($path), $info)){
		return true;
	}
	elseif (file_put_contents($path, chr(13) . chr(10) . $info, FILE_APPEND)){
		echo('<script>layer.msg("后台菜单添加成功");</script>');
	}
?>