<?php
namespace Controllers;

use Kecik\Controller;

class SBAdmin extends Controller
{
	public function __construct($app) 
	{
		parent::__construct();

		$this->config->set('path.assets', 'assets/sb-admin');
		//** CSS
		$this->assets->css->add('bootstrap.min');
		$this->assets->css->add('metisMenu.min');
		$this->assets->css->add('timeline');
		$this->assets->css->add('sb-admin-2');
		$this->assets->css->add('morris');
		$this->assets->css->add('font-awesome.min');
		//-- END CSS

		//** JS
		$this->assets->js->add('jquery');
		$this->assets->js->add('bootstrap.min');
		$this->assets->js->add('metisMenu.min');
		$this->assets->js->add('sb-admin-2');
		//-- END JS
	}

	public function index() 
	{
		$this->config->set('title', 'Home');

		$this->assets->js->add('raphael-min');
		$this->assets->js->add('morris.min');
		$this->assets->js->add('morris-data');

		return $this->view('sbadmin/index');
	}
	
	public function flot() 
	{
		$this->config->set('title', 'Flot');

		$this->assets->js->add('excanvas.min');
		$this->assets->js->add('jquery.flot');
		$this->assets->js->add('jquery.flot.pie');
		$this->assets->js->add('jquery.flot.resize');
		$this->assets->js->add('jquery.flot.time');
		$this->assets->js->add('jquery.flot.tooltip.min');
		$this->assets->js->add('flot-data');

		return $this->view('sbadmin/flot');
	}

	public function morris() 
	{
		$this->config->set('title', 'Moris');

		$this->assets->js->add('raphael-min');
		$this->assets->js->add('morris.min');
		$this->assets->js->add('morris-data');

		return $this->view('sbadmin/morris');
	}

	public function tables() 
	{
		$this->config->set('title', 'Table');

		$this->assets->css->add('dataTables.bootstrap');
		$this->assets->css->add('dataTables.responsive');

		$this->assets->js->add('jquery.dataTables.min');
		$this->assets->js->add('dataTables.bootstrap.min');

		return $this->view('sbadmin/tables');
	}

	public function forms() 
	{
		$this->config->set('title', 'Forms');

		return $this->view('sbadmin/forms');
	}

	public function panelsWells() 
	{
		$this->config->set('title', 'Panels Wells');

		return $this->view('sbadmin/panels-wells');
	}

	public function buttons() 
	{
		$this->config->set('title', 'Buttons');

		return $this->view('sbadmin/buttons');
	}

	public function notifications() 
	{
		$this->config->set('title', 'Notifications');

		return $this->view('sbadmin/notifications');
	}

	public function typography() 
	{
		$this->config->set('title', 'Typography');

		return $this->view('sbadmin/typography');
	}

	public function icons() 
	{
		$this->config->set('title', 'Icons');

		return $this->view('sbadmin/icons');
	}

	public function grid() 
	{
		$this->config->set('title', 'Grid');

		return $this->view('sbadmin/grid');
	}

	public function blank() 
	{
		$this->config->set('title', 'Blank');

		return $this->view('sbadmin/blank');
	}
}