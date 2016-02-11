<?php
$assets = $this->app->assets;
$url = $this->app->url;
?>
<!-- Start Page Banner -->
<div class="page-banner no-subtitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Testimonials</h2>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li>Testimonials</li>
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

                <!-- Single Testimonial -->
                <div class="classic-testimonials">
                    <div class="testimonial-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia.</p>
                    </div>
                    <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                </div>
                <!-- End Testimonial -->

                <!-- Divider -->
                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Single Testimonial -->
                        <div class="classic-testimonials">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                        </div>
                        <!-- End Single Testimonial -->
                    </div>
                    <div class="col-md-6">
                        <!-- Single Testimonial -->
                        <div class="classic-testimonials">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                        </div>
                        <!-- End Single Testimonial -->
                    </div>
                </div>

                <!-- Divider -->
                <div class="hr5" style="margin-top:40px;margin-bottom:40px;"></div>

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Testimonials Slider</span></h4>

                <!-- Start Testimonials Carousel -->
                <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                    <!-- Testimonial 1 -->
                    <div class="classic-testimonials item">
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                        </div>
                        <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="classic-testimonials item">
                        <div class="testimonial-content">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="classic-testimonials item">
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                        </div>
                        <div class="testimonial-author"><span>John Doe</span> - Customer</div>
                    </div>
                </div>
                <!-- End Testimonials Carousel -->

            </div>
            <!-- End Page Content -->


            <!--Sidebar-->
            <div class="col-md-3 sidebar right-sidebar">

                <!-- Search Widget -->
                <div class="widget widget-search">
                    <form action="#">
                        <input type="search" placeholder="Enter Keywords..."/>
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
                                <a href="#"><img src="<?php echo $assets->images('blog-mini-01.jpg') ?>" alt=""/></a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                                <span>Jul 29 2013</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="<?php echo $assets->images('blog-mini-02.jpg') ?>" alt=""/></a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                                <span>Jul 29 2013</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="<?php echo $assets->images('blog-mini-03.jpg') ?>" alt=""/></a>
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
                        <iframe src="http://player.vimeo.com/video/63322694?byline=0&amp;portrait=0&amp;badge=0"
                                width="800" height="450"></iframe>
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