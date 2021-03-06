<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sensible
 */

get_header(); ?>

	<header class="entry-header">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'sensible' ); ?></h1>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
	</header><!-- .entry-header --> 

	<div class="grid grid-pad">

	<div class="grid grid-pad">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found"> 

				<div class="page-content">
					<p><?php _e( 'It looks like you took a wrong turn. Maybe try one of the links below or a search?', 'sensible' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( sensible_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'sensible' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					
					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary --> 
    </div><!-- grid -->

<?php get_footer(); ?>
