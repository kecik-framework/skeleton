<?php
$app->assets->css->add('bootstrap.min');
$app->assets->css->add('bootstrap-theme.min');
$app->assets->css->add('starter-template');

$app->get('/', function() {
	return $this->container['welcomeController']->index();
	//** Direct without Container
	//$c = new Controller\Welcome($this);
	//return $c->index();
	//-- End
})->template('basic/basic');