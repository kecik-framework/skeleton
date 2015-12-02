<?php
namespace Controller;

use Kecik\Controller;

class Corlate extends Controller {
	var $app;

	public function __construct($app) {
		parent::__construct();

		$app->config->set('path.assets', 'assets/corlate');
		//** CSS
		$app->assets->css->add('bootstrap.min');
		$app->assets->css->add('font-awesome.min');
		$app->assets->css->add('animate.min');
		$app->assets->css->add('prettyPhoto');
		$app->assets->css->add('main');
		$app->assets->css->add('responsive');
		//-- END CSS

		//** JS
		$app->assets->js->add('jquery');
		$app->assets->js->add('bootstrap.min');
		$app->assets->js->add('jquery.prettyPhoto');
		$app->assets->js->add('jquery.isotope.min');
		$app->assets->js->add('main');
		$app->assets->js->add('wow.min');
		//-- END JS
		$this->app = $app;
	}

	public function index() {
		$this->config->set('title', 'Home');

		return $this->view('corlate/index');
	}

	public function about() {
		$this->config->set('title', 'About');

		return $this->view('corlate/about');
	}

	public function services() {
		$this->config->set('title', 'Services');

		return $this->view('corlate/services');
	}

	public function portfolio() {
		$this->config->set('title', 'Portfolio');

		return $this->view('corlate/portfolio');
	}

	public function blog_item() {
		$this->config->set('title', 'Blog Single');

		return $this->view('corlate/blog-item');
	}

	public function pricing() {
		$this->config->set('title', 'Pricing');

		return $this->view('corlate/pricing');
	}

	public function error404() {
		$this->config->set('title', '404');

		return $this->view('corlate/404');
	}

	public function shortcodes() {
		$this->config->set('title', 'Shortcodes');

		return $this->view('corlate/shortcodes');
	}

	public function blog() {
		$this->config->set('title', 'Blog');

		return $this->view('corlate/blog');
	}

	public function contact() {
		$this->config->set('title', 'Contact');

		return $this->view('corlate/contact');
	}

	public function sendmail() {
		header('Content-type: application/json');
		$status = array(
			'type'=>'success',
			'message'=>'Thank you for contact us. As early as possible  we will contact you '
		);

	    $name = @trim(stripslashes($_POST['name'])); 
	    $email = @trim(stripslashes($_POST['email'])); 
	    $subject = @trim(stripslashes($_POST['subject'])); 
	    $message = @trim(stripslashes($_POST['message'])); 

	    $email_from = $email;
	    $email_to = 'email@email.com';//replace with your email

	    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

	    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

	    return json_encode($status);
	}
}