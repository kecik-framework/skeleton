<?php
namespace Controllers;

use Kecik\Controller;

class AdminLTE extends Controller 
{
	public function __construct() 
	{
		parent::__construct();

		$this->config->set('path.assets', 'assets/adminlte');
		//** CSS
		$this->assets->css->delete('bootstrap-theme.min');
		$this->assets->css->delete('starter-template');
		$this->assets->css->add('bootstrap.min');
		$this->assets->css->add('font-awesome.min');
		$this->assets->css->add('ionicons.min');

		$this->assets->css->add('AdminLTE.min');
		$this->assets->css->add('skins/_all-skins.min');
		//-- END CSS

		//** JS
		$this->assets->js->add('jQuery-2.1.3.min');
		$this->assets->js->add('bootstrap.min');
		$this->assets->js->add('jquery-ui.min');
		$this->assets->js->add('jquery.slimscroll.min');
		$this->assets->js->add('fastclick.min');

		$this->assets->js->add('app.min');
		$this->assets->js->add('demo');
		//-- END JS
	}

	public function index() 
	{
		$this->config->set('title', 'Home');

		$this->assets->css->add('iCheck/all');
		//$this->assets->css->add('blue');
		$this->assets->css->add('morris');
		$this->assets->css->add('jquery-jvectormap-1.2.2');
		$this->assets->css->add('datepicker3');
		$this->assets->css->add('daterangepicker-bs3');
		$this->assets->css->add('bootstrap3-wysihtml5.min');

		$this->assets->js->add('jquery-jvectormap-1.2.2.min');
		$this->assets->js->add('jquery-jvectormap-world-mill-en');

		$this->assets->js->add('daterangepicker');
		$this->assets->js->add('bootstrap-datepicker');
		$this->assets->js->add('bootstrap3-wysihtml5.all.min');
		$this->assets->js->add('iCheck/icheck.min');
		$this->assets->js->add('Chart.min');
		$this->assets->js->add('pages/dashboard');
		$this->assets->js->add('raphael');
		$this->assets->js->add('morris.min');
		$this->assets->js->add('jquery.knob');
		$this->assets->js->add('jquery.sparkline.min');

		return $this->view('adminlte/index');
	}
	
	public function index2() 
	{
		$this->config->set('title', 'Home 2');

		$this->assets->css->add('iCheck/all');
		//$this->assets->css->add('blue');
		$this->assets->css->add('morris');
		$this->assets->css->add('jquery-jvectormap-1.2.2');
		$this->assets->css->add('datepicker3');
		$this->assets->css->add('daterangepicker-bs3');
		$this->assets->css->add('bootstrap3-wysihtml5.min');

		$this->assets->js->add('jquery-jvectormap-1.2.2.min');
		$this->assets->js->add('jquery-jvectormap-world-mill-en');

		$this->assets->js->add('daterangepicker');
		$this->assets->js->add('bootstrap-datepicker');
		$this->assets->js->add('bootstrap3-wysihtml5.all.min');
		$this->assets->js->add('iCheck/icheck.min');
		$this->assets->js->add('Chart.min');
		$this->assets->js->add('jquery.sparkline.min');
		$this->assets->js->add('pages/dashboard2');

		return $this->view('adminlte/index2');
	}

	public function widgets() 
	{
		$this->config->set('title', 'Widgets');

		return $this->view('adminlte/widgets');
	}

	public function morris() 
	{
		$this->config->set('title', 'Morris');

		$this->assets->js->add('raphael');
		$this->assets->js->add('morris.min');

		return $this->view('adminlte/morris');
	}

	public function flot() 
	{
		$this->config->set('title', 'Flot');

		$this->assets->js->add('flot/jquery.flot.min');
		$this->assets->js->add('flot/jquery.flot.resize.min');
		$this->assets->js->add('flot/jquery.flot.pie.min');
		$this->assets->js->add('flot/jquery.flot.categories.min');

		return $this->view('adminlte/flot');
	}

	public function chartsInline() 
	{
		$this->config->set('title', 'Charts Inline');

		$this->assets->js->add('jquery.knob');
		$this->assets->js->add('jquery.sparkline.min');

		return $this->view('adminlte/charts-inline');
	}

	public function uiGeneral() 
	{
		$this->config->set('title', 'UI General');

		return $this->view('adminlte/ui-general');
	}

	public function uiIcons() 
	{
		$this->config->set('title', 'UI Icons');

		return $this->view('adminlte/ui-icons');
	}

	public function uiButtons() 
	{
		$this->config->set('title', 'UI Buttons');

		return $this->view('adminlte/ui-buttons');
	}

	public function uiSliders() 
	{
		$this->config->set('title', 'UI Sliders');

		$this->assets->css->add('ion.rangeSlider', ['type'=>'text/css']);
		$this->assets->css->add('ion.rangeSlider.skinNice', ['type'=>'text/css']);
		$this->assets->css->add('slider', ['type'=>'text/css']);

		$this->assets->js->delete('jquery.slimscroll.min');
		$this->assets->js->delete('jquery-ui.min');
		$this->assets->js->add('app.min');
		$this->assets->js->add('demo');
		$this->assets->js->add('ion.rangeSlider.min');
		$this->assets->js->add('bootstrap-slider');

		return $this->view('adminlte/ui-sliders');
	}

	public function uiTimeline() 
	{
		$this->config->set('title', 'UI Timeline');

		return $this->view('adminlte/ui-timeline');
	}

	public function uiModals() 
	{
		$this->config->set('title', 'UI Modals');

		return $this->view('adminlte/ui-modals');
	}

	public function formsGeneral() 
	{
		$this->config->set('title', 'Form General');

		return $this->view('adminlte/forms-general');
	}

	public function formsAdvanced() 
	{
		$this->config->set('title', 'Forms Advanced');

		$this->assets->css->add('iCheck/all');
		$this->assets->css->add('datepicker3');
		$this->assets->css->add('daterangepicker-bs3');
		$this->assets->css->add('bootstrap-colorpicker.min');
		$this->assets->css->add('bootstrap-timepicker.min');
		
		$this->assets->js->add('iCheck/icheck.min');
		$this->assets->js->add('jquery.inputmask');
		$this->assets->js->add('jquery.inputmask.date.extensions');
		$this->assets->js->add('jquery.inputmask.extensions');
		$this->assets->js->add('bootstrap-datepicker');
		$this->assets->js->add('daterangepicker');
		$this->assets->js->add('bootstrap-colorpicker.min');
		$this->assets->js->add('bootstrap-timepicker.min');

		return $this->view('adminlte/forms-advanced');
	}

	public function formsEditors() 
	{
		$this->config->set('title', 'Forms Editors');

		$this->assets->css->add('bootstrap3-wysihtml5.min');

		$this->assets->js->add('ckeditor/ckeditor');
		$this->assets->js->add('bootstrap3-wysihtml5.all.min');

		return $this->view('adminlte/forms-editors');
	}

	public function tablesSimple() 
	{
		$this->config->set('title', 'Tables Simple');

		return $this->view('adminlte/tables-simple');
	}

	public function tablesData() 
	{
		$this->config->set('title', 'Tables Data');

		$this->assets->css->add('dataTables.bootstrap');

		$this->assets->js->add('jquery.dataTables');
		$this->assets->js->add('dataTables.bootstrap');

		return $this->view('adminlte/tables-data');
	}

	public function calendar() 
	{
		$this->config->set('title', 'Calendar');

		$this->assets->css->add('fullcalendar.min');
		$this->assets->css->add('fullcalendar.print', ['media'=>'print']);

		$this->assets->js->add('moment.min');
		$this->assets->js->add('fullcalendar.min');

		return $this->view('adminlte/calendar');
	}

	public function mailBox() 
	{
		$this->config->set('title', 'Mailbox');

		$this->assets->css->add('fullcalendar.min');
		$this->assets->css->add('fullcalendar.print', ['media'=>'print']);

		$this->assets->js->add('moment.min');
		$this->assets->js->add('fullcalendar.min');
		$this->assets->css->add('iCheck/all');
		$this->assets->js->add('iCheck/icheck.min');

		return $this->view('adminlte/mailbox');
	}

	public function mailBoxCompose() 
	{
		$this->config->set('title', 'Mailbox compose');

		$this->assets->css->add('iCheck/all');
		$this->assets->css->add('bootstrap3-wysihtml5.min');

		$this->assets->js->add('iCheck/icheck.min');
		$this->assets->js->add('bootstrap3-wysihtml5.all.min');

		return $this->view('adminlte/mailbox-compose');
	}

	public function mailBoxReadMail() 
	{
		$this->config->set('title', 'Mailbox Read Mail');

		return $this->view('adminlte/mailbox-read-mail');
	}

	public function exampleInvoices() 
	{
		$this->config->set('title', 'Example Invoices');

		return $this->view('adminlte/example-invoices');
	}

	public function error404() 
	{
		$this->config->set('title', '404');

		return $this->view('adminlte/404');
	}

	public function error500() 
	{
		$this->config->set('title', '500');

		return $this->view('adminlte/500');
	}

	public function blank() 
	{
		$this->config->set('title', 'Blank');
		
		return $this->view('adminlte/blank');
	}
}