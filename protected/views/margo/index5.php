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
                    <i class="fa fa-heart icon-large"></i>
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
                    <i class="fa fa-magic icon-large"></i>
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
                    <i class="fa fa-pencil icon-large"></i>
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
                    <i class="fa fa-rocket icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Fast & Light Theme</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Lorem ipsum dolor.</p>
                </div>
            </div>
            <!-- End Service Icon 3 -->

        </div>
        <!-- End Services Icons -->

        <!-- Divider -->
        <div class="hr5" style="margin-top:25px; margin-bottom:45px;"></div>

        <div class="row">

            <!-- Start Big Heading -->
            <div class="big-title text-center">
                <h1>The Most <span class="accent-color">Flexible</span> & <span class="accent-color">Easy</span> To Use
                    Theme.</h1>
                <p class="title-desc">Lorem Ipsum is simply dummy text of the typesetting industry.</p>
            </div>
            <!-- End Big Heading -->

            <!-- Divider -->
            <div class="hr1" style="margin-top:20px; margin-bottom:20px;"></div>

            <!-- Start Service Icon 1 -->
            <div class="col-md-4 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-magic icon-mini-effect icon-effect-3 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>High Quality Theme</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 1 -->

            <!-- Start Service Icon 1 -->
            <div class="col-md-4 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-magic icon-mini-effect icon-effect-3 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>High Quality Theme</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 1 -->

            <!-- Start Service Icon 1 -->
            <div class="col-md-4 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-magic icon-mini-effect icon-effect-3 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>High Quality Theme</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 1 -->

            <!-- Start Service Icon 2 -->
            <div class="col-md-4 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-rocket icon-mini-effect icon-effect-6 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>Fast & Light Theme</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 2 -->

            <!-- Start Service Icon 3 -->
            <div class="col-md-4 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-eye icon-mini-effect icon-effect-5 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>Retina Display Ready</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 3 -->

            <!-- Start Service Icon 4 -->
            <div class="col-md-4 service-box service-icon-left">
                <div class="service-icon">
                    <i class="fa fa-pencil icon-mini-effect icon-effect-4 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>Clean Modern Code</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                </div>
            </div>
            <!-- End Service Icon 4 -->

        </div>

        <!-- Divider -->
        <div class="hr5" style="margin-top:50px; margin-bottom:55px;"></div>

        <div class="row">

            <div class="col-md-3">
                <!-- Start Big Heading -->
                <div class="big-title">
                    <h1>Our <span class="accent-color">Team</span></h1>
                    <p class="title-desc">We Make Your Smile</p>
                </div>
                <!-- End Big Heading -->

                <!-- Some Text -->
                <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt.</p>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:10px;"></div>

                <!-- Some Text -->
                <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt enim labore et
                    dolore magna aliqua. Ut enim nisi minim veniam, quis nostrud exercitation do ullamco laboris nisi ut
                    aliquip ex commodo.</p>
            </div>

            <!-- Start Memebr 1 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-member">
                    <!-- Memebr Photo, Name & Position -->
                    <div class="member-photo">
                        <img alt="" src="<?php echo $assets->images('team/face_1.png') ?>"/>
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
                        <img alt="" src="<?php echo $assets->images('team/face_2.png') ?>"/>
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
                        <img alt="" src="<?php echo $assets->images('team/face_3.png') ?>"/>
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
        <div class="hr5" style="margin-top:55px; margin-bottom:55px;"></div>

        <div class="row">


            <div class="col-md-3">
                <!-- Start Big Heading -->
                <div class="big-title">
                    <h1>Our <span class="accent-color">Clients</span></h1>
                    <p class="title-desc">Partners We Work With</p>
                </div>
                <!-- End Big Heading -->
            </div>

            <div class="col-md-9">
                <!--Start Clients Carousel-->
                <div class="our-clients">
                    <div class="clients-carousel custom-carousel touch-carousel navigation-2" data-appeared-items="4"
                         data-navigation="true">

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
                <!--End Clients Carousel-->
            </div>


        </div>

    </div>
</div>
<!-- End Content -->
