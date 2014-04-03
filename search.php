<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */

get_header(); ?>

<div id="wrap">
	<div id="main">
	<div id="content">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">Ricerca per &ldquo;<?php echo get_search_query(); ?>&rdquo; <span class="dets">(<?php echo $wp_query->found_posts; ?> risultati)</span></h1>
				</header><!--end page-header-->
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<nav id="nav-below">
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'yoko' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'yoko' ) ); ?></div>
					</nav><!-- end nav-below -->
				<?php endif; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">

					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Nothing Found', 'yoko' ); ?></h1>
					</header>

					<div class="single-entry-content">
						<p>Spiacenti, nessun risultato per il criterio di ricerca.</p>
						<p>Prova con una nuova chiave di ricerca:</p>
						<?php get_search_form(); ?>
						<img class="notfound" src="<?php echo get_stylesheet_directory_uri() ?>/images/404_teddy_bear_toy.png" />
					</div>

				</article>

			<?php endif; ?>

	</div><!-- end content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>