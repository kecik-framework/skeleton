<?php
$app->get('/', function() {
	//return $this->container['welcomeController']->index();
	$c = new Controller\Welcome($this);
	return $c->index();
})->template('basic/basic');