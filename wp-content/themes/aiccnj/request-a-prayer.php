<?php
/**
 * Template Name: Request a Prayer Template
 */ 


get_header();
global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);

		//$mobile_banner_image_id= get_post_meta($post->ID,'mobile_banner_image',true);
		//$mobile_banner_image = wp_get_attachment_image_src($mobile_banner_image_id, 'full'); 

?>
<div class="pasterMainSection">
			<div class="commanBanner">
				<picture>
				<source media="(max-width:767px)" srcset="<?php echo $image[0]; ?>">
			<img src="<?php echo $image[0]; ?>">
				  </picture>
				<div class="commanBannerTxt">
					<h2 data-aos="fade-left" data-aos-delay="200"><?php the_title();?></h2>
				</div>
			</div>

			<div class="ourPosterSection requestfor">
				<div class="container">
					<div class="requestfor-outer">
						<div class="d-flex jcsb">

							<div class="requestpray-left"
								style="background: url(<?php bloginfo('template_url'); ?>/img/request-a-prayer-sectionbanner.jpg) no-repeat top left;">

							</div>
							<div class="requestpray-right">
								<h2>Send us Your Prayer Request</h2>
								<p>We are committed to offering support to you during this time of crisis. If you are in need of prayer or pastoral support, fill out the contact form below.</p>

								<div class="form-request">
							<?php echo do_shortcode('[contact-form-7 id="75" title="Request a Prayer"]'); ?>
								</div>	



							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		  <?php require get_template_directory() . '/social-share.php';?>

<?php endwhile; get_footer(); ?>