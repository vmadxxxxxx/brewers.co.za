<?php
$config = new stdClass;

$config->env = 'dev';

// Analytics
$config->ga = 'UA-42464187-1';

// SEO and namimg
$config->site_name = "Brewer's Advertising Data";
$config->site_desc = "Brewer's Advertising Data is a central exchange of information within the advertising and marketing industries of South Africa.";
$config->site_keywords = "Brewers, Brewers Apps, Brewersapps, Brewers Advertising Data, Advertising, Marketing";
$config->current_url = "http://" . $_SERVER["SERVER_NAME"]. $_SERVER["REQUEST_URI"];

// Directory helpers
$config->site_url = "http://" . $_SERVER['HTTP_HOST'];
$config->assets = $config->site_url . '/assets';



if ( $config->env == 'dev' ) {
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
}
