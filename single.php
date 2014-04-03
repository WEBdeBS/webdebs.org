<?php
/**
 * @package WordPress
 * @subpackage Yoko-Webdebs
 */

get_header(); ?>

<div id="wrap">
<div id="main">

	<div id="content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<?php if (has_post_thumbnail()) : ?>
			<figure>
			<?php the_post_thumbnail(); ?>
			</figure>
		<?php endif; ?>

		<?php get_template_part( 'content', 'single' ); ?>
			
		<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>
	
	</div><!-- end content -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>