<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 
 $blog_id= the_ID();
?>
<div class="blog-details-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-details-outer">
		<div class="blog-details-th">
			
	<?php    $image = wp_get_attachment_image_src(get_post_thumbnail_id($blog_id), 'full'); ?>
	<img src="<?php echo $image[0] ;?>" > 
		</div>
		<div class="blog-deatsils-main-content">
			<span class="blog-tag">TAG CATEGORY</span>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</div>
</div>
