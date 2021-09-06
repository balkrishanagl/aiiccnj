<?php

/**

 * Template Name: Join A Group Template

 */ 





get_header(); 

global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);

		

?>

 

	

		<div class="pasterMainSection">
			<div class="commanBanner">
				<img src="<?php echo $image[0]; ?>">
				<div class="commanBannerTxt">
					<h2 data-aos="fade-left" data-aos-delay="200"><?php the_title() ;?></h2>
				</div>
			</div>

			<div class="ourPosterSection requestfor">
				<div class="container">
					<div class="requestfor-outer joinagroup">
						<?php the_content();?>

						<div class="joinus-form">
						<?php echo do_shortcode('[contact-form-7 id="191" title="Join a group"]'); ?>
								
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php require get_template_directory() . '/social-share.php';?>
<?php endwhile; get_footer(); ?>
