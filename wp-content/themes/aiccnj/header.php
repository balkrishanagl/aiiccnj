<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ASIAN INDIAN CHRISTIAN CHURCH</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/aos.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
<?php wp_head(); ?>
</head>
<body>
<div class="mainContainer">
  <header>
	<div class="container">
	  <div class="logoSection" data-aos="fade-right" data-aos-delay="100"><a href="<?php echo site_url();?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a></div>
	  <div class="mobileTrigger">
                        <ul>
                            <li class="frst"></li>
                            <li class="scnd"></li>
                            <li class="thrd"></li>
                        </ul>
                    </div>
	  <div class="headerRightSec">
	  	<nav>
		  	<ul>
		  		<li data-aos="fade-down" data-aos-delay="200"><a href="<?php echo site_url(); ?>/about-us">Explore</a></li>
		  		<li data-aos="fade-down" data-aos-delay="300"><a href="<?php echo site_url(); ?>/i-am-new-here">I’m In</a></li>
		  		<li data-aos="fade-down" data-aos-delay="400"><a href="<?php echo site_url(); ?>/give">Give</a></li>
		  		<li data-aos="fade-down" data-aos-delay="500"><a href="<?php echo site_url(); ?>/request-a-prayer" class="reqBtn">Request for Prayer</a></li>
		  		<li data-aos="fade-down" data-aos-delay="600"><a href="<?php echo site_url(); ?>/watch-video" class="watchBtn"><i class="far fa-play-circle"></i> Watch</a></li>
		  	</ul>
	     </nav>
	  </div>
	</div>
 </header>