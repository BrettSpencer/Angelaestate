<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sensible
 */

get_header(); ?>

        
        <?php if ( get_theme_mod( 'sensible_blog_bg' ) ) : ?>
    		<header class="entry-header blog-archive-header-bg" data-speed="8" data-type="background" style="background: url('<?php echo esc_url(get_theme_mod( 'sensible_blog_bg' )); ?>') 50% 0 no-repeat fixed;">
    	<?php else : ?> 
        	<header class="entry-header">
		<?php endif; ?>
        
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<h1 class="entry-title"><?php echo esc_html( get_theme_mod( 'sensible_blog_title', __( 'Blog', 'sensible' ) )) ?></h1>
        		</div><!-- col-1-1 -->
        	</div><!-- grid -->
            
        <?php if ( get_theme_mod( 'sensible_blog_bg' ) ) : ?>
    		</header><!-- .entry-header -->
    	<?php else : ?> 
        	</header><!-- .entry-header -->
		<?php endif; ?>

    
		<div class="grid grid-pad">
        	
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        		<div id="primary" class="content-area col-9-12 blog-archive">
    		<?php else: ?>
    			<div id="primary" class="content-area col-1-1 blog-archive">
    		<?php endif; ?>
            
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) :  ?>	

				<?php /* Start the Loop */ 
								
				while ( have_posts() ) : the_post(); ?> 

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

					<?php endwhile; ?> 

						<?php sensible_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?> 
    		<?php get_sidebar(); ?>
    	<?php endif; ?>
    
	</div><!-- grid -->
<?php get_footer(); ?>
