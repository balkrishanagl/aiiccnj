<?php
/**
 * Template Name: Blog Template
 */ 
get_header(); 
global $wpdb;
while ( have_posts() ) : the_post(); 
  $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 
  
  $mobile_banner_image_id= get_post_meta($post->ID,'mobile_banner_image',true);
    $mobile_banner_image = wp_get_attachment_image_src($mobile_banner_image_id, 'full');
?>

		<div class="pasterMainSection">
			<div class="commanBanner">
				<picture>
					<source media="(max-width:767px)" srcset="<?php echo $mobile_banner_image[0];?>">
					<img src="<?php echo $image[0]; ?>">
				  </picture>
				<div class="commanBannerTxt">
					<h2 data-aos="fade-left" data-aos-delay="200"><?php the_title();?></h2>
				</div>
			</div>
			<div class="clr"></div>

			<div class="my-blog-listing">
				<div class="container">
					<div class="blog-listing-outer">
						<?php 
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
 
$args = array(
   'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 9,
    'paged' => $paged,
);
 
$qry_upcoming_event = new WP_Query( $args );
if ( $qry_upcoming_event->have_posts() ) {
                        $j=500;
						$k=300;
                        while ( $qry_upcoming_event->have_posts() ) {
								$qry_upcoming_event->the_post();
								$postid = get_the_ID();
							     $image = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full'); 
								?>
						<div class="blog-list">
							<div class="blog-list-th">
								<a href="javascript:;">
									<img src="<?php echo $image[0]; ?>">
								</a>
								<h4><?php echo get_the_date( 'F j, Y' ); ?></h4>
							</div>
							<div class="blog-list-summery">
						<!--		<span class="blog-tag">TAG CATEGORY</span>-->
								<h4><?php the_title();?></h4>
								<p><?php the_excerpt();?></p>	
								<div class="blog-readmore">
									<a href="<?php echo get_permalink() ;?>">Read More</a>
								</div>
							</div>
						</div>
						
		              <?php   $j+=200 ;  $k+=200 ;  }}	?>
				
					</div>

					<div class="storyPagination">
					<?php // Pagination 
$big = 999999999; // need an unlikely integer
 
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $qry_upcoming_event->max_num_pages,
	 'prev_text' => '&lt;',
     'next_text' =>'&gt;'
) ); 
wp_reset_postdata();
?>
 

						
					  </div>

				</div>
			</div>
		</div>
	</div>


<?php require get_template_directory() . '/social-share.php';?>
<?php endwhile;  get_footer(); ?>