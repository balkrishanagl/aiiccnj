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
					<div class="blog-list">
						<div class="blog-list-th">
							<a href="javascript:;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-th7.jpg">
							</a>
							<h4>MAY 25, 2021</h4>
						</div>
						<div class="blog-list-summery">
							<span class="blog-tag">TAG CATEGORY</span>
							<h4>Lorem ipsum dolor sit amet consectetur
								adipiscing elit.</h4>
							<p>Quisque non ex nibh. Morbi rutrum laoreet tempus. Sed pellentesque mi non pharetra interdum. </p>	
							<div class="blog-readmore">
								<a href="javascript:;">Read More</a>
							</div>
						</div>
					</div>
					<div class="blog-list">
						<div class="blog-list-th">
							<a href="javascript:;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-th8.jpg">
							</a>
							<h4>MAY 25, 2021</h4>
						</div>
						<div class="blog-list-summery">
							<span class="blog-tag">TAG CATEGORY</span>
							<h4>Lorem ipsum dolor sit amet consectetur
								adipiscing elit.</h4>
							<p>Quisque non ex nibh. Morbi rutrum laoreet tempus. Sed pellentesque mi non pharetra interdum. </p>	
							<div class="blog-readmore">
								<a href="javascript:;">Read More</a>
							</div>
						</div>
					</div>
					<div class="blog-list">
						<div class="blog-list-th">
							<a href="javascript:;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-th9.jpg">
							</a>
							<h4>MAY 25, 2021</h4>
						</div>
						<div class="blog-list-summery">
							<span class="blog-tag">TAG CATEGORY</span>
							<h4>Lorem ipsum dolor sit amet consectetur
								adipiscing elit.</h4>
							<p>Quisque non ex nibh. Morbi rutrum laoreet tempus. Sed pellentesque mi non pharetra interdum. </p>	
							<div class="blog-readmore">
								<a href="javascript:;">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
