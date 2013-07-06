<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);
	
	$dev = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => 'brewer862',
		'db' => 'bds'
	);
	
	$live = array(
		'host' => 'localhost',
		'user' => 'breweedh',
		'pass' => 'urxg739g',
		'db' => 'breweedh_beta'
	);
	
	if ($_SERVER['SERVER_NAME'] == 'localhost') {
		$db_connect = $dev;
		ini_set('display_errors', 'On');
		error_reporting(E_ALL | E_STRICT);
	} else {
		date_default_timezone_set('Africa/Johannesburg');
		$db_connect = $live;
	}
	
	
