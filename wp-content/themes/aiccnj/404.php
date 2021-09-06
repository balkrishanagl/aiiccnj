<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="bannerSec"></div>
<div class="notFound" >
    <div class="full-width">
      <div class="inner-width">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>
      </div>
    </div>    
  </div>
	
<?php get_footer(); ?>
