<?php
session_start();
require_once('/home3/theyuxin/public_html/Facebook/autoload.php');

$FBObject = new Facebook\Facebook([
	'app_id' => '555301132080425',
	'app_secret' => '3875f531cf382028cc2d33db870727a3',
	'default_graph_version' => 'v2.10'
]);

$handler = $FBObject -> getRedirectLoginHelper();
?>