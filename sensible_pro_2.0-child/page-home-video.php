<?php

/**

Template Name: Home Page - Video

 *

 * @package sensible

 */



get_header(); ?>



	<?php



	$home_video_mp4 = get_theme_mod( 'sensible_banner_mp4' ); 

	$home_video_webm = get_theme_mod( 'sensible_banner_webm' ); 

	$home_video_ogv = get_theme_mod( 'sensible_banner_ogv' );

	

	?>





	<div  id="video-hero" class="home-video">

		<?php if ( (!empty($home_video_mp4) OR !empty($home_video_webm) OR !empty($home_video_ogv)) AND !wp_is_mobile() ) : 	?> 

			<video autoplay loop>

         

        		<?php if ( !empty($home_video_mp4) ) : ?>

					<source src="<?php echo get_theme_mod( 'sensible_banner_mp4' ); ?>" type="video/mp4">

            	<?php endif; ?>

				<?php if ( !empty($home_video_webm) ) : ?>

					<source src="<?php echo get_theme_mod( 'sensible_banner_webm' ); ?>" type="video/webm">

				<?php endif; ?>

				<?php if ( !empty($home_video_ogv) ) : ?>   

					<source src="<?php echo get_theme_mod( 'sensible_banner_ogv' ); ?>" type="video/ogg">

				<?php endif; ?>  

            

			</video>

		<div id="video-overlay">

			<h1 class="top-wow">HIGHEST RATED PINOT IN US BY IWC 2016</h1>

			<h1>ANGELA ESTATE 2013 PINOT NOIR</h1>

			<div class="buy-button">

            		<a href="http://store.nexternal.com/angela/" class="buy-button-text">Buy Wine</a>

        		</div><!--end buy-button-->

		</div><!-- video-overlay -->



		<?php else : ?>

			<?php the_post_thumbnail('full'); ?>



			<div id="video-overlay">

			<h1 class="top-wow">HIGHEST RATED PINOT IN US BY IWC 2016</h1>

			<h1>ANGELA ESTATE 2013 PINOT NOIR</h1>

			<div class="buy-button">

            		<a href="http://store.nexternal.com/angela/" class="buy-button-text">Buy Wine</a>

        		</div><!--end buy-button-->



		<?php endif; ?>

 

	</div>

         

        



	<?php if( get_theme_mod( 'active_social' ) == '') : ?>

    

		<?php get_template_part( 'content', 'home-social' ); // home social area ?>

        

	<?php endif; ?>

        

    <?php if( get_theme_mod( 'active_intro' ) == '') : ?>  

        

   		<?php get_template_part( 'content', 'intro' ); // intro content ?>

         

	<?php endif; ?>

     

        

    <?php if( get_theme_mod( 'active_details' ) == '') : ?>

    

    	<?php get_template_part( 'content', 'details' ); // details content ?> 

        

	<?php endif; ?>

		

        

    <?php if( get_theme_mod( 'active_blog' ) == '') : ?> 

    

    	<?php if ( is_active_sidebar('home-news-widget') ) : ?>

        

    		<?php dynamic_sidebar('home-news-widget'); ?>  

        

        <?php endif; ?> 

         

	<?php endif; ?>



	<?php if( get_theme_mod( 'active_services' ) == '') : ?>  

        		

    	<?php get_template_part( 'content', 'services' ); // services content ?>

		

	<?php endif; ?>

		

        

	<?php if( get_theme_mod( 'active_team' ) == '') : ?>    

        

    	<?php get_template_part( 'content', 'team' ); // team content ?> 

        

	<?php endif; ?>

		

        

    <?php if( get_theme_mod( 'active_skill_bar' ) == '') : ?>  

        

    	<?php get_template_part( 'content', 'skills' ); // skills bars ?> 	

        

	<?php endif; ?>

		

        

    <?php if( get_theme_mod( 'active_home_widget' ) == '') : ?>  

        

        <?php get_template_part( 'content', 'home-widget' ); // home widget area ?> 	

		

	<?php endif; ?>

		

  

    <?php if( get_theme_mod( 'active_home_map' ) == '') : ?> 

        

    	<?php get_template_part( 'content', 'map' ); // map area ?> 

		

	<?php endif; ?> 



         



<?php get_footer(); ?>



