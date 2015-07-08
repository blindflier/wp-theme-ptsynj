<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php include(  dirname(__FILE__) . '/../loostrive/includes/seo.php');?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/kube.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/reset.css" />
<?php if (get_option('strive_alt_stylesheet')==''):?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/style.css" />
<?php endif;?>
<?php if ( is_singular() ){ ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/images/lightbox/pirobox.css" target="_blank" />
<?php } ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name');?> RSS Feed" href="<?php bloginfo('rss2_url');?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name');?> Atom Feed" href="<?php bloginfo('atom_url');?>" />
<link rel="shortcut icon" href="<?php echo stripslashes(get_option('strive_favicon')); ?>" type="image/x-icon" media="screen"/>
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<?php my_scripts_method; wp_head()?>
<?php flush()?>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body  class="custom-background">
<?php if ( is_home() || is_search() || is_category() || is_month() || is_author() || is_archive() ) { ?>
<?php include( dirname(__FILE__) . '/../loostrive/includes/loading.php'); ?>
<?php } ?>
<div id="main-body">
		<div id="head" class="row">
        	<div class="row">
				<div class="container">
					<div id="blogname" class="">
                    	<a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php if ( is_home() || is_search() || is_category() || is_month() || is_author() || is_archive() ) { ?><h1><?php bloginfo('name');?></h1><?php } ?>
                        <img src="<?php echo stripslashes(get_option('strive_mylogo')); ?>" alt="<?php bloginfo('name');?>" /></a>
                    </div>
                 	
                </div>
				<div class="clear"></div>
		</div>
		<div class="mainmenus container">
			<div class="mainmenu">
				<div class="topnav">
					<?php if (get_option('strive_home') == 'Display') { ?>
                		<a href="<?php bloginfo('siteurl');?>" title="首页" class="<?php if ( is_home() ){ ?>home <?php } else {echo 'home_none'; } ?>">首页</a>
    				<?php }?>
                    <div class="menu-button"><i class="menu-ico"></i></div>
                    <ul id="menus">
						<?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'nav', 'echo' => false)) )); ?>
                    </ul>
               <?php if (get_option('strive_menusearch') == 'Display') { ?>     
                <ul class="menu-right">
                    <li class="menu-search">
                    	<a href="#" id="menu-search" title="搜索"></a>
                    	<div class="menu-search-form ">
							<form action="<?php bloginfo('home');?>" method="get">
                            	<input name="s" type="text" id="search" value="" maxlength="150" placeholder="请输入搜索内容" x-webkit-speech>
                            </form>
                        </div>
                    </li>
                </ul> 
                <?php }?>
                 <!-- menus END -->                    
            </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
