<?php
namespace Controller;

use Kecik\Controller;

class Adminlte extends Controller {
	var $app;

	public function __construct($app) {
		parent::__construct();

		$app->config->set('path.assets', 'assets/adminlte');
		//** CSS
		$app->assets->css->delete('bootstrap-theme.min');
		$app->assets->css->delete('starter-template');
		$app->assets->css->add('bootstrap.min');
		$app->assets->css->add('font-awesome.min');
		$app->assets->css->add('ionicons.min');

		$app->assets->css->add('AdminLTE.min');
		$app->assets->css->add('skins/_all-skins.min');
		//-- END CSS

		//** JS
		$app->assets->js->add('jQuery-2.1.3.min');
		$app->assets->js->add('bootstrap.min');
		$app->assets->js->add('jquery-ui.min');
		$app->assets->js->add('jquery.slimscroll.min');
		$app->assets->js->add('fastclick.min');

		$app->assets->js->add('app.min');
		$app->assets->js->add('demo');
		//-- END JS

		$this->app = $app;
	}

	public function index() {
		$this->config->set('title', 'Home');

		$this->app->assets->css->add('iCheck/all');
		//$this->app->assets->css->add('blue');
		$this->app->assets->css->add('morris');
		$this->app->assets->css->add('jquery-jvectormap-1.2.2');
		$this->app->assets->css->add('datepicker3');
		$this->app->assets->css->add('daterangepicker-bs3');
		$this->app->assets->css->add('bootstrap3-wysihtml5.min');

		$this->app->assets->js->add('jquery-jvectormap-1.2.2.min');
		$this->app->assets->js->add('jquery-jvectormap-world-mill-en');

		$this->app->assets->js->add('daterangepicker');
		$this->app->assets->js->add('bootstrap-datepicker');
		$this->app->assets->js->add('bootstrap3-wysihtml5.all.min');
		$this->app->assets->js->add('iCheck/icheck.min');
		$this->app->assets->js->add('Chart.min');
		$this->app->assets->js->add('pages/dashboard');
		$this->app->assets->js->add('raphael');
		$this->app->assets->js->add('morris.min');
		$this->app->assets->js->add('jquery.knob');
		$this->app->assets->js->add('jquery.sparkline.min');

		return $this->view('adminlte/index');
	}
	
	public function index2() {
		$this->config->set('title', 'Home 2');

		$this->app->assets->css->add('iCheck/all');
		//$this->app->assets->css->add('blue');
		$this->app->assets->css->add('morris');
		$this->app->assets->css->add('jquery-jvectormap-1.2.2');
		$this->app->assets->css->add('datepicker3');
		$this->app->assets->css->add('daterangepicker-bs3');
		$this->app->assets->css->add('bootstrap3-wysihtml5.min');

		$this->app->assets->js->add('jquery-jvectormap-1.2.2.min');
		$this->app->assets->js->add('jquery-jvectormap-world-mill-en');

		$this->app->assets->js->add('daterangepicker');
		$this->app->assets->js->add('bootstrap-datepicker');
		$this->app->assets->js->add('bootstrap3-wysihtml5.all.min');
		$this->app->assets->js->add('iCheck/icheck.min');
		$this->app->assets->js->add('Chart.min');
		$this->app->assets->js->add('jquery.sparkline.min');
		$this->app->assets->js->add('pages/dashboard2');

		return $this->view('adminlte/index2');
	}

	public function widgets() {
		$this->config->set('title', 'Widgets');

		return $this->view('adminlte/widgets');
	}

	public function morris() {
		$this->config->set('title', 'Morris');

		$this->app->assets->js->add('raphael');
		$this->app->assets->js->add('morris.min');

		return $this->view('adminlte/morris');
	}

	public function flot() {
		$this->config->set('title', 'Flot');

		$this->app->assets->js->add('flot/jquery.flot.min');
		$this->app->assets->js->add('flot/jquery.flot.resize.min');
		$this->app->assets->js->add('flot/jquery.flot.pie.min');
		$this->app->assets->js->add('flot/jquery.flot.categories.min');

		return $this->view('adminlte/flot');
	}

	public function charts_inline() {
		$this->config->set('title', 'Charts Inline');

		$this->app->assets->js->add('jquery.knob');
		$this->app->assets->js->add('jquery.sparkline.min');

		return $this->view('adminlte/charts-inline');
	}

	public function ui_general() {
		$this->config->set('title', 'UI General');

		return $this->view('adminlte/ui-general');
	}

	public function ui_icons() {
		$this->config->set('title', 'UI Icons');

		return $this->view('adminlte/ui-icons');
	}

	public function ui_buttons() {
		$this->config->set('title', 'UI Buttons');

		return $this->view('adminlte/ui-buttons');
	}

	public function ui_sliders() {
		$this->config->set('title', 'UI Sliders');

		$this->app->assets->css->add('ion.rangeSlider', ['type'=>'text/css']);
		$this->app->assets->css->add('ion.rangeSlider.skinNice', ['type'=>'text/css']);
		$this->app->assets->css->add('slider', ['type'=>'text/css']);

		$this->app->assets->js->delete('jquery.slimscroll.min');
		$this->app->assets->js->delete('jquery-ui.min');
		$this->app->assets->js->add('app.min');
		$this->app->assets->js->add('demo');
		$this->app->assets->js->add('ion.rangeSlider.min');
		$this->app->assets->js->add('bootstrap-slider');

		return $this->view('adminlte/ui-sliders');
	}

	public function ui_timeline() {
		$this->config->set('title', 'UI Timeline');

		return $this->view('adminlte/ui-timeline');
	}

	public function ui_modals() {
		$this->config->set('title', 'UI Modals');

		return $this->view('adminlte/ui-modals');
	}

	public function forms_general() {
		$this->config->set('title', 'Form General');

		return $this->view('adminlte/forms-general');
	}

	public function forms_advanced() {
		$this->config->set('title', 'Forms Advanced');

		$this->app->assets->css->add('iCheck/all');
		$this->app->assets->css->add('datepicker3');
		$this->app->assets->css->add('daterangepicker-bs3');
		$this->app->assets->css->add('bootstrap-colorpicker.min');
		$this->app->assets->css->add('bootstrap-timepicker.min');
		
		$this->app->assets->js->add('iCheck/icheck.min');
		$this->app->assets->js->add('jquery.inputmask');
		$this->app->assets->js->add('jquery.inputmask.date.extensions');
		$this->app->assets->js->add('jquery.inputmask.extensions');
		$this->app->assets->js->add('bootstrap-datepicker');
		$this->app->assets->js->add('daterangepicker');
		$this->app->assets->js->add('bootstrap-colorpicker.min');
		$this->app->assets->js->add('bootstrap-timepicker.min');

		return $this->view('adminlte/forms-advanced');
	}

	public function forms_editors() {
		$this->config->set('title', 'Forms Editors');

		$this->app->assets->css->add('bootstrap3-wysihtml5.min');

		$this->app->assets->js->add('ckeditor/ckeditor');
		$this->app->assets->js->add('bootstrap3-wysihtml5.all.min');

		return $this->view('adminlte/forms-editors');
	}

	public function tables_simple() {
		$this->config->set('title', 'Tables Simple');

		return $this->view('adminlte/tables-simple');
	}

	public function tables_data() {
		$this->config->set('title', 'Tables Data');

		$this->app->assets->css->add('dataTables.bootstrap');

		$this->app->assets->js->add('jquery.dataTables');
		$this->app->assets->js->add('dataTables.bootstrap');

		return $this->view('adminlte/tables-data');
	}

	public function calendar() {
		$this->config->set('title', 'Calendar');

		$this->app->assets->css->add('fullcalendar.min');
		$this->app->assets->css->add('fullcalendar.print', ['media'=>'print']);

		$this->app->assets->js->add('moment.min');
		$this->app->assets->js->add('fullcalendar.min');

		return $this->view('adminlte/calendar');
	}

	public function mailbox() {
		$this->config->set('title', 'Mailbox');

		$this->app->assets->css->add('fullcalendar.min');
		$this->app->assets->css->add('fullcalendar.print', ['media'=>'print']);

		$this->app->assets->js->add('moment.min');
		$this->app->assets->js->add('fullcalendar.min');
		$this->app->assets->css->add('iCheck/all');
		$this->app->assets->js->add('iCheck/icheck.min');

		return $this->view('adminlte/mailbox');
	}

	public function mailbox_compose() {
		$this->config->set('title', 'Mailbox compose');

		$this->app->assets->css->add('iCheck/all');
		$this->app->assets->css->add('bootstrap3-wysihtml5.min');

		$this->app->assets->js->add('iCheck/icheck.min');
		$this->app->assets->js->add('bootstrap3-wysihtml5.all.min');

		return $this->view('adminlte/mailbox-compose');
	}

	public function mailbox_read_mail() {
		$this->config->set('title', 'Mailbox Read Mail');

		return $this->view('adminlte/mailbox-read-mail');
	}

	public function example_invoices() {
		$this->config->set('title', 'Example Invoices');

		return $this->view('adminlte/example-invoices');
	}

	public function error404() {
		$this->config->set('title', '404');

		return $this->view('adminlte/404');
	}

	public function error500() {
		$this->config->set('title', '500');

		return $this->view('adminlte/500');
	}

	public function blank() {
		$this->config->set('title', 'Blank');
		
		return $this->view('adminlte/blank');
	}
}