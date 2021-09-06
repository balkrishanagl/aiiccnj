<?php

/**

 * Template Name: Testimonial Template

 */ 





get_header(); 

global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);

		

?>

  <div class="bannerSec schemeBannerSec privacyBannerSec testimonialBannerSec">
    <div class="full-width">
      <div class="banner">
        <picture> 
		<source srcset="<?php echo $image[0]; ?>" media="(min-width:768px)">
          <source srcset="<?php bloginfo('template_url'); ?>/img/testimonial-mobile-banner.jpg" media="(min-width:320px)">
          <img src="<?php echo $image[0]; ?>">
        </picture>
        <div class="inner-width d-flex">
          <div class="left">
            <h1><?php the_title(); ?></h1>
            <h4>More then 1 million happy customers</h4>
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
  <div class="customerViewSec">
    <div class="full-width show-on-scroll fadeUp">
      <div class="inner-width">
        <h2>What our customers say about us</h2>    
        <div class="customerViewSlide">
       <!-- ITEM LOOP Start-->
	                                <?php $testimonals = new WP_Query( array(

								'post_type' => 'testimonials',

								'post_status' => 'publish') );

					if ( $testimonals->have_posts() ) {

						while ($testimonals->have_posts() ) { 

							$testimonals->the_post();

							$postid = get_the_ID();

							

    $testimonial_data = get_post_meta( $postid, '_testimonial', true );

    $source = ( empty( $testimonial_data['source'] ) ) ? '' : $testimonial_data['source'];

 

							 $image = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full'); 

?>	

          <div class="item">
            <div class="content">
              <p><?php the_content();?></p>
            </div>
            <div class="personInfo d-flex">
              <div class="image"><img src="<?php echo $image[0] ;?>"></div>
              <div class="desc">
                <h6><?php the_title() ;?></h6>
                      <div class="designation"><?php echo $source ; ?></div>
              </div>
            </div>
          </div>
		  
                     <?php }} wp_reset_postdata();?>
         <!-- ITEM LOOP END-->
        </div>   
        </div>
      </div>
    </div>
<?php endwhile; get_footer(); ?>
