<?php

/**

 * Template Name: I am new here Template

 */ 





get_header(); 

global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);

		$follow_jesus_heading_image_id= get_post_meta($post->ID,'follow_jesus_heading_image',true);
		$follow_jesus_heading_image = wp_get_attachment_image_src($follow_jesus_heading_image_id, 'full'); 
		$follow_jesus_section_image_id= get_post_meta($post->ID,'follow_jesus_section_image',true);
		$follow_jesus_section_image = wp_get_attachment_image_src($follow_jesus_section_image_id, 'full'); 
		$follow_jesus_description= get_post_meta($post->ID,'follow_jesus_description',true);

?>

 

	<div class="grayBgSection">
		<div class="newHereBanner">
			<picture>
				<source media="(min-width:650px)" srcset="<?php echo $image[0];  ?>">
				<img src="<?php echo $image[0];  ?>">
			</picture>
			<div class="newHereContent">
				 <div class="container">
				<?php the_content();?>
				</div>
		   </div>
		</div>
		  
		  <div class="folowJesusSection">
		  	<div class="container">
		  	<div class="jesusHeading" data-aos="flip-up" data-aos-delay="100"><img src="<?php echo $follow_jesus_heading_image[0];?>"></div>
		  	<div class="jesusImg" data-aos="fade-right" data-aos-delay="200"><img src="<?php echo $follow_jesus_section_image[0];?>"></div>
		  	<div class="jesusContent" data-aos="fade-left" data-aos-delay="300"><?php echo $follow_jesus_description;?> </div>
		  </div>
		</div>
		 
		 <div class="newHereKeySection">
		 	<div class="newHereKeyBg"></div>
	         <div class="findfitSection sec">
					<div class="container">
						<div class="keyHeading">
							<span data-aos="animate"><img src="<?php bloginfo('template_url'); ?>/img/keyImg.png" class="keyImg" data-aos="flip-up" data-aos-delay="100"></span>
						</div>
							<div class="ffHeading">
							<h2 data-aos="fade-up" data-aos-delay="300">Connect</h2>
							<p data-aos="fade-up" data-aos-delay="500">We enjoy being a non-denominational church where we work together, <br> worship together, and grow together.</p>
						</div>
						<div class="owl-carousel findfit-slide">
							<?php $qry_church_group = new WP_Query( array('post_type' => 'church_group','post_status' => 'publish') );
						if ( $qry_church_group->have_posts() ) {
                        $j=200;
                        while ( $qry_church_group->have_posts() ) {
								$qry_church_group->the_post();
								$postid = get_the_ID();
							    $image = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full'); 
							 ?>
			               <div class="item" data-aos="fade-right" data-aos-delay="<?php echo $j ;?>"><img src="<?php echo $image[0];?>">
			               	<div class="findContent">
			               		<h3><?php the_title();?></h3>
			               		<p><?php the_content();?></p>
			               	  </div>
			               </div>
						<?php   $j+=200 ;  }}	wp_reset_postdata();?>
			             
			            
			           </div>
					</div>
				</div>
			</div>
<div class="serveSection">				
				<div class="serveLeft">
					<h2 data-aos="fade-right" data-aos-delay="200">Serve</h2>
					<p data-aos="fade-right" data-aos-delay="400">Serving at AICC is a great way to get connected, add value to your life, and make a difference in the lives of others. We will help you find the right fit based on your passion, personality, and availability.</p>
				</div>
				<div class="serveSlideSection">
					<div class="owl-carousel serve-slide">
						<?php $qry_serve_aicc = new WP_Query( array('post_type' => 'serve_aicc','post_status' => 'publish') );
						if ( $qry_serve_aicc->have_posts() ) {
                        $j=200;
                        while ( $qry_serve_aicc->have_posts() ) {
								$qry_serve_aicc->the_post();
								$postid = get_the_ID();
							    $image = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full'); 
							 ?>
		               <div class="item" data-aos="fade-up" data-aos-delay="<?php echo $j ;?>">
		               	<img src="<?php echo $image[0];?>">
		               	 <div class="serveBox">
		               	 	<h2><?php the_title();?></h2>
							<?php the_content();?>
		               	 </div>
		               </div>
		          
						<?php   $j+=200 ;  }}	wp_reset_postdata();?>
		               
	               </div>
				</div>
		 </div>

	      <div class="serveFormSection">
		      	<div class="container">
		      		<div class="serveBgSection" data-aos="fade-up" data-aos-delay="100">
				      	<h2>Want to serve?</h2>
				      	<h3>enter details to enroll</h3>
				     <?php echo do_shortcode('[contact-form-7 id="119" title="WANT TO SERVE"]'); ?>

		          </div>
		      </div>
	      </div>
		   
		
		  <?php require get_template_directory() . '/social-share.php';?>
		    
	</div>


<?php endwhile; get_footer(); ?>
