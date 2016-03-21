<?php
/**
 * The template for displaying the footer
 */
?>
   <footer>
   
		<div id="footer">

			<details class="deklaracia">

				<summary><?php _e('All rights reserved','seosbusiness'); ?> &copy; <?php echo get_bloginfo('name');?></summary>
			
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'seosbusiness' ) ); ?>"><?php printf( __( 'Powered by %s', 'seosbusiness' ), 'WordPress' ); ?></a>
				
				<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

				<span>  &copy; <?php echo date('Y'); ?></span> 

				<a href="<?php echo esc_url(__('http://seosthemes.com/', 'seosbusiness')); ?>" target="_blank"><?php _e('Seos Business by ','seosbusiness');?><?php _e('Seos', 'seosbusiness'); ?></a>

			</details>

		</div>

    </footer>

<?php wp_footer();?>

</body>

</html>
