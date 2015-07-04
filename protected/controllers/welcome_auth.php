<?php
namespace Controller;

use Kecik\AuthController;

class Welcome extends AuthController {
    var $app;

    public function __construct(\Kecik\Kecik $app) {
        parent::__construct($app);

        $this->app = $app;
    }
}