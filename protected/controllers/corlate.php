<?php
namespace Controllers;

use Kecik\Controller;

class Corlate extends Controller 
{
	public function __construct() 
	{
		parent::__construct();

		$this->config->set('path.assets', 'assets/corlate');
		//** CSS
		$this->assets->css->add('bootstrap.min');
		$this->assets->css->add('font-awesome.min');
		$this->assets->css->add('animate.min');
		$this->assets->css->add('prettyPhoto');
		$this->assets->css->add('main');
		$this->assets->css->add('responsive');
		//-- END CSS

		//** JS
		$this->assets->js->add('jquery');
		$this->assets->js->add('bootstrap.min');
		$this->assets->js->add('jquery.prettyPhoto');
		$this->assets->js->add('jquery.isotope.min');
		$this->assets->js->add('main');
		$this->assets->js->add('wow.min');
		//-- END JS
	}

	public function index() 
	{
		$this->config->set('title', 'Home');

		return $this->view('corlate/index');
	}

	public function about() 
	{
		$this->config->set('title', 'About');

		return $this->view('corlate/about');
	}

	public function services() 
	{
		$this->config->set('title', 'Services');

		return $this->view('corlate/services');
	}

	public function portfolio() 
	{
		$this->config->set('title', 'Portfolio');

		return $this->view('corlate/portfolio');
	}

	public function blog_item() 
	{
		$this->config->set('title', 'Blog Single');

		return $this->view('corlate/blog-item');
	}

	public function pricing() 
	{
		$this->config->set('title', 'Pricing');

		return $this->view('corlate/pricing');
	}

	public function error404() 
	{
		$this->config->set('title', '404');

		return $this->view('corlate/404');
	}

	public function shortcodes() 
	{
		$this->config->set('title', 'Shortcodes');

		return $this->view('corlate/shortcodes');
	}

	public function blog() 
	{
		$this->config->set('title', 'Blog');

		return $this->view('corlate/blog');
	}

	public function contact() 
	{
		$this->config->set('title', 'Contact');

		return $this->view('corlate/contact');
	}

	public function sendmail() 
	{
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