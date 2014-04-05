<?php
/**
 * @package WordPress
 * @subpackage Yoko-Webdebs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-details">
		<?php if( in_category( 'eventi' ) ) : ?>
			<span class="tag">Evento</span>
		<?php elseif( in_category( 'incontri' ) ) : ?>
			<span class="tag">Incontro</span>
		<?php endif; ?>
		<p>
			<?php
				if (in_category('eventi') || in_category('incontri')):
					$when = get_post_meta($post->ID, 'Quando', true);
					$where = get_post_meta($post->ID, 'Dove', true);
					if ($when):
			?>
				<span>
					<?php echo $when; ?>
				</span>
			<?php
					endif;
					if ($where):
			?>
				<span>
					<?php echo $where; ?>
				</span>
			<?php
					endif;
				else:
			?>
				<span>
					<?php echo get_the_date(); ?>
				</span>
			<?php
				endif;
			?>
		</p>
	</div><!-- end entry-details -->
    
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header><!-- end entry-header -->
        
	<div class="entry-content">
		<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. [use is_home() if you want to have the excerpt also in homepage ] ?>
			<?php the_excerpt(); ?>			
		<?php else : ?>
			<?php the_content( __( 'Continue Reading &rarr;', 'yoko' ) ); ?>		
		<?php endif; ?>
		
		<?php if ( is_page() ) : // Display meta only on page post. ?>
		<footer class="entry-meta">
			<p><?php if ( count( get_the_category() ) ) : ?>
			<?php printf( __( 'Categories: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?> | 
			<?php endif; ?>
			<?php $tags_list = get_the_tag_list( '', ', ' ); 
			if ( $tags_list ): ?>
			<?php printf( __( 'Tags: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> | 
			<?php endif; ?>
			<a href="<?php echo get_permalink(); ?>"><?php _e( 'Permalink ', 'yoko' ); ?></a>
		</footer><!-- end entry-meta -->
		<?php endif; ?>

	</div><!-- end entry-content -->
			
</article><!-- end post-<?php the_ID(); ?> -->