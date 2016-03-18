<div id="topsearch" class="span-7 last">
					<?php get_search_form(); ?> 
				</div>

	<div class="span-5">
		<div class="sidebar sidebar-right">
       
			<div class="sidebaradbox">
    			<?php sidebar_ads_125(); ?>
    		</div>


		<div class = "sideposts">
					<ul class = "tabs">
						<li><a href="javascript:tabSwitch('tab_1', 'content_1');" id = "tab_1" class = "active">Popular Posts</a></li>
						<li><a href="javascript:tabSwitch('tab_2', 'content_2');" id = "tab_2">Recent Posts</a></li>
					</ul>

					<div class = "specialposts" id = "content_1">
						<ul>

<?php $popular = new WP_Query('orderby=comment_count&posts_per_page=10'); while ($popular->have_posts()) : $popular->the_post();?>

														<li><a href="<?php the_permalink(); ?>"><img src ="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php getImage('1'); ?>&w=50&h=50&zc=1" width="50" height="50" /></a><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>

<?php endwhile; ?>
													</ul>

					</div><!--end "POPULAR POSTS specialposts"-->


					<div class = "specialposts" id = "content_2">

						<!--Edit Showposts=% if you want to change number of recent posts displayed-->
							<ul>

<?php $recent = new WP_Query("showposts=10"); while($recent->have_posts()) : $recent->the_post();?>

															<li><a title="Permanent Link to <?php the_title(); ?>" rel="nofollow" href="<?php the_permalink() ?>"><img src = "<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php getImage('1'); ?>&w=50&h=50&zc=1" width="50" height="50" /></a><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
													
	<?php endwhile; ?>


														</ul>

					</div><!--end "RECENT POSTS specialposts"-->
				</div><!--end "POPULAR/RECENT POSTS sidebox"-->
			<ul>
				<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>
					
					
				<?php endif; ?>
			</ul>
	
		</div>
		
	</div>
