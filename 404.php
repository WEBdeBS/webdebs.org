<?php
/**
 * @package WordPress
 * @subpackage Yoko-Webdebs
 */

get_header(); ?>


<div id="wrap">
<div id="main">

	<div id="content">

		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Not Found', 'yoko' ); ?></h1>
		</header><!-- end page-entry-header -->
	
		<div class="single-entry-content no-results">
			<p>Spiacenti, la pagina che hai richiesto non esiste o non è più disponibile.</p>
			<p>Forse potresti provare con una ricerca:</p>
			<?php get_search_form(); ?>
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/404_elephant.png" />
		</div>
	
		<script type="text/javascript">
			// focus on search field after it has loaded
			document.getElementById('s') && document.getElementById('s').focus();
		</script>

	</div><!-- end content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>