<?php get_header(); ?>	

	<main id="main">

		<section>

			<!-- Start dynamic -->

			<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php edit_post_link( __( 'Edit', 'seosbusiness' ), '', '' ); ?>

					<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>

						<p class="img"><?php the_post_thumbnail(); ?> </p>

							<div class="content"><?php the_content();?></div>

							  	<div class="nextpost"><?php previous_post_link('%link', __('<span class="meta-nav">&larr;</span> previous - ', 'seosbusiness')); ?>

 								<?php next_post_link('%link', __('next <span class="meta-nav">&rarr;</span>', 'seosbusiness')); ?></div>

							<?php comments_template(); ?>				
							
						<small> <?php _e('Posted by:', 'seosbusiness'); ?></small> <em><?php the_author() ?></em> <small><?php _e('on', 'seosbusiness'); ?></small>
	
					<em class="entry-date"> <?php echo get_the_date(); ?></em>

				<p><?php the_tags(); ?></p>

			</article>

		<?php endwhile; endif; ?>

		<!-- End dynamic -->

		</section>

<?php get_sidebar(); ?>

	</main>

<?php get_footer(); ?>