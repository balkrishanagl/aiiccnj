<?php

/**

 * Template Name: watch video Template

 */ 
get_header(); 
global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);

		$mobile_banner_image_id= get_post_meta($post->ID,'mobile_banner_image',true);
		$mobile_banner_image = wp_get_attachment_image_src($mobile_banner_image_id, 'full'); 

?>

 <div class="watchviedeoSection">
 	<div class="commanBanner">
		<picture>
			<source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image[0] ; ?>">
			<img src="<?php echo $image[0]; ?>">
		  </picture>
 	   	   
	 	   	<div class="commanBannerTxt">
	 		<?php the_content();?>
	 	  </div>
 	</div>
 	<div class="watchVideoSection">
 		<div class="container">
 		<div class="videoRow">
 			<h2>Latest sermon videos</h2>
 			<ul>
			<?php $video_sermon_details = get_youtube_palylistvideo('PLHfCvJnDwnCyylMhvRo6p3RlgEEnNqErG');
	     $i=1;
			 foreach($video_sermon_details as $row){
			?>
 				<li data-aos="fade-up" data-aos-delay="<?php echo $i*100 ;?>">
 					<div class="videoImg">
	<iframe  src="https://www.youtube.com/embed/<?php echo $row['video'] ;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 				
 				</div>
 				<div class="videoContent">
 					<p><?php echo $row['title'] ;?></p>
 					<!--<a href="javascript:;">70 views</a>-->
 				</div>
 			</li>

			 <?php $i++ ; }?>
 			</ul>
 		</div>

        <div class="videoRow">
 			<h2>Meaningless</h2>
 			<ul>
			<?php $video_meaningless_details = get_youtube_palylistvideo('PLHfCvJnDwnCz05iKRMbYdQ5NiL5C4JOyZ');
             $i=1;
			 foreach($video_meaningless_details as $row){
			?>
 				<li data-aos="fade-up" data-aos-delay="<?php echo $i*100 ;?>">
 					<div class="videoImg">
 					<iframe  src="https://www.youtube.com/embed/<?php echo $row['video'] ;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 				
 				</div>
 				<div class="videoContent">
 					<p><?php echo $row['title'] ;?></p>
 					<!--<a href="javascript:;">70 views</a>-->
 				</div>
 			</li>

			 <?php $i++ ; }?>

 			</ul>
 		</div>

 		<div class="videoRow">
 			<h2>Uncomfortable</h2>
 			<ul>
		<?php $video_uncomfortable_details = get_youtube_palylistvideo('PLHfCvJnDwnCxjRQxPLF6WjsgGFQBOrfCz');
	     $i=1;
			 foreach($video_uncomfortable_details as $row){
			?>
			
			<li data-aos="fade-up" data-aos-delay="<?php echo $i*100 ;?>">
 					<div class="videoImg">
 					<iframe  src="https://www.youtube.com/embed/<?php echo $row['video'] ;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 				
 				</div>
 				<div class="videoContent">
 					<p><?php echo $row['title'] ;?></p>
 					<!--<a href="javascript:;">70 views</a>-->
 				</div>
 			</li>

			 <?php $i++ ; }?>
 			</ul>
 		</div>

 		<div class="visitChannel" data-aos="fade-up" data-aos-delay="500"><a target="_blank" href="https://www.youtube.com/channel/UCwUn4KW0w8_0PG7gwhgKzhA" class="commanBtn active">Visit our Youtube Channel</a> </div>


 	</div>
 </div>
   </div>
	
	</div>


		  
		  <?php require get_template_directory() . '/social-share.php';?>

<?php endwhile; get_footer(); ?>
