<?php
$assets = $this->app->assets;
$url = $this->app->url;
?>
<!-- Start Page Banner -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Blog</h2>
                <p>Blog Page With Left Sidebar</p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->


<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row blog-page">


            <!--Sidebar-->
            <div class="col-md-3 sidebar left-sidebar">

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


            <!-- Start Blog Posts -->
            <div class="col-md-9 blog-box">

                <!-- Start Post -->
                <div class="blog-post image-post">
                    <!-- Post Thumb -->
                    <div class="post-head">
                        <a class="lightbox" title="This is an image title"
                           href="<?php echo $assets->images('blog-01.jpg') ?>">
                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                            <img alt="" src="<?php echo $assets->images('blog-01.jpg') ?>">
                        </a>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                        <h2><a href="#">Image Box With Nice Lightbox</a></h2>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- End Post -->

                <!-- Start Post -->
                <div class="blog-post video-post">
                    <!-- Post Video -->
                    <div class="post-head">
                        <iframe src="http://player.vimeo.com/video/63322694?title=0&amp;byline=0&amp;portrait=0"
                                width="800" height="450"></iframe>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-play"></i></div>
                        <h2><a href="#">Iframe Video Post</a></h2>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- End Post -->


                <!-- Start Post -->
                <div class="blog-post standard-post">
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-pencil"></i></div>
                        <h2><a href="#">Standard Post Without Image</a></h2>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- End Post -->

                <!-- Start Post -->
                <div class="blog-post standard-post">
                    <!-- Post Thumb -->
                    <div class="post-head">
                        <a href="#">
                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                            <img alt="" src="<?php echo $assets->images('blog-05.jpg') ?>">
                        </a>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                        <h2><a href="#">Standard Post With Image</a></h2>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- End Post -->

                <!-- Start Post -->
                <div class="blog-post link-post">
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-link"></i></div>
                        <h2><a href="#">Link Post</a></h2>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- End Post -->

                <!-- Start Post -->
                <div class="blog-post gallery-post">
                    <!-- Post Gallery -->
                    <div class="post-head">
                        <div class="post-slider touch-slider">
                            <div class="item">
                                <a class="lightbox" title="This is an image title"
                                   href="<?php echo $assets->images('blog-02.jpg') ?>" data-lightbox-gallery="gallery1">
                                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                    <img alt="" src="<?php echo $assets->images('blog-02.jpg') ?>">
                                </a>
                            </div>
                            <div class="item">
                                <a class="lightbox" title="This is an image title"
                                   href="<?php echo $assets->images('blog-03.jpg') ?>" data-lightbox-gallery="gallery1">
                                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                    <img alt="" src="<?php echo $assets->images('blog-03.jpg') ?>">
                                </a>
                            </div>
                            <div class="item">
                                <a class="lightbox" title="This is an image title"
                                   href="<?php echo $assets->images('blog-04.jpg') ?>" data-lightbox-gallery="gallery1">
                                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                    <img alt="" src="<?php echo $assets->images('blog-04.jpg') ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class=" fa fa-picture-o"></i></div>
                        <h2><a href="#">Gallery Post With Nice Lightbox.</a></h2>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- End Post -->

                <!-- Start Post -->
                <div class="blog-post quote-post">
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="fa fa-quote-left"></i></div>
                        <div class="qoute-box">
                            <a href="#">
                                <h2>Throughout life people will make you mad, disrespect you and treat you bad. Let God
                                    deal with the things they do, cause hate in your heart will consume you too.</h2>
                                <div class="qoute-author">John Kennedy</div>
                            </a>
                        </div>
                        <ul class="post-meta">
                            <li>By <a href="#">iThemesLab</a></li>
                            <li>December 30, 2013</li>
                            <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                            <li><a href="#">4 Comments</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Post -->

                <!-- Start Pagination -->
                <div id="pagination">
                    <span class="all-pages">Page 1 of 3</span>
                    <span class="current page-num">1</span>
                    <a class="page-num" href="#">2</a>
                    <a class="page-num" href="#">3</a>
                    <a class="next-page" href="#">Next</a>
                </div>
                <!-- End Pagination -->

            </div>
            <!-- End Blog Posts -->


        </div>
    </div>
</div>
<!-- End Content -->
		