<?php



class sensible_home_news extends WP_Widget {



// constructor

    function sensible_home_news() {

		$widget_ops = array('classname' => 'sensible_home_news_widget', 'description' => __( 'Show your blog posts on your home page.', 'sensible') );

        parent::__construct(false, $name = __('MT - Home Posts', 'sensible'), $widget_ops); 

		$this->alt_option_name = 'sensible_home_news_widget';

		

		add_action( 'save_post', array($this, 'flush_widget_cache') );

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     		= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		
		$read_more_text  = isset( $instance['read_more_text'] ) ? esc_html( $instance['read_more_text'] ) : __( 'Read More', 'sensible' );

		$category  		= isset( $instance['category'] ) ? esc_attr( $instance['category'] ) : '';
		
		$number    		= isset( $instance['number'] ) ? intval( $instance['number'] ) : 3;
		
		$columnset    	= isset( $instance['columnset'] ) ? intval( $instance['columnset'] ) : 3;

		$see_all_text  	= isset( $instance['see_all_text'] ) ? esc_html( $instance['see_all_text'] ) : '';											
	

	?>



	<p>

	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

	</p>
    
    
    <p>

	<label for="<?php echo $this->get_field_id('read_more_text'); ?>"><?php _e('View More Text', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('read_more_text'); ?>" name="<?php echo $this->get_field_name('read_more_text'); ?>" type="text" value="<?php echo esc_html( $read_more_text ); ?>" />

	</p>




	<p><label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Enter the slug for your category or leave empty to show posts from all categories.', 'sensible' ); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>" type="text" value="<?php echo esc_attr( $category ); ?>" size="3" /></p>
    
    	
    
    <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Enter the number of posts to display.', 'sensible' ); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" size="3" /></p>	
    
    
    <p><label for="<?php echo $this->get_field_id( 'columnset' ); ?>"><?php _e( 'Enter the number of columns.', 'sensible' ); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id( 'columnset' ); ?>" name="<?php echo $this->get_field_name( 'columnset' ); ?>" type="text" value="<?php echo esc_attr( $columnset ); ?>" size="3" /></p>



    <p><label for="<?php echo $this->get_field_id('see_all_text'); ?>"><?php _e('Button Text. Default is set to <em>See All</em>.', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id( 'see_all_text' ); ?>" name="<?php echo $this->get_field_name( 'see_all_text' ); ?>" type="text" value="<?php echo esc_html( $see_all_text ); ?>" size="3" /></p>

	

	<?php

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] 			= esc_attr($new_instance['title']);
		
		$instance['read_more_text'] = esc_html($new_instance['read_more_text']);

		$instance['category'] 		= esc_attr($new_instance['category']);
		
		$instance['number'] 		= intval($new_instance['number']); 
		
		$instance['columnset'] 		= intval($new_instance['columnset']);

		$instance['see_all_text'] 	= esc_html($new_instance['see_all_text']);									

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['sensible_home_news']) )

			delete_option('sensible_home_news');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('sensible_home_news', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'sensible_home_news', 'widget' );

		}



		if ( ! is_array( $cache ) ) {

			$cache = array();

		}



		if ( ! isset( $args['widget_id'] ) ) {

			$args['widget_id'] = $this->id;

		}



		if ( isset( $cache[ $args['widget_id'] ] ) ) {

			echo $cache[ $args['widget_id'] ];

			return;

		}



		ob_start();

		extract($args);



		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'News', 'sensible' );



		/** This filter is documented in wp-includes/default-widgets.php */

		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$read_more_text  = isset( $instance['read_more_text'] ) ? esc_html( $instance['read_more_text'] ) : __( 'Read More', 'sensible' );

		$category = isset( $instance['category'] ) ? esc_attr($instance['category']) : '';
		
		$number = ( ! empty( $instance['number'] ) ) ? intval( $instance['number'] ) : 3;

		if ( ! $number )

			$number = 3; 
			
		$columnset 		= ( ! empty( $instance['columnset'] ) ) ? intval( $instance['columnset'] ) : 3;
		
		if ( ! $columnset ) 

			$columnset = 3;

		$see_all_text = isset( $instance['see_all_text'] ) ? esc_html($instance['see_all_text']) : __( 'See All', 'sensible' );	



		/**

		 * Filter the arguments for the Recent Posts widget.

		 *

		 * @since 3.4.0

		 *

		 * @see WP_Query::get_posts()

		 *

		 * @param array $args An array of arguments used to retrieve the recent posts.

		 */

		$mt = new WP_Query( apply_filters( 'widget_posts_args', array(

			'no_found_rows'       => true,

			'post_status'         => 'publish',

			'posts_per_page'	  => $number,

			'category_name'		  => $category,
			
			'tax_query' => array( 
    							array(
      								'taxonomy' => 'post_format',
      								'field' => 'slug',
      								'terms' => 
								array(
									'post-format-image', 
									'post-format-status', 
									'post-format-chat',
									),	
      							'operator' => 'NOT IN',
    		)))));



		if ($mt->have_posts()) :  

?>

		
        <div class="home-news">
                
			<?php if ( $title ) : ?> 
        
        		<div class="grid grid-pad">
            		<div class="col-1-1">
                    	<?php if ( $title ) echo $before_title . esc_attr( $title ) . $after_title; ?> 
                	</div><!-- col-1-1 -->  
            	</div><!-- grid -->
            
        	<?php endif; ?>
            
           	    	
       		<div class="grid grid-pad no-top"> 
                
                
                <?php while ( $mt->have_posts() ) : $mt->the_post(); ?>
             
                	<div class="col-1-<?php echo $columnset; ?> mt-column-clear wow animated fadeInUp" data-wow-delay="0.25s">
            			<div class="grid-block fade">
                        	<div class="caption" style="display: none;">
                        	<a href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i></a>
                        	</div>
            				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('sensible-home-blog'); ?></a> 
                        </div>
							<?php the_title( '<h5>', '</h5>' ); ?>
                            
                            <?php if ( has_excerpt() ) : ?>
                            	<?php the_excerpt('<p>','</p>'); ?> <a href="<?php the_permalink(); ?>"><?php echo esc_html( $read_more_text ); ?></a>
                            <?php else : ?>
                        		<p><?php $content = get_the_content(); echo wp_trim_words( $content , '20' ); ?> <a href="<?php the_permalink(); ?>"><?php echo esc_html( $read_more_text ); ?></a></p>
                            <?php endif; ?> 
                            
                             
                    </div><!-- col-1-3 -->

				<?php endwhile; ?>
                
                        
				
        		
            </div><!-- grid -->
        
    	</div><!-- home-news -->
        	
		<?php if ( $see_all_text ) : ?> 
        		
    	<div class="home-blog-cta">
        	<div class="grid grid-pad">
            	<div class="col-1-1">
                			
                	<a href="<?php if( get_option( 'show_on_front' ) == 'page' ) echo get_permalink( get_option('page_for_posts' ) ); else echo esc_url( home_url() );?>">
						<button class="outline white">
							<?php echo esc_html( $see_all_text ); ?>
                    	</button>
                	</a>  
        				
         		</div><!-- col-1-1 --> 
      		</div><!-- grid -->
   		</div><!-- home-blog-cta -->
            
		<?php endif; ?>
        
		
	<?php

		// Reset the global $the_post as this query will have stomped on it

		wp_reset_postdata();



		endif;



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'sensible_home_news', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}

	

}