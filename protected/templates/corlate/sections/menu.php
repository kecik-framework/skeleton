        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php $url->to('') ?>"><img src="<?php echo $assets->images('logo.png') ?>" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?php echo ($this->route->is() == '/')? 'class="active"':'' ?>><a href="<?php $url->to('') ?>">Home</a></li>
                        <li <?php echo ($this->route->is() == 'about')? 'class="active"':'' ?>><a href="<?php $url->to('about'); ?>">About Us</a></li>
                        <li <?php echo ($this->route->is() == 'services')? 'class="active"':'' ?>><a href="<?php $url->to('services') ?>">Services</a></li>
                        <li <?php echo ($this->route->is() == 'portfolio')? 'class="active"':'' ?>><a href="<?php $url->to('portfolio') ?>">Portfolio</a></li>
                        <li class="dropdown <?php echo (in_array($this->route->is(), ['blog-item', 'pricing', '404', 'shortcodes']) )? 'active':'' ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?php echo ($this->route->is() == 'blog-item')? 'class="active"':'' ?>><a href="<?php $url->to('blog-item') ?>">Blog Single</a></li>
                                <li <?php echo ($this->route->is() == 'pricing')? 'class="active"':'' ?>><a href="<?php $url->to('pricing') ?>">Pricing</a></li>
                                <li <?php echo ($this->route->is() == '404')? 'class="active"':'' ?>><a href="<?php $url->to('404') ?>">404</a></li>
                                <li <?php echo ($this->route->is() == 'shortcodes')? 'class="active"':'' ?>><a href="<?php $url->to('shortcodes') ?>">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li <?php echo ($this->route->is() == 'blog')? 'class="active"':'' ?>><a href="<?php $url->to('blog') ?>">Blog</a></li> 
                        <li <?php echo ($this->route->is() == 'contact')? 'class="active"':'' ?>><a href="<?php $url->to('contact') ?>">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->