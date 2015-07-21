<?php
namespace Controller;

use Kecik\Controller;

class Margo extends Controller {
	var $app;

	public function __construct($app) {
		parent::__construct();

		$app->config->set('path.assets', 'assets/margo');
		//** CSS
		$app->assets->css->add('bootstrap.min', ['media'=>'screen']);
		$app->assets->css->add('font-awesome.min', ['media'=>'screen']);
		$app->assets->css->add('style', ['media'=>'screen']);
		$app->assets->css->add('responsive', ['media'=>'screen']);
		$app->assets->css->add('animate', ['media'=>'screen']);

		$app->assets->css->add('colors/red', ['title'=> 'red', 'media'=>'screen']);
		$app->assets->css->add('colors/jade', ['title'=> 'jade', 'media'=>'screen']);
		$app->assets->css->add('colors/green', ['title'=> 'green', 'media'=>'screen']);
		$app->assets->css->add('colors/blue', ['title'=> 'blue', 'media'=>'screen']);
		$app->assets->css->add('colors/beige', ['title'=> 'beige', 'media'=>'screen']);
		$app->assets->css->add('colors/cyan', ['title'=> 'cyan', 'media'=>'screen']);
		$app->assets->css->add('colors/orange', ['title'=> 'orange', 'media'=>'screen']);
		$app->assets->css->add('colors/peach', ['title'=> 'peach', 'media'=>'screen']);
		$app->assets->css->add('colors/pink', ['title'=> 'pink', 'media'=>'screen']);
		$app->assets->css->add('colors/purple', ['title'=> 'purple', 'media'=>'screen']);
		$app->assets->css->add('colors/sky-blue', ['title'=> 'sky-blue', 'media'=>'screen']);
		$app->assets->css->add('colors/yellow', ['title'=> 'yellow', 'media'=>'screen']);
		//-- END CSS

		//** JS
		$app->assets->js->add('jquery-2.1.1.min');
		$app->assets->js->add('jquery.migrate');
		$app->assets->js->add('modernizrr');
		$app->assets->js->add('bootstrap.min');
		$app->assets->js->add('jquery.fitvids');
		$app->assets->js->add('owl.carousel.min');
		$app->assets->js->add('nivo-lightbox.min');
		$app->assets->js->add('jquery.isotope.min');
		$app->assets->js->add('jquery.appear');
		$app->assets->js->add('count-to');
		$app->assets->js->add('jquery.textillate');
		$app->assets->js->add('jquery.lettering');
		$app->assets->js->add('jquery.easypiechart.min');
		$app->assets->js->add('jquery.nicescroll.min');
		$app->assets->js->add('jquery.parallax');
		$app->assets->js->add('mediaelement-and-player');
		$app->assets->js->add('script');
		//-- END JS

		$this->app = $app;
	}

	public function index() {
		return $this->view('margo/index');
	}

	public function index2() {
		return $this->view('margo/index2');
	}

	public function index3() {
		return $this->view('margo/index3');
	}

	public function index4() {
		return $this->view('margo/index4');
	}

	public function index5() {
		return $this->view('margo/index5');
	}

	public function index6() {
		return $this->view('margo/index6');
	}

	public function index7() {
		return $this->view('margo/index7');
	}

	public function about() {
		return $this->view('margo/about');
	}

	public function services() {
		return $this->view('margo/services');
	}

	public function right_sidebar() {
		return $this->view('margo/right-sidebar');
	}

	public function left_sidebar() {
		return $this->view('margo/left-sidebar');
	}

	public function error404() {
		return $this->view('margo/404');
	}

	public function tabs() {
		return $this->view('margo/tabs');
	}

	public function buttons() {
		return $this->view('margo/buttons');
	}

	public function action_box() {
		return $this->view('margo/action-box');
	}

	public function lastest_testimonials() {
		return $this->view('margo/lastest-testimonials');
	}

	public function lastest_posts() {
		return $this->view('margo/lastest-posts');
	}

	public function lastest_projects() {
		return $this->view('margo/lastest-projects');
	}

	public function pricing() {
		return $this->view('margo/pricing');
	}

	public function accordion_toggles() {
		return $this->view('margo/accordion-toggles');
	}

	public function portfolio2() {
		return $this->view('margo/portfolio2');
	}

	public function portfolio3() {
		return $this->view('margo/portfolio3');
	}

	public function portfolio4() {
		return $this->view('margo/portfolio4');
	}

	public function single_project() {
		return $this->view('margo/single-project');
	}

	public function blog_right_sidebar() {
		return $this->view('margo/blog-right-sidebar');
	} 

	public function blog_left_sidebar() {
		return $this->view('margo/blog-left-sidebar');
	} 

	public function single_post() {
		return $this->view('margo/single-post');
	}

	public function contact() {
		return $this->view('margo/contact');
	}
}