<?php
/**
 * Template Name: Podcast Template
 */ 
get_header(); 
?>

        <div class="pasterMainSection">
            <div class="commanBanner">
                <picture>
                    <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/join-group-banner.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/podcast.jpg">
                </picture>
                <div class="commanBannerTxt">
                    <h2 data-aos="fade-left" data-aos-delay="200">Podcast</h2>
                </div>
            </div>
            <div class="clr"></div>

            <div class="podcast-main">
                <div class="container">
                    <div class="podcast-wrapper">
                        <div class="podcast-repeat" data-aos="fade-up" data-aos-delay="200">
                            <a href="javascript:;" class="post-cast-th"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/podcast1.jpg);">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/podcast1.jpg">
                            </a>
                            <div class="posdcast-list">
                                <span class="new-tag">New</span>
                                <h4><a href="javascript:;">Lorem ipsum dolor sit amet consectetur adipiscing elit.</a>
                                </h4>
                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/calnder.jpg"> Aug 9, 2021</li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/clock.jpg"> 4 min</li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/tags.jpg"> Care group bible study</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque non ex nibh. Morbi
                                    rutrum laoreet tempus. Sed pellentesque mi non pharetra interdum.</p>
                            </div>
                        </div>

                        <div class="podcast-repeat" data-aos="fade-up" data-aos-delay="200">
                            <a href="javascript:;" class="post-cast-th"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/podcast2.jpg);">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/podcast2.jpg">
                            </a>
                            <div class="posdcast-list">
                                <span class="new-tag">New</span>
                                <h4><a href="javascript:;">Lorem ipsum dolor sit amet consectetur adipiscing elit.</a>
                                </h4>
                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/calnder.jpg"> Aug 9, 2021</li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/clock.jpg"> 4 min</li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/tags.jpg"> Care group bible study</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque non ex nibh. Morbi
                                    rutrum laoreet tempus. Sed pellentesque mi non pharetra interdum.</p>
                            </div>
                        </div>


                        <div class="podcast-repeat" data-aos="fade-up" data-aos-delay="200">
                            <a href="javascript:;" class="post-cast-th"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/podcast1.jpg);">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/podcast1.jpg">
                            </a>
                            <div class="posdcast-list">
                                <span class="new-tag">New</span>
                                <h4><a href="javascript:;">Lorem ipsum dolor sit amet consectetur adipiscing elit.</a>
                                </h4>
                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/calnder.jpg"> Aug 9, 2021</li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/clock.jpg"> 4 min</li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/tags.jpg"> Care group bible study</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque non ex nibh. Morbi
                                    rutrum laoreet tempus. Sed pellentesque mi non pharetra interdum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="loadmore-podcast" data-aos="fade-up" data-aos-delay="200"><a href="javascript:;">Load
                            More Podcast</a></div>
                </div>
            </div>
        </div>
    </div>



    <div class="socialSection">
        <img src="<?php echo get_template_directory_uri(); ?>/img/welcom-icon.png" data-aos="flip-up" data-aos-delay="100">
        <h2 data-aos="flip-up" data-aos-delay="200">You are welcome here.</h2>
        <div class="socialIcon">
            <a href="javascript:;" data-aos="zoom-in" data-aos-delay="400"><i
                    class="fab fa-facebook-f icon-facebook"></i></a>
            <a href="javascript:;" data-aos="zoom-in" data-aos-delay="600"><i
                    class="fab fa-twitter icon-twitter"></i></a>
            <a href="javascript:;" data-aos="zoom-in" data-aos-delay="800"><i
                    class="fab fa-youtube icon-youtube"></i></a>
            <a href="javascript:;" data-aos="zoom-in" data-aos-delay="1000"><i
                    class="fab fa-linkedin-in icon-linkedin"></i></a>
            <a href="javascript:;" data-aos="zoom-in" data-aos-delay="1200"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <?php get_footer(); ?>