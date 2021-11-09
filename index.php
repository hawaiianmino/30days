<?php get_header( ); ?>

	<?php get_template_part( 'slider' ); ?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pb-0" style="z-index: 1;">

				<div class="container topmargin clearfix">

					<!-- What We Do
					============================================= -->
					<div class="heading-block center border-0" data-heading="W">
						<h3>What We Do</h3>
					</div>
					<div class="row clearfix">
						<div class="center col-lg-8 offset-lg-2 bottommargin">
							<h3 class="text-rotater font-secondary" data-separator="," data-rotate="fadeInRight" data-speed="3500">
								Canvas is a Powerful, Responsive &amp; Raw Multi-Purpose Multi-Page &amp; One-Page HTML5 Template. Build whatever you like with this Template. Be it 
								<span class="t-rotate color">Business,Corporate,Medical,Travel,Construction,Real Estate,Media Agency,Portfolio,Restaurant,Magazine,Wedding,Christmas,Blog,App Showcase</span><br> just everything is possible with Canvas.</h3>
						</div>

						<div class="clear"></div>

						<!-- Features colomns
						============================================= -->
						<div class="row clearfix">
						<?php
							$new_query = new WP_Query(
								array(
									'post_type' => 'post',
									'posts_per_page' => 3,
									'order' => 'ASC'
								)
							)
						?>
						<?php
							if($new_query->have_posts(  )):
								while($new_query->have_posts(  )): $new_query->the_post(  );
						?>
							<div class="col-lg-4 bottommargin-sm">
								<div class="feature-box media-box fbox-bg">
									<div class="fbox-media">
										<a href="#"><img src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="Featured Box Image"></a>
									</div>
									<div class="fbox-content fbox-content-lg">
										<h3 class="nott ls0 fw-semibold"><?php the_title(  ); ?><span class="subtitle font-secondary fw-light ls0"><?php the_excerpt(); ?></span></h3>
										<a href="<?php the_permalink(  ); ?>" class="button-link border-0 color">Read More</a>
									</div>
								</div>
							</div>
							<?php
								endwhile;
							endif;
							?>
							<?php wp_reset_postdata(  ); ?>
						</div>
					</div>
				</div>

				<!-- How We Work
				============================================= -->
				<div class="section bg-transparent clearfix">
					<div class="container clearfix">
						<div class="heading-block bottommargin-lg center border-0" data-heading="W">
							<h3 class="nott ls0">How We Work</h3>
						</div>
					</div>

					<!-- How We Work - Carousel
					============================================= -->
						<?php
							$new_howework = new WP_Query(
								array(
									'post_type' => 'page',
									'post__in' => array(44,47,50),
									'posts_per_page' => 3,
									'orderby' => 'post__in'
								)
							)
						
						?>
					<div id="oc-features" class="owl-carousel owl-carousel-full image-carousel carousel-widget customjs">
						<?php
							if($new_howework->have_posts(  )):
								while($new_howework->have_posts(  )): $new_howework->the_post(  );
						?>
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-xl-8">
									<img src="<?php echo get_the_post_thumbnail_url(  ); ?>" alt="Image">
								</div>
								<div class="col-xl-4" style="padding: 20px 0 0 20px;">
									<h3><?php the_title(  ); ?></h3>
									<p>Uniquely plagiarize dynamic convergence after equity invested experiences. Holisticly repurpose installed base infomediaries before web-enabled methods of empowerment.</p>
									<a href="#" class="button-link">Read More</a>
								</div>
							</div>
						</div>
						<?php
							endwhile;
						endif;
						?>
						<?php wp_reset_postdata(  ); ?>
					</div>
				</div>

				<!-- About Us
				============================================= -->
				<div class="section p-0 mt-0 bg-transparent clearfix" style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
					<div class="row align-items-stretch clearfix">
						<div class="col-lg-6 center col-padding" style="background: url('<?php echo get_template_directory_uri( ); ?>/business/images/sections/1.jpg') center center no-repeat; background-size: cover;">
							<div>&nbsp;</div>
						</div>

						<div class="col-lg-6 col-padding">
							<div>
								<div style="position: relative;">
									<div class="heading-block border-0" data-heading="A">
										<h3 class="nott ls0">About Us</h3>
									</div>
								</div>

								<!-- About Us Featured Boxes
								============================================= -->
								<div class="row clearfix">
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-globe"></i></a>
											</div>
											<div class="fbox-content">
												<h3>All over the World</h3>
												<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-gears"></i></a>
											</div>
											<div class="fbox-content">
												<h3>Fully Customisable</h3>
												<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-document"></i></a>
											</div>
											<div class="fbox-content">
												<h3>Helpfull Documentation</h3>
												<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Our Works
				============================================= -->
				<div class="section bg-transparent mb-0">
					<div class="container">
						<div class="heading-block center border-0" data-heading="O">
							<h3 class="nott ls0">Our Works</h3>
						</div>

						<div class="grid-filter-wrap">
							<!-- Grid Filter
							============================================= -->
							<ul class="grid-filter style-2 mx-auto" data-container="#portfolio">

								<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
								<li><a href="#" data-filter=".pf-icons">Icons</a></li>
								<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
								<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
								<li><a href="#" data-filter=".pf-media">Media</a></li>
								<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

							</ul><!-- .grid-filter end -->
						</div>
					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio row grid-container g-0">

						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/1.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
											<!-- Decription: Start -->
											<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
												<h3><a href="portfolio-single.html">Open Imagination</a></h3>
												<span><a href="#">Media</a>, <a href="#">Icons</a></span>
											</div>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/2.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
											<!-- Decription: Start -->
											<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
												<h3><a href="#">Locked Steel Gate</a></h3>
												<span><a href="#">Illustrations</a></span>
											</div>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/3.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
											<!-- Decription: Start -->
											<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
												<h3><a href="#">Mac Sunglasses</a></h3>
												<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
											</div>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/4.jpg" alt="Open Imagination"></a></div>
												<div class="slide"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/4-2.jpg" alt="Open Imagination"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
											<!-- Decription: Start -->
											<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
												<h3><a href="#">Morning Dew</a></h3>
												<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
											</div>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/5.jpg" alt="Open Imagination"></a></div>
												<div class="slide"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/5-2.jpg" alt="Open Imagination"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
											<!-- Decription: Start -->
											<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
												<h3><a href="#">Shake It!</a></h3>
												<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
											</div>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/6.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
											<!-- Decription: Start -->
											<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
												<h3><a href="#">Backpack Contents</a></h3>
												<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
											</div>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-media">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/7.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
											<!-- Decription: Start -->
											<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
												<h3><a href="#">Console Activity</a></h3>
												<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
											</div>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="#">
										<img src="<?php echo get_template_directory_uri( ); ?>/business/images/portfolio/8.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
											<!-- Decription: Start -->
											<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
												<h3><a href="#">Sunset Bulb Glow</a></h3>
												<span><a href="#">Graphics</a></span>
											</div>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
							</div>
						</article>

					</div><!-- #portfolio end -->
				</div>

				<!-- Video Sections
				============================================= -->
				<div class="section bg-transparent mt-0 clearfix">
					<div class="container clearfix">

						<div class="row justify-content-center col-mb-50">
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/24help.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">Responsive Layout</h3>
										<p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/barcode.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">Retina Ready Graphics</h3>
										<p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/buy.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">Powerful Performance</h3>
										<p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/card.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">HTML5 Video</h3>
										<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/doc.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">Parallax Support</h3>
										<p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/dropbox.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">Endless Possibilities</h3>
										<p>Complete control on each &amp; every element that provides endless customization possibilities.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/piggy-bank.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">Light &amp; Dark Color Schemes</h3>
										<p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/home.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">Boxed &amp; Wide Layouts</h3>
										<p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/icons/offers.svg" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott fw-semibold ls0">Extensive Documentation</h3>
										<p>We have covered each &amp; everything in our Documentation including Videos &amp; Screenshots.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="line"></div>

						<div class="row topmargin-lg clearfix">
							<div class="col-lg-6 p-0">
								<!-- Youtube Video Link
								============================================= -->
								<a href="https://www.youtube.com/watch?v=NS0txu_Kzl8" data-lightbox="iframe">
									<img src="<?php echo get_template_directory_uri( ); ?>/business/images/sections/video.jpg" alt="Youtube Video"  style="box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.15); border-radius: 6px;">
									<i class="icon-play" style="position: absolute; top: 50%; left: 50%; font-size: 60px; color: #FFF; margin-top: -45px; margin-left: -23px"></i>
								</a>
							</div>
							<!-- Video Texts
							============================================= -->
							<div class="col-lg-6" style="padding-left: 60px;">
								<div class="heading-block topmargin-sm bottommargin-sm border-0">
									<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">A small Video from Our Customers.</h3>
								</div>
								<p class="fw-normal">Interactively facilitate.<br>Tactical systems with compelling materials. Objectively re-engineer diverse relationships long-term impact methodologies.</p>
								<h5 class="mb-0 fw-semibold">&middot; SemiColonWeb - Author, Themeforest Market. <a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/tf-logo.png" height="18" alt="Image" style="margin-left: 4px"></a></h5>
								<a href="#" class="button-link bottommargin">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Parallax Area
				============================================= -->
				<div class="section parallax topmargin-lg mb-0 border-top-0 clearfix" style="background-image: url('<?php echo get_template_directory_uri( ); ?>/business/images/sections/2.jpg'); background-size: cover;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
					<div class="container clearfix">

						<div class="row col-mb-50 cleafix">
							<div class="col-md-6 dark" style="padding-left: 60px;">
								<div class="heading-block bottommargin-sm border-0">
									<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">Collections from Our Customers.</h3>
								</div>
								<p>Appropriately implement user friendly e-markets and backend processes. Competently expedite competitive vortals rather than client-based testing procedures. Professionally matrix exceptional schemas vis-a-vis leveraged paradigms. Authoritatively coordinate just in time networks with strategic potentialities.</p>
								<a href="#" class="button-link ms-0">Read More</a>
							</div>

							<!-- Testimonials slider
							============================================= -->
							<div class="col-md-5 offset-md-1">
								<h4 class="dark">Testimonials Scroller</h4>
								<div class="fslider testimonial" data-animation="slide" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide">
												<div class="testimonial border-0 shadow-none">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">Great support, great documentation and you guys done a fantastic job in commenting everything, makes it very easy to customize, so thank you.</p>
														<div class="testi-meta">
															SmileyDot
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial border-0 shadow-none">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">I wish that I could choose more than one reason for my 5-star rating! The Design is great, the features are fantastic, the documentation top-notch.</p>
														<div class="testi-meta">
															georgewhoffman
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial border-0 shadow-none">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">Excellent Template really versatile and well documented. Makes anyone look like a design professional.</p>
														<div class="testi-meta">
															georgeuser077
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial border-0 shadow-none">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">This is the most robust template I've ever worked with. So much can be done with this multi-purpose package. Regular updates and enhancements add tremendous value.</p>
														<div class="testi-meta">
															rmandaro
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial border-0 shadow-none">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">I've been using Canvas for months now and it has exceeded my expectations. Their support has been great too.</p>
														<div class="testi-meta">
															kwelch2
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Team Work
				============================================= -->
				<div class="section bg-transparent pb-0 mb-0">
					<div class="container">
						<div class="row">

							<div class="col-lg-5 order-lg-12">
								<div class="device-xl device-md topmargin-lg"></div>
								<h3 class="mb-0" style="font-size: 40px;">Great Team Work.</h3>
								<h3 class="fw-light ls4 text-lowercase" style="font-size: 15px; color: #999;">Designed by Semicolonweb</h3>
								<p>Uniquely plagiarize dynamic convergence after equity invested experiences. Holisticly repurpose installed base infomediaries before web-enabled methods of empowerment.</p>
								<a href="#" class="button-link bottommargin">Read More</a>
							</div>

							<div class="col-lg-7 order-lg-1">
								<div style="position: relative; margin-bottom: 0;" class="overflow-hidden" data-height-xl="520" data-height-lg="520" data-height-md="520" data-height-sm="500" data-height-xs="300">
									<img class="man" src="<?php echo get_template_directory_uri( ); ?>/business/images/sections/man.jpg" style="position: absolute; top: 0; left: auto;" alt="Chrome">
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Brands Carousel
				============================================= -->
				<div class="section m-0 clearfix" style="padding: 80px 0">
					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xs="2" data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">

						<div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/clients/linkedin.svg" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/clients/nat-geo.svg" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/clients/jetblue.svg" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/clients/zillow.svg" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/clients/amazon.svg" style="height: 24px" alt="Brands"></a></div>

					</div>
				</div>
			</div>
		</section><!-- #content end -->

		<?php get_footer(  ); ?>