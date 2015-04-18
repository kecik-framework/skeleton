<?php $assets = $this->app->assets; $url = $this->app->url; ?>
		<!-- Start Page Banner -->
		<div class="page-banner no-subtitle">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Accordion & Toggles</h2>
					</div>
					<div class="col-md-6">
						<ul class="breadcrumbs">
							<li><a href="#">Home</a></li>
							<li>Accordion & Toggles</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Banner -->




		<!-- Start Content -->
		<div id="content">
			<div class="container">
				<div class="row sidebar-page">

					<!-- Page Content -->
					<div class="col-md-9 page-content">

						<!-- Toggle -->
						<div class="panel-group">

							<!-- Start Toggle 1 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
											<i class="fa fa-angle-up control-icon"></i>
											<i class="fa fa-desktop"></i> Fully Responsive Theme
										</a>
									</h4>
								</div>
								<div id="collapse-1" class="panel-collapse collapse in">
									<div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:180px;" alt="" src="<?php echo $assets->images('bussniss-pic.jpg') ?>" /> <strong class="accent-color">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <strong>printer</strong> took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</div>
								</div>
							</div>
							<!-- End Toggle 1 -->

							<!-- Start Toggle 3 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
											<i class="fa fa-angle-down control-icon"></i>
											<i class="fa fa-gift"></i> Touchable Slider
										</a>
									</h4>
								</div>
								<div id="collapse-2" class="panel-collapse collapse">
									<div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
								</div>
							</div>
							<!-- End Toggle 2 -->

							<!-- Start Toggle 3 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse-3" class="collapsed">
											<i class="fa fa-angle-down control-icon"></i>
											Title Without Icon
										</a>
									</h4>
								</div>
								<div id="collapse-3" class="panel-collapse collapse">
									<div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
								</div>
							</div>
							<!-- End Toggle 3 -->

						</div>
						<!-- End Toggle -->

						<!-- Divider -->
						<div class="hr5" style=" margin-top:45px; margin-bottom:40px;"></div>

						<div class="row">

							<div class="col-md-6">

								<h4 class="classic-title"><span>Accordion Style</span></h4>

								<!-- Accordion -->
								<div class="panel-group" id="accordion">

									<!-- Start Accordion 1 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse-4">
													<i class="fa fa-angle-up control-icon"></i>
													<i class="fa fa-desktop"></i> Fully Responsive Theme
												</a>
											</h4>
										</div>
										<div id="collapse-4" class="panel-collapse collapse in">
											<div class="panel-body">Duis ute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <strong>readable English</strong>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
										</div>
									</div>
									<!-- End Accordion 1 -->

									<!-- Start Accordion 2 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse-5" class="collapsed">
													<i class="fa fa-angle-down control-icon"></i>
													<i class="fa fa-gift"></i> Touchable Slider
												</a>
											</h4>
										</div>
										<div id="collapse-5" class="panel-collapse collapse">
											<div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
										</div>
									</div>
									<!-- End Accordion 2 -->

									<!-- Start Accordion 3 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse-6" class="collapsed">
													<i class="fa fa-angle-down control-icon"></i>
													<i class="fa fa-tint"></i> Retina Ready
												</a>
											</h4>
										</div>
										<div id="collapse-6" class="panel-collapse collapse">
											<div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
										</div>
									</div>
									<!-- End Accordion 3 -->

								</div>
								<!-- End Accordion -->

							</div>

							<div class="col-md-6">

								<!-- Classic Heading -->
								<h4 class="classic-title"><span>Toggle Style</span></h4>

								<!-- Toggle -->
								<div class="panel-group">

									<!-- Start Toggle 1 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#toggle" href="#collapse-7">
													<i class="fa fa-angle-up control-icon"></i>
													<i class="fa fa-desktop"></i> Fully Responsive Theme
												</a>
											</h4>
										</div>
										<div id="collapse-7" class="panel-collapse collapse in">
											<div class="panel-body">Duis ute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <strong>readable English</strong>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
										</div>
									</div>
									<!-- End Toggle 1 -->

									<!-- Start Toggle 2 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#toggle" href="#collapse-8" class="collapsed">
													<i class="fa fa-angle-down control-icon"></i>
													<i class="fa fa-gift"></i> Touchable Slider
												</a>
											</h4>
										</div>
										<div id="collapse-8" class="panel-collapse collapse">
											<div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
										</div>
									</div>
									<!-- End Toggle 2 -->

									<!-- Start Toggle 3 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#toggle" href="#collapse-9" class="collapsed">
													<i class="fa fa-angle-down control-icon"></i>
													<i class="fa fa-tint"></i> Retina Ready
												</a>
											</h4>
										</div>
										<div id="collapse-9" class="panel-collapse collapse">
											<div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
										</div>
									</div>
									<!-- End Toggle 3 -->

								</div>
								<!-- End Toggle -->

							</div>

						</div>

					</div>
					<!-- End Page Content-->

					<!--Sidebar-->
					<div class="col-md-3 sidebar right-sidebar">

						<!-- Search Widget -->
						<div class="widget widget-search">
							<form action="#">
								<input type="search" placeholder="Enter Keywords..." />
								<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>

						<!-- Categories Widget -->
						<div class="widget widget-categories">
							<h4>Categories <span class="head-line"></span></h4>
							<ul>
								<li>
									<a href="#">Brandign</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
								<li>
									<a href="#">Development</a>
								</li>
								<li>
									<a href="#">Graphic</a>
								</li>
							</ul>
						</div>

						<!-- Popular Posts widget -->
						<div class="widget widget-popular-posts">
							<h4>Popular Post <span class="head-line"></span></h4>
							<ul>
								<li>
									<div class="widget-thumb">
										<a href="#"><img src="<?php echo $assets->images('blog-mini-01.jpg') ?>" alt="" /></a>
									</div>
									<div class="widget-content">
										<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
										<span>Jul 29 2013</span>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<div class="widget-thumb">
										<a href="#"><img src="<?php echo $assets->images('blog-mini-02.jpg') ?>" alt="" /></a>
									</div>
									<div class="widget-content">
										<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
										<span>Jul 29 2013</span>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<div class="widget-thumb">
										<a href="#"><img src="<?php echo $assets->images('blog-mini-03.jpg') ?>" alt="" /></a>
									</div>
									<div class="widget-content">
										<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
										<span>Jul 29 2013</span>
									</div>
									<div class="clearfix"></div>
								</li>
							</ul>
						</div>

						<!-- Video Widget -->
						<div class="widget">
							<h4>Video <span class="head-line"></span></h4>
							<div>
								<iframe src="http://player.vimeo.com/video/63322694?byline=0&amp;portrait=0&amp;badge=0" width="800" height="450"></iframe>
							</div>
						</div>

						<!-- Tags Widget -->
						<div class="widget widget-tags">
							<h4>Tags <span class="head-line"></span></h4>
							<div class="tagcloud">
								<a href="#">Portfolio</a>
								<a href="#">Theme</a>
								<a href="#">Mobile</a>
								<a href="#">Design</a>
								<a href="#">Wordpress</a>
								<a href="#">Jquery</a>
								<a href="#">CSS</a>
								<a href="#">Modern</a>
								<a href="#">Theme</a>
								<a href="#">Icons</a>
								<a href="#">Google</a>
							</div>
						</div>

					</div>
					<!--End sidebar-->


				</div>
			</div>
		</div>
		<!-- End Content -->