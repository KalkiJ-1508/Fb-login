<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '335989434921604',
		'app_secret' => '55aca8cc87ae55482e4be1a99eebb7b3',
		'default_graph_version' => 'v11.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>