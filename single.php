<?php get_header();?>
	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="row">
			<?php if (get_option('strive_breadcrumb') == 'Display') { ?>
                <div class="subsidiary box">
                    <div class="bulletin fourfifth">
                        <span class="sixth">当前位置：</span><?php loo_breadcrumbs(); ?>
                     </div>
                </div>
            <?php } else {} ?>
        </div>
   	 	<?php get_sidebar();?>
    	<div class="mainleft"  id="content">
			<div class="article_container row  box">
				<h1><?php the_title();?></h1>
                    <div class="article_info">
                        <span class="info_category info_ico"><?php the_category(', ')?></span> 
                        <span class="info_date info_ico"><?php the_time('m-d')?></span>
                        <span class="info_views info_ico"><?php setPostViews(get_the_ID());;echo getPostViews(get_the_ID());?></span>
                        <span class="info_comment info_ico"><?php comments_popup_link('0','1','%');?></span>
                    </div>
            	<div class="clear"></div>
            <div class="context">
				<div id="post_content"><?php the_content('Read more...');?></div>
                <?php wp_link_pages('before=<div class="pagelist">分页阅读：&after=&next_or_number=next&previouspagelink=上一页&nextpagelink=&nbsp');wp_link_pages('before=&after=&next_or_number=number');echo "&nbsp;";wp_link_pages('before=&after=</div>&next_or_number=next&previouspagelink=&nbsp&nextpagelink=下一页');?>
               	<div class="clear"></div>
                <?php if(function_exists('the_ratings')) { the_ratings(); } ?>

                <div class="article_tags">
                	<div class="tagcloud">
                    	标签：<?php the_tags('',' ','');?>
                    </div>
                </div>
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
    <?php if (get_option('strive_adc') == 'Display') { ?>
    	<div class="box row">
		<?php echo stripslashes(get_option('strive_adccode')); ?>
		</div>
		<?php { echo ''; } ?><?php } else { } ?>    
    <?php if (get_option('strive_aboutme') == 'Display') { ?>    
		<div class="row box">
			<div id="authorarea">
				<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '100' ); }?>
                <i class="author_arrow"></i>
            </div>
				<div class="authorinfo article_container">
					<p><?php the_author_description();?></p>
				</div>
		</div>
    <?php } else { } ?>
	<div>
		<ul class="post-navigation row">
			<div class="post-previous twofifth">
				<?php previous_post_link('上一篇 <br> %link', '%title', TRUE); ?>
            </div>
            <div class="post-next twofifth">
				<?php next_post_link('下一篇 <br> %link', '%title', TRUE); ?>
            </div>
        </ul>
	</div>
    <?php if (get_option('strive_related') == 'Display') { ?> 
	<div class="article_container row  box article_related">
    	<div class="related">
		<?php include(  dirname(__FILE__) . '/../loostrive/includes/related.php');?>
       	</div>
	</div>
     <?php } else { } ?>
    	<div class="clear"></div>
	<div id="comments_box">
		<?php comments_template('', true); ?>
    </div>
	<?php endwhile;else: ;endif;?>
</div>
</div>
<?php get_footer();?>
