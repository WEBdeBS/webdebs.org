<?php
/**
 * @package WordPress
 * @subpackage Yoko-Webdebs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="page-entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!--end page-entry-hader-->

	<div class="single-entry-content">
		<?php the_content(); ?>
		<div class="clear"></div>
	</div><!--end entry-content-->
	
</article><!-- end post-<?php the_ID(); ?> -->
