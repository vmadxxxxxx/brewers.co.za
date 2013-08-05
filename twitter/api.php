<?php
require($_SERVER['DOCUMENT_ROOT'] . "/config.php");

require_once "tmhOAuth.php"; // import the oauth library
require_once "twitter.php"; // the api library

$tweets = Twitter::get(3); // fetches the 10 latest tweets
// If you need to JSON encode the response to serve a Javascript AJAX request
header('Content-Type: application/json');
echo json_encode($tweets);
