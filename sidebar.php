<?php
/**
 * @package WordPress
 * @subpackage Yoko-Webdebs
 */
?>

	<div id="secondary" class="widget-area" role="complementary">

		<?php if( is_single() ) : ?>
		<aside id="addthis" class="widget widget_archive">
			<h3 class="widget-title">Share this page</h3>
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox fblk">
				<a class="addthis_button_facebook_like" title="Esprimi il tuo Like su Facebook"></a>
			</div>
			<div class="addthis_toolbox twtt">
				<a class="addthis_button_tweet" title="Manda un tweet per questa pagina"></a>
			</div>
			<div class="addthis_toolbox addthis_default_style ggpl">
				<a class="addthis_button_google_plusone" g:plusone:size="medium" title="Aggiungi a Google+"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#"></script>
			<!-- AddThis Button END -->
		</aside>
		<?php endif; ?>
	
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			
			<aside id="categories" class="widget widget_categories">
				<ul>
					<?php wp_list_categories('title_li=<h3 class="widget-title">' . __('Categories', 'yoko') . '</h3>' ); ?>
				</ul>
			</aside>
			
			<aside id="archives" class="widget widget_archive">
				<h3 class="widget-title"><?php _e( 'Archives', 'yoko' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</aside>
	
		<?php endif; // end sidebar 1 widget area ?>

	</div><!-- #secondary .widget-area -->

</div><!-- end main -->

<div id="tertiary" class="widget-area" role="complementary">

	<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
	
		<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
		</aside>
	
		<aside id="recent-posts" class="widget widget_recent_entries">
			<h3 class="widget-title"><?php _e( 'Recent Posts', 'yoko' ); ?></h3>
				<ul>
					<?php wp_get_archives('type=postbypost&limit=7'); ?>
				</ul>
		</aside>
		
		<aside id="calendar" class="widget widget_calendar">
			<h3 class="widget-title"><?php _e( 'Calendar', 'yoko' ); ?></h3>
			<?php get_calendar(true); ?>
		</aside>
		
		<aside id="links" class="widget widget_links">
			<h3 class="widget-title"><?php _e( 'Links', 'yoko' ); ?></h3>
				<ul class="blogroll">
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
				</ul>
		</aside>

	<?php endif; // end sidebar 2 widget area ?>

</div><!-- end tertiary .widget-area -->