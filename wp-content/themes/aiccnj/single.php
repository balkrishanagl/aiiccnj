<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="pasterMainSection">
		<div class="clr"></div>
		<div class="my-blog-details">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the single post content template.
				get_template_part( 'template-parts/content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile;
			?>

		</div>
		<div class="container">
			<div class="related-blog-post">
				<div class="related-blog-title">Related Articles</div>
				<div class="blog-listing-outer">
				<?php $qry_blog = new WP_Query( array('post_type' => 'post','post_status' => 'publish','posts_per_page'=>4) );
						if ( $qry_blog->have_posts() ) {
                        $j=500;
						$k=300;
                        while ( $qry_blog->have_posts() ) {
								$qry_blog->the_post();
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
							<!--<span class="blog-tag">TAG CATEGORY</span>-->
							<h4><?php the_title();?></h4>
							<p><?php the_excerpt();?></p>	
							<div class="blog-readmore">
								<a href="<?php echo get_permalink() ;?>">Read More</a>
							</div>
						</div>
					</div>
				
					<?php   }}	wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
