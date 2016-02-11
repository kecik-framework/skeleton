<?php
namespace Controllers;

use Kecik\Controller;

class Margo extends Controller 
{
	public function __construct() 
	{
		parent::__construct();

		$this->config->set('path.assets', 'assets/margo');
		//** CSS
		$this->assets->css->add('bootstrap.min', ['media'=>'screen']);
		$this->assets->css->add('font-awesome.min', ['media'=>'screen']);
		$this->assets->css->add('style', ['media'=>'screen']);
		$this->assets->css->add('responsive', ['media'=>'screen']);
		$this->assets->css->add('animate', ['media'=>'screen']);

		$this->assets->css->add('colors/red', ['title'=> 'red', 'media'=>'screen']);
		$this->assets->css->add('colors/jade', ['title'=> 'jade', 'media'=>'screen']);
		$this->assets->css->add('colors/green', ['title'=> 'green', 'media'=>'screen']);
		$this->assets->css->add('colors/blue', ['title'=> 'blue', 'media'=>'screen']);
		$this->assets->css->add('colors/beige', ['title'=> 'beige', 'media'=>'screen']);
		$this->assets->css->add('colors/cyan', ['title'=> 'cyan', 'media'=>'screen']);
		$this->assets->css->add('colors/orange', ['title'=> 'orange', 'media'=>'screen']);
		$this->assets->css->add('colors/peach', ['title'=> 'peach', 'media'=>'screen']);
		$this->assets->css->add('colors/pink', ['title'=> 'pink', 'media'=>'screen']);
		$this->assets->css->add('colors/purple', ['title'=> 'purple', 'media'=>'screen']);
		$this->assets->css->add('colors/sky-blue', ['title'=> 'sky-blue', 'media'=>'screen']);
		$this->assets->css->add('colors/yellow', ['title'=> 'yellow', 'media'=>'screen']);
		//-- END CSS

		//** JS
		$this->assets->js->add('jquery-2.1.1.min');
		$this->assets->js->add('jquery.migrate');
		$this->assets->js->add('modernizrr');
		$this->assets->js->add('bootstrap.min');
		$this->assets->js->add('jquery.fitvids');
		$this->assets->js->add('owl.carousel.min');
		$this->assets->js->add('nivo-lightbox.min');
		$this->assets->js->add('jquery.isotope.min');
		$this->assets->js->add('jquery.appear');
		$this->assets->js->add('count-to');
		$this->assets->js->add('jquery.textillate');
		$this->assets->js->add('jquery.lettering');
		$this->assets->js->add('jquery.easypiechart.min');
		$this->assets->js->add('jquery.nicescroll.min');
		$this->assets->js->add('jquery.parallax');
		$this->assets->js->add('mediaelement-and-player');
		$this->assets->js->add('script');
		//-- END JS
	}

	public function index() 
	{
		$this->config->set('title', 'Home');

		return $this->view('margo/index');
	}

	public function index2() 
	{
		$this->config->set('title', 'Home 2');

		return $this->view('margo/index2');
	}

	public function index3() 
	{
		$this->config->set('title', 'Home 3');
		return $this->view('margo/index3');
	}

	public function index4() 
	{
		$this->config->set('title', 'Home 4');

		return $this->view('margo/index4');
	}

	public function index5() 
	{
		$this->config->set('title', 'Home 5');

		return $this->view('margo/index5');
	}

	public function index6() 
	{
		$this->config->set('title', 'Home 6');

		return $this->view('margo/index6');
	}

	public function index7() 
	{
		$this->config->set('title', 'Home 7');

		return $this->view('margo/index7');
	}

	public function about() 
	{
		$this->config->set('title', 'About');

		return $this->view('margo/about');
	}

	public function services() 
	{
		$this->config->set('title', 'Services');

		return $this->view('margo/services');
	}

	public function rightSidebar() 
	{
		$this->config->set('title', 'Right Sidebar');

		return $this->view('margo/right-sidebar');
	}

	public function leftSidebar() 
	{
		$this->config->set('title', 'Left Sidebar');

		return $this->view('margo/left-sidebar');
	}

	public function error404() 
	{
		$this->config->set('title', '404');

		return $this->view('margo/404');
	}

	public function tabs() 
	{
		$this->config->set('title', 'Tabs');

		return $this->view('margo/tabs');
	}

	public function buttons() 
	{
		$this->config->set('title', 'Buttons');

		return $this->view('margo/buttons');
	}

	public function action_box() 
	{
		$this->config->set('title', 'Action Box');

		return $this->view('margo/action-box');
	}

	public function lastestTestimonials() 
	{
		$this->config->set('title', 'Lastest Testimonials');

		return $this->view('margo/lastest-testimonials');
	}

	public function lastestPosts() 
	{
		$this->config->set('title', 'Lastest Posts');

		return $this->view('margo/lastest-posts');
	}

	public function lastestProjects() 
	{
		$this->config->set('title', 'Lastest Projects');

		return $this->view('margo/lastest-projects');
	}

	public function pricing() 
	{
		$this->config->set('title', 'Pricing');

		return $this->view('margo/pricing');
	}

	public function accordionToggles() 
	{
		$this->config->set('title', 'Toggles');

		return $this->view('margo/accordion-toggles');
	}

	public function portfolio2() 
	{
		$this->config->set('title', 'Portfolio 2');

		return $this->view('margo/portfolio2');
	}

	public function portfolio3() 
	{
		$this->config->set('title', 'Portfolio 3');

		return $this->view('margo/portfolio3');
	}

	public function portfolio4() 
	{
		$this->config->set('title', 'Portfolio 4');

		return $this->view('margo/portfolio4');
	}

	public function singleProject() 
	{
		$this->config->set('title', 'Single Project');

		return $this->view('margo/single-project');
	}

	public function blogRightSidebar() 
	{
		$this->config->set('title', 'Blog Right Sidebar');

		return $this->view('margo/blog-right-sidebar');
	} 

	public function blogLeftSidebar() 
	{
		$this->config->set('title', 'Blog Left Sidebar');

		return $this->view('margo/blog-left-sidebar');
	} 

	public function singlePost() 
	{
		$this->config->set('title', 'Single Post');

		return $this->view('margo/single-post');
	}

	public function contact() 
	{
		$this->config->set('title', 'Contact');

		return $this->view('margo/contact');
	}
}