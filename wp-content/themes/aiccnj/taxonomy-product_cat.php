<?php
get_header(); 
?>
</div>
			</div>
		</div>
		<section class="deal-section mt-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- new-arrivals -->
					<div class="new-arrivals">
						<div class="title">
							
							
						</div>
   
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<div class="row">
                                  <?php 
     $args = array( 'post_type' => 'product');

       $loop = new WP_Query( $args );

       while ( $loop->have_posts() ) : $loop->the_post();  ?>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												 <?php $postID= get_the_ID();
											 $url = get_the_post_thumbnail_url($postID , 'medium' ); ?>
												<img src="<?php echo $url ;?>" alt="2" />
												<a href="#" class="favorite"><i class="material-icons">&#xE87D;</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="<?php the_permalink(); ?>">
													<h4>   <?php the_title() ;?> </h4>
												</a>
												<div class="wk-price">$450.00
													
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
                                        
									</div>
									
                               <?php   endwhile; ?>      
								</div>

							</div>

							<div id="menu1" class="tab-pane fade">
								<div class="row">
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_01.jpg" alt="2" />
												<a href="#" class="favorite"><i class="material-icons">&#xE87D;</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_02.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00 <span>$890.00</span>
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_03.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
												<div class="discount-tag">-20%</div>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_04.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>

												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_05.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">

												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_06.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_07.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
												<div class="new-tag">new</div>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>

									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_08.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_01.jpg" alt="2" />
												<a href="#" class="favorite"><i class="material-icons">&#xE87D;</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_02.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00 <span>$890.00</span>
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_03.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
												<div class="discount-tag">-20%</div>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_04.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>

												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_05.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_06.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_07.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
												<div class="new-tag">new</div>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_08.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
								</div>



							</div>
							<div id="menu2" class="tab-pane fade">
								<div class="row">
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_01.jpg" alt="2" />
												<a href="#" class="favorite"><i class="material-icons">&#xE87D;</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_02.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00 <span>$890.00</span>
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_03.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
												<div class="discount-tag">-20%</div>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_04.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>

												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_05.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_06.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_07.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
												<div class="new-tag">new</div>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>

									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_08.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_01.jpg" alt="2" />
												<a href="#" class="favorite"><i class="material-icons">&#xE87D;</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_02.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00 <span>$890.00</span>
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_03.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
												<div class="discount-tag">-20%</div>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_04.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>

												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_05.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_06.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_07.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
												<div class="new-tag">new</div>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
									<div class="col-sm-6 col-lg-3">
										<!-- .pro-text -->
										<div class="pro-text">
											<!-- .pro-img -->
											<div class="pro-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/img/product_image_08.jpg" alt="2" />
												<a href="#" class="favorite_border"><i class="material-icons">favorite_border</i></a>
											</div>
											<!-- /.pro-img -->
											<div class="pro-text-outer">
												<span>Cotton Sarees </span>
												<a href="shop-detail.html">
													<h4>Hand Block Print Cotton Saree </h4>
												</a>
												<div class="wk-price">$450.00
													<div class="in-stock"><i class="material-icons">&#xE5CA;</i> In stock</div>
												</div>

												<a href="#" class="add-btn"><i class="material-icons">&#xE8CC;</i> Add to cart</a>
												<a href="#" class="eys-btn"><i class="material-icons">&#xE164;</i></a>
												<a href="#" class="eys-btn" data-toggle="modal" data-target="#quickModal" data-whatever="@mdo"><i class="material-icons">&#xE417;</i></a> 
											</div>
										</div>
										<!-- /.pro-text -->
									</div>
								</div>



							</div>
						</div>
					</div>
				</div>
				<!-- /new-arrivals -->

			</div>
		</div>
	</section>
	</section>


<?php get_footer(); ?>