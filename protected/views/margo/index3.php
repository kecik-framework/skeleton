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


<!-- Start Content -->
<div id="content">
    <div class="container">

        <!-- Start Services Icons -->
        <div class="row">

            <!-- Start Service Icon 1 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
                <div class="service-icon">
                    <i class="fa fa-magic icon-medium-effect icon-effect-2"></i>
                </div>
                <div class="service-content">
                    <h4>High Quality Theme</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Lorem ipsum dolor.</p>
                </div>
            </div>
            <!-- End Service Icon 1 -->

            <!-- Start Service Icon 2 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
                <div class="service-icon">
                    <i class="fa fa-eye icon-medium-effect icon-effect-2"></i>
                </div>
                <div class="service-content">
                    <h4>Retina Display Ready</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Lorem ipsum dolor.</p>
                </div>
            </div>
            <!-- End Service Icon 2 -->

            <!-- Start Service Icon 3 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
                <div class="service-icon">
                    <i class="fa fa-code icon-medium-effect icon-effect-2 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>Clean Modern Code</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Lorem ipsum dolor.</p>
                </div>
            </div>
            <!-- End Service Icon 3 -->

            <!-- Start Service Icon 4 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
                <div class="service-icon">
                    <i class="fa fa-bolt icon-medium-effect icon-effect-2 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>Fast & Light Theme</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Lorem ipsum dolor.</p>
                </div>
            </div>
            <!-- End Service Icon 4 -->

        </div>
        <!-- End Services Icons -->

        <!-- Divider -->
        <div class="hr1 margin-top"></div>


        <!-- Start Recent Projects Carousel -->
        <div class="recent-projects">
            <h4 class="title"><span>Recent Projects</span></h4>
            <div class="projects-carousel touch-carousel">

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485">
                                <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/1.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Website</span>
                                <span>Drawing</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/2.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Logo</span>
                                <span>Animation</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/3.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Drawing</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/4.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Website</span>
                                <span>Ilustration</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a class="lightbox" title="This is an image title" href="images/portfolio-big-02.jpg">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/5.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Logo</span>
                                <span>Drawing</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/6.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Animation</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a class="lightbox" title="This is an image title" href="images/portfolio-big-03.jpg">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/7.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Website</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/8.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Ilustration</span>
                                <span>Animation</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/9.png') ?>"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Ilustration</span>
                                <span>Animation</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/10.pn') ?>g"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Ilustration</span>
                                <span>Animation</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/11.pn') ?>g"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Ilustration</span>
                                <span>Animation</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <div class="portfolio-thumb">
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="<?php echo $assets->images('Portfolio-1/12.pn') ?>g"/>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Lorem Ipsum Dolor</h4>
                                <span>Ilustration</span>
                                <span>Animation</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Recent Projects Carousel -->

        <!-- Divider -->
        <div class="hr1 margin-60"></div>


        <div class="row">
            <div class="col-md-8">

                <!-- Start Recent Posts Carousel -->
                <div class="latest-posts">
                    <h4 class="classic-title"><span>Latest News</span></h4>
                    <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

                        <!-- Posts 1 -->
                        <div class="post-row item">
                            <div class="left-meta-post">
                                <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                            </div>
                            <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                            <div class="post-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                            </div>
                        </div>

                        <!-- Posts 2 -->
                        <div class="post-row item">
                            <div class="left-meta-post">
                                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                            </div>
                            <h3 class="post-title"><a href="#">Link Post</a></h3>
                            <div class="post-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                            </div>
                        </div>

                        <!-- Posts 3 -->
                        <div class="post-row item">
                            <div class="left-meta-post">
                                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                            </div>
                            <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                            <div class="post-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                            </div>
                        </div>

                        <!-- Posts 4 -->
                        <div class="post-row item">
                            <div class="left-meta-post">
                                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                            </div>
                            <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                            <div class="post-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                            </div>
                        </div>

                        <!-- Posts 5 -->
                        <div class="post-row item">
                            <div class="left-meta-post">
                                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                            </div>
                            <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                            <div class="post-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                            </div>
                        </div>

                        <!-- Posts 6 -->
                        <div class="post-row item">
                            <div class="left-meta-post">
                                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                            </div>
                            <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                            <div class="post-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Recent Posts Carousel -->

            </div>

            <div class="col-md-4">

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Testimonials</span></h4>

                <!-- Start Testimonials Carousel -->
                <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                    <!-- Testimonial 1 -->
                    <div class="classic-testimonials item">
                        <div class="testimonial-content">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="classic-testimonials item">
                        <div class="testimonial-content">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="classic-testimonials item">
                        <div class="testimonial-content">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                    </div>
                </div>
                <!-- End Testimonials Carousel -->

            </div>
        </div>

        <!-- Divider -->
        <div class="hr1 margin-60"></div>


        <!-- Start Call Action -->
        <div class="call-action call-action-boxed call-action-style1 clearfix">
            <!-- Call Action Button -->
            <div class="button-side" style="margin-top:4px;"><a href="#" class="btn-system btn-large">Purchase It
                    Now</a></div>
            <!-- Call Action Text -->
            <h2 class="primary"><strong>Margo</strong> is the best theme to create an <strong>awesome website!</strong>
            </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <!-- End Call Action -->

    </div>
</div>
<!-- End content -->
