<?php
/**
 * The template for displaying Comments.
 * The area of the page that contains comments and the comment form.
 */
?>
<?php

	if ( post_password_required() ) { ?>

        <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','seosbusiness'); ?></p>

		<?php return; } ?>

		<?php if ( have_comments() ) : ?>

		        <h3 id="comments">

			<?php comments_number(__('No Comment','seosbusiness'), __('One Comment','seosbusiness'), __('% Comments','seosbusiness') );?><?php _e(' so far:','seosbusiness'); ?></h3>

			<ol class="commentlist">

				<?php wp_list_comments(array('avatar_size' => 77)); ?>

			</ol>

			<?php previous_comments_link() ?>

			<?php next_comments_link() ?>

			<?php else : // this is displayed if there are no comments so far ?>

			<?php if ( ! comments_open() && ! is_page() ) : ?>

			<?php _e('Comments are closed.','seosbusiness'); ?>

			<?php endif; ?>

			<?php endif; ?>

		<?php if ( comments_open() ) : ?>

		<?php comment_form(); ?>

<?php endif;  ?>
