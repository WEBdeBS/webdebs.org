<?php
/**
 * @package WordPress
 * @subpackage Yoko-Webdebs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="single-entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<p><span class="entry-date"><?php echo get_the_date(); ?></span> <span class="entry-author"><?php _e( 'by', 'yoko' ); ?> <?php the_author() ?></span> <?php if ( comments_open() ) : ?> | <?php comments_popup_link( __( '0 comments', 'yoko' ), __( '1 Comment', 'yoko' ), __( '% Comments', 'yoko' ) ); ?><?php endif; ?></p>
	</header><!-- end single-entry-header -->
	
	<?php $custom_sito = get_post_meta($post->ID, 'Sito', true); ?>
	<?php $custom_dove = get_post_meta($post->ID, 'Dove', true); ?>
	<?php $custom_gmap = get_post_meta($post->ID, 'Gmap', true); ?>
	<?php $custom_quando = get_post_meta($post->ID, 'Quando', true); ?>
	<?php $custom_relatori = get_post_meta($post->ID, 'Relatori', true); ?>
	<?php $custom_slides = get_post_meta($post->ID, 'Slides', true); ?>

	<?php // if( in_category( array('eventi','segnalazioni') ) ) { } elseif( in_category( 'incontri' ) ) { } ?>
	<?php if( $custom_sito || $custom_dove || $custom_gmap || $custom_quando || $custom_relatori || $custom_slides ): ?>
	<div class="single-entry-custom">

		<?php if( $custom_sito ): ?>
		<p class="sito"><strong>Sito web</strong>: <a href="<?php echo $custom_sito; ?>"><?php echo $custom_sito; ?></a></p>
		<?php endif; ?>

		<?php if( $custom_dove ): ?>
		<p class="dove"><strong>Dove</strong>: <?php echo $custom_dove; ?> <?php if( $custom_gmap ): ?><a href="<?php echo $custom_gmap; ?>" target="_blank">google map</a><?php endif; ?></p>
		<?php endif; ?>

		<?php if( $custom_quando ): ?>
		<p class="quando"><strong>Quando</strong>: <?php echo $custom_quando; ?></p>
		<?php endif; ?>

		<?php if( $custom_relatori ): ?>
		<p class="relatori"><strong>Relatori</strong>: <?php echo $custom_relatori; ?></p>
		<?php endif; ?>

		<?php if( $custom_slides ): ?>
		<p class="slides"><strong>Slide</strong>: <a href="<?php echo $custom_slides; ?>"><?php echo $custom_slides; ?></a></p>
		<?php endif; ?>

	</div>
	<?php endif; ?>

	<div class="single-entry-content">

		<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>	
		<?php else : ?>
			<?php the_content( __( 'Continue Reading &rarr;', 'yoko' ) ); ?>
			<div class="clear"></div>
		<?php endif; ?>
	
		<footer class="single-entry-meta">
			<p><?php if ( count( get_the_category() ) ) : ?>
				<?php printf( __( 'Categories: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?> | 
				<?php endif; ?>
				<?php $tags_list = get_the_tag_list( '', ', ' ); 
				if ( $tags_list ): ?>
				<?php printf( __( 'Tags: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> | 
				<?php endif; ?>
				<a href="<?php echo get_permalink(); ?>"><?php _e( 'Permalink ', 'yoko' ); ?></a>
		</footer><!-- end entry-meta -->

	</div><!-- end single-entry-content -->

</article><!-- end post-<?php the_ID(); ?> -->
<div class="clear"></div>