<?php
require "../vendor/autoload.php";

$dir_config = dirname(__DIR__.'../').'/protected/config/';

//** Disable this if you run on php version 5.4 is can run on php 5.5
require($dir_config."debug.php");

$config = require($dir_config."config.php");
//$config['path.basepath'] = __DIR__.'/';

$app = new Kecik\Kecik($config);

	$lib_database = $app->config->get('libraries');
	if ($lib_database['Database']['enable'])
		$app->db->connect();

	require($dir_config."container.php");

    /**
     * Remove Comments (//) For enable Authentic Module
     */
    //Kecik\Auth::init();
	require($dir_config."routes_margo.php");

$app->run();