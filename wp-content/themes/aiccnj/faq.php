<?php

/**

 * Template Name: FAQ Template

 */ 





get_header(); 

global $wpdb;

	// Start the loop.

		while ( have_posts() ) : the_post(); 

		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); 

		 get_post_meta($post->ID,'',true);

		

?>
  <div class="bannerSec contactBannerSec">
    <div class="full-width">
      <div class="banner">
        <picture>
          <source srcset="<?php echo $image[0] ;?>" media="(min-width:768px)">
          <source srcset="<?php bloginfo('template_url'); ?>/img/faq-mobile-banner.jpg" media="(min-width:320px)">
          <img src="<?php echo $image[0] ;?>">
        </picture>
        <div class="inner-width d-flex">
          <div class="left">
            <h1>FAQs</h1>
            <h4>When you have so many questions to ask.</h4>
            <div class="breadcrumbTxt">
              <ul>
                
                <li><a href="<?php echo site_url();?>">Home</a></li>

                <li><?php the_title(); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>

  <div class="faqSection">
    <div class="full-width">
      <div class="inner-width show-on-scroll fadeUp">
        <div class="wrapBox">
          <ul class="faqTab">
            <li class="active"><a href="javascript:;" data-id="generalQuest">General Questions</a></li>
            <li><a href="javascript:;" data-id="schemeRelated">Scheme Related Queries</a></li>
            <li><a href="javascript:;" data-id="aboutLoan">About the loan</a></li>
            <li><a href="javascript:;" data-id="loanTransfer">Loan Transfer</a></li>
            <li><a href="javascript:;" data-id="repayLoan">Repay Your Loan</a></li>
          </ul>
          <div class="givenQuestSec">
            <div class="faqSecBox" id="generalQuest" style="display: block;">
              <h2>General Questions</h2>
              <div class="accord">
			       <?php    $args = array( 'post_type' => 'faqs',
                     'post_status' => 'publish',
                     'tax_query' => array(array('taxonomy' => 'faqs_category','field'    => 'slug','terms'    => 'home'	)	));
 $loop = new WP_Query( $args );
       $i=1; 
       while ( $loop->have_posts() ) : $loop->the_post();  ?>
	   
                <div class="accordBox ">
                  <h5 ><?php the_title() ;?></h5>
                  <div class="content">
                       <p><?php the_content();?></p>
                   </div>
                </div>
              
			  
              <?php $i++;  endwhile; ?>
              </div>
            </div>
            <div class="faqSecBox" id="schemeRelated">
              <h2>Scheme Related Queries</h2>
              <div class="accord">
			       <?php    $args = array( 'post_type' => 'faqs',
                     'post_status' => 'publish',
                     'tax_query' => array(array('taxonomy' => 'faqs_category','field'    => 'slug','terms'    => 'doorstep-schemes'	)	));
 $loop = new WP_Query( $args );
       $i=1; 
       while ( $loop->have_posts() ) : $loop->the_post();  ?>
               <div class="accordBox ">
                  <h5 ><?php the_title() ;?></h5>
                  <div class="content">
                       <p><?php the_content();?></p>
                   </div>
                </div>
              
             
			 
              <?php $i++;  endwhile; ?>
              </div>
            </div>
            <div class="faqSecBox" id="aboutLoan">
              <h2>About the loan</h2>
              <div class="accord">
                       <?php    $args = array( 'post_type' => 'faqs',
                     'post_status' => 'publish',
                     'tax_query' => array(array('taxonomy' => 'faqs_category','field'    => 'slug','terms'    => 'about-us'	)	));
 $loop = new WP_Query( $args );
       $i=1; 
       while ( $loop->have_posts() ) : $loop->the_post();  ?>
			  <div class="accordBox ">
                  <h5 ><?php the_title() ;?></h5>
                  <div class="content">
                       <p><?php the_content();?></p>
                   </div>
                </div>
              
				
               
              <?php $i++;  endwhile; ?>
              </div>
            </div>
            <div class="faqSecBox" id="loanTransfer">
              <h2>Loan Transfer</h2>
              <div class="accord">
                   <?php    $args = array( 'post_type' => 'faqs',
                     'post_status' => 'publish',
                     'tax_query' => array(array('taxonomy' => 'faqs_category','field'    => 'slug','terms'    => 'loan-transfer'	)	));
 $loop = new WP_Query( $args );
       $i=1; 
       while ( $loop->have_posts() ) : $loop->the_post();  ?>
			 <div class="accordBox ">
                  <h5 ><?php the_title() ;?></h5>
                  <div class="content">
                       <p><?php the_content();?></p>
                   </div>
                </div>
              
				
               
              <?php $i++;  endwhile; ?>
              </div>
            </div>
            <div class="faqSecBox" id="repayLoan">
              <h2>Repay Your Loan</h2>
              <div class="accord">
                   <?php    $args = array( 'post_type' => 'faqs',
                     'post_status' => 'publish',
                     'tax_query' => array(array('taxonomy' => 'faqs_category','field'    => 'slug','terms'    => 'repay-loan'	)	));
 $loop = new WP_Query( $args );
       $i=1; 
       while ( $loop->have_posts() ) : $loop->the_post();  ?>
			   <div class="accordBox ">
                  <h5 ><?php the_title() ;?></h5>
                  <div class="content">
                       <p><?php the_content();?></p>
                   </div>
                </div>
              
               
              <?php $i++;  endwhile; ?>
              </div>
            </div>
          </div>
          <div class="selfQuestSec show-on-scroll fadeUp">
            <div class="left">
              <div class="image"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/faqImage.png"></div>
            </div>
            <div class="right">
             
            <?php echo do_shortcode( '[contact-form-7 id="439" title="Faq"]' );?>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php endwhile; get_footer(); ?>
