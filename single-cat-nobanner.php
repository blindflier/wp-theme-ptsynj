<?php
/*
Template Name: nobanner
*/
?>
<?php get_header('nobanner'); ?>
	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
      
   	 	<?php get_sidebar();?>
   	 	<div class="mainleft"  id="content">
			<div class="article_container row  box">
				<h1><?php the_title();?></h1>
				<?php if('page' != get_post_type()): ?>
                     <div class="article_info">
                        <span class="info_category info_ico"><?php the_category(', ')?></span> 
                        <span class="info_date info_ico"><?php the_time('m-d')?></span>
                        <span class="info_views info_ico"><?php setPostViews(get_the_ID());;echo getPostViews(get_the_ID());?></span>
                        <span class="info_comment info_ico"><?php comments_popup_link('0','1','%');?></span>
                    </div>
                <?php endif; ?>
            	<div class="clear"></div>
 
        		<div class="context"> 
        			<div id="post_content"><?php the_content('');?></div>
                        
	                <?php if (get_option('strive_bdshare') == 'Display') { ?>
	                <div class="baishare">
	                		<!-- Baidu Button BEGIN -->
							<div id="bdshare" class="bdshare_b pull-right clearfix" style="line-height: 12px;">
							<img src="http://bdimg.share.baidu.com/static/images/type-button-1.jpg?cdnversion=20120831" />
							<a class="shareCount"></a>
							</div>
							<script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=6553914" ></script>
							<script type="text/javascript" id="bdshell_js"></script>
							<script type="text/javascript">
							document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
							</script>
						<!-- Baidu Button END -->
	                </div>
                	<?php { echo ' '; } ?>	<?php } else {} ?>
             	</div>
             </div>
		</div>

	<?php endwhile;else: ;endif;?>
</div>
</div>
<?php get_footer('simple');?>


</body>
</html>