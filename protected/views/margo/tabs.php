<?php
$assets = $this->app->assets;
$url = $this->app->url;
?>
<!-- Start Page Banner -->
<div class="page-banner no-subtitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Tabs</h2>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li>Tabs</li>
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

                <div class="tabs-section">

                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-desktop"></i>Tab Title
                                1</a></li>
                        <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-leaf"></i>Tab Title 2</a></li>
                        <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-rocket"></i>Tab Title 3</a></li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!-- Tab Content 1 -->
                        <div class="tab-pane fade in active" id="tab-1">
                            <p><strong class="accent-color">Sed ut perspiciatis</strong> unde omnis iste natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explica. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                dolores eos qui ratione voluptatem sequi nesciunt. But I must explain to you how all
                                this mistaken idea of denouncing pleasure and praising pain was born and I will give you
                                a complete account of the system.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="icons-list">
                                        <li><i class="fa fa-check-circle"></i> Duis aute irure dolor in reprehenderit
                                            voluptate.
                                        </li>
                                        <li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text of
                                            printing.
                                        </li>
                                        <li><i class="fa fa-check-circle"></i> Excepteur sint occaecat cupidatat
                                            proident.
                                        </li>
                                        <li><i class="fa fa-check-circle"></i> Sed ut perspiciatis unde omnis iste
                                            natus.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="icons-list">
                                        <li><i class="fa fa-check-circle"></i> Duis aute irure dolor in reprehenderit
                                            voluptate.
                                        </li>
                                        <li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text of
                                            printing.
                                        </li>
                                        <li><i class="fa fa-check-circle"></i> Excepteur sint occaecat cupidatat
                                            proident.
                                        </li>
                                        <li><i class="fa fa-check-circle"></i> Sed ut perspiciatis unde omnis iste
                                            natus.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content 2 -->
                        <div class="tab-pane fade" id="tab-2">
                            <p><img class="img-thumbnail image-text" style="float:left; width:180px;" alt=""
                                    src="<?php echo $assets->images('bussniss-pic.jpg') ?>"/></p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explica. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. But I must explain to you how all this mistaken idea of
                                denouncing pleasure and praising pain was born and I will give you a complete account of
                                the system, and expound the actual teachings of the great explorer of the truth, the
                                master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
                                because it is pleasure, but because those who do not know how to pursue pleasure
                                rational encounter consequences that are extremely painful.</p>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system, and expound the
                                actual teachings of the great explorer of the truth, the master-builder of human
                                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                but because those who do not know how to pursue pleasure rational encounter consequences
                                that are extremely painful.</p>
                        </div>
                        <!-- Tab Content 3 -->
                        <div class="tab-pane fade" id="tab-3">
                            <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system, and expound the
                                actual teachings of the great explorer of the truth, the master-builder of human
                                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                but because those who do not know how to pursue pleasure rational encounter consequences
                                that are extremely painful. Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur
                                in which toil and pain can procure.</p>
                        </div>
                    </div>
                    <!-- End Tab Panels -->

                </div>

                <!-- Divider -->
                <div class="hr5" style="margin-top:45px;margin-bottom:45px;"></div>

                <div class="tabs-section">

                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-4" data-toggle="tab">Tab Title Without Icon 1</a></li>
                        <li><a href="#tab-5" data-toggle="tab">Tab Title 2</a></li>
                        <li><a href="#tab-6" data-toggle="tab">Tab Title 3</a></li>
                    </ul>

                    <!-- Tab Panels -->
                    <div class="tab-content">
                        <!-- Tab Content 1 -->
                        <div class="tab-pane fade in active" id="tab-4">
                            <p><strong class="accent-color">Sed ut perspiciatis</strong> unde omnis iste natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explica. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</p>
                        </div>
                        <!-- Tab Content 2 -->
                        <div class="tab-pane fade" id="tab-5">
                            <p><img class="img-thumbnail image-text" style="float:left; width:180px;" alt=""
                                    src="<?php echo $assets->images('bussniss-pic.jpg') ?>"/></p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explica. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. But I must explain to you how all this mistaken idea of
                                denouncing pleasure and praising pain was born and I will give you a complete account of
                                the system, and expound the actual teachings of the great explorer of the truth, the
                                master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
                                because it is pleasure, but because those who do not know how to pursue pleasure
                                rational encounter consequences that are extremely painful.</p>
                        </div>
                        <!-- Tab Content 3 -->
                        <div class="tab-pane fade" id="tab-6">
                            <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <!-- End Tab Panels -->

                </div>

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
		