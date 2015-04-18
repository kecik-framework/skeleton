<?php $assets = $this->app->assets; $url = $this->app->url; ?>
		<!-- Start HomePage Slider -->
		
		<section id="home">	
			<!-- Carousel -->
			<div id="main-slide" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#main-slide" data-slide-to="0" class="active"></li>
					<li data-target="#main-slide" data-slide-to="1"></li>
					<li data-target="#main-slide" data-slide-to="2"></li>
				</ol><!--/ Indicators end-->

				<!-- Carousel inner -->
				<div class="carousel-inner">
					<div class="item active">
						<img class="img-responsive" src="<?php echo $assets->images('slider/bg1.jpg') ?>" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated2">
									<span>Welcome to <strong>Margo</strong></span>
								</h2>
								<h3 class="animated3">
									<span>The ultimate aim of your business</span>
								</h3>
								<p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a></p>
							</div>
						</div>
					</div><!--/ Carousel item end -->
					<div class="item">
						<img class="img-responsive" src="<?php echo $assets->images('slider/bg2.jpg') ?>" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated4">
									<span><strong>Margo</strong> for the highest</span>
								</h2>
								<h3 class="animated5">
									<span>The Key of your Success</span>
								</h3>		
								<p class="animated6"><a href="#" class="slider btn btn-system btn-large">Buy Now</a></p>	     
							</div>
						</div>
					</div><!--/ Carousel item end -->
					<div class="item">
						<img class="img-responsive" src="<?php echo $assets->images('slider/bg3.jpg') ?>" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated7 white">
									<span>The way of <strong>Success</strong></span>
								</h2>
								<h3 class="animated8 white">
									<span>Why you are waiting</span>
								</h3>		
								<div class="">
									<a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
								</div>     
							</div>
						</div>
					</div><!--/ Carousel item end -->
				</div><!-- Carousel inner end-->

				<!-- Controls -->
				<a class="left carousel-control" href="#main-slide" data-slide="prev">
					<span><i class="fa fa-angle-left"></i></span>
				</a>
				<a class="right carousel-control" href="#main-slide" data-slide="next">
					<span><i class="fa fa-angle-right"></i></span>
				</a>
			</div><!-- /carousel -->    	
		</section>
		<!-- End HomePage Slider -->



		<!-- Start Full Width Sections Content -->
		<div id="content" class="full-sections">
			
			<!-- Start Full Width Section 1 -->
			<div class="section" style="padding-top:60px; padding-bottom:30px; border-top:0; border-bottom:0; background:#fff">
				<div class="container">
					
					<!-- Start Services Icons -->
					<div class="row">
						<!-- Start Service Icon 1 -->
						<div class="col-md-4 col-sm-6 service-box service-icon-left">
							<div class="service-icon">
								<i class="fa fa-magic icon-mini-effect icon-effect-2 gray-icon"></i>
							</div>
							<div class="service-content">
								<h4>High Quality Theme</h4>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut <strong class="accent-color">odit aut</strong> fugit, sed quia dolores.</p>
							</div>
						</div>
						<!-- End Service Icon 1 -->
						
						<!-- Start Service Icon 2 -->
						<div class="col-md-4 col-sm-6 service-box service-icon-left">
							<div class="service-icon">
								<i class="fa fa-eye icon-mini-effect icon-effect-2 gray-icon"></i>
							</div>
							<div class="service-content">
								<h4>Retina Display Ready</h4>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut <strong class="accent-color">odit aut</strong> fugit, sed quia dolores.</p>
							</div>
						</div>
						<!-- End Service Icon 2 -->
						
						<!-- Start Service Icon 3 -->
						<div class="col-md-4 col-sm-6 service-box service-icon-left">
							<div class="service-icon">
								<i class="fa fa-code icon-mini-effect icon-effect-2 gray-icon"></i>
							</div>
							<div class="service-content">
								<h4>Clean Modern Code</h4>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut <strong class="accent-color">odit aut</strong> fugit, sed quia dolores.</p>
							</div>
						</div>
						<!-- End Service Icon 3 -->
						
						<!-- Start Service Icon 4 -->
						<div class="col-md-4 col-sm-6 service-box service-icon-left">
							<div class="service-icon">
								<i class="fa fa-rocket icon-mini-effect icon-effect-2 gray-icon"></i>
							</div>
							<div class="service-content">
								<h4>Fast & Light Theme</h4>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut <strong class="accent-color">odit aut</strong> fugit, sed quia dolores.</p>
							</div>
						</div>
						<!-- End Service Icon 4 -->
						
						<!-- Start Service Icon 5 -->
						<div class="col-md-4 col-sm-6 service-box service-icon-left">
							<div class="service-icon">
								<i class="fa fa-download icon-mini-effect icon-effect-2 gray-icon"></i>
							</div>
							<div class="service-content">
								<h4>Free Updates</h4>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut <strong class="accent-color">odit aut</strong> fugit, sed quia dolores.</p>
							</div>
						</div>
						<!-- End Service Icon 5 -->
						
						<!-- Start Service Icon 6 -->
						<div class="col-md-4 col-sm-6 service-box service-icon-left">
							<div class="service-icon">
								<i class="fa fa-users icon-mini-effect icon-effect-2 gray-icon"></i>
							</div>
							<div class="service-content">
								<h4>Dedicated Support</h4>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut <strong class="accent-color">odit aut</strong> fugit, sed quia dolores.</p>
							</div>
						</div>
						
					</div>
					<!-- End Services Icons -->
					
				</div>
			</div>
			<!-- End Full Width Section 1 -->
			
			
			<!-- Start Full Width Section 2 -->
			<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
				<div class="container">
					
					<div class="row">
						
						<!-- Start Left Side -->
						<div class="col-md-6">
							
							<!-- Start Big Heading -->
							<div class="big-title">
								<h1><strong>More</strong> About Us</h1>
								<p class="title-desc">Some Words About Our Company</p>
							</div>
							<!-- End Big Heading -->
							
							<!-- Some Text -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							
							<!-- Divider -->
							<div class="hr1" style="margin-bottom:14px;"></div>
							
							<!-- Start Icons Lists -->
							<div class="row">
								<div class="col-md-6">
									<ul class="icons-list">
										<li><i class="fa fa-check-circle"></i> Duis aute irure dolor in reprehenderit.</li>
										<li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text.</li>
										<li><i class="fa fa-check-circle"></i> Excepteur sint occaecat cupidatat.</li>
										<li><i class="fa fa-check-circle"></i> Sed ut perspiciatis unde omnis.</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="icons-list">
										<li><i class="fa fa-check-circle"></i> Duis aute irure dolor in reprehenderit.</li>
										<li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text.</li>
										<li><i class="fa fa-check-circle"></i> Excepteur sint occaecat cupidatat.</li>
										<li><i class="fa fa-check-circle"></i> Sed ut perspiciatis unde omnis.</li>
									</ul>
								</div>
							</div>
							<!-- End Icons Lists -->
							
							<!-- Divider -->
							<div class="hr1" style="margin-bottom:20px;"></div>
							
							<!-- Button -->
							<a href="#" class="btn-system btn-small">Read More About Us</a>
						</div>
						<!-- End Left Side -->
						
						<!-- Vimeo Iframe -->
						<div class="col-md-6">
							<iframe src="https://player.vimeo.com/video/63322694?title=0&amp;byline=0&amp;portrait=0" width="800" height="450"></iframe>  
						</div>
						
					</div>
					
				</div>
			</div>
			<!-- End Full Width Section 2 -->
			
			
			<!-- Start Full Width Section 3 -->
			<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:0; border-bottom:0; background:#fff;">
				<div class="container">
					
					<!-- Start Big Heading -->
					<div class="big-title text-center">
						<p class="title-desc">Showcase Your Work</p>
						<h1>This is Our Latest <strong>Work</strong></h1>
					</div>
					<!-- End Big Heading -->
					
					<!-- Some Text -->
					<p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					
					<!-- Divider -->
					<div class="hr1" style="margin-bottom:15px;"></div>
					
					<!-- Start Recent Projects Carousel -->
					<!-- Start Recent Projects Carousel -->
					<ul id="portfolio-list" data-animated="fadeIn">
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/1.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Town winter 2013</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/2.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Quarterly Musashino</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/3.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Mainichi April 2014</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/4.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Shitamachi Rocket</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/5.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Majesty express vol. 01</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/6.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Monocle issue 69</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/7.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Monocle issue 69</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/8.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Monocle issue 69</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						<li>
							<img src="<?php echo $assets->images('Portfolio-1/9.png') ?>" alt="" />
							<div class="portfolio-item-content">
								<span class="header">Monocle issue 69</span>
								<p class="body">web develpment, design</p>
							</div>
							<a href="#"><i class="more">+</i></a>

						</li>
						
					</ul>
					<!-- End Recent Projects Carousel -->
					
					<!-- Divider -->
					<div class="hr1" style="margin-bottom:30px;"></div>
					
					<!-- Button in Center -->
					<p class="text-center"><a href="#" class="btn-system btn-medium border-btn"><i class="icon-brush"></i> View Full Portfolio</a></p>
					
				</div>
			</div>
			<!-- End Full Width Section 3 -->
			

			<!-- Start Full Width Section 4 -->
			<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-6">
							
							<!-- Start Big Heading -->
							<div class="big-title">
								<p class="title-desc">We Make Your Smile</p>
								<h1>Our Great <strong>Team</strong></h1>
							</div>
							<!-- End Big Heading -->
							
							<!-- Some Text -->
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cent, but also the leap into electronic typesetting, remaining essentially unchanged. It was popular in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, more recently with desktop publishing software like Aldus PageMaker including versions.</p>
						</div>
						
						<!-- Start Progress Bars -->
						<div class="col-md-6">
							<!-- Start Progress Bar 1 -->
							<div class="skill-shortcode">
								<div class="skill">
									<p>Web Design</p>          
									<div class="progress">         
										<div class="progress-bar" role="progressbar"  data-percentage="60">
											<span class="progress-bar-span" >60%</span>
											<span class="sr-only">60% Complete</span>
										</div>
									</div>  
								</div>
								<div class="skill">
									<p>Wordpress</p>          
									<div class="progress">          
										<div class="progress-bar" role="progressbar"  data-percentage="80">
											<span class="progress-bar-span" >80%</span>
											<span class="sr-only">60% Complete</span>
										</div>
									</div>  
								</div>
								<div class="skill">
									<p>CSS 3</p>          
									<div class="progress">          
										<div class="progress-bar" role="progressbar"  data-percentage="90">
											<span class="progress-bar-span" >90%</span>
											<span class="sr-only">60% Complete</span>
										</div>
									</div>  
								</div>
								<div class="skill">
									<p>HTML 5</p>          
									<div class="progress">          
										<div class="progress-bar" role="progressbar"  data-percentage="100">
											<span class="progress-bar-span" >100%</span>
											<span class="sr-only">60% Complete</span>
										</div>
									</div>  
								</div>                              
							</div>
						</div>
						<!-- End Progress Bars -->
						
					</div>
					
					<!-- Divider -->
					<div class="hr5" style="margin-top:30px; margin-bottom:40px;"></div>
					
					<!-- Start Team Members -->
					<div class="row">
						
						<!-- Start Memebr 1 -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="team-member">
								<!-- Memebr Photo, Name & Position -->
								<div class="member-photo">
									<img alt="" src="<?php echo $assets->images('team/face_1.png') ?>" />
									<div class="member-name">John Doe <span>Developer</span></div>
								</div>
								<!-- Memebr Words -->
								<div class="member-info">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
								</div>
								<!-- Memebr Social Links -->
								<div class="member-socail">
									<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
									<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
									<a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
									<a class="mail" href="#"><i class="fa fa-envelope"></i></a>
								</div>
							</div>
						</div>
						<!-- End Memebr 1 -->
						
						<!-- Start Memebr 2 -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="team-member">
								<!-- Memebr Photo, Name & Position -->
								<div class="member-photo">
									<img alt="" src="<?php echo $assets->images('team/face_2.png') ?>" />
									<div class="member-name">Silly Sally <span>Developer</span></div>
								</div>
								<!-- Memebr Words -->
								<div class="member-info">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
								</div>
								<!-- Memebr Social Links -->
								<div class="member-socail">
									<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
									<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
									<a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
									<a class="mail" href="#"><i class="fa fa-envelope"></i></a>
								</div>
							</div>
						</div>
						<!-- End Memebr 2 -->
						
						<!-- Start Memebr 3 -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="team-member">
								<!-- Memebr Photo, Name & Position -->
								<div class="member-photo">
									<img alt="" src="<?php echo $assets->images('team/face_3.png') ?>" />
									<div class="member-name">Chris John <span>Developer</span></div>
								</div>
								<!-- Memebr Words -->
								<div class="member-info">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
								</div>
								<!-- Memebr Social Links -->
								<div class="member-socail">
									<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
									<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
									<a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
									<a class="mail" href="#"><i class="fa fa-envelope"></i></a>
								</div>
							</div>
						</div>
						<!-- End Memebr 3 -->
						
						<!-- Start Memebr 4 -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="team-member">
								<!-- Memebr Photo, Name & Position -->
								<div class="member-photo">
									<img alt="" src="<?php echo $assets->images('team/face_4.png') ?>" />
									<div class="member-name">Sara John <span>Developer</span></div>
								</div>
								<!-- Memebr Words -->
								<div class="member-info">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
								</div>
								<!-- Memebr Social Links -->
								<div class="member-socail">
									<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
									<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
									<a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
									<a class="mail" href="#"><i class="fa fa-envelope"></i></a>
								</div>
							</div>
						</div>
						<!-- End Memebr 4 -->
						
					</div>
					<!-- End Team Members -->
					
				</div>
			</div>
			<!-- End Full Width Section 4 -->
			
			
			<!-- Start Full Width Section 5 -->
			<div class="section" style="padding-top:35px; padding-bottom:20px; border-top:0; border-bottom:0; background:#fff;">
				<div class="container">
					
					<!-- Start Clients Carousel -->
					<div class="our-clients">
						<div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5" data-navigation="false">
							
							<!-- Client 1 -->
							<div class="client-item item">
								<a href="#"><img src="<?php echo $assets->images('c1.png') ?>" alt="" /></a>
							</div>
							
							<!-- Client 2 -->
							<div class="client-item item">
								<a href="#"><img src="<?php echo $assets->images('c2.png') ?>" alt="" /></a>
							</div>
							
							<!-- Client 3 -->
							<div class="client-item item">
								<a href="#"><img src="<?php echo $assets->images('c3.png') ?>" alt="" /></a>
							</div>
							
							<!-- Client 4 -->
							<div class="client-item item">
								<a href="#"><img src="<?php echo $assets->images('c4.png') ?>" alt="" /></a>
							</div>
							
							<!-- Client 5 -->
							<div class="client-item item">
								<a href="#"><img src="<?php echo $assets->images('c5.png') ?>" alt="" /></a>
							</div>
							
							<!-- Client 6 -->
							<div class="client-item item">
								<a href="#"><img src="<?php echo $assets->images('c6.png') ?>" alt="" /></a>
							</div>
							
							<!-- Client 7 -->
							<div class="client-item item">
								<a href="#"><img src="<?php echo $assets->images('c7.png') ?>" alt="" /></a>
							</div>
							
							<!-- Client 8 -->
							<div class="client-item item">
								<a href="#"><img src="<?php echo $assets->images('c8.png') ?>" alt="" /></a>
							</div>
							
						</div>
					</div>
					<!-- End Clients Carousel -->
					
				</div>
			</div>
			<!-- End Full Width Section 5 -->
			
		</div>
		<!-- End Full Width Sections Content -->