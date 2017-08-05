<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="gasp-container">
				<div id="gasp-gif">
					<iframe src="https://giphy.com/embed/XidjMKBVCrFQs" width="85%" height="85%" style="position:absolute" frameBorder="0" allowFullScreen></iframe>
				</div>

				<div id="gasp">
					<h2>GASP!</h2>
					<h3>Page not found?!</h3> 
					<p>Don't panic! Just go</p>
					<a class="button" href="<?php echo home_url(); ?>">Back to Home</a>
				</div>

	</div><!-- #primary -->

<?php get_footer(); ?>


