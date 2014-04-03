<?php
/**
 * @package WordPress
 * @subpackage Yoko-Webdebs
 */

get_header(); ?>

<div id="wrap">
<div id="main">

	<div id="content">

		<?php if (has_post_thumbnail()) : ?>
			<figure>
			<?php the_post_thumbnail(); ?>
			</figure>
		<?php endif; ?>

		<?php the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>

	</div><!-- end content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>