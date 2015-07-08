
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
            <div class="context">
				<div id="post_content"> 
					<?php the_content('');?>
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

	<?php endwhile;else: ;endif;?>
</div>
</div>
<?php get_footer();?>


</body>
</html>