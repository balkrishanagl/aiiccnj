<?php
/**
 * Template Name: Home Template
 */ 
get_header(); 
$page_id=12;
?>



	<div class="darkBgSection">
		<div class="container">
		   <div class="bannerSection">
			   	<div class="owl-carousel homespotlight">
				<?php $qry_church_group = new WP_Query( array('post_type' => 'home_slider','post_status' => 'publish') );
						if ( $qry_church_group->have_posts() ) {
							$i=1;
                        while ( $qry_church_group->have_posts() ) {
								$qry_church_group->the_post();
								$postid = get_the_ID();
							    $image = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full'); 
							 $itemClass ='data-aos="zoom-out-left" data-aos-easing="linear" data-aos-duration="2200" data-aos-delay="200"';
							
							?>
	               <div class="item">
	               	   <div class="bannerImg" <?php if($i==1){ echo $itemClass ; } ?> >
					   <img src="<?php echo $image[0]; ?>">
					   </div>
	               </div>

	              
				   <?php $i++; }}	
				   wp_reset_postdata();?>
	           </div>
	           <div class="bannerContent">
	               		<div class="bannerLogo" data-aos="flip-right" data-aos-delay="200"><img src="<?php bloginfo('template_url'); ?>/img/banner-logo.png"></div>
	               		  <h1><?php echo get_post_meta($page_id, 'banner_title', true ); ?></h1>
	               		  <p data-aos="fade-right" data-aos-delay="800"><?php echo get_post_meta($page_id, 'banner_description', true ); ?></p>
	                          <div class="dateDay">
		               		    <h2>Sundays:</h2>
		               		    <p><?php echo get_post_meta($page_id, 'banner_timing', true ); ?></p>
		               		</div>
		               		 <div class="bannerBtn">
		               		 	<a href="<?php echo get_post_meta($page_id, 'watch_church_online_url', true ); ?>" class="commanBtn active">Watch Church Online</a>
		               		 	<a href="<?php echo get_post_meta($page_id, 'join_us_in_person_url', true ); ?>" class="commanBtn">Join Us in Person</a>
		               		</div>
		               		<div class="watchIn">
		               		    <h2>WATCH In:</h2>
		               		    <p id="watchIn">5d 8h 2m 40s</p>
		               		</div>
	               	</div>
			</div>
		</div>
	</div>
	<div class="grayBgSection">
				<div class="findfitSection sec" data-id="1">
					<div class="container">
						<div class="keyHeading">
							<span data-aos="animate"><img src="<?php bloginfo('template_url'); ?>/img/keyImg.png" class="keyImg" data-aos="flip-up" data-aos-delay="100"></span>
						</div>
							<div class="ffHeading">
							<h2 data-aos="fade-up" data-aos-delay="300">Find a Fit</h2>
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
		  <div class="upcommingSection sec" data-id="2">
				<div class="upcomingHeading" data-aos="flip-up" data-aos-delay="100"><img src="<?php bloginfo('template_url'); ?>/img/upcomint-heading.png"></div>
				<div class="finibuSection">
					<h2 data-aos="fade-right" data-aos-delay="200">Vivamus finibus <br>eleifend ey euismod</h2>
					<p data-aos="fade-right" data-aos-delay="400">CAenean interdum velit magna, ut vehicula sem euismod at. Aenean ut urna id purus lacinia gravida non nec est.</p>
					<a href="javascript:;" class="commanBtn" data-aos="fade-right" data-aos-delay="600">View all Upcoming Events</a>
				</div>
				<div class="eventSection">
					<div class="owl-carousel event-slide">
						<?php $qry_upcoming_event = new WP_Query( array('post_type' => 'upcoming_event','post_status' => 'publish') );
						if ( $qry_upcoming_event->have_posts() ) {
                        $j=200;
						$k=400;
                        while ( $qry_upcoming_event->have_posts() ) {
								$qry_upcoming_event->the_post();
								$postid = get_the_ID();
							    $events_date = get_post_meta( $postid, 'event_date', true );
								$events_date = date_create($events_date);
							    $events_time = get_post_meta( $postid, 'event_time', true );
								$events_location = get_post_meta( $postid, 'event_location', true );
							 ?>
		               <div class="item" data-aos="fade-up" data-aos-delay="<?php echo $j ;?>">
		               	 <div class="eventBox">
		               	 	<span class="dateSec" data-aos="flip-right" data-aos-delay="<?php echo $k ;?>"><strong><?php echo  date_format($events_date,"j");// get_the_date( 'j' ); ?></strong><?php echo   date_format($events_date,"F"); //get_the_date( 'F' ); ?></span>
		               	 	<p><strong><?php the_title();?></strong></p>
		               	 	<p class="iBg"><?php echo $events_time ;?></p>
		               	 	<p class="iBg2"><?php echo $events_location ;?></p>
		               	 	<a href="javascript:;" class="commanBtn">Register</a>
		               	 </div>
		               </div>
		              
		           
						<?php   $j+=300 ;  $k+=300 ;  }}	wp_reset_postdata();?>
	               </div>
				</div>
		 </div>
		 <div class="container sec"  data-id="3">
			 <div class="counterSection" data-aos="aos-animate">
			 	                 <?php $my_postid = 12;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ;?>
			 </div>
		</div>
		<div class="latestBlogSection sec" data-id="4">
			<h2 data-aos="fade-right" data-aos-delay="100">Latest update from blog</h2>
			 <a href="javascript:;" class="commanBtn active allStoryBtn" data-aos="fade-left" data-aos-delay="200">READ ALL STORIES</a>
			 <a href="javascript:;" class="commanBtn active allStoryBtnMb" data-aos="fade-left" data-aos-delay="200">View ALL</a>
			    <div class="owl-carousel blog-slide">
					<?php $qry_upcoming_event = new WP_Query( array('post_type' => 'post','post_status' => 'publish') );
						if ( $qry_upcoming_event->have_posts() ) {
                        $j=500;
						$k=300;
                        while ( $qry_upcoming_event->have_posts() ) {
								$qry_upcoming_event->the_post();
								$postid = get_the_ID();
							     $image = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full'); 
							?>
		               <div class="item">
		               	 <img src="<?php echo $image[0]; ?>" data-aos="fade-down" data-aos-delay="<?php echo $k ;?>">
		               	 <div class="blogContent" data-aos="fade-up" data-aos-delay="<?php echo $j ;?>">
		               	 	<span><?php echo get_the_date( 'F j, Y' ); ?></span>
		               	 	<h3><?php the_title();?></h3>
		               	 	<p><?php the_excerpt();?></p>
		               	 	<a href="javascript:;" class="commanBtn">READ MORE</a>
		               	 </div>
		               </div>
		              <?php   $j+=200 ;  $k+=200 ;  }}	wp_reset_postdata();?>
		           </div>
		      </div>
		      
		    <div class="subcribeSection">
		    	<div class="container">
			    	<h2 data-aos="fade-left" data-aos-delay="100">Want regular updates from the Asian Indian Christian Church?</h2>
			    	<p class="alnCenter" data-aos="fade-right" data-aos-delay="200">Donec egestas laoreet quam at rhoncus. Nulla facilisi. Vivamus fringilla arcu quis sapien faucibus</p>
			    	<div class="subcribeForm">
			        <?php echo do_shortcode( '[contact-form-7 id="59" title="Newsletter"]' );?> 
			    	</div>
		        </div>
		    </div>
		  <?php require get_template_directory() . '/social-share.php';?>

		    
	</div>
</div>

  
<?php
get_footer();
 