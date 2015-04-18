<?php
return [
	'DIC' => ['enable' => TRUE],
	'Cookie' => [
		'enable' => FALSE,
		'config' => ['encrypt' => FALSE]
	],
	'Session' => [
		'enable' => FALSE,
		'config' => ['encrypt' => FALSE]
	],
	'Database' => [
		'enable' => FALSE,
		'config' => require("database.php")
	],
	'MVC' => ['enable' => TRUE],
	'Language' => [
		'enable' => FALSE,
		'params' => []
	]
];