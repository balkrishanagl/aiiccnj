<?php

/**

 * Template Name: Our Pastors

 */ 





get_header(); 

global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);
         $former_section= get_post_meta($post->ID,'former_section',true);
		$mobile_banner_image_id= get_post_meta($post->ID,'mobile_banner_image',true);
		$mobile_banner_image = wp_get_attachment_image_src($mobile_banner_image_id, 'full'); 

?>

 
 <div class="pasterMainSection">
 	<div class="commanBanner">
			   <picture>
				<source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image[0]; ?>">
				<img src="<?php echo $image[0]; ?>">
			  </picture>
	 	   	<div class="commanBannerTxt">
	 		<h2 data-aos="fade-left" data-aos-delay="200"><?php the_title();?></h2>
	 	  </div>
 	</div>
 	
        <div class="ourPosterSection">
			<div class="container">
			<?php the_content();?>
			</div>
	</div>
	 <div class="formerSection">
	 	<div class="container">
	 		<?php echo $former_section; ?>

		 	</div>
		 </div>
	 </div>
   </div>
	
	</div>
<?php  
require get_template_directory() . '/social-share.php';
endwhile;
get_footer(); ?>
