<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="blog-details-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-details-outer">
		<div class="blog-details-th">
			<?php twentysixteen_post_thumbnail(); ?>
		</div>
		<div class="blog-deatsils-main-content">
			<span class="blog-tag">TAG CATEGORY</span>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</div>
</div>
