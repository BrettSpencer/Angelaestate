<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sensible
 */
?>

	</section><!-- #content -->
    
    <?php if( get_theme_mod( 'active_footer_social' ) == '') : ?> 
    
    	<?php if ( is_active_sidebar('footer-social-widget') ) : ?> 
        
        	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
            
            	<div class="footer-icons">
        			<div class="social-bar">
                	
        	<?php else : ?>
            
            	<div class="footer-icons"> 
        			<div class="social-bar-none"> 
                	
        	<?php endif; ?> 
            
        		<div class="grid grid-pad">
        			<div class="col-1-1">
                
                	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
                    
        			  	<span class="wow animated fadeIn">
                        
							<?php echo get_theme_mod( 'footer_social_text' ); ?>
                            
                        </span>
                	
					<?php endif; ?> 
              			
                    	<div class="wow animated fadeIn">
                            
    						<?php dynamic_sidebar('footer-social-widget'); ?> 
                                    
                   		</div> 
    		 			
                	</div><!-- col-1-1 -->
        		</div><!-- grid -->
        	
            <?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
            		</div>   
        		</div><!-- social-bar -->
        	<?php else : ?>
        			</div>   
        		</div><!-- social-bar --> 
        	<?php endif; ?> 
            
        <?php endif; ?>
         
	<?php endif; ?>
	
    
    <?php if( get_theme_mod( 'active_footer_contact' ) == '') : ?>
    
    	<div class="footer-contact">
        	<div class="grid grid-pad">
            
            
            	<?php if ( get_theme_mod( 'footer_title_text' ) ) : ?> 
            		
                    <div class="col-1-1">
            			<h6><?php echo wp_kses_post( get_theme_mod( 'footer_title_text' )); // footer title ?></h6>
    				 </div><!-- col-1-1 -->
                     
				<?php endif; ?> 
           
            	
                <div class="col-1-3">
            		<div class="footer-block">
                    
                    	<?php if ( get_theme_mod( 'bottom_footer_icon_1' ) ) : ?>
                         
    						<i class="fa <?php echo esc_html( get_theme_mod( 'bottom_footer_icon_1', __( 'fa-map-marker', 'sensible' ) )); // first icon ?>"></i>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'first_text' ) ) : ?> 
                        
    						<h5><?php echo wp_kses_post( get_theme_mod( 'first_text' )); // first icon ?></h5>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'sensible_footer_first' ) ) : ?> 
                        
    						<p><?php echo wp_kses_post( get_theme_mod( 'sensible_footer_first' )); // first icon ?></p>
    					
						<?php endif; ?>  
            		
            		</div><!-- footer-block -->
    			</div><!-- col-1-3 -->
                
            	<div class="col-1-3">
            		<div class="footer-block">
            			
                        <?php if ( get_theme_mod( 'bottom_footer_icon_2' ) ) : ?> 
    						
                            <i class="fa <?php echo esc_html( get_theme_mod( 'bottom_footer_icon_2', __( 'fa-mobile', 'sensible' ) )); // second icon ?>"></i>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'second_text' ) ) : ?> 
    						
                            <h5><?php echo wp_kses_post( get_theme_mod( 'second_text' )); // second icon ?></h5>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'sensible_footer_second' ) ) : ?> 
    						
                            <p><?php echo wp_kses_post( get_theme_mod( 'sensible_footer_second' )); // second icon ?></p>
    					
						<?php endif; ?>  
                 
            		</div><!-- footer-block --> 
    			</div><!-- col-1-3 -->
                
            	<div class="col-1-3">
            		<div class="footer-block">
                    	
                        <?php if ( get_theme_mod( 'bottom_footer_icon_3' ) ) : ?> 
    						
                            <i class="fa <?php echo esc_html( get_theme_mod( 'bottom_footer_icon_3', __( 'fa-envelope-o', 'sensible' ) )); // third icon ?>"></i>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'third_text' ) ) : ?> 
    						
                            <h5><?php echo wp_kses_post( get_theme_mod( 'third_text' )); // third icon ?></h5>
    					
						<?php endif; ?>
                        
                        <?php if ( get_theme_mod( 'sensible_footer_third' ) ) : ?> 
    						
                            <div><style type='text/css' class='fca-eoi-style'>.fca_eoi_form{ margin: auto; } .fca_eoi_form p { width: auto; } #fca_eoi_form_444 input{ max-width: 9999px; }#fca_eoi_form_444 .fca_eoi_layout_email_field_wrapper {width: 100% !important;}#fca_eoi_form_444 .fca_eoi_layout_name_field_wrapper {display: none !important;}div.fca_eoi_form_text_element,input.fca_eoi_form_input_element,input.fca_eoi_form_button_element{display:block;margin:0;padding:0;line-height:normal;font-size:14px;letter-spacing:normal;word-spacing:normal;text-indent:0;text-shadow:none;text-decoration:none;text-transform:none;white-space:normal;width:inherit;height:inherit;background-image:none;border:none;border-radius:0;box-shadow:none;box-sizing:border-box;transition:none;outline:none;-webkit-transition:none;-webkit-appearance:none;-moz-appearance:none;color:#000;font-family:"Open Sans", sans-serif;font-weight:normal;transition:background 350ms linear;}input.fca_eoi_form_button_element:hover{background-color:inherit !important;}div.fca_eoi_form_text_element{text-align:center;}div.fca_eoi_layout_popup_close{display:block;margin:0;padding:0;line-height:normal;font-size:14px;letter-spacing:normal;word-spacing:normal;text-indent:0;text-shadow:none;text-decoration:none;text-transform:none;white-space:normal;width:inherit;height:inherit;background-image:none;border:none;border-radius:0;box-shadow:none;box-sizing:border-box;transition:none;outline:none;-webkit-transition:none;-webkit-appearance:none;-moz-appearance:none;color:#000;font-family:"Open Sans", sans-serif;font-weight:normal;display:block;position:absolute;z-index:9999992;top:-10px;right:-10px;background:rgba(0, 0, 0, 0.6);border:1px solid #000;color:#fff;width:20px;height:20px;line-height:20px;text-align:center;cursor:pointer;}div.fca_eoi_layout_headline_copy_wrapper{}div.fca_eoi_layout_5,form.fca_eoi_layout_5{display:inline-block;}div.fca_eoi_layout_5.fca_eoi_layout_widget,form.fca_eoi_layout_5.fca_eoi_layout_widget{max-width:300px;}div.fca_eoi_layout_5.fca_eoi_layout_postbox,form.fca_eoi_layout_5.fca_eoi_layout_postbox{max-width:600px;}div.fca_eoi_layout_5.fca_eoi_layout_popup,form.fca_eoi_layout_5.fca_eoi_layout_popup{max-width:650px;}div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_field_wrapper,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_field_wrapper{float:none;width:100%;}div.fca_eoi_layout_5 div.fca_eoi_layout_content_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_content_wrapper{margin:20px;}div.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper{border:solid 1px transparent;width:49%;border-radius:3px;margin-bottom:10px;position:relative;}div.fca_eoi_layout_5 div.fca_eoi_layout_name_field_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_name_field_wrapper{float:left;}div.fca_eoi_layout_5 div.fca_eoi_layout_email_field_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_email_field_wrapper{float:right;}div.fca_eoi_layout_5 div.fca_eoi_layout_inputs_wrapper_no_name div.fca_eoi_layout_field_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_inputs_wrapper_no_name div.fca_eoi_layout_field_wrapper{float:none;width:100%;}div.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper input,form.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper input,div.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper input:focus,form.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper input:focus{border:none !important;width:100%;height:auto;font-size:16px;line-height:1.2em;padding:7px 0;outline:none;background:none !important;box-shadow:none;}div.fca_eoi_layout_5 div.fca_eoi_layout_submit_button_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_submit_button_wrapper{clear:both;transition:background 350ms linear, border-color 350ms linear;}div.fca_eoi_layout_5 div.fca_eoi_layout_fatcatapps_link_wrapper a,form.fca_eoi_layout_5 div.fca_eoi_layout_fatcatapps_link_wrapper a{display:block;margin:10px 0 0;font-size:12px;}@media (min-width:1px) and (max-width:450px),(min-height:1px) and (max-height:450px){div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a{font-size:13px !important;}}@media (min-width:1px) and (max-width:320px),(min-height:1px) and (max-height:320px){div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_description_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper i.fa:before,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_field_wrapper div.fca_eoi_layout_field_inner input:focus,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_submit_button_wrapper input:focus,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_form_text_element.fca_eoi_layout_privacy_copy_wrapper div,div.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,form.fca_eoi_layout_5.fca_eoi_layout_popup div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,div.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,form.fca_eoi_layout_5.fca_eoi_layout_widget div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,div.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a,form.fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_content_wrapper div.fca_eoi_layout_fatcatapps_link_wrapper a{font-size:12px !important;}}@media (min-width:1px) and (max-width:450px),(min-height:1px) and (max-height:450px){div.fca_eoi_layout_5 div.fca_eoi_layout_content_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_content_wrapper{margin:8px 13px;}div.fca_eoi_layout_5 div.fca_eoi_layout_fatcatapps_link_wrapper a,form.fca_eoi_layout_5 div.fca_eoi_layout_fatcatapps_link_wrapper a{margin:0;}div.fca_eoi_layout_5 div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper,form.fca_eoi_layout_5 div.fca_eoi_form_text_element.fca_eoi_layout_headline_copy_wrapper{margin-bottom:5px;}}@media (min-width:1px) and (max-width:320px),(min-height:1px) and (max-height:320px){div.fca_eoi_layout_5 div.fca_eoi_layout_popup_close,form.fca_eoi_layout_5 div.fca_eoi_layout_popup_close{top:-1px;right:-1px;}}@media (min-width:1px) and (max-width:768px){div.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper{float:none;width:100%;}}div.fca_eoi_layout_5 div.fca_eoi_layout_headline_copy_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_headline_copy_wrapper{margin-bottom:20px;}@media (min-width:1px) and (max-width:450px),(min-height:1px) and (max-height:450px){div.fca_eoi_layout_5 div.fca_eoi_layout_headline_copy_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_headline_copy_wrapper{margin-bottom:0;}}div.fca_eoi_layout_5 div.fca_eoi_layout_inputs_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_inputs_wrapper{margin:20px 0;}@media (min-width:1px) and (max-width:450px),(min-height:1px) and (max-height:450px){div.fca_eoi_layout_5 div.fca_eoi_layout_inputs_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_inputs_wrapper{margin:8px 0;}}div.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_field_wrapper{border-radius:5px;}div.fca_eoi_layout_5 div.fca_eoi_layout_field_inner,form.fca_eoi_layout_5 div.fca_eoi_layout_field_inner{margin:0 10px;}div.fca_eoi_layout_5 div.fca_eoi_layout_submit_button_wrapper,form.fca_eoi_layout_5 div.fca_eoi_layout_submit_button_wrapper{border-bottom:solid 4px transparent;border-radius:5px;padding:0 !important;text-align:center;width:100%;}div.fca_eoi_layout_5 div.fca_eoi_layout_submit_button_wrapper input,form.fca_eoi_layout_5 div.fca_eoi_layout_submit_button_wrapper input{border:0 !important;border-radius:5px;margin:0;height:2.8em;padding:0;text-shadow:0 0 2px black;white-space:normal;width:100%;}#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox {	background-color:  !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox {	border-color:  !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_headline_copy_wrapper div {	font-size: none !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_headline_copy_wrapper div {	color: #6d6e70 !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_description_copy_wrapper p, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_description_copy_wrapper div {	font-size: 14px !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_description_copy_wrapper p, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_description_copy_wrapper div {	color: #6d6e70 !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_name_field_wrapper, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_name_field_wrapper input {	font-size: 14px !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_name_field_wrapper, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_name_field_wrapper input {	color: #777777 !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_name_field_wrapper, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_name_field_wrapper input {	background-color: #ffffff !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_name_field_wrapper {	border-color: #cccccc !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_email_field_wrapper, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_email_field_wrapper input {	font-size: 14px !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_email_field_wrapper, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_email_field_wrapper input {	color: #777777 !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_email_field_wrapper, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_email_field_wrapper input {	background-color: #ffffff !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_email_field_wrapper {	border-color: #cccccc !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_submit_button_wrapper input:hover { background-color: inherit !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_submit_button_wrapper input {	font-size: 14px !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_submit_button_wrapper input {	color: #ffffff !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_submit_button_wrapper input {	background-color: #98002e !important; }#fca_eoi_form_444 .fca_eoi_layout_submit_button_wrapper {	background-color: #6a0020 !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_privacy_copy_wrapper div {	font-size: 14px !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_privacy_copy_wrapper div {	color: #8f8f8f !important; }#fca_eoi_form_444 .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_fatcatapps_link_wrapper a, .fca_eoi_layout_5.fca_eoi_layout_postbox div.fca_eoi_layout_fatcatapps_link_wrapper a:hover {	color: #8f8f8f !important; }</style><div class="fca_eoi_form_wrapper fca_eoi_layout_postbox_wrapper fca_eoi_layout_5_wrapper"><div id='fca_eoi_form_444' class='fca_eoi_form_content'><form method='post' action='#' class='fca_eoi_form fca_eoi_layout_5 fca_eoi_layout_postbox'data-fca_eoi_list_id='Not set' data-fca_eoi_thank_you_page='' data-fca_eoi_thank_you_mode='redirect' novalidate><input type='hidden' id='fca_eoi_form_id' name='fca_eoi_form_id' value='444'>
  <div class="fca_eoi_layout_content_wrapper">
    <div class="fca_eoi_layout_headline_copy_wrapper fca_eoi_form_text_element">
  <div></div>
</div>
<div class="fca_eoi_layout_description_copy_wrapper fca_eoi_form_text_element">
  <div></div>
</div>
<div class="fca_eoi_layout_inputs_wrapper fca_eoi_layout_inputs_wrapper">
  <div class="fca_eoi_layout_name_field_wrapper fca_eoi_layout_field_wrapper" data-fca-eoi-fieldset-id="name_field">
    <div class="fca_eoi_layout_name_field_inner fca_eoi_layout_field_inner">
      <input class='fca_eoi_form_input_element' type='text' name='name' placeholder='First Name'>
    </div>
  </div>
  <div class="fca_eoi_layout_email_field_wrapper fca_eoi_layout_field_wrapper" data-fca-eoi-fieldset-id="email_field">
    <div class="fca_eoi_layout_email_field_inner fca_eoi_layout_field_inner">
      <input class="fca_eoi_form_input_element" type="email" name="email" placeholder="Your Email">
    </div>
  </div>
  <div class="fca_eoi_layout_submit_button_wrapper"><div class="fca_eoi_spiner_div"><span class="fca_eoi_loading_spinner"></span></div><input class="fca_eoi_form_button_element" type="submit" value="Subscribe Now"></div>
</div>
<div class="fca_eoi_layout_privacy_copy_wrapper fca_eoi_form_text_element" data-fca-eoi-fieldset-id="privacy">
  <div></div>
</div>

  </div>
<input type="hidden" name="fca_eoi" value="1">
			<input type="hidden" name="fca_eoi_error_texts_email" class="fca_eoi_error_texts_email" value="Error: Please enter a valid email address. For example &quot;me@mail.com&quot;.">
			<input type="hidden" name="fca_eoi_error_texts_required" class="fca_eoi_error_texts_required" value="Error: This field is required."></form></div></div>
<script>			jQuery.post( "http:\/\/darkmassdesign.com\/angelaestate\/", {
				'fca_eoi_track_form_id': "444"			} );
		</script></div>    					
						<?php endif; ?>   
            		  
            		</div><!-- footer-block -->
    			</div><!-- col-1-3 -->
                
    	</div><!-- grid -->
    </div><!-- footer-contact -->  
    
    <?php endif; ?>
	<?php // end if ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
        
        	<?php if ( 'option2' == sensible_sanitize_index_content( get_theme_mod( 'sensible_footer_home' ) ) ) : ?>
				
                
				<?php if ( is_active_sidebar('contact-form') ) : ?> 
    	
        			
					<div class="site-info col-1-1"> 
            			<div class="footer-form">
                			
							<?php dynamic_sidebar('contact-form'); ?> 
                    	
                		</div>
					</div><!-- .site-info -->
        			
            
            	<?php endif; ?>  
				
				
			<?php else : ?> 
            
            
            	<?php if ( is_home() || is_front_page() || is_page_template( 'page-home.php' ) || is_page_template( 'page-home-video.php' ) || is_page_template( 'page-home-image-bg.php' ) || is_page_template( 'page-home-fullscreen.php' ) ) : ?>
                
			
        			<?php if ( is_active_sidebar('contact-form') ) : ?> 
    	
        			
						<div class="site-info col-1-1"> 
            				<div class="footer-form">
                			
								<?php dynamic_sidebar('contact-form'); ?> 
                    	
                			</div>
						</div><!-- .site-info -->
        			
            
            		<?php endif; ?> 
                    
                <?php endif; ?>
                
                    
			<?php endif; ?>
        
        
        
			<div class="site-info col-1-1">
				
				<?php if ( get_theme_mod( 'sensible_footerid' ) ) : ?> 
        				
					<?php echo wp_kses_post( get_theme_mod( 'sensible_footerid' )); // footer id ?>
				
				<?php else : ?>  
    				
					<?php echo '<a href="http://darkmassdesign.com">Dark Mass Design</a> | All Rights Reserved | &copy ', Date('Y'); ?> 
				
				<?php endif; ?> 
			
            </div><!-- .site-info -->  
                
        
		</div><!-- grid --> 
    </footer><!-- #colophon -->


</div><!-- #page --> 

<?php wp_footer(); ?>

</body>
</html>
