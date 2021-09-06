<?php

/**

 * Template Name: Give and Donate Template

 */ 





get_header(); 

global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);

		

?>

 

		<div class="aboutBannerSection giverevbannersection" 	style="background: #152238 url(<?php echo $image[0]; ?>) right top no-repeat;">
			<div class="container">
				<div class="aboutBannerTxt">
				<?php the_content() ;?>
				</div>
			</div>
		</div>
		<div class="clr"></div>
		<div class="givrevMainSection">
			<div class="container">
				<div class="d-flex jcsb givrevMainSectionouter">
				<?php $qry_give_section = new WP_Query( array('post_type' => 'give_section','post_status' => 'publish') );
						if ( $qry_give_section->have_posts() ) {
                   
                        while ( $qry_give_section->have_posts() ) {
								$qry_give_section->the_post();
								$postid = get_the_ID();
							    $image = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full'); 
							?>
					<div class="revsection">
						<div class="rev-head d-flex jcsb">
							<h4><?php the_title();?></h4>
							<div class="rev-icon">
								<img src="<?php echo  $image[0];  ?>">
							</div>
						</div>
					<?php the_content();?>
					</div>
				
		              <?php   }}	wp_reset_postdata();?>
				</div>




			</div>
		</div>
	</div>


		  <?php require get_template_directory() . '/social-share.php';?>
<?php endwhile; get_footer(); ?>
