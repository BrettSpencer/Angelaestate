<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sensible
 */

get_header(); ?>

  
	<?php if ( have_posts() ) : ?>
     
      
        <?php if ( get_theme_mod( 'sensible_blog_bg' ) ) : ?>
    		<header class="entry-header" data-speed="8" data-type="background" style="background: url('<?php echo esc_url(get_theme_mod( 'sensible_blog_bg' )); ?>') 50% 0 no-repeat fixed;">
    	<?php else : ?>
        	<header class="entry-header"> 
		<?php endif; ?>
        
    		<div class="grid grid-pad">
                <div class="col-1-1">
					<h1 class="entry-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'sensible' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'sensible' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'sensible' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'sensible' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'sensible' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'sensible' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'sensible' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'sensible' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'sensible' );

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'sensible' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'sensible' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'sensible' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'sensible' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'sensible' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'sensible' );

						else :
							_e( 'Archives', 'sensible' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
    		</div><!-- .col-1-1 -->
    	</div><!-- .grid -->
	</header><!-- .page-header -->
            
	<div class="grid grid-pad">
		
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        	<div id="primary" class="content-area col-9-12 blog-archive">
    	<?php else: ?>
    		<div id="primary" class="content-area col-1-1 blog-archive">
    	<?php endif; ?>
        
			<main id="main" class="site-main" role="main">

			<?php /* Start the Loop */ 
			
			?>
			<?php while ( have_posts() ) : the_post(); ?> 

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
