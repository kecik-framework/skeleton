<?php
namespace Controller;

use Kecik\Controller;

class Sbadmin extends Controller {
	var $app;

	public function __construct($app) {
		parent::__construct($app);

		$app->config->set('path.assets', 'assets/sb-admin');
		//** CSS
		$app->assets->css->add('bootstrap.min');
		$app->assets->css->add('metisMenu.min');
		$app->assets->css->add('timeline');
		$app->assets->css->add('sb-admin-2');
		$app->assets->css->add('morris');
		$app->assets->css->add('font-awesome.min');
		//-- END CSS

		//** JS
		$app->assets->js->add('jquery');
		$app->assets->js->add('bootstrap.min');
		$app->assets->js->add('metisMenu.min');
		$app->assets->js->add('sb-admin-2');
		
		$this->app = $app;
	}

	public function index() {
		$this->app->assets->js->add('raphael-min');
		$this->app->assets->js->add('morris.min');
		$this->app->assets->js->add('morris-data');

		return $this->view('sbadmin/index');
	}
	
	public function flot() {
		$this->app->assets->js->add('excanvas.min');
		$this->app->assets->js->add('jquery.flot');
		$this->app->assets->js->add('jquery.flot.pie');
		$this->app->assets->js->add('jquery.flot.resize');
		$this->app->assets->js->add('jquery.flot.time');
		$this->app->assets->js->add('jquery.flot.tooltip.min');
		$this->app->assets->js->add('flot-data');

		return $this->view('sbadmin/flot');
	}

	public function morris() {
		$this->app->assets->js->add('raphael-min');
		$this->app->assets->js->add('morris.min');
		$this->app->assets->js->add('morris-data');

		return $this->view('sbadmin/morris');
	}

	public function tables() {
		$this->app->assets->css->add('dataTables.bootstrap');
		$this->app->assets->css->add('dataTables.responsive');

		$this->app->assets->js->add('jquery.dataTables.min');
		$this->app->assets->js->add('dataTables.bootstrap.min');

		return $this->view('sbadmin/tables');
	}

	public function forms() {
		return $this->view('sbadmin/forms');
	}

	public function panels_wells() {
		return $this->view('sbadmin/panels-wells');
	}

	public function buttons() {
		return $this->view('sbadmin/buttons');
	}

	public function notifications() {
		return $this->view('sbadmin/notifications');
	}

	public function typography() {
		return $this->view('sbadmin/typography');
	}

	public function icons() {
		return $this->view('sbadmin/icons');
	}

	public function grid() {
		return $this->view('sbadmin/grid');
	}

	public function blank() {
		return $this->view('sbadmin/blank');
	}
}