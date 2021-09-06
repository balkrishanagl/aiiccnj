<?php
/**
 * Template Name: Contact Us Template
 */ 


get_header(); 
global $wpdb;
	// Start the loop.
		while ( have_posts() ) : the_post(); 
		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 
		 get_post_meta($post->ID,'',true);
		
?>

	<div class="contactSection">
		<div class="contactMapSection">
			<picture>
				<source media="(max-width:767px)" srcset="<?php bloginfo('template_url'); ?>/img/map-mobile.jpg">
				<source media="(max-width:990px)" srcset="<?php echo $image[0] ;?>">
				<img src="<?php bloginfo('template_url'); ?>/img/map-img.jpg" class="fullWidth">
			  </picture>
			
<div class="contact-flex">
				<div class="contact-address-left">
					<?php the_content();?>
				</div>


				<?php echo do_shortcode('[contact-form-7 id="186" title="Contact Us"]'); ?>
								
			</div>


				<img src="<?php bloginfo('template_url'); ?>/img/map-location-img.png" class="locationIcon1">
				<!-- <div class="locationDetail">
					<p>Asian Indian<br>Christian Church</p>
					<a href="javascript:;"><img src="<?php //bloginfo('template_url'); ?>/img/direction-img.png"> <span>GET DIRECTIONS</span> <img src="<?php //bloginfo('template_url'); ?>/img/long-arrow.png"></a>
				</div> -->
		</div>
	</div>

  </div>


<?php  
require get_template_directory() . '/social-share.php';
endwhile;
get_footer(); ?>