<?php

// override yoko main function
function yoko() {

	// this theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// use post thumbnails
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

	// this theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'yoko' ),
	) );
	
	// add support for post formats
	// add_theme_support( 'post-formats', array( 'gallery' ) );
	
	// unregister yoko social widget
	add_action('widgets_init', create_function('', 'return unregister_widget("Yoko_SocialLinks_Widget");'));

}

// override yoko comments function
function yoko_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	
	// we want to show only real comments (not pingback/trackback)
	if ( $comment->comment_type == '' ) :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		
			<div class="comment-body">

				<div class="comment-meta commentmetadata"> 
				<?php printf( __( '%s', 'yoko' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?><br/>
				<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'yoko' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( 'Edit &rarr;', 'yoko' ), ' ' );
					?>		
				</div><!-- .comment-meta .commentmetadata -->
		
				<?php comment_text(); ?>
				
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<p class="moderation"><?php _e( 'Your comment is awaiting moderation.', 'yoko' ); ?></p>
				<?php endif; ?>
		
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!-- .reply -->
			
			</div>
			<!--comment Body-->
		
		</div><!-- #comment-##  -->

	<?php
	endif;
}


