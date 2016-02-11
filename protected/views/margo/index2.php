<?php
$assets = $this->app->assets;
$url = $this->app->url;
?>
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
                            <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a
                                class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
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


<!-- Start content -->
<div id="content">
    <div class="container">

        <!-- Start Services Icons -->
        <div class="row">

            <!-- Start Service Icon 1 -->
            <div class="col-md-4 col-sm-6 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-trophy icon-mini-effect icon-effect-1 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>High Quality Theme</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 1 -->

            <!-- Start Service Icon 2 -->
            <div class="col-md-4 col-sm-6 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-eye icon-mini-effect icon-effect-1 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>Retina Display Ready</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 2 -->

            <!-- Start Service Icon 3 -->
            <div class="col-md-4 col-sm-6 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-code icon-mini-effect icon-effect-1 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>Clean Modern Code</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 3 -->

            <!-- Start Service Icon 4 -->
            <div class="col-md-4 col-sm-6 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-rocket icon-mini-effect icon-effect-1"></i>
                </div>
                <div class="service-content">
                    <h4>Fast & Light Theme</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 4 -->

            <!-- Start Service Icon 5 -->
            <div class="col-md-4 col-sm-6 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-download icon-mini-effect icon-effect-1"></i>
                </div>
                <div class="service-content">
                    <h4>Free Updates</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 5 -->

            <!-- Start Service Icon 6 -->
            <div class="col-md-4 col-sm-6 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-users icon-mini-effect icon-effect-1"></i>
                </div>
                <div class="service-content">
                    <h4>Dedicated Support</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 6 -->

        </div>
        <!-- End Services Icons -->

        <!-- divider -->
        <div class="hr1 margin-top"></div>

        <div class="row">
            <div class="col-md-6">

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Why Choose Us</span></h4>

                <!-- Accordion -->
                <div class="panel-group" id="accordion">

                    <!-- Start Accordion 1 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-one">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-laptop-1"></i> Fully Responsive Theme
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-one" class="panel-collapse collapse in">
                            <div class="panel-body">Duis ute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like <strong>readable English</strong>. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore...
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion 1 -->

                    <!-- Start Accordion 2 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-tow"
                                   class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-gift-1"></i> Touchable Slider
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-tow" class="panel-collapse collapse">
                            <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a
                                <strong>more-or-less</strong> normal distribution of letters, as opposed to using
                                'Content here, content here', making it look like readable English. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore...
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion 2 -->

                    <!-- Start Accordion 3 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-three"
                                   class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-tint"></i> Retina Ready
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-three" class="panel-collapse collapse">
                            <div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                here, content here', making it look like readable English. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore...
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion 3 -->

                </div>
                <!-- End Accordion -->

            </div>

            <div class="col-md-6">

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Our Skills</span></h4>

                <div class="skill-shortcode">
                    <div class="skill">
                        <p>Web Design</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="60">
                                <span class="progress-bar-span">60%</span>
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>Wordpress</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="80">
                                <span class="progress-bar-span">80%</span>
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>CSS 3</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="90">
                                <span class="progress-bar-span">90%</span>
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>HTML 5</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="100">
                                <span class="progress-bar-span">100%</span>
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Divider -->
        <div class="hr1 margin-60"></div>

        <!-- Start Recent Posts Carousel -->
        <div class="latest-posts">
            <h4 class="classic-title"><span>Latest News</span></h4>
            <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="3">

                <!-- Post 1 -->
                <div class="post-row item">
                    <div class="left-meta-post">
                        <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                    <div class="post-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit. <a class="read-more" href="#">Read More...</a></p>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post-row item">
                    <div class="left-meta-post">
                        <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="#">Link Post</a></h3>
                    <div class="post-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit. <a class="read-more" href="#">Read More...</a></p>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="post-row item">
                    <div class="left-meta-post">
                        <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                    <div class="post-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit. <a class="read-more" href="#">Read More...</a></p>
                    </div>
                </div>

                <!-- Post 4 -->
                <div class="post-row item">
                    <div class="left-meta-post">
                        <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                    <div class="post-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit. <a class="read-more" href="#">Read More...</a></p>
                    </div>
                </div>

                <!-- Post 5 -->
                <div class="post-row item">
                    <div class="left-meta-post">
                        <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                    <div class="post-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit. <a class="read-more" href="#">Read More...</a></p>
                    </div>
                </div>

                <!-- Post 6 -->
                <div class="post-row item">
                    <div class="left-meta-post">
                        <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                    <div class="post-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit. <a class="read-more" href="#">Read More...</a></p>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Recent Posts Carousel -->

        <!-- Divider -->
        <div class="hr1 margin-60"></div>

        <!-- Start Clients Carousel -->
        <div class="our-clients">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Clients</span></h4>

            <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

                <!-- Client 1 -->
                <div class="client-item item">
                    <a href="#"><img src="<?php echo $assets->images('c1.png') ?>" alt=""/></a>
                </div>

                <!-- Client 2 -->
                <div class="client-item item">
                    <a href="#"><img src="<?php echo $assets->images('c2.png') ?>" alt=""/></a>
                </div>

                <!-- Client 3 -->
                <div class="client-item item">
                    <a href="#"><img src="<?php echo $assets->images('c3.png') ?>" alt=""/></a>
                </div>

                <!-- Client 4 -->
                <div class="client-item item">
                    <a href="#"><img src="<?php echo $assets->images('c4.png') ?>" alt=""/></a>
                </div>

                <!-- Client 5 -->
                <div class="client-item item">
                    <a href="#"><img src="<?php echo $assets->images('c5.png') ?>" alt=""/></a>
                </div>

                <!-- Client 6 -->
                <div class="client-item item">
                    <a href="#"><img src="<?php echo $assets->images('c6.png') ?>" alt=""/></a>
                </div>

                <!-- Client 7 -->
                <div class="client-item item">
                    <a href="#"><img src="<?php echo $assets->images('c7.png') ?>" alt=""/></a>
                </div>

                <!-- Client 8 -->
                <div class="client-item item">
                    <a href="#"><img src="<?php echo $assets->images('c8.png') ?>" alt=""/></a>
                </div>

            </div>
        </div>
        <!-- End Clients Carousel -->

    </div>
</div>
<!-- End content -->
