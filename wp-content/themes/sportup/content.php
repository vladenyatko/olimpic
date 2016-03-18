<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
 
global $SMTheme;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	
	<!-- ========== Post Featured Image ========== -->
	<?php the_post_thumbnail(
				'post-thumbnail',
				array("class" => $SMTheme->get( 'layout','imgpos' ) . " featured_image", 'style' => smt_thumbnail_style() )
	); ?>
	
	
	<!-- ========== Post Title ========== -->
	<?php  //Title
		if (!is_single()&&!is_page()) { ?>
			<h2 class='entry-title'><a href="<?php the_permalink(); ?>" title="<?php printf( $SMTheme->_( 'permalink' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
		<?php } else { ?>
			<h1 class='entry-title'><?php the_title(); ?></h1>
	<?php } ?>
		
	
	
	<!-- ========== Post Meta ========== -->
	<div class="entry-meta">
		<span class="post-author"><?php echo the_author_posts_link();?></span>
		<?php if(comments_open( get_the_ID() )) { ?>
			<span class='post-comments'><?php comments_popup_link( $SMTheme->_( 'noresponses' ), $SMTheme->_( 'oneresponse' ), $SMTheme->_( 'multiresponse' ) ); ?></span>
		<?php } edit_post_link( $SMTheme->_( 'edit' ), '     |     <span class="edit-link">', '</span>' ); ?><span class='post-date'><?php echo get_the_date(); ?></span>
		<span class='post-categories'><?php the_category(', '); ?></span> 		
	</div>
	
	
	
	<!-- ========== Post content  ========== -->
	<?php if ( !is_single() ) : ?>
		
		<!-- ========== Post content in posts feed ========== -->
		<div class="entry-summary">
			<?php smtheme_excerpt('echo=1');?>
			<div class="absolute-more">
				<a href='<?php the_permalink(); ?>' class='readmore'><?php echo $SMTheme->_( 'readmore' ); ?></a>
			</div>	
		</div><!-- .entry-summary -->
	
	<?php else : ?>
	
		<!-- ========== Post content in single post page ========== -->
		<div class="entry-content">
			<?php
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'letheme' ) );
				wp_link_pages( array(	
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'letheme' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
		
	<?php endif; ?>
	
	
	
	
	
	
	
	<div class="clear"></div>
</article><!-- #post-## -->
