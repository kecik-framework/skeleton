<?php
$assets = $this->app->assets;
$url = $this->app->url;
?>
<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="page-content">


            <div class="error-page">
                <h1>404</h1>
                <h3>File not Found</h3>
                <p>We're sorry, but the page you were looking for doesn't exist.</p>
                <div class="text-center"><a href="<?php $url->to(''); ?>" class="btn-system btn-small">Back To Home</a>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- End Content -->