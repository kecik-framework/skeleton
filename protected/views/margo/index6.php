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



		<!-- Start Content -->
		<div id="content">
			<div class="container">
				
				<!-- Start Services Icons -->
				<div class="row">
					
					<!-- Start Service Icon 1 -->
					<div class="col-md-3 col-sm-6 service-box service-center">
						<div class="service-icon">
							<i class="fa fa-magic icon-large-effect icon-effect-1"></i>
						</div>
						<div class="service-content">
							<h4>High Quality Theme</h4>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor.</p>
						</div>
					</div>
					<!-- End Service Icon 1 -->
					
					<!-- Start Service Icon 2 -->
					<div class="col-md-3 col-sm-6 service-box service-center">
						<div class="service-icon">
							<i class="fa fa-eye icon-large-effect icon-effect-1"></i>
						</div>
						<div class="service-content">
							<h4>Retina Display Ready</h4>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor.</p>
						</div>
					</div>
					<!-- End Service Icon 2 -->
					
					<!-- Start Service Icon 3 -->
					<div class="col-md-3 col-sm-6 service-box service-center">
						<div class="service-icon">
							<i class="fa fa-pencil icon-large-effect icon-effect-1"></i>
						</div>
						<div class="service-content">
							<h4>Clean Modern Code</h4>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor.</p>
						</div>
					</div>
					<!-- End Service Icon 3 -->
					
					<!-- Start Service Icon 4 -->
					<div class="col-md-3 col-sm-6 service-box service-center">
						<div class="service-icon">
							<i class="fa fa-rocket icon-large-effect icon-effect-1"></i>
						</div>
						<div class="service-content">
							<h4>Fast & Light Theme</h4>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor.</p>
						</div>
					</div>
					<!-- End Service Icon 4 -->
					
				</div>
				<!-- End Services Icons -->
				
				<!-- Divider -->
				<div class="hr5" style="margin-top:25px; margin-bottom:55px;"></div>
				
				<div class="row">
					
					<div class="col-md-3">
						
						<!-- Start Big Heading -->
						<div class="big-title">
							<h1>Our <strong>Team</strong></h1>
							<p class="title-desc">We Make Your Smile</p>
						</div>
						<!-- End Big Heading -->
						
						<!-- Some Text -->
						<p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt.</p>
						
						<!-- Divider -->
						<div class="hr1" style="margin-bottom:10px;"></div>
						
						<!-- Some Text -->
						<p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt enim labore et dolore magna aliqua. Ut enim nisi minim veniam, quis nostrud exercitation do ullamco laboris nisi ut aliquip ex commodo.</p>
						
					</div>
					
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
					
				</div>
				
				<!-- Divider -->
				<div class="hr5" style="margin-top:55px; margin-bottom:50px;"></div>
				
				<!-- Start Big Heading -->
				<div class="big-title text-center">
					<h1>This is Our Latest <strong>Work</strong></h1>
					<p class="title-desc">Showcase Your Work</p>
				</div>
				<!-- End Big Heading -->
				
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
				<div class="hr5" style="margin-top:60px; margin-bottom:50px;"></div>
				
				<!-- Start Big Heading -->
				<div class="big-title text-center">
					<h1>Our Happy <strong>Clients</strong></h1>
					<p class="title-desc">Partners We Work With</p>
				</div>
				<!-- End Big Heading -->
				
				<!--Start Clients Carousel-->
				<div class="our-clients">
					<div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">
						
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
				
				<!-- Divider -->
				<div class="hr5" style="margin-top:25px; margin-bottom:55px;"></div>
				
				<!-- Start Call Action -->
				<div class="call-action call-action-boxed call-action-style2 clearfix">
					<!-- Call Action Button -->
					<div class="button-side" style="margin-top:4px;"><a href="#" class="btn-system btn-large">Purchase It Now</a></div>
					<!-- Call Action Text -->
					<h2 class="primary"><strong>Margo</strong> is the best theme to create an <strong>awesome website!</strong></h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<!-- End Call Action -->
				
			</div>
		</div>
		<!-- End Content -->
