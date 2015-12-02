<?php
namespace Controller;

use Kecik\Controller;

class Sbadmin extends Controller {
	var $app;

	public function __construct($app) {
		parent::__construct();

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
		$this->config->set('title', 'Home');

		$this->app->assets->js->add('raphael-min');
		$this->app->assets->js->add('morris.min');
		$this->app->assets->js->add('morris-data');

		return $this->view('sbadmin/index');
	}
	
	public function flot() {
		$this->config->set('title', 'Flot');

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
		$this->config->set('title', 'Moris');

		$this->app->assets->js->add('raphael-min');
		$this->app->assets->js->add('morris.min');
		$this->app->assets->js->add('morris-data');

		return $this->view('sbadmin/morris');
	}

	public function tables() {
		$this->config->set('title', 'Table');

		$this->app->assets->css->add('dataTables.bootstrap');
		$this->app->assets->css->add('dataTables.responsive');

		$this->app->assets->js->add('jquery.dataTables.min');
		$this->app->assets->js->add('dataTables.bootstrap.min');

		return $this->view('sbadmin/tables');
	}

	public function forms() {
		$this->config->set('title', 'Forms');

		return $this->view('sbadmin/forms');
	}

	public function panels_wells() {
		$this->config->set('title', 'Panels Wells');

		return $this->view('sbadmin/panels-wells');
	}

	public function buttons() {
		$this->config->set('title', 'Buttons');

		return $this->view('sbadmin/buttons');
	}

	public function notifications() {
		$this->config->set('title', 'Notifications');

		return $this->view('sbadmin/notifications');
	}

	public function typography() {
		$this->config->set('title', 'Typography');

		return $this->view('sbadmin/typography');
	}

	public function icons() {
		$this->config->set('title', 'Icons');

		return $this->view('sbadmin/icons');
	}

	public function grid() {
		$this->config->set('title', 'Grid');

		return $this->view('sbadmin/grid');
	}

	public function blank() {
		$this->config->set('title', 'Blank');

		return $this->view('sbadmin/blank');
	}
}