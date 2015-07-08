
<?php get_header();?>
	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
       
			<?php if (get_option('strive_breadcrumb') == 'Display') { ?>
			 <div class="row">
                <div class="subsidiary box">
                    <div class="bulletin fourfifth">
                        <span class="sixth">当前位置：</span><?php loo_breadcrumbs(); ?>
                     </div>
                </div>
              </div>
            <?php } else {} ?>
       
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
				<div id="post_content"> 
					<?php $meta = get_post_meta(get_the_ID());?>		
					<ul class="salon_meta lg-80">
						<li><span class="label">主题：</span> <span class="content"> <?php echo $meta['subject'][0] ?></span> </li>
						<li><span class="label">时间：</span> <span class="content"> <?php echo $meta['time'][0] ?></span> </li>
						<li><span class="label">地点：</span> <span class="content"> <?php echo $meta['address'][0] ?></span> </li>
						<li class="last"><span class="label">报名：</span> <span class="content"> <?php echo $meta['opening'][0] ? '开放报名' : '关闭报名' ?></span> </li>
					</ul>
					<?php the_content('Read more...');?>
				</div>
                <!-- 报名按钮-->
                <?php if( $meta['opening'][0]) :?>
                		<div class="btn-area">
                				<!--  <div class="sixth">&nbsp;</div> -->
                            <div class="salon-register-btn lg-80">
                                <a href="salon-register?salon_id=<?php the_ID()?>" class="btn btn-register"><span> 我 要 报 名 <span></a>
                            </div>
                            <!-- <div class="third">
                                <a class="btn btn-register"><span> 报 名 查 询 <span></a>
                            </div>-->
                        </div>
                    </div>
                <?php endif;?>
                <!-- 报名按钮-->
                        
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
   
    	<div class="clear"></div>
	<div id="comments_box">
		<?php comments_template('', true); ?>
    </div>
	<?php endwhile;else: ;endif;?>
</div>
</div>
<?php get_footer();?>


</body>
</html>