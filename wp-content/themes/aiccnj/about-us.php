<?php
/**
 * Template Name: About Us Template
 */ 


get_header();
global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);
    $banner_title= get_post_meta($post->ID,'banner_title',true);
	$banner_description= get_post_meta($post->ID,'banner_description',true);
	$video_image_id= get_post_meta($post->ID,'video_section',true);
    $video_image = wp_get_attachment_image_src($video_image_id, 'full'); 
	$poster_section= get_post_meta($post->ID,'poster_section',true);
?>

 <div class="aboutBannerSection" style="background: #152238 url(<?php echo $image[0]; ?>) right top no-repeat;">
 	<div class="container">
 	   <div class="aboutBannerTxt">
 		<small data-aos="fade-right" data-aos-delay="100"> <?php the_title();?></small>
 		<?php echo $banner_title ;?>
 		<?php echo $banner_description ;?>
		</div>
   </div>
 </div>
	<div class="aboutMainSection">
		<div class="container">
			<div class="videoSection" data-aos="fade-up" data-aos-delay="200"><a href="javascript:;"><img src="<?php echo $video_image[0]; ?>"></a></div>
			  <div class="discription" data-aos="fade-right" data-aos-delay="100">
			  <?php the_content();?>
			  </div>
			  <?php $qry_serve_aicc = new WP_Query( array('post_type' => 'about_section_detail','post_status' => 'publish') );
						if ( $qry_serve_aicc->have_posts() ) {
                        $i=1;
						$j=100;
						$k=200;
                        while ( $qry_serve_aicc->have_posts() ) {
								$qry_serve_aicc->the_post();
								$postid = get_the_ID();
							    $image = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full'); 
								if($i % 2 == 1){
								$aboutBoxRowClass='fltEnd';
								$leftBoxClass="posL";
								$fade_one= "fade-right";
								$fade_two= "fade-left";
								}else{ $aboutBoxRowClass='fltSta';
								$leftBoxClass="posR";
								$fade_one= "fade-left";
								$fade_two= "fade-right";
								}
		    	?> 
			   <div class="aboutBoxRow <?php echo $aboutBoxRowClass;?>">
			   	<div class="leftBox <?php echo $leftBoxClass;?>" data-aos="<?php echo $fade_one;?>" data-aos-delay="<?php echo $j;?>">
			   <?php the_content();?>
			   </div>
			   	<div class="rightBox" data-aos="<?php echo $fade_two;?>" data-aos-delay="<?php echo $k;?>"><img src="<?php echo $image[0];?>"></div>
			   </div>
                  <?php   $i++ ;  }}	wp_reset_postdata();?>

		</div>
		<div class="ourPosterSection">
			<div class="container">
			
		   <?php echo $poster_section ;?>
			</div>
	</div>

	</div>
	</div>


<div class="subcribeSection">
		    	<div class="container">
			    	<h2 data-aos="fade-left" data-aos-delay="100">Want regular updates from the Asian Indian Christian Church?</h2>
			    	<p class="alnCenter" data-aos="fade-right" data-aos-delay="200">Donec egestas laoreet quam at rhoncus. Nulla facilisi. Vivamus fringilla arcu quis sapien faucibus</p>
			    	<div class="subcribeForm">
			    		<input type="text" placeholder="Enter Full Name">
			    		<input type="text" placeholder="Enter Email Address">
			    		<a href="javascript:;" class="commanBtn active">Subscribe the Newsletter</a>
			    	</div>
		        </div>
		    </div>
	
		  <?php require get_template_directory() . '/social-share.php';?>

<?php endwhile; get_footer(); ?>