<?php

/**

 * Template Name: Disclaimer Template

 */ 





get_header(); 

global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);

		

?>

  <div class="bannerSec contactBannerSec">
    <div class="full-width">
      <div class="banner">
        <picture>
          <source srcset="<?php echo $image[0]; ?>" media="(min-width:768px)">
          <source srcset="<?php bloginfo('template_url'); ?>/img/disclaimer-mobile-banner.jpg" media="(min-width:320px)">
          <img src="<?php $image[0]; ?>">
        </picture>
        <div class="inner-width d-flex">
          <div class="left">
            <h1><?php the_title(); ?></h1>
            <h4>Terms and Conditions to follow</h4>
            <div class="breadcrumbTxt">
              <ul>
                 <li><a href="<?php echo site_url();?>">Home</a></li>
                <li><?php the_title(); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
  <div class="disclaimContent">
    <div class="full-width show-on-scroll fadeUp">
      <div class="inner-width">
        <div class="wrapBox">
          <?php the_content();?>
        </div>

      </div>
    </div>
  </div>

<?php endwhile; get_footer(); ?>
