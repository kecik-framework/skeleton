<?php
namespace Controller;

use Kecik\Controller;

class Welcome extends Controller {
	var $app;

	public function __construct(\Kecik\Kecik $app) {
		parent::__construct();

		$this->app = $app;
	}

	public function index() {
		return $this->view('index');
	}
}
