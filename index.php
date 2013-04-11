<?php

/**
 * shrtn
 * 
 * @author Simon Sablowski <contact@simsab.net>
 * @date 2013-04-10
 * 
 * shrtn
**/

error_reporting(E_ALL);

function __autoload($class) {
	require_once $class . '.php';
}

include 'configuration.php';

if (isset($_REQUEST['code'])) {
	$urlManager = new UrlManager($configuration);
	if (isset($_GET['code'])) {
		$urlManager->retrieveUrl($_GET['code']);
	} else if (isset($_POST['code']) && isset($_POST['url'])) {
		$urlManager->saveUrl($_POST['code'], $_POST['url']);
	}
}

include 'form.php';