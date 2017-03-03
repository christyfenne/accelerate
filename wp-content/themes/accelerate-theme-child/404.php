<?php
/**
 * The template for displaying the 404 pages (Not Found)
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>



	<div class="page-background">
			<div class="error-message">
				<h2><?php _e( 'Whoops!', 'accelerate-theme-child' ); ?></h2>
				<h4><?php _e( 'Looks like the cat got your mouse.', 'accelerate-theme-child' ); ?></h4>
				<p><?php _e( 'The cat must have stolen the identity of this location.', 'accelerate-theme-child' ); ?></p>
				<p><?php _e( 'Maybe try a search?', 'accelerate-theme-child' ); ?></p>
				<div class="search-404"><?php get_search_form(); ?></div>
			</div>
	</div><!-- .page-wrapper -->

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div class="page-content">
					<div class="suggestions">
						<h2><?php _e( 'Of course, you can always go back home!', 'accelerate-theme-child' ); ?></h2>
						<p><?php _e( '<a title="Our Site" href="index.php">HomePage</a>', 'accelerate-theme-child' ); ?></p>


					</div>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>